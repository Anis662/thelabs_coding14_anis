@extends('adminlte::page')
@section('content')
    <section class="container-fluid">
        <table class="table table-warning">
          <td class="h5 text-danger">Prénom: {{ Auth::user()->name }}</td> 
          <td class="h5 text-info">Email: {{ Auth::user()->email }}</td>
          <td class="h5 text-success">Mot de passe: {{ Auth::user()->password }}</td>
          <td class="h5 text-primary">Mon rôle: {{ Auth::user()->roles->name }}</td>
          <td class="h5 text-danger">Photo: <img class="w-50" src="/img/{{ Auth::user()->photo }}"></td>
        </table> 

        
        <div class=" d-flex justify-content-center">
          <button type="button" class="btn btn-success px-2" data-toggle="modal" data-target=".profil-{{ Auth::user()->id}}">Edit</button>
          @include('profil.edit')
          <form method="POST" action="{{ route('logout') }}"> 
            @csrf
      
            <x-jet-responsive-nav-link href="{{ route('logout') }}" class=" btn btn-danger mx-3"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                {{ __('Logout') }}
            </x-jet-responsive-nav-link>
        </form>

        </div>

    </section>
@endsection