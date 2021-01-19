@extends('adminlte::page')
@section('content')

<section class="container">
   
  <table class="table table-primary my-5">
      <thead>
        <tr>
          <th scope="col">Adresse</th>
          <th scope="col">ACTIONS</th>

        </tr>
      </thead>
      @foreach ($adresse as $i)
      <tbody>
        <tr>
          <td>{{ $i->addresse}}</td>
          <td>
            @can('update', $i)
            <button type="button" class="btn btn-success" data-toggle="modal" data-target=".map1-{{ $i->id }}">Edit</button>
            @include('map.edit')
              
            @endcan
             
          </td>
      </tbody>
      @endforeach
    </table>
</section>

    

    
@endsection