<!DOCTYPE html>
<html>

<head>
  <title>Online CR</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
    integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <link rel="stylesheet" href="style1.css">
</head>

<body>

  <div class="main-block">
    <div class="block-item left">   

    <h1 id="demo"></h1>
    <script>
      var x = "Hello BUPians";
      document.getElementById("demo").innerHTML = x;
    </script>

      <p id=><small>Welcome to Digital CR</small>
      </p>
    </div>
    <div class="block-item right">
      <button class="btn admin" data-provider="admin"><span>Admin</span></button>
      <form method="get" action="/CR1/login.php">
        <button class="btn cr" data-provider="cr"><span>CR</span></button>
      </form>
      <form method="get" action="/CR1/student.php">
        <button class="btn student" data-provider="student"><span>Student</span></button>
      </form>

    </div>
  </div>
</body>
</html>