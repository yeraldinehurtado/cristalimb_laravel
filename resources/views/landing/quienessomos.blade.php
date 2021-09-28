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
                    <h2 class="section-heading text-uppercase">¿Quiénes somos?</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                        Consequuntur animi minima labore a illum eius est, 
                        dolor eaque laudantium quidem ipsum esse id inventore, 
                        libero, earum iusto odio voluptas architecto..</p>
                </div>
                
                <div class="row text-center" id="mision">
                    <div class="col-md-12">
                        <h4 class="my-3">Misión</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Temporibus iure possimus voluptatibus commodi saepe rerum 
                            architecto nihil? Dicta, officia natus nam aliquam tempora 
                            quod doloribus error vitae amet molestias officiis.</p>
                    </div>
                </div>
                <div class="row text-center" id="vision">
                    <div class="col-md-12">
                        <h4 class="my-3">Visión</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Temporibus iure possimus voluptatibus commodi saepe rerum 
                            architecto nihil? Dicta, officia natus nam aliquam tempora 
                            quod doloribus error vitae amet molestias officiis.</p>
                    </div>
                </div>
            </div>
        </section>
        @endsection