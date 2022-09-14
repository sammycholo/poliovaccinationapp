@extends('layout.user')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Upcoming Campaign</h1><br>
   
   
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-columns"></i>
            Upcoming Campaign
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                       
                        <th>id</th>
                        <th>Campaign Name</th>
                        <th>Type</th>
                        <th>Start</th>
                        <th>End</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                      
                        <th>id</th>
                        <th>Campaign Name</th>
                        <th>Type</th>
                        <th>Start</th>
                        <th>End</th>
                    </tr>
                </tfoot>
                <tbody>
                   
                        @foreach ($campaigns as $key => $campaign)
                        <tr>
                        <td>{{ $key+1 }}</td> 
                        <td>{{ $campaign->name }}</td> 
                        <td>{{ $campaign->type }}</td> 
                        <td>{{ $campaign->start }}</td> 
                        <td>{{ $campaign->end }}</td> 
                     
                    </tr>
                        @endforeach
                    
                </tbody>
            </table>
            {{-- <center><button type="button" class="btn btn-primary"></button></center> --}}
        </div>
    </div>
</div>
@endsection