<?php

namespace App\Http\Controllers;

use App\Http\Requests\TechRequest;
use App\Http\Resources\TechResource;
use App\Models\Tech;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TechController extends Controller
{
    public function index()
    {
        $techs = TechResource::collection(Tech::all());

        return response([
           'techs' => $techs,
           'message' => 'Success!'
        ],200);
    }

    public function show(string $id)
    {
        $tech = Tech::find($id);

        if(is_null($tech))
        {
            return response([
                'message' => "tech {$id} Not found"
            ],404);
        }

        return response([
           'tech' => $tech,
           'message' => 'Success!'
        ],200);
    }

    public function store(TechRequest $request): JsonResponse
    {
        $data = $request->validated();

        $data['slug'] = Tech::generateSlug($data['name']);
        $tech = Tech::create($data);

        return response()->json([
            'tech' => $tech,
            'message' => 'Success!'
        ],201);
    }

}
