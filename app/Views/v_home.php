
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Wedding Invitation</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Favicon -->
    <link href="<?= base_url() ?>/wedding/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url() ?>/wedding/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/wedding/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url() ?>/wedding/css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Navbar Start -->
    <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
        <a href="index.html" class="navbar-brand d-block d-lg-none">
            <h1 class="font-secondary text-white mb-n2"><?= $data->pengantin_pria ?? "-"; ?><span class="text-primary">&</span><?= $data->pengantin_wanita ?? "-"; ?></h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto py-0">
                <a href="#home" class="nav-item nav-link active">Home</a>
                <a href="#about" class="nav-item nav-link">About</a>
                <a href="#story" class="nav-item nav-link">Story</a>
                <a href="#gallery" class="nav-item nav-link">Gallery</a>
            </div>
            <a href="index.html" class="navbar-brand mx-5 d-none d-lg-block">
                <h1 class="font-secondary text-white mb-n2"><span class="text-primary">    
                       <?php if (!empty($pengantin)) : ?>
                        <!-- Memanggil properti nama_pengantinpria jika data ditemukan -->
                        <?php echo $pengantin['nama_pengantinpria']; ?>
                    <?php else : ?>
                        <!-- Menampilkan pesan jika tidak ada data yang ditemukan -->
                        <p>Tidak ada data pengantin yang ditemukan.</p>
                    <?php endif; ?>
                   &        
                  <?php if (!empty($pengantin)) : ?>
                        <!-- Memanggil properti nama_pengantinpria jika data ditemukan -->
                        <?php echo $pengantin['nama_pengantinwanita']; ?>
                    <?php else : ?>
                        <!-- Menampilkan pesan jika tidak ada data yang ditemukan -->
                        <p>Tidak ada data pengantin yang ditemukan.</p>
                    <?php endif; ?>
                 </span></h1>
            </a>
            <div class="navbar-nav mr-auto py-0">
                <a href="#family" class="nav-item nav-link">Family</a>
                <a href="#event" class="nav-item nav-link">Event</a>
                <a href="#rsvp" class="nav-item nav-link">RSVP</a>
                <a href="#contact" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5" id="home">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="<?= base_url(); ?>/wedding/img/carousel-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 font-secondary text-white mt-n3 mb-md-4">       <?php if (!empty($pengantin)) : ?>
                        <!-- Memanggil properti nama_pengantinpria jika data ditemukan -->
                        <?php echo $pengantin['nama_pengantinpria']; ?>
                    <?php else : ?>
                        <!-- Menampilkan pesan jika tidak ada data yang ditemukan -->
                        <p>Tidak ada data pengantin yang ditemukan.</p>
                    <?php endif; ?>
                   &        
                  <?php if (!empty($pengantin)) : ?>
                        <!-- Memanggil properti nama_pengantinpria jika data ditemukan -->
                        <?php echo $pengantin['nama_pengantinwanita']; ?>
                    <?php else : ?>
                        <!-- Menampilkan pesan jika tidak ada data yang ditemukan -->
                        <p>Tidak ada data pengantin yang ditemukan.</p>
                    <?php endif; ?>
                 </h1>
                            <div class="d-inline-block border-top border-bottom border-light py-3 px-4">
                                <h3 class="text-uppercase font-weight-normal text-white m-0" style="letter-spacing: 2px;">We're getting married</h3>
                            </div>
                            <button type="button" class="btn-play mx-auto" data-toggle="modal"
                                data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="<?= base_url(); ?>/wedding/img/carousel-2.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 font-secondary text-white mt-n3 mb-md-4">       <?php if (!empty($pengantin)) : ?>
                        <!-- Memanggil properti nama_pengantinpria jika data ditemukan -->
                        <?php echo $pengantin['nama_pengantinpria']; ?>
                    <?php else : ?>
                        <!-- Menampilkan pesan jika tidak ada data yang ditemukan -->
                        <p>Tidak ada data pengantin yang ditemukan.</p>
                    <?php endif; ?>
                   &        
                  <?php if (!empty($pengantin)) : ?>
                        <!-- Memanggil properti nama_pengantinpria jika data ditemukan -->
                        <?php echo $pengantin['nama_pengantinwanita']; ?>
                    <?php else : ?>
                        <!-- Menampilkan pesan jika tidak ada data yang ditemukan -->
                        <p>Tidak ada data pengantin yang ditemukan.</p>
                    <?php endif; ?>
                </h1>
                            <div class="d-inline-block border-top border-bottom border-light py-3 px-4">
                                <h3 class="text-uppercase font-weight-normal text-white m-0" style="letter-spacing: 2px;">We're getting married</h3>
                            </div>
                            <button type="button" class="btn-play mx-auto" data-toggle="modal"
                                data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev justify-content-start" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary px-0" style="width: 68px; height: 68px;">
                    <span class="carousel-control-prev-icon mt-3"></span>
                </div>
            </a>
            <a class="carousel-control-next justify-content-end" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary px-0" style="width: 68px; height: 68px;">
                    <span class="carousel-control-next-icon mt-3"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>        
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">About</h6>
                <h1 class="font-secondary display-4">Groom & Bride</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="row m-0 mb-4 mb-md-0 pb-2 pb-md-0">
                <div class="col-md-6 p-0 text-center text-md-right">
                    <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-5">
                        <h3 class="mb-3">The Groom</h3>
                        <p>       <?php if (!empty($pengantin)) : ?>
                        <!-- Memanggil properti biodata penganti_pria jika data ditemukan -->
                        <?php echo $pengantin['pengantin_pria']; ?>
                    <?php else : ?>
                        <!-- Menampilkan pesan jika tidak ada data yang ditemukan -->
                        <p>Tidak ada data pengantin yang ditemukan.</p>
                    <?php endif; ?></p>
                        <h3 class="font-secondary font-weight-normal text-muted mb-3"><i class="fa fa-male text-primary pr-3"></i>
                        <?php if (!empty($pengantin)) : ?>
                        <!-- Memanggil properti nama_pengantinpria jika data ditemukan -->
                        <?php echo $pengantin['nama_pengantinpria']; ?>
                    <?php else : ?>
                        <!-- Menampilkan pesan jika tidak ada data yang ditemukan -->
                        <p>Tidak ada data pengantin yang ditemukan.</p>
                    <?php endif; ?>
                    </h3>
                        <div class="position-relative">
                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/about-1.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="row m-0">
                <div class="col-md-6 p-0" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/about-2.jpg" style="object-fit: cover;">
                </div>
                <div class="col-md-6 p-0 text-center text-md-left">
                    <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-5">
                        <h3 class="mb-3">The Bride</h3>
                        <p>       <?php if (!empty($pengantin)) : ?>
                        <!-- Memanggil properti biodata penganti_pria jika data ditemukan -->
                        <?php echo $pengantin['pengantin_wanita']; ?>
                    <?php else : ?>
                        <!-- Menampilkan pesan jika tidak ada data yang ditemukan -->
                        <p>Tidak ada data pengantin yang ditemukan.</p>
                    <?php endif; ?></p>
                     <h3 class="font-secondary font-weight-normal text-muted mb-3"><i class="fa fa-female text-primary pr-3"></i>
                        <?php if (!empty($pengantin)) : ?>
                        <!-- Memanggil properti nama_pengantinpria jika data ditemukan -->
                        <?php echo $pengantin['nama_pengantinwanita']; ?>
                    <?php else : ?>
                        <!-- Menampilkan pesan jika tidak ada data yang ditemukan -->
                        <p>Tidak ada data pengantin yang ditemukan.</p>
                    <?php endif; ?>
                 
                    </h3>
                        <div class="position-relative">
                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Story Start -->
    <div class="container-fluid py-5" id="story">
        <div class="container pt-5 pb-3">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Story</h6>
                <h1 class="font-secondary display-4">Our Love Story</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="container timeline position-relative p-0">
                <div class="row">
                    <div class="col-md-6 text-center text-md-right">
                        <img class="img-fluid mr-md-3" src="img/story-1.jpg" alt="">
                    </div>
                    <div class="col-md-6 text-center text-md-left">
                        <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4 ml-md-3">
                            <h4 class="mb-2">First Meet</h4>
                            <p class="text-uppercase mb-2">     
                            <?php if (!empty($pengantin)) : ?>
                        <!-- Memanggil properti biodata penganti_pria jika data ditemukan -->
                        <?php echo $pengantin['alamat_meet']; ?>
                    <?php else : ?>
                        <!-- Menampilkan pesan jika tidak ada data yang ditemukan -->
                        <p>Tidak ada data pengantin yang ditemukan.</p>
                    <?php endif; ?>
                    </p>
                           
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-center text-md-right">
                        <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4 mr-md-3">
                            <h4 class="mb-2">First Date</h4>
                            <?php if (!empty($pengantin)) : ?>
                        <!-- Memanggil properti biodata penganti_pria jika data ditemukan -->
                        <?php echo $pengantin['first_date']; ?>
                    <?php else : ?>
                        <!-- Menampilkan pesan jika tidak ada data yang ditemukan -->
                        <p>Tidak ada data pengantin yang ditemukan.</p>
                    <?php endif; ?>
                    </p>
                 </div>
                    </div>
                    <div class="col-md-6 text-center text-md-left">
                        <img class="img-fluid ml-md-3" src="img/story-2.jpg" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-center text-md-right">
                        <img class="img-fluid mr-md-3" src="img/story-3.jpg" alt="">
                    </div>
                    <div class="col-md-6 text-center text-md-left">
                        <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4 ml-md-3">
                            <h4 class="mb-2">Proposal</h4>
                            <?php if (!empty($pengantin)) : ?>
                        <!-- Memanggil properti biodata penganti_pria jika data ditemukan -->
                        <?php echo $pengantin['proposal']; ?>
                    <?php else : ?>
                        <!-- Menampilkan pesan jika tidak ada data yang ditemukan -->
                        <p>Tidak ada data pengantin yang ditemukan.</p>
                    <?php endif; ?>
                    </p>
                </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-center text-md-right">
                        <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4 mr-md-3">
                            <h4 class="mb-2">Engagement</h4>
                            <?php if (!empty($pengantin)) : ?>
                        <!-- Memanggil properti biodata penganti_pria jika data ditemukan -->
                        <?php echo $pengantin['engagement']; ?>
                    <?php else : ?>
                        <!-- Menampilkan pesan jika tidak ada data yang ditemukan -->
                        <p>Tidak ada data pengantin yang ditemukan.</p>
                    <?php endif; ?>
                    </p>     </div>
                    </div>
                    <div class="col-md-6 text-center text-md-left">
                        <img class="img-fluid ml-md-3" src="img/story-4.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Story End -->


    <!-- Gallery Start -->
    <div class="container-fluid bg-gallery" id="gallery" style="padding: 120px 0; margin: 90px 0;">
        <div class="section-title position-relative text-center" style="margin-bottom: 120px;">
            <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Gallery</h6>
            <h1 class="font-secondary display-4 text-white">Our Photo Gallery</h1>
            <i class="far fa-heart text-white"></i>
        </div>
        <div class="owl-carousel gallery-carousel">
            <div class="gallery-item">
                <img class="img-fluid w-100" src="<?= base_url();?>/wedding/img/<?= $gallery['foto']?>" alt="">
                <a href="img/gallery-1.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
             <div class="gallery-item">
             <img class="img-fluid w-100" src="<?= base_url();?>/wedding/img/<?= $gallery['foto2']?>" alt="">
                <a href="img/gallery-2.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div> 
            <div class="gallery-item">
            <img class="img-fluid w-100" src="<?= base_url();?>/wedding/img/<?= $gallery['foto3']?>" alt="">
                            <a href="img/gallery-3.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
            <div class="gallery-item">
            <img class="img-fluid w-100" src="<?= base_url();?>/wedding/img/<?= $gallery['foto4']?>" alt="">
                <a href="img/gallery-4.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
            <div class="gallery-item">
            <img class="img-fluid w-100" src="<?= base_url();?>/wedding/img/<?= $gallery['foto5']?>" alt="">
            
                <a href="img/gallery-5.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
            <div class="gallery-item">
            <img class="img-fluid w-100" src="<?= base_url();?>/wedding/img/<?= $gallery['foto6']?>" alt="">
            
                <a href="img/gallery-6.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div> 
        </div>
    </div>
    <!-- Gallery End -->


    <!-- Event Start -->
    <div class="container-fluid py-5" id="event">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Event</h6>
                <h1 class="font-secondary display-4">Our Wedding Event</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="row">
                <div class="col-md-6 border-right border-primary">
                    <div class="text-center text-md-right mr-md-3 mb-4 mb-md-0">
                        <img class="img-fluid mb-4" src="img/event-1.jpg" alt="">
                        <h4 class="mb-3">The Reception</h4>
                        <p class="mb-2"> 
                             <?php if (!empty($pengantin)) : ?>
                        <!-- Memanggil properti nama_pengantinpria jika data ditemukan -->
                        <?php echo $pengantin['alamat_married']; ?>
                    <?php else : ?>
                        <!-- Menampilkan pesan jika tidak ada data yang ditemukan -->
                        <p>Tidak ada data alamat pengantin yang ditemukan.</p>
                    <?php endif; ?>
                   </p>
                        <p class="mb-0"> <?php if (!empty($pengantin)) : ?>
                        <!-- Memanggil properti nama_pengantinpria jika data ditemukan -->
                        <?php echo $pengantin['waktu_pelaksanaan']; ?>
                    <?php else : ?>
                        <!-- Menampilkan pesan jika tidak ada data yang ditemukan -->
                        <p>Tidak ada data waktu pelaksanaan yang ditemukan.</p>
                    <?php endif; ?>
                </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center text-md-left ml-md-3">
                        <img class="img-fluid mb-4" src="img/event-2.jpg" alt="">
                        <h4 class="mb-3">Wedding Party</h4>
                        <p class="mb-2">      <?php if (!empty($pengantin)) : ?>
                        <!-- Memanggil properti nama_pengantinpria jika data ditemukan -->
                        <?php echo $pengantin['alamat_married']; ?>
                    <?php else : ?>
                        <!-- Menampilkan pesan jika tidak ada data yang ditemukan -->
                        <p>Tidak ada data alamat pengantin yang ditemukan.</p>
                    <?php endif; ?>
                   </p>
                        <p class="mb-0"> <?php if (!empty($pengantin)) : ?>
                        <!-- Memanggil properti nama_pengantinpria jika data ditemukan -->
                        <?php echo $pengantin['waktu_pelaksanaan']; ?>
                    <?php else : ?>
                        <!-- Menampilkan pesan jika tidak ada data yang ditemukan -->
                        <p>Tidak ada data waktu pelaksanaan yang ditemukan.</p>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event End -->


    <!-- Friends & Family Start -->
    
    <div class="container-fluid py-5" id="family">
        <div class="container pt-5 pb-3">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Family</h6>
                <h1 class="font-secondary display-4">Family Groom & Bride</h1>
                <?php foreach ($family as $family) : ?>
                    <div class="position-relative mb-2">
                        <div class="bg-secondary text-center p-2">
                            <h4 class="mb-2">         
                    <?php if (!empty($family)) : ?>
                        <!-- Memanggil properti nama_pengantinpria jika data ditemukan -->
                        <?php echo $family['nama_family'].'<br>'.
                            $family['status_family'] ?>
                            </h4>
                            <img src="<?= base_url(); ?>/family/images/<?php echo $family['foto_family'];?>">
                    <?php else : ?>
                        <!-- Menampilkan pesan jika tidak ada data yang ditemukan -->
                        <p>Tidak ada data waktu pelaksanaan yang ditemukan.</p>
                    <?php endif; ?>
                         </div>
                         
                         </div>
                        </p>
                    <?php endforeach; ?>
                <br>
                
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Friends</h6>


                <h1 class="font-secondary display-4">Groomsmen & Bridesmaid</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-outline-primary font-weight-bold m-1 py-2 px-4" data-filter=".first">Groomsmen</li>
                        <li class="btn btn-outline-primary font-weight-bold m-1 py-2 px-4" data-filter=".second">Bridesmaid</li>
                    </ul>
                </div>
            </div>
         <?php foreach ($grooms as $groom) : ?>
            <div class="row portfolio-container">
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative mb-2">
                        <img class="img-fluid w-100" src="img/groomsmen-1.jpg" alt="">
                        <div class="bg-secondary text-center p-4">
                            <h4 class="mb-3">         
                            <?php if (!empty($groom)) : ?>
           
                        <!-- Memanggil properti biodata penganti_pria jika data ditemukan -->
                        <?php echo $groom->nama_groomsman; ?>
                    <?php else : ?>
                        <!-- Menampilkan pesan jika tidak ada data yang ditemukan -->
                        <p>Tidak ada data grooms man yang ditemukan.</p>
                    <?php endif; ?>
                  </h4>
                            <p class="text-uppercase">
                                <?php if (!empty($groom)) : ?>
                        
                        <?php echo $groom->status_groomsman; ?>
                <?php else : ?>
                    <!-- Menampilkan pesan jika tidak ada data yang ditemukan -->
                    <p>Status Rekan Pengantin Tidak Diketahui.</p>
                <?php endif; ?></p>
                            <div class="d-inline-block">
                                <a class="mx-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative mb-2">
                        <img class="img-fluid w-100" src="img/bridesmaid-1.jpg" alt="">
                        <div class="bg-secondary text-center p-4">
                            <h4 class="mb-3"> 
                            <?php if (!empty($groom)) : ?>
           
                            <?php echo $groom->nama_bridesmaid; ?>
                    <?php else : ?>
                        <!-- Menampilkan pesan jika tidak ada data yang ditemukan -->
                        <p>Tidak ada data brides maid yang ditemukan.</p>
                    <?php endif; ?>
                    </h4>
                    <p class="text-uppercase"> 
                        <?php if (!empty($groom)) : ?>
                        
                        <?php echo $groom->status_bridesmaid; ?>
                <?php else : ?>
                    <!-- Menampilkan pesan jika tidak ada data yang ditemukan -->
                    <p>Status Rekan Pengantin Tidak Diketahui.</p>
                <?php endif; ?>
                </p>
                            <div class="d-inline-block">
                                <a class="mx-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

              
    </div>
    <!-- Friends & Family End -->


    <!-- RSVP Start -->
    <div class="container-fluid py-5" id="rsvp">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">RSVP</h6>
                <h1 class="font-secondary display-4">Join Our Party</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                    <form action="<?= base_url('home/submit') ?>" method="post">
                            <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control bg-secondary border-0 py-4 px-3" name="nama_visitor" id="nama_visitor" placeholder="Your Name"/>
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="email" class="form-control bg-secondary border-0 py-4 px-3" name="email_visitor" id="email_visitor" placeholder="Your Email"/>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <select class="form-control bg-secondary border-0" name="banyak_tamu" id="banyak_tamu" style="height: 52px;">
                                        <option>Number of Guest</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-6">
                                    <select class="form-control bg-secondary border-0" name="status_visitor" id="status_visitor" style="height: 52px;">
                                        <option>I'm Attending & Come</option>
                                        <option>Busy</option>
                                        <option>Tentative / Maybe Attend</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control bg-secondary border-0 py-2 px-3" rows="5" name="ucapan_visitor" placeholder="Message" required="required"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary font-weight-bold py-3 px-5" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- RSVP End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5" id="contact" style="margin-top: 90px;">
        <div class="container text-center py-5">
            <div class="section-title position-relative text-center">
                <h1 class="font-secondary display-3 text-white">Thank You</h1>
                <i class="far fa-heart text-white"></i>
            </div>
            <div class="d-flex justify-content-center mb-4">
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://twitter.com/i/flow/login?redirect_after_login=%2Fruperzki23"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://www.facebook.com/traveleraddict/"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://id.linkedin.com/in/ruly-rizki-perdana-026a67134"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square" href="https://www.instagram.com/ruperzki23/"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="d-flex justify-content-center py-2">
                <p class="text-white" href="#"><?php echo date("d-m-Y"); ?> </p>
                <span class="px-3">|</span>
                <p class="text-white" href="#"><?php echo 'WhatsApp Contact : +6281328306288';?></p>
            </div>
            <p class="m-0">&copy; Powered By : rulz.co ||<a class="text-primary" href="#">Designed by : rulz.co</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-outline-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/wedding/lib/easing/easing.min.js"></script>
    <script src="<?= base_url() ?>/wedding/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url() ?>/wedding/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>/wedding/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>/wedding/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url() ?>/wedding/js/main.js"></script>
</body>

</html>