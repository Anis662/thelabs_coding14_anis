<div class="modal fade edit8-{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content p-5">
          <h1 class="text-center text-danger">Editez les Testimonials</h1>
        <form method="POST" action="/testimonial/{{ $i->id }}" enctype="multipart/form-data">
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
                <label for="formGroupExampleInput">Texte</label>
                <input type="text"  id="formGroupExampleInput" value="{{ $i->text }}" name="text">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput">Prenom</label>
                <input type="text" class="from-group"  id="formGroupExampleInput" value="{{ $i->prenom }}" name="prenom">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput">Fonction</label>
                <input type="text" class="from-group"  id="formGroupExampleInput" value="{{ $i->fonction }}" name="fonction">
              </div>
           
              <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary">SUBMIT</button>
              </div>

          </form>
      </div>
    </div>
  </div>