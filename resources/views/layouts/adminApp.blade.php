@extends('layouts.myApp')
@section('page-name')
Patient Portal
@endsection
@section('left-side-menu')
<ul class="nav nav-pills nav-stacked custom-nav">
    <li class="active" ><a href="{{url('/')}}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
    {{-- @php $main_menus = menu_user() @endphp
    @foreach ($main_menus as $item)
        <li class="menu-list" ><a href=""><i class="fa fa-user"></i> <span>{{$item->name}}</span></a>
            <ul class="sub-menu-list">
                @php $sub_menu = sub_menu($item->id) @endphp
                @foreach ($sub_menu as $item2)
                <li class="">
                    <a href="{{url($item2->url)}}">{{$item2->name}} </a>
                </li>
                @endforeach
            </ul>
        </li>
    @endforeach --}}
    {{-- @if (Auth::user()->id==4) --}}
    <li class="menu-list" ><a href=""><i class="fa fa-laptop"></i> <span>Profile</span></a>
        <ul class="sub-menu-list">
            <li class="">
                <a href="{{url('profile-view')}}">My Profile</a>
            </li>
        </ul>
    </li>
    <li class="menu-list" ><a href=""><i class="fa fa-laptop"></i> <span>Appointment</span></a>
        <ul class="sub-menu-list">
            <li class="">
                <a href="{{url('appointment-view')}}">My Appointment </a>
            </li>
        </ul>
    </li>

    <li class="menu-list" ><a href=""><i class="fa fa-laptop"></i> <span>Consents</span></a>
        <ul class="sub-menu-list">
            <li class="">
                <a href="{{url('consents-view')}}">View Consents </a>
            </li>
        </ul>
    </li>
    
    <li class="menu-list" ><a href=""><i class="fa fa-laptop"></i> <span>Treatment</span></a>
        <ul class="sub-menu-list">
            <li class="">
                <a href="{{url('treatment-plan')}}"> Treatment Plan </a>
            </li>
            <li class="">
                <a href="{{url('treatment-details')}}"> Treatment Details </a>
            </li>
            <li class="">
                <a href="{{url('treatment-guide')}}"> Treatment Guide </a>
            </li>
            <li class="">
                <a href="{{url('nutrition-view')}}">Nutrition </a>
            </li>
            <li class="">
                <a href="{{url('common-adverse-events')}}">Common Adverse Events </a>
            </li>
            <li class="">
                <a href="{{url('optimizing-outcome')}}">Optimizing Your Outcome </a>
            </li>
            <li class="">
                <a href="{{url('before-appointment')}}">Before Your Procedure Appointment </a>
            </li>
        </ul>
    </li>
    
    <li class="menu-list" ><a href=""><i class="fa fa-laptop"></i> <span>Quote</span></a>
        <ul class="sub-menu-list">
            <li class="">
                <a href="{{url('quote-view')}}">View Quote </a>
            </li>
        </ul>
    </li>
    <li class="menu-list" ><a href=""><i class="fa fa-laptop"></i> <span>Payment</span></a>
        <ul class="sub-menu-list">
            <li class="">
                <a href="{{url('payment-receipt-list')}}">Payment Receipt </a>
            </li>
        </ul>
    </li>
    <li class="menu-list" ><a href=""><i class="fa fa-laptop"></i> <span>Master Class</span></a>
        <ul class="sub-menu-list">
            <li class="">
                <a href="{{url('master-class')}}">View Master Class </a>
            </li>
        </ul>
    </li>

    <li class="menu-list" ><a href=""><i class="fa fa-laptop"></i> <span> Medical Record </span></a>
        <ul class="sub-menu-list">
            <li class="">
                <a href="{{url('medical-history')}}">List Medical Record
                </a>
            </li>
        </ul>
    </li>
    
    <li class="menu-list" ><a href=""><i class="fa fa-laptop"></i> <span>Procedure Instructions </span></a>
        <ul class="sub-menu-list">
            <li class="">
                <a href="{{url('procedure-instruct')}}">VIEW PRE/POST PROCEDURE INSTRUCTIONS
                </a>
            </li>
        </ul>
    </li>
    
    <li class="menu-list" ><a href=""><i class="fa fa-laptop"></i> <span>FAQs</span></a>
        <ul class="sub-menu-list">
            <li class="">
                <a href="{{url('faq')}}">View FAQs of Stem Cell Therapy </a>
            </li>
        </ul>
    </li>
    {{-- <li class="menu-list" ><a href=""><i class="fa fa-laptop"></i> <span>Customer Service </span></a>
        <ul class="sub-menu-list">
            <li class="">
                <a href="{{url('youtube')}}">YouTube</a>
            </li>
            <li class="">
                <a href="{{url('payment-receipt-view')}}">Locations</a>
            </li>
        </ul>
    </li> --}}
    {{-- @endif --}}
    
    @if (Auth::user()->id==1)
    <li class="menu-list" ><a href=""><i class="fa fa-laptop"></i> <span>Menu</span></a>
        <ul class="sub-menu-list">
            <li class="">
                <a href="{{url('menu')}}">List Menu </a>
            </li>
            <li class="">
                <a href="{{url('user-menu')}}">User Menu </a>
            </li>
        </ul>
    </li>
    @endif
</ul>
@endsection
