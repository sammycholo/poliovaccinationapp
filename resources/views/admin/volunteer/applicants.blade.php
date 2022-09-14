@extends('layout.admin')

@section('content')
<div class="container-fluid px-4">
    <h5 class="mt-4">Oppurtunity Description: {{ $jobDetail->description }}</h5><br>
    <h5 class="mt-4">City: {{ $jobDetail->city }}</h5><br>
   
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            {{ $jobDetail->description }}
        </div>
        <div class="card-body">
            @if ($applicants)
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Sr#</th>
                        <th>QrCode</th>
                        <th>Name</th>
                        <th>CNIC</th>
                        <th>Phone</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sr#</th>
                        <th>QrCode</th>
                        <th>Name</th>
                        <th>CNIC</th>
                        <th>Phone</th>
                        <th>Email</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($applicants as $key=>$applicant)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td><a href="{{ asset($applicant->qr_code) }}" target="_blank"><img src="{{ asset($applicant->qr_code) }}" alt="" height="100px" width="100px"></a></td>
                        <td>{{$applicant->name}}</td>
                        <td>{{$applicant->cnic}}</td>
                        <td>{{$applicant->phone}}</td>
                        <td>{{$applicant->email}}</td>
                    </tr> 
                    @endforeach  
               

                </tbody>
                @else
                <h5>No Applicant Found</h5>
            @endif
            </table>
        </div>
    </div>
</div>
@endsection