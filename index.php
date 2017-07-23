<?php
$vrata_all = array_diff(scandir('obrazky/vrata/'), array('..', '.', '.DS_Store'));
$vrata_imgs = array();
$vrata_text = array();

foreach ($vrata_all as $v) {
    $filename = $v;
    $name = pathinfo($filename, PATHINFO_FILENAME);
    $ext = pathinfo($filename, PATHINFO_EXTENSION);


    if ($ext === 'jpg' || $ext === 'png') {
        array_push($vrata_imgs, $v);
    }

    if ($ext === 'txt') {
        $myfile = fopen('obrazky/vrata/' . $v, "r") or die("Unable to open file!");
        array_push($vrata_text, fread($myfile, filesize("obrazky/vrata/" . $v)));
        fclose($myfile);
    }
}

$stoly = array_diff(scandir('obrazky/stoly/'), array('..', '.'));


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toja Design</title>


    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="libs/magnific-popup.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Magnific Popup core JS file -->
    <script src="libs/jquery.magnific-popup.js"></script>


    <link rel="stylesheet" href="css/own.css">
</head>

<header>
    <nav id="navbar" class="navbar navbar-inverse maly-nav">
        <div class="container-fluid">
            <img src="obrazky/hamburger.png" onclick="roll()" class="hamburger-icon">
            <ul class="nav navbar-nav">
                <li class="toja hidden bla"><a href="#">Toja Design</a></li>
                <li class="onas hidden bla"><a href="#">O nás</a></li>
                <li class="kontakt hidden bla">
                    <a href="#test-popup" class="open-popup-link">Kontakt</a>
                </li>
            </ul>
            <ul class="nav navbar-nav onas-text-parent">
                <li id="onas-text" class="onas-text hidden">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Curabitur sagittis hendrerit ante. Suspendisse sagittis ultrices augue. Etiam quis quam. Nulla
                    accumsan, elit sit amet varius semper, nulla mauris mollis quam, tempor suscipit diam nulla vel leo.
                    Vivamus luctus egestas leo. Aliquam erat volutpat.
                </li>
            </ul>
        </div>
    </nav>

    <div id="test-popup" class="white-popup mfp-hide">
        <div class="row">
            <div class="col-md-8">
                <iframe
                    width="650"
                    height="450"
                    frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAhXlcZwiHC5vPEy9_Nei0EFSyNmbOTVo8&q=Šetelíkova, Praha-Kolovraty" allowfullscreen>
                </iframe>
            </div>
            <div class="col-md-4">
                <h3>Kontakt</h3>
                <p><b>Adresa:</b><br>
                    Šetelíkova 111/17, Praha 10 <br>
                    Česká Republika, 110 00
                </p>

                <p><b>Telefon:</b> <br>
                    +420 777 888 000
                </p>

                <p><b>Email:</b> <br>
                    pepazdepa@gmail.com
                </p>

            </div>
        </div>

    </div>

</header>

<body class="container">


