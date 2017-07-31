<?php

$schody_all = array_diff(scandir('obrazky/schody/'), array('..', '.', '.DS_Store'));
$schody_imgs = array();
$schody_text = array();

foreach ($schody_all as $v) {
    $filename = $v;
    $name = pathinfo($filename, PATHINFO_FILENAME);
    $ext = pathinfo($filename, PATHINFO_EXTENSION);


    if ($ext === 'jpg' || $ext === 'png') {
        array_push($schody_imgs, $v);
    }

    if ($ext === 'txt') {
        $myfile = fopen('obrazky/schody/' . $v, "r") or die("Unable to open file!");
        array_push($schody_text, fread($myfile, filesize("obrazky/schody/" . $v)));
        fclose($myfile);
    }
}

?>

