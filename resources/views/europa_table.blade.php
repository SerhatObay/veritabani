@extends('layouts.master')
@section('content')

    <style>body {
            font-family: "poppins", sans-serif;
            background-color: gray;
            background-size: cover;
            overflow-x: hidden;
        }</style>

    <a type="button" href="{{ url('/') }}" class="btn btn-danger">ANA SAYFAYA GERİ DÖN</a>


    <div class="container-fluid">

        <div class="row">

            <div class="col-sm-14 col-md-15 col-lg-12 col-lg-offset-15 main">
                <br>
                <h1 class="page-header" style="color: white">Avrupa Ülkeleri</h1>

                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead class="thead-dark">
                        <tr>
                            <th>Ülke Adı</th>
                            <th>Nüfus</th>
                            <th>Yüz Ölçümü</th>
                            <th>Bayrak</th>
                            <th>Şehir Sayısı</th>
                            <th>Domain</th>
                            <th>Alan Kodu</th>
                            <th>Resmi Dili</th>
                            <th>Para Birimi</th>
                            <th>Kuruluş Yılı</th>
                            <th>Detaylı Bilgi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($countries as $country)

                            <tr>
                                <td style="color: white">{{$country->name}}</td>
                                <td style="color: white">{{$country->getCountryDetails->co_population}}</td>
                                <td style="color: white">{{$country->getCountryDetails->co_area}}</td>
                                <td><img src="{{$country->flag}}" alt="" width="100"></td>
                                <td style="color: white">{{$country->city_num}}</td>
                                <td style="color: white">{{$country->domain}}</td>
                                <td style="color: white">{{$country->co_area_code}}</td>
                                <td style="color: white">{{$country->nt_lang}}</td>
                                <td style="color: white">{{$country->money}}</td>
                                <td style="color: white">{{$country->f_year}}</td>
                                <td style="width: 100px">
                                    <a href="" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top"
                                       title="Düzenle">
                                        <span class="fa fa-pencil"></span>
                                    </a>

                                </td>
                            </tr>
                        @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
