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
                <form method="post" style="border:whitesmoke solid;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                    <button name="view" type="submit" style="width:80px; height:40px; padding-bottom:5px; margin-right:5px; margin-left:40%">View</button>
                    <button name="delete" type="submit" style="width:80px; height:40px; padding-bottom:5px; margin-right:5px">Delete</button>
                    <button name="add" type="submit" style="width:80px; height:40px; padding-bottom:5px; margin-right:5px">Add</button>

                    <br><br> <label for="workid">Work ID:</label>
                    <input type="number" name="workid" min="11" max="13" style="width:95px;height:40px;margin-right:20px;margin-left:58px;border-radius:20px">
                    <button name="deleterow" type="submit" style="width:80px; height:40px; padding-bottom:5px; margin-right:5px">Delete</button>
                   
                    <br><br><label for="startm">Start Month:</label>
                    <input type="text" name="startm" pattern="(jan|JAN|feb|FEB|march|MARCH|april|APRIL|may|MAY|jun|JUNE|july|JULY|aug|AUG|sept|SEPT|oct|OCT|nov|NOV|dec|DEC)" style="width:100px;margin-right:20px;margin-left:27px"><button name="updatesm" type="submit" style="width:80px; height:30px padding-bottom:5px">Update</button>

                    <br><br><label for="starty">Start Year:</label>
                    <input type="text" name="starty" pattern="(?:19|20)\d{2}" style="width:100px;margin-right:20px;margin-left:46px"><button name="updatesy" type="submit" style="width:80px; height:30px padding-bottom:5px">Update</button>

                    <br><br><label for="endm">End Month:</label>
                    <input type="text" name="endm" pattern="(jan|JAN|feb|FEB|march|MARCH|april|APRIL|may|MAY|jun|JUNE|july|JULY|aug|AUG|sept|SEPT|oct|OCT|nov|NOV|dec|DEC)" style="width:100px;margin-right:20px;margin-left:35px"><button name="updateem" type="submit" style="width:80px; height:30px padding-bottom:5px">Update</button>

                    <br><br><label for="endy">End Year:</label>
                    <input type="text" name="endy" pattern="(?:19|20)\d{2}" style="width:100px;margin-right:20px;margin-left:54px"><button name="updateey" type="submit" style="width:80px; height:30px padding-bottom:5px">Update</button>

                    <br><br><label for="company">Company:</label>
                    <input type="text" name="company" style="width:100px;margin-right:20px;margin-left:50px"><button name="updatecompany" type="submit" style="width:80px; height:30px padding-bottom:5px">Update</button>

                    <br><br><label for="pos">Position:</label>
                    <input type="text" name="pos" style="width:100px;margin-right:20px;margin-left:63px"><button name="updateposition" type="submit" style="width:80px; height:30px padding-bottom:5px">Update</button>

                    <br><br><label for="desc">Description:</label>
                    <input type="text" name="desc" style="width:100px;margin-right:20px;margin-left:41px"><button name="updatedesc" type="submit" style="width:80px; height:30px padding-bottom:5px">Update</button>

                </form>
            </div>
        </div>
        <?php
        if (isset($_POST["updatesm"])) {
            if (!empty($_POST['workid']) && !empty($_POST['startm'])) {
           $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
            
                $id = $_POST['workid'];
                $startm= $_POST['startm'];
                $query = "UPDATE `Work` SET `StartMonth`='$startm' Where WorkId=$id";

                if (mysqli_query($con, $query)) {

                    $msg = "Record updated successfully";
                    echo "<script>(function(){alert('$msg');})();</script>";
                } else {
                    $msg = "Record not updated";
                    echo "<script>(function(){alert('$msg');})();</script>";
                }
            }
        }
        if (isset($_POST["updatesy"])) {
            if (!empty($_POST['workid']) && !empty($_POST['starty'])) {
                $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
            
                $id = $_POST['workid'];
                $starty= $_POST['starty'];
                $query = "UPDATE `Work` SET `StartYear`='$starty' Where WorkId=$id";

                if (mysqli_query($con, $query)) {

                    $msg = "Record updated successfully";
                    echo "<script>(function(){alert('$msg');})();</script>";
                } else {
                    $msg = "Record not updated";
                    echo "<script>(function(){alert('$msg');})();</script>";
                }
            }
        }
        if (isset($_POST["updateem"])) {
            if (!empty($_POST['workid']) && !empty($_POST['endm'])) {
              $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
            
                $id = $_POST['workid'];
                $endm= $_POST['endm'];
                $query = "UPDATE `Work` SET `EndMonth`='$endm' Where WorkId=$id";

                if (mysqli_query($con, $query)) {

                    $msg = "Record updated successfully";
                    echo "<script>(function(){alert('$msg');})();</script>";
                } else {
                    $msg = "Record not updated";
                    echo "<script>(function(){alert('$msg');})();</script>";
                }
            }
        }
        if (isset($_POST["updateey"])) {
            if (!empty($_POST['workid']) && !empty($_POST['endy'])) {
               $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
                $id = $_POST['workid'];
                $endy= $_POST['endy'];
                $query = "UPDATE `Work` SET `EndYear`='$endy' Where WorkId=$id";

                if (mysqli_query($con, $query)) {

                    $msg = "Record updated successfully";
                    echo "<script>(function(){alert('$msg');})();</script>";
                } else {
                    $msg = "Record not updated";
                    echo "<script>(function(){alert('$msg');})();</script>";
                }
            }
        }

        if (isset($_POST["updatecompany"])) {
            if (!empty($_POST['workid']) && !empty($_POST['company'])) {
            $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
            
                $id = $_POST['workid'];
                $company= $_POST['company'];
                $query = "UPDATE `Work` SET `Company`='$company' Where WorkId=$id";

                if (mysqli_query($con, $query)) {

                    $msg = "Record updated successfully";
                    echo "<script>(function(){alert('$msg');})();</script>";
                } else {
                    $msg = "Record not updated";
                    echo "<script>(function(){alert('$msg');})();</script>";
                }
            }
        }
        if (isset($_POST["updateposition"])) {
            if (!empty($_POST['workid']) && !empty($_POST['pos'])) {
       $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
            
                $id = $_POST['workid'];
                $pos= $_POST['pos'];
                $query = "UPDATE `Work` SET `Position`='$pos' Where WorkId=$id";

                if (mysqli_query($con, $query)) {

                    $msg = "Record updated successfully";
                    echo "<script>(function(){alert('$msg');})();</script>";
                } else {
                    $msg = "Record not updated";
                    echo "<script>(function(){alert('$msg');})();</script>";
                }
            }
        }
        if (isset($_POST["updatedesc"])) {
            if (!empty($_POST['workid']) && !empty($_POST['desc'])) {
     $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
            
                $id = $_POST['workid'];
                $desc= $_POST['desc'];
                $query = "UPDATE `Work` SET `Description`='$desc' Where WorkId=$id";

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
            if (!empty($_POST['workid'])) {

       $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
                $id = $_POST['workid'];
                $query = "DELETE FROM `Work` WHERE WorkId=$id";

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

      $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
            $query = "DELETE FROM `Work` WHERE UserId=7";

            if (mysqli_query($con, $query)) {

                $msg = "Record deleted successfully";
                echo "<script>(function(){alert('$msg');})();</script>";
            } else {
                $msg = "Record not deleted";
                echo "<script>(function(){alert('$msg');})();</script>";
            }
        }
        if (isset($_POST["add"])) {
            if (!empty($_POST['workid']) && !empty($_POST['startm']) && !empty($_POST['starty']) && !empty($_POST['endm']) && !empty($_POST['endy']) && !empty($_POST['company']) && !empty($_POST['pos']) && !empty($_POST['desc'])) {

   $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
                $user = 7;
                $id = $_POST['workid'];
                $startm = $_POST['startm'];
                $starty = $_POST['starty'];
                $endm = $_POST['endm'];
                $endy = $_POST['endy'];
                $company = $_POST['company'];
                $pos = $_POST['pos'];
                $desc = $_POST['desc'];


                $sql = "INSERT INTO `Work`(`UserId`, `WorkId`, `StartMonth`, `StartYear`, `EndMonth`, `EndYear`, `Company`, `Position`, `Description`) VALUES ($user,$id,'$startm','$starty','$endm','$endy','$company','$pos','$desc')";
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
            $query = "SELECT WorkId,StartMonth,StartYear,EndMonth,EndYear,Company,Position,Description FROM Work";
            $result = mysqli_query($con, $query);
            echo "<table border='1' cellpadding='10'>";
            echo "<tr> <th>WORKID</th> <th>STARTMONTH</th> <th>STARTYEAR</th> <th>ENDMONTH</th><th>ENDYEAR</th><th>COMPANY</th><th>POSITION</th><th>INFO</th> </tr>";
            while ($row = mysqli_fetch_array($result)) {
                $id = $row['WorkId'];
                $startm = $row['StartMonth'];
                $starty = $row['StartYear'];
                $endm = $row['EndMonth'];
                $endy = $row['EndYear'];
                $company = $row['Company'];
                $pos = $row['Position'];
                $desc = $row['Description'];

                echo "<tr>";

                echo '<td>' . $id . '</td>';

                echo '<td>' . $startm . '</td>';

                echo '<td>' . $starty . '</td>';

                echo '<td>' . $endm . '</td>';

                echo '<td>' . $endy . '</td>';

                echo '<td>' . $company . '</td>';

                echo '<td>' . $pos . '</td>';

                echo '<td>' . $desc . '</td>';

                echo "</tr>";
            }
            echo "</table>";
        }
        ?>
    </div>
</body>

</html>