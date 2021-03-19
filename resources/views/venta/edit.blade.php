<h1 style="text-align:center;">Editar Venta</h1>
<br>


<form action="{{ URL::action('VentaController@editar',$venta->id)}}" method="post" >

{{csrf_field()}}

{{method_field('PATCH')}}

@include('/venta/form',['Modo'=>'editar'])

</form>