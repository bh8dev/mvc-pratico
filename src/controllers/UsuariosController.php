<?php

namespace src\controllers;

use core\Controller;
use src\models\Usuario;

class UsuariosController extends Controller
{
    public function add()
    {
        $this->render('add');
    }

    public function addAction()
    {
        $name     = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email    = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

        if($name && $email)
        {
            $data    = Usuario::select()
                ->where('email', $email)
            ->execute();

            if(count($data) === 0)
            {
                Usuario::insert([
                    'nome' => $name,
                    'email' => $email
                ])->execute();

                $this->redirect('/');
            }
        }
        
        $this->redirect('/novo');
    }

    public function edit(array $parameters = [])
    {
        $usuario    = Usuario::select()->find($parameters['id']);

        $this->render('edit', [
            'usuario' => $usuario
        ]);
    }
    public function editAction(array $parameters = [])
    {
        $name     = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email    = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        if($name && $email)
        {
            Usuario::update()
                ->set('nome', $name)
                ->set('email', $email)
                ->where('id', $parameters['id'])
            ->execute();

            $this->redirect('/');
        }

        $this->redirect("/usuario/{$parameters['id']}/editar");
    }

    public function del(array $parameters = [])
    {
        
    }
    public function delAction()
    {

    }
}