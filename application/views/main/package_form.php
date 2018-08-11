<div class="article">
    <div class="subdirectory">
        <h3>Please fill in the form below and start your bookung</h3>
        <div class="form_bron">
            <div class="form_content">
                <form id="forma_add" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                    <label class="bron_label_style_one">Place of departure:</label>
                    <input id="add_departure" type="text" name="departure_point" value="" class="bron_input_style_one">

                    <label class="bron_label_style_one">Place of destination:</label>
                    <select id="add_destination" name="destination" class="bron_input_style_one">
                        <option value="Macao">Macao</option>
                    </select>

                    <label class="bron_label_style_one">Number of people:</label>
                    <select id="add_people" name="count_people" class="bron_input_style_one">
                        <option value="1">1</option>
                    </select>

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
        </div>
    </div>
 </div>
<script>
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
    });
</script>
 