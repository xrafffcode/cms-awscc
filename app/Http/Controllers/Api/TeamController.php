<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Resources\TeamResource;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::with('division')->get();

        return ResponseHelper::jsonResponse(true, 'Teams retrieved successfully', TeamResource::collection($teams), 200);
    }
}
