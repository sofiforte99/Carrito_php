<?php

class ItemCarrito 

{
    private Producto $producto; //declaro variable producto (instancia de la clase producto)
    private int $cantidad; // declaro la cantidad como objeto de la clase Item Carrito
    

    public function __construct(Producto $producto, $cantidad)
    {
        $this->producto = $producto;
        $this->cantidad = $cantidad; 
    }

    //genero getters y setters porque es privado
    //getter
    public function getProducto()
    {
        return $this->producto;
    }

    //setter    
    public function setProducto()
    {
        return $this->producto;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }

    //setter    
    public function setCantidad()
    {
        return $this->cantidad;
    }
    ///Fin getters-setters///

    //metodos relacionados a la funcionalidad

    public function incrementarCantidad($importe = 1)
    {
        if($this->getCantidad() + $importe > $this->getProducto()->get_stock()) //aca no uso item porque estoy en el objeto item directamente; chequeo que haya stock
        {
            echo "La cantidad seleccionada supera al stock correspondiente";
        }
        else
        {
            $this->$cantidad+=$importe; //le agrego el importe a la cantidad
            //$this-> setCantidad($this->getCantidad() + $importe); //seteo la cantidad con el importe (creo que es mejor la forma de arriba)
        }
    }

    public function restarCantidad($importe = 1)
    {
        if ($this->getProducto() + $importe < 0)
        {
            echo "El producto no puede ser menor a 0";
        }
        else
        {
            $this->$cantidad-=$importe;
        }
    }





}



?>