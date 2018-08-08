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
                        <button type="button" class="open-modal btn btn-primary" data-modalka_id="#modal_add_services">Add</button>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Blank Page</li>
                            </ol>                           
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


                 <?php foreach ($data as $row): ?>
                            <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"><img src="<?php echo base_url() ?>assets/admin/assets/images/users/1.jpg" width="300" class="img-thumbnail" />
                                    <h4 class="card-title m-t-10"><?=$row->title?></h4>
                                    <h6 class="card-subtitle"><?=$row->description?></h6>                            
                                    <button type="button" class="btn btn-success">Update</button>
                                    <button type="button" class="btn btn-danger">Delete</button>      
                                </center>
                            </div>
                        </div>
                    </div>
                 <?php endforeach ?>
              
                   
        
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
        
        <!-- modal -->

        <div class="modals" id="modal_add_services">
    <div class="maska close-modal" data-modalka_id="#modal_add_services"></div>
    <div class="modal_content">
        <span class="close_modal close-modal" data-modalka_id="#modal_add_services">
            <i class="material-icons">close</i>
        </span><br><br>
        <div class="content">
            <form id="forma_add_uslugi" class="w3-container"  action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <p><label style="float: left;">Заголовок</label>
                    <input id="add_title" class="w3-input w3-border form-control" name="title" type="text">
                </p>
                <p><label style="float: left">Описание</label>
                    <textarea id="add_content" rows="6" class="w3-input w3-border form-control" name="content"></textarea>
                </p>
                <input id="add_img" class="w3-button w3-white form-control" type="file" name="img_cattwo" style="float: left;">
                <br><br>
                <input id="add_uslugi" class="w3-button w3-indigo" type="submit" value="button" style="float:right;">
            </form>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        // MODALS_INSERT
        $('.open-modal').on('click',function(){
            var modal_id = $(this).data('modalka_id');
            $(modal_id).show();
        });

        $('.close-modal').click(function(){
            var modal_id = $(this).data('modalka_id');
            $(modal_id).hide();
        });


        $('#add_uslugi').on('click',function(){
            var form_add= $("#forma_add_uslugi")[0];
            var vse_polya_add= new FormData(form_add);
            $.ajax({
                method: "POST",
                url: "requestCatTwo/insert_uslugi",
                data: vse_polya_add,
                contentType: false,
                processData: false,
            }).done(function(){
                $('#modal_add').hide();
                $("#forma_add")[0].reset();
            });
        });


    });
</script>