<?php

//
$popelniky_all = array_diff(scandir('obrazky/popelniky/'), array('..', '.', '.DS_Store'));
$popelniky_imgs = array();
$popelniky_text = array();

foreach ($popelniky_all as $v) {
    $filename = $v;
    $name = pathinfo($filename, PATHINFO_FILENAME);
    $ext = pathinfo($filename, PATHINFO_EXTENSION);


    if ($ext === 'jpg' || $ext === 'png' || $ext === 'JPG' || $ext === 'PNG') {
        array_push($popelniky_imgs, $v);
    }

    if ($ext === 'txt') {
        $myfile = fopen('obrazky/popelniky/' . $v, "r") or die("Unable to open file!");
        array_push($popelniky_text, fread($myfile, filesize("obrazky/popelniky/" . $v)));
        fclose($myfile);
    }
}

?>

