@extends('layout.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Create Team</h1> <br>


    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-users"></i>
            Team Form
        </div>
        <div class="card-body">
            <form action="{{ route('admin.team.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Team Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Team Name"
                        name="name" required><br>
                    <br>
                    <center><input type="submit" class="btn btn-primary"></center>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection