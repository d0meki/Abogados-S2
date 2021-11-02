@extends('adminlte::page')

@section('title', 'Bienvenidos')

@section('content')

<div class="card">
    <div class="card-body">
        <div class="text-center article-title">
        <span class="text-muted"><i class="far fa-calendar-alt"></i> {{ date('Y-m-d') }}</span>
            <h1>
                El mundo de los abogados
            </h1>
        </div>
        <h3>Las tecnologías de la información revolucionan la práctica de la gran mayoría de las profesiones del mundo, y <strong>la abogacía no es una excepción.</strong> </h3>
        <br>
        <p>
            Algunas revistas dedicadas a la orientación profesional desaniman a los jóvenes que encuentran en la abogacía una dirección vocacional , apoyadas en la tesis de que los abogados seremos proveedores de servicios que llegaremos a ser desplazados por complejos algoritmos matemáticos y computadoras mayormente guiadas por inteligencia artificial.
        </p>
        <p>
            Es cierto que el ejercicio de la profesión del derecho ha venido a verse rápidamente revolucionado con múltiples apoyos digitales que hacen más fácil el trabajo y, desde algún punto de vista, a verse sustituido en algunas funciones que otrora realizábamos los abogados, por esos mismos programas que procesan con vertiginosa rapidez las tecnologías en el ámbito de los sistemas computacionales.
        </p>
        <p>
            <i>
                En el derecho corporativo, el que se refiere a la redacción de los contratos y las asambleas que rigen la vida de las sociedades mercantiles, por ejemplo, existe un universo tan grande de documentos tan bien redactados, a la disposición del público, que la intervención de los abogados se llega a ver reducida en algunos casos a una tarea de elección de párrafos y llenado de espacios en blanco, que desmerece enormemente su trabajo. La participación de los abogados sólo se torna indispensable en algunas operaciones complejas, que llegan a ser excepcionales.
            </i>
        </p>
        <p>
            El Poder Judicial de la federación, como también los Tribunales Administrativos, Agrarios y del Trabajo en el mismo ámbito federal, y los Poderes Judiciales y Tribunales Administrativos de los Estados, ponen al servicio del público poderosos buscadores que facilitan a los abogados dedicados al patrocinio de asuntos contenciosos, los precedentes, los criterios y tesis más avanzadas que los propios órganos de justicia han emitido con relación a los conflictos más recientes sometidos a su jurisdicción; un sistema de búsqueda y consulta que facilita la identificación de los caminos que los abogados deben seguir para obtener sentencias que favorecen los intereses de sus representados.
        </p>
        <p>
            Sin embargo, la ciencia del derecho y las leyes gozan de las cualidades propias de las ciencias sociales, que las diferencian diametralmente de las ciencias exactas. Los conflictos alrededor de la justicia y la equidad cambian de una circunstancia a otra, y es la confianza que el ser humano tiene en los sentimientos de honor, de dignidad, de piedad, de justicia y perdón, que la labor que realizan los jueces, así como muchos servidores públicos, difícilmente podría llegarse a ver sustituida por un programa de computadora.
        </p>
        <p>
            Vale la pena recordar que la razón anterior sirvió como justificación vertebral para que durante el sexenio del presidente Calderón se impulsara una reforma sustantiva y radical en el ámbito de la justicia penal en 2008. Se buscó transformar la formalidad de los procesos criminales, que se vieron guiados al terreno de la oralidad, ahora a través de un nuevo Código Único de Procesos Penales, aprobado durante la primera mitad del sexenio del presidente Peña. Un cambio de formato relevante que redimensionó el principio de inmediatez que debe privar en la relación entre juzgador y justiciables.
        </p>
        <hr>
    </div>
</div>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

