<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Education;
use App\Models\Service;
use App\Models\Transaction;
use App\Models\Media;
use App\Models\Purpose;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $education = Education::count() ?: 0;
        $smp = Customer::where('id_education', '=', 1)->count() ?: 0;
        $sma = Customer::where('id_education', '=', 2)->count() ?: 0;
        $diploma = Customer::where('id_education', '=', 3)->count() ?: 0;
        $sarjana = Customer::where('id_education', '=', 4)->count() ?: 0;
        $magister = Customer::where('id_education', '=', 5)->count() ?: 0;
        $doktor = Customer::where('id_education', '=', 6)->count() ?: 0;

        $customer = Customer::count() ?: 0;
        $asn = Customer::where('id_job', '=', 1)->count() ?: 0;
        $student = Customer::where('id_job', '=', 2)->count() ?: 0;
        $lecturer = Customer::where('id_job', '=', 3)->count() ?: 0;
        $researcher = Customer::where('id_job', '=', 4)->count() ?: 0;
        $general_job = Customer::where('id_job', '=', 5)->count() ?: 0;

        $media = Media::count() ?: 0;
        $media1 = Transaction::where('id_media', '=', 1)->count() ?: 0;
        $media2 = Transaction::where('id_media', '=', 2)->count() ?: 0;
        $media3 = Transaction::where('id_media', '=', 3)->count() ?: 0;
        $media4 = Transaction::where('id_media', '=', 4)->count() ?: 0;
        $media5 = Transaction::where('id_media', '=', 5)->count() ?: 0;

        $service = Service::count() ?: 0;
        $service1 = Transaction::where('id_service', '=', 1)->count() ?: 0;
        $service2 = Transaction::where('id_service', '=', 2)->count() ?: 0;
        $service3 = Transaction::where('id_service', '=', 3)->count() ?: 0;
        $service4 = Transaction::where('id_service', '=', 4)->count() ?: 0;

        $purpose = Purpose::count() ?: 0;
        $purpose1 = Transaction::where('id_purpose', '=', 1)->count() ?: 0;
        $purpose2 = Transaction::where('id_purpose', '=', 2)->count() ?: 0;
        $purpose3 = Transaction::where('id_purpose', '=', 3)->count() ?: 0;
        $purpose4 = Transaction::where('id_purpose', '=', 4)->count() ?: 0;
        $purpose5 = Transaction::where('id_purpose', '=', 5)->count() ?: 0;

        $transaction = Transaction::count();

        $pendingCount = Transaction::where('status', 0)->count() ?: 0;
        $servedCount = Transaction::where('status', 1)->count() ?: 0;        
        return view('dashboard', compact(
            'education','smp','sma','diploma','sarjana','magister','doktor',
            'customer','asn','student','lecturer','researcher','general_job',
            'media','media1','media2','media3','media4','media5',
            'service','service1','service2','service3','service4',
            'purpose','purpose1','purpose2','purpose3','purpose4','purpose5','transaction',
            'pendingCount','servedCount'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
