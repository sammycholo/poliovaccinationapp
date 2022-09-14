@extends('layout.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Campaigns</h1><br>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-columns"></i>
            Active Campaigns
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Start_date</th>
                        <th>End_date</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Start_date</th>
                        <th>End_date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($campaigns as $campaign)
                    <tr>
                        <td>{{$campaign->name}}</td>
                        <td>{{$campaign->type}}</td>
                        <td>{{$campaign->start}}</td>
                        <td>{{$campaign->end}}</td>
                        <td>
                            <button type="button" name="{{$campaign->name}}" id="{{$campaign->id}}"
                                ctype="{{$campaign->type}}" start="{{$campaign->start}}" end="{{$campaign->end}}"
                                class="btn btn-primary edit-btn" data-bs-toggle="modal"
                                data-bs-target="#editmodal">Edit</button>
                            </td>
                        <td>
                            <button type="button" id="{{$campaign->id}}"
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
                        <label for="exampleFormControlInput1">Campaign Name</label>
                        <input type="text" class="form-control" name="name" id="saas" placeholder="Name Here"
                            required><br>
                        <label for="exampleFormControlSelect1">Campaign Type</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="type" required>
                            <option value="URBAN-IPV">URBAN-IPV</option>
                            <option value="RURAL-IPV">RURAL-IPV</option>
                            <option value="URBAN-OPV">URBAN-OPV</option>
                            <option value="RURAL-OPV">RURAL-OPV</option>
                            </select> <br>
                        <label for="start">Start</label>
                        <input type="date" id="start" name="start" required> &nbsp;
                        <label for="end">End</label>
                        <input type="date" id="end" name="end" required>
                        <br><br>
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
                <h5 class="modal-title">Delte Campaign</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="deleteForm" method="POST">
                    @method('DELETE')
                    @csrf
                    <h5>Are you sure You want to delete?</h5>
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
            let type = $(this).attr('ctype');
            let id = $(this).attr('id');
            let start = $(this).attr('start');
            let end = $(this).attr('end');
            $('#saas').val(name);
            $('#type').val(type);
            $('#start').val(start);
            $('#end').val(end); 
            $('#updateForm').attr('action','{{route('admin.campaign.update','')}}' +'/'+id);
        });
        
        $('.delete-btn').click(function(){
            let id = $(this).attr('id');
            $('#deleteForm').attr('action','{{route('admin.campaign.destroy','')}}' +'/'+id);
        });
    });
</script>
@endsection