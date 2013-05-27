/***********************************************
* Ultimate Fade In Slideshow v2.0- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/

var mygallery=new fadeSlideShow({
    wrapperid: "bannerslideshow", //ID of blank DIV on page to house Slideshow
    dimensions: [340, 218], //width/height of gallery in pixels. Should reflect dimensions of largest image
    imagearray: [
        ["images/slideshow/airport.jpg", "", "", ""],
        ["images/slideshow/cell-tower.jpg", "", "", ""],
        ["images/slideshow/mobile.jpg", "", "", ""],
        ["images/slideshow/network-hub.jpg", "", "", ""],
        ["images/slideshow/satellite-antenna.jpg", "", "", ""],
        ["images/slideshow/surveillance.jpg", "", "", ""],
        ["images/slideshow/system-on-chip.jpg", "", "", ""]        // NO COMMA HERE
    ],
    displaymode: {type:'auto', pause:1000, cycles:0, wraparound:false},
    persist: false, //remember last viewed slide and recall within same session?
    fadeduration: 500, //transition duration (milliseconds)
    descreveal: "ondemand",
    togglerid: ""         // NO COMMA HERE
})


