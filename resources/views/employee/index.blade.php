<h1>hello</h1>
@extends('app');

@section('content')
    
<table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th>name</th>
      <th>address</th>
      <th>city</th>
      <th>state</th>
      <th>zipcode</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($employees as $employee)
      <td>{{ $employees['id'] }}</td>
      <td>{{ $employees['name'] }}</td>
      <td>{{ $employees['address'] }}</td>
      <td>{{ $employees['city'] }}</td>
      <td>{{ $employees['state'] }}</td>
      <td>{{ $employees['zipcode'] }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection('content')

