<?php include '../../template/header.php'; ?>
<link rel="stylesheet" href="../../styles/phead.css">

    <!-- START OF SIDEBAR -->
        <div class="sidebar">
            <div class="sidebar-button">
                <div style="text-align:center">
                <img src="../../assets/images/scclogo.png" alt="">
                </div>
                <button onclick="activateButton(this);showDashboard()" class="active"><i class='bx bxs-dashboard'></i>Dashboard</button>
                <button onclick="activateButton(this);hideDashboard()"><i class='bx bxs-file'></i>Enrollment</button>
                <button onclick="activateButton(this)"><i class='bx bxs-medal'></i>View Grades</button>
                <button onclick="activateButton(this)"><i class='bx bx-calendar-week'></i>Class Schedule</button>
                <button onclick="activateButton(this)"><i class='bx bxs-volume-low'></i>Announcement</button>
                <button onclick="activateButton(this)"><i class='bx bx-bell'></i>Notification</button>
                <button onclick="activateButton(this)"><i class='bx bx-support'></i>Help & Support</button>
                <button onclick="activateButton(this)"><i class='bx bx-cog'></i>Setting</button>
                <button onclick="activateButton(this)"><i class='bx bx-log-out'></i>Logout</button>
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


           <!-- start of content1 -->
            <div class="content1">

        <!-- start of con1 -->
        <?php include '../../template/dashboard_cover.php' ?>
        <!-- end of con1 -->


        <!-- start of con3 -->
            <div class="center-con con3">
                
                <div style="display:flex;justify-content:space-between;align-items:center;flex-wrap: wrap;"><p>DEPARTMENTS</p> 
                <select name="" id="">
                    <option value="">All</option>
                    <option value="">1st Year</option>
                    <option value="">2nd Year</option>
                    <option value="">3rd Year</option>
                    <option value="">4th Year</option>
                </select>
                </div>

        <!-- start of reportcart -->
            <div class="reportcard">

               <div class="report-card">
                    <p>BSIT</p>
                    <img src="../../assets/images/bsitlogo.png" alt="">
                    <code id="student">ENROLLED</code>
                    <!-- <code>94</code> -->
                    <code>0</code>
                </div>

                <div class="report-card">
                    <p>BSBA</p>
                    <img src="../../assets/images/bsbalogo.png" alt="">
                    <code id="student">ENROLLED</code>
                    <!-- <code>103</code> -->
                    <code>0</code>
                </div>

                <div class="report-card">
                    <p>BSCRIM</p>
                    <img src="../../assets/images/bscrimlogo.png" alt="" style="width:45px">
                    <code id="student">ENROLLED</code>
                    <!-- <code>98</code> -->
                    <code>0</code>
                </div>

                <div class="report-card">
                <p>BSED</p>
                    <img src="" alt="">
                    <code id="student">ENROLLED</code>
                    <!-- <code>112</code> -->
                    <code>0</code>
                </div>

                <div class="report-card">
                    <p>BSHM</p>
                    <img src="" alt="">
                    <code id="student">ENROLLED</code>
                    <!-- <code>101</code> -->
                    <code>0</code>
                </div>

                <div class="report-card">
                    <p>BSTM</p>
                    <img src="" alt="">
                    <code id="student">ENROLLED</code>
                    <!-- <code>93</code> -->
                    <code>0</code>
                </div>

                </div>


                 <br><br>

                <div class="reportcard">
               
                <div class="report-card">
                    <p>ENROLLEES</p>
                    <img src="../../assets/images/graduating-student.png" alt="">
                    <!-- <code id="student">BSIT</code>
                    <code>34</code> -->
                    <code>0</code>
                </div>

                <select name="" id="">
                    <option value="">All</option>
                    <option value="">1st Year</option>
                    <option value="">2nd Year</option>
                    <option value="">3rd Year</option>
                    <option value="">4th Year</option>
                </select>

                <select name="" id="">
                    <option value="">All</option>
                    <option value="">BSIT</option>
                    <option value="">BSBA</option>
                    <option value="">BSCRIM</option>
                    <option value="">BSED</option>
                    <option value="">BSHM</option>
                    <option value="">BSTM</option>
                </select>
                
                <div class="report-card">
                    <p>TEACHER</p>
                    <img src="../../assets/images/experience.png" alt="" style="width:60px">
                    <!-- <code id="student">BSIT</code>
                    <code>9</code> -->
                    <code>0</code>
                </div>

                </div>
        
            </div>
            <!-- end of reportcard -->


                <!-- start of con2 -->
                <div class="center-con con2">
               
                </div>
                <!-- end of con2 -->

               </div>
            <!-- end of content1 -->


                   
            </div>
    <!-- END OF CENTER -->


        <?php include '../../template/right-bar.php' ?>

    </div>
    <!-- END OF CONTAINER -->

    <script src="../../script/dashboard.js"></script>
</body>
</html>
