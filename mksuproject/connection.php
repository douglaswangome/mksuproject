<?php 
  // input details
  // $phpVariableName = filter_input(INPUT_POST, 'formVariableName'); - syntax
  $studentID = filter_input(INPUT_POST, 'studentID');
  $fullname = filter_input(INPUT_POST, 'fullname');
  $course = filter_input(INPUT_POST, 'course');

  if (!empty($studentID) || !empty($fullname) || !empty($course)) {
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'mksudemo';

    // create connection 
    $conn = new mysqli($host, $username, $password, $database);

    if (mysqli_connect_error()) {
      die('Connect Error (' .mysqli_connect_errorno().')'.mysqli_connect_error());
    } else {
      $sql = "INSERT INTO students(ID, Fullname, Course) VALUES('$studentID', '$fullname', '$course')";

      if ($conn->query($sql)) {
        echo 'Student successfully added';
      } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
      }
      header("Location: student.php");
      $conn->close();
    }
  } else {
    echo 'Input your data again';
    die();
  }
?>