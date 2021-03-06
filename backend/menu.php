
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li>
                            <!-- User Profile-->
                            <div class="user-profile dropdown m-t-20">
                                <div class="user-pic">
                                    <img src="media/uploads/<?php echo getCampoNutricionistas($nutricionista, 'imagen'); ?>" alt="users" class="rounded-circle img-fluid" />
                                </div>
                                <div class="user-content hide-menu m-t-10">
                                    <h5 class="m-b-10 user-name font-medium"><?php echo getCampoNutricionistas($nutricionista, 'nombre'); ?> <?php echo getCampoNutricionistas($nutricionista, 'apellido'); ?></h5>

                                    <a href="index.php?page=config" title="Configuración" class="btn btn-circle btn-sm">
                                        <i class="ti-settings"></i>
                                    </a>
                                    <a href="index.php?page=salir" title="Salir" class="btn btn-circle btn-sm">
                                        <i class="ti-power-off"></i>
                                    </a>

                                </div>
                            </div>
                            <!-- End User Profile-->
                        </li>
                        <!-- User Profile-->
                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">BT Nutrición</span>
                        </li>

                  
                        <li class="sidebar-item">
                                    <a href="index.php" class="sidebar-link">
                                        <i class="icon-Home-3"></i>
                                        <span class="hide-menu">Inicio</span>
                                    </a>
                                </li>



                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" id="activo" href="javascript:void(0)" aria-expanded="false">
                                <i class="icon-People-onCloud"></i>
                                <span class="hide-menu"> Clientes</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="index.php?page=clientes" id="mis-clientes" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu">Mis clientes</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index.php?page=calendario" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu">Mi calendario/turnos</span>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="icon-Inbox"></i>
                                <span class="hide-menu"> Mensajes</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="index.php?page=inbox" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu">Bandeja de entrada</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="icon-Ticket"></i>
                                <span class="hide-menu"> Tickets</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="index.php?page=ticket" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu">Lista de tickets</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="icon-Profile"></i>
                                <span class="hide-menu"> Mi perfil</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="index.php?page=profile" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu">Mis datos</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index.php?page=config" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu">Configuracion</span>
                                    </a>
                                </li>
                            </ul>
                        </li>





                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php?page=salir" aria-expanded="false">
                                <i class="mdi mdi-directions"></i>
                                <span class="hide-menu">Salir</span>
                            </a>
                        </li>
                    </ul>
                </nav>