<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Makaan - Real Estate HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Fancybox Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid nav-bar bg-transparent">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
            <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
                <div class="icon p-2 me-2">
                    <img class="img-fluid" src="assets/img/icon-deal.png" alt="Icon" style="width: 30px; height: 30px;">
                </div>
                <h1 class="m-0 text-primary">Makaan</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="index.php" class="nav-item nav-link" onclick="setActive(this)">Home</a>
                    <a href="about.php" class="nav-item nav-link" onclick="setActive(this)">About</a>
                    <a href="service_center.php" class="nav-item nav-link" onclick="setActive(this)">Service Center</a>
                    <a href="info.php" class="nav-item nav-link" onclick="setActive(this)">Info</a>
                    <a href="contact.php" class="nav-item nav-link" onclick="setActive(this)">Contact</a>
                </div>
                <a href="" class="btn btn-primary px-3 d-none d-lg-flex">Add</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <script>
        // Function to add 'active' class to the clicked link
        function setActive(element) {
            // Remove 'active' class from all nav links
            document.querySelectorAll('.nav-item.nav-link').forEach((link) => {
                link.classList.remove('active');
            });

            // Add 'active' class to the clicked link
            element.classList.add('active');
        }

        // Function to set 'active' class based on the current page URL
        function setActiveByUrl() {
            const links = document.querySelectorAll('.nav-item.nav-link');
            const currentPath = window.location.pathname;

            links.forEach((link) => {
                // Compare the link's href with the current URL path
                if (link.getAttribute('href') === currentPath ||
                    currentPath.endsWith(link.getAttribute('href').split('/').pop())) {
                    link.classList.add('active');
                }
            });
        }

        // Call the function on page load
        window.onload = setActiveByUrl;
    </script>
</body>

</html>