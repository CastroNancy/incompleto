<h1 class="page-header">
    <?php echo $alm->Idproducto != null ? $alm->caducidad : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Persona">Personas</a></li>
  <li class="active"><?php echo $alm->Idproducto != null ? $alm->caducidad : 'Nuevo Registro'; ?></li>
</ol>

<form action="?c=Persona&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="Idproducto" value="<?php echo $alm->Idproducto; ?>" />
    
    <div class="form-group">
        <label>Caducidad</label>
        <input type="date" name="caducidad" value="<?php echo $alm->caducidad; ?>" class="form-control" placeholder="Ingrese su nombre y Apellido" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>precio</label>
        <input type="text" name="precio" value="<?php echo $alm->precio; ?>" class="form-control" placeholder="Ingrese su precio" data-validacion-tipo="requerido|min:7" />
    </div>
    
    <div class="form-group">
        <label>tamano</label>
        <input type="text" name="FechaNacimiento" value="<?php echo $alm->tamano; ?>" class="form-control" 
        placeholder="Ingrese su tamano" data-validacion-tipo="requerido|date" />
    </div>
    
    <div class="form-group">
        <label>Dirección</label>
        <input type="text" name="direccion" value="<?php echo $alm->direccion; ?>" class="form-control" placeholder="Ingrese su dirección" data-validacion-tipo="requerido|min:8" />
    </div>
    
    <div class="form-group">
        <label>Correo</label>
        <input type="text" name="correo" value="<?php echo $alm->email; ?>" class="form-control" placeholder="Ingrese su correo electrónico" data-validacion-tipo="requerido|email" />
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>
