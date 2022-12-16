@extends('layouts.master')
@section('content')

    <style>body {
            font-family: "poppins", sans-serif;
            background-color: gray;
            background-size: cover;
            overflow-x: hidden;
        }
    .dada{
        width: 150px;
    }
    </style>

    <a type="button" href="{{ url('/') }}" class="btn btn-default">ANA SAYFAYA GERİ DÖN</a>

    <div class="container-fluid">

        <div class="row">

            <div class="col-sm-14 col-md-15 col-lg-12 col-lg-offset-15 main">
                <br>
                <h1 class="page-header" style="color: white">Avrupa Ülkeleri</h1>

                <div class="table-responsive">
                    <table id="countryTable" class="display nowrap dataTable ">
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
                            <th>Başkent</th>
                        </tr>
                        </thead>
                       <tfoot>
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
                           <th>Başkent</th>
                       </tr>
                       </tfoot>

                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" style="overflow: scroll" id="update_countries_modal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #E5E8E8;">
                    <h5 class="modal-title" style="font-weight: bold; font-size: 25px !important; "><span id="headerCapital" style="font-style: italic "></span>
                        Bilgiler</h5>
                    <button type="button" onclick="toggleModal()" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="background-color: #F8F9F9; padding: 30px;">
                    <div class="row mt-3 mb-4">
                        <div class="form-group mb-4 col-6">
                            <label class="mb-1" for="ci_population" style="text-decoration: underline;">Nüfus</label>
                            <p id="ci_populationUpdate"></p>
                        </div>

                        <div class="form-group mb-4 col-6">
                            <label class="mb-1" for="ci_area" style="text-decoration: underline;">Yüzölçümü</label>
                            <p id="ci_areaUpdate"></p>
                        </div>
                    </div>

                    <div class="row mt-3 mb-4">
                            <div class="form-group mb-4 col-6">
                                <label class="mb-1" for="license_plate" style="text-decoration: underline;">Plaka</label>
                                <p id="license_plateUpdate"></p>
                            </div>

                            <div class="form-group mb-4 col-6">
                                <label class="mb-1" for="ci_area_code" style="text-decoration: underline;">Alan Kodu</label>
                                <p id="ci_area_codeUpdate"></p>
                            </div>
                            <div class="form-group mb-4 col-6">
                                <label class="mb-1" for="altitude" style="text-decoration: underline;">Rakım</label>
                                <p id="altitudeUpdate"></p>
                            </div>
                            <div class="form-group mb-4 col-6">
                                <label class="mb-1" for="district_num" style="text-decoration: underline;">İlçe Sayısı</label>
                                <p id="district_numUpdate"></p>
                            </div>

                        </div>

                        <input type="hidden" name="updateId" id="updateId">

                </div>
                <div class="modal-footer" style="background-color: #E5E8E8;">
                    <button type="button" id="modTog" onclick="toggleModal()" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
                }
            });


        });

        var dataTable = null;

        dataTable = $('#countryTable').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.10.21/i18n/Turkish.json'
            },
            order: [
                [0, 'ASC']
            ],
            processing: true,
            serverSide: true,
            scrollX: true,
            scrollY: true,
            ajax: '{!! route('countryFetch') !!}',
            columns: [
                {data: 'name'},
                {data: 'nufus'},
                {data: 'yuzolcumu'},
                {data: 'bayrak'},
                {data: 'cityNum'},
                {data: 'domain'},
                {data: 'co_area_code'},
                {data: 'nt_lang'},
                {data: 'money'},
                {data: 'f_year'},
                {data: 'capital'},

            ]
        });

    </script>

    <script>

        function showInfo(id) {

            $.ajax({
                type: 'GET',
                url: '{{route('countryDetail')}}',
                data: {id: id},
                success: function (data) {
                    $('#ci_populationUpdate').text(data.population);
                    $('#ci_populationUpdate').text(data.population);
                    $('#headerCapital').text(data.name);
                    $('#ci_areaUpdate').text(data.area);
                    $('#license_plateUpdate').text(data.license_plate);
                    $('#ci_area_codeUpdate').text(data.ci_area_code);
                    $('#altitudeUpdate').text(data.altitude);
                    $('#district_numUpdate').text(data.district_num);


                    $('#updateId').val(id);

                    $('#update_countries_modal').modal("toggle");

                },
                error: function (data) {
                    var errors = '';
                    for (datas in data.responseJSON.errors) {
                        errors += data.responseJSON.errors[datas] + '\n';
                    }
                    Swal.fire({
                        icon: 'error',
                        title: 'Başarısız',

                        html: 'Bilinmeyen bir hata oluştu.\n' + errors,
                    });
                }
            });
        }


        function toggleModal(){
            $('#update_countries_modal').modal('hide');
        }

    </script>


@endsection
