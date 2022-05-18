@extends('layouts.default')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Viewers Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href=""> New Customer </a>
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
    
    
           <a class="btn btn-info" href="/loan_details">Process Data</a> 
          
       
    
    <br/>
    <br/>
   
@endsection