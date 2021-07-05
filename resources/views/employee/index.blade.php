@extends('layouts.app')

@section('content')
<div class="tableDiv"></div>   
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
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
  @endif
    <tbody>
      <tr>
        @foreach($employees as $employee)
        <td>{{ $employee['id'] }}</td>
        <td>{{ $employee['name'] }}</td>
        <td>{{ $employee['address'] }}</td>
        <td>{{ $employee['city'] }}</td>
        <td>{{ $employee['state'] }}</td>
        <td>{{ $employee['zipcode'] }}</td>
        <td>
          <a href= "{{ route('details', ['id'=>$employee['id']]) }}"> Details</a>
          <a href= "{{ route('edit', ['id'=>$employee['id']]) }}"> Edit</a>
          <a href= "{{ route('delete', ['id'=>$employee['id']]) }}"> Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>   
@endsection

