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
                <form method="post" enctype="multipart/form-data" style="border:whitesmoke solid;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);width:120%">
                    <button name="view" type="submit" style="width:80px; height:40px; padding-bottom:5px; margin-right:5px; margin-left:40%">View</button>
                    <button name="add" type="submit" style="width:80px; height:40px; padding-bottom:5px; margin-right:5px">Add</button>

                    <br><br> <label for="serviceid">Service ID:</label>
                    <input type="number" name="serviceid" min="31" max="33" style="width:95px;height:40px;margin-right:20px;margin-left:58px;border-radius:20px">
                    <button name="deleterow" type="submit" style="width:80px; height:40px; padding-bottom:5px; margin-right:5px">Delete</button>

                    <br><br><label for="myimage">Image:</label>
                    <input type="file" name="myimage" style="width:100px;margin-right:20px;margin-left:90px"><button name="updateimage" type="submit" style="width:80px; height:30px padding-bottom:5px">Update</button>
                    <button name="viewimage" type="submit" style="width:80px; height:40px; padding-bottom:5px; margin-right:5px">View</button>

                    <br><br><label for="price">Price:</label>
                    <input type="number" name="price" min="1" max="50000" style="width:95px;height:40px;margin-right:20px;margin-left:95px;border-radius:20px"><button name="updateprice" type="submit" style="width:80px; height:30px padding-bottom:5px">Update</button>

                    <br><br><label for="jname">Job Name:</label>
                    <input type="text" name="jname" style="width:100px;margin-right:20px;margin-left:49px"><button name="updatejname" type="submit" style="width:80px; height:30px padding-bottom:5px">Update</button>

                    <br><br><label for="service1">Service1:</label>
                    <input type="text" name="service1" style="width:100px;margin-right:20px;margin-left:67px"><button name="updateservice1" type="submit" style="width:80px; height:30px padding-bottom:5px">Update</button>

                    <br><br><label for="service2">Service2:</label>
                    <input type="text" name="service2" style="width:100px;margin-right:20px;margin-left:64px"><button name="updateservice2" type="submit" style="width:80px; height:30px padding-bottom:5px">Update</button>

                    <br><br><label for="service3">Service3:</label>
                    <input type="text" name="service3" style="width:100px;margin-right:20px;margin-left:64px"><button name="updateservice3" type="submit" style="width:80px; height:30px padding-bottom:5px">Update</button>

                    <br><br><label for="service4">Service4:</label>
                    <input type="text" name="service4" style="width:100px;margin-right:20px;margin-left:64px"><button name="updateservice4" type="submit" style="width:80px; height:30px padding-bottom:5px">Update</button>

                    <br><br><label for="link">Link:</label>
                    <input type="text" name="link" style="width:100px;margin-right:20px;margin-left:93px"><button name="updatelink" type="submit" style="width:80px; height:30px padding-bottom:5px">Update</button>

                </form>
            </div>
        </div>
        <?php

if (isset($_POST["updateimage"])) {
    if(!empty($_POST['serviceid']))
    {   $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
        $id=$_POST['serviceid'];
        $imagename=$_FILES["myimage"]["name"]; 
        echo "<script>(function(){alert('$imagename');})();</script>";
       
        $imagetmp= base64_encode(file_get_contents(addslashes($_FILES['myimage']['tmp_name'])));
        
        $insert_image="UPDATE `HireImages` SET `Image`='$imagetmp' WHERE ServiceId=$id";
        if (mysqli_query($con, $insert_image)) {
    
            $msg = "Record updated successfully";
            echo "<script>(function(){alert('$msg');})();</script>";
        } else {
            $msg = "Record not updated";
            echo "<script>(function(){alert('$msg');})();</script>";
        }
    }
    
}
if (isset($_POST["viewimage"])) {
    if (!empty($_POST['serviceid'])) {
   $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
        $id = $_POST['serviceid'];
        $query = "SELECT Image FROM `HireImages` WHERE ServiceId=$id";
        $result = mysqli_query($con, $query);
        while ($row = mysqli_fetch_array($result)) {
            $image = $row['Image'];
        }
        echo '<img src="data:image/jpeg;base64,' . $image . '" style="width:30%;height:30%;margin-left:30%;margin-top:10%"/>';
    }
    
}

