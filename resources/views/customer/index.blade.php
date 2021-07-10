@extends('layouts.app')

@section('styles')
<link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">
@endsection

@section('content')
<div class="d-flex">
  <h3 class="mx-auto mt-4">Index of All Employee Infomation</h3>
</div>

<div class="container">  
  <table id="datatable" class="table table-bordered table-striped rounded table-responsive">
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
      </tr>
    </thead>
    <tbody>
      {{-- <tr>
        @foreach($customers as $customer)
        <td class="text-center">{{ $cutomer['firstName'] }}</td>
        <td class="text-center">{{ $cutomer['lastName'] }}</td>
        <td class="text-center" >{{ $cutomer['address'] }}</td>
        <td class="text-center" >{{ $cutomer['city'] }}</td>
        <td class="text-center" >{{ $cutomer['state'] }}</td>
        <td class="text-center" >{{ $cutomer['zipcode'] }}</td>
        <td class="text-center" >{{ $cutomer['email'] }}</td>
        <td class="text-center" >{{ $cutomer['customerRating'] }}</td>
        <td class="text-center" >
          <a class="" href= "{{ route('details', ['id'=>$customer['id']]) }}"> Details</a>
          <a class="" href= "{{ route('edit', ['id'=>$customer['id']]) }}"> Edit</a>
          <a class="" id="deleteBtn" href= "{{ route('destroy', ['id'=>$customer['id']]) }}" onclick="return confirm('Are you sure you want to delete this item?');"
            > Delete</a>
        </td>
      </tr>
      @endforeach --}}
    </tbody>
  </table>
</div> 
</div>   
@endsection
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<script>
  $(document).ready( function() {
    $('#datatable').DataTable({
      "processing":true,
      "serverSide": true,
      "ajax": "{{ route('customers.index') }}",
      "columns": [
        {"data": "firstName"},
        {"data": "lastName"},
        {"data": "address"},
        {"data": "city"},
        {"data": "state"},
        {"data": "zipcode"},
        {"data": "email"},
        {"data": "customerRating"}
      ]
    });
  });
</script>