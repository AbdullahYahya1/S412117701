


  
  document.addEventListener('DOMContentLoaded' , function(){
    setTimeout(() => {
        gsap.to('.name',{
            opacity:1, 
            duration:5,
        })
    
   
      }, 250);

  })


  function startCircleAnimation() {
    gsap.to(".circle", {
      opacity: 1,
      duration: 7,
      yoyo: true, 
      repeat: -1 
    });
  }

  document.addEventListener('DOMContentLoaded', function() {
    // Start the circle animation loop
    startCircleAnimation();
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
        setTimeout('light.style.opacity=1; ' , 500)
        
}

document.addEventListener('DOMContentLoaded', function() {
c= document.querySelector('.X');
if (c){
c.addEventListener('click',()=>{
  document.querySelector('.mycontainer').style.display='none'
  var newUrl =  window.location.href.split('?')[0];
  history.replaceState({}, document.title, newUrl);
})
}

})


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




// var elements = document.querySelectorAll('.OlHm2b');
// var l = []
    
// // Iterate through the NodeList using a for loop
// for (var i = 0; i < elements.length; i++) {
//     // Access each element using elements[i]
//     var currentElement = elements[i];
//     l.push(currentElement.dataset.hovercardId)
//     // Display the content of the current element
//     console.log(currentElement.dataset.hovercardId);

//     // If you want to display HTML content, use innerHTML instead
//     // console.log(currentElement.innerHTML);
// }
