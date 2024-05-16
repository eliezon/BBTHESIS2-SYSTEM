<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Student Portal</title>
    <link rel="stylesheet" href="../../styles/student.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    <div class="container">
    <!-- START OF TOPBAR -->    
        <nav class="topbar" id="topbar">
            <div class="topleft">
                <a href="../../index.php" style="text-decoration:none; color:white;cursor:default">
                <h1>CSP<span>.</span></h1></a>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z" ></path></svg>
            </div>


            <div class="topright">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707A.996.996 0 0 0 3 16v2a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2a.996.996 0 0 0-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707A.996.996 0 0 0 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zm-7 5a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22z"></path></svg>
             
                <p>markeliezon@csp.edu.ph</p>
                <img src="../../assets/images/mark.jpg" alt="" style="width:50px; border-radius:50px">
                <button type="button" onclick="hideDashboard()" style="background: transparent;color    white;border:none;color:white;font-size:20px;margin-left:-20px"><i class='bx bx-chevron-down'></i></button>
                
                <button class="logout"><i class='bx bx-log-out'></i></button>
            </div>
        </nav>
    <!-- END OF TOPBAR   -->