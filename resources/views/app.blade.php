<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Dancing+Script:wght@400;700&family=Kalam&display=swap" rel="stylesheet">

    <link href="{{mix('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   @include("layouts._nav")
    {{-- Huecooo --}}
   
      @yield("content").
         

    @include('layouts._footer')


      <script src="{{mix('js/app.js')}}"></script>
     
 </body>
</html>
