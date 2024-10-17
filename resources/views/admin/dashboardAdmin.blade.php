@extends('layouts.mainAdmin')

@section('content')
<!-- Content -->
 <div class="content">
    <div class="title-section">
        <h2 class="title">Persentase User</h2>
        <p class="subtitle">Statistik Pengguna pada Sistem</p>
    </div>

    <!-- Charts Section -->
    <div class="charts">
        <div class="chart-container">
            <canvas id="userPercentageChart"></canvas>
            <p class="chart-title">Persentase User</p>
        </div>
        <div class="chart-container">
            <canvas id="interactionChart"></canvas>
            <p class="chart-title">Persentase User Melakukan Interaksi</p>
        </div>
    </div>
</div>
@endsection 