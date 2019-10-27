<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Admin extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
    }


	public function index()
	{
		$data['title'] = 'Administrator';


		$this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('menu/dashboard');
    $this->load->view('templates/footer');
	}

	public function dashboard()
	{
		$data['title'] = 'Administrator';
		$data['data'] = $this->m_admin->hitungPenjualan();
		$data['detail'] = $this->m_admin->hitungDetail();

		// echo json_encode($data);
		// die();
		$this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('menu/dashboard', $data);
    $this->load->view('templates/footer');
	}

	public function dataOrder()
	{
		$data['title'] = 'Data Order';

		$data['data'] = $this->m_admin->getOrder(); 

		

			$this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('menu/data-order', $data);
      $this->load->view('templates/footer');
	}

	public function tambahOrder()
	{
		$data['title'] = 'Tambah Order';

		$this->form_validation->set_rules('ukuran', 'ukuran', 'required|trim');
		$this->form_validation->set_rules('qty', 'quantity', 'required|trim');
		$this->form_validation->set_rules('harga', 'harga', 'required|trim');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required|trim');

		if($this->form_validation->run() == false){
		$this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('menu/tambah-order');
    $this->load->view('templates/footer');
		}else{
			 $data = [
            'tgl_order' => $this->input->post('tgl_order', true),
            'jenis_kaca' => $this->input->post('jenis_kaca', true),
            'ukuran' => $this->input->post('ukuran', true),
            'ketebalan' => $this->input->post('ketebalan', true),
            'qty' => $this->input->post('qty', true),
            'harga' => $this->input->post('harga', true),
            'keterangan' => $this->input->post('keterangan', true)
        ];

        $result = $this->db->insert('tbl_order', $data);
        if ($result > 0) {
                $this->session->set_flashdata('message', 'Berhasil Disimpan');
            } else {
                $this->session->set_flashdata('message', 'Tidak Berhasil Disimpan');
            }
            redirect('admin/dataOrder');

		}
}

		public function deleteOrder()
		{
			$id = $this->uri->segment(3);

        $result = $this->m_admin->deleteOrder($id);


       if ($result > 0) {
            $this->session->set_flashdata('message', 'Berhasil Dihapus');
            // $this->session->set_flashdata('show', 'tampil data edit');
            } else {
                $this->session->set_flashdata('message', 'Tidak Berhasil Dihapus');
            }
            redirect('admin/dataOrder');
		}

		public function editOrder()
		{
			$id = $this->uri->segment(3);
			$data['title'] = 'Edit Order';
			$data['data'] = $this->m_admin->getOrderById($id);	

			$this->form_validation->set_rules('ukuran', 'ukuran', 'required|trim');
			$this->form_validation->set_rules('qty', 'quantity', 'required|trim');
			$this->form_validation->set_rules('harga', 'harga', 'required|trim');
			$this->form_validation->set_rules('keterangan', 'keterangan', 'required|trim');

			if($this->form_validation->run() == false){
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
      $this->load->view('menu/edit-order');
      $this->load->view('templates/footer');
			}else{
				$result = $this->m_admin->editOrder();
				if ($result > 0) {
                $this->session->set_flashdata('message', 'Berhasil Diedit');
            } else {
                $this->session->set_flashdata('message', 'Tidak Berhasil Diedit');
            }
            redirect('admin/dataOrder');
			}
		
		}

	public function detailOrder()
	{
		$id = $this->uri->segment(3);
		$data['title'] = 'Detail Order';
		$data['data'] = $this->m_admin->getOrderById($id);	

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
    $this->load->view('menu/detail-order');
    $this->load->view('templates/footer');
	}

	public function export()
	{
		$data['data'] = $this->m_admin->getOrder(); 
		$this->load->view('menu/export-excel', $data);
	}

	public function exportDetail()
	{
		$data['data'] = $this->m_admin->hitungPenjualan();
		$data['detail'] = $this->m_admin->hitungDetail();
		$this->load->view('menu/export-detail-excel', $data);
	}









}