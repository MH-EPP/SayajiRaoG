<?php
namespace Drupal\pdf\Plugin\rest\resource;

use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;
use Drupal\rest\ModifiedResourceResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
/**
 * Provides a Demo Resource
 *
 * @RestResource(
 *   id = "SetPDFResume",
 *   label = @Translation("PDF: Edit Resume"),
 *   uri_paths = {
 *     "canonical" = "/api/pdf/resume/{userid}/{documentid}",
       "https://www.drupal.org/link-relations/create" = "/api/pdf/resume"
 *   }
 * )
 */
class SetPDFResume extends ResourceBase {

   /**
   * Responds to entity GET requests.
   * @return \Drupal\rest\ResourceResponse
   */ 

   public function get($userid=NULL,$documentid=NULL) {
   
    $db_logic = \Drupal::service('pdf.PDFDbLogic'); 
    if($userid==''||$documentid==''){
      $response = ['message' => 'Insufficient Data'];     
      return new ModifiedResourceResponse(NULL, 400, $response);
    }
    else
    {
      $record = $db_logic->getResumePage($userid,$documentid);
      if($record['val']){
          $response = ['message' => 'Success','data' => $record['msg']];
          return new JsonResponse($response);
        }
      else{
          $response = ['message' => 'Failure','data' => $record['msg']]; 
          return new ModifiedResourceResponse(NULL, 404, $response);
        }
    } 
  }

  /**
   * Responds to entity PATCH requests.
   * @return \Drupal\rest\ResourceResponse
   */

  public function patch($userid,$documentid,$data) {
   
    $db_logic = \Drupal::service('pdf.PDFDbLogic');    
    $page_index = $data['page_index'];
    $updated_on = date("Y-m-d H:i:s");

    if($documentid==''|| $userid==''||$page_index==''){
      $response = ['message' => 'Insufficient Data','data' => $data];     
      return new ModifiedResourceResponse($response, 400);
    }
    else
    {
      $record = $db_logic->updateResumePage($userid,$documentid,$page_index);
      if($record['val']){
          $response = ['message' => 'Success','data' => $record['msg']];
          return new ResourceResponse($response);
        }
      else{
          $response = ['message' => 'sss','data' => $record['msg']]; 
          return new ModifiedResourceResponse($response, 412);
        }
    } 
  }

}