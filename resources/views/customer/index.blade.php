
@extends('layouts.app')
@section('content')

{{--  <!DOCTYPE html>
<html>
<head>
    <title>Customer Information</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    
</head>  --}}
{{--  <body>  --}}
    
    {{--  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand font-weight-bold" href="#">Yorktown New & Used Tools</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href= {{ route('employee.index') }}>Employees <span class="sr-only">(current)</span></a>  --}}
            {{-- <a class="nav-item nav-link" href= {{ route('create') }}>Create Employee</a> --}}
            {{--  <a class="nav-item nav-link active" href= {{ route('customer.index') }}>Customers<span class="sr-only">(current)</span></a>  --}}
            {{-- <a class="nav-item nav-link" href= {{ route('edit') }}>Pricing</a> --}}
            {{-- <a class="nav-item nav-link disabled" href="#">Disabled</a> --}}
          {{--  </div>
        </div>
      </nav>  --}}


<div class="container mt-5">
    <h2 class="mb-4">Customer Information</h2>
    <div class="d-flex justify-content-center">  
        <button style="float: right; font-weight: 1100;" class="btn btn-info btn-sm" type="button"  data-toggle="modal" data-target="#CreateCustomerModal">
        Create New Customer
        </button>
            <div>
            @if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{Session::get('success')}}
            </div>
            @elseif(Session::has('danger'))
            <div class="alert alert-danger text-center">
                {{Session::get('danger')}}
            </div> 
            @endif
    </div>
</div>
    <div class="container">
    <table class="table table-bordered yajra-datatable cutomerTable  table-striped rounded table-responsive">
        <thead class="thead-dark">
            <tr class="text-center">
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>Zipcode</th>
                <th>Email</th>
                <th>Customer Rating</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            @foreach($customers as $customer)
            <td class="text-center">{{ $customer['firstName'] }}</td>
            <td class="text-center">{{ $customer['LastName'] }}</td>
            <td class="text-center" >{{ $customer['address'] }}</td>
            <td class="text-center" >{{ $customer['city'] }}</td>
            <td class="text-center" >{{ $customer['state'] }}</td>
            <td class="text-center" >{{ $customer['zipcode'] }}</td>
            <td class="text-center">{{ $customer['email'] }}</td>
            <td class="text-center" >{{ $customer['customer_rating'] }}</td>
            <td class="text-center" >
              <a class="" href= "{{ route('customer.details', ['id'=>$customer['id']]) }}"> Details</a>
              <a class="" href= "{{ route('customer.edit', ['id'=>$customer['id']]) }}"> Edit</a>
              <a class="" id="deleteBtn" href= "{{ route('customer.destroy', ['id'=>$customer['id']]) }}" onclick="return confirm('Are you sure you want to delete this item?');"> Delete</a>
            </td>
        </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
{{--  </body>  --}}
@endsection