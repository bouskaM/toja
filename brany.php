<?php

//
$brany_all = array_diff(scandir('obrazky/brany/'), array('..', '.', '.DS_Store'));
$brany_imgs = array();
$brany_text = array();

foreach ($brany_all as $v) {
    $filename = $v;
    $name = pathinfo($filename, PATHINFO_FILENAME);
    $ext = pathinfo($filename, PATHINFO_EXTENSION);


    if ($ext === 'jpg' || $ext === 'png') {
        array_push($brany_imgs, $v);
    }

    if ($ext === 'txt') {
        $myfile = fopen('obrazky/brany/' . $v, "r") or die("Unable to open file!");
        array_push($brany_text, fread($myfile, filesize("obrazky/brany/" . $v)));
        fclose($myfile);
    }
}

?>

