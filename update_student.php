<?php
    include("database.php");
?>
<?php
    if(isset($_GET['students_id'])){
        $students_id = $_GET['students_id'];
    }
    $sql = "SELECT * FROM student WHERE students_id = '$students_id'";
    $result = mysqli_query($conn, $sql);

    if(!$result){
        die("SQL Statement Wrong");
    }
    else{
        $row = mysqli_fetch_assoc($result);
    }
?>

<?php 
    if(isset($_POST['update_student'])){
        $students_id = $_POST['students_id'];
        $students_name = $_POST['students_name'];
        $students_roll = $_POST['students_roll'];
        $students_class = $_POST['students_class'];
        $students_mobile = $_POST['students_mobile'];
        
        if(empty($students_id) || empty($students_name) || empty($students_roll) || empty($students_class) || empty($students_mobile)){
            header("location:student.php?error=Please fill the form");
            exit();
        }
        else{
            $sql = "UPDATE student SET students_id = '$students_id', students_name = '$students_name', students_roll = '$students_roll', students_class = '$students_class', students_mobile = '$students_mobile' WHERE students_id = '$students_id'";
            
            $result = mysqli_query($conn, $sql);
            if(!$result){
                die("SQL Statement Wrong");
            }
            else{
                header("location:student.php?success=Student Update Successfully");
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
        <title>Update Student</title>
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
            <h3 class="text-center bg-info p-2 fw-bold">Student Information</h3>
            <form action="update_student.php?students_id=<?php echo $students_id; ?>" method="POST">
            <div class="form-group mb-2">
                <label for="" class="pb-2 fw-bold">Student's ID</label>
                <input type="text" name="students_id" class="form-control" value="<?php echo $row['students_id']; ?>">
            </div>
            <div class="form-group mb-2">
                <label for="" class="pb-2 fw-bold">Student's Name</label>
                <input type="text" name="students_name" class="form-control" value="<?php echo $row['students_name']; ?>">
            </div>
            <div class="form-group mb-2">
                <label for="" class="pb-2 fw-bold">Student's Roll</label>
                <input type="text" name="students_roll" class="form-control" value="<?php echo $row['students_roll']; ?>">
            </div>
            <div class="form-group mb-2">
                <label for="" class="pb-2 fw-bold">Student's Class</label>
                <input type="text" name="students_class" class="form-control" value="<?php echo $row['students_class']; ?>">
            </div>
            <div class="form-group mb-2">
                <label for="" class="pb-2 fw-bold">Student's Mobile</label>
                <input type="text" name="students_mobile" class="form-control" value="<?php echo $row['students_mobile']; ?>">
            </div>
                <button type="submit" name="update_student" class="btn btn-success mt-2 fw-bold">Update Student</button>
        </form> 
    </div>
    <div class="col-2"></div>
</div>


<main id="main" class="main">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

