<?php

namespace IFTracker\Entity;

use IFTracker\Db\Database;
use \PDO;

class Turma{

  /**
   * Identificador único da turma
   * @var integer
   */
  public $id;

  /**
   * ano da turma
   * @var integer
   */
  public $ano;

  /**
   * curso da turma
   * @var string
   */
  public $curso;

  /**
   * repressentante da turma
   * @var integer
   */
  public $repre;

  
  /**
   * Método responsável por cadastrar uma nova turma no banco
   * @return boolean
   */
  public function cadastrar(){

    //INSERIR UMA TURMA NO BANCO
    $obDatabase = new Database('tbTurma');
    $this->id = $obDatabase->insert([
                                      'ano_Turma'    => $this->ano,
                                      'curso_Turma' => $this->curso,
                                      'repre_Turma'     => $this->repre
                                    ]);

    //RETORNAR SUCESSO
    return true;
  }

  /**
   * Método responsável por atualizar o usuario no banco
   * @return boolean
   */
  public function atualizar(){
    return (new Database('tbTurma'))->update('id = '.$this->id,[
                                                                'ano_Turma'    => $this->ano,
                                                                'curso_Turma' => $this->curso,
                                                                'repre_Turma'     => $this->repre
                                                              ]);
  }

  /**
   * Método responsável por excluir a pessoa do banco
   * @return boolean
   */
  public function excluir(){
    return (new Database('tbTurma'))->delete('id = '.$this->id);
  }

  /**
   * Método responsável por obter os usuario do banco de dados
   * @param  string $where
   * @param  string $order
   * @param  string $limit
   * @return array
   */
  public static function getUsuarios($where = null, $order = null, $limit = null){
    return (new Database('tbTurma'))->select($where,$order,$limit)
                                  ->fetchAll(PDO::FETCH_CLASS,self::class);
  }

  /**
   * Método responsável por buscar uma turma com base em seu ID
   * @param  integer $id
   * @return Turma
   */
  public static function getUsuario($id){
    return (new \IFTracker\Db\Database('tbTurma'))->select('id = '.$id)
                                  ->fetchObject(self::class);
  }

}