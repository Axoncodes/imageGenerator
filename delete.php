<?php

function deleteFile($address, $filename) {
    $file = $address.'/'.$filename.'-large.webp';
    if (file_exists($file)) unlink($file);

    $file = $address.'/'.$filename.'-large.jpg';
    if (file_exists($file)) unlink($file);

    $file = $address.'/'.$filename.'-large.png';
    if (file_exists($file)) unlink($file);

    $file = $address.'/'.$filename.'-medium.webp';
    if (file_exists($file)) unlink($file);

    $file = $address.'/'.$filename.'-medium.jpg';
    if (file_exists($file)) unlink($file);

    $file = $address.'/'.$filename.'-medium.png';
    if (file_exists($file)) unlink($file);

    $file = $address.'/'.$filename.'-small.webp';
    if (file_exists($file)) unlink($file);

    $file = $address.'/'.$filename.'-small.jpg';
    if (file_exists($file)) unlink($file);

    $file = $address.'/'.$filename.'-small.png';
    if (file_exists($file)) unlink($file);

    $file = $address.'/'.$filename.'-thumbnail.webp';
    if (file_exists($file)) unlink($file);

    $file = $address.'/'.$filename.'-thumbnail.jpg';
    if (file_exists($file)) unlink($file);

    $file = $address.'/'.$filename.'-thumbnail.png';
    if (file_exists($file)) unlink($file);

    $file = $address.'/'.$filename.'.webp';
    if (file_exists($file)) unlink($file);

    $file = $address.'/'.$filename.'.jpg';
    if (file_exists($file)) unlink($file);

    $file = $address.'/'.$filename.'.png';
    if (file_exists($file)) unlink($file);
}

?>