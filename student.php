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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Student</title>
</head>
<body>
    <style>
        ul {
            list-style-type: none;
        }
        .nav-link {
            color: black;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 18px;
            font-weight: bold;
            display: flex;
            align-items: center;
        }
        .nav-link:hover {
            background-color: grey;
            color: white;
        }
    </style>

<div class="container-fluid">
    <div class="shadow-lg p-2 bg-body-tertiary rounded">
        <span class="fs-3 fw-bold text-info">Admin Panel</span>
        <span class="fs-3 fw-bold ms-5 text-primary">TOWNSRIPUR S. C HIGH SCHOOL</span>
    </div>
</div>



<div class="container-fluid">
    <div class="row">
        <div class="col-2 shadow-lg p-2 bg-body-tertiary rounded">
            <ul class="nav d-block">
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">
                    <i class="fa-solid fa-gauge"></i>
                    <span class="ms-3">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="institute_setup.php">
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                    <span class="ms-3">Institute Setup</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="student.php">
                    <i class="fa-solid fa-users"></i>
                    <span class="ms-3">Student</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="teacher.php">
                    <i class="fa-solid fa-chalkboard-user"></i>
                    <span class="ms-3">Teacher</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="latest_notice.php">
                    <i class="fa-solid fa-bell"></i>
                    <span class="ms-4">Latest Notice</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    <i class="fa-solid fa-book-open"></i>
                    <span class="ms-3">Class Routine</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <span class="ms-3">Attendance</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    <i class="fa-solid fa-chalkboard-user"></i>
                    <span class="ms-3">Staff</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    <i class="fa-solid fa-dollar-sign"></i>
                    <span class="ms-4">Student's Fees</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    <i class="fa-solid fa-marker"></i>
                    <span class="ms-3">Student's Marks</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    <i class="fa-solid fa-award"></i>
                    <span class="ms-4">Result</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    <i class="fa-regular fa-image"></i>
                    <span class="ms-3">Gallery</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span class="ms-3">Logout</span>
                    </a>
                </li>  
            </ul>
        </div>
        <div class="col-9 mt-5 ms-4 shadow-lg bg-body-tertiary rounded">
            <div class="d-flex justify-content-between m-3">
                <h3 class="fw-bold">All Students</h3>
                <button type="button" class="btn btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Student</button>
            </div>
            <table class="table table-bordered text-center ">
                <tr>
                    <th>Student's ID</th>
                    <th>Student's Name</th>
                    <th>Student's Roll</th>
                    <th>Student's Class</th>
                    <th>Student's Mobile</th>
                    <th>Action</th>
                </tr>
                <?php
                    $sql = "SELECT * FROM student";
                    $result = mysqli_query($conn, $sql);

                    if(!$result){
                        die("SQL Statement Wrong");
                    }
                    else{
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <tr>
                                <td><?php echo $row['students_id']; ?></td>
                                <td><?php echo $row['students_name']; ?></td>
                                <td><?php echo $row['students_roll']; ?></td>
                                <td><?php echo $row['students_class']; ?></td>
                                <td><?php echo $row['students_mobile']; ?></td>
                                <td>
                                    <a href="update_student.php?students_id=<?php echo $row['students_id'];?>" class="btn btn-success fw-bold">Edit</a>
                                    <a href="delete_student.php?students_id=<?php echo $row['students_id'];?>" class="btn btn-danger fw-bold">Delete</a>
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
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-4 fw-bold" id="exampleModalLabel">Student Information</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="add_student.php" method="POST">
            <div class="form-group mb-2">
                <label for="" class="pb-2 fw-bold">Student's ID</label>
                <input type="text" name="students_id" class="form-control">
            </div>
            <div class="form-group mb-2">
                <label for="" class="pb-2 fw-bold">Student's Name</label>
                <input type="text" name="students_name" class="form-control">
            </div>
            <div class="form-group mb-2">
                <label for="" class="pb-2 fw-bold">Student's Roll</label>
                <input type="text" name="students_roll" class="form-control">
            </div>
            <div class="form-group mb-2">
                <label for="" class="pb-2 fw-bold">Student's Class</label>
                <input type="text" name="students_class" class="form-control">
            </div>
            <div class="form-group mb-2">
                <label for="" class="pb-2 fw-bold">Student's Mobile</label>
                <input type="text" name="students_mobile" class="form-control">
            </div>
                <button type="submit" name="add_student" class="btn btn-primary fw-bold">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>





<main id="main" class="main">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

