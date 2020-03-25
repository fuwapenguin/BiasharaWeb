@extends ('layouts.app')

@section('buttons')
    <a class="btn btn-primary" href="{{ action('OfferController@createOffer') }}" role="button">Add new Offer</a>
    <a class="btn btn-primary" href="{{ action('OfferController@createOpenoffer') }}" role="button">Add new Open Offer</a>
    <a class="btn btn-primary" href="{{ action('OfferController@createRequest') }}" role="button">Add new Request</a>
@endsection
