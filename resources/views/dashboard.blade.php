@extends('layouts.app')

@section('content')
  <section class="dashboard-counts section-padding">
   <div class="container-fluid">
          <div class="row">
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="fa fa-fw fa-comments"></i></div>
                <div class="name"><strong class="text-uppercase">Blog Post</strong><span>For approval</span>
                  <div class="count-number">25</div>
                </div>
              </div>
            </div>

            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="fa fa-users"></i></div>
                <div class="name"><strong class="text-uppercase">Subscriber</strong>
                  <div class="count-number">25</div>
                </div>
              </div>
            </div>

            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="fa fa-rss"></i></div>
                <div class="name"><strong class="text-uppercase">Viewers</strong>
                  <div class="count-number">25</div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            
          </div>
        </div>
      </section>
      <!-- Header Section-->
      <section class="dashboard-header section-padding">
        <div class="container-fluid">
          <div class="row d-flex align-items-md-stretch">
            <!-- To Do List-->
            <!-- Pie Chart-->
            <div class="col-lg-3 col-md-6">
              <div class="card project-progress">
                <h2 class="display h4">Disk Space</h2>
                <p>Server capacity left.</p>
                <div class="pie-chart">
                  <canvas id="pieChart" width="300" height="300"> </canvas>
                </div>
              </div>
            </div>
            <!-- Line Chart -->
            <div class="col-lg-9 col-md-12 flex-lg-last flex-md-first align-self-baseline">
              <div class="card sales-report">
                <h2 class="display h4">Sales marketing report</h2>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor amet officiis</p>
                <div class="line-chart">
                  <canvas id="lineCahrt"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Statistics Section-->
@endsection
