@extends('layout.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">All Oppurtunities</h1><br>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-hands-helping"></i>
            All Oppurtunities
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Sr#</th>
                        <th>Description</th>
                        <th>City</th>
                        <th>Applicants</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sr#</th>
                        <th>Description</th>
                        <th>City</th>
                        <th>Applicants</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($volunteers as $key=>$volunteer)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$volunteer->description}}</td>
                        <td>{{$volunteer->city}}</td>
                        <td><a href="{{ route('admin.applicant',$volunteer->id) }}" class="btn btn-success">View
                                Appliants</a></td>
                        <td><button type="button" description="{{$volunteer->description}}" city="{{$volunteer->city}}"
                                id="{{$volunteer->id}}" class="btn btn-primary edit-btn" data-bs-toggle="modal"
                                data-bs-target="#editmodal">Edit</button></td>
                                <td>
                                    <button type="button" id="{{$volunteer->id}}"
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
                <h5 class="modal-title">Edit Oppurtunity</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="updateForm" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Oppurtunity Description</label>
                        <input type="text" class="form-control" name="description" id="description"
                            placeholder="Description" required><br>
                        <label for="exampleFormControlInput1">City</label>
                        <input type="text" class="form-control" name="city" id="city" placeholder="City" required><br>

                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div id="delmodal" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delte Team</h5>
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
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        $('.edit-btn').click(function(){
            let city = $(this).attr('city');
            let description = $(this).attr('description');
            let id = $(this).attr('id');
            $('#city').val(city);
            $('#description').val(description);
            $('#updateForm').attr('action','{{route('admin.volunteer.update','')}}' +'/'+id);
        });
        $('.delete-btn').click(function(){
            let id = $(this).attr('id');
            $('#deleteForm').attr('action','{{route('admin.volunteer.destroy','')}}' +'/'+id);
        });
    });
</script>
@endsection