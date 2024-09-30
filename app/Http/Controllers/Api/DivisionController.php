<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Resources\DivisionResource;
use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index()
    {
        $divisions = Division::all();

        return ResponseHelper::jsonResponse(true, 'Divisions retrieved successfully', DivisionResource::collection($divisions), 200);
    }

    public function show($slug)
    {
        $division = Division::with('teams')->where('slug', $slug)->firstOrFail();

        return ResponseHelper::jsonResponse(true, 'Division retrieved successfully', new DivisionResource($division), 200);
    }
}
