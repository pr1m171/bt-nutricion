<!-- End Sidebar navigation -->
</div>
<!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->

    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Email App Part -->
        <!-- ============================================================== -->
        <div class="email-app border-top">
            <!-- ============================================================== -->
            <!-- Left Part -->
            <!-- ============================================================== -->
            <div class="left-part bg-light">
                <a class="ti-menu ti-close btn btn-success show-left-part d-block d-md-none" href="javascript:void(0)"></a>
                <div class="scrollable" style="height:100%;">
                    <div class="p-15">
                        <a id="compose_mail" class="waves-effect waves-light btn btn-danger d-block" href="javascript: void(0)">Nuevo</a>
                    </div>
                    <div class="divider"></div>
                    <ul class="list-group">
                        <li>
                            <small class="p-15 grey-text text-lighten-1 db">Carpetas</small>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:void(0)" class="active list-group-item-action"><i class="mdi mdi-inbox"></i> Entrada <span class="label label-success float-right">3</span></a>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:void(0)" class="list-group-item-action"> <i class="mdi mdi-star"></i> Favoritos </a>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:void(0)" class="list-group-item-action"> <i class="mdi mdi-send"></i> Borradores <span class="label label-danger float-right">3</span></a></li>
                        <li class="list-group-item">
                            <a href="javascript:void(0)" class="list-group-item-action"> <i class="mdi mdi-email"></i> Enviados </a>
                        </li>
                        <li class="list-group-item">
                            <hr>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:void(0)" class="list-group-item-action"> <i class="mdi mdi-delete"></i> Eliminados </a>
                        </li>
                        <li class="list-group-item">
                            <hr>
                        </li>
                        <li>
                            <small class="p-15 grey-text text-lighten-1 db">Etiquetas</small>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:void(0)" class="list-group-item-action"><i class="text-danger mdi mdi-checkbox-blank-circle"></i> Ejercicios </a>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:void(0)" class="list-group-item-action"><i class="text-cyan mdi mdi-checkbox-blank-circle"></i> Dieta </a>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:void(0)" class="list-group-item-action"><i class="text-warning mdi mdi-checkbox-blank-circle"></i> Control de peso </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Right Part -->
            <!-- ============================================================== -->
            <div class="right-part mail-list bg-white">
                <div class="p-15 b-b">
                    <div class="d-flex align-items-center">
                        <div>
                            <h4>Bandeja de entrada </h4>
                            <span>Mensajería interna</span>
                        </div>
                        <div class="ml-auto">
                            <input placeholder="Buscar..." id="" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <!-- Action part -->
                <!-- Button group part -->
                <div class="bg-light p-15 d-flex align-items-center do-block">
                    <div class="btn-group m-t-5 m-b-5">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input sl-all" id="cstall">
                            <label class="custom-control-label" for="cstall">Seleccionar todos</label>
                        </div>
                    </div>
                    <div class="ml-auto">
                        <div class="btn-group m-r-10" role="group" aria-label="Button group with nested dropdown">
                            <button type="button" class="btn btn-outline-secondary font-18"><i class="mdi mdi-reload"></i></button>
                            <button type="button" class="btn btn-outline-secondary font-18"><i class="mdi mdi-alert-octagon"></i></button>
                            <button type="button" class="btn btn-outline-secondary font-18"><i class="mdi mdi-delete"></i></button>
                        </div>
                        <div class="btn-group m-r-10" role="group" aria-label="Button group with nested dropdown">
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-folder font-18 "></i> </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="javascript:void(0)">Opciones</a>  </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Action part -->
                <!-- Mail list-->
                <div class="table-responsive">
                    <table class="table email-table no-wrap table-hover v-middle">
                        <tbody>
                        <!-- row -->
                        <tr class="unread">
                            <!-- label -->
                            <td class="chb">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cst1">
                                    <label class="custom-control-label" for="cst1">&nbsp;</label>
                                </div>
                            </td>
                            <!-- star -->
                            <td class="starred"><i class="far fa-star"></i></td>
                            <!-- User -->
                            <td class="user-image"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="30"></td>
                            <td class="user-name">
                                <h6 class="m-b-0">Jhon Doe</h6>
                            </td>
                            <!-- Message -->
                            <td class="max-texts"> <a class="link" href="javascript: void(0)"><span class="label label-danger m-r-10">Ejercicios</span> <span class="blue-grey-text text-darken-4">Lorem ipsum Lorem ipsum</span> lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum</a></td>
                            <!-- Attachment -->
                            <td class="clip"><i class="fa fa-paperclip"></i></td>
                            <!-- Time -->
                            <td class="time"> 12:30 PM </td>
                        </tr>
                        <!-- row -->
                        <tr class="unread">
                            <!-- label -->
                            <td class="chb">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cst2">
                                    <label class="custom-control-label" for="cst2">&nbsp;</label>
                                </div>
                            </td>
                            <!-- star -->
                            <td class="starred"><i class="far fa-star"></i></td>
                            <!-- User -->
                            <td class="user-image"><img src="assets/images/users/2.jpg" alt="user" class="rounded-circle" width="30"></td>
                            <td class="user-name">
                                <h6 class="m-b-0">Jhon Doe</h6>
                            </td>
                            <!-- Message -->
                            <td class="max-texts"> <a class="link" href="javascript: void(0)"><span class="label label-info m-r-10">Dieta</span> <span class="blue-grey-text text-darken-4">Lorem ipsum Lorem ipsum </span>lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum</a></td>
                            <!-- Attachment -->
                            <td class="clip"><i class="fa fa-paperclip"></i></td>
                            <!-- Time -->
                            <td class="time"> 11:30 AM </td>
                        </tr>
                        <!-- row -->
                        <tr class="unread">
                            <!-- label -->
                            <td class="chb">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cst3">
                                    <label class="custom-control-label" for="cst3">&nbsp;</label>
                                </div>
                            </td>
                            <!-- star -->
                            <td class="starred"><i class="far fa-star"></i></td>
                            <!-- User -->
                            <td class="user-image"><img src="assets/images/users/3.jpg" alt="user" class="rounded-circle" width="30"></td>
                            <td class="user-name max-texts">
                                <h6 class="m-b-0">Jhon Doe</h6>
                            </td>
                            <!-- Message -->
                            <td class="max-texts"> <a class="link" href="javascript: void(0)"><span class="label label-warning blue-grey-text text-darken-4 m-r-10">Friend</span> <span class="blue-grey-text text-darken-4">Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum</a></td>
                            <!-- Attachment -->
                            <td class="clip"><i class="fa fa-paperclip"></i></td>
                            <!-- Time -->
                            <td class="time"> 10:30 AM </td>
                        </tr>
                        <!-- row -->
                        <tr class="">
                            <!-- label -->
                            <td class="chb">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cst4">
                                    <label class="custom-control-label" for="cst4">&nbsp;</label>
                                </div>
                            </td>
                            <!-- star -->
                            <td class="starred"><i class="far fa-star"></i></td>
                            <!-- User -->
                            <td class="user-image"><img src="assets/images/users/4.jpg" alt="user" class="rounded-circle" width="30"></td>
                            <td class="user-name">
                                <h6 class="m-b-0">Rose Walker Russo</h6>
                            </td>
                            <!-- Message -->
                            <td class="max-texts"> <a class="link" href="javascript: void(0)"><span class="label label-info m-r-10">Ejercicios</span>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum</a></td>
                            <!-- Attachment -->
                            <td class="clip"><i class="fa fa-paperclip"></i></td>
                            <!-- Time -->
                            <td class="time"> 9:30 AM </td>
                        </tr>
                        <!-- row -->
                        <tr class="">
                            <!-- label -->
                            <td class="chb">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cst5">
                                    <label class="custom-control-label" for="cst5">&nbsp;</label>
                                </div>
                            </td>
                            <!-- star -->
                            <td class="starred"><i class="far fa-star"></i></td>
                            <!-- User -->
                            <td class="user-image"><img src="assets/images/users/5.jpg" alt="user" class="rounded-circle" width="30"></td>
                            <td class="user-name">
                                <h6 class="m-b-0">John Abraham</h6>
                            </td>
                            <!-- Message -->
                            <td class="max-texts"> <a class="link" href="javascript: void(0)"><span class="label label-success m-r-10">Ejercicios</span> Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum</a></td>
                            <!-- Attachment -->
                            <td class="clip"><i class="fa fa-paperclip"></i></td>
                            <!-- Time -->
                            <td class="time"> Mar 10 </td>
                        </tr>
                        <!-- row -->
                        <tr class="">
                            <!-- label -->
                            <td class="chb">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cst6">
                                    <label class="custom-control-label" for="cst6">&nbsp;</label>
                                </div>
                            </td>
                            <!-- star -->
                            <td class="starred"><i class="far fa-star"></i></td>
                            <!-- User -->
                            <td class="user-image"><img src="assets/images/users/4.jpg" alt="user" class="rounded-circle" width="30"></td>
                            <td class="user-name">
                                <h6 class="m-b-0">Rose Walker Russo</h6>
                            </td>
                            <!-- Message -->
                            <td class="max-texts"> <a class="link" href="javascript: void(0)"> Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum</a></td>
                            <!-- Attachment -->
                            <td class="clip"><i class="fa fa-paperclip"></i></td>
                            <!-- Time -->
                            <td class="time"> Mar 09 </td>
                        </tr>
                        <!-- row -->
                        <tr class="">
                            <!-- label -->
                            <td class="chb">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cst7">
                                    <label class="custom-control-label" for="cst7">&nbsp;</label>
                                </div>
                            </td>
                            <!-- star -->
                            <td class="starred"><i class="far fa-star"></i></td>
                            <!-- User -->
                            <td class="user-image"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="30"></td>
                            <td class="user-name">
                                <h6 class="m-b-0">Matías Doe</h6>
                            </td>
                            <!-- Message -->
                            <td class="max-texts"> <a class="link" href="javascript: void(0)"> Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum</a></td>
                            <!-- Attachment -->
                            <td class="clip"><i class="fa fa-paperclip"></i></td>
                            <!-- Time -->
                            <td class="time"> Mar 09 </td>
                        </tr>


                        </tbody>
                    </table>
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- Right Part  Mail Compose -->
            <!-- ============================================================== -->
            <div class="right-part mail-compose bg-white" style="display: none;">
                <div class="p-20 border-bottom">
                    <div class="d-flex align-items-center">
                        <div>
                            <h4>Redactar</h4>
                            <span>Crear un nuevo correo</span>
                        </div>
                        <div class="ml-auto">
                            <button id="cancel_compose" class="btn btn-dark">Atras</button>
                        </div>
                    </div>
                </div>
                <!-- Action part -->
                <!-- Button group part -->
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <input type="email" id="example-email" name="example-email" class="form-control" placeholder="To">
                        </div>
                        <div class="form-group">
                            <input type="text" id="example-subject" name="example-subject" class="form-control" placeholder="Subject">
                        </div>
                        <div id="summernote"></div>
                        <h4>Adjunto</h4>
                        <div class="dropzone" id="dzid">
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success m-t-20"><i class="far fa-envelope"></i> Enviar</button>
                        <button type="submit" class="btn btn-dark m-t-20">Descartar</button>
                    </form>
                    <!-- Action part -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Right Part  Mail detail -->
            <!-- ============================================================== -->
            <div class="right-part mail-details bg-white" style="display: none;">
                <div class="card-body bg-light">
                    <button type="button" id="back_to_inbox" class="btn btn-outline-secondary font-18 m-r-10"><i class="mdi mdi-arrow-left"></i></button>
                    <div class="btn-group m-r-10" role="group" aria-label="Button group with nested dropdown">
                        <button type="button" class="btn btn-outline-secondary font-18"><i class="mdi mdi-reply"></i></button>
                        <button type="button" class="btn btn-outline-secondary font-18"><i class="mdi mdi-alert-octagon"></i></button>
                        <button type="button" class="btn btn-outline-secondary font-18"><i class="mdi mdi-delete"></i></button>
                    </div>
                    <div class="btn-group m-r-10" role="group" aria-label="Button group with nested dropdown">
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-folder font-18 "></i> </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="javascript:void(0)">Opciones</a> <a class="dropdown-item" href="javascript:void(0)">Opciones</a> </div>
                        </div>
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-label font-18"></i> </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="javascript:void(0)">Opciones</a> <a class="dropdown-item" href="javascript:void(0)">Opciones</a> </div>
                        </div>
                    </div>
                </div>
                <div class="card-body border-bottom">
                    <h4 class="m-b-0">Your Message title goes here</h4>
                </div>
                <div class="card-body border-bottom">
                    <div class="d-flex no-block align-items-center m-b-40">
                        <div class="m-r-10"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="45"></div>
                        <div class="">
                            <h5 class="m-b-0 font-16 font-medium">Hanna Gover <small> ( hgover@gmail.com )</small></h5><span>to Suniljoshi19@gmail.com</span>
                        </div>
                    </div>
                    <h4 class="m-b-15">Hey Hi,</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                </div>
                <div class="card-body">
                    <h4><i class="fa fa-paperclip m-r-10 m-b-10"></i> Attachments <span>(3)</span></h4>
                    <div class="row">
                        <div class="col-md-2">
                            <a href="javascript:void(0)"> <img class="img-thumbnail img-responsive" alt="attachment" src="assets/images/big/img1.jpg"> </a>
                        </div>
                        <div class="col-md-2">
                            <a href="javascript:void(0)"> <img class="img-thumbnail img-responsive" alt="attachment" src="assets/images/big/img2.jpg"> </a>
                        </div>
                        <div class="col-md-2">
                            <a href="javascript:void(0)"> <img class="img-thumbnail img-responsive" alt="attachment" src="assets/images/big/img3.jpg"> </a>
                        </div>
                    </div>
                    <div class="border m-t-20 p-15">
                        <p class="p-b-20">click here to <a href="javascript:void(0)">Reply</a> or <a href="javascript:void(0)">Forward</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>