<?php include "koneksi.php"; 

//data total pekerja
$peg = mysqli_query($connect, "SELECT * from pegawai");
$total_peg = mysqli_num_rows($peg);

//data usia
$akhir = date_create(); // waktu sekarang
$max=0;
$min=200;
for ($i=0; $i < $total_peg; $i++) { 
  $array_data = mysqli_fetch_array($peg);
  $awal  = date_create($array_data['tgl_lahir']);
  $usia  = date_diff($awal, $akhir);
  if ($max<$usia->y) {
    $max=$usia->y;
  }
    if ($min>$usia->y) {
    $min=$usia->y;
  }
}


//data rentang mka 
$peg = mysqli_query($connect, "SELECT * from pegawai");
$max_mka=0;
$min_mka=200;
for ($i=0; $i < $total_peg; $i++) { 
  $array_data = mysqli_fetch_array($peg);
  $awal_kerja  = date_create($array_data['tgl_masuk']);
  $lama_kerja  = date_diff($awal_kerja, $akhir);
  if ($max_mka<$lama_kerja->y) {
    $max_mka=$lama_kerja->y;
  }
    if ($min_mka>$lama_kerja->y) {
    $min_mka=$lama_kerja->y;
  }
}

//data chart training compliance

//data chart manpower
$de = mysqli_query($connect,"SELECT jabatan from pegawai where jabatan = 'Development Engineer' ");
$jumlah_de = mysqli_num_rows($de);
$ee = mysqli_query($connect,"SELECT jabatan from pegawai where jabatan = 'Engineering Expert' ");
$jumlah_ee = mysqli_num_rows($ee); 
$gm = mysqli_query($connect,"SELECT jabatan from pegawai where jabatan = 'General Manager' ");
$jumlah_gm = mysqli_num_rows($gm); 
$m = mysqli_query($connect,"SELECT jabatan from pegawai where jabatan = 'Manager' ");
$jumlah_m = mysqli_num_rows($m);
$sec = mysqli_query($connect,"SELECT jabatan from pegawai where jabatan = 'Secretary' ");
$jumlah_sec = mysqli_num_rows($sec); 
$sado = mysqli_query($connect,"SELECT jabatan from pegawai where jabatan = 'Senior Aircraft Data Officer' ");
$jumlah_sado = mysqli_num_rows($sado); 
$sde = mysqli_query($connect,"SELECT jabatan from pegawai where jabatan = 'Senior Development Engineer' ");
$jumlah_sde = mysqli_num_rows($sde);
$stpo = mysqli_query($connect,"SELECT jabatan from pegawai where jabatan = 'Senior Technical Publication Officer' ");
$jumlah_stpo = mysqli_num_rows($stpo); 
$tpo = mysqli_query($connect,"SELECT jabatan from pegawai where jabatan = 'Technical Publication Officer' ");
$jumlah_tpo = mysqli_num_rows($tpo); 
$tde = mysqli_query($connect,"SELECT jabatan from pegawai where jabatan = 'Trainee for Development Engineer' ");
$jumlah_tde = mysqli_num_rows($tde);
$vp = mysqli_query($connect,"SELECT jabatan from pegawai where jabatan = 'Vice President' ");
$jumlah_vp = mysqli_num_rows($vp); 

//data chart generation

$peg = mysqli_query($connect, "SELECT * from pegawai");
$akhir = date_create(); // waktu sekarang
$usia20=0;
$usia30=0;
$usia40=0;
$usia50=0;
for ($i=0; $i < $total_peg; $i++) { 
  $array_data = mysqli_fetch_array($peg);
  $awal  = date_create($array_data['tgl_lahir']);
  $usia  = date_diff($awal, $akhir);
  if ($usia->y>=20 && $usia->y <=30) {
    $usia20++;
  } elseif ($usia->y>30 && $usia->y <=40) {
    $usia30++;
  } elseif ($usia->y>40 && $usia->y <=50) {
    $usia40++;
  } else
    $usia50++;
}

//data chart generation

$peg = mysqli_query($connect, "SELECT * from pegawai");
$akhir = date_create(); // waktu sekarang
$masa0=0;
$masa2=0;
$masa5=0;
for ($i=0; $i < $total_peg; $i++) { 
  $array_data = mysqli_fetch_array($peg);
  $awal_kerja  = date_create($array_data['tgl_masuk']);
  $lama_kerja  = date_diff($awal_kerja, $akhir);
  if ($lama_kerja->y>=0 && $lama_kerja->y <=2) {
    $masa0++;
  } elseif ($lama_kerja->y>2 && $lama_kerja->y <=5) {
    $masa2++;
  } else
    $masa5++;
  }


