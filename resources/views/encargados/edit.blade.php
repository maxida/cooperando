@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Encargado
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($encargado, ['route' => ['encargados.update', $encargado->id], 'method' => 'patch', 'enctype' => 'multipart/form-data') !!}

                        @include('encargados.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection