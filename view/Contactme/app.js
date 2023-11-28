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
  gsap.to(".contMe", {
    opacity: 1,
    duration: 5,
  });
  
  gsap.to(".massagecontainer", {
    opacity: 1,
    duration: 3,
  });
  gsap.to(".circle", {
    opacity: 1,
    duration: 10,
  });

})

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


  document.addEventListener('DOMContentLoaded', function () {
    const messageTextarea = document.querySelector('textarea[name="message"]');
    const submitButton = document.querySelector('input[type="submit"]');
    const messageWarning = document.createElement('p'); // Create a new <p> element for the message
    messageWarning.classList.add('popmassage');
    submitButton.disabled = true;
  
    messageTextarea.addEventListener('input', function () {
      const messageLength = this.value.trim().length;
      submitButton.disabled = messageLength < 5;
  
      // Display or remove warning message
      if (messageLength < 5) {
        messageWarning.textContent = 'Please enter a message with at least 5 characters.';
        submitButton.parentNode.insertBefore(messageWarning, submitButton.nextSibling);
      } else {
        // Remove warning message if it exists
        if (messageWarning.parentNode) {
          messageWarning.parentNode.removeChild(messageWarning);
        }
      }
    });
  });
  