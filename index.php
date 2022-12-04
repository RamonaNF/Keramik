<?php
  $host = 'localhost';
  $user = 'root';
  $password = 'root';
  $db = 'keramik';

  $link = mysqli_connect($host, $user, $password, $db); 
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="7">

    <link rel="icon" type="image/x-icon" href="https://leomaterialesrusticos.com/wp-content/uploads/2020/08/talavera-azulejo.jpg">
    <title>KERAMIK</title>

    <!--Add custom fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Vadodara:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  </head>

  <body>
  	<div id='i1'></div>
  	<div id='i2'></div>
  	<div id='s1'>
	    <div class="keramikDiv">
	      <svg width="514" height="175" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" overflow="hidden">
	        <defs><clipPath id="clip0"><rect x="1367" y="654" width="514" height="175"/></clipPath></defs>
	        <g clip-path="url(#clip0)" transform="translate(-1367 -654)">
	          <path d="" transform="translate(1417.08 760)"/><path d="M80.2847-43.6885 80.2847-17.4673C80.2847-14.2521 79.8659-11.1585 79.0283-8.18652 78.1907-5.21452 77.0154-2.43164 75.5024 0.162109 73.9894 2.75586 72.1657 5.1132 70.0312 7.23413 67.8968 9.35506 65.5327 11.172 62.939 12.6851 60.3452 14.1981 57.5623 15.3734 54.5903 16.2109 51.6183 17.0485 48.5247 17.4673 45.3096 17.4673 42.0944 17.4673 39.0008 17.0485 36.0288 16.2109 33.0568 15.3734 30.2739 14.1981 27.6802 12.6851 25.0864 11.172 22.7291 9.35506 20.6082 7.23413 18.4872 5.1132 16.6702 2.75586 15.1572 0.162109 13.6442-2.43164 12.4689-5.21452 11.6313-8.18652 10.7938-11.1585 10.375-14.2521 10.375-17.4673 10.375-20.1691 10.6452-22.8507 11.1855-25.512 11.7259-28.1733 12.5162-30.7467 13.5564-33.2324 14.5966-35.7181 15.8665-38.0889 17.366-40.345 18.8655-42.601 20.5744-44.6881 22.4927-46.6064L19.1289-46.6064 19.1289-58.2783C19.1289-59.4131 19.2978-60.5343 19.6355-61.6421 19.9732-62.7498 20.4528-63.7765 21.0742-64.7222 21.6956-65.6678 22.4386-66.5121 23.3032-67.2551 24.1678-67.9981 25.1405-68.5858 26.2212-69.0181 27.2209-69.4233 28.1733-69.6732 29.0784-69.7678 29.9835-69.8624 30.9089-69.9097 31.8545-69.9097L33.6782-69.9097 33.6782-75.7456 37.2041-75.7456C38.582-75.7456 39.9464-75.7118 41.2974-75.6443 42.6483-75.5767 43.9992-75.4079 45.3501-75.1377 48.187-74.5973 50.8551-73.6382 53.3542-72.2602 55.8534-70.8823 58.0959-69.2004 60.0818-67.2146 62.0676-65.2288 63.7495-62.9795 65.1274-60.4668 66.5054-57.9541 67.478-55.2928 68.0454-52.4829 68.3156-51.2131 68.4777-49.9364 68.5317-48.6531 68.5858-47.3697 68.6128-46.0796 68.6128-44.7827L68.6128-42.8374C70.1528-43.1886 71.6794-43.4183 73.1924-43.5264 74.7054-43.6344 76.2319-43.6885 77.772-43.6885Z" transform="translate(1417.08 760)"/><path d="M16.2109-17.4673C16.2109-20.1151 16.4744-22.621 17.0012-24.9851 17.5281-27.3492 18.2913-29.6052 19.291-31.7532 20.2907-33.9011 21.5065-35.9613 22.9385-37.9336 24.3704-39.9059 26.005-41.8242 27.8423-43.6885 29.7065-45.5797 31.3614-47.5048 32.8069-49.4636 34.2524-51.4224 35.4682-53.4623 36.4543-55.5832 37.4405-57.7042 38.197-59.9467 38.7239-62.3108 39.2507-64.6749 39.5142-67.2078 39.5142-69.9097 42.7293-69.9097 45.7554-69.3018 48.5923-68.0859 51.4292-66.8701 53.9014-65.2085 56.0088-63.1011 58.1162-60.9936 59.7778-58.5215 60.9936-55.6846 62.2095-52.8477 62.8174-49.8216 62.8174-46.6064L62.8174-32.0571C64.2764-33.8403 65.9988-35.2588 67.9846-36.3125 69.9704-37.3662 72.1252-37.8931 74.4487-37.8931L74.4487-17.4673C74.4487-15.1707 74.1853-12.9282 73.6584-10.7397 73.1316-8.55127 72.3683-6.45736 71.3686-4.45801 70.369-2.45866 69.1464-0.587646 67.7009 1.15503 66.2554 2.8977 64.6276 4.45801 62.8174 5.83594 62.196 5.7819 61.5813 5.73462 60.9734 5.69409 60.3655 5.65356 59.7508 5.6333 59.1294 5.6333 57.9946 5.6333 56.8666 5.7076 55.7454 5.8562 54.6241 6.0048 53.4961 6.16691 52.3613 6.34253 51.2266 6.51815 50.0985 6.68026 48.9773 6.82886 47.856 6.97746 46.728 7.05176 45.5933 7.05176 42.6213 7.05176 39.656 6.93693 36.6975 6.70727 33.739 6.47762 30.7873 6.18717 27.8423 5.83594 26.005 4.45801 24.3704 2.8977 22.9385 1.15503 21.5065-0.587646 20.2907-2.45866 19.291-4.45801 18.2913-6.45736 17.5281-8.55802 17.0012-10.76 16.4744-12.962 16.2109-15.1978 16.2109-17.4673ZM24.9243-58.2783C24.9243-59.0889 25.0797-59.8454 25.3904-60.5478 25.7011-61.2503 26.1199-61.865 26.6467-62.3918 27.1736-62.9187 27.7882-63.3307 28.4907-63.6279 29.1932-63.9251 29.9497-64.0737 30.7603-64.0737L30.7603-58.2783C30.7603-57.4678 30.6049-56.7045 30.2942-55.9885 29.9835-55.2725 29.5647-54.6511 29.0378-54.1243 28.511-53.5974 27.8963-53.1854 27.1938-52.8882 26.4914-52.591 25.7349-52.4424 24.9243-52.4424Z" fill="#F7630C" transform="translate(1417.08 760)"/><path d="M45.1069 9.68603C43.675 9.68603 42.2565 9.74683 40.8516 9.86841 39.4466 9.98999 38.0282 10.1318 36.5962 10.2939 35.0021 9.80762 33.4756 9.1862 32.0166 8.42969 30.5576 7.67318 29.1662 6.80859 27.8423 5.83594L27.8423-2.91797C27.8423-4.56608 28.0584-5.98454 28.4907-7.17334 28.923-8.36214 29.4634-9.43612 30.1118-10.3953 30.7603-11.3544 31.4627-12.2595 32.2192-13.1106 32.9757-13.9617 33.6782-14.8668 34.3267-15.8259 34.9751-16.7851 35.5155-17.859 35.9478-19.0478 36.38-20.2367 36.5962-21.6551 36.5962-23.3032 39.0008-23.3032 41.2636-22.8439 43.3845-21.9253 45.5054-21.0067 47.3562-19.7571 48.9368-18.1765 50.5173-16.5959 51.7669-14.7452 52.6855-12.6243 53.6042-10.5033 54.0635-8.24056 54.0635-5.83594 55.3063-6.80859 56.6842-7.53808 58.1973-8.02441 59.7103-8.51074 61.2503-8.75391 62.8174-8.75391L62.8174 5.83594C61.4935 6.80859 60.102 7.67318 58.6431 8.42969 57.1841 9.1862 55.6575 9.80762 54.0635 10.2939 52.5775 10.1318 51.0915 9.98999 49.6055 9.86841 48.1195 9.74683 46.6199 9.68603 45.1069 9.68603Z" fill="#FCE100" transform="translate(1417.08 760)"/><path d="M45.3096 11.6313C42.2835 11.6313 39.3791 11.1855 36.5962 10.2939L36.5962 5.83594C36.5962 4.62012 36.8258 3.48535 37.2852 2.43164 37.7445 1.37793 38.3659 0.452555 39.1494-0.344482 39.9329-1.14152 40.8516-1.76969 41.9053-2.229 42.959-2.68831 44.0937-2.91797 45.3096-2.91797L45.3096 5.83594 54.0635 2.91797 54.0635 10.2939C52.6315 10.7533 51.186 11.091 49.727 11.3071 48.2681 11.5233 46.7956 11.6313 45.3096 11.6313Z" fill="#FFFFFF" transform="translate(1417.08 760)"/>
	          <text fill="#000000" fill-opacity="0" font-family="Arial,Arial_MSFontService,sans-serif" font-size="14.5493" x="36.5962" y="9.81268"> 🔥 </text>
	          <text font-family="Gadugi,Gadugi_MSFontService,sans-serif" font-weight="400" font-size="83" transform="matrix(1 0 0 1 1529.37 760)"> Keramik </text>
	        </g>
	      </svg>
	    </div>

	    <br>
	    
	    <div class="threeDiv">
	      <?php
	        $data = file_get_contents("http://"); // IP del NodeMCU (desplegada en arduino)
	        $decode = json_decode($data, true);

	        $t = $decode["temperatura"];
	        $h = $decode["humedad"];
	        $f = time();

	        echo "<div><h4>Temperatura</h4> ".round($t, 1, PHP_ROUND_HALF_UP)."°C</div>
	              <div><h4>Humedad</h4> ".round($h, 1, PHP_ROUND_HALF_UP)."%</div>
	              <div><h4>Fecha</h4> ".date('Y-m-d h:i:sa', $f)."</div>
	            </div>";

			$queryInfo = 'SELECT temperaturaMin, temperaturaMax, humedadMin, humedadMax FROM ceramica WHERE idCeramica = 1';
			$info = mysqli_query($link,$queryInfo);
			$i = mysqli_fetch_array($info);
			
			if($t == 0) 
				echo "<p style='justify:center; background-color:rgba(104, 104, 104, 0.2);'>No se ha recibido ningún dato</p>";
			if($t!=0 && $t<$i['temperaturaMin'])
				echo "<p style='justify:center; background-color:rgba(255, 0, 0, 0.2);'>ALERTA: Temperatura menor a la requerida</p>";
			if($t!=0 && $t>$i['temperaturaMax'])
				echo "<p style='justify:center; background-color:rgba(255, 0, 0, 0.2);'>ALERTA: Temperatura mayor a la requerida</p>";
				if($h!=0 && $h<$i['humedadMin'])
				echo "<p style='justify:center; background-color:rgba(255, 0, 0, 0.2);'>ALERTA: Humedad menor a la requerida</p>";
				if($h!=0 && $h>$i['humedadMax'])
				echo "<p style='justify:center; background-color:rgba(255, 0, 0, 0.2);'>ALERTA: Humedad mayor a la requerida</p>";
				if($t!=0 && $t>=$i['temperaturaMin'] && $t<=$i['temperaturaMax'] && $h>=$i['humedadMin'] && $h<=$i['humedadMax'])
				echo "<p style='justify:center; background-color:rgba(0, 255, 55, 0.123);'>Lectura dentro del rango correspondiente</p>";
	          
	        $queryID = "INSERT INTO registro(idCoccion,fecha,temperatura,humedad) VALUES (1,".$f.",".$t.",".$h.");";
	        $insertData = mysqli_query($link,$queryID);
	      ?>
	    
	    <br><br>

	    <div id="biggestDiv">
	      <div style="width:100%; height:300px; overflow:auto;">
	        <table>
	          <tr>
	            <th>Fecha</th>  
	            <th>Humedad</th>
	            <th>Temperatura</th>
	          </tr>

	          <?php
	            $queryRD = 'SELECT temperatura, humedad, fecha FROM registro WHERE temperatura != 0 ORDER BY fecha DESC;';
	            $retrieveData = mysqli_query($link,$queryRD);

	            while($fila = mysqli_fetch_array($retrieveData)){
	              $temperatura = $fila['temperatura'];
	              $humedad = $fila['humedad'];
	              $fecha = $fila['fecha'];

	              echo  '<tr>
	              <td>'.date('Y-m-d h:i:sa', $fecha).'</td>
	              <td>'.$humedad.'</td>
	              <td>'.$temperatura.'</td>
	              </tr>';
	            }
	          ?>
	        </table>
	      </div>

	      <div>
	        <br><br>
	        <div class="threeDiv">
	          <div>
	            <h4>Temperatura promedio</h4>
	            <p>
	              <?php
	                $queryInfo = 'SELECT AVG(temperatura) FROM registro WHERE temperatura != 0;';
	                $info = mysqli_query($link,$queryInfo);
	                $i = mysqli_fetch_array($info);
	                echo round($i['AVG(temperatura)'], 1, PHP_ROUND_HALF_UP).'°C';
	              ?>
	            </p>
	          </div>

	          <div>
	            <h4>Temperatura mínima</h4>
	            <p>
	              <?php
	                $queryInfo = 'SELECT MIN(temperatura) FROM registro WHERE temperatura != 0;';
	                $info = mysqli_query($link,$queryInfo);
	                $i = mysqli_fetch_array($info);
	                echo round($i['MIN(temperatura)'], 1, PHP_ROUND_HALF_UP).'°C';
	              ?>
	            </p>
	          </div>

	          <div>
	            <h4>Temperatura máxima</h4>
	            <p>
	              <?php
	                $queryInfo = 'SELECT MAX(temperatura) FROM registro WHERE temperatura != 0;';
	                $info = mysqli_query($link,$queryInfo);
	                $i = mysqli_fetch_array($info);
	                echo round($i['MAX(temperatura)'], 1, PHP_ROUND_HALF_UP).'°C';
	              ?>
	            </p>
	          </div>
	        </div>

	        <br><br>

	        <div class="threeDiv">
	          <div>
	            <h4>Humedad promedio</h4>
	            <p>
	              <?php
	                $queryInfo = 'SELECT AVG(humedad) FROM registro WHERE humedad != 0;';
	                $info = mysqli_query($link,$queryInfo);
	                $i = mysqli_fetch_array($info);
	                echo round($i['AVG(humedad)'], 1, PHP_ROUND_HALF_UP).'%';
	              ?>
	            </p>
	          </div>

	          <div>
	            <h4>Humedad mínima</h4>
	            <p>
	              <?php
	                $queryInfo = 'SELECT MIN(humedad) FROM registro WHERE humedad != 0;';
	                $info = mysqli_query($link,$queryInfo);
	                $i = mysqli_fetch_array($info);
	                echo round($i['MIN(humedad)'], 1, PHP_ROUND_HALF_UP).'%';
	              ?>
	            </p>
	          </div>

	          <div>
	            <h4>Humedad máxima</h4>
	            <p>
	              <?php
	                $queryInfo = 'SELECT MAX(humedad) FROM registro WHERE humedad != 0;';
	                $info = mysqli_query($link,$queryInfo);
	                $i = mysqli_fetch_array($info);
	                echo round($i['MAX(humedad)'], 1, PHP_ROUND_HALF_UP).'%';
	              ?>
	            </p>
	          </div>
	        </div>
	      </div>
	    </div>

	    <!--
	      REFERENCIA
	      https://www.plus2net.com/php_tutorial/chart-line-database.php
	      https://www.google.com/search?q=line+graph+php+mysql&rlz=1C1UEAD_esMX987MX987&oq=php+sql+graph+&aqs=chrome.3.69i57j0i22i30l2j0i10i15i22i30.17123j0j1&sourceid=chrome&ie=UTF-8#fpstate=ive&vld=cid:c2325ed8,vid:qlT_hnBkSh8
	    -->
	    <div id="curveChart"></div>
		<div id="incidenciasTemp" style="width:30%; height: 150px;"></div> 
		<br>
		<div id="incidenciasHum" style="width:30%; height: 150px;"></div>
	</div>
	<div id='s2'>
		<div class="keramikDiv">
	      <svg width="514" height="175" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" overflow="hidden">
	        <defs><clipPath id="clip0"><rect x="1367" y="654" width="514" height="175"/></clipPath></defs>
	        <g clip-path="url(#clip0)" transform="translate(-1367 -654)">
	          <path d="" transform="translate(1417.08 760)"/><path d="M80.2847-43.6885 80.2847-17.4673C80.2847-14.2521 79.8659-11.1585 79.0283-8.18652 78.1907-5.21452 77.0154-2.43164 75.5024 0.162109 73.9894 2.75586 72.1657 5.1132 70.0312 7.23413 67.8968 9.35506 65.5327 11.172 62.939 12.6851 60.3452 14.1981 57.5623 15.3734 54.5903 16.2109 51.6183 17.0485 48.5247 17.4673 45.3096 17.4673 42.0944 17.4673 39.0008 17.0485 36.0288 16.2109 33.0568 15.3734 30.2739 14.1981 27.6802 12.6851 25.0864 11.172 22.7291 9.35506 20.6082 7.23413 18.4872 5.1132 16.6702 2.75586 15.1572 0.162109 13.6442-2.43164 12.4689-5.21452 11.6313-8.18652 10.7938-11.1585 10.375-14.2521 10.375-17.4673 10.375-20.1691 10.6452-22.8507 11.1855-25.512 11.7259-28.1733 12.5162-30.7467 13.5564-33.2324 14.5966-35.7181 15.8665-38.0889 17.366-40.345 18.8655-42.601 20.5744-44.6881 22.4927-46.6064L19.1289-46.6064 19.1289-58.2783C19.1289-59.4131 19.2978-60.5343 19.6355-61.6421 19.9732-62.7498 20.4528-63.7765 21.0742-64.7222 21.6956-65.6678 22.4386-66.5121 23.3032-67.2551 24.1678-67.9981 25.1405-68.5858 26.2212-69.0181 27.2209-69.4233 28.1733-69.6732 29.0784-69.7678 29.9835-69.8624 30.9089-69.9097 31.8545-69.9097L33.6782-69.9097 33.6782-75.7456 37.2041-75.7456C38.582-75.7456 39.9464-75.7118 41.2974-75.6443 42.6483-75.5767 43.9992-75.4079 45.3501-75.1377 48.187-74.5973 50.8551-73.6382 53.3542-72.2602 55.8534-70.8823 58.0959-69.2004 60.0818-67.2146 62.0676-65.2288 63.7495-62.9795 65.1274-60.4668 66.5054-57.9541 67.478-55.2928 68.0454-52.4829 68.3156-51.2131 68.4777-49.9364 68.5317-48.6531 68.5858-47.3697 68.6128-46.0796 68.6128-44.7827L68.6128-42.8374C70.1528-43.1886 71.6794-43.4183 73.1924-43.5264 74.7054-43.6344 76.2319-43.6885 77.772-43.6885Z" transform="translate(1417.08 760)"/><path d="M16.2109-17.4673C16.2109-20.1151 16.4744-22.621 17.0012-24.9851 17.5281-27.3492 18.2913-29.6052 19.291-31.7532 20.2907-33.9011 21.5065-35.9613 22.9385-37.9336 24.3704-39.9059 26.005-41.8242 27.8423-43.6885 29.7065-45.5797 31.3614-47.5048 32.8069-49.4636 34.2524-51.4224 35.4682-53.4623 36.4543-55.5832 37.4405-57.7042 38.197-59.9467 38.7239-62.3108 39.2507-64.6749 39.5142-67.2078 39.5142-69.9097 42.7293-69.9097 45.7554-69.3018 48.5923-68.0859 51.4292-66.8701 53.9014-65.2085 56.0088-63.1011 58.1162-60.9936 59.7778-58.5215 60.9936-55.6846 62.2095-52.8477 62.8174-49.8216 62.8174-46.6064L62.8174-32.0571C64.2764-33.8403 65.9988-35.2588 67.9846-36.3125 69.9704-37.3662 72.1252-37.8931 74.4487-37.8931L74.4487-17.4673C74.4487-15.1707 74.1853-12.9282 73.6584-10.7397 73.1316-8.55127 72.3683-6.45736 71.3686-4.45801 70.369-2.45866 69.1464-0.587646 67.7009 1.15503 66.2554 2.8977 64.6276 4.45801 62.8174 5.83594 62.196 5.7819 61.5813 5.73462 60.9734 5.69409 60.3655 5.65356 59.7508 5.6333 59.1294 5.6333 57.9946 5.6333 56.8666 5.7076 55.7454 5.8562 54.6241 6.0048 53.4961 6.16691 52.3613 6.34253 51.2266 6.51815 50.0985 6.68026 48.9773 6.82886 47.856 6.97746 46.728 7.05176 45.5933 7.05176 42.6213 7.05176 39.656 6.93693 36.6975 6.70727 33.739 6.47762 30.7873 6.18717 27.8423 5.83594 26.005 4.45801 24.3704 2.8977 22.9385 1.15503 21.5065-0.587646 20.2907-2.45866 19.291-4.45801 18.2913-6.45736 17.5281-8.55802 17.0012-10.76 16.4744-12.962 16.2109-15.1978 16.2109-17.4673ZM24.9243-58.2783C24.9243-59.0889 25.0797-59.8454 25.3904-60.5478 25.7011-61.2503 26.1199-61.865 26.6467-62.3918 27.1736-62.9187 27.7882-63.3307 28.4907-63.6279 29.1932-63.9251 29.9497-64.0737 30.7603-64.0737L30.7603-58.2783C30.7603-57.4678 30.6049-56.7045 30.2942-55.9885 29.9835-55.2725 29.5647-54.6511 29.0378-54.1243 28.511-53.5974 27.8963-53.1854 27.1938-52.8882 26.4914-52.591 25.7349-52.4424 24.9243-52.4424Z" fill="#F7630C" transform="translate(1417.08 760)"/><path d="M45.1069 9.68603C43.675 9.68603 42.2565 9.74683 40.8516 9.86841 39.4466 9.98999 38.0282 10.1318 36.5962 10.2939 35.0021 9.80762 33.4756 9.1862 32.0166 8.42969 30.5576 7.67318 29.1662 6.80859 27.8423 5.83594L27.8423-2.91797C27.8423-4.56608 28.0584-5.98454 28.4907-7.17334 28.923-8.36214 29.4634-9.43612 30.1118-10.3953 30.7603-11.3544 31.4627-12.2595 32.2192-13.1106 32.9757-13.9617 33.6782-14.8668 34.3267-15.8259 34.9751-16.7851 35.5155-17.859 35.9478-19.0478 36.38-20.2367 36.5962-21.6551 36.5962-23.3032 39.0008-23.3032 41.2636-22.8439 43.3845-21.9253 45.5054-21.0067 47.3562-19.7571 48.9368-18.1765 50.5173-16.5959 51.7669-14.7452 52.6855-12.6243 53.6042-10.5033 54.0635-8.24056 54.0635-5.83594 55.3063-6.80859 56.6842-7.53808 58.1973-8.02441 59.7103-8.51074 61.2503-8.75391 62.8174-8.75391L62.8174 5.83594C61.4935 6.80859 60.102 7.67318 58.6431 8.42969 57.1841 9.1862 55.6575 9.80762 54.0635 10.2939 52.5775 10.1318 51.0915 9.98999 49.6055 9.86841 48.1195 9.74683 46.6199 9.68603 45.1069 9.68603Z" fill="#FCE100" transform="translate(1417.08 760)"/><path d="M45.3096 11.6313C42.2835 11.6313 39.3791 11.1855 36.5962 10.2939L36.5962 5.83594C36.5962 4.62012 36.8258 3.48535 37.2852 2.43164 37.7445 1.37793 38.3659 0.452555 39.1494-0.344482 39.9329-1.14152 40.8516-1.76969 41.9053-2.229 42.959-2.68831 44.0937-2.91797 45.3096-2.91797L45.3096 5.83594 54.0635 2.91797 54.0635 10.2939C52.6315 10.7533 51.186 11.091 49.727 11.3071 48.2681 11.5233 46.7956 11.6313 45.3096 11.6313Z" fill="#FFFFFF" transform="translate(1417.08 760)"/>
	          <text fill="#000000" fill-opacity="0" font-family="Arial,Arial_MSFontService,sans-serif" font-size="14.5493" x="36.5962" y="9.81268"> 🔥 </text>
	          <text font-family="Gadugi,Gadugi_MSFontService,sans-serif" font-weight="400" font-size="83" transform="matrix(1 0 0 1 1529.37 760)"> Keramik </text>
	        </g>
	      </svg>
	    </div>
		<div id="basicDiv">
	      <div id="mision">
	        <h3>Misión</h3>
	        Impulsar la creación de ciudades sostenibles mediante el internet de las cosas. 
	      </div>
	      <div id="vision">
	        <h3>Visión</h3>
	        Aprovechar la tecnología a tal grado que la producción de cerámica se vuelva económica, sostenible y sencilla.
	      </div>
	    </div>
	</div>
	<div id='m'>
        <a class='mb' href='#i1'>Mediciones</a>
        <a class='mb' href='#i2'>Nosotr@s</a>
	</div>
    <script type="text/javascript">
      // Load the Visualization API and the corechart package.
      google.charts.load('current', {packages: ['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      
      function drawChart() {
        // Create the data table.
        var data = google.visualization.arrayToDataTable([
          ['Fecha', 'Temperatura', 'Humedad'],
          <?php
            $dataQuery = 'SELECT fecha, temperatura, humedad FROM registro  WHERE temperatura != 0;';
            $data = mysqli_query($link,$dataQuery);
            while($row = mysqli_fetch_assoc($data)){
              echo "['".date('h:i:sa', $row['fecha'])."',".$row['temperatura'].",".$row['humedad']."],";
            }
          ?>
        ]);

        var options = {
          title: 'Historial de humedad y temperatura',
          curveType: 'function',
          width: 1290,
          height: 500,
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curveChart'));
        chart.draw(data, options);
      }
    </script>

	<script>
      var chart = new CanvasJS.Chart("incidenciasTemp", {
        animationEnabled: false,
        title: {
          text: "Incidencias Temperatura"
        },
        data: [{
          type: "pie",
          startAngle: 240,
          yValueFormatString: "##0.00\"%\"",
          indexLabel: "{label} {y}",
          dataPoints:
            <?php
              $iQuery = 'SELECT R.idRegistro FROM registro R, ceramica CE, coccion C WHERE R.idCoccion=C.idCoccion AND C.idCeramica=CE.idCeramica AND R.temperatura<CE.temperaturaMin OR R.temperatura>CE.temperaturaMax AND R.temperatura!=0;';
              $incidencias = mysqli_query($link,$iQuery);
              $iRow = mysqli_num_rows($incidencias);
              
              $tQuery = 'SELECT idRegistro FROM registro WHERE temperatura!=0;';
              $total = mysqli_query($link,$tQuery);
              $tRow = mysqli_num_rows($total);
              
              $percentage = round(($iRow*100)/$tRow, 1, PHP_ROUND_HALF_UP);
              
              echo "[{y: ".$percentage.", label: 'Incidencias'},
                     {y: ".(100-$percentage).", label: 'Rango normal'}]";
            ?>
        }]
      });
      chart.render();
    </script>

    <script>
      var chart = new CanvasJS.Chart("incidenciasHum", {
        animationEnabled: false,
        title: {
          text: "Incidencias Humedad"
        },
        data: [{
          type: "pie",
          startAngle: 240,
          yValueFormatString: "##0.00\"%\"",
          indexLabel: "{label} {y}",
          dataPoints:
            <?php
              $iQuery = 'SELECT R.idRegistro FROM registro R, ceramica CE, coccion C WHERE R.idCoccion=C.idCoccion AND C.idCeramica=CE.idCeramica AND R.humedad<CE.humedadMin OR R.humedad>CE.humedadMax AND R.humedad!=0;';
              $incidencias = mysqli_query($link,$iQuery);
              $iRow = mysqli_num_rows($incidencias);
              
              $tQuery = 'SELECT idRegistro FROM registro WHERE humedad!=0;';
              $total = mysqli_query($link,$tQuery);
              $tRow = mysqli_num_rows($total);
              
              $percentage = round(($iRow*100)/$tRow, 1, PHP_ROUND_HALF_UP);
              
              echo "[{y: ".$percentage.", label: 'Incidencias'},
                     {y: ".(100-$percentage).", label: 'Rango normal'}]";
            ?>
        }]
      });
      chart.render();
    </script>

  </body>
</html>

<?php
    mysqli_close($link);
?>
