<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Fiche extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Fiche_model');
    } 

    /*
     * Listing of fiches
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('fiche/index?');
        $config['total_rows'] = $this->Fiche_model->get_all_fiches_count();
        $this->pagination->initialize($config);

        $data['fiches'] = $this->Fiche_model->get_all_fiches($params);
        
        $data['_view'] = 'fiche/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new fiche
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $current_time=date('Y-m-d H:i:s');
            $params = array(
				'plaque_vehicule_sid' => $this->input->post('plaque_vehicule_sid'),
				'statut_declaration' => $this->input->post('statut_declaration'),
				'numero_fiche' => $this->input->post('numero_fiche'),
				'date_creation' =>  $current_time,
				'nombre_kilometrage' => $this->input->post('nombre_kilometrage'),
				'date_entree_vehicule' => $this->input->post('date_entree_vehicule'),
				'observation' => $this->input->post('observation'),
            );
            
            $fiche_id = $this->Fiche_model->add_fiche($params);
            redirect('fiche/index');
        }
        else
        {
			$this->load->model('Vehicule_model');
			$data['all_vehicules'] = $this->Vehicule_model->get_all_vehicules();
            
            $data['_view'] = 'fiche/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a fiche
     */
    function edit($fiche_id)
    {   
        // check if the fiche exists before trying to edit it
        $data['fiche'] = $this->Fiche_model->get_fiche($fiche_id);
        
        if(isset($data['fiche']['fiche_id']))
        {
             $current_time=date('Y-m-d H:i:s');
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'plaque_vehicule_sid' => $this->input->post('plaque_vehicule_sid'),
					'statut_declaration' => $this->input->post('statut_declaration'),
					'numero_fiche' => $this->input->post('numero_fiche'),
				
					'date_validation' =>$current_time,
					'nombre_kilometrage' => $this->input->post('nombre_kilometrage'),
					'date_entree_vehicule' => $this->input->post('date_entree_vehicule'),
					'observation' => $this->input->post('observation'),
                );

                $this->Fiche_model->update_fiche($fiche_id,$params);            
                redirect('fiche/index');
            }
            else
            {
				$this->load->model('Vehicule_model');
				$data['all_vehicules'] = $this->Vehicule_model->get_all_vehicules();

                $data['_view'] = 'fiche/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The fiche you are trying to edit does not exist.');
    } 

    /*
     * Deleting fiche
     */
    function remove($fiche_id)
    {
        $fiche = $this->Fiche_model->get_fiche($fiche_id);

        // check if the fiche exists before trying to delete it
        if(isset($fiche['fiche_id']))
        {
            $this->Fiche_model->delete_fiche($fiche_id);
            redirect('fiche/index');
        }
        else
            show_error('The fiche you are trying to delete does not exist.');
    }
    
}
