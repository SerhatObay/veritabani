@extends('layouts.master')
@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

    <style>body {
            font-family: "poppins", sans-serif;
            background-color: gray;
            background-size: cover;
            overflow-x: hidden;
        }</style>

    <a type="button" href="{{ url('/') }}" class="btn btn-default">ANA SAYFAYA GERİ DÖN</a>

    <div class="baskent-isimleri"></div>
    <div class="container-fluid">


        <div class="row">

            <div class="col-sm-14 col-md-15 col-lg-12 col-lg-offset-15 main">
                <br>
                <h1 class="page-header" style="color: white">Avrupa Ülkeleri</h1>

                <div class="table-responsive">
                    <table id="example" class="table table-striped" style="width:100%">
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
                            <th>Başkenti</th>
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
                                    <button  onclick="Capital()" id="btnCapital" class="btn btn-xs btn-secondary" data-toggle="tooltip" data-placement="top">
                                        {{$country->getCapital->name}}

                                    </button>
                                    <p id="demo"></p>

                                </td>

                            </tr>
                        @endforeach

                        </tbody>

                    </table>
                    {{$countries->links('pagination::bootstrap-4')}}
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable({})
    });
 </script>

@endsection

