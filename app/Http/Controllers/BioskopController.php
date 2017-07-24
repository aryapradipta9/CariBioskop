<?php

namespace App\Http\Controllers;

use App\Bioskop;
use Illuminate\Http\Request;

class BioskopController extends Controller
{
    /**
     * Send back all comments as JSON
     *
     * @return Response
     */

    public function getBioskop() {
        $bioskop = Bioskop::all();
        $response = [
            "list" => $bioskop
        ];
        return response ()->json($response,200);
    }
    public function index()
    {
        return Response::json(Bioskop::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        Bioskop::create(array(
            'author' => Input::get('author'),
            'text' => Input::get('text')
        ));

        return Response::json(array('success' => true));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Bioskop::destroy($id);

        return Response::json(array('success' => true));
    }
}
