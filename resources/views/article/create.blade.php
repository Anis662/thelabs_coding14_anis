<div class="modal fade article" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content p-5">
          <h1 class="text-center text-danger">Créez des Articles</h1>
        <form method="POST" action="{{ route("article.store") }}" enctype="multipart/form-data">
            @csrf
           
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <div class="form-group">
              <label for="formGroupExampleInput">Image</label>
              <input type="file"  id="formGroupExampleInput" name="image">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Titre</label>
                <input type="text" class="from-control"  id="formGroupExampleInput"  name="titre">
              </div>
              {{-- <div class="form-group">
                <label for="formGroupExampleInput">Jour</label>
               <select name="jour">
                   <option>{{ date("d") }}</option>
               </select>
              </div> --}}
              {{-- <div class="form-group">
                <label for="formGroupExampleInput">Mois</label>
                <select name="mois" >
                    <option>Jan</option>
                    <option>Fev</option>
                    <option>Mar</option>
                    <option>Apr</option>
                    <option>Mai</option>
                    <option>Juin</option>
                    <option>Juil</option>
                    <option>Aout</option>
                    <option>Sep</option>
                    <option>Ocr</option>
                    <option>Novr</option>
                    <option>Dec</option>


                </select>
              </div>   --}}
              {{-- <div class="form-group">
                <label for="formGroupExampleInput">Année</label>
                <select name="annee">
                    <option>{{ date("Y") }}</option>
                </select>
              </div> --}}

              <div class="form-group">
                <label for="formGroupExampleInput">Texte</label>
                <input type="text" class="from-control"  id="formGroupExampleInput"  name="text">
              </div>
             
              <div class="form-group">
                <label for="formGroupExampleInput">Tag_id</label>
                <select multiple="" name="tab[]" id="">

                  @foreach ($tag as $e)
                      <option value="{{ $e->id }}" {{ in_array($e->id,old("tab") ? : [] ) ? "selected" : " "}}>{{ $e->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput">Category_id</label>
                <select multiple="" name="tab2[]" id="">

                  @foreach ($category as $i)
                      <option value="{{ $i->id }}" {{ in_array($i->id,old("tab2") ? : [] ) ? "selected" : " "}}>{{ $i->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">

                <select class="form-control" name="verification_id" style="display: none">
    
    
                        <option value="{{ $verification[1]->id }}">{{ $verification[1]->name }}</option>
    
    
                </select>
            </div>
              <div class="form-group">
                <label for="formGroupExampleInput">Description</label>
                <input type="text" class="from-control"  id="formGroupExampleInput"  name="description">
              </div>

  
             
        
              <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary">SUBMIT</button>
              </div>

          </form>
      </div>
    </div>
  </div>