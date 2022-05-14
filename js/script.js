const buttons = document.querySelectorAll('#button');
let firstname = document.querySelector('#td-firstName');
let lastname = document.querySelector('#td-lastName');
let email = document.querySelector('#td-email');



for(button of buttons) {
  button.addEventListener('click', (e) => {
    /* console.log(e.target.textContent); */
    let myId = e.target.textContent;
    getID(myId);
  });
}

function getID (arg) {
  fetch('api/data.php?id=' + arg)
  .then(response => response.json())
  .then(result => {
    firstname.textContent = result.firstName;
    lastname.textContent = result.lastName;
    email.textContent = result.email;
  })
}
