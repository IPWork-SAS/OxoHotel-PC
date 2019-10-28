<?php

    class Utilities
    {
        public function getCorrectNameFromColumn($column = '') {
            $column = strtolower($column);
            if (strpos($column, 'genero') !== false) {
                return 'Genero';
            } else if (strpos($column, 'fecha_creacion') !== false) {
                return 'Fecha Creacion';
            } else if (strpos($column, 'nombre') !== false) {
                return 'Nombre';
            } else if (strpos($column, 'email') !== false) {
                return 'Email';
            } else if (strpos($column, 'telefono') !== false) {
                return 'Celular';
            } else if (strpos($column, 'ssid') !== false) {
                return 'SSID';
            } else if (strpos($column, 'mac_cliente') !== false) {
                return 'MAC Cliente';
            } else if (strpos($column, 'ip_cliente') !== false) {
                return 'IP Cliente';
            } else if (strpos($column, 'mac_ap') !== false) {
                return 'MAC AP';
            } else if (strpos($column, 'ip_ap') !== false) {
                return 'IP AP';
            }
        
        }
        
    }
