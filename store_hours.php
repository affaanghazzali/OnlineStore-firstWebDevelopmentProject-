<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Hours</title>
        <meta http-equiv="Content-Type"
              content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="store.css">
    </head>
    <body class="background-color">
        <!-- <ul class="navbar">
            <li>
                <a href="store_home.html">Home</a>
            </li>
            <li>
                <a href="store_hours.html">Hours</a>
            </li>
            <li>
                <a href="store_about.html">About</a>
            </li>
        </ul>
        -->
        
        <?php include 'navbar.php'; ?>
        
        <!--
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <a class="navbar-brand" href="store_home.html">AG Vinyl Collective Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="store_hours.html">Hours</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="store_about.html">About</a>
                    </li>
                </ul>
            </div>
        </nav>
        -->
        
        <div class="centered-container">
            <h1 class="centered-text sansSerif-text">
                Store Hours 
            </h1>
            <h2 id ="title2" class="centered-text">
                Weekends and Holidays Included
            </h2>
            <!-- <h3 id ="storeHoursPic"> -->
            <img src="images/animationpic.jpg" id ="storeHoursPic" alt="open sign 2" class="store-hours-image">
            <!-- </h3> -->
            <button id="title-button">Alter Title</button>
            <button id="title2-button">Alter Second Title</button>
            <button id="animated-image-button">Move Image</button>
            <p> 
                We are open from 12 p.m. to 12 a.m. Tuesday through Sunday! <br>
                So drop by whenever, except for Monday's because no one likes those <br>
                and because of the fact that we won't be there.
            </p>
            <table> 
                <tr>
                    <th>Days</th>
                    <th>Hours</th> 
                </tr>
                <tr>
                    <td>Tuesday-Sunday</td>
                    <td>12pm - 12am</td> 
                </tr>
            </table>
        </div>
        <script src="scripts/test.js"></script>
        <script 
            src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
        <script src="scripts/jquery_test.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
