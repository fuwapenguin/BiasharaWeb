<?php

namespace App\Http\Controllers;

use App\Offer;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Webpatser\Uuid\Uuid;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $offer = DB::table('offers')->get();
        return view('offer.index')
            ->with('offer', $offer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function createOffer()
    {
        $deliveries = DB::table('delivery_terms')->get()->pluck('delivery_terms_name',	'delivery_terms_id');
        $payments = DB::table('payment_terms_category')->get()->pluck('payment_terms_category_name',	'payment_terms_category_id');
        $categories = DB::table('category')->get()->pluck('category_name',	'category_id');
        $purchase = DB::table('purchase_intention')->get()->pluck('purchase_intention_name',	'purchase_intention_id');
        $packaging = DB::table('packaging')->get()->pluck('packaging_name',	'packaging_id');
        return view('offer.createOffer')
            ->with('deliveries', $deliveries)
            ->with('payments', $payments)
            ->with('categories', $categories)
            ->with('purchase', $purchase)
            ->with('packaging', $packaging);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
