function validateForm() {
    let valid = true;
  
    // Error message clear করা
    document.getElementById('nameError').innerHTML = "";
    document.getElementById('emailError').innerHTML = "";
    document.getElementById('passwordError').innerHTML = "";
    document.getElementById('phoneError').innerHTML = "";
    document.getElementById('addressError').innerHTML = "";
  
    // ইনপুট ভ্যালু নেয়া
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const address = document.getElementById('address').value.trim();
  
    // Validation 1: Name
    if (name === "") {
      document.getElementById('nameError').innerHTML = "Please enter your name";
      valid = false;
    }
  
    // Validation 2: Email
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
      document.getElementById('emailError').innerHTML = "Please write email.";
      valid = false;
    }
  
    // Validation 3: Password
    if (password.length < 6) {
      document.getElementById('passwordError').innerHTML = "Atleast give 6 word password";
      valid = false;
    }
  
    // Validation 4: Phone Number
    const phonePattern = /^\d{10}$/;
    if (!phonePattern.test(phone)) {
      document.getElementById('phoneError').innerHTML = "please enter 10 number.";
      valid = false;
    }
  
    // Validation 5: Address
    if (address === "") {
      document.getElementById('addressError').innerHTML = "Enter your address.";
      valid = false;
    }
  
    return valid;
  }
  