
<?php
    echo "<h2>";
    echo '<br/>----------------------------------<br/>';
    echo "<pre>";
    
    $cars = array(
                array('one','two','three','four'),
                array('1  ','2  ','3    ')
            );
    
    $laravel = array('I','II','III','IV');
    
    $cars[2][] = $laravel;
    
    print_r ($cars);
    
    echo '<br/>----------------------------------<br/>';
    
    $cars = array('one','two','three','four');
    $fruits = array(1,2,3,4);
    $laravel = array('I','II','III','IV');
    
    $new = array(array($cars,$fruits,$laravel));
    print_r($new);
    
    echo '<br/>----------------------------------<br/>';
    
    foreach($cars as $key => $go)
    {
        echo $key.'='.$go."<br/>";
    }
    
    echo '<br/>----------------------------------<br/>';
    
    print_r(array_keys($cars));
    
    echo '<br/>----------------------------------<br/>';
    
    print_r(array_values($cars));
    
    print 'thank you';