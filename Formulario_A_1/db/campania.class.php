<?php
    include_once 'db.class.php';    

    class Campania extends Orm {

        protected static    
            $database = 'portal_oxohotel',
            $table = 'publicidad_a_2019_campania',
            $pk = 'id';

        public function validarMac($mac = '') {
            return $this::retrieveBymac_cliente($mac, Orm::FETCH_ONE);
        }
    }