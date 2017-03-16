<?php
class Conexao{
    public static $instance;
 
    public static function getConexao() {
        
        $local = 'mysql.hostinger.com.br';
        $banco = 'u910052122_forca';
        $usuario = 'u910052122_root';
        $senha = 'Carlos.1998';
        
        if (!isset(self::$instance)) {
            self::$instance = new PDO("mysql:host=$local;dbname=$banco", $usuario, $senha);
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$instance->exec("SET CHARACTER SET utf8");
        } return self::$instance;
    }
   
}
