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
<body>

<?php



?>

<h2>Popup with form</h2>
<!-- link that opens popup -->
<a class="popup-with-form" href="#test-form">Open form</a>

<!-- form itself -->
<form id="test-form" class="white-popup-block mfp-hide">
    <h1>Form</h1>
    <fieldset style="border:0;">
        <p>Lightbox has an option to automatically focus on the first input. It's strongly recommended to use <code>inline</code> popup type for lightboxes with form instead of <code>ajax</code> (to keep entered data if the user accidentally refreshed the page).</p>
        <ol>
            <li>
                <label for="name">Name</label>
                <input id="name" name="name" type="text" placeholder="Name" required>
            </li>
            <li>
                <label for="email">Email</label>
                <input id="email" name="email" type="email" placeholder="example@domain.com" required>
            </li>
            <li>
                <label for="phone">Phone</label>
                <input id="phone" name="phone" type="tel" placeholder="Eg. +447500000000" required>
            </li>
            <li>
                <label for="textarea">Textarea</label>
                <br>
                <textarea id="textarea"></textarea>
            </li>
        </ol>
    </fieldset>
</form>
<script>
    $(document).ready(function() {
        $('.popup-with-form').magnificPopup({
            type: 'inline',
            preloader: false,
            focus: '#name',

            // When elemened is focused, some mobile browsers in some cases zoom in
            // It looks not nice, so we disable it:
            callbacks: {
                beforeOpen: function() {
                    if($(window).width() < 700) {
                        this.st.focus = false;
                    } else {
                        this.st.focus = '#name';
                    }
                }
            }
        });
    });
</script>

</body>
</html>