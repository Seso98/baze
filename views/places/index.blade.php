@extends('app')
@section('content')
<table class="table">
    <tr class="table-dark">
        <th>Id</th>
        <th>Place Name</th>
        <th>Municipality</th>
        
    </tr>

    @foreach($places as $place)
        <tr>
            <td>{{ $place->id  }}</td>
            <td>{{ $place->name    }}</td>
            <td>{{ $place->municipality_id   }}</td>
        </tr>
    @endforeach
</table>
@endsection