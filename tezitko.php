<?php

//
$tezitko_all = array_diff(scandir('obrazky/tezitko/'), array('..', '.', '.DS_Store'));
$tezitko_imgs = array();
$tezitko_text = array();

foreach ($tezitko_all as $v) {
    $filename = $v;
    $name = pathinfo($filename, PATHINFO_FILENAME);
    $ext = pathinfo($filename, PATHINFO_EXTENSION);


    if ($ext === 'jpg' || $ext === 'png') {
        array_push($tezitko_imgs, $v);
    }

    if ($ext === 'txt') {
        $myfile = fopen('obrazky/tezitko/' . $v, "r") or die("Unable to open file!");
        array_push($tezitko_text, fread($myfile, filesize("obrazky/tezitko/" . $v)));
        fclose($myfile);
    }
}

?>

