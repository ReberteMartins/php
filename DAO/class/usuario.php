<?php

class Usuario {

    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;


    public function getIdusuario()
    {
        return $this->idusuario;
    }

    public function setIdusuario($idusuario): self
    {
        $this->idusuario = $idusuario;

        return $this;
    }

    public function getDeslogin()
    {
        return $this->deslogin;
    }

    public function setDeslogin($deslogin): self
    {
        $this->deslogin = $deslogin;

        return $this;
    }

    public function getDessenha()
    {
        return $this->dessenha;
    }

    public function setDessenha($dessenha): self
    {
        $this->dessenha = $dessenha;

        return $this;
    }

    public function getDtcadastro()
    {
        return $this->dtcadastro;
    }

    public function setDtcadastro($dtcadastro): self
    {
        $this->dtcadastro = $dtcadastro;

        return $this;
    }
}

?>