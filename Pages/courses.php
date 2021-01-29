<!DOCTYPE HTML>
<html lang="en">
   <head>
      <meta content="text/html; charset=utf-8" >
      <title>Courses | UK Jobs</title>
      <script src="../JS/lib/jquery.js"></script>	
      <link rel="stylesheet" type="text/css" href="../CSS/Stylesheet.css"/>
      <link rel="stylesheet" type="text/css" href="../DataTables/datatables.min.css"/>
      <script type="text/javascript" src="../DataTables/datatables.min.js"></script>
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
                  <li class="nav"><a class="active" href="courses.php">Courses</a></li>
                  <li class="nav"><a href="funding.html">Funding</a></li>
                  <li class="nav"><a href="contact.php">Contact Us</a></li>
               </ul>
            </div>
            <div id="myNav" class="overlay">
               <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
               <div class="overlay-content">
                  <li class="nav"><a href="index.html">Home</a></li>
                  <li class="nav"><a href="jobs.html">Jobs</a></li>
                  <li class="nav"><a class="active" href="courses.php">Courses</a></li>
                  <li class="nav"><a href="funding.html">Funding</a></li>
                  <li class="nav"><a href="contact.php">Contact Us</a></li>
               </div>
            </div>
            <div class="mobile_button" onclick="openNav()">&#9776;</div>
         </div>
         <span class="heading1"> 
         Courses
         </span>
         <div class="about_us">
            Browse through all universities in the UK along with links to their websites.</br>You can narrow down your search results by using the search bar.
            </br>
         </div>
         <div class="courses_table">
            <table id="example" class="display" style="width:100%">
               <thead>
                  <tr>
                     <th>University</th>
                     <th>Website</th>
                  </tr>
               </thead>
               <tfoot>
                  <tr>
                     <th>University</th>
                     <th>Website</th>
                  </tr>
               </tfoot>
            </table>
            <script type="text/javascript" src="../JS/courses.js"></script>
            <?php
               $myfile = fopen("universities.json", "w") or die("Unable to open file!");
               $txt = '{"data":';
               fwrite($myfile, $txt);
               $txt = file_get_contents('http://universities.hipolabs.com/search?country=United%20Kingdom');
               fwrite($myfile, $txt);
               $txt = "}";
               fwrite($myfile, $txt);
               fclose($myfile);
               ?>
         </div>
      </div>
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