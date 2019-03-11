<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** 
*  edit_column callback function in Codeigniter (Ignited Datatables)
*
* Grabs a value from the edit_column field for the specified field so you can
* return the desired value.  
*
* @access   public
* @return   mixed
*/

if(!function_exists('user_buttons'))
{
    function format_price($price)
    {
        return 'Rp. ' . number_format($price, 0, '', '.');
    }

    function check_empty($data)
    {
    	if(!empty($data)){
    		return $data;
    	}
    	else{
    		return 'Tidak ada';
    	}
    }

    function user_buttons($id, $current_id, $group, $where)
    {
		if($where == 'user'){
	        $action = '<a href="'.base_url('pengguna/edit_pengguna/'.$id).'" class="btn btn-blue btn-sm btn-icon icon-left"><i class="entypo-pencil"></i>Edit</a> ';
	        if($id != $current_id || $group != 'admin'){
				$action .= '<a href="#" class="btn btn-danger btn-sm btn-icon icon-left delete-trigger" data-href="'.base_url('pengguna/hapus_pengguna/'.$id).'" data-toggle="modal" data-target="#confirm-delete"><i class="entypo-cancel"></i>Hapus</a>';
			}
		}
		else if($where == 'group'){
			if($group != 'admin'){
				$action = '<a href="'.base_url('pengguna/edit_group/'.$id).'" class="btn btn-blue btn-sm btn-icon icon-left"><i class="entypo-pencil"></i>Edit</a> ';
				$action .= '<a href="#" class="btn btn-danger btn-sm btn-icon icon-left delete-trigger" data-href="'.base_url('pengguna/hapus_group/'.$id).'" data-toggle="modal" data-target="#confirm-delete"><i class="entypo-cancel"></i>Hapus</a>';
			}
			else{
				$action = '';
			}
		}

        return $action;
    }

    function gudang_buttons($id)
    {
        $action = '<button class="btn btn-blue btn-sm btn-edit" data-load-remote="'.base_url('gudang/modal_global/list_gudang/'.$id).'" data-toggle="modal" data-target="#modal_global" title="Edit"><i class="entypo-pencil"></i></button>&nbsp;';
        $action .= '<button class="btn btn-danger btn-sm delete-trigger" data-href="'.base_url('gudang/hapus/'.$id).'" data-toggle="modal" data-target="#confirm-delete" title="Hapus"><i class="entypo-cancel"></i></button>';
        return $action;
    }

    function produk_bahan_buttons($id)
    {
        $action = '<a class="btn btn-blue btn-sm btn-edit" href="'.base_url('produk_bahan/edit/'.$id).'" title="Edit"><i class="entypo-pencil"></i></a>&nbsp;';
        $action .= '<button class="btn btn-danger btn-sm delete-trigger" data-href="'.base_url('produk_bahan/hapus/'.$id).'" data-toggle="modal" data-target="#confirm-delete" title="Hapus"><i class="entypo-cancel"></i></button>';
        return $action;
    }

    function tipe_barang($tipe)
    {
        if ($tipe == 'produk') {
            $result = '<div class="label label-success">Produk Jadi</div>';
        }
        else{
            $result = '<div class="label label-danger">Bahan Baku</div>';
        }
        return $result;
    }

    function get_stok($id)
    {
        $CI =& get_instance();
        return $CI->calculation_model->get_stok('single', $id);
    }
}

/* End of file Datatable_helper.php */
/* Location: ./application/helpers/Datatable_helper.php */  