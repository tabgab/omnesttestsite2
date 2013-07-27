/***********************************************
* Ultimate Fade In Slideshow v2.0- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/

var mygallery=new fadeSlideShow({
    wrapperid: "bannerslideshow", //ID of blank DIV on page to house Slideshow
    dimensions: [340, 218], //width/height of gallery in pixels. Should reflect dimensions of largest image
    imagearray: [
        ["images/slideshow/ethernet-switch.jpg", "", "", ""],
        ["images/slideshow/laptops.jpg", "", "", ""],
        ["images/slideshow/datacenter.jpg", "", "", ""],
        ["images/slideshow/optical-switch.jpg", "", "", ""],
        ["images/slideshow/satellite.jpg", "", "", ""],
        ["images/slideshow/wireless-tower-sign.jpg", "", "", ""],
        ["images/slideshow/satellite-dishes.jpg", "", "", ""],

        //TODO:
        ["tmp/slideshow/selected/sensornodes3.png", "", "", ""],
        ["tmp/slideshow/selected/sensornodes6.png", "", "", ""],
        ["tmp/slideshow/selected/sensornodes5.png", "", "", ""],
        ["tmp/slideshow/selected/vehicular-network.png", "", "", ""],
        ["tmp/slideshow/selected/dreamstime-telecom-tower-image30744076.jpg", "", "", ""],
        ["tmp/slideshow/selected/dreamstime-telecommunication-towers-view-from-below-thumb24481352.jpg", "", "", ""],
        ["tmp/slideshow/selected/dreamstime-telecommunications-towers-thumb24867459.jpg", "", "", ""],
        ["tmp/slideshow/selected/dreamstime-image23481550.jpg", "", "", ""],
        ["tmp/slideshow/selected/wsn-yellowstone-terrain-1.png", "", "", ""],
        ["tmp/slideshow/selected/wsn-yellowstone-terrain-2.png", "", "", ""]

/*
        ["images/slideshow/seq1.png", "", "", ""],
        ["images/slideshow/ned1.png", "", "", ""],
        ["images/slideshow/elog1.png", "", "", ""],
        ["images/slideshow/largenet.png", "", "", ""],
        ["images/slideshow/tcp.png", "", "", ""]        // NO COMMA HERE
*/
/*
        ["images/slideshow/cell-tower.jpg", "", "", ""],
        ["images/slideshow/mobile.jpg", "", "", ""],
        ["images/slideshow/network-hub.jpg", "", "", ""],
        ["images/slideshow/satellite-antenna.jpg", "", "", ""],
        ["images/slideshow/surveillance.jpg", "", "", ""],
        ["images/slideshow/system-on-chip.jpg", "", "", ""]        // NO COMMA HERE
*/
    ],
    displaymode: {type:'auto', pause:2000, cycles:0, wraparound:false},
    persist: false, //remember last viewed slide and recall within same session?
    fadeduration: 500, //transition duration (milliseconds)
    descreveal: "ondemand",
    togglerid: ""         // NO COMMA HERE
})


