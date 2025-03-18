<?php
namespace App\Controllers;

use JetBrains\PhpStorm\NoReturn;
use App\Models\UserModel;

class Pages extends BaseController {
    /**
     * @return void
     */
    public function login() :void {
        $data = [ 'title' => 'Anmelden' ];
        $required_fields = [ 'username', 'password' ];
        $user_model = new UserModel();

        if (is_post() && check_required_fields($required_fields)) {
            $username = esc(get_input('username'));
            $password = get_input('password');
            $user = $user_model->get(0, $username);

            if (empty($user) || !password_verify($password, $user['password'])) {
                set_message('error', 'Unbekannte Benutzerdaten');

                redirect(base_url('login'));
            }

            $_SESSION['user'] = [ 'id' => (int)$user['id'], 'administrator' => (bool)$user['administrator'] ];

            redirect(base_url('broadcasts'));
        }

        $this->view->render('pages/login', $data);
    }

    /**
     * @return void
     */
    #[NoReturn] public function logout() :void {
        unset($_SESSION['user']);

        redirect(base_url('login'));
    }
}