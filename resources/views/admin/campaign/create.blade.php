@extends('layout.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Create Campaign</h1> <br>
   
   
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-columns"></i>
            Campaign Form
        </div>
        <div class="card-body">
            <form action="{{route('admin.campaign.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
<div class="form-group">
<label for="exampleFormControlInput1">Campaign Name</label>
<input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Name Here" required><br>
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
<center><input class="btn btn-primary" type="submit"></center>
</div>
</form>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Active Campaigns
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Start_Date</th>
                        <th>End_Date</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Start_Date</th>
                        <th>End_Date</th>
                    </tr>
                </tfoot>
                <tbody>
               
                    @foreach ($campaigns as $campaign)
                    <tr>
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