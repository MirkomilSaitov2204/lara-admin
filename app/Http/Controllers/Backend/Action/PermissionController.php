<?php

namespace App\Http\Controllers\Backend\Action;

use App\Domain\Permission\Entities\Permission;
use App\Domain\Permission\Exports\PermissionExcel;
use App\Domain\Permission\Repositories\PermissionRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PermissionController extends Controller
{
    public $permissionRepository;

    public function __construct(PermissionRepository $permissionRepository)
    {
        $this->permissionRepository = $permissionRepository;
        $this->middleware('permission:permissions', ['only' => ['index']]);
        $this->middleware('permission:permissions_create', ['only' => ['create, store']]);
        $this->middleware('permission:permissions_show', ['only' => ['show']]);
        $this->middleware('permission:permissions_update', ['only' => ['update, edit']]);
        $this->middleware('permission:permissions_delete', ['only' => ['delete']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = $this->permissionRepository->getAllPermissions(request()->all());
        $permissionParents = $this->permissionRepository->getAllParentPermissions();
        
        return $this->sendResponse([
            'permissions' => new PermissionResourceCollection($permissions),
            'permissionParents' => $permissionParents
        ]) 


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = $this->permissionRepository->getAllParentPermissions();

        return view('backend.app.permissions.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =  $this->permissionRepository->storePermissions($request->all());
        return response()->json($data);
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

    public function getExport(Request $request)
    {
        if ($request->has('export')){
            $permissions = Permission::with('parent')->get();
            return Excel::download(new PermissionExcel($permissions), 'permissions.xlsx');
        }
    }
}
