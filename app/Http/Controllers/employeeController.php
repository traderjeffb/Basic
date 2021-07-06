<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
       // dd($employees);
        return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee= new employee();
        $employee->name = $request->get('name');
        $employee->address = $request->get('address');
        $employee->city = $request->get('city');
        $employee->state = $request->get('state');
        $employee->zipcode = $request->get('zipcode');
        $employee->save();
        return redirect('index')->with('success', 'Successfully Edited');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {
            $employee = employee::where('id',"=","$id")->first();
        //dd($employee);
            return view('employee.details',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::where('id','=',$id)->first();
        return view('employee.edit', compact('employee'));
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
        $employee= employee::where('id',"=", $id)->first();

        $employee->name = $request['name'];
        $employee->address = $request['address'];
        $employee->city = $request['city'];
        $employee->state = $request['state'];
        $employee->zipcode = $request['zipcode'];
        $employee->save();
        return redirect('index')->withSuccess('Successfully Updated');
    }
    public function delete($id)
    {
        $employee = Employee::where('id','=',$id)->first();
        return view('employee.delete', compact('employee'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        employee::where('id',"=", $id)->delete();

        return redirect('index')->with('danger','Successfully Deleted');

    }
}
