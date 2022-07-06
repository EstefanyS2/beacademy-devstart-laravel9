@extends('template.users')
@section('title', 'Listagem de Usuários')
@section('body')
  <h1>Listagem de Usuários</h1>
  <a href="{{ route('users.create') }}" class="btn btn-outline-dark">Novo Usuário</a>
  <table class="table">
    <thead class="text-center">
      <tr>
        <th scope="col">Foto</th>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Data Cadastro</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody class="text-center">
      @foreach($users as $user)
      <tr>
        @if($user->image)
          <th><img src=" {{ asset('storage/'.$user->image) }}" width="50px" height="50px" class="rounded-circle"/></th>
        @else
          <th><img src=" {{ asset('storage/profile/olaf.webp') }}" width="50px" height="50px" class="rounded-circle"/></th>
        @endif
        <th scope="row">{{ $user->id }}</th>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ date('d/m/y - H:i', strtotime($user->created_at)) }}</td>
        <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-primary text-white">VISUALIZAR</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="justify-content-center pagination">
  {{ $users->links('pagination::bootstrap-4') }}
</div>
@endsection