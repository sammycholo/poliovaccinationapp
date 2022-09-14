@extends('layout.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Add News</h1> <br>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-rss"></i>
            News Form
        </div>
        <div class="card-body">
<form action="{{ route('admin.news.store') }}" method="POST">
    @csrf   
<div class="form-group">
<label for="exampleFormControlInput1">News Subject</label>
<input type="text" class="form-control" id="exampleFormControlInput1" name="subject" placeholder="Subject"><br>
<label for="exampleFormControlInput1">News</label>
<textarea class="form-control" name="news" id="" cols="30" rows="3"></textarea>
<br>
<center><input class="btn btn-primary" type="submit"></center>
</div>
</form>
        </div>
    </div>
</div>
@endsection