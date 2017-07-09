<?php
  include_once('database/connection.db.php');
  class File{
    public function addFile(array $fileData){
      global $connection;
      if (isset($fileData)) {
        $internal_receiving = $fileData['internal_receiving'];
        $department = $fileData['department'];
        $department_type = $fileData['department_type'];
        $organization = $fileData['organization'];
        $organization_type = $fileData['organization_type'];
        $file_num = $fileData['file_num'];
        $date = $fileData['date'];
        $subject = $fileData['subject'];
        $file_name = $fileData['file_name'];
        $status = $fileData['status'];
        $query = "SELECT * FROM FilesRecord WHERE file_num='$file_num' OR file_name='$file_name'";
        $result = mysqli_query($connection, $query);
        $result = mysqli_num_rows($result);
        if ($result == false) {
          $new_file = "INSERT INTO FilesRecord (internal_receiving,department,department_type,organization,organization_type,file_num,dat,subject,file_name,status) VALUES ('$internal_receiving','$department','$department_type','$organization','$organization_type','$file_num','$date','$subject','$file_name','$status')";
          $save_new_file = mysqli_query($connection, $new_file);
          return true;
        }else{
          return false;
        }
      }else{
        return false;
      }
    }
    public function editFile(array $fileData){
      global $connection;
      if (isset($fileData)) {
        $file_id = $fileData['file_id'];
        $internal_receiving = $fileData['internal_receiving'];
        $department = $fileData['department'];
        $department_type = $fileData['department_type'];
        $organization = $fileData['organization'];
        $organization_type = $fileData['organization_type'];
        $file_num = $fileData['file_num'];
        $date = $fileData['date'];
        $subject = $fileData['subject'];
        $file_name = $fileData['file_name'];
        $status = $fileData['status'];
        $query = "UPDATE FilesRecord SET internal_receiving='$internal_receiving',department='$department',department_type='$department_type',organization='$organization',organization_type='$organization_type',file_num='$file_num',dat='$date',subject='$subject',file_name='$file_name',status='$status' WHERE file_id='$file_id'";
        $result = mysqli_query($connection, $query);
        if ($result) {
          return true;
        }else{
          return false;
        }
      }else{
        return false;
      }
    }
    public function fetch_all(){
      global $connection;
      $results_array = array();
      $select = "SELECT * FROM FilesRecord WHERE 1";
      $run_query = mysqli_query($connection, $select);
      if ($run_query) {
        while($fetch_all = mysqli_fetch_assoc($run_query)){
          $results_array[] = $fetch_all;
        }
        return $results_array;
      }
    }
    public function get_file_by_id($id){
      global $connection;
      $query = "SELECT * FROM FilesRecord WHERE file_id='$id'";
      $run = mysqli_query($connection, $query);
      $result = mysqli_fetch_assoc($run);
      return $result;
    }
    public function delete($id){
      global $connection;
      $query = "DELETE FROM FilesRecord WHERE file_id='$id'";
      $run = mysqli_query($connection, $query);
      return true;
    }
  }
?>
