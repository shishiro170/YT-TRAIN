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
        @include('layout.sidebar')
        <header>
               @include('layout.navbar')  
        </header>
        <nav>
                @include('layout.bot')        
        </nav>
        <main style="transform:scale(0.9);">
                @include('layout.main')
        </main>
        
           
</body>
</html>