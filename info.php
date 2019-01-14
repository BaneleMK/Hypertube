<?php
  $json = $_GET['obj'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Document</title>
    <style>
                body {
          font-family: Arial;
          background-color: rgb(66, 66, 68);
        }
        
        * {
          box-sizing: border-box;
        }
        
        form.example input[type=text] {
          padding: 10px;
          font-size: 17px;
          border: 1px solid grey;
          float: left;
          width: 50%;
          background: #333;
          color: white;
          margin-top: 3px;
        }
        
        form.example button {
          float: left;
          margin-top: 3px;
          width: 10%;
          padding: 10px;
          background: grey;
          color: white;
          font-size: 17px;
          border: 1px solid grey;
          border-left: none;
          cursor: pointer;
        }
        
        form.example button:hover {
          background: rgb(66, 66, 68);
        }
        
        form.example::after {
          content: "";
          clear: both;
          display: table;
        }
        
        .topnav {
          overflow: hidden;
          background-color: #333;
        }

        .topnav {
          overflow: hidden;
          background-color: #333;
        }

        .topnav a {
          float: left;
          display: block;
          color: #f2f2f2;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 17px;
        }

        .topnav a:hover {
          background-color: rgb(66, 66, 68);
        }

        .active {
          background-color: grey;
          color: white;
        }

        .topnav .icon {
          display: none;
        }

        @media screen and (max-width: 600px) {
          .topnav a:not(:first-child) {display: none;}
          .topnav a.icon {
            float: right;
            display: block;
          }
        }

        @media screen and (max-width: 600px) {
          .topnav.responsive {position: relative;}
          .topnav.responsive .icon {
            position: absolute;
            right: 0;
            top: 0;
          }
          .topnav.responsive a {
            float: none;
            display: block;
            text-align: left;
          }
        }

        .sidenav {
          height: 100%;
          width: 0;
          position: fixed;
          z-index: 1;
          top: 0;
          left: 0;
          background-color: #333;
          overflow-x: hidden;
          transition: 0.5s;
          padding-top: 60px;
        }

        .sidenav a {
          padding: 8px 8px 8px 32px;
          text-decoration: none;
          font-size: 25px;
          color: #818181;
          display: block;
          transition: 0.3s;
        }

        .sidenav a:hover {
          color: #f1f1f1;
        }

        .sidenav .closebtn {
          position: absolute;
          top: 0;
          right: 25px;
          font-size: 36px;
          margin-left: 50px;
        }

        @media screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
        }

        .row {
          display: -ms-flexbox; /* IE10 */
          display: flex;
          -ms-flex-wrap: wrap; /* IE10 */
          flex-wrap: wrap;
          padding: 0 4px;
        }

        /* Create four equal columns that sits next to each other */
        .column {
          -ms-flex: 25%; /* IE10 */
          flex: 25%;
          max-width: 25%;
          padding: 0 4px;
        }

        .column img {
          margin-top: 8px;
          vertical-align: middle;
        }

        .column img:hover {
          opacity: 0.7;
        }

        /* Responsive layout - makes a two column-layout instead of four columns */
        @media screen and (max-width: 800px) {
          .column {
            -ms-flex: 50%;
            flex: 50%;
            max-width: 50%;
          }
        }

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
          .column {
            -ms-flex: 100%;
            flex: 100%;
            max-width: 100%;
          }
        }

        .btn {
          background-color: grey;
          border: none;
          color: white;
          padding: 12px 30px;
          cursor: pointer;
          font-size: 20px;
        }

        /* Darker background on mouse-over */
        .btn:hover {
          background-color: #333;
        }

        hr {
            background-color: grey;
            color: red;
        }
    </style>
</head>
<body>

    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#">Action</a>
      <a href="#">Animation</a>
      <a href="#">Romance</a>
      <a href="#">Adventure</a>
      <a href="#">Musical</a>
      <a href="#">Horror</a>
      <a href="#">Thriller</a>
      <a href="#">Sport</a>
      <a href="#">War</a>
      <a href="#">Western</a>
      <a href="#">Drama</a>
      <a href="#">History</a>
      <a href="#">Mystery</a>
      <a href="#">Crime</a>
      <a href="#">Family</a>
      <a href="#">Biography</a>
      <a href="#">Sci-fi</a>
    </div>

    <div class="topnav" id="myTopnav">
        <a href="#"><span style="font-size:10px;cursor:pointer" onclick="openNav()">&#9776;</span></a>
        <a href="start.php">home</a>
        <a href="video.php">video</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
        <form class="example" style="margin:auto;max-width:600px;">
            <input type="text" placeholder="Search.." name="search2">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>

    <br >

    <center><img src="logo.png" alt="logo" height="50%" width="50%"></center>

    <br />

    <div class="row"> 
        <div class="column">
          <a href="video.php"><img id="movie_cover" src="" style="width:100%;height:100%;"></a>
        </div>
        <div class="column">
            <p id="movie_name" style="font-size: 3vw; color: white;"></p>
            <p id="movie_genre" style="font-size: 3vw; color: white;"></p>
            <p id="movie_year" style="font-size: 3vw; color: white;"></p> 
            <p id="movie_rating" style="font-size: 3vw; color: white;"></p>
        </div>
        <div class="column">
        </div>
        <div class="column">
            <p style="font-size: 3vw; color: white;"><b>CAST:</b></p>
            <p style="font-size: 3vw; color: white;"><b>NAME1</b></p>
            <p style="font-size: 3vw; color: white;"><b>NAME2</b></p> 
            <p style="font-size: 3vw; color: white;"><b>DIRECTOR</b></p>
        </div>
    </div>

    <br />

    <div class="row">
        <center>
            <p style="color: white; align: center;">
                <b>SYNOPSIS</b><br />
              <span id="movie_synopsis"></span>
            </p>
        </center>
    </div>

    <center>
        <div class="column">
            <br />
            <button class="btn"><i class="fa fa-download"></i> Download</button>
        </div>
    </center>

    <br />

    <script>
      var o = <?php echo $json; ?>;

        function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }
    </script>

    <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
        }
        
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
    </script>

<script type="text/javascript" src="ayeye.js"></script>
</body>
</html>


