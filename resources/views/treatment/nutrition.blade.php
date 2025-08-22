@extends('layouts.adminApp')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    Nutrition
                </header>
                <div class="panel-body">
                    <iframe src="{{url('R3 Dietary Guideline Final.pdf')}}" width="100%" height="550px"></iframe>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection