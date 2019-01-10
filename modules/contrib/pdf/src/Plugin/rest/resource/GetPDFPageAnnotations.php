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
 *   id = "GetPDFPageAnnotations",
 *   label = @Translation("PDF: Get PDF Page Annotations"),
 *   uri_paths = {
 *     "canonical" = "/api/pdf/annotations/{userid}/{documentid}/{pageindex}/{tracktype}"    
 *   }
 * )
 */
class GetPDFPageAnnotations extends ResourceBase {

  /**
   * Responds to entity GET requests.
   * @return \Drupal\rest\ResourceResponse
   */ 

   public function get($userid=NULL,$documentid=NULL,$pageindex=NULL,$tracktype=NULL) {
   
    $db_logic = \Drupal::service('pdf.PDFDbLogic'); 
    if($userid==''||$documentid==''||$pageindex===''){
      $response = ['message' => 'Insufficient Data','data' => $data];     
      return new ModifiedResourceResponse(NULL, 400, $response);
    }
    else
    {
      $record = $db_logic->getByPageIndex($userid,$documentid,$pageindex,$tracktype);
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
}

