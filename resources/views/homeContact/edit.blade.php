<div class="modal fade edit22-{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content p-5">
          <h1 class="text-center text-danger">Editez les homesContact</h1>
        <form method="POST" action="/homeContact/{{ $i->id }}">
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
              <label for="formGroupExampleInput">Titre1</label>
              <input type="text" class="form-control"  id="formGroupExampleInput" value="{{ $i->titre1 }}" name="titre1">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Texte</label>
                <input type="text" class="form-control"  id="formGroupExampleInput" value="{{ $i->text }}" name="text">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput">Titre2</label>
                <input type="text" class="form-control"  id="formGroupExampleInput" value="{{ $i->titre2}}" name="titre2">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput">info1</label>
                <input type="text" class="form-control"  id="formGroupExampleInput" value="{{ $i->info1}}" name="info1">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput">info2</label>
                <input type="text" class="form-control"  id="formGroupExampleInput" value="{{ $i->info2}}" name="info2">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput">info3</label>
                <input type="text" class="form-control"  id="formGroupExampleInput" value="{{ $i->info3}}" name="info3">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput">info4</label>
                <input type="text" class="form-control"  id="formGroupExampleInput" value="{{ $i->info4}}" name="info4">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput">Contenu du boutton</label>
                <input type="text" class="form-control"  id="formGroupExampleInput" value="{{ $i->button}}" name="button">
              </div>
          
           
              <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary">SUBMIT</button>
              </div>

          </form>
      </div>
    </div>
  </div>