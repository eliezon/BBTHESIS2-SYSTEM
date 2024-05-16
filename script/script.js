document.addEventListener("DOMContentLoaded", function() {
    var typed = new Typed(".text", {
        strings: ["College Student Portal"],
        typeSpeed: 50,
        backSpeed: 20,
        backDelay: 1000,
        loop: true,
        showCursor: false,
    });
});

function showLogin() {
    document.getElementById('login').style.display = "flex";
    document.getElementById('logo2').style.display = "flex";
    
    document.getElementById('register').style.display = "none";
    document.getElementById('logo').style.display = "none";
}

function showRegister() {
    document.getElementById('login').style.display = "none";
    document.getElementById('logo2').style.display = "none";
    
    document.getElementById('register').style.display = "flex";
    document.getElementById('logo').style.display = "flex";
}

document.addEventListener("DOMContentLoaded", function() {
    // Function to get URL parameters
    function getUrlParameter(name) {
        name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
        var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
        var results = regex.exec(location.search);
        return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
    };

    // Check if the 'show' parameter is set to 'login' in the URL
    var showLogin = getUrlParameter('show') === 'login';

    // If 'show' parameter is set to 'login', display the login form
    if (showLogin) {
        document.getElementById('login').style.display = "flex";
        document.getElementById('logo2').style.display = "flex";
        document.getElementById('register').style.display = "none";
        document.getElementById('logo').style.display = "none";
    }
});




