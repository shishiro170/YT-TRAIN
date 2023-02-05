<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js">
 @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
    <div id="mySidenav" class="sidenav" >
        <a onclick="closeNav()" id="Close" class="sidenav-close">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <ul>
            <li>
                <a href="#">
                <i class="fa-solid fa-house"></i>
                <b>Home</b>
                </a>
            </li>   
            <li>
                <a href="#">
                <i class="fa-solid fa-house"></i>
                <b>Home</b>
                </a>
            </li>
            <li>
                <a href="#">
                <i class="fa-solid fa-house"></i>
                <b>Home</b>
                </a>
            </li>      
        </ul>
    </div>
    <div class="menu-box" style="transform:scale(0.7);">
        <span onclick="openNav()">
        <a class="menu-button">
            <i  class="fa-solid fa-bars-progress"></i>
        </a>
        <span>
    </div>   
</html>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "300px";
    document.body.style.backgroundColor = "rgba(0,0,0,1)";
    document.getElementById("mySidenav").style.borderStyle= "solid";
    document.getElementById("Close").style.display="block";
    document.getElementById("mySidenav").style.zIndex="10";
  }
function closeNav() {
    document.getElementById("mySidenav").style.width = "100px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.9)";
    document.getElementById("mySidenav").style.borderStyle= "none";
    document.getElementById("Close").style.display="none";
    document.getElementById("mySidenav").style.zIndex="0";
  }
   
</script>
