@extends('layouts.app')

@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">Offers</div>
    <div class="panel-body">

        <li class="list-group-offer-header">
            <span>Offer name</span>
            <span>Offer ID</span>
            <span>Category ID</span>
            <span>Offer created at</span>
        </li>
        <ul class="list-group">
        @foreach($offer as $offer)
            <li class="list-group-offer">
                <span>{{$offer->offer_name}}</span>
                <span>{{$offer->offer_id}}</span>
                <span>{{$offer->category_id}}</span>
                <span>{{$offer->offer_created_at}}</span>
            </li>
        @endforeach
        </ul>
    </div>
</div>
@endsection
