<?php
require_once 'models/Categoria.php';

class CategoriaController{
    public function index(){
        $categoria = new Categoria();
        $categorias = $categoria->getAll();
        require_once 'views/categoria/index.php';
    }
    public function create(){
        require_once 'views/categoria/crear.php';
    }
    public function save(){}
    public function edit(){}
    public function delete(){}
}