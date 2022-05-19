<?php
readfile("../index.html");
include("../connect.php");
session_start();
if(empty($_SESSION['id']) || $_SESSION['id'] == ''){
    header("Location:../Auth/nurse-login.php");
    die();
}
$query1 = "SELECT * FROM `nurse_appointment`";
$result1 = mysqli_query($con, $query1);
// $row1 = mysqli_fetch_array($result1);

$query = "SELECT *  FROM `nurse_appointment`";
$result = mysqli_query($con, $query);
?>
<style>
    .table{
        font-family: Arial, Helvetica, sans-serif;
    }
    
</style>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 min-vh-100" style="background-color: #212529;">
            <?php include("../Admin/nurse.php"); ?>
        </div>
        <div class="col py-3">
        <h1 class="h3 mb-4 text-gray-800">Appointment Management</h1>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-sm-6">
                            <h6 class="m-0 font-weight-bold text-primary">Appointment List</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th>Appointment No.</th>
                                    <th>Patient Name</th>
                                    <th>Appointment Date</th>
                                    <th>Appointment Time</th>
                                    <th>Appointment Day</th>
                                    <th>View</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            while($row = mysqli_fetch_array($result)){
                            ?>
                                <input type="hidden" name="nurse_id" id="nurse_id" /> 
                                <tr>
                                    <td><?php echo $row["appointment_no"]?></td>
                                    <td><?php echo $row["patient_name"]?></td>
                                    <td><?php echo $row["appointment_date"]?></td>
                                    <td><?php echo $row["appointment_time"]?></td>
                                    <td><?php echo $row["appointment_day"]?></td>
                                    <td><button type="button" name="view" value="view" class="btn btn-info btn-circle btn-sm view_button" id="<?php echo $row['appointment_no'] ?>"><i class="fas fa-eye"></i></button></td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL SECTION -->
        <div class="modal" id="dataModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="text-center" id="modal_title">View Appointment Details</h4>
                    </div>
                    <div class="modal-body" id="nurse_detail">  
                    </div>  
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF MODAL -->
    </div>
</div>
<script>
    $(document).ready(function(){
        $(document).on('click', '.view_button', function(){  
           var nurse_id = $(this).attr("id");  
           if(nurse_id != '')  
           {  
                $.ajax({  
                     url:"modal-nurse.php",  
                     method:"POST",  
                     data:{
                         nurse_id:nurse_id
                        },  
                     success:function(data){  
                          $('#nurse_detail').html(data);  
                          $('#dataModal').modal('show');  
                    }  
                });  
            }            
        });  
    })
</script>