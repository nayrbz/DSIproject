{!! Form::open(array('url' => 'grados', 'method' => 'GET', 'autocomplete' => 'off', 'grado' => 'search')) !!}
  <div class="form-group">
    <div class="input-group">
      <input type="text" class="form-control" name="searchText", placeholder="Buscar", value="{{ $searchText }}"></input>
      <span class="input-group-btn">
        <button type="submit" class="btn btn-default">
          <i class="fa fa-search" aria-hidden="true"></i>
        </button>
      </span>
    </div>
  </div>
{!! Form::close() !!}