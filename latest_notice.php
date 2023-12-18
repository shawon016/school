<?php
    // session_start();

    // if(!empty($_SESSION['login'])){
    //     echo $_SESSION['login'];
    // }
    // else{
    //     header('location:login.php');
    // }
?>

<!-- <h3><a href="logout.php">Logout</a></h3> -->

<?php
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Latest Notice</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <div class="shadow-lg p-2 bg-body-tertiary rounded">
            <span class="fs-3 fw-bold ms-3 text-info">Admin Panel</span>
            <span class="fs-3 fw-bold ms-5 text-primary">TOWNSRIPUR S. C HIGH SCHOOL</span>
        </div>
            
<div class="row">
    <div class="col-2 shadow-lg p-2 bg-body-tertiary rounded">
        <ul>
            <li class="nav-item p-2 m-1 ms-3 fw-bold">
                <a class="nav-link " href="dashboard.php">
                <i class="bi bi-grid"></i>
                <span style="color: red;">Dashboard</span>
                </a>
            </li>
            <li class="nav-item p-2 m-1 ms-3 fw-bold">
                <a class="nav-link " href="student.php">
                <i class="bi bi-grid"></i>
                <span class="text-primary">Student</span>
                </a>
            </li>
            <li class="nav-item p-2 m-1 ms-3 fw-bold">
                <a class="nav-link " href="teacher.php">
                <i class="bi bi-grid"></i>
                <span class="text-success">Teacher</span>
                </a>
            </li>
            <li class="nav-item p-2 m-1 ms-3 fw-bold">
                <a class="nav-link " href="latest_notice.php">
                <i class="bi bi-grid"></i>
                <span class="text-warning">Latest Notice</span>
                </a>
            </li>
            <li class="nav-item p-2 m-1 ms-3 fw-bold">
                <a class="nav-link " href="#">
                <i class="bi bi-grid"></i>
                <span class="text-warning-emphasis">Class Routine</span>
                </a>
            </li>
            <li class="nav-item p-2 m-1 ms-3 fw-bold">
                <a class="nav-link " href="#">
                <i class="bi bi-grid"></i>
                <span class="text-info">Attendance</span>
                </a>
            </li>
            <li class="nav-item p-2 m-1 ms-3 fw-bold">
                <a class="nav-link " href="#">
                <i class="bi bi-grid"></i>
                <span class="text-secondary">Staff</span>
                </a>
            </li>
            <li class="nav-item p-2 m-1 ms-3 fw-bold">
                <a class="nav-link " href="#">
                <i class="bi bi-grid"></i>
                <span style="color: green;">Student's Fees</span>
                </a>
            </li>
            <li class="nav-item p-2 m-1 ms-3 fw-bold">
                <a class="nav-link " href="#">
                <i class="bi bi-grid"></i>
                <span class="text-danger">Student's Marks</span>
                </a>
            </li>
            <li class="nav-item p-2 m-1 ms-3 fw-bold">
                <a class="nav-link " href="#">
                <i class="bi bi-grid"></i>
                <span style="color: limegreen;">Result</span>
                </a>
            </li>
            <li class="nav-item p-2 m-1 ms-3 fw-bold">
                <a class="nav-link " href="#">
                <i class="bi bi-grid"></i>
                <span style="color: blue;">Gallery</span>
                </a>
            </li>
            <li class="nav-item p-2 m-1 ms-3 fw-bold">
                <a class="nav-link " href="logout.php">
                <i class="bi bi-grid"></i>
                <span style="color: red;">Logout</span>
                </a>
            </li>  
        </ul>
    </div>
    <div class="col-9 mt-5 ms-4 shadow-lg bg-body-tertiary rounded">
        <div class="d-flex justify-content-between m-3">
            <h3 class="fw-bold">All Latest Notices</h3>
            <button type="button" class="btn btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Latest Notice</button>
        </div>
        <table class="table table-bordered text-center ">
            <tr>
                <th>Latest Notice's ID</th>
                <th>Latest Notice's Date</th>
                <th>Latest Notice's Description</th>
                <th>Action</th>
            </tr>
            <?php
                $sql = "SELECT * FROM latest_notice";
                $result = mysqli_query($conn, $sql);

                if(!$result){
                    die("SQL Statement Wrong");
                }
                else{
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td><?php echo $row['latest_notice_id']; ?></td>
                            <td><?php echo $row['latest_notice_date']; ?></td>
                            <td><?php echo $row['latest_notice_description']; ?></td>
                            <td>
                                <a href="update_latest_notice.php?latest_notice_id=<?php echo $row['latest_notice_id'];?>" class="btn btn-success">Edit</a>
                                <a href="delete_latest_notice.php?latest_notice_id=<?php echo $row['latest_notice_id'];?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php
                    }
                }
            ?>
        </table>
    </div>
    <div class="col-1"></div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-4 fw-bold" id="exampleModalLabel">Latest Notice Information</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="add_latest_notice.php" method="POST">
            <div class="form-group mb-2">
                <label for="" class="pb-2 fw-bold">Latest Notice's ID</label>
                <input type="text" name="latest_notice_id" class="form-control">
            </div>
            <div class="form-group mb-2">
                <label for="" class="pb-2 fw-bold">Latest Notice's Date</label>
                <input type="date" name="latest_notice_date" class="form-control">
            </div>
            <div class="form-group mb-2">
                <label for="" class="pb-2 fw-bold">Latest Notice's Description</label>
                <input type="text" name="latest_notice_description" class="form-control">
            </div>
                <button type="submit" name="add_latest_notice" class="btn btn-primary fw-bold">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>





<main id="main" class="main">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

