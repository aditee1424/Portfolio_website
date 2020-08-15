<?php 
     session_start();
     ?>
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
      <script>
         
            function openTab(evt, tabName) {
                  var i, tablaptop, falaptop;
                  tablaptop = document.getElementsByClassName("tabcontent");
                  for (i = 0; i < tablaptop.length; i++) {
                        tablaptop[i].style.display = "none";
                  }
                  falaptop = document.getElementById("tablinks");
                  for (i = 0; i < falaptop.length; i++) {
                        falaptop[i].className = falaptop[i].className.replace(" active", "");
                  }
                  document.getElementById(tabName).style.display = "block";
                  evt.currentTarget.className += " active";
            }
       

            // Get the modal
            var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                  if (event.target == modal) {
                        modal.style.display = "none";
                  }
            }


            var modal = document.getElementById('id02');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                  if (event.target == modal) {
                        modal.style.display = "none";
                  }
            }


           




            var slideIndex = 1;
            showSlides(slideIndex);


            function currentSlide(n) {
                  showSlides(slideIndex = n);
            }

            function showSlides(n) {
                  var i;
                  var slides = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("line");
                  if (n > slides.length) {
                        slideIndex = 1
                  }
                  if (n < 1) {
                        slideIndex = slides.length
                  }
                  for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                  }
                  for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex - 1].style.display = "block";
                  dots[slideIndex - 1].className += " active";
            }

            function validate() {

                  var a = document.getElementById("password").value;
                  var b = document.getElementById("confirm_password").value;
                  if (a != b) {
                        alert("Passwords do no match");
                        return false;
                  }
            }
      </script>
</head>

