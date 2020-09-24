
<?php require 'views/main/header.php'; ?>

<div class="container contenedor" >

    <!-- Image and text -->
    <nav class="navbar sticky-top navbar-light bg-white" style=" display: flex; ">
        <div style="display: flex;">

            <img src="public/img/fondo-2.png" width="50" height="50" class="d-inline-block align-top" alt="" loading="lazy">
            <a class="navbar-brand d-inline-block ml-3 mt-1" href="clasificado">
            Condolencias
            </a>
        </div>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar condolencia" aria-label="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
            </form>
    </nav>

    <div class="row">
        <div class="col">

            <div class="card mb-3 mt-3" style="max-width: 540px;">
                <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="public/img/001.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>                  
                </div>
            </div>

        </div>
        <div class="col">

            <div class="card mb-3 mt-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="public/img/001.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>                  
                    </div>
                </div>

        </div>

    </div>


</div>

<?php require 'views/main/footer.php'; ?>