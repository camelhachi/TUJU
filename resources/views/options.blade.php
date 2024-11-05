<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/options.css')}}" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css">
    <title>Options</title>
</head>

<body>

    <div class="container">
        <!-- Navigation Bar -->
        <div class="navbar">
            <img src="elements/tujulogo.png" class="logo">
            <nav>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Locations</a></li>
                    <li><a href="">About Tuju</a></li>
                    <li><a href="">FAQ</a></li>
                </ul>
            </nav>
            <button class="signup">Sign Up</button>
            <img src="elements/shoppingcart.png" class="cart-icon">
            <img src="elements/profile2.png" class="profile-icon">
        </div>
    </div>
    <!-- Cover -->
    <div class="cover">
        <img src="elements/optionsbg.png" alt="" class="bgcover">
    </div>
    <!-- filter -->
    <div class="filter">
        <div class="filter-box">
            <!-- room type -->
            <div class="room-type-box">
                <div class="room-type">
                    <select class="textwrapmark4">
                        <option value="option1">Room Type..</option>
                        <option value="option2">Hotel Room</option>
                        <option value="option3">Multipurpose Room</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
            </div>
            <!-- location -->
            <div class="room-type-box">
                <div class="room-type">
                    <select class="textwrapmark4">
                        <option value="option1">Search Locations..</option>
                        <option value="option2">Wijaya Kusuma Homes Syariah</option>
                        <option value="option3">Abuserin Syariah</option>
                        <option value="option4">Arteri Pods</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
            </div>
            <!-- checkin -->
            <div class="framemark">
                <i class='bx bx-calendar'></i>
                <div class="framemark2" onclick="toggleCalendar('checkInDate', event)">
                    <div class="textwrapmark">Check-In</div>
                    <div class="textwrapmark2" id="checkInDate">YYYY-MM-DD</div>
                </div>
                <div class="calendar-dropdown" id="checkInCalendarDropdown">
                    <!-- Calendar content will be generated here -->
                </div>
            </div>
            <!-- checkout -->
            <div class="framemark3">
                <i class='bx bx-calendar'></i>
                <div class="framemark2">
                    <div class="framemark2" onclick="toggleCalendar('checkOutDate', event)">
                        <div class="textwrapmark">Check-Out</div>
                        <div class="textwrapmark2" id="checkOutDate">YYYY-MM-DD</div>
                    </div>
                    <div class="calendar-dropdown1" id="checkOutCalendarDropdown">
                        <!-- Calendar content will be generated here -->
                    </div>
                </div>
            </div>
            <button class="search">
                <i class='bx bx-search'></i>
            </button>
        </div>
    </div>
    <div class="main">
        <div class="row">
            <div class="room-card">
                <img src="elements/JW Marriott Marquis Miami.jpeg" alt="">
                <div class="details">
                    <div class="details-name">
                        <div class="pname">Product Name</div>
                        <div class="outlet">Outlet</div>
                    </div>
                    <div class="avl">Availability : 5</div>
                    <div class="fac">
                        <div class="fac1">
                            <i class='bx bx-baguette'></i>
                            <Span class="wifi">Breakfast Included</Span>
                        </div>
                        <div class="fac2">
                            <i class='bx bxs-bowl-rice'></i>
                            <span class="wifi">FnB Included</span>
                        </div>
                    </div>
                </div>
                <div class="details2">
                    <div class="price">Rp 100,000.00</div>
                    <div class="counter">
                        <button onclick="increment()">+</button>
                        <span id="count">0</span>
                        <button onclick="decrement()">-</button>
                    </div>
                    <button class="addcart">Add to Cart</button>
                    <button class="book">Book</button>
                </div>
            </div>


        </div>


    </div>

</body>

</html>