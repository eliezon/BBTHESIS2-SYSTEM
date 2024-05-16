<?php include '../../template/header.php'; ?>
<link rel="stylesheet" href="../../styles/phead.css">

    <!-- START OF SIDEBAR -->
        <div class="sidebar">
            <div class="sidebar-button">
                <div style="text-align:center">
                <img src="../../assets/images/scclogo.png" alt="">
                </div>
                <button onclick="activateButton(this);showdashboard1()" class="active"><i class='bx bxs-dashboard'></i>Dashboard</button>
                <button onclick="activateButton(this);hideDashboard()"><i class='bx bxs-file'></i>Enrollment</button>
                <button onclick="activateButton(this);showTeacherStudent()"><i class='bx bx-user'></i>Teacher & Student</button>
                <button onclick="activateButton(this);showSubjects()"><i class='bx bxs-file'></i>Subjects</button>
                <button onclick="activateButton(this);showYearSection()"><i class='bx bxs-file'></i>Year Level</button>
                <button onclick="activateButton(this);showDepartment()"><i class='bx bxs-file'></i>Department</button>
                <button onclick="activateButton(this);showRooms()"><i class='bx bxs-file'></i>Rooms</button>
                <button onclick="activateButton(this);showManageAnnouncement()"><i class='bx bxs-volume-low'></i>Manage  Announcement</button>  
                <br>
                <hr>
                <div>
                <br>
                <label for="">Academic Year</label>
                <select name="" id="">
                    <option value="">2nd Sem 2023-2024</option>
                    <option value="">1nd Sem 2023-2024</option>
                </select>
                </div>
            </div>
        </div>
    <!-- END OF SIDEBAR -->


    <!-- START OF CENTER -->
        <div class="center">

        <div class="table-con-header" id="table-con-header">
        <p id="headertext">DASHBOARD</p>
       </div>

           <!-- start of content1 -->
            <div class="content1">

          <!-- start of dashboard-con -->
            <div class="dashboard-con" id="dashboard-con">


                <!-- start of con1 -->
   
                <!-- end of con1 -->

                <!-- start of con2 -->
                <div class="center-con con2">
               
                </div>
                <!-- end of con2 -->
                
                
            </div>
            <!-- end of dashboard-con -->


        <!-- start of TEACHER & STUDENT -->
        <div class="teacher-student" id="teacherstudent">
          
        <!-- start of table-con-con    -->
        <div class="table-con-con">
            
        <div class="user-tab">

                <div>
                <button type="button" onclick="activateButton1(this);showTeacher()" class="active">Teacher</button>
                <button type="button" onclick="activateButton1(this);showStudent()">Student</button>
                </div>
        </div>

        <hr style="width:100%;margin-top:0">

                <!-- start of INSTRUCTOR-TABLE -->
                <?php include '../../pages/instructor-table.php' ?>
                <!-- end of INSTRUCTOR-TABLE -->


                <!-- start of STUDENT-TABLE -->
                <?php include '../../pages/student-table.php' ?>
                <!-- end of STUDENT-TABLE -->


                </div>
                <!-- end of table-con-con -->


                <!-- start of LIST OF SUBJECTS -->
                <?php include '../../pages/subject-list.php' ?>
                <!-- end of LIST OF SUBJECTS -->


                <!-- start of LIST OF STUDENTS -->
                <?php include '../../pages/student-list.php' ?>
                <!-- end of LIST OF STUDENTS -->


                <!-- start of ENROLLED COURSE BY THE STUDENT -->
                <?php include '../../pages/course-enrolled.php' ?>
                <!-- end of ENROLLED COURSE BY THE STUDENT -->


                <!-- start of SUBJECTS -->
                <?php include '../../pages/subjects.php' ?>
                <!-- end of SUBJECTS -->


                <!-- start of YEAR AND SECTION -->
                <?php include '../../pages/year-section.php' ?>
                <!-- end of YEAR AND SECTION -->


                <!-- start of DEPARTMENT -->
                <?php include '../../pages/department.php' ?>
                <!-- end of DEPARTMENT -->


                <!-- start of ROOMS -->
                <?php include '../../pages/rooms.php' ?>
                <!-- end of ROOMS -->


                <!-- start of MANAGE ANNOUNCEMENT -->
                <?php include '../../pages/manage-announcement.php' ?>
                <!-- end of MANAGE ANNOUNCEMENT -->

                </div>
                <!-- end of TEACHER & STUDENT -->




                <!-- start of ADD INSTRUCTOR FORM -->
                <?php include '../../forms/add-instructor-form.php' ?>
                <!-- end of ADD INSTRUCTOR FORM -->


                <!-- start of ASSIGN SUBJECT TO INSTRUCTOR FORM -->
                <?php include '../../forms/assign-subject-instructor-form.php' ?>
                <!-- end of ASSIGN SUBJECT TO INSTRUCTOR FORM -->

                <!-- start of ASSIGN SUBJECT TO STUDENT FORM -->
                <?php include '../../forms/assign-subject-student-form.php' ?>
                <!-- end of ASSIGN SUBJECT TO STUDENT FORM -->

                <!-- start of ASSIGN SUBJECT TO STUDENT FORM -->
                <?php include '../../forms/add-student-form.php' ?>
                <!-- end of ASSIGN SUBJECT TO STUDENT FORM -->

                <!-- start of ADD SUBJECTS FORM -->
                <?php include '../../forms/add-course-form.php' ?>
                <!-- end of ADD SUBJECTS FORM -->

                <!-- start of ADD YEAR AND SECTION FORM -->
                <?php include '../../forms/add-year-form.php' ?>
                <!-- end of ADD YEAR AND SECTION FORM -->

                <!-- start of ADD DEPARTMENT FORM-->
                <?php include '../../forms/add-department-form.php' ?>
                <!-- end of ADD DEPARTMENT FORM -->

                <!-- start of ADD ROOMS FORM-->
                <?php include '../../forms/add-room-form.php' ?>
                <!-- end of ADD ROOMS FORM -->
            
        

               </div>
            <!-- end of content1 -->

                   
            </div>
    <!-- END OF CENTER -->


    </div>
    <!-- END OF CONTAINER -->

    <script src="../../script/dashboard.js"></script>
    <script src="../../script/phead.js"></script>
    <script src="../../script/student.js"></script>
</body>
</html>
