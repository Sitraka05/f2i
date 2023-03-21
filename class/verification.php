<?php 

class Verification {

    private $array = [];

    private function Verif($name, $min, $max,$message) {
        if (strlen($name) < $min || strlen($name) > $max) {
            array_push($this->array, $message);
        }
        return $this->array;
    }

    public function getArray() {
        return $this->array;
    }

    public function getIndexError($index) {
        if (count($this->array) > 0) {
            return $this->array[$index];
        }
        return null;
    }

    public function setArray($array) {
        return $this->array = $array;
    }


    public function Email($name) {
        $this->Verif($name, 5, 255, 'Votre email est invalide');
    }

    public function Texte($name, $message) {
        $this->Verif($name, 5, 255, 'Votre '.$message.' est invalide');
    }

    public function Phone($name) {
        $this->Verif($name, 8, 15, 'Votre numéro de téléphone <b> '.$name.' </b> est invalide');
    }

    public function Password($password1, $password2) {
        if($password1 != $password2) {
            array_push($this->array, 'leS motS de passe ne sont pas identique');
        }

        $this->Verif($password1, 2, 80, 'Votre mot de passe est invalide');

        if (count($this->array) > 0) {
            return $this->array;
        }

        $hash = password_hash($password1,PASSWORD_ARGON2I);
    }



}

?>