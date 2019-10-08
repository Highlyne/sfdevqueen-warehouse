<?php

namespace App\Http\Controllers;

use App\Feedback__c;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sf_result = Feedback__c::get();
        $recordCount = count($sf_result);
        return view('dash', compact('recordCount'));
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
        // If there's a record for the email given update the record.
        // If not, create one.
        $feedback = new Feedback__c;
        
        $feedback->invite_number__c = $request->acctNum;
        $feedback->name_given__c = $request->name;
        $feedback->customer_email__c = $request->email;
        $feedback->answer_1__c = (int)$request->Q1;
        $feedback->answer_2__c = (int)$request->Q2;
        $feedback->answer_3__c = (int)$request->Q3;
        $feedback->answer_4__c = (int)$request->Q4;
        $feedback->answer_5__c = (int)$request->Q5;

        $feedback->save();
            
        
        return redirect('/');
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
