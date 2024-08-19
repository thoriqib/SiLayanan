@extends('app')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dasboard</h1>
        <a href="{{ url('download-pdf-report') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i>Generate Report</a>
    </div>

    <!-- Content Row -->
    {{-- <h6 class="m-0 font-weight-bold text-primary">Data Customer - Berdasarkan Pekerjaan</h6> --}}
    <div class="row">
        <!-- Data Pengunjung -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                Total Pengunjung</div>
                            <div class="h5 mb-0 font-weight text-gray-800"><strong>{{ $customer }}</strong> orang</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                Belum Dilayani</div>
                            <div class="h5 mb-0 font-weight text-gray-800"><strong>{{ $pendingCount }}</strong> Transaksi</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                Sudah Dilayani</div>
                            <div class="h5 mb-0 font-weight text-gray-800"><strong>{{ $servedCount }}</strong> Transaksi</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- ================================================================================= --}}
    <div class="row">
        <div class="col-lg-8 mb-4">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary text-center">Data Customer :<br> Berdasarkan Pendidikan
                    </h6>
                </div>
                <div class="card-body">
                    <div id="chartContainer" style="height: 300px; width:100%;"></div>
                </div>
            </div>
            <div class="card shadow mt-2">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary text-center">Data Customer : <br> Berdasarkan Pekerjaan
                    </h6>
                </div>
                <div class="card-body">
                    <div id="chartdContainer" style="height: 300px; width:100%;"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary text-center">Data Transaksi : <br> Berdasarkan Media
                        Layanan</h6>
                </div>
                <div class="card-body">
                    <div id="chartbContainer" style="height: 718px; width:100%;"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary text-center">Data Transaksi : <br> Berdasarkan Jenis
                        Pelayanan</h6>
                </div>
                <div class="card-body">
                    <div id="chartaContainer" style="height: 340px; width:100%;"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary text-center">Data Transaksi :<br> Berdasarkan Tujuan</h6>
                </div>
                <div class="card-body">
                    <div id="chartcContainer" style="height: 340px; width:100%;"></div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script type="text/javascript">
        // Menampilkan visualisasi Data Customer - Berdasarkan Pendidikan
        window.onload = function() {
            var chart = new CanvasJS.Chart("chartContainer", {
                exportEnabled: true,

                data: [{
                    type: "column",
                    toolTipContent: "<b>{label}</b><br>Jumlah: {y} orang",
                    dataPoints: [{
                            label: "SMP/Dibawahnya",
                            y: {{ $smp }}
                        },
                        {
                            label: "SMA",
                            y: {{ $sma }}
                        },
                        {
                            label: "Diploma (D1/D2/D3)",
                            y: {{ $diploma }}
                        },
                        {
                            label: "Sarjana (S1)",
                            y: {{ $sarjana }}
                        },
                        {
                            label: "Magister (S2)",
                            y: {{ $magister }}
                        },
                        {
                            label: "Doktor (D3)",
                            y: {{ $doktor }}
                        }
                    ]
                }]
            });
            chart.render();

            var chart = new CanvasJS.Chart("chartdContainer", {
                exportEnabled: true,

                data: [{
                    type: "column",
                    toolTipContent: "<b>{label}</b><br>Jumlah: {y} orang",
                    dataPoints: [{
                            label: "Guru/Dosen",
                            y: {{ $lecturer }}
                        },
                        {
                            label: "ASN",
                            y: {{ $asn }}
                        },
                        {
                            label: "Peneliti",
                            y: {{ $researcher }}
                        },
                        {
                            label: "Pelajar/Mahasiswa",
                            y: {{ $student }}
                        },
                        {
                            label: "Umum",
                            y: {{ $general_job }}
                        },

                    ]
                }]
            });
            chart.render();

            // Menampilkan visualisasi Data Customer - Berdasarkan Jenis Pelayanan

            var charta = new CanvasJS.Chart("chartaContainer", {
                exportEnabled: true,
                animationEnabled: true,
                title: {
                    text: ""
                },
                legend: {
                    cursor: "pointer",
                    itemclick: explodePie // Pastikan ini relevan dengan chart jenis doughnut
                },
                data: [{
                    type: "doughnut", // Mengubah pie chart menjadi doughnut chart
                    showInLegend: true,
                    indexLabel: "{name} - #percent%", // Label di dalam doughnut chart dengan persentase
                    toolTipContent: "<b>{name}</b>: {y} transaksi ({percentage}%)", // Tooltip dengan detail data dan persentase
                    dataPoints: [{
                            y: {{ $service1 }},
                            name: "Permintaan Data"
                        },
                        {
                            y: {{ $service2 }},
                            name: "Konsultasi Data"
                        },
                        {
                            y: {{ $service3 }},
                            name: "Rekomendasi Data Sektoral"
                        },
                        {
                            y: {{ $service4 }},
                            name: "Umum (lain-lain)"
                        }
                    ]
                }]
            });
            charta.render();

            // Menampilkan visualisasi Data Customer - Berdasarkan Media Layanan

            var chartb = new CanvasJS.Chart("chartbContainer", {
                animationEnabled: true,
                exportEnabled: true,

                title: {},
                axisX: {
                    interval: 1
                },
                axisY: {
                    title: "Jumlah Transaksi",
                    includeZero: true,
                    scaleBreaks: {
                        type: "wavy",
                        customBreaks: [{
                            startValue: 80,
                            endValue: 210
                        }]
                    }
                },
                data: [{
                    type: "column",
                    toolTipContent: "<b>{label}</b><br>Jumlah: {y} transaksi",
                    dataPoints: [{
                            label: "Add-Stat-Whatsapp",
                            y: {{ $media1 }}
                        },
                        {
                            label: "Pelayanan Statistik Terpadu",
                            y: {{ $media2 }}
                        }
                    ]
                }]
            });
            chartb.render();

            // Menampilkan visualisasi Data Customer - Berdasarkan Tujuan

            var chartc = new CanvasJS.Chart("chartcContainer", {
                animationEnabled: true,
                exportEnabled: true,
                title: {
                    text: ""
                },
                legend: {
                    cursor: "pointer",
                    itemclick: explodePie
                },
                data: [{
                    type: "pie",
                    showInLegend: true,
                    toolTipContent: "<b>{name}</b><br>Jumlah: {y} transaksi ({percentage}%)",
                    indexLabel: "{name} - {y}%", // Label di dalam pie chart dengan persentase
                    dataPoints: [{
                            y: {{ $purpose1 + $purpose2 + $purpose3 + $purpose4 + $purpose5 > 0 ? number_format(($purpose1 / ($purpose1 + $purpose2 + $purpose3 + $purpose4 + $purpose5)) * 100, 2, '.', '') : 0 }},
                            name: "Tugas Sekolah/Universitas"
                        },
                        {
                            y: {{ $purpose1 + $purpose2 + $purpose3 + $purpose4 + $purpose5 > 0 ? number_format(($purpose2 / ($purpose1 + $purpose2 + $purpose3 + $purpose4 + $purpose5)) * 100, 2, '.', '') : 0 }},
                            name: "Skripsi"
                        },
                        {
                            y: {{ $purpose1 + $purpose2 + $purpose3 + $purpose4 + $purpose5 > 0 ? number_format(($purpose3 / ($purpose1 + $purpose2 + $purpose3 + $purpose4 + $purpose5)) * 100, 2, '.', '') : 0 }},
                            name: "Tesis"
                        },
                        {
                            y: {{ $purpose1 + $purpose2 + $purpose3 + $purpose4 + $purpose5 > 0 ? number_format(($purpose4 / ($purpose1 + $purpose2 + $purpose3 + $purpose4 + $purpose5)) * 100, 2, '.', '') : 0 }},
                            name: "Perumusan Kebijakan"
                        },
                        {
                            y: {{ $purpose1 + $purpose2 + $purpose3 + $purpose4 + $purpose5 > 0 ? number_format(($purpose5 / ($purpose1 + $purpose2 + $purpose3 + $purpose4 + $purpose5)) * 100, 2, '.', '') : 0 }},
                            name: "Yang Lainnya"
                        }
                    ]
                }]
            });
            chartc.render();

        }

        function explodePie(e) {
            if (typeof(e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e
                    .dataPointIndex].exploded) {
                e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
            } else {
                e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
            }
            e.charta.render();
        }
    </script>
@endsection
