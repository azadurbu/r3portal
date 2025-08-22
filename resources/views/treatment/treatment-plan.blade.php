@extends('layouts.adminApp')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    Treatment Plan
                </header>
                <div class="panel-body">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">

                    <div class="adv-table editable-table ">
                        <table class="table table-striped table-hover table-bordered" id="editable-sample">
                            <thead>
                                <tr>
                                    <th> Action  </th>
                                    <th> Assign To </th>
                                    <th> Deadline </th>
                                    <th> Progress </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> Provide the nurses with the necessary orders </td>
                                    <td> Alan Barnes </td>
                                    <td> January 31, 2022 </td>
                                    <td> Complete </td>
                                </tr>
                                <tr>
                                    <td> Prepare the necessary medications </td>
                                    <td> Dough Espinosa </td>
                                    <td> February 10, 2022 </td>
                                    <td> Upcoming </td>
                                </tr>
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