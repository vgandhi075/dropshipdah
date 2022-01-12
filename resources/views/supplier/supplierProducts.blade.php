@extends('supplier.supplierBase')
@section('content')
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            {{-- <h6 class="h2 text-white d-inline-block mb-0">Supplier</h6> --}}
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="datatables.html#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="datatables.html#">Products</a></li>
                {{-- <li class="breadcrumb-item active" aria-current="page">New Orders</li> --}}
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--6">
    <!-- Table -->
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <h3 class="mb-0">Products</h3>
                    <p class="text-sm mb-0">
                    This is an exmaple of datatable using the well known datatables.net plugin. This is a minimal setup in order to get started fast.
                    </p>
                    <div class="text-right">
                        <a href="datatables.html#" class="btn btn-sm btn-default">Add Product</a>
                    </div>
                </div>
                <div class="table-responsive py-4">
                    <table class="table table-flush" id="datatable-basic">
                    <thead class="thead-light text-center">
                        <tr>
                        <th>Number</th>
                        <th>Product</th>
                        <th>Stock</th>
                        <th>Price</th>
                        <th>Rating</th>
                        <th>Status</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @for ($i = 1; $i < 40; $i++)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>
                                    <img src="{{url('/img/icons/common/adidas.png')}}" class="avatar">
                                    Adidas 36{{$i}} Advantage
                                </td>
                                <td>10</td>
                                <td>Rp 799.000</td>
                                <td>4.3</td>
                                <td>Active</td>
                                <td class="text-center">
                                    <div class="text-center">
                                        <a href="datatables.html#" class="btn btn-sm btn-default">Edit</a>
                                        <a href="datatables.html#" class="btn btn-sm btn-success">Delete</a>
                                        <a href="datatables.html#" class="btn btn-sm btn-warning">Deactive</a>
                                    </div>
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
