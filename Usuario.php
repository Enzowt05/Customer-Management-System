<?php
class Usuario {
    private $id;
    private $usuario;
    private $senha;
    private $cargo;

    public function getId() {
      return $this->id;
    }
    public function setId($value) {
      $this->id = $value;
    }

    public function getUsuario() {
      return $this->usuario;
    }
    public function setUsuario($value) {
      $this->usuario = $value;
    }

    public function getSenha() {
      return $this->senha;
    }
    public function setSenha($value) {
      $this->senha = $value;
    }

    public function getCargo() {
      return $this->cargo;
    }
    public function setCargo($value) {
      $this->cargo = $value;
    }
}