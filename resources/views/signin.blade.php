<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/signin.css')}}" />
    <title>Sign In</title>
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

    <!-- form -->
    <div class="con">
        <div class="content">
            <div class="col1">
                <div class="text">Sign In</div>
            </div>
            <div class="signup">
                <div class="signup-box">
                    <div class="inputcon">
                        <div class="inputs">
                            <label for="name" class="text-wrapper-2">Username</label>
                            <input type="text" id="name" class="rectangle" />
                            <label for="name" class="text-wrapper-2">Password</label>
                            <input type="text" id="name" class="rectangle" />
                        </div>
                        <div class="bottom">
                            <button class="signupbut">Sign In</button>
                            <div class="bottom-text">
                                <div class="bottext">Don't have an account yet?</div>
                                <div class="bottext2">Sign Up here.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>