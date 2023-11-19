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

nextSlide()
let interval = setInterval(nextSlide, 3000);

document.querySelectorAll('.navigation-btn').forEach(function(buttonClicked) {
  buttonClicked.addEventListener('click', function() {
    setTimeout(() => {
      clearInterval(interval);
      interval = setInterval(nextSlide, 3000);
    }, 500);
  });
});


if ('maxTouchPoints' in navigator && navigator.maxTouchPoints === 0) {
  document.addEventListener('DOMContentLoaded', function () {
    const light = document.getElementById('light');
    document.addEventListener('mousemove', function (e) {
      const x = e.clientX - 7;
      const y = e.clientY - 55;
      light.style.transform = `translate(${x}px, ${y}px)`;
    });
  });
  setTimeout('light.style.opacity=1; ', 500)

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
function left_barshow(s) {
  if (s){
  gsap.to(".left_bar", {
    left: '0',
    duration: 1.5,
  });
}
else{
  gsap.to(".left_bar", {
    left: '-100',
    duration: 1.5,
  });
}
}
var clicked=false
document.addEventListener('DOMContentLoaded', function () {
  var arrow_right = document.querySelector('.arrow_right');
  arrow_right.addEventListener('click', function () {
    if (! clicked) {
      left_barshow(true)
      if(window.innerWidth*0.05 <50){
        arrow_right.style.left = '50px';
      }else{
        arrow_right.style.left = '5%';
      }
      clicked=true
      } else {
        left_barshow()
        arrow_right.style.left = '0';
        clicked=false
      }
    });
  });
