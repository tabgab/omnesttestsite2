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

