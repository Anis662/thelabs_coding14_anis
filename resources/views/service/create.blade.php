<div class="modal fade create5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content p-5">
          <h1 class="text-center text-danger">Créer les services</h1>
        <form method="POST" action="{{ route("serviceHome.store") }}">
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
              <label for="formGroupExampleInput">Icone</label>
              <select name="icone" value="{{ $i->icone }}" >
                  @foreach ($serviceHome as $e)
                  <option >{{ $e->icone }}</option>
                  @endforeach
              </select>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Titre</label>
                <input type="text"  id="formGroupExampleInput"  name="titre">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput">Texte</label>
                <input type="text" class="from-group"  id="formGroupExampleInput"  name="text">
              </div>
           
              <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary">SUBMIT</button>
              </div>

          </form>
      </div>
    </div>
  </div>