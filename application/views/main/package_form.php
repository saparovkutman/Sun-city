<div class="article">
    <div class="subdirectory">
        <div class="link_category">
            <a href="">Home<span class="arrow"></span></a>
            <a href="" class="active">Vip<span class="arrow"></span></a>
        </div>
        <h3>Please fill in the form below and start your bookung</h3>
        <div class="form_bron">
<<<<<<< HEAD
            <div class="form_content">
                <form id="forma_add" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                    <label class="bron_label_style_one">Place of departure:</label>
                    <input id="add_departure" type="text" name="departure_point" value="" class="bron_input_style_one">

                    <label class="bron_label_style_one">Place of destination:</label>
                    <select id="add_destination" name="destination" class="bron_input_style_one">
                        <option value="Macao">Macao</option>
=======
            <form action="">
                <div class="res_form">
                    <label class="bron_label_style_one">Place of departure:</label>
                    <input type="text" name="" value="" class="bron_input_style_one">
                </div>
                <div class="res_form">
                    <label class="bron_label_style_one">Place of destination:</label>
                    <select id="options1">
                        <option disabled selected>1</option>
                        <option value="macao">Macao</option>
>>>>>>> 7e3f7f42e20863129c5558e98d6c0da460901e1d
                    </select>
                </div>
                <div class="res_form">
                    <label class="bron_label_style_one">Number of people:</label>
<<<<<<< HEAD
                    <select id="add_people" name="count_people" class="bron_input_style_one">
=======
                    <select id="options2">
                        <option disabled selected>1</option>
>>>>>>> 7e3f7f42e20863129c5558e98d6c0da460901e1d
                        <option value="1">1</option>
                    </select>
                </div>
                <div class="res_form">
                    <label class="bron_label_style_one">Date of departure:</label>
                    <p class="bron_label_style_three">
                        <input type="text" name="" value="" class="tcal">
                    </p>

<<<<<<< HEAD
                    <div class="bron_div_style_foure">
                        <label class="bron_label_style_foure1">Date of departure:</label>
                        <input id="add_date_of" type="text" name="date_of_departure" value="" class="bron_input_style_foure">

                        <label class="bron_label_style_foure2">Date departure </label>
                        <input id="add_date" type="text" name="date_of_change" value="" class="bron_input_style_foure">
                    </div>
                    <input id="add_cat_id" type="hidden" name="cat_id" value="<?=$id ?>" class="bron_input_style_two">
                    <input id="add_to_package" type="submit" value="Book now" class="bron_submit">
                </form>
            </div>
=======
                </div>
                <div class="res_form">
                    <label class="bron_label_style_one">Return date:</label>
                    <p class="bron_label_style_three">
                        <input type="text" name="" value="" class="tcal">
                    </p>
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

        $('#add_to_package').on('click', function () {
            var form_add = $("#forma_add")[0];
            var vse_polya_add = new FormData(form_add);
            $.ajax({
                method: "POST",
                url: "/actionreserve/insert_package",
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
>>>>>>> 7e3f7f42e20863129c5558e98d6c0da460901e1d
    });
</script>
 