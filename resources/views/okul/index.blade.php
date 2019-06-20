@extends('layout/template')

@section('content')
 <h1>Okul Tablosu</h1>
 <a href="{{url('/okul/create')}}" class="btn btn-success">Yeni Kayıt</a>
 <hr>
 <table id="myTable" class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>No</th>
         <th>Ad</th>
         <th>Soyad</th>


         <th colspan="2">Actions</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($okul as $kayit)
         <tr>
             <td onclick="alert('{{ $kayit->no }}')">{{ $kayit->no }}</td>  <!--bu kısımda inline js kullandım js dosyasıa taşımam gerekiyor -->
             <td>{{ $kayit->ad }}</td>
             <td>{{ $kayit->soyad }}</td>



             <td><a href="{{route('okul.edit',$kayit->no)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['okul.destroy', $kayit->no]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach

     </tbody>

 </table>
 <?php echo $okul->links(); ?>
@endsection
