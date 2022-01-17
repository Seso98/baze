@extends('app')
@section('content')
<table class="table">
    <tr class="table-dark">
        <th>Id</th>
        <th>Municipality Name</th>
        <th>County</th>
        
    </tr>

    @foreach($municipalities as $municipality)
        <tr>
            <td>{{ $municipality->id  }}</td>
            <td>{{ $municipality->name    }}</td>
            <td>{{ $municipality->county_id    }}</td>
        </tr>
    @endforeach
</table>

@endsection