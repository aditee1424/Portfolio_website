<html>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HOME</title>
<link rel="stylesheet" href="Portfolio1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-green.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700' rel='stylesheet'>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
    <div id="wrapperadmin">
        <header class="contactheader" style="margin-bottom:10%">
            <nav class="navpages">
                <ul>
                    <li style="padding-right: 100px"><a href="Home.php#wrapper"> ADITEE DAKHANE</a></li>

                    <li style="padding-right: 5px"><a href="admin.php">ABOUT</a></li>
                    <li style="padding-right: 5px"><a href="skills.php">SKILLS</a> </li>
                    <li style="padding-right: 5px"><a href="portfolio.php">PORTFOLIO</a></li>
                    <li style="padding-right: 5px"><a href="workexp.php">EXPERIENCE</a></li>
                    <li style="padding-right: 5px"><a href="edu.php">EDUCATION </a> </li>
                    <li style="padding-right: 5px"><a href="http://aditee1411.uta.cloud/">BLOG</a></li>
                    <li style="padding-right: 5px"><a href="hireme.php">HIREME</a></li>

                    <li style="padding-right: 5px"><a href="user.php">USERLIST</a></li>
                </ul>

            </nav>

        </header>
        <div class="contactcontainer">
            <div class="row">
                <form method="post" enctype="multipart/form-data" style="border:whitesmoke solid;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); width:150%">
                    <button name="view" type="submit" style="width:80px; height:40px; padding-bottom:5px; margin-right:5px; margin-left:40%">View</button>

                    <button name="add" type="submit" style="width:80px; height:40px; padding-bottom:5px; margin-right:5px">Add</button>

                    <br><br> <label for="projectid">Project ID:</label>
                    <input type="number" name="projectid" min="1" max="12" style="width:95px;height:40px;margin-right:20px;margin-left:65px;border-radius:20px">
                    <button name="deleterow" type="submit" style="width:80px; height:40px; padding-bottom:5px; margin-right:5px">Delete</button>

                    <br><br><label for="projecttitle">Project Title:</label>
                    <input type="text" name="projecttitle" style="width:100px;margin-right:20px;margin-left:48px"><button name="updatetitle" type="submit" style="width:80px; height:30px padding-bottom:5px">Update</button>

                    <br><br><label for="projecttype">Project Type:</label>
                    <input type="text" name="projecttype" style="width:100px;margin-right:20px;margin-left:41px"><button name="updatetype" type="submit" style="width:80px; height:30px padding-bottom:5px">Update</button>

                    <br><br><label for="myimage">Image:</label>
                    <input type="file" name="myimage" style="width:100px;margin-right:20px;margin-left:90px"><button name="updateimage" type="submit" style="width:80px; height:30px padding-bottom:5px">Update</button>
                    <button name="viewimage" type="submit" style="width:80px; height:40px; padding-bottom:5px; margin-right:5px">View</button>
                     <button name="addimage" type="submit" style="width:80px; height:40px; padding-bottom:5px; margin-right:5px">Add</button>
                   <button name="deleteimage" type="submit" style="width:80px; height:40px; padding-bottom:5px; margin-right:5px">Delete</button>

                </form>
            </div>
        </div>
        <?php

        if (isset($_POST["updateimage"])) {
            if (!empty($_POST['projectid'])) {
             $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
                $id = $_POST['projectid'];
                $imagename = $_FILES["myimage"]["name"];
                echo "<script>(function(){alert('$imagename');})();</script>";

                $imagetmp = base64_encode(file_get_contents(addslashes($_FILES['myimage']['tmp_name'])));

                $insert_image = " UPDATE `Images` SET `Image`='$imagetmp' WHERE ProjectId=$id";

                if (mysqli_query($con, $insert_image)) {

                    $msg = "Image updated successfully";
                    echo "<script>(function(){alert('$msg');})();</script>";
                } else {
                    $msg = "Image not updated";
                    echo "<script>(function(){alert('$msg');})();</script>";
                }
            }
        }
        if (isset($_POST["viewimage"])) {
            if (!empty($_POST['projectid'])) {
             $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
                $id = $_POST['projectid'];
                $query = "SELECT Image FROM `Images` WHERE ProjectId=$id";
                $result = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($result)) {
                    $image = $row['Image'];
                }
                 echo '<img src="data:image/png;base64,' . $image . '" style="width:50%;height:50%;margin-left:20%"/>' ;
              
            }
        }

           if (isset($_POST["addimage"])) {
            if (!empty($_POST['projectid'])) {
             $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
                $id = $_POST['projectid'];
                $imagename = $_FILES["myimage"]["name"];
                echo "<script>(function(){alert('$imagename');})();</script>";

                $imagetmp = base64_encode(file_get_contents(addslashes($_FILES['myimage']['tmp_name'])));

                $insert_image = "INSERT INTO `Images`(`ProjectId`, `Imagename`, `Image`) VALUES ($id,'$imagename','$imagetmp')";

                if (mysqli_query($con, $insert_image)) {

                    $msg = "Image added successfully";
                    echo "<script>(function(){alert('$msg');})();</script>";
                } else {
                    $msg = "Image not added";
                    echo "<script>(function(){alert('$msg');})();</script>";
                }
            }
        }
             if (isset($_POST["deleteimage"])) {
            if (!empty($_POST['projectid'])) {
             $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
                $id = $_POST['projectid'];
             

                $insert_image = "DELETE FROM `Images` WHERE ProjectId=$id";

                if (mysqli_query($con, $insert_image)) {

                    $msg = "Image deleted successfully";
                    echo "<script>(function(){alert('$msg');})();</script>";
                } else {
                    $msg = "Image not deleted";
                    echo "<script>(function(){alert('$msg');})();</script>";
                }
            }
        }
        if (isset($_POST["updatetitle"])) {
            if (!empty($_POST['projectid']) && !empty($_POST['projecttitle'])) {
        $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");

                $id = $_POST['projectid'];
                $title = $_POST['projecttitle'];
                $query = "UPDATE `Portfolio` SET `ProjectTitle`='$title' Where `ProjectId`=$id";
                

                if (mysqli_query($con, $query)) {

                    $msg = "Record updated successfully";
                    echo "<script>(function(){alert('$title');})();</script>";
                } else {
                    $msg = "Record not updated";
                    echo "<script>(function(){alert('$msg');})();</script>";
                }
            }
        }
        if (isset($_POST["updatetype"])) {
            if (!empty($_POST['projectid']) && !empty($_POST['projecttype'])) {
      $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");

                $id = $_POST['projectid'];
                $type = $_POST['projecttype'];
                $query = "UPDATE `Portfolio` SET `ProjectType`='$type' Where 'ProjectId'=$id";

                if (mysqli_query($con, $query)) {

                    $msg = "Record updated successfully";
                    echo "<script>(function(){alert('$msg');})();</script>";
                } else {
                    $msg = "Record not updated";
                    echo "<script>(function(){alert('$msg');})();</script>";
                }
            }
        }

        if (isset($_POST["deleterow"])) {
            if (!empty($_POST['projectid'])) {
   $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
                $id = $_POST['projectid'];
                $query = "DELETE FROM `Portfolio` WHERE ProjectId=$id";

                if (mysqli_query($con, $query)) {

                    $msg = "Record deleted successfully";
                    echo "<script>(function(){alert('$msg');})();</script>";
                } else {
                    $msg = "Record not deleted";
                    echo "<script>(function(){alert('$msg');})();</script>";
                }
            }
        }
        if (isset($_POST["delete"])) {

            if (!empty($_POST['projectid'])) {
   $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
                $id = $_POST['projectid'];
                $query = "DELETE FROM `Images` WHERE ProjectId=$id";

                if (mysqli_query($con, $query)) {

                    $msg = "Image deleted successfully";
                    echo "<script>(function(){alert('$msg');})();</script>";
                } else {
                    $msg = "Record not deleted";
                    echo "<script>(function(){alert('$msg');})();</script>";
                }
            }
        }
        if (isset($_POST["add"])) {
            if (!empty($_POST['projectid']) && !empty($_POST['projecttitle']) && !empty($_POST['projecttype'])) {
   $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");

                $user = 7;
                $id = $_POST['projectid'];
                $title = $_POST['projecttitle'];
                $type = $_POST['projecttype'];
                $sql = "INSERT INTO `Portfolio`(`UserId`, `ProjectId`, `ProjectTitle`, `ProjectType`) VALUES ($user,$id,'$title','$type')";

                if (mysqli_query($con, $sql)) {

                    $msg = "Record added successfully";
                    echo "<script>(function(){alert('$msg');})();</script>";
                } else {
                    $msg = "Record not added";
                    echo "<script>(function(){alert('$msg');})();</script>";
                }
            }
        }

        if (isset($_POST["view"])) {

   $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
            $query = "SELECT ProjectId,ProjectTitle,ProjectType FROM Portfolio";
            $result = mysqli_query($con, $query);

            echo "<table border='1' cellpadding='10'>";
            echo "<tr> <th>PROJECT ID</th> <th>PROJECT TITLE</th> <th>PROJECT TYPE</th> </tr>";
            while ($row = mysqli_fetch_array($result)) {
                $id = $row['ProjectId'];
                $title = $row['ProjectTitle'];
                $type = $row['ProjectType'];

                echo "<tr>";

                echo '<td>' . $id . '</td>';


                echo '<td>' . $title . '</td>';

                echo '<td>' . $type . '</td>';


                echo "</tr>";
            }
            echo "</table>";
        }
        ?>
     
    </div>
</body>

</html>