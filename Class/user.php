<?php
class role {
    public $role_id;
    public $role_name;

    public function __construct($role_id, $role_name) {
        $this->role_id = $role_id;
        $this->role_name = $role_name;
    }
    public function role(){
        return "user yang memiliki id role $this->role_id adalah role $this->role_name";
    }
    
}

class admin extends role {
    public $previlage;
    public function __construct($role_id,$role_name,$previlage){
        parent::__construct($role_id,$role_name);
        $this->previlage = $previlage;
    }
    public function manageUser(){
        return "akun dengan role id $this->role_id adalah $this->role_name dapat melakukan $this->previlage";
    }
}

