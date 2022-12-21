@extends('layouts.app')

@section('title', 'Listagem2')

@section('content')
<h1>Listagem de usuário {{ $user->name }}</h1>

<ul>
    <li>{{ $user->name }}</li>
    <li>{{ $user->email }}</li>
</ul>
<form action="{{ route('users.delete', $user->id) }}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit">Deletar</button>
</form>
@endsection