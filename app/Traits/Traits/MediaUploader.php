<?php

namespace App\Traits\Traits;

trait MediaUploader
{
    function uploadImage($images, $location = 'others', $dirname = 'public')
    {
        if (is_array($images)) {
            // Multiple Images
            $uploadedUrl = [];

            if (count($images)  > 0) {
                foreach ($images as $singleImg) {
                    $imgUrl = $singleImg->store($location, $dirname);
                    $uploadedUrl[] = $imgUrl;
                }
            }

            return $uploadedUrl;
        } else {
            // Singular Image
            
            if ($images) {
                $imgUrl = $images->store($location, $dirname);

                return $imgUrl;
            }
            return null;
        }
    }
}
