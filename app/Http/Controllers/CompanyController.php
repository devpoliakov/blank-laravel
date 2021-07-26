<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return Company::get();
        //return response()->json(Company::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $options = [
            'title' => 'company',
            'action' => '/companies/store',

        ];

        $fields = [
            'name' => [
                'name' => 'name',
                'label' => 'Name',
                'type' => 'text',
                'required' => 'required',
            ],

            'email' => [
                'name' => 'email',
                'label' => 'Email',
                'type' => 'email',
                'required' => 'required',
            ],
            'logo' => [
                'name' => 'logo',
                'label' => 'Logo',
                'type' => 'file',
                'required' => '',
            ],
            'website' => [
                'name' => 'website',
                'label' => 'Website',
                'type' => 'text',
                'required' => '',
            ],
        ];

        return view('create', ['options' => $options, 'fields' => $fields]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        return(Company::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'logo' => $request->logo,
                    'website' => $request->website,
        
                ]));

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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
