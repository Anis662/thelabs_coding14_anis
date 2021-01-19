<div class="modal fade edit26-{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content p-5">
          <h1 class="text-center text-danger">Editez les iconePrime</h1>
        <form method="POST" action="/iconePrime/{{ $i->id }}">
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
              <input type="text"  id="formGroupExampleInput" value="{{ $i->titre }}" name="titre">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Texte</label>
                <input type="text"  id="formGroupExampleInput" value="{{ $i->text }}" name="text">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput">Icone</label>
                <select value="{{ $i->icone }}" name="icone" >
                    @foreach ($iconePrime as $e)
                    <option>{{ $e->icone }}</option>
                        
                    @endforeach
                
                </select>
              </div>
           
           
              <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary">SUBMIT</button>
              </div>

          </form>
      </div>
    </div>
  </div>