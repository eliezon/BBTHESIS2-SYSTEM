var teacherStudent = document.getElementById('teacherstudent');
var dashboard = document.getElementById('dashboard-con');
var student = document.getElementById('student-table');
var teacher = document.getElementById('teacher-table');
var tableconheader = document.getElementById('table-con-header');
var loads = document.getElementById('loads');
var headertext = document.getElementById('headertext');
var studentlist = document.getElementById('student-list');
var subjectenrolled = document.getElementById('subject-enrolled');
var instructorform = document.getElementById('add-instructor-con');
var assignsubject = document.getElementById('assign-subject-instructor');
var assignsubjectstudent = document.getElementById('assign-subject-student');
var topbar = document.getElementById('topbar');
var addstudent = document.getElementById('add-student-form');
var course = document.getElementById('course');
var addcourse = document.getElementById('add-course');
var yearsec = document.getElementById('year-sec');
var addyearsec = document.getElementById('add-year-section');
var department = document.getElementById('department');
var adddepartment = document.getElementById('add-department');
var rooms = document.getElementById('rooms');
var addroom = document.getElementById('add-room');
var macon = document.getElementById('ma-con');

function showTeacherStudent() {
    teacherStudent.style.display="block";
    teacher.style.display="block";
    student.style.display="none";
    dashboard.style.display="none";
    loads.style.display="none";
    studentlist.style.display="none";
    subjectenrolled.style.display="none";
    subjects.style.display="none";
    yearsec.style.display="none";
    rooms.style.display="none";
    macon.style.display="none";
    headertext.textContent="COLLEGE STUDENT PORTAL";
}

function showStudent() {
    teacherStudent.style.display="block";
    teacher.style.display="none";
    student.style.display="block";
    dashboard.style.display="none";
    studentlist.style.display="none";
    subjectenrolled.style.display="none";
    subjects.style.display="none";
    yearsec.style.display="none";
    department.style.display="none";
    rooms.style.display="none";
    macon.style.display="none";
}
function showTeacher() {
    teacherStudent.style.display="block";
    teacher.style.display="block";
    student.style.display="none";
    dashboard.style.display="none";
    subjectenrolled.style.display="none";
    studentlist.style.display="none";
    subjects.style.display="none";
    yearsec.style.display="none";
    department.style.display="none";
    rooms.style.display="none";
    macon.style.display="none";
}

function showdashboard1() {
    teacherStudent.style.display = "none";
    dashboard.style.display = "block";
    teacher.style.display = "none";
    student.style.display = "none";
    loads.style.display="none";
    studentlist.style.display="none";
    subjectenrolled.style.display="none";
    subjects.style.display="none";
    yearsec.style.display="none";
    department.style.display="none";
    rooms.style.display="none";
    macon.style.display="none";
    headertext.textContent="DASHBOARD";
}

function showLoads() {
    teacherStudent.style.display = "none";
    dashboard.style.display = "none";
    teacher.style.display = "none";
    student.style.display = "none";
    loads.style.display="block";
    studentlist.style.display="none";
    subjectenrolled.style.display="none";
    subjects.style.display="none";
    yearsec.style.display="none";
    department.style.display="none";
    rooms.style.display="none";
    macon.style.display="none";
    headertext.textContent="COLLEGE STUDENT PORTAL";
}

function showStudentList() {
    teacherStudent.style.display = "none";
    dashboard.style.display = "none";
    teacher.style.display = "none";
    student.style.display = "none";
    loads.style.display="none";
    studentlist.style.display="block";
    subjectenrolled.style.display="none";
    subjects.style.display="none";
    yearsec.style.display="none";
    department.style.display="none";
    rooms.style.display="none";
    macon.style.display="none";
    headertext.textContent="COLLEGE STUDENT PORTAL";
}

function showSubjectEnrolled() {
    teacherStudent.style.display = "none";
    dashboard.style.display = "none";
    teacher.style.display = "none";
    student.style.display = "none";
    loads.style.display="none";
    studentlist.style.display="none";
    subjectenrolled.style.display="block";
    subjects.style.display="none";
    yearsec.style.display="none";
    department.style.display="none";
    rooms.style.display="none";
    macon.style.display="none";
    headertext.textContent="COLLEGE STUDENT PORTAL";
}

