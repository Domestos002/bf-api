<?php

namespace App\Http\Controllers;

use App\Coordinator;
use App\Http\Resources\CoordinatorResource;

class CoordinatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CoordinatorResource::collection(Coordinator::all());
    }
}
