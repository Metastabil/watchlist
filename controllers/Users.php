<?php
namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController {
    /**
     * @var UserModel
     */
    private UserModel $user_model;

    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();

        $this->user_model = new UserModel();
    }

    /**
     * @return void
     */
    public function index() :void {
        $data = [
            'title' => 'Übersicht der Benutzer',
            'elements' => $this->user_model->get()
        ];

        $this->view->render('templates/header', $data)
                   ->render('users/index', $data)
                   ->render('templates/footer');
    }

    /**
     * @return void
     */
    public function create() :void {
        $data = [
            'title' => 'Neuen Benutzer anlegen'
        ];

        $required_fields = [
            'username',
            'password'
        ];

        if (is_post() && check_required_fields($required_fields)) {
            $input = [
                'username' => esc(get_input('username')),
                'password' => password_hash(get_input('password'), PASSWORD_DEFAULT),
                'administrator' => (int)(bool)get_input('administrator')
            ];

            if ($this->user_model->insert($input)) {
                set_message('success', 'Erfolgreich gespeichert');
            }
            else {
                set_message('error', 'Fehler beim Speichern');
            }

            redirect(base_url('users'));
        }

        $this->view->render('templates/header', $data)
                   ->render('users/create', $data)
                   ->render('templates/footer');
    }
}