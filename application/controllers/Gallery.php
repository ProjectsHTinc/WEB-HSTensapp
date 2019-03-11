<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {


	function __construct() {
		 parent::__construct();


		    $this->load->helper('url');
		    $this->load->library('session');
				$this->load->model('centermodel');




 }



	 	public function home(){
	 		 	$datas=$this->session->userdata();
  	 		$user_id=$this->session->userdata('user_id');
  			$user_type=$this->session->userdata('user_type');
				if($user_type==1){
				 	$datas['res_cat']=$this->centermodel->get_category();
			  $this->load->view('admin/admin_header');
 				$this->load->view('admin/gallery/create_centers',$datas);
 				$this->load->view('admin/admin_footer');
	 		 }
	 		 else{
	 				redirect('/');
	 		 }
	 	}

		public function get_sub_cat_id(){
			$datas=$this->session->userdata();
			$user_id=$this->session->userdata('user_id');
			$user_type=$this->session->userdata('user_type');
			if($user_type==1){
				$cat_id= $this->input->post('id');
				$datas['res_sub_cat']=$this->centermodel->get_sub_category($cat_id);
				echo json_encode($datas['res_sub_cat']);
			}
		}

    public function create_project(){
        $datas=$this->session->userdata();
        $user_id=$this->session->userdata('user_id');
				$user_type=$this->session->userdata('user_type');
				if($user_type==1){
				$project_name= $this->db->escape_str($this->input->post('project_name'));
				$size= $this->db->escape_str($this->input->post('size'));
				$location= $this->db->escape_str($this->input->post('location'));
				$city= $this->db->escape_str($this->input->post('city'));
				$completed= $this->db->escape_str($this->input->post('completed'));
				$cat_id= $this->db->escape_str($this->input->post('cat_id'));

				$sub_cat_id= $this->db->escape_str($this->input->post('sub_cat_id'));
				$status= $this->db->escape_str($this->input->post('status'));
				$profilepic = $_FILES['cover_photo']['name'];
				$temp = pathinfo($profilepic, PATHINFO_EXTENSION);
				$center_logo = round(microtime(true)) . '.' . $temp;
				$uploaddir = 'assets/gallery/';
				$profilepic = $uploaddir.$center_logo;
				move_uploaded_file($_FILES['cover_photo']['tmp_name'], $profilepic);
				$datas=$this->centermodel->create_project($project_name,$location,$city,$completed,$cat_id,$sub_cat_id,$status,$center_logo,$size);
				if($datas['status']=="success"){
					if($cat_id=='1'){
						$this->session->set_flashdata('msg', 'Created Successfully');
						redirect('gallery/view_architecture');
					}else{
						$this->session->set_flashdata('msg', 'Created Successfully');
						redirect('gallery/view_interiors');
					}

				}else{
					$this->session->set_flashdata('msg', $datas['status']);
					redirect('gallery/home');
				}
       }
       else{
          redirect('/');
       }
    }



		public function view_architecture(){
	 		 	$datas=$this->session->userdata();
  	 		$user_id=$this->session->userdata('user_id');
  			$user_type=$this->session->userdata('user_type');
				if($user_type==1){
			 	$datas['result']=$this->centermodel->view_architecture();
			  $this->load->view('admin/admin_header');
 				$this->load->view('admin/gallery/view_architecture',$datas);
 				$this->load->view('admin/admin_footer');
	 		 }
	 		 else{
	 				redirect('/');
	 		 }
	 	}
		public function view_interiors(){
				$datas=$this->session->userdata();
				$user_id=$this->session->userdata('user_id');
				$user_type=$this->session->userdata('user_type');
				if($user_type==1){
				$datas['result']=$this->centermodel->view_interiors();
				$this->load->view('admin/admin_header');
				$this->load->view('admin/gallery/view_interiors',$datas);
				$this->load->view('admin/admin_footer');
			 }
			 else{
					redirect('/');
			 }
		}

		public function videos(){
				$datas=$this->session->userdata();
				$user_id=$this->session->userdata('user_id');
				$user_type=$this->session->userdata('user_type');
				if($user_type==3){
				$center_id=$this->input->post('center_id');
				$video_link= $this->db->escape_str($this->input->post('video_link'));
				$video_title= $this->db->escape_str($this->input->post('video_title'));
				$datas=$this->centermodel->add_video_link($center_id,$video_title,$video_link,$user_id);
				if($datas['status']=="success"){
					$this->session->set_flashdata('msg', 'Added Successfully');
				redirect('center/create_videos/'.$center_id.'');
				}else{
					$this->session->set_flashdata('msg', 'Failed to Add');
				redirect('center/create_videos/'.$center_id.'');
				}
			 }
			 else{
					redirect('/');
			 }
		}

		public function get_project_id_details($center_id){
			$datas=$this->session->userdata();
			$user_id=$this->session->userdata('user_id');
			$user_type=$this->session->userdata('user_type');
			if($user_type==1){
				 $datas['res']=$this->centermodel->get_center_id_details($center_id);
				 	$datas['res_cat']=$this->centermodel->get_category();
				 $this->load->view('admin/admin_header');
				 $this->load->view('admin/gallery/edit_centers',$datas);
				 $this->load->view('admin/admin_footer');
			}else{
					redirect('/');
			}
		}

		public function update_project(){
			$datas=$this->session->userdata();
			$user_id=$this->session->userdata('user_id');
			$user_type=$this->session->userdata('user_type');
			if($user_type==1){

				$project_id=$this->input->post('project_id');
				$old_cover_pic=$this->input->post('old_cover_pic');
				$project_name= $this->db->escape_str($this->input->post('project_name'));
				$size= $this->db->escape_str($this->input->post('size'));
				$location= $this->db->escape_str($this->input->post('location'));
				$city= $this->db->escape_str($this->input->post('city'));
				$completed= $this->db->escape_str($this->input->post('completed'));
				$cat_id= $this->db->escape_str($this->input->post('cat_id'));
				$sub_cat_id= $this->db->escape_str($this->input->post('sub_cat_id'));
				$status= $this->db->escape_str($this->input->post('status'));
				$profilepic = $_FILES['cover_photo']['name'];
				if($profilepic){
					$temp = pathinfo($profilepic, PATHINFO_EXTENSION);
					$center_logo = round(microtime(true)) . '.' . $temp;
					$uploaddir = 'assets/gallery/';
					$profilepic = $uploaddir.$center_logo;
					move_uploaded_file($_FILES['cover_photo']['tmp_name'], $profilepic);
				}else{
					$center_logo=$old_cover_pic;
				}

				$datas=$this->centermodel->update_project($project_name,$location,$city,$completed,$cat_id,$sub_cat_id,$status,$center_logo,$size,$project_id);
				if($datas['status']=="success"){
					$this->session->set_flashdata('msg', 'Updated Successfully');
					redirect('gallery/home');
				}else{
					$this->session->set_flashdata('msg', 'Failed to Add');
					redirect('gallery/home');
				}
			}else{
					redirect('/');
			}
		}

		public function create_gallery(){
			$datas=$this->session->userdata();
			$user_id=$this->session->userdata('id');
				$user_type=$this->session->userdata('user_type');
			if($user_type==1){
				$project_id= $this->uri->segment(3);
		  	$datas['res_img']=$this->centermodel->get_project_id_gallery($project_id);
				$this->load->view('admin/admin_header');
				$this->load->view('admin/gallery/create_gallery',$datas);
				$this->load->view('admin/admin_footer');
				}else{
						redirect('/');
		}
		}

		public function gallery(){
				$datas=$this->session->userdata();
				$user_id=$this->session->userdata('user_id');
				$user_type=$this->session->userdata('user_type');
				if($user_type==1){
					$project_id=$this->input->post('project_id');
					$name_array = $_FILES['center_photos']['name'];
					$tmp_name_array = $_FILES['center_photos']['tmp_name'];
					$count_tmp_name_array = count($tmp_name_array);
					$static_final_name = time();
					for($i = 0; $i < $count_tmp_name_array; $i++){
				   $extension = pathinfo($name_array[$i] , PATHINFO_EXTENSION);
					 $file_name[]=$static_final_name.$i.".".$extension;
					move_uploaded_file($tmp_name_array[$i], "assets/gallery/".$static_final_name.$i.".".$extension);
					}
				$datas=$this->centermodel->create_gallery($project_id,$file_name,$user_id);
				if($datas['status']=="success"){
					$this->session->set_flashdata('msg', 'Gallery Updated Successfully');
					redirect('gallery/create_gallery/'.$project_id.'');
				}else if($datas['status']=="limit"){
					$this->session->set_flashdata('msg', 'Center Gallery  Maximum  images Exceeds');
					redirect('gallery/create_gallery/'.$project_id.'');
				}else{
					$this->session->set_flashdata('msg', 'Failed to Add');
						redirect('gallery/create_gallery/'.$project_id.'');
				}
			 }
			 else{
					redirect('/');
			 }
		}


		public function change_status(){
			$datas=$this->session->userdata();
			$user_id=$this->session->userdata('user_id');
			$user_type=$this->session->userdata('user_type');
			if($user_type==1 || $user_type==2){
					$status=$this->input->post('stat');
						$id=$this->input->post('id');
					$datas=$this->centermodel->change_status($status,$id,$user_id);
			}else{
				redirect('/');
			}
		}

		public function delete_videos(){
			$datas=$this->session->userdata();
			$user_id=$this->session->userdata('user_id');
			$user_type=$this->session->userdata('user_type');
			if($user_type==3){
					$id=$this->input->post('id');
					$datas=$this->centermodel->delete_videos($id);
			}else{
				redirect('/');
			}
		}

		public function delete_gal(){
			$datas=$this->session->userdata();
			$user_id=$this->session->userdata('user_id');
			$user_type=$this->session->userdata('user_type');
			if($user_type==1){
				 	$center_photo_id=$this->input->post('gal_id');
					$datas['res']=$this->centermodel->delete_gal($center_photo_id);
			}else{
				redirect('/');
			}
		}








}
