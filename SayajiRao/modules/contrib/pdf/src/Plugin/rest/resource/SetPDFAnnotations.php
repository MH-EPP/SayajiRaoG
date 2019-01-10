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
 *   id = "SetPDFAnnotations",
 *   label = @Translation("PDF: Add/Edit/Delete Annotations"),
 *   uri_paths = {
 *     "canonical" = "/api/pdf/annotations/{track_id}",
       "https://www.drupal.org/link-relations/create" = "/api/pdf/annotations"
 *   }
 * )
 */
class SetPDFAnnotations extends ResourceBase {

  /**
   * Responds to entity POST requests.
   * @return \Drupal\rest\ResourceResponse
   */

  public function post($data) {
    $db_logic = \Drupal::service('pdf.PDFDbLogic');
    $user_id = $data['user_id'];
    $document_id = $data['document_id'];
    $page_index = $data['page_index'];
    $track_type = $data['track_type'];
    $highlight_array = $data['highlight_array'];
    $message = $data['message'];
    $color = $data['color'];
    $created_on = date("Y-m-d H:i:s");

    if($user_id==''||$document_id ==''||$page_index===''||$track_type==''){
      $response = ['message' => 'Insufficient Data','data' => $data];     
      return new ModifiedResourceResponse($response, 400);
    }
    else
    {
      $record = $db_logic->insert($user_id,$document_id,$page_index,$track_type,$highlight_array,$message,$color,$is_deleted,$created_on);
      if($record['val']){
          $response = ['message' => 'Success','data' => $record['msg']];
          return new ResourceResponse($response);
        }
      else{
          $response = ['message' => 'Failure','data' => $record['msg']]; 
          return new ModifiedResourceResponse($response, 412);
        }
    }    
  }

  /**
   * Responds to entity PATCH requests.
   * @return \Drupal\rest\ResourceResponse
   */

  public function patch($trackid,$data) {
   
    $db_logic = \Drupal::service('pdf.PDFDbLogic');    
    $message = $data['message'];
    $updated_on = date("Y-m-d H:i:s");

    if($trackid==''||$message==''){
      $response = ['message' => 'Insufficient Data','data' => $data];     
      return new ModifiedResourceResponse($response, 400);
    }
    else
    {
      $record = $db_logic->update($trackid,$message,$updated_on);
      if($record['val']){
          $response = ['message' => 'Success','data' => $record['msg']];
          return new ResourceResponse($response);
        }
      else{
          $response = ['message' => 'Failure','data' => $record['msg']]; 
          return new ModifiedResourceResponse($response, 412);
        }
    } 
  }

  /**
   * Responds to entity DELETE requests.
   * @return \Drupal\rest\ModifiedResourceResponse
   */

  public function delete($trackid) {

    $db_logic = \Drupal::service('pdf.PDFDbLogic');       
    $updated_on = date("Y-m-d H:i:s");
    if($trackid==''){
      $response = ['message' => 'Insufficient Data'];
      return new ModifiedResourceResponse(NULL, 406);
    }
    else
    {
      $record = $db_logic->delete($trackid,$updated_on);
      if($record['val']){
          $response = ['message' => 'Success','data' => $record['msg']];
          return new ModifiedResourceResponse(NULL, 200);
        }
      else{
          $response = ['message' => 'Failure','data' => $record['msg']];        
          return new ModifiedResourceResponse(NULL, 404);
          
        }
    } 
  }
}