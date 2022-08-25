<?php

namespace Modules\Hrm\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Hrm\DataTables\EmployeeDataTable;
use Modules\Hrm\Entities\Employee;

class EmployeeController extends Controller
{
    public function index(EmployeeDataTable $dataTable)
    {
        return $dataTable->render('hrm::employees.index');
    }

    public function create()
    {
        return view('hrm::employees.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            //
        ]);

        return response()->json([
            'message' => __('Employee Created Successfully'),
            'redirect' => route('admin.employees.index'),
        ]);
    }

    public function show(Employee $employees)
    {
        return view('hrm::employees.show', compact('employees'));
    }

    public function edit(Employee $employees)
    {
        return view('hrm::employees.edit', compact('employees'));
    }

    public function update(Request $request, Employee $employees)
    {
        $request->validate([
            //
        ]);

        $employees->update([
            //
        ]);

        return response()->json([
            'message' => __('Employee Updated Successfully'),
            'redirect' => route('admin.employees.index'),
        ]);
    }

    public function destroy(Employee $employees)
    {
        $employees->delete();

        return response()->json([
            'message' => __('Employee Deleted Successfully'),
        ]);
    }
}
