<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_admin extends CI_Model {

	public function getOrder()
		{
		    $data = $this->db->select('*')->from('tbl_order')->order_by('id_order', 'desc')->get()->result_array();
		    return $data;
		}

	public function deleteOrder($id)
		{
			$this->db->where('id_order', $id);
				$data = $this->db->delete('tbl_order');

				return $data;
		}

	public function getOrderById($id)
	{
		$data = $this->db->select('*')->from('tbl_order')->where('id_order', $id)->get()->row_array();
		
		return $data;

	}

	public function editOrder()
	{
		 $data = [
            'tgl_order' => $this->input->post('tgl_order', true),
            'jenis_kaca' => $this->input->post('jenis_kaca', true),
            'ukuran' => $this->input->post('ukuran', true),
            'ketebalan' => $this->input->post('ketebalan', true),
            'qty' => $this->input->post('qty', true),
            'harga' => $this->input->post('harga', true),
            'keterangan' => $this->input->post('keterangan', true)
        ];

        

        $this->db->where('id_order',$this->input->post('id_order'));
        return $this->db->update('tbl_order', $data);
	}

	public function hitungPenjualan()
	{
		$rayben = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='rayben'";
		$polos = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='polos'";
		$cermin = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='cermin'";
		$es = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='es'";
		$black = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='black'";

		$data['rayben'] = $this->db->query($rayben)->row_array();
		$data['polos'] = $this->db->query($polos)->row_array();
		$data['cermin'] = $this->db->query($cermin)->row_array();
		$data['es'] = $this->db->query($es)->row_array();
		$data['black'] = $this->db->query($black)->row_array();

		return $data;
	}

	public function hitungDetail()
	{
		$rayben3 = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='rayben' AND ketebalan='3mm'";
		$rayben4 = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='rayben' AND ketebalan='4mm'";
		$rayben5 = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='rayben' AND ketebalan='5mm'";
		$rayben6 = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='rayben' AND ketebalan='6mm'";
		$rayben8 = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='rayben' AND ketebalan='8mm'";
		$rayben10 = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='rayben' AND ketebalan='10mm'";

		$polos3 = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='polos' AND ketebalan='3mm'";
		$polos4 = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='polos' AND ketebalan='4mm'";
		$polos5 = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='polos' AND ketebalan='5mm'";
		$polos6 = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='polos' AND ketebalan='6mm'";
		$polos8 = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='polos' AND ketebalan='8mm'";
		$polos10 = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='polos' AND ketebalan='10mm'";

		$cermin3 = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='cermin' AND ketebalan='3mm'";
		$cermin4 = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='cermin' AND ketebalan='4mm'";
		$cermin5 = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='cermin' AND ketebalan='5mm'";
		$cermin6 = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='cermin' AND ketebalan='6mm'";
		$cermin8 = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='cermin' AND ketebalan='8mm'";
		$cermin10 = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='cermin' AND ketebalan='10mm'";

		$black3 = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='black' AND ketebalan='3mm'";
		$black4 = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='black' AND ketebalan='4mm'";
		$black5 = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='black' AND ketebalan='5mm'";
		$black6 = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='black' AND ketebalan='6mm'";
		$black8 = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='black' AND ketebalan='8mm'";
		$black10 = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='black' AND ketebalan='10mm'";

		$es3 = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='es' AND ketebalan='3mm'";
		$es4 = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='es' AND ketebalan='4mm'";
		$es5 = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='es' AND ketebalan='5mm'";
		$es6 = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='es' AND ketebalan='6mm'";
		$es8 = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='es' AND ketebalan='8mm'";
		$es10 = "SELECT SUM(qty) AS qty FROM tbl_order WHERE jenis_kaca='es' AND ketebalan='10mm'";

		$data['rayben3'] = $this->db->query($rayben3)->row_array();
		$data['rayben4'] = $this->db->query($rayben4)->row_array();
		$data['rayben5'] = $this->db->query($rayben5)->row_array();
		$data['rayben6'] = $this->db->query($rayben6)->row_array();
		$data['rayben8'] = $this->db->query($rayben8)->row_array();
		$data['rayben10'] = $this->db->query($rayben10)->row_array();

		$data['polos3'] = $this->db->query($polos3)->row_array();
		$data['polos4'] = $this->db->query($polos4)->row_array();
		$data['polos5'] = $this->db->query($polos5)->row_array();
		$data['polos6'] = $this->db->query($polos6)->row_array();
		$data['polos8'] = $this->db->query($polos8)->row_array();
		$data['polos10'] = $this->db->query($polos10)->row_array();

		$data['cermin3'] = $this->db->query($cermin3)->row_array();
		$data['cermin4'] = $this->db->query($cermin4)->row_array();
		$data['cermin5'] = $this->db->query($cermin5)->row_array();
		$data['cermin6'] = $this->db->query($cermin6)->row_array();
		$data['cermin8'] = $this->db->query($cermin8)->row_array();
		$data['cermin10'] = $this->db->query($cermin10)->row_array();

		$data['black3'] = $this->db->query($black3)->row_array();
		$data['black4'] = $this->db->query($black4)->row_array();
		$data['black5'] = $this->db->query($black5)->row_array();
		$data['black6'] = $this->db->query($black6)->row_array();
		$data['black8'] = $this->db->query($black8)->row_array();
		$data['black10'] = $this->db->query($black10)->row_array();

		$data['es3'] = $this->db->query($es3)->row_array();
		$data['es4'] = $this->db->query($es4)->row_array();
		$data['es5'] = $this->db->query($es5)->row_array();
		$data['es6'] = $this->db->query($es6)->row_array();
		$data['es8'] = $this->db->query($es8)->row_array();
		$data['es10'] = $this->db->query($es10)->row_array();

		return $data;

	}









}