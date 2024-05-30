@extends('layout-app.homepage.app')
@section('title', 'Accueil')
@section('content')
@include('layout-app.homepage.header')
<!-- Add this to the <head> section of your HTML -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    

<!-- Styles for animations -->
<style>
    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(-50px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes scaleIn {
        0% {
            transform: scale(0.9);
        }
        100% {
            transform: scale(1);
        }
    }

    .animated-heading {
        animation: fadeIn 2s ease-out;
    }

    .animated-image {
        animation: scaleIn 2s ease-out;
    }
</style>

<!-- Header Start -->
<div class="container-fluid py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div id="first" class="row">
                    <h1 class="display-1 text-black text-dark col-lg-6 col-sm-12 animated-heading">Ecole spécialisée en études techniques</h1>
                    <img src="./assets1/images/img/images/imgpc.png" class="float-end col-lg-6 animated-image" alt="ESET School">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="./assets1/images/img/about.jpg" alt="About Us" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">À Propos</h6>
                <h1 class="mb-4">Bienvenue à ESET School</h1>
                <p class="mb-4">ESET School est une école d’informatique et de gestion qui prépare ses futurs lauréats aux métiers de l’informatique et de la gestion.</p>
                <p class="mb-4">Notre pédagogie met l’accent sur la professionnalisation des étudiants. Un diplômé de ESET réunit les qualités d’un informaticien, d’un comptable et d’un manager ouvert sur l’avenir.</p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Instructeurs qualifiés</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Classes en ligne</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Certificat international</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Formation professionnelle</p>
                    </div>
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="#more-content">Lire la suite</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- More Content Start -->
<div id="more-content" class="container-xxl py-5">
    {{-- <div class="container">
        <h2>À propos de ESET School</h2>
        <p>ESET School offre un programme complet qui combine connaissances théoriques et compétences pratiques. Notre objectif est de doter les étudiants des outils nécessaires pour réussir dans les domaines de l'informatique et de la gestion. Nous mettons l'accent sur l'apprentissage pratique, l'expérience réelle et une perspective mondiale.</p>
        <p>Nos instructeurs qualifiés apportent une richesse d'expérience industrielle et d'expertise académique en classe. Que vous suiviez des cours en ligne ou sur le campus, vous pouvez être assuré de recevoir une éducation de qualité répondant aux normes internationales.</p>
        <p>À ESET School, nous nous engageons à favoriser un environnement d'innovation et d'excellence. Rejoignez-nous pour entreprendre un parcours de croissance professionnelle et personnelle.</p> --}}
    </div>
</div>
<!-- More Content End -->

<!-- Services Start -->
<section class="Services" id="Services">
    <div class="container">
        <h2 class="heading text-center mb-5">Nos Cours <span>Populaires</span></h2>
        <div class="row">
            <div class="services-box col-lg-4 col-md-6">
                <div class="text-center mb-5">
                    <i class="bx bx-code-alt"></i>
                    <h3>Développement Web</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem assumenda dolores suscipit ipsa sunt velit culpa vel, vitae corporis quaerat?</p>
                    <a href="#" class="btn btn-primary">Rejoindre Maintenant</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="services-box text-center mb-5">
                    <i class="bx bx-paint"></i>
                    <h3>Design Graphique</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem assumenda dolores suscipit ipsa sunt velit culpa vel, vitae corporis quaerat?</p>
                    <a href="#" class="btn btn-primary">Rejoindre Maintenant</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="services-box text-center mb-5">
                    <i class="bx bx-bar-chart-alt"></i>
                    <h3>Marketing Digital</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem assumenda dolores suscipit ipsa sunt velit culpa vel, vitae corporis quaerat?</p>
                    <a href="#" class="btn btn-primary">Rejoindre Maintenant</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services End -->

<!-- Testimonial Start -->
<div class="container-fluid py-5 bg-white">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Témoignages</h5>
            <h1 class="text-dark">Ce Que Disent Nos Étudiants</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="text-center">
                                <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                <h4 class="font-weight-normal mb-4">Je suis un lauréat de l’école ESET, j'ai un diplôme de TGI et aussi une licence professionnel en informatique DESINF. D’après ces formations que j'ai reçu de cette école, je suis maintenant un cadre dans une grande société de l'informatique.</h4>
                                <img class="img-fluid mx-auto mb-3" src="./assets1/images/img/testimonial-1.jpg" alt="Testimonial">
                                <h5 class="m-0">Kasli Soufian</h5>
                                <span>Cadre</span>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="text-center">
                                <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                <h4 class="font-weight-normal mb-4">Ecole ESET est une école de qualité de formation et sérieux, toutes les professeurs se sont des cadres professionnels ayant des expériences dans le domaine.</h4>
                                <img class="img-fluid mx-auto mb-3" src="./assets1/images/img/testimonial-2.jpg" alt="Testimonial">
                                <h5 class="m-0">Hicham E.</h5>
                                <span>Étudiant</span>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="text-center">
                                <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                <h4 class="font-weight-normal mb-4">Selon mon expérience comme professeur dans le domaine de l'informatique et dans plusieurs écoles, je trouve école ESET parmi les écoles de qualité et qu'elle est sérieuse dans la formation et aussi même le bon type des stagiaires.</h4>
                                <img class="img-fluid mx-auto mb-3" src="./assets1/images/img/testimonial-3.jpg" alt="Testimonial">
                                <h5 class="m-0">Youssef B.</h5>
                                <span>Professeur Informatique</span>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

@include('layout-app.homepage.foother')
@endsection
