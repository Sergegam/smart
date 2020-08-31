@extends('layouts.admin')

@section('content')
@include('layouts.includes.navbar-admin')
<table class="table table-dark mt-5">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Correo</th>
        <th scope="col">Asunto</th>
        <th scope="col">Mensaje</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact)
        <tr>
            <td>{{ $contact->name }}</th>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->subject }}</td>
            <td>{{ $contact->body }}</td>
          </tr>
        @endforeach
    </tbody>
  </table>

@endsection
