// =====================================================
// Downtown Pizza Studio
// Home Page Animation
// Version 1.0
// =====================================================

document.addEventListener("DOMContentLoaded", () => {

    initHeroAnimation();

    initMouseParallax();

    initButtons();

});

// =====================================================
// HERO ENTRANCE
// =====================================================

function initHeroAnimation(){

    if(typeof gsap === "undefined") return;

    gsap.from(".badge",{

        y:-40,

        opacity:0,

        duration:0.8,

        ease:"power3.out"

    });

    gsap.from("h1",{

        y:60,

        opacity:0,

        duration:1,

        delay:.15,

        ease:"power3.out"

    });

    gsap.from(".hero-left p",{

        y:60,

        opacity:0,

        duration:1,

        delay:.30,

        ease:"power3.out"

    });

    gsap.from(".hero-buttons",{

        y:50,

        opacity:0,

        duration:.9,

        delay:.45,

        ease:"power3.out"

    });

    gsap.from(".hero-pizza",{

        scale:.6,

        opacity:0,

        rotate:-30,

        duration:1.3,

        delay:.2,

        ease:"back.out(1.4)"

    });

}

// =====================================================
// PARALLAX
// =====================================================

function initMouseParallax(){

    const pizza=document.querySelector(".hero-pizza");

    if(!pizza) return;

    document.addEventListener("mousemove",(e)=>{

        const x=(window.innerWidth/2-e.clientX)/35;

        const y=(window.innerHeight/2-e.clientY)/35;

        pizza.style.transform=
        `translate(${x}px,${y}px)`;

    });

}

// =====================================================
// BUTTON
// =====================================================

function initButtons(){

    document.querySelectorAll(".btn").forEach(btn=>{

        btn.addEventListener("mouseenter",()=>{

            btn.style.transform="translateY(-6px) scale(1.02)";

        });

        btn.addEventListener("mouseleave",()=>{

            btn.style.transform="translateY(0) scale(1)";

        });

    });

}
