@extends('dashboardpage/layouts.template')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
              <h3 class="font-weight-bold">Selamat datang {{ Auth::user()->name }}</h3>
              <h6 class="font-weight-normal mb-0">Selamat<span class="text-primary"> Bekerja!</span></h6>
            </div>
            <div class="col-12 col-xl-4">
             <div class="justify-content-end d-flex">
              <div class="dropdown flex-md-grow-1 flex-xl-grow-0">

              </div>
             </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 grid-margin stretch-card" >
          <div class="card-md-4">
            <div class="card-people">
              <img src="img/services/service-1.jpg" alt="people">
              <div class="weather-info">
                <div class="d-flex">
                  <div>
                    {{-- <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2> --}}
                  </div>
                  {{-- <div class="ml-2">
                    <h4 class="location font-weight-normal">Bangalore</h4>
                    <h6 class="font-weight-normal">India</h6>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 grid-margin transparent">
          <div class="row">
            <div class="col-md-6 mb-4 stretch-card transparent">
              <div class="card card-tale">
                <div class="card-body">
                  <p class="mb-4">Total Users</p>
                  <p class="fs-30 mb-2">{{ $user }}</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-4 stretch-card transparent">
              <div class="card card-dark-blue">
                <div class="card-body">
                  <p class="mb-4">Total Komentar</p>
                  <p class="fs-30 mb-2">{{ $komen }}</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-blue">
                <div class="card-body">
                  <p class="mb-4">Total Rumah</p>
                  <p class="fs-30 mb-2">{{ $rumah }}</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 stretch-card transparent">
              <div class="card card-light-danger">
                <div class="card-body">
                  <p class="mb-4">Articles</p>
                  <p class="fs-30 mb-2">{{ $article }}</p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <canvas id="myChart"></canvas>
          </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
          const ctx = document.getElementById('myChart').getContext('2d');
  
          new Chart(ctx, {
              type: 'bar',
              data: {
                  labels: ['Users', 'Komen', 'Rumah', 'article'],
                  datasets: [{
                      label: '',
                      data: [
                          {{ $user }},
                          {{ $komen }},
                          {{ $rumah }},
                          {{ $article }}
                      ],
                      backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(255, 206, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)'
                      ],
                      borderColor: [
                          'rgba(255,99,132,1)',
                          'rgba(54, 162, 235, 1)',
                          'rgba(255, 206, 86, 1)',
                          'rgba(75, 192, 192, 1)'
                      ],
                      borderWidth: 1
                  }]
              },
              options: {
                  scales: {
                      y: {
                          beginAtZero: true
                      }
                  }
              }
          });
      </script>
        </div>
      </div>
    </div>
</div>
        <!--Morris Chart-->
    <script src="assets/libs/morris.js/morris.min.js"></script>
    <script src="assets/libs/raphael/raphael.min.js"></script>

    <script src="assets/js/pages/dashboard.init.js"></script>

    <script src="assets/js/app.js"></script>
@endsection