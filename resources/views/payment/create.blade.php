@extends('layouts.adminApp')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <section class="panel">
        <header class="panel-heading">
            Create New Payment
            <div class="pull-right">
              <a href="/payment-receipt-list">Payment List</a>
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
              <form action="payment-receipt-save" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="f_name">First Name</label>
                        <input type="text" class="form-control" placeholder="First Name" name="f_name">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="l_name">Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name" name="l_name">
                      </div>
                    </div>
                  </div>
                    
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="phone">Phone</label>
                          <input type="text" class="form-control" placeholder="Phone" name="phone">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="total_pay">Total Pay</label>
                          <input type="text" class="form-control" placeholder="Total Pay" name="total_pay">
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="reg_date">Registration Date</label>
                          <input type="date" class="form-control" placeholder="Registration Date" name="reg_date">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="status">Status</label>
                          <select class="form-control" name="parent">
                            <option value="1">On</option>
                            <option value="0">Off</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    
                  <button type="submit" class="btn btn-primary pull-right">Create</button>
              </form>
          </div>
          <div class="col-sm-2"></div>
        </div>
      </section>
    </div>
  </div>
</div>
@endsection