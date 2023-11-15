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


// gsap.to('.circle',{
//     opacity:1, 
//     duration:10,
// })
