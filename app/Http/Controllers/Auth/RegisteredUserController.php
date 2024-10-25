<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    // public function create(): View
    // {
    //     return view('auth.register');
    // }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     * 
     * 
     */
    public function delete_user($id)
    {

        // $deleted = DB::delete('DELETE FROM users WHERE id = ?', [$id]);
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.get');
    }
    public function add_user(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'is_admin' => ['required', 'boolean', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
            'phone1' => ['nullable', 'string', 'max:255'],
            'phone2' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'profile' => ['nullable', 'string']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'position' => $request->position,
            'is_admin' => $request->is_admin,
            'profile' => $request->profile,
        ]);

        return response()->json(['success' => 'user created successfully']);
    }

    public function edit_user(Request $request)
    {
        $request->validate([
            'id' => ['required', 'integer', 'exists:users,id'],
            'edit_name' => ['nullable', 'string', 'max:255'],
            'edit_is_admin' => ['nullable', 'string', 'max:255'],
            'edit_position' => ['nullable', 'string', 'max:255'],
            'phone1' => ['nullable', 'integer', 'max:255'],
            'phone2' => ['nullable', 'integer', 'max:255'],
            'edit_email' => ['nullable', 'string', 'lowercase', 'email', 'max:255'],
            'edit_password' => ['nullable', Rules\Password::defaults()],
            'profile' => ['nullable', 'image']
        ]);

        // return $request;

        $file = $request->file('profile');
        $path = $file->store('photos', 'public');

        $user = User::find($request->id);
        $user->update([
            'name' => $request->edit_name,
            'email' => $request->edit_email,
            'password' => Hash::make($request->password),
            'position' => $request->edit_position,
            'is_admin' => $request->edit_is_admin,
            'phone1' => $request->phone1,
            'phone2' => $request->phone2,

            'profile' => 'storage/' . $path,
        ]);

        $users = User::all();

        return redirect()->route('user.get', compact('users'));
    }
}
