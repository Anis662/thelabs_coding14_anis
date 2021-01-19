@extends('adminlte::page')
@section('content')


<section class="container">
  @if (Auth::user()->role_id === 1 || Auth::user()->role_id === 2 || Auth::user()->role_id === 3)
  
  <h1 class="text-center text-danger">Les Articles</h1>
  <div class="text-center">
    <button type="button" class="btn btn-info" data-toggle="modal" data-target=".article">Create</button>
            @include('article.create')
  
  </div>
<table class="table table-dark my-5">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Image</th>
      <th scope="col">Titre</th>
      <th scope="col">Texte</th>
      <th scope="col">Tag_id</th>
      <th scope="col">Category_id</th>
      <th scope="col">Description</th>
      <th scope="col">ACTIONS</th>

    </tr>
  </thead>
  @foreach ($article as $i)
  <tbody>
    <tr>
      <td>{{ $i->id }}</td>
      <td><img class="w-75" src="{{ asset("img/blog/$i->image") }}" alt=""></td>
      <td>{{ $i->titre }}</td>
      <td>{{ $i->text }}</td>
      <td>
        @foreach ($i->categories as $item)
            {{ $item->name }}
        @endforeach

      </td>
      <td>
        @foreach ($i->tags as $item)
            {{ $item->name }}
        @endforeach

      </td>
     
      <td>{{ $i->description }}</td>
      <td>
        <form action="/send-article/{{ $i->id }}" method="post">
            @csrf
            <div class="form-group">

                <select class="form-control" name="verification_id" style="width: 10rem">

                    @foreach ($verification as $x)
                    <option value="{{ $x->id }}">{{ $x->name }}</option>

                    @endforeach


                </select>
                <button type="submit" class="btn btn-info my-3">Définir</button>
            </div>
        </form>
    </td>
      <td class="d-flex ">
          <button type="button" class="btn btn-info" data-toggle="modal" data-target=".article1-{{ $i->id }}">Edit</button>
          @include('article.edit')
          <form action="/article/{{ $i->id }}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-danger mx-3">
              Delete
            </button>
          
          </form>

      </td>
   
  </tbody>
      
  @endforeach
</table>
@endif
     
   



      <h1 class="text-center text-success">Les Commentaires</h1>
     
  
    <table class="table  my-5">
        <thead>
          <tr>
           
          
            <th scope="col">Texte</th>
            <th scope="col">ACTIONS</th>

          </tr>
        </thead>
        @foreach ($commentaire as $i)
        <tbody>
          <tr>
           
            
            <td>{{ $i->text }}</td>
           
            <td>
                
                <form action="/commentaire/{{ $i->id }}" method="POST">
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