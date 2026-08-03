<?php


function getImage($image){
    return $image ? asset('storage/' . $image) : asset('images/placeholder.webp');
}

function getCurrencyCode(){
    return config('currency.code', 'BDT');
}

function getCurrencySymbol(){
    return config('currency.symbol', '৳');
}

function formatPrice($amount){
    $code = getCurrencyCode();
    $symbol = getCurrencySymbol();
    $formatted = number_format($amount, 2);
    return config('currency.position') === 'before'
        ? $symbol . $formatted
        : $formatted . ' ' . $code;
}