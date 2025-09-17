$(document).ready(function () {
    // Left side (content)
    $('.slides').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        autoplay: true,
        autoplaySpeed: 2000,
        asNavFor: '.slider'
    });

// Right side (cards/images)
$('.slider').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    asNavFor: '.slides',
    arrows: false,
    dots: false,
    centerMode: false,
    focusOnSelect: true,
    responsive: [
        {
            breakpoint: 768, // tablet/mobile breakpoint
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});


});

document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', function (e) {
        e.preventDefault();
        let target = document.querySelector(this.getAttribute('href'));
        if (target) {
            gsap.to(window, {
                scrollTo: {
                    y: target,
                    offsetY: 80 // agar navbar sticky hai
                },
                duration: 1
            });
        }
    });
});

gsap.registerPlugin(ScrollTrigger, ScrollSmoother, ScrollToPlugin);

// Smooth scrolling
ScrollSmoother.create({
    wrapper: "#smooth-wrapper",
    content: "#smooth-content",
    smooth: 1.5,
    effects: true
});

// ================== HERO TIMELINE ==================



const preloaderTL = gsap.timeline({
    onComplete: initAnimations // Preloader ke baad call main animation
});

 
// Dots loader
preloaderTL.to(".dot", {
    opacity: 1,
    y: -10,
    repeat: 3,
    yoyo: true,
    stagger: 0.2,
    duration: 0.4,
    ease: "power1.inOut"
}, "+=0.2");

// Small logo full screen expand
preloaderTL.to(".small-logo", {
    scale: 100,
    x:-20,
    duration: 1,
    ease: "power3.inOut"
}, "+=0.3");

// Preloader fade out
preloaderTL.to(".preloader", {
    opacity: 0,
    duration: 0.8,
    ease: "power3.inOut",
    onComplete: () => {
        document.querySelector(".preloader").style.display = "none";
    }
}, "-=0.3");

