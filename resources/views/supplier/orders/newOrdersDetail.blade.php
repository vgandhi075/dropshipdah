@extends('supplier.supplierBase')
@section('content')
<!-- Header -->
<div class="header bg-primary pb-3">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Welcome, Vincentius Gandhi !</h6>
                </div>
            </div>
            {{-- Box atas --}}
            <div class="row">
                <div class="col-6 col-md-3">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">ORDER ID</h5>
                                <br>
                                <span class="h2 font-weight-bold mb-0">1789</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-default text-white rounded-circle shadow">
                                    <i class="ni ni-basket"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card card-stats">
                    <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">AMOUNT</h5>
                                    <br>
                                    <span class="h2 font-weight-bold mb-0">RP 798.000</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                    <i class="ni ni-money-coins"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card card-stats">
                    <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">PAYMENT TYPE</h5>
                                    <br>
                                    <span class="h2 font-weight-bold mb-0">BANK TRANSFER</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                    <i class="ni ni-collection"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card card-stats">
                    <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">TRANSACTION STATUS</h5>
                                    <br>
                                    <span class="h2 font-weight-bold mb-0">WAITING FOR PAYMENT</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                    <i class="ni ni-single-copy-04"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Box bawah --}}
        </div>
    </div>
</div>

<div class="container-fluid mt-5">
    {{-- <div class="table-responsive">
        <table class="table align-items-center">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Product Image</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Variant</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Adidas 360 Picture</th>
                    <th>Adidas 360</th>
                    <th>Size 43</th>
                    <th>Rp 599.000</th>
                    <th>1</th>
                    <th>Rp 599.000</th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>Shipping Fee</th>
                    <th>Rp 12.000</th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>Grand Total</th>
                    <th>Rp 30.000</th>
                </tr>
            </tbody>
        </table>
    </div> --}}
    <div class="card">
        <!-- Card header -->
        <div class="card-header">
          <div class="row">
            <div class="col-6">
              <h3 class="mb-0">5 Top Products</h3>
            </div>
          </div>
        </div>
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Variant</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Number</th>
                <th>Product Name</th>
                <th>Sold</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                    <p class="font-weight-bold">1</p>
                </td>
                <td class="table-user">
                  <img src="http://127.0.0.1:8000/img/theme/team-1.jpg" class="avatar rounded-circle mr-3">
                  <b>Adidas Advantage 360</b>
                </td>
                <td>
                    <a href="tables.html#!" class="font-weight-bold">20</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
    <div id="card-decks-component" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="card-decks-component-tab">
        <div class="card-deck" style="height: 20vw">
          <div class="card">
            <div class="card-body" style="padding: 2vw">
                <div class="row">
                    <div class="col">
                        <h3 class="mb-0">Status Order Details</h3><br>
                      {{-- <p> --}}
                          Date <br>
                          Buyer's Name <br>
                          Email <br><br>
                      {{-- </p> --}}
                      {{-- <p>Buyer's Name</p>
                      <h5 class="card-title text-uppercase text-muted mb-0">Buyer's Name</h5>
                      <h5 class="card-title text-uppercase text-muted mb-0">Email</h5>
                      <h5 class="card-title text-uppercase text-muted mb-0">Transaction Log</h5> --}}
                      {{-- <span class="h2 font-weight-bold mb-0">350,897</span> --}}
                    </div>
                    <div class="col-auto">
                      {{-- <div class="icon icon-shape bg-red text-white rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                      </div> --}}
                        <br>
                        <br>
                        {{-- <p> --}}
                            2022-01-06 20:30:18 <br>
                            Joko <br>
                            Joko@gmail.com <br>
                            <li>Designers</li>
                            <li>Developers</li>
                            <li>Managers</li>
                        {{-- </p> --}}
                    </div>
                </div>
              {{-- <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          </div>
        </div>
        <div class="card-deck" style="height: 20vw">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            </div>
          </div>
    </div>
</div>

@endsection
