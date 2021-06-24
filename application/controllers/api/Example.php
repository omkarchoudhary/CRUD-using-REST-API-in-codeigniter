<?php (defined('BASEPATH')) or exit('No direct script access allowed');

/* load the REST_Controller class */
require APPPATH . "/libraries/REST_Controller.php";

class Example extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('loginmodel');
    }

    public function user_get($id = 0)
    {
        $users = $this->loginmodel->getRows($id);
        if (!empty($users)) {
            $this->response($users, REST_Controller::HTTP_OK);
        } else {
            $this->response(['status' => FALSE, 'mesage' => 'No user found.'], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function user_post()
    {
        $users = $this->input->post();
        // echo "<pre>";print_r($users);exit;
        if (!empty($users)) {
            $affected_rows = $this->db->insert('users', $users);
            if (!empty($affected_rows)) {
                $this->response(['User created successfully.'], REST_Controller::HTTP_OK);
            } else {
                $this->response(['status' => FALSE, 'mesage' => 'No user found.'], REST_Controller::HTTP_NOT_FOUND);
            }
        }
    }

    public function user_put($id = 0)
    {
        $input = $this->put();
        if (!empty($input)) {
            $this->db->update('users', $input, ['id' => $input['id']]);
            //  echo "<pre>";print_r($this->db->last_query());exit;
            $this->response(['User updated successfully.'], REST_Controller::HTTP_OK);
        }
    }

    public function user_delete($id = 0)
    {
        $this->db->delete('users', ['id' => $id]);
        $this->response(['User deleted successfully.'], REST_Controller::HTTP_OK);
    }
}