function showSubjects() {
    teacherStudent.style.display = "none";
    dashboard.style.display = "none";
    teacher.style.display = "none";
    student.style.display = "none";
    loads.style.display="none";
    studentlist.style.display="none";
    subjectenrolled.style.display="none";
    subjects.style.display="block";
    yearsec.style.display="none";
    department.style.display="none";
    rooms.style.display="none";
    macon.style.display="none";
    headertext.textContent="COLLEGE STUDENT PORTAL";
}

function showYearSection() {
    teacherStudent.style.display = "none";
    dashboard.style.display = "none";
    teacher.style.display = "none";
    student.style.display = "none";
    loads.style.display="none";
    studentlist.style.display="none";
    subjectenrolled.style.display="none";
    subjects.style.display="none";
    yearsec.style.display="block";
    department.style.display="none";
    rooms.style.display="none";
    macon.style.display="none";
    headertext.textContent="COLLEGE STUDENT PORTAL";
}

function showDepartment() {
    teacherStudent.style.display = "none";
    dashboard.style.display = "none";
    teacher.style.display = "none";
    student.style.display = "none";
    loads.style.display="none";
    studentlist.style.display="none";
    subjectenrolled.style.display="none";
    subjects.style.display="none";
    yearsec.style.display="none";
    department.style.display="block";
    rooms.style.display="none";
    macon.style.display="none";
    headertext.textContent="COLLEGE STUDENT PORTAL";
}

function showRooms() {
    teacherStudent.style.display = "none";
    dashboard.style.display = "none";
    teacher.style.display = "none";
    student.style.display = "none";
    loads.style.display="none";
    studentlist.style.display="none";
    subjectenrolled.style.display="none";
    subjects.style.display="none";
    yearsec.style.display="none";
    department.style.display="none";
    rooms.style.display="block";
    macon.style.display="none";
    headertext.textContent="COLLEGE STUDENT PORTAL";
}

function showManageAnnouncement() {
    teacherStudent.style.display = "none";
    dashboard.style.display = "none";
    teacher.style.display = "none";
    student.style.display = "none";
    loads.style.display="none";
    studentlist.style.display="none";
    subjectenrolled.style.display="none";
    subjects.style.display="none";
    yearsec.style.display="none";
    department.style.display="none";
    rooms.style.display="none";
    macon.style.display="flex";
    headertext.textContent="COLLEGE STUDENT PORTAL";
}

function showAddInstructor() {
    instructorform.style.display = "flex";
    topbar.style.zIndex="-1";
}

function closeAddInstructor() {
    instructorform.style.display = "none";
    topbar.style.zIndex="0";
}

function showAssignSubject() {
    assignsubject.style.display = "flex";
    topbar.style.zIndex="-1";
}

function closeAssignSubject() {
    assignsubject.style.display = "none";
    topbar.style.zIndex="0";
}

function showAssignSubjectStudent() {
    assignsubjectstudent.style.display = "flex";
    topbar.style.zIndex="-1";
}

function closeAssignSubjectStudent() {
    assignsubjectstudent.style.display = "none";
    topbar.style.zIndex="0";
}

function showAddStudent() {
    addstudent.style.display = "flex";
    topbar.style.zIndex="-1";
}

function closeAddStudent() {
    addstudent.style.display = "none";
    topbar.style.zIndex="0";
}

function showAddSubject() {
    addcourse.style.display = "flex";
    topbar.style.zIndex="-1";
}

function closeAddSubject() {
    addcourse.style.display = "none";
    topbar.style.zIndex="0";
}

function showAddYearSection() {
    addyearsec.style.display = "flex";
    topbar.style.zIndex="-1";
}

function closeAddYearSection() {
    addyearsec.style.display = "none";
    topbar.style.zIndex="0";
}

function showAddDepartment() {
    adddepartment.style.display = "flex";
    topbar.style.zIndex="-1";
}

function closeAddDepartment() {
    adddepartment.style.display = "none";
    topbar.style.zIndex="0";
}

function showAddRoom() {
    addroom.style.display = "flex";
    topbar.style.zIndex="-1";
}

function closeAddRoom() {
    addroom.style.display = "none";
    topbar.style.zIndex="0";
}

function activateButton(button) {
    var buttons = document.querySelectorAll('.sidebar-button button');
    buttons.forEach(function(btn) {
        btn.classList.remove('active');
    });
    button.classList.add('active');
}

function activateButton1(button) {
    var buttons = document.querySelectorAll('.user-tab button');
    buttons.forEach(function(btn) {
        btn.classList.remove('active');
    });
    button.classList.add('active');
}