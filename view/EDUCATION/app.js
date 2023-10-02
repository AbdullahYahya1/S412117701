function handleScrollTo100vhPlus30px() {
  var scrollPosition = window.scrollY;
  const bar = document.querySelector(".section2img");
  var targetPosition = window.innerHeight - window.innerHeight / 3;
  if (scrollPosition <= targetPosition) {
    gsap.to(".left_bar", {
      x: -100,
      duration: 0.75,
    });
  } else {
    gsap.to(".left_bar", {
      x: 100,
      duration: 0.75,
    });
  }
}

gsap.to(".education", {
  opacity: 1,
  duration: 5,
});

gsap.to(".circle", {
  opacity: 1,
  duration: 10,
});
// gsap.to('.section2img',{
//     opacity:1,
//     duration:3,
//     scrollTrigger:'.education',
//     backgroundColor:'#B84ACA',

// })

// gsap.to('.section2img',{
//     opacity:1,
//     duration:3,
//     scrollTrigger:'.sectionSep',
//     backgroundColor:'white',

// })
