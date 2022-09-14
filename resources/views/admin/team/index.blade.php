@extends('layout.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">All Teams</h1><br>


    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-users"></i>
            All Teams
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Sr#</th>
                        <th>Name</th>
                        <th>Add Members</th>
                        <th>View Members</th>
                        <th>Edit</th>
                        <th>Delte</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sr#</th>
                        <th>Name</th>
                        <th>Add Members</th>
                        <th>View Members</th>
                        <th>Edit</th>
                        <th>Delte</th>

                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($teams as $key=>$team)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $team->name }}</td>
                        <td>
                            <button type="button" id="{{$team->id}}"
                                class="btn btn-success add_member" data-bs-toggle="modal"
                                data-bs-target="#AddMember">Add Members</button>
                        </td>
                        <td>
                            <a href="{{ route('admin.team.show',$team->id) }}" class="btn btn-warning add_member">View Members</a>
                        </td>

                        <td>
                            <button type="button" name="{{$team->name}}" id="{{$team->id}}"
                                class="btn btn-primary edit-btn" data-bs-toggle="modal"
                                data-bs-target="#editmodal">Edit</button>
                        </td>
                        <td>
                            <button type="button" id="{{$team->id}}"
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

<div id="AddMember" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Members</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.addMembers') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" name="team_id" id="team_id">
                        <label for="exampleFormControlInput1">Select Members Name</label><br>

                        <select  name="worker_ids[]" class="form-control" multiple required>
                            @foreach (App\Models\Worker::where('team_id', null)->get() as $data)
                                <option value="{{$data->id}}">{{$data->name}}</option>
                            @endforeach
                        </select>

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

<div id="editmodal" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Team</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="updateForm" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Team Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Team Name"
                            required><br>
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
            let name = $(this).attr('name');
            let id = $(this).attr('id');
            $('#name').val(name);
            $('#updateForm').attr('action','{{route('admin.team.update','')}}' +'/'+id);
        });
        $('.add_member').click(function(){
            let name = $(this).attr('name');
            let id = $(this).attr('id');
            $('#team_id').val(id);
        });

                
        $('.delete-btn').click(function(){
            let id = $(this).attr('id');
            $('#deleteForm').attr('action','{{route('admin.team.destroy','')}}' +'/'+id);
        });
    });
</script>
@endsection