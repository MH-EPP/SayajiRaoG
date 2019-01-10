<?php
	/**
 * @file
 * Contains \Drupal\pdf\Controller\PDFController.
 */

namespace Drupal\pdf\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Controller routines for test_api routes.
 */
class PDFController extends ControllerBase {

  /**
   * Callback for `my-api/get.json` API method.
   */
  public function getHighlights( Request $request,  $userId=null , $documentId=null  ) {

    $response['data'] = $userId;
    $response['method'] = 'GET';

    return new JsonResponse( $response );
  }

  /**
   * Callback for `my-api/put.json` API method.
   */
  public function putHighlights( Request $request ) {

    $response['data'] = $request;
    $response['method'] = 'PUT';

   
    return new JsonResponse( $response );
  }

  /**
   * Callback for `my-api/post.json` API method.
   */
  public function addHighlights( Request $request ) {

    // This condition checks the `Content-type` and makes sure to 
    // decode JSON string from the request body into array.
    if ( 0 === strpos( $request->headers->get( 'Content-Type' ), 'application/json' ) ) {
      $data = json_decode( $request->getContent(), TRUE );
      $request->request->replace( is_array( $data ) ? $data : [] );
    }

    $response['data'] = $request;
    $response['method'] = 'POST';

    return new JsonResponse( $response );
  }

  /**
   * Callback for `my-api/delete.json` API method.
   */
  public function deleteHighlights( Request $request ) {

    $response['data'] = $request;
    $response['method'] = 'DELETE';

    return new JsonResponse( $response );
  }

}
