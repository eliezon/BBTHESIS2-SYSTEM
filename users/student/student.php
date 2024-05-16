<?php include '../../template/header.php'; ?>
        
    <!-- START OF SIDEBAR -->
        <div class="sidebar">
            
            <div class="sidebar-button">
                <div style="text-align:center">
                <img src="../../assets/images/scclogo.png" alt="">
                </div>
                <button onclick="activateButton(this);showDashboard()" class="active"><i class='bx bxs-dashboard'></i>Dashboard</button>  
                <button onclick="activateButton(this)"><i class='bx bxs-file'></i>Enrollment Status</button>
                <button onclick="activateButton(this);showGrade()"><i class='bx bxs-medal'></i>My Grades</button>
                <button onclick="activateButton(this);showSchedule()"><i class='bx bx-calendar-week'></i>Class Schedule</button>
                <!-- <button onclick="activateButton(this)"><i class='bx bx-support'></i>Help & Support</button>
                <button onclick="activateButton(this)"><i class='bx bx-cog'></i>Settings</button> -->
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
        <div class="center" id="center">
            
        <?php include '../../template/dashboard_con_header.php' ?>

        <!-- start of content1 -->
            <div class="content1">
          
            <!-- start of dashboard-con -->
            <div class="dashboard-con" id="dashboard-con">


                <!-- start of con1 DASHBOARD COVER -->
                <?php include '../../template/dashboard_cover.php' ?>
                <!-- end of con1 DASHBOARD COVER -->

                
                <!-- start of con3 ENROLLMENT POSTER -->
                <?php include '../../pages/student-pages/enrollment-poster.php' ?>
                <!-- end of con3 ENROLLMENT POSTER -->


                <!-- start of ANNOUNCEMENT -->
                <?php include '../../pages/student-pages/announcement.php' ?>
                <!-- end of ANNOUNCEMENT -->
                
                </div>
                <!-- end of dashboard-con -->



                <!-- start of con4 ENROLLMENT FORM -->
                <?php include '../../forms/enrollment-form.php' ?>
                <!-- end of con4 ENROLLMENT FORM -->


                <!-- start of con5 PROFILE --> 
                <?php include '../../pages/student-pages/profile.php' ?>
                <!-- end of con5 PROFILE -->


                <!-- start of ENROLLMENT -->
                <?php include '../../pages/student-pages/enrollment.php' ?>
                <!-- end of con6 ENROLLMENT -->


                <!-- start of con7 CLASS SCHEDULE -->
                <?php include '../../pages/student-pages/schedule.php' ?>
                <!-- end of con7 CLASS SCHEDULE -->


                <!-- start of con8 GRADES -->
                <?php include '../../pages/student-pages/grades.php' ?>
                <!-- end of con8 GRADES -->

        </div>
        <!-- end of content1 -->


        </div>
    <!-- END OF CENTER -->

   
    <!-- START OF RIGHTBAR -->
        <?php include '../../template/right-bar.php' ?>
    <!-- END OF RIGHTBAR -->
            

    </div> 
    <!-- END OF CONTAINER -->
   


    <script src="../../script/dashboard.js"></script>
    <script src="../../script/student.js"></script>

</body>
</html>
