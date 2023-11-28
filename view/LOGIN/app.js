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

  

  document.addEventListener('DOMContentLoaded', function () {
    const nameInput = document.querySelector('input[name="PHP_AUTH_USER"]');
    const passwordInput = document.querySelector('input[name="PHP_AUTH_PW"]');
    const submitButton = document.querySelector('input[name="login"]');
    const nameWarning = document.createElement('p');
    const passwordWarning = document.createElement('p');
  
    nameWarning.classList.add('popmessage', 'name-message');
    passwordWarning.classList.add('popmessage', 'password-message');
  
    submitButton.disabled = true;
  
    function displayOrRemoveNameWarning() {
      const nameValue = nameInput.value.trim();
      const isValid = nameValue.length >= 5;
  
      if (!isValid) {
        nameWarning.textContent = 'Name must be at least 5 characters.';
        nameInput.parentNode.insertBefore(nameWarning, nameInput.nextSibling);
      } else {
        if (nameWarning.parentNode) {
          nameWarning.parentNode.removeChild(nameWarning);
        }
      }
  
      return isValid;
    }
  
    function displayOrRemovePasswordWarning() {
      const passwordValue = passwordInput.value.trim();
      const hasMinimumLength = passwordValue.length >= 5;
      const hasDigit = /\d/.test(passwordValue);
      const hasUppercase = /[A-Z]/.test(passwordValue);
  
      const messages = [];
  
      if (!hasMinimumLength) {
        messages.push('- At least 5 characters');
      }
  
      if (!hasDigit) {
        messages.push('- At least one digit');
      }
  
      if (!hasUppercase) {
        messages.push('- At least one uppercase letter');
      }
  
      const isValid = hasMinimumLength && hasDigit && hasUppercase;
  
      if (messages.length > 0) {
        passwordWarning.innerHTML = 'Password requirements: <br>' + messages.join('<br>');
        passwordInput.parentNode.insertBefore(passwordWarning, passwordInput.nextSibling);
      } else {
        if (passwordWarning.parentNode) {
          passwordWarning.parentNode.removeChild(passwordWarning);
        }
      }
  
      return isValid;
    }
  
    function validateForm() {
      const isNameValid = displayOrRemoveNameWarning();
      const isPasswordValid = displayOrRemovePasswordWarning();
  
      submitButton.disabled = !(isNameValid && isPasswordValid);
    }
  
    nameInput.addEventListener('input', validateForm);
    passwordInput.addEventListener('input', validateForm);
  });
  
