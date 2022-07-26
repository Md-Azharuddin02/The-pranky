// Toggle Form
const container = document.querySelector(".container");
const inputs = document.querySelectorAll(".form-box input[type = 'password']");
const icons = [...document.querySelectorAll(".form-icon")];
const spans = [...document.querySelectorAll(".form-box .top span")];
const section = document.querySelector("section");

spans.map((span) => {
  span.addEventListener("click", (e) => {
    const color = e.target.dataset.id;
    container.classList.toggle("active");
    section.classList.toggle("active");
    document.querySelector(":root").style.setProperty("--custom", color);
  });
});

// Array.from(inputs).map((input) => {
//   icons.map((icon) => {
//     icon.innerHTML = `<img src="./images/eye.svg" alt="" />`;

//     icon.addEventListener("click", () => {
//       const type = input.getAttribute("type");
//       if (type === "password") {
//         input.setAttribute("type", "text");
//         icon.innerHTML = `<img src="./images/hide.svg" alt="" />`;
//       } else if (type === "text") {
//         input.setAttribute("type", "password");
//         icon.innerHTML = `<img src="./images/eye.svg" alt="" />`;
//       }
//     });
//   });
// });

// Form validation for login

let login = document.getElementById('login');

login.addEventListener('click',(e)=>{
  e.preventDefault();

  //For Email Validation 

    let email = document.getElementById('email').value;
    let email2 = document.getElementById('email');
  let messageLogin = document.getElementById('email-msg');

  let emailRegex = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;

  if(emailRegex.test(email)){
    email2.style.border = 'green solid 3px';
    messageLogin.innerText = '';
    return true
  }else{
    messageLogin.innerText = 'Please Enter Valid Email'
    email2.style.border = 'red solid 3px';
    return false;
  }

});


// Form validation for SignUp

let signup = document.getElementById('signup');

let validUser = false;
let validEmail = false;
let validPhone = false;
let validPassword = false;

signup.addEventListener('click',(e)=>{
  e.preventDefault();
  // console.log("Welcome to signup");

  // For name validation
let name = document.getElementById('name').value;
let name2 = document.getElementById('name');
let nameMessage = document.getElementById('name-msg');

let nameRegex =  /^[a-zA-Z]([0-9a-zA-Z]){5,30}$/;
if(nameRegex.test(name)){
  name2.style.border = '3px solid green';
  nameMessage.innerText = '';
  validUser = true;
}else{
  nameMessage.innerText = 'Enter Name Minimum 5 Letters and Without Space';
  name2.style.border = 'red solid 3px';
  validUser = false;
}

// For Registeration Email Validation
let signupEmail = document.getElementById('signup-email').value;
let signupEmail2 = document.getElementById('signup-email');
let emailMsg=  document.getElementById('email-msg2');
let signupRegex = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;

if(signupRegex.test(signupEmail)){
  signupEmail2.style.border = ' 3px solid green';
  emailMsg.innerText = '';
  validEmail = true;
}else{
  signupEmail2.style.border = 'red solid 3px'
  emailMsg.innerText = ' Please Enter Valid Email';
  validEmail = false;
}

// For Phone Number Validation
let phone = document.getElementById('phone').value;
let phone2 = document.getElementById('phone');
let phoneMsg = document.getElementById('phone-msg');
let phoneRegex = /^([0-9]){10}$/;

if(phoneRegex.test(phone)){
  phone2.style.border = '3px solid green';
  phoneMsg.innerText ='';
  validPhone = ture;
}else{
  phone2.style.border = '3px solid red';
  phoneMsg.innerText = 'Phone Number Must be 10 Digits';
  validPhone = false;
}

// For Password Confirmation 
let passwordRegister = document.getElementById('passwordRegister').value;
let passwordRegister2 = document.getElementById('passwordRegister');
let passwordMsg = document.getElementById('password-msg');
let passwordConfirm = document.getElementById('passwordConfirm').value;
let passwordConfirm2 =  document.getElementById('passwordConfirm');
let passwordMsg2 = document.getElementById('password-msg2');
let passwordRegex = /^(?=[^A-Z\n]*[A-Z])(?=[^a-z\n]*[a-z])(?=[^0-9\n]*[0-9])(?=[^#?!@$%^&*\n-]*[#?!@$%^&*-]).{10,}$/;

// For password 

if(passwordRegex.test(passwordRegister)){
  passwordRegister2.style.border = '3px solid green';
  passwordMsg.innerText = '';
  validPassword = true;
}else{
  passwordRegister2.style.border = '3px solid red';
  passwordMsg.innerText = 'Enter Password a,A,@,$,12 This Must be Included'
  validPassword = false;
} 

if(passwordRegister.length<5){
  passwordRegister2.style.border = '3px solid red';
  passwordMsg.innerText = 'Password Must be Greater Than 5 Letters';
  validPassword = false;
}
// else{
//   passwordRegister2.style.border = '3px solid green';
//   passwordMsg.innerText = '';
//   validPassword = true;
// } 

// For confirm password
if(passwordRegister != passwordConfirm){
  passwordConfirm2.style.border = '3px solid red';
  passwordMsg2.innerText = 'Password Does Not Match';
  validPassword = false;
}else{
  passwordConfirm2.style.border = '3px solid green';
  passwordMsg2.innerText = '';
  validPassword = ture;
}

})


