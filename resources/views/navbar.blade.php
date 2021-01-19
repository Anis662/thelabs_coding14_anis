@extends('adminlte::page')
@section('content')
<section class="container">
   
      <table class="table table-dark">
          <h1 class="text-center">Navbar</h1>
          <thead>
            <tr>
              <th scope="col">Lien 1</th>
              <th scope="col">Lien 2</th>
              <th scope="col">Lien 3</th>
              <th scope="col">Lien 4</th>
              <th scope="col">ACTIONS</th>
  
            </tr>
          </thead>
          @foreach ($nav as $i)
          <tbody>
            <tr>
              <td>{{ $i->link1 }}</td>
              <td>{{ $i->link2 }}</td>
              <td>{{ $i->link3 }}</td>
              <td>{{ $i->link4 }}</td>
              <td class="d-flex">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target=".nav-{{ $i->id }}">Edit</button>
                @include('nav.edit')
    
              </td>
  
            </tr>
           
          </tbody>
              
          @endforeach
        </table>
  </section>
       
@endsection