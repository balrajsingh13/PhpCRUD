<?php

namespace App\Http\Controllers;
use App\Employee;

use Illuminate\Http\Request;

class CRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $name = $request->input('name');
        $contactNo = $request->input('contactNo');
        $password = $request->input('password');
        $city = $request->input('city');
        $depatment = $request->input('department');
        $designation = $request->input('designation');
        $eORa = $request->input('eORa');

        Employee::create(['emp_name' => $name, 
                          'emp_contact' => $contactNo,
                          'city' => $city,
                          'dept_ID' => $depatment,
                          'desig_ID' => $designation,
                          'eORa' => $eORa,
                          'password' => $password]);

        $data = Employee::all()->toArray();
        return view('view',compact('data'));
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
        $name = $request->input('name');
        $contactNo = $request->input('contactNo');
        $password = $request->input('password');
        $city = $request->input('city');
        $depatment = $request->input('department');
        $designation = $request->input('designation');
        $eORa = $request->input('eORa');

        Employee::where('emp_ID', $id)
                    ->update(['emp_name' => $name, 
                              'emp_contact' => $contactNo,
                              'city' => $city,
                              'dept_ID' => $depatment,
                              'desig_ID' => $designation,
                              'eORa' => $eORa,
                              'password' => $password]);

        $data = Employee::all()->toArray();
        return view('view',compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // echo $id;
        // die;
        if($id != null){
            Employee::where('emp_ID', $id)->delete();
            $data = Employee::all()->toArray();
            return view('view',compact('data'));
        }
    }

    public function viewAll(){
        $data = Employee::all()->toArray();
        //Employee::join()
        //print_r($data);
        return view('view',compact('data'));
    }

    public function fillForm($id){
        $data = Employee::all()->where('emp_ID', $id)->first();
        return view('form',compact('data'));
    }
}
