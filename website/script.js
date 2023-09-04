function submitStory() {
  window.location.replace('https://docs.google.com/forms/d/e/1FAIpQLSdSyi_ftBZstEZzLsJhIKu9IiMw-SF1aoqSutMUyBEW9yWnmw/viewform')
}

function classroomDrop() {
  closeAllDropdowns();
  var classroomDropdown = document.getElementById("classroomDropdown");
  classroomDropdown.classList.toggle("show");
}

function communityDrop() {
  closeAllDropdowns();
  var communityDropdown = document.getElementById("communityDropdown");
  communityDropdown.classList.toggle("show");
}

function campusDrop() {
  closeAllDropdowns();
  var campusDropdown = document.getElementById("campusDropdown");
  campusDropdown.classList.toggle("show");
}

function closeAllDropdowns() {
  var dropdowns = document.getElementsByClassName("dropdown-content");
  for (var i = 0; i < dropdowns.length; i++) {
    var openDropdown = dropdowns[i];
    if (openDropdown.classList.contains('show')) {
      openDropdown.classList.remove('show');
    }
  }
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    closeAllDropdowns();
  }
}

