<?php

class Producto

{
    private int $id;
    private string $titulo;
    private float $precio;
    private int $stock;

    //constructor
    
    public function __construct($id, $titulo, $precio, $stock)
    {
        $this->id=$id; //paso objeto id
        $this->titulo=$titulo; //paso objeto titulo, etc....
        $this->precio=$precio;
        $this->stock=$stock;
    }


    //genero getters setters porque es privado
    public function get_Id()
    {
        return $this->id;
    }

    public function set_Id()
    {
        return $this->id;
    }
    ///----///
    public function get_titulo()
    {
        return $this->titulo;
    }

    public function set_titulo()
    {
        return $this->titulo;
    }
    ///----///
    public function get_precio()
    {
        return $this->id;
    }

    public function set_precio()
    {
        return $this->id;
    }
    ///----///

    public function get_stock()
    {
        return $this->stock;
    }

    public function set_stock()
    {
        return $this->stock;
    }
    
    ///Fin de getters y setters///

    public function añadirCesta(Carrito $carrito, int $cantidad)
    {
      return $carrito->añadirProducto($this, $cantidad);
    } 

    public function removerCesta(Carrito $carrito)
    {
        return $carrito->removerProducto($this);
    }

}


?>