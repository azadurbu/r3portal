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
            View Profile
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
              @php
            //   dd($user_info)
              @endphp
                <div class="row">
                    <div class="col-sm-3">
                        <label for="name">Name: </label>
                    </div>
                    <div class="col-sm-9">
                        <span>{{$user_info->name}}</span>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-3">
                        <label for="name">Phone Number: </label>
                    </div>
                    <div class="col-sm-9">
                        <span>{{$user_info->phone_no}}</span>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-3">
                        <label for="name">Email: </label>
                    </div>
                    <div class="col-sm-9">
                        <span>{{$user_info->email}}</span>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-3">
                        <label for="name">City: </label>
                    </div>
                    <div class="col-sm-9">
                        <span>{{$user_info->city}}</span>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-3">
                        <label for="name">State: </label>
                    </div>
                    <div class="col-sm-9">
                        <span>{{$user_info->state}}</span>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-3">
                        <label for="name">Zip Code: </label>
                    </div>
                    <div class="col-sm-9">
                        <span>{{$user_info->zip_code}}</span>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-3">
                        <label for="name">Country: </label>
                    </div>
                    <div class="col-sm-9">
                        <span>{{$user_info->country}}</span>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-3">
                        <label for="name">Address 1: </label>
                    </div>
                    <div class="col-sm-9">
                        <span>{{$user_info->address_1}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <label for="name">Address 2: </label>
                    </div>
                    <div class="col-sm-9">
                        <span>{{$user_info->address_2}}</span>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-sm-2"></div>
        </div>
      </section>
    </div>
  </div>
</div>
@endsection