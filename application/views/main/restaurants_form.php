<div class="article">
    <div class="subdirectory">
        <div class="link_category">
            <a href="">Home<span class="arrow"></span></a>
            <a href="" class="active">Vip<span class="arrow"></span></a>
        </div>
        <h3>Information filling for restaurant booking</h3>
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
        </div>
    </div>
 </div>
<script>
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
</script>
 