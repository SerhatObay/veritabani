@extends('layouts.master')
@section('title','Anasayfa')
@section('content')

    <body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
                    <a class="navbar-brand" href="/">
            <span>
               ÜBS
            </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">Ana Sayfa
                                        <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                       href="https://www.tarihiolaylar.com/galeriler/dunya-tarihini-degistiren-20-olay-122">
                                        Dünyayı Etkileyen Olaylar
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.hurriyet.com.tr/dunya/">Haberler</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{asset("iletisim")}}">
                                        İletişim
                                    </a>
                                </li>


                            </ul>

                        </div>

                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->


        <!-- end slider section -->
    </div>


    <!-- end trip section -->

    <!-- blog section -->

    <section class="blog_section" id="blog">
        <div class="container">
            <div class="heading_container">


            </div>
        </div>
        <div class="container">
            <div class="box container-bg">
                <div class="blog_box">

                    <div class="detail-box">
                        <div class="img-box">
                            <img src="images/türkiye.png" alt="">
                        </div>
                        <div class="text-box">
                            <h5>
                                TÜRKİYE
                            </h5>

                            <p>
                                TÜRKİYE CUMHURİYETİ
                            </p>
                        </div>
                    </div>
                    <a href="{{asset('tr')}}">
                        DETAYLI BİLGİ
                    </a>
                </div>


                <div class="blog_box">

                    <div class="detail-box">
                        <div class="img-box">
                            <img src="images/avrupa.png" alt="">
                        </div>
                        <div class="text-box">
                            <h5>
                                AVRUPA
                            </h5>

                            <p>
                                AVRUPA ÜLKELERİ
                            </p>
                        </div>
                    </div>
                    <a href="{{asset('avrupa')}}">
                        DETAYLI BİLGİ
                </div>
            </div>

        </div>
        </div>
    </section>

    <!-- end blog section -->

    </body>

    </html>
