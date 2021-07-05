
@extends('layouts.app')

@section('content')
<div class="formDiv">
<form class="form-ad" action="{{ url('store') }}" method="post" id="add-employee-form">
  @csrf
        <label for="name">Name</label>
        <input name="name"><br>
        <label for="address">Address</label>
        <input name="address"><br>
        <label for="city">City</label>
        <input name="city"><br>
        <label for="state">State</label>
        <input name="state"><br>
        <label for="zipcode">zipcode</label>
        <input name="zipcode">
        <button type="submit">Submit</button>
</form>
</div>   
@endsection
