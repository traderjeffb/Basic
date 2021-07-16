@extends('layouts.app')

@section('content')

{{-- <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- DATATABLE -->
  <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">

  <title>Hello, world!</title>
</head> --}}


<div class="d-flex">
  <h3 class="mx-auto mt-4">Index of All Employee Infomation</h3>
</div>
<div class="d-flex justify-content-center">  <a  href= {{ route('employee.create') }}><h5>Add a New Employee</h5></a></div>

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
<div class="container">  
  <table id="example" class="table table-bordered table-striped rounded table-responsive">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>Name</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Zipcode</th>
        <th>Status</th>
        <th>Gender</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($employees as $employee)
        <td class="text-center">{{ $employee['name'] }}</td>
        <td class="text-center" >{{ $employee['address'] }}</td>
        <td class="text-center" >{{ $employee['city'] }}</td>
        <td class="text-center" >{{ $employee['state'] }}</td>
        <td class="text-center" >{{ $employee['zipcode'] }}</td>
        <td class="text-center" >{{ $employee['employment_status'] }}</td>
        <td class="text-center" >{{ $employee['gender'] }}</td>
        <td class="text-center" >
          <a class="" href= "{{ route('employee.details', ['id'=>$employee['id']]) }}"> Details</a>
          <a class="" href= "{{ route('employee.edit', ['id'=>$employee['id']]) }}"> Edit</a>
          <a class="" id="deleteBtn" href= "{{ route('employee.destroy', ['id'=>$employee['id']]) }}" onclick="return confirm('Are you sure you want to delete this item?');"
            > Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div> 
</div>   
@endsection
{{-- <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>  
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script> --}}

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- DATATABLE -->
<script type="text/JavaScript" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script type="text/JavaScript" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>


<script>

$(document).ready(function() {
        $("#example").dataTable();
      });

</script>

