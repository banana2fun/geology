<?php

namespace App\Services;

use App\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AvatarUploader
{
    public function upload(User $user, UploadedFile $file): void
    {
        $fileName = $this->generateFileName($file);
        Storage::disk('photos')->putFileAs('', $file, $fileName);
        $user->avatar = $fileName;
        $user->saveOrFail();
    }

    protected function generateFileName(UploadedFile $file): string
    {
        $type = $file->getClientOriginalExtension();
        return Str::uuid()->toString().".{$type}";
    }
}