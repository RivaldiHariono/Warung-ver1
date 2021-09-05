@extends('layouts.admin')

@section('title')
    Dashboard Page    
@endsection

@section('content')
    <!-- Page Content -->
    <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Dashboard</h2>
                <p class="dashboard-subtitle">This is only Dashboard</p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-4">
                    <div class="card mb-2">
                        <div class="card-body">
                        <div class="dashboard-card-title">Products</div>
                        <div class="dashboard-card-subtitle">{{ $product }}</div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="card mb-2">
                        <div class="card-body">
                        <div class="dashboard-card-title">Average Price</div>
                        <div class="dashboard-card-subtitle">{{ $avgPrice }}</div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection