     <script type="text/javascript">
         function mensaje(){
            alert('Pendiente de revision');
         }
     </script>
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Inicio</li>
                        <li> <a class="has-arrow-inicio  " href="<?=base_url() ?>Login/home" aria-expanded="false"><i class="fa fa-home"></i><span class="hide-menu">Mi Perfil <span class="hide-menu"></span></span></a></li>
                        <li class="nav-label">Menú</li>
                        <li> <a class="has-arrow-inicio " href="<?=base_url() ?>Emprendedoras/" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Bolsa de Emprendedoras</span></a>
                        </li> 
                        <li> <a class="has-arrow  " href="<?=base_url() ?>Contactos/" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Mensajes</span></a>
                        </li> 
                           <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Noticias </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#" class="has-arrow">Ver Noticias</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="<?=base_url() ?>Anuncios/">Todos</a></li>
                                        <li><a href="<?=base_url() ?>Anuncios/">Por fecha</a></li>
                                    </ul>
                                </li>
                        </li>
                        </ul>
                           <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-file-movie-o"></i><span class="hide-menu">Guias Multimedia</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#" class="has-arrow">Ver Guias Multimedia</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="<?=base_url() ?>Guias/Cargar_Guias?v=1">Documentos</a></li>
                                        <li><a href="<?=base_url() ?>Guias/Cargar_Guias?v=2">Videos</a></li>
                                    </ul>
                                </li>   
                        </li>
                        </ul> 
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Otras aplicaciones</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?=base_url() ?>capital/negocios/">Capital inicial</a></li>
                                <li><a href="<?=base_url() ?>inventario/">Inventario</a></li>
                                 <li><a href="<?=base_url() ?>controlie/">Control de Egresos e Ingresos</a></li>
                            </ul>
                            </li>
                            </ul>

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->