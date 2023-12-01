// HAMBURGER MENU
let hamburger = document.querySelector('.header__hamburger');
hamburger.addEventListener("click", function () {
    document.body.classList.toggle('menu-open');
});



// FADE UP EFFECT
let fadeUp = document.querySelector('.fade-up');

if (fadeUp) {

    ScrollTrigger.batch(".fade-up", {
        start: "top 80%",
        onEnter: (elements, triggers) => {
            gsap.to(elements, { opacity: 1, stagger: 0.3, y: 0, duration: 1.5, ease: Power2.easeOut });
            // console.log(elements.length, "elements entered");
        },

        // onLeave: (elements, triggers) => {
        //     gsap.to(elements, { opacity: 0, stagger: 0.15, y: 18 });
        //     // console.log(elements.length, "elements left");
        // }

    });

}



// FADE IN EFFECT 5sec delay
function fade_In5() {

    let fadeIn = document.querySelector('.fade-in');


    if (fadeIn) {

        let tl = gsap.timeline();
        tl.to(".fade-in", {
            opacity: 1,
            y: 0,
            duration: 1,
            stagger: 0.3,
            ease: Power2.easeOut
        }, "5") // sec before to start animation //
    }
}


// FADE IN EFFECT 1sec delay
function fade_In() {

    let fadeIn = document.querySelector('.fade-in');


    if (fadeIn) {

        let tl = gsap.timeline();
        tl.to(".fade-in", {
            opacity: 1,
            y: 0,
            duration: 1,
            stagger: 0.3,
            ease: Power2.easeOut
        }, "1") // sec before to start animation //
    }
}





//  ANIMATION 01 - SCROLLING PAGE

function videoScrollAnimation01() {

    let containerVideo = document.getElementById('container-video');
    if (containerVideo){
        containerVideo.remove();
    }


    // let vid = document.getElementById("myVideo");
    let video = document.querySelector(".cover__video");
    if (video){
        video.setAttribute("src", "../video/videocover1.mp4");
        video.play();
        fade_In5();
    
        document.addEventListener('scroll', function () {
    
            // console.log(window.scrollY);
    
            // case 1: header black
            // if ((window.scrollY  > 650) && (window.scrollY  < 750)) {
    
            // case 2: header transparent 
            if ((window.scrollY > 900) && (window.scrollY < 1000)) {
    
                let fadeIn = document.querySelector('.fade-in');
                fadeIn.style.opacity = "0";
                fadeIn.style.transform = "translate(0px,16px)";
    
                video.play();
                fade_In5();
            }
    
        })
    }

}



//   ANIMATION 2 - SCROLLING VIDEO

function videoScrollAnimation02() {
    fade_In();

    // console.clear();
    /* The encoding is super important here to enable frame-by-frame scrubbing. */

    // ffmpeg -i ~/Downloads/Toshiba\ video/original.mov -movflags faststart -vcodec libx264 -crf 23 -g 1 -pix_fmt yuv420p output.mp4
    // ffmpeg -i ~/Downloads/Toshiba\ video/original.mov -vf scale=960:-1 -movflags faststart -vcodec libx264 -crf 20 -g 1 -pix_fmt yuv420p output_960.mp4

    let video = document.querySelector(".cover__video");
    video.setAttribute("src", "../video/videocover2.mp4");
    video.currentSrc = video.src; 
    // alert(video.currentSrc);
   

    if (video) {
        let src = video.currentSrc || video.src;

        console.log(video, src);

        /* Make sure the video is 'activated' on iOS */
        function once(el, event, fn, opts) {
            var onceFn = function (e) {
                el.removeEventListener(event, onceFn);
                fn.apply(this, arguments);
            };
            el.addEventListener(event, onceFn, opts);
            return onceFn;
        }

        once(document.documentElement, "touchstart", function (e) {
            video.load();
            video.play();
            video.pause();
        });

        /* ---------------------------------- */
        /* Scroll Control! */

        gsap.registerPlugin(ScrollTrigger);

        let tl = gsap.timeline({
            defaults: { duration: 1 },
            scrollTrigger: {
                trigger: "#container-video",
                start: "top top",
                end: "bottom bottom",
                // markers: true,
                scrub: true
            }
        });

        once(video, "loadedmetadata", () => {
            tl.fromTo(
                video,
                {
                    currentTime: 0
                    // currentTime: video.duration || 1

                },
                {
                    // currentTime: 0
                    currentTime: video.duration || 1
                }
            );
        });

        /* When first coded, the Blobbing was important to ensure the browser wasn't dropping previously played segments, but it doesn't seem to be a problem now. Possibly based on memory availability? */
        setTimeout(function () {
            if (window["fetch"]) {
                fetch(src)
                    .then((response) => response.blob())
                    .then((response) => {
                        var blobURL = URL.createObjectURL(response);

                        var t = video.currentTime;
                        once(document.documentElement, "touchstart", function (e) {
                            video.load();
                            video.play();
                            video.pause();
                        });

                        video.setAttribute("src", blobURL);
                        video.currentTime = t + 0.01;
                    });
            }
        }, 1000);

    }
} 




videoScrollAnimation01();

// videoScrollAnimation02();



// GOOGLE MAPS
function initMap() {

    // set location : nasa jpl, pasadena, CA
    var position = { lat: 34.1932252, lng: -118.157834 };

    // create map
    var map = new google.maps.Map(document.getElementById('map'),{
        center: position,
        zoom: 8,
        mapTypeId: 'terrain'
    }); 


    // create marker 
    var myMarker = new google.maps.Marker({
        position: position,
        map: map
    }); // marker


    // create Circle
    var circleOptions = {
        center: position,
        map: map,
        strokeColor: "#FF0000",
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: "#FF0000",
        fillOpacity: 0.35,
        radius: 40000
    };
    var myCircle = new google.maps.Circle(circleOptions); // circle

}

// let mapId = document.querySelector('#map');
let mapId = document.getElementById('map');


if (mapId) {
    window.initMap = initMap();

}

