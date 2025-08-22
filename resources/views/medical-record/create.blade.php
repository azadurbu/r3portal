@extends('layouts.adminApp')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <section class="panel">
        <header class="panel-heading">
            Create New Medical Record
            <div class="pull-right">
              <a href="{{url('medical-history')}}">Medical Record List</a>
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
              <form action="medical-history-save" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="name">Medical Record Name</label>
                    <input type="text" class="form-control" placeholder="Name" name="name">
                  </div>
                  <div class="form-group">
                    <label for="type">Medical Record Type</label>
                    <input type="text" class="form-control" placeholder="Type" name="type">
                  </div>
                  <div class="form-group">
                    <label for="file">Medical Record File</label>
                    <input type="file" class="form-control" placeholder="File" name="file">
                  </div>
                  <div class="form-group">
                    <label for="comment">Comment</label>
                  </div>
                    <div class="form-group">
                    <textarea name="comment" style="height: 100px; width: 100%; resize: none;"  class="form-group"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Create</button>
              </form>
          </div>
          <div class="col-sm-2"></div>
        </div>
      </section>
    </div>
  </div>
</div>
@endsection