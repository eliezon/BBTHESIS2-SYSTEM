var manageuser = document.getElementById('manage-users');
var con2 = document.getElementById('con2');
var headertext = document.getElementById('header-text');
var adduser = document.getElementById('add-user');
var topbar = document.getElementById('topbar');

function showManageUser() {
    manageuser.style.display="block";
    con2.style.display="none";
    headertext.textContent="COLLEGE STUDENT PORTAL";
}

function showDashboard() {
    manageuser.style.display="none";
    con2.style.display="flex";
    headertext.textContent="DASHBOARD";
}

function showAddUser() {
    adduser.style.display="flex";
    topbar.style.zIndex="-1";
}

function closeAddUser() {
    adduser.style.display="none";
    topbar.style.zIndex="0";
}