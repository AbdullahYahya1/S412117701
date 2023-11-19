


function startCircleAnimation() {
  gsap.to(".circle", {
    opacity: 1,
    duration: 7,
    yoyo: true,
    repeat: -1
  });
}
function left_barshow(s) {
  if (s) {
    gsap.to(".left_bar", {
      left: '0',
      duration: 1.5,
    });
  }
  else {
    gsap.to(".left_bar", {
      left: '-100',
      duration: 1.5,
    });
  }
}

var clicked = false
document.addEventListener('DOMContentLoaded', function (event) {
  let c = document.querySelector('.X');
  if (c) {
    c.addEventListener('click', () => {
      console.time('Click Event Processing Time');
      document.querySelector('.mycontainer').style.display = 'none';
      var newUrl = window.location.href.split('?')[0];
      history.replaceState({}, document.title, newUrl);
      console.timeEnd('Click Event Processing Time');
    });
  
    console.log('Click event listener added to element with class "X".');
  } else {
    console.error('Element with class "X" not found.');
  }
  

  var arrow_right = document.querySelector('.arrow_right');
  arrow_right.addEventListener('click', function () {
    if (!clicked) {
      left_barshow(true)
      if (window.innerWidth * 0.05 < 50) {
        arrow_right.style.left = '50px';
      } else {
        arrow_right.style.left = '5%';
      }
      clicked = true
    } else {
      left_barshow()
      arrow_right.style.left = '0';
      clicked = false
    }
  });


  startCircleAnimation();


  setTimeout(() => {
    
    gsap.to('.mycontainer', {
      opacity: 1,
      duration: 6,
    })
    gsap.to('.name', {
      opacity: 1,
      duration: 3,
    })
    setTimeout(() => {
      gsap.to('.job', {
        opacity: 1,
        duration: 3,
      })
      gsap.to('.interest', {
        opacity: 1,
        duration: 3,
      })
    }, 450);

    gsap.to('.img1', {
      right: '0px',
      duration: 2,
    })
  }, 250);

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
