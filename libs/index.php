<?php

include 'vrata.php';
include 'schody.php';
include 'brany.php';
include 'vesak.php';
include 'tezitko.php';
include 'motostul.php';
include 'popelniky.php';

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


    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">

    <link rel="shortcut icon" href="favicona.ico" />

    <link rel="stylesheet" href="css/own.css">


</head>

<header>
    <nav id="navbar"  onclick="roll()" class="navbar navbar-inverse maly-nav">
        <div class="container-fluid">
            <img src="obrazky/hamburger.png" class="hamburger-icon">
            <div class="menu-text">Menu</div>
            <div class="tel-text">tel: +420 602 735 512</div>
            <ul class="nav navbar-nav">


                 <li class="onas hidden list-item"><a href="#">O nás</a></li>


                <li class="kontakt hidden list-item">
                    <a href="#test-popup" class="open-popup-link">Kontakt</a>
                </li>

            </ul>
            <ul class="nav navbar-nav onas-text-parent">
              <div class="col-md-12 no-margin-padding">
                <div class="col-md-9">
                <li id="onas-text" class="onas-text hidden">Vratovou technikou se zabýváme již od roku 1993, kdy jsme patřili k průkopníkům v oboru na našem trhu.<br/>
                   Firma se od počátku zabývá:
                   výrobou: venkovních bran křídlových, posuvných na kolejnici, nesených  a teleskopických.
                   Vstupních branek atypických výplních plotů a souvisejících zámečnických prací.
                   Ocelových schodišť a to i točitých, zábradlí balkonů a teras.
                   A jinou zakázkovou výrobou z kovů.
                   Dodávkou a montáží:
                   Elektrických pohonů na dálkové ovládání
                   Garážových vrat: výklopných, sekčních, posuvných do boku a rolovacích.
                   Průmyslových vrat: sekčních, rolovacích, skládacích a protipožárních posuvných.
                   Vyrovnávacích můstků a těsnících límců nakládacích míst
                   Automatických vstupních dveří
                   Rolovacích mříží
                </li>
              </div>
                <div class="col-md-3">
                <li id="kontakt-text" class="kontakt-text">
                  <a href="#test-popup" class="open-popup-link kontakt-udaje">
                  Tomáš Jakl<br/>
                  Dveřní a vratové systémy<br/>
                  Bečovská 939<br/>
                  Praha 10 - Uhříněves<br/>
                  104 00<br/>
                  tojadesgin@seznam.cz<br/>
                </a>
                </li>
                </div>
              </div>
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
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAhXlcZwiHC5vPEy9_Nei0EFSyNmbOTVo8&q=Bečovská 939, Praha-Uhříněves"
                    allowfullscreen>
                </iframe>
            </div>
            <div  class="col-md-4">

                <h3>Kontakt</h3>
                <p><b>Adresa:</b><br>
                    Bečovská 939<br>
                    Praha 10 - Uhříněves<br>
                    Česká Republika, 104 00
                </p>

                <p><b>Telefon:</b> <br>
                    +420 602 735 512
                </p>

                <p><b>Email:</b> <br>
                    tojadesgin@seznam.cz
                </p>
            </div>
        </div>

    </div>

</header>

<body class="container">


