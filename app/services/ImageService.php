<?php

namespace App\services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\User;

class ImageService extends Model
{
    public function storeUserImage(User $user, UploadedFile $file = null)
    {
        if ($file != null) {

        // Store the Image in that Path
        $path = $file->storeAs(
            'profile_images' , 'profileImg_' . $user->id . '.' . $file->getClientOriginalExtension(), 'public'
        );

        // Save User Image Path
        $user->profile_img_path = $path;

        }
    }
}
