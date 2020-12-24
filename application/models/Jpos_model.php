<?php 
use GuzzleHttp\Client;

class Jpos_model extends CI_model {
    private $_client;
    public function __construct(){
        $this->_client = new Client([
            'base_uri' => 'http://localhost/jpos/api/'
        ]);
    }
    public function getAllJpos()
    {
        // return $this->db->get('tulungagung')->result_array();
        $response = $this->_client->request('GET','tulungagung',[
            'query' => [
                'JPOS-KEY' => 'wpu-jpos'
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }


    public function tambahData()
    {
        $data = [
            "kode_pos" => $this->input->post('kode_pos', true),
            "desa" => $this->input->post('desa', true),
            "wilayah" => $this->input->post('wilayah', true),
            'JPOS-KEY' => 'wpu-jpos'
        ];
        // $this->db->insert('tulungagung', $data);
        $response = $this->_client->request('POST','tulungagung',[
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function getId($id)
    {
        // return $this->db->get_where('tulungagung', ['id' => $id])->row_array();
        $response = $this->_client->request('GET','tulungagung',[
            'query' => [
                'JPOS-KEY' => 'wpu-jpos',
                'id' => $id
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'][0];
    }

    public function hapusData($id)
    {
        // $this->db->delete('tulungagung', ['id' => $id]);
        $response = $this->_client->request('DELETE','tulungagung',[
            'form_params' => [
                'JPOS-KEY' => 'wpu-jpos',
                'id' => $id
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
    }

    public function ubahData()
    {
        $data = [
            "kode_pos" => $this->input->post('kode_pos', true),
            "desa" => $this->input->post('desa', true),
            "wilayah" => $this->input->post('wilayah', true),
            "id" => $this->input->post('id', true),
            'JPOS-KEY' => 'wpu-jpos'
        ];
        // $this->db->where('id', $this->input->post('id'));
        // $this->db->update('tulungagung', $data);
        $response = $this->_client->request('PUT','tulungagung',[
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function cariData()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('kode_pos', $keyword);
        $this->db->or_like('desa', $keyword);
        $this->db->or_like('wilayah', $keyword);
        return $this->db->get('tulungagung')->result_array();
    }
}