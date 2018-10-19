<style type="text/css">
         .caja{
        border-color: #ffe033;
        background-color:#f7d4d0;
     }
</style>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
 <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Inicio</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Rubros</a></li>
                        <li class="breadcrumb-item active">Gestionar Rubros</li>
                    </ol>
                    <a onclick=""></a>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
<div class="container-fluid">
    <div class="row">
                    <div class="col-lg-12">
                        <div class="card">



<!-- Modal insert -->
<div class="modal fade" id="ModalInsert" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Insertar un nuevo rubro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="form-validation">

            <!-- Bread crumb -->
            <form class="form-valide" action="<?=base_url()?>Rubros/Guardar" method="post">         
                <div class="row ">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="input-group">   
                                <input type="text" class="form-control" id="Nombre_Rubro" name="Nombre_Rubro" placeholder="Nombre del rubro" required>
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button id="btnGuardar"  class="btn btn-primary" type="submit" >Guardar</button>
                    </div>
                </div>

            </form>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<!-- Modal edit -->
<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Editar Informacion de los rubros</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <!-- Bread crumb -->
            <form class="form-valide" action="<?=base_url()?>Rubros/Editar" method="post">         
                <div class="row ">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="input-group">   
                                <input type="text" class="form-control" id="Nombre_Rubro2" name="Nombre_Rubro2" placeholder="Nombre del rubro">
                                <input type="text" hidden name="ID" id="ID">
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Editar</button>
                    </div>
                </div>

            </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>


                            <div class="card-title">
                                <h3>Gestion de rubros</h3>
                            </div>
                            <div class="card-body">
                                <h6 class="card-subtitle">Usted puede descargar los datos en los siguientes formatos copiar, CSV, Excel, PDF & Print</h6>
                            <a class="btn btn-success" style="color:white; padding:10px; margin: 20px;  background-color:#512da8" data-toggle="modal" data-target="#ModalInsert"><i class="fa fa-plus-circle" style="margin:10px;" aria-hidden="true"></i>Crear nuevo rubro</a>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Id Rubro</th>
                                                <th>Nombre del Rubro</th>

                                                <th>Accion</th>
                                                
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                                foreach ($Rubro->result() as $Rubros) { 
                                                    echo "<tr>";  
                                                    echo "<td id='ni'>".$Rubros->PK_Id_Rubro."</td>";  
                                                    echo "<td id='nom'>".$Rubros->Nombre_Rubro."</td>";
                                                    $nombre = "'".$Rubros->Nombre_Rubro."'";

                                                    //echo "<td><a onclick='Eliminar($Rubros->PK_Id_Rubro)' class='btn btn-danger m-b-10 m-l-5'><i style='color:white;' class='fa fa-trash-o' aria-hidden='true'></i></a></td>";
                                                   // echo '<td><a onclick="editar('.$Rubros->PK_Id_Rubro.','.$nombre.')" class="btn btn-warning m-b-10 m-l-5" style="color:white;" data-toggle="modal" data-target="#ModalEdit"><i style="color:white;" class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>';

                                                     echo '<td><div class="dropdown" align="center">
                                                                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown"><i class="fa fa-cogs fa-lg"></i><span class="caret"></span></button>
                                                                <ul class="dropdown-menu">
                                                                    <li><a onclick="Eliminar('.$Rubros->PK_Id_Rubro.')" ><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</a></li>
                                                                     <li><a onclick="editar('.$Rubros->PK_Id_Rubro.','.$nombre.')"  data-toggle="modal" data-target="#ModalEdit"><i  class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a> </li>
                                                                        </ul>
                                                                </div></td>';
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
</div>
<script type="text/javascript">
    $(document).on("ready", function(){
        $('#Nombre_Rubro').on("change", verificar);
    });
    function Eliminar(id){
        var idU =id;
         swal({
            title: "¿Esta seguro que desea eliminar este rubro?",
            text: "Eliminando rubro",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Eliminar",
            cancelButtonText: "Cancelar",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm){
            if (isConfirm) {
                swal("Eliminada!!", "Registro eliminado con exito", "success");
                document.location= '<?= base_url()?>Rubros/Eliminar?id='+idU;
            }
            else {
                swal("Cancelado !!", "Proceso cancelado !!", "error");
            }
        });
    }
    function editar(id, nombre){
        //alert(id);
        document.all('Nombre_Rubro2').value=nombre;
        document.all('ID').value=id;
        //document.getElementById('Nombre_Rubro').value=nombre;



    }
    function verificar(){

       nombre = $('#Nombre_Rubro').val();
       //alert('Hola'+nombre);
       $.ajax({
            url:"VerificarNomRubro",
            type:"POST",
            data:{buscar:nombre},
            success:function(respuesta){
                var registro = eval(respuesta);
                if(registro.length>0){
                    //$('#pass').val('');
                    swal("Error","El nombre del rubro  ya existe","error");
                    //alert("El nombre de usuario ya existe");
                    document.getElementById('btnGuardar').disabled=true;
                     $('#Nombre_Rubro').addClass('caja');
                }
                else{
                    document.getElementById('btnGuardar').disabled=false;
                    $('#Nombre_Rubro').removeClass('caja');
                }

            }
        });

    }
</script>
