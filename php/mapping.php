<?php
class usuario extends DataBoundObject {

        protected $id;
        protected $nombre;
        protected $contra;

        protected function DefineTableName() {
                return("usuarios");
        }

        protected function DefineRelationMap() {
                return(array(
                        "id" => "id",
                        "nombre" => "nombre",
                        "contra" => "contra"
                ));
        }

}

?>