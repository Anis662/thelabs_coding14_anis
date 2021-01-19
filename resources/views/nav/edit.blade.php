<div class="modal fade nav-{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content p-5">
          <h1 class="text-center text-danger">Editez la Navbar</h1>
        <form method="POST" action="/navbar/{{ $i->id }}">
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
              <label for="formGroupExampleInput">LINK1</label>
              <input type="text" class="form-control" id="formGroupExampleInput" value="{{ $i->link1 }}" name="link1">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">LINK2</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $i->link2 }}" name="link2">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">LINK3</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $i->link3 }}" name="link3">
              </div>
          
              <div class="form-group">
                <label for="formGroupExampleInput2">LINK4</label>
                <input type="text" class="form-control"  id="formGroupExampleInput2" value="{{ $i->link4 }}" name="link4">
              </div>
              <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary">SUBMIT</button>
              </div>

          </form>
      </div>
    </div>
  </div>