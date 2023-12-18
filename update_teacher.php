<?php
    include("database.php");
?>
<?php
    if(isset($_GET['teachers_id'])){
        $teachers_id = $_GET['teachers_id'];
    }
    $sql = "SELECT * FROM teacher WHERE teachers_id = '$teachers_id'";
    $result = mysqli_query($conn, $sql);

    if(!$result){
        die("SQL Statement Wrong");
    }
    else{
        $row = mysqli_fetch_assoc($result);
    }
?>

<?php 
    if(isset($_POST['update_teacher'])){
        $teachers_id = $_POST['teachers_id'];
        $teachers_name = $_POST['teachers_name'];
        $teachers_department = $_POST['teachers_department'];
        $teachers_mobile = $_POST['teachers_mobile'];
        $teachers_email = $_POST['teachers_email'];
        
        if(empty($teachers_id) || empty($teachers_name) || empty($teachers_department) || empty($teachers_mobile) || empty($teachers_email)){
            header("location:teacher.php?error=Please fill the form");
            exit();
        }
        else{
            $sql = "UPDATE teacher SET teachers_id = '$teachers_id', teachers_name = '$teachers_name', teachers_department = '$teachers_department', teachers_mobile = '$teachers_mobile', teachers_email = '$teachers_email' WHERE teachers_id = '$teachers_id'";
            
            $result = mysqli_query($conn, $sql);
            if(!$result){
                die("SQL Statement Wrong");
            }
            else{
                header("location:teacher.php?success=Teacher Added Successfully");
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
        <title>Update Teacher</title>
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
            <h3 class="text-center bg-info p-2 fw-bold">Teacher Information</h3>
            <form action="update_teacher.php?teachers_id=<?php echo $teachers_id; ?>" method="POST">
            <div class="form-group mb-2">
                <label for="" class="pb-2 fw-bold">Teacher's ID</label>
                <input type="text" name="teachers_id" class="form-control" value="<?php echo $row['teachers_id']; ?>">
            </div>
            <div class="form-group mb-2">
                <label for="" class="pb-2 fw-bold">Teacher's Name</label>
                <input type="text" name="teachers_name" class="form-control" value="<?php echo $row['teachers_name']; ?>">
            </div>
            <div class="form-group mb-2">
                <label for="" class="pb-2 fw-bold">Teacher's Department</label>
                <input type="text" name="teachers_department" class="form-control" value="<?php echo $row['teachers_department']; ?>">
            </div>
            <div class="form-group mb-2">
                <label for="" class="pb-2 fw-bold">Teacher's Mobile</label>
                <input type="text" name="teachers_mobile" class="form-control" value="<?php echo $row['teachers_mobile']; ?>">
            </div>
            <div class="form-group mb-2">
                <label for="" class="pb-2 fw-bold">Teacher's Email</label>
                <input type="text" name="teachers_email" class="form-control" value="<?php echo $row['teachers_email']; ?>">
            </div>
                <button type="submit" name="update_teacher" class="btn btn-success mt-2 fw-bold">Update teacher</button>
        </form> 
    </div>
    <div class="col-2"></div>
</div>


<main id="main" class="main">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

