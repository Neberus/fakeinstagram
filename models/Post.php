<?php
include "Conexao.php";

class Post extends Conexao {


    public function criarPost($img, $descricao){
        $db = parent::criarConexao();
        $query = $db->prepare("INSERT INTO posts (img, descricao) values (?,?)");
        return $query->execute([$img, $descricao]);
    }

    public function listarPosts(){
        $db = parent::criarConexao();
        $query = $db->query('SELECT * FROM posts');
        $resultado = $query->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    }

}