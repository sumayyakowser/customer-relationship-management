<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**

    +-+-+-+-+ +-+-+-+-+-+
    |S|E|G|I| |M|i|D|a|e|
    +-+-+-+-+ +-+-+-+-+-+

 * Customer Relationship Management [CRM]
 *
 * http://www.segimidae.net
 *
 * PHP version 5
 *
 * @category   controllers
 * @package    files.php
 * @author     Nizam <nizam@segimidae.net>
 * @author     Norlihazmey <norlihazmey@segimidae.net>
 * @license    https://ellislab.com/codeigniter/user-guide/license.html
 * @copyright  2014 SEGI MiDae
 * @version    0.4.1
*/

class Files extends MY_Controller {

    public function access_map(){
        return array(
            'index'=>'view',
            'update'=>'edit'
        );
    }

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function index()
    {
        $crud = new grocery_CRUD();
        $state = $crud->getState();
        $crud->set_theme('datatables');
        $crud->set_table('files');
        $crud->set_subject('Files');
        $crud->display_as('file_name','File name')
             ->display_as('file_content', 'File')
             ->display_as('last_update','Date Changes');
        $crud->set_field_upload('file_content','assets/uploads/files');
        $crud->unset_print();

        if($state == "add" | $state == "edit"){
        $crud->fields('file_name','file_content');
        $crud->callback_before_insert(array($this,'_last_update'));
        $output = $crud->render();
        //$output = array_merge($data,(array)$output);
        $this->load->view('cruds.php',$output);
        }elseif ($state == "read") {
        $crud->fields('file_name','file_content','last_update');
        $crud->callback_before_insert(array($this,'_last_update'));
        $output = $crud->render();
        //$output = array_merge($data,(array)$output);
        $this->load->view('cruds.php',$output);
        }
        else{
        $crud->columns('file_name','file_content');

        $crud->set_rules('file_name','File Name', 'required');
        $crud->set_rules('file_content','File Content', 'required');

        $output = $crud->render();
        //$output = array_merge($data,(array)$output);
        $this->load->view('cruds.php',$output);
        }

    }

}

/* End of file files.php */
/* Location: ./application/controllers/files.php */