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
                        <form method="post" enctype="multipart/form-data" style="border:whitesmoke solid;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                              <button name="view" type="submit" style="width:80px; height:40px; padding-bottom:5px; margin-right:5px; margin-left:40%">View</button>
                              <button name="delete" type="submit" style="width:80px; height:40px; padding-bottom:5px; margin-right:5px">Delete</button>
                              <button name="add" type="submit" style="width:80px; height:40px; padding-bottom:5px; margin-right:5px">Add</button>
                              
                              <br><br> <label for="age">Age:</label>
                              <input type="number" name="age" min="18" max="99" style="width:95px;height:40px;margin-right:20px;margin-left:65px;border-radius:20px"><button name="updateage" type="submit" style="width:80px; height:30px padding-bottom:5px margin-right:5px">Update</button>
                              <br><br><label for="Email">Email:</label>
                              <input type="email" name="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" style="width:100px;margin-right:20px;margin-left:48px"><button name="updateemail" type="submit" style="width:80px; height:30px padding-bottom:5px">Update</button>

                              <br><br><label for="phone">Phone:</label>
                              <input type="text" name="phone" pattern="^(\([0-9]{3}\)|[0-9]{3}-)[0-9]{3}-[0-9]{4}$" style="width:100px;margin-right:20px;margin-left:41px"><button name="updatephone" type="submit" style="width:80px; height:30px padding-bottom:5px">Update</button>
                              <small>Format: 123-456-7890</small>
                              
                              <br><br><label for="address">Address:</label>
                              <input type="text" name="address" pattern="^(\d+) ?([A-Za-z](?= ))? (.*?) ([^ ]+?) ?((?<= )APT)? ?((?<= )\d*)?$" min="5" max="100" style="width:100px;margin-right:20px;margin-left:30px"><button name="updateaddress" type="submit" style="width:80px; height:30px padding-bottom:5px">Update</button>

                              <br><br><label for="language">Language:</label>
                              <input type="text" name="language" style="width:100px;margin-right:20px;margin-left:15px"><button name="updatelanguage" type="submit" style="width:80px; height:30px padding-bottom:5px">Update</button>

                              <br><br><label for="aboutinfo">About_Info:</label>
                              <input type="text" name="aboutinfo" style="width:100px;margin-right:20px;margin-left:11px"><button name="updateabout" type="submit" style="width:80px; height:30px padding-bottom:5px">Update</button>
                        
                              <br><br><label for="myimage">Image:</label>
                             <input type="file" name="myimage" style="width:100px;margin-right:20px;margin-left:50px"><button name="updateimage" type="submit" style="width:80px; height:30px padding-bottom:5px">Update</button>
                             <button name="viewimage" type="submit" style="width:80px; height:40px; padding-bottom:5px; margin-right:5px">View</button>
                            
                        </form>
                  
                  </div>
            </div>
            <?php
            if (isset($_POST["updateimage"])) {
                
            $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
                      $imagename=$_FILES["myimage"]["name"]; 
                      echo "<script>(function(){alert('$imagename');})();</script>";
                     
                      $imagetmp= base64_encode(file_get_contents(addslashes($_FILES['myimage']['tmp_name'])));
                      
                      $insert_image=" UPDATE `PortfolioImage` SET `Image`='$imagetmp' ";
                     
                      if (mysqli_query($con, $insert_image)) {
                  
                          $msg = "Image updated successfully";
                          echo "<script>(function(){alert('$msg');})();</script>";
                      } else {
                          $msg = "Image not updated";
                          echo "<script>(function(){alert('$msg');})();</script>";
                      }
                  }              
                      
          
                        
                  if (isset($_POST["viewimage"])) {
                       
                             $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
                          
                            $query = "SELECT Image FROM `PortfolioImage` WHERE Title='Aditee D Dakhane'";
                            $result = mysqli_query($con, $query);
                            while ($row = mysqli_fetch_array($result)) {
                                $image = $row['Image'];
                            }
                            echo '<img src="data:image/jpeg;base64,' . $image . '" style="width:50%;height:50%;margin-left:20%"/>';
                        }
               
            
                 
              
              
            if (isset($_POST["updateage"])) {
                  if (!empty($_POST['age'])) {
                    $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
                        $newage = $_POST['age'];
                        $query = "UPDATE `About` SET `Age`=$newage WHERE UserId=7";

                        if (mysqli_query($con, $query)) {

                              $msg = "Record updated successfully";
                              echo "<script>(function(){alert('$msg');})();</script>";
                        } else {
                              $msg = "Record not updated";
                              echo "<script>(function(){alert('$msg');})();</script>";
                        }
                  }
            }

            if (isset($_POST["delete"])) {
   $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
                  $query = "DELETE FROM `About` WHERE UserId=7";

                  if (mysqli_query($con, $query)) {

                        $msg = "Record deleted successfully";
                        echo "<script>(function(){alert('$msg');})();</script>";
                  } else {
                        $msg = "Record not deleted";
                        echo "<script>(function(){alert('$msg');})();</script>";
                  }
            }

            if (isset($_POST["add"])) {
                  if (!empty($_POST['age']) && !empty($_POST['Email']) && !empty($_POST['phone']) && !empty($_POST['address']) && !empty($_POST['language']) && !empty($_POST['aboutinfo'])) {
   $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
                        $user = 7;
                        $age = $_POST['age'];
                        $email = $_POST['Email'];
                        $phone = $_POST['phone'];
                        $address = $_POST['address'];
                        $language = $_POST['language'];
                        $aboutinfo = $_POST['aboutinfo'];

                        $query = mysqli_query($con, "SELECT * FROM About WHERE UserId='" . $user . "'");
                        $numrows = mysqli_num_rows($query);

                        if ($numrows == 0) {
                              $sql = "INSERT INTO `About`(`UserID`, `Age`, `Email`, `Phone`, `Address`, `Language`, `About_Info`) VALUES ($user,$age,'$email','$phone','$address','$language','$aboutinfo')";
                              if (mysqli_query($con, $sql)) {

                                    $msg = "Record added successfully";
                                    echo "<script>(function(){alert('$msg');})();</script>";
                              } else {
                                    $msg = "Record not added";
                                    echo "<script>(function(){alert('$msg');})();</script>";
                              }
                        }
                  }
            }

            if (isset($_POST["view"])) {

                  $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
                  $query = "SELECT Age,Email,Phone,Address,Language,About_Info FROM About";
                  $result = mysqli_query($con, $query);
                  echo "<table border='1' cellpadding='10'>";
                  echo "<tr> <th>AGE</th> <th>EMAIL</th> <th>PHONE</th> <th>ADDRESS</th> <th>LANGUAGE</th> <th>ABOUT_INFO</th></tr>";
                  while ($row = mysqli_fetch_array($result)) {
                        $age = $row['Age'];
                        $email = $row['Email'];
                        $phone = $row['Phone'];
                        $address = $row['Address'];
                        $language = $row['Language'];
                        $about = $row['About_Info'];
                        echo "<tr>";

                        echo '<td>' . $age . '</td>';

                        echo '<td>' . $email . '</td>';

                        echo '<td>' . $phone . '</td>';

                        echo '<td>' . $address . '</td>';

                        echo '<td>' . $language . '</td>';

                        echo '<td>' . $about . '</td>';


                        echo "</tr>";
                  }
                  echo "</table>";
            }
            if (isset($_POST["updateemail"])) {
                  if (!empty($_POST['Email'])) {
                        $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
                        $newemail = $_POST['Email'];

                        $query = "UPDATE `About` SET `Email`='$newemail' WHERE UserId=7";
                        echo "<script>(function(){alert('$query');})();</script>";
                        if (mysqli_query($con, $query)) {

                              $msg = "Record updated successfully";
                              echo "<script>(function(){alert('$msg');})();</script>";
                        } else {
                              $msg = "Record not updated";
                              echo "<script>(function(){alert('$msg');})();</script>";
                        }
                  }
            }

            if (isset($_POST["updatelanguage"])) {
                  if (!empty($_POST['language'])) {
                   $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
                        $newlanguage = $_POST['language'];
                        $query = "UPDATE `About` SET `Language`='$newlanguage' WHERE UserId=7";

                        if (mysqli_query($con, $query)) {

                              $msg = "Record updated successfully";
                              echo "<script>(function(){alert('$msg');})();</script>";
                        } else {
                              $msg = "Record not updated";
                              echo "<script>(function(){alert('$msg');})();</script>";
                        }
                  }
            }

            if (isset($_POST["updatephone"])) {
                  if (!empty($_POST['phone'])) {
         $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
                        $newphone = $_POST['phone'];
                        $query = "UPDATE `About` SET `Phone`='$newphone' WHERE UserId=7";

                        if (mysqli_query($con, $query)) {

                              $msg = "Record updated successfully";
                              echo "<script>(function(){alert('$msg');})();</script>";
                        } else {
                              $msg = "Record not updated";
                              echo "<script>(function(){alert('$msg');})();</script>";
                        }
                  }
            }

            if (isset($_POST["updateaddress"])) {
                  if (!empty($_POST['address'])) {
                $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
                        $newaddress = $_POST['address'];
                        $query = "UPDATE `About` SET `Address`='$newaddress' WHERE UserId=7";

                        if (mysqli_query($con, $query)) {

                              $msg = "Record updated successfully";
                              echo "<script>(function(){alert('$msg');})();</script>";
                        } else {
                              $msg = "Record not updated";
                              echo "<script>(function(){alert('$msg');})();</script>";
                        }
                  }
            }

            if (isset($_POST["updateabout"])) {
                  if (!empty($_POST['aboutinfo'])) {
             $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
                        $newabout = $_POST['aboutinfo'];
                        $query = "UPDATE `About` SET `About_Info`='$newabout' WHERE UserId=7";

                        if (mysqli_query($con, $query)) {

                              $msg = "Record updated successfully";
                              echo "<script>(function(){alert('$msg');})();</script>";
                        } else {
                              $msg = "Record not updated";
                              echo "<script>(function(){alert('$msg');})();</script>";
                        }
                  }
            }

            ?>
    
      </div>
</body>

</html>