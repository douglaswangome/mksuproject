<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>PHP + MYSQL + HTML</title>
  </head>
  <body>
    <form method="post" action="connection.php">
      <fieldset>
        <legend>Student Input Form</legend>
        <div class="">
          <span>Student ID: </span>
          <input placeholder="Student ID" name="studentID" type="text">
        </div>
        <div class="">
          <span>Full Name: </span>
          <input name="fullname" type="text">
        </div>
        <div class="">
          <span>Course: </span>
          <input name='course' type="text">
        </div>
        <button>Add Student</button>
      </fieldset>
    </form>

    <a href="student.php">View Students</a>
  </body>
</html>