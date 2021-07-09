@extends('layouts.app')

@section('content')

<div class="d-flex">
  <h3 class="mx-auto mt-4">Index of All Employee Infomation</h3>
</div>
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
  <table class="table table-bordered table-striped rounded table-responsive">
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
          <a class="" href= "{{ route('details', ['id'=>$employee['id']]) }}"> Details</a>
          <a class="" href= "{{ route('edit', ['id'=>$employee['id']]) }}"> Edit</a>
          <a class="" id="deleteBtn" href= "{{ route('destroy', ['id'=>$employee['id']]) }}" onclick="return confirm('Are you sure you want to delete this item?');"
            > Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div> 
</div>   
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){
      $('#deleteBtn').click(
      function(){
      alert("Are You Sure You Want to Delelte?");
  });
});

</script>

