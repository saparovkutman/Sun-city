<div id="kitchen" class="article">
    <div class="subdirectory">
        <div class="link_category">
            <a href="">Home<span class="arrow"></span></a>
            <a href="" class="active">Vip<span class="arrow"></span></a>
        </div>
        <h3>Information filling for restaurant booking</h3>
<<<<<<< HEAD
        <div class="form_bron" id="modal_add">
            <div class="form_content">
                <form id="forma_add" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                    <label class="bron_label_style_one">Data:</label>
                    <input id="add_date" type="date" name="date"  class="bron_input_style_one">

                    <label class="bron_label_style_one">Time:</label>

                    <label class="bron_label_style_two">
                        <input id="add_houre" type="text" name="houre" value="" class="bron_input_style_two"> Houre
                    </label>

                    <label class="bron_label_style_two">
                        <input id="add_minute" type="text" name="minute" value="" class="bron_input_style_two"> Minute
                    </label>

                    <label class="bron_label_style_one">Number of people:</label>
                    <select id="add_people" class="bron_input_style_one" name="people">
                        <option value="1">1</option>
                    </select>
                    <input id="add_cat_id" type="hidden" name="cat_id" value="<?=$id ?>" class="bron_input_style_two">
                    <input id="add_to_kitchen" type="submit" value="Book now"  class="bron_submit">
                </form>
            </div>
=======
        <div class="form_bron">
            <form action="">
                <div class="res_form">
                    <label class="bron_label_style_one">Data:</label>
                    <input type="text" name="" value="" class="tcal">
                </div>
                <div class="res_form">
                    <label class="bron_label_style_one">Time:</label>

                    <input type="time" name="" value="" class="bron_input_style_two">

                </div>
                <div class="res_form">
                    <label class="bron_label_style_one">Number of people:</label>
                    <select id="options1">
                        <option disabled selected>1</option>
                        <option value="1">1s</option>
                        <option value="1">1</option>
                        <option value="1">s1</option>
                    </select>
                </div>
                <div class="knopka_res">
                    <input type="submit" value="Search now" class="bron_submit">
                </div>
            </form>
>>>>>>> 7e3f7f42e20863129c5558e98d6c0da460901e1d
        </div>
    </div>
 </div>
<script>
<<<<<<< HEAD
    $(document).ready(function() {
        $('.navbar').addClass('direct_navbar');
        $('.direct_navbar').removeClass('navbar');

        $('#add_to_kitchen').on('click', function () {
            var form_add = $("#forma_add")[0];
            var vse_polya_add = new FormData(form_add);
            $.ajax({
                method: "POST",
                url: "/actionreserve/insert_kitchen",
                data: vse_polya_add,
                contentType: false,
                processData: false,
            }).done(function () {
                alert("GOOD JOB!!!");
                $("#forma_add")[0].reset();
            });
        });
=======
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
>>>>>>> 7e3f7f42e20863129c5558e98d6c0da460901e1d
    });
</script>
 