<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Logradouro</th>
        <th scope="col">Cidade</th>
        <th scope="col">Estado</th>
        <th scope="col">Pais</th>
        <th scope="col">Latitude</th>
        <th scope="col">Longitude</th>
        <th scope="col">Data</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach($dados as $dado)      
      {{--  {!! Form::open(array('route' => 'site','method'=>'POST')) !!}    --}}
      <tr>
        {{--  {{ Form::hidden('id','', ['id'=> $dado->id]) }}  --}}
        <td><a href="site/{{$dado->id}}">{{$dado->id}}</a></td>
       
        <td>{{$dado->nome}}</td>   
        <td>{{$dado->logradouro}}</td>  
        <td>{{$dado->cidade}}</td> 
        <td>{{$dado->estado}}</td> 
        <td>{{$dado->pais}}</td> 
        <td>{{$dado->lat}}</td> 
        <td>{{$dado->lng}}</td>         
        <td>@if($dado->situacao==0)<span class="label label-default">{{'Inativo'}}</span>@else<span class="label label-success">{{'Ativo'}}</span>@endif</td> 
     
      </tr>
      {{--  {!! Form::close() !!}  --}}
    @endforeach
    </tbody>
</table>
