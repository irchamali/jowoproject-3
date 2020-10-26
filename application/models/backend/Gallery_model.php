<?php

class Gallery_model extends CI_Model
{

    function get_gallery()
    {
        $query = $this->db->get('tbl_gallery');
        return $query;
    }

    function insert_gallery($nama, $content, $gambar)
    {
        $data = array(
            'gallery_name' => $nama,
            'gallery_content' => $content,
            'gallery_image' => $gambar,
        );
        $this->db->insert('tbl_gallery', $data);
    }

    function update_gallery($id, $nama, $content, $gambar)
    {
        $this->db->set('gallery_name', $nama);
        $this->db->set('gallery_content', $content);
        $this->db->set('gallery_image', $gambar);
        $this->db->where('gallery_id', $id);
        $this->db->update('tbl_gallery');
    }

    function update_gallery_noimg($id, $nama, $content)
    {
        $this->db->set('gallery_name', $nama);
        $this->db->set('gallery_content', $content);
        $this->db->where('gallery_id', $id);
        $this->db->update('tbl_gallery');
    }

    function delete_gallery($gallery_id)
    {
        $this->db->where('gallery_id', $gallery_id);
        $this->db->delete('tbl_gallery');
    }
}
