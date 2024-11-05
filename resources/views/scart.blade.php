<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/scart.css')}}" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css">
    <title>Shopping</title>
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
    <div class="top">
        <h1>My Shopping Cart</h1>
    </div>

    <!-- Cart content -->
    <div class="cart-content">
        <!-- yg kiri -->
        <div class="col1">
            <div class="contents">
                <div class="overlap-3">
                    <div class="rectangle-3"></div>
                    <div class="rectangle-4"></div>
                    @if(isset($roomData))
                    <div class="text-wrapper-8">{{ $roomData['price'] }}</div>
                    <img class="img" src="elements/Rectangle 665.png" />
                    <input type="checkbox" id="checkbox" class="rectangle-5" />
                    <div class="text-wrapper-9">Check-In:
                        <div class="text-wrapper-91"> YYYY-MM-DD</div>
                    </div>
                    <div class="text-wrapper-10">Check-Out:
                        <div class="text-wrapper-101"> YYYY-MM-DD</div>
                    </div>

                    <div class="text-wrapper-11">{{ $roomData['roomType'] }}</div>
                    <div class="text-wrapper-12"> {{ $roomData['quantity'] }}x {{ $roomData['roomType'] }}</div>
                    <div class="text-wrapper-13">{{ $roomData['outletName'] }}</div>
                    @endif
                </div>
               
        <!-- yg kanan -->
        <div class="col2">
            <div class="summary">
                <div class="summary-box">
                    <div class="sumboxtext">
                        <div class="sumtext">Subtotal :</div>
                        <div class="subtot">{{ $roomData['price'] }}/div>
                    </div>
                    <button class="payment">Proceed to Checkout</button>
                </div>
            </div>
            <div class="del">
                <button class="delete"><i class='bx bxs-trash-alt'></i>Delete Item(s)</button>
                 
            </div>
        </div>
    
</body>

</html>