var ourslides = {
  "My new personal website: on youtube ": ['imgs/Screenshot_112.png', 'https://www.youtube.com/watch?v=V696U6FcHWU'],
  "cs 50 for web Commerce: on youtube ": ['imgs/Screenshot_91.png', 'https://www.youtube.com/watch?v=3M-atQOJGxM'],
  "cs 50 for web WIKI: on youtube ": ['imgs/email.png', 'https://www.youtube.com/watch?v=tuEwGzN64Kk'],
  "cs 50 for web gradebook: on youtube ": ['imgs/gradebook.png', 'https://www.youtube.com/watch?v=iLwDEVR436Q'],
  "cs 50 for python SecuTask: on youtube ": ['imgs/secure.png', 'https://youtu.be/WFpUiIrkbJs'],
  "CS50 for web email: on youtube ": ['imgs/email2.png', 'https://www.youtube.com/watch?v=Ij3cDmCihDw'],
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
  relDiv.innerHTML+='      <button class="navigation-btn prev-btn" onclick="prevSlide()">❮</button> <button class="navigation-btn next-btn" onclick="nextSlide()">❯</button> '
  slide.appendChild(relDiv);

  slideWrapper.appendChild(slide);
});

// JavaScript functions for slider navigation
var currentIndex = 0;
var totalSlides = Object.keys(ourslides).length;

function prevSlide() {
  if (currentIndex > 0) {
    gsap.to(".slide", {
      opacity: 0,
      duration: 1
    });
    currentIndex--;
  } else {
    gsap.to(".slide", {
      opacity: 0,
      duration: 1
    });
    currentIndex = Object.keys(ourslides).length - 1;
  }

  clearInterval(intervalId); // Clear any existing interval

  intervalId = setInterval(() => {
    updateSlider();
    gsap.to(".slide", {
      opacity: 1,
      duration: 1
    });
  }, 1000);
}

function nextSlide() {
  if (currentIndex < totalSlides - 1) {
    gsap.to(".slide", {
      opacity: 0,
      duration: 1
    });
    currentIndex++;
  } else {
    gsap.to(".slide", {
      opacity: 0,
      duration: 1
    });
    currentIndex = 0;
  }
  clearInterval(intervalId);
  intervalId = setInterval(() => {
    updateSlider();
    gsap.to(".slide", {
      opacity: 1,
      duration: 1
    });
  }, 1000);
}

var intervalId;


function updateSlider() {
  var slides = document.querySelectorAll('.slide');
  slides.forEach(function (slide, index) {
    if (index === currentIndex) {
      slide.style.display = 'flex'; 
    } else {
      slide.style.display = 'none';
    }
  });
}
updateSlider()


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
var numberOfCopies = 10; 
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
  function proanimaion(){
    gsap.to(".porjects", {
      opacity:1 ,
      duration: 3
    });
  

    setTimeout(()=>{
      gsap.to(".rel", {
        opacity:1 ,
        duration: 1
      });
    
      gsap.to(".next-btn", {
        right:'10px',
        opacity:1 ,
        duration: 2
      });
      gsap.to(".prev-btn", {
        left:'10px',
        
          opacity:1 ,
          duration: 2
        });
    },1000)
  }
  gsap.to(".circle", {
    opacity: 1,
    duration: 6,
    yoyo: true,
    repeat: -1
  });
  setTimeout(proanimaion,1000)


const spans = document.querySelectorAll("#animatedText span");
gsap.to(spans, {
  duration: 0.5,
  color: "#B84ACA",
  stagger: {
    each: 1,
    from: "start",
  },
  yoyo: true,
  ease: "linear",
});