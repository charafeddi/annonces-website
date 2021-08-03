@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-4">
        <div class="card savings-card">
            <div class="card-body">
                <h5 class="card-title">Savings<span class="card-title-helper">30 Days</span></h5>
                <div class="savings-stats">
                    <h5>$4,502.00</h5>
                    <span>Total savings for last month</span>
                </div>
                <div id="sparkline-chart-1"></div>
            </div>
        </div>
        <div class="card top-products">
            <div class="card-body">
                <h5 class="card-title">Popular Products<span class="card-title-helper">Today</span></h5>
                <div class="top-products-list">
                    <div class="product-item">
                        <h5>Alpha - File Hosting Service</h5>
                        <span>4,037 downloads</span>
                        <i class="material-icons product-item-status product-item-success">arrow_upward</i>
                    </div>
                    <div class="product-item">
                        <h5>Lime - Task Managment Dashboard</h5>
                        <span>1,876 downloads</span>
                        <i class="material-icons product-item-status product-item-success">arrow_upward</i>
                    </div>
                    <div class="product-item">
                        <h5>Space - Meetup Hosting App</h5>
                        <span>1,252 downloads</span>
                        <i class="material-icons product-item-status product-item-danger">arrow_downward</i>
                    </div>
                    <div class="product-item">
                        <h5>Meteor - Messaging App</h5>
                        <span>938 downloads</span>
                        <i class="material-icons product-item-status product-item-success">arrow_upward</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Visitors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Reports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Investments</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="visitors-stats">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="visitors-stats-info">
                                <p>Total visitors in the current period:</p>
                                <h5>77,871</h5>
                                <span>6-26 Apr</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="visitors-stats-info">
                                <p>Unique visitors in the current period and ratio:</p>
                                <h5>58,403</h5>
                                <span>6-26 Apr</span>
                            </div>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div id="chart-visitors"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
