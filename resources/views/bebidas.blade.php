
<!--Imprimir por pantalla-->
<h1>BEBIDAS</h1>
<h1>{{"Imprimiendo por pantalla"}}</h1>


<!--Mostrar si existe-->
<?= isset($director) ? $director : 'No existe director';?>
<br>
{{ $director ?? 'No existe director' }}
<br>
<!--Condicionales-->
@if($titulo)
    <h1>El titulo existe y es: {{$titulo}}</h1>
@else
    El titulo no existe
@endif

<!--Bucles-->
@for($i=0; $i<10 ; $i++)
    El numero es {{$i}} <br>
@endfor
<br>
<?php $contador = 1 ?>
@while($contador < 15)
    @if($contador % 2 == 0)
        NUMERO PAR: {{$contador}}
        <br>
    @endif
<?php $contador++ ?>
@endwhile

