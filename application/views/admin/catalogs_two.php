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
                <button type="button" class="btn btn-primary open-modal" data-modalka_id="#modal_add">Add</button>
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
        <?php foreach ($data as $category):
               if($category->image_name){
                $image=base_url()."assets/upload/images/cat_two/".$category->image_name;
                    }
                else{
                    $image=base_url()."assets/upload/no-image.jpg";
                }
        ?>
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-30">
                            <a href="podcatalogs/<?php echo $category->id ?>">
                                <img src="<?php echo $image ?>" style="width: 80%; height: 200px;" class="img-thumbnail">
                                <h4 class="card-title m-t-10"><?php echo $category->title ?></h4>
                            </a><br>
                            <h6 class="card-subtitle"><?php echo $category->description ?></h6>
                            <button id="" type="button" class="btn btn-success open-modal edit_cat" data-modalka_id="#modal_edit" data-img="<?php echo $category->image_name ?>" data-id="<?php echo $category->id ?>" data-title="<?php echo $category->title ?>" data-description="<?php echo $category->description ?>" >Update</button>
                            <button type="button" class="btn btn-danger delete_cat" data-id="<?php echo $category->id?>" data-img="<?php echo $category->image_name?>">Delete</button>
                        </center>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
    <!--    UPDATE MODALS   -->
</div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>
<div class="modals" id="modal_add">
    <div class="maska close-modal" data-modalka_id="#modal_add"></div>
    <div class="modal_content">
        <span class="close_modal close-modal" data-modalka_id="#modal_add">
            <i class="material-icons">close</i>
        </span><br><br>
        <div class="content">
            <form id="forma_add" class="w3-container"  action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <p><label style="float: left;">Заголовок</label>
                    <input id="add_title" class="w3-input w3-border form-control" name="title" type="text">
                </p>
                <p><label style="float: left">Описание</label>
                    <textarea id="add_content" rows="6" class="w3-input w3-border form-control" name="content"></textarea>
                </p>
                <input id="add_img" class="w3-button w3-white form-control" type="file" name="img_cattwo" style="float: left;">
                <br><br>
                <input id="add_cat_two" class="w3-button w3-indigo" type="submit" value="button" style="float:right;">
            </form>
        </div>
    </div>
</div>
<div class="modals" id="modal_edit">
    <div class="maska close-modal" data-modalka_id="#modal_edit"></div>
    <div class="modal_content" data-modalka_id="#modal_edit">
            <span class="close_modal close-modal">
                <i class="material-icons">close</i>
            </span><br><br>
        <div class="content">
            <form id="forma_update" class="w3-container" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <p><label style="float: left;">Заголовок</label>
                    <input id="update_title" class="w3-input w3-border form-control" name="title" type="text" >
                </p>
                <p><label style="float: left">Описание</label>
                    <textarea id="update_content" rows="6" class="w3-input w3-border form-control" name="content"></textarea>
                </p>
                <input id="update_id" class="form-control" type="text" name="id" >
                <input id="update_img" class="w3-button w3-white form-control" type="file" name="img_cattwo" style="float: left;">
                <input id="update_img_name" type="hidden" name="img_name" style="float: left;">
                <br><br>
                <input id="update_cat_two" class="w3-button w3-indigo" type="submit" value="button" style="float:right;">
            </form>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
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


        $('#add_cat_two').on('click',function(){
            var form_add= $("#forma_add")[0];
            var vse_polya_add= new FormData(form_add);
            $.ajax({
                method: "POST",
                url: "requestCatTwo/insert_cat_two",
                data: vse_polya_add,
                contentType: false,
                processData: false,
            }).done(function(){
                // console.log();
                window.location="/admin/catalogs_two";
                $('#modal_add').hide();
                $("#forma_add")[0].reset();
            });
        });

        // MODALS_UPDATE

        $(".edit_cat").click(function () {
            var cat_id = $(this).data("id");
            var cat_title = $(this).data("title");
            var cat_content = $(this).data("description");
            var cat_image_name = $(this).data("img");

            $("#update_title").val(cat_title);
            $("#update_id").val(cat_id);
            $("#update_content").val(cat_content);
            $("#update_img_name").val(cat_image_name);
        });

        $("#update_cat_two").on('click', function(){
            var form_edit= $("#forma_update")[0];
            var vse_polya_edit= new FormData(form_edit);
            $.ajax({
                method: "POST",
                url: "requestCatTwo/update_cat_two",
                data: vse_polya_edit,
                contentType: false,
                processData: false,
            }).done(function(){
                 window.location="/admin/catalogs_two";
                $('#modal_edit').hide();
                $("#forma_update")[0].reset();
            });
        });

        // DELETE
        $(".delete_cat").on('click', function(){
            var cat_id = $(this).data('id');
            var cat_img = $(this).data('img');
            $.ajax({
                method: "POST",
                url: "requestCatTwo/delete_cat_two",
                data: {'id': cat_id, 'img':cat_img},
            }).done(function(){
                window.location="/admin/catalogs_two";
            });
        });
    });
</script>