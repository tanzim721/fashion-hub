<div>

    <header class="header">
        <div class="brand">FashionHub</div>
        <div class="cart-icon" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">
            <i class="fas fa-bag-shopping"></i>
            <div class="notification" id="notification">1</div>
        </div>
        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalToggleLabel"></h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    @if (count($product->image) > 0)
                        <div class="col-6">
                            <img src="{{ asset($product->image[0]) }}" class="d-block w-100" alt="Product Image 1" style="height: 300px;"/>
                        </div>
                    @endif
                    <div class="col-6">
                        <h3>Description</h3>
                        <p>{{ $product->name }}</p>

                    </div>
                  </div>
                  <button class="btn btn-primary float-end" data-bs-toggle="modal">Submit</button>
                </div>
              </div>
            </div>
        </div>
    </header>


    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($product->image as $index => $image)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <img src="{{ asset($image) }}" class="d-block w-100" alt="Product Image {{ $index + 1 }}" style="height: 650px; padding-right: 60px;"/>
                            </div>
                        @endforeach
                    </div>
                    <div class="carousel-thumbnails-container text-center pt-2">
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <div class="carousel-thumbnails d-flex justify-content-center mt-2 pe-4">
                            @foreach($product->image as $index => $image)
                                <img src="{{ asset($image) }}" data-bs-target="#carouselExample" data-bs-slide-to="{{ $index }}" class="img-thumbnail me-1 {{ $loop->first ? 'active' : '' }}" alt="Thumbnail {{ $index + 1 }}" />
                            @endforeach
                        </div>

                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Decoration</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Furniture</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Storages</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <strong style="padding-top: 10px;">Sideboard</strong>
                        </li>
                    </ol>
                </nav>
                    <h2>{{ $product->name }}</h2>
                    <p class="text-muted">{{ $product->subtitle }}</p>
                <hr />
                <div class="d-flex justify-content-between align-items-center">
                    <p class="text-muted price">$71.56</p>
                    <p class="reviews">
                        <button
                            type="button"
                            class="me-1 btn btn-light"
                            style="border-radius: 12px;"
                        >
                            ★ 4.8
                        </button>
                        <button
                            type="button"
                            class="me-1 btn btn-light"
                            style="border-radius: 12px;"
                        >
                            <i class="fa fa-star"></i> 67 Reviews
                        </button>
                        <br />
                        <span class="d-block mt-2">
                            93% of buyers have recommended this.
                        </span>
                    </p>
                </div>
                <hr />
                <form action="{{ route('product.selections.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}"> <!-- Add this line to include the product ID -->
                    <div class="mb-3">
                        <label class="form-label">Choose a Color</label>
                        <br />
                        <button type="button" class="color-btn selected me-2 rounded-circle" style="background-color: #E6DAC1;" onclick="selectColor('#E6DAC1')"></button>
                        <button type="button" class="color-btn me-2 rounded-circle" style="background-color: #B4D197;" onclick="selectColor('#B4D197')"></button>
                        <button type="button" class="color-btn me-2 rounded-circle" style="background-color: #ABB6E0;" onclick="selectColor('#ABB6E0')"></button>
                        <button type="button" class="color-btn me-2 rounded-circle" style="background-color: #E3B8E0;" onclick="selectColor('#E3B8E0')"></button>
                        <button type="button" class="color-btn me-2 rounded-circle" style="background-color: #A58E69;" onclick="selectColor('#A58E69')"></button>
                        <input type="hidden" id="color" name="color">
                    </div>
                    <hr />
                    <div class="mb-3">
                        <label class="form-label">Choose a Size</label>
                        <div>
                            <button type="button" class="btn btn-outline-secondary btn-sm me-1" onclick="selectSize('Small')">Small</button>
                            <button type="button" class="btn btn-outline-secondary btn-sm me-1" onclick="selectSize('Medium')">Medium</button>
                            <button type="button" class="btn btn-outline-secondary btn-sm me-1" onclick="selectSize('Large')">Large</button>
                            <button type="button" class="btn btn-outline-secondary btn-sm me-1" onclick="selectSize('Extra Large')">Extra Large</button>
                            <button type="button" class="btn btn-outline-secondary btn-sm me-1" onclick="selectSize('XXL')">XXL</button>
                            <input type="hidden" id="size" name="size">
                        </div>
                    </div>
                    <hr />
                    <div class="mb-4">
                        <div class="row align-items-center">
                            <div class="col-6 col-sm-5">
                                @livewire('quantity-counter', ['price' => $product->price])
                            </div>

                            <div class="col-6 col-sm-7">
                                <button type="submit" class="btn btn-primary w-100">
                                   $71.56 Add To Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab">Description</button>
                </li>
            </ul>
            <div class="tab-content product-section p-3" id="myTabContent">
                <div class="tab-pane fade show active" id="description" role="tabpanel">
                    <h4>Product Description</h4>
                        <p>{{ $product->description }}</p>

                    <h4>Benefits</h4>
                    <ul>
                        @foreach($product->benefits as $benefit)
                            <li>{{ $benefit }}</li>
                        @endforeach
                    </ul>

                    <h4>Product Details</h4>
                    <ul>
                        @foreach ($product->details as $detail)
                            <li>{{ $detail }}</li>
                        @endforeach
                    </ul>

                    <h4>More Details</h4>
                    <ul>
                        <li>Lunarlon midsole delivers ultra-plush responsiveness</li>
                        <li>Encapsulated Air-Sole heel unit for lightweight cushioning</li>
                        <li>Colour Shown: Ale Brown/Black/Goldtone/Ale Brown</li>
                        <li>Style: 805899-202</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
