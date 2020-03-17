@extends ('layouts.app')

@section('buttons')
    <a class="btn btn-primary" href="{{ action('OfferController@createOffer') }}" role="button">Add new Offer</a>
@endsection
