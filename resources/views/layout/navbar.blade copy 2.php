<!DOCTYPE html>
<html lang="en" style="border-bottom: 5px solid black;">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js">
 @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
        <div class="container">
            <div>
            <span>
                <a href="#">
                <i class="fa-brands fa-youtube" style="float:left;">                
                </i> <h1 style="font-strech:condensed;">
                        <b>YouTube</b>
                    </h1>
                </a>            
            </span>
            </div>
            <div class="search-box">                
                <input type="text" class="search-input" placeholder="Search">
                <a href="#" class="search-button">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>

            </div>
            <div class="mic-box">
                <a href="#" class="mic-button">
                    <i class="fa-solid fa-microphone"></i>
                </a>
            </div>
            <div class="profile-settings">
                <i class="fa-solid fa-gear"></i>    
            </div>
            <div class="profile">
                <i class="fa-solid fa-user"></i>     
            </div>
        </div>
      
    
</body>
</html>