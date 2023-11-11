

function handleScrollTo100vhPlus30px() {
    var scrollPosition = window.scrollY;
    const bar = document.querySelector('.section2img')
    var targetPosition = window.innerHeight -(window.innerHeight/3) ;
    if (scrollPosition <= targetPosition) {
        gsap.to(".left_bar",{
            x:-100,
            duration:.75,
        })
    }else{
        gsap.to(".left_bar",{
            x:100,
            duration:0.75,
        })
    }

  }
  
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
      yoyo: true, // Makes the animation play in reverse after completing
      repeat: -1 // Infinite repeat
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
