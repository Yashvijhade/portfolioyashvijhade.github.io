function clearErrors() {
    errors = document.getElementsByClassName('formerror');
    for (let item of errors) {
        item.innerHTML = "";
    }
  }
  function seterror(id, error) {
    //sets error inside tag of id
    element = document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML = error;
  }
  
  //function validateForm() {
  
  //perform validation and if validation fails, set the value of returnval to false
  function validateName() {
    var returnval = true;
    clearErrors();
  
    var name = document.forms['Form']["name"].value;
    if (name.length < 4) {
        seterror("name", "*Length of name is too short!");
        returnval = false;
    }
    if (name.length == 0 || name==" ") {
        seterror("name", "*Length of name cannot be zero!");
        returnval = false;
    }
    return returnval;
  }
  
  function validateEmail() {
    var returnval = true;
    clearErrors();
  
    var email = document.forms['Form']["Email"].value;
    if (email.length > 25) {
        seterror("email", "*Email length is too long!");
        returnval = false;
    }
    return returnval;
  }
  
//   function validatePhone() {
//     var returnval = true;
//     clearErrors();
  
//     var phone = document.forms['Form']["phone"].value;
//     if (phone.length != 10) {
//         seterror("phone", "*Phone Number Should be of 10 Digits!");
//         returnval = false;
//     }
//     return returnval;
//   }
  
  function validatePass() {
    var returnval = true;
    clearErrors();
    var regularExpression = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
    var password = document.forms['Form']["password"].value;
    if (password.length < 8) {
        seterror("password", "*Password Should be atleast 7 Characters Long!");
        returnval = false;
    }
    if (!regularExpression.test(password)) {
        seterror("password", "Password should contain atleast one number and one Special Character!");
        returnval = false;
    }
    var cpassword = document.forms['Form']["cpassword"].value;
    if (cpassword != password) {
        seterror("cpassword", "*Password And Confirm Password Should Match!");
        returnval = false;
    }
    return returnval;
  }
  
  // let button = document.getElementsByClassName('but');
  form.addEventListener('submit', (event) => {
    if (validateName() && validateEmail() && validatePhone() && validatePass()) {
        alert("You have been registered successfully!");
        // window.location.href ="index2.html";
        return true;
    }
    else {
        alert("Error occured : Please follow validations mentioned");
        return false;
    }
  })
  
  