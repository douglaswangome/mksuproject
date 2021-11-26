<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="student.css">
    <title>PHP + MYSQL + HTML</title>
  </head>
  <body>
    
    <table class="students_table">
      <thead>
        <th>Student ID</th>
        <th>Name</th>
        <th>Course</th>
      </thead>
      <tbody>
        <?php 
          // database details
          $host = 'localhost';
          $username = 'root';
          $password = '';
          $dbname = 'mksudemo';
        
          // create connection
          $con = mysqli_connect($host, $username, $password, $dbname);

          $records = mysqli_query($con, "SELECT * FROM students");

          while($data = mysqli_fetch_array($records)) {
        ?>
        <tr>
          <td><?php echo $data['ID'] ?></td>
          <td><?php echo $data['Fullname'] ?></td>
          <td><?php echo $data['Course'] ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>

    <?php mysqli_close($con); ?>

    <a href="index.php">Back to Registration Form</a>
  </body>
</html>
