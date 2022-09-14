@extends('layout.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ $team->name }}</h1><br>


    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            {{ $team->name }} Info
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Sr#</th>
                        <th>Name</th>
                        <th>CNIC</th>
                        <th>Phone</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sr#</th>
                        <th>Name</th>
                        <th>CNIC</th>
                        <th>Phone</th>
                        <th>Email</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($workers as $key=>$worker)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $worker->name }}</td>
                        <td>{{ $worker->cnic }}</td>
                        <td>{{ $worker->phone }}</td>
                        <td>{{ $worker->email }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection