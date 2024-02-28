<?php

namespace App\Controllers;

use App\Models\UsersModel;

class UsersController extends BaseController
{
    public function index()
    {
        $model = model(UsersModel::class);

        $data = [
            'users' => $model->getUsers(),
        ];

        return view('users/index', $data);
    }

    public function new()
    {
        helper('form');

        return view('users/create');
    }

    public function create()
    {
        helper('form');

        $data = $this->request->getPost(['username', 'number1', 'number2']);

        // Checks whether the submitted data passed the validation rules.
        if (!$this->validateData($data, [
            'username' => 'required|max_length[255]|min_length[2]',
            'number1' => 'required',
            'number2' => 'required',
        ])) {
            // The validation fails, so returns the form.
            return $this->new();
        }

        // Gets the validated data.
        $post = $this->validator->getValidated();

        $model = model(UsersModel::class);

        $model->save([
            'username' => $post['username'],
            'number1'  => $post['number1'],
            'number2'  => $post['number2'],
            'total' => $post['number1'] + $post['number2'],
        ]);

        return view('users/success');
    }
}
