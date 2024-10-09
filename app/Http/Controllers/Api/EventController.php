<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Resources\EventResource;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $events = Event::query();

        if ($request->has('limit')) {
            $events = $events->limit($request->input('limit'));
        }

        if ($request->has('status')) {
            $events = $events->where('status', $request->input('status'));
        }

        $events = $events->latest()->get();

        return ResponseHelper::jsonResponse(true, 'Events retrieved successfully', EventResource::collection($events), 200);
    }
}
