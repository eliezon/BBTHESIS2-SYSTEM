<?php include '../../template/header.php'; ?>
<link rel="stylesheet" href="../../styles/admin.css">
<link rel="stylesheet" href="../../styles/phead.css">

    <!-- START OF SIDEBAR -->
        <div class="sidebar">
            <div class="sidebar-button btn">
                <div style="text-align:center">
                <img src="../../assets/images/scclogo.png" alt="">
                </div>
                <button onclick="activateButton(this);showDashboard()" class="active"><i class='bx bxs-dashboard'></i>Dashboard</button>
                <button onclick="activateButton(this);showManageUser()"><i class='bx bx-user'></i>Manage Users</button>
            </div>
        
        </div>
    <!-- END OF SIDEBAR -->


    <!-- START OF CENTER -->
        <div class="center">
         
        <div class="table-con-header" id="table-con-header">
        <p id="header-text">DASHBOARD</p>
       </div>
            <!-- start of content1 -->
            <di class="content1">


            <!-- start of con1 -->
            <!-- <div class="center-con con1">
                <h1>Welcome,</h1>
                <h3>Super Admin !</h3>
                <br>
            </div> -->
            <!-- end of con1 -->


            <!-- start of ADMIN REPORTS-->
            <?php include '../../pages/admin-reports.php' ?>
            <!-- end of ADMIN REPORTS-->


            <!-- start of con3 MANAGE USERS-->
            <?php include '../../pages/manage-users.php' ?>
            <!-- end of con3 MANAGE USERS-->

             <!-- start of con4 ADD USER FORM-->
             <?php include '../../forms/add-user-form.php' ?>
            <!-- end of con5  ADD USER FORM-->

            </div>
            <!-- end of content1 -->

        </div>
    <!-- END OF CENTER -->

    </div>
  <!-- END OF CONTAINER -->

    <script src="../../script/dashboard.js"></script>
    <script src="../../script/admin.js">
        
    </script>
</body>
</html>
