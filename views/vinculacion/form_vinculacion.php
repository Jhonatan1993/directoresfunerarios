
    <?php require 'views/main/header.php'; ?>

<div class="container  bg-white" >
    
    <h2 class="text-center  conozcanos-col"><strong>Formulario de inscripcion</strong> </h2>
    <form class="conozcanos-col contenedor-b bg-white">  
    <h4 class="text-center"><strong>Datos de la empresa</strong> </h4><hr>
    <div class="row ">
        <div class="col-4">
            <div class="form-group">
                <label >Nit</label>
                <input type="number" class="form-control"  >
            </div>
            <div class="form-group">
                <label >Razon social</label>
                <input type="text" class="form-control" >
            </div>
            <div class="form-group">
                <label >Direccion</label>
                <input type="text" class="form-control" >
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label >Telefono fijo</label>
                <input type="number" class="form-control" >
            </div>
            <div class="form-group">
                <label >Celular</label>
                <input type="number" class="form-control" >
            </div>
            <div class="form-group">
                <label >Ciudad</label>
                <input type="text" class="form-control" >
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label ">Departamento</label>
                <input type="text" class="form-control" >
            </div>
            <div class="form-group">
                <label >Pais</label>
                <input type="text" class="form-control" >
            </div>
            <div class="form-group">
                <label >URL(pagina web)</label>
                <input type="text" class="form-control" >
            </div>
        </div>

    </div><hr>
    <h4 class="text-center"><strong>Datos del representante legal</strong> </h4><hr>
    <div class="row">
        <div class="col-4">
        <div class="form-group">
                <label >Primer apellido</label>
                <input type="text" class="form-control" >
            </div>
            <div class="form-group">
                <label >Segundo apellido</label>
                <input type="text" class="form-control" >
            </div>
            
        </div>
        <div class="col-4">
            <div class="form-group">
                <label >Nombres</label>
                <input type="text" class="form-control" >
            </div>
            <div class="form-group">
                <label >Documento de identidad</label>
                <input type="number" class="form-control" >
            </div>
            
        </div>
        <div class="col-4">
            <div class="form-group">
                <label >Celular</label>
                <input type="number" class="form-control" >
            </div>
            <div class="form-group">
                <label >Email</label>
                <input type="email" class="form-control" >
            </div>
        </div>
    </div>
    <div class="form-group">
        <textarea class="form-control" name="" id="" cols="50" rows="5" placeholder="Defina sus servicios en unos cuantos renglones"></textarea>

    </div>
  <button type="submit" class="btn btn-secondary">Enviar</button>
</form>


</div>

<?php require 'views/main/footer.php'; ?>