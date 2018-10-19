<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>

<?php
/*
if(isset($_POST['btn'])){
    //print_r($_FILES);
    //obtener datos de la imagen
    $nombre=$_FILES['imagenN']['name'];
    $tempo= $_FILES['imagenN']['tmp_name'];
    $dir="plantilla/images/imagenesA/";
    //echo "NOmbre".$nombre."<br> url".$tempo;
    move_uploaded_file($tempo, $dir.$nombre);
    $imagenconvert= file_get_contents($dir.$nombre);
    //echo "longitud del archivo".$imagenconvert;

    //echo "<img src='data:image/jpg; base64>,".base64_encode($imagenconvert)."'";
}
*/
foreach ($Noticia->result() as $Noti) {
    # code...
}
?>
<!--ESTA ES LA FORMA DE MOSTRAR LA IMAGEN
<form method="POST" action="<?= base_url() ?>Anuncios/guardar" enctype="multipart/form-data">

<input type="file" name="imagenN"> selleccionar archivo
<button name="btn">Guardar</button>
</form>
<img src="data:image/jpg; base64,<?php echo base64_encode($imagenconvert);?>"/>
-->
<!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Inicio</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url()?>Anuncios/GestionarNoticias">Gestionar Anuncios</a></li>
                        <li class="breadcrumb-item active">Editar Anuncio</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row ">
                    <div class="col-sm-12">
                        <div class="card">
                                <div class="card-title">
                                    <h3>Editar Anuncio</h3>
                                </div>
                                <div class="form-validation">
                                        <!-- Bread crumb -->
                                                    <form class="form-valide" method="POST" action="<?= base_url() ?>Anuncios/Editar" enctype="multipart/form-data" form="formAnuncio" id="formAnuncio">                                    
                                                        <div class="row ">

                                                         <div class="col-md-12">
                                                          <label>Fecha de Pubicacion</label>
                                                                <div class="form-group"  id='datetimepicker9' >
                                                                   <div class='input-group' >
                                                                   <!--CAMPOS OULTOS-->
                                                                   <input hidden type="text" name="Imagen" value="<?= $Noti->Imagen?>">
                                                                   <input hidden type="text" name="Id" value="<?= $Noti->pk_Id_Anuncio?>">

                                                                        <input type='date' class="form-control" id="fecha" name="fecha" placeholder="Seleccione una fecha" value="<?= $Noti->Fecha?>" />
                                                                        <span class="input-group-addon">
                                                                            <span class="glyphicon glyphicon-calendar">
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                         <div class="col-md-12">
                                                                <label>Titulo de Pubicacion</label>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <textarea type="text" class="form-control" id="val-name " name="titulo" placeholder="Titulo de la Noticia" pattern="[A-Z-0-9]+" required><?= $Noti->Titulo?></textarea> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label>Descripcion de Pubicacion</label>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <textarea type="text" class="form-control" id="val-name " name="Descripcion_Noticia" placeholder="Descripcion de la Noticia" pattern="[A-Z-0-9]+" required value="">
                                                                            <?= $Noti->Descripcion_Noticia?>
                                                                        </textarea> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                             <div class="col-md-12">
                                                                <label>Contenido de Pubicacion</label>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <textarea rows="8" cols="80" class=" form-control textarea_editor form-control" rows="15" style="height:300px" type="text" class="form-control" id="val-name " name="contenido" placeholder="Descripción o contenido" required>
                                                                            <?= $Noti->Contenido?>
                                                                        </textarea> 
                                                                       
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                            <div>
                                                            <label>Imagen de Pubicacion</label>

                                                           
                                                            </div>
                                                                <img style="margin:10px;" src="<?= base_url()?>plantilla/img_anuncios/<?= $Noti->Imagen?>">
                                                            </div>
                                                            </div>
                                                            <div class="row">
                                                              <div class="col-md-4">
                                                                   <label>Cambiar imagen(opcional)</label>
                                                              </div>
                                                              <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                    <a onclick="SubirImg()" class="btn btn-info btn-medium" style="color:white; padding:0 25 0 25;"><i class="fa fa-upload fa-2x" style="margin-right:10px;"></i>Subir Imagen</a>
                                                                    <input  hidden type="file" name="imagenN" id="imagenN" change="filePeview(this)" >
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                             <div class="col-md-4" id="mostrarI">
                                                             <img src="<?=base_url()?>plantilla/images/picture.png">
                                                            </div>
                                                            </div>
                                                            <!--/span-->
                                                            <!--/span--> 
                                                        </div>
                                                        <div class="row">
                                                        <div class="col-md-6">
                                                        <a style="color:white;" class="btn btn-success"><i class="fa fa-times-circle f-s-20" style="margin:10px;"></i>Cancelar</a>  
                                                        </div>
                                                        <div class="col-md-6">
                                                        <button type="submit" class="btn btn-primary"><i class="fa fa-share-square-o f-s-20" style="margin:10px;"></i>Publicar</button>
                                                            
                                                        </div>
                                                        </div>
                                                        
                                                       
                                                    </form>
                                        <!-- End Bread crumb -->
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
<script type="text/javascript">
function SubirImg(){
    document.getElementById('imagenN').click();
}
function ValidarImagen(obj){
    var uploadFile = obj.files[0];
    if (!window.FileReader) {
       sweetAlert('Accion no permitida','El navegador no soporta la lectura de archivos', 'error');

        return;
    }

    if (!(/\.(jpg|png|gif|jpeg)$/i).test(uploadFile.name)) {
        //alert('El archivo a adjuntar no es una imagen');
        sweetAlert("Accion no permitida","El archivo que intentas subir no es una imagen", "error");
        document.getElementById('mostrarI').innerHTML='<img src="<?=base_url()?>plantilla/images/picture.png">';
    }
    else {
        var img = new Image();
        img.onload = function () {
            if (this.width.toFixed(0) != 720 && this.height.toFixed(0) != 540) {
                //alert('Las medidas deben ser: 200 * 200');
                sweetAlert("Accion no permitida", "Tamanio de la imagen no permitida, el temaño permitido es de 720 pixeles de ancho y 540 de alto por favor verificar", "error");
                 $("#imagenN").val('');
                 document.getElementById('mostrarI').innerHTML='<img src="<?=base_url()?>plantilla/images/picture.png">';

            }
            else if (uploadFile.size < 20000)
            {
                sweetAlert("Accion no permitida", "El tamaño de la imagen no puede exeder los 200kb", "error");
                document.getElementById('mostrarI').innerHTML='<img src="<?=base_url()?>plantilla/images/picture.png">';
               
            }
            else {
                alert('Imagen correcta :)');
                document.getElementById('mostrarI').innerHTML='<img  src="'+URL.createObjectURL(uploadFile)+'"  width="200" height="200" id="vista" alt="Imagen a publicar"/>';                
            }
        };
        img.src = URL.createObjectURL(uploadFile);

        
    }                 
}

$('#imagenN').change(function(){
    ValidarImagen(this);
});



$('#imagenN').change(function(){
    filePreview(this);
});
$.fn.datepicker.dates['es'] = {
                days: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"],
                daysShort: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom"],
                daysMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa", "Do"],
                months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"]
                };
    $('#fecha').datepicker({
                format: 'yyyy-mm-dd',
                language:'es',

            });
    $('#fechaInicial').datepicker({
                format: 'yyyy-mm-dd',
                language:'es',

            });
    $('#fechaFinal').datepicker({
                format: 'yyyy-mm-dd',
                language:'es',

            });


</script>