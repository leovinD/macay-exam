@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-5 text-center fw-bold">Boarding Houses Management - Macay</h1>

    {{-- Boarding House Data Cards --}}
    <div class="row g-4 mb-5">
        <div class="col-lg-3 col-md-6">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title text-secondary">Total Boarding Houses</h5>
                    <p class="display-6 fw-bold text-primary">{{ $totalBoardingHouses }}</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title text-secondary">Total Rooms</h5>
                    <p class="display-6 fw-bold text-warning">{{ $totalRooms }}</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title text-secondary">Total Tenants</h5>
                    <p class="display-6 fw-bold text-success">{{ $totalTenants }}</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title text-secondary">Total Payments</h5>
                    <p class="display-6 fw-bold text-info">₱{{ number_format($totalPayments, 2) }}</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Charts --}}
    <div class="row g-4">
        <div class="col-lg-6">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-transparent fw-bold">Payments Received Per Month</div>
                <div class="card-body">
                    <canvas id="paymentsPerMonthChart" width="auto" height="200"></canvas>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title fw-bold mb-4">Payment Methods Used</h5>
                    <div style="position: relative; height:300px; width:100%;">
                        <canvas id="paymentMethodsChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Charts JS --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>

    // Payments Per Month Chart (Keep this as it is)
    const paymentsPerMonthCtx = document.getElementById('paymentsPerMonthChart').getContext('2d');
    new Chart(paymentsPerMonthCtx, {
        type: 'line',
        data: {
            labels: {!! json_encode($paymentsPerMonth->pluck('month')) !!},
            datasets: [{
                label: 'Payments (₱)',
                data: {!! json_encode($paymentsPerMonth->pluck('total_amount')) !!},
                borderColor: '#2F4F4F',
                backgroundColor: 'rgba(100, 149, 237, 0.2)',
                fill: true,
                tension: 0.3
            }]
        },
        options: { responsive: true, scales: { y: { beginAtZero: true } } }
    });

    // Payment Methods Chart (New Donut Chart)
    const paymentMethodsCtx = document.getElementById('paymentMethodsChart').getContext('2d');
new Chart(paymentMethodsCtx, {
    type: 'doughnut',
    data: {
        labels: {!! json_encode($paymentMethodsData->pluck('payment_method')) !!},
        datasets: [{
            data: {!! json_encode($paymentMethodsData->pluck('total')) !!},
            backgroundColor: [
                'rgba(255, 99, 132, 0.8)',
                'rgba(54, 162, 235, 0.8)',
                'rgba(255, 206, 86, 0.8)',
                'rgba(75, 192, 192, 0.8)',
                'rgba(153, 102, 255, 0.8)',
                'rgba(255, 159, 64, 0.8)',
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
            ],
            borderWidth: 1,
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false, // 👈 Important so the chart uses the container size
        plugins: {
            legend: {
                position: 'bottom',
            },
            tooltip: {
                callbacks: {
                    label: function(context) {
                        let label = context.label || '';
                        if (context.parsed !== null) {
                            label += ': ' + context.parsed;
                        }
                        return label;
                    }
                }
            },
        }
    }
});

</script>
@endsection