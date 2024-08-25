<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo">
                <span>Recipe</span>
            </a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class='bx bx-menu'></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Product </a>
                    <a class="nav-link" href="#">About</a>
                </div>
                <a href="#" class="btn btn-primary shadow-none">Get Started</a>
            </div>
        </div>
    </nav>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 ">
                    <div class="copy " data-aos="fade-up" data-aos-duration="3000">
                        <div class="text-label">
                            Changes your bussines is more better

                        </div>
                        <div class="text-hero-bold">
                            Grow up your bussines with us
                        </div>
                        <div class="text-hero-regular shadow-none">
                            There are so many variations passages of management Your business</div>
                        <div class="cta">
                            <a href="#" class="btn btn-primary shadow-none ms-3">Explore now</a>
                            <a href="#" class="btn btn-secondary">pricing</a>
                        </div>

                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="3000">
                    <img src="{{ asset('assets/img/foods.png') }}" alt="img">
                </div>
            </div>
        </div>
    </section>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js">
    </script>
    <script>
        AOS.init();
    </script>
</body>

</html>