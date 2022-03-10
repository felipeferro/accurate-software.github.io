<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class BaseController
{
    protected $classe;

    public function index(Request $request)
    {
        return $this->classe::all();
    }

    public function store(Request $request)
    {
        return response()
            ->json(
                $this->classe::create($request->all()),
                201
            );
    }

    public function show(int $id)
    {
        $resorce =  $this->classe::find($id);
        if (is_null($resorce)) {
            return response()->json('', 204);
        }

        return response()->json($resorce);
    }

    public function update(int $id, Request $request)
    {
        $resorce =  $this->classe::find($id);
        // dd($resorce);
        if (is_null($resorce)) {
            return response()->json(['erro' => 'Resource not found'], 404);
        }
        $resorce->fill($request->all());
        $resorce->save();

        return response()->json($resorce);
    }

    public function destroy(int $id)
    {
        $manyResorceRemoved = $this->classe::destroy($id);
        if ($manyResorceRemoved === 0) {
            return response()->json(['erro' => 'Resource not found'], 404);
        }
        return response()->json('', 204);
    }
}
