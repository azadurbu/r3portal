@extends('layouts.adminApp')
@section('content')
<style>
    .panel-body{
        font-size:20px;
        line-height:40px;
    }
</style>
    <div class="row">
        <div class="col-md-12">
            <section class="panel">
                <header class="panel-heading">
                    Dashboard
                </header>
                <div class="panel-body">
                  <div class="col-sm-2"></div>
                  <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="name">Patient Name: </label>
                            </div>
                            <div class="col-sm-9">
                                <span>{{$appointment->patient}}</span>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="name">Patient Email: </label>
                            </div>
                            <div class="col-sm-9">
                                <span>{{$appointment->email}}</span>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="name">Provider Name: </label>
                            </div>
                            <div class="col-sm-9">
                                <span>{{$appointment->provider}}</span>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="name">Provider Email: </label>
                            </div>
                            <div class="col-sm-9">
                                <span>{{$appointment->provider_email}}</span>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="name">Appointment Date: </label>
                            </div>
                            <div class="col-sm-9">
                                <span>{{$appointment->apt_date}}</span>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="name">Appointment Time: </label>
                            </div>
                            <div class="col-sm-9">
                                <span>{{$appointment->apt_time}}</span>
                            </div>
                        </div>
        
                    </div>
                  </div>
                  <div class="col-sm-2"></div>
                </div>
              </section>
        </div>
    </div>
@endsection
