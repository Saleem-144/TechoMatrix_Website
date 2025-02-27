window.onload = function () {
  console.log("JavaScript Loaded!");

  document.getElementById("Contact-form").addEventListener("submit", (e) => {
    e.preventDefault();
  });
};
function validateForm() {
  let nameField = document.getElementById("Name");
  let mailField = document.getElementById("mail");
  let textareaField = document.getElementById("textinput");

  let name = nameField.value.trim();
  let mail = mailField.value.trim();
  let textarea = textareaField.value.trim();

  console.log(name, mail, textarea);

  let mailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

  if (name == "" || mail == "" || textarea == "") {
    alert(
      "Kindly ensure all fields are filled out before submitting. Thank you!"
    );
    return false;
  }

  if (!mailRegex.test(mail)) {
    alert("Please enter a valid email address");
    mailField.focus();
    return false;
  } else {
    alert("Form Submitted Sucessfully");
    document.getElementById("Contact-form").reset();
    return true;
  }
}
