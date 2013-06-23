
// Usage: 
// - specify a toggle="toggleId" attribute on any element you want to turn into a toggle
//   (toggleId is a unque identifier on the page) use toggle="all" to toggle all elements 
//   on the page at the same time.
// - specify class="toggle-expanded toggleId" for elements that should be visible in expanded state
// - specify class="toggle-collapsed toggleId" for elements that should be visible in collapsed state
// - specify class="toggle-slide toggleId" similar to the toggle-expanded, but this one animates the element
//
// TODO: - the toggle all function is a bit strange if some of the elements are expanded while others collapsed.
//         Probaly should first expand all the element (and not toggle)
//       - It might be better to hide/show the expanded/colapsed elements only at the end of the sliding animation
//
$(document).ready(function(){
  $(".toggle-expanded,.toggle-slide").css("display","none");
  $("[toggle]").click(function(event){
    var target = $(event.target).attr("toggle");
    var selector = (target === "" || target === "all") ? "" : "."+target;
    $(".toggle-slide"+selector).slideToggle(300);
    $(".toggle-expanded"+selector).toggle();
    $(".toggle-collapsed"+selector).toggle();
  });
});

// ------------------

function setupFolding()
{
        // get all collapsible divs
        var divs = document.getElementsByTagName("div");

        // go through all divs
        for (var i=0; i<divs.length; i++)
        {
                var div = divs[i];
                if (div.className != "collapsible")
                        continue;
                div.style.maxHeight = "50px";
                div.style.overflow = "hidden";

                var linkDiv = document.createElement('div');
                linkDiv.innerHTML = '<center><a href="javascript:;" onClick="openPanel(this);return false;">---More---</a></center>';
                div.parentNode.insertBefore(linkDiv, div.nextSibling);
        }
}

function openPanel(moreLink)
{
        var linkDiv = moreLink.parentNode.parentNode;
        var panelDiv = linkDiv.previousSibling;
        panelDiv.style.maxHeight = "none";
        linkDiv.innerHTML = '<center><a href="javascript:;" onClick="closePanel(this);return false;">---Less---</a></center>';
}

function closePanel(moreLink)
{
        var linkDiv = moreLink.parentNode.parentNode;
        var panelDiv = linkDiv.previousSibling;
        panelDiv.style.maxHeight = "50px";
        linkDiv.innerHTML = '<center><a href="javascript:;" onClick="openPanel(this);return false;">---More---</a></center>';
}

if (window.addEventListener)
{
        // the "proper" way
        window.addEventListener("load", setupFolding, false);
}
else if (window.attachEvent)
{
        // the IE way
        window.attachEvent("onload", setupFolding);
}

