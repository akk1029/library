<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/header.js"></script>
    <script src="js/landing.js"></script>
    <title>Library Management System</title>
</head>
<body>
    
<nav>
        <header>
            <div class="fulllogo">
                <img class="weblogo" src="img/Logo.png" alt="Website Logo">
                <h1 class="webname">BookHub</h1>
            </div>
        </header>
        <div class="navlinks">
            <a href="?route="><button class="homebtn">Home</button></a>
            <a href="?route=books"><button class="viewbtn">View Books</button></a>



            <div class="dropdown1">
                <button onmouseover="dropdown1()" class="dropbtn1">Edit Library</button>
                <div id="myDropdown1" class="dropdown-content">
                    <a href="?route=add">Add Books</a>
                    <a href="?route=update">Update Books</a>
                    <a href="?route=delete">Delete Books</a>
                </div>
            </div>

            <div class="dropdown2">
                <button onmouseover="dropdown2()" class="dropbtn2">Borrow / Return</button>
                <div id="myDropdown2" class="dropdown-content">
                    <a href="?route=borrow">Borrow Books</a>
                    <a href="?route=return">Return Books</a>
                    <a href="?route=borrow-list">History</a>
                </div>
            </div>

            <div class="searchpad">
                <a href="?route=search"><img class="searchicon" src="img/search-outline.svg" alt="search icon"></a>
            </div>
        </div>
    </nav>
    <main>
