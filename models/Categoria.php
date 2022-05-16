<?php
class Categoria
{
    private $codcate;
    private $n_categoria;

    public function __construct()
    {
        $this->db = Database::Connect();
    }
    public function getCodCategoria()
    {
    }
    public function getCategoria()
    {
    }
    public function setCategoria()
    {
    }
    public function getAll()
    {
       $categories = $this->db->query("SELECT * FROM categorias");
       return $categories;
    }
    public function getOne()
    {
    }
    public function insert()
    {
    }
    public function update()
    {
    }
    public function delete()
    {
    }
}
