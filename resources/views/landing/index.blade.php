@extends('layouts.landing')
@section('contenido')

<header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Our Studio!</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="card-header">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Inmuebles en oferta</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                
                <div class="row text-center">
                    <div class="col-md-4">
                        <div class="fa-stack fa-10x">
                            <img src="{{ asset('assets\landing\img\1.jpg') }}" width="300" height="250"></img>
                        </div>
                        <h4 class="my-3">Código: 0800</h4>
                        <p class="text-muted">Tipo: arriendo</p>
                        <p class="text-muted">Ahora: $1.000.000</p>
                        <p class="text-muted">Antes: $1.500.000</p>
                        <a href="#">Ver más información</a>
                    </div>
                    <div class="col-md-4">
                        <div class="fa-stack fa-10x">
                            <img src="{{ asset('assets\landing\img\2.jpg') }}" width="300" height="250"></img>
                        </div>
                        <h4 class="my-3">Código: 1010</h4>
                        <p class="text-muted">Tipo: Venta</p>
                        <p class="text-muted">Ahora: $400.000.000</p>
                        <p class="text-muted">Antes: $700.000.000</p>
                        <a href="#">Ver más información</a>
                    </div>
                    <div class="col-md-4">
                        <div class="fa-stack fa-10x">
                            <img src="{{ asset('assets\landing\img\3.jpg') }}" width="300" height="250"></img>
                        </div>
                        <h4 class="my-3">Código 1120</h4>
                        <p class="text-muted">Tipo: Venta</p>
                        <p class="text-muted">Ahora: $100.000.000</p>
                        <p class="text-muted">Antes: $500.000.000</p>
                        <a href="#">Ver más información</a>
                    </div>
                </div>
            </div>
        </section>
        @endsection