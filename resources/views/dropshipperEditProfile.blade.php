@extends('dropshipperBase')
@section('content')
<!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Edit profile</h6>
            </div>
            <div class="col-lg-6 col-5 text-right">
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
              <form action="" method="post">
             <div class="row flex align-center">
                <div class="col-lg-2 col-xl-1">
                    <img src="{{url('/img//theme/team-1.jpg')}}" alt="" class="profile-image">
                </div>
                <div class="col-lg-10 col-xl-11">
                    <input type="file" name="profile-image" id="">
                </div>
             </div>
             <hr class="my-4">
             <h6 class="heading-small text-muted mb-4">General Information</h6>
             <div class="pl-lg-4">
                <div class="form-group">
                  <label for="email" class="form-control-label">Email</label>
                  <input type="text" name="email" class="form-control" value="william@gmail.com">
                </div>
                <div class="form-group">
                  <label for="phone-number" class="form-control-label">Phone Number</label>
                  <input type="number" name="phone-number" class="form-control" value="081362625959">
                </div>
                <div class="form-group">
                  <label for="ktp-number" class="form-control-label">KTP Number</label>
                  <input type="number" name="ktp-number" class="form-control" value="152111366026665">
                </div>
             </div>
             <hr class="my-4">
             <h6 class="heading-small text-muted mb-4">Address Information</h6>
             <div class="pl-lg-4">
                <div class="form-group">
                  <label for="street" class="form-control-label">Street</label>
                  <input type="text" name="street" class="form-control" value="Jl. M. H. Thamrin No. 1">
                </div>
                <div class="form-group">
                  <label for="village" class="form-control-label">Village</label>
                  <input type="text" name="village" class="form-control" value="Kemanggisan">
                </div>
                <div class="form-group">
                  <label for="sub-district" class="form-control-label">Sub-district</label>
                  <input type="text" name="sub-district" class="form-control" value="Palmerah">
                </div>
                <div class="form-group">
                  <label for="city" class="form-control-label">City</label>
                  <input type="text" name="city" class="form-control" value="Jakarta Barat">
                </div>
                <div class="form-group">
                  <label for="province" class="form-control-label">Province</label>
                  <input type="text" name="province" class="form-control" value="DKI Jakarta">
                </div>
                <div class="form-group">
                  <label for="postal-code" class="form-control-label">Postal Code</label>
                  <input type="number" name="postal-code" class="form-control" value="11480">
                </div>
             </div>
             <hr class="my-4">
             <h6 class="heading-small text-muted mb-4">Bank Information</h6>
             <div class="pl-lg-4">
                <div class="form-group">
                  <label for="bank-name" class="form-control-label">Bank Name</label>
                  <input type="text" name="bank-name" class="form-control" value="Bank Central Asia">
                </div>
                <div class="form-group">
                  <label for="bank-account-number" class="form-control-label">Bank Account Number</label>
                  <input type="number" name="bank-account-number" class="form-control" value="0254855692">
                </div>
                <div class="form-group">
                  <label for="bank-account-name" class="form-control-label">Bank Account Name</label>
                  <input type="text" name="bank-account-name" class="form-control" value="WILLIAM ANTONY">
                </div>
             </div>
             <div class="flex space-between">
              <a href="" class="btn btn-secondary" onclick="window.history.go(-1); return false;">
              <span class="btn-inner--icon"><i class="ni ni-bold-left"></i></span>  
              <span class="btn-inner--text">Back</span>
              </a>
              <button type="submit" class="btn btn-primary">Save</button>
             </div>
             </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection