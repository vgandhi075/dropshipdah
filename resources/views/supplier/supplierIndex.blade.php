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
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">New Orders</h5>
                                <br>
                                <span class="h2 font-weight-bold mb-0">3</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-default text-white rounded-circle shadow">
                                    <i class="ni ni-bell-55"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                    <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">New Return Requests</h5>
                                    <br>
                                    <span class="h2 font-weight-bold mb-0">3</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                    <i class="ni ni-curved-next"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                    <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">New Cancellation Requests</h5>
                                    <br>
                                    <span class="h2 font-weight-bold mb-0">3</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                    <i class="ni ni-ungroup"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                    <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Average Supplier Rating</h5>
                                    <br>
                                    <span class="h2 font-weight-bold mb-0">4.6</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                    <i class="ni ni-shop"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Box bawah --}}
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Total Orders</h5>
                                <br>
                                <span class="h2 font-weight-bold mb-0">120</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow">
                                    <i class="ni ni-archive-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                    <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Total Orders Completed</h5>
                                    <br>
                                    <span class="h2 font-weight-bold mb-0">118</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                    <i class="ni ni-check-bold"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                    <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Total Orders Cancelled</h5>
                                    <br>
                                    <span class="h2 font-weight-bold mb-0">3</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-yellow text-white rounded-circle shadow">
                                    <i class="ni ni-fat-remove"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                    <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Total Sales</h5>
                                    <br>
                                    <span class="h2 font-weight-bold mb-0">Rp 250.000</span>
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
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-xl-6">
          <!--* Card header *-->
          <!--* Card body *-->
          <!--* Card init *-->
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <!-- Title -->
              <h5 class="h3 mb-0">Products Sold</h5>
            </div>
            <!-- Card body -->
            <div class="card-body">
              <div class="chart">
                <!-- Chart wrapper -->
                <canvas id="chart-sales" class="chart-canvas"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                  <div class="row">
                    <div class="col-6">
                      <h3 class="mb-0">5 Top Products</h3>
                    </div>
                    {{-- <div class="col-6 text-right">
                      <a href="tables.html#" class="btn btn-sm btn-neutral btn-round btn-icon" data-toggle="tooltip" data-original-title="Edit product">
                        <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
                        <span class="btn-inner--text">Export</span>
                      </a>
                    </div> --}}
                  </div>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Number</th>
                        <th>Product Name</th>
                        <th>Sold</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                            <p class="font-weight-bold">1</p>
                        </td>
                        <td class="table-user">
                          <img src="{{url('/img/theme/team-1.jpg')}}" class="avatar rounded-circle mr-3">
                          <b>Adidas Advantage 360</b>
                        </td>
                        <td>
                            <a href="tables.html#!" class="font-weight-bold">20</a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                            <p class="font-weight-bold">2</p>
                        </td>
                        <td class="table-user">
                          <img src="{{url('/img/theme/team-1.jpg')}}" class="avatar rounded-circle mr-3">
                          <b>Adidas Advantage 360</b>
                        </td>
                        <td>
                            <a href="tables.html#!" class="font-weight-bold">20</a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                            <p class="font-weight-bold">3</p>
                        </td>
                        <td class="table-user">
                          <img src="{{url('/img/theme/team-1.jpg')}}" class="avatar rounded-circle mr-3">
                          <b>Adidas Advantage 360</b>
                        </td>
                        <td>
                            <a href="tables.html#!" class="font-weight-bold">20</a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                            <p class="font-weight-bold">4</p>
                        </td>
                        <td class="table-user">
                          <img src="{{url('/img/theme/team-1.jpg')}}" class="avatar rounded-circle mr-3">
                          <b>Adidas Advantage 360</b>
                        </td>
                        <td>
                            <a href="tables.html#!" class="font-weight-bold">20</a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                            <p class="font-weight-bold">5</p>
                        </td>
                        <td class="table-user">
                          <img src="{{url('/img/theme/team-1.jpg')}}" class="avatar rounded-circle mr-3">
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
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
          <div class="card">
            <div class="card-header">
                <h5 class="h3 mb-0">Supplier Peformance Last 90 Days</h5>
            </div>
            <div class="card-body">
                <div class="card-deck">
                    <div class="card bg-gradient-purple">
                        <!-- Card body -->
                        <div class="card-body">
                          <div class="row justify-content-between align-items-center">
                            <div class="col">
                              <img class="avatar" src="{{url('img/icons/common/silver-medal.png')}}" alt="Image placeholder" />
                            </div>
                            <div class="col-auto">
                              <span class="badge badge-lg badge-success">Supplier</span>
                            </div>
                          </div>
                          <div class="my-4">
                            <span class="h6 surtitle text-light">
                              Username
                            </span>
                            <div class="h1 text-white">Vincentius Gandhi</div>
                          </div>
                          <div class="row">
                            <div class="col">
                              <span class="h6 surtitle text-light">Average Rating</span>
                              <span class="d-block h3 text-white">4.6</span>
                            </div>
                            <div class="col">
                                <span class="h6 surtitle text-light">Total Order Completed</span>
                                <span class="d-block h3 text-white">118</span>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6">
          <!--* Card header *-->
          <!--* Card body *-->
          <!--* Card init *-->
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <!-- Surtitle -->
              {{-- <h6 class="surtitle">Performance</h6> --}}
              <!-- Title -->
              <h5 class="h3 mb-0">Total Received Orders</h5>
            </div>
            <!-- Card body -->
            <div class="card-body">
              <div class="chart">
                <!-- Chart wrapper -->
                <canvas id="chart-bars" class="chart-canvas"></canvas>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>

@endsection