<div class="no-margin-padding col-md-12">

    <div class="col-md-8 no-margin-padding">
        <div class="magnific-vrata velky-block no-margin-padding col-md-12">
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

        <div class="magnific-schody velky-block no-margin-padding col-md-12">
            <div class=" no-margin-padding col-md-12">
                <a href="obrazky/schody/<?php echo $schody_imgs[0] ?>" data-title="<?php echo $schody_text[0] ?>"
                   class="item">
                    <img src="obrazky/schody/<?php echo $schody_imgs[0] ?>" class="no-margin-padding vrata">
                </a>

                <?php
                for ($i = 1; $i < sizeof($schody_imgs); $i++) {
                    echo " <a href=\"obrazky/schody/$schody_imgs[$i]\" data-title=\"$schody_text[$i]\" class='item'></a>\n";
                }
                ?>

            </div>
            <a href="#" class="just-link">
                <div class="no-margin-padding col-md-12">
                    <div class="text-center no-margin-padding col-md-6">
                        <div>
                            <h2>Schody</h2>
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


        <div class="magnific-brany velky-block no-margin-padding col-md-12">
            <div class=" no-margin-padding col-md-12">
                <a href="obrazky/brany/<?php echo $brany_imgs[0] ?>" data-title="<?php echo $brany_text[0] ?>"
                   class="item">
                    <img src="obrazky/brany/<?php echo $brany_imgs[0] ?>" class="no-margin-padding vrata">
                </a>

                <?php
                for ($i = 1; $i < sizeof($brany_imgs); $i++) {
                    echo " <a href=\"obrazky/brany/$brany_imgs[$i]\" data-title=\"$brany_text[$i]\" class='item'></a>\n";
                }
                ?>

            </div>
            <a href="#" class="just-link">
                <div class="no-margin-padding col-md-12">
                    <div class="text-center no-margin-padding col-md-6">
                        <div>
                            <h2>Brány</h2>
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
    </div>


    <div class="col-md-4 no-right-padding no-margin-padding">

        <div class="magnific-motostul no-right-padding col-md-12">
            <div class="maly-block no-margin-padding col-md-12">
                <div class="no-margin-padding col-md-12">
                    <a href="obrazky/motostul/<?php echo $motostul_imgs[0] ?>"
                       data-title="<?php echo $motostul_text[0] ?>"
                       class="item">
                        <img src="obrazky/motostul/<?php echo $motostul_imgs[0] ?>" class="no-margin-padding stul">
                    </a>

                    <?php
                    for ($i = 1; $i < sizeof($motostul_imgs); $i++) {
                        echo " <a href=\"obrazky/motostul/$motostul_imgs[$i]\" data-title=\"$motostul_text[$i]\" class='item'></a>";
                    }
                    ?>
                </div>
            <a href="#" class="just-link">
                <div class="no-margin-padding col-md-12">
                    <div class="text-center col-md-12">
                        <div>
                            <h2>Motostoly</h2>
                        </div>
                    </div>

                    <div class="text-justify col-md-12">
                        <p class="popis">Každý stolek je naprostý originál, ručně vyrobený z bloku spalovacího motoru. Stoly jsou nalakovány kvalitním práškovým lakem s vysokou odolností proti poškození. Vrchní deska je z lepeného bezpečnostního skla o tloušťce 10mm. Osvětlení úspornými LED diodami napájenými bateriemi.</p>
                    </div>
                </div>
              </a>
            </div>
        </div>

        <div class="magnific-popelniky no-right-padding col-md-12">
            <div class="maly-block no-margin-padding col-md-12">
                <div class="no-margin-padding col-md-12">
                    <a href="obrazky/popelniky/<?php echo $popelniky_imgs[0] ?>"
                       data-title="<?php echo $popelniky_text[0] ?>"
                       class="item">
                        <img src="obrazky/popelniky/<?php echo $popelniky_imgs[0] ?>" class="no-margin-padding stul">
                    </a>

                    <?php
                    for ($i = 1; $i < sizeof($popelniky_imgs); $i++) {
                        echo " <a href=\"obrazky/popelniky/$popelniky_imgs[$i]\" data-title=\"$popelniky_text[$i]\" class='item'></a>";
                    }
                    ?>
                </div>
            <a href="#" class="just-link">
                <div class="no-margin-padding col-md-12">
                    <div class="text-center col-md-12">
                        <div>
                            <h2>Popelníky</h2>
                        </div>
                    </div>

                    <div class="text-justify col-md-12">
                        <p class="popis">Každý popelník je naprostý originál, ručně vyrobený z turbodmychadla spalovacího motoru. Popelníky jsou nalakovány kvalitním práškovým lakem s vysokou odolností proti poškození.</p>
                    </div>
                </div>
              </a>
            </div>
        </div>

        <div class="magnific-tezitko no-right-padding col-md-12">
            <div class="maly-block no-margin-padding col-md-12">
                <div class="no-margin-padding col-md-12">
                    <a href="obrazky/tezitko/<?php echo $tezitko_imgs[0] ?>"
                       data-title="<?php echo $tezitko_text[0] ?>"
                       class="item">
                        <img src="obrazky/tezitko/<?php echo $tezitko_imgs[0] ?>" class="no-margin-padding stul">
                    </a>

                    <?php
                    for ($i = 1; $i < sizeof($tezitko_imgs); $i++) {
                        echo " <a href=\"obrazky/tezitko/$tezitko_imgs[$i]\" data-title=\"$tezitko_text[$i]\" class='item'></a>";
                    }
                    ?>
                </div>
            <a href="#" class="just-link">
                <div class="no-margin-padding col-md-12">
                    <div class="text-center col-md-12">
                        <div>
                            <h2>Designové doplňky</h2>
                        </div>
                    </div>

                    <div class="text-justify col-md-12">
                        <p class="popis">Každý výrobek je naprostý originál, ručně vyrobený ze součástek spalovacího motoru. Doplňky jsou

nalakovány kvalitním práškovým lakem s vysokou odolností proti poškození. Leštěné díly jsou z nerez

