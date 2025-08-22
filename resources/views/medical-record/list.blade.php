@extends('layouts.adminApp')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    Medical History List
                    <div class="pull-right">
                        <a href="{{url('medical-history-create')}}">Create New Medical History</a>
                    </div>
                </header>
                <div class="panel-body">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">

                    <div class="adv-table editable-table ">
                    
                        <table class="table table-striped table-hover table-bordered" id="editable-sample">
                            <thead>
                                <tr>
                                    <th> Medical Report Name  </th>
                                    <th> Medical Report Type </th>
                                    <th> Medical Report Photo </th>
                                    <th> Date </th>
                                    <th> Comment </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($medical_history as $item)
                                <tr>
                                    <td> {{$item->name}} </td>
                                    <td> {{$item->type}} </td>
                                    <td> <a href="{{url('medical-record/'.$item->file)}}" target="_blank"><img src="{{url('medical-record/'.$item->file)}}" alt="image" width="80"></a></td>
                                    <td> {{$item->created_at}} </td>
                                    <td>{{$item->comment}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-2"></div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection