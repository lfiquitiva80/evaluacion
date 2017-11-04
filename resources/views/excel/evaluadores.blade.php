
<table class="table table-hover" border="1" id="Eventos">
  <thead>
    <tr>
          <th>id</th>
          <th>name</th>
          <th>email</th>
          <th>password</th>
          <th>TipoUsers</th>
          <th>remember_token</th>
          <th>_token</th>
          <th>_method</th>
          <th>created_at</th>
          <th>updated_at</th>
          <th>NombreEvaluador</th>
          <th>Telefono</th>
          <th>Direccion</th>
          <th>Codigo_postal</th>
          <th>Ciudad_Proponente</th>
          <th>Departamento_Proponente</th>
          <th>id_users</th>
          <th>Cedula</th>
          <th>HV</th>
          <th>Cedula_pdf</th>
          <th>Certificado_Bancario</th>
          <th>cuentacobro</th>
          <th>Rut</th>



     

    
    </tr>
  </thead>
  <tbody>

  @foreach($products as $row)
    <tr>

        <td>{{$row->id}}</td>
        <td>{{$row->name}}</td>
        <td>{{$row->email}}</td>
        <td>{{$row->password}}</td>
        <td>{{$row->TipoUsers}}</td>
        <td>{{$row->remember_token}}</td>
        <td>{{$row->_token}}</td>
        <td>{{$row->_method}}</td>
        <td>{{$row->created_at}}</td>
        <td>{{$row->updated_at}}</td>
        <td>{{$row->NombreEvaluador}}</td>
        <td>{{$row->Telefono}}</td>
        <td>{{$row->Direccion}}</td>
        <td>{{$row->Codigo_postal}}</td>
        <td>{{$row->Ciudad_Proponente}}</td>
        <td>{{$row->Departamento_Proponente}}</td>
        <td>{{$row->id_users}}</td>
        <td>{{$row->Cedula}}</td>
        <td>{{$row->HV}}</td>
        <td>{{$row->Cedula_pdf}}</td>
        <td>{{$row->Certificado_Bancario}}</td>
        <td>{{$row->cuentacobro}}</td>
        <td>{{$row->Rut}}</td>





              
 
       

        </td></td>  
      
    </tr>
  </tbody>

  @endforeach


</table>
