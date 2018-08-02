        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">            
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
                        <button type="button" class="btn btn-primary open-modal">Add</button>
                        <div class="modals" id="modalka">
                            <div class="maska close-modal"></div>
                            <div class="modal_content">
                                <span class="close_modal close-modal">
                                    <i class="material-icons">close</i>
                                </span><br><br><br><br>
                                <div class="content">                                
                                <!-- <div class="w3-card-4"> -->
                                    <form class="w3-container">
                                      <p><label style="float: left;">Заголовок</label>
                                      <input class="w3-input w3-border" name="zagolovok" type="text">
                                      </p>
                                      <p><label style="float: left">Описание</label>
                                      <textarea rows="6" class="w3-input w3-border" name="opisanie">Beka</textarea>
                                      </p>
                                      <input class="w3-button w3-white" type="file" name="image" style="float: left;">
                                      <input class="w3-button w3-indigo" type="submit" value="button">
                                    </form>
                                <!-- </div> -->
                                </div>                                
                            </div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $('.open-modal').on('click',function(){
       // $('#modalka').addClass('open');
        $('#modalka').slideToggle("slow");
    });
    $('.close-modal').click(function(){
        $('#modalka').hide();
    });
</script>