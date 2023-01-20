<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Main page</title>
</head>
<body>
    <div class="container">
        <div class="login">
            <img src="logo.png" class="logo">
            <ul>
                <li><a href="#">SIGN-UP</a></li>
                <li><a href="#">LOGIN</a></li>
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </ul>
        </div>
        <div class="navbar">
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="#">ACCOMODATION</a></li>
                <li><a href="#">FILTERS</a></li>
                <li><a href="#">LOCATION</a></li>
                <li><a href="#">ABOUT US</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>EXPLORE</h1>
            <h3>" EXTRAORDINARY EXPERIENCES "</h3>
            <p>A whole new hotel and beach resort experience unlike any other, 
                come and visit <br>AZZURA for more exciting views and spot.</p>
        </div>
        <div class="availability">
            <div class="status">
                <form action="availabilty.php" method="post">
                    <div class="category">
                        <label for="check-in" class="edit"> CHECK-IN
                            <br><input type="date" id="check-in" name="check-in"required>
                        </label>
                        <label for="check-out" class="edit"> CHECK-OUT
                            <br><input type="date" id="check-out" name="check-out"required>
                        </label>
                        <label for="code" class="edit"> PROMO CODE
                            <br><input type="text" id="code" name="code"required>
                        </label>
                        <label for="adult" class="edit"> ADULT
                            <br><input type="number" id="adult" name="adult"required>
                        </label>
                        <label for="children" class="edit"> CHILDREN
                            <br><input type="number" id="children" name="children"required>
                        </label>
                    </div>
                    
                </form>
                <!--<a href="#" class="button">Check availability</a>-->
               
            </div>
       </div>

    </div>
    <div class="container-two">

        <div class="content-two">
                <h1>Welcome to</h1>
                <h2 style="color: #108AC9">"AZZURA HOTEL MANAGEMENT AND BEACH RESORT"</h2>
                <p>Find Azzura in Bolong Zamboanga City, Azzura are designed to merge intimate<br>
                    stays in one instagram worthy space for you, our guests.
                </p>
        </div>
        
    </div>
    <div class="container">
        
    </div>
    <div class="container">
        
    </div>
</body>
</html>