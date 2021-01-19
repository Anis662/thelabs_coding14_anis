<div class="modal fade profil-{{ Auth::user()->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content p-5">
          <h1 class="text-center text-danger">Editez votre profil</h1>
        <form method="POST" action="/user/{{ Auth::user()->id}}" enctype="multipart/form-data">
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
              <label for="formGroupExampleInput">NAME</label>
              <input type="text" class="form-control" id="formGroupExampleInput" value="{{ Auth::user()->name}}" name="name">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">EMAIL</label>
              <input type="email" class="form-control" id="formGroupExampleInput2" value="{{ Auth::user()->email}}" name="email">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">PASSWORD</label>
                <input type="password" class="form-control" id="formGroupExampleInput2" value="{{ Auth::user()->password }}" name="password">
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
                <label for="formGroupExampleInput2" class="text-danger">PHOTO</label>
                <input type="file"  id="formGroupExampleInput2" value="{{ Auth::user()->photo }}" name="photo">
              </div>
              <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-info">SUBMIT</button>
              </div>

          </form>
      </div>
    </div>
  </div>