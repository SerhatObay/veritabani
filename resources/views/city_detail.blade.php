@extends('layouts.master')
@section('content')

    <a type="button" href="{{ url('/') }}" class="btn btn-secondary" >ANA SAYFAYA GERİ DÖN</a>

    <div class="container-fluid">

        <div class="row">

            <div class="">
                <br>
                    <img src="https://assets.enuygun.com/media/lib/570x400/uploads/image/ankara-35906.jpeg" width="200">

            </div>

            <div class="col-sm-14 col-md-15 col-lg-12 col-lg-offset-15 main">
                <h1 class="page-header" style="color: white">Ankara</h1>
                <br>

                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead class="thead-dark">
                        <tr>

                            <th>Nüfus</th>
                            <th>Yüz Ölçümü</th>
                            <th>Plaka</th>
                            <th>Şehir Alan Kodu</th>
                            <th>Rakam</th>
                            <th>İlçe Sayısı</th>

                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>


                        </tr>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>




@endsection
