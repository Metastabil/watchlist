<?php
namespace App\Models;

class UserModel extends BaseModel {
    /**
     * @var string
     */
    private string $folder = 'users';

    /**
     * @param int $id
     * @param string $username
     * @param bool $deleted
     * @return array
     */
    public function get(int $id = 0, string $username = '', bool $deleted = false) :array {
        $params[':deleted'] = $deleted;

        if ($id > 0) {
            $query = $this->get_query($this->folder, 'get-by-id');
            $params[':id'] = $id;
        }
        elseif (!empty($username)) {
            $query = $this->get_query($this->folder, 'get-by-username');
            $params[':username'] = esc($username);
        }
        else {
            $query = $this->get_query($this->folder, 'get');
        }

        $statement = $this->db->prepare($query);
        $statement->execute($params);

        $result = $statement->fetchAll();

        return !empty($result) && $id > 0 ? $result[0] : $result;
    }

    /**
     * @param array $data
     * @return bool
     */
    public function insert(array $data) :bool {
        $query = $this->get_query($this->folder, 'insert');

        return $this->db->prepare($query)->execute($data);
    }

    /**
     * @param array $data
     * @return bool
     */
    public function update(array $data) :bool {
        $query = $this->get_query($this->folder, 'update');

        return $this->db->prepare($query)->execute($data);
    }
}