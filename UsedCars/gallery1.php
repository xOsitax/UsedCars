


<?php
include "header.php";

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>filterable responsive lightbox gallery tutorial</title>

    <!-- magnific-popup css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="styles.css">

</head>
<body>


<div class="gallery">

    <ul class="controls">
        <li class="buttons active" data-filter="all">all</li>
        <li class="buttons" data-filter="toyota">Toyota</li>
        <li class="buttons" data-filter="Honda">Honda</li>
        <li class="buttons" data-filter="Dodge">Dodge</li>
        <li class="buttons" data-filter="Ford">Ford</li>
        <li class="buttons" data-filter="Nissan">Nissan</li>
    </ul>

    <div class="image-container">

        <a href="images/toyota1.jpg" class="image toyota">
            <img src="images/toyota1.jpg" alt="">
        </a>
        <a href="images/toyota2.jpg" class="image toyota">
            <img src="images/toyota2.jpg" alt="">
        </a>
        <a href="images/toyota3.jpg" class="image toyota">
            <img src="images/toyota3.jpg" alt="">
        </a>

        <a href="images/honda1.jpg" class="image Honda">
            <img src="images/honda1.jpg" alt="">
        </a>
        <a href="images/honda2.jpg" class="image Honda">
            <img src="images/honda2.jpg" alt="">
        </a>

        <a href="images/dodge1.jpg" class="image Dodge">
            <img src="images/dodge1.jpg" alt="">
        </a>
        <a href="images/dodge2.jpg" class="image Dodge">
            <img src="images/dodge2.jpg" alt="">
        </a>
        <a href="images/dodge3.jpg" class="image Dodge">
            <img src="images/dodge3.jpg" alt="">
        </a>
        <a href="images/dodge4.jpg" class="image Dodge">
            <img src="images/dodge4.jpg" alt="">
        </a>
        <a href="images/dodge5.jpg" class="image Dodge">
            <img src="images/dodge5.jpg" alt="">
        </a>

        <a href="images/ford1.jpg" class="image Ford">
            <img src="images/ford1.jpg" alt="">
        </a>
        <a href="images/ford2.jpg" class="image Ford">
            <img src="images/ford2.jpg" alt="">
        </a>
        <a href="images/ford3.jpg" class="image Ford">
            <img src="images/ford3.jpg" alt="">
        </a>

        <a href="images/nissan1.jpg" class="image Nissan">
            <img src="images/nissan1.jpg" alt="">
        </a>
        <a href="images/nissan2.jpg" class="image Nissan">
            <img src="images/nissan2.jpg" alt="">
        </a>
        <a href="images/nissan3.jpg" class="image Nissan">
            <img src="images/nissan3.jpg" alt="">
        </a>
        <a href="images/nissan4.jpg" class="image Nissan">
            <img src="images/nissan4.jpg" alt="">
        </a>

    </div>

</div>


<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- magnific popup js cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<script>

$(document).ready(function(){

    $('.buttons').click(function(){

        $(this).addClass('active').siblings().removeClass('active');

        var filter = $(this).attr('data-filter')

        if(filter == 'all'){
            $('.image').show(400);
        }else{
            $('.image').not('.'+filter).hide(200);
            $('.image').filter('.'+filter).show(400);
        }

    });

    $('.gallery').magnificPopup({

        delegate:'a',
        type:'image',
        gallery:{
            enabled:true
        }

    });

});

</script>
    
</body>
</html>

<?php
include "footer.php";
?>