<?php

session_start();

?>


<html>
    <head>
        <title>Home Page</title>
         <link rel="stylesheet" type="text/css" href="style.css">
         <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">  -->
 
         <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link rel="stylesheet" href="calendarstyle.css">
</head>
<body onload="renderDate()">
<!-- <div class="container"> 
<a class="float-right" href="logout.php"> LOGOUT </a>
</div> -->

    <div class="wrapper">
        <div class="calendar">
            <div class="month">

                <div class="prev" onclick="moveDate('prev')">
                    <span>&#10094</span>
                </div>

                <div>
                    <h2 id="month"></h2>
                    <p id="date_str"></p>
                </div>

                <div class="next" onclick="moveDate('next')">
                    <span>&#10095</span>
                </div>

            </div>

            <div class="weekdays">
                <div>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>

            </div>

            <div class="days">
                
            </div>

        </div>
        </div>
                        <button type="submit" class="button" style="vertical-align:middle"><span><a href="logout.php"> LOGOUT </a> </span></button>
</div>
    </div> 
   
    
    <script src="script.js"></script>
</body>


</html>

