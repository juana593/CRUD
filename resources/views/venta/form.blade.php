<label for="id">{{'id'}}</label>
<input type="text" name="id" id="id" value="{{ isset($venta->id)?$venta->id:''}}">
<br>
<label for="nombrecli">{{'nombrecli'}}</label>
<input type="text" name="nombrecli" id="nombrecli"

 value="{{ isset($venta->nombrecli)?$venta->nombrecli:'' }}">
<br>

<label for="tipo_comprobante">{{'tipo_comprobante'}}</label>
<input type="text" name="tipo_comprobante" id="tipo_comprobante"
 value="{{ isset($venta->tipo_comprobante)?$venta->tipo_comprobante:'' }}">
<br>

<label for="impuesto">{{'impuesto'}}</label>
<input type="text" name="impuesto" id="impuesto" 
value="{{ isset($venta->impuesto)?$venta->impuesto:'' }}">
<br>

<label for="total">{{'total'}}</label>
<input type="text" name="total" id="total" 
value="{{ isset($venta->total)?$venta->total:'' }}">
<br>



<input type="submit" value="{{$Modo=='crear'? 'Agregar':'Modificar'}}">

<a href={{ URL('/venta/index')}}>Regresar</a>