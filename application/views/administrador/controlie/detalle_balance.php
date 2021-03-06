<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <a href="<?= base_url() ?>controlie/balances"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver</h3></a>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Ingresos y egresos</a></li>
            <li class="breadcrumb-item active">detalles</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
                <p><h4 id="">Balance correspondiente a la fecha <?= $fecha ?> </h4></p>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                <?php 
                 if (sizeof($datos->result()) == 0)
                    {
                        echo '<h3 class="text-danger">No hay datos que mostrar inserte nuevos datos !!!</h3>';
                    }
                    else
                    {

                ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Fecha</th>
                                <th>Operacion</th>
                                <th>Egreso de dinero</th>
                                <th>Ingreso</th>
                                <th>Balance</th>
                                <th></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $contador=0;
                        $ime=0;
                            foreach ($datos->result() as $filaDatos)
                            {
                                
                           ?> 
                               <tr>
                                    <td>
                                        
                                    </td>
                                    <td class="text-primary"><span><?= $filaDatos->Fecha_Balance ?></span></td>
                                    <td class="text-primary"><span><?= $filaDatos->Nombre_Operacion ?> -<?= $filaDatos->Nombre_Egreso ?></span></td>
                                    <td class="text-primary"><span>$<?= $filaDatos->Cantidad_Egreso ?></span></td>
                            <?php 
                                if ($contador == 0)
                                {
                                    $ime = $filaDatos->Total_Ingreso;
                                    echo '<td class="text-primary"><span>$ '.$filaDatos->Total_Ingreso.' </span></td>';     
                                }
                                else
                                {
                                    echo '<td class="text-primary"><span>$ '.$ime .'</span></td>';
                                }
                                $ime = $ime - $filaDatos->Cantidad_Egreso;
                            ?>
                                    
                                    <td class="text-primary"><span>$<?= $ime ?></span></td>
                                    <td class="text-primary"><span></span></td>
                                    
                                </tr>
                        <?php    
                                  $contador++;
                            }
                    }

                         ?>
                        <tr>
                            <td colspan="4" class="text-center"><h3>Total despues de gastos</h3></td>
                            <td colspan="2"> <a href="#"><span class="btn btn-primary form-control">$<?= $ime ?></span></a></td>
                        </tr>
                        <!--<tr>
                            <td colspan="2"> <a href="#"><span class="btn btn-primary form-control">Ver en PDF</span></a></td>
                        </tr>-->
                        </tbody>
                    </table>
                </div>
                    
            </div>
        </div>
    </div>
</div> 
</div>