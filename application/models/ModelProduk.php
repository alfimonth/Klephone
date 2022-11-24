<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelProduk extends CI_Model
{
    public function getProduk()
    {
        return $this->db->get('produk');
    }
    public function getBrand()
    {
        return $this->db->get('brand');
    }

    public function simpanProduk($data = null)
    {

        $this->db->insert('produk', $data);
    }
    public function hapusProduk($where = null)
    {
        $this->db->delete('produk', $where);
    }
    public function joinBrandProduk($select = '*')
    {
        //$this->db->select('buku.id_kategori,kategori.kategori');
        $this->db->select($select);
        $this->db->from('produk');
        $this->db->join('brand', 'brand.id = produk.id_brand');
        return $this->db->get();
    }
    public function joinBrandProdukWhere($where = '*')
    {
        //$this->db->select('buku.id_kategori,kategori.kategori');
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('brand', 'brand.id = produk.id_brand');
        $this->db->where('produk.id=' . $where);
        return $this->db->get();
    }
    public function updateProduk($a, $data = null)
    {
        $this->db->update('produk', $data, $a);
    }
}
