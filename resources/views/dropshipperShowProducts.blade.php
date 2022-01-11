@extends('dropshipperBase')
@section('content')
<!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Products</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <form action="" method="get">
                <div class="row">
                  <div class="col-10">
                  <div class="form-group">
                    <input type="text" name="search" id="search" class="form-control" placeholder="Find products to sell...">
                  </div>
                  </div>
                  <div class="col-2">
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Search</button>
                  </div>

                  </div>

                </div>
              </form>
              <div class="row">
                <div class="col-2">
                  <h3 class="text-muted"><i class="fa fa-filter"></i> FILTER</h3>
                  <hr class="my-3">
                  <h6 class="heading-small text-muted mb-2">Location</h6>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="jakarta">
                    <label for="jakarta" class="custom-control-label">DKI Jakarta</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="jawa-barat">
                    <label for="jawa-barat" class="custom-control-label">Jawa Barat</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="jawa-timur">
                    <label for="jawa-timur" class="custom-control-label">Jawa Timur</label>
                  </div>

                  <hr class="my-3">
                  <h6 class="heading-small text-muted mb-2">Rating</h6>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="> 4">
                    <label for="> 4" class="custom-control-label">> 4</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="> 3">
                    <label for="> 3" class="custom-control-label">> 3</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="> 2">
                    <label for="> 2" class="custom-control-label">> 2</label>
                  </div>

                  <hr class="my-3">
                  <h6 class="heading-small text-muted mb-2">Category</h6>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Clothes">
                    <label for="Clothes" class="custom-control-label">Clothes</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Electronic">
                    <label for="Electronic" class="custom-control-label">Electronic</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Kitchen Utensils">
                    <label for="Kitchen Utensils" class="custom-control-label">Kitchen Utensils</label>
                  </div>
                </div>
                <div class="col-10">
tes
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection