
  <?php  
 if(isset($_POST["nurse_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "home_based_care");  
      $query = "SELECT * FROM `nurse_appointment` WHERE `appointment_no` = '".$_POST["nurse_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <h4 class="text-center">Patient Details</h4>
           <table class="table">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
           <tbody>
                <tr>
                    <th style="width: 40%;"class="text-right">Patient Name: </th>
                    <td> '.$row["patient_name"].'</td>
                </tr>
                <tr>
                    <th style="width: 40%;"class="text-right">Contact no: </th>
                    <td>'.$row["contact"].'</td>
                </tr>
            </tbody>
           ';  
      $output .= '  
           </table>  
                <h4 class="text-center">nurse Details</h4>
            <table class="table">
                <tbody>
                    <tr>
                        <th style="width: 40%;"class="text-right">nurse Name: </th>
                        <td>'.$row["nurse_name"].'</td>
                    </tr>
                    <tr>
                        <th style="width: 40%;"class="text-right">Appointment Date: </th>
                        <td>'.$row["appointment_date"].'</td>
                    </tr>
                    <tr>
                        <th style="width: 40%;"class="text-right">Appointment Day: </th>
                        <td>'.$row["appointment_day"].'</td>
                    </tr>
                    <tr>
                        <th style="width: 40%;"class="text-right">Appointment Time: </th>
                        <td>'.$row["appointment_time"].'</td>
                    </tr>
                </tbody>
                ';
        }
        $output .= '
            </table>
      </div>  
      ';  
      echo $output;  
    }  
 ?>