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
        $uuid = Uuid::generate(1);
        dd($uuid);
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
