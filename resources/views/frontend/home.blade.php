@extends('layouts.frontend')
@section('styles')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-4-md">
                                <canvas id="myChart" width="400" height="200"></canvas>
                            </div>
                        </div>
                        <script>
                            var ctx = document.getElementById('myChart').getContext('2d');
                            var labels = @json($labels);
                            var labelsWithPrefix = labels.map(label => 'Semester ' + label);
                            var myChart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: labelsWithPrefix,
                                    datasets: [{
                                        label: 'IPS',
                                        data: @json($data),
                                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                        borderColor: 'rgba(75, 192, 192, 1)',
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
    </div>
@endsection
