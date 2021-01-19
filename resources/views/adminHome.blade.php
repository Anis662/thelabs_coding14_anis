@extends('adminlte::page')
@section('content')
<section class="container">
  <h1 class="text-center text-danger">Table Titre Slogan</h1>
  
    <table class="table table-dark my-5">
        <thead>
          <tr>
            <th scope="col">Titre Slogan</th>
            <th scope="col">ACTIONS</th>

          </tr>
        </thead>
        @foreach ($titreSlogan as $i)
        <tbody>
          <tr>
            <td>{{ $i->titre }}</td>
            <td class="d-flex ">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target=".edit20-{{ $i->id }}">Edit</button>
                @include('titreSlogan.edit')
                <form action="/titreSlogan/{{ $i->id }}" method="POST">
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger mx-2">
                    Delete
                  </button>
                
                </form>

            </td>
         
        </tbody>
            
        @endforeach
      </table>


     @if (Auth::user()->role_id === 1 || Auth::user()->role_id ===2)
     <h1 class="text-center text-success">Table Banner</h1>
     <div class="text-center">
       <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".create0">Créez</button>
                   @include('banner.create')
     </div>
       <table class="table  my-5">
           <thead>
             <tr>
               <th scope="col">Image</th>
               <th scope="col">ACTIONS</th>
   
             </tr>
           </thead>
           @foreach ($banner as $i)
           <tbody>
             <tr>
               {{-- <td>
                   <img class="w-50" src="{{ asset("img/$i->image1") }}" alt="">
               </td> --}}
               <td>
                   <img class="w-50" src="{{ asset("img/$i->image") }}">
               </td>
               {{-- <td>{{ $i->slogan }}</td> --}}
               <td class="d-flex">
                   <button type="button" class="btn btn-info" data-toggle="modal" data-target=".edit4-{{ $i->id }}">Edit</button>
                   @include('banner.edit')
                   <form action="/banner/{{ $i->id }}" method="POST">
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
  
      <h1 class="text-center text-warning">Table TitreService</h1>
    
    <table class="table  my-5">
        <thead>
          <tr>
            <th scope="col">Titre</th>
            <th scope="col">Button</th>


            <th scope="col">ACTIONS</th>
          </tr>
        </thead>
        @foreach ($titreService as $i)
        <tbody>
          <tr>
            <td>
             {{ $i->titre }}
            </td>
            <td>{{ $i->button }}</td>
           
            <td>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target=".edit9-{{ $i->id }}">Edit</button>
                @include('titreService.edit')

                
            </td>
         
        </tbody>
            
        @endforeach
      </table>
      

      <h1 class="text-center text-info">Table Service</h1>
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".create5">CREATE</button>
      @include('service.create')
    <table class="table table-dark my-5">
        <thead>
          <tr>
            <th scope="col">Icone</th>
            <th scope="col">Titre</th>
            <th scope="col">Texte</th>
            <th scope="col">ACTIONS</th>
          </tr>
        </thead>
        @foreach ($serviceHome as $i)
        <tbody>
          <tr>
            <td>
              <div class="icon">
                <i class="{{ $i->icone }} h1"></i>
              </div>
            </td>
            <td>
              <h2>{{ $i->titre }}</h2>
            </td>
            <td> <p>{{ $i->text }}</p></td>
            <td class="d-flex">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target=".edit5-{{ $i->id }}">Edit</button>
                @include('service.edit')

                <form action="/serviceHome/{{ $i->id }}" method="POST">
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger mx-3">Delete</button>
                
                </form>
            </td>
         
        </tbody>
            
        @endforeach
      </table>


      <h1 class="text-center text-danger">Table About</h1>
    <table class="table table-dark my-5">
        <thead>
          <tr>
            <th scope="col">Titre</th>
            <th scope="col">Texte1</th>
            <th scope="col">Texte2</th>
            <th scope="col">Button</th>
            <th scope="col">Image</th>
            <th scope="col">Video</th>
            <th scope="col">ACTIONS</th>
          </tr>
        </thead>
        @foreach ($aboutContent as $i)
        <tbody>
          <tr>
            <td>
              {{ $i->titre }}
            </td>
            <td>
              {{ $i->text1 }}
            </td>
            <td>{{ $i->text2 }}</td>
            <td>{{ $i->button }}</td>
            <td><img class="w-75" src="{{ asset("img/$i->image")}}"></td>
            <td>{{ $i->video }}</td>
            <td>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target=".edit6-{{ $i->id }}">Edit</button>
                @include('about.edit')

                
            </td>
         
        </tbody>
            
        @endforeach
      </table>


      <h1 class="text-center text-primary">Table Testimonial</h1>
    <table class="table  my-5">
        <thead>
          <tr>
            <th scope="col">Titre</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        @foreach ($titreTesti as $i)
        <tbody>
          <tr>
            <td>{{ $i->titre }}</td>
            <td>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target=".edit7-{{ $i->id }}">Edit</button>
                @include('titreTestimonial.edit')
            </td>
        </tbody>
        @endforeach
        <table class="table table-dark my-5">
          <h1 class="text-center text-success mb-5">Table commentaire</h1>
          <div class="text-center">
            <button type="button" class="btn btn-warning text-white" data-toggle="modal" data-target=".create8">Create</button>
                  @include('testimonial.create')
          </div>
  
          <thead>
            <tr>
              <th scope="col">Text</th>
              <th scope="col">Image</th>
              <th scope="col">Prenom</th>
              <th scope="col">Fonction</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          @foreach ($testimonial as $i)
          <tbody>
            <tr>
              <td>{{ $i->text }}</td>
              <td><img src="{{ asset("/img/avatar/$i->image") }}"></td>
              <td>{{ $i->prenom }}</td>
              <td>{{ $i->fonction }}</td>
              <td class="d-flex">
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target=".edit8-{{ $i->id }}">Edit</button>
                  @include('testimonial.edit')
                  <form action="/testimonial/{{ $i->id }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger mx-3">Delete</button>
                  
                  
                  </form>
              </td>
          </tbody>
          @endforeach


        </table>


      </table>
              {{-- <h1 class="text-center">Table Titre service</h1>
      <table class="table">
        @foreach ($testimonial as $i)
        <tbody>
          <tr>
            <td>{{ $i->text }}</td>
            <td><img src="{{ asset("/img/avatar/$i->image") }}"></td>
            <td>{{ $i->prenom }}</td>
            <td>{{ $i->fonction }}</td>
            <td>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target=".edit8-{{ $i->id }}">Edit</button>
                @include('testimonial.edit')
                <form action="/testimonial/{{ $i->id }}" method="POST">
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger">Delete</button>
                
                
                </form>
            </td>
        </tbody>
        @endforeach
      </table> --}}

      <h1 class="text-center text-info my-5">Table Titre des Teams</h1>
    
    <table class="table table-dark my-5">
        <thead>
          <tr>
            <th scope="col">Titre</th>
            <th scope="col">ACTIONS</th>
          </tr>
        </thead>
        @foreach ($titreTeam as $i)
        <tbody>
          <tr>
            <td>
             {{ $i->titre }}
            </td>
           
            <td>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target=".edit10-{{ $i->id }}">Edit</button>
                @include('titreTeam.edit')

                
            </td>
         
        </tbody>
            
        @endforeach
      </table>


      <h1 class="text-center my-5 text-warning">Table des profils de la Team</h1>
      <div class="text-center">

        <button type="button" class="btn btn-warning text-white" data-toggle="modal" data-target=".create20">Create</button>
                @include('profilTeam.create')
      </div>
    
    <table class="table my-5">
        <thead>
          <tr>
            <th scope="col">Image</th>
            <th scope="col">Prenom</th>
            <th scope="col">Fonction</th>
            <th scope="col">Position</th>
            <th scope="col">ACTIONS</th>
          </tr>
        </thead>
        @foreach ($profilTeam as $i)
        <tbody>
          <tr>
            <td>
             <img class="w-75" src="{{ asset("/img/team/$i->image") }}" alt="">
            </td>
            <td>{{ $i->prenom }}</td>
            <td>{{ $i->fonction }}</td>
            <td>{{ $i->position }}</td>
           
            <td class="d-flex">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target=".edit12-{{ $i->id }}">Edit</button>
                @include('profilTeam.edit')
                <form action="/profilTeam/{{ $i->id }}" method="POST">
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger mx-3">Delete</button>
                
                </form>

                
            </td>
         
        </tbody>
            
        @endforeach
      </table>


      <h1 class="text-center text-success">Table Ready</h1>
  
      <table class="table table-dark my-5">
          <thead>
            <tr>
              <th scope="col">Titre </th>
              <th scope="col">Texte </th>
              <th scope="col">Contenu du button </th>
              <th scope="col">ACTIONS</th>
  
            </tr>
          </thead>
          @foreach ($ready as $i)
          <tbody>
            <tr>
              <td>{{ $i->titre }}</td>
              <td>{{ $i->text }}</td>
              <td>{{ $i->button }}</td>

              <td>
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target=".edit21-{{ $i->id }}">Edit</button>
                  @include('ready.edit')
                 
  
              </td>
           
          </tbody>
              
          @endforeach
        </table>



      <h1 class="text-center text-info">Table HomeContact</h1>
  
      <table class="table  my-5">
          <thead>
            <tr>
              <th scope="col">Titre1</th>
              <th scope="col">Texte </th>
              <th scope="col">Titre2 </th>
              <th scope="col">Info1</th>
              <th scope="col">Info2 </th>
              <th scope="col">Info3 </th>
              <th scope="col">Info4 </th>
              <th scope="col">Contenu du boutton</th>
              <th scope="col">ACTIONS</th>
  
            </tr>
          </thead>
          @foreach ($homeContact as $i)
          <tbody>
            <tr>
              <td>{{ $i->titre1}}</td>
              <td>{{ $i->text }}</td>
              <td>{{ $i->titr2 }}</td>
              <td>{{ $i->info1 }}</td>
              <td>{{ $i->info2 }}</td>
              <td>{{ $i->info3 }}</td>
              <td>{{ $i->info4 }}</td>
              <td>{{ $i->button }}</td>

              <td>
                @can('update', $i)
                <button type="button" class="btn btn-info" data-toggle="modal" data-target=".edit22-{{ $i->id }}">Edit</button>
                @include('homeContact.edit')
                  
                @endcan
                 
  
              </td>
           
          </tbody>
              
          @endforeach
        </table>
  
     
     


      
</section>
    
@endsection