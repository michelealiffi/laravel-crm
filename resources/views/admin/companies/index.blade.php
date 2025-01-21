@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <h1>Elenco Aziende</h1>
        <a href="{{ route('admin.companies.create') }}" class="btn btn-primary mb-3">Crea Azienda</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Partita IVA</th>
                    <th>Logo</th>
                    <th>Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                    <tr>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->vat_number }}</td>
                        <td><img src="{{ asset('storage/' . $company->logo) }}" width="50" alt="Logo"></td>
                        <td>
                            <a href="{{ route('admin.companies.edit', $company) }}" class="btn btn-warning">Modifica</a>
                            <form action="{{ route('admin.companies.destroy', $company) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
