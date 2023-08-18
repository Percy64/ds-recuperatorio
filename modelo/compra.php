<?php
class compra
{
    public $id;
    public $fecha;
    public $montototal;
    public $tipocompra;
    public $listlineascompra=array();
   
    public function mostrardatos()
    {
        echo 'compra:<br>';
        echo 'Id:'. $this->id . '<br>';
        echo 'fecha:'. $this->fecha . '<br>';
        echo 'monto total:'. $this->montototal . '<br>';
        if ($this->tipocompra=='online') {
            echo 'La compra fue realizada on-line'. '<br>';
        } else {
            if ($this->tipocompra=='fisica') {
                echo 'La compra fue realizada en una tienda fisica <br>';
            } else {
               echo 'El tipo de compra ingresado no es correcto<br>';
            }
            
        }
        foreach ($this->listlineascompra as $lin)
        {
            echo 'id:'. $lin->id . '<br>';
            echo 'cantidad: '. $lin->cantidad . '<br>';
            echo 'subtotal: '. $lin->subtotal . '<br>';
            echo 'id: '. $lin->producto->id . '<br>';
            echo 'descripcion: '. $lin->producto->descripcion . '<br>';
            echo 'precio: '. $lin->producto->precio . '<br>';
        }
        



    }
}