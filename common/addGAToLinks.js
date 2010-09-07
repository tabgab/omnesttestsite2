	/* content will be tracked as
		/ext/url-of-external-site
		/files/filename
	*/
function addGoogleAnalyticsToLinks() {
	var as = document.getElementsByTagName("a");
	var extTrack = ["omnest.com"];
	// List of local sites that should not be treated as an outbound link.
	// Include at least your own domain here (without www). Own domain MUST be the first entry.
	
	var extDoc = [".tgz",".zip",".pdf",".exe",".iso"];
	//List of file extensions on your site. Add/edit as you require
	
	for(var i=0; i<as.length; i++) 
	{
		var flag = 0;
		var tmp = as[i].getAttribute("onclick");

		
		// Tracking outbound links off site - not the GATC
		for (var j=0; j<extTrack.length; j++) 
		{
			if (as[i].href.indexOf(extTrack[j]) == -1 && as[i].href.indexOf('google-analytics.com') == -1 ) 
			{
				flag++;
			}
		}

		if (flag == extTrack.length && as[i].href.indexOf("mailto:") == -1)
		{
			as[i].onclick = function()
			{ 
				var splitResult = this.href.split("//");
				_gaq.push(['_trackPageview', '/ext/' +splitResult[1]]);
				// alert("ext/" +splitResult[1]);
			};
		}

		// Tracking electronic documents on the local domain
		for (var j=0; j<extDoc.length; j++) 
		{
			if (as[i].href.indexOf(extTrack[0]) != -1 && as[i].href.indexOf(extDoc[j]) != -1) 
			{
				as[i].onclick = function()
				{ 
					var splitResult = this.href.split(extTrack[0]);
					_gaq.push(['_trackPageview', '/files' + splitResult[1]]);
					// alert("files" +splitResult[1]);
				};
			}
		}
	}
}

