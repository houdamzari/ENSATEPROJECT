@extends('layouts.app')

@section('content')


<div class = "container2">
    <ul class="responsive-table">
   <li class="table-header">
     <div class="col col-1" strong >CODE D'APOGEE</div>
     <div class="col col-2">NON COMPLET</div>
     <div class="col col-3">CIN</div>
     <div class="col col-4">EMAIL</div>
     <div class="col col-4">DOCUMENT</div>
     <div class="col col-5">ACTION</div>
</li>


      @if($Students->count() > 0)

    @foreach($Students as $Student)

<li class="table-row">
    <div class="col col-1" data-label="code dapogee">{{$Student->codedapogee}}</div>
    <div class="col col-2" data-label="Customer Name">{{$Student->name}}</div>
    <div class="col col-3" data-label="Amount">{{$Student->cin}}</div>
    <div class="col col-4" data-label="Payment Status">{{$Student->email}}</div>
    <div class="col col-4" data-label="Payment Status">{{$Student->doc_id}}</div>

    <a href="{{route('student.delete', ['id' => $Student->id])}}" class="col col-1 btn btn-success">Accept</a>

   <a href="{{route('students.kill', ['id' => $Student->id])}}" class=" col col-1 btn btn-danger">Decline</a>


  </li>









    @endforeach


    @else
    <li class="table-row">
    <div class="col col-4" data-label="Payment Status">No student requests</div>
</li>
@endif

</ul>
</div>






























@stop
