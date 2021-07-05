DETAILS PAGE

@extends('layouts.app')

@section('content')
<div class="formDiv">
<form class="form-ad" action="{{ url('store') }}" method="post" id="add-blog-post-form"             enctype="multipart/form-data"  >
  @csrf
  <h3>Details of Employee: {{ $employee['name'] }}</h3>
        <label for="name">Name</label>
        <input name="name" value={{ $employee['name'] }} readonly><br>
        <label for="address">Address</label>
        <input name="address" value={{ $employee['address'] }} readonly><br>
        <label for="city">City</label>
        <input name="city" value={{ $employee['city'] }} readonly><br>
        <label for="state">State</label>
        <input name="state" value={{ $employee['state'] }} readonly><br>
        <label for="zipcode">zipcode</label>
        <input name="zipcode" value={{ $employee['zipcode'] }} readonly>
</form>
</div>   
@endsection