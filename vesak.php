<?php

//
$vesak_all = array_diff(scandir('obrazky/vesak/'), array('..', '.', '.DS_Store'));
$vesak_imgs = array();
$vesak_text = array();

foreach ($vesak_all as $v) {
    $filename = $v;
    $name = pathinfo($filename, PATHINFO_FILENAME);
    $ext = pathinfo($filename, PATHINFO_EXTENSION);


    if ($ext === 'jpg' || $ext === 'png') {
        array_push($vesak_imgs, $v);
    }

    if ($ext === 'txt') {
        $myfile = fopen('obrazky/vesak/' . $v, "r") or die("Unable to open file!");
        array_push($vesak_text, fread($myfile, filesize("obrazky/vesak/" . $v)));
        fclose($myfile);
    }
}

?>

