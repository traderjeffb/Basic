
@extends('layouts.app');
@section('content')
<div class="formDiv">
  <h3>Editing employee info for: {{ $employee['name'] }} </h3>
<form class="form-ad" action="{{ url('update/'.$employee['id'])}}" method="post" id="edit-employee-form">
  @csrf
        <label for="name">Name</label>
        <input name="name" value={{ $employee['name'] }}><br>
        <label for="address">Address</label>
        <input name="address" value={{ $employee['address'] }}><br>
        <label for="city">City</label>
        <input name="city" value={{ $employee['city'] }}><br>
        <label for="state">State</label>
        <input name="state" value={{ $employee['state'] }}><br>
        <label for="zipcode">zipcode</label>
        <input name="zipcode" value={{ $employee['zipcode'] }}>
        <button type="submit">Submit</button>
</form>
</div>   
@endsection