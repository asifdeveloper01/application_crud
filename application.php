
<?php
include('header.php');

$conn = mysqli_connect("localhost", "root", "", "apps") or die("Connection is not secured");

$query = "SELECT * FROM  `studentdata` ORDER BY `id` DESC  ";
$result11= mysqli_query($conn, $query) or die("can't run query connected");


$rows12 = mysqli_fetch_array($result11);
?>
<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-lg-3">
            <div class="card">

                <h2 class="card-header">Enter Student Data</h2>
                <?php if (!empty($_GET['error'])) {
                ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Try Again!</strong> <?php echo $_GET['error']; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                <?php
                } ?>
                <form action="app2.php" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Student name:</label>
                            <input type="text " class="form-control" name="Sname">
                        </div>
                        <div class="form-group">
                            <label>Father Name:</label>
                            <input type="text " class="form-control" name="Fname">

                        </div>
                        <div class="form-group">
                            <label>Father PhoneNumber:</label>
                            <input type="number " class="form-control" name="Fnumber">

                        </div>
                        <div class="form-group">
                            <label>Student Picture:</label>
                            <input type="file" class="form-control" name="studentimg">
                        </div>
                        <div class="form-group">
                            <label>Select Class:</label>
                            <!-- <input type="text " class="form-control"  name="user"> -->
                            <select id="option" name="classname">
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
                            <button type="submit" class="btn btn-danger" name="submit" value="SUBMIT"><i class="fa-solid fa-floppy-disk pr-2"></i>Submit</button>
                            <!-- <input type="submit "  class="btn btn-danger" name="submit" value="Submit" />  -->
                        </div>

                    </div>
                </form>
            </div>






        </div>
        <div class="col-lg-9">
            
            <div class="card">
                <div class="card-header">
                    All Application <?php echo $_SESSION['username']; ?>
                </div>
                <div class="row">
                    <div class="card-body">
                        <?php while($rows12 = mysqli_fetch_array($result11)){?>
                            <table class="table table-bordered table-hover table-strip">
                                <tr>
                                    <th colspan="6">
                                        Student
                                        <a href="action/delete.php?id= <?php echo $rows12['id']; ?>" class="text-light";><button class="btn btn-danger btn-md float-right  ml-1  "><i class="fa-solid fa-trash"> </i>Delete</button></a> 
                                        <a href="update.php?id= <?php echo $rows12['id']; ?>"class="text-light";><button class="btn btn-success btn-md float-right ml-3 "><i class="fa-solid fa-edit"> </i>Edit</button></a>
                                    </th>

                                </tr>
                                <tr>
                                    <th>ID</th>
                                    <th>Student Name</th>
                                    <th>Father Name</th>
                                    <th>Father Phonenumber</th>
                                    <th>Student Picture</th>
                                    <th>Class</th>
                                </tr>
                                <tr>
                                    <td><?php  echo $rows12['id']; ?></td>
                                    <td><?php echo $rows12['studentname']; ?></td>
                                    <td><?php echo $rows12['fathername']; ?> </td>
                                    <td><?php echo $rows12['phonenumber']; ?></td>
                                    <td><button class="btn btn-danger btn-sm text-light"><i class="fa-solid fa-download"> </i> <a href="asif/img/<?php echo $rows12['docs']; ?>">Download</a></button></td>
                                    <td><?php echo $rows12['classno']; ?></td>
                                </tr>
                            </table>
                            <?php } ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>