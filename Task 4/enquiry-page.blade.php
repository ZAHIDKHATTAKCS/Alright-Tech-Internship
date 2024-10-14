@extends('layouts.app')

@section('content')


<!-- #####################   Begin : Zahid Khattak id- 0396    #####################  -->

<div class="container-fluid enquiry-main-container">

    <!-- carousel of main banner starts here-->
    <div id="carouselExampleDark" class="row carousel slide carousel-fade inquiry-carousel mt-5 mt-md-0" data-bs-ride="carousel">
        <div class="carousel-inner ps-0 pe-0">
            <div class="carousel-item active" data-bs-interval="4000">
                <img src="assets/images/enquiry-form-images/inq-hdr-bg-img-1.png" class="d-block carousel-inner-img" alt="enquiry slider image 1">
                <div class="carousel-caption inquiry-carousel-caption">
                    <h2 class="inquiry-carousel-heading">Enquiry Form</h2>
                    <p class="enquiry-p">Fill out the form below and we’ll get back to you promptly with the information you need.</p>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="4000">
                <img src="assets/images/enquiry-form-images/inq-hdr-bg-img-2.png" class="d-block carousel-inner-img" alt="enquiry slider image 2">
                <div class="carousel-caption inquiry-carousel-caption">
                    <h2 class="inquiry-carousel-heading">Enquiry Form</h2>
                    <p class="enquiry-p">Fill out the form below and we’ll get back to you promptly with the information you need.</p>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="4000">
                <img src="assets/images/enquiry-form-images/inq-hdr-bg-img-3.png" class="d-block carousel-inner-img" alt="enquiry slider image 3">
                <div class="carousel-caption inquiry-carousel-caption">
                    <h2 class="inquiry-carousel-heading">Enquiry Form</h2>
                    <p class="enquiry-p">Fill out the form below and we’ll get back to you promptly with the information you need.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- carousel of main banner ends here-->


    <!-- enquiry section starts here -->
    <section class="mt-5 enquiry-form-section">

        <!-- Location form starts here -->
        <div class="container enquiry-location-container">
            <!-- overlay div -->
            <div class="row enquiry-overlay d-flex flex-wrap d-md-flex flex-md-column justify-content-md-start align-items-md-center">
                <div class=" mt-5 rounded enquiry-form-div">
                    <p>Where</p>
                    <input type="text" class="enquiry-input form-control" placeholder=" Location">
                    <br><br>
                </div>
                <!-- overlay div buttons -->
                <div class="d-flex justify-content-between align-items-center d-md-flex justify-content-md-between align-items-md-center enquiry-btns-div">
                    <button class="button-fill enquiry-btn rounded">Cancel</button>
                    <button class="button-fill enquiry-nxt-btn">Next</button>
                </div>
            </div>
        </div>
        <!-- Location form ends here -->



        <!-- Date form starts here -->
        <div class="container enquiry-date-container">
            <!-- overlay div -->
            <div class="row enquiry-overlay d-flex flex-wrap d-md-flex flex-md-column justify-content-md-start align-items-md-center">
                <div class=" mt-5 rounded enquiry-form-div">
                    <p>When</p>

                    <!-- Enquiry Select event type dropdown starts here-->
                    <div class="dropdown ">
                        <button class="btn btn-secondary dropdown-toggle enquiry-drpdwn-togle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            Select Event Type
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li class="dropdown-item">
                                <input type="radio" class="enquiry-inputs" id="Single-Serving" name="eventType" value="Single Serving">
                                <label for="Single-Serving" class="enquiry-labels">Single Serving</label>
                            </li>
                            <hr class="enquiry-divider">
                            <li class="dropdown-item ">
                                <input type="radio" id="event2" class="enquiry-inputs" name="eventType" value="Several Days">
                                <label for="event2" class="enquiry-labels">Several Days</label>
                            </li>
                        </ul>
                    </div>

                    <!-- Javascript code for dropdown starts here -->
                    <script>
                        const dropdownButton = document.getElementById('dropdownMenuButton');
                        const radioButtons = document.querySelectorAll('input[name="eventType"]');

                        radioButtons.forEach(radio => {
                            radio.addEventListener('change', function() {
                                if (this.checked) {
                                    dropdownButton.textContent = this.value;
                                }
                            });
                        });
                    </script>
                    <!-- Javascript code for dropdown ends here -->


                    <!-- Enquiry Select event type dropdown ends here-->



                    <!-- Calender Code starts here -->
                    <div class="dropdown mt-4">
    <button class="btn btn-secondary dropdown-toggle enquiry-drpdwn-togle" type="button" id="drpdwnmenubtn" data-bs-toggle="dropdown" aria-expanded="false">
        Enter Date
    </button>
    <ul class="dropdown-menu" aria-labelledby="drpdwnmenubtn">
        <li>
            <input type="date" class="enquiry-inputs" id="eventDate" name="eventDate" />
        </li>
    </ul>
</div>

<script>
    // Add event listener to the button to focus on the input when clicked
    document.getElementById('drpdwnmenubtn').addEventListener('click', function() {
        const dateInput = document.getElementById('eventDate');
        dateInput.focus();
        dateInput.showPicker(); // This method opens the date picker immediately
    });

    // Add event listener to the date input to update button text when a date is selected
    document.getElementById('eventDate').addEventListener('input', function() {
        const selectedDate = new Date(this.value);
        const options = { year: 'numeric', month: 'long', day: 'numeric' }; // Format the date as desired
        const formattedDate = selectedDate.toLocaleDateString('en-US', options);
        document.getElementById('drpdwnmenubtn').textContent = formattedDate;
    });
</script>



                    <!-- Calender Code ends here -->


                </div>
                <!-- overlay div buttons -->
                <div class="d-flex justify-content-between align-items-center d-md-flex justify-content-md-between align-items-md-center enquiry-btns-div">
                    <button class="button-fill enquiry-btn rounded">Cancel</button>
                    <button class="button-fill enquiry-nxt-btn">Next</button>
                </div>
            </div>
        </div>
        <!-- Date form ends here -->






    </section>
    <!-- enquiry section ends here -->









</div>


<!-- #####################   End : Zahid Khattak id- 0396    #####################  -->

@endsection