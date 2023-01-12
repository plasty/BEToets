<?php
class MankementController {
    public function addMankement() {
        $kenteken = $_POST['kenteken'];
        $mankement = $_POST['mankement'];
        $mankementModel = new MankementModel();
        $mankementModel->addMankement($kenteken, $mankement);
    }
}

?>