@extends('layouts.adminApp')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    User Menu List
                    <div class="pull-right">
                        <a href="/user-menu-create">Create New User Menu</a>
                    </div>
                </header>
                <div class="panel-body">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">

                    <div class="adv-table editable-table ">
                    
                        <table class="table table-striped table-hover table-bordered" id="editable-sample">
                            <thead>
                                <tr>
                                    <th> User Type  </th>
                                    <th> Manu Name </th>
                                    <th> Manu URL </th>
                                    <th> Status </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user_menus as $item)
                                <tr>
                                    <td> {{$item->type}} </td>
                                    <td> {{$item->name}} </td>
                                    <td> {{$item->url}} </td>
                                    <td> @if ($item->status == 1) Active
                                        @else Not Active
                                        @endif
                                    </td>
                                    <td>  </td>
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