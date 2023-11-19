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
  