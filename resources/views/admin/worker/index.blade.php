@extends('layout.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Workers</h1><br>
   
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-user"></i>
           All Workers
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>CNIC</th>
                        <th>Adress</th>
                        <th>Area</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>CNIC</th>
                        <th>Address</th>
                        <th>Area</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($workers as $worker)
                    <tr>
                        <td>{{$worker->name}}</td>
                        <td>{{$worker->email}}</td>
                        <td>{{$worker->phone}}</td>
                        <td>{{$worker->cnic}}</td>
                        <td>{{$worker->address}}</td>
                        <td>{{$worker->area}}</td>
                        <td><button type="button" name="{{$worker->name}}" id="{{$worker->id}}" phone="{{$worker->phone}}" email="{{$worker->email}}" cnic="{{$worker->cnic}}" address="{{$worker->address}}" area="{{$worker->area}}" class="btn btn-primary edit-btn" data-bs-toggle="modal" data-bs-target="#editmodal">Edit</button></td>   
                        <td>
                            <button type="button" id="{{$worker->id}}"
                                class="btn btn-danger delete-btn" data-bs-toggle="modal"
                                data-bs-target="#delmodal">Delete</button>
                        </td>
                    </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="editmodal" class="modal">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Edit Campaign</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<form id="updateForm" method="POST">
    @method('PUT')
    @csrf
<div class="form-group">
        <label for="exampleFormControlInput1">Worker Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name Here" required><br><label for="exampleFormControlInput1">Worker CNIC</label>
        <input type="text" id="cnic" class="form-control" name="cnic" placeholder="1111111111" required><br>
        <label for="exampleFormControlInput1">Worker Email</label>
        <input type="email" id="email" class="form-control"  placeholder="xyz@gmail.com" name="email" required><br>
        <label for="exampleFormControlSelect1">Worker Phone</label>
        <input type="number" class="form-control"  placeholder="0300111111" id="phone" name="phone" required><br>
        <label for="exampleFormControlInput1">Worker Password</label>
        <input type="password"  name="password" class="form-control" placeholder="">
        <span class="text-danger">Leave Empty if dont want to change</span>
        <br>

        <label for="exampleFormControlInput1">Worker Address</label>
        <input type="text" id="address" class="form-control" placeholder="" name="address"><br>
        <label for="exampleFormControlInput1">Worker Area</label>
        <input type="text" id="area" name="area" class="form-control" placeholder=""><br>
        
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
<button type="submit" class="btn btn-primary">Save changes</button>
</div>
</form>
</div>
</div>
</div>

@endsection

@section('scripts')


<div id="delmodal" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delte Worker</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="deleteForm" method="POST">
                    @method('DELETE')
                    @csrf
                    <h5>Are you sure you want to delete?</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('.edit-btn').click(function(){
            let name = $(this).attr('name');
            let email = $(this).attr('email');
            let phone = $(this).attr('phone');
            let cnic = $(this).attr('cnic');
            let address = $(this).attr('address');
            let area = $(this).attr('area');
            let id = $(this).attr('id');
            $('#name').val(name);
            $('#email').val(email);
            $('#phone').val(phone);
            $('#cnic').val(cnic); 
            $('#address').val(address); 
            $('#area').val(area); 
            $('#updateForm').attr('action','{{route('admin.worker.update','')}}' +'/'+id);
        });

                       
        $('.delete-btn').click(function(){
            let id = $(this).attr('id');
            $('#deleteForm').attr('action','{{route('admin.worker.destroy','')}}' +'/'+id);
        });
    });
</script>
@endsection