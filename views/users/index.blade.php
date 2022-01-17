@extends('app')
@section('content')
<table class="table">
    <tr class="table-dark">
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>VAT number</th>
        <th>Residential street</th>
        <th>Date of birth</th>
        <th>Place</th>

        
    </tr>

    @foreach($users as $user)
        <tr>
            <td>{{ $user->id  }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->surname }}</td>
            <td>{{ $user->gender }}</td>
            <td>{{ $user->vat_number }}</td>
            <td>{{ $user->residential_street }}</td>
            <td>{{ $user->date_of_birth }}</td>
            <td>{{ $user->place_id }}</td>
            

        </tr>
    @endforeach
</table>

@endsection