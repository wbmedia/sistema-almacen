@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-left">
                    <h3 class="heading-title">Sistema de Gestion de Almacen</h3>
                    <small class="text-danger">Sistema de control</small>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 col-sm-12 mb-2">
                <div class="card card-alternative">
                    <div class="card-body text-center">
                        <img width="200" src="{{ asset('images/icons/icons8-move-stock.svg') }}" alt="salidas">
                        <h3 class="card-title-alternate">Salidas</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 mb-2">
                <div class="card card-alternative">
                    <div class="card-body text-center">
                        <img width="200" src="{{ asset('images/icons/icons8-truck.svg') }}" alt="salidas">
                        <h3 class="card-title-alternate">Trabajo</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 mb-2">
                <div class="card card-alternative">
                    <div class="card-body text-center">
                        <img width="200" src="{{ asset('images/icons/icons8-warehouse.svg') }}" alt="salidas">
                        <h3 class="card-title-alternate">Almacen</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 col-sm-12 mb-2">
                <div class="card card-alternative">
                    <div class="card-body text-center">
                        <img width="200" src="{{ asset('images/icons/icons8-order-history.svg') }}" alt="salidas">
                        <h3 class="card-title-alternate">Historial</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 mb-2">
                <div class="card card-alternative">
                    <div class="card-body text-center">
                        <img width="200" src="{{ asset('images/icons/icons8-numbers.svg') }}" alt="salidas">
                        <h3 class="card-title-alternate">Reportes</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 mb-2">
                <div class="card card-alternative">
                    <div class="card-body text-center">
                        <img width="200" src="{{ asset('images/icons/icons8-team.svg') }}" alt="salidas">
                        <h3 class="card-title-alternate">Usuarios</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
