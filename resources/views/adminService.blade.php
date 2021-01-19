@extends('adminlte::page')
@section('content')
<section class="container">
  <h1 class="text-center text-sanger">Page Service</h1>
  
    <table class="table table-warning my-5">
        <thead>
          <tr>
            <th scope="col">Titre Principal</th>
            <th scope="col">Button </th>
            <th scope="col">ACTIONS</th>

          </tr>
        </thead>
        @foreach ($servicePrime as $i)
        <tbody>
          <tr>
            <td>{{ $i->titre }}</td>
            <td>{{ $i->button }}</td>

            <td>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target=".edit25-{{ $i->id }}">Edit</button>
                @include('servicePrime.edit')
                

            </td>
         
        </tbody>
            
        @endforeach
      </table>


    <h1 class="text-center text-danger">Table iconePrime</h1>  
      <table class="table table-succes my-5 ">
          <thead>
            <tr>
              <th scope="col">Titre</th>
              <th scope="col">Texte </th>
              <th scope="col">Icone </th>

              <th scope="col">ACTIONS</th>
  
            </tr>
          </thead>
          @foreach ($iconePrime as $i)
          <tbody>
            <tr>
              <td>{{ $i->titre }}</td>
              <td>{{ $i->text }}</td>
              <td><i class="{{ $i->icone }} h1 m-0 p-0"></i></td>

  
              <td>
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".edit26-{{ $i->id }}">Edit</button>
                  @include('iconePrime.edit')
                  
  
              </td>
           
          </tbody>
              
          @endforeach
        </table>

        <h1 class="text-center text-danger">Table BlogRapid</h1>  
        <div class="text-center">
          <button type="button" class="btn btn-warning text-white my-5" data-toggle="modal" data-target=".blog">Créez des blogs</button>
          @include('blogRapid.create')
        </div>
      <table class="table table-dark my-5">
          <thead>
            <tr>
              <th scope="col">Image</th>
              <th scope="col">Titre</th>
              <th scope="col">Texte </th>
              <th scope="col">ACTIONS</th>
  
            </tr>
          </thead>
          @foreach ($blogRapid as $i)
          <tbody>
            <tr>
              <td><img class="w-75" src="{{ asset("img/$i->image") }}" alt=""></td>
              <td>{{ $i->titre }}</td>
              <td>{{ $i->text }}</td>

  
              <td>
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".edit27-{{ $i->id }}">Edit</button>
                  @include('blogRapid.edit')

                  <form action="/blogRapid/{{ $i->id }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">Delete</button>

                  
                  </form>
                  
  
              </td>
           
          </tbody>
              
          @endforeach
        </table>



     


      
</section>
    
@endsection