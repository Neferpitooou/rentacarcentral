<!-- Main content -->
<section class="reservation_area section_gap">
    <!-- Default box -->
    <div class="container">
        <div class="card">
            <div class="card-body row">
                <div class="col-5 text-center d-flex align-items-center justify-content-center">
                    <div class="">
                        <p class="lead mb-5">Car Use
                        <p class="details">The vehicle may only be used within Region 8 (Leyte-Samar-Biliran area). The car shall not be used for any illegal purpose and/or other purposes that are not stated in the contract.</p>
                        <p><span class="sub-title">Requirements for Self-drive</span></p>
                        <p class="details"><strong>1.</strong> Driver's License<br />
                            <strong>2.</strong> 2 Valid Government Issued ID (Philippine Resident), Passport (Foreign Resident).<br />
                            <strong>3.</strong> PHP 5,000 Security Deposit. You will provide this when you get the car. This will be given back to you in full upon returning the car and there are no damages.<br />
                            <strong>4.</strong> Full rental payment in cash upon delivery. If you prefer to pay using credit card or PayPal, you need to pay prior to your rental date.
                        </p>
                        <p><span class="sub-title">Reservation Fee</span></p>
                        <p class="details">This is to reserve you the car prior to your arrival. This will be deducted from your total rental fee. Reservation Fee may be paid through PayPal, Credit Card, Western Union, Bank Deposit, and Money Remittance (e.g. Palawan, Cebuana, M Lhuillier, 7-Eleven, LBC, Bayad Center, Maya, GCash). We will send you the details once you submit your reservation. Reservation fee is non-refundable.</p>
                        </p>
                    </div>
                </div>
                <div class="mx-auto col-lg-5">
                    <div class="p-4 p-md-10 border rounded-3 bg-light">
                        <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Name* " required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="cont_num" class="form-control" id="floatingInput" placeholder="Contact Number:* " required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="email" class="form-control" id="floatingPassword" placeholder="Email*" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="pic_location" class="form-control" id="floatingPassword" placeholder="Pick-up Location*" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="fa-sharp fa-solid fa-location-dot"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Date and time range -->
                        <div class="form-group">
                            <label>Date and time range:</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-clock"></i></span>
                                </div>
                                <input type="text" class="form-control float-right" id="reservationtime">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label>Select a Car</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">Hatchback</option>
                                <option>Sedan</option>
                                <option>MPV (7 Seater)</option>
                                <option>MPV (9 Seater)</option>
                                <option>Pickup Car</option>
                                <option>SUV</option>
                                <option>Van</option>
                                <option>Luxury Van</option>
                                <option>Motorcycle</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="Radio1" checked>
                                    <label class="form-check-label">With driver at PHP 700 per day</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="Radio2">
                                    <label class="form-check-label">Self-drive</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Payment Platform for Reservation Fee</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">GCash</option>
                                <option>Paymaya</option>
                                <option>Paypal</option>
                                <option>Western Union</option>
                                <option>Palawan</option>
                                <option>Cebuana</option>
                                <option>M Lhuillier</option>
                                <option>LBC</option>
                                <option>Others - Please specify in the Additional Instruction</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                        </div>
                        <hr class="my-4">
                        <div class="form-group">
                            <input type="submit" onclick="return Validate()" name="send" class="btn btn-warning btn-lg btn-block" value="Send">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

            //Date and time picker
            $('#reservationdatetime').datetimepicker({
                icons: {
                    time: 'far fa-clock'
                }
            });

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            })

            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

        })
        // BS-Stepper Init
        document.addEventListener('DOMContentLoaded', function() {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })

        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = ""
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "/target-url", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })

        myDropzone.on("addedfile", function(file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function() {
                myDropzone.enqueueFile(file)
            }
        })

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        })

        myDropzone.on("sending", function(file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1"
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        })

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
            document.querySelector("#total-progress").style.opacity = "0"
        })

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        }
        document.querySelector("#actions .cancel").onclick = function() {
            myDropzone.removeAllFiles(true)
        }
        // DropzoneJS Demo Code End
    </script>
</section>
<!-- /.content -->