<?php
    class My_model extends CI_Model{
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function checklogin($username, $password){
            $this->db->from('login');
            $this->db->where('username',$username);
            $this->db->where('password',$password);
            return $this->db->get()->num_rows();
        }

        public function rooms(){
            $this->db->select('*');
            $this->db->from('rooms');
            return $this->db->get()->result_array();
        }

        public function get_roomnumber(){
            $status="Empty";
            $this->db->select('room_no');
            $this->db->from('rooms');
            $this->db->where('status',$status);
            return $this->db->get()->result_array();
        }

        public function save_roomnumber($data){
			$this->db->insert('rooms',$data);
			$id_data = $this->db->insert_id();
			return (isset($id_data)) ? $id_data : FALSE;
		}

		public function checkin_room($id, $data){
            $this->db->join('tenants', 'tenants.id = rooms.id');
            $this->db->where('rooms.id', $id);
			$this->db->update('rooms', $data);
		}

        public function checkin_tenant($data){
            $this->db->insert('tenants',$data);
        }

        public function edit_rooms($id){
            $this->db->select('*');
            $this->db->from('rooms');
            $this->db->where('id',$id);
            return $this->db->get()->row_array();
        }

        public function update_rooms($id, $data){
            $this->db->where('id',$id);
            $this->db->update('rooms',$data);
        }

        public function clear_rooms($id, $data){
            $this->db->where('id',$id);
            $this->db->update('rooms',$data);
        }

        public function clear_tenants($id, $data){
            $this->db->where('id',$id);
            $this->db->update('tenants',$data);
        }

        public function bookings(){
            $this->db->select('*');
            $this->db->from('bookings');
            return $this->db->get()->result_array();
        }

        public function add_bookings($data){
            $this->db->insert('bookings',$data);
        }

        public function edit_bookings($id){
            $this->db->select('*');
            $this->db->from('bookings');
            $this->db->where('id',$id);
            return $this->db->get()->row_array();
        }

        public function accept_bookings($id, $data){
            $this->db->where('id',$id);
            $this->db->update('bookings',$data);
        }

        public function reject_bookings($id, $data){
            $this->db->where('id',$id);
            $this->db->update('bookings',$data);
        }

        public function delete_bookings($id){
            $this->db->where('id',$id);
            $this->db->delete('bookings');
        }

        public function tenants(){
            $this->db->select('*');
            $this->db->from('tenants');
            return $this->db->get()->result_array();
        }

        public function edit_tenants($id){
            $this->db->select('*');
            $this->db->from('tenants');
            $this->db->where('id',$id);
            return $this->db->get()->row_array();
        }

        public function update_tenants($id, $data){
            $this->db->where('id',$id);
            $this->db->update('tenants',$data);
        }

        public function delete_tenants($id){
            $this->db->where('id',$id);
            $this->db->delete('tenants');
        }

    }