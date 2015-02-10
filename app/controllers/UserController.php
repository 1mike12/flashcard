<?php

class UserController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $user= Auth::user();
        $data=[
            "decks"=>$user->decks
        ];
        return View::make("user.dash")->with($data);
    }

    //added to routes as route::get before the route::resource
    public function getLogin() {
        return View::make("user.login");
    }

    public function postLogin() {
        if (Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password')])) {
            //redirect to original blocked path or default to dashboard
            return Redirect::intended("user");
        } else {
            return Redirect::back()
                            ->with('message', 'Your username/password combination was incorrect')
                            ->withInput();
        }
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
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
