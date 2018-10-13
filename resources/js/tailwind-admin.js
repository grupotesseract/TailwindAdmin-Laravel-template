// main.js

var sidebar = document.getElementById('sidebar');

function sidebarToggle() {
    if (sidebar.style.display === "none") {
        sidebar.style.display = "block";
    } else {
        sidebar.style.display = "none";
    }
}

var profileDropdown = document.getElementById('ProfileDropDown');

function profileToggle() {
    if (profileDropdown.style.display === "none") {
        profileDropdown.style.display = "block";
    } else {
        profileDropdown.style.display = "none";
    }
}

// theme.js
// sidenav toggle
$(document).ready(function () {
    $("#menu").click(function () {
        $("#sidenav").toggle();
    });
    $("#menu2").click(function () {
        $("#sidenav").toggle();
    });
});

