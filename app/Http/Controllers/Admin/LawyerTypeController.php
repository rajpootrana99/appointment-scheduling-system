<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LawyerTypeRequest;
use App\Http\Traits\GeneralTraits;
use App\LawyerType;
use Illuminate\Http\Request;

class LawyerTypeController extends Controller
{
    use GeneralTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lawyerTypes = LawyerType::all();
        return view('admin.lawyerTypes.index', [
            'lawyerTypes' => $lawyerTypes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LawyerTypeRequest $request)
    {
        $lawyerType = LawyerType::create($request->all());
        $this->storeImage($lawyerType);
        return redirect(route('lawyerType.index'))->with('success', 'Lawyer Type created successfully');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LawyerType  $lawyerType
     * @return \Illuminate\Http\Response
     */
    public function show(LawyerType $lawyerType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LawyerType  $lawyerType
     * @return \Illuminate\Http\Response
     */
    public function edit(LawyerType $lawyerType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LawyerType  $lawyerType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LawyerType $lawyerType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LawyerType  $lawyerType
     * @return \Illuminate\Http\Response
     */
    public function destroy(LawyerType $lawyerType)
    {
        if($lawyerType->lawyerInformations()->first()){
            return redirect(route('lawyerType.index'))->with('warning', 'Lawyer exist against this type');;
        }
        $lawyerType->delete();
        return redirect(route('lawyerType.index'))->with('success', 'Lawyer Type deleted successfully');;
    }

    public function storeImage($lawyerType){
        $lawyerType->update([
            'image' => $this->imagePath('image', 'lawyerType', $lawyerType),
        ]);
    }
}
