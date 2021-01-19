<div class="modal fade article1-{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content p-5">
          <h1 class="text-center text-danger">Editez les Articles</h1>
        <form method="POST" action="/article/{{ $i->id }}" enctype="multipart/form-data">
            @csrf
            @method("put")
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
              <input type="file"  id="formGroupExampleInput" value="{{ $i->image }}" name="image">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Titre</label>
                <input type="text" class="from-control"  id="formGroupExampleInput" value="{{ $i->titre }}" name="titre">
              </div>
              {{-- <div class="form-group">
                <label for="formGroupExampleInput">Jour</label>
               <select name="jour" value="{{ $i->jour }}">
                   <option>{{ date("d") }}</option>
               </select>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput">Mois</label>
                <select name="mois" value="{{ $i->mois }}">
                    <option>{{ date("m") }}</option>
                </select>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput">Année</label>
                <select name="annee" value="{{ $i->annee }}">
                    <option>{{ date("Y") }}</option>
                </select>
              </div> --}}

              <div class="form-group">
                <label for="formGroupExampleInput">Texte</label>
                <input type="text" class="from-control"  id="formGroupExampleInput" value="{{ $i->text }}" name="text">
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
                <label for="formGroupExampleInput">Description</label>
                <input type="text" class="from-control"  id="formGroupExampleInput" value="{{ $i->description }}" name="description">
              </div>

              
             
        
              <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary">SUBMIT</button>
              </div>

          </form>
      </div>
    </div>
  </div>