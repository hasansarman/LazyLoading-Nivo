<?php
session_start();
$dir=getcwd()."/images";// default image dir.
$slides = array();//we need an array to hide our file names.
$i=0;

if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
		$i++;
		
		
            $slides[]=array($i." picture title..",$file,"foo");}
       
        closedir($dh);
    }
}



        
      
        shuffle($slides);
        function partition( $list, $p ) {
            $listlen = count( $list );
            $partlen = floor( $listlen / $p );
            $partrem = $listlen % $p;
            $partition = array();
            $mark = 0;
            for ($px = 0; $px < $p; $px++) {
                $incr = ($px < $partrem) ? $partlen + 1 : $partlen;
                $partition[$px] = array_slice( $list, $mark, $incr );
                $mark += $incr;
            }
            return $partition;
        }
        //$rand_keys = array_rand($input, 2);
       $karisik= partition( $slides, 4 );
      
       
         
       
        
        $_SESSION['foo1'] = $karisik[0];
      //  print_r($_SESSION['foo1']);
        $_SESSION['foo2'] = $karisik[1];
        $_SESSION['foo3'] = $karisik[2];
        $_SESSION['foo4']=$karisik[3];
        // apply random setting
        ?>

        <iframe style="margin-left:4% !important; width: 23% !important; height: 200px !important;" scrolling="no" src="Nivo-Slider-master/demo/demo-lazy.php?arr=foo4" ></iframe>

        <iframe style="width: 23% !important; height: 200px !important;" scrolling="no" src="Nivo-Slider-master/demo/demo-lazy.php?arr=foo1" ></iframe>
        <iframe style="width: 23% !important; height: 200px !important;" scrolling="no" src="Nivo-Slider-master/demo/demo-lazy.php?arr=foo2" ></iframe>
        <iframe style="width: 23% !important; height: 200px !important;" scrolling="no" src="Nivo-Slider-master/demo/demo-lazy.php?arr=foo3" ></iframe>

        <script type="text/javascript" src="jquery.nivo.slider.js"></script>
 
<script>