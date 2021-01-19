<div class="modal fade edit6-{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content p-5">
          <h1 class="text-center text-center">Editez About</h1>
        <form method="POST" action="/aboutContent/{{ $i->id }}" enctype="multipart/form-data">
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
              <input type="text" class="from-control" id="formGroupExampleInput" placeholder="Mettre le mot que vous voulez en couleur entreparenthèse" value="{{ $i->titre }}" name="titre">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Texte1</label>
                <input type="text"class="from-control"  id="formGroupExampleInput" value="{{ $i->text1 }}" name="text1">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput">Texte2</label>
                <input type="text" class="from-control"  id="formGroupExampleInput" value="{{ $i->text2 }}" name="text2">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput">Button</label>
                <input type="text" class="from-control"  id="formGroupExampleInput" value="{{ $i->button }}" name="button">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput">Image</label>
                <input type="file"  id="formGroupExampleInput" value="{{ $i->image }}" name="image">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput">Video</label>
                <input type="text" class="from-control"  id="formGroupExampleInput" value="{{ $i->video }}" name="video">
              </div>
           
              <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary">SUBMIT</button>
              </div>

          </form>
      </div>
    </div>
  </div>