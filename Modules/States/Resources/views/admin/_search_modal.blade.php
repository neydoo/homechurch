<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="searchModal">Search</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="search-modal-form">
      <div class="modal-body">
        <div class="form-group col-md-12">
          @if($countries = Countries::getAll(['id','name as text']))
            <select name="country_id" id="country_id" class="form-control required">
                <option value=""> -- Select Country--</option>
                @foreach ($countries as $country)
                  <option value="{{ $country->id }}">{{ $country->name }} </option>
                @endforeach
            </select>
          @endif
        </div>
        <div class="form-group col-md-12 region_id">
            <select name="region_id" id="region_id" class="form-control required">
                <option value=""> -- Select Region--</option>
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary close" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>