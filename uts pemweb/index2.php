<?php
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="styles.css">

    <title>Halaman Utama</title>
</head>

<body id="#">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md text-#4287f5 mb-3">
        <div class="container">
            <a href="http://www.upi.edu" target="_blank" class="navbar-brand text-black"><img
                    src="LOGO-UPI.jpg" alt="icon" width="50" height="50">
                Sistem Informasi Kelautan
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-1">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item dropdown mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="sejarah.html">Sejarah</a></li>
                            <li><a class="dropdown-item" href="visimisi.html">Visi Misi</a></li>
                            <li><a class="dropdown-item" href="strukturorganisasi.html">struktur organisasi</a></li>
                            <li><a class="dropdown-item" href="pimpinandosenstaf.html">pimpinan dosen & staf</a></li>
                            <li><a class="dropdown-item" href="akreditas.html">akreditas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link active" aria-current="page" href="http://berita.upi.edu/tentang/">Berita</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link active" aria-current="page" href="http://berita.upi.edu/category/indonesia/kegiatan/">Agenda kegiatan</a>
                    </li>
                    <li class="nav-item dropdown mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Departemen
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="infodepartemen.html">informasi departemen</a></li>
                            <li><a class="dropdown-item" href="akreditas.html">Sistem Informasi Kelautan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Akademik
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="kurikulum.html">Kurikulum</a></li>
                            <li><a class="dropdown-item" aria-current="page" href="http://sik.kd-serang.upi.edu/?p=1838">Fasilitas</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir navbar -->

    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner md">
            <div class="carousel-item active">
                <img src="kampusuupi.jpg" class="d-block w-100" alt="UPI Kampus Serang" style="height: 740px;">
                <div class="carousel-caption d-none d-md-block text-center">
                    <h2>Tentang Kampus.</h2>
                    <a class="btn btn-primary btn-lg mb-3" href="http://kd-serang.upi.edu/" role="button">Selengkapnya</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="diving.png" class="d-block w-100" alt="Kegiatan Mahasiswa" style="height: 740px;">
                <div class=" carousel-caption d-none d-md-block text-start">
                    <h2>Sistem Informasi Kelautan.</h2>
                    <a class="btn btn-primary btn-lg mb-3" href="http://sik.kd-serang.upi.edu/" role="button">Selengkapnya</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="siak.png" class="d-block w-100" alt="Perpustakaan"class="d-block w-800"style="height: 721px;">
                <div class=" carousel-caption d-none d-md-block text-end">
                    <h2>Kontrak Kuliah</h2>
                    <a class="btn btn-primary btn-lg mb-3" href="https://student.upi.edu/" role="button">Selengkapnya</a>
                </div>
            </div>
             <div class="carousel-item">
                <img src="library.jpeg" class="d-block w-100" alt="Perpustakaan" style="height: 740px;">
                <div class=" carousel-caption d-none d-md-block text-end">
                    <h2>pembelajaran</h2>
                    <a class="btn btn-primary btn-lg mb-3" href="https://spot.upi.edu/" role="button">Selengkapnya</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Akhir carousel -->

    <!-- Content -->
    <section id="content">
        <div class="container">
            <div class="row justify-content-center p-5">
                <div class="col-md-4">
                    <h2>Berita</h2>
                    <p>Kamis (21/10) Universitas Pendidikan Indonesia (UPI) menyelenggarakan prosesi sidang terbuka universitas dalam rangka Dies Natalis UPI ke-67. Kegiatan ini merupakan puncak dari rangkaian acara yang diselenggarakan oleh panitia sejak awal Oktober lalu hingga 21 Oktober 2021. Acara tersebut berlangsung secara daring melalui zoom meeting dan luring melalui kanal youtube TV UPI. Pada sesi daring menghadirkan para tamu undangan dan seluruh civitas akademika sedangkan sesi luring berlangsung secara terbatas dengan protokol kesehatan yang ketat.</p>
                    <a href="http://sik.kd-serang.upi.edu/?p=2354">Selengkapnya</a>
                </div>
                <div class="col-md-4">
                    <h2>Kemahasiswaan</h2>
                    <p>Mahasiswa Sistem Informasi Kelautan (SIK) angkatan 2019 Amelia Luthfi Kamil berhasil diterima pada Program Pejuang Muda 2021. Pejuang Muda adalah laboratorium sosial bagi para mahasiswa mengaplikasikan ilmu dan pengetahuannya untuk memberi dampak sosial secara konkret. Melalui Program setara 20 SKS ini, mahasiswa akan ditantang untuk belajar dari warga sekaligus berkolaborasi dengan Pemerintah Daerah, pemuka masyarakat, tokoh agama setempat serta seluruh stakeholder penggerak sosial di daerah
                    </p>
                    <a href="http://sik.kd-serang.upi.edu/?p=2341">Selengkapnya</a>
                </div>
                <div class="col-md-4">
                    <h2>Himataska</h2>
                    <p>Program Studi Sistem Informasi Kelautan (SIK) dan Himpunan Mahasiswa Sistem Informasi Kelautan (HIMATASKA) setiap bulannya melaksanakan MATAKA. Pelaksanaan MATAKA ini bertujuan agar terbentuknya suasana akademik di Program Studi Sistem Informasi Kelautan.Pada bulan Oktober, MATAKA akan dilaksanakan pada tanggal 28 Oktober 2021. Adapun tema kegiatan yang diusung adalah Pemanfaatan Model Dinamika Spasial Sebagai Solusi Pengendalian Pesisie Padat Penduduk. Kegiatan ini akan di isi oleh Dosen Sistem Informasi Kelautan yaitu Della Ayu Lestari, M.Si.
                    Kegiatan ini dikhususkan untuk mahasiswa SIK dengan maksimal peserta 100 orang dan mendapatkan free sertifikat. Kegiatan tersebut dapat disaksiakan melalui G-Meet.
                    </p>
                    <a href="https://www.himataska.web.id/" target="_blank">Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container pt-5">
            <div class="row">
                <div class="col embed-responsive"><iframe width="500" height="315"
                        src="https://www.youtube.com/embed/uSpL9GR0QaI" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="col-md-7 text-start">
                    <h2>Tentang Kami</h2>
                    <p>Program Studi Sistem Informasi Kelautan merupakan bagian dari Ilmu Kelautan yang fokus pada
                        analisis data kelautan baik numerik maupun spasial untuk kemudian diintegrasikan berbasis sistem
                        informasi yang dikembangkan sebagai dasar pengambilan keputusan. Bidang kajian dari prodi SIK
                        terdiri dari Ilmu Kelautan, Ilmu Perikanan, Sistem Informasi, Sistem Informasi Geografis, serta
                        Penginderaan Jauh Keluatan dan Ilmu Kelautan. Pembelajaran di SIK selain dilaksanakan di ruang
                        kelas juga dilaksanakan di laboratorium, e-learning, field study ke pesisir dan laut.
                        Pembelajaran di SIK dilaksanakan oleh dosen SIK dan dosen dari Kampus UPI Serang serta para
                        praktisi dan professional di bidangnya</p>
                    <button type="button" class="btn btn-primary">Selengkapnya</button>
                </div>

            </div>
        </div>
    </section>
    <!-- Akhir content -->

    <!-- DOM -->
    <section>
        <div class="container pt-5">
            <div class="row align-items-md-stretch">
                <div id="hapus1" class="col-md-6">
                    <div class="h-100 p-5 bg-light border rounded-3">
                        <h2>Latihan JavaScript</h2>
                        <p>Or, keep it light and add a border for some added definition to the boundaries of your
                            content. Be sure to look under the hood at the source HTML here as we've adjusted the
                            alignment and sizing of both column's content for equal-height.
                        </p>
                        <button class="btn btn-outline-secondary" onclick="deleteElement()">Hapus Section Ini</button>
                        <script>
                            function deleteElement() {
                                var elemt = document.getElementById("hapus1");
                                elemt.remove();
                            }
                        </script>
                    </div>
                </div>
                <div id="hapus2" class="col-md-6">
                    <div class="h-100 p-5 text-white bg-dark rounded-3">
                        <h2>Latihan JavaScript</h2>
                        <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron
                            look. Then, mix and match with additional component themes and more.
                        </p>
                        <button class="btn btn-outline-light" onclick="myFunction()">Hapus Section
                            Ini</button>
                        <script>
                            function myFunction() {
                                var elemt = document.getElementById("hapus2");
                                elemt.remove();
                                }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir dom -->

    <!-- Contact -->