function initAnimations() {
const heroTL = gsap.timeline();
heroTL
    .from(".home_banner h6", { y: 30, opacity: 0, duration: 0.6, ease: "power3.out" })
    .from(".home_banner h1", { scale: 0.8, opacity: 0, duration: 0.8, ease: "back.out(1.7)" }, "-=0.4")
    .from(".home_banner .col-md-12 p", { y: 30, opacity: 0, duration: 0.6 }, "-=0.3")
    .from(".home_banner .main-btn", { scale: 0, opacity: 0, duration: 0.6, ease: "back.out(1.7)" }, "-=0.2");

// ================== LEFT CARDS ==================
const leftTL = gsap.timeline();
document.querySelectorAll(".left-card .card-body > div").forEach((item) => {
    let icon = item.querySelector(".icon i, .icon img");
    let heading = item.querySelector("h5");
    let para = item.querySelector("p");

    leftTL
        .from(icon, { scale: 0, opacity: 0, duration: 0.4, ease: "back.out(1.7)" })
        .from(heading, { y: 20, opacity: 0, duration: 0.4, ease: "power3.out" }, "-=0.2")
        .from(para, { y: 20, opacity: 0, duration: 0.4, ease: "power3.out" }, "-=0.2");
});

// ================== RIGHT CARDS ==================
const rightTL = gsap.timeline();
document.querySelectorAll(".right-card .card-body > div").forEach((item) => {
    let icon = item.querySelector(".icon i, .icon img");
    let heading = item.querySelector("h5");
    let para = item.querySelector("p");
    let lis = item.querySelectorAll("li");

    rightTL
        .from(icon, { scale: 0, opacity: 0, duration: 0.4, ease: "back.out(1.7)", delay: 0.2 })
        .from(heading, { y: 20, opacity: 0, duration: 0.4, ease: "power3.out" }, "-=0.2");

    if (para) {
        rightTL.from(para, { y: 20, opacity: 0, duration: 0.4, ease: "power3.out" }, "-=0.2");
    }

    if (lis.length > 0) {
        rightTL.from(lis, {
            y: 20,
            opacity: 0,
            duration: 0.4,
            ease: "power3.out",
            stagger: 0.1
        }, "-=0.2");
    }
});

// ================== CENTER ==================
const centerTL = gsap.timeline();
centerTL
    .from(".glow-wrapper img", { scale: 0, opacity: 0, duration: 0.6, ease: "back.out(1.7)" })
    .from(".badge", { scale: 0, opacity: 0, duration: 0.6, ease: "back.out(1.7)" }, "-=0.3")
    .from("#banner_text", { scale: 0, opacity: 0, duration: 0.6, ease: "back.out(1.7)" }, "-=0.3");

// ================== MASTER TIMELINE ==================
const masterTL = gsap.timeline({ delay: 0 });
masterTL.add(heroTL).add(leftTL, "cards").add(rightTL, "cards").add(centerTL, 'cards');

// ================== PROBLEMS SECTION ==================
gsap.from("#problems-solutions .col-md-6:first-child", {
    scrollTrigger: {
        trigger: "#problems-solutions",
        start: "top 80%",
        toggleActions: "play none none reverse",
    },
    x: -100,
    opacity: 0,
    duration: 1
});

// Right image column
gsap.from("#problems-solutions .col-md-6:last-child img", {
    scrollTrigger: {
        trigger: "#problems-solutions",
        start: "top 30%",
        toggleActions: "play none none reverse",
        markers: false,
    },
    x: 100,
    opacity: 0,
    duration: 1
});

// Timeline for problems + solutions
let probSolTL = gsap.timeline({
    scrollTrigger: {
        trigger: "#problems-solutions",
        start: "top 85%", // thoda jaldi trigger
        toggleActions: "play none none reverse",
        markers: false,
    }
});

// Problems list (one by one)
probSolTL.from("#problems-solutions .prob li", {
    y: 30,
    opacity: 0,
    duration: 0.5,
    stagger: 0.2, // ek ek karke
    ease: "power3.out"
});

// Solutions list (start after problems complete, one by one)
probSolTL.from("#problems-solutions .sol li", {
    y: 30,
    opacity: 0,
    duration: 0.5,
    stagger: 0.2, // ek ek karke
    ease: "power3.out"
}, "+=0.5");

gsap.utils.toArray("#how-it-works .col-md-12.text-center").forEach((el, i) => {
    gsap.from(el.children, { // children = h2, p, a
        scrollTrigger: {
            trigger: el,
            start: "top 85%",
            toggleActions: "play none none reverse",
        },
        y: 30,
        opacity: 0,

        duration: 0.6,
        stagger: 0.2, // one by one
        ease: "power3.out"
    });
});

// Image animation (fade in only)
gsap.from("#how-it-works .col-md-12.mb-5 img", {
    scrollTrigger: {
        trigger: "#how-it-works .col-md-12.mb-5",
        start: "top 50%",
        toggleActions: "play none none reverse",

    },
    opacity: 0,
    scale: 0.5,
    duration: 1
});

// Steps animation (each col-md-4 one by one)
gsap.utils.toArray("#how-it-works .col-md-4").forEach((el, i) => {
    gsap.from(el.children, { // img, h5, p
        scrollTrigger: {
            trigger: el,
            start: "top 85%",
            toggleActions: "play none none reverse",
        },
        y: 30,
        opacity: 0,
        duration: 0.6,
        stagger: 0.2,
        ease: "power3.out"
    });
});
// ================== FEATURES SECTION ==================

// Section heading & subtitle
gsap.utils.toArray("#features .col-md-12.text-center").forEach((el, i) => {
    gsap.from(el.children, { // h2, h6, a
        scrollTrigger: {
            trigger: el,
            start: "top 85%",
            toggleActions: "play none none reverse",
        },
        y: 30,
        opacity: 0,
        duration: 0.6,
        stagger: 0.2,
        ease: "power3.out"
    });
});

// Main feature images (fade + scale in)
gsap.utils.toArray("#features .col-md-7 img, #features .col-md-5 img").forEach((img, i) => {
    gsap.from(img, {
        scrollTrigger: {
            trigger: img,
            start: "top 75%",
            toggleActions: "play none none reverse",
        },
        opacity: 0,
        scale: 0.5,
        duration: 0.8,
        ease: "power3.out",
        delay: i * 0.2 // slight stagger for multiple images
    });
});

// Col-md-3 feature cards (each element one by one: img, h5, p)
gsap.utils.toArray("#features .col-md-3").forEach((el, i) => {
    gsap.from(el.children, {
        scrollTrigger: {
            trigger: el,
            start: "top 85%",
            toggleActions: "play none none reverse",
        },
        y: 30,
        opacity: 0,
        duration: 0.6,
        stagger: 0.2, // one by one inside each card
        ease: "power3.out"
    });
});

// ================== INDUSTRIES HEADING ==================
gsap.from("#industries .w-50 > *", { // * = direct children (h2, p, a)
    scrollTrigger: {
        trigger: "#industries .w-50",
        start: "top 85%",
        toggleActions: "play none none reverse",
    },
    y: 30,           // neeche se upar
    opacity: 0,
    duration: 0.6,
    ease: "power3.out",
    stagger: 0.2     // ek-ek karke
});
gsap.utils.toArray("#industries .col-md-4").forEach((el, i) => {
    gsap.from(el, {
        scrollTrigger: {
            trigger: el,
            start: "top 40%",
            toggleActions: "play none none reverse",
        },
        y: 50,
        opacity: 0,
        duration: 0.8,
        ease: "back.out(1.5)",
        stagger: 0.2,
        delay: i * 0.5
    });
});
// ================== ROADMAP HEADING ==================
gsap.from("#roadmap .w-50 > *", { // h2, p, a
    scrollTrigger: {
        trigger: "#roadmap .w-50",
        start: "top 85%",
        toggleActions: "play none none reverse",
    },
    y: 30,
    opacity: 0,
    duration: 0.6,
    ease: "power3.out",
    stagger: 0.2
});

// ================== ROADMAP CARDS ==================
const roadmapCards = gsap.utils.toArray("#roadmap .col-md-4");

roadmapCards.forEach((card, i) => {
    let direction = i === 0 ? -100 : i === 1 ? 0 : 100; // left, center, right
    gsap.from(card, {
        scrollTrigger: {
            trigger: card,
            start: "top 85%",
            toggleActions: "play none none reverse",
        },
        x: direction,
        y: 50,
        opacity: 0,
        duration: 0.8,
        ease: "back.out(1.7)",
        stagger: 0.2,
        delay: i * 0.7
    });
});

// ================== ABOUT US HEADING + TEXT ==================
gsap.from("#about-us .col-md-5 > *", {
    scrollTrigger: {
        trigger: "#about-us .col-md-5",
        start: "top 50%",
        toggleActions: "play none none reverse",
    },
    y: 30,
    opacity: 0,
    duration: 0.6,
    ease: "power3.out",
    stagger: 0.2
});

// Quote icon separately (slightly bigger effect)
gsap.from("#about-us .col-md-5 i.ri-double-quotes-l", {
    scrollTrigger: {
        trigger: "#about-us .col-md-5",
        start: "top 50%",
        toggleActions: "play none none reverse",
    },
    scale: 0,
    opacity: 0,
    duration: 0.6,
    ease: "back.out(1.7)",
    delay: 0.2
});

// ================== TESTIMONIAL CARDS ==================
gsap.utils.toArray("#about-us .col-md-7 .card").forEach((card, i) => {
    gsap.from(card, {
        scrollTrigger: {
            trigger: card,
            start: "top 50%",
            toggleActions: "play none none reverse",
        },
        y: 50,       // upar se neeche ya neeche se upar? neeche se upar
        opacity: 0,
        scale: 0.95,
        duration: 0.8,
        ease: "back.out(1.7)",
        delay: i * 0.2
    });
});

// ================== CONTACT US LEFT COLUMN ==================
gsap.utils.toArray("#contact-us .col-md-6:first-child > div").forEach((el, i) => {
    gsap.from(el.children, {
        scrollTrigger: {
            trigger: el,
            start: "top 85%",
            toggleActions: "play none none reverse",
        },
        y: 30,       // neeche se upar
        opacity: 0,
        duration: 0.6,
        ease: "power3.out",
        stagger: 0.2
    });
});

// Contact info (rows)
gsap.utils.toArray("#contact-us .col-md-6:first-child .row.gy-5 .col-md-6").forEach((el, i) => {
    gsap.from(el.children, {
        scrollTrigger: {
            trigger: el,
            start: "top 85%",
            toggleActions: "play none none reverse",
        },
        y: 30,
        opacity: 0,
        duration: 0.6,
        ease: "power3.out",
        stagger: 0.2
    });
});

const rightCol = document.querySelector("#contact-us .contact");

// Timeline for right column
const rightTL2 = gsap.timeline({
    scrollTrigger: {
        trigger: rightCol,
        start: "top 85%",
        toggleActions: "play none none reverse",
    }
});

// Heading
const heading = rightCol.querySelector("h5");
rightTL2.from(heading, {
    y: -50,
    opacity: 0,
    duration: 0.6,
    ease: "back.out(1.7)"
});

// Paragraph
const para = rightCol.querySelector("p");
rightTL2.from(para, {
    y: -50,
    opacity: 0,
    duration: 0.6,
    ease: "back.out(1.7)"
});

// Form fields (inputs, textarea, button)
const formFields = rightCol.querySelectorAll(".contact input, .contact textarea, .contact button");
rightTL2.from(formFields, {
    y: -50,
    opacity: 0,
    duration: 0.6,
    ease: "back.out(1.7)",
    stagger: 0.2  // ek-ek karke
});


// Create cursor element
const cursor = document.createElement("div");
cursor.classList.add("cursor");
document.body.appendChild(cursor);

// Track mouse movement
document.addEventListener("mousemove", (e) => {
    gsap.to(cursor, {
        x: e.clientX,
        y: e.clientY,
        duration: 0.1,
        ease: "power2.out"
    });
});

// Optional: enlarge cursor on hoverable elements
const hoverEls = document.querySelectorAll(
    "a, button, input, textarea, h1, h2, h3, h6"
);
hoverEls.forEach(el => {
    el.addEventListener("mouseenter", () => {
        gsap.to(cursor, { width: 50, height: 50, backgroundColor: "transparent", border: "2px solid rgba(93, 45, 230, 1)", duration: 0.2 });
    });
    el.addEventListener("mouseleave", () => {
        gsap.to(cursor, { width: 10, height: 10, backgroundColor: "rgba(93, 45, 230, 0.8)", duration: 0.2 });
    });
});
}