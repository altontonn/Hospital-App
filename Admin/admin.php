<style>
    ul > li.nav-item{
        margin-bottom: 1rem;
    }
</style>
<div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100"  style="">
    <div class="modal-header">
        <a href="" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-5 d-none d-sm-inline text-primary text-center">Admin Dashboard</span>
        </a>
    </div>
    
    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start pt-3" id="menu">
        <li class="nav-item">
            <a href="../Dashboard/admin-profile.php" class="nav-link align-middle px-0">
            <img src="https://img.icons8.com/office/80/000000/test-account.png" alt="profile image" style="height: 2rem; width: 2rem; color:aliceblue;"><span class="ms-1 d-none d-sm-inline">Profile</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="../records/patients.php" class="nav-link align-middle px-0">
            <img src="https://img.icons8.com/office/80/000000/hospital-bed.png" alt="patients" style="height: 2rem; width: 2rem; color:aliceblue;"><span class="ms-1 d-none d-sm-inline">Patients</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
            <img src="https://img.icons8.com/external-flaticons-flat-flat-icons/100/000000/external-caregiver-inhome-service-flaticons-flat-flat-icons-3.png" alt="caregiver image" style="height: 2rem; width: 2rem; color:aliceblue;"><span class="ms-1 d-none d-sm-inline">Caregiver</span> </a>
            <ul class="collapse nav flex-column ms-5 text-white" id="submenu1" data-bs-parent="#menu">
                <li class="w-100">
                    <a href="../records/caregiver.php" class="nav-link px-0 text-white"><img src="https://img.icons8.com/office/80/000000/test-account.png" alt="profile image" style="height: 1rem; width: 1rem; color:aliceblue;"> <span class="d-none d-sm-inline">Profile</span></a>
                </li>
                <li>
                    <a href="../admin-panel/caregiver/caregiver.php" class="nav-link px-0 text-white"><img src="https://img.icons8.com/office/80/000000/overtime.png" alt="profile image" style="height: 1rem; width: 1rem; color:aliceblue;"> <span class="d-none d-sm-inline">Schedules</span></a>
                </li>
                <li>
                    <a href="#" class="nav-link px-0 text-white"><img src="https://img.icons8.com/office/80/000000/new-job.png" alt="profile image" style="height: 1rem; width: 1rem; color:aliceblue;"> <span class="d-none d-sm-inline">Appointments</span></a>
                </li>
            </ul>
        </li>
        
        <li class="nav-item">
            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
            <img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/000000/external-counselor-psychology-flaticons-lineal-color-flat-icons-4.png" alt="counsellor image" style="height: 2rem; width: 2rem; color:aliceblue;"> <span class="ms-1 d-none d-sm-inline">Counsellor</span> </a>
            <ul class="collapse nav flex-column ms-5 text-white" id="submenu2" data-bs-parent="#menu">
                <li class="w-100">
                    <a href="../records/counsellor.php" class="nav-link px-0 text-white"><img src="https://img.icons8.com/office/80/000000/test-account.png" alt="profile image" style="height: 1rem; width: 1rem; color:aliceblue;"> <span class="d-none d-sm-inline">Profile</span></a>
                </li>
                <li>
                    <a href="../admin-panel/counsellor/counsellor.php" class="nav-link px-0 text-white"><img src="https://img.icons8.com/office/80/000000/overtime.png" alt="profile image" style="height: 1rem; width: 1rem; color:aliceblue;"> <span class="d-none d-sm-inline">Schedules</span></a>
                </li>
                <li>
                    <a href="#" class="nav-link px-0 text-white"><img src="https://img.icons8.com/office/80/000000/new-job.png" alt="profile image" style="height: 1rem; width: 1rem; color:aliceblue;"> <span class="d-none d-sm-inline">Apointments</span></a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
            <img src="https://img.icons8.com/office/80/000000/nurse-female--v1.png" alt="counsellor image" style="height: 2rem; width: 2rem; color:aliceblue;"> <span class="ms-1 d-none d-sm-inline">Nurse</span> </a>
            <ul class="collapse nav flex-column ms-5 text-white" id="submenu3" data-bs-parent="#menu">
                <li class="w-100">
                    <a href="../records/nurse.php" class="nav-link px-0 text-white"><img src="https://img.icons8.com/office/80/000000/test-account.png" alt="profile image" style="height: 1rem; width: 1rem; color:aliceblue;"> <span class="d-none d-sm-inline">Profile</span></a>
                </li>
                <li>
                    <a href="../admin-panel/nurse/nurse.php" class="nav-link px-0 text-white"><img src="https://img.icons8.com/office/80/000000/overtime.png" alt="profile image" style="height: 1rem; width: 1rem; color:aliceblue;"> <span class="d-none d-sm-inline">Schedules</span></a>
                </li>
                <li>
                    <a href="#" class="nav-link px-0 text-white"><img src="https://img.icons8.com/office/80/000000/new-job.png" alt="profile image" style="height: 1rem; width: 1rem; color:aliceblue;"> <span class="d-none d-sm-inline">Apointments</span></a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#submenu4" data-bs-toggle="collapse" class="nav-link px-0 align-middle"><img src="https://img.icons8.com/external-flaticons-flat-flat-icons/100/000000/external-nutritionist-dieting-flaticons-flat-flat-icons.png" alt="nutritionist image" style="height: 2rem; width: 2rem; color:aliceblue;"><span class="ms-1 d-none d-sm-inline">Nutritionist</span> </a>
            <ul class="collapse nav flex-column ms-5 text-white" id="submenu4" data-bs-parent="#menu">
                <li class="w-100">
                    <a href="../records/nutritionist.php" class="nav-link px-0 text-white"><img src="https://img.icons8.com/office/80/000000/test-account.png" alt="profile image" style="height: 1rem; width: 1rem; color:aliceblue;"> <span class="d-none d-sm-inline">Profile</span></a>
                </li>
                <li>
                    <a href="../admin-panel/nutritionist/nutritionist.php" class="nav-link px-0 text-white"><img src="https://img.icons8.com/office/80/000000/overtime.png" alt="profile image" style="height: 1rem; width: 1rem; color:aliceblue;"> <span class="d-none d-sm-inline">Schedules</span></a>
                </li>
                <li>
                    <a href="#" class="nav-link px-0 text-white"><img src="https://img.icons8.com/office/80/000000/new-job.png" alt="profile image" style="height: 1rem; width: 1rem; color:aliceblue;"> <span class="d-none d-sm-inline">Apointments</span></a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#submenu5" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
            <img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/000000/external-physiotherapy-nursing-flaticons-lineal-color-flat-icons.png" alt="physiotheraphy image" style="height: 2rem; width: 2rem; color:aliceblue;"> <span class="ms-1 d-none d-sm-inline">Physiotheraphy</span> </a>
            <ul class="collapse nav flex-column ms-5 text-white" id="submenu5" data-bs-parent="#menu">
                <li class="w-100">
                    <a href="../records/physiotheraphy.php" class="nav-link px-0 text-white"><img src="https://img.icons8.com/office/80/000000/test-account.png" alt="profile image" style="height: 1rem; width: 1rem; color:aliceblue;"> <span class="d-none d-sm-inline">Profile</span></a>
                </li>
                <li>
                    <a href="../admin-panel/physiotheraphy/physiotheraphy.php" class="nav-link px-0 text-white"><img src="https://img.icons8.com/office/80/000000/overtime.png" alt="profile image" style="height: 1rem; width: 1rem; color:aliceblue;"> <span class="d-none d-sm-inline">Schedules</span></a>
                </li>
                <li>
                    <a href="#" class="nav-link px-0 text-white"><img src="https://img.icons8.com/office/80/000000/new-job.png" alt="profile image" style="height: 1rem; width: 1rem; color:aliceblue;"> <span class="d-none d-sm-inline">Apointments</span></a>
                </li>
            </ul>
        </li>
    </ul>
    <hr>
    <div class="dropdown pb-4">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://lh3.googleusercontent.com/p/AF1QipMHO5l8JMT1a4CU7_K-7f_CP3gC1LIQ05NBpD1u=w768-h768-n-o-v1" alt="go care" width="30" height="30" class="rounded-circle">
            <span class="d-none d-sm-inline mx-1"><?php echo $row_admin['Firstname'] ?></span>
        </a>
        <ul class="dropdown-menu">
            <!-- <li><a class="dropdown-item" href="admin.php">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li> -->
            <li class="px-1"><a class="dropdown-item text-center" href="../signout/admin.php">Sign out</a></li>
        </ul>
    </div>
</div>

