<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/form.css')}}" />
    <title>Form</title>
</head>

<body>
    <!-- Logo -->
    <div class=tujulogo>
        <img class="logo" src="elements/tujulogo.png" />
    </div>
    <div class="formcontent">
        <!-- kiri -->
        <div class="column1">
            <!-- Contact details -->
            <div class="contactdetails">
                <div class="details">
                    <div class="text-wrapper">Contact details</div>
                    <div class="row1">
                        <label for="name" class="text-wrapper-2">Name</label><br>
                        <input type="text" id="name" class="rectangle" />

                    </div>
                    <div class="row2">
                        <div class="col1">
                            <label for="phone" class="text-wrapper-3">Phone Number</label><br>
                            <input type="tel" id="phone" class="rectangle-2" />
                        </div>
                        <div class="col2">
                            <label for="email" class="text-wrapper-4">Email</label><br>
                            <input type="email" id="email" class="rectangle-3" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="title">
                Guest Information   
            </div>

            <!-- Guest info -->
            <div class="guest">
                <div class="guestbox">
                    <div class="guestcontent">
                        <div class="col3">
                            <div class="num">1</div>
                        </div>
                        <div class="col1">
                            <div class="rname">Room Name</div>
                            <div class="outlet">Outlet</div>
                            <img class="img" src="img/rectangle-656.svg" />
                        </div>
                        <div class="col4">
                            <div class="text-wrapper-9">Check-In:
                                <div class="text-wrapper-91"> YYYY-MM-DD</div>
                            </div>

                            <div class="text-wrapper-10">Check-Out:
                                <div class="text-wrapper-101"> YYYY-MM-DD</div>
                            </div>
                        </div>
                        <div class="col2">
                            <div class="text-wrapper-6">Guest Information</div>
                            <label for="guestName" class="text-wrapper-7">Name</label>
                            <input type="text" id="guestName" class="rectangle-4" />
                            <label for="guestNumber" class="text-wrapper-8">Phone Number</label>
                            <input type="text" id="guestNumber" class="rectangle-5" />
                        </div>

                    </div>
                </div>
            </div>
            <div class="guest">
                <div class="guestbox">
                    <div class="guestcontent">
                        <div class="col3">
                            <div class="num">1</div>
                        </div>
                        <div class="col1">
                            <div class="rname">Room Name</div>
                            <div class="outlet">Outlet</div>
                            <img class="img" src="img/rectangle-656.svg" />
                        </div>
                        <div class="col4">
                            <div class="text-wrapper-9">Check-In:
                                <div class="text-wrapper-91"> YYYY-MM-DD</div>
                            </div>

                            <div class="text-wrapper-10">Check-Out:
                                <div class="text-wrapper-101"> YYYY-MM-DD</div>
                            </div>
                        </div>
                        <div class="col2">
                            <div class="text-wrapper-6">Guest Information</div>
                            <label for="guestName" class="text-wrapper-7">Name</label>
                            <input type="text" id="guestName" class="rectangle-4" />
                            <label for="guestNumber" class="text-wrapper-8">Phone Number</label>
                            <input type="text" id="guestNumber" class="rectangle-5" />
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!-- Kanan -->
        <!-- reservation summary -->
        <div class="column2">
            <div class="col-2">
                <div class="summary">
                    <div class="summary-box">
                        <div class="sumboxtext">
                            <div class="sumtext">Reservation Summary :</div>
                            <div class="subtot">Rp 1,000,000.00</div>
                        </div>
                        <button class="payment">Proceed to Payment</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>