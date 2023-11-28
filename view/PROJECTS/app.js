function proanimaion(){
gsap.to(".porjects", {
  opacity:1 ,
  duration: 3
});

gsap.to(".prev-btn", {
  left:'10px' ,
  opacity:1 ,
  duration: 0.5
});

gsap.to(".rel", {
  right:'10px',
  opacity:1 ,
  duration: 1
});

gsap.to(".next-btn", {
  right:'10px',
  opacity:1 ,
  duration: 0.5
});

}
setTimeout(proanimaion,100)

var ourslides = {
  "Commerce: on youtube 1": ['imgs/Screenshot_91.png', 'https://www.youtube.com/watch?v=3M-atQOJGxM'],
  "SecuTask: on youtube 1": ['imgs/secure.png', 'https://www.youtube.com/watch?v=wrHm-2NWslQ'],
  "gradebook: on youtube 1": ['imgs/gradebook.png', 'https://www.youtube.com/watch?v=iLwDEVR436Q'],
  "Commerce: on youtube 2": ['imgs/Screenshot_91.png', 'https://www.youtube.com/watch?v=3M-atQOJGxM'],
  "SecuTask: on youtube 2": ['imgs/secure.png', 'https://www.youtube.com/watch?v=wrHm-2NWslQ'],
  "gradebook: on youtube 2": ['imgs/gradebook.png', 'https://www.youtube.com/watch?v=iLwDEVR436Q'],
  "Commerce: on youtube 3": ['imgs/Screenshot_91.png', 'https://www.youtube.com/watch?v=3M-atQOJGxM'],
  "SecuTask: on youtube 3": ['imgs/secure.png', 'https://www.youtube.com/watch?v=wrHm-2NWslQ'],
  "gradebook: on youtube 3": ['imgs/gradebook.png', 'https://www.youtube.com/watch?v=iLwDEVR436Q']
};


var slideWrapper = document.getElementById('slide-wrapper');

// Dynamically generate slides
Object.keys(ourslides).forEach(function (key) {
  var slide = document.createElement('div');
  slide.className = 'slide';

  var relDiv = document.createElement('div');
  relDiv.className = 'rel';

  var img = document.createElement('img');
  img.src = ourslides[key][0];
  img.alt = key;

  var link = document.createElement('a');
  link.href = ourslides[key][1];

  var projectName = document.createElement('p');
  projectName.className = 'projectTitlename';
  projectName.textContent = key;

  link.appendChild(projectName);
  relDiv.appendChild(img);
  relDiv.appendChild(link);
  slide.appendChild(relDiv);

  slideWrapper.appendChild(slide);
});

// JavaScript functions for slider navigation
var currentIndex = 0;
var totalSlides = Object.keys(ourslides).length;

function prevSlide() {
  if (currentIndex > 0) {
    currentIndex--;
    updateSlider();
  }  else{
    currentIndex=Object.keys(ourslides).length-1;
    updateSlider();
  }
}
function nextSlide() {
  if (currentIndex < totalSlides - 1) {
    currentIndex++;
    updateSlider();
  } else {
    
    currentIndex = 0; // If at the last slide, go back to the first slide
    updateSlider();
  }
}

function updateSlider() {
  var translateValue = -currentIndex * 100 + '%';
  slideWrapper.style.transform = 'translateX(' + translateValue + ')';
}




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
var numberOfCopies = 10; // Adjust the number of copies as needed
function duplicateSlides(originalSlides, numberOfCopies) {
  var duplicatedSlides = {};

  for (var i = 1; i <= numberOfCopies; i++) {
    Object.keys(originalSlides).forEach(function (key) {
      var newKey = key.replace(/(\d+)/, function (match, p1) {
        return match.replace(p1, Number(p1) + i);
      });

      duplicatedSlides[newKey] = originalSlides[key].slice();
    });
  }

  return duplicatedSlides;
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
