var dashboard = document.getElementById('dashboard-con');
var con4 = document.getElementById('con4');
var con5 = document.getElementById('con5');
var right = document.getElementById('right');
var center = document.getElementById('center');
var dashboard = document.getElementById('dashboard-con');
var con7 = document.getElementById('con7');
var con8 = document.getElementById('con8');
var teacherstudent = document.getElementById('teacher-student');
var tableconheader = document.getElementById('table-con-header');


function hideDashboard() {
    dashboard.style.display="none";
    con4.style.display="none";
    con5.style.display="block";
    right.style.display="none";
    center.style.width="80%";
    center.style.right="0";
    con7.style.display="none";
    con6.style.display="none";
    con8.style.display="none";
    tableconheader.style.display="none";
    
}
function showDashboard() {
    dashboard.style.display="block";
    right.style.display="flex";
    center.style.width="60%";
    center.style.right="20%";
    con5.style.display="none";
    con7.style.display="none";
    con6.style.display="none";
    con8.style.display="none";
    tableconheader.style.display="none";
}

function showSchedule() {
    dashboard.style.display="none";
    right.style.display="none";
    center.style.width="80%";
    center.style.right="0";
    con5.style.display="none";
    con7.style.display="flex";
    con6.style.display="none";
    con8.style.display="none";
    con7.style.width="80%";
    con7.style.right="0";
    tableconheader.style.display="block";
}

function showOnlineEnrollment() {
    dashboard.style.display="none";
    right.style.display="flex";
    center.style.width="60%";
    center.style.right="20%";
    con5.style.display="none";
    con7.style.display="none";
    con6.style.display="block";
    con4.style.display="none";
    con8.style.display="none";
    tableconheader.style.display="block";
}

function showGrade() {
    dashboard.style.display="none";
    right.style.display="none";
    center.style.width="80%";
    center.style.right="0";
    con5.style.display="none";
    con7.style.display="none";
    con6.style.display="none";
    con4.style.display="none";
    con8.style.display="flex";
    con8.style.width="80%";
    con8.style.right="0";
    tableconheader.style.display="block";
}


function showEnrollment() {
    var enrollment = document.getElementById('enrollment');
    document.getElementById('right').style.zIndex = "-10";
    document.getElementById('topbar').style.zIndex = "-1";
    
    con4.style.display = "flex";
    enrollment.style.display = "flex";
    setTimeout(function() {
        con4.style.opacity = "1";
    }, 10); 
}

function hideEnrollment() {
    var enrollment = document.getElementById('enrollment');
    document.getElementById('right').style.zIndex = "-1";
    document.getElementById('topbar').style.zIndex = "0";
    var con4 = document.getElementById('con4');
    con4.style.opacity = "0";
    setTimeout(function() {
        con4.style.display = "none";
        enrollment.style.display = "none";
    }, 300); // Adjust the time to match the transition duration
}
