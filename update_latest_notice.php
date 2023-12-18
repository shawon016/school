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
<?php
    if(isset($_GET['latest_notice_id'])){
        $latest_notice_id = $_GET['latest_notice_id'];
    }
    $sql = "SELECT * FROM latest_notice WHERE latest_notice_id = '$latest_notice_id'";
    $result = mysqli_query($conn, $sql);

    if(!$result){
        die("SQL Statement Wrong");
    }
    else{
        $row = mysqli_fetch_assoc($result);
    }
?>

<?php 
    if(isset($_POST['update_latest_notice'])){
        $latest_notice_id = $_POST['latest_notice_id'];
        $latest_notice_date = $_POST['latest_notice_date'];
        $latest_notice_description = $_POST['latest_notice_description'];
        
        if(empty($latest_notice_date) || empty($latest_notice_description)){
            header("location:latest_notice.php?error=Please fill the form");
            exit();
        }
        else{
            $sql = "UPDATE latest_notice SET latest_notice_id = '$latest_notice_id', latest_notice_date = '$latest_notice_date', latest_notice_description = '$latest_notice_description' WHERE latest_notice_id = '$latest_notice_id'";
            
            $result = mysqli_query($conn, $sql);
            if(!$result){
                die("SQL Statement Wrong");
            }
            else{
                header("location:latest_notice.php?success=Latest Notice Updated Successfully");
                exit();
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Update Latest Notice</title>
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
    <div class="col-8 mt-5 ms-5 shadow-lg bg-body-tertiary rounded">
        <div class="m-5">
            <h3 class="text-center bg-info p-2 fw-bold">Latest Notice Information</h3>
            <form action="update_latest_notice.php?latest_notice_id=<?php echo $latest_notice_id; ?>" method="POST">
            <div class="form-group mb-2">
                <label for="" class="pb-2 fw-bold">Latest Notice's ID</label>
                <input type="text" name="latest_notice_id" class="form-control" value="<?php echo $row['latest_notice_id']; ?>">
            </div>
            <div class="form-group mb-2">
                <label for="" class="pb-2 fw-bold">Latest Notice's Date</label>
                <input type="date" name="latest_notice_date" class="form-control" value="<?php echo $row['latest_notice_date']; ?>">
            </div>
            <div class="form-group mb-2">
                <label for="" class="pb-2 fw-bold">Latest Notice's Description</label>
                <input type="text" name="latest_notice_description" class="form-control" value="<?php echo $row['latest_notice_description']; ?>">
            </div>
                <button type="submit" name="update_latest_notice" class="btn btn-success mt-2 fw-bold">Update Latest Notice</button>
        </form> 
    </div>
    <div class="col-2"></div>
</div>


<main id="main" class="main">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

