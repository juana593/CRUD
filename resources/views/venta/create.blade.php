<h1 style="text-align:center;">Agregar Nueva venta</h1>
<br>

<form action=" /venta/store " , method="post">

{{ csrf_field() }}
@include('/venta/form',['Modo'=>'crear'])


</form>
