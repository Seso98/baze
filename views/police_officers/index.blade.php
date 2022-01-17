@extends('app')
@section('content')
<table class="table">
    <tr class="table-dark">
        <th>Id</th>
        <th>Name</th>
        <th>Surname</th>
        <th>VAT_number</th>
        <th>Badge_number</th>
        <th>Police_station</th>
        
    </tr>

    @foreach($police_officers as $police_officer)
        <tr>
            <td>{{ $police_officer->id  }}</td>
            <td>{{ $police_officer->name    }}</td>
            <td>{{ $police_officer->surname   }}</td>
            <td>{{ $police_officer->vat_number   }}</td>
            <td>{{ $police_officer->badge_number   }}</td>
            <td>{{ $police_officer->police_station_id   }}</td>

        </tr>
    @endforeach
</table>

@endsection