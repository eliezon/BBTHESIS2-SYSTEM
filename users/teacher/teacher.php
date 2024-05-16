<?php include '../../template/header.php'; ?>
<link rel="stylesheet" href="../../styles/teacher.css">

    <!-- START OF SIDEBAR -->
        <div class="sidebar">
            <div class="sidebar-button">
                <div style="text-align:center">
                <img src="../../assets/images/scclogo.png" alt="">
                </div>
                <button onclick="activateButton(this);showDashboard()" class="active"><i class='bx bxs-dashboard'></i>Dashboard</button>
                <button onclick="activateButton(this);showLoads()"><i class='bx bxs-book'></i>Loads</button>
                <button onclick="activateButton(this);showAnnouncement()"><i class='bx bxs-volume-low'></i>Announcement</button>
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
    
        <div class="table-con-header" id="table-con-header">
        <p id="header-text">DASHBOARD</p>
       </div>
        
        <!-- start of content1 -->
        <div class="content1">

        <!-- start of dashboard-con -->
        <div class="dashboard-con" id="dashboard-con">


        <!-- start of con1 -->
             
        <!-- end of con1    -->
        

        <!-- start of con2 -->
        <div class="center-con con2">
                
        </div>
        <!-- end of con2 -->


        <!-- start of con3  TEACHER REPORTS-->  
        <?php include '../../pages/teacher-reports.php' ?>
        <!-- end of con3  TEACHER REPORTS-->

      
        </div>
        <!-- end of dashboard-con -->


            
                <!-- start of LOADS -->
                <?php include '../../pages/loads.php' ?>
                <!-- end of LOADS -->


                <!-- start of STUDENTS -->
                <?php include '../../pages/students.php' ?>
                <!-- end of STUDENTS -->


                <!-- start of GRADE FORM -->
                <?php include '../../forms/grade-form.php' ?>
                <!-- end of GRADE FORM -->



                <!-- start of ANNOUNCEMENT -->
                <?php include '../../pages/announcement.php' ?>    
                <!-- end of ANNOUNCEMENT -->

                
                </div>
                <!-- end of content1 -->
                

            </div>
        <!-- END OF CENTER -->
      

    </div>
    <!-- END OF CONTAINER -->
    <script src="../../script/dashboard.js"></script>
    <script src="../../script/teacher.js"></script>
</body>
</html>
