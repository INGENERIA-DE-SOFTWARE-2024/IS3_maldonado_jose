<?php
namespace Model;

class Usuario extends ActiveRecord
{
    protected static $tabla = 'usuario';
    protected static $idTabla = 'usu_id';

    protected static $columnasDB = ['usu_nombre', 'usu_codigo','usu_password','usu_situacion'];

    public $usu_id;
    public $usu_nombre;
    public $usu_codigo;
    public $usu_password;
    public $usu_situacion;

}