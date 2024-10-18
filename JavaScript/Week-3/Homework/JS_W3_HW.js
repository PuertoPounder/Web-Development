function validateEMail(email){
    const regularExpression = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return regularExpression.test(String(email).toLowerCase());
}

function submitEvent(event){

event.preventDefault();

const name = document.getElementById("name").value.trim();
const email = document.getElementById("email").value.trim();
const age = document.getElementById("age").value.trim();
const gender = document.querySelector('input[name="gender"]:checked');
const interests = Array.from(document.querySelectorAll('input[name="interests"]:checked')).map(interest => interest.value);
const country = document.getElementById("country").value;
const comments = document.getElementById("comments").value.trim();

if(!name || !email || !age || !gender) {
    alert("Fill yo dam form out.");
    return;
}

if(!validateEMail(email)){
    alert("YO, you email is messed up my guy");
    return;

}

alert("Thank you for submitting kind sir.");

this.reset()

}

function formValidation(){
    const form = document.getElementById("survey-form");

    form.addEventListener("submit", submitEvent);
}

document.addEventListener("DOMContentLoaded", formValidation);

