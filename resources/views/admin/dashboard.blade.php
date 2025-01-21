@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <h1>Dashboard</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Totale Aziende</h5>
                        <p class="card-text">{{ $totalCompanies }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Totale Dipendenti</h5>
                        <p class="card-text">{{ $totalEmployees }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Azienda con Più Dipendenti</h5>
                        <p class="card-text">{{ $companyWithMostEmployees->name ?? 'Nessuna azienda' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
