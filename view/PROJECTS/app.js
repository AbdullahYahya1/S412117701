let currentIndex = 0;

function showSlide(index) {
  const slideWrapper = document.querySelector('.slide-wrapper');
  const slideWidth = document.querySelector('.slide').offsetWidth;
  const newPosition = -index * slideWidth;
  slideWrapper.style.transform = `translateX(${newPosition}px)`;
  currentIndex = index;
}

function nextSlide() {
  const totalSlides = document.querySelectorAll('.slide').length;
  currentIndex = (currentIndex + 1) % totalSlides;
  showSlide(currentIndex);
}
function prevSlide() {
  const totalSlides = document.querySelectorAll('.slide').length;
  currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
  showSlide(currentIndex);
}


let interval = setInterval(nextSlide, 4000);

document.querySelectorAll('.navigation-btn').forEach(function(buttonClicked) {
  buttonClicked.addEventListener('click', function() {
    setTimeout(() => {
      clearInterval(interval);
      interval = setInterval(nextSlide, 4000);
    }, 6000);
  });
});


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
