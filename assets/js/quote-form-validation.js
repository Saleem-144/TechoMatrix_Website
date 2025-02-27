document.addEventListener("DOMContentLoaded", function () {
  console.log("JavaScript Loaded!");

  document
    .getElementById("quote-form")
    .addEventListener("submit", function (event) {
      event.preventDefault(); // Prevent page reload

      // Remove any previous error messages
      removeErrors();

      if (validationQuote()) {
        showSuccessMessage("Form Submitted Successfully!");
        document.getElementById("quote-form").reset();
      }
    });
});

function validationQuote() {
  let nameField = document.getElementById("q-name");
  let mailField = document.getElementById("q-email");
  let phoneField = document.getElementById("q-phone");
  let messageField = document.getElementById("q-msg");

  let Qname = nameField.value.trim();
  let Qmail = mailField.value.trim();
  let Qphone = phoneField.value.trim();
  let Qmsg = messageField.value.trim();

  let mailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

  let formValid = true; // Assume the form is valid unless we find an error

  // Ensure all fields are filled
  if (Qname === "" || Qmail === "" || Qmsg === "" || Qphone === "") {
    showError("All fields are required.");
    formValid = false;
  }

  // Validate email
  else if (!mailRegex.test(Qmail)) {
    showError("Please enter a valid email address.");
    formValid = false;
  }

  // Validate phone number
  else if (Qphone.startsWith("+92")) {
    Qphone = "0" + Qphone.slice(3);
    phoneField.value = Qphone; // Update the input field
  } else if (Qphone.length !== 11 || isNaN(Qphone)) {
    showError("Enter a valid 11-digit phone number.");
    formValid = false;
  }

  return formValid;
}

// Function to show an error below the message field
function showError(message) {
  let errorContainer = document.getElementById("form-error");
  if (!errorContainer) {
    errorContainer = document.createElement("div");
    errorContainer.id = "form-error";
    errorContainer.style.color = "red";
    errorContainer.style.fontSize = "14px";
    errorContainer.style.margin = "10px 0";
    errorContainer.style.textAlign = "center";

    // Insert the error below the message field but above the submit button
    let form = document.getElementById("quote-form");
    let submitButton = form.querySelector("input[type='submit']");
    form.insertBefore(errorContainer, submitButton);
  }
  errorContainer.innerText = message;
}

// Function to remove previous error messages
function removeErrors() {
  let errorContainer = document.getElementById("form-error");
  if (errorContainer) {
    errorContainer.remove();
  }
}

// Function to show success message
function showSuccessMessage(message) {
  let successContainer = document.getElementById("form-success");
  if (!successContainer) {
    successContainer = document.createElement("div");
    successContainer.id = "form-success";
    successContainer.style.color = "green";
    successContainer.style.fontSize = "14px";
    successContainer.style.margin = "10px 0";
    successContainer.style.textAlign = "center";

    let form = document.getElementById("quote-form");
    let submitButton = form.querySelector("input[type='submit']");
    form.insertBefore(successContainer, submitButton);
  }
  successContainer.innerText = message;
}
