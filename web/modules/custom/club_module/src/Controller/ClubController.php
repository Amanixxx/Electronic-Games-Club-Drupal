<?php

namespace Drupal\club_module\Controller;
use  Drupal\Core\Controller\ControllerBase;
/**
 *  This is  club controller
 */
class ClubController extends ControllerBase{
   public function club_list() {
$members=[
['name' => 'Amani'],
['name' => 'Hatem'],
['name' => 'hassan'],
['name' => 'latifah']
];

$ourMembers ='';
foreach($members as $member){
$ourMembers .= '<li>' . $member['name'] .'</li>';
}
 return [
'#theme' =>'club_list',
'#items' =>$members,
'#title'=>$this->t('These are the best members')

// '#type'=>'markup',
// '#markup'=>'<h4>'.$this->t('These are the best members').'</h4><ol>' . $ourMembers.'</ol>',
        // '#markup' => $this->t('hello world massege from custom module')
   ];
 }
}