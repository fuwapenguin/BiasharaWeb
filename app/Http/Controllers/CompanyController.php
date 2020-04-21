<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Webpatser\Uuid\Uuid;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = DB::table('company')->get();
        return view('company.index')
        ->with('company', $companies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = DB::table('users')->get();
        $business = DB::table('company')->get();
        $countries = DB::table('countries')->orderBy('Name')->get()->pluck('Name',    'country_id');
        return view('company.create')
            ->with('users', $users)
            ->with('company', $business)
            ->with('countries', $countries);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $companyid = Uuid::generate();
        DB::table('company')->insert([
            'company_id' => $companyid,
            'company_name' => $request->input('company_name'),
            'business_registration_number' => $request->input('registration'),
            'country_id' => $request->input('country_id'),
            'company_adress' => $request->input('company_adress'),
            'company_email' => $request->input('company_email') ,
            'established' => $request->input('year_establishment'),
            'company_postal_code' => $request->input('company_postal_code'),
            'phone_number' => $request->input('phone_number'),
            'specialisation' => $request->input('specialisation'),
            'website' => $request->input('website'),
            'employees_amount' => $request->input('employees')
            ]
        );
        return view('company.step2');
    }

    public function storecompany(Request $request)
    {
        $companyid = Uuid::generate();
        DB::table('company')->insert([
                'company_id' => $companyid,
                'company_name' => $request->input('company_name'),
                'business_registration_number' => $request->input('registration'),
                'country_id' => $request->input('country_id'),
                'company_adress' => $request->input('company_adress'),
                'company_email' => $request->input('company_email') ,
                'established' => $request->input('year_establishment'),
                'company_postal_code' => $request->input('company_postal_code'),
                'phone_number' => $request->input('phone_number'),
                'specialisation' => $request->input('specialisation'),
                'website' => $request->input('website'),
                'employees_amount' => $request->input('employees')
            ]
        );
        return view('company.step2')->with('company_id', $companyid);
    }

    public function step2(Request $request1)
    {
        DB::table('company')->update([
            'company_description' => $request1->input('company_description')
            ]
        );
        return view('company.step3');
    }

    public function step3()
    {

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
