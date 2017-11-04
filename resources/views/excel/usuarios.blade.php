
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




              
 
       

        </td></td>  
      
    </tr>
  </tbody>

  @endforeach


</table>
