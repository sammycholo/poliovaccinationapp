@extends('layout.user')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">News Update</h1><br>
   
   
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            News
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>News Subjective</th>
                        <th>News</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>id</th>
                        <th>News Subjective</th>
                        <th>News</th>
                    </tr>
                </tfoot>
                <tbody>
                   
                        @foreach (App\Models\News::all() as $key => $campaign)
                        <tr>
                        <td>{{ $key+1 }}</td> 
                        <td>{{ $campaign->subject }}</td> 
                        <td>{{ $campaign->news }}</td> 
            
                    </tr>
                        @endforeach
                    
                </tbody>
            </table>
            {{-- <center><button type="button" class="btn btn-primary"></button></center> --}}
        </div>
    </div>
</div>
@endsection