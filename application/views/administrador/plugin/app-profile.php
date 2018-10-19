
<?php 
foreach ($info as $fila) {
}
foreach ($user->result() as $fila2) {
    # code...
}
?>
<style type="text/css">
    .imgs {
        width: 300px;
        height: 300px;
        

    }
    .subirImgG{
      background-color: #536DFE;
      margin: 0 auto;
      color: white;
      font-weight: bold;
      padding: 20px;
     }
      .btnCenter{
      text-align: center;
      padding: 10px;
     }
</style>
            <!-- Container fluid  -->
            <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Inicio</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Perfil</a></li>
                        <li class="breadcrumb-item active">Mi Perfil</li>
                    </ol>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-two">
                                    <header>
                                        <div class="avatar">
                                            <img src="<?=base_url() ?>plantilla/img_perfil/<?php echo $fila->Foto_Perfil;?>" alt="Imagen de perfil" />
                                        </div>
                                    </header>

                                    <h3><?php echo "Encargada del negocio: <br>".$fila->Nombre." ".$fila->Apellido?></h3>
                                    <div class="desc">
                                        <h4>Sede</h4><?php echo $fila->Nombre_Sede;?>
                                    </div>
                                    <div class="contacts">
                                        <a href=""><i class="fa fa-plus"></i></a>
                                        <a href=""><i class="fa fa-whatsapp"></i></a>
                                        <a href=""><i class="fa fa-envelope"></i></a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Mi negocio</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Información</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Editar Información</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-body">
                                        <div class="profiletimeline">
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="<?=base_url() ?>plantilla/img_perfil/<?php echo $fila->Foto_Perfil;?>" alt="Imagen de perfil" class="img-circle" /> </div>
                                                <div class="sl-right">
                                                    <div><a href="" class="link"><?php echo $fila->Nombre_Negocio; ?></a>
                                                        <p>Imagenes de mi negocio | Rubro: <?php echo $fila->Nombre_Rubro?></p>
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 m-b-20 imgs"><img style="height:150px;" src="<?=base_url() ?>plantilla/img_perfil/<?php echo $fila->Foto1;?>" class="img-responsive radius" />
                                                            <div style="padding:10px;">
                                                            <a data-toggle="modal" data-target="#ModalMensaje"  onclick="editI(1)" class="btn btn-success">Editar imagen</a>   
                                                            </div>

                                                            </div>
                                                            <div class="col-lg-3 col-md-6 m-b-20"><img style="height:150px;" src="<?=base_url() ?>plantilla/img_perfil/<?php echo $fila->Foto2;?>" class="img-responsive radius" />
                                                             <div style="padding:10px;">
                                                            <a data-toggle="modal" data-target="#ModalMensaje" onclick="editI(2)" class="btn btn-success">Editar imagen</a>   
                                                            </div>
                                                            
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 m-b-20"><img style="height:150px;" src="<?=base_url() ?>plantilla/img_perfil/<?php echo $fila->Foto3;?>" class="img-responsive radius" />
                                                             <div style="padding:10px;">
                                                            <a data-toggle="modal" data-target="#ModalMensaje" onclick="editI(3)" class="btn btn-success">Editar imagen</a>   
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                <!--second tab-->
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Encargado</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $fila->Nombre?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>WhatsApp</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $fila->Telefono?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $fila->Correo ?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Dirección</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $fila->Direccion_Negocio;  ?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <p class="m-t-30"><?php  echo $fila->Descripcion_Negocio;?></p>
                                </div>
                                </div>
                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <div class="row ">
                                    <div class="col-sm-12">
                                        <div class="card">
                                                <div class="card-title">
                                                    <h4>Editar información personal</h4>
                                                </div>
                                                <div class="form-validation">
                                                        <!-- Bread crumb -->
                                                                    <form class="form-valide" action="<?=base_url()?>Perfiles/EditarUsuaria" method="post">                             
                                                                        <div class="row ">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Nombre </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="val-name" name="nombre" placeholder="Nombre" value="<?php echo $fila2->Nombre;?>">
                                                                                        <input type="text" hidden name="id_usuaria" value="<?php echo $fila2->pk_Id_Usuaria;?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Apellido </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="val-lastname " name="apellido" placeholder="Apellido" value="<?php echo $fila2->Apellido;?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                            </div>
                                                                        <!--/row-->
                                                                        <div class="row ">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Nombre de usuario </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="val-direccion " name="nomuser" placeholder="Nombre de usuario" value="<?php echo $fila2->Nom_User;?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                       
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Contraseña </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="val-municipio " name="pass" placeholder="Contraseña" value="<?php echo $fila2->Pass;?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                            </div>
                                                                        <!--/row-->
                                                                        <div class="row ">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Dirección </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="val-phoneus " name="direccion" placeholder="Direccion" value="<?php echo $fila2->Direccion;?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                       
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Teléfono </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="" name="telefono" placeholder="Telefono" value="<?php echo $fila2->Telefono;?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span># DUI </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="val-username" name="dui" placeholder="# DUI" value="<?php echo $fila2->Dui;?>" disabled>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                        </div>
                                                                        <!--/row-->
                                                                        <div class="col-md-12">
                                                                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30"><i class="fa fa-floppy-o"></i> Editar</button>  
                                                                        </div>
                                                                    </form>
                                                                    </div>
                                                                    <div class="form-validation">
                                                        <!-- Bread crumb -->
                                                         <h4>Editar Información del negocio</h4>
                                                                    <form class="form-valide" action="<?=base_url()?>Perfiles/EditarPerfil" method="post">                             
                                                                        <div class="row ">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Nombre del negocio </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="val-name" name="nombre_n" placeholder="Nombre" value="<?php echo $fila->Nombre_Negocio;?>">
                                                                                        <input type="text" hidden name="id_usuaria" value="<?php echo $fila->FK_Usuaria;?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Dirección del Negocio </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="val-lastname " name="direcion_n" placeholder="Apellido" value="<?php echo $fila->Direccion_Negocio;?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                            </div>
                                                                        <!--/row-->
                                                                        <div class="row ">

                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Rubro</span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="val-direccion " name="nomuser" placeholder="Nombre de usuario" value="<?php echo $fila->Nombre_Rubro;?>" disabled>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                       
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Descripción </span>
                                                                                    <div class="input-group">
                                                                                        <textarea type="text" class="form-control" id="val-municipio " name="descripcion_n" placeholder="Contraseña" value="<?php echo $fila->Descripcion_Negocio;?>"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                            </div>
                                                                        <!--/row-->
                                                                        <div class="row ">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Dirección </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="val-phoneus " name="direccion_n" placeholder="Direccion" value="<?php echo $fila->Direccion_Negocio;?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                       
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Teléfono </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="" name="telefono_n" placeholder="Telefono_n" value="<?php echo $fila->Telefono;?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Correo </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="val-username" name="Correo_n" placeholder="# DUI" value="<?php echo $fila->Correo;?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                        </div>
                                                                        <!--/row-->
                                                                        <div class="col-md-12">
                                                                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30"><i class="fa fa-floppy-o"></i> Editar</button>  
                                                                        </div>
                                                                    </form>
                                                                    </div>

                                                        <!-- End Bread crumb -->
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                           </div>
                                           </div>
                                           </div>
