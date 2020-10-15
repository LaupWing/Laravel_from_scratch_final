<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Laravel</title>

      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
   </head>
   <body class="antialiased">
      <div class="flex-center position-ref full-height">
         <div class="content">
            <div class="title m-b-md">
               Tweety
            </div>
            <div class="links">
               @auth
                  <a href="{{ url('/home') }}">Home</a>
               @else
                  <a href="{{ route('login') }}">Login</a>
                  <a href="{{ route('register') }}">Register</a>
               @endif
            </div>
         </div>
      </div>
   </body>
</html>