<section id="contact">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-md-4 mt-5">
                    <h2>Kampus Upi serang</h2>
                    <form>
                        <div class="mb-3">
                            <h3>Alamat</h3>
                  <p>Jl. Ciracas No.38, Serang, Kec. Serang, Kota Serang, Banten 42116 - Indonesia</p>
                        </div>
                        <div class="mb-3">
                            <h3>Email Us</h3>
                  <p>officialupiserang@gmail.com </p>
                        </div>
                        <div class="mb-3">
                            <h3>Telepon</h3>
                  <p>  (+62254) 200277</p>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 mt-5">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.03704225581!2d106.14447451477206!3d-6.125717661770098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418adaa4f7f563%3A0x950ec58123df8596!2sUniversitas%20Pendidikan%20Indonesia%20(UPI)%20Kampus%20Serang!5e0!3m2!1sid!2sid!4v1633591438187!5m2!1sid!2sid"
                        width="086" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
</section>
    <!-- AKhir contact-->

    <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->
    
      <div class="container marketing">
    
        <!-- seven columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
          <p style="text-align: center;">
          <br><br><img src="igg.png"<svg class="bd-placeholder-img rounded-circle" width="50" height="50" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 50x50" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="50%" height="50%" fill="#555"/><text x="20%" y="20%" fill="#555" dy=".3em"></svg>
          </div><!-- /.col-lg-4 -->
          
          <div class="col-lg-4">
          <p style="text-align: center;">
            <br><br><img src="tw.png"<svg class="bd-placeholder-img rounded-circle" width="50" height="50" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 50x50" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="50%" height="50%" fill="#555"/><text x="20%" y="20%" fill="#555" dy=".3em"></svg>
          </div><!-- /.col-lg-4 -->
          
          <div class="col-lg-4">
          <p style="text-align: center;">
            <br><br><img src="fb.png"<svg class="bd-placeholder-img rounded-circle" width="50" height="50" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 50x50" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="50%" height="50%" fill="#555"/><text x="20%" y="20%" fill="#555" dy=".3em"></svg>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

    <!-- Footer -->
    <footer class="container pb-4 ps-5">
        <p> &#169; http://sik.kd-serang.upi.edu/ </p>
    </footer>
    <!-- AKhir footer -->
    
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
        function removeHandler() {
            document.getElementById("lat2").removeEventListener("onclick", myFunction);
        }
    </script>
</body>
?>