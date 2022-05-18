<?php

namespace App\Http\Controllers;
use App\Models\LoanDetails;
use Illuminate\Http\Request;

class LoanDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loandetails = LoanDetails::latest()->paginate(10);
        return view('loandetails.index',compact('loandetails'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('loandetails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
           
            'num_of_payment' => 'required',
            'first_payment_date' => 'required',
            'last_payment_date' => 'required',
            'loan_amount' => 'required',
        ]);
        $loandetail = new LoanDetails;
        
        $loandetail ->num_of_payment = $request->input('num_of_payment');
        $loandetail ->first_payment_date = $request->input('first_payment_date');
        $loandetail ->last_payment_date = $request->input('last_payment_date');
        $loandetail ->loan_amount = $request->input('loan_amount');
       
        $loandetail -> save();
        LoanDetails::create($request->all());
        return redirect('/loan_details')->with('status', 'Loan Details Form Data Has Been Inserted');
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
