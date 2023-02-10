<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RoleController extends Controller
{
    //

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        // if (!$user->can('role.index')) {
        //     return abort(403);
        // }
        $roles = Role::all();
        return view('role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $user = Auth::user();
        // if (!$user->can('role.create')) {
        //     return abort(403);
        // }
        return view('role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreroleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Role $role)
    {
        $user = Auth::user();
        // if (!$user->can('role.create')) {
        //     return abort(403);
        // }
        $role->create(['name' => $request->get('name'), 'description' => $request->get('description')]);
        return redirect()->route('roles.index')->with('success', 'Role Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\role  $role
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $user = Auth::user();
        // if (!$user->can('role.show')) {
        //     return abort(403);
        // }
        $role = Role::where('id', $id)->first();
        $rolPerID = [];
        foreach ($role->permissions()->get() as $key => $value) {
            array_push($rolPerID, $value->id);
        }
        $permissions = Permission::whereNotIn('id', $rolPerID)->get();
        return view('role.show', compact('role', 'permissions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $user = Auth::user();
        // if (!$user->can('role.edit')) {
        //     return abort(403);
        // }
        $role = Role::where('id', $id)->first();
        return view('role.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateroleRequest  $request
     * @param  \App\Models\role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Auth::user();
        if (!$user->can('role.edit')) {
            return abort(403);
        }
        Role::where('id', $id)->first()->update(['name' => $request->get('name'), 'description' => $request->get('description')]);
        return redirect()->route('roles.index')->with('success', 'Role Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(role $role)
    {
        //
    }

    public function giveOrRevokePermission(Request $request)
    {
        $user = Auth::user();
        // if (!$user->can('role.permission')) {
        //     return abort(403);
        // }
        $role = Role::where('id', $request->get('userrolepermission'))->first();
        $rolePermissions = $role->permissions()->get();
        if ($request->get('permission')) {
            $arr_unique = array_unique($request->get('permission'));
            $permissions = Permission::whereIn('id', $arr_unique)->get();
            foreach ($rolePermissions as $key => $permission) {
                if (!in_array($permission->id, $arr_unique)) {
                    $role->revokePermissionTo(Permission::find($permission->id));
                }
            }
            foreach ($permissions as $key => $permission) {
                $role->givePermissionTo(Permission::find($permission));
            }
        } else {
            foreach ($role->permissions()->get() as $key => $permission) {
                $role->revokePermissionTo($permission);
            }
        }
        return redirect()->route('roles.show', ['role' => $role->id])->with('success', 'Permission Updated Successfully');
    }

    public function assignUserRole($id)
    {
        dd('dffd');
        // return view('role.show', compact('role', 'permissions'));
    }
}
