<?php

namespace App\Http\Controllers;

use App\Modules\ChildHealthRecord\ChildHealthRecord;
use App\Modules\ChildHealthRecord\Repository\ChildHealthRecordRepository;
use App\Modules\Clinic\Vaccine\Vaccine;
use App\Modules\System\NumberSeries\Repository\NumberSeriesRepository;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Yajra\Datatables\Datatables;
use function response;
use function view;

class ChildHealthRecordController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view("pages.child-health-records.index");
    }

    public function datatable()
    {
        return Datatables::of(ChildHealthRecord::query())->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(NumberSeriesRepository $NSRepo)
    {
        $viewData = $this->getFormViewData();

        $viewData["routeAction"] = "create";    //  TODO: automate later
        $viewData["record"]      = new ChildHealthRecord();

        $viewData["record"]->document_number = $NSRepo->getNextAvailableNumber(ChildHealthRecord::NUMBER_SERIES_CODE);

        return view("pages.child-health-records.form", $viewData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request, ChildHealthRecordRepository $chrRepo)
    {
        try {
            return $chrRepo->saveFromRequest(new ChildHealthRecord(), $request);
        } catch ( Exception $ex ) {
            return response($ex->getMessage(), 500);
        }
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
     * @param  Request  $request
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

    protected function getFormViewData()
    {

        $genders = [
            "M" => "Male",
            "F" => "Female"
        ];

        $terms = [
            "ET" => "Early Term",
            "FT" => "Full Term",
            "LT" => "Late Term",
            "PT" => "Post Term",
        ];

        $deliveryTypes = [
            "Vaginal Birth",
            "Natural Birth",
            "Scheduled Cesarean",
            "Unplanned Cesarean",
            "Vaginal Birth after C-Section (VBAC)",
            "Scheduled Induction"
        ];

        $bloodTypes = [
            "ND"  => "Not Yet Determined",
            "O+"  => "O+",
            "O-"  => "O-",
            "A+"  => "A+",
            "A-"  => "A-",
            "B+"  => "B+",
            "B-"  => "B-",
            "AB+" => "AB+",
            "AB-" => "AB-",
        ];

        return [
            "genders"       => $genders,
            "birthTerms"    => $terms,
            "deliveryTypes" => $deliveryTypes,
            "bloodTypes"    => $bloodTypes,
            "vaccines"      => Vaccine::all(),
        ];
    }

}