<!-- Modal edit -->
<div  class="modal fade" id="ModalMensaje" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" >
        <h5 class="modal-title" id="exampleModalLongTitle" style="color:black;">Editar Imagen</h5>
        <a onclick="Limpiar()"  class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
          
        </a>
      </div>
      <div class="modal-body">
       <!-- Bread crumb -->
       <!--Div para las imagenes-->
        <div id="DivImagen">
        </div>
       <div id="form1">
       <div class="row btnCenter">
                <a onclick="SubirImg(1)" style="color:white"  class="btn subirImgG"><i class="fa fa-cloud-upload"></i> Seleccionar imagen</a>
               
                
        </div>
       <form class="form-valide" enctype="multipart/form-data" action="<?= base_url()?>Perfiles/editarImagen?c=1" method="POST" id="mensaje" name="mensaje">
           
               
                <input type="file" hidden name="imagen" id="imagen1" onchange="cambio(this)">
                
            <div class="row btnCenter" id="DivBotones1" style="display:none;"> 
                
                    <a onclick="Limpiar()"  class="btn btn-secondary" data-dismiss="modal">Cancelar</a>     
                
                
                    <button type="submit" class="btn btn-primary"><i class="fa fa-picture-o" style="margin:5;" aria-hidden="true"></i> Guardar</button>
                
            </div>
        </form> 
       </div>
       <div id="form2">
       <form enctype="multipart/form-data" class="form-valide" action="<?= base_url()?>Perfiles/editarImagen?c=2" method="POST" id="mensaje" name="mensaje">
            <div class="row btnCenter">
                <a onclick="SubirImg(2)" style="color:white"  class="btn subirImgG"><i class="fa fa-cloud-upload"></i> Seleccionar imagen</a>
                <input type="file" hidden name="imagen" id="imagen2" onchange="cambio2(this)">

            </div>
            <div class="row btnCenter" id="DivBotones2" style="display:none;"> 
                
                    <a onclick="Limpiar()" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>     
                
               
                    <button type="submit" class="btn btn-primary"><i class="fa fa-picture-o" style="margin:5;" aria-hidden="true"></i> Guardar</button>
                
            </div>
        </form> 
       </div>
       <div id="form3">
       <form enctype="multipart/form-data" class="form-valide" action="<?= base_url()?>Perfiles/editarImagen?c=3" method="POST" id="mensaje" name="mensaje">
            <div class="row btnCenter">
                <a onclick="SubirImg(3)" style="color:white"  class="btn subirImgG"><i class="fa fa-cloud-upload"></i> Seleccionar imagen</a>
                <input type="file" hidden name="imagen" id="imagen3" onchange="cambio3(this)">
            </div>
            <div class="row btnCenter" id="DivBotones3" style="display:none;"> 
                
                    <a  class="btn btn-secondary" onclick="Limpiar()" data-dismiss="modal">Cancelar</a>     
                
              
                    <button type="submit" class="btn btn-primary"><i class="fa fa-picture-o" style="margin:5;" aria-hidden="true"></i> Guardar</button>
                
            </div>
        </form> 
       </div>
            
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    function editI(v){
        //alert('hola');
        if(v==1){

            document.getElementById('form1').style.display = 'block';
            document.getElementById('form2').style.display = 'none';
            document.getElementById('form3').style.display = 'none';

        }
        if(v==2){
            document.getElementById('form1').style.display = 'none';
            document.getElementById('form2').style.display = 'block';
            document.getElementById('form3').style.display = 'none';


        }
        if(v==3){
            document.getElementById('form1').style.display = 'none';
            document.getElementById('form2').style.display = 'none';
            document.getElementById('form3').style.display = 'block';

        }
       
    }
/*$('#imagen').change(function(){
    foto(this);
    alert('holaf');
    alert(this);
});*/
function Limpiar() {

    document.getElementById('DivImagen').innerHTML='';
    document.getElementById('DivBotones1').style.display='none';
    document.getElementById('DivBotones2').style.display='none';
    document.getElementById('DivBotones3').style.display='none';
    document.getElementById('form1').style.display = 'none';
    document.getElementById('form2').style.display = 'none';
    document.getElementById('form3').style.display = 'none';
    $('#imagen1').val("");
    $('#imagen2').val("");
    $('#imagen3').val("");
}
function SubirImg(va){
    if(va == 1){
        document.getElementById('imagen1').click(); 
    }
    if(va==2){
        document.getElementById('imagen2').click(); 
    }
    if(va==3){
        document.getElementById('imagen3').click(); 
    }
    }
/*$(document).ready(function(){
     $('#imagen').change(function(){
    ValidarImagen(this); 
    });

});*/
function cambio(inu){
    ValidarImagen(inu);

}
function cambio2(inu){
    ValidarImagen(inu);

}

function cambio3(inu){
    ValidarImagen(inu);
}

function ValidarImagen(obj, v){
    var uploadFile = obj.files[0];
    if (!window.FileReader) {
        alert('El navegador no soporta la lectura de archivos');
        return;
    }

    if (!(/\.(jpg|png|gif|jpeg)$/i).test(uploadFile.name)) {
        sweetAlert("Accion no permitida", "El archivo que intenta subir no es una imagen", "error");
    }
    else {
        var img = new Image();
        img.onload = function () {
            if (this.width.toFixed(0) != 720 && this.height.toFixed(0) != 540) {
                //alert('Las medidas deben ser: 200 * 200');
                sweetAlert("Accion no permitida", "Tamanio de la imagen no permitida el tamaño requerido es de 720px x 540px", "error");
                $('#imagen1').val("");
                $('#imagen2').val("");
                $('#imagen3').val("");
                document.getElementById('DivImagen').innerHTML=' ';
                document.getElementById('DivBotones').style.display='none';
            }
            else if (uploadFile.size < 20000)
            {
                sweetAlert("Accion no permitida", "El tamaño de la imagen no puede exeder los 200kb", "error");
                $('#imagen1').val("");
                $('#imagen2').val("");
                $('#imagen3').val("");
                document.getElementById('DivImagen').innerHTML=' ';
                document.getElementById('DivBotones').style.display='none';
                
            }
            else {
                alert('Imagen correcta:)');
                document.getElementById('DivImagen').innerHTML='<img class=" img-responsive radius" src="'+URL.createObjectURL(uploadFile)+'"  width="100" height="100" id="vista" alt="Imagen a publicar"/>';
                document.getElementById('DivBotones1').style.display='block';
                document.getElementById('DivBotones2').style.display='block';
                document.getElementById('DivBotones3').style.display='block';
                //document.getElementById('mostrarI').innerHTML='<img  src="'+URL.createObjectURL(uploadFile)+'"  width="200" height="200" id="vista" alt="Imagen a publicar"/>';                
            }
        };
        img.src = URL.createObjectURL(uploadFile);

        
    }                 
}
</script>