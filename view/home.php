<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Zapatos</title>
    <link rel="stylesheet" type="text/css" href="Resources/css/materialize.css">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col m12">
                <div class="card black white-text center-align">
                    <h2>Lista de Zapatos</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col m12">
                <table class="table-responsibe  ">
                    <tr class="black white-text">
                        <th>Id_Zapato</th>
                        <th>Precio</th>
                        <th>Color</th>
                        <th>Estilo</th>
                        <th>Talla</th>
                        <th>Genero</th>
                        <th>Cantidad</th>
                        <th>Eliminar</th>
                        <th>Editar</th> 
                    </tr>
                    <?php foreach($this->MODEL->listar() as $row):?>
                        <tr class="black-text white">
                            <td><?php echo $row->id_zapato?></td>
                            <td>$<?php echo $row->precio?></td>
                            <td><?php echo $row->color?></td>
                            <td><?php echo $row->estilo?></td>
                            <td><?php echo $row->talla?></td>
                            <td><?php echo $row->genero?></td>
                            <td><?php echo $row->cantidad?></td>
                            <td>
                                <a href="?c=eliminar&id=<?php echo $row->id_zapato; ?>" class="btn red">Eliminar</a>
                            </td>
                            <td>
                                <a href="?c=nuevo&id=<?php echo $row->id_zapato; ?>" class="btn orange">Editar</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </table>
                <a href="?c=nuevo" class="btn btn-block black">Nuevo</a>
            </div>
        </div>
    </div>
</body>
</html>