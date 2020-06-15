<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_magazine extends CI_Model
{

    public $table = 'posts';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }
    
    function get_higline_majalah()
    {
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->join('categories','categories.id = posts.post_cat_id','LEFT');
        $this->db->where('categories.cat_slug','majalah');
        $this->db->order_by('posts.id', $this->order);
        $this->db->limit(5);
        return $this->db->get()->result();
    }
    
    function get_trending_majalah()
    {
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->join('categories','categories.id = posts.post_cat_id','LEFT');
        $this->db->where('categories.cat_slug','majalah');
        $this->db->order_by('posts.visitor', $this->order);
        $this->db->limit(2);
        return $this->db->get()->result();
    }
    
    function get_higline()
    {
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->join('categories','categories.id = posts.post_cat_id','LEFT');
        $this->db->order_by('posts.id', $this->order);
        $this->db->limit(5);
        return $this->db->get()->result();
    }
    
    function get_trending()
    {
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->join('categories','categories.id = posts.post_cat_id','LEFT');
        $this->db->order_by('posts.visitor', $this->order);
        $this->db->limit(6);
        return $this->db->get()->result();
    }
    
    function get_makanan_baru()
    {
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->join('categories','categories.id = posts.post_cat_id','LEFT');
        $this->db->where('categories.cat_slug','makanan');
        $this->db->order_by('posts.id', $this->order);
        $this->db->limit(5);
        return $this->db->get()->result();
    }
    
    function get_makanan_populer()
    {
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->join('categories','categories.id = posts.post_cat_id','LEFT');
        $this->db->where('categories.cat_slug','makanan');
        $this->db->order_by('posts.visitor', $this->order);
        $this->db->limit(3);
        return $this->db->get()->result();
    }
    
    function get_makanan_rek()
    {
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->join('categories','categories.id = posts.post_cat_id','LEFT');
        $this->db->where('categories.cat_slug','makanan');
        $this->db->order_by('posts.visitor', $this->order);
        $this->db->limit(5,0);
        return $this->db->get()->result();
    }
    
    function get_tempat()
    {
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->join('categories','categories.id = posts.post_cat_id','LEFT');
        $this->db->where('categories.cat_slug','tempat');
        $this->db->order_by('posts.visitor', $this->order);
        $this->db->limit(2, 1);
        return $this->db->get()->result();
    }    
    
    function get_tempat1()
    {
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->join('categories','categories.id = posts.post_cat_id','LEFT');
        $this->db->where('categories.cat_slug','tempat');
        $this->db->order_by('posts.visitor', $this->order);
        $this->db->limit(2, 4);
        return $this->db->get()->result();
    }
    
    function get_majalah_pop()
    {
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->join('categories','categories.id = posts.post_cat_id','LEFT');
        $this->db->where('categories.cat_slug','majalah');
        $this->db->order_by('posts.visitor', $this->order);
        $this->db->limit(10);
        return $this->db->get()->result();
    }
    
    function get_majalah_baru()
    {
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->join('categories','categories.id = posts.post_cat_id','LEFT');
        $this->db->where('categories.cat_slug','majalah');
        $this->db->order_by('posts.id', $this->order);
        $this->db->limit(10);
        return $this->db->get()->result();
    }
    
    function get_majalah()
    {
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->join('categories','categories.id = posts.post_cat_id','LEFT');
        $this->db->where('categories.cat_slug','majalah');
        $this->db->order_by('posts.id', $this->order);
        $this->db->limit(3);
        return $this->db->get()->result();
    }
    
    // get data by id
    function get_post($id)
    {
        $this->db->where('post_slug', $id);
        return $this->db->get('posts')->row();
    }

    function get_berita_baru()
    {
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->join('categories','categories.id = posts.post_cat_id','LEFT');
        $this->db->where('categories.cat_slug','makanan');
        $this->db->order_by('posts.id', $this->order);
        $this->db->limit(1);
        return $this->db->get()->result();
    }    
    
    function get_berita_baru1()
    {
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->join('categories','categories.id = posts.post_cat_id','LEFT');
        $this->db->where('categories.cat_slug','makanan');
        $this->db->order_by('posts.id', $this->order);
        $this->db->limit(2,2);
        return $this->db->get()->result();
    }    
    
    function get_berita_baru2()
    {
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->join('categories','categories.id = posts.post_cat_id','LEFT');
        $this->db->where('categories.cat_slug','makanan');
        $this->db->order_by('posts.id', $this->order);
        $this->db->limit(2,4);
        return $this->db->get()->result();
    }

    function getupdate($id)
    {
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->where('post_slug',$id);
        return $this->db->get()->row();
    }
    // update data
    function update($id, $data)
    {
        $this->db->where('post_slug', $id);
        $this->db->update($this->table, $data);
    }    
    
    function get_majalah_rek()
    {
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->join('categories','categories.id = posts.post_cat_id','LEFT');
        $this->db->where('categories.cat_slug','majalah');
        $this->db->order_by('posts.visitor', $this->order);
        $this->db->limit(5,0);
        return $this->db->get()->result();
    }

}

/* End of file mitra_model.php */
/* Location: ./application/models/mitra_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-11-02 11:43:18 */
/* http://harviacode.com */