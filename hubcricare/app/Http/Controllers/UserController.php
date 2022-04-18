<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserUpdateRequest;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{

    private $users;

    public function __construct(User $users)
    {
        $this->users = $users;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->users->find($id);

        return json_encode($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $datas = $request->all();
        $user = $this->users->find($id);

        if (Hash::check($datas['oldpassword'], $user->password)) {
            if ($datas['password'] == null) {
                $user->update(['name' => $datas['name'], 'email' => $datas['email']]);
            } else {
                $user->update(['name' => $datas['name'], 'email' => $datas['email'], 'password' => bcrypt($datas['password'])]);
            }

            return back()->with('success', 'Usuário atualizado com sucesso!');
        }

        return back()->with('danger', 'A senha inserida não corresponde a atual!');
    }
}