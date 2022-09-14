@extends('layout.user')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Update Profile</h1> <br>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-rss"></i>
            User Profile
        </div>
        <div class="card-body">
            <form action="{{ route('user.profile.update',Auth::user()->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="name"
                            placeholder="Name" value="{{ Auth::user()->name }}">
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">CNIC</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="cnic"
                            placeholder="CNIC" value="{{ Auth::user()->cnic }}" readonly>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Phone</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="phone"
                            placeholder="Phone" value="{{ Auth::user()->phone }}">
                    </div>                    
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">City</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="city"
                            placeholder="City" value="{{ Auth::user()->city }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Email</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="email"
                            placeholder="Email" value="{{ Auth::user()->email }}" readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Password</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="password"
                            placeholder="Password">
                        <span>Note: (Leave Empty if your dont want to change Password)</span>
                    </div>
                    <center><input class="btn btn-primary" type="submit" value="Update"></center>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection