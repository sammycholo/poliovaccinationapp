@extends('layout.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Compaign Report</h1><br>
   
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-rss"></i>
            Compaign Report
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Sr#</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sr#</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($campaigns as $key=>$campaign)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$campaign->name}}</td>
                        <td>{{$campaign->type}}</td>
                        <td>{{$campaign->start}}</td>
                        <td>{{$campaign->end}}</td>
                    </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
