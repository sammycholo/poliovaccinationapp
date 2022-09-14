@extends('layout.user')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">User Compalin  Status</h1><br>
   
   
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-bullhorn"></i>
        Complain
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                       
                        <th>id</th>
                        <th>Complain Subject</th>
                        <th>Complain</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>id</th>
                        <th>Complain</th>
                        <th>Status</th>
                    </tr>
                </tfoot>
                <tbody>
                   
                        @foreach ($complaints as $key => $complain)
                        <tr>
                        <td>{{$key+1 }}</td> 
                        <td>{{$complain->subject }}</td> 
                       <td>{{$complain->text }}</td>           
                       <td class="bg bg-primary text-white">{{ $complain->status }}</td>
                    </tr>
                        @endforeach
                    
                </tbody>
            </table>
            {{-- <center><button type="button" class="btn btn-primary"></button></center> --}}
        </div>
    </div>
</div>
@endsection