<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>business website</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" 
    integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer"/>
    <!-- bootstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
</head>
<body>
<nav class="nav navbar navbar-expand-lg position-fixed top-0 w-100" id="topNavigation">
    <div class="container-md">
        <a class="navbar-brand" href="./">Aaron Enterprises Business Website</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about_us">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact_us">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div id="carouselExample" class="carousel slide" data-bs-ride="true" data-bs-interval="3000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/company-2.jpg" class="d-block w-100" alt="Company Image">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="font-tillana fw-bold">Precise and Reliable</h1>
                <p>Our company provides an effective and efficient products and services.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/company-1.jpg" class="d-block w-100" alt="Company Image">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="font-tillana fw-bold">No Long Queues</h1>
                <p>Industries don't need to assign additional security to manage huge crowd.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/company-3.jpg" class="d-block w-100" alt="Company Image">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="font-tillana fw-bold">Great Flexibility</h1>
                <p>Various types of reports can be generated in quick time with minor changes in the design.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="container-md">
    <h1 class="text-center font-tillana">About Us</h1>
    <hr class="mx-auto opacity-100" style="width:50px;height: 3;">
    <p>Aaron Enterprises is our trading company, also known as electronic commerce or e-business, is simply the buying and selling of goods and services via an electronic medium, mainly the internet. It focusing on specifics for business.</p>
</div>
<div class="container-md">
    <h1 class="text-center font-tillana">Gallery</h1>
    <hr class="mx-auto opacity-100" style="width:50px;height: 3;">
    <div id="gallery-categories">
        <button class="btn btn-light border text-dark active" data-category="all">All</button>
        <button class="btn btn-light border text-dark" data-category="category_1">Category 1</button>
        <button class="btn btn-light border text-dark" data-category="category_2">Category 2</button>
        <button class="btn btn-light border text-dark" data-category="category_3">Category 3</button>
    </div>
    <div id="gallery-container" class="container-fluid">
        <div class="gallery-item" data-category="category_1">
            <img src="images/company-1.jpg" alt="">
        </div>
        <div class="gallery-item" data-category="category_2">
            <img src="images/company-6.jpg" alt="">
        </div>
        <div class="gallery-item" data-category="category_3">
            <img src="images/company-3.jpg" alt="">
        </div>
        <div class="gallery-item" data-category="category_1">
            <img src="images/company-4.jpg" alt="">
        </div>
        <div class="gallery-item" data-category="category_2">
            <img src="images/company-2.jpg" alt="">
        </div>
        <div class="gallery-item" data-category="category_3">
            <img src="images/company-8.jpg" alt="">
        </div>
        <div class="gallery-item" data-category="category_1">
            <img src="images/company-5.jpg" alt="">
        </div>
        <div class="gallery-item" data-category="category_2">
            <img src="images/company-7.jpg" alt="">
        </div>
        <div class="gallery-item" data-category="category_3">
            <img src="images/company-9.jpg" alt="">
        </div>
    </div>
</div>
<div class="container-md">
    <h1 class="text-center font-tillana">Contact US</h1>
    <hr class="mx-auto opacity-100" style="width:50px;height: 3;">
    <div class="col-lg-10 col-md-10 col-sm-12 col-12 mx-auto">
        <form action="" method="POST">
            <div class="row mb-3 align-items-end">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <label for="Fullname" class="form-label text-white-50">Fullname</label>
                    <div class="input-group">
                        <input type="text" class="form-control rounded-0" placeholder="Fullname" aria-label="Fullname" aria-describedby="fullname-group">
                        <span class="input-group-text rounded-0" id="fullname-group">
                            <span class="material-symbols-outlined text-body-secondary">person</span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row mb-3 align-items-end">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <label for="Email" class="form-label text-white-50">Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control rounded-0" placeholder="Email" aria-label="Email" aria-describedby="Email-group">
                        <span class="input-group-text rounded-0" id="Email-group">
                            <span class="material-symbols-outlined text-body-secondary">alternate_email</span>
                        </span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <label for="Phone" class="form-label text-white-50">Phone</label>
                    <div class="input-group">
                        <input type="text" class="form-control rounded-0" placeholder="Phone" aria-label="Phone" aria-describedby="Phone-group">
                        <span class="input-group-text rounded-0" id="Phone-group">
                            <span class="material-symbols-outlined text-body-secondary">call</span>
                        </span>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <label for="message" class="form-label text-white-50">Message</label>
                    <textarea name="message" id="message" placeholder="Write your message here..." rows="5" class="form-control rounded-0"></textarea>
                </div>
            </div>
        </form>
    </div>
</div>
<footer class="footer bg-light py-3">
        <div class="container-md">
            <div class="text-center">All Rights Reserved &copy; <span id="copyright-year"></span></div>
            <div class="text-center">Developed by: <a href="mailto:aaronenterprisespaul@gmail.com" target="_blank">aaronenterprisespaul@gmail.com</a></div>
        </div>
    </footer>
</body>
</html>