<?php
  include_once('core/file.php');
  if(isset($_POST['add_file'])){
    $internal_receiving = $_POST['internal_receiving'];
    $department = $_POST['department'];
    $department_type = $_POST['department_type'];
    $organization = $_POST['organization'];
    $organization_type = $_POST['organization_type'];
    $file_num = $_POST['file_num'];
    $date = $_POST['date'];
    $subject = $_POST['subject'];
    $file_name = $_POST['file_name'];
    $status = $_POST['status'];
    if (!empty($internal_receiving) && !empty($department) && !empty($department_type) && !empty($organization) && !empty($organization_type) && !empty($file_num) && !empty($date) && !empty($subject) && !empty($file_name) && !empty($status)) {
      $fileData = array(
        'internal_receiving' => $internal_receiving,
        'department' => $department,
        'department_type' => $department_type,
        'organization' => $organization,
        'organization_type' => $organization_type,
        'file_num' => $file_num,
        'date' => $date,
        'subject' => $subject,
        'file_name' => $file_name,
        'status' => $status,
        );
      if (File::addFile($fileData)) {
        echo "File saved.";
      }else{
        echo "Failed to save record.";
      }
    }else{
      echo "Please fill required fields.";
    }
  }
  // Edit File
  if(isset($_POST['edit_file'])){
    $file_id = $_POST['file_id'];
    $internal_receiving = $_POST['internal_receiving'];
    $department = $_POST['department'];
    $department_type = $_POST['department_type'];
    $organization = $_POST['organization'];
    $organization_type = $_POST['organization_type'];
    $file_num = $_POST['file_num'];
    $date = $_POST['date'];
    $subject = $_POST['subject'];
    $file_name = $_POST['file_name'];
    $status = $_POST['status'];
    $fileData = array(
      'file_id' => $file_id,
      'internal_receiving' => $internal_receiving,
      'department' => $department,
      'department_type' => $department_type,
      'organization' => $organization,
      'organization_type' => $organization_type,
      'file_num' => $file_num,
      'date' => $date,
      'subject' => $subject,
      'file_name' => $file_name,
      'status' => $status,
      );
    if (File::editFile($fileData)) {
      echo "File updated.";
    }else{
      echo "Failed to update record.";
    }
  }
?>
