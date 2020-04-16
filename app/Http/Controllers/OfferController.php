<?php

namespace App\Http\Controllers;

use App\Offer;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Carbon;
use Illuminate\Http\File;
use App\Helper\HelperBiashara;
use Symfony\Component\HttpFoundation\File\UploadedFile;

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
        $subCategories = DB::table('sub_category')->get()->pluck('sub_category_name',	'sub_category_id');
        $productType = DB::table('product_type')->get()->pluck('product_type_name',	'product_type_id');
        $purchase = DB::table('purchase_intention')->get()->pluck('purchase_intention_name',	'purchase_intention_id');
        $packaging = DB::table('packaging')->get()->pluck('packaging_name',	'packaging_id');
        $process = DB::table('process')->get()->pluck('process_name', 'process_id');
        return view('offer.createOffer')
            ->with('deliveries', $deliveries)
            ->with('payments', $payments)
            ->with('categories', $categories)
            ->with('subCategories', $subCategories)
            ->with('productType', $productType)
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
        $subCategories = DB::table('sub_category')->get()->pluck('sub_category_name',	'sub_category_id');
        $productType = DB::table('product_type')->get()->pluck('product_type_name',	'product_type_id');
        $purchase = DB::table('purchase_intention')->get()->pluck('purchase_intention_name',	'purchase_intention_id');
        $packaging = DB::table('packaging')->get()->pluck('packaging_name',	'packaging_id');
        $process = DB::table('process')->get()->pluck('process_name', 'process_id');
        return view('offer.createOpenoffer')
            ->with('deliveries', $deliveries)
            ->with('payments', $payments)
            ->with('categories', $categories)
            ->with('subCategories', $subCategories)
            ->with('productType', $productType)
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
        $subCategories = DB::table('sub_category')->get()->pluck('sub_category_name',	'sub_category_id');
        $productType = DB::table('product_type')->get()->pluck('product_type_name',	'product_type_id');
        $purchase = DB::table('purchase_intention')->get()->pluck('purchase_intention_name',	'purchase_intention_id');
        $packaging = DB::table('packaging')->get()->pluck('packaging_name',	'packaging_id');
        return view('offer.createRequest')
            ->with('deliveries', $deliveries)
            ->with('payments', $payments)
            ->with('categories', $categories)
            ->with('subCategories', $subCategories)
            ->with('productType', $productType)
            ->with('purchase', $purchase)
            ->with('packaging', $packaging);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function confirmOffer()
    {
        return view('offer.confirmOffer');
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

    public function showImageResults(Request $request){

        $json = ['success' => 'false'];

        $result = [];

        if ($request->file('file'))  {
            $json['success'] = 'true';

            # the name of the image file to annotate
            $fileName = $request->file('file');

            # prepare the image to be annotated
            $image = file_get_contents($fileName);

            $json2 = [];
            $json2 = array_merge($json2, HelperBiashara::getGoogleVisionLabels($image));
            $json2 = array_merge($json2, HelperBiashara::getGoogleVisionWeb($image));
            $json2 = array_merge($json2, HelperBiashara::getGoogleVisionSafe($image));

            $productType = DB::table('product_type')->get()->pluck('product_type_name',	'product_type_id')->toArray();

            //Check for product from database matches images
            foreach($productType as $key => $val)
            {
                foreach($json2['labels'] as $key2 => $val2)
                {
                    if(strtolower($val2) != 'fruit' && preg_match('/\b'.strtolower($val).'\b/', strtolower($val2)))
                    {
                        if(array_key_exists($val, $result))
                        {
                            $result[$val]['score'] = $result[$val]['score'] + 1;
                        }
                        else
                        {
                            $result[$val]['score'] = 1;
                            $result[$val]['id'] = $key;
                        }
                    }
                }
                foreach($json2['webEntities'] as $key3 => $val3)
                {
                    if(strtolower($val3) != 'fruit' && preg_match('/\b'.strtolower($val).'\b/', strtolower($val3)))
                    {
                        if(array_key_exists($val, $result))
                        {
                            $result[$val]['score'] = $result[$val]['score'] + 1;
                        }
                        else
                        {
                            $result[$val]['score'] = 1;
                            $result[$val]['id'] = $key;
                        }
                    }
                }
                if(strtolower($json2['webLabel']) != 'fruit' && preg_match('/\b'.strtolower($val).'\b/', strtolower($json2['webLabel'])))
                {
                    if(array_key_exists($val, $result))
                    {
                        $result[$val]['score'] = $result[$val]['score'] + 1;
                    }
                    else
                    {
                        $result[$val]['score'] = 1;
                        $result[$val]['id'] = $key;
                    }
                }
            }

            //Check for sub categories if there is no product found
            if(count($result) == 0)
            {
                $subCategories = DB::table('sub_category')->get()->pluck('sub_category_name',	'sub_category_id')->toArray();

                foreach($subCategories as $key => $val)
                {
                    foreach($json2['labels'] as $key2 => $val2)
                    {
                        if(preg_match('/\b'.strtolower($val).'\b/', strtolower($val2)))
                        {
                            if(array_key_exists($val, $result))
                            {
                                $result[$val]['score'] = $result[$val]['score'] + 1;
                            }
                            else
                            {
                                $result[$val]['score'] = 1;
                                $result[$val]['id'] = $key;
                            }
                        }
                    }
                    foreach($json2['webEntities'] as $key3 => $val3)
                    {
                        if(preg_match('/\b'.strtolower($val).'\b/', strtolower($val3)))
                        {
                            if(array_key_exists($val, $result))
                            {
                                $result[$val]['score'] = $result[$val]['score'] + 1;
                            }
                            else
                            {
                                $result[$val]['score'] = 1;
                                $result[$val]['id'] = $key;
                            }
                        }
                    }
                    if(preg_match('/\b'.strtolower($val).'\b/', strtolower($json2['webLabel'])))
                    {
                        if(array_key_exists($val, $result))
                        {
                            $result[$val]['score'] = $result[$val]['score'] + 1;
                        }
                        else
                        {
                            $result[$val]['score'] = 1;
                            $result[$val]['id'] = $key;
                        }
                    }
                }
            }

            foreach(json_decode($_REQUEST['categories'], true) as $key => $val)
            {
                //echo $key . $val;
            }

            $highestScore = max(array_column($result, 'score'));
            $resultId  = "";
            foreach ($result as $key => $val)
            {
                if($val['score'] == $highestScore)
                {
                    $resultId = $val['id'];
                }
            }

            if($resultId != "")
            {
                $productTypeInfo = DB::table('product_type')->where('product_type_id', $resultId)->first();
                $subCatInfo = DB::table('sub_category')->where('sub_category_id', $productTypeInfo->sub_category_id)->first();
                $categoryInfo = DB::table('category')->where('category_id', $subCatInfo->category_id)->first();

                $json['cat_id'] = $categoryInfo->category_id;
                $json['sub_cat_id'] = $subCatInfo->sub_category_id;
                $json['product_type_id'] = $productTypeInfo->product_type_id;
            }
        }

        return json_encode($json);
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
        $this->validate($request, [
           'file' => 'required',
           'file.*' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $imageData = [];
        $offerId = Uuid::generate();

        if($request->hasFile('file'))
        {
            $productTypeInfo = DB::table('product_type')->where('product_type_id', $_REQUEST['product_type'])->first();
            $subCatInfo = DB::table('sub_category')->where('sub_category_id', $_REQUEST['sub_category'])->first();
            $categoryInfo = DB::table('category')->where('category_id', $_REQUEST['category'])->first();

            foreach ($request->file('file') as $image) {
                $imageID = Uuid::generate();
                $name = $image->getClientOriginalName();
                $categoryName = DB::table('category')->where('category_id', $request->input('category'))->first()->category_name;
                $imagePath = 'offers/' .
                    $categoryInfo->category_name . "/" .
                    $subCatInfo->sub_category_name . "/" .
                    $productTypeInfo->product_type_name;
                Storage::putFileAs($imagePath, $image, "" . $imageID . '.' . $image->getClientOriginalExtension());

                $imageData[] = [
                    'imageName' => $name,
                    'imagePath' => $imagePath,
                    'type' => 'image',
                    'imageID' => $imageID
                ];
            }
        }

        #create images in media
        foreach($imageData as $data)
        {
            DB::table('media')->insert([
                'media_id' => $data['imageID'],
                'media_path' => $data['imagePath'],
                'media_type' => $data['type'],
                'media_name' => $data['imageName'],
                'media_created_at' => Carbon::now()->format( 'Y-m-d H:i:s' ),
                'media_updated_at' => Carbon::now()->format( 'Y-m-d H:i:s' )
            ]);
        }

        #insert in offer table
        $arr = serialize($request['season']);
        $season = implode('',$request['Season']);
        DB::table('offers')->insert([
            'offer_id' => $offerId,
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

        #create media offers row
        foreach($imageData as $data)
        {
            DB::table('media_offers')->insert([
                'media_collection_id' => Uuid::generate(),
                'media_id' => $data['imageID'],
                'offer_id' => $offerId
            ]);
        }

        return view('offer.confirmOffer');
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
