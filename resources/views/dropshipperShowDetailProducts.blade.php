@extends('dropshipperBase')
@section('content')
<!-- Header -->
<!-- Header -->
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
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
          <div class="row">
            <div class="product-detail-images col col-lg-4">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <a href="{{ url('/img/theme/product.jpg') }}">
                      <img class="d-block w-100" src="{{ url('/img/theme/product.jpg') }}" alt="First slide" style="height: 250px;">
                    </a>
                  </div>
                  <div class="carousel-item">
                    <a href="{{ url('/img/theme/product2.jpg') }}">
                      <img class="d-block w-100" src="{{ url('/img/theme/product2.jpg') }}" alt="Second slide" style="height: 250px;">
                    </a>
                  </div>
                  <div class="carousel-item">
                    <a href="{{ url('/img/theme/product3.jpg') }}">
                      <img class="d-block w-100" src="{{ url('/img/theme/product3.jpg') }}" alt="Third slide" style="height: 250px;">
                    </a>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <div class="col col-lg-8 product-detail-information">
              <div class="row">
                <h2>Gaming Headset</h2>
              </div>
              <div class="row">
                <div class="product-detail-info">
                  <i class="fas fa-star"></i> <b>4.5</b> | <b>90</b> views | <b>20</b> sold | Category: <b>Electronic</b>
                </div>
              </div>
              <div class="row">
                <div class="product-detail-price">
                  Rp500.000
                </div>
              </div>
              <div class="row">
                <div class="form-group">
                  <input type="number" name="qty" id="qty" class="form-control" placeholder="Qty">
                </div>
                &nbsp;
                <div class="form-group">
                  <select name="variant" id="variant" class="form-control">
                    <option value="Biru">Biru</option>
                    <option value="Merah">Merah</option>
                  </select>
                </div>
                &nbsp;
                <div class="product-detail-stock">

                  Stock : 30
                </div>


              </div>
              <div class="row">
                <div class="product-detail-button">
                  <button class="btn btn-secondary">Add to Catalogue</button>
                  <button class="btn btn-primary">Add to Cart</button>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <!-- Card body -->
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-auto">
              <!-- Avatar -->
              <div class="avatar avatar-xl rounded-circle">
                <img alt="Image placeholder" src="{{ url('/img/theme/team-1.jpg') }}">
              </div>
            </div>
            <div class="col ml--2">
              <h4 class="mb-0">
                <a href="">Andi Store</a>
              </h4>
              <p class="text-sm text-muted mb-0">DKI Jakarta</p>
              <span class="gold">●</span>
              <small>Gold Level</small>
            </div>
            <div class="col-auto">
              <button type="button" class="btn btn-sm btn-primary">Chat</button>
              <button type="button" class="btn btn-sm btn-primary">Store</button>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <div class="col">
            <div class="row">
              <h3>Product Description</h3>
            </div>
            <div class="row">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur laborum vitae officia labore laudantium quam non dolorem, distinctio ipsum ipsam pariatur asperiores illo mollitia rerum vero! Explicabo omnis dignissimos atque!</p>

            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <div class="col">
            <div class="row">
              <h3>Reviews</h3>
            </div>
            <br>
            <div class="row">
              <div class="col-auto">
                <div class="avatar avatar-m rounded-circle">
                  <img alt="Image placeholder" src="{{ url('/img/theme/team-1.jpg') }}">
                </div>
              </div>
              <div class="col">
                <div class="row">
                  <h5 class="mb-0">Bagas Pramudya</h5>
                </div>
                <div class="row"><i class="fas fa-star gold"></i><i class="fas fa-star gold"></i><i class="fas fa-star gold"></i><i class="fas fa-star gold"></i></div>
                <div class="row">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque similique in quasi modi maxime, possimus enim dolore, nemo expedita optio sint porro inventore tenetur voluptatum recusandae voluptas quo voluptatem. Natus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit doloribus corrupti vero nisi. Enim rerum sed deserunt labore! Sed deserunt fuga non doloremque sint quaerat obcaecati rerum aperiam saepe laboriosam.</p>
                </div>
                <div class="row">
                  <p class="text-sm text-muted mb-0">03-02-2022 16:07 WIB</p>
                </div>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-auto">
                <div class="avatar avatar-m rounded-circle">
                  <img alt="Image placeholder" src="{{ url('/img/theme/team-1.jpg') }}">
                </div>
              </div>
              <div class="col">
                <div class="row">
                  <h5 class="mb-0">Bagas Pramudya</h5>
                </div>
                <div class="row"><i class="fas fa-star gold"></i><i class="fas fa-star gold"></i><i class="fas fa-star gold"></i><i class="fas fa-star gold"></i></div>
                <div class="row">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque similique in quasi modi maxime, possimus enim dolore, nemo expedita optio sint porro inventore tenetur voluptatum recusandae voluptas quo voluptatem. Natus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit doloribus corrupti vero nisi. Enim rerum sed deserunt labore! Sed deserunt fuga non doloremque sint quaerat obcaecati rerum aperiam saepe laboriosam.</p>
                </div>
                <div class="row">
                  <p class="text-sm text-muted mb-0">03-02-2022 16:07 WIB</p>
                </div>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-auto">
                <div class="avatar avatar-m rounded-circle">
                  <img alt="Image placeholder" src="{{ url('/img/theme/team-1.jpg') }}">
                </div>
              </div>
              <div class="col">
                <div class="row">
                  <h5 class="mb-0">Bagas Pramudya</h5>
                </div>
                <div class="row"><i class="fas fa-star gold"></i><i class="fas fa-star gold"></i><i class="fas fa-star gold"></i><i class="fas fa-star gold"></i></div>
                <div class="row">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque similique in quasi modi maxime, possimus enim dolore, nemo expedita optio sint porro inventore tenetur voluptatum recusandae voluptas quo voluptatem. Natus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit doloribus corrupti vero nisi. Enim rerum sed deserunt labore! Sed deserunt fuga non doloremque sint quaerat obcaecati rerum aperiam saepe laboriosam.</p>
                </div>
                <div class="row">
                  <p class="text-sm text-muted mb-0">03-02-2022 16:07 WIB</p>
                </div>
              </div>
            </div>
            <hr>
            <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">
                  <i class="fa fa-angle-left"></i>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item active"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">
                  <i class="fa fa-angle-right"></i>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection