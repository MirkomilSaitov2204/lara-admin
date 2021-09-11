<?php

namespace App\Http\Controllers\Backend\User;


use Illuminate\Http\Request;
use App\Http\Controllers\Backend\BaseController;
use App\Domain\User\Employee\Repositories\UserRepository;
use App\Http\Resources\Backend\User\EmployeeResourceCollection;

class EmployeeController extends BaseController
{

    protected $emoloyeeRepositories

    public function __construct(UserRepository $emoloyeeRepositories)
    {
        $this->emoloyeeRepositories = $emoloyeeRepositories;

        $this->middleware('permission:employees', ['only' => ['index']]);
        $this->middleware('permission:employees_create', ['only' => ['create, store']]);
        $this->middleware('permission:employees_show', ['only' => ['show']]);
        $this->middleware('permission:employees_update', ['only' => ['update, edit']]);
        $this->middleware('permission:employees_delete', ['only' => ['delete']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = $this->employeeRepositories->getAllEmployees(request()->all());
        return this->sendResponse([
            'employees' => new EmployeeResourceCollection($employees);
        ])
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
