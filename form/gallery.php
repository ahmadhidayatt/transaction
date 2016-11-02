<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../lib/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../lib/css/bootstrap.css">
        <link rel="stylesheet" href="../lib/css/bootstrap.min.css">
        <link rel="stylesheet" href="../main/js/gallery.js">
        <link rel="stylesheet" href="../main/css/gallery.css">
        <link rel="stylesheet" href="../main/css/accordion.css">
        <script type="text/javascript" src="../main/js/accordion.js"></script>
        <script type="text/javascript" src="../main/js/accordion2.js"></script>
        <script>$(function () {
                $('.pop').on('click', function () {
                    $('.imagepreview').attr('src', $(this).find('img').attr('src'));
                    $('#imagemodal').modal('show');
                });
            });</script>
    </head>
    <body>
        <h1>3d images gallery</h1>
        <div class="container">
            <div id="carousel">
                <figure><img src="http://lorempixel.com/186/116/nature/1" alt=""></figure>
                <figure><img src="http://lorempixel.com/186/116/nature/2" alt=""></figure>
                <figure><img src="http://lorempixel.com/186/116/nature/3" alt=""></figure>
                <figure><img src="http://lorempixel.com/186/116/nature/4" alt=""></figure>
                <figure><img src="http://lorempixel.com/186/116/nature/5" alt=""></figure>
                <figure><img src="http://lorempixel.com/186/116/nature/6" alt=""></figure>
                <figure><img src="http://lorempixel.com/186/116/nature/7" alt=""></figure>
                <figure><img src="http://lorempixel.com/186/116/nature/8" alt=""></figure>
                <figure><img src="http://lorempixel.com/186/116/people/9" alt=""></figure>
            </div>
        </div>
        <hr>
        <a href="#" class="pop">
            <img src="http://patyshibuya.com.br/wp-content/uploads/2014/04/04.jpg" style="width: 400px; height: 264px;">
        </a>

        <a href="#" class="pop">
            <img src="http://lorempixel.com/186/116/nature/1" style="width: 400px; height: 264px;">
        </a>
         <a href="#" class="pop">
            <img src="http://upload.wikimedia.org/wikipedia/commons/2/22/Turkish_Van_Cat.jpg" style="width: 400px; height: 264px;">
        </a>
         <a href="#" class="pop">
           <img src="http://lorempixel.com/186/116/nature/3"  style="width: 400px; height: 264px;">
        </a>
         <a href="#" class="pop">
           <img src="http://lorempixel.com/186/116/nature/8"style="width: 400px; height: 264px;">
        </a>
        <a href="#" class="pop">
           <img src="http://lorempixel.com/186/116/people/9" style="width: 400px; height: 264px;">
        </a>

        <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">              
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <img src="" class="imagepreview" style="width: 100%;" >
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
