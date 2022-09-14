@extends('layout.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Create Worker</h1> <br>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-user"></i>
            Worker Form
        </div>
        <div class="card-body">
            <form action="{{route('admin.worker.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Worker Name</label>
                    <input type="text" class="form-control" name="name" id="exampleFormControlInput1"
                        placeholder="Name Here" required><br><label for="exampleFormControlInput1">Worker CNIC</label>
                    <input type="text" class="form-control" name="cnic" id="cnic"
                        placeholder="xxxxxxxxxxxxx" required maxlength = "13" minlength = "13"><br>
                    <label for="exampleFormControlInput1">Worker Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="xyz@gmail.com"
                        name="email" required><br>
                    <label for="exampleFormControlSelect1">Worker Phone</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="xxxxxxxxxxxx"
                        name="phone" required maxlength = "11" minlength = "11"><br>
                    <label for="exampleFormControlInput1">Worker Password</label>
                    <input type="password" name="password" class="form-control" id="exampleFormControlInput1"
                        placeholder="" required><br>
                    <label for="exampleFormControlInput1">Worker Address</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=""
                        name="address"><br>
                    <label for="exampleFormControlInput1">Worker Area</label>
                    <input type="text" name="area" class="form-control" id="exampleFormControlInput1"
                        placeholder=""><br>
                    <br><br>
                    <center><input class="btn btn-primary" type="submit"></center>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
