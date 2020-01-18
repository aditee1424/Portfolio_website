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

                </form>
            </div>
        </div>

        <?php
                 if (isset($_POST["view"])) {

                   $con = mysqli_connect('utacloud.reclaimhosting.com', 'aditeeut_Aditee', 'Shaliniank24') or die(mysqli_connect_errno());
      mysqli_select_db($con, 'aditeeut_portfolio') or die("cannot select DB");
                    $query = "SELECT UserId,Name,Subject,Message FROM UserContact";
                    $result = mysqli_query($con, $query);
                  
                    echo "<table border='1' cellpadding='10'>";
                    echo "<tr> <th>USER ID</th> <th>NAME</th> <th>SUBJECT</th><th>MESSAGE</th> </tr>";
                    while ($row = mysqli_fetch_array($result)) {
                        $id = $row['UserId'];
                        $name = $row['Name'];
                        $sub = $row['Subject'];
                        $msg= $row['Message'];
        
                        echo "<tr>";
        
                        echo '<td>' . $id . '</td>';
                       
        
                        echo '<td>' . $name . '</td>';
                       
                        echo '<td>' . $sub . '</td>';

                        echo '<td>' . $msg . '</td>';
                       
        
                        echo "</tr>";
                    }
                    echo "</table>";
                }
        ?>
    </div>

</body>

</html>