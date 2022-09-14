@extends('layout.user')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">All Oppurtunities</h1><br>
   
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-hands-helping"></i>
            All Oppurtunities
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Sr#</th>
                        <th>Description</th>
                        <th>City</th>
                        <th>Apply</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sr#</th>
                        <th>Description</th>
                        <th>City</th>
                        <th>Apply</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($volunteers as $key=>$volunteer)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$volunteer->description}}</td>
                        <td>{{$volunteer->city}}</td>
                        <td>
                            <form action="{{ route('user.apply') }}" method="POST">
                                @csrf
                                <input type="hidden" name="opp_id" value="{{ $volunteer->id }}">
                                <button type="submit" class="btn btn-success edit-btn">Apply</button>
                            </form>
                        </td>

                    </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
