<div class="container-fluid">
    <?php
        foreach ($Guias_list->result() as $Guias) {
    ?>
    <div class="row">
        <div class="col-lg-12">
        <div class="card" >
                <div class="row" >
                 <li class=" search-box"> <a class="text-muted" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search" >
                                <input  id="TituloV" name="TituloV" type="text" class="form-control" placeholder="Buscar por titulo de la publicacion"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        Buscar por titulo</li>
                </div>
        </div>
        <div id="Contenido">
        <div class="card">
                <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <div class="card-body">
                            <div class="profiletimeline">
                                  <div class="sl-item">
                                        <div class="sl-right">
                                            <div>
                                                <div class="m-t-20 row">
                                                    <div class="col-md-3 col-xs-12" style="padding: 20px;">
                                                      <iframe width="150" height="200" src="https://www.youtube.com/embed/<?php echo $Guias->Video_Multimedia?>?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                    </div>
                                                        <div class="col-md-9 col-xs-12 alert">
                                                            <h1 style="color:#000;"> <?php echo $Guias->Titulo_Guia;?></h1><hr>
                                                            <p><?php echo $Guias->Descripcion_Guia;?></p>

                                                            <span><p><i class="fa fa-check" style="margin:10px;"></i>Publicado por <?= $Guias->Nombre?><span><p><i class="fa fa-calendar" style="margin:10px;"></i>Fecha de publicacion <?= $Guias->Fecha_Publicacion?></p><br></span></p><br></span>
                                                            <a href="<?= base_url()?>Guias/VerGuia?id=<?php echo $Guias->pk_Id_Guia?>" class="btn btn-info"><i class="fa fa-eye fa-2x" style="margin: 10px;"></i>Ver Publicacion</a>
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
            
                </div>
            </div>
        </div> 
        <?php } ?>
    </div>
<hr>

<script type="text/javascript">
    $(document).on("ready", function(){
        $('#TituloV').on("keyup", Buscar);
    });
    function Buscar(){
        buscarNombre = $('#TituloV').val();
        valor1=buscarNombre;
        $.ajax({
            url:"BuscarGuiaspor",
            type:"POST",
            data:{buscar:valor1, v:2},
            success:function(respuesta){
                //var res = eval(respuesta);
                var registros = eval(respuesta);
                //alert(registros);
                var html ='';
                if(registros.length>0){
                    for (var i = 0; i < registros.length; i++) {
                        html+='<div class="card"><div class="tab-content"><div class="tab-pane active" id="home"role="tabpanel"><div class="card-body"> <div class="profiletimeline"> <div class="sl-item"><div class="sl-right"> <div><div class="m-t-20 row"><div class="col-md-3 col-xs-12" style="padding: 20px;"><iframe width="150" height="200" src="https://www.youtube.com/embed/'+registros[i]['Video_Multimedia']+'?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div> <div class="col-md-9 col-xs-12 "><h1 style="color:#000;"> '+registros[i]['Titulo_Guia']+'</h1><hr><p style="color:black;">'+registros[i]['Descripcion_Guia']+'</p><span><p><i class="fa fa-check" style="margin:10px;"></i>Publicado por '+registros[i]['Nombre']+'<span><p><i class="fa fa-calendar" style="margin:10px;"></i>Fecha de publicacion '+registros[i]['Fecha_Publicacion']+'</p><br></span></p><br></span><a href="<?= base_url()?>Guias/VerGuia?id='+registros[i]['pk_Id_Guia']+'" class="btn btn-info"><i class="fa fa-eye fa-2x" style="margin: 10px;"></i>Ver Publicacion</a></div> </div></div></div></div> </div></div></div></div></div>';
                    }
                }
                else{
                    //alert('NO hay registros');
                    html = "<div class='card'><div class='row'><h1>No hay coincidencias</h1></div></div>";
                }
                document.getElementById('Contenido').innerHTML=html;
 
            }
        });
    }
</script>