<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait Slugable
{
    function uniqueSlug($title, $model){
        $slug = Str::slug($title);
        $count = $model::whereLike('slug', "%{$slug}%")->count(); 
        if ($count > 0) {
            $slug .= '-' . ($count + 1);
        }
        return $slug;
    }
}
