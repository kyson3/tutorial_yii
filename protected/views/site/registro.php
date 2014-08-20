<div class='form'>
    <?php
    $form = $this->beginWidget('CActiveForm', array
            (
            'method' => 'POST',
            'action' => Yii::app()->createUrl('site/registro'),
            'enableClientValidation' => true,
            'clientOptions' => array (
                'validateOnSubmit' => true,
                'validateOnChange' => true,
                'validateOnType' => true,
            )
            ))
    ?>
    
    <div class='row'>
        <?php
            echo $form->labelEx($model,'nombre');
            echo $form->textField($model,'nombre');
            echo $form->error($model,'nombre');
        ?>
    </div>
    
    <div class='row'>
        <?php
            echo $form->labelEx($model,'email');
            echo $form->textField($model,'email');
            echo $form->error($model,'email');
        ?>
    </div>
    
    <div class='row'>
        <?php
            echo $form->labelEx($model,'password');
            echo $form->passwordField($model,'password');
            echo $form->error($model,'password');
        ?>
    </div>
    
    <div class='row'>
        <?php
            echo $form->labelEx($model,'repeat_password');
            echo $form->passwordField($model,'repeat_password');
            echo $form->error($model,'repeat_password');
        ?>
    </div>
    
     <div class='row'>
        <?php
            echo $form->labelEx($model,'sexo');
            echo $form->radioButtonList(
                    $model,'sexo',
                    array('1' => 'Hombre',
                        '2' => 'Mujer'),
                    array(
                        'labelOptions' => array('style'=>'display:inline'),
                        'separator' => '',
                        'template' => ' {label}: {input} ',
                       ) 
                   );
            echo $form->error($model,'repeat_password');
        ?>
    </div>
    
    <div class='row'>
        <?php
            echo $form->labelEx($model,'terminos', array('style' => 'display:inline'));
            echo $form->checkBox($model,'terminos');
            echo $form->error($model,'terminos');
        ?>
    </div>
    
    
    <div class='row'>
        <?php
            Echo CHtml::submitButton('Зарегистрировать');
        ?>
    </div>
    
    <?php $this->endWidget(); ?>
</div>