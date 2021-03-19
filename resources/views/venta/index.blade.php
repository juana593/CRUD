<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


@if(Session::has('Mensaje')){{
        Session::get('Mensaje')
}}
@endif

<a href={{ URL('/venta/create')}}>Agregar Venta</a>


<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>id</th>
            <th>Nombre Cliente</th>
            <th>Tipo de comprobante</th>
            <th>Impuesto</th>
            <th>Total</th>
            
        </tr>
    </thead>
    <tbody>
    
    @foreach ($datos as $venta)
        
                <td>{{$loop->iteration}}</td>
                    <td>{{$venta->id}}</td>
                    <td>{{$venta->nombrecli}}</td>
                    <td>{{$venta->tipo_comprobante}}</td>
                    <td>{{$venta->impuesto}}</td>
                    <td>{{$venta->total}}</td>
                    
                    <td>
                    
                      <a href="{{URL::action('VentaController@editar',$venta->id)}}" type="button" class="btn bt-succes">Editar</a> 
                     | 
                    
                    
              <a href="{{URL::action('VentaController@eliminar',$venta->id)}}" type="button" class="btn btn-danger">Eliminar</a>
                    
                    </td>
               
        </tr>

            </tr>
    @endforeach
    
        
    </tbody>
</table>

