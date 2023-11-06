window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 0) {
        navbar.classList.add('shadow');
        navbar.classList.add('bg-light');
    } else {
        navbar.classList.remove('shadow');
        navbar.classList.remove('bg-light');
    }
});

function showDisplay(displayId, menuId) {
    const displays = document.getElementsByClassName("display");
    for (var i = 0; i < displays.length; i++) {
      displays[i].style.display = "none";
    }
  
    const displayToShow = document.getElementById(displayId);
    displayToShow.style.display = "block";
  
    const active = document.getElementsByClassName("genre-active");
    for (var i = 0; i < active.length; i++) {
      active[i].classList.remove("genre-active");
    }
  
    const menuToActive = document.getElementById(menuId);
    menuToActive.classList.add("genre-active");
  }