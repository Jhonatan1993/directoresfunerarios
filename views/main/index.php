

    <?php require 'views/main/header.php'; ?>



        <div class="container mb-4" >

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="public/img/fondo-1.jpg" class="d-block w-100 "  height="415">
                    </div>
                    <div class="carousel-item">
                         <img src="public/img/paisaje.jpg" class="d-block w-100 "  height="415">
                    </div>
                    <div class="carousel-item">
                        <img src="public/img/paisaje2.jpg" class="d-block w-100 "  height="415">
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

    <?php require 'views/main/footer.php'; ?>