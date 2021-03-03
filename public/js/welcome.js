$(function () {
    $('[data-toggle="tooltip"]').tooltip()
}), 

$(function () {
    $("#sub").on("show.bs.collapse", function () {
        $("#sub .collapse").collapse("hide")
    })
}),

$(function () {
    $("#myList .col-sm a").on("click", function () {
        $("#myList .col-sm a").removeClass("active")
    })
});

var isMobile = false; //initiate as false
// device detection
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) { 
    isMobile = true;
}

if(isMobile){
    $(".category-tab").addClass("mb-3");   //if device is mobile then add margin below the category tabs
}

var pswpElement = document.querySelectorAll(".pswp")[0],
    dovsanTort = [{
        src: "https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/145186333_148755163629909_1744257870923970877_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=109&_nc_ohc=36Fa3LV3Z3MAX8O_ht0&oh=2cc204e819111988f1b86a1ffb57bbc9&oe=60640B96",
        w: 1200,
        h: 900
    }, {
        src: "https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/144862428_3722423237852481_6797032047131703857_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=109&_nc_ohc=lYwrnwl7T4IAX_zADrw&oh=a0816081f0c1ff2bada897bc9342733b&oe=6065D60D",
        w: 1200,
        h: 900
    }, {
        src: "https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/145019760_3619017888134833_676538502798136703_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=mJDFrmrdV2EAX8dPenj&oh=5140f326c23dd7c3dc7059955000b321&oe=60658671",
        w: 1200,
        h: 900
    }],
    spartakTort = [{
        src: "https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/137625644_159030845989178_7375901958313223222_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=102&_nc_ohc=KngtMOWqgGwAX8lmUiB&oh=70c88279014b5755c88a57e5a0020cd6&oe=606576AD",
        w: 1200,
        h: 900
    }, {
        src: "https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/135845921_895456321206358_1933825573733483323_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=110&_nc_ohc=jIQ1sHSANsgAX9lQgTf&oh=8d9d1b769a0bd0e6e551938d3fe3f25f&oe=6063BF68",
        w: 1200,
        h: 900
    }, {
        src: "https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/137565634_1070336556773339_5610420559532540654_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=MVhIfL8Vox0AX_zxYt6&oh=c4ae451d884cf6691186796c9233f267&oe=60651630",
        w: 1200,
        h: 900
    }],
    yeniIlTort2021 = [{
        src: "https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/134579862_480219392943041_6827134145626250265_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=105&_nc_ohc=DyRM7wdzwkAAX-HwEQY&oh=d7714fdf08c0aa959b99f1e1a6af7d5e&oe=6066841E",
        w: 1200,
        h: 900
    }, {
        src: "https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/135014311_224551285805359_5392716319048949676_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=107&_nc_ohc=RePeqS3Ka64AX9-XPPb&oh=e7b02cb51289550bb53b3fdf0ab1d34a&oe=6065375B",
        w: 1200,
        h: 900
    }, {
        src: "https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/134848153_733211983983114_1195706574040832238_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=106&_nc_ohc=0iAXWGxNtIcAX8--5ls&oh=c4c51fe2096c3dd2c9b3b998706e5c1c&oe=606385E9",
        w: 1200,
        h: 900
    }],
    ekler = [{
        src: "https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/e35/154780182_275626787565239_8278515977738468395_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=tUAH4UMC_NwAX_QLjad&oh=2dc3a74f77d47370f06968bbe5d021f2&oe=6062BDB9",
        w: 1200,
        h: 900
    }, {
        src: "https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s750x750/153770712_256161675995333_102534869998269649_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=105&_nc_ohc=72xSgkBZ0WsAX9F0aXb&oh=12dc812ca6f4886495dab3f325f0bc70&oe=60642A5E",
        w: 1200,
        h: 900
    }, {
        src: "https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s750x750/155209375_890380278414556_943785305562708132_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=104&_nc_ohc=6Wx2qLI-1AIAX8UrMYv&oh=76b9342b2d4ab168a8a95b2ba7ff5df9&oe=60648DC2",
        w: 1200,
        h: 900
    }],
    gilemeyveliPiroq = [{
        src: "https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/127958561_221453006079336_2123881493657455603_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=100&_nc_ohc=DD2DvjM-6TIAX8FgMI_&oh=b9c58df7f97625895dd4e34a5f174ad3&oe=6063AF14",
        w: 1200,
        h: 900
    }, {
        src: "https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/127906846_815943048968421_7186496791059102754_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=109&_nc_ohc=VX4HLQzZnvAAX9Q638_&oh=b363b808d3002d6a7b7054f49684db41&oe=6065267E",
        w: 1200,
        h: 900
    }, {
        src: "https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/128049571_3156402614465557_2805947999735577138_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=vex10Si7JtAAX-Z4Acz&oh=575aec48b3889e6feb4f8bbeec1a534e&oe=60651024",
        w: 1200,
        h: 900
    }],
    almaliPiroq = [{
        src: "https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/122656269_989157491566097_7300101664886747461_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=105&_nc_ohc=HWyis_tIyqAAX9xVDTh&oh=8da29485cd771b997db96c6bca6c0d24&oe=6063D1D3",
        w: 1200,
        h: 900
    }, {
        src: "https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/122438469_2466796986950030_5051267019479189598_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=102&_nc_ohc=MVCqYqoHMdEAX_3mvGI&oh=5b8fa08be7cc9467f13f8c016861e3cd&oe=6065D670",
        w: 1200,
        h: 900
    }, {
        src: "https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/122536007_390883175601373_1322706514223597349_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=Hca_UCChYmYAX--5t9N&oh=1e6ccbbe9b20ac2d8d36fbe32687156f&oe=60654A19",
        w: 1200,
        h: 900
    }],
    portagalChCake = [{
        src: "https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/138601371_711614296206496_8391571245981885471_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=104&_nc_ohc=EuolG12Kfh0AX8vJDg5&oh=fb479de441762d1050d61b91565e0efe&oe=6064940A",
        w: 1200,
        h: 900
    }, {
        src: "https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/135823029_1323807404666592_7245291090936575906_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=100&_nc_ohc=-jkvrHq0WdUAX_eTdjn&oh=39de68fe862761668014007f24e3db7f&oe=60658F4A",
        w: 1200,
        h: 900
    }, {
        src: "https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/138925799_413962473357020_7753938078352468986_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=9Gf3HjmQHksAX88QecB&oh=121162071d347cdc6ef22cc79ce5e154&oe=6064DFA4",
        w: 1200,
        h: 900
    }],
    sokoladliChCake = [{
        src: "https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/131258111_816844822194472_8076183420921678746_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=104&_nc_ohc=6qD0zbUeirwAX8S-u1A&oh=b666541be692dab6351766f7b7e2ea1e&oe=606415B0",
        w: 1200,
        h: 900
    }, {
        src: "https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/130708962_233594788252117_8249358222232607124_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=HKWVjVHLP3EAX8a4o3d&oh=f574b47b801eb5576423b6eca6960c4d&oe=60652FAE",
        w: 1200,
        h: 900
    }, {
        src: "https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/130881918_302356597770307_2174981890368712361_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=107&_nc_ohc=I73YhR7ckFIAX99uzJL&oh=c59fe5968c81ea486a1e0f5887e0110d&oe=6065023E",
        w: 1200,
        h: 900
    }, {
        src: "https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/131284211_371793073920793_2253165777872053860_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=3Z2c0OezvNYAX8Hd8wT&oh=19340ccdc6f43289980cd1b2d0bfa2f1&oe=60665C2F",
        w: 1200,
        h: 900
    }],
    ciyelekliChCake = [{
        src: "https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/122682811_287265682365388_4171276271498622728_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=104&_nc_ohc=VBAOpBXgF-MAX-sYYNG&oh=f35195f45367b2f1cc5805cc3ce179b7&oe=6063CB25",
        w: 1200,
        h: 900
    }, {
        src: "https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/122604804_767769687106704_7569302046869733136_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=100&_nc_ohc=Su5Dn_x_eggAX_B_pzj&oh=cc6e5d5c722bac443a6e67420769defa&oe=60665CE2",
        w: 1200,
        h: 900
    }, {
        src: "https://instagram.fgyd6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/122436548_1097166324086775_4948032280298962664_n.jpg?tp=1&_nc_ht=instagram.fgyd6-1.fna.fbcdn.net&_nc_cat=103&_nc_ohc=NC6kOLETq1sAX8JJOzq&oh=a3cd703fcee26d6c2884d6ea03afff16&oe=6066FA67",
        w: 1200,
        h: 900
    }],
    options = {
        index: 0
    };
$(".dovsanTort").on("click", function () {
    new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, dovsanTort, options).init()
}), $(".spartakTort").on("click", function () {
    new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, spartakTort, options).init()
}), $(".yeniIlTort2021").on("click", function () {
    new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, yeniIlTort2021, options).init()
}), $(".ekler").on("click", function () {
    new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, ekler, options).init()
}), $(".gilemeyveliPiroq").on("click", function () {
    new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, gilemeyveliPiroq, options).init()
}), $(".almaliPiroq").on("click", function () {
    new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, almaliPiroq, options).init()
}), $(".portagalChCake").on("click", function () {
    new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, portagalChCake, options).init()
}), $(".sokoladliChCake").on("click", function () {
    new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, sokoladliChCake, options).init()
}), $(".ciyelekliChCake").on("click", function () {
    new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, ciyelekliChCake, options).init()
});
