<?php
session_start();
include 'template/header.php';
?>

<div class="container-fluid my-5 py-5">
    <div class="row">
        <div class="col-5 d-flex flex-column justify-content-center align-items-center ">
            <h1 class="mb-2" style="font-family: 'MaharlikaFont', sans-serif;">
                <div class="text-uppercase ">byte<span class="text-capitalize brand-color">boutique.</span></div>
            </h1>
            <h4 class="">Bytes of Style, Bits of Elegance</h4>
        </div>
        <div class="col-7">
            <img src="assets/img/mint-banner.png" alt="" class="img-fluid">
        </div>
    </div>
</div>

<div class="container-sm d-flex flex-column justify-content-center align-items-center text-white my-5 bg-gradient-custom p-4">
    <h1 class="text-center" style="font-family: 'Playfair Display', serif;">A boutique just for you</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 text-dark">
        <div class="col animate__animated">
            <div class="card h-100">
                <img src="assets/img/girl-who-s-holding-a-daffodil-.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col animate__animated">
            <div class="card h-100">
                <img src="assets/img/girl-who-s-holding-a-daffodil-.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a short card.</p>
                </div>
            </div>
        </div>
        <div class="col animate__animated">
            <div class="card h-100">
                <img src="assets/img/girl-who-s-holding-a-daffodil-.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-4">
        <a type="button" href="Products.php" class="btn btn-outline-light">See More</a>
    </div>
</div>

<br>
<div class="container-fluid bg-light shadow border text-center py-5">
    <h1>Get on the List</h1>
    <p>Shop Exclusive Promos & Save 20% on Your First Order</p>
    <div class="row d-flex justify-content-center">
        <div class="col-6">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Your email here" aria-label="email here" aria-describedby="basic-addon2">
                <span class="input-group-text btn-sky" id="basic-addon2">Subscribe</span>
            </div>
        </div>
    </div>
</div>


<?php
include 'template/footer.php';
?>