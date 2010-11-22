/***********************************************
* Ultimate Fade In Slideshow v2.0- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/

var mygallery=new fadeSlideShow({
    wrapperid: "bannerslideshow", //ID of blank DIV on page to house Slideshow
    dimensions: [340, 218], //width/height of gallery in pixels. Should reflect dimensions of largest image
    imagearray: [
        ["images/slideshow/seq1.png", "", "", ""],
        ["images/slideshow/ned1.png", "", "", ""],
        ["images/slideshow/elog1.png", "", "", ""],
        ["images/slideshow/largenet.png", "", "", ""],
        ["images/slideshow/tcp.png", "", "", ""]        // NO COMMA HERE
    ],
    displaymode: {type:'auto', pause:8000, cycles:0, wraparound:false},
    persist: false, //remember last viewed slide and recall within same session?
    fadeduration: 500, //transition duration (milliseconds)
    descreveal: "ondemand",
    togglerid: ""         // NO COMMA HERE
})


