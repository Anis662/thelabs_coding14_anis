@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-success">Anis</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-5 h3">Bienvenue sur ton lieu de travail ! Ci dessous le boutton pour te deconneter.</p>
                    <div class="d-flex justify-content-center"> 
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                
                            <x-jet-responsive-nav-link href="{{ route('logout') }}" class="btn btn-info"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                {{ __('Deconnexion') }}
                            </x-jet-responsive-nav-link>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
  
@stop
