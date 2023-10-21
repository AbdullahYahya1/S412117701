

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
    
        
        gsap.to('.circle',{
            opacity:1, 
            duration:10,
        })
      }, 250);

  })


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
