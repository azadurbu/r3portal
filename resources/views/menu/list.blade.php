@extends('layouts.adminApp')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    Menu List
                    <div class="pull-right">
                        <a href="/menu-create">Create New Menu</a>
                    </div>
                </header>
                <div class="panel-body">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">

                    <div class="adv-table editable-table ">
                    
                        <table class="table table-striped table-hover table-bordered" id="editable-sample">
                            <thead>
                                <tr>
                                    <th> Name  </th>
                                    <th> URL </th>
                                    <th> Parent </th>
                                    <th> Status </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($menus as $item)
                                <tr>
                                    <td> {{$item->name}} </td>
                                    <td> {{$item->url}} </td>
                                    <td> {{$item->parent_id}} </td>
                                    <td> {{$item->status}} </td>
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