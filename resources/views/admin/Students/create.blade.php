
@extends('layouts.app')
@section('content')

@if(count($errors) > 0)
 <ul class="list-group">
   @foreach($errors->all() as $error)
   <li class="list-group-item text-danger">
     {{$error}}
   </li>
   @endforeach
 </ul>
 @endif


<div class="panel panel-default ContainerRegister">

 <div class="panel-body">
   <form class="" action="{{route('student.store')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="title">CODE DAPOGEE</label>
                <input type="text" name="codedapogee"class="input" value="">
              </div>
              <div class="form-group">
                <label for="feature">NOM COMPLET</label>
                <input type="text" name="name"class="input" value="">
              </div>
                    <div class="form-group">
                <label for="feature">CIN</label>
                <input type="text" name="cin"class="input" value="">
              </div>
                    <div class="form-group">
                <label for="feature"> ADDRESSE MAIL</label>
                <input type="email" name="email"class="input" value="">
              </div>
                  <div class="form-group">
<label for="documents">Choisisez un document   </label>
<select  class='select' name="doc_id" id="documents">
       @foreach($documents as $document)
       <option value="{{ $document->doc }}">{{ $document->doc }}</option>
       @endforeach
</select>
              </div>
                <a >
                  <button name="button" type="submit">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Envoyer
                    </button>
                </a>


   </form>
   <div class="side"></div>
 </div>
</div>

@stop
@section('styles')

 @stop
