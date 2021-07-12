
{{-- @extends('layouts.app') --}}
{{-- @section('content') --}}

<!DOCTYPE html>
<html>
<head>
    <title>Customer Information</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand font-weight-bold" href="#">Yorktown New & Used Tools</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href= {{ route('index') }}>Employees <span class="sr-only">(current)</span></a>
            {{-- <a class="nav-item nav-link" href= {{ route('create') }}>Create Employee</a> --}}
            <a class="nav-item nav-link active" href= {{ route('customer.index') }}>Customers<span class="sr-only">(current)</span></a>
            {{-- <a class="nav-item nav-link" href= {{ route('edit') }}>Pricing</a> --}}
            {{-- <a class="nav-item nav-link disabled" href="#">Disabled</a> --}}
          </div>
        </div>
      </nav>


<div class="container mt-5">
    <h2 class="mb-4">Customer Information</h2>
    <div class="d-flex justify-content-center">  
      <button style="float: right; font-weight: 1100;" class="btn btn-info btn-sm" type="button"  data-toggle="modal" data-target="#CreateCustomerModal">
        Create New Customer
    </button>
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
    </div>
    <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>Zipcode</th>
                <th>Email</th>
                <th>Customer Rating</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
</body>
{{-- @endsection --}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
  $(function () {
    
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('customer.list') }}",
        columns: [
            // {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'firstName', name: 'firstName'},
            {data: 'lastName', name: 'lastName'},
            {data: 'address', name: 'address'},
            {data: 'city', name: 'city'},
            {data: 'state', name: 'state'},
            {data: 'zipcode', name: 'zipcode'},
            {data: 'email', name: 'email'},
            {data: 'customerRating', name: 'customerRating'},
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
    });
    
  });
</script>
<!-- Create Customer Modal -->
<div class="modal" id="CreateCustomerModal">
  <div class="modal-dialog">
      <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
              <h4 class="modal-title">Customer Create</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
              <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                  <strong>Success!</strong>Customer was added successfully.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="form-group">
                  <label for="firstName">First Name:</label>
                  <input type="text" class="form-control" name="firstName" id="firstName">
              </div>
              <div class="form-group">
                <label for="lastName">Last Name:</label>
                <input type="text" class="form-control" name="lastName" id="lastName">
            </div>
            <div class="form-group">
              <label for="address">Address:</label>
              <input type="text" class="form-control" name="address" id="address">
            </div>
            <div class="form-group">
              <label for="city">City:</label>
              <input type="text" class="form-control" name="city" id="city">
            </div> 
            <div class="form-group">
              <label for="state">State:</label>
              <input type="text" class="form-control" name="state" id="state">
            </div>
            <div class="form-group">
              <label for="zipcode">Zip Code:</label>
              <input type="number" class="form-control" name="zipcode" id="zipcode">
            </div> 
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" name="email" id="email">
            </div>  
            <div class="form-group">
              <label for="customerRating">Customer Rating:</label>
              <input type="number" class="form-control" name="customerRating" id="customerRating">
            </div> 
          </div>
          <!-- Modal footer -->
          <div class="modal-footer">
              <button type="button" class="btn btn-success" id="SubmitCreateCustomerForm" onClick="SubmitCreateCustomerForm">Create</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
</div>


<!-- Edit Custoemr Modal -->
<div class="modal" id="EditCustomerModal">
  <div class="modal-dialog">
      <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
              <h4 class="modal-title">Customer Edit</h4>
              <button type="button" class="close modelClose" data-dismiss="modal">&times;</button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
              <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                  <strong>Success!</strong>Customer was added successfully.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div id="EditCustomerModalBody">
              
              </div>
          </div>
          <!-- Modal footer -->
          <div class="modal-footer">
              <button type="button" class="btn btn-success" id="SubmitEditCustomerForm">Update</button>
              <button type="button" class="btn btn-danger modelClose" data-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
</div>

<!-- Delete Customer Modal -->
<div class="modal" id="DeleteCustomerModal">
  <div class="modal-dialog">
      <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
              <h4 class="modal-title">Customer Delete</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
              <h4>Are you sure want to delete this Customer?</h4>
          </div>
          <!-- Modal footer -->
          <div class="modal-footer">
              <button type="button" class="btn btn-danger" id="SubmitDeleteCustomerForm">Yes</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
          </div>
      </div>
  </div>
</div>
{{-- @endsection --}}

@section('script')
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
@endsection

{{-- ///////----------------------- --}}
</html>
<script>




// Create customer Ajax request.
$('#SubmitCreateCustomerForm').click(function(e) {
    e.preventDefault();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: "{{ route('customer.store') }}",
        method: 'post',
        data: {
            firstName: $('#firstName').val(),
            lastName: $('#lastName').val(),
            address: $('#address').val(),
            City: $('#City').val(),
            state: $('#state').val(),
            zipcode: $('#zipcode').val(),
            email: $('#email').val(),
            customerRanking: $('#customerRanking').val(),
        },
        //error: function(req, err){ console.log('my message' + err); }//this can be deleted
        success: function(result) {
            if(result.errors) {
                $('.alert-danger').html('');
                $.each(result.errors, function(key, value) {
                    $('.alert-danger').show();
                    $('.alert-danger').append('<strong><li>'+value+'</li></strong>');
                });
            } else {
                $('.alert-danger').hide();
                $('.alert-success').show();
                $('.datatable').DataTable().ajax.reload();
                setInterval(function(){ 
                    $('.alert-success').hide();
                    $('#CreateArticleModal').modal('hide');
                    location.reload();
                }, 2000);
            }
        }
    });
});

//////////------------------------------------------
// Get single customer in EditModel
$('.modelClose').on('click', function(){
    $('#EditCustomerModal').hide();
});


var id;
$('body').on('click', '#getEditCustomerData', function(e) {
    // e.preventDefault();
    $('.alert-danger').html('');
    $('.alert-danger').hide();
    id = $(this).data('id');
    $.ajax({
        url: "customer/"+id+"/edit",
        method: 'GET',
        // data: {
        //     id: id,
        // },
        success: function(result) {
            console.log(result);
            $('#EditCustomerModalBody').html(result.html);
            $('#EditCustomerModal').show();
        }
    });
});

// Update article Ajax request.
// $('#SubmitEditCustomerForm').click(function(e) {
//     e.preventDefault();
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     $.ajax({
//         url: "customer/"+id,
//         method: 'PUT',
//         data: {
//             {data: 'firstName', name: 'firstName'},
//             {data: 'lastName', name: 'lastName'},
//             {data: 'address', name: 'address'},
//             {data: 'city', name: 'city'},
//             {data: 'state', name: 'state'},
//             {data: 'zipcode', name: 'zipcode'},
//             {data: 'email', name: 'email'},
//             {data: 'customerRating', name: 'customerRating'},
//             {
//                 data: 'action', 
//                 name: 'action', 
//                 orderable: true, 
//                 searchable: true
//             },
//         },
//         success: function(result) {
//             if(result.errors) {
//                 $('.alert-danger').html('');
//                 $.each(result.errors, function(key, value) {
//                     $('.alert-danger').show();
//                     $('.alert-danger').append('<strong><li>'+value+'</li></strong>');
//                 });
//             } else {
//                 $('.alert-danger').hide();
//                 $('.alert-success').show();
//                 $('.datatable').DataTable().ajax.reload();
//                 setInterval(function(){ 
//                     $('.alert-success').hide();
//                     $('#EditCustomerModal').hide();
//                 }, 2000);
//             }
//         }
//     });
// });


// Delete customer Ajax request.
var deleteID;
$('body').on('click', '#getDeleteId', function(){
    deleteID = $(this).data('id');
})
$('#SubmitDeleteCustomerForm').click(function(e) {
    e.preventDefault();
    var id = deleteID;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: "customer/"+id,
        method: 'DELETE',
        success: function(result) {
            setInterval(function(){ 
                $('.datatable').DataTable().ajax.reload();
                $('#DeleteCustomerModal').hide();
            }, 1000);
        }
    });
});
</script>