<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function downloadFile(Media $media)
    {
        $location = storage_path('app/files/'.$media->full_path);
        $headers = [];
        return response()->download($location, $media->name,$headers);

    }
}
