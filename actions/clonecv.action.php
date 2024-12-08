<?php
require '../assets/class/database.class.php';
require '../assets/class/function.class.php';
$slug=$_GET['resume']??'';

$resumes = $db->query("SELECT * FROM resumes WHERE (slug='$slug' AND user_id=".$fn->Auth()['id'].")");
$resume = $resumes->fetch_assoc();
if(!$resume){
    $fn->redirect('myresumes.php');
}
$exps =$db->query("SELECT * FROM experiences WHERE (resume_id=".$resume['id'].")");
$exps=$exps->fetch_all(1);

$edus=$db->query("SELECT * FROM educations WHERE (resume_id=".$resume['id'].")");
$edus=$edus->fetch_all(1);

$skills=$db->query("SELECT * FROM skills WHERE (resume_id=".$resume['id'].")");
$skills=$skills->fetch_all(1);



$columns='';
$values='';
unset($resume['id']);
unset($resume['slug']);
unset($resume['updated_at']);
$resume['resume_title'];

foreach($resume as $index=>$value){

    $columns.=$index.',';

    $values.="'$value',";


}
$authid=$fn->Auth()['id'];
$columns.='slug,updated_at';

$values.="'".$fn->randomstring()."',".time();


try{

    $query= "INSERT INTO resumes";
    $query.="($columns)";
    $query.=" VALUES($values)";

    // echo $query;
    // die();

    $db->query($query);

    $new_resume_id=$db->insert_id;

    foreach($exps as $exp){
        foreach($exp as $index=>$value){
        $exp[$index]=$db->real_escape_string($value);
        }
        $query2 = "INSERT INTO experiences(resume_id,position,company,started,ended,job_desc)";
        $query2 .= "VALUES ($new_resume_id,'{$exp['position']}','{$exp['company']}','{$exp['job_desc']}','{$exp['started']}','{$exp['ended']}')";
        $db->query($query2);

    }
    
    foreach($edus as $edu){
        foreach($edu as $index=>$value){
            $edu[$index]=$db->real_escape_string($value);
            }
        $query3 = "INSERT INTO educations(resume_id,course,institute,started,ended)";
        $query3 .= "VALUES ($new_resume_id,'{$edu['course']}','{$edu['institute']}','{$edu['started']}','{$edu['ended']}')";
        $db->query($query3);

    }
    foreach($skills as $skill){
        foreach($skill as $index=>$value){
            $skill[$index]=$db->real_escape_string($value);
            }
        $query3 = "INSERT INTO skills(resume_id,skill)";
        $query3 .= "VALUES ($new_resume_id,'{$edu['skill']}')";
        $db->query($query3);

    }


    $fn->setAlert('Clone added !');
    $fn->redirect('../myresumes.php');
}catch(Exception $error){
    $fn->setError($error->getMessage());

    $fn->redirect('../myresumes.php');
}

?>

