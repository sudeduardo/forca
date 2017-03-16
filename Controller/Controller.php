<?php

class Controller {

    protected $msg;

    public function index() {
        session_start();
        if (!isset($_SESSION['palavra'])) {
            $c = new Forca();
            $cod = $c->GetCodPalavraRandom();
            $_SESSION['palavra'] = $c->GetPalavraByCod($cod);
            $_SESSION['dicas'] = $c->GetDicas($cod);
            $_SESSION['palavra']['palavra']=strtolower($_SESSION['palavra'] ['palavra']);
        }
        $cond = TRUE;
        if (isset($_POST['letra'])) {
            $letra = $this->FiltrarLetra($_POST['letra']);

            if ($letra) {
                $letra = strtolower($letra);

                if (!isset($_SESSION['letra'])) {
                    $_SESSION['letra'][] = $letra;
                } else {
                    foreach ($_SESSION['letra'] as $value) {
                        if ($value === $letra) {
                            $cond = false;
                            break;
                        }
                    }
                    if ($cond) {
                        $_SESSION['letra'][] = $letra;
                    }
                }
            }
        }
    }

    public function FiltrarLetra($palavra) {
  @$palavra = ereg_replace("[^a-zA-Z0-9_]", "", strtr($palavra, "áàãâéêíóôõúüçÁÀÃÂÉÊÍÓÔÕÚÜÇ ", "aaaaeeiooouucAAAAEEIOOOUUC"));
if (!is_numeric($palavra) && strlen($palavra) === 1) {
  return ($palavra);  

}else{
    return false;
}
        
    }
}
