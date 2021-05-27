<?php
    class Admin extends CI_Controller {
        public function __construct(){
            // Initialise and construct controller, libraries and model
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->library('session');
            $this->load->model('My_model');
        }

        public function index(){
            // Display the Admin page
            $data['content_page']='dashboard';
            $data['rooms']=$this->My_model->rooms();
            $data['bookings']=$this->My_model->bookings();
            $data['tenants']=$this->My_model->tenants();
            $this->load->view("index",$data);
        }

        public function rooms(){
            // Display the Rooms Manager page
            $data['content_page']='rooms';
            $data['rooms']=$this->My_model->rooms();
            $this->load->view("index",$data);
        }

        public function bookings(){
            // Display the Bookings Manager page
            $data['content_page']='bookings';
            $data['bookings']=$this->My_model->bookings();
            $this->load->view("index",$data);
        }

        public function tenants(){
            // Display the Tenants Manager page
            $data['content_page']='tenants';
            $data['tenants']=$this->My_model->tenants();
            $this->load->view("index",$data);
        }

        public function check_in(){
            // Display the Check In page
            $data['content_page']="check_in";
            $this->load->view("index",$data);
        }

        public function check_in_tenants($id){
            // Display the Check In Tenant into Rooms page
            $data['room_number']=$this->My_model->get_roomnumber();
            $data['rooms_data']=$this->My_model->edit_rooms($id);
            $data['tenants_data']=$this->My_model->edit_tenants($id);
            $data['content_page']="check_into_rooms";
            $this->load->view("index",$data);
        }

        public function check_in_data(){
            // Function to check in Tenant data
            $tenant_data = array('tenant_name'  => $this->input->post('tenant_name'),
                                'phone_no'      => $this->input->post('phone_no'),
                                'email'         => $this->input->post('email'),
                                'address'       => $this->input->post('address'),
                                'nationality'   => $this->input->post('nationality'),
                                'checkin_date'  => date('Y-m-d'),
                                'member_status' => "Checking In");
            $checkin_tenant = $this->My_model->checkin_tenant($tenant_data);
            $data['content_page']="dashboard";
            $this->load->view("index",$data);
            redirect(base_url() . 'Admin');
        }

        public function check_in_rooms($id){
            // Function to check in Tenants into Rooms
            $room_data = array('tenant_name' => $this->input->post('tenant_name'),
                                'room_no'    => $this->input->post('room_no'),
                                'status'     => "Occupied");
            $tenant_data = array('member_status' => "Active",
                                'payment_status' => "Paid");
            $checkin_room = $this->My_model->checkin_room($id, $room_data);
            $checkin_tenant = $this->My_model->update_tenants($id, $tenant_data);
            $data['content_page']="dashboard";
            $this->load->view("index",$data);
            redirect(base_url() . 'Admin');
        }

        public function edit_rooms($id){
            // Display the Room Editor page
            $data['content_page']="room_editor";
            $data['rooms_data']=$this->My_model->edit_rooms($id);
            $this->load->view("index",$data);
        }

        public function update_rooms($id){
            // Function to update Room data
            $room_data = array('tenant_name' => $this->input->post('tenant_name'),
                            'status' => "Occupied");
            $update_room = $this->My_model->update_rooms($id, $room_data);
            $data['content_page']="rooms";
            $this->load->view("index",$data);
            redirect(base_url() . 'Admin');
        }

        public function clear_rooms($id){
            // Function to clear Room data
            $tenant_data = array('member_status' => "Left");
            $clear_tenant = $this->My_model->clear_tenants($id, $tenant_data);
            $room_data = array('tenant_name' => "",
                            'status' => "Empty");
            $clear_room = $this->My_model->clear_rooms($id, $room_data);
            $data['content_page']="rooms";
            $this->load->view("index",$data);
            redirect(base_url() . 'Admin');
        }

        public function add_bookings(){
            // Display the Add Booking Data page
            $data['content_page']="add_booking";
            $this->load->view("index",$data);
        }

        public function insert_bookings(){
            // Function to insert Booking data
            $booking_data = array('booking_name' => $this->input->post('booking_name'),
                                'phone_no'       => $this->input->post('phone_no'),
                                'email'          => $this->input->post('email'),
                                'checkin_date'   => date('Y-m-d'),
                                'stay_duration'  => $this->input->post('stay_duration'),
                                'status'         => "Received");
            $insert_bookings = $this->My_model->add_bookings($booking_data);
            $data['content_page']="bookings";
            $this->load->view("index",$data);
            redirect(base_url() . 'Admin');
        }

        public function edit_bookings($id){
            // Display the Booking Editor page
            $data['content_page']="booking_editor";
            $data['booking_data']=$this->My_model->edit_bookings($id);
            $this->load->view("index",$data);
        }

        public function accept_booking($id){
            // Function to Accept the Booking data
            $booking_data = array('status' => "Accepted");
            $accept_booking = $this->My_model->accept_bookings($id, $booking_data);
            $data['content_page']="bookings";
            $this->load->view("index",$data);
            redirect(base_url() . 'Admin');
        }

        public function reject_booking($id){
            // Function to Reject the Booking data
            $booking_data = array('status' => "Rejected");
            $accept_booking = $this->My_model->reject_bookings($id, $booking_data);
            $data['content_page']="bookings";
            $this->load->view("index",$data);
            redirect(base_url() . 'Admin');
        }

        public function delete_bookings($id){
            // Function to delete Booking data
            $data['content_page']='bookings';
            $data['booking_data']=$this->My_model->delete_bookings($id);
            $this->load->view("index",$data);
            redirect(base_url() . 'Admin');
        }

        public function edit_tenants($id){
            // Display the Tenant Editor page
            $data['content_page']="tenant_editor";
            $data['tenants_data']=$this->My_model->edit_tenants($id);
            $this->load->view("index",$data);
        }

        public function delete_tenants($id){
            // Function to delete Tenant data
            $data['content_page']='tenants';
            $data['tenants_data']=$this->My_model->delete_tenants($id);
            $this->load->view("index",$data);
            redirect(base_url() . 'Admin');
        }

        public function export_rooms(){
            $data['rooms']=$this->My_model->rooms();
            $this->load->view("export/export_rooms",$data);
        }

        public function export_bookings(){
            $data['bookings']=$this->My_model->bookings();
            $this->load->view("export/export_bookings",$data);
        }

        public function export_tenants(){
            $data['tenants']=$this->My_model->tenants();
            $this->load->view("export/export_tenants",$data);
        }

    }