if (isset($_POST["updateprice"])) {
    if (!empty($_POST['serviceid']) && !empty($_POST['price'])) {
   $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
    
        $id = $_POST['serviceid'];
        $price= $_POST['price'];
        $query = "UPDATE `Hire` SET `Price`='$price' Where serviceId=$id";

        if (mysqli_query($con, $query)) {

            $msg = "Record updated successfully";
            echo "<script>(function(){alert('$msg');})();</script>";
        } else {
            $msg = "Record not updated";
            echo "<script>(function(){alert('$msg');})();</script>";
        }
    }
}

if (isset($_POST["updatejname"])) {
    if (!empty($_POST['serviceid']) && !empty($_POST['jname'])) {
   $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
    
        $id = $_POST['serviceid'];
        $job= $_POST['jname'];
        $query = "UPDATE `Hire` SET `JobName`='$job' Where serviceId=$id";

        if (mysqli_query($con, $query)) {

            $msg = "Record updated successfully";
            echo "<script>(function(){alert('$msg');})();</script>";
        } else {
            $msg = "Record not updated";
            echo "<script>(function(){alert('$msg');})();</script>";
        }
    }
}
if (isset($_POST["updateservice1"])) {
    if (!empty($_POST['serviceid']) && !empty($_POST['service1'])) {
    $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
    
        $id = $_POST['serviceid'];
        $service1= $_POST['service1'];
        $query = "UPDATE `Hire` SET `Service1`='$service1' Where serviceId=$id";

        if (mysqli_query($con, $query)) {

            $msg = "Record updated successfully";
            echo "<script>(function(){alert('$msg');})();</script>";
        } else {
            $msg = "Record not updated";
            echo "<script>(function(){alert('$msg');})();</script>";
        }
    }
}
if (isset($_POST["updateservice2"])) {
    if (!empty($_POST['serviceid']) && !empty($_POST['service2'])) {
      $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
    
        $id = $_POST['serviceid'];
        $service2= $_POST['service2'];
        $query = "UPDATE `Hire` SET `Service2`='$service2' Where serviceId=$id";

        if (mysqli_query($con, $query)) {

            $msg = "Record updated successfully";
            echo "<script>(function(){alert('$msg');})();</script>";
        } else {
            $msg = "Record not updated";
            echo "<script>(function(){alert('$msg');})();</script>";
        }
    }
}
if (isset($_POST["updateservice3"])) {
    if (!empty($_POST['serviceid']) && !empty($_POST['service3'])) {
      $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
    
        $id = $_POST['serviceid'];
        $service3= $_POST['service3'];
        $query = "UPDATE `Hire` SET `Service3`='$service3' Where serviceId=$id";

        if (mysqli_query($con, $query)) {

            $msg = "Record updated successfully";
            echo "<script>(function(){alert('$msg');})();</script>";
        } else {
            $msg = "Record not updated";
            echo "<script>(function(){alert('$msg');})();</script>";
        }
    }
}
if (isset($_POST["updateservice4"])) {
    if (!empty($_POST['serviceid']) && !empty($_POST['service4'])) {
     $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
    
        $id = $_POST['serviceid'];
        $service4= $_POST['service4'];
        $query = "UPDATE `Hire` SET `Service4`='$service4' Where serviceId=$id";

        if (mysqli_query($con, $query)) {

            $msg = "Record updated successfully";
            echo "<script>(function(){alert('$msg');})();</script>";
        } else {
            $msg = "Record not updated";
            echo "<script>(function(){alert('$msg');})();</script>";
        }
    }
}
if (isset($_POST["updatelink"])) {
    if (!empty($_POST['serviceid']) && !empty($_POST['link'])) {
   $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
    
        $id = $_POST['serviceid'];
        $link= $_POST['link'];
        $query = "UPDATE `Hire` SET `Link`='$link' Where serviceId=$id";

        if (mysqli_query($con, $query)) {

            $msg = "Record updated successfully";
            echo "<script>(function(){alert('$msg');})();</script>";
        } else {
            $msg = "Record not updated";
            echo "<script>(function(){alert('$msg');})();</script>";
        }
    }
}
if (isset($_POST["add"])) {
    if (!empty($_POST['serviceid']) && !empty($_POST['price']) && !empty($_POST['jname']) && !empty($_POST['service1']) && !empty($_POST['service2']) && !empty($_POST['service3']) && !empty($_POST['service4']) && !empty($_POST['link']) ) {

   $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
        $user = 7;
        $id = $_POST['serviceid'];
        $price = $_POST['price'];
        $jname = $_POST['jname'];
        $service1 = $_POST['service1'];
        $service2 = $_POST['service2'];
        $service3 = $_POST['service3'];
        $service4 = $_POST['service4'];
        $link = $_POST['link'];
    


        $sql = "INSERT INTO `Hire`(`UserId`, `ServiceId`, `Price`, `JobName`, `Service1`, `Service2`, `Service3`, `Service4`, `Link`) VALUES ($user,$id,$price,'$jname','$service1','$service2','$service3','$service4','$link')";
        echo "<script>(function(){alert('$sql');})();</script>";
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
            $query = "SELECT ServiceId,Price,JobName,Service1,Service2,Service3,Service4,Link FROM Hire";
            $result = mysqli_query($con, $query);
            echo "<table border='1' cellpadding='10'>";
            echo "<tr> <th>ID</th> <th>PRICE</th> <th>JOB</th><th>SERVICE1</th><th>SERVICE2</th><th>SERVICE3</th><th>SERVICE4</th> <th>LINK</th></tr>";
            while ($row = mysqli_fetch_array($result)) {
                $id = $row['ServiceId'];
                $price = $row['Price'];
                $job = $row['JobName'];
                $service1 = $row['Service1'];
                $service2 = $row['Service2'];
                $service3 = $row['Service3'];
                $service4 = $row['Service4'];
                $link = $row['Link'];

                echo "<tr>";

                echo '<td>' . $id . '</td>';

                echo '<td>' . $price . '</td>';

                echo '<td>' . $job . '</td>';

                echo '<td>' . $service1 . '</td>';

                echo '<td>' . $service2 . '</td>';

                echo '<td>' . $service3 . '</td>';

                echo '<td>' . $service4 . '</td>';

                echo '<td>' . $link . '</td>';

                echo "</tr>";
            }
            echo "</table>";
        }

        if (isset($_POST["deleterow"])) {
            if (!empty($_POST['serviceid'])) {

            $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
                $id = $_POST['serviceid'];
                $query = "DELETE FROM `Hire` WHERE ServiceId=$id";

                if (mysqli_query($con, $query)) {

                    $msg = "Record deleted successfully";
                    echo "<script>(function(){alert('$msg');})();</script>";
                } else {
                    $msg = "Record not deleted";
                    echo "<script>(function(){alert('$msg');})();</script>";
                }
            }
        }

        if (isset($_POST["imagedelete"])) {
            if (!empty($_POST['serviceid'])) {
   $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
                $id = $_POST['serviceid'];
                $query = "DELETE FROM `HireImages` WHERE ServiceId=$id";

                if (mysqli_query($con, $query)) {

                    $msg = "Image deleted successfully";
                    echo "<script>(function(){alert('$msg');})();</script>";
                } else {
                    $msg = "Image not deleted";
                    echo "<script>(function(){alert('$msg');})();</script>";
                }
            }
        }
        ?>
    </div>
</body>

</html>