@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-5 text-center fw-bold">Bag Inventory Management - Macay</h1>

    {{-- Bag Data Cards --}}
    <div class="row g-4 mb-5">
        <div class="col-lg-3 col-md-6">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title text-secondary">Total Brands</h5>
                    <p class="display-6 fw-bold text-primary">{{ $totalBrands }}</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title text-secondary">Total Categories</h5>
                    <p class="display-6 fw-bold text-warning">{{ $totalCategories }}</p>
                </div>
            </div>
        </div>

        {{-- <div class="col-lg-3 col-md-6">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title text-secondary">Bags Per Brand</h5>
                    @foreach ($bagsPerBrandData as $brand)
                        <p class="fw-bold text-warning">{{ $brand->brand_name }}: {{ $brand->total }} Bags</p>
                    @endforeach
                </div>
            </div>
        </div> --}}

        <div class="col-lg-3 col-md-6">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title text-secondary">Total Bags</h5>
                    <p class="display-6 fw-bold text-success">{{ $totalBags }}</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title text-secondary">Total Transactions</h5>
                    <p class="display-6 fw-bold text-info">{{ $totalStockTransactions }}</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Charts --}}
    <div class="row g-4">
        <div class="col-lg-6">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-transparent fw-bold">Stock Transactions Per Month</div>
                <div class="card-body">
                    <canvas id="stockTransactionsChart" width="auto" height="220"></canvas>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title fw-bold mb-4">Bags Per Category</h5>
                    <div style="position: relative; height:300px; width:100%;">
                        <canvas id="bagsPerCategoryChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Charts JS --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Stock Transactions Per Month Bar Chart
    // Stock Transactions Per Month Line Chart
const stockTransactionsCtx = document.getElementById('stockTransactionsChart').getContext('2d');
new Chart(stockTransactionsCtx, {
    type: 'line',
    data: {
        labels: {!! json_encode($months) !!},
        datasets: [
            {
                label: 'Incoming',
                data: {!! json_encode($incomingPerMonth) !!},
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                fill: false,
                tension: 0.3,
                pointRadius: 5,
                pointBackgroundColor: 'rgba(75, 192, 192, 1)'
            },
            {
                label: 'Outgoing',
                data: {!! json_encode($outgoingPerMonth) !!},
                borderColor: 'rgba(255, 99, 132, 1)',
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                fill: false,
                tension: 0.3,
                pointRadius: 5,
                pointBackgroundColor: 'rgba(255, 99, 132, 1)'
            }
        ]
    },
    options: {
        responsive: true,
        scales: {
            y: { beginAtZero: true }
        },
        plugins: {
            legend: {
                position: 'top'
            },
            tooltip: {
                mode: 'index',
                intersect: false
            }
        }
    }
});


    // Bags Per Category Doughnut Chart
    const bagsPerCategoryCtx = document.getElementById('bagsPerCategoryChart').getContext('2d');
    new Chart(bagsPerCategoryCtx, {
        type: 'doughnut',
        data: {
            labels: {!! json_encode($bagsPerCategoryData->pluck('category_name')) !!},
            datasets: [{
                data: {!! json_encode($bagsPerCategoryData->pluck('total')) !!},
                backgroundColor: [
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(153, 102, 255, 0.8)',
                    'rgba(255, 159, 64, 0.8)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { position: 'bottom' },
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
                }
            }
        }
    });
</script>
@endsection
