<?php

namespace App\Http\Controllers;

use App\Models\AllUsers;
use Illuminate\Http\Request;

class AllUsersController extends Controller
{
    
    public function index()
    {
        //la route pour la page d'accueil
        return view('AllUsers.index');
    }

    
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AllUsers  $allUsers
     * @return \Illuminate\Http\Response
     */
    public function show(AllUsers $allUsers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AllUsers  $allUsers
     * @return \Illuminate\Http\Response
     */
    public function edit(AllUsers $allUsers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AllUsers  $allUsers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AllUsers $allUsers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AllUsers  $allUsers
     * @return \Illuminate\Http\Response
     */
    public function destroy(AllUsers $allUsers)
    {
        //
    }
}