?>

<div class="main-panel">
  <div class="content">
   <div class="container-fluid">
    <h4 class="page-title" style="text-align: left;">Dashboard Training</h4>
    <div class="row">
     <div class="col-md-3" style="margin-left: 55px">
      <div class="card card-stats">
       <div class="card-body" style="background-color:#1c7661">
        <div class="row">
         <div class="col-5">
          <div class="icon-big text-center icon-warning">
           <i class="la la-user" style="color: #ffffff"></i>
         </div>
       </div>
       <div class="col-7 d-flex align-items-center">
        <div class="numbers">
         <p class="card-category" style="color: #ffffff">Total Pekerja</p>
         <h4 class="card-title" style="color: #ffffff"><?php echo $total_peg." Orang"?></h4>
       </div>
     </div>
   </div>
 </div>
</div>
</div>

<div class="col-md-3"  style="margin-left: 80px">
  <div class="card card-stats">
   <div class="card-body" style="background-color:#ecb60f">
    <div class="row">
     <div class="col-5">
      <div class="icon-big text-center">
       <i class="la la-bar-chart" style="color: #ffffff"></i>
     </div>
   </div>
   <div class="col-7 d-flex align-items-center">
    <div class="numbers">
     <p class="card-category" style="color: #ffffff">Rentang Usia</p>
     <h4 class="card-title" style="color: #ffffff"><?php echo $min."-".$max." Thn"?></h4>
   </div>
 </div>
</div>
</div>
</div>
</div>
<div class="col-md-3"  style="margin-left: 80px">
  <div class="card card-stats">
   <div class="card-body" style="background-color:#189a90">
    <div class="row">
     <div class="col-5">
      <div class="icon-big text-center">
       <i class="la la-tasks" style="color: #ffffff"></i>
     </div>
   </div>
   <div class="col-7 d-flex align-items-center">
    <div class="numbers">
     <p class="card-category" style="color: #ffffff">Rentang MKA</p>
     <h4 class="card-title" style="color: #ffffff"><?php echo $min_mka."-".$max_mka." Thn"?></h4>
   </div>
 </div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
  <div class="col-md-4">
  <div class="card">
   <div class="card-header" style="background-color: #3ea71e">
    <h4 class="card-title" style="color: #ffffff">MKA</h4>
    <p class="card-category" style="color: #ffffff">Engineering Services</p>
  </div>
  <div class="card-header">
    <div id="ro_container" style="min-width: 300px; height: 300px; margin: 0 auto"></div>



    <script type="text/javascript">

Highcharts.chart('ro_container', {
    chart: {
        type: 'column'
    },
    // title: {
    //     text: 'World\'s largest cities per 2017'
    // },
    xAxis: {
        type: 'category',
        labels: {
            rotation: -45,
            style: {
                fontSize: '16 px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah orang'
        }
    },
    legend: {
        enabled: false
    },
    tooltip: {
        pointFormat: 'Jumlah orang: <b>{point.y}</b>'
    },
    series: [{
        name: 'Population',
        data: [
            ['0-2 Tahun', <?php echo $masa0; ?>],
            ['2-5 Tahun', <?php echo $masa2; ?>],
            ['>5 Tahun', <?php echo $masa5; ?>]
        ],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.0f}', // one decimal
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '5px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    }]
});
    </script>
  </div>
</div>
</div>
 
<div class="col-md-4">
  <div class="card">
   <div class="card-header" style="background-color: #239ce5">
    <h4 class="card-title" style="color: #ffffff">Manpower</h4>
    <p class="card-category" style="color: #ffffff">Engineering Services</p>
  </div>
  <div class="card-header">
    <div id="containers" style="min-width: 370px; height: 300px; max-width: 1000px; margin: 0 auto; margin-left:-15px"></div>
    <script type="text/javascript">

      Highcharts.chart('containers', {
        chart: {
          plotBackgroundColor: null,
          plotBorderWidth: null,
          plotShadow: false,
          type: 'pie'
        },
        tooltip: {
          pointFormat: '{series.name}: <b>{point.y} Orang</b>'
        },
        plotOptions: {
          pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
              enabled: true,
              format: '<b>{point.name}</b>: {point.percentage:.1f} %',
              style: {
                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
              }
            }
          }
        },
        series: [{
          name: 'Jumlah',
          colorByPoint: true,
          data: [{
            name: 'DE',
            y: <?php echo $jumlah_de; ?>,
          }, {
            name: 'EE',
            y: <?php echo $jumlah_ee; ?>
          }, {
            name: 'GM',
            y: <?php echo $jumlah_gm; ?>
          }, {
            name: 'Manager',
            y: <?php echo $jumlah_m; ?>
          }, {
            name: 'Secretary',
            y: <?php echo $jumlah_sec; ?>
          }, {
            name: 'Senior ADO',
            y: <?php echo $jumlah_sado; ?>
          }, {
            name: 'Senior DE',
            y: <?php echo $jumlah_sde; ?>
          }, {
            name: 'Senior TPO',
            y: <?php echo $jumlah_stpo; ?>
          }, {
            name: 'TPO',
            y: <?php echo $jumlah_tpo; ?>
          }, {
            name: 'Trainee for DE',
            y: <?php echo $jumlah_tde; ?>
          }, {
            name: 'Vice President',
            y: <?php echo $jumlah_vp; ?>
          }]
        }]
      });
    </script>
  </div>
