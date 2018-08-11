<div class="article">
    <div class="subdirectory">
        <div class="link_category">
            <a href="">Home<span class="arrow"></span></a>
            <a href="" class="active">Vip<span class="arrow"></span></a>
        </div>
        <h3>Information filling for ticket booking</h3>
        <div class="form_bron">
<<<<<<< HEAD
            <div class="form_content">
                <form id="forma_add" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                    <label class="bron_label_style_one">Data:</label>
                    <input type="date" name="date" value="" class="bron_input_style_one">

                    <label class="bron_label_style_one">Type:</label>
                    <select class="bron_input_style_one" name="type">
                        <option value="VIP reserve">VIP reserve</option>
=======
            <form action="">
                <div class="res_form">
                    <label class="bron_label_style_one">Data:</label>
                    <input type="text" name="" value="" class="tcal">
                </div>
                <div class="res_form">
                    <label class="bron_label_style_one">Type:</label>
                    <select id="options1">
                        <option disabled selected>1</option>
                        <option value="1">1</option>
                        <option value="">VIP reserve</option>
>>>>>>> 7e3f7f42e20863129c5558e98d6c0da460901e1d
                    </select>
                </div>
                <div class="res_form">
                    <label class="bron_label_style_one">Number of people:</label>
<<<<<<< HEAD
                    <select class="bron_input_style_one" name="count_people">
                        <option>1</option>
                    </select>
                    <input id="add_cat_id" type="hidden" name="cat_id" value="<?=$id ?>" class="bron_input_style_two">
                    <input id="add_ticket" type="submit" value="Book now" class="bron_submit">
                </form>
            </div>
=======
                    <select id="options2">
                        <option disabled selected>1</option>
                        <option value="1">1</option>
                        <option value="2">1</option>
                    </select>
                </div>

                <div class="knopka_res">
                    <input type="submit" value="Search now" class="bron_submit">
                </div>
            </form>
        </div>
    </div>
 </div>

 <script>
     $(document).ready(function () {
         $('.navbar').addClass('direct_navbar');
         $('.direct_navbar').removeClass('navbar');

         $(".bron_submit").on('click', function () {
             var form_add = $('#forma_add')[0];
             var vse_polya_add = new FormData(form_add);
             $.ajax({
                 method: "POST",
                 url: "/actionreserve/insert_show",
                 data: vse_polya_add,
                 contentType: false,
                 processData: false,
             }).done(function () {
                 // alert("GOOD JOB!!!");
                 $("#forma_add")[0].reset();
                     $("#add_ticket").val("ACCEPTED");


             });
         });
     });
    $('.navbar').addClass('direct_navbar');
    $('.direct_navbar').removeClass('navbar');
    CustomSelect.create(document.getElementById('options1'), {
        customClasses: {
            active: 'cc_active',
            base: 'cc',
            control: 'cc__control',
            option: 'cc__item',
            options: 'cc__options',
            select: 'cc__select'
        }
    });
    CustomSelect.create(document.getElementById('options2'), {
        customClasses: {
            active: 'cc_active',
            base: 'cc',
            control: 'cc__control',
            option: 'cc__item',
            options: 'cc__options',
            select: 'cc__select'
        }
    });
</script>