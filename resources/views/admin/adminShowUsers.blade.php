@extends('admin.adminBase')
@section('content')
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            {{-- <h6 class="h2 text-white d-inline-block mb-0">Admin</h6> --}}
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="datatables.html#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="datatables.html#">Users</a></li>
                <!-- <li class="breadcrumb-item active" aria-current="page">Ongoing Orders</li> -->
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
                    <h3 class="mb-0">Users</h3>
                    <p class="text-sm mb-0">
                    This is an exmaple of datatable using the well known datatables.net plugin. This is a minimal setup in order to get started fast.
                    </p>
                </div>
                <div class="table-responsive py-4">
                    <table class="table table-flush" id="datatable-basic">
                    <thead class="thead-light text-center">
                        <tr>
                        <th>Number</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @for ($i = 1; $i < 40; $i++)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>Bocah{{ $i }}</td>
                                @if($i == 1)
                                    <td>Dropshipper</td>
                                @else
                                    <td>Supplier</td>
                                @endif
                                <td>Pending</td>
                                <td class="text-center">
                                    <div class="text-center">
                                        <a href="datatables.html#" class="btn btn-sm btn-default">Details</a>
                                        <!-- <a href="datatables.html#" class="btn btn-sm btn-success">Accept</a> -->
                                        <!-- <a href="datatables.html#" class="btn btn-sm btn-warning">Reject</a> -->
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