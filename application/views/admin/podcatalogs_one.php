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
                        </div>
                        <br>
                        <br>
                        <button type="button" class="btn btn-primary open-modal" data-modalka_id="#modal_add">Add</button>
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
                                        <th>Тип Пакета</th>
                                        <th>Цена</th>
                                        <th>Пакет текст 1</th>
                                        <th>Пакет текст 2</th>
                                        <th>Пакет текст 3</th>
                                        <th>Загаловок заказа</th>
                                        <th>Загаловок Билета</th>
                                        <th>Тип Билета</th>
                                        <th>Действие</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach($data as $result):
                                    $i=1;?>
                                    <tr>
                                        <td><?= $i++;?></td>
                                        <td><?= $result->type_package?></td>
                                        <td><?= $result->price?></td>
                                        <td><?= $result->package_includes_one?></td>
                                        <td><?= $result->package_includes_two?></td>
                                        <td><?= $result->package_includes_three?></td>
                                        <td><?= $result->book_now_text?></td>
                                        <td><?= $result->ticket_text?></td>
                                        <td><?= $result->ticket_type?></td>
                                        <td><button type="button" class="btn btn-success open-modal edit-subcat" data-modalka_id="#modal_edit" data-sub_id="<?= $result->id?>" data-type_package="<?= $result->type_package?>" data-price="<?= $result->price?>" data-package_includes_one="<?= $result->package_includes_one?>" data-package_includes_two="<?= $result->package_includes_two?>" data-package_includes_three="<?= $result->package_includes_three?>" data-book_now_text="<?= $result->book_now_text?>" data-ticket_text="<?= $result->ticket_text?>" data-ticket_type="<?= $result->ticket_type?>">Update</button>
                                    <button type="button" class="btn btn-danger sub_catOne_delete" data-sub_cat_id="<?php echo $result->id?>">Delete</button> 
                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        
<div class="modals" id="modal_add">
    <div class="maska close-modal" data-modalka_id="#modal_add"></div>
    <div class="modal_content">
        <span class="close_modal close-modal" data-modalka_id="#modal_add">
            <i class="material-icons">close</i>
        </span><br><br>
        <div class="content">
            <form id="sub_catOne_forma_add" class="w3-container"  action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <p>
                    <label style="float: left;">Тип Пакета</label>
                    <input class="w3-input w3-border form-control" name="type_package" type="text">
                </p>
                <p>
                    <label style="float: left">Цена Пакета</label>
                    <input class="w3-input w3-border form-control" name="price" type="text">
                </p>
                <p>
                    <label style="float: left">Подробности о пакета тексе 1</label>
                    <input class="w3-input w3-border form-control" name="package_includes_one" type="text">
                </p>
                <p>
                    <label style="float: left">Подробности о пакета текс 2</label>
                    <input class="w3-input w3-border form-control" name="package_includes_two" type="text">
                </p>
                <p>
                    <label style="float: left">Подробности о пакета текс 3</label>
                    <input class="w3-input w3-border form-control" name="package_includes_three" type="text">
                </p>
                <p>
                    <label style="float: left">Загаловок заказа</label>
                    <input class="w3-input w3-border form-control" name="book_now_text" type="text">
                </p>
                <p>
                    <label style="float: left">Загаловок заказа</label>
                    <input class="w3-input w3-border form-control" name="ticket_text" type="text">
                </p>
                <p>
                    <label style="float: left">Тип Билета</label>
                    <input class="w3-input w3-border form-control" name="ticket_type" type="text">
                </p>
                
                <input class="w3-input w3-border form-control" name="packet_id" type="text" value="<?php echo $cat_one_id;?>">
                
                <br>
                <br>
                <br>
                <input id="add_sub_cat_one" class="w3-button w3-indigo" type="submit" value="button" style="float:right;">
            </form>
        </div>
    </div>
</div>

