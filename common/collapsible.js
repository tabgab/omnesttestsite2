function locationHashChanged() {
  $(location.hash).addClass("expanded");
}

$(document).ready(function() {
  $(":header[id]").click(function(event) {
    var target = $(event.target).attr("id");
    $("h2[id='"+target+"']").toggleClass("expanded");
  });

  $("a[toggleAll]").click(function(){
    $(this).toggleClass("expanded");
    if ($(this).hasClass("expanded")) {
      $(this).html("Collapse all");
      $("h2[id]").addClass("expanded");
    } else {
      $(this).html("Expand all");
      $("h2[id]").removeClass("expanded");
    }
  })

  window.addEventListener("hashchange", locationHashChanged, false);
  locationHashChanged();
});

