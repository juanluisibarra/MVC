<?php
    class Conexion{
        private $conexion;
        public function _construct(){
             $this->conexion=new mtsqli('localhost','root','','MVC');
}

}
?>