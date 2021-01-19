<div class="modal fade create0" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content p-5">
          <h1 class="text-center text-danger">Créez le Banner</h1>
        <form method="POST" action="{{ route("banner.store") }}" enctype="multipart/form-data">
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
              <input type="file"  id="formGroupExampleInput" name="image">
            </div>
            {{-- <div class="form-group">
                <label for="formGroupExampleInput">Image2</label>
                <input type="file"  id="formGroupExampleInput"  name="image2">
              </div> --}}
              {{-- <div class="form-group">
                <label for="formGroupExampleInput">Slogan</label>
                <input type="text" class="from-group"  id="formGroupExampleInput"  name="slogan">
              </div>   --}}
           
              <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary">SUBMIT</button>
              </div>

          </form>
      </div>
    </div>
  </div>