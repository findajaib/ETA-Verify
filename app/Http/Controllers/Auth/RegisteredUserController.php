<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class RegisteredUserController extends Controller
{

    public function index()
    {
        return view('user.index', ['users' => User::paginate(10), 'roles' => Role::all()]);
    }
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('user.create');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'gender' => ['required'],
            'user_type' => ['required'],
        ]);
        $randomString = Str::random(10);

        $password = Hash::make($randomString);

        $user = User::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'gender' => $request->gender,
            'user_type' => $request->user_type,
            'password' => $password,
        ]);

        // event(new Registered($user));

        // Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
        return redirect()->route('user.index')->with('success', 'User Created Successfuly');
    }
    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }
    public function update(User $user, Request $request)
    {
        $data = $request->validate([
            'full_name' => ['required', 'string'],
            'email' => 'required|email|unique:users,email,' . $user->id,
            'gender' => ['required'],
            'user_type' => ['required'],
        ]);
        $user->update($data);
        return redirect()->route('user.index')->with('success', 'User Updated Successfuly');
    }

    public function assignRole(Request $request)
    {
        $user = User::find($request->get('user_id'));
        $user->assignRole(Role::findById($request->get('role_id')));
        return redirect()->back()->with('success', 'Role Assigned Sucessfully ');
    }
    public function removeRole($user, $role)
    {
        $user = User::find($user);
        $user->removeRole($role);
        return redirect()->back()->with('success', 'Role Removed Sucessfully ');
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', 'User Deleted Successfully');
    }
}
