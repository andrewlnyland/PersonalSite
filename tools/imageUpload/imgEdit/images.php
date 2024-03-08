<!doctype html>
<html>
    <head>
        <title>Edit images in portfolio - Original Frameworks</title>
    </head>
    <link rel="stylesheet" type="text/css" href="/styles.css">
    <style type="text/css">
        body {margin: 0;}
        .list-elem > div a {display: inline-block;}
        img, .list-elem > div, .list-elem > div a {max-height: 100%; height: 100%;}
        .list-elem {
            height: 200px;
        }
        .first {width: 50%; display: inline-block; text-align: center;}
    </style>
    <body>
        <div class="page-wrap page">
        <?php
            $imgs = scandir("images/gallery/Small");
            for ($i=2; $i<count($imgs); $i++) : ?>
            <div class="list-elem">
                <div class="first">
                    <a href="/images/gallery/Large/<?php echo $imgs[$i]; ?>" target="_blank">
                        <img src="/images/gallery/Small/<?php echo $imgs[$i]; ?>"/>
                    </a>
                </div>
                <div class="second">

                </div>
                <div class="third">

                </div>
            </div>
        <?php endfor; ?>
        </div>
    </body>
</html>
