<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>student</title>

    <style>
        .navigation {
            float: left;
            width: 100%;
            padding: 10px;
            border: 1px solid #3889be;
            margin-right: 4px;
        }

        .navigation ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 252px;
            background-color: #f1f1f1;
        }

        .navigation h2 {
            text-align: center;
            background: #3889be;
            border-bottom: 2px solid #155179;
            padding: 10px;
            color: white;
        }

        .navigation li a {
            display: block;
            color: #000;
            padding: 8px 16px;
            text-decoration: none;
            margin-bottom: 10px;
            border: 2px solid #3889be;
        }

        .navigation li a:hover {
            background-color: #d34836;
            color: white;
        }

        html,
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
    </style>

</head>

<body>

    <div class="navigation">
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
    </form>
</body>

</html>