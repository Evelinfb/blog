<?php

require_once '../includes/funcoes.php';
require_once '../core/conexao_mysql.php';
require_once '../core/sql.php';
require_once '../core/mysql.php';

insert_teste('10', 'comentário', '1', '3');
buscar_teste();
update_teste(1, '10', 'comentário', '1', '3');
buscar_teste();

//Teste inserção banco de dados
function insert_teste($nota, $comentario, $usuario_id, $post_id ) : void 
{
    $dados = ['nota' => $nota, 'comentario' => $comentario, 'usuario_id' => $usuario_id, 'post' => $post_id];
    insere('avaliacao', $dados);
}

//Teste select banco de dados
function buscar_teste() : void
{
    $usuarios = buscar('avaliacao', ['id', 'nota', 'comentario', 'usuario_id', 'post_id'], [], '');
    print_r($usuarios);
}
//Teste update banco de dados
function update_teste($id, $nota, $comentario, $usuario_id, $post_id) : void
{
    $dados = ['nota' => $nota, 'comentario' => $comentario, 'usuario_id' => $usuario_id, 'post' => $post_id];
    $criterio = [['id', '=', $id]];
    atualiza('avaliacao', $dados, $criterio);

}
?>