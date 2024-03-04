document.addEventListener("DOMContentLoaded", function() {
    const profileLink = document.querySelector(".profile-link");
    const manageProfile = document.getElementById("manage-profile");
  
    // Toggle visibility of manage profile on profile link click
    profileLink.addEventListener("click", function(event) {
      event.preventDefault(); // Prevent default link behavior
      manageProfile.style.display = manageProfile.style.display === "none" ? "block" : "none";
    });
  });
  