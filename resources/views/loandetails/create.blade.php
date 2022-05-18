@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Loan Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="/loan_details"> Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card">
    <div class="card-header text-center font-weight-bold">
      
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Client ID</label>
          <input type="text" id="client_id" name="client_id" class="form-control" >
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Number of Paymant</label>
          <input type="text" id="num_of_payment" name="num_of_payment" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">First Payment Date</label>
          <input type="date" id="first_payment_date" name="first_payment_date" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Last Payment Date</label>
          <input type="date" id="last_payment_date" name="last_payment_date" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Loan Amount</label>
          <input type="text" id="loan_amount" name="loan_amount" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
@endsection