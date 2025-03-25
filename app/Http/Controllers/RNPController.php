<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RNPController extends Controller
{
    public function assignRole(Request $request, User $user)
    {
        $role = $request->validate([
            'role' => 'required|exists:roles,name',
        ]);

        // Replace the default role into the new role provided
        $user->syncRoles([$role]);

        return redirect()->back()->with('success', 'Role assigned successfully!');
    }

    public function indexUsers() {
        // Get the specific roles assigned from the user
        $users = User::with('roles')->get();

        $roles = Role::all();
        return view('list-of-users', compact('users', 'roles'));
    }

    public function allRoles() {
        $roles = Role::with('permissions')->get();
        return view('roles.all-roles', compact('roles'));
    }

    public function updateRole(Request $request, Role $role) {
        $request->validate([
            'name' => 'required|string|unique:roles,name,' . $role->id,
            'permissions' => 'array',
        ]);
    
        $role = Role::findOrFail($role->id);
        $role->update(['name' => $request->name]);

         // Convert permission IDs to permission names
        $permissions = Permission::whereIn('id', $request->permissions)->pluck('name')->toArray();

        // Sync updated permissions
        $role->syncPermissions($permissions);

        return redirect('/all-roles')->with('success', 'Role successfully updated.');
    }

    public function deleteRole(Role $role) {
        $role->delete();
        return redirect('/all-roles')->with('success', 'Role successfully deleted.');
    }

    public function editRole(Role $role) {
        $role = Role::findOrFail($role->id); // Find role by ID
        $permissions = Permission::all(); // Get all permissions
        $assignedPermissions = $role->permissions->pluck('id')->toArray();

        return view('roles.edit-role', compact('role', 'permissions', 'assignedPermissions'));
    }

    public function storeRole(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:roles,name',
            'permissions' => 'array',
        ]);

        $role = Role::create(['name' => $request->name]);
        
        // Check if there's a permission checked
        if ($request->has('permissions')) {
            $permissions = Permission::whereIn('id', $request->permissions)->pluck('name')->toArray();
            $role->syncPermissions($permissions);
        }

        return redirect('/all-roles')->with('success', 'Role successfully created.');
    }

    public function createRole() {
        $permissions = Permission::all();
        return view('roles.create-role', compact('permissions'));
    }

    public function indexPermission() {
        return view('create-rnp');
    }

    public function createPermission() {
        return view('permissions.create-permission');
    }


    public function storePermission(Request $request) {
        $name = $request->validate([
            'name' => 'required|string|unique:permissions,name',
        ]);

        Permission::create($name);
        return redirect('/create-rnp')->with('success', 'Permission successfully created.');
    }

    public function showEditPermission(Permission $permission) {
        return view('permissions.edit-permission', compact('permission'));
    }

    public function updatePermission(Request $request, Permission $permission) {
        $name = $request->validate([
            'name' => 'required|string|unique:permissions,name',
        ]);

        $permission->update($name);
        return redirect('/all-permissions')->with('success', 'Permission successfully updated.');
    }

    public function deletePermission(Permission $permission) {
        $permission->delete();
        return redirect('/all-permissions')->with('success', 'Permission successfully deleted.');
    }

    public function allPermissions(Role $role) {
        $permissions = Permission::all();
        return view('permissions.all-permissions', compact('permissions', 'role'));
    }
}
