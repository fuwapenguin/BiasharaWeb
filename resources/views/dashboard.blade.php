@extends('layouts.app')

@section('content')
    <form class="searchform" action="{{ route('offer.index') }}">
        <button type="submit" class="btn btn-primary searchButton" >
            <svg height="20" width="100">
                <image href="{{url('/images/search.svg')}}" height="20px" width="20px"/>
            </svg>
        </button>
        <input name="search" type="text" class="searchBar" id="pricing_id" placeholder='search exp "avocado","legumes"'>
    </form>
        <div class="col-3 dashboardItems" align="center">
            <a class="dashboardLinks" href="{{ route('offer.index') }}">
                <svg height="100" width="100">
                    <image href="{{url('/images/placeholder.svg')}}" height="100px" width="100px"/>
                </svg>
                <h6 style="margin: 15px 0px">Chat</h6>
            </a>
        </div>
        <div class="col-3 dashboardItems" align="center" >
            <a class="dashboardLinks" href="{{ route('offer.index') }}">
                <svg height="100" width="100">
                    <image href="{{url('/images/placeholder.svg')}}" height="100px" width="100px"/>
                </svg>
                <h6 style="margin: 15px 0px">Food market</h6>
            </a>
        </div>
        <div class="col-3 dashboardItems" align="center">
            <a class="dashboardLinks" href="{{ route('offer.index') }}">
                <svg height="100" width="100">
                    <image href="{{url('/images/placeholder.svg')}}" height="100px" width="100px"/>
                </svg>
                <h6 style="margin: 15px 0px">Machine market</h6>
            </a>
        </div>
        <div class="col-3 dashboardItems" align="center">
            <a class="dashboardLinks" href="{{ route('offer.index') }}">
                <svg height="100" width="100">
                    <image href="{{url('/images/placeholder.svg')}}" height="100px" width="100px"/>
                </svg>
                <h6 style="margin: 15px 0px">News</h6>
            </a>
        </div>
        <div class="col-3 dashboardItems" align="center">
            <a class="dashboardLinks" href="{{ route('offer.index') }}">
                <svg height="100" width="100">
                    <image href="{{url('/images/placeholder.svg')}}" height="100px" width="100px"/>
                </svg>
                <h6 style="margin: 15px 0px">Farm management</h6>
            </a>
        </div>
        <div class="col-3 dashboardItems" align="center" >
            <a class="dashboardLinks" href="{{ route('offer.index') }}">
                <svg height="100" width="100">
                    <image href="{{url('/images/placeholder.svg')}}" height="100px" width="100px"/>
                </svg>
                <h6 style="margin: 15px 0px">Market insights</h6>
            </a>
        </div>
        <div class="col-3 dashboardItems" align="center">
            <a class="dashboardLinks" href="{{ route('offer.index') }}">
                <svg height="100" width="100">
                    <image href="{{url('/images/placeholder.svg')}}" height="100px" width="100px"/>
                </svg>
                <h6 style="margin: 15px 0px">Education</h6>
            </a>
        </div>
        <div class="col-3 dashboardItems" align="center">
            <a class="dashboardLinks" href="{{ route('offer.index') }}">
                <svg height="100" width="100">
                    <image href="{{url('/images/placeholder.svg')}}" height="100px" width="100px"/>
                </svg>
                <h6 style="margin: 15px 0px">Analytics</h6>
            </a>
        </div>
@endsection
