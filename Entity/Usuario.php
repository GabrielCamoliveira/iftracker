<?php

namespace IFTracker\Entity;

use IFTracker\Db\Database;
use \PDO;

class Usuario{

  /**
   * Identificador único da usuario
   * @var integer
   */
  public $id;

  /**
   * RG do usuario
   * @var string
   */
  public $rg;

  /**
   * email do usuario
   * @var string
   */
  public $email;

  /**
   * None do susuario
   * @var string
   */
  public $nome;

  /**
   * Seenha do usuario
   * @var string
   */
  public $senha;

  /**
   * tipo de usuario
   * @var integer
   */
  public $tipo;

  /**
   * Método responsável por cadastrar uma nova pessoa no banco
   * @return boolean
   */
  public function cadastrar(){

    //INSERIR UM USUARIO NO BANCO
    $obDatabase = new Database('tbUsuario');
    $this->id = $obDatabase->insert([
                                      'rg_Usuario'    => $this->rg,
                                      'email_Usuario' => $this->email,
                                      'nome_Usuario'     => $this->nome,
                                      'senha_Usuario'      => $this->senha,
                                      'tipo_Usuario'      => $this->tipo
                                    ]);

    //RETORNAR SUCESSO
    return true;
  }

  /**
   * Método responsável por atualizar o usuario no banco
   * @return boolean
   */
  public function atualizar(){
    return (new Database('tbUsuario'))->update('id = '.$this->id,[
                                                                'rg_Usuario'    => $this->rg,
                                                                'email_Usuario' => $this->email,
                                                                'nome_Usuario'     => $this->nome,
                                                                'senha_Usuario'      => $this->senha,
                                                                'tipo_Usuario'      => $this->tipo
                                                              ]);
  }

  /**
   * Método responsável por excluir a pessoa do banco
   * @return boolean
   */
  public function excluir(){
    return (new Database('tbUsuario'))->delete('id = '.$this->id);
  }

  /**
   * Método responsável por obter os usuario do banco de dados
   * @param  string $where
   * @param  string $order
   * @param  string $limit
   * @return array
   */
  public static function getUsuarios($where = null, $order = null, $limit = null){
    return (new Database('tbUsuario'))->select($where,$order,$limit)
                                  ->fetchAll(PDO::FETCH_CLASS,self::class);
  }

  /**
   * Método responsável por buscar um usuario com base em seu ID
   * @param  integer $id
   * @return Usuario
   */
  public static function getUsuario($id){
    return (new \App\Db\Database('tbUsuario'))->select('id = '.$id)
                                  ->fetchObject(self::class);
  }

}