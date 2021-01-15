@extends('layouts.plantilla')
@section('content')
<header class="logo">
    <h1>Hospital Romero</h1>
      <nav>
        <a href="#"><i class="fab fa-facebook-square"></i></a>
        <a href="#"><i class="fab fa-whatsapp"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </nav>
    </header>
  
      <main class="seccion">
        <h2>Bienvenido</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing etetur adipisicing etetur adipisicing etetur adipisicing etetur adipisicing etetur adipisicing elit. Tempora, amet. Dolores totam laudantium, dolorem, officia corporis maxime velit alias nulla doloribus error repudiandae exercitationem recusandae tenetur aspernatur aperiam inventore quos!</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora, amet. Dolores totam laudantium, dolorem, officia corporis maxime velit alias nulla doloribus error repudiandae exercitationem recusandae tenetur aspernatur aperiam inventore quos!</p>
      </main>
      <section class="seccion">
        <h2>Especialidades</h2>
        <p>En nuestro hospital contamos con personal altamente capacitado en las siguientes areas:</p>
        <ul class="especialidades">
            @foreach ($especialidades as $especialidad)
            <li class="especialidad"><h3>{{$especialidad->nombre}}</h3>
                <p> {{$especialidad->resumen}}
                  <div class="botones-especialidad">
                    <a href="doctores.php?especializacion={{$especialidad->id}}">Doctores</a> <a href="info_especialidad.php?especialidad={{$especialidad->id}}">Ver Mas</a>
                  </div>
                  </p> 
              </li>
            @endforeach
         
        </ul>
      </section>
      <section class="seccion">
        <h2>Estudios</h2>
        <div class="estudios">
            @foreach ($estudios as $estudio)
            <a href="estudio.php?estudio={{$estudio->nombre}}&id_estudio={{$estudio->id}}" class="estudio"> 
                <div >
                  <h3>{{$estudio->nombre}}</h3>
                  <img src="img/estudio{{$estudio->id}}.jpg" alt={{$especialidad->nombre}}>
                </div>
              </a>
            @endforeach
           
      </section>
    <section class="seccion">
      <h2>Ubicación</h2>
      <div class="ubicacion" id="ubicacion"></div>
    </section>
@endsection