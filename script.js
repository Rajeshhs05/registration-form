$(document).ready(function () {
  // Auto year in footer
  $("#year").text(new Date().getFullYear());

  // Simple form validation
  $("#registerForm").on("submit", function (e) {
    const phone = $("#phone").val();
    if (isNaN(phone) || phone.length !== 10) {
      alert("Please enter a valid 10-digit phone number!");
      e.preventDefault(); // stop form submission
    }
  });
});
