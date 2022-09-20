<?php

namespace App\Db;

use JetBrains\PhpStorm\Internal\ReturnTypeContract;
use \PDOException;

class Database
{
  /** 
   * host de conexão
   * @var string
   */
  const host = 'localhost';

  /**
   * Nome do banco de dados
   *@var string
   */

  const NAME = 'CRUD-VAGAS';
  /**
   *user do banco
   *@var string
   */
  const USER = 'root';

  /** 
   * Nome da tabela a ser manipulado
   *@var string
   */
  private $table;


  /**
   * instancia de conexão com o banco
   * @var PDO
   */
  private $connection;

  /**
   * define tabe e instancia de concexão
   * @param string
   */

  public function __construct($table = null)
  {
    $this->table = $table;
    $this->setConnection();
  }
  /**
   * metodo responsável por criar uma conexão com o banco de dados
   */
  private function setConnection()
  {
    try {
      $this->connection = new \PDO('mysql:host=' . self::host . '; dbname=' . self::NAME, self::USER);
      $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      die('ERROR: ' . $e->getMessage());
    }
  }
  /**
   * método responsavel por executar a query no banco de dados
   * @param string $query
   * @param array $params
   * @return PDOStatment
   */
  public function execute($query, $params = [])
  {
    try {
      $statement = $this->connection->prepare($query);
      $statement->execute($params);
      return $statement;
    } catch (PDOException $e) {
      die('ERROR:' . $e->getMessage());
    }
  }

  /**
   * metodo responsavel por inserir dados no bancoss
   * @param array $values [field => value]
   * @return integer ID inserido
   */
  public function insert($values)
  {
    //dados da query
    $fields = array_keys($values);
    $binds = array_pad([], count($fields), '?');


    //monta a query
    $query = 'INSERT INTO ' . $this->table . ' (' . implode(',', $fields) . ') VALUES(' . implode(',', $binds) . ')';


    //executa o insert
    $this->execute($query, array_values($values));

    return $this->connection->lastInsertID();
  }
}
