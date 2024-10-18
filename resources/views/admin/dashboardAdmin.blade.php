@extends('layouts.mainAdmin')

@section('content')
<!-- Content -->
 <div class="content-container">
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
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Chart 1: Persentase User
    const ctx1 = document.getElementById('userPercentageChart').getContext('2d');
    const userPercentageChart = new Chart(ctx1, {
        type: 'pie',
        data: {
            labels: ['User 1', 'User 2', 'User 3', 'User 4'],
            datasets: [{
                label: 'Persentase User',
                data: [40, 30, 20, 10],
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0'],
                hoverOffset: 4
            }]
        },
    });

    // Chart 2: Persentase User Melakukan Interaksi
    const ctx2 = document.getElementById('interactionChart').getContext('2d');
    const interactionChart = new Chart(ctx2, {
        type: 'pie',
        data: {
            labels: ['Interaksi 1', 'Interaksi 2', 'Interaksi 3', 'Interaksi 4'],
            datasets: [{
                label: 'Persentase Interaksi',
                data: [50, 25, 15, 10],
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0'],
                hoverOffset: 4
            }]
        },
    });
</script>
@endsection 