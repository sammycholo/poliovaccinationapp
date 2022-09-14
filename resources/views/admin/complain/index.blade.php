@extends('layout.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">User Complain</h1><br>


    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-bullhorn"></i>
            Complain
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Sr#</th>
                        <th>Name</th>
                        <th>Complain Subject</th>
                        <th>Text</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sr#</th>
                        <th>Name</th>
                        <th>Complain Subjective</th>
                        <th>Text</th>
                        <th>Status</th>
                        <th>Status</th>
                    </tr>
                </tfoot>
                <tbody>

                    @foreach ($complains as $key => $complain)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $complain->user->name }}</td>
                        <td>{{ $complain->subject }}</td>
                        <td>{{ $complain->text }}</td>
                        <td class="bg bg-primary text-center text-white">{{ $complain->status }}</td>

                        <td><button type="button" class="btn btn-success complain_status" id="{{$complain->id}}" data-bs-toggle="modal" data-bs-target="#editmodal" >Status</button></td>

                    </tr>

                    <div id="editmodal" class="modal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Change Statuses</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body ">
                                    <form id="updateForm" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                        <div class="form-group btn-group col-md-12">
                                            <button type="submit" name="status" value="Unread" class="btn btn-danger col-md-3">Unread</button>
                                            <button type="submit" name="status" value="Spam"  class="btn btn-primary col-md-3">Spam</button>
                                            <button type="submit" name="status" value="Processing"  class="btn btn-warning col-md-3">Processing</button>
                                            <button type="submit" name="status" value="Resolve"  class="btn btn-success col-md-3">Resolved</button>

                                        </div>
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
    $(document).ready(function(){
        $('.complain_status').click(function(){
            let id = $(this).attr('id');
            $('#updateForm').attr('action','{{route('admin.complain.update','')}}' +'/'+id);
        });
    });
    </script>
@endsection