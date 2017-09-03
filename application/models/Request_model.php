<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Request_model extends MY_Model {

  public $table_name = 'standards';

  public function __construct()
  {
    parent::__construct();
  }

  function get_standard_id($id='')
  {
  }

  function get_standard_all()
  {
    return $this->db
      ->order_by('id','ASC')
      ->where('user_id',$this->session->user_id)
      ->get('standards')
      ->result_array();
  }

  function get_skill_id($id='')
  {
  }

  function get_skill_all()
  {
    return $this->db
      ->order_by('id','ASC')
      ->where('user_id',$this->session->user_id)
      ->get('skills')
      ->result_array();
  }

  function get_all()
  {
    $standards = $this->get_standard_all();
    $skills = $this->get_skill_all();

    $array = array_merge($standards,$skills);
    usort($array, function($a, $b) {
      return $a['date_create'] < $b['date_create'];
    });

    return $array;
  }

}