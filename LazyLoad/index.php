<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script type = "text/javascript" src = "js/echo.min.js"></script>
<link rel="stylesheet" href="css/style.css" type = "text/css">
    <title>Lazy Load</title>

<script type="text/javascript">
echo.init({
    callback: function (element, op) {
        console.log(element, 'has been', op + 'ed')
    }
});

// echo.render(); is also available for non-scroll callbacks
</script>
</head>
<body>
    <div class="image-gallery">
    
       <div class="section">

       <div class="image-back">
       <img src = "img/loading.gif" data-echo="img/lazy1.jpg" alt="" />
       </div>

       <div class="image-back">
       <img src = "img/loading.gif" data-echo="img/lazy2.jpg" alt="" />
       </div>
       <div class="image-back">
       <img src = "img/loading.gif" data-echo="img/lazy3.jpg" alt="" />
       </div>
       <div class="image-back">
       <img src = "img/loading.gif" data-echo="img/lazy4.jpg" alt="" />
       </div>
       <div class="image-back">
       <img src = "img/loading.gif" data-echo="img/lazy5.jpg" alt="" />
       </div>
       <div class="image-back">
       <img src = "img/loading.gif" data-echo="img/lazy6.jpg" alt="" />
       </div>
       <div class="image-back">
       <img src = "img/loading.gif" data-echo="img/lazy7.jpg" alt="" />
       </div>
       <div class="image-back">
       <img src = "img/loading.gif" data-echo="img/lazy1.jpg" alt="" />
       </div>

       <div class="image-back">
       <img src = "img/loading.gif" data-echo="img/lazy2.jpg" alt="" />
       </div>
       <div class="image-back">
       <img src = "img/loading.gif" data-echo="img/lazy3.jpg" alt="" />
       </div>
       <div class="image-back">
       <img src = "img/loading.gif" data-echo="img/lazy4.jpg" alt="" />
       </div>
       <div class="image-back">
       <img src = "img/loading.gif" data-echo="img/lazy5.jpg" alt="" />
       </div>
       <div class="image-back">
       <img src = "img/loading.gif" data-echo="img/lazy6.jpg" alt="" />
       </div>
       <div class="image-back">
       <img src = "img/loading.gif" data-echo="img/lazy7.jpg" alt="" />
       </div>

       </div>
    
    </div>
</body>
</html>