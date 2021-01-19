@extends('adminlte::page')
@section('content')
<section class="container">
   
      <table class="table table-dark">
          <h1 class="text-center text-danger">Logo</h1>
          <thead>
            <tr>
              <th scope="col">LOGO</th>
              <th scope="col">ACTIONS</th>
  
            </tr>
          </thead>
          @foreach ($logo as $i)
          <tbody>
            <tr>
              <td> <img src="{{ asset("img/$i->logo") }}"></td>

              <td class="d-flex">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target=".logo-{{ $i->id }}">Edit</button>
                @include('logo.edit')
    
              </td>
  
            </tr>
           
          </tbody>
              
          @endforeach
        </table>
  </section>
       
@endsection