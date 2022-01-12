<!--Vista auxiliar para cambiarla por home. 
Copiar este codigo dentro de home, ya que en home crearé el mapa de Purullena.
-->
@extends('layouts.front')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Purullena') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
                <div>
                <!--Leaflet
                Mapa básico-->
                <x-maps-leaflet
                :centerPoint="['lat' => 37.3168665, 'long' => -3.1893486]"
                :zoomLevel="17"
                :markers="[['lat' => 37.3154282, 'long' => -3.1861091]]">
                </x-maps-leaflet>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection