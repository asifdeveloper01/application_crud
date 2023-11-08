<?php
include("header.php");
?>



<?php 
$STU_id = $_GET["id"];
$query = "SELECT * FROM `studentdata` WHERE  id = {$STU_id}";


$conn = mysqli_connect("localhost", "root", "", "apps") or die("Connection is not secured");
// $update = "UPDATE `studentdata` SET `studentname`='$name',`fathername`='$Fame',`phonenumber`='$Fnumber' ,`classno`='$classname' WHERE `id`= $id  ";

$result = mysqli_query($conn, $query) or die("not connected");
if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {


?>
        <div class="card">

            <h2 class="card-header">UPDATE OLD  Record</h2>
            <form action="action/updatedata.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">   
                        <label>Student name:</label>
                        <input type="hidden" class="form-control" name="sid"  value="<?php echo $row['id']; ?>">
                        <input type="text " class="form-control" name="Sname" value="<?php echo $row['studentname']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Father Name:</label>
                        <input type="text " class="form-control" name="Fname" value="<?php echo $row['fathername']; ?>">

                    </div>
                    <div class="form-group">
                        <label>Father PhoneNumber:</label>
                        <input type="number " class="form-control" name="Fnumber" value="<?php echo $row['phonenumber']; ?>">

                    </div>
                    <div class="form-group">
                        <label>Student Picture:</label>
                        <input type="file" class="form-control" name="studentimg" value="<?php echo $row['studentname']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Select Class:</label>
                        <!-- <input type="text " class="form-control"  name="user"> -->
                        <select id="option" name="classname" value="<?php echo $row['classno']; ?>">
                            <option id="1">playgroup</option>
                            <option id="1">Nursery</option>
                            <option id="1">1</option>
                            <option id="1">2</option>
                            <option id="1">3</option>
                            <option id="1">4</option>
                            <option id="1">5</option>
                            <option id="1">6</option>
                            <option id="1">7</option>
                            <option id="1">8</option>
                        </select>


                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success" name="submit" value="SUBMIT"><i class="fa-solid fa-edit pr-2"></i>Submit</button>
                        <!-- <input type="submit "  class="btn btn-danger" name="submit" value="Submit" />  -->
                    </div>

                </div>
            </form>
        <?php } ?>
        </div>
    <?php } ?>