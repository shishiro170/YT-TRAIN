<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js">
 @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
        <div class="container">
            <div class="column" style="width:235px !important;">
                <span>
                <a href="#">
                <i class="fa-brands fa-youtube" style="float:left;">                
                </i> 
                    <p><b>YouTube</b></p>
                </a>            
                </span>
            </div>
            <div class="column">
                <div class="search-box">                
                <input type="text" class="search-input" placeholder="Search">
                <input type="text" name="" value="Search">
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

        </div>
      
    
</body>
</html>