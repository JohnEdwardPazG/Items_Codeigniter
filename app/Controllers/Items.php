<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Item;

class Items extends Controller
{

    public function index()
    {

        $item = new Item();
        $datos['items'] = $item->orderBy('id', 'ASC')->findAll();

        $datos['cabecera'] = view('template/cabecera');
        $datos['piepagina'] = view('template/piepagina');

        return view('items/listar', $datos);
    }

    public function crear()
    {
        $datos['cabecera'] = view('template/cabecera');
        $datos['piepagina'] = view('template/piepagina');

        return view('items/crear', $datos);
    }



    public function guardar()
    {
        $request = \Config\Services::request();

        $item = new Item();

        $validacion = $this->validate([
            'name' => 'required',
            'category' => 'required',
            'cost_price' => 'required',
            'unit_price' => 'required',
            'pic_filename' => 'required',
        ]);
        if (!$validacion) {
            $session = session();
            $session->setFlashdata('mensaje', 'Revise la información');

            return redirect()->back()->withInput();
        }

        $datos = [
            'name' => $request->getVar('name'),
            'category' => $request->getVar('category'),
            'cost_price' => $request->getVar('cost_price'),
            'unit_price' => $request->getVar('unit_price'),
            'pic_filename' => $request->getVar('pic_filename'),

        ];
        $item->insert($datos);

        return $this->response->redirect(site_url('/listar'));
    }

    public function borrar($id = null)
    {

        $item = new Item();

        $item->where('id', $id)->delete($id);

        return $this->response->redirect(site_url('/listar'));
    }

    public function editar($id = null)
    {
        $datos['cabecera'] = view('template/cabecera');
        $datos['piepagina'] = view('template/piepagina');

        print_r($id);
        $item = new Item();
        $datos['item'] =  $item->where('id', $id)->first();

        return view('items/editar', $datos);
    }

    public function actualizar()
    {

        $request = \Config\Services::request();
        $item = new Item();

        $datos = [
            'name' => $request->getVar('name'),
            'category' => $request->getVar('category'),
            'cost_price' => $request->getVar('cost_price'),
            'unit_price' => $request->getVar('unit_price'),
            'pic_filename' => $request->getVar('pic_filename'),

        ];
        $id = $request->getVar('id');

        $validacion = $this->validate([
            'name' => 'required',
            'category' => 'required',
            'cost_price' => 'required',
            'unit_price' => 'required',
            'pic_filename' => 'required',
        ]);
        if (!$validacion) {
            $session = session();
            $session->setFlashdata('mensaje', 'Revise la información');

            return redirect()->back()->withInput();
        }

        $item->update($id, $datos);

        return $this->response->redirect(site_url('/listar'));
    }
}
