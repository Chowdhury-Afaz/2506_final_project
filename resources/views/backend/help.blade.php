@extends('layouts.backend')

@section('title', "Help / Documentation")

@section('main')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Help / Documentation</h4>

    <div class="row">
        <div class="col-lg-8 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Admin Dashboard Guide</h5>
                    <p class="card-text">
                        This page provides a quick reference for using the Ecobazer admin dashboard and understanding the current sections.
                    </p>

                    <h6 class="mt-4">Basic Navigation</h6>
                    <ul class="mb-0">
                        <li>Use the left sidebar to move between dashboard features.</li>
                        <li>Use the top navigation bar for search, profile information, and logout.</li>
                        <li>Dashboard cards provide a quick overview of business activity.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Getting Started</h5>
                    <p class="card-text">
                        Start from the Dashboard page to review summary cards, charts, order statistics, and transaction information.
                    </p>
                    <p class="mb-0">
                        Future admin features can be accessed from the sidebar as they are added.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Current Dashboard Sections</h5>
                    <ul class="mb-0">
                        <li>Sales and profit summary cards</li>
                        <li>Total revenue chart</li>
                        <li>Order statistics</li>
                        <li>Expense overview</li>
                        <li>Recent transactions</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Future Documentation</h5>
                    <p class="mb-0">
                        Detailed documentation for product management, orders, inventory, customers, and reports can be added here in future updates.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
