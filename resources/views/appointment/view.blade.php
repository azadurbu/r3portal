@extends('layouts.adminApp')
@section('content')

<style>
    .row{
        padding: 10px 0;
        font-size: 20px;
    }
</style>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <section class="panel">
        <header class="panel-heading">
            View Appointment
            <div class="pull-right">
              {{-- <a href="/edit">Edit Profile</a> --}}
            </div>
            <!-- ALERT-->
            @if(Session::has('msg-success'))
            <div class="alert alert-success alert-dismissable flash_alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {!! Session::get('msg-success') !!}
            </div>
            @elseif(Session::has('msg-error'))
            <div class="alert alert-danger alert-dismissable flash_alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {!! Session::get('msg-error') !!}
            </div>
            @elseif(Session::has('msg-info'))
            <div class="alert alert-info alert-dismissable flash_alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {!! Session::get('msg-info') !!}
            </div>
            @endif
            <!-- END ALERT-->
        </header>
        <div class="panel-body">
          <div class="col-sm-2"></div>
            <div class="col-sm-8">

                <div class="adv-table editable-table ">
                
                    <table class="table table-striped table-hover table-bordered" id="editable-sample" style="font-size: 15px">
                        <thead>
                            <tr>
                                <th> Patient Name  </th>
                                <th> Patient Email </th>
                                <th> Provider Name </th>
                                <th> Provider Email </th>
                                <th> Appointment Date </th>
                                <th> Appointment Time </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($appointment as $item)
                            <tr>
                                <td> {{$item->patient}}  </td>
                                <td> {{$item->email}} </td>
                                <td> {{$item->provider}} </td>
                                <td> {{$item->provider_email}} </td>
                                <td> {{$item->apt_date}} </td>
                                <td> {{$item->apt_time}} </td>
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