      
<?php include 'shared/header.php'; ?>   

<main class="aktual">

<?php
            $db_host = "localhost";
            $db_user = "vlko";
            $db_password = "Vlkinderko22";
            $db_name = "bksm";
        
        //CREATE CONNECTION
        $connection = new mysqli($db_host, $db_user, $db_password, $db_name );    

        //CHECK CONNECTION
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

//READ ALL ROW FROM DATABASE TABLE
$sql = "SELECT * FROM aktuality order by id desc ";
$result = $connection->query($sql);

if (!$result) {
    die("Invalid query: " . $connection->error);
}
?>



<?php
//READ DATA OF EACH ROW

while($row = $result->fetch_assoc()) {
  echo '<div class="card-holder">  
          <div class="card">
            <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"/ class="card__img">
            <div class="card-contents">
            
            <h1 class="card__name"> ' . $row['heading'] . '</h1>
            <p class=""> ' . $row['paragraph'] . '</p>
            <span class="card__read-more">' . $row['paragraph'] . '</span>
            <button class="read-more-btn">Viac...</button>
            </div> 
              
              
              
            </div>  
        </div>';

}
?>

<!--
  <div class="card-holder">

    <div class="card">

      <img src="/actual_img/miskolc21.jpeg" alt="pic" class="card__img">

      <div class="card-contents">
        <h1 class="card__name">Ultramaratón Košice-Miškolc</h1>

        <p>
          Tretí ročník bežeckých pretekov Ultramaratón Košice – Miškolc 
          sa uskutočnil v sobotu 6. novembra. 2021.<span class="card__read-more">  Na trati dlhej 115km sme si zmerali sily s domácimi aj
          zahraničnými bežcami. V 10-člennej štafete sme sa umiestnili s časom 08:27:08 na skvelom 2. mieste.</span>
        </p>

        <p class="read-more-btn">Viac...</p>

      </div>


    </div>

  </div>
-->
  <script src="script.js"></script>



</html>



























<?php include 'shared/footer.php'; ?> 
</body>
</html>