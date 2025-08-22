@extends('layouts.adminApp')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <section class="panel">
        <header class="panel-heading">
            Create New Menu
            <div class="pull-right">
              <a href="/menu">Menu List</a>
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
              <form action="menu-save" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" placeholder="Name" name="name">
                  </div>
                  <div class="form-group">
                    <label for="url">URL</label>
                    <input type="text" class="form-control" placeholder="ULR" name="url">
                  </div>
                  <div class="form-group">
                    <label for="parent">Parent</label>
                    <select class="form-control" name="parent">
                      <option value="">Select Parent</option>
                      @foreach ($menus as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  {{-- <div class="form-group">
                    <label for="serial_after">Serial After</label>
                    <select class="form-control" name="serial_after">
                      <option value="">Select Serial After</option>
                      <option value="">1</option>
                    </select>
                  </div> --}}
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