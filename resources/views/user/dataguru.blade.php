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
    <nav class="navbar navbar-expand-lg navbar-light navbarKu fixed-top">
        <div class="container">

            <a class="navbar-brand" href="#">
                <img src="images/logo1.jpeg" alt="Logo SDN 1 Jatimulyo">
                <h1>SD Negeri 1<br>Jatimulyo</h1>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/login') }}">Login</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>

    <div class="title">
        <h1 class="text-center">Data Guru SDN Jatimulyo 1</h1>
    </div>
    <div class="containerGuruHome container">
        <div class="guruHome">
            @if($guru->count() > 0)
            @foreach ($guru as $g)
            <a class="perGuruHome">
                <img src="{{ asset('storage/'.$g->foto) }}" alt="Foto Guru">
                <h3>{{ $g->nama }}</h3>
                <p>{{ $g->jabatan }}</p>
            </a>
            @endforeach
            @endif
        </div>


    

            {{-- <a class="perGuruHome" >
                <img src="images/ida.jpeg" alt="Foto Artikel">
                <h3>NUR FAIDAH, S.Pd., M.Si</h3>
                <p>Kepala Sekolah</p>
            </a>

            <a class="perGuruHome" >
                <img src="images/erna.jpeg" alt="Foto Artikel">
                <h3>ERNA,S.Pd</h3>
                <p>Guru Kelas 1</p>
            </a>


            <a class="perGuruHome" >
                <img src="images/naning.jpeg" alt="Foto Artikel">
                <h3>NANING WAHYUNINGSIH, S.Pd </h3>
                <p>Guru Kelas 2</p>
            </a>

            <a class="perGuruHome" >
                <img src="images/tri.jpeg" alt="Foto Artikel">
                <h3>TRIONO RIADIANTO, S.Pd</h3>
                <p>Guru Kelas 3</p>
            </a>

            <a class="perGuruHome" >
                <img src="images/yuni.jpeg" alt="Foto Artikel">
                <h3>TITIS WAHYUNI, S.Pd</h3>
                <p>Guru Kelas 4</p>
            </a>

            <a class="perGuruHome" >
                <img src="images/eva.jpeg" alt="Foto Artikel">
                <h3>EVA LIA MITANIA DEWI, S.Pd</h3>
                <p>Guru Kelas 5</p>
            </a>

            <a class="perGuruHome" >
                <img src="images/tina.jpeg" alt="Foto Artikel">
                <h3>TITIN AGUSTINA, S.Pd. SD</h3>
                <p>Guru Kelas 6</p>
            </a>

            <a class="perGuruHome" >
                <img src="images/ajeng.jpeg" alt="Foto Artikel">
                <h3>DEAJENG PUTRI DEVI, S.Pd</h3>
                <p>Guru Pendidikan Agama Islam </p>
            </a>

            <a class="perGuruHome" >
                <img src="images/sulaiman.jpeg" alt="Foto Artikel">
                <h3>SULAIMAN, S.Hum</h3>
                <p>Guru Bahasa Inggris</p>
            </a>

            <a class="perGuruHome" >
                <img src="images/user.png" alt="Foto Artikel">
                <h3>MAHSUSUS SARIFAH, S. Pd</h3>
                <p>Guru Bahasa Jawa</p>
            </a>

            <a class="perGuruHome" >
                <img src="images/user.png" alt="Foto Artikel">
                <h3>MAHSUSUS SARIFAH, S. Pd</h3>
                <p>Guru Bahasa Jawa</p>
            </a> --}}


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

    <div class="footer">

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
