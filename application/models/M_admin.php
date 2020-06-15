<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model 
{

  public function __construct()
  {
    parent::__construct();
  }

  public function logged_in($username)
  {
    $this->db->select('*');
    $this->db->where('username', $username);
    $this->db->limit(1);
    return $this->db->get('users');
  }

  public function get_post_numrows()
  {
    $this->db->select('id');
    $this->db->where('is_delete',0);
    return $this->db->get('posts')->num_rows();
  }

  public function get_category_numrows()
  {
    $this->db->select('id');
    $this->db->where('is_delete',0);
    return $this->db->get('categories')->num_rows();
  }

  public function get_user_numrows()
  {
    $this->db->select('id');
    return $this->db->get('users')->num_rows();
  }  
  
  public function get_visitor()
  {
    $this->db->select('SUM(visitor) as visitor');
    return $this->db->get('posts')->row();
  }

  public function get_all_posts()
  {
    $this->db->select('posts.id, posts.post_title, categories.cat_title, posts.created_at');
    $this->db->from('posts');
    $this->db->join('categories','posts.post_cat_id = categories.id','left');
    $this->db->where('posts.is_delete' , 0);
    $this->db->order_by('posts.id', 'DESC');
    return $this->db->get()->result();
  }

  public function get_all_categories()
  {
    $this->db->select('id, cat_title');
    $this->db->where('is_delete', 0);
    return $this->db->get('categories')->result();
  }

  public function insert_new_post($data)
  {
    return $this->db->insert('posts', $data);
  }

  public function update_post($data, $id)
  {
    $this->db->where('id', $id);
    return $this->db->update('posts', $data);
  }

  public function delete_post($id)
  {
    $this->db->where('id', $id);
    return $this->db->update('posts', array('is_delete' => 1));
  }

  public function get_post_row_obj($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('posts')->row();
  }

  public function insert_new_cat($data)
  {
    return $this->db->insert('categories', $data);
  }

  public function update_cat($data, $id)
  {
    $this->db->where('id', $id);
    return $this->db->update('categories', $data);
  }

   public function delete_cat($id)
  {
    $this->db->where('id', $id);
    return  $this->db->update('categories', array('is_delete' => 1));
  }
}
