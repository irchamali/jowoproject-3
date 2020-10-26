<?php

class Gallery extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged') != TRUE) {
            $url = base_url('administrator');
            redirect($url);
        };
        $this->load->model('backend/Gallery_model', 'gallery_model');
        $this->load->library('upload');
        $this->load->helper('text');
    }

    function index()
    {
        $x['data'] = $this->gallery_model->get_gallery();
        $this->load->view('backend/v_gallery', $x);
    }

    function insert()
    {
        $nama = htmlspecialchars($this->input->post('nama', TRUE), ENT_QUOTES);
        $content = htmlspecialchars($this->input->post('content', TRUE), ENT_QUOTES);

        $config['upload_path'] = './assets/images'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '100%';
                $config['width'] = 300;
                $config['height'] = 200;
                $config['new_image'] = './assets/images/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $gambar = $gbr['file_name'];
                $this->gallery_model->insert_gallery($nama, $content, $gambar);
                echo $this->session->set_flashdata('msg', 'success');
                redirect('backend/gallery');
            } else {
                echo $this->session->set_flashdata('msg', 'error-img');
                redirect('backend/gallery');
            }
        }
    }

    function update()
    {
        $id = htmlspecialchars($this->input->post('gallery_id', TRUE), ENT_QUOTES);
        $nama = htmlspecialchars($this->input->post('nama', TRUE), ENT_QUOTES);
        $content = htmlspecialchars($this->input->post('content', TRUE), ENT_QUOTES);

        $config['upload_path'] = './assets/images'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '100%';
                $config['width'] = 300;
                $config['height'] = 200;
                $config['new_image'] = './assets/images/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $gambar = $gbr['file_name'];
                $this->gallery_model->update_gallery($id, $nama, $content, $gambar);
                echo $this->session->set_flashdata('msg', 'info');
                redirect('backend/gallery');
            } else {
                echo $this->session->set_flashdata('msg', 'error-img');
                redirect('backend/gallery');
            }
        } else {
            $this->gallery_model->update_gallery_noimg($id, $nama, $content);
            echo $this->session->set_flashdata('msg', 'info');
            redirect('backend/gallery');
        }
    }


    function delete()
    {
        $gallery_id = $this->input->post('kode', TRUE);
        $this->gallery_model->delete_gallery($gallery_id);
        echo $this->session->set_flashdata('msg', 'success-hapus');
        redirect('backend/gallery');
    }
}
