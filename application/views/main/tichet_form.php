<div class="article">
    <div class="subdirectory">
        <h3>Information filling for ticket booking</h3>
        <div class="form_bron">
            <div class="form_content">
                <form id="forma_add" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                    <label class="bron_label_style_one">Data:</label>
                    <input type="date" name="date" value="" class="bron_input_style_one">

                    <label class="bron_label_style_one">Type:</label>
                    <select class="bron_input_style_one" name="type">
                        <option value="VIP reserve">VIP reserve</option>
                    </select>

                    <label class="bron_label_style_one">Number of people:</label>
                    <select class="bron_input_style_one" name="count_people">
                        <option>1</option>
                    </select>
                    <input id="add_cat_id" type="hidden" name="cat_id" value="<?=$id ?>" class="bron_input_style_two">
                    <input id="add_ticket" type="submit" value="Book now" class="bron_submit">
                </form>
            </div>
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
</script>