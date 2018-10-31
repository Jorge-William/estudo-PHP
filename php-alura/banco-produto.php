<?php
/**
 * 
 * 
 * 
 * Aqui é onde fica todas as querys do banco de dados.
 * 
 * 
 */


//==============================SELECT=======================================

function listaProdutos($conexao){
    
    $produtos = array();
    
    $resultado = mysqli_query($conexao,"SELECT * FROM produtos");

    while($produto = mysqli_fetch_assoc($resultado)){
        array_push($produtos, $produto);
    }
    return $produtos;
}



// ==============================INSERT=======================================

function insereProduto($conexao, $nome, $preco, $descricao){
    $query = "insert into produtos (nome, preco, descricao) values('{$nome}',{$preco},'{$descricao}')";
    
    return mysqli_query($conexao, $query);
}



//===============================DELETE========================================

function removeProduto($conexao, $id){
    $query = "DELETE FROM produtos WHERE id = {$id}";
    return mysqli_query($conexao, $query);

}



//===============================UPDATE=======================================
