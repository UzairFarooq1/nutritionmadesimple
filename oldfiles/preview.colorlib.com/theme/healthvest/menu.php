<nav class="navbar navbar-expand-lg ftco-navbar-light">
    <div class="container">
        <a class="navbar-brand align-items-center" href="index.php">
            Nutrition<span>MadeSimple</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-8 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="ibs.php">IBS</a></li>
                <li class="nav-item"><a class="nav-link" href="consultation.php">Consultation</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var currentLocation = window.location.href;
        var navLinks = document.querySelectorAll(".navbar-nav .nav-link");

        navLinks.forEach(function(link) {
            if (link.href === currentLocation) {
                link.classList.add("active");
            }
        });
    });
</script>
