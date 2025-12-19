<?php

namespace App\Controllers;

use CodeIgniter\Controller;
Use App\Models\SuppliersModel;
Use App\Models\DeliveryModel;

class inventory extends BaseController
{
    public function index()
    {
       return view('inventory/index');
    }
    
    public function suppliers()
    {
        $supplierModel = new SuppliersModel();
        $deliveryModel = new DeliveryModel();

        $data['suppliers']  = $supplierModel->findAll();
        $data['deliveries'] = $deliveryModel->findAll();

        return view('inventory/suppliers', $data);
    }

    public function products()
    {
        return view('inventory/products'); 
    }

    public function save_supplier()
    {
        $model = new SuppliersModel();

        $data = [
            'sup_title'   => $this->request->getPost('supplier_name'),
            'sup_address' => $this->request->getPost('supplier_address'),
            'sup_contact' => $this->request->getPost('supplier_contact'),
            'sup_email'   => $this->request->getPost('supplier_email'),
        ];

        if ($model->insert($data)) {
            // Success
            session()->setFlashdata('success', 'Supplier saved successfully.');
            return redirect()->to('/suppliers');
        } else {
            // Failure
            session()->setFlashdata('error', 'Supplier could not be saved. Please try again.');
            return redirect()->back()->withInput();
        }
    }

    public function save_delivery()
    {
        $model = new DeliveryModel();

        $data = [
            'pro_no'   => $this->request->getPost('pro_number'),
            'sup_no'   => $this->request->getPost('supplier_no'),
            'del_price' => $this->request->getPost('del_price'),
            'del_qty'  => $this->request->getPost('del_qty'),
            'del_date' => $this->request->getPost('del_date'),
        ];

        if ($model->insert($data)) {
            // Success
            session()->setFlashdata('success', 'Delivery saved successfully.');
            return redirect()->to('/suppliers');
        } else {
            // Failure
            session()->setFlashdata('error', 'Delivery could not be saved. Please try again.');
            return redirect()->back()->withInput();
        }
    }

}