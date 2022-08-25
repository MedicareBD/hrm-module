<?php

namespace Modules\Hrm\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Hrm\DataTables\DesignationDataTable;
use Modules\Hrm\Entities\Designation;

class DesignationController extends Controller
{
    public function index(DesignationDataTable $dataTable)
    {
        return $dataTable->render('hrm::designations.index');
    }

    public function create()
    {
        return view('hrm::designations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            //
        ]);

        return response()->json([
            'message' => __('Designation Created Successfully'),
            'redirect' => route('admin.designations.index'),
        ]);
    }

    public function show(Designation $hrm)
    {
        return view('hrm::designations.show', compact('hrm'));
    }

    public function edit(Designation $hrm)
    {
        return view('hrm::designations.edit', compact('hrm'));
    }

    public function update(Request $request, Designation $hrm)
    {
        $request->validate([
            //
        ]);

        $hrm->update([
            //
        ]);

        return response()->json([
            'message' => __('Designation Updated Successfully'),
            'redirect' => route('admin.designations.index'),
        ]);
    }

    public function destroy(Designation $hrm)
    {
        $hrm->delete();

        return response()->json([
            'message' => __('Designation Deleted Successfully'),
        ]);
    }
}
