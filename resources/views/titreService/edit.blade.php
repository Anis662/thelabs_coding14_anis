<div class="modal fade edit9-{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content p-5">
          <h1 class="text-center text-danger">Editez les TitresService</h1>
        <form method="POST" action="/titreService/{{ $i->id }}">
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
              <label for="formGroupExampleInput">Titre</label>
              <input type="text" class="form-control" placeholder="Mettre le mot que vous voulez en couleur entreparenthèse"  id="formGroupExampleInput" value="{{ $i->titre }}" name="titre">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">Button</label>
              <input type="text" class="form-control"  id="formGroupExampleInput" value="{{ $i->button }}" name="button">
            </div>
            
           
              <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary">SUBMIT</button>
              </div>

          </form>
      </div>
    </div>
  </div>