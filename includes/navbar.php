


<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-book-open"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Factset Skill Ready </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="main.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>

<!-- students list Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
        <span>students</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Custom Components:</h6> -->
            <a class="collapse-item" href="addStudents.php">Add Students</a>
            <a class="collapse-item" href="studentList.php">Students List</a>
            <a class="collapse-item" href="upcomingstudent.php">Add UpComing Students</a>
            <a class="collapse-item" href="upcomingstudentlist.php">UpComing Students</a>

        </div>
    </div> 
</li>

<!-- centers list Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsecenter"
        aria-expanded="true" aria-controls="collapsecenter">
        <i class="fa fa-home" aria-hidden="true"></i>
        <span>center</span>
    </a>
    <div id="collapsecenter" class="collapse" aria-labelledby="headingcenter"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Custom Utilities:</h6> -->
            <a class="collapse-item" href="addCenters.php">Create Centers</a>
            <a class="collapse-item" href="centersList.php">Centers List</a>
            <!-- <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a> -->
        </div>
    </div>
</li>

<!-- Uers list Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser"
        aria-expanded="true" aria-controls="collapseUser">
        <i class="fa fa-users" aria-hidden="true"></i>
        <span>user</span>
    </a>
    <div id="collapseUser" class="collapse" aria-labelledby="headingUser"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Custom Utilities:</h6> -->
            <a class="collapse-item" href="">Create User</a>
            <a class="collapse-item" href="">User List</a>
            <!-- <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a> -->
        </div>
    </div>
</li>

<!-- course Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsecourse"
        aria-expanded="true" aria-controls="collapsecourse">
        <i class="fa fa-book" aria-hidden="true"></i>
        <span>course</span>
    </a>
    <div id="collapsecourse" class="collapse" aria-labelledby="headingcourse"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="">Create Course</a>
            <a class="collapse-item" href="">Course List</a>
            
        </div>
    </div>
</li>

<!-- Nav Item - Tables -->

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">
<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
 <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
<!-- Sidebar Message -->
<div class="sidebar-card d-none d-lg-flex">
 <img class="sidebar-card-illustration mb2" src="https://nirmaan.org/img/logo_full_trans_2.png" alt="...">
 <p class="text-center mb2"><strong>Nirmaan Organisation</strong> is with courses, and
more!</p>
 <!-- <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sbadmin-pro">Upgrade to Pro!</a> -->
</div>
</ul>
