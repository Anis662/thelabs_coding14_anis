<div class="modal fade edit100-{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content p-5">
          <h1 class="text-center text-danger">Editez le Footer</h1>
        <form method="POST" action="/footer/{{ $i->id }}">
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
              <label for="formGroupExampleInput">Phrase</label>
              <input type="text" class="form-control"  id="formGroupExampleInput" value="{{ $i->phrase }}" name="phrase">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Auteur</label>
                <input type="text" class="form-control"  id="formGroupExampleInput" value="{{ $i->auteur }}" name="auteur">
            </div>
              <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary">SUBMIT</button>
              </div>

          </form>
      </div>
    </div>
  </div>