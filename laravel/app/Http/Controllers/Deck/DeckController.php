<?php namespace App\Http\Controllers\Deck;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DeckController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id) {
        $deck = [
            ["title" => "Euler's Formula", "text" => 'e^{\\pi i}-1=0'],
            ["title" => "Expanded Euler's Formula", "text" => 'e^{j\\theta}= cos(\\theta) + jsin(\\theta)'],
            ["title" => "Baye's Rule", "text" => 'P(A|B)= \\frac{P(B|A) * P(A)}{P(B)}'],
        ];
        return $deck;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
