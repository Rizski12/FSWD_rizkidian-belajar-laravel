@extends('layouts.main')

@section('konten')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Dashboard</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <div class="container">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{ $totalProducts }}</h3>
              <p>Total Semua Produk</p>
            </div>
            <div class="icon">
              <i class="fas fa-shopping-bag"></i>
            </div>
            <a href="../crud" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-secondary">
            <div class="inner">
              <h3>{{ $totalCategories }}</h3>
              <p>Total Kategori Produk</p>
            </div>
            <div class="icon">
              <i class="fas fa-box"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>{{ 'Rp ' . number_format($totalPrice, 0, ',', '.') }}</h3>
              <p>Jumlah Total Harga Semua Produk</p>
            </div>
            <div class="icon">
              <i class="fas fa-money-bill"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{ $totalStock }}</h3>
              <p>Jumlah Total Stock Produk</p>
            </div>
            <div class="icon">
              <i class="fas fa-chart-bar"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
  </div>

  <div class="container">
    {{-- <div id="productsChart" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
    <div id="priceChart" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
    <div id="stockChart" style="min-width: 310px; height: 400px; margin: 0 auto"></div> --}}
    <div id="combinedChart" style="min-width: 310px; height: 600px; margin: 0 auto"></div><br>
    <div id="productsPieChart" style="min-width: 310px; height: 500px; margin: 0 auto"></div><br>
    <div id="stockPieChart" style="min-width: 310px; height: 500px; margin: 0 auto"></div><br>
    <div id="pricePieChart" style="min-width: 310px; height: 500px; margin: 0 auto"></div>
  </div>
</section>
<!-- /.content -->

<script src="{{ asset('highchart/highcharts.js') }}"></script>
<script src="{{ asset('highchart/modules/data.js') }}"></script>
<script src="{{ asset('highchart/modules/drilldown.js') }}"></script>
<script src="{{ asset('highchart/modules/export-data.js') }}"></script>
<script src="{{ asset('highchart/modules/accessibility.js') }}"></script>
<script src="{{ asset('highchart/modules/exporting.js') }}"></script>

<script>
  var categoryNames = {!! json_encode($categoryNames) !!};
  var totalProductsPerCategory = {!! json_encode($totalProductsPerCategory) !!};
  var totalPricePerCategory = {!! json_encode($totalPricePerCategory) !!};
  var totalStockPerCategory = {!! json_encode($totalStockPerCategory) !!};

    // // Grafik untuk jumlah produk per kategori
    // Highcharts.chart('productsChart', {
    //     chart: {
    //         type: 'column'
    //     },
    //     title: {
    //         text: 'Jumlah Produk per Kategori'
    //     },
    //     xAxis: {
    //         categories: categoryNames
    //     },
    //     yAxis: {
    //         title: {
    //             text: 'Jumlah Produk'
    //         }
    //     },
    //     series: [{
    //         name: 'Jumlah Produk',
    //         data: totalProductsPerCategory
    //     }]
    // });

    // // Grafik untuk jumlah total harga produk per kategori
    // Highcharts.chart('priceChart', {
    //     chart: {
    //         type: 'column'
    //     },
    //     title: {
    //         text: 'Jumlah Total Harga Produk per Kategori'
    //     },
    //     xAxis: {
    //         categories: categoryNames
    //     },
    //     yAxis: {
    //         title: {
    //             text: 'Total Harga Produk'
    //         }
    //     },
    //     series: [{
    //         name: 'Total Harga',
    //         data: totalPricePerCategory
    //     }]
    // });

    // // Grafik untuk jumlah stok produk per kategori
    // Highcharts.chart('stockChart', {
    //     chart: {
    //         type: 'column'
    //     },
    //     title: {
    //         text: 'Jumlah Stok Produk per Kategori'
    //     },
    //     xAxis: {
    //         categories: categoryNames
    //     },
    //     yAxis: {
    //         title: {
    //             text: 'Jumlah Stok Produk'
    //         }
    //     },
    //     series: [{
    //         name: 'Jumlah Stok',
    //         data: totalStockPerCategory
    //     }]
    // });
    Highcharts.chart('combinedChart', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Data Per Kategori'
        },
        xAxis: {
            categories: categoryNames
        },
        yAxis: [{
            title: {
                text: 'Jumlah Produk'
            }
        }, {
            title: {
                text: 'Total Harga Produk'
            },
            opposite: true
        }, {
            title: {
                text: 'Jumlah Stok Produk'
            },
            opposite: true
        }],
        series: [{
            name: 'Jumlah Produk',
            data: totalProductsPerCategory
        }, {
            name: 'Total Harga',
            data: totalPricePerCategory,
            yAxis: 1
        }, {
            name: 'Jumlah Stok',
            data: totalStockPerCategory,
            yAxis: 2
        }]
    });


    var sportProducts = totalProductsPerCategory[0];
    var dailyProducts = totalProductsPerCategory[1];
    var accessoriesProducts = totalProductsPerCategory[2];

    var sportStock = totalStockPerCategory[0];
    var dailyStock = totalStockPerCategory[1];
    var accessoriesStock = totalStockPerCategory[2];

    var sportPrice = totalPricePerCategory[0];
    var dailyPrice = totalPricePerCategory[1];
    var accessoriesPrice = totalPricePerCategory[2];

    // Pie Chart - Total Produk
    Highcharts.chart('productsPieChart', {
        chart: {
            type: 'pie'
        },
        title: {
            text: 'Total Produk berdasarkan Kategori'
        },
        series: [{
            name: 'Total Produk',
            colorByPoint: true,
            data: [{
                name: 'Accessories',
                y: accessoriesProducts
            }, {
                name: 'Daily',
                y: dailyProducts
            }, {
                name: 'Sport',
                y: sportProducts
            }]
        }]
    });

    // Pie Chart - Total Stok
    Highcharts.chart('stockPieChart', {
        chart: {
            type: 'pie'
        },
        title: {
            text: 'Total Stok berdasarkan Kategori'
        },
        series: [{
            name: 'Total Stok',
            colorByPoint: true,
            data: [{
                name: 'Accessories',
                y: accessoriesStock
            }, {
                name: 'Daily',
                y: dailyStock
            }, {
                name: 'Sport',
                y: sportStock
            }]
        }]
    });

    // Pie Chart - Total Harga
    Highcharts.chart('pricePieChart', {
        chart: {
            type: 'pie'
        },
        title: {
            text: 'Total Harga berdasarkan Kategori'
        },
        series: [{
            name: 'Total Harga',
            colorByPoint: true,
            data: [{
                name: 'Accessories',
                y: accessoriesPrice
            }, {
                name: 'Daily',
                y: dailyPrice
            }, {
                name: 'Sport',
                y: sportPrice
            }]
        }]
    });

  </script>
@endsection