@extends('layout.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">News</h1><br>
   
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-rss"></i>
            News
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Sr#</th>
                        <th>Subject</th>
                        <th>News</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sr#</th>
                        <th>Subject</th>
                        <th>News</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($news as $key=>$new)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$new->subject}}</td>
                        <td>{{$new->news}}</td>
                        
                        <td>
                            <button type="button" class="btn btn-primary editNews" data-bs-toggle="modal" data-bs-target="#editmodal"
                            id=" {{ $new->id }} " subject="{{$new->subject}}" news="{{$new->news}}">Edit</button></td>    
                            <td>
                                <button type="button" id="{{$new->id}}"
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
<h5 class="modal-title">Edit News</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<form id="updateForm" method="POST" action="">
    @csrf
    @method('PUT')
<div class="form-group">
<label for="exampleFormControlInput1">News Subject</label>
<input type="text" class="form-control" id="subject" name="news" placeholder="Subject Here" required><br>
<br><br>
<label for="exampleFormControlInput1">News Text</label>
<input type="text" class="form-control" id="news" name="news" placeholder="News Here"><br>
</div>
<button type="submit" class="btn btn-primary">Save changes</button>

</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
</div>
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
        $('body').on('click','.editNews',function(){
            let id = $(this).attr('id');
            let subject = $(this).attr('subject');
            let news = $(this).attr('news');
            $('#subject').val(subject);
            $('#news').val(news);
            $('#updateForm').attr('action','{{route('admin.news.update','')}}'+'/'+id);
        }); 
        $('.delete-btn').click(function(){
            let id = $(this).attr('id');
            $('#deleteForm').attr('action','{{route('admin.news.destroy','')}}' +'/'+id);
        });
        }); 
                        

        </script>
@endsection