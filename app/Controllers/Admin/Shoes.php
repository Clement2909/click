<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ShoeModel;
use App\Models\TypeModel;
use App\Models\BrandModel;

class Shoes extends BaseController
{
    public function list()
    {
        $shoeModel = new ShoeModel();
        $data['shoes'] = $shoeModel->findAll();

        return view('admin/shoes/list', $data);
    }

    public function create()
    {
        return view('admin/shoes/create');
    }

    public function store()
    {
        $shoeModel = new ShoeModel();

        $data = [
            'nom' => $this->request->getPost('nom'),
            'marque_id' => $this->request->getPost('marque_id'),
            'type_id' => $this->request->getPost('type_id'),
            'description' => $this->request->getPost('description')
        ];

        $shoeModel->insert($data);

        return redirect()->to('/admin/shoes/list');
    }

    public function edit($id)
    {
        $shoeModel = new ShoeModel();
        $data['shoe'] = $shoeModel->find($id);

        return view('admin/shoes/edit', $data);
    }

    public function update($id)
    {
        $shoeModel = new ShoeModel();

        $data = [
            'nom' => $this->request->getPost('nom'),
            'marque_id' => $this->request->getPost('marque_id'),
            'type_id' => $this->request->getPost('type_id'),
            'description' => $this->request->getPost('description')
        ];

        $shoeModel->update($id, $data);

        return redirect()->to('/admin/shoes/list');
    }

    
    public function details($id)
    {
        $shoeModel = new ShoeModel();
        $shoe = $shoeModel->find($id);
        
        $marqueModel = new BrandModel(); // Remplacez MarqueModel par le nom de votre modèle de marque
        $typeModel = new TypeModel(); // Remplacez TypeModel par le nom de votre modèle de type
    
        $shoe['marque'] = $marqueModel->find($shoe['marque_id'])['nom'];
        $shoe['type'] = $typeModel->find($shoe['type_id'])['nom'];
    
        $data['shoeName'] = $shoe['nom'];
        $data['shoeDescription'] = $shoe['description'];
        $data['shoeMarque'] = $shoe['marque'];
        $data['shoeType'] = $shoe['type'];
        $data['id'] = $shoe['id'];
    
        return view('admin/shoes/details', $data);
    }
    

    
  // Méthode pour afficher la page de confirmation de suppression
public function confirmDelete($id)
{

}

public function delete($id)
    {
 
    }



}
