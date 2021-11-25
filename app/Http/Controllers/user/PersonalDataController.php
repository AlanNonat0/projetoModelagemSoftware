<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PersonalDataRequest;
use App\Service\PersonalDataService;

class PersonalDataController extends Controller
{
    public function __construct()
    {
        $this->service = new PersonalDataService();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()? Auth::user() : null;
        return view('app.users.personaldata',['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PersonalDataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonalDataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PersonalDataRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PersonalDataRequest $request)
    {
        $user = Auth::user();
        $response = $this->service->update($request, $user);
        return response()->json($response['data'], $response['code']) ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
