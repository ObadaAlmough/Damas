<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function index(Request $request)
    {
        $users = User::whereRoleIs('admin')->where(function ($q) use ($request) {

            return $q->when($request->search, function ($query) use ($request) {

                return $query->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('email', 'like', '%' . $request->search . '%');
            });
        })->latest()->paginate(6);
        return view('dashboard.users.index', compact('users'));
    } //end of index

    public function create()
    {
        return view('dashboard.users.create');
    } //end of create

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed',
            'permissions' => 'required|min:1'
        ]);
        $data = $request->except(['password', 'password_confirmation', 'permissions']);
        $data['password'] = bcrypt($request->password);
        $user = User::create($data);
        $user->attachRole('admin');
        $user->syncPermissions($request->permissions);


        session()->flash('success', __('web.added_successfully'));




        return redirect(url('dashboard/user'));
    } //end of store

    public function edit(User $user)
    {
        return view('dashboard.users.edit', compact('user'));
    } //end of edit

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => "required|unique:users,id,except" . $user->id,
            'permissions' => 'required|min:1'
        ]);
        // dd($request->all());

        $data = $request->except(['permissions']);
        $user->update($data);

        $user->syncPermissions($request->permissions);

        session()->flash('success', __('web.edited_successfully'));



        return redirect(url('dashboard/user'));
    } //end of update

    public function delete(User $user)
    {
        $user->delete();

        return back();
    } //end of delete

}
