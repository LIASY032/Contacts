<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('style.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <title>idirectpromo</title>
</head>

<body>
    <header>
        <div class="container">
            <div
                class="padding-space row d-flex justify-content-md-between justify-content-center align-items-center ml-0 mr-0">
                <div class="best-store col">The Best Online Store</div>
                <div class="col">
                    <div class="row justify-content-end">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="col bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="col bi bi-twitter" viewBox="0 0 16 16">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="col bi bi-twitter" viewBox="0 0 16 16">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="col bi bi-youtube" viewBox="0 0 16 16">
                            <path
                                d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="col bi bi-instagram" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg>
                        <div class="col">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-person" viewBox="0 0 16 16">
                                <path
                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                            </svg>
                            <span>Login</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <a href="https://idirectpromo.24livehost.com" class="col-md-2"><img
                        src="https://idirectpromo.24livehost.com/storage/settings/9o2ymU1yqvzgNAat890x2OABEWWy2VPNGiWN6H2V.png"
                        class="logo" /></a>
                <div class="col-md-5 middle-nav-display">
                    <div class="row middle-nav row-cols-3">
                        <div class="col">
                            <div class="row">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    class="bi bi-gift col-md-4 middle-nav-icon" viewBox="0 0 16 16">
                                    <path
                                        d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z" />
                                </svg>
                                <div class="col-md-8">
                                    <span> Over 1500 </span>
                                    Products Online
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    class="middle-nav-icon col-md-4 bi bi-calendar3" viewBox="0 0 16 16">
                                    <path
                                        d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                    <path
                                        d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                </svg>
                                <div class="col-md-8">
                                    <span> 20+ Years </span>
                                    in industry
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    class="middle-nav-icon col-md-4 bi bi-award" viewBox="0 0 16 16">
                                    <path
                                        d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z" />
                                    <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
                                </svg>
                                <div class="col-md-8">
                                    <span> Quality + Services </span>
                                    Lowest Prices
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="search" aria-label="Search..."
                            id="search" />
                        <span class="input-group-text">
                            <div id="search">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="col-md-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-bag" viewBox="0 0 16 16">
                        <path
                            d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                    </svg>
                    0 item(s)
                </div>
            </div>
        </div>
        <div class="bottom-nav">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-light">
                    <div class="container-fluid">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                View All Projects
                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </div>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#">Hot Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Brands</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Sourcing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Clearance</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Eco Friendly</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About US</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <div class="padding-space carousel slide" data-bs-ride="carousel" id="carouselExampleControls">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://idirectpromo.24livehost.com/storage/banner_images/1659338454_08012022072054_banner_.jpg"
                        class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="https://idirectpromo.24livehost.com/storage/banner_images/1659338454_08012022072054_banner_.jpg"
                        class="d-block w-100" alt="..." />
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container text-center">
            <div class="the-best-product padding-space">
                THE BEST PROMOTIONAL PRODUCTS
            </div>
            <div class="best-product-content">
                <h1 class="padding-space">Online store in Australia</h1>
                <p class="padding-space">
                    We are the team to help you to find the Right Products (WITH
                    QUALITY) Best Prices (GUARANTEED) Direct from manufacturers
                </p>
                <p>
                    More than 20 years of selling promotional products in the world
                    Inhouse decoration services Vast range of products online,
                    continuing to expand Professional services
                </p>
                <p>
                    Over the years, we have won and surely will continue to win a great
                    reputation of 'On-Time Delivery' from our clients. If you have an
                    urgent job and need help, please contact us.
                </p>
            </div>
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                        data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                        aria-selected="true">
                        Why idirectpromo
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                        data-bs-target="#profile-tab-pane" type="button" role="tab"
                        aria-controls="profile-tab-pane" aria-selected="false">
                        Latest Products
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                        data-bs-target="#contact-tab-pane" type="button" role="tab"
                        aria-controls="contact-tab-pane" aria-selected="false">
                        Best Seller
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active padding-space" id="home-tab-pane" role="tabpanel"
                    aria-labelledby="home-tab" tabindex="0">
                    Lorem Ipsum has been the industry's standard dummy text ever since
                    the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only
                    five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus
                    PageMaker including versions of Lorem Ipsum
                </div>
                <div class="tab-pane fade padding-space" id="profile-tab-pane" role="tabpanel"
                    aria-labelledby="profile-tab" tabindex="0">
                    <div class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row justify-content-around">
                                    <div class="card col-md-3" style="width: 18rem">
                                        <img src="https://idirectpromo.24livehost.com/image/resizeCanvas/300/300/product_images/1663080193_09132022144313product.jpg"
                                            class="card-img-top" alt="..." />
                                        <div class="card-body">
                                            <h5 class="card-title">Miami Drink Bottom</h5>
                                            <p class="card-text">
                                                <span>From: $9.40</span>
                                                MOQ: 25
                                            </p>
                                            <a href="#" class="btn btn-outline-primary">See Products</a>
                                        </div>
                                    </div>
                                    <div class="card col-md-3" style="width: 18rem">
                                        <img src="https://idirectpromo.24livehost.com/image/resizeCanvas/300/300/product_images/1663068169_09132022112249product.jpg"
                                            class="card-img-top" alt="..." />
                                        <div class="card-body">
                                            <h5 class="card-title">Jelly Bean in Bag 50g</h5>
                                            <p class="card-text">
                                                <span>From: $0.35</span>
                                                MOQ: 100
                                            </p>
                                            <a href="#" class="btn btn-outline-primary">See Products</a>
                                        </div>
                                    </div>
                                    <div class="card col-md-3" style="width: 18rem">
                                        <img src="https://idirectpromo.24livehost.com/image/resizeCanvas/300/300/product_images/1661339785_08242022111625product.jpg"
                                            class="card-img-top" alt="..." />
                                        <div class="card-body">
                                            <h5 class="card-title">Plastic bags</h5>
                                            <p class="card-text">
                                                <span>From: $1.00</span>
                                                MOQ: 120
                                            </p>
                                            <a href="#" class="btn btn-outline-primary">See Products</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                    tabindex="0">
                    <div id="carouselitem" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://idirectpromo.24livehost.com/storage/banner_images/1659338454_08012022072054_banner_.jpg"
                                    class="d-block w-100" alt="..." />
                            </div>
                            <div class="carousel-item">
                                <img src="https://idirectpromo.24livehost.com/storage/banner_images/1659338454_08012022072054_banner_.jpg"
                                    class="d-block w-100" alt="..." />
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselitem"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselitem"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="policy padding-space">
            <div class="row justify-content-between text-center padding-space align-content-stretch">
                <div class="col-md-3">
                    <div class="policy-item">
                        <figure>
                            <img src="https://idirectpromo.24livehost.com/front/img/express.png" />
                        </figure>
                        <div class="delivery-content">
                            <h3>Express Services</h3>
                            <p>24/7 amazing services</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="policy-item">
                        <figure>
                            <img src="https://idirectpromo.24livehost.com/front/img/free-delivery.png" />
                        </figure>
                        <div class="delivery-content">
                            <h3>Free Delivery</h3>
                            <p>Free Delivery services</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="policy-item">
                        <figure>
                            <img src="https://idirectpromo.24livehost.com/front/img/our-gaurantee.png" />
                        </figure>
                        <div class="delivery-content">
                            <h3>Our Guarantee</h3>
                            <p>Guarantee services</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="policy-item">
                        <figure>
                            <img src="https://idirectpromo.24livehost.com/front/img/best-price.png" />
                        </figure>
                        <div class="delivery-content">
                            <h3>Best Prices &amp; Offers</h3>
                            <p>Order $50 or more</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container padding-space">
            <h1 class="padding-space find-answer">Find Your Answers</h1>
            <div class="row padding-space">
                <div class="row accordion row-cols-lg-2">
                    <div class="col-md-6 gap-4 vstack">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It
                                    is shown by default, until the collapse plugin adds the
                                    appropriate classes that we use to style each element. These
                                    classes control the overall appearance, as well as the
                                    showing and hiding via CSS transitions. You can modify any
                                    of this with custom CSS or overriding our default variables.
                                    It's also worth noting that just about any HTML can go
                                    within the <code>.accordion-body</code>, though the
                                    transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong>
                                    It is hidden by default, until the collapse plugin adds the
                                    appropriate classes that we use to style each element. These
                                    classes control the overall appearance, as well as the
                                    showing and hiding via CSS transitions. You can modify any
                                    of this with custom CSS or overriding our default variables.
                                    It's also worth noting that just about any HTML can go
                                    within the <code>.accordion-body</code>, though the
                                    transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It
                                    is hidden by default, until the collapse plugin adds the
                                    appropriate classes that we use to style each element. These
                                    classes control the overall appearance, as well as the
                                    showing and hiding via CSS transitions. You can modify any
                                    of this with custom CSS or overriding our default variables.
                                    It's also worth noting that just about any HTML can go
                                    within the <code>.accordion-body</code>, though the
                                    transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 gap-4 vstack">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It
                                    is shown by default, until the collapse plugin adds the
                                    appropriate classes that we use to style each element. These
                                    classes control the overall appearance, as well as the
                                    showing and hiding via CSS transitions. You can modify any
                                    of this with custom CSS or overriding our default variables.
                                    It's also worth noting that just about any HTML can go
                                    within the <code>.accordion-body</code>, though the
                                    transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong>
                                    It is hidden by default, until the collapse plugin adds the
                                    appropriate classes that we use to style each element. These
                                    classes control the overall appearance, as well as the
                                    showing and hiding via CSS transitions. You can modify any
                                    of this with custom CSS or overriding our default variables.
                                    It's also worth noting that just about any HTML can go
                                    within the <code>.accordion-body</code>, though the
                                    transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It
                                    is hidden by default, until the collapse plugin adds the
                                    appropriate classes that we use to style each element. These
                                    classes control the overall appearance, as well as the
                                    showing and hiding via CSS transitions. You can modify any
                                    of this with custom CSS or overriding our default variables.
                                    It's also worth noting that just about any HTML can go
                                    within the <code>.accordion-body</code>, though the
                                    transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container padding-space">
            <div class="row">
                <div class="col-md-12 col-lg-7 mb-4 mb-lg-0">
                    <div class="row">
                        <div class="col-md-5 mb-4 mb-md-0">
                            <h5>Help &amp; Contact</h5>
                            <ul class="row row-cols-lg-2">
                                <li class="col">
                                    <a href="https://idirectpromo.24livehost.com/page/about-us">About Us</a>
                                </li>
                                <li class="col">
                                    <a href="https://idirectpromo.24livehost.com/page/privacy-disclaimer">Privacy
                                        Disclaimer</a>
                                </li>
                                <li class="col">
                                    <a href="https://idirectpromo.24livehost.com/page/term-policy">Terms &amp;
                                        Conditions</a>
                                </li>
                                <li class="col">
                                    <a href="https://idirectpromo.24livehost.com/page/artwork-guidelines">Artwork
                                        Guidelines</a>
                                </li>
                                <li class="col">
                                    <a href="https://idirectpromo.24livehost.com/page/branding-methods">Branding
                                        Methods</a>
                                </li>
                                <li class="col">
                                    <a href="https://idirectpromo.24livehost.com/page/reviews">Reviews</a>
                                </li>
                                <li class="col">
                                    <a href="https://idirectpromo.24livehost.com/contact-us">Contact Us</a>
                                </li>
                                <li class="col">
                                    <a href="https://idirectpromo.24livehost.com/page/membership-policy">Membership
                                        Policy</a>
                                </li>
                                <li class="col">
                                    <a href="https://idirectpromo.24livehost.com/page/sample-policy">Sample Policy</a>
                                </li>
                                <li class="col">
                                    <a href="https://idirectpromo.24livehost.com/page/payment-policy">Payment
                                        Policy</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-7">
                            <h5>Categories</h5>
                            <ul class="row row-cols-lg-3">
                                <li class="col">
                                    <a href="https://idirectpromo.24livehost.com/product-list/1">Writing
                                        Instruments</a>
                                </li>
                                <li class="col">
                                    <a href="https://idirectpromo.24livehost.com/product-list/2">Bags</a>
                                </li>
                                <li class="col">
                                    <a href="https://idirectpromo.24livehost.com/product-list/3">Technology</a>
                                </li>
                                <li class="col">
                                    <a href="https://idirectpromo.24livehost.com/product-list/4">Umbrellas And
                                        Ponchos</a>
                                </li>
                                <li class="col">
                                    <a href="https://idirectpromo.24livehost.com/product-list/5">Personal Items</a>
                                </li>
                                <li class="col">
                                    <a href="https://idirectpromo.24livehost.com/product-list/6">Trade Show And
                                        Events</a>
                                </li>
                                <li class="col">
                                    <a href="https://idirectpromo.24livehost.com/product-list/7">Aprons &amp; caps</a>
                                </li>
                                <li class="col">
                                    <a href="https://idirectpromo.24livehost.com/product-list/8">Office Items</a>
                                </li>
                                <li class="col">
                                    <a href="https://idirectpromo.24livehost.com/product-list/9">Overseas Sourcing</a>
                                </li>
                                <li class="col">
                                    <a href="https://idirectpromo.24livehost.com/product-list/78">Photoframes</a>
                                </li>
                                <li class="col">
                                    <a href="https://idirectpromo.24livehost.com/product-list/81">Clothing</a>
                                </li>
                                <li class="col">
                                    <a href="https://idirectpromo.24livehost.com/product-list/82">Confectionery</a>
                                </li>
                                <li class="col">
                                    <a href="https://idirectpromo.24livehost.com/product-list/83">Test 5489</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div class="row">
                        <div class="col-sm-6 mb-4 mb-sm-0">
                            <h5>Our Courier Service</h5>
                            <div>
                                <img width="100%" src="https://idirectpromo.24livehost.com/front/img/courier.png"
                                    alt="" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h5>Easy Online Shopping</h5>
                            <ul>
                                <li>
                                    <figure>
                                        <img src="https://idirectpromo.24livehost.com/front/img/icon1.png"
                                            alt="" />
                                    </figure>
                                    Free Delivery
                                </li>
                                <li>
                                    <figure>
                                        <img src="https://idirectpromo.24livehost.com/front/img/icon2.png"
                                            alt="" />
                                    </figure>
                                    14 Days Return
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript">
        var button = document.getElementById("search");
        var input = document.getElementById("search-input");

        button.onclick = function() {
            window.location.href = `https://idirectpromo.24livehost.com/product-search?search=${input.value}`;
        };
    </script>
</body>

</html>
