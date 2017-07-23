<!DOCTYPE html>
<html>
<body>

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


print_r($vrata_imgs);



?>

</body>
</html>