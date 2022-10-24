<?php
class OBJElementosFRM {
    function __construct()
    {

    }
    function CrearLista($Lista, $nombre)
    {
        $cadenaInicio = '<select name="'.$nombre.'">';
        $opcion = " ";
        foreach ($Lista as $valor){
            $opcion = "<option>".$valor."</option>".$opcion;
        }
        $cadenaFinal = "</select>";
        $listaSelect = $cadenaInicio.$opcion.$cadenaFinal;
        return $listaSelect;
    }
    function CrearInputRadio($Lista, $Nombre)
    {
        $opcion = "";
        foreach($Lista as $valor){
            $texto = '<label>'.$valor.'</label>';
            $opcion = $texto.'<input type="radio" id="'.$valor.'" name="'.$Nombre.'" value="'.$valor.'"> <br>'.$opcion;
        }
        return $opcion;
    }
    function CrearLabelBox($Lista, $Name, $color)
    {
        $cadenaInicio = '<fieldset><legend>'.$Name.'</legend>';
        $cadenaFinal = '</fieldset>';
        $listaLabelBox = "";
        foreach($Lista as $valor){
            //$texto = '<label>'.$valor.'</label>';
            $texto = '<label for="'.$valor.'">'.$valor.'</label>';
            $listaLabelBox = $texto.'<input id="'.$valor.'" name="'.$valor.'" style="border: 1px solid '.$color.';"> <br>'.$listaLabelBox;
        }
        return $cadenaInicio.$listaLabelBox.$cadenaFinal;
    }
    function CrearInputCheckBox($Lista, $Nombre, $text)
    {
        $checkboxes = "";
        $cadenaInicio = '<fieldset><legend>'.$Nombre.'</legend><p>'.$text.'</p>';
        $cadenaFinal = '</fieldset>';
        foreach($Lista as $valor){
            $texto = '<label for="'.$valor.'">'.$valor.'</label>';
            $checkboxes = $texto.'<input type="checkbox" id="'.$valor.'" name="'.$valor.'" value="'.$valor.'"> <br>'.$checkboxes;
        }
        return $cadenaInicio.$checkboxes.$cadenaFinal;
    }
}
?>