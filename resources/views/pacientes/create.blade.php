@extends('layouts.plantilla')
@section('content')
<main class="seccion">
    <h1>Registro</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est autem cumque officia, perspiciatis assumenda earum ipsa repudiandae quasi ab quibusdam voluptates iste animi laudantium aut perferendis corporis, fugit debitis quo!</p>
    <form action="{{route('pacientes.store')}}" class="registroUsuario" method="post" id="formulario-registro">
        @csrf
        <div class="campos">
        <fieldset>
        <legend>Datos Personales</legend>
            <div class="campo">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre">
            </div>
            <div class="campo">
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido">
            </div>
            <div class="campo">
                <label for="edad">Edad:</label>
                <input type="number" id="edad" name="edad">
            </div>
            <div class="campo">
                <label for="telefono">Telefono:</label>
                <input type="tel" id="telefono" name="telefono">
            </div>
            <div class="campo">
                <p style="display:block; margin:0;">Sexo:</p>
                <input type="radio" name="id_sexos" id="hombre" value="1">
                <label for="hombre">Hombre</label>
               
                <input type="radio" name="id_sexos" id="mujer" value="2">
                <label for="mujer">Mujer</label>
                
                <input type="radio" name="id_sexos" id="otro" value="3">
                <label for="otro">Otro</label>
            </div>
        </fieldset>
        
        <fieldset>
        <legend>Datos Medicos</legend>
            <div class="campo campoTextArea">
                <label for="alergias">Alergias:</label>
                <textarea name="alergias" id="alergias" ></textarea>
            </div>
            <div class="campo">
                <label for="tipoSangre">Tipo de sangre:</label>
                <select name="id_tipos_sangres" id="tipoSangre">
                    <option value="1">O negativo</option>
                    <option value="2">O positivo</option>
                    <option value="3">A negativo</option>
                    <option value="4">A positivo</option>
                    <option value="5">B negativo</option>
                    <option value="6">B positivo</option>
                </select>
            </div>
            <div class="campo campoTextArea">
                <label for="padecimientos_previos">Padecimientos Previos:</label>
                <textarea name="padecimientos_previos" id="padecimientos_previos" ></textarea>
            </div>
            <div class="campo campoTextArea">
                <label for="intervenciones_previas">Intervenciones Previas:</label>
                <textarea name="intervenciones_previas" id="intervenciones_previas" ></textarea>
            </div>
            
        </fieldset>
        </div>
        <input type="submit" value="Registrarse" id="Registrarse">
        
    </form>
</main>

@endsection