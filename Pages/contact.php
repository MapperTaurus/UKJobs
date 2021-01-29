<!DOCTYPE HTML>
<html lang="en">
   <head>
      <meta content="text/html; charset=utf-8" >
      <title>Contact Us | UK Jobs</title>
      <script src="../JS/lib/jquery.js"></script>	
      <link rel="stylesheet" type="text/css" href="../CSS/Stylesheet.css"/>
      <link rel="stylesheet" type="text/css" href="../DataTables/datatables.min.css"/>
      <script type="text/javascript" src="../DataTables/datatables.min.js"></script>
      <?php include '../DB/authController.php'; ?>
   </head>
   <body>
      <div class="wrapper">
         <div class="header">
            <a href="index.html">
            <img class="logo_image" id="top" alt="UK Jobs" src="../Images/logo.png"> </img>
            </a>
            <div class="nav_whole">
               <ul class="nav">
                  <li class="nav"><a href="index.html">Home</a></li>
                  <li class="nav"><a href="jobs.html">Jobs</a></li>
                  <li class="nav"><a href="courses.php">Courses</a></li>
                  <li class="nav"><a href="funding.html">Funding</a></li>
                  <li class="nav"><a class="active" href="contact.php">Contact Us</a></li>
               </ul>
            </div>
            <div id="myNav" class="overlay">
               <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
               <div class="overlay-content">
                  <li class="nav"><a href="index.html">Home</a></li>
                  <li class="nav"><a href="jobs.html">Jobs</a></li>
                  <li class="nav"><a href="courses.php">Courses</a></li>
                  <li class="nav"><a href="funding.html">Funding</a></li>
                  <li class="nav"><a class="active" href="contact.php">Contact Us</a></li>
               </div>
            </div>
            <div class="mobile_button" onclick="openNav()">&#9776;</div>
         </div>
         <span class="heading1"> 
         Contact Us
         </span>
         <?php if (isset($_GET['status']))
            {
                echo '<div class="success">' . '<i><b>Message sent successfully!</b></i></br>' . '</div>';
            }
            else
            {
                echo '<div class="about_us">' . 'Send us a message by using the form</br>We will contact you as soon as possible via Email' . '</div>';
            }
            ?>
         <form action="contact.php" method="post">
         <div class="contact_form">
            <input type="email" id="input_field" name="email" value="" maxlength='100' placeholder="Email"required/>
         </div>
         <div class="contact_form">
            <input type="text" id="input_field2" name="forename" value="" maxlength='50' placeholder="Forename" required/>
            <input type="text" id="input_field2" name="surname" value="" maxlength='50' placeholder="Surname" required/>
         </div>
         <div class="contact_form">
            <textarea type="text" id="input_field3" name="message" value="" cols="80" rows="20" maxlength='2000' placeholder="Message (maximum characters: 2000)"required/></textarea>
         </div>
         <div class="contact_button">
            <button type="submit" name="send-button" id = "form_register">Send message</button>
            <?php if (count($errors) > 0): ?>
            <div class="error">
               <?php foreach ($errors as $error): ?>
               <li><?php echo $error; ?></li>
               <?php
                  endforeach; ?>
            </div>
            <?php
               endif; ?>
         </div>
      </div>
      </div>
      </br>
      <script type="text/javascript" src="../JS/navbar.js"></script>
      <div id="footer"> 
         <span style="font-size:11px;font-weight:bold;">Contact Number: 01632 960689 │ Email Address: Contact@UKJobs.com </br> &copy; Copyright 2020, UK Jobs </span> 
         <span style="margin-right:200px">
         <a href="https://www.youtube.com/" target="_blank">
         <img class="social_yt" id="top" alt="Youtube" src="../Images/media_yt1.png"> </img>
         </a>
         <a href="https://twitter.com/" target="_blank">
         <img class="social_tw" id="top" alt="Twitter" src="../Images/media_tw1.png"> </img>
         </a>
         <a href="https://facebook.com/" target="_blank">
         <img class="social_fb" id="top" alt="Facebook" src="../Images/media_fb1.png"> </img>
         </a>
         </br>
         </span>
      </div>
   </body>