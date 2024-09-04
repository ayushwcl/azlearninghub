<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AZ Learning Hub</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/custom.css">
    
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

    <!-- Header -->
    <?php include('header.php'); ?>

    <!-- Slider -->
    <div id="slider" class="carousel slide" data-ride="carousel" data-interval="3000">
        <ol class="carousel-indicators">
            <li data-target="#slider" data-slide-to="0" class="active"></li>
            <li data-target="#slider" data-slide-to="1"></li>
            <li data-target="#slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/slider1.jpg" alt="Corporate Training">
                <div class="carousel-caption">
                    <h3>Corporate Training</h3>
                    <p>Empower your workforce with cutting-edge skills.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/slider2.jpg" alt="Consulting Services">
                <div class="carousel-caption">
                    <h3>Consulting Services</h3>
                    <p>Expert solutions for your business.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/slider3.jpg" alt="Summer Training">
                <div class="carousel-caption">
                    <h3>Summer Training Program</h3>
                    <p>Enhance your career with our training.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Box Cards Section -->
    <div class="container mt-5">

        <h2 class="text-center mb-4">We provide</h2>
        <div class="row">
            <!-- Box Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="images/icon1.png" class="card-img-top" alt="Icon 1" style="width: 50px; height: 50px;">
                        <h5 class="card-title mt-3">Online Training</h5>
                        <p class="card-text">Brief description of the service goes here. Highlight the key features and benefits.</p>
                    </div>
                </div>
            </div>
            <!-- Box Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="images/icon2.png" class="card-img-top" alt="Icon 2" style="width: 50px; height: 50px;">
                        <h5 class="card-title mt-3">Corporate Training</h5>
                        <p class="card-text">Brief description of the service goes here. Highlight the key features and benefits.</p>
                    </div>
                </div>
            </div>
            <!-- Box Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="images/icon3.png" class="card-img-top" alt="Icon 3" style="width: 50px; height: 50px;">
                        <h5 class="card-title mt-3">Classroom Training</h5>
                        <p class="card-text">Brief description of the service goes here. Highlight the key features and benefits.</p>
                    </div>
                </div>
            </div>
            <!-- Box Card 4 -->
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="images/icon4.png" class="card-img-top" alt="Icon 4" style="width: 50px; height: 50px;">
                        <h5 class="card-title mt-3">Consulting</h5>
                        <p class="card-text">Brief description of the service goes here. Highlight the key features and benefits.</p>
                    </div>
                </div>
            </div>
            <!-- Box Card 5 -->
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="images/icon5.png" class="card-img-top" alt="Icon 5" style="width: 50px; height: 50px;">
                        <h5 class="card-title mt-3">Summer Training</h5>
                        <p class="card-text">Brief description of the service goes here. Highlight the key features and benefits.</p>
                    </div>
                </div>
            </div>
            <!-- Box Card 6 -->
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="images/icon6.png" class="card-img-top" alt="Icon 6" style="width: 50px; height: 50px;">
                        <h5 class="card-title mt-3">Exam Prepration</h5>
                        <p class="card-text">Brief description of the service goes here. Highlight the key features and benefits.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	    <!-- Educational Offer Section -->
   <!-- Educational Offer Section -->
<div class="container">
    <div class="row align-items-center">
        <!-- Content Column -->
        <div class="col-md-6">
            <div class="content">
                <h2 class="mb-4">If You Want to Learn, We Are Here to Teach</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi.</p>
            </div>
        </div>
        <!-- Image Column -->
        <div class="col-md-6">
            <div class="image-wrapper">
                <img src="images/ep-pic.jpg" alt="Educational Image" class="img-fluid">
            </div>
        </div>
    </div>
</div>


<div class="container mt-5">
    <h2 class="text-center mb-4">Why Us?</h2>
    <div class="row">
        <!-- Box Card 1 -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card text-center">
                <div class="card-body">
                    <img src="images/icon1.png" class="card-img-top" alt="Icon 1" style="width: 50px; height: 50px;">
                    <h5 class="card-title mt-3">1-on-1 Training</h5>
                    <p class="card-text">Personalize your learning by scheduling private sessions that fit your busy schedule.</p>
                </div>
            </div>
        </div>
        <!-- Box Card 2 -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card text-center">
                <div class="card-body">
                    <img src="images/icon2.png" class="card-img-top" alt="Icon 2" style="width: 50px; height: 50px;">
                    <h5 class="card-title mt-3">Customized Training</h5>
                    <p class="card-text">Tailor your learning journey by diving deeper into the topics that matter most to you.</p>
                </div>
            </div>
        </div>
        <!-- Box Card 3 -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card text-center">
                <div class="card-body">
                    <img src="images/icon3.png" class="card-img-top" alt="Icon 3" style="width: 50px; height: 50px;">
                    <h5 class="card-title mt-3">4-Hour Sessions</h5>
                    <p class="card-text">Optimize your learning with 4-hour sessions for better knowledge retention. and Lorem Ipsum</p>
                </div>
            </div>
        </div>
        <!-- Box Card 4 -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card text-center">
                <div class="card-body">
                    <img src="images/icon4.png" class="card-img-top" alt="Icon 4" style="width: 50px; height: 50px;">
                    <h5 class="card-title mt-3">Free Demo Class</h5>
                    <p class="card-text">Experience our services firsthand with a free demo class.. and Lorem Ipsum . and Lorem Ipsum</p>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Footer -->
    <?php include('footer.php'); ?>

</body>
</html>
