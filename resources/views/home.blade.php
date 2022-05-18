@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <br/>
                <br/>
                {!! Form::button('<i class="fa fa-plus"></i><a href="/loan_details"> Loan Details', array('class' => 'btn btn-block btn-primary', 'type' => 'submit')) !!}
               <br/>
               <br/>
                {!! Form::button('<i class="fa fa-plus"></i><a href="/emi_details"> Process Data', array('class' => 'btn btn-block btn-primary', 'type' => 'submit')) !!}
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br/>
                <br/>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
