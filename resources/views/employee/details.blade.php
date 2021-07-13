
@extends('layouts.app')

@section('content')
<div class="d-flex">  
  <h3 class="mx-auto mt-4" >Details : {{ $employee['name'] }} </h3>
</div>
  <div class=" container d-flex">
    <form class="form-group form-control-md col-md-4 border p-1  mx-auto  bg-light font-weight-bold "  action="{{ url('update/'.$employee['id'])}}"  method="post" id="add-employee-form">
      @csrf
            <label for="name" class="ml-md-2" >Name</label>
            <input class="input-group" name="name" value="{{ $employee['name'] }}" readonly><br>
            <label for="address" class="ml-md-2">Address</label>
            <input class="input-group"  name="address" value="{{ $employee['address'] }}" readonly><br>
            <label for="city" class="ml-md-2">City</label>
            <input  class="input-group" name="city" value="{{ $employee['city'] }}" readonly><br>
            <label for="state" class="ml-md-2">State</label>
            <input  class="input-group" name="state" value="{{ $employee['state'] }}" readonly><br>
            <label for="zipcode" class="ml-md-2">Zipcode</label>
            <input  class="input-group" name="zipcode" value="{{ $employee['zipcode'] }}"readonly>

            <label for="employment_status">Employment Status:</label><br>
              <input type="radio" id="fullTime" name="employment_status" readonly value="fullTime" {{ ($employee['employment_stataus']=="fullTime")? "checked" : "" }}>
              <label for="fullTime">Full Time</label><br>

              <input type="radio" id="partTime" name="employment_status" readonly value="partTime" {{ ($employee['employment_stataus']=="partTime")? "checked" : "" }}>
              <label for="partTime">Part Time</label><br>

              <input type="radio" id="tempHelp" name="employment_status" readonly value="tempHelp" {{ ($employee['employment_stataus']=="tempHelp")? "checked" : "" }}>
              <label for="tempHelp">Temporary Help</label><br>

            <button class= "m-2 rounded" type="submit">Submit</button>
    </form>
  </div>   
</div>
@endsection