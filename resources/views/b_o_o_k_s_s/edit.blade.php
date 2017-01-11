@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            B O O K S
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($bOOKS, ['route' => ['bOOKSS.update', $bOOKS->id], 'method' => 'patch']) !!}

                        @include('b_o_o_k_s_s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection