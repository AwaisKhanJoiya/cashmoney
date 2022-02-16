<header class="top-header">
    <nav class="top-nav">
        <img src="includes/img/logo.png" alt="CASHMONEYfx" class="nav-logo">
        <ul class="nav-menu">
            <li class="nav-menu-item"><a href="index.php">Home</a></li>
            <li class="nav-menu-item"><a href="">Brokers</a></li>
            <li class="nav-menu-item"><a href="">Payment Method</a></li>
            <li class="nav-menu-item"><a href="support.php">Support</a></li>
        </ul>
        <span class="divider"></span>
        <div class="right-buttons nav-buttons">
            <a href="" class="login-btn btn">Login</a>
            <a href="" class="login-btn btn">Sign Up</a>
        </div>
        <div class="menu-bars" id="menu-bars">
            <i class="fas fa-bars"></i>
        </div>
    </nav>
    <div class="mobile-nav" id="mobile-nav">
        <p class="close" id="close">Close</p>
        <ul class="mobile-menu">
            <li class="nav-menu-item"><a href="index.php">Home</a></li>
            <li class="nav-menu-item"><a href="">Brokers</a></li>
            <li class="nav-menu-item"><a href="payment_methods.php">Payment Method</a></li>
            <li class="nav-menu-item"><a href="support.php">Support</a></li>
            <li class="nav-menu-item"><a href="support.php">Support</a></li>
        </ul>
        <hr>
        <div class="right-buttons mobile-buttons">
            <a href="" class="login-btn btn">Login</a>
            <a href="" class="login-btn btn">Sign Up</a>
        </div>
    </div>
</header>

<script>
let menu_bar = document.getElementById('menu-bars');
let mobile_nav = document.getElementById('mobile-nav');
let close_nav = document.getElementById('close');


menu_bar.addEventListener('click', () => {
    mobile_nav.style.display = "block";
})

close_nav.addEventListener('click', () => {
    mobile_nav.style.display = "none";
})
</script>