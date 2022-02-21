<?php

namespace App\Http\Controllers\Admin;

use App\Models\Employee;
use App\Models\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees = Employee::orderBy('created_at', 'desc')->get();

        return view('admin.employee.index',
            [
                'employees' => $employees 
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $members = Member::all();
        return view('admin.employee.create', 
            [
                'members' => $members
            ]
        );
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
        $employee = new Employee();

        $employee->name = $request->name;
        $employee->position = $request->position;
        $employee->member_id = $request->member_id;
        $employee->image = $request->image;

        $employee->save();

        return redirect()->back()->withSuccess('Работник добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
        $members = Member::orderBy('created_at', 'desc')->get();
        return view('admin.employee.edit', 
            [
                'employees' => $employee,
                'members' => $members
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
        $employee->name = $request->name;
        $employee->position = $request->position;
        $employee->member_id = $request->member_id;
        $employee->image = $request->image;
        
        $employee->save();

        return redirect()->back()->withSuccess('Работник изменен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
        $enployee->delete();

        return redirect()->back()->withSuccess('Работник удален');
    }
}
