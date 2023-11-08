<h1 class="page-header">Personas</h1>


<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Persona&a=Crud">Agregar Persona</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th >caducidad</th>
            <th>precio</th>
            <th>tamano</th>
            <th >Direccion</th>
            <th >Correo</th>
            <th ></th>
            <th ></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->caducidad; ?></td>
            <td><?php echo $r->precio; ?></td>
            <td><?php echo $r->tamano; ?></td>
            <td><?php echo $r->direccion; ?></td>
            <td><?php echo $r->email; ?></td>
            <td>
                <i class="glyphicon glyphicon-edit"><a href="?c=Persona&a=Crud&Idproducto=<?php echo $r->Idproducto; ?>"> Editar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="?c=Persona&a=Eliminar&Idproducto=<?php echo $r->Idproducto; ?>"> Eliminar</a></i>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