<body>
      <!-----------------------------------HOME------------------------------------------------------------->

      <?php
      $con = mysqli_connect('utacloud.reclaimhosting.com', '', '') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
      $query = "SELECT Image,Title,Jobs FROM `PortfolioImage`";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $image = $row['Image'];
            $title = $row['Title'];
            $jobs = $row['Jobs'];
      }
      ?>
      <div id="wrapper">
            <div class="backgroundimage">
                  <header class="homeheader">
                        <nav class="navpages">
                              <ul>
                                    <li style="padding-right: 100px"><a href="#home"> ADITEE</a></li>
                                    <li style="padding-right: 5px"><a href="http://abcd"> HOME </a> </li>

                                    <li style="padding-right: 5px"><a href="#wrapperabout">ABOUT</a></li>
                                    <li style="padding-right: 5px"><a href="#wrapperabout">SKILLS</a> </li>
                                    <li style="padding-right: 5px"><a href="#wrapperportfolio">PORTFOLIO</a></li>
                                    <li style="padding-right: 5px"><a href="#wrapperworkex">EXPERIENCE</a></li>
                                    <li style="padding-right: 5px"><a href="http://aditee1411.uta.cloud/">BLOG</a></li>
                                    <li style="padding-right: 5px"><a href="#wrapperprices">HIRE ME</a></li>
                                    <li style="padding-right: 5px"><a href="#wrappercontact">CONTACT</a>
                                    </li>
                                    <li style="padding-right: 5px"><a onclick="document.getElementById('id01').style.display='block'" style="width:auto;">LOGIN</a></li>
                                    <li style="padding-right: 5px"> <a href="#signup" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">SIGN UP</a></li>
                              </ul>

                        </nav>



                  </header>
                  <div class="middleimage" align="center" style="padding:48px;color:white;font-weight: bold">
                        
                       <?php echo '<img src="data:image/jpeg;base64,' . $image . '" style="width:200;height:200" class="portfolioimage"/>';?>
                        <br><br>
                        <h2><b><?php echo $title?></b></h2>
                        <p><?php echo $jobs?></p>
                        <a href="#wrapperprices"><button type="button" class="buttons">Hire Me</button></a>
                        <a href="ResumeIntern.docx" download><button type="button" class="buttons">Download CV</button></a>

                  </div>

            </div>
            <footer class="homefooter">
                  <div align="center">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                        <a href="#" class="fa fa-instagram"></a>
                  </div>

            </footer>
      </div>

      <!-----------------------------------ABOUT------------------------------------------------------------->
     
      <?php
      
           
            $con = mysqli_connect('utacloud.reclaimhosting.com', '', '') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");

            $query = "SELECT Age,Email,Phone,Address,Language,About_Info FROM About";
            $result = mysqli_query($con, $query);
            while ($row = mysqli_fetch_array($result)) {
                  $age = $row['Age'];
                  $email = $row['Email'];
                  $phone = $row['Phone'];
                  $address = $row['Address'];
                  $language = $row['Language'];
                  $about = $row['About_Info'];
            }
            $query2 = "SELECT Lang1,Per1,Lang2,Per2,Lang3,Per3,Lang4,Per4,Lang5,Per5,Lang6,Per6 FROM Skills";
            $result2 = mysqli_query($con, $query2);
            while ($row1 = mysqli_fetch_array($result2)) {
                  $lang1 = $row1['Lang1'];
                  $per1 = $row1['Per1'];
                  $lang2 = $row1['Lang2'];
                  $per2 = $row1['Per2'];
                  $lang3 = $row1['Lang3'];
                  $per3 = $row1['Per3'];
                  $lang4 = $row1['Lang4'];
                  $per4 = $row1['Per4'];
                  $lang5 = $row1['Lang5'];
                  $per5 = $row1['Per5'];
                  $lang6 = $row1['Lang6'];
                  $per6 = $row1['Per6'];
            }

            ?>
      <div id="wrapperabout">
            <header class="contactheader">
                  <nav class="navpages">
                        <ul>
                              <li style="padding-right: 100px"><a href="#wrapper"> ADITEE DAKHANE</a></li>
                              <li style="padding-right: 5px"><a href="#wrapper"> HOME </a> </li>
                              <li style="padding-right: 5px"><a href="#wrapperabout">ABOUT</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperabout">SKILLS</a> </li>
                              <li style="padding-right: 5px"><a href="#wrapperportfolio">PORTFOLIO</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperworkex">EXPERIENCE</a></li>
                              <li style="padding-right: 5px"><a href="http://aditee1411.uta.cloud/">BLOG</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperprices">HIRE ME</a></li>
                              <li style="padding-right: 5px"><a href="#wrappercontact">CONTACT</a></li>
                              <li style="padding-right: 5px"><a href="#login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">LOGIN</a></li>
                              <li style="padding-right: 5px"> <a href="#signup" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">SIGN UP</a></li>
                        </ul>

                  </nav>

            </header>
            <div class="aboutcontainer">

                  <div class="aboutrow">
                        <div class="aboutcolumn">
                              <p><b>
                                          <font size="5px">About</font>
                                    </b></p>
                              <p>
                                    <font color="grey"><?php echo $about ?>

                                    </font>
                              </p>
                        </div>
                        <div class="aboutcolumn">
                              <p><b>
                                          <font size="5px">Basic Information</font>
                                    </b></p>
                              <p>
                                    <b>Age:</b>
                                    <font color="grey">
                                          &emsp;&emsp;&emsp;&emsp;<?php echo $age ?>
                                    </font><br>
                                    <b>Email:</b>
                                    <font color="grey">
                                          &nbsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;<?php echo $email ?>
                                    </font><br>
                                    <b>Phone:</b>
                                    <font color="grey">&nbsp;&nbsp;&nbsp;&emsp;&nbsp;&nbsp;<?php echo $phone ?></font>
                                    <br>
                                    <b>Address:</b>
                                    <font color="grey">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $address ?></font>
                                    <br>
                                    <b>Language:</b>
                                    <font color="grey">&nbsp;&nbsp;&nbsp;<?php echo $language ?></font>
                              </p>

                        </div>
                  </div>
            </div>
            <div class="aboutheading">
                  <h2>
                        <center><b>Professional Skills</b></center>
                  </h2><br>
            </div>
            <div class="aboutcontainer">
                  <div class="aboutrow">
                        <div class="aboutcolumn">
                              <p><span class="aboutleft"><?php echo $lang1 ?></span><span class="aboutright"><?php echo $per1 . '%' ?></span><br></p>
                              <div class="w3-container">
                                    <div class="w3-theme-l3">
                                          <div class="w3-green" style="height:5px;width:80%">
                                          </div>
                                    </div><br>
                              </div>

                              <p><span class="aboutleft"><?php echo $lang2 ?></span><span class="aboutright"><?php echo $per2 . '%' ?></span><br></p>
                              <div class="w3-container">
                                    <div class="w3-theme-l3">
                                          <div class="w3-green" style="height:5px;width:60%">
                                          </div>
                                    </div><br>
                              </div>

                              <p><span class="aboutleft"><?php echo $lang3 ?></span><span class="aboutright"><?php echo $per3 . '%' ?></span><br></p>
                              <div class="w3-container">
                                    <div class="w3-theme-l3">
                                          <div class="w3-green" style="height:5px;width:80%">
                                          </div>
                                    </div><br>
                              </div>
                        </div>
                        <div class="aboutcolumn">
                              <p><span class="aboutleft"><?php echo $lang4 ?></span><span class="aboutright"><?php echo $per4 . '%' ?></span><br></p>
                              <div class="w3-container">
                                    <div class="w3-theme-l3">
                                          <div class="w3-green" style="height:5px;width:75%">
                                          </div>
                                    </div><br>
                              </div>

                              <p><span class="aboutleft"><?php echo $lang5 ?></span><span class="aboutright"><?php echo $per5 . '%' ?></span><br></p>
                              <div class="w3-container">
                                    <div class="w3-theme-l3">
                                          <div class="w3-green" style="height:5px;width:60%">
                                          </div>
                                    </div><br>
                              </div>

                              <p><span class="aboutleft"><?php echo $lang6 ?></span><span class="aboutright"><?php echo $per6 . '%' ?></span><br></p>
                              <div class="w3-container">
                                    <div class="w3-theme-l3">
                                          <div class="w3-green" style="height:5px;width:70%">
                                          </div>
                                    </div><br>
                              </div>
                        </div>
                  </div>
            </div>


      </div>


      <!-------------------------------------------------PORTFOLIO------------------------------------------------>

      <?php
        $con = mysqli_connect('utacloud.reclaimhosting.com', '', '') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
      $query = "SELECT Imagename,Image FROM `Images` WHERE ProjectId=1";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $imagename = $row['Imagename'];
            $image = $row['Image'];
      }
      $query = "SELECT Imagename,Image FROM `Images` WHERE ProjectId=2";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $image2 = $row['Image'];
      }
      $query = "SELECT Imagename,Image FROM `Images` WHERE ProjectId=3";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $image3 = $row['Image'];
      }

      $query = "SELECT Imagename,Image FROM `Images` WHERE ProjectId=4";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $image4 = $row['Image'];
      }

      $query = "SELECT Imagename,Image FROM `Images` WHERE ProjectId=5";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $image5 = $row['Image'];
      }
      $query = "SELECT Imagename,Image FROM `Images` WHERE ProjectId=6";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $image6 = $row['Image'];
      }
      $query = "SELECT Imagename,Image FROM `Images` WHERE ProjectId=7";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $image7 = $row['Image'];
      }
      $query = "SELECT Imagename,Image FROM `Images` WHERE ProjectId=8";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $image8 = $row['Image'];
      }
      $query = "SELECT Imagename,Image FROM `Images` WHERE ProjectId=9";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $image9 = $row['Image'];
      }
      $query = "SELECT Imagename,Image FROM `Images` WHERE ProjectId=10";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $image10 = $row['Image'];
      }
      $query = "SELECT Imagename,Image FROM `Images` WHERE ProjectId=11";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $image11 = $row['Image'];
      }
      $query = "SELECT Imagename,Image FROM `Images` WHERE ProjectId=12";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $image12 = $row['Image'];
      }
      $query = "SELECT ProjectTitle,ProjectType FROM Portfolio where ProjectId=1";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $projecttitle1 = $row['ProjectTitle'];
            $projecttype1 = $row['ProjectType'];
      }

      $query = "SELECT ProjectTitle,ProjectType FROM Portfolio where ProjectId=2";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $projecttitle2 = $row['ProjectTitle'];
            $projecttype2 = $row['ProjectType'];
      }

      $query = "SELECT ProjectTitle,ProjectType FROM Portfolio where ProjectId=3";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $projecttitle3 = $row['ProjectTitle'];
            $projecttype3 = $row['ProjectType'];
      }

      $query = "SELECT ProjectTitle,ProjectType FROM Portfolio where ProjectId=4";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $projecttitle4 = $row['ProjectTitle'];
            $projecttype4 = $row['ProjectType'];
      }
      $query = "SELECT ProjectTitle,ProjectType FROM Portfolio where ProjectId=5";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $projecttitle5 = $row['ProjectTitle'];
            $projecttype5 = $row['ProjectType'];
      }
      $query = "SELECT ProjectTitle,ProjectType FROM Portfolio where ProjectId=6";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $projecttitle6 = $row['ProjectTitle'];
            $projecttype6 = $row['ProjectType'];
      }

      $query = "SELECT ProjectTitle,ProjectType FROM Portfolio where ProjectId=7";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $projecttitle7 = $row['ProjectTitle'];
            $projecttype7 = $row['ProjectType'];
      }
      $query = "SELECT ProjectTitle,ProjectType FROM Portfolio where ProjectId=8";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $projecttitle8 = $row['ProjectTitle'];
            $projecttype8 = $row['ProjectType'];
      }
      $query = "SELECT ProjectTitle,ProjectType FROM Portfolio where ProjectId=9";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $projecttitle9 = $row['ProjectTitle'];
            $projecttype9 = $row['ProjectType'];
      }
      $query = "SELECT ProjectTitle,ProjectType FROM Portfolio where ProjectId=10";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $projecttitle10 = $row['ProjectTitle'];
            $projecttype10 = $row['ProjectType'];
      }
      $query = "SELECT ProjectTitle,ProjectType FROM Portfolio where ProjectId=11";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $projecttitle11 = $row['ProjectTitle'];
            $projecttype11 = $row['ProjectType'];
      }
      $query = "SELECT ProjectTitle,ProjectType FROM Portfolio where ProjectId=12";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $projecttitle12 = $row['ProjectTitle'];
            $projecttype12 = $row['ProjectType'];
      }
      ?>


      <div id="wrapperportfolio">
            <header class="contactheader">
                  <nav class="navpages">
                        <ul>
                              <li style="padding-right: 100px"><a href="#wrapper"> ADITEE DAKHANE</a></li>
                              <li style="padding-right: 5px"><a href="#wrapper"> HOME </a> </li>
                              <li style="padding-right: 5px"><a href="#wrapperabout">ABOUT</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperabout">SKILLS</a> </li>
                              <li style="padding-right: 5px"><a href="#wrapperportfolio">PORTFOLIO</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperworkex">EXPERIENCE</a></li>
                              <li style="padding-right: 5px"><a href="http://aditee1411.uta.cloud/">BLOG</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperprices">HIRE ME</a></li>
                              <li style="padding-right: 5px"><a href="#wrappercontact">CONTACT</a></li>
                              <li style="padding-right: 5px"><a href="#login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">LOGIN</a></li>
                              <li style="padding-right: 5px"> <a href="#signup" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">SIGN UP</a></li>
                        </ul>

                  </nav>

            </header>

            <div class="portfolioheading">
                  <h2>
                        <center>Portfolio</center>
                  </h2>
            </div>
            <div class="portfoliotabs">
                  <a class="fa fa-laptop" id="tablinks" aria-hidden="true" onclick="openTab(event, 'webdevelopment')"></a>
                  <a class="fa fa-image" id="tablinks" onclick="openTab(event, 'graphicdesign')"></a>
                  <a class="fa fa-camera" id="tablinks" onclick="openTab(event, 'photography')"></a>
            </div>
            <div class="tabcontent" id="webdevelopment">
                  <div class="projectrow1">
                        <div class="project1">
                              <a href="#webdevelopment">
                                    <?php echo '<img src="data:image/png;base64,' . $image . '" class="image"/>' ?>
                                    <div class="overlay">
                                          <a href="#Project1">
                                                <div class="text">
                                                      <h2><?php echo $projecttitle1 ?></h2>
                                                      <h5><?php echo $projecttype1 ?></h5>
                                                </div>
                                          </a>

                                    </div>
                              </a>
                        </div>
                        <div class="project1">
                              <a href="#webdevelopment">
                                    <?php echo '<img src="data:image/png;base64,' . $image2 . '" class="image"/>' ?>
                                    <div class="overlay">
                                          <a href="#Project2">
                                                <div class="text">
                                                      <h2><?php echo $projecttitle2 ?></h2>
                                                      <h5><?php echo $projecttype2 ?></h5>
                                                </div>
                                          </a>

                                    </div>
                              </a>
                        </div>
                  </div>
                  <div class="projectrow1">
                        <div class="project1">
                              <a href="#webdevelopment">
                                    <?php echo '<img src="data:image/png;base64,' . $image3 . '" class="image"/>' ?>
                                    <div class="overlay">
                                          <a href="#Project3">
                                                <div class="text">
                                                      <h2><?php echo $projecttitle3 ?></h2>
                                                      <h5><?php echo $projecttype3 ?></h5>
                                                </div>
                                          </a>

                                    </div>
                              </a>
                        </div>
                        <div class="project1">
                              <a href="#webdevelopment">
                                    <?php echo '<img src="data:image/png;base64,' . $image4 . '" class="image"/>' ?>
                                    <div class="overlay">
                                          <a href="#Project4">
                                                <div class="text">
                                                      <h2><?php echo $projecttitle4 ?></h2>
                                                      <h5><?php echo $projecttype4 ?></h5>
                                                </div>
                                          </a>

                                    </div>
                              </a>
                        </div>
                  </div>

            </div>

            <div class="tabcontent" id="graphicdesign" style="display:none">
                  <div class="projectrow1">
                        <div class="project1">
                              <a href="#graphicdesign">
                                    <?php echo '<img src="data:image/png;base64,' . $image5 . '" class="image"/>' ?>
                                    <div class="overlay">
                                          <a href="#Project5">
                                                <div class="text">
                                                      <h2><?php echo $projecttitle5 ?></h2>
                                                      <h5><?php echo $projecttype5 ?></h5>
                                                </div>
                                          </a>

                                    </div>
                              </a>
                        </div>
                        <div class="project1">
                              <a href="#graphicdesign">
                                    <?php echo '<img src="data:image/png;base64,' . $image6 . '" class="image"/>' ?>
                                    <div class="overlay">
                                          <a href="#Project6">
                                                <div class="text">
                                                      <h2><?php echo $projecttitle6 ?></h2>
                                                      <h5><?php echo $projecttype6 ?></h5>
                                                </div>
                                          </a>

                                    </div>
                              </a>
                        </div>
                  </div>
                  <div class="projectrow1">
                        <div class="project1">
                              <a href="#graphicdesign">
                                    <?php echo '<img src="data:image/png;base64,' . $image7 . '" class="image"/>' ?>
                                    <div class="overlay">
                                          <a href="#Project7">
                                                <div class="text">
                                                      <h2><?php echo $projecttitle7 ?></h2>
                                                      <h5><?php echo $projecttype7 ?></h5>
                                                </div>
                                          </a>

                                    </div>
                              </a>
                        </div>
                        <div class="project1">
                              <a href="#graphicdesign">
                                    <?php echo '<img src="data:image/png;base64,' . $image8 . '" class="image"/>' ?>
                                    <div class="overlay">
                                          <a href="#Project8">
                                                <div class="text">
                                                      <h2><?php echo $projecttitle8 ?></h2>
                                                      <h5><?php echo $projecttype8 ?></h5>
                                                </div>
                                          </a>

                                    </div>
                              </a>
                        </div>
                  </div>
            </div>


            <div class="tabcontent" id="photography" style="display: none">
                  <div class="projectrow1">
                        <div class="project1">
                              <a href="#photography">
                                    <?php echo '<img src="data:image/png;base64,' . $image9 . '" class="image"/>' ?>
                                    <div class="overlay">
                                          <a href="#Project9">
                                                <div class="text">
                                                      <h2><?php echo $projecttitle9 ?></h2>
                                                      <h5><?php echo $projecttype9 ?></h5>
                                                </div>
                                          </a>

                                    </div>
                              </a>
                        </div>
                        <div class="project1">
                              <a href="#photography">
                                    <?php echo '<img src="data:image/png;base64,' . $image10 . '" class="image"/>' ?>
                                    <div class="overlay">
                                          <a href="#Project10">
                                                <div class="text">
                                                      <h2><?php echo $projecttitle10 ?></h2>
                                                      <h5><?php echo $projecttype10 ?></h5>
                                                </div>
                                          </a>

                                    </div>
                              </a>
                        </div>
                  </div>
                  <div class="projectrow1">
                        <div class="project1">
                              <a href="#photography">
                                    <?php echo '<img src="data:image/png;base64,' . $image11 . '" class="image"/>' ?>
                                    <div class="overlay">
                                          <a href="#Project11">
                                                <div class="text">
                                                      <h2><?php echo $projecttitle11 ?></h2>
                                                      <h5><?php echo $projecttype11 ?></h5>
                                                </div>
                                          </a>

                                    </div>
                              </a>
                        </div>
                        <div class="project1">
                              <a href="#photography">
                                    <?php echo '<img src="data:image/png;base64,' . $image12 . '" class="image"/>' ?>
                                    <div class="overlay">
                                          <a href="#Project12">
                                                <div class="text">
                                                      <h2><?php echo $projecttitle12 ?></h2>
                                                      <h5><?php echo $projecttype12 ?></h5>
                                                </div>
                                          </a>

                                    </div>
                              </a>
                        </div>
                  </div>
            </div>
      </div>


      <!-----------------------------------WORK EXPERIENCE------------------------------------------------------------->
      <?php
   $con = mysqli_connect('utacloud.reclaimhosting.com', '', '') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");

      $query = "SELECT StartMonth,StartYear,EndMonth,EndYear,Company,Position,Description FROM Work where WorkId=11";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $startm = $row['StartMonth'];
            $starty = $row['StartYear'];
            $endm = $row['EndMonth'];
            $endy = $row['EndYear'];
            $company = $row['Company'];
            $position = $row['Position'];
            $desc = $row['Description'];
      }

      $query = "SELECT StartMonth,StartYear,EndMonth,EndYear,Company,Position,Description FROM Work where WorkId=12";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $startm2 = $row['StartMonth'];
            $starty2 = $row['StartYear'];
            $endm2 = $row['EndMonth'];
            $endy2 = $row['EndYear'];
            $company2 = $row['Company'];
            $position2 = $row['Position'];
            $desc2 = $row['Description'];
      }

      $query = "SELECT StartMonth,StartYear,EndMonth,EndYear,Company,Position,Description FROM Work where WorkId=13";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $startm3 = $row['StartMonth'];
            $starty3 = $row['StartYear'];
            $endm3 = $row['EndMonth'];
            $endy3 = $row['EndYear'];
            $company3 = $row['Company'];
            $position3 = $row['Position'];
            $desc3 = $row['Description'];
      }
      ?>

      <div id="wrapperworkex">
            <header class="contactheader">
                  <nav class="navpages">
                        <ul>
                              <li style="padding-right: 100px"><a href="#wrapper"> ADITEE DAKHANE</a></li>
                              <li style="padding-right: 5px"><a href="#wrapper"> HOME </a> </li>
                              <li style="padding-right: 5px"><a href="#wrapperabout">ABOUT</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperabout">SKILLS</a> </li>
                              <li style="padding-right: 5px"><a href="#wrapperportfolio">PORTFOLIO</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperworkex">EXPERIENCE</a></li>
                              <li style="padding-right: 5px"><a href="http://aditee1411.uta.cloud/">BLOG</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperprices">HIRE ME</a></li>
                              <li style="padding-right: 5px"><a href="#wrappercontact">CONTACT</a></li>
                              <li style="padding-right: 5px"><a href="#login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">LOGIN</a></li>
                              <li style="padding-right: 5px"> <a href="#signup" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">SIGN UP</a></li>
                        </ul>

                  </nav>

            </header>
            <div class="headerworkexp">
                  <h2>
                        <font color="black" size="5px">
                              <center><b>Work Experience</b></center>
                        </font>
                  </h2>
            </div>


            <div class="workexrow">
                  <div class="workexcolumndate">
                        <h6>
                              <center><?php echo $startm ?> <?php echo $starty ?> - <?php echo $endm ?> <?php echo $endy ?></center>
                        </h6>
                        <h4>
                              <center><?php echo $company ?></center>
                        </h4>
                  </div>
                  <div class="workexcolumn">
                        <h4><?php echo $position ?></h4>
                        <h6><?php echo $desc ?></h6>

                  </div>
            </div>


            <div class="workexrow">
                  <div class="workexcolumndate">
                        <h6>
                              <center><?php echo $startm2 ?> <?php echo $starty2 ?> - <?php echo $endm2 ?> <?php echo $endy2 ?></center>
                        </h6>
                        <h4>
                              <center><?php echo $company2 ?></center>
                        </h4>
                  </div>
                  <div class="workexcolumn">
                        <h4><?php echo $position2 ?></h4>
                        <h6><?php echo $desc2 ?></h6>

                  </div>
            </div>


            <div class="workexrow">
                  <div class="workexcolumndate">
                        <h6>
                              <center><?php echo $startm3 ?> <?php echo $starty3 ?> - <?php echo $endm3 ?> <?php echo $endy3 ?></center>
                        </h6>
                        <h4>
                              <center><?php echo $company3 ?></center>
                        </h4>
                  </div>
                  <div class="workexcolumn">
                        <h4><?php echo $position3 ?></h4>
                        <h6><?php echo $desc3 ?></h6>

                  </div>
            </div>

      </div>
      <!-----------------------------------------------EDUCATION----------------------------------------------------->
      <?php
       $con = mysqli_connect('utacloud.reclaimhosting.com', '', '') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");

      $query = "SELECT StartMonth,StartYear,EndMonth,EndYear,Level,Degree,School FROM Education where EduId=21";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $startm = $row['StartMonth'];
            $starty = $row['StartYear'];
            $endm = $row['EndMonth'];
            $endy = $row['EndYear'];
            $level = $row['Level'];
            $degree = $row['Degree'];
            $school = $row['School'];
      }

      $query = "SELECT StartMonth,StartYear,EndMonth,EndYear,Level,Degree,School FROM Education where EduId=22";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $startm2 = $row['StartMonth'];
            $starty2 = $row['StartYear'];
            $endm2 = $row['EndMonth'];
            $endy2 = $row['EndYear'];
            $level2 = $row['Level'];
            $degree2 = $row['Degree'];
            $school2 = $row['School'];
      }

      $query = "SELECT StartMonth,StartYear,EndMonth,EndYear,Level,Degree,School FROM Education where EduId=23";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $startm3 = $row['StartMonth'];
            $starty3 = $row['StartYear'];
            $endm3 = $row['EndMonth'];
            $endy3 = $row['EndYear'];
            $level3 = $row['Level'];
            $degree3 = $row['Degree'];
            $school3 = $row['School'];
      }
      ?>
      <div id="wrappereducation">
            <header class="contactheader">
                  <nav class="navpages">
                        <ul>
                              <li style="padding-right: 100px"><a href="#wrapper"> ADITEE DAKHANE</a></li>
                              <li style="padding-right: 5px"><a href="#wrapper"> HOME </a> </li>
                              <li style="padding-right: 5px"><a href="#wrapperabout">ABOUT</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperabout">SKILLS</a> </li>
                              <li style="padding-right: 5px"><a href="#wrapperportfolio">PORTFOLIO</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperworkex">EXPERIENCE</a></li>
                              <li style="padding-right: 5px"><a href="http://aditee1411.uta.cloud/">BLOG</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperprices">HIRE ME</a></li>
                              <li style="padding-right: 5px"><a href="#wrappercontact">CONTACT</a></li>
                              <li style="padding-right: 5px"><a href="#login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">LOGIN</a></li>
                              <li style="padding-right: 5px"> <a href="#signup" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">SIGN UP</a></li>
                        </ul>

                  </nav>

            </header>
            <div class="headerworkexp">
                  <h2>
                        <font color="black" size="5px">
                              <center><b>Education</b></center>
                        </font>
                  </h2>
            </div>


            <div class="workexrow">
                  <div class="workexcolumndate">
                        <h6>
                              <center><?php echo $startm ?> <?php echo $starty ?> - <?php echo $endm ?> <?php echo $endy ?></center>
                        </h6>
                        <h4>
                              <center><?php echo $level ?></center>
                        </h4>
                  </div>
                  <div class="workexcolumn">
                        <h4><?php echo $degree ?></h4>
                        <h6><?php echo $school ?></h6>

                  </div>
            </div>


            <div class="workexrow">
                  <div class="workexcolumndate">
                        <h6>
                              <center><?php echo $startm2 ?> <?php echo $starty2 ?> - <?php echo $endm2 ?> <?php echo $endy2 ?></center>
                        </h6>
                        <h4>
                              <center><?php echo $level2 ?></center>
                        </h4>
                  </div>
                  <div class="workexcolumn">
                        <h4><?php echo $degree2 ?></h4>
                        <h6><?php echo $school2 ?></h6>

                  </div>
            </div>


            <div class="workexrow">
                  <div class="workexcolumndate">
                        <h6>
                              <center><?php echo $startm3 ?> <?php echo $starty3 ?>- <?php echo $endm3 ?> <?php echo $endy3 ?></center>
                        </h6>
                        <h4>
                              <center><?php echo $level3 ?></center>
                        </h4>
                  </div>
                  <div class="workexcolumn">
                        <h4><?php echo $degree3 ?></h4>
                        <h6><?php echo $school3 ?></h6>

                  </div>
            </div>

      </div>
      <!-----------------------------------------------REFERENCES------------------------------------------------->
     
      <div id="wrapperreference">
            <header class="contactheader">
                  <nav class="navpages">
                        <ul>
                              <li style="padding-right: 100px"><a href="#wrapper"> ADITEE DAKHANE</a></li>
                              <li style="padding-right: 5px"><a href="#wrapper"> HOME </a> </li>
                              <li style="padding-right: 5px"><a href="#wrapperabout">ABOUT</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperabout">SKILLS</a> </li>
                              <li style="padding-right: 5px"><a href="#wrapperportfolio">PORTFOLIO</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperworkex">EXPERIENCE</a></li>
                              <li style="padding-right: 5px"><a href="http://aditee1411.uta.cloud/">BLOG</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperprices">HIRE ME</a></li>
                              <li style="padding-right: 5px"><a href="#wrappercontact">CONTACT</a></li>
                              <li style="padding-right: 5px"><a href="#login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">LOGIN</a></li>
                              <li style="padding-right: 5px"> <a href="#signup" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">SIGN UP</a></li>
                        </ul>

                  </nav>

            </header>
            <div class="referenceheading">
                  <h3>References</h3>
            </div>

            <div class="slideshow">

                  <div class="mySlides fade">
                        <div class="rowreferences">
                              <div>
                                    <img src="reference-image-3.jpg" alt="Avatar" class="imagereference">
                                    <p class="captionimage">Jay Y<br>
                                          <font style="color:gray"><b>CEO/Accenture</b></font>
                                    </p>
                              </div>

                              <div class="feedback">
                                    <p class="clear">
                                          As always great creative thinking for the best solution.Aditee Dakhane is by
                                          far the most Professional
                                          knowlegdeable developer I have worked with. I will hire her again.
                                    </p>
                              </div>
                              <div style="text-align:center">
                                    <span class="line" onclick="currentSlide(1)"></span>
                                    <span class="line" onclick="currentSlide(2)"></span>
                                    <span class="line" onclick="currentSlide(3)"></span>
                              </div>
                        </div>

                  </div>

                  <div class="mySlides fade" style="display:none">

                        <div class="rowreferences">
                              <div>
                                    <img src="reference-image-1.jpg" alt="Avatar" class="imagereference">
                                    <p class="captionimage">AMY T<br>
                                          <font style="color:gray"><b>SSE/ACI</b></font>
                                    </p>
                              </div>

                              <div class="feedback">
                                    <p class="clear">
                                          As always great creative thinking for the best solution.Aditee Dakhane is by
                                          far the most Professional
                                          knowlegdeable developer I have worked with. I will hire her again.
                                    </p>
                              </div>
                              <div style="text-align:center">
                                    <span class="line" onclick="currentSlide(1)"></span>
                                    <span class="line" onclick="currentSlide(2)"></span>
                                    <span class="line" onclick="currentSlide(3)"></span>
                              </div>
                        </div>
                  </div>

                  <div class="mySlides fade" style="display:none">

                        <div class="rowreferences">
                              <div>
                                    <img src="reference-image-2.jpg" alt="Avatar" class="imagereference">
                                    <p class="captionimage">MAC Z<br>
                                          <font style="color:gray"><b>CO/VMware</b></font>
                                    </p>
                              </div>

                              <div class="feedback">
                                    <p class="clear">
                                          As always great creative thinking for the best solution.Aditee Dakhane is by
                                          far the most Professional
                                          knowlegdeable developer I have worked with. I will hire her again.
                                    </p>
                              </div>
                              <div style="text-align:center">
                                    <span class="line" onclick="currentSlide(1)"></span>
                                    <span class="line" onclick="currentSlide(2)"></span>
                                    <span class="line" onclick="currentSlide(3)"></span>
                              </div>
                        </div>
                  </div>


            </div>
            <br>


      </div>

      <!------------------------------------------PRICES------------------------------------------------------------>
    

      <?php
    $con = mysqli_connect('utacloud.reclaimhosting.com', '', '') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");


      $query = "SELECT Price,JobName,Service1,Service2,Service3,Service4,Link FROM Hire where ServiceId=31";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {

            $price = $row['Price'];
            $job = $row['JobName'];
            $service1 = $row['Service1'];
            $service2 = $row['Service2'];
            $service3 = $row['Service3'];
            $service4 = $row['Service4'];
            $link = $row['Link'];
      }

      $query = "SELECT Price,JobName,Service1,Service2,Service3,Service4,Link FROM Hire where ServiceId=32";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {

            $price1 = $row['Price'];
            $job1 = $row['JobName'];
            $service11 = $row['Service1'];
            $service12 = $row['Service2'];
            $service13 = $row['Service3'];
            $service14 = $row['Service4'];
            $link1 = $row['Link'];
      }

      $query = "SELECT Price,JobName,Service1,Service2,Service3,Service4,Link FROM Hire where ServiceId=33";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {

            $price2 = $row['Price'];
            $job2 = $row['JobName'];
            $service21 = $row['Service1'];
            $service22 = $row['Service2'];
            $service23 = $row['Service3'];
            $service24 = $row['Service4'];
            $link2 = $row['Link'];
      }

      $query = "SELECT Imagename,Image FROM `HireImages` WHERE ServiceId=31";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $image31 = $row['Image'];
      }

      $query = "SELECT Imagename,Image FROM `HireImages` WHERE ServiceId=32";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $image32 = $row['Image'];
      }

      $query = "SELECT Imagename,Image FROM `HireImages` WHERE ServiceId=33";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
            $image33 = $row['Image'];
      }
      ?>

      <div id="wrapperprices">
            <header class="contactheader">
                  <nav class="navpages">
                        <ul>
                              <li style="padding-right: 100px"><a href="#wrapper"> ADITEE DAKHANE</a></li>
                              <li style="padding-right: 5px"><a href="#wrapper"> HOME </a> </li>
                              <li style="padding-right: 5px"><a href="#wrapperabout">ABOUT</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperabout">SKILLS</a> </li>
                              <li style="padding-right: 5px"><a href="#wrapperportfolio">PORTFOLIO</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperworkex">EXPERIENCE</a></li>
                              <li style="padding-right: 5px"><a href="http://aditee1411.uta.cloud/">BLOG</a></li>
                              <li style="padding-right: 5px"><a href="#wrapperprices">HIRE ME</a></li>
                              <li style="padding-right: 5px"><a href="#wrappercontact">CONTACT</a></li>
                              <li style="padding-right: 5px"><a href="#login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">LOGIN</a></li>
                              <li style="padding-right: 5px"> <a href="#signup" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">SIGN UP</a></li>
                        </ul>

                  </nav>

            </header>
            <div class="headerworkexp">
                  <h2>
                        <font color="black" size="5px">
                              <center><b>Prices</b></center>
                        </font>
                  </h2>
            </div>

            <div class="pricecard">
                  <div class="priceimage">
                        <?php echo '<img src="data:image/png;base64,' . $image31 . '" style="width:100%" height="40%"/>' ?>
                  </div>
                  <div class="pricedivisions">

                        <h1><?php echo '$' . $price ?></h1>
                        <h6><?php echo $job ?></h6>
                  </div>
                  <div class="features">
                        <hr style="color: gray">
                        <div style="text-align: left; padding-left: 20px"><?php echo $service1 ?></div>
                        <hr style="color: gray">
                        <div style="text-align: left; padding-left: 20px"><?php echo $service2 ?></div>
                        <hr style="color: gray">
                        <div style="text-align: left; padding-left: 20px"><?php echo $service3 ?></div>
                        <hr style="color: gray">
                        <div style="text-align: left; padding-left: 20px"><?php echo $service4 ?></div>
                        <div class="featurecontact">
                              <hr style="color: gray"><a href="<?php echo $link ?>">
                                    <div style="text-align: left; padding-left: 20px">Contact Us</div>
                              </a>
                        </div>
                  </div>



            </div>

            <div class="pricecard">
                  <div class="priceimage">
                        <?php echo '<img src="data:image/png;base64,' . $image32 . '" style="width:100%" height="40%"/>' ?>
                  </div>
                  <div class="pricedivisions">

                        <h1><?php echo '$' . $price1 ?></h1>
                        <h6><?php echo $job1 ?></h6>
                  </div>
                  <div class="features">
                        <hr style="color: gray">
                        <div style="text-align: left; padding-left: 20px"><?php echo $service11 ?></div>
                        <hr style="color: gray">
                        <div style="text-align: left; padding-left: 20px"><?php echo $service12 ?></div>
                        <hr style="color: gray">
                        <div style="text-align: left; padding-left: 20px"><?php echo $service13 ?></div>
                        <hr style="color: gray">
                        <div style="text-align: left; padding-left: 20px"><?php echo $service14 ?></div>
                        <div class="featurecontact">
                              <hr style="color: gray"><a href="<?php echo $link1 ?>">
                                    <div style="text-align: left; padding-left: 20px">Contact Us</div>
                              </a>
                        </div>

                  </div>


            </div>


            <div class="pricecard">
                  <div class="priceimage">
                        <?php echo '<img src="data:image/png;base64,' . $image33 . '" style="width:100%" height="40%"/>' ?>
                  </div>
                  <div class="pricedivisions">

                        <h1><?php echo '$' . $price2 ?></h1>
                        <h6><?php echo $job2 ?></h6>
                  </div>
                  <div class="features">
                        <hr style="color: gray">
                        <div style="text-align: left; padding-left: 20px"><?php echo $service21 ?></div>
                        <hr style="color: gray">
                        <div style="text-align: left; padding-left: 20px"><?php echo $service22 ?></div>
                        <hr style="color: gray">
                        <div style="text-align: left; padding-left: 20px"><?php echo $service23 ?></div>
                        <hr style="color: gray">
                        <div style="text-align: left; padding-left: 20px"><?php echo $service24 ?></div>
                        <div class="featurecontact">
                              <hr style="color: gray"><a href="<?php echo $link2 ?>">
                                    <div style="text-align: left; padding-left: 20px">Contact Us</div>
                              </a>
                        </div>
                  </div>

            </div>
      </div>

      <!-------------------------------------CONTACT------------------------------------------------------------->
     
      <?php
       $con = mysqli_connect('utacloud.reclaimhosting.com', '', '') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");

      $query = "SELECT Email,Phone,Address,Language FROM About";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {

            $emailc = $row['Email'];
            $phonec = $row['Phone'];
            $addressc = $row['Address'];
      }
      ?>
      <?php
      if (isset($_POST["contactsubmit"])) {
            if (!empty($_POST['username']) && !empty($_POST['subject']) && !empty($_POST['email']) && !empty($_POST['message'])) {

             $con = mysqli_connect('utacloud.reclaimhosting.com', '', '') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");

                  $name = $_POST['username'];
                  $email = $_POST['email'];
                  $subject = $_POST['subject'];
                  $message = $_POST['message'];

                  $query = mysqli_query($con, "SELECT `UserId`, `Name` FROM `Users` WHERE Username='$name' AND Email='$email'");
                  $numrows = mysqli_num_rows($query);
                   echo "<script>(function(){alert('$name');})();</script>";
                  echo "<script>(function(){alert('$numrows');})();</script>";

                  if ($numrows == 1) {
                        $sql = "SELECT `UserId`, `Name` FROM `Users` WHERE Username='$name'";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                              $id = $row['UserId'];
                        }
                        $sql2 = "INSERT INTO `UserContact`(`UserId`, `Name`, `Subject`, `Message`) VALUES ($id,'$name','$subject','$message')";
                        if (mysqli_query($con, $sql2)) {

                              $msg = "Record added successfully";
                              echo "<script>(function(){alert('$msg');})();</script>";
                        } else {
                              $msg = "Record not added";
                              echo "<script>(function(){alert('$msg');})();</script>";
                        }
                  } else {
                        $msg = "Enter name is not same as your username";
                        echo "<script>(function(){alert('$msg');})();</script>";
                  }
            }
      }
      ?>

      <div id="wrappercontact">
            <div class="backgroundimage">
                  <header class="contactheader" id="cheader">
                        <nav class="navpages">
                              <ul>
                                    <li style="padding-right: 100px"><a href="#wrapper"> ADITEE DAKHANE</a></li>
                                    <li style="padding-right: 5px"><a href="#wrapper"> HOME </a> </li>
                                    <li style="padding-right: 5px"><a href="#wrapperabout">ABOUT</a></li>
                                    <li style="padding-right: 5px"><a href="#wrapperabout">SKILLS</a> </li>
                                    <li style="padding-right: 5px"><a href="#wrapperportfolio">PORTFOLIO</a></li>
                                    <li style="padding-right: 5px"><a href="#wrapperworkex">EXPERIENCE</a></li>
                                    <li style="padding-right: 5px"><a href="http://aditee1411.uta.cloud/">BLOG</a></li>
                                    <li style="padding-right: 5px"><a href="#wrapperprices">HIRE ME</a></li>
                                    <li style="padding-right: 5px"><a href="#wrappercontact">CONTACT</a></li>
                                    <li style="padding-right: 5px"><a href="#login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">LOGIN</a></li>
                                    <li style="padding-right: 5px"> <a href="#signup" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">SIGN UP</a></li>
                              </ul>

                        </nav>

                  </header>
                  <div class="contactcontainer">
                        <div style="text-align:center">
                              <p><b>
                                          <h3>Contact Me</h3>
                                    </b>
                                    <p>
                        </div>
                        <div class="row">
                              <div class="column">
                                    <p><b>Feel free to contact me</b></p>
                                    <form action="#" method="post">

                                          <div class="input-container">
                                                <i class="	fa fa-user-circle icon"></i>
                                                <input class="input-field" type="text" placeholder="Name" name="username">
                                          </div>


                                          <div class="input-container">
                                                <i class="fa fa-file-text icon"></i>
                                                <input class="input-field" type="text" placeholder="Subject" name="subject">
                                          </div>


                                          <div class="input-container">
                                                <i class="fa fa-envelope icon"></i>
                                                <input class="input-field" type="text" placeholder="E-mail" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                                          </div>

                                          <p>
                                                <font color="grey">Your Message</font>
                                          </p>
                                          <input class="message" type="message" name="message" />




                                          <br> <button type="submit" name="contactsubmit" class="btn">Send</button>
                                    </form>
                              </div>
                              <div class="column">
                                    <p><b>Address</b><br>
                                          <font color="black"><?php echo $addressc ?></font><br><br>
                                          <b>Phone</b><br>
                                          <font color="black"><?php echo $phonec ?></font><br><br>
                                          <b>Email</b><br>
                                          <font color="black"><?php echo $emailc ?></font><br>


                                    </p>
                              </div>
                        </div>
                  </div>


            </div>
            <footer class="contactfooter">
                  <div align="center">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                        <a href="#" class="fa fa-instagram"></a>
                  </div>

                  <p><b>
                              <font color="black" size="6px">Aditee D Dakhane</font>
                        </b><br>
                        <font size="2.5px">&copy; Aditee D Dakhane CV.All rights reserved.<br>Design -DiazApps</font>
                  </p>

            </footer>

      </div>

      <!-----------------------------------------------LOGIN----------------------------------------------------->
     
      <div id="id01" class="modal">

            <form class="modal-content animate" method="post">
                  <div class="cross">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                  </div>
                  <div class="loginheading">
                        <h2>Log in</h2>
                  </div>
                  <div class="container">
                        <label for="uname">User:</label>
                        <input type="text" name="uname" required>
                  </div>
                  <div class="container1">
                        <label for="psw">Password:</label>
                        <input type="password" name="psw" required>

                  </div>
                  <div class="loginbuttons">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Close</button>
                        <button name="loginsubmit" type="submit">Get in</button>
                  </div>
            </form>
            <?php

            if (isset($_POST["loginsubmit"])) {
                  if (!empty($_POST['uname']) && !empty($_POST['psw'])) {
                        $user = $_POST['uname'];
                        $pass = $_POST['psw'];
                        $admin_username = "admin";
                        $admin_password = "pass123#";
                       $con = mysqli_connect('utacloud.reclaimhosting.com', '', '') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");

                        $query = mysqli_query($con, "SELECT UserId,RoleId FROM Users WHERE Username='$user'AND Password='$pass'");
                        $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
                        $id = $row['RoleId'];
                        $count = mysqli_num_rows($query);

                        if ($count == 1) {
                              if ($user == $admin_username && $pass == $admin_password) {
                                   
                                    $_SESSION['id'] = $id;
                                    $_SESSION['username'] = $admin_username;
                                    $msg= "Welcome, " . $_SESSION['username'] . "!";
                                    echo "<script>(function(){alert('$msg');})();</script>";
                                    $msg = "Admin Login Successfull";
                                    echo "<script>(function(){alert('$msg');
                              window.location='admin.php'})();</script>";
                              } else {
                                  
                                    $_SESSION['id'] = $id;
                                    $_SESSION['username'] = $user;
                                    $msg= "Welcome, " . $_SESSION['username'] . "!";
                                    echo "<script>(function(){alert('$msg');})();</script>";
                                    $msg = "User Login Successfull";
                                    echo "<script>(function(){alert('$msg');
                                          window.location='Home.php#wrapperabout'})();</script>";
                              }
                        } else {
                              $error = "Your Login Name or Password is invalid";
                              echo "<script>(function(){alert('$error');})();</script>";
                        }
                  } else {
                        alert("All fields are required!");
                  }
            } ?>
      </div>
      <!-----------------------------------------------------SIGNUP------------------------------------------------------>
     
      <div id="id02" class="modal">

            <form class="modal-contentsignup animate" method="post" onSubmit="return validate();">
                  <div class="cross">
                        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                  </div>
                  <div class="loginheading">
                        <h2>Sign Up</h2>
                  </div>
                  <div class="containername">
                        <label for="name">Name:</label>
                        <input type="text" name="name" pattern="[A-Za-z ]{1,25}" required>
                  </div>
                  <div class="containeremail">
                        <label for="email">Email:</label>
                        <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>

                  </div>
                  <div class="container">
                        <label for="uname">User:</label>
                        <input type="text" name="uname" required>
                  </div>
                  <div class="container1">
                        <label for="psw">Password:</label>
                        <input type="password" id="password" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

                  </div>
                  <div class="containerconfirmpwd">
                        <label for="psw">Confirm Password:</label>
                        <input type="password" id="confirm_password" name="confirmpsw" required>

                  </div>
                  <div class="loginbuttons">
                        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Close</button>
                        <button type="submit" name="submit">Get in</button>
                  </div>
            </form>
            <?php

            if (isset($_POST["submit"])) {
                  if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['uname']) && !empty($_POST['psw']) && ($_POST['psw'] == $_POST['confirmpsw'])) {
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $user = $_POST['uname'];
                        $pass = $_POST['psw'];

                      $con = mysqli_connect('utacloud.reclaimhosting.com', '', '') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");

                        $query = mysqli_query($con, "SELECT * FROM Users WHERE Username='" . $user . "'");
                        $numrows = mysqli_num_rows($query);
                        if ($numrows == 0) {
                              $sql = "INSERT INTO Users(RoleId,Name,Email,Username,Password) VALUES('0','$name','$email','$user','$pass')";

                              $result = mysqli_query($con, $sql);
                              if ($result) {
                                    $msg = "Account Successfully Created";
                                    echo "<script>(function(){alert('$msg');})();</script>";
                              } else {
                                    $msg1 = "Failure";
                                    echo "<script>(function(){alert('$msg1');})();</script>";
                              }
                        } else {
                              $msg2 = "That username already exists! Please try again with another.";
                              echo "<script>(function(){alert('$msg2');})();</script>";
                        }
                  } else {
                        alert("All fields are required!");
                  }
            }
            ?>
      </div>



</body>

</html>
