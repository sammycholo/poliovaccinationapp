@extends('layout.user')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Create Complaint</h1> <br> 
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-bullhorn"></i>
            Complaint Form
        </div>
        <div class="card-body">
<form action={{ route('user.complain.store') }} method="POST" >
    @csrf
<div class="form-group">
    <label for="exampleFormControlSelect1">Complain Subject</label>
<input type="text" name="subject" class="form-control" id="exampleFormControlInput1" placeholder="Complain Subjective"><br>
<label for="exampleFormControlInput1">Suggestion/Comments</label>
<input type="text" name="text" class="form-control" id="exampleFormControlInput1" placeholder="Complain"><br>

<center><input class="btn btn-primary" type="submit"></center>
</div>
</form>
        </div>
    </div>
</div>
@endsection