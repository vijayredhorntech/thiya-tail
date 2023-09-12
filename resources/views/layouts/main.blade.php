<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/4e2c7ef5ef.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
    <title>Thiya</title>

</head>
<body>





@include('layouts.header')
@yield('content')
@include('layouts.footer')


<script>


//top open menu in mobile screen
    function openMenu(){
        // Toggle the 'h-0' class on the mobileMenu element
        mobileMenu.classList.toggle('h-0');
    }





    // typewriter effect
            var i = 0;
            var txt = "Thiya-The Himalayan Farm delivers ethically sourced, delicious,  and healthy Himalayan superfoods for a better you.";
            var speed = 50;

            // Load function on page load
            window.onload = function() {
                typeWriter();
            };

            function typeWriter() {
                if (i < txt.length) {
                    document.getElementById("typewriter-text").insertAdjacentHTML('beforeend', txt.charAt(i));
                    i++;
                    setTimeout(typeWriter, speed);
                }
            }
</script>
</body>
</html>
