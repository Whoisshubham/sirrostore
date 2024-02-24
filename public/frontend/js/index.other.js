
var tpj = jQuery;

var revapi56;

if (window.RS_MODULES === undefined) window.RS_MODULES = {};
if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
RS_MODULES.modules["revslider561"] = {
    once: RS_MODULES.modules["revslider561"] !== undefined ? RS_MODULES.modules["revslider561"].once :
        undefined,
    init: function() {
        window.revapi56 = window.revapi56 === undefined || window.revapi56 === null || window.revapi56
            .length === 0 ? document.getElementById("rev_slider_56_1") : window.revapi56;
        if (window.revapi56 === null || window.revapi56 === undefined || window.revapi56.length == 0) {
            window.revapi56initTry = window.revapi56initTry === undefined ? 0 : window.revapi56initTry + 1;
            if (window.revapi56initTry < 20) requestAnimationFrame(function() {
                RS_MODULES.modules["revslider561"].init()
            });
            return;
        }
        window.revapi56 = jQuery(window.revapi56);
        if (window.revapi56.revolution == undefined) {
            revslider_showDoubleJqueryError("rev_slider_56_1");
            return;
        }
        revapi56.revolutionInit({
            revapi: "revapi56",
            DPR: "dpr",
            sliderLayout: "fullwidth",
            visibilityLevels: "1400,1280,991,480",
            gridwidth: "1550,1100,800,480",
            gridheight: "825,500,400,730",
            lazyType: "smart",
            spinner: "spinner7",
            perspective: 600,
            perspectiveType: "global",
            spinnerclr: "#000000",
            editorheight: "825,500,400,730",
            responsiveLevels: "1400,1280,991,480",
            progressBar: {
                disableProgressBar: true
            },
            navigation: {
                wheelCallDelay: 1000,
                onHoverStop: false,
                touch: {
                    touchenabled: true,
                    touchOnDesktop: true
                },
                bullets: {
                    enable: true,
                    tmp: "",
                    style: "nooni",
                    h_align: "right",
                    v_align: "center",
                    h_offset: 40,
                    v_offset: 0,
                    direction: "vertical",
                    space: 22
                }
            },
            scrolleffect: {
                set: true,
                blur: true,
                multiplicator: 1.3,
                multiplicator_layers: 1.3
            },
            viewPort: {
                global: true,
                globalDist: "-200px",
                enable: false
            },
            fallbacks: {
                allowHTML5AutoPlayOnAndroid: true
            },
        });

        revapi56.bind("revolution.slide.onafterswap", function(e, data) {
            console.log(data.currentslide);
        });            }
} // End of RevInitScript

if (window.RS_MODULES.checkMinimal !== undefined) {
    window.RS_MODULES.checkMinimal();
};