<?php include('servernotice.php') ?>
<!DOCTYPE html>

<html lang="en">

<head>

  <title>CR page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="Style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <style>
    .btn:hover {
      background-color: #d34836;
      color: white;

    }
  </style>
</head>


<body>

  <!-- Navigation start -->

  <div class="row">
    <div class="navigation templet clear">

      <h2>Set up</h2>
      <nav>
        <ul>
          <li><a class="active" href="classroutine.php">Class Routine</a></li>
          <li><a href="assignment.php">Assignment</a></li>
          <li><a href="classtest.php">Class test</a></li>

        </ul>
      </nav>

      <h2>Set Notice</h2>
      <form method="post" action="index.php">
        <textarea name="notice" id="" cols="30" rows="7">

      </textarea>
        <br>
        <input class="btn" type="submit" name="add" value="Submit">

      </form>




    </div>
    <!-- Navigation end -->

    <!-- Maincontent start -->
    <div class="maincontent templet clear">

      <h1 style="color: #008080;">Maincontent</h1>
      <img src="bup.jpeg" alt="bup">
    </div>

    <div class="navigation templet clear">
      <h2>View</h2>
      <nav>
        <ul>
          <li><a class="active" href="routineview.php">Class Routine</a></li>
          <li><a href="assignmentview.php">Assignment</a></li>
          <li><a href="testview.php">Class test</a></li>
          <li><a href="noticeview.php">Notice</a></li>

        </ul>
      </nav>

    </div>


  </div>
  <!-- Maincontent end -->


</body>

</html>