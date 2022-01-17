@extends('app')
@section('content')
<table class="table">
    <tr class="table-dark">
        <th>Id</th>
        <th>Name of offense</th>
        <th>Iznos u kunama</th>
        
    </tr>

    @foreach($traffic_violations as $traffic_violation)
        <tr>
            <td>{{ $traffic_violation->id  }}</td>
            <td>{{ $traffic_violation->name    }}</td>
            <td>{{ $traffic_violation->iznos_u_kunama   }}</td>
        </tr>
    @endforeach
</table>

@endsection