<!-- Date range Picker with calculated days -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- end -->
<!-- Increment & Decrement button -->
<!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<!-- End -->
<!-- <script src="asset/js/jquery-3.2.1.min.js"></script> -->
<script src="asset/js/popper.js"></script>
<script src="asset/js/bootstrap.min.js"></script>
<script src="plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="asset/js/jquery.ajaxchimp.min.js"></script>
<script src="asset/js/mail-script.js"></script>
<script src="plugins/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
<script src="plugins/nice-select/js/jquery.nice-select.js"></script>
<script src="asset/js/mail-script.js"></script>
<script src="asset/js/stellar.js"></script>
<script src="plugins/lightbox/simpleLightbox.min.js"></script>
<script src="asset/js/custom.js"></script>
<!-- Google Map -->
<script src="https://www.google.com/maps/place/Eastern+Visayas+State+University+-+Ormoc+City+Campus/@11.0102601,124.6034471,17z/data=!3m1!4b1!4m5!3m4!1s0x3307f131d2ab0ad5:0xc22c5f5d5de97bf1!8m2!3d11.0102548!4d124.6056358"></script>
<script src="asset/js/google_map.js"></script>
<!-- Modal JavaScript File -->
<script src="plugins/wow/wow.min.js"></script>
<script src="plugins/slick/slick.min.js"></script>
<!-- Main Javascript File -->
<script src="asset/js/main.js"></script>


<script>
    $('.fromdate').datepicker({
        // dateFormat: 'mm-dd-yy',
        dateFormat: 'D, M d yy',
        minDate: new Date(),
        changeMonth: true,
        changeYear: true,
    });
    $('.todate').datepicker({
        dateFormat: 'D, M d yy',
        changeMonth: true,
        changeYear: true,
    });
    $('.fromdate').datepicker().bind("change", function() {
        var minValue = $(this).val();
        minValue = $.datepicker.parseDate("D, M d yy", minValue);
        $('.todate').datepicker("option", "minDate", minValue);
        calculate();
    });
    $('.todate').datepicker().bind("change", function() {
        var maxValue = $(this).val();
        maxValue = $.datepicker.parseDate("D, M d yy",
            maxValue);
        $('.fromdate').datepicker("option", "maxDate", maxValue);
        calculate();
    });

    function calculate() {
        var d1 = $('.fromdate').datepicker('getDate');
        var d2 = $('.todate').datepicker('getDate');
        var oneDay = 24 * 60 * 60 * 1000;
        var diff = 0;
        if (d1 &&
            d2) {
            diff = Math.round(Math.abs((d2.getTime() - d1.getTime()) / (oneDay)));
        }
        $('.calculated').val(diff);
    }
</script>
<script>
    $(document).ready(function() {
        var quantitiy = 0;
        $('.quantity-adult-plus').click(function(e) {
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#adult').val());
            // If is not undefined
            $('#adult').val(quantity + 1);
            // Increment
        });
        $('.quantity-adult-minus').click(function(e) {
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#adult').val());
            // If is not undefined
            // Increment
            if (quantity > 0) {
                $('#adult').val(quantity - 1);
            }
        });
    });

    $(document).ready(function() {
        $('.quantity-child-plus').click(function(e) {
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#child').val());
            // If is not undefined
            $('#child').val(quantity + 1);
            // Increment
        });
        $('.quantity-child-minus').click(function(e) {
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#child').val());
            // If is not undefined
            // Increment
            if (quantity > 0) {
                $('#child').val(quantity - 1);
            }
        });
    });
</script>