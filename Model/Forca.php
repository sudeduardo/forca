<?php

class Forca {
    function  GetCodPalavraRandom(){
        $sql="  SELECT cod FROM palavra order by rand() limit 1";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->execute();
            $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result[0]['cod'];
    }
            
    function  GetDicas($cod){
       try {
            $stmt = Conexao::getConexao()->prepare("SELECT * FROM dica WHERE cod_palavra = ?");
            $stmt->bindValue(1, $cod);
            $stmt->execute();
             $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (Exception $ex) {
            return FALSE;
        }  
    }
            
 
    function GetPalavraByName($palavra) {
        $stmt = Conexao::getConexao()->prepare("SELECT * FROM palavra WHERE palavra = ?");
        $stmt->bindValue(1, $palavra);
        $stmt->execute();
        $cod = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $cod;
    }

    function GetPalavraByCod($cod) {
        $stmt = Conexao::getConexao()->prepare("SELECT * FROM palavra WHERE cod = ?");
        $stmt->bindValue(1, $cod);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result[0];
    }

    public function addPalavra($palavra, $dica = array()) {
        try {


            $sql = "INSERT INTO palavra (cod, palavra) VALUES (NULL, ?);";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(1, $palavra);
            $stmt->execute();
            $cod = $this->GetPalavraByName($palavra);
            $cod = $cod[0]['cod'];
            for ($index = 0; $index < count($dica); $index++) {
                $query = "INSERT INTO dica (cod, dica,cod_palavra) VALUES (NULL, ?, ?);";
                $stmt = Conexao::getConexao()->prepare($query);
                $stmt->bindValue(1, $dica[$index]);
                $stmt->bindValue(2, $cod);
                $stmt->execute();
            }


            return true;
        } catch (Exception $ex) {
            return FALSE;
        }
    }

    public function GetPontos() {
        $stmt = Conexao::getConexao()->prepare("SELECT * FROM pontucao");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function DeletePalavra($cod) {
        try {

            
           $query = "DELETE FROM dica WHERE cod_palavra=?";
           $stmt = Conexao::getConexao()->prepare($query);
           $stmt->bindValue(1, $cod);
           $stmt->execute();
           $this->DeletePonto($cod);
           $sql = "DELETE FROM palavra WHERE cod =?";
           $stmt = Conexao::getConexao()->prepare($sql);
           $stmt->bindValue(1, $cod);
           $stmt->execute();
          


            return true;
        } catch (Exception $ex) {
            return FALSE;
        }
    }
    public function Pontucao($nome,$acertos,$erros,$palavra) {
        try {

            
           $query = "INSERT INTO pontucao (cod, nome, acertos, erros, palavra) VALUES (NULL, ?, ?, ?, ?)";
           $stmt = Conexao::getConexao()->prepare($query);
           $stmt->bindValue(1, $nome);
           $stmt->bindValue(2, $acertos);
           $stmt->bindValue(3, $erros);
           $stmt->bindValue(4, $palavra);
           $stmt->execute();
            return true;
        } catch (Exception $ex) {
            return FALSE;
        }
    }
    

}
