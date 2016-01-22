<?php
  /**
  * 
  */
  class appdemo
  {
  	
  	public function first_app(){

  		$commit="hello i commited it here";
  		if ($commit != null ) {
  			echo $commit;
  		}else{
  			$commit="hello i was nt commited";
  		}
  	}
    
    public function second_app($num,$num2){
       $sum = $num + $num2;

       if($sum <= 2){
       	echo "we have a gud sum";
       }else{
       	echo "we dnt make a huge gain!";
       }

    }

  }
 //call the class
  $obj= new appdemo();
  	$obj->first_app();
  	$obj->second_app(2,3);
?>