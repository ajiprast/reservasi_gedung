<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	public function __construct(){


		parent::__construct();

	}


	public function index(){
		$data['nav'] ='home';
		$this->session->set_userdata(['nama' => '']);
		$data['diskon'] = $this->db->query("SELECT * FROM DISKON order by diskon desc limit 1")->row_array();
		$data['gedung'] = $this->db->query("SELECT * FROM gedung")->result();
		$data['testi'] = $this->db->query("SELECT * from testimoni t join pelanggan p on p.id_pelanggan = t.id_pelanggan join gedung g on g.id_gedung = p.id_gedung order by id_testimoni desc limit 8")->result();
		$this->load->view('user/template/header',$data);
		$this->load->view('user/depan',$data);
		$this->load->view('user/template/footer');
	}

	public function fasilitas(){
		$data['nav'] ='fasilitas';
		$this->load->view('user/template/header',$data);
		$this->load->view('user/fasilitas');
		$this->load->view('user/template/footer');
	}

	public function paket(){
		$data['nav'] ='promo';
		$data['diskon'] = $this->db->query("SELECT * FROM DISKON order by diskon desc")->result();
		$this->load->view('user/template/header',$data);
		$this->load->view('user/paket',$data);
		$this->load->view('user/template/footer');
	}

	public function sewa($id){
		$data['nav'] ='home';
		$que = $this->db->query("SELECT id_pelanggan from pelanggan order by id_pelanggan desc limit 1");

		if($que->num_rows() > 0){
			$dt = $que->row_array();

			$kode=intval($dt['id_pelanggan'])+1;
		}else{
			$kode = 1;
		}

		$kode_max = str_pad($kode,6,"0",STR_PAD_LEFT);
		$kode_jadi = "PW".$kode_max;

		$data['kode'] = $kode_jadi;

		if($id == 0){
			$data['harga'] = $this->db->query("SELECT * FROM gedung limit 1")->row_array();
		}else{
			$data['harga'] = $this->db->query("SELECT * FROM gedung where id_gedung = $id")->row_array();
		}
		$data['diskon'] = $this->db->query('SELECT * FROM DISKON')->result();
		$data['harga1'] = $this->db->query("SELECT * FROM gedung")->result();
		$data['gedung_id'] = $id;
		$this->load->view('user/template/header',$data);
		$this->load->view('user/reservasi',$data);
		$this->load->view('user/template/footer');
	}

	public function bayar(){
		$data['nav'] ='home';
		$lama_reservasi = $this->input->post('lama_reservasi');

		$id_gedung = $this->input->post('id_gedung');

		$output = '';
		$bayar = 0;

		$query = $this->db->query("SELECT * FROM DISKON WHERE HARI <= $lama_reservasi ORDER BY HARI desc LIMIT 1")->row_array();
		$query1 = $this->db->query("SELECT * FROM gedung WHERE ID_GEDUNG = $id_gedung")->row_array();

		$diskon = $query1['harga_reservasi'] * $lama_reservasi * $query['diskon'] / 100;
		$tbayar =$query1['harga_reservasi'] * $lama_reservasi;

		$totbayar =  number_format($tbayar,0,'.','.');

		$bayar = $tbayar - $diskon;

		$bayarTampil = number_format($bayar,0,'.','.');

		$output = array('diskon' => $query['diskon'],
			'bayar' => $bayar,
			'totBayar' =>$totbayar,
			'bayarTampil' => $bayarTampil,
			'id_diskon' => $query['id_diskon']
		);
		echo json_encode($output);
	}

	public function simpanSewa(){

		$nama_pelanggan = $this->input->post('nama');
		$nomor_reservasi = $this->input->post('nomor_reservasi');
		$nik = $this->input->post('nik');
		$tgl_mulai = $this->input->post('tgl_mulai');
		$tgl_akhir = $this->input->post('tgl_akhir');
		$lama_reservasi = $this->input->post('lama_reservasi1');
		$keterangan = $this->input->post('keterangan');
		$id_gedung = $this->input->post('gedung');
		$no_hp = $this->input->post('telepon');
		$bayar = $this->input->post('bayar');

		$tgl1 = new DateTime($tgl_mulai);
		$tgl2 = new DateTime($tgl_akhir);

		$sekarang = Time();

		$tgl3 =  strtotime($tgl_mulai);

		$diff = $tgl3 - $sekarang;

		$perbedaan = floor($diff/(60*60*24));

		// $perbedaan = $tgl1->diff($sekarang)->d;
		if($perbedaan < 0){
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">tanggal sudah kelewat</div>');
			header('location:'.base_url().'user/reservasi/'.$id_gedung);
		}else{

			if($lama_reservasi <= 0){
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">masukan tanggal dengan benar</div>');
				header('location:'.base_url().'user/reservasi/'.$id_gedung);
			}else{

				for ($i=$tgl1; $i <= $tgl2  ; $i->modify('+1 day')) { 
					$tgl = $i->format('Y-m-d');
					$query2 = $this->db->query("SELECT * FROM RESERVASI WHERE tgl_reservasi = '$tgl'");

					if($query2->num_rows() > 0){
						break;
					}
				}

				if($query2->num_rows() > 0){
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gedung sudah ada pelanggan pada tanggal tersebut</div>');
					header('location:'.base_url().'user/reservasi/'.$id_gedung);
				}else{

					$query = $this->db->query("INSERT into pelanggan VALUES(null,'$nomor_reservasi',1,$id_gedung,'$nik','$nama_pelanggan','$tgl_mulai','$tgl_akhir','$bayar','$lama_reservasi','$no_hp','$keterangan',1)");

					if($query){
						$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">pelanggan Berhasil ditambahkan</div>');
						header('location:'.base_url().'user/buktiSewa/'.$nomor_reservasi.'/'.$nik);
					}

				}
			}
		}

	}

	public function buktiSewa($nomor,$nik){
		$data['nav'] ='home';
		$query = $this->db->query("SELECT * from pelanggan p join gedung g on p.id_gedung = g.id_gedung where p.nomor_reservasi = '$nomor' and p.nik = '$nik' and p.status = 1");
		$data['bukti'] = $query->row_array();

		if($query->num_rows() > 0){
			$this->load->view('user/template/header',$data);
			$this->load->view('user/bukti',$data);
			$this->load->view('user/template/footer');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak ditemukan Data</div>');
			header('location:'.base_url().'user/hubungi/');
		}

	}

	public function cetakBukti($nomor){
		$data['bukti'] = $this->db->query("SELECT * from pelanggan p join gedung g on p.id_gedung = g.id_gedung where p.nomor_reservasi = '$nomor'")->row_array();
		$this->load->view('admin/cetakBukti',$data);
	}

	public function jadwal(){
		$data['nav'] ='jadwal';
		$data['tanggal'] = $this->db->query("SELECT *, day(tgl_mulai) as daym, month(tgl_mulai) as monthm, year(tgl_mulai) as yearm, day(tgl_akhir) as days, month(tgl_akhir) as months,year(tgl_akhir) as years FROM pelanggan")->result();
		$this->load->view('user/template/header',$data);
		$this->load->view('user/jadwal',$data);
		$this->load->view('user/template/footer');

	}

	public function hubungi(){
		$data['nav'] ='hubungi';
		$this->load->view('user/template/header',$data);
		$this->load->view('user/hubungi',$data);
		$this->load->view('user/template/footer');
	}

	public function testimoni(){

		$nomor = $this->input->post("nomorTesti");
		$nik = $this->input->post("nikTesti");
		$testi = $this->input->post("testi");

		$query1 = $this->db->query("SELECT * FROM PELANGGAN WHERE NOMOR_RESERVASI = '$nomor' and nik ='$nik' and status = 3");
		$dt = $query1->row_array();
		$id_pelanggan = $dt['id_pelanggan'];
		if($query1->num_rows() > 0){
			$query3 = $this->db->query("SELECT id_testimoni from testimoni where id_pelanggan = $id_pelanggan");

			if($query3->num_rows() > 0){
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">anda sudah memberikan testimoni, silahkan reservasi lagi untuk memberikan testimoni</div>');
				header('location:'.base_url().'user/hubungi/');
			}else{
				$query2 = $this->db->query("INSERT INTO testimoni VALUES(null,'$id_pelanggan','$testi')");
				if($query2){
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">testimoni anda berhasil di tambahkan </div>');
					header('location:'.base_url().'user/hubungi/');
				}else{
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">testimoni anda gagal di tambahkan </div>');
					header('location:'.base_url().'user/hubungi/');
				}
			}
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">anda tidak bisa menambahkan testimoni, harus menyewa gedung terlebih dahulu</div>');
			header('location:'.base_url().'user/hubungi/');
		}
	}
}