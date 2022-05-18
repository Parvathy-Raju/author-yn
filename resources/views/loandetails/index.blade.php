@extends('layouts.default')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Loan Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="/create"> New Loan Details </a>
            </div>
        </div>
    </div>
    <br/>
    <br/>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>Client ID</th>
            <th>Number of Payment</th>
            <th>First Payment Date</th>
            <th>Last Payment Date</th>
            <th>Loan Amount</th>
            
        </tr>
    @foreach ($loandetails as $loandetail)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $loandetail->num_of_payment}}</td>
        <td>{{ $loandetail->first_payment_date}}</td>
        <td>{{ $loandetail->last_payment_date}}</td>
        <td>{{ $loandetail->loan_amount}}</td>    
    </tr>
    @endforeach
    </table>
    <br/>
    <br/>
    {!! $loandetails->render() !!}
@endsection