<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>SDN JATIMULYO 1</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/logo1.jpeg" type="image/x-icon">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
        integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- boot -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>


    <!-- lightslider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css"
        integrity="sha512-+1GzNJIJQ0SwHimHEEDQ0jbyQuglxEdmQmKsu8KI7QkMPAnyDrL9TAnVyLPEttcTxlnLVzaQgxv2FpLCLtli0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"
        integrity="sha512-Gfrxsz93rxFuB7KSYlln3wFqBaXUc1jtt3dGCp+2jTb563qYvnUBM/GP2ZUtRC27STN/zUamFtVFAIsRFoT6/w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light  navbarHome fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/logo1.jpeg" alt="Logo SMK N 2 Purbalingga">
                <h1>SD Negeri 1<br>Jatimulyo</h1>
            </a>

            <button class="navbar-toggler hamburger" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>

                    <li class="nav-item active">
                        <a href="#" class="nav-link dropdown-toggle" id="dropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profil
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                            <a class="dropdown-item" href="{{ url('/visimisi') }}">Visi Misi</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ url('/dataguru') }}">Data Guru</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ url('/datasiswa') }}">Data Siswa</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ url('/sarana') }}">Sarana dan Prasarana</a>
                            
                        </div>
                    </li>

                    <li class="nav-item active">
                        <a href="#" class="nav-link dropdown-toggle" id="dropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Program
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                            <a class="dropdown-item" href="{{ url('/ekstrakulikuler') }}">Ekstrakulikuler</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ url('/prestasi') }}">Prestasi</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ url('/ppdb') }}">PPDB</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ url('/kalender') }}">Kalender Akademik</a>
                        </div>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/artikel') }}">Artikel</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/galeri') }}">Galeri</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/kontak') }}">Kontak</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>




    <ul id="autoWidth" class="cs-hidden">
        <li class="item-a">
            <section class="slideshow">
                <img class="satu" src="images/banner-shd.png" alt="Team Work">
                <div class="shadow"></div>
                <div class="container">
                    <div class="mainText">
                        <div class="garis"></div>
                        <h3> Selamat Datang</h3>
                        <h1> SDN Jatimulyo 1 Kota Malang</h1>
                    </div>

                </div>
            </section>
        </li>

        <li class="item-a">
            <section class="slideshow">
                <img class="dua" src="images/banner-shd.png" alt="Team Work">
                <div class="shadow"></div>
                <div class="container">
                    <div class="mainText">
                        <div class="garis"></div>
                        <h3> Selamat Datang</h3>
                        <h1> SDN Jatimulyo 1 Kota Malang</h1>
                    </div>
                </div>
            </section>
        </li>

        <li class="item-a">
            <section class="slideshow">
                <img class="tiga" src="images/banner-shd.png" alt="Team Work">
                <div class="shadow"></div>
                <div class="container">
                    <div class="mainText">
                        <div class="garis"></div>
                        <h3> Selamat Datang</h3>
                        <h1> SDN Jatimulyo 1 Kota Malang</h1>
                    </div>
                </div>
            </section>
        </li>

        <li class="item-a">
            <section class="slideshow">
                <img class="empat" src="images/banner-shd.png" alt="Team Work">
                <div class="shadow"></div>
                <div class="container">
                    <div class="mainText">
                        <div class="garis"></div>
                        <h3> Selamat Datang</h3>
                        <h1> SDN Jatimulyo 1 Kota Malang</h1>
                    </div>
                </div>
            </section>
        </li>

        <li class="item-a">
            <section class="slideshow">
                <img class="lima" src="images/banner-shd.png" alt="Team Work">
                <div class="shadow"></div>
                <div class="container">
                    <div class="mainText">
                        <div class="garis"></div>
                        <h3> Selamat Datang</h3>
                        <h1> SDN Jatimulyo 1 Kota Malang</h1>
                    </div>
                </div>
            </section>
        </li>


        <li class="item-a">
            <section class="slideshow">
                <img class="enam" src="images/banner-shd.png" alt="Team Work">
                <div class="shadow"></div>
                <div class="container">
                    <div class="mainText">
                        <div class="garis"></div>
                        <h3> Selamat Datang</h3>
                        <h1> SDN Jatimulyo 1 Kota Malang</h1>
                    </div>
                </div>
            </section>
        </li>

    </ul>







    <div class="sambutan">
        <h1>WELCOME TO SDN Jatimulyo 1 Kota Malang</h1>
        <p>
            SDN Jatimulyo 1 adalah salah satu satuan pendidikan dengan jenjang SD di JATIMULYO, Kec. Lowokwaru, Kota
            Malang, Jawa Timur.<br>
            Dalam menjalankan kegiatannya, SD NEGERI JATIMULYO 01 berada di bawah naungan Kementerian Pendidikan dan
            Kebudayaan.
        </p>
    </div>


    <div class="kepsek">
        <div class="container">
            <img src="images/ida.jpeg" alt="Kepala SDN Jatimulyo 1">
            <div class="visiMisi">
                <div class="visi">
                    <h2>Sambutan Kepala Sekolah</h2>
                    <p>
                        Sebagai lembaga pendidikan, SD Negeri Jatimulyo 1
                        tanggap dengan perkembangan teknologi tersebut.
                        Dengan dukungan SDM yang di miliki sekolah ini siap
                        untuk berkompetisi dengan sekolah lain dalam
                        pelayanan informasi publik. Teknologi Informasi Web
                        khususnya, menjadi sarana bagi SD Negeri Jatimulyo 1
                        untuk memberi pelayanan informasi secara cepat, jelas,
                        dan akuntable. Dari layanan ini pula, sekolah
                        siap menerima saran dari semua pihak yang akhirnya dapat menjawab Kebutuhan masyarakat.
                    </p>
                </div>
            </div>


        </div>
    </div>


    <!-- jurusan -->


    <div class="jurusan">
        <div class="container">
            <div class="visi">
                <h2>Sejarah Singkat</h2>
                <p>
                    SDN Jatimulyo 1 adalah salah satu satuan pendidikan dengan jenjang SD di JATIMULYO, Kec. Lowokwaru,
                    Kota Malang, Jawa Timur.<br>
                    Dalam menjalankan kegiatannya, SD NEGERI JATIMULYO 01 berada di bawah naungan Kementerian Pendidikan
                    dan Kebudayaan.
                </p>
            </div>

            <div class="boxJurusan">

                <div class="perBox">
                    <a class="dropdown-item" href="{{ url('/visimisi') }}">
                        <img src="images/sekola.jpeg" alt="RPL">
                        <h3>Visi dan Misi</h3>
                    </a>
                </div>

                <div class="perBox">
                    <a class="dropdown-item" href="{{ url('/dataguru') }}">
                        <img src="images/sdn2.jpeg" alt="ATU">
                        <h3>Data Guru</h3>
                    </a>
                </div>

                <div class="perBox">
                    <a class="dropdown-item" href="{{ url('/datasiswa') }}">
                        <img src="images/pramuka.jpeg" alt="APHP">
                        <h3>Data Siswa</h3>
                    </a>
                </div>

                <div class="perBox">
                    <a class="dropdown-item" href="{{ url('/sarana') }}">
                        <img src="images/1.jpg" alt="API">
                        <h3>Sarana dan Prasarana</h3>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class="program">
        <div class="containerProgramHome container">
            <h2>Program</h2>

            <div class="programHome">


                <a class="perProgramHome" href="{{ url('/ekstrakulikuler') }}">
                    <img src="images/ekstra1.jpeg" alt="Foto Program">
                    <h3>Ekstrakulikuler</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti quo, iure repellendus
                        explicabo
                        delectus quasi amet libero iusto sequi at.
                    </p>
                </a>

                <a class="perProgramHome" href="{{ url('/prestasi') }}">
                    <img src="images/prestasi1.jpeg" alt="Foto Program">
                    <h3>Prestasi</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti quo, iure repellendus
                        explicabo
                        delectus quasi amet libero iusto sequi at.
                    </p>
                </a>


                <a class="perProgramHome" href="{{ url('/PPDB') }}">
                    <img src="images/ppdb1.jpeg" alt="Foto Program">
                    <h3>PPDB</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti quo, iure repellendus
                        explicabo
                        delectus quasi amet libero iusto sequi at.
                    </p>
                </a>
            </div>
        </div>
    </div>

    <div class="containerArtikelHome container">
        <h2>Artikel Terbaru</h2>

        <div class="artikelHome">


            <a class="perArtikelHome">
                <img src="images/1.jpg" alt="Foto Artikel">
                <h3>Tutorial Login Laravel 8</h3>
                <small>Di tulis oleh : <span>Rifki Romadhan</span></small>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti quo, iure repellendus explicabo
                    delectus quasi amet libero iusto sequi at.
                </p>
            </a>

            <a class="perArtikelHome">
                <img src="images/1.jpg" alt="Foto Artikel">
                <h3>Tutorial Login Laravel 8</h3>
                <small>Di tulis oleh : <span>Rifki Romadhan</span></small>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti quo, iure repellendus explicabo
                    delectus quasi amet libero iusto sequi at.
                </p>
            </a>


            <a class="perArtikelHome">
                <img src="images/1.jpg" alt="Foto Artikel">
                <h3>Tutorial Login Laravel 8</h3>
                <small>Di tulis oleh : <span>Rifki Romadhan</span></small>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti quo, iure repellendus explicabo
                    delectus quasi amet libero iusto sequi at.
                </p>
            </a>
        </div>
    </div>





    <!-- sosmed icon -->
    <div class="iconBox">

        <a href="https://www.facebook.com/profile.php?id=100009870373192&mibextid=ZbWKwL" class="perIconBox fb">
            <i class="fab fa-facebook-f"></i>
        </a>

        <a href="https://instagram.com/sdnjatimulyo1?igshid=NTc4MTIwNjQ2YQ==" class="perIconBox ig">
            <i class="fab fa-instagram"></i>
        </a>

        <a href="https://youtube.com/@sdnjatimulyo1245" class="perIconBox yt">
            <i class="fab fa-youtube"></i>
        </a>

    </div>

    <div class="footer footerHubungiKami">

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4 class="my-4 text-white text-center">Kontak Kami</h4>

                    <div class="footerContactUs">

                        <div class="perFooterContactUs">
                            <i class="fas text-white fa-envelope"></i>
                            <p class="text-white">sdnjatimulyo144@gmail.com </p>
                        </div>

                        <div class="perFooterContactUs">
                            <i class="fas text-white fa-phone-alt"></i>
                            <p class="text-white">0341406468</p>
                        </div>

                        <div class="perFooterContactUs">
                            <i class="fas text-white fa-road"></i>
                            <p class="text-white">Jl. Pisang Kipas No.36, RT.07, RW.04 Kec.Lowokwaru Kota.Malang</p>
                        </div>

                    </div>

                </div>






                <div class="col-md-4">
                    <h4 class="my-4 text-center text-white">Tentang</h4>
                    <div class="footerAbout">
                        <a href="" class="text-white">Artikel</a>
                        <a href="" class="text-white">Galeri</a>
                        <a href="" class="text-white">Kontak</a>
                        <a href="" class="text-white">Ekstrakulikuler</a>
                    </div>
                </div>


                <div class="col-md-4 text-center">
                    <h4 class="my-4 text-white">Hubungi Kami</h4>
                    <form>

                        <div class="form-group">
                            <input class="form-control" type="search" placeholder="Example@gmail.com"
                                aria-label="Search">
                            <button class="btn btn-success btn-newsletter" type="submit">Kirim</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="footerCopyright">
        <p class="text-white">
            <i class="far fa-copyright"></i>copyright By : <span>SDN Jatimulyo 1</span>
        </p>
    </div>




    <script src="js/script.js"></script>
</body>

</html>
