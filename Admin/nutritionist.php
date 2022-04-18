<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li>
                        <a href="nutritionist.php" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi bi-person-circle"></i><span class="ms-1 d-none d-sm-inline">Profile</span> </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                            <i class="fs-4 bi bi-clock"></i> <span class="ms-1 d-none d-sm-inline">Nutritionist schedule</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                        <i class="fs-4 bi bi-clipboard-plus"></i><span class="ms-1 d-none d-sm-inline">Appointments</span></a>
                    </li>
                    <li>
                        <a href="../signout/nutritionist.php" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi bi-power"></i><span class="ms-1 d-none d-sm-inline">Logout</span> </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col py-3">
        <?php
            include('../Dashboard/nutritionist-profile.php')
        ?>
        </div>
    </div>
</div>