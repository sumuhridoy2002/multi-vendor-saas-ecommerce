<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- SB Admin 2 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.1.4/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- FontAwesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet" />
    <!-- Bootstrap JS, jQuery, SB Admin 2 JS CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.1.4/js/sb-admin-2.min.js"></script>
    <style>
        body {
            background: #f8f9fc;
        }
        .carousel-inner {
            border-radius: 1rem;
        }
        .carousel-img {
            height: 400px;
            object-fit: cover;
            width: 100%;
        }
        .card-img {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body id="page-top">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow mb-4">
        <div class="container">
            <a class="navbar-brand font-weight-bold text-primary" href="#">
                <i class="fas fa-shopping-bag"></i> {{ config('app.name', 'ShopNow') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarEcom" aria-controls="navbarEcom" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarEcom">
                <ul class="navbar-nav mr-auto ml-4">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><i class="fas fa-home mr-1"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-th-list mr-1"></i>Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-tags mr-1"></i>Deals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-address-book mr-1"></i>Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/dashboard') }}"><i class="fas fa-tachometer-alt mr-1"></i>Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt mr-1"></i>Login</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-plus mr-1"></i>Register</a>
                            </li>
                            @endif
                        @endauth
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> Cart (0)</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Slider Section -->
    <div class="container mb-5">
        <div id="ecomSlider" class="carousel slide shadow" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#ecomSlider" data-slide-to="0" class="active"></li>
                <li data-target="#ecomSlider" data-slide-to="1"></li>
                <li data-target="#ecomSlider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1513708925359-d2853ae72c53?auto=format&fit=crop&w=900&q=80" class="d-block w-100 carousel-img" alt="Shop the Best Products" onerror="this.onerror=null;this.src='https://via.placeholder.com/900x400?text=Image+Not+Found';">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="font-weight-bold text-light">Shop the Best Products</h2>
                        <p class="lead text-light">Discover the latest arrivals and exclusive offers.</p>
                        <a href="#" class="btn btn-primary btn-lg">Shop Now</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=900&q=80" class="d-block w-100 carousel-img" alt="Big Sale Weekend" onerror="this.onerror=null;this.src='https://via.placeholder.com/900x400?text=Image+Not+Found';">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="font-weight-bold text-light">Big Sale Weekend</h2>
                        <p class="lead text-light">Don't miss out on jaw-dropping discounts!</p>
                        <a href="#" class="btn btn-warning btn-lg">See Deals</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1416339306562-f3d12fefd36f?auto=format&fit=crop&w=900&q=80" class="d-block w-100 carousel-img" alt="Electronics & More" onerror="this.onerror=null;this.src='https://via.placeholder.com/900x400?text=Image+Not+Found';">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="font-weight-bold text-light">Electronics & More</h2>
                        <p class="lead text-light">Upgrade your gadget game with our top-rated picks.</p>
                        <a href="#" class="btn btn-info btn-lg">Browse Electronics</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#ecomSlider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#ecomSlider" role="button" data-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- Featured Categories -->
    <div class="container mb-5">
        <div class="row text-center align-items-end">
            <div class="col-md-3 mb-4">
                <div class="card py-4 border-0 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=400&q=80" alt="Clothing" class="mx-auto mb-3" style="height:60px; width:auto;object-fit:cover;border-radius:50%;" onerror="this.onerror=null;this.src='https://via.placeholder.com/60?text=No+Image';">
                    <h5>Clothing</h5>
                    <p class="text-muted">Trendy & affordable clothing for everyone</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card py-4 border-0 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=400&q=80" alt="Electronics" class="mx-auto mb-3" style="height:60px; width:auto;object-fit:cover;border-radius:50%;" onerror="this.onerror=null;this.src='https://via.placeholder.com/60?text=No+Image';">
                    <h5>Electronics</h5>
                    <p class="text-muted">Latest tech, gadgets and accessories</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card py-4 border-0 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1503389152951-9c3d029bd29c?auto=format&fit=crop&w=400&q=80" alt="Home & Living" class="mx-auto mb-3" style="height:60px; width:auto;object-fit:cover;border-radius:50%;" onerror="this.onerror=null;this.src='https://via.placeholder.com/60?text=No+Image';">
                    <h5>Home & Living</h5>
                    <p class="text-muted">Everything to make your house a home</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card py-4 border-0 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=400&q=80" alt="Health & Beauty" class="mx-auto mb-3" style="height:60px; width:auto;object-fit:cover;border-radius:50%;" onerror="this.onerror=null;this.src='https://via.placeholder.com/60?text=No+Image';">
                    <h5>Health & Beauty</h5>
                    <p class="text-muted">Quality products for your wellness</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Products -->
    <div class="container mb-5">
        <h3 class="font-weight-bold text-primary mb-4">Featured Products</h3>
        <div class="row">
            <!-- Product 1 -->
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?auto=format&fit=crop&w=400&q=80" alt="Sport Shoes" class="card-img card-img-top w-100" onerror="this.onerror=null;this.src='https://via.placeholder.com/400x200?text=No+Image';">
                    <div class="card-body text-center">
                        <h6 class="card-title font-weight-bold">Sport Shoes</h6>
                        <p class="text-muted mb-2">$49.99</p>
                        <a href="#" class="btn btn-sm btn-outline-primary"><i class="fas fa-cart-plus"></i> Add to Cart</a>
                    </div>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1511351819117-43612e87b160?auto=format&fit=crop&w=400&q=80" alt="Headphones" class="card-img card-img-top w-100" onerror="this.onerror=null;this.src='https://via.placeholder.com/400x200?text=No+Image';">
                    <div class="card-body text-center">
                        <h6 class="card-title font-weight-bold">Headphones</h6>
                        <p class="text-muted mb-2">$29.99</p>
                        <a href="#" class="btn btn-sm btn-outline-primary"><i class="fas fa-cart-plus"></i> Add to Cart</a>
                    </div>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1461151304267-38535e780c79?auto=format&fit=crop&w=400&q=80" alt="Sofa Set" class="card-img card-img-top w-100" onerror="this.onerror=null;this.src='https://via.placeholder.com/400x200?text=No+Image';">
                    <div class="card-body text-center">
                        <h6 class="card-title font-weight-bold">Sofa Set</h6>
                        <p class="text-muted mb-2">$199.99</p>
                        <a href="#" class="btn btn-sm btn-outline-primary"><i class="fas fa-cart-plus"></i> Add to Cart</a>
                    </div>
                </div>
            </div>
            <!-- Product 4 -->
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=400&q=80" alt="Skincare Pack" class="card-img card-img-top w-100" onerror="this.onerror=null;this.src='https://via.placeholder.com/400x200?text=No+Image';">
                    <div class="card-body text-center">
                        <h6 class="card-title font-weight-bold">Skincare Pack</h6>
                        <p class="text-muted mb-2">$24.99</p>
                        <a href="#" class="btn btn-sm btn-outline-primary"><i class="fas fa-cart-plus"></i> Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action / Newsletter -->
    <div class="container py-5 mb-5">
        <div class="card p-4 text-center shadow-sm border-0">
            <h4 class="mb-4 font-weight-bold text-primary">Never miss a deal!</h4>
            <form class="form-inline d-flex justify-content-center">
                <div class="form-group mb-2 mr-2">
                    <input type="email" class="form-control" placeholder="Enter your email address" required>
                </div>
                <button type="submit" class="btn btn-primary mb-2">
                    <i class="fas fa-envelope mr-1"></i>Subscribe
                </button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white shadow py-4 mt-auto">
        <div class="container text-center">
            <div class="mb-2">
                <a href="#" class="text-primary mx-2"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-primary mx-2"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-primary mx-2"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-primary mx-2"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="small text-muted">
                &copy; {{ date('Y') }} {{ config('app.name', 'ShopNow') }}. All Rights Reserved.
            </div>
        </div>
    </footer>

    <script>
        $('.carousel').carousel({
            interval: 4500
        });
    </script>
</body>
</html>
