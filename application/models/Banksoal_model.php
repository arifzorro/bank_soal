<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banksoal_model extends MY_Model {

    public $table = 'bank_soal';

    public function __construct() {
        parent::__construct();
    }
    public $fillable = array(
        'id_soal',
        'soal',
        'a',
        'b',
        'c',
        'd',
        'e',
        'tanggal',
        'jenis',
        'pelaksana',
        'insert_by',
        'created_at'
    );


    public function get_all_dt($filter) {
        $this->datatables->select("
            d.id_soal, d.soal, d.a, d.b, d.c, d.d, d.e,
            d.tanggal, d.jenis, d.pelaksana,
        ")
            ->from("$this->table d")
            ->edit_column('tgl_ganti', '$1', "show_date(tgl_ganti)")
            ->add_column('action', '$1', "set_actions(id, data)");

        if (!is_null($filter->from_tgl)) {
            $this->datatables->where("d.tgl_ganti >= '$filter->from_tgl'");
            $this->datatables->where("d.tgl_ganti <= '$filter->to_tgl'");
        }
        //dd($this->datatables->generate());
        return $this->datatables->generate();
    }

}
