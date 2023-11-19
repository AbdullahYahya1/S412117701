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

function startCircleAnimation() {
  gsap.to(".circle", {
    opacity: 0.6,
    duration: 7,
    yoyo: true, // Makes the animation play in reverse after completing
    repeat: -1 // Infinite repeat
  });
}
document.addEventListener('DOMContentLoaded', function() {
  startCircleAnimation();
});
gsap.to('.CERTI_title',{
    opacity:1, 
    duration:5,
}
)

gsap.to('.left1',{
  left:0, 
  duration:2.7,
}
)
gsap.to('.right1',{
  left:0, 
  duration:3.2,
}
)
gsap.to('.left2',{
  left:0, 
  duration:3.7,
}
)
gsap.to('.right2',{
  left:0, 
  duration:4.2,
}
)
gsap.to('.left4',{
  left:0, 
  duration:5,
}
)


// gsap.to('.circle',{
//     opacity:1, 
//     duration:10,
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
