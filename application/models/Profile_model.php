<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile_model extends MY_Model {

  public $table_name = 'profile';

  public function __construct()
  {
    parent::__construct();
  }

  function get_id($id=NULL)
  {
    return $this->db
      ->where('user_id',$id)
      ->order_by('id','DESC')
      ->get($this->table_name)
      ->row_array();
  }

  function get_all()
  {
    return $this->db
      ->order_by('id','DESC')
      ->get($this->table_name)
      ->result_array();
  }

  function get_users($q='',$limit='',$offset='')
  {
    return $this->db
      ->like('us.email',$q)
      ->where('ug.group_id','2')
      ->order_by('us.id','DESC')
      ->join('users_groups AS ug','ug.user_id=us.id')
      ->limit($limit)
      ->offset($offset)
      ->get('users AS us')
      ->result_array();
  }

  function delete_user($user_id)
  {
    $this->db
      ->where('user_id',$user_id)
      ->delete($this->table_name);

    return TRUE;
  }

}
