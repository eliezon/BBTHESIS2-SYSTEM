var dashboard = document.getElementById('dashboard-con');
var loads = document.getElementById('loads');
var headertext = document.getElementById('header-text');
var students = document.getElementById('students');
var gradeform = document.getElementById('grade-form');
var announcement = document.getElementById('announcement-page');
var topbar = document.getElementById('topbar');

function showDashboard() {
    dashboard.style.display = "block";
    loads.style.display = "none";
    students.style.display = "none";
    headertext.textContent = "DASHBOARD";
    announcement.style.display = "none";
}

function showLoads() {
    dashboard.style.display = "none";
    loads.style.display = "flex";
    announcement.style.display = "none";
    headertext.textContent = "COLLEGE STUDENT PORTAL";
    students.style.display = "none";
}

function showStudents() {
    dashboard.style.display = "none";
    loads.style.display = "none";
    students.style.display = "block";
    headertext.textContent = "COLLEGE STUDENT PORTAL";
}

function showAnnouncement() {
    dashboard.style.display = "none";
    loads.style.display = "none";
    announcement.style.display = "block";
    students.style.display = "none";
    headertext.textContent = "COLLEGE STUDENT PORTAL";
    gradeform.style.display = "none";
}

function showGradeForm() {
    gradeform.style.display = "flex";
    topbar.style.zIndex = "-1";
}

function closeGradeForm() {
    gradeform.style.display = "none";
    topbar.style.zIndex = "0";
}
