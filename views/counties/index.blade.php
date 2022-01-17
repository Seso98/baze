@extends('app')

@section('content')
<table class="table">
    <tr class="table-dark">
        <th>Id</th>
        <th>County Name</th>
        
    </tr>

    @foreach($counties as $county)
        <tr>
            <td>{{ $county->id  }}</td>
            <td>{{ $county->name    }}</td>
        </tr>
    @endforeach
</table>

@endsection