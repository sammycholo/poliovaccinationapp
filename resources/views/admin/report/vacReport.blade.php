@extends('layout.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Vaccination Report</h1><br>
   
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-rss"></i>
            Vaccination Report
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Sr#</th>
                        <th>QR-Code</th>
                        <th>Name</th>
                        <th>CNIC</th>
                        <th>Phone</th>
                        <th>Vac Status</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sr#</th>
                        <th>QR-Code</th>
                        <th>Name</th>
                        <th>CNIC</th>
                        <th>Phone</th>
                        <th>Vac Status</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($users as $key=>$user)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td><img src="{{ asset($user->qr_code) }}" alt="" height="100px" width="100px"></td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->cnic}}</td>
                        <td>{{$user->phone}}</td>
                        <td>
                            @if ($user->vac_status ==true)
                                <button class="btn btn-primary" disabled>Vaccinated</button>
                            @else
                            <button class="btn btn-danger" disabled>NonVaccinated</button >
                            @endif
                        </td>
                    </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
