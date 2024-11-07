<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
=======
>>>>>>> 84e8e23e6acf4f5f1ef51443fe0b20871f748b56
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        $users = User::paginate(10);

        return view('users.index', compact('users'));
=======
        //
>>>>>>> 84e8e23e6acf4f5f1ef51443fe0b20871f748b56
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
<<<<<<< HEAD
        return view('users.create');
=======
        //
>>>>>>> 84e8e23e6acf4f5f1ef51443fe0b20871f748b56
    }

    /**
     * Store a newly created resource in storage.
     */
<<<<<<< HEAD
    public function store(StoreUserRequest $request)
    {
        User::create($request->validated());

        return redirect()->route('users.index');
=======
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
>>>>>>> 84e8e23e6acf4f5f1ef51443fe0b20871f748b56
    }

    /**
     * Show the form for editing the specified resource.
     */
<<<<<<< HEAD
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
=======
    public function edit(string $id)
    {
        //
>>>>>>> 84e8e23e6acf4f5f1ef51443fe0b20871f748b56
    }

    /**
     * Update the specified resource in storage.
     */
<<<<<<< HEAD
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->validated());

        return redirect()->route('users.index');
=======
    public function update(Request $request, string $id)
    {
        //
>>>>>>> 84e8e23e6acf4f5f1ef51443fe0b20871f748b56
    }

    /**
     * Remove the specified resource from storage.
     */
<<<<<<< HEAD
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index');
=======
    public function destroy(string $id)
    {
        //
>>>>>>> 84e8e23e6acf4f5f1ef51443fe0b20871f748b56
    }
}
