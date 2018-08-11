<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<input type="hidden" class="url" value="<?=base_url()?>">
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <h3 style="text-align: center">Мероприятия и их бронирование</h3>
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-primary open-modal" data-modalka_id="#modal_add_services">Добавить</button>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">

            <?php foreach ($data as $row):
                if($row->img_name){
                    $image=base_url()."assets/upload/thumb/cat_two/".$row->img_name;
                }
                else{
                    $image=base_url()."assets/upload/no-image.jpg";
                }
                ?>
                <div class="col-lg-4 col-xlg-3 col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <center class="m-t-30"><img src="<?=$image?>" width="300" class="img-thumbnail"/>
                                <h4 class="card-title m-t-10"><?=$row->title?></h4>
                                <h6 class="card-subtitle"><?=$row->description?></h6>
                                <h6 class="card-subtitle"><?=$row->date_time?></h6>
                                <button data-id="<?=$row->id?>" data-time="<?=$row->date_time?>" data-img="<?=$row->img_name?>"
                                        data-title="<?=$row->title?>" data-desc="<?=$row->description?>" type="button" class="edit btn btn-success open-modal" data-modalka_id="#modal_edit">Update</button>
                                <button data-id="<?=$row->id?>" data-img="<?=$row->img_name?>" type="button" class="delete_show btn btn-danger">Delete</button>
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
<!-- modalka для добавление -->
<div class="modals" id="modal_add_services">
    <div class="maska close-modal" data-modalka_id="#modal_add_services"></div>
    <div class="modal_content">
        <span class="close_modal close-modal" data-modalka_id="#modal_add_services">
            <i class="material-icons">close</i>
        </span><br><br>
        <div class="content">
            <form id="forma_add_uslugi" class="w3-container"  action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <p><label style="float: left;">Название отеля</label>
                    <input id="add_title" class="w3-input w3-border form-control" name="title" type="text">
                </p>
                <p><label style="float: left">Описание</label>
                    <textarea id="add_content" rows="6" class="w3-input w3-border form-control" name="content"></textarea>
                </p>
                <p><label style="float: left">Время</label>
                    <input id="add_time" class="w3-input w3-border form-control" name="add_time" type="text">
                </p>
                <input id="add_img" class="w3-button w3-white form-control" type="file" name="img_add" style="float: left;">
                <br><br>
                <input id="add_show" class="w3-button w3-indigo" type="submit" value="Добавить" style="float:right;">
            </form>
        </div>
    </div>
</div>
<!-- modalka для редактирование -->
<div class="modals" id="modal_edit">
    <div class="maska close-modal" data-modalka_id="#modal_edit"></div>
    <div class="modal_content">
            <span class="close_modal close-modal" data-modalka_id="#modal_edit">
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
                <p><label style="float: left">Время</label>
                    <input id="update_date" class="w3-input w3-border form-control" name="date_time" type="text" >
                </p>
                <input type="hidden" class="url" value="<?=base_url()?>">
                <input id="update_id" class="form-control" type="text" name="id" >
                <input id="update_img" class="w3-button w3-white form-control" type="file" name="img_add" style="float: left;">
                <input id="update_img_name" class="w3-button w3-white form-control" type="hidden" name="old_img" style="float: left;">
                <br><br>
                <input id="update_restaurants" class="w3-button w3-indigo" type="submit" value="Изменить" style="float:right;">
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
        //Добавление
        $('#add_show').on('click',function(){
            var form_add= $("#forma_add_uslugi")[0];
            var vse_polya_add= new FormData(form_add);
            var url = $('.url').val();
            $.ajax({
                method: "POST",
                url: url+"index.php/admin/podcatalog_two/add_show",
                data: vse_polya_add,
                contentType: false,
                processData: false,
            }).done(function(){
                $('#modal_add').hide();
                $("#forma_add")[0].reset();
            });
        });


//редактирование
        $(".edit").click(function () {
            var cat_id = $(this).data("id");
            var cat_title = $(this).data("title");
            var cat_content = $(this).data("desc");
            var cat_image_name = $(this).data("img");
            var cat_date_time = $(this).data("time");

            $("#update_title").val(cat_title);
            $("#update_id").val(cat_id);
            $("#update_content").val(cat_content);
            $("#update_img_name").val(cat_image_name);
            $("#update_date").val(cat_date_time);
        });

        $("#update_restaurants").on('click', function(){
            var form_edit= $("#forma_update")[0];
            var vse_polya_add= new FormData(form_edit);
            var url = $('.url').val();
            $.ajax({
                method: "POST",
                url: url+"index.php/admin/podcatalog_two/update_show",
                data: vse_polya_add,
                contentType: false,
                processData: false,
            }).done(function(){
                // window.location="catalogs_one";
                $('#modal_edit').hide();
                $("#forma_update")[0].reset();
            });
        });

        // DELETE
        $(".delete_show").on('click', function(){
            var cat_id = $(this).data('id');
            var cat_img = $(this).data('img');
            var url = $('.url').val();
            $.ajax({
                method: "POST",
                url: url+"index.php/admin/podcatalog_two/delete_show",
                data: {'id': cat_id, 'img':cat_img},
            }).done(function(){
                alert('удалено');
            });
        });



    });
</script>