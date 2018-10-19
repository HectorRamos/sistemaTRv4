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
                        <li> <a class="has-arrow-inicio" href="<?=base_url() ?>Login/home" aria-expanded="false"><i class="fa fa-home"></i><span class="hide-menu">Home </span></a></li>
                        <li class="nav-label">Menu</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-user-circle"></i><span class="hide-menu">Usuarios</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?=base_url()?>Emprendedoras/InsertarUsuaria">Nuevo usuario</a></li>
                                <li><a href="<?=base_url()?>Emprendedoras/verUsuarias">Usuarios registrados</a></li> 
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="<?=base_url() ?>Rubros/" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Gestionar Rubros</span></a>
                        </li>
						<li> <a class="has-arrow  " href="<?=base_url() ?>Emprendedoras/" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Bolsa de Emprendedoras</span></a>
                        </li>
                        <li> <a class="has-arrow  " href="<?=base_url() ?>Contactos/" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Mensajes</span></a>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tags"></i><span class="hide-menu">Noticias</span></a>
                            <ul aria-expanded="false" class="collapse">
                            <li><a href="<?=base_url() ?>Anuncios/">Ver noticias</a></li>
                                <!--<li><a href="#" class="has-arrow">Ver noticias</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="<?=base_url() ?>Anuncios/">Todos</a></li>
                                        <li><a href="<?=base_url() ?>Anuncios/">Por fecha</a></li>
                                    </ul>
                                </li>-->
                                <li><a href="<?=base_url() ?>Anuncios/publicar_anuncios">Publicar noticias</a>
                                <li><a href="<?=base_url() ?>Anuncios/GestionarNoticias">Gestionar noticias</a></li>
                                </li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-file-movie-o"></i><span class="hide-menu">Guias Multimedia</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#" class="has-arrow">Ver Guias Multimedia</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="<?=base_url() ?>Guias/Cargar_Guias?v=1">Documentos</a></li>
                                        <li><a href="<?=base_url() ?>Guias/Cargar_Guias?v=2">Videos</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?=base_url() ?>Guias">Publicar Guias Multimedia</a>
                                </li>
                                <li><a href="<?=base_url() ?>Guias/Gestionar">Gestionar Guias Multimedia</a>
                                </li>
                        </li>
                            </ul>
                             </li>
                          <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-window-restore"></i><span class="hide-menu">Otras aplicaciones</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?=base_url() ?>capital/">Capital inicial</a></li>
                                <li><a href="<?=base_url() ?>inventario/">Inventario</a></li>
                                 <li><a href="<?=base_url() ?>controlie/">Control Ingresos y Egresos</a></li>
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