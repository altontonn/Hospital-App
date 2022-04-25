<?php
readfile('index.html');
//$css = file_get_contents('index.css');
?>
<div class="cover">
  <div class="container mt-3">
    <h1 class="display-5 text-center text-white">Home Based Care</h1>
  </div>

  <ul class="nav justify-content-center flex-column">
    <li class="nav-item text-center">
      <button class="btn btn-outline-primary mb-3 btn-lg"><a class="nav-link active text-white" href="Auth/patient-login.php">Patient</a></button>
    </li>
    <li class="nav-item text-center">
      <button class="btn btn-outline-primary mb-3 btn-lg"><a class="nav-link text-white" href="Auth/admin-login.php">Admin</a></button>
    </li>
    <li class="nav-item text-center">
      <button class="btn btn-outline-primary mb-3 btn-lg"><a class="nav-link text-white" href="Auth/caregiver-login.php">Caregiver</a></button>
    </li>
    <li class="nav-item text-center">
      <button class="btn btn-outline-primary mb-3 btn-lg"><a class="nav-link text-white" href="Auth/physiotheraphy-login.php">Physiotheraphy</a></button>
    </li>
    <li class="nav-item text-center">
      <button class="btn btn-outline-primary mb-3 btn-lg"><a class="nav-link text-white" href="Auth/nurse-login.php">Nurse</a></button>
    </li>
    <li class="nav-item text-center">
      <button class="btn btn-outline-primary mb-3 btn-lg"><a class="nav-link text-white" href="Auth/counsellor-login.php">Counsellor</a></button>
    </li>
    <li class="nav-item text-center">
      <button class="btn btn-outline-primary mb-3 btn-lg"><a class="nav-link text-white" href="Auth/nutritionist-login.php">Nutritionist</a></button>
    </li>
  </ul>
</div>



