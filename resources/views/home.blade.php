@extends('layouts.app')

@section('content')
<div class="">
    <div class="">
        <div class="d-flex row m-0 inicio-background">
            <div class="col-12 col-md-4 py-5 pl-md-5 mr-n5">
                <div class="py-md-5">
                    <div class="py-md-5">
                        <div class="h1 font-weight-bold">
                            DESCUBRÍ MÁS EXPOSICIONES EN NUESTRA APP
                        </div>
                        <p class="text-muted py-2">Disponible para teléfonos Android</p>
                        <div class="mt-2">
                            <a class="font-weight-bold btn btn-primary text-white rounded-pill" href="/pazmuseu.apk">Descargar app</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-block col-12 col-md-8">
                <div class="inicio-phone"></div>
            </div>
        </div>

        <div class="text-center col-md-8 mx-auto">
            <div class="py-5 my-md-5"></div>
            <h3>Algunas exposiciones</h3>
            <div class="row">



            </div>
            <a href="/exposiciones" class="btn btn-primary">Ver todas</a>
        </div>

        <div class="py-5 my-md-5"></div>
        <div class="text-center mx-auto">
            <div class="top-decoration"></div>
            <div class="py-md-3"></div>
            <div class="width-800">
                <h3 class="font-weight-bold">Disponible la aplicación para descargar en Android</h3>
                <p>Descarga la aplicación para tu teléfono móvil y conéctate a nuestros
                BeepCons, donde vas a conseguir seguir una a una todas las exposiciones</p>
                <div class="py-3"></div>
                <div class="btn btn-dark">
                    <div class="d-flex">
                        <img height="45px" src="/img/dowload-button.png" alt="">
                        <a href="/pazmuseu.apk" class="text-left text-white pl-3">
                            Descargar para <br> dispositivos android
                        </a>
                    </div>
                </div>
            </div>
            <div class="py-5"></div>


        </div>




  
        <div class="py-4"></div>
        <div>
            <div class="py-5"></div>
            <div class="text-center col-md-6 mx-auto">
                <h3 class="font-weight-bold h3">¿Cual es nuestro objetivo?</h3>
                <div class="mb-3">
                    <img class="rounded-circle" width="200px" height="200px" src="/img/pazmuseo-fondoazul.png" alt="">
                </div>
                <p>Por nuestra oferta de cabañas, casas, departamentos, inmuebles rurales, locales, lotes, terrenos en toda la cuenca carbonífera: Río Turbio, 28 de Noviembre, Julia Dufour, Turbio Viejo, asi como también en El Calafate, Río Gallegos y el toda la provincia de Santa Cruz. También por nuestra seriedad, confianza y asesoramiento a la hora de vender su propiedad o planificar su desarrollo o loteo.</p>
            </div>

        </div>

        <div class="py-4"></div>




       
    </div>
</div>
@endsection
