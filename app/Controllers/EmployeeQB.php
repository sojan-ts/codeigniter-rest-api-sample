<?php namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

class Employeeqb extends ResourceController
{
    use ResponseTrait;

    private $table = 'employees'; // Adjust the table name as needed

    // all users
    public function index()
    {
        $db = db_connect();
        $data['employees'] = $db->table($this->table)->orderBy('id', 'DESC')->get()->getResult();
        return $this->respond($data);
    }

    // create
    public function create()
    {
        $db = db_connect();
        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
        ];
        $db->table($this->table)->insert($data);
        $response = [
            'status' => 201,
            'error' => null,
            'messages' => [
                'success' => 'Employee created successfully'
            ]
        ];
        return $this->respondCreated($response);
    }

    // single user
    public function show($id = null)
    {
        $db = db_connect();
        $data = $db->table($this->table)->where('id', $id)->get()->getRow();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('No employee found');
        }
    }

    // update
    public function update($id = null)
    {
        $db = db_connect();
        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
        ];
        $db->table($this->table)->where('id', $id)->update($data);
        $response = [
            'status' => 200,
            'error' => null,
            'messages' => [
                'success' => 'Employee updated successfully'
            ]
        ];
        return $this->respond($response);
    }

    // delete
    public function delete($id = null)
    {
        $db = db_connect();
        $db->table($this->table)->where('id', $id)->delete();
        if ($db->affectedRows() > 0) {
            $response = [
                'status' => 200,
                'error' => null,
                'messages' => [
                    'success' => 'Employee successfully deleted'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('No employee found');
        }
    }
}
