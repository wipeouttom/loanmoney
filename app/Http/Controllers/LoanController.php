<?php

namespace App\Http\Controllers;

use App\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Loan.index', []);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('loan.create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Loan::create($request::all());

        return view('thanks', []);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Money  $money
     * @return \Illuminate\Http\Response
     */
    public function show(Money $money)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Money  $money
     * @return \Illuminate\Http\Response
     */
    public function edit(Money $money)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Money  $money
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Money $money)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Money  $money
     * @return \Illuminate\Http\Response
     */
    public function destroy(Money $money)
    {
        //
    }
}
