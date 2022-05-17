<?php

namespace App\Http\Controllers;

use App\Trains;
use Illuminate\Http\Request;

class TrainsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trains = Trains::all();
        return view('trains.index', ["trains" => $trains]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
}
