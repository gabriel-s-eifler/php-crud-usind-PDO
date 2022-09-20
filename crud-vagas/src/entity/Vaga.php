<?php

namespace App\entity;

use App\db\Database;

class Vaga
{

  /** 
   * id da vaga
   * @var integer
   * 
   */
  public $id;

  /**
   * titulo da vaga
   * @var string
   */
  public $titulo;

  /**
   * decricao da vaga
   * @var string
   */
  public $descricao;

  /**
   * define se a vaga esta ativa
   * @var string(s/n)
   */
  public $ativo;

  /**
   * data de publicacao da vaga
   * @var string
   */
  public $data;

  /**
   * metodo responsavel por cadastrar uma nova vaga no banco
   * @return boolean
   */
  public function cadastrar()
  {
    //definir  a data
    $this->data = date('Y-m-d H:i:s');
    //inserir a vaga no banco
    $obDatabase = new Database('vagas');


    $this->id = $obDatabase->insert([
      'titulo' => $this->titulo,
      'descricao' => $this->descricao,
      'ativo' => $this->ativo,
      'data'  => $this->data

    ]);

    //atribuir id a vaga na instancia

    //retornar sucesso

    return false;
  }
}
