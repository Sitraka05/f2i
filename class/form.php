<?php 
    class Form{   
        function Input($size, $name, $label, $type, $placeholder) {
        $un = '<div class="col-md-'.$size.'">
                    <div class="mb-3">';
        $deux = '';
        $trois =  '<input type="'.$type.'" name="'.$name.'" class="form-control" id="'.$name.'" placeholder="'.$placeholder.'">
                    </div>
                </div>';

        if ($type != 'submit') {

            $deux = '<label for="'.$name.'" class="form-label">'.$label.'</label>';
        }

        return $un.$deux.$trois;        
                        
    }
}

?>