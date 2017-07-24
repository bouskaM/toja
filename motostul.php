<?php

//
$motostul_all = array_diff(scandir('obrazky/motostul/'), array('..', '.', '.DS_Store'));
$motostul_imgs = array();
$motostul_text = array();

foreach ($motostul_all as $v) {
    $filename = $v;
    $name = pathinfo($filename, PATHINFO_FILENAME);
    $ext = pathinfo($filename, PATHINFO_EXTENSION);


    if ($ext === 'jpg' || $ext === 'png') {
        array_push($motostul_imgs, $v);
    }

    if ($ext === 'txt') {
        $myfile = fopen('obrazky/motostul/' . $v, "r") or die("Unable to open file!");
        array_push($motostul_text, fread($myfile, filesize("obrazky/motostul/" . $v)));
        fclose($myfile);
    }
}

?>

