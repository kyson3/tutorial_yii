<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ValidarRegistro extends CFormModel {
    
    public $nombre;
    
    public function rules(){
        return array (
            array('nombre', 'required','message' => 'Este campo es requerido'),
            array(
                'nombre',
                'match',
                'pattern' => '/^[a-zA-Z\s]+$/',
                'message'=>'El tipo de datos introducio incorecto'
            ),
            array (
                'nombre',
                'length',
                'min' => 5,
                'tooShort' => 'Minomo 5 charatcteres',
                'max' =>50,
                'tooLong' => 'Maximo 50 characteres'
            )
        );
    }
}