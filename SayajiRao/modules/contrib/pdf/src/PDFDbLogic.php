<?php	  
	namespace Drupal\pdf;
	use Drupal\Core\Database\Connection;
	/**
	* Defines a storage handler class that handles the node grants system.
	  This is used to build node query access.
	* @ingroup pdf
	*/

	class PDFDbLogic {
	 /**
	  * The database connection.
	  *
	  * @var \Drupal\Core\Database\Connection
	  */
	 protected $database;
	 /**
	  * Constructs a PDFDbLogic object.
	  *
	  * @param \Drupal\Core\Database\Connection $database
	  *   The database connection.
	  */
	 // The $database variable came to us from the service argument.
	 public function __construct(Connection $database) {
	   $this->database = $database;
	 }	  
	 /**
	  * Add new record in table pdf_track.
	  */
	 public function insert($user_id,$document_id,$page_index,$track_type,$highlight_array,$message,$color,$is_deleted,$created_on) {	   

	       // Example of working with DB in Drupal 8.
         $returnarray = array('val' => false,'msg' => 'Unknown Error');
	 	 try{
	 	   $query = $this->database->insert('pdf_track');

		   $query->fields(array(
		    'user_id' => $user_id,
			'document_id' => $document_id,
			'page_index' => $page_index,
			'track_type' => $track_type,
			'highlight_array' => $highlight_array,
			'message' => $message,
			'color' => $color,
			'created_on' => $created_on,
		   ));		  
           $returnarray['val'] = true;
           $returnarray['msg'] = $query->execute();
		  }
		  catch (Excpetion $e){            
            $returnarray['msg'] = $e;
		  }
		return $returnarray;
	 }	  

	 /**
	  * Get all records from table pdf_track.
	  */
	 public function getAll() {
	   return $this->getById();
	 }

	 /**
	  * Get records by id from table mymodule.
	  */
	 public function getById($user_id = NULL,$document_id = NULL,$track_type = 'all',$is_deleted = 'N')
	 {
	   $returnarray = array('val' => false,'msg' => 'Unknown Error');
	   try{	
	  
		$query = $this->database->select('pdf_track')
		  ->condition('pdf_track.user_id', $user_id)
		  ->condition('pdf_track.document_id', $document_id)
		  ->condition('pdf_track.is_deleted', $is_deleted)
		  ->fields('pdf_track',['track_id','page_index','track_type','message']);

        if($track_type == 'all' ){
			$db_or = db_or();
			$db_or->condition('pdf_track.track_type', 'annotation');
			$db_or->condition('pdf_track.track_type', 'bookmark');
			$query->condition($db_or);
		}
		else
		{
			$query->condition('pdf_track.track_type', $track_type);
		}


	    $result = $query->execute()->fetchAll();

	    $returnarray['val'] = true;
        $returnarray['msg'] = $result;
	    }
	    catch(Exception $e){ 
         $returnarray['msg'] = $e;
	    }
	    return $returnarray;   
	 }

	 public function getByPageIndex($user_id = NULL,$document_id = NULL,$page_index = NULL,$track_type = 'all',$is_deleted = 'N')
	 {
	   $returnarray = array('val' => false,'msg' => 'Unknown Error');
	   try{	
	  
		$query = $this->database->select('pdf_track')
		  ->condition('pdf_track.user_id', $user_id)
		  ->condition('pdf_track.document_id', $document_id)
		  ->condition('pdf_track.page_index', $page_index)		
		  ->condition('pdf_track.is_deleted', $is_deleted)
		  ->fields('pdf_track',['track_id','highlight_array','message','color','created_on']);

		if($track_type == 'all' ){
			$db_or = db_or();
			$db_or->condition('pdf_track.track_type', 'annotation', '=');
			$db_or->condition('pdf_track.track_type', 'highlight', '=');
			$query->condition($db_or);
		}
		else
		{
			$query->condition('pdf_track.track_type', $track_type);
		}		

	    $result = $query->execute()->fetchAll();

	    $returnarray['val'] = true;
        $returnarray['msg'] = $result;
	    }
	    catch(Exception $e){ 
         $returnarray['msg'] = $e;
	    }
	    return $returnarray;   
	 }


	 public function getResumePage($user_id = NULL,$document_id = NULL)
	 {
	   $returnarray = array('val' => false,'msg' => 'Unknown Error');
	   $track_type ='resume';
	   try{	
	    
		$query = $this->database->select('pdf_track')
		  ->condition('pdf_track.user_id', $user_id)
		  ->condition('pdf_track.document_id', $document_id)
		  ->condition('pdf_track.track_type',$track_type)
		  ->fields('pdf_track',['track_id','page_index']);

	    $result = $query->execute()->fetchAll();

	    $returnarray['val'] = true;
        $returnarray['msg'] = $result;
	    }
	    catch(Exception $e){ 
         $returnarray['msg'] = $e;
	    }
	    return $returnarray;   
	 }




	 


     public function update($track_id,$message = NULL,$updated_on)
     {
         $returnarray = array('val' => false,'msg' => 'Unknown Error');
         try{
	     $query = $this->database->update('pdf_track');	    
	     $query->fields(array( 
		 'message' => $message,		 
		 'updated_on' => $updated_on,
	     ));
	   
	     $query->condition('track_id', $track_id);
	     $result = $query->execute();
	     
	      if ($result) {        
	        $returnarray['val'] = true;
            $returnarray['msg'] = $result;
	      }
	      else {	      	
            $returnarray['msg'] = $result;
	      }
	     }
	     catch(Exception $e){
	     	$returnarray['msg'] = $e;
	     }
	     return $returnarray;	     
	 }



	 public function updateResumePage($user_id,$document_id,$page_index)
     {
         $returnarray = array('val' => false,'msg' => 'Unknown Error');
           $track_type ='resume';
           $timestamp = date("Y-m-d H:i:s"); 
         try{

              $currentresumedata = $this->getResumePage($user_id,$document_id);


              if($currentresumedata['val'] && count($currentresumedata['msg'])>0)
              {
				     $query = $this->database->update('pdf_track');	    
				     $query->fields(array( 
					 'page_index' => $page_index,		 
					 'updated_on' => $timestamp,
				     ));	   
				     $query->condition('user_id', $user_id);
				     $query->condition('document_id', $document_id);
				     $query->condition('track_type', $track_type);
				     $result = $query->execute();
			  }
			  else
			  {

                     $query = $this->database->insert('pdf_track');
                     
		  			 $query->fields(array(
					    'user_id' => $user_id,
						'document_id' => $document_id,
						'page_index' => $page_index,
						'track_type' => $track_type,						
						'created_on' => $timestamp,
					   ));		         
				     $result = $query->execute();			      	
			  }
	     
		      if ($result) {        
		        $returnarray['val'] = true;
	            $returnarray['msg'] = $result;
		      }
		      else {	      	
	            $returnarray['msg'] = $result;
		      }
          }
	     catch(Exception $e){
	        	$returnarray['msg'] = $e;
	        }
	     return $returnarray;	     
	 }

	 public function delete($track_id,$updated_on)
     {
     	$is_deleted = 'Y';
	    $returnarray = array('val' => false,'msg' => 'Unknown Error');
         try{
	     $query = $this->database->update('pdf_track');	     
	     $query->fields(array(	    
		 'is_deleted' => $is_deleted,		 
		 'updated_on' => $updated_on,
	     ));	   
	     $query->condition('track_id', $track_id);
	     $result = $query->execute();
	     
	      if ($result) {        
	        $returnarray['val'] = true;
            $returnarray['msg'] = $result;
	      }
	      else {	      	
            $returnarray['msg'] = $result;
	      }
	     }
	     catch(Exception $e){
	     	$returnarray['msg'] = $e;
	     }
	     return $returnarray;	
	 }
}
