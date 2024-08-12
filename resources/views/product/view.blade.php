<div>
    <header class="header">
        <div class="brand">FashionHub</div>
        <div class="cart-icon">
            <i class="fas fa-bag-shopping"></i>
            <div class="notification">1</div>
        </div>
    </header>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($product->image as $index => $image)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <img src="{{ asset($image) }}" class="d-block w-100" alt="Product Image {{ $index + 1 }}" />
                            </div>
                        @endforeach
                    </div>
                    <div class="carousel-thumbnails-container text-center pt-2">
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <div class="carousel-thumbnails d-flex justify-content-center mt-2">
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
                    <div class="mb-3">
                        <label class="form-label">Choose a Color</label>
                        <br />
                        <button type="button" class="btn btn-outline-secondary me-2 rounded-circle" style="background-color: red" onclick="selectColor('red')"></button>
                        <button type="button" class="btn btn-outline-secondary me-2 rounded-circle" style="background-color: blue" onclick="selectColor('blue')"></button>
                        <button type="button" class="btn btn-outline-secondary me-2 rounded-circle" style="background-color: green" onclick="selectColor('green')"></button>
                        <button type="button" class="btn btn-outline-secondary me-2 rounded-circle" style="background-color: yellow" onclick="selectColor('yellow')"></button>
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
                                <div class="input-group">
                                    <button type="button" class="btn btn-outline-secondary" onclick="decrement()" id="decrement">
                                        -
                                    </button>
                                    <span class="btn btn-outline-secondary" id="quantity">1</span>
                                    <button type="button" class="btn btn-outline-secondary" onclick="increment()">
                                        +
                                    </button>
                                    <input type="hidden" id="quantity_input" name="quantity" value="1">
                                </div>
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
