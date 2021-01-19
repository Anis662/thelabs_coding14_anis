<div class="modal fade create" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content p-5">
          <h1 class="text-center text-info">Créez des  Utilisateurs</h1>
        <form method="POST" action="{{ route("user.store") }}" enctype="multipart/form-data">
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
              <label for="formGroupExampleInput">NAME</label>
              <input type="text" class="form-control" id="formGroupExampleInput" name="name">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">EMAIL</label>
              <input type="email" class="form-control" id="formGroupExampleInput2"  name="email">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">PASSWORD</label>
                <input type="password" class="form-control" id="formGroupExampleInput2" name="password">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">ROLE_ID</label>
                <select class="form-control" name="role_id">
                  @foreach ($roles as $i) 

                    <option value="{{ $i->id }}">{{ $i->name }}</option> 

                @endforeach

                </select>

              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">PHOTO</label>
                <input type="file"  id="formGroupExampleInput2"  name="photo">
              </div>
              <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary">SUBMIT</button>
              </div>

          </form>
      </div>
    </div>
  </div>