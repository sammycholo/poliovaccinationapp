@extends('layout.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Add Volunteer Opportunities</h1> <br>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-hands-helping"></i>
            Volunteer Opportunities
        </div>
        <div class="card-body">
<form action="{{ route('admin.volunteer.store') }}" method="POST">
    @csrf   
<div class="form-group">
<label for="exampleFormControlInput1">Oppurtunity Description</label>
<input type="text" class="form-control" id="exampleFormControlInput1" name="description" placeholder="Description" required><br>
<label for="exampleFormControlInput1">City</label>
<input type="text" class="form-control" id="exampleFormControlInput1" name="city" placeholder="City Name" required><br>
<br>
<center><input type="submit" class="btn btn-primary" value="Post"></center>
</div>
</form>
        </div>
    </div>
</div>
@endsection