<div class="modals" id="modal_edit">
    <div class="maska close-modal" data-modalka_id="#modal_edit"></div>
    <div class="modal_content">
        <span class="close_modal close-modal" data-modalka_id="#modal_edit">
            <i class="material-icons">close</i>
        </span><br><br>
        <div class="content">
            <form id="sub_catOne_forma_edit" class="w3-container"  action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <p>
                    <label style="float: left;">Тип Пакета</label>
                    <input id="type_package" class="w3-input w3-border form-control" name="type_package" type="text">
                </p>
                <p>
                    <label style="float: left">Цена Пакета</label>
                    <input id="price" class="w3-input w3-border form-control" name="price" type="text">
                </p>
                <p>
                    <label style="float: left">Подробности о пакета тексе 1</label>
                    <input id="package_includes_one" class="w3-input w3-border form-control" name="package_includes_one" type="text">
                </p>
                <p>
                    <label style="float: left">Подробности о пакета текс 2</label>
                    <input id="package_includes_two" class="w3-input w3-border form-control" name="package_includes_two" type="text">
                </p>
                <p>
                    <label style="float: left">Подробности о пакета текс 3</label>
                    <input id="package_includes_three" class="w3-input w3-border form-control" name="package_includes_three" type="text">
                </p>
                <p>
                    <label style="float: left">Загаловок заказа</label>
                    <input id="book_now_text" class="w3-input w3-border form-control" name="book_now_text" type="text">
                </p>
                <p>
                    <label style="float: left">Загаловок заказа</label>
                    <input id="ticket_text" class="w3-input w3-border form-control" name="ticket_text" type="text">
                </p>
                <p>
                    <label style="float: left">Тип Билета</label>
                    <input id="ticket_type" class="w3-input w3-border form-control" name="ticket_type" type="text">
                </p>
                
                <input id="sub_id" class="w3-input w3-border form-control" name="sub_id" type="text">
                
                <br>
                <br>
                <br>
                <input id="edit_sub_cat_one" class="w3-button w3-indigo" type="submit" value="button" style="float:right;">
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
        
        $('#add_sub_cat_one').on('click',function(){
            var form_add= $("#sub_catOne_forma_add")[0];
            var vse_polya_add= new FormData(form_add);
            $.ajax({
                method: "POST",
                url: "/admin/subcategory_insert",
                data: vse_polya_add,
                contentType: false,
                processData: false,
            }).done(function(){
                // console.log();
                window.location="/admin/subcategory/<?php echo $cat_one_id?>";
                $('#modal_add').hide();
                $("#forma_add")[0].reset();
            });
        });
        
        $(".edit-subcat").click(function () {
            var type_package = $(this).data("type_package");
            var price = $(this).data("price");
            var package_includes_one = $(this).data("package_includes_one");
            var package_includes_two = $(this).data("package_includes_two");
            var package_includes_three = $(this).data("package_includes_three");
            var book_now_text = $(this).data("book_now_text");
            var ticket_text = $(this).data("ticket_text");
            var ticket_type = $(this).data("ticket_type");
            var sub_id = $(this).data("sub_id");

            $("#type_package").val(type_package);
            $("#price").val(price);
            $("#package_includes_one").val(package_includes_one);
            $("#package_includes_two").val(package_includes_two);
            $("#package_includes_three").val(package_includes_three);
            $("#book_now_text").val(book_now_text);
            $("#ticket_text").val(ticket_text);
            $("#ticket_type").val(ticket_type);
            $("#sub_id").val(sub_id);
        });
        
        $("#edit_sub_cat_one").on('click', function(){
            var form_edit= $("#sub_catOne_forma_edit")[0];
            var vse_polya_add= new FormData(form_edit);
            $.ajax({
                method: "POST",
                url: "/admin/subcategory_update",
                data: vse_polya_add,
                contentType: false,
                processData: false,
            }).done(function(){
                window.location="/admin/subcategory/<?php echo $cat_one_id?>";
                $('#modal_edit').hide();
                $("#forma_update")[0].reset();
            });
        });
        
        $(".sub_catOne_delete").on('click', function(){
            var subcat_id = $(".sub_catOne_delete").data('sub_cat_id');
            alert(subcat_id);
            $.ajax({
                method: "POST",
                url: "/admin/subcategory_delete",
                data: {'id': subcat_id},
            }).done(function(){
                window.location="/admin/subcategory/<?php echo $cat_one_id?>";
            });
        });
    });
</script>