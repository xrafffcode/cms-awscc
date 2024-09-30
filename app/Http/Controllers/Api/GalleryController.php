<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Resources\GalleryResource;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $galleries = Gallery::query();

        if ($request->has('limit')) {
            $galleries = $galleries->limit($request->input('limit'));
        }

        $galleries = $galleries->get();

        return ResponseHelper::jsonResponse(true, 'Galleries retrieved successfully', GalleryResource::collection($galleries), 200);
    }
}
