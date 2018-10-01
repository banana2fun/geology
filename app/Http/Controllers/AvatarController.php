<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\AvatarUploadRequest;

use App\Services\AvatarUploader;

class AvatarController extends Controller
{
    public function upload(AvatarUploadRequest $request, AvatarUploader $uploader)
    {
        $user = $request->user();
        $avatar = $request->file('image');
        $uploader->upload($user, $avatar);
        return back();
    }
}
