
const usernameInput = document.getElementById('username');
const emailInput = document.getElementById('email');
const firstNameInput = document.getElementById('firstName');
const lastNameInput = document.getElementById('lastName');
const dobInput = document.getElementById('dob');
const genderInput = document.getElementById('gender');
const phoneInput = document.getElementById('phone');
const addressInput = document.querySelector('textarea[name="field5"]');


function save() {
 
  const username = usernameInput.value;
  const email = emailInput.value;
  const firstName = firstNameInput.value;
  const lastName = lastNameInput.value;
  const dob = dobInput.value;
  const gender = genderInput.value;
  const phone = phoneInput.value;
  const address = addressInput.value;

  
  alert('Your information has been saved successfully!');
}


function cancel() {
  
  usernameInput.value = '';
  emailInput.value = '';
  firstNameInput.value = '';
  lastNameInput.value = '';
  dobInput.value = '';
  genderInput.value = '';
  phoneInput.value = '';
  addressInput.value = '';
}


const saveButton = document.querySelector('button[onclick="save()"]');
const cancelButton = document.querySelector('button[onclick="cancel()"]');
saveButton.addEventListener('click', save);
cancelButton.addEventListener('click', cancel);
