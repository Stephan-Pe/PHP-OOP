<?php

class ViewUser extends User {


    public function showAllUsers() {
        $datas = $this->getAllUsers();
        foreach ($datas as $data) {
            echo $data['uidUsers']."<br>";
            echo $data['emailUsers']."<br>";
        }
    }
}