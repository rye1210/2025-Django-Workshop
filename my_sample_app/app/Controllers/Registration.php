<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\RegistrationModel;

class Registration extends BaseController
{
    public function index()
    {
        $model = new RegistrationModel();

        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM registrations');
        $data['registrations'] = $query->getResultArray();

        return view('registration/default', $data);
    }

    public function save()
    {
        $email = $this->request->getPost('email');
        $firstname = $this->request->getPost('firstname');
        $middlename = $this->request->getPost('middlename');
        $lastname = $this->request->getPost('lastname');
        $contactno = $this->request->getPost('contactno');

        $data = [
            'reg_email' => $email,
            'reg_firstname' => $firstname,
            'reg_middlename' => $middlename,
            'reg_lastname' => $lastname,
            'reg_contactnumber' => $contactno
        ];

        $model = new RegistrationModel();
        if ($model->insert($data)) {
            return redirect()->to(base_url('/'))->with('success', 'Registration successful!');
        } else {
            return redirect()->to(base_url('/'))->with('error', 'Registration failed. Please try again.');
        }
    }

    public function edit()
    {
        $model = new RegistrationModel();

        $data['register'] = $model->findAll();

        $reg_no = $this->request->getGet('no');

        $data['user'] = $model->find($reg_no);

        return view('registration/edit', $data);
    }

    public function saveEdit(){
        $model = new RegistrationModel();
        $reg_no = $this->request->getPost('reg_no');
        $data = [
            'reg_email' => $this->request->getPost('email'),
            'reg_firstname' => $this->request->getPost('firstname'),
            'reg_middlename' => $this->request->getPost('middlename'),
            'reg_lastname' => $this->request->getPost('lastname'),
            'reg_contactnumber' => $this->request->getPost('contactno')
        ];
        $model->update($reg_no, $data);
        return redirect()->to(base_url('/'))->with('success', 'Registration updated successfully!');
    }

    public function delete()
    {
        $model = new RegistrationModel();
        $reg_no = $this->request->getGet('no');
        $model->delete($reg_no);
        return redirect()->to(base_url('/'))->with('success', 'Registration deleted successfully!');
    }   
}