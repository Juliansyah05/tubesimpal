<?php
Class M_Pemasukan extends CI_Model
{
 function insert_pemasukan($data, $table)
 {
   $this -> db -> insert($table, $data);
 }

 function view_data(){
   return $this->db->get('t_pemasukaninstitusi');
 }

 function edit_data($where, $table){
    return $this->db->get_where($table, $where);
 }

 function update_data($where, $data, $table){
    $this->db->where($where);
    $this->db->update($table, $data);
 }

 function hapus_data($where, $table){
   $this->db->where($where);
   $this->db->delete($table);
 }
}
?>
