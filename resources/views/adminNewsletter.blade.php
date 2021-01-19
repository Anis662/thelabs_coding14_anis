@extends('adminlte::page')
@section('content')
<section class="container">

    <h1 class="text-center text-danger">Les Newsletter</h1>

    <table class="table table-dark my-5">
        <thead>
          <tr>
           
            <th scope="col" class="text-white">E-mails</th>
            <th scope="col" class="text-white">ACTIONS</th>

          </tr>
        </thead>
        @foreach ($newsletter as $i)
        <tbody>
          <tr>
            <td class="text-white">{{ $i->email }}</td>
            <td>
                <form action="/newsletter/{{ $i->id }}" method="POST">
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger">
                    Delete
                  </button>
                
                </form>

            </td>
         
        </tbody>
            
        @endforeach
      </table>
</section>
    
@endsection