</div>
</div>
<div class="col-md-4">
  <div class="card">
   <div class="card-header" style="background-color: #e13232">
    <h4 class="card-title" style="color: #ffffff">Generation</h4>
    <p class="card-category" style="color: #ffffff">Totally of Engineering Services</p>
  </div>
  <div class="card-header">
   <div id="bar_container" style="min-width: 220px; max-width: 600px; height: 300px; margin: 0 auto"></div>



   <script type="text/javascript">

    Highcharts.chart('bar_container', {
      chart: {
        type: 'bar'
      },
      xAxis: {
        categories: ['20-30', '31-40', '41-50','>50']
      },
      yAxis: {
        min: 0,
        title: {
          text: '<?php echo "Total Pekerja: ".$total_peg." Orang"?>'
        }
      },
      plotOptions: {
        series: {
          stacking: 'normal'
        }
      },
      series: [{
        name: 'Kelompok usia kerja',
        data: [<?php echo $usia20?>, <?php echo $usia30?>, <?php echo $usia40?>, <?php echo $usia50?>],
        dataLabels: {
          enabled: false
        }
      }]
    });
  </script>
</div>
</div>
</div>
<div class="col-md-4">
  <div class="card">
   <div class="card-header" style="background-color: #ff6e00">
    <h4 class="card-title" style="color: #ffffff">Training Compliance</h4>
    <p class="card-category" style="color: #ffffff">Avarage of Engineering Services</p>
  </div>
  <div class="card-body">
    <div id="ci_container" style="min-width: 290px; height: 300px; max-width: 400px; margin:0px; z-index: 1;"></div>



    <script type="text/javascript">

      Highcharts.chart('ci_container', {
        chart: {
          plotBackgroundColor: null,
          plotBorderWidth: 0,
          plotShadow: false
        },
        tooltip: {
          pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
          pie: {
            dataLabels: {
              enabled: true,
              format: '<b>{point.name}</b>: {point.percentage:.1f} %',
              distance: -50,
              style: {
                fontWeight: 'bold',
                color: 'black'
              }
            },
            startAngle: -90,
            endAngle: -90,
            center: ['50%', '50%']
          }
        },
        series: [{
          type: 'pie',
          name: 'Browser share',
          innerSize: '50%',
          data: [
          ['Chrome', 58.9],
          {
            name: 'Other',
            y: 7.61,
            dataLabels: {
              enabled: false
            }
          }
          ]
        }]
      });


    </script>
  </div>
</div>
</div>

<div class="col-md-8">
  <div class="card">
   <div class="card-header" style="background-color: #1c5d85;" >
    <h4 class="card-title" style="color: #ffffff">Engineering Services</h4>
    <p class="card-category"  style="color: #ffffff">Training Compliance</p>
  </div>
  <div class="card-header">
   <div id="container" style="min-width: 310px; height: 297px; margin: 0 auto"></div>

   <script type="text/javascript">

