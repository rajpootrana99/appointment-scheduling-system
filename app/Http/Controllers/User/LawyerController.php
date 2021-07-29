<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\LawyerInformation;
use App\User;
use Illuminate\Http\Request;

class LawyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\LawyerInformation  $lawyerInformation
     * @return \Illuminate\Http\Response
     */
    public function show($lawyerInformation)
    {
        $lawyer = LawyerInformation::with('user', 'lawyerType')->where('user_id', $lawyerInformation)->first();
        return view('client.lawyer-profile', [
            'lawyer' => $lawyer,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LawyerInformation  $lawyerInformation
     * @return \Illuminate\Http\Response
     */
    public function edit(LawyerInformation $lawyerInformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LawyerInformation  $lawyerInformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LawyerInformation $lawyerInformation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LawyerInformation  $lawyerInformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(LawyerInformation $lawyerInformation)
    {
        //
    }
}
