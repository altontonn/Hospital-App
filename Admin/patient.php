<style>
    ul>li.list-group-item{
        background-color: #212529;
    }
</style>
<div class="d-flex flex-column rounded align-items-center px-3 pt-2 min-vh-100" style="position: fixed;background-color: #212529;">
    <div class="modal-header">
        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-5 d-none d-sm-inline text-primary">Choose Your Appointment</span>
        </a>
    </div>
    <ul class="list-group list-group-flush flex-column" id="menu">
        <li class="list-group-item d-flex justify-content-center">
            <a href="../appointments/caregiver.php" class="nav-link d-flex align-items-center px-0">
                <i class="fs-4 bi bi-person-circle"></i><span class="ms-1 d-none d-sm-inline">Caregiver</span> </a>
        </li>
        <li class="list-group-item d-flex justify-content-center">
            <a href="../appointments/counsellor.php" class="nav-link d-flex align-items-center align-middle px-0">
                <i class="fs-4 fas fa-user-friends"></i> <span class="ms-1 d-none d-sm-inline">Counsellor</span>
            </a>
        </li>
        <li class="list-group-item d-flex justify-content-center">
            <a href="../appointments/nurse.php" class="nav-link d-flex align-items-center px-0 align-middle">
            <i class="fs-4 fas fa-user-nurse"></i><span class="ms-1 d-none d-sm-inline">Nurse</span></a>
        </li>
        <li class="list-group-item d-flex justify-content-center">
            <a href="../appointments/nutritionist.php" class="nav-link d-flex align-items-center px-0 align-middle">
            <img src="../img/diet.png" alt="nutritionist" class="bg-primary" style="height: 20px; width: 20px;"> </i><span class="ms-1 d-none d-sm-inline">Nutritionist</span></a>
        </li>
        <li class="list-group-item d-flex justify-content-center">
            <a href="../appointments/physiotheraphy.php" class="nav-link d-flex align-items-center px-0 align-middle">
            <img src="../img/psychotherapy.png" alt="nutritionist" class="bg-primary" style="height: 20px; width: 20px;"><span class="ms-1 d-none d-sm-inline">Psychotherapist</span></a>
        </li>
        <li class="list-group-item d-flex justify-content-center">
            <a href="../signout/patient.php" class="nav-link px-0 align-middle">
                <i class="fs-4 bi bi-power"></i><span class="ms-1 d-none d-sm-inline">Logout</span> </a>
        </li>
    </ul>
</div>
