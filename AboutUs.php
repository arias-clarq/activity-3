<?php
session_start();
include 'template/header.php';
?>

<div class="container text-center py-5 px-3">
    <h1 class="text-uppercase">what we do</h1>
    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique porro hic laudantium molestias rem, mollitia eligendi cum velit labore ab placeat voluptates, sed molestiae eos alias ipsa id quos doloribus.</h5>
</div>

<div class="container-fluid bg-gradient-custom-member pt-3 text-center text-white">
    <h1>Meet the members</h1>
</div>
<div class="container shadow member-row bg-white rounded">
    <div class="row row-cols-1 row-cols-md-3 g-4 py-3">
        <div class="col">
            <div class="card h-100">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a short card.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        </div>

    </div>

</div>

<?php
include 'template/footer.php';
?>