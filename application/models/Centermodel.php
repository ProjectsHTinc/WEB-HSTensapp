<?php

Class Centermodel extends CI_Model
{

  function __construct() {
		 parent::__construct();


		    $this->load->helper('url');
        $this->load->helper("file");

 }



        function get_category(){
          $select="SELECT * FROM rmd_category WHERE status='Active' ORDER BY id desc";
          $get_all=$this->db->query($select);
          return $get_all->result();
        }
        function get_sub_category($cat_id){
          $select="SELECT * FROM rmd_sub_category WHERE cat_id='$cat_id' AND status='Active' ORDER BY id desc";
          $res=$this->db->query($select);
            if($res){
                  $sub_cat_data=$res->result();
                 $data = array("status" => "success",'sub_cat_id'=>$sub_cat_data);
                 return $data;
             }else{
                 $data = array("status" => "failed");
                 return $data;
             }
        }

          function create_project($project_name,$location,$city,$completed,$cat_id,$sub_cat_id,$status,$center_logo,$size){
            if($project_name==""){
              $data= array("status" => "Something went wrong");
              return $data;
            }else{
              $insert="INSERT INTO rmd_project_gallery (cat_id,sub_cat_id,project_name,size,location,city,completed,cover_photo,status,created_at) VALUES ('$cat_id','$sub_cat_id','$project_name','$size','$location','$city','$completed','$center_logo','$status',NOW())";
                $result = $this->db->query($insert);
                if($result){
                  $data= array("status" => "success");
                  return $data;
                }else{
                  $data= array("status" => "failed");
                  return $data;
                }
            }


          }

          function view_architecture(){
            $select="SELECT rp.*,rs.sub_category_name FROM rmd_project_gallery as rp left join rmd_sub_category as rs on rp.sub_cat_id=rs.id where rp.cat_id=1 order by rp.created_at ASC";
            $get_all=$this->db->query($select);
            return $get_all->result();
          }


            function view_interiors(){
              $select="SELECT rp.*,rs.sub_category_name FROM rmd_project_gallery as rp left join rmd_sub_category as rs on rp.sub_cat_id=rs.id where rp.cat_id=2 order by rp.created_at ASC";
              $get_all=$this->db->query($select);
              return $get_all->result();
            }


          function get_center_id_details($center_id){
            $id=base64_decode($center_id)/98765;
            $select="SELECT * FROM rmd_project_gallery WHERE id='$id'";
            $get_all=$this->db->query($select);
            return $get_all->result();
          }

       function update_project($project_name,$location,$city,$completed,$cat_id,$sub_cat_id,$status,$center_logo,$size,$project_id){
           $id=base64_decode($project_id)/98765;
          $update="UPDATE rmd_project_gallery SET project_name='$project_name',location='$location',city='$city',completed='$completed',cat_id='$cat_id',sub_cat_id='$sub_cat_id',status='$status',size='$size',cover_photo='$center_logo',created_at=NOW() WHERE id='$id'";

          $result=$this->db->query($update);
          if($result){
            $data= array("status" => "success");
            return $data;
          }else{
            $data= array("status" => "failed");
            return $data;
          }
       }


       function update_center_logo($center_logo,$user_id){
         $update="UPDATE edu_center_videos SET center_banner='$center_logo',updated_by='$user_id',updated_at=NOW() WHERE id='1'";
         $result=$this->db->query($update);
         if($result){
           $data= array("status" => "success");
           return $data;
         }else{
           $data= array("status" => "failed");
           return $data;
         }
       }




       //GET ALL gallery

        function create_gallery($project_id,$file_name,$user_id){
            $id=base64_decode($project_id)/98765;

            $count_picture=count($file_name);
          for($i=0;$i<$count_picture;$i++){
             $check_batch="SELECT * FROM rmd_gallery_img WHERE project_id='$id'";
            $res=$this->db->query($check_batch);
             $res->num_rows();
              if($res->num_rows()>10){
              $data = array(
                  "status" => "limit"
              );
              return $data;
            }else{

              $gal_l=$file_name[$i];
               $gall_img="INSERT INTO rmd_gallery_img(project_id,gallery_img,status,created_at) VALUES('$id','$gal_l','Active',NOW())";
               $res_gal   = $this->db->query($gall_img);
            }

              }

          if ($res_gal) {
              $data = array(
                  "status" => "success"
              );
              return $data;
          } else {
              $data = array(
                  "status" => "failed"
              );
              return $data;
          }

        }

        // Get all Scheme Pictures
        function get_project_id_gallery($project_id){
          $id=base64_decode($project_id)/98765;
           $get_all_gallery_img="SELECT * FROM rmd_gallery_img WHERE project_id='$id'";
          $get_all=$this->db->query($get_all_gallery_img);
          return $get_all->result();
        }






        function delete_gal($center_photo_id){
          $select="SELECT * from rmd_gallery_img where id='$center_photo_id'";
          $get_all=$this->db->query($select);
          $result=$get_all->result();
          foreach($result as $rows){}
          $filename='./assets/gallery/'.$rows->gallery_img;
          unlink($filename);

           $get_all_gallery_img="DELETE  FROM rmd_gallery_img WHERE id='$center_photo_id'";
          $get_all=$this->db->query($get_all_gallery_img);
          if ($get_all) {
            echo "success";
          } else {
              echo "Something Went Wrong";
          }
        }


        function get_count_architecture(){
          $select="SELECT count(*) as count_arch FROM rmd_project_gallery where cat_id='1'";
          $get_all=$this->db->query($select);
          return $get_all->result();
        }
        function get_count_interiors(){
          $select="SELECT count(*) as count_int FROM rmd_project_gallery where cat_id='2'";
          $get_all=$this->db->query($select);
          return $get_all->result();
        }


          // Front end function
          function get_project_details($id){
              $select="SELECT * FROM rmd_project_gallery where id='$id'";
              $get_all=$this->db->query($select);
              return $get_all->result();

          }
          function get_project_gallery($id){
            $select="SELECT * FROM rmd_gallery_img where project_id='$id'";
            $get_all=$this->db->query($select);
            return $get_all->result();
          }
          function get_architecture(){
            $select="SELECT rp.*,rs.sub_category_name FROM rmd_project_gallery as rp left join rmd_sub_category as rs on rp.sub_cat_id=rs.id where rp.status='Active' AND rp.cat_id=1 order by rp.created_at ASC";
            $get_all=$this->db->query($select);
            return $get_all->result();
          }
          function get_interiors(){
            $select="SELECT rp.*,rs.sub_category_name FROM rmd_project_gallery as rp left join rmd_sub_category as rs on rp.sub_cat_id=rs.id where rp.status='Active' AND rp.cat_id=2 order by rp.created_at ASC";
            $get_all=$this->db->query($select);
            return $get_all->result();
          }





}
?>
