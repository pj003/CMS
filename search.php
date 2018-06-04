 <?
 $query = 'Hi';
        $query_new =str_replace(' ','%20',$query);
        $url = "http://ajax.googleapis.com/ajax/services/search/web?v=1.0&q=".$query_new;
        
        $body = file_get_contents($url);
        
         $json = json_decode($body);
        
    
    ?>
    <h3>Google Results</h3>    
    <?php    
        for($x=0;$x<count($json->responseData->results);$x++){
    ?>
    
    <ul class="resuls">
        <li class="title">
                <a href="<?php echo $json->responseData->results[$x]->url; ?>"><?php echo $json->responseData->results[$x]->title; ?> </a> 
        </li>
        <li class="link"><?php echo $json->responseData->results[$x]->url;  ?></li>
        <li class="content"><?php echo $json->responseData->results[$x]->content; ?></li>
    </ul>    
    <?php    
    
      }?>