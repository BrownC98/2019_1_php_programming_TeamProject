<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">BRC.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                <?php
                if($_SESSION[id]) {
                    // Login state
                    echo "<li class='nav-item'><a id=\"mybook\" href=\"blog.php\"class='nav-link'>Mybooks</a></li>";
                    echo "<li class='nav-item cta'><a id=\"logout\" href=\"function/logout.php\"class='nav-link'>Logout</a></li>";
                } else {
                    // Logout state
                    echo "<li class=\"nav-item cta\"><a href=\"#\" class=\"nav-link\" id=\"login\"><span>Log in</span></a></li>";
                }
                ?>

            </ul>
        </div>
    </div>
</nav>