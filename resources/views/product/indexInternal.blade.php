@extends('layouts.app')

@section('content')


<div class="d-flex">
  <h3 class="mx-auto mt-4">Index of All Product Infomation</h3>
</div>
<div class="d-flex justify-content-center">  <a  href= {{ route('product.createInternal') }}><h5>Add a New Product</h5></a></div>
<div class="d-flex justify-content-center">
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
  <table id="productInternal" class="table table-bordered table-striped rounded">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>Add to Order</th>
        <th>Quanity</th>
        <th>Product Name</th>
        <th>Product Number</th>
        <th>Department</th>
        <th>Description</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <form action="{{ route('cart.store')}}" id="cart-form" method="POST">
        @csrf
      <tr>
        @foreach($products as $product)
        <td class ="text-center align-middle" ><input id="addedToCart" name="addedToCart" type="checkbox" value=""></td>
        <td  class ="text-center" ><input class ="text-center" id="addedToCart" name="addedToCart" style="width: 3em;" type="input" value=""></td>
        <td class="text-center">{{ $product['product_name'] }}</td>
        <td class="text-center" >{{ $product['product_number'] }}</td>
        <td class="text-center" >{{ $product['product_department'] }}</td>
        <td class="text-center" >{{ $product['description'] }}</td>
        <td class="text-center" >{{ $product['price'] }}</td>
        <td class="text-center" >
          {{--  <a class="" href= "{{ route('product.detailsInternal', ['id'=>$employee['id']]) }}"> Details</a>
          <a class="" href= "{{ route('product.editInternal', ['id'=>$employee['id']]) }}"> Edit</a>
          <a class="" id="deleteBtn" href= "{{ route('product.destroyInteranl', ['id'=>$employee['id']]) }}" onclick="return confirm('Are you sure you want to delete this item?');"
            > Delete</a>  --}}
        </td>
      </tr>
      @endforeach
      <input class="m-2 p-1 rounded" name="submit" id="submit" value="submit" form="cart-form" type="submit"><input type="submit" value="Submit">
    </form>
    </tbody>
  </table>
</div> 
</div>   
@endsection
{{--  
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- DATATABLE -->
<script type="text/JavaScript" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script type="text/JavaScript" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

<script>
$(document).ready(function() {
        $("#productInternal").dataTable();
      });
</script>  --}}
{{--  
<script>
$('.btn-number').click(function(e){
  e.preventDefault();
  
  fieldName = $(this).attr('data-field');
  type      = $(this).attr('data-type');
  var input = $("input[name='"+fieldName+"']");
  var currentVal = parseInt(input.val());
  if (!isNaN(currentVal)) {
      if(type == 'minus') {
          
          if(currentVal > input.attr('min')) {
              input.val(currentVal - 1).change();
          } 
          if(parseInt(input.val()) == input.attr('min')) {
              $(this).attr('disabled', true);
          }

      } else if(type == 'plus') {

          if(currentVal < input.attr('max')) {
              input.val(currentVal + 1).change();
          }
          if(parseInt(input.val()) == input.attr('max')) {
              $(this).attr('disabled', true);
          }

      }
  } else {
      input.val(0);
  }
});
</script>  --}}
