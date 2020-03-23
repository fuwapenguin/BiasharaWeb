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
use Illuminate\Support\Carbon;

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
        $process = DB::table('process')->get()->pluck('process_name', 'process_id');
        return view('offer.createOffer')
            ->with('deliveries', $deliveries)
            ->with('payments', $payments)
            ->with('categories', $categories)
            ->with('purchase', $purchase)
            ->with('packaging', $packaging)
            ->with('process', $process);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function createOpenoffer()
    {
        $deliveries = DB::table('delivery_terms')->get()->pluck('delivery_terms_name',	'delivery_terms_id');
        $payments = DB::table('payment_terms_category')->get()->pluck('payment_terms_category_name',	'payment_terms_category_id');
        $categories = DB::table('category')->get()->pluck('category_name',	'category_id');
        $purchase = DB::table('purchase_intention')->get()->pluck('purchase_intention_name',	'purchase_intention_id');
        $packaging = DB::table('packaging')->get()->pluck('packaging_name',	'packaging_id');
        $process = DB::table('process')->get()->pluck('process_name', 'process_id');
        return view('offer.createOpenoffer')
            ->with('deliveries', $deliveries)
            ->with('payments', $payments)
            ->with('categories', $categories)
            ->with('purchase', $purchase)
            ->with('packaging', $packaging)
            ->with('process', $process);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function createRequest()
    {
        $deliveries = DB::table('delivery_terms')->get()->pluck('delivery_terms_name',	'delivery_terms_id');
        $payments = DB::table('payment_terms_category')->get()->pluck('payment_terms_category_name',	'payment_terms_category_id');
        $categories = DB::table('category')->get()->pluck('category_name',	'category_id');
        $purchase = DB::table('purchase_intention')->get()->pluck('purchase_intention_name',	'purchase_intention_id');
        $packaging = DB::table('packaging')->get()->pluck('packaging_name',	'packaging_id');
        return view('offer.createRequest')
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
     * @param \Illuminate\Http\Request $request
     * @return Response
     * @throws Exception
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $arr = serialize($request['season']);
        $season = implode('',$request['Season']);
        DB::table('offers')->insert([
            'offer_id' => Uuid::generate(),
            'offer_name' => $request->input('product_name'),
            'category_id' => $request->input('category'),
            'offer_created_at' => Carbon::now()->format( 'Y-m-d H:i:s' ),
            'offer_updated_at' => Carbon::now()->format( 'Y-m-d H:i:s' ),
            'offer_site' => $request->input('site'),
            'offer_size' => $request->input('size'),
            'offer_pricing' => $request->input('pricing'),
            'offer_availability' => $request->input('availability'),
            'quantity' => $request->input('quantity'),
            'quantity_trial' => $request->input('quantity_trial'),
            'buyer_id' => "1",
            'offer_time_start' => $request->input('start_date'),
            'offer_time_end' => $request->input('end_date'),
            'offer_production_capacity' => $request->input('product_capacity'),
            'pesticides_id' => $request->input('pesticides'),
            'fertilizers_id' => $request->input('fertilizers'),
            'delivery_terms_id' => $request->input('delivery_terms'),
            'offer_delivery_details' => $request->input('delivery_details'),
            'payment_terms_category_id' => $request->input('payment_terms_category'),
            'offer_payment_details' => $request->input('payment_details'),
            'offer_season' => $season,
            'purchase_intention_id' => $request->input('purchase_intention'),
            'packaging_id' => $request->input('packaging'),
            'offer_distribution' => $request->input('distribution'),
            'offer_sorting' => $request->input('sorting'),
            'offer_certifications' => $request->input('sorting'),
            'offer_variety' => $request->input('variety'),
            'offer_cured' => $request->input('cured'),
            'offer_weight' => $request->input('weight'),
            'offer_product_type' => $request->input('product_type'),
            'offer_type_id' => $request->input('offer_type'),
            'process_id' => $request->input('process')
        ]);
        return redirect('offer');
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
