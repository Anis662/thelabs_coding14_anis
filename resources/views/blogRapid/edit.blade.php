<div class="modal fade edit27-{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content p-5">
          <h1 class="text-center text-danger">Editez le BlogService</h1>
        <form method="POST" action="/blogRapid/{{ $i->id }}" enctype="multipart/form-data">
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
                <input type="text" class="form-control"  id="formGroupExampleInput" value="{{ $i->titre }}" name="titre">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput">Texte</label>
                <input type="text" class="form-control"  id="formGroupExampleInput" value="{{ $i->text }}" name="text">
              </div>
        
              <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary">SUBMIT</button>
              </div>

          </form>
      </div>
    </div>
  </div>