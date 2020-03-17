<?php

namespace App\Http\Controllers;

use App\Demand;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Webpatser\Uuid\Uuid;

class DemandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $demand = DB::table('demand')->get();
        return view('demand.index')
            ->with('demand', $demand);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
    	$deliveries = DB::table('delivery_terms')->get()->pluck('delivery_terms_name',	'delivery_terms_id');
	    $payments = DB::table('payment_terms_category')->get()->pluck('payment_terms_category_name',	'payment_terms_category_id');
	    $categories = DB::table('category')->get()->pluck('category_name',	'category_id');
	    $purchase = DB::table('purchase_intention')->get()->pluck('purchase_intention_name',	'purchase_intention_id');
	    $packaging = DB::table('packaging')->get()->pluck('packaging_name',	'packaging_id');
	    return view('demand.create')
		    ->with('deliveries', $deliveries)
		    ->with('payments', $payments)
		    ->with('categories', $categories)
		    ->with('purchase', $purchase)
		    ->with('packaging', $packaging);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     * @throws Exception
     */
    public function store(Request $request)
    {
        dd($request->all());
        /**  DB::table('demand')->insert([
        'demand_id' => Uuid::generate(),
        'demand_name' => $request->input('product_name'),
        'category_id' => $request->input('category'),
        'demand_created_at' => Carbon::now()->format( 'Y-m-d H:i:s' ),
        'demand_updated_at' => Carbon::now()->format( 'Y-m-d H:i:s' ),
        'demand_site' => $request->input('site'),
        'demand_size' => $request->input('size'),
        'demand_pricing' => $request->input('pricing'),
        'demand_availability' => $request->input('availability'),
        'quantity' => $request->input('quantity'),
        'buyer_id' => "1",
        'demand_time_start' => $request->input('start_date'),
        'demand_time_end' => $request->input('end_date'),
        'demand_production_capacity' => $request->input('product_capacity'),
        'pesticides_id' => $request->input('pesticides'),
        'fertilizers_id' => $request->input('fertilizers'),
        'delivery_terms_id' => $request->input('delivery_terms'),
        'demand_delivery_details' => $request->input('delivery_details'),
        'payment_terms_category_id' => $request->input('payment_terms_category'),
        'demand_payment_details' => $request->input('payment_details'),
        'purchase_intention_id' => $request->input('purchase_intention'),
        'packaging_id' => $request->input('packaging'),
        'demand_distribution' => $request->input('distribution'),
        'demand_sorting' => $request->input('sorting'),
        'demand_variety' => $request->input('variety'),
        'demand_cured' => $request->input('cured')
        ]);
        return redirect()->action('DemandController@create');*/
    }

    /**
     * Display the specified resource.
     *
     * @param Demand $demand
     * @return void
     */
    public function show(Demand $demand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Demand $demand
     * @return void
     */
    public function edit(Demand $demand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Demand $demand
     * @return void
     */
    public function update(Request $request, Demand $demand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Demand $demand
     * @return void
     */
    public function destroy(Demand $demand)
    {
        //
    }
}
