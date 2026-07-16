<?php


function getImage($image){
    return $image ? asset('storage/' . $image) : asset('images/placeholder.webp');
}