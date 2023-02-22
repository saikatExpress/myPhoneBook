<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactnumber;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'         => ['required', 'string', 'max:50', 'min:2', 'unique:contactnumbers'],
            'email'        => ['required', 'email:rfc,dns'],
            'phone_number' => ['reqiured', 'string', 'min:10', 'max:12']
        ]);

        $name        = $request->input('name');
        $email       = $request->input('email');
        $phoneNumber = $request->input('phone_number');

        $contactObj               = new Contactnumber();
        $contactObj->name         = $name;
        $contactObj->email        = $email;
        $contactObj->phone_number = $phoneNumber;

        $res = $contactObj->save();
        if ($res) {
            echo "Saved success";
        } else {
            echo "Saved failed";
        }
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