// Create the chart
Highcharts.chart('container', {
  chart: {
    type: 'column'
  },
  xAxis: {
    type: 'category'
  },
  yAxis: {
    title: {
      text: 'Total percent market share'
    }

  },
  legend: {
    enabled: false
  },
  plotOptions: {
    series: {
      borderWidth: 0,
      dataLabels: {
        enabled: true,
        format: '{point.y:.1f}%'
      }
    }
  },

  tooltip: {
    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
  },

  "series": [
  {
    "name": "Browsers",
    "colorByPoint": true,
    "data": [
    {
      "name": "HUMAN FACTOR",
      "y": 62.74,
      "drilldown": "HUMAN FACTOR"
    },
    {
      "name": "CASR,FAR",
      "y": 10.57,
      "drilldown": "CASR,FAR"
    },
    {
      "name": "FTS LV.2",
      "y": 7.23,
      "drilldown": "FTS LV.2"
    },
    {
      "name": "SMS",
      "y": 5.58,
      "drilldown": "SMS"
    },
    {
      "name": "EWIS",
      "y": 4.02,
      "drilldown": "EWIS"
    },
    {
      "name": "MODULE 10",
      "y": 1.92,
      "drilldown": "MODULE 10"
    },
    {
      "name": "GMF QS",
      "y": 7.62,
      "drilldown": "GMF QS"
    },
    {
      "name": "BATK",
      "y": 1.92,
      "drilldown": "BATK"
    },
    {
      "name": "BASIC ENG.",
      "y": 1.92,
      "drilldown": "BE"
    },
    {
      "name": "CONT. AIR",
      "y": 1.92,
      "drilldown": "CONT. AIR"
    },
    {
      "name": "TYPE RATING",
      "y": 1.92,
      "drilldown": "TYPE RATING"
    }
    ]
  }
  ],
  "drilldown": {
    "series": [
    {
      "name": "HUMAN FACTOR",
      "id": "HUMAN FACTOR",
      "data": [
      [
      "v65.0",
      0.1
      ],
      [
      "v64.0",
      1.3
      ],
      [
      "v63.0",
      53.02
      ],
      [
      "v62.0",
      1.4
      ],
      [
      "v61.0",
      0.88
      ],
      [
      "v60.0",
      0.56
      ],
      [
      "v59.0",
      0.45
      ],
      [
      "v58.0",
      0.49
      ],
      [
      "v57.0",
      0.32
      ],
      [
      "v56.0",
      0.29
      ],
      [
      "v55.0",
      0.79
      ],
      [
      "v54.0",
      0.18
      ],
      [
      "v51.0",
      0.13
      ],
      [
      "v49.0",
      2.16
      ],
      [
      "v48.0",
      0.13
      ],
      [
      "v47.0",
      0.11
      ],
      [
      "v43.0",
      0.17
      ],
      [
      "v29.0",
      0.26
      ]
      ]
    },
    {
      "name": "Firefox",
      "id": "Firefox",
      "data": [
      [
      "v58.0",
      1.02
      ],
      [
      "v57.0",
      7.36
      ],
      [
      "v56.0",
      0.35
      ],
      [
      "v55.0",
      0.11
      ],
      [
      "v54.0",
      0.1
      ],
      [
      "v52.0",
      0.95
      ],
      [
      "v51.0",
      0.15
      ],
      [
      "v50.0",
      0.1
      ],
      [
      "v48.0",
      0.31
      ],
      [
      "v47.0",
      0.12
      ]
      ]
    },
    {
      "name": "Internet Explorer",
      "id": "Internet Explorer",
      "data": [
      [
      "v11.0",
      6.2
      ],
      [
      "v10.0",
      0.29
      ],
      [
      "v9.0",
      0.27
      ],
      [
      "v8.0",
      0.47
      ]
      ]
    },
    {
      "name": "Safari",
      "id": "Safari",
      "data": [
      [
      "v11.0",
      3.39
      ],
      [
      "v10.1",
      0.96
      ],
      [
      "v10.0",
      0.36
      ],
      [
      "v9.1",
      0.54
      ],
      [
      "v9.0",
      0.13
      ],
      [
      "v5.1",
      0.2
      ]
      ]
    },
    {
      "name": "Edge",
      "id": "Edge",
      "data": [
      [
      "v16",
      2.6
      ],
      [
      "v15",
      0.92
      ],
      [
      "v14",
      0.4
      ],
      [
      "v13",
      0.1
      ]
      ]
    },
    {
      "name": "Opera",
      "id": "Opera",
      "data": [
      [
      "v50.0",
      0.96
      ],
      [
      "v49.0",
      0.82
      ],
      [
      "v12.1",
      0.14
      ]
      ]
    }
    ]
  }
});
</script>
</div>
</div>
</div>