<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Vehicule_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get vehicule by vehicule_id
     */
    function get_vehicule($vehicule_id)
    {
        return $this->db->get_where('tb_dgi_vehicules',array('vehicule_id'=>$vehicule_id))->row_array();
    }
    
    /*
     * Get all vehicules count
     */
    function get_all_vehicules_count()
    {
        $this->db->from('tb_dgi_vehicules');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all vehicules
     */
    function get_all_vehicules($params = array())
    {
        $this->db->order_by('vehicule_id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('tb_dgi_vehicules')->result_array();
    }
        
    /*
     * function to add new vehicule
     */
    function add_vehicule($params)
    {
        $this->db->insert('tb_dgi_vehicules',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update vehicule
     */
    function update_vehicule($vehicule_id,$params)
    {
        $this->db->where('vehicule_id',$vehicule_id);
        return $this->db->update('tb_dgi_vehicules',$params);
    }
    
    /*
     * function to delete vehicule
     */
    function delete_vehicule($vehicule_id)
    {
        return $this->db->delete('tb_dgi_vehicules',array('vehicule_id'=>$vehicule_id));
    }
}