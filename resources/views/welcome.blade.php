<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Shop</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <!--link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /-->
        <!-- Styles -->
        <link href="/css/main.css" rel="stylesheet">
    </head>
    <body>
        <div class = "header">
            <div class="logoArea"><a href="#" onclick="myAllFunction()"> <img src="/images/logo.jpeg" class="logo"></div>
            <div class="nav">
                <ul>
                    <li><a href="#" onclick="myFruitFunction()">Fruits</li>
                    <li><a href="#" onclick="myVegeFunction()">Vegetables</li>
                    <li><a href="#" onclick="myGroFunction()">Groceries</li>
                    <li><a href="#" onclick="myDrinkFunction()">Drinks</li>
                    <li><a href="#" onclick="myMilkFunction()">Dairy</li>
                    <li><a href="#" onclick="myFroFunction()">Frozen</li>
                    <li><a href="#" onclick="myOtherFunction()">Others</li>
                </ul>
            </div>

            <div class="search">
                <input type="text">
                <button>Search</button>
            </div>
            @if (Route::has('login'))
                <div class="userState">
                    @auth
                        <a class="dashboard" href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a class="login" href="{{ route('login') }}">Log in</a>

                        @if (Route::has('register'))
                            <a class="signup" href="{{ route('register') }}">Sign Up</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        <div class="mainWindow">
            <div class="mainHead"><p id="demo">All Products</p></div>
            <div class="mainBody">
                <ul class="clearfix">
                    @foreach($products as $product)
                    <li>
                        <img src="images/testphoto.jpeg">
                        <h4>{{$product->name}}</h4>
                        <h5>{{$product->description}}</h5>
                        <h3>${{$product->price}} / {{$product->unit}}</h3>
                    </li>
                    @endforeach
                    
                </ul>
            </div>
        </div>
        <div class="footer"></div>

        <script>
            function myFruitFunction() {
                document.getElementById("demo").innerHTML = "Fruit";
            }
            function myVegeFunction() {
                document.getElementById("demo").innerHTML = "Vegetable";
            }
            function myGroFunction() {
                document.getElementById("demo").innerHTML = "Groceries";
            }
            function myDrinkFunction() {
                document.getElementById("demo").innerHTML = "Drink";
            }
            function myMilkFunction() {
                document.getElementById("demo").innerHTML = "Dairy";
            }
            function myFroFunction() {
                document.getElementById("demo").innerHTML = "Frozen";
            }
            function myOtherFunction() {
                document.getElementById("demo").innerHTML = "Other Products";
            }
            function myAllFunction() {
                document.getElementById("demo").innerHTML = "All Products";
            }
        </script>
    </body>
</html>