oceli, nebo pochromovány.</p>
                    </div>
                </div>
              </a>
            </div>
        </div>

        <div class="magnific-vesak no-right-padding col-md-12">
            <div class="maly-block no-margin-padding col-md-12">
                <div class="no-margin-padding col-md-12">
                    <a href="obrazky/vesak/<?php echo $vesak_imgs[0] ?>"
                       data-title="<?php echo $vesak_text[0] ?>"
                       class="item">
                        <img src="obrazky/vesak/<?php echo $vesak_imgs[0] ?>" class="no-margin-padding stul">
                    </a>

                    <?php
                    for ($i = 1; $i < sizeof($vesak_imgs); $i++) {
                        echo " <a href=\"obrazky/vesak/$vesak_imgs[$i]\" data-title=\"$vesak_text[$i]\" class='item'></a>";
                    }
                    ?>
                </div>
            <a href="#" class="just-link">
                <div class="no-margin-padding col-md-12">
                    <div class="text-center col-md-12">
                        <div>
                            <h2>Věšáky</h2>
                        </div>
                    </div>

                    <div class="text-justify col-md-12">
                        <p class="popis">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                    </div>
                </div>
              </a>
            </div>
        </div>
    </div>

</div>

t
<script>
    $(document).ready(function () {
        $("#onas-text").hide().removeClass('hidden');
        $("#kontakt-text").hide().removeClass('hidden');
    });

    function roll() {
        if ($('#navbar').hasClass('maly-nav')) {
            $('#navbar').addClass('velky-nav').removeClass('maly-nav');
            $('.onas-text').removeClass('hidden');
            $('.kontakt-text').removeClass('hidden');
            $('#onas-text').slideDown(300);
            $('#kontakt-text').slideDown(300);
        } else {
            $('#navbar').addClass('maly-nav').removeClass('velky-nav');
            $('#onas-text').slideUp(200);
            $('#kontakt-text').slideUp(200);
        }

        if ($('.list-item').hasClass('hidden')) {
            $('.list-item').removeClass('hidden');
        } else {
            $('.list-item').addClass('hidden');
        }
    }

    $(document).click(function (event) {
        if (!$(event.target).closest('#navbar').length) {
            if ($('#navbar').hasClass('velky-nav')) {
                $('#navbar').addClass('maly-nav').removeClass('velky-nav');
                $('.list-item').addClass('hidden');
                $('.onas-text').addClass('hidden');
                $('.kontakt-text').addClass('hidden');
            }
        }

    });

    $(document).ready(function () {
        $("#onas-text").hide().removeClass('hidden');
        $("#kontakt-text").hide().removeClass('hidden');
    });


    $('.open-popup-link').magnificPopup({
        type: 'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });


</script>


<script>

    $('.magnific-vrata').each(function () {
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
                enabled: true
            },
            type: 'image',
            preload: [1, 1]
        });

        $imageLinks.magnificPopup({
            mainClass: 'mfp-fade',
            items: items,
            gallery: {
                enabled: true
            },
            type: 'image',
            preload: [1, 1]
        });
    });


    $('.magnific-brany').each(function () {
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
                enabled: true
            },
            type: 'image',
            preload: [1, 1]
        });

        $imageLinks.magnificPopup({
            mainClass: 'mfp-fade',
            items: items,
            gallery: {
                enabled: true
            },
            type: 'image',
            preload: [1, 1]
        });
    });


    $('.magnific-schody').each(function () {
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
                enabled: true
            },
            type: 'image',
            preload: [1, 1]
        });

        $imageLinks.magnificPopup({
            mainClass: 'mfp-fade',
            items: items,
            gallery: {
                enabled: true
            },
            type: 'image',
            preload: [1, 1]
        });
    });


    $('.magnific-vesak').each(function () {
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
                enabled: true
            },
            type: 'image',
            preload: [1, 1]
        });

        $imageLinks.magnificPopup({
            mainClass: 'mfp-fade',
            items: items,
            gallery: {
                enabled: true
            },
            type: 'image',
            preload: [1, 1]
        });
    });


    $('.magnific-tezitko').each(function () {
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
                enabled: true
            },
            type: 'image',
            preload: [1, 1]
        });

        $imageLinks.magnificPopup({
            mainClass: 'mfp-fade',
            items: items,
            gallery: {
                enabled: true
            },
            type: 'image',
            preload: [1, 1]
        });
    });


    $('.magnific-motostul').each(function () {
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
                enabled: true
            },
            type: 'image',
            preload: [1, 1]
        });

        $imageLinks.magnificPopup({
            mainClass: 'mfp-fade',
            items: items,
            gallery: {
                enabled: true
            },
            type: 'image',
            preload: [1, 1]
        });
    });


    $('.magnific-popelniky').each(function () {
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
                enabled: true
            },
            type: 'image',
            preload: [1, 1]
        });

        $imageLinks.magnificPopup({
            mainClass: 'mfp-fade',
            items: items,
            gallery: {
                enabled: true
            },
            type: 'image',
            preload: [1, 1]
        });
    });

</script>


</body>
</html>
