@extends('adminlte::page')
@section('content')
<div class="d-flex justify-content-end"> 
  <form method="POST" action="{{ route('logout') }}">
      @csrf

      <x-jet-responsive-nav-link href="{{ route('logout') }}" class="btn btn-danger"
                      onclick="event.preventDefault();
                                  this.closest('form').submit();">
          {{ __('Deconnexion') }}
      </x-jet-responsive-nav-link>
  </form>

</div>
<section class="container">
  <div class="d-flex justify-content-center p-4">
    <button type="button" class="btn btn-warning text-white" data-toggle="modal" data-target=".create">CREATE</button>
    @include('user.create')
  </div>
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">PASSWORD</th>
            <th scope="col">ROLE_ID</th>
            <th scope="col">PHOTO</th>
            <th scope="col">ACTIONS</th>

          </tr>
        </thead>
        @foreach ($user as $i)
        <tbody>
          <tr>
            <td>{{ $i->id }}</td>
            <td>{{ $i->name }}</td>
            <td>{{ $i->email }}</td>
            <td>{{ $i->password }}</td>
            <td>{{ $i->roles->name }}</td>
            <td><img src="{{ asset("img/$i->photo") }}" class="w-100 img-fluid"></td>
            <td class="d-flex">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target=".edit-{{ $i->id }}">Edit</button>
              @include('user.edit')

              <form action="/user/{{ $i->id }}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-danger ml-3">DELETE</button>
              
              
              </form>
            </td>

          </tr>
         
        </tbody>
            
        @endforeach
      </table>
</section>
    
@endsection