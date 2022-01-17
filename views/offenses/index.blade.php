@extends('app')
@section('content')
<table class="table">
    <tr class="table-dark">
        <th>Id</th>
        <th>Date_of_offense</th>
        <th>User</th>
        <th>Traffic_violation</th>
        <th>Place</th>
        <th>Police_officer</th>
        
    </tr>

    @foreach($offenses as $offense)
        <tr>
            <td>{{ $offense->id  }}</td>
            <td>{{ $offense->date_of_offense    }}</td>
            <td>{{ $offense->user_id   }}</td>
            <td>{{ $offense->traffic_violation_id   }}</td>
            <td>{{ $offense->place_id   }}</td>
            <td>{{ $offense->police_officer_id   }}</td>

        </tr>
    @endforeach
</table>
@endsection