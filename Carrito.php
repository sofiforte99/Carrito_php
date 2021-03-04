<?php

class Carrito
{
    private array $items = []; //array con items

    public function getItems($items)
    {
        return $this->items = $items;
    }

    public function setItems($items)
    {
        return $this->items = $items;
    }

    
    //metodo añadir producto//
    function añadirProducto(Producto $producto, int $cantidad) //paso como parámetro producto (instancia de variable producto y la cantidad)
    {
        //encontrar producto
        $item_carrito = $this->buscarItemCarrito($producto->get_Id());
        if ($item_carrito === null)
        {
        $item_carrito = new ItemCarrito($producto, $cantidad = 0);
        $this->items[] = $item_carrito;
        }
        

        foreach($this->$items as $item)
        {
            if($item->getProducto()->get_Id() === $producto->getId() ) //le paso el id (sería como pasar entre paréntesis pero como es privada lo paso por método get)
            {
                $item_carrito = $item; //busco producto del id--> asigno en item carrito
            } 
        }

        $cartItem->incrementarCantidad($cantidad);
        return $item_carrito;
        //$item_carrito = new ItemCarrito($producto, $cantidad);  //creo nuevo objeto en la clase. 
            
    }
    //
    private function buscarItemCarrito(int $producto_id)
    {
        foreach($this->$items as $item)
        {
            if($item->getProducto()->get_Id() === $producto_id) //le paso el id (sería como pasar entre paréntesis pero como es privada lo paso por método get)
            {
                return $item->getProducto();
            } 
        }
        return null;
    }

    public function removerProducto(Producto $producto)
    {
        foreach ($this->items as $index => $item)
        {
            if ($item->getProducto()->get_Id === $product->get_Id)
            {
                unset($this->items[$index]);
                break;
            }
        }
       
    }

    public function getCantidadTotal()
    {
        $sum = 0;
        foreach($this->$items as $item)
        {
            $sum += $item-> getCantidad();

        }
        return $sum;
    }

    public function getSumaTotal()
    {
        $suma_total = 0;
        foreach($this->items as $item)
        {
            $suma_total += $item->getCantidad() * $item->getProducto()->get_precio();
        }
        return $suma_total;
    }

}

?>