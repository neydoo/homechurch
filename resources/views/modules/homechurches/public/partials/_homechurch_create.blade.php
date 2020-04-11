<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Submit Home As Homechurch</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="add-modal-form" method="POST" action="{{ URL::route('homechurches.store') }}">
            {{ csrf_field() }}
          <div class="modal-body">
            <div class="form-group col-md-12">
              @if($countries = Countries::getAll(['id','name as text']))
                <select name="country_id" id="country_id1" class="form-control required" required>
                    <option value=""> -- Select Country--</option>
                    @foreach ($countries as $country)
                      <option value="{{ $country->id }}">{{ $country->name }} </option>
                    @endforeach
                </select>
              @endif
            </div>
            <div class="form-group col-md-12">
              <select name="state_id" id="state_id1" class="form-control required" required>
                  <option value=""> -- Select State--</option>
              </select>
            </div>
            <div class="form-group col-md-12">
              <select name="church_id" id="church_id1" class="form-control required">
                  <option value=""> -- Select Church--</option>
              </select>
            </div>
            <div class="form-group col-md-12">
                <input type="text" name="name" id="name" class="form-control" placeholder="homechurch name" required>
            </div>
            <div class="form-group col-md-12">
                <textarea name="address" id="" cols="30" rows="3" class="form-control" placeholder="descriptive homeaddress" required></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
</div>