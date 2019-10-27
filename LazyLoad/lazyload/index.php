<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lazyload</title>
</head>
<body>
    <div class="container">
        <img alt="A lazy image" class="lazy" 
        data-src="img/Comp1.gif" 
        data-srcset="img/Comp1_400.gif 400w, Comp1_800.gif 800w" 
        data-sizes="100w">
        <img alt="A lazy image" class="lazy" 
        data-src="img/Comp1.gif"  
        data-sizes="100w">
        <img alt="A lazy image" class="lazy" 
        data-src="img/Comp1.gif" 
        data-srcset="img/Comp1_400.gif 400w, Comp1_800.gif 800w" 
        data-sizes="100w">
        <img alt="A lazy image" class="lazy" 
        data-src="img/Comp1.gif" 
        data-srcset="img/Comp1_400.gif 400w, Comp1_800.gif 800w" 
        data-sizes="100w">
        <img alt="A lazy image" class="lazy" 
        data-src="img/Comp1.gif" 
        data-srcset="img/Comp1_400.gif 400w, Comp1_800.gif 800w" 
        data-sizes="100w">
        <img alt="A lazy image" class="lazy" 
        data-src="img/Comp1.gif" 
        data-srcset="img/Comp1_400.gif 400w, Comp1_800.gif 800w" 
        data-sizes="100w">
        <img alt="A lazy image" class="lazy" 
        data-src="img/Comp1.gif" 
        data-srcset="img/Comp1_400.gif 400w, Comp1_800.gif 800w" 
        data-sizes="100w">


    </div>
    <script>
    var lazyLoadInstance = new LazyLoad({
        elements_selector: ".lazy"
        // ... more custom settings?
    });
    
    </script>

<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.2.0/dist/lazyload.min.js"></script>
</body>
</html>