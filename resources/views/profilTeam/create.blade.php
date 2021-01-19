<div class="modal fade create20" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content p-5">
          <h1 class="text-center text-danger">Créez les profils de la team</h1>
        <form method="POST" action="{{ route("profilTeam.store") }}" enctype="multipart/form-data">
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
              <input type="file"   id="formGroupExampleInput"  name="image">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Prenom</label>
                <input type="text" class="form-control"  id="formGroupExampleInput"  name="prenom">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput">Fonction</label>
                <input type="text" class="form-control"  id="formGroupExampleInput"  name="fonction">
              </div>
             
              <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary">SUBMIT</button>
              </div>

          </form>
      </div>
    </div>
  </div>