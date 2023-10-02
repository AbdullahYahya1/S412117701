

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
  
window.addEventListener("scroll", handleScrollTo100vhPlus30px);
  
gsap.registerPlugin(ScrollTrigger);
gsap.to('.name',{
    opacity:1, 
    duration:5,
    scrollTrigger:'.name'
})
gsap.registerPlugin(ScrollTrigger);
gsap.to('.education',{
    opacity:1, 
    duration:3,
    scrollTrigger:{
        trigger:'.education',
        start:'top 100%',
        end:'top 40%',
        toggleActions:"restart none none reset", 
    }
})

gsap.to('.circle',{
    opacity:1, 
    duration:10,
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
