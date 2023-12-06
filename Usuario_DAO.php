<?php
require_once ("ConnectionFactory.php");
require_once("Usuario.php");
class UsuarioDAO {
    var $conex;

    public function __construct()
    {
        $this->conex = ConnectionFactory::getConnection();
    }

    public function adiciona(Usuario $u) {
        try {
            $sql = 'Insert into tb_usuario (tb_usuario_usuario, tb_usuario_senha, tb_usuario_cargo) values (?,?,?);';
            $stmt = $this->conex->prepare($sql);
            $stmt->bindValue(1, $u->getUsuario(), PDO::PARAM_STR);
            $stmt->bindValue(2, $u->getSenha(), PDO::PARAM_STR);
            $stmt->bindValue(3, $u->getCargo(), PDO::PARAM_STR);
            $stmt->execute();
            if ($stmt->rowCount()==1){
                return true;
            } else {
                return false;
            }
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function pesquisa(Usuario $u) {
        try {
            $stmt = $this->conex->prepare('select * from tb_usuario where tb_usuario_id = ?');
            $stmt->bindValue(1, $u->getId(), PDO::PARAM_INT);
            $stmt->execute();
            if ($stmt->rowCount()>0) :
                return $stmt->fetch(PDO::FETCH_ASSOC);
            endif;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function lista() {
        try {
            $stmt = $this->conex->prepare('select * from tb_usuario');
            $stmt->execute();
            if ($stmt->rowCount()>0):
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            endif;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function delete(Usuario $u) {
        try {
            $sql = 'delete from tb_usuario where tb_usuario_id=?';
            $stmt = $this->conex->prepare($sql);
            $stmt->bindValue(1, $u->getId(), PDO::PARAM_INT);
            $stmt->execute();
            if ($stmt->rowCount()==1) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function altera(Usuario $u) {
        try {
            $sql = 'update tb_usuario set tb_usuario_usuario=?, tb_usuario_senha=?, tb_usuario_cargo=? where tb_usuario_id=?;';
            $stmt = $this->conex->prepare($sql);
            $stmt->bindValue(1, $u->getUsuario());
            $stmt->bindValue(2, $u->getSenha());
            $stmt->bindValue(3, $u->getCargo());
            $stmt->bindValue(4, $u->getId(),PDO::PARAM_INT);
            $stmt->execute();
            if ($stmt->rowCount()==1) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
}