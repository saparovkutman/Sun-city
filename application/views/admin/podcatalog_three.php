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
                <h4 class="text-themecolor">Подкаталог 3</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Подкаталог 3</li>
                    </ol>
                </div><br>
                <button type="button" class="btn btn-primary open-modal"  data-modalka_id="#modal_add">Add</button>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Пользователи</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Total rooms</th>
                                    <th>Occupied</th>
                                    <th>Idle</th>
                                    <th>Image</th>
                                    <th>action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($data as $category):
                                    if($category->image_name){
                                        $image=base_url()."assets/upload/images/cat_three/".$category->image_name;
                                    }
                                    else{
                                        $image=base_url()."assets/upload/no-image.jpg";
                                    }
                                    ?>
                                <tr>
                                    <td><?php echo $category->id ?></td>
                                    <td><?php echo $category->title ?></td>
                                    <td><?php echo $category->description ?></td>
                                    <td><?php echo $category->total_rooms ?></td>
                                    <td><?php echo $category->occupied ?></td>
                                    <td><?php echo $category->idle ?></td>
                                    <td><img src="<?php echo $image ?>" style="width: 100px; height: 100px;" class="img-thumbnail"></td>
                                    <td> <button id="" type="button" class="btn btn-success open-modal edit_cat" data-modalka_id="#modal_edit" data-img="<?php echo $category->image_name ?>" data-id="<?php echo $category->id ?>" data-title="<?php echo $category->title ?>" data-description="<?php echo $category->description ?>" data-total_rooms="<?php echo $category->total_rooms ?>" data-occupied="<?php echo $category->occupied ?>" data-idle="<?php echo $category->idle ?>">Update</button>
                                        <button type="button" class="btn btn-danger delete_cat" data-id="<?php echo $category->id?>" data-img="<?php echo $category->image_name?>">Delete</button></td>
                                </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
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


<!-- Modal add -->
<div class="modals" id="modal_add">
    <div class="maska close-modal" data-modalka_id="#modal_add"></div>
    <div class="modal_content">
        <span class="close_modal close-modal" data-modalka_id="#modal_add">
            <i class="material-icons">close</i>
        </span><br><br>
        <div class="content">
            <form id="forma_add" class="w3-container"  action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <p><label style="float: left;">Название </label>
                    <input id="add_title" class="w3-input w3-border form-control" name="title" type="text">
                </p>
                <p><label style="float: left">Описание</label>
                    <textarea id="add_content" rows="6" class="w3-input w3-border form-control" name="content"></textarea>
                </p>
                <p><label style="float: left;">Общее количество номеров</label>
                    <input id="add_total_rooms" class="w3-input w3-border form-control" name="total_rooms" type="text">
                </p>
                <p><label style="float: left;">Занятых</label>
                    <input id="add_occupied" class="w3-input w3-border form-control" name="occupied" type="text">
                </p>
                <p><label style="float: left;">Свободных</label>
                    <input id="add_idle" class="w3-input w3-border form-control" name="idle" type="text">
                </p>
                <input id="add_img" class="w3-button w3-white form-control" type="file" name="img_cattree" style="float: left;">
                <br><br>

                <input id="add_subcat_id" class="form-control" type="text" name="cat_three_id" value="<?php echo $cat_id ?>">
                <input id="add_three" class="w3-button w3-indigo" type="submit" value="button" style="float:right;">
            </form>
        </div>
    </div>
</div>
<!-- Modal edit -->
<div class="modals" id="modal_edit">
    <div class="maska close-modal" data-modalka_id="#modal_edit"></div>
    <div class="modal_content" >
            <span class="close_modal close-modal" data-modalka_id="#modal_edit">
                <i class="material-icons">close</i>
            </span><br><br>
        <div class="content">
            <form id="forma_update" class="w3-container" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <p><label style="float: left;">Название </label>
                    <input id="update_title" class="w3-input w3-border form-control" name="title" type="text">
                </p>
                <p><label style="float: left">Описание</label>
                    <textarea id="update_content" rows="6" class="w3-input w3-border form-control" name="content"></textarea>
                </p>
                <p><label style="float: left;">Общее количество номеров</label>
                    <input id="update_total_rooms" class="w3-input w3-border form-control" name="total_rooms" type="text">
                </p>
                <p><label style="float: left;">Занятых</label>
                    <input id="update_occupied" class="w3-input w3-border form-control" name="occupied" type="text">
                </p>
                <p><label style="float: left;">Свободных</label>
                    <input id="update_idle" class="w3-input w3-border form-control" name="idle" type="text">
                </p>
                <input id="update_img" class="w3-input w3-border form-control" name="img_name" type="text">
                <input id="update_id" class="form-control" type="text" name="id" >
                <input id="update_img_name" class="w3-button w3-white form-control" type="file" name="img_cattree" style="float: left;">
                <br><br>
                <input id="update_cat_three" class="w3-button w3-indigo" type="submit" value="button" style="float:right;">
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


        $('#add_three').on('click',function(){

            var form_add= $("#forma_add")[0];
            var vse_polya_add= new FormData(form_add);

            $.ajax({
                method: "POST",
                url: "/admin/RequestCatThree/insert_subcat_three",
                data: vse_polya_add,
                contentType: false,
                processData: false,
            }).done(function(){
                // console.log();
                window.location="/admin/podcatalog_three/<?php echo $cat_id ?>";
                $('#modal_add').hide();
                $("#forma_add")[0].reset();
            });
        });

        // MODALS_UPDATE

        $(".edit_cat").click(function () {
            var cat_id = $(this).data("id");
            var cat_title = $(this).data("title");
            var cat_content = $(this).data("description");
            var cat_total_rooms = $(this).data("total_rooms");
            var cat_occupied = $(this).data("occupied");
            var cat_idle = $(this).data("idle");
            var cat_image_name = $(this).data("img");
            // alert(cat_image_name);

            $("#update_id").val(cat_id);
            $("#update_title").val(cat_title);
            $("#update_content").val(cat_content);
            $("#update_total_rooms").val(cat_total_rooms);
            $("#update_occupied").val(cat_occupied);
            $("#update_idle").val(cat_idle);
            $("#update_img_name").val(cat_image_name);
        });

        $("#update_cat_three").on('click', function(){
            var form_edit= $("#forma_update")[0];
            var vse_polya_add= new FormData(form_edit);
            $.ajax({
                method: "POST",
                url: "/admin/requestCatThree/update_subcat_three/<?php echo $cat_id ?>\"",
                data: vse_polya_add,
                contentType: false,
                processData: false,
            }).done(function(){
                // window.location="/admin/podcatalog_three";
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
                url: "/admin/requestCatThree/delete_subcat_three",
                data: {'id': cat_id, 'img':cat_img},


            }).done(function(){
                print_r(data);
                //window.location="/admin/podcatalog_three/<?php //echo $cat_id ?>//"";
            });
        });
    });
</script>