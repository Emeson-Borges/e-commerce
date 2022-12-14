@extends('layouts.app')

@section('title', "Editar Usuário { $user->name }")

@section('content')
<h1>Editar Usuário - {{ $user->name }}</h1>

@if ($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $error)
        <li class="error">{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('users.update', $user->id) }}" method="post">
    @method('PUT') <!-- Diretiva para mandar verbo put -->
    @csrf <!-- Diretiva para mandar um token para cada usuário -->
    <input type="text" name='name' placeholder="Nome: " value="{{ $user->name }}">
    <input type="text" name="email" placeholder="E-mail: " value="{{ $user->email }}">
    <input type="text" name="password" placeholder="Senha: ">
    <button type="submit">Enviar</button>
</form>

@endsection