<div class="no-margin-padding col-md-12">

    <div class="col-md-8 no-margin-padding">
        <div class="magnific-all velky-block no-margin-padding col-md-12">

            <div class=" no-margin-padding col-md-12">
                <a href="obrazky/vrata/<?php echo $vrata_imgs[0] ?>" data-title="<?php echo $vrata_text[0] ?>"
                   class="item">
                    <img src="obrazky/vrata/<?php echo $vrata_imgs[0] ?>" class="no-margin-padding vrata">
                </a>
                <?php

                for ($i = 1; $i < sizeof($vrata_imgs); $i++) {

                    echo " <a href=\"obrazky/vrata/$vrata_imgs[$i]\" data-title=\"$vrata_text[$i]\" class='item'></a>\n";

                }

                ?>

            </div>


            <a href="#" class="just-link">
                <div class="no-margin-padding col-md-12">
                    <div class="text-center no-margin-padding col-md-6">
                        <div>
                            <h2>Vrata</h2>
                        </div>
                    </div>

                    <div class="text-justify no-margin-padding col-md-6">
                        <p class="popis">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sagittis
                            hendrerit ante. Suspendisse sagittis ultrices augue. Etiam quis quam. Nulla accumsan, elit
                            sit
                            amet varius semper, nulla mauris mollis quam, tempor suscipit diam nulla vel leo. Vivamus
                            luctus
                            egestas leo. Aliquam erat volutpat. Suspendisse sagittis ultrices augue. Cum sociis natoque
                            penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Integer
                            malesuada.</p>
                    </div>
                </div>
            </a>
        </div>

        <div data-toggle="modal" data-target="#myModal" class="velky-block no-margin-padding col-md-12 druhy-velky">
            <div class="no-margin-padding col-md-12">
                <img class="no-margin-padding vrata" src="obrazky/vrata/aaaa_vrata.png" alt="Vrata">
            </div>

            <div class="no-margin-padding col-md-12">
                <div class="text-center no-margin-padding col-md-6">
                    <div>
                        <h2>Vrata</h2>
                    </div>
                </div>

                <div class="text-justify no-margin-padding col-md-6">
                    <p class="popis">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sagittis
                        hendrerit ante. Suspendisse sagittis ultrices augue. Etiam quis quam. Nulla accumsan, elit sit
                        amet varius semper, nulla mauris mollis quam, tempor suscipit diam nulla vel leo. Vivamus luctus
                        egestas leo. Aliquam erat volutpat. Suspendisse sagittis ultrices augue. Cum sociis natoque
                        penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Integer
                        malesuada.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-4 no-right-padding no-margin-padding">

        <div class="no-right-padding col-md-12">

            <div class="maly-block no-margin-padding col-md-12">


                <div class="gallery no-margin-padding col-md-12">
                    <a href="obrazky/stoly/stul.png">
                        <img src="obrazky/stoly/stul.png" class="no-margin-padding stul">
                    </a>
                    <?php

                    for ($i = 2; $i <= sizeof($stoly); $i++) {
                        if (substr($stoly[$i], 0, 1) !== ".") {
                            echo " <a href=\"obrazky/stoly/$stoly[$i]\"></a>\n";
                        }
                    }

                    ?>

                </div>


                <div class="no-margin-padding col-md-12">
                    <div class="text-center col-md-12">
                        <div>
                            <h2>Motostůl</h2>
                        </div>
                    </div>

                    <div class="text-justify col-md-12">
                        <p class="popis">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="padding-top no-right-padding col-md-12">

            <div class="maly-block no-margin-padding col-md-12">
                <div class="no-margin-padding col-md-12">
                    <img class="stul" src="obrazky/stoly/stul.png" alt="Motostul">
                </div>

                <div class="no-margin-padding col-md-12">
                    <div class="text-center col-md-12">
                        <div>
                            <h2>Motostůl</h2>
                        </div>
                    </div>

                    <div class="text-justify col-md-12">
                        <p class="popis">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<script>
    $(document).ready(function () {
        $("#onas-text").hide().removeClass('hidden');


    });

    function roll() {
        if ($('#navbar').hasClass('maly-nav')) {
            $('#navbar').addClass('velky-nav').removeClass('maly-nav');
            $('.onas-text').removeClass('hidden');
            $('#onas-text').slideDown(300);
        } else {
            $('#navbar').addClass('maly-nav').removeClass('velky-nav');
            $('#onas-text').slideUp(200);
        }

        if ($('.bla').hasClass('hidden')) {
            $('.bla').removeClass('hidden');
        } else {
            $('.bla').addClass('hidden');
        }
    }

</script>
<script>

    $(document).click(function (event) {
        if (!$(event.target).closest('#navbar').length) {
            if ($('#navbar').hasClass('velky-nav')) {
                $('#navbar').addClass('maly-nav').removeClass('velky-nav');
                $('.bla').addClass('hidden');
                $('.onas-text').addClass('hidden');
            }
        }

    });

    $(document).ready(function () {
        $("#onas-text").hide().removeClass('hidden');
    });


    $('.magnific-all').each(function () {
        var $container = $(this);
        var $imageLinks = $container.find('.item');

        var items = [];
        $imageLinks.each(function () {
            var $item = $(this);
            var type = 'image';
            var magItem = {
                src: $item.attr('href'),
                type: type
            };
            magItem.title = $item.data('title');
            items.push(magItem);
        });

        var $link = $container.find('.just-link');

        $link.magnificPopup({
            mainClass: 'mfp-fade',
            items: items,
            gallery: {
                enabled: true,
            },
            type: 'image',
            preload: [1, 1]
        });

        $imageLinks.magnificPopup({
            mainClass: 'mfp-fade',
            items: items,
            gallery: {
                enabled: true,
            },
            type: 'image',
            preload: [1, 1]
        });
    });

    $('.open-popup-link').magnificPopup({
        type: 'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });


</script>


</body>
</html>
