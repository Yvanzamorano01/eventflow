@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <span data-feather="home"></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file"></span>
                            Events
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="shopping-cart"></span>
                            Tickets
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="users"></span>
                            Users
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="bar-chart-2"></span>
                            Reports
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="layers"></span>
                            Integrations
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-header">Number of Events</div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $events_count }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-header">Tickets Sold</div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $tickets_sold }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-info mb-3">
                        <div class="card-header">Total Revenue</div>
                        <div class="card-body">
                            <h5 class="card-title">${{ $total_revenue }}</h5>
                        </div>
                    </div>
                </div>
            </div>

             <!-- Example order data -->
             <h2>Recent Purchases</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Ticket Type</th>
                <th>Number of Tickets</th>
                <th>Total Price</th>
                <th>Phone Number</th>
                <th>Payment Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($recentPurchases as $purchase)
            <tr>
                <td>{{ $purchase['users']->name }}</td>
                <td>{{ $purchase['type'] }}</td>
                <td>{{ $purchase['total_tickets'] }}</td>
                <td>{{ $purchase['total_price'] }}</td>
                <td>{{ $purchase['phone'] }}</td>
                <td>{{ $purchase['created_at']->format('Y-m-d H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- Include Bootstrap CSS and JS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
