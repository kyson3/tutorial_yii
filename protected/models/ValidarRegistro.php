<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ValidarRegistro extends CFormModel {
    
    public $nombre;
    public $email;
    public $password;
    public $repeat_password;
    public $sexo;
    public $terminos;
    public $captcha;


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
            ),
            
            //Validation email
            array(
                'email',
                'required',
                'message' => 'Este campo requerido',
            ),
            array(
                'email',
                'email',
                'message' => 'El formato de email introducido no es correcto',
            ),
            array(
                'email',
                'length',
                'min' => 8,
                'tooShort' => 'Min 8 caracteres',
                'max' => 70,
                'tooLong' => 'Max 70 caracteres'
            ),
            
            array('email','comprobar_email'),
            
            /*Validation password*/
            array(
                'password',
                'required',
                'message' => 'Este campo requerido'
            ),
            array(
                'password',
                'match',
                'pattern' => '/^([a-z]+[0-9]+)|([0-9]+[a-z]+)/i',
                'message' => 'Obligatorio lettras  numeros',
            ),
            array(
                'password',
                'length',
                'min' => 8,
                'tooShort' => 'Min 8 caracteres',
                'max' => 16,
                'tooLong' => 'Max 16 caracteres'
            ),
            
            /*Validation repeat password*/
            array(
                'repeat_password',
                'required',
                'message' => 'Este campo requerido'
            ),
            array(
                'repeat_password',
                'compare',
                'compareAttribute' => 'password',
                'message' => 'Las contrasensas'
            ),
            
            /**Validate redio buttons*/
            array(
                'sexo',
                'required',
                'message' => 'Este campo requerido',
            ),
            array(
                'sexo',
                'match',
                'pattern' => '/^[0-9]/',
                'message' => 'El tipo de datos que quieres no es valido',
            ),
            
            /*Validate checkbox*/
            array(
                'terminos',
                'required',
                'message' => 'Por favor, acepte los terminos',
                
            ),
            
            /* Validate Captha */
//            array(
//                'captcha',
//                'captcha',
//                'message' => 'Error el texto no es correcto',
//            )
        );
    }
    
    public function attributeLabels() {
        return array (
            'terminos' => 'Aceptar los terminos',
        );
    }
    
    public function comprobar_email($attributes, $params) {
//        $emails = array('manu@mail.com','fernando@mail.com', 'raul@mail.com');
//        
//        foreach($emails as $e) {
//            if ($this->email==$e){
//                $this->addError('email','Email no disponible');
//                break;
//            }
        
            $conexion = Yii::app()->db;
            $consulta = "SELECT email FROM usuarios";
            $resultado = $conexion->createCommand($consulta);
            $filas = $resultado->query();
            
             foreach($filas as $fila) {
            if ($this->email==$fila['email']){
                $this->addError('email','Email no disponible');
                break;
            }
            
        }
    }
}