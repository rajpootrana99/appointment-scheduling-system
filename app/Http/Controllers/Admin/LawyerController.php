<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LawyerRequest;
use App\Http\Traits\GeneralTraits;
use App\LawyerInformation;
use App\lawyerType;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LawyerController extends Controller
{
    use GeneralTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lawyers = LawyerInformation::all();
        return view('admin.lawyer.index', [
            'lawyers' => $lawyers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lawyerTypes = lawyerType::all();
        return view('admin.lawyer.create', [
            'lawyerTypes' => $lawyerTypes,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LawyerRequest $request)
    {
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'phone' => $request->input('phone'),
        ]);
        $this->storeImage($user);
        $user->assignRole('lawyer');
        LawyerInformation::create([
            'lawyer_type_id' => $request->input('lawyer_type_id'),
            'user_id' => $user->id,
            'cnic' => $request->input('cnic'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'education' => $request->input('education'),
            'passing_year' => $request->input('passing_year'),
        ]);
        return redirect(route('lawyerInformation.index'))->with('success', 'Lawyer created successfully');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LawyerInformation  $lawyerInformation
     * @return \Illuminate\Http\Response
     */
    public function show(LawyerInformation $lawyerInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LawyerInformation  $lawyerInformation
     * @return \Illuminate\Http\Response
     */
    public function edit(LawyerInformation $lawyerInformation)
    {
        $lawyerTypes = LawyerType::all();
        return view('admin.lawyer.edit', [
            'lawyerInformation' => $lawyerInformation,
            'lawyerTypes' => $lawyerTypes,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LawyerInformation  $lawyerInformation
     * @return \Illuminate\Http\Response
     */
    public function update(LawyerRequest $request, LawyerInformation $lawyerInformation)
    {
        $lawyerInformation->update([
            'lawyer_type_id' => $request->input('lawyer_type_id'),
            'user_id' => $lawyerInformation->user_id,
            'cnic' => $request->input('cnic'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'education' => $request->input('education'),
            'passing_year' => $request->input('passing_year'),
        ]);
        $user = User::where('email', $request->email)->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'phone' => $request->input('phone'),
        ]);
        $this->storeImage(User::where('email', $request->email)->first());
        return redirect(route('lawyerInformation.index'))->with('success', 'Lawyer updated successfully');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LawyerInformation  $lawyerInformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(LawyerInformation $lawyerInformation)
    {

    }

    public function storeImage($user){
        $user->update([
            'image' => $this->imagePath('image', 'user', $user),
        ]);
    }
}
