        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <div id="maska"></div>
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">                        
                        <h4 class="text-themecolor">Blank Page</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Blank Page</li>                     
                            </ol>
                        </div><br>
                        <button type="button" class="btn btn-primary">Add</button>

                        <button class="w3-button w3-white w3-border" id="add_show">add</button>
                        
                        <div class="modalka">
                        <div id="tablo_add" class="w3-row w3-card-4 modalka_add">
                          <button class="w3-btn w3-right w3-large w3-hover-red w3-clear close">X</button>       
                          <h2>ADD NEW CAR</h2>            
                                <input type="text" name="text" class="pustoi" id="nazvanie_add" placeholder="nazvanie add"></input>
                                <input type="text" name="text" class="pustoi" id="pole_cvet_add" placeholder="cvet add"></input><br><br>
                                <input type="text" name="text" class="pustoi" id="korobka_peredach_add" placeholder="korobka_peredach add"></input>
                                <input type="text" name="text" class="pustoi" id="pole_cena_add" placeholder="cena add"></input><br><br>
                                <input type="radio" class="cars" name="cars" value="img/03.jpg" checked>BMW
                                <img src="img/03.jpg" id="lexus" width="80" height="50">
                                <input type="radio" class="cars" name="cars" value="img/02.jpg">X7
                                <img src="img/02.jpg" id="porshe" width="80" height="50">
                                <input type="radio" class="cars" name="cars" value="img/01.jpg">Porshe
                                <img src="img/01.jpg" id="ferarri" width="80" height="50"><br><br>
                                <button class="w3-button w3-white w3-border" id="add">Добавить</button>
                          </div>
                          </div>                
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">                               
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"><a href="/admin/podcatalogs"><img src="<?php echo base_url() ?>assets/admin/assets/images/users/10.jpg" width="300" class="img-thumbnail" />
                                    <h4 class="card-title m-t-10">Каталог</h4></a>
                                    <h6 class="card-subtitle">Описание</h6>                            
                                    <button type="button" class="btn btn-success">Update</button>
                                    <button type="button" class="btn btn-danger">Delete</button>      
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"><a href="/admin/podcatalogs"><img src="<?php echo base_url() ?>assets/admin/assets/images/users/5.jpg" width="300" class="img-thumbnail" />
                                    <h4 class="card-title m-t-10">Каталог</h4></a>
                                    <h6 class="card-subtitle">Описание</h6>                            
                                    <button type="button" class="btn btn-success">Update</button>
                                    <button type="button" class="btn btn-danger">Delete</button>      
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"><a href="/admin/podcatalogs"><img src="<?php echo base_url() ?>assets/admin/assets/images/users/3.jpg" width="300" class="img-thumbnail" />
                                    <h4 class="card-title m-t-10">Каталог</h4></a>
                                    <h6 class="card-subtitle">Описание</h6>                            
                                    <button type="button" class="btn btn-success">Update</button>
                                    <button type="button" class="btn btn-danger">Delete</button>      
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
       