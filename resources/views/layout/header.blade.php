<div class="header">
    <div class="headertop_desc">
        <div class="call">
            <p><span>Need help?</span> call us <span class="number">1-22-3456789</span></p>
        </div>
        <div class="account_desc">
            <ul>
                <li><a href="#">Delivery</a></li>
                <li><a href="#">Checkout</a></li>
                @if(!Auth::check())
                    <li><a href="{{url('/register')}}">Register</a></li>
                    <li><a href="{{url('/login')}}">Login</a></li>
                @else
                    <li><a href="{{url('/account')}}">Account</a></li>
                    <li><a href="{{url('/logout')}}">Logout</a></li>
                @endif
            </ul>
        </div>
        <div class="clear"></div>
    </div>
    <div class="header_top">
        <div class="logo">
            <a href="{{url('/')}}"><img src="{{url('images/logo.png')}}" alt="" /></a>
        </div>
        <div class="cart">
            <p>Welcome to our Online Store! <span>Cart:</span><div id="dd" class="wrapper-dropdown-2"> 0 item(s) - $0.00
                <ul class="dropdown">
                    <li>you have no items in your Shopping cart</li>
                </ul></div></p>
        </div>
        <div class="clear"></div>
    </div>
    <div class="header_bottom">
        <div class="menu">
            <ul>
                <li class="active"><a href="{{url('home')}}">Home</a></li>
                <li><a href="{{url('/about')}}">About</a></li>
                <li><a href="{{url('/delivery')}}">Delivery</a></li>
                <li><a href="{{url('/news')}}">News</a></li>
                <li><a href="{{url('/contact')}}">Contact</a></li>
                <div class="clear"></div>
            </ul>
        </div>
        <div class="search_box">
            <form>
                <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
            </form>
        </div>
        <div class="clear"></div>
    </div>
</div>