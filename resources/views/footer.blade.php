@extends('adminlte::page')
@section('content')
<h1 class="text-info text-center">Table Footer</h1>
    <section class="container">

        <table class="table table-dark my-5">
            <thead>
              <tr>
                <th scope="col">Phrase</th>
                <th scope="col">Auteur</th>
                <th scope="col">ACTIONS</th>
        
              </tr>
            </thead>
            @foreach ($footer as $i)
            <tbody>
              <tr>
                <td>{{ $i->phrase }}</td>
                <td>{{ $i->auteur }}</td>
        
                <td>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target=".edit100-{{ $i->id }}">Edit</button>
                    @include('footer.edit')
                  
        
                </td>
             
            </tbody>
                
            @endforeach
          </table>

    </section>
@endsection