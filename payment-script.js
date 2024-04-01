document.addEventListener("DOMContentLoaded", function() {
  var paymentMethodInput = document.getElementById("payment-method");
  
  // Function to toggle dropdown content
  function toggleDropdown() {
    paymentDropdown.classList.toggle("show");
  }

  // Event listener to show/hide dropdown content when clicking on the input box
  paymentMethodInput.addEventListener("click", toggleDropdown);

  // Event listeners to handle selection of payment method
  paymentMethodInput.addEventListener("change", function() {
    var selectedMethod = paymentMethodInput.value;
    console.log(selectedMethod); // For testing, you can remove this line
    toggleDropdown(); // Hide the dropdown after selection
  });

  // Close the dropdown if the user clicks outside of it
  window.addEventListener("click", function(event) {
    if (!event.target.matches('.dropdown-toggle')) {
      var dropdowns = document.getElementsByClassName("payment-dropdown-content");
      for (var i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  });
});

