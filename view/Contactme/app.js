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
document.addEventListener('DOMContentLoaded' , function(){
  gsap.to(".education", {
    opacity: 1,
    duration: 5,
  });
  
  gsap.to(".circle", {
    opacity: 1,
    duration: 10,
  });

})

if ('maxTouchPoints' in navigator && navigator.maxTouchPoints === 0) {
  document.addEventListener('DOMContentLoaded', function() {
      const light = document.getElementById('light');
      document.addEventListener('mousemove', function(e) {
              const x = e.clientX-7;
              const y = e.clientY-55;
              light.style.transform = `translate(${x}px, ${y}px)`;
          });           
      });
      light.style.opacity=1; 
}

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
