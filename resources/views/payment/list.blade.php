@extends('layouts.adminApp')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    Payment Receipt List
                    <div class="pull-right">
                        <a href="/payment-receipt-create">Create New Payment</a>
                    </div>
                </header>
                <div class="panel-body">
                {{-- <div class="col-sm-2"></div>
                <div class="col-sm-8"> --}}

                    <div class="adv-table editable-table ">
                    
                        <table class="table table-striped table-hover table-bordered" id="editable-sample">
                            <thead>
                                <tr>
                                    <th> Payment ID  </th>
                                    <th> First Name </th>
                                    <th> Last Name </th>
                                    <th> Email </th>
                                    <th> Phone </th>
                                    <th> Total Pay  </th>
                                    <th> Transection ID </th>
                                    <th> Reg. Date </th>
                                    <th> Status </th>
                                    <th> Create Date </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payment as $item)
                                <tr>
                                    <td> {{$item->payment_id}} </td>
                                    <td> {{$item->f_name}} </td>
                                    <td> {{$item->l_name}} </td>
                                    <td> {{$item->email}} </td>
                                    <td> {{$item->phone}} </td>
                                    <td> {{$item->total_pay}} </td>
                                    <td> {{$item->transection_id}} </td>
                                    <td> {{$item->reg_date}} </td>
                                    <td> {{$item->status}} </td>
                                    <td> {{$item->created_at}} </td>
                                    <td> </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                {{-- </div>
                <div class="col-sm-2"></div> --}}
                </div>
            </section>
        </div>
    </div>
</div>
@endsection