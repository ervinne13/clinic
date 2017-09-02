<?php

namespace App\Http\Controllers;

use App\Modules\System\NumberSeries\NumberSeries;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Yajra\Datatables\Datatables;
use function response;
use function view;

class NumberSeriesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view("pages.number-series.index");
    }

    public function datatable()
    {
        return Datatables::of(NumberSeries::query())->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("pages.number-series.form", [
            "numberSeries" => new NumberSeries(),
            "routeActionName" => "create"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $numberSeries = new NumberSeries($request->toArray());
        $numberSeries->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $code
     * @return Response
     */
    public function show($code)
    {
        return view("pages.number-series.form", [
            "numberSeries" => NumberSeries::find($code),
            "routeActionName" => "show"
        ]);
    }
 
   /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $code
     * @return Response
     */
    public function edit($code)
    {
        return view("pages.number-series.form", [
            "numberSeries" => NumberSeries::find($code),
            "routeActionName" => "edit"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $code
     * @return Response
     */
    public function update(Request $request, $code)
    {
        try {
            $numberSeries = NumberSeries::find($code);
            $numberSeries->fill($request->toArray());
            $numberSeries->save();
        } catch ( Exception $ex ) {
            return response($ex->getMessage(), 500);
        }
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
