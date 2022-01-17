@extends('app')
@section('content')
<table class="table">
    <tr class="table-dark">
        <th>Id</th>
        <th>Name</th>
        <th>Place</th>
       
        
    </tr>

    @foreach($police_stations as $police_station)
        <tr>
            <td>{{ $police_station->id  }}</td>
            <td>{{ $police_station->name    }}</td>
            <td>{{ $police_station->place_id   }}</td>
            

        </tr>
    @endforeach
</table>

@endsection