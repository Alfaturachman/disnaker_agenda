<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Arsip extends CI_Controller
{
    public function index()
    {
        $this->load->model('Agenda_model');
        $data['arsip'] = $this->Agenda_model->get_archived_agendas();

        $this->load->view('frontend/partials/header');
        $this->load->view('frontend/pages/arsip', $data);
        $this->load->view('frontend/partials/footer');
    }
}
