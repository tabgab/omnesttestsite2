/******************************************************************************
 * This tutorial is based on the work of Martin Hawksey twitter.com/mhawksey  *
 * But has been simplified and cleaned up to make it more beginner friendly   *
 * All credit still goes to Martin and any issues/complaints/questions to me. *
 ******************************************************************************/

// if you want to store your email server-side (hidden), uncomment the next line
var NOTIFICATION_ADDRESS = "info@omnest.com"; // where to send the admin notifications
var EMAIL_FROM = "info@omnest.com"; // the 'from' field of the sent emails. This address *MUST* be added as an alias in the owner's gmail application

var contactResponseBody = "Dear Sir / Madam,\n\
\n\
This is an automatically generated message to let you know that we have received and processed your request. You will be hearing from us shortly. Thank you for your interest in OMNEST.\n\
\n\
With best regards,\n\
The OMNEST Team"

var evalResponseBody = "Dear Sir / Madam,\n\
\n\
This is an automatically generated message in response to your request to download and evaluate OMNEST.\n\
\n\
Thank you for your interest in the OMNEST Simulation Framework. You can download the evaluation version of the software from the link below. Our normal evaluation term is 30 days, during which we will be happy to support you via e-mail. If you have questions regarding the software, please write an e-mail to eval@omnest.com\n\
\n\
Download link: https://omnest.com/download-eval.php?id=2bef15153a2f7c8\n\
\n\
With best regards,\n\
The OMNEST Team"

// spit out all the keys/values from the form in text for email
// uses an array of keys if provided or the object to determine field order
function formatMailBody(obj, order) {
  var result = "";
  if (!order) {
    order = Object.keys(obj);
  }

  // loop over all keys in the ordered form data
  for (var idx in order) {
    var key = order[idx];
    result += key + ": " + obj[key] + "\n";
  }
  return result; // once the looping is done, `result` will be one long string to put in the email body
}

// sanitize content from the user - trust no one
// ref: https://developers.google.com/apps-script/reference/html/html-output#appendUntrusted(String)
function sanitizeInput(rawInput) {
   var placeholder = HtmlService.createHtmlOutput(" ");
   placeholder.appendUntrusted(rawInput);

   return placeholder.getContent();
}

function doPost(e) {

  try {
    Logger.log(e); // the Google Script version of console.log see: Class Logger
    record_data(e);

    // shorter name for form data
    var mailData = e.parameters;

    // names and order of form elements (if set)
    var orderParameter = mailData.formDataNameOrder;
    var dataOrder;
    if (orderParameter) {
      dataOrder = JSON.parse(orderParameter);
    }

    // determine recepient of the email
    // if you have your email uncommented above, it uses that `NOTIFICATION_ADDRESS`
    // otherwise, it defaults to the email provided by the form's data attribute
    var sendEmailTo = (typeof NOTIFICATION_ADDRESS !== "undefined") ? NOTIFICATION_ADDRESS : mailData.formGoogleSendEmail;
    var isContact = (String(mailData.formGoogleSheetName) === "contacts");

    // notification
    if (sendEmailTo) {
      GmailApp.sendEmail(String(sendEmailTo),
                         (isContact ? "OMNEST web contact form":"OMNEST Evaluation Request") + " on behalf of " + mailData.name,
                         formatMailBody(mailData, dataOrder),
                         {
                           name: "OMNEST - " + mailData.formGoogleSheetName,
                           from: EMAIL_FROM,
                           replyTo: String(mailData.email)
                         });
    }

    // user acknowledgement
    if (mailData.email) {
      GmailApp.sendEmail(mailData.email,
                         isContact ? "Contacting OMNEST" : "OMNEST Evaluation Download",
                         (isContact ? contactResponseBody : evalResponseBody),
                         { name: "OMNEST", from: EMAIL_FROM });
    }

    return ContentService    // return json success results
          .createTextOutput(
            JSON.stringify({"result":"success",
                            "data": JSON.stringify(e.parameters) }))
          .setMimeType(ContentService.MimeType.JSON);
  } catch(error) { // if error return this
    Logger.log(error);
    return ContentService
          .createTextOutput(JSON.stringify({"result":"error", "error": error}))
          .setMimeType(ContentService.MimeType.JSON);
  }
}


/**
 * record_data inserts the data received from the html form submission
 * e is the data received from the POST
 */
function record_data(e) {
  var lock = LockService.getDocumentLock();
  lock.waitLock(30000); // hold off up to 30 sec to avoid concurrent writing

  try {
    Logger.log(JSON.stringify(e)); // log the POST data in case we need to debug it

    // select the 'responses' sheet by default
    var doc = SpreadsheetApp.getActiveSpreadsheet();
    var sheetName = e.parameters.formGoogleSheetName || "contacts";
    var sheet = doc.getSheetByName(sheetName);

    var oldHeader = sheet.getRange(1, 1, 1, sheet.getLastColumn()).getValues()[0];
    var newHeader = oldHeader.slice();
    var fieldsFromForm = getDataColumns(e.parameters);
    var row = [new Date()]; // first element in the row should always be a timestamp

    // loop through the header columns
    for (var i = 1; i < oldHeader.length; i++) { // start at 1 to avoid Timestamp column
      var field = oldHeader[i];
      var output = getFieldFromData(field, e.parameters);
      row.push(output);

      // mark as stored by removing from form fields
      var formIndex = fieldsFromForm.indexOf(field);
      if (formIndex > -1) {
        fieldsFromForm.splice(formIndex, 1);
      }
    }

    // set any new fields in our form
    for (var i = 0; i < fieldsFromForm.length; i++) {
      var field = fieldsFromForm[i];
      var output = getFieldFromData(field, e.parameters);
      row.push(output);
      newHeader.push(field);
    }

    // more efficient to set values as [][] array than individually
    var nextRow = sheet.getLastRow() + 1; // get next row
    sheet.getRange(nextRow, 1, 1, row.length).setValues([row]);

    // update header row with any new data
    if (newHeader.length > oldHeader.length) {
      sheet.getRange(1, 1, 1, newHeader.length).setValues([newHeader]);
    }
  }
  catch(error) {
    Logger.log(error);
  }
  finally {
    lock.releaseLock();
    return;
  }

}

function getDataColumns(data) {
  return Object.keys(data).filter(function(column) {
    return !(column === 'formDataNameOrder' || column === 'formGoogleSheetName' || column === 'formGoogleSendEmail' || column === 'honeypot');
  });
}

function getFieldFromData(field, data) {
  var values = data[field] || '';
  var output = values.join ? values.join(', ') : values;
  return output;
}
