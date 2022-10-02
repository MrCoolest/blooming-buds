<?php
require_once "./main.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  
  $url = $_SERVER['REQUEST_URI'];
$components = parse_url($url);
isset($components['query'])? parse_str($components['query'], $results) : "";
$category =  isset($results['category'])? $results['category'] : "";
$deleted =  isset($results['deleled'])? $results['deleled'] : "" ;

// echo $category;

// if(!empty($category)){
$json = file_get_contents('./content.json');

//Decode JSON
$json_data = json_decode($json,true);

}

?>





<script>
    if (sessionStorage.getItem('blooming_user')) {
      console.log("Working")
    } else {
      window.location.href = './index.php'
    }
</script>


<?php
  if(!empty($deleted)){
    echo '<script>alert("Deleted Successfully");
    window.location.href = "./index.php";
    </script>';
  }

?>


  <!-- Data Upload Form -->
  <form class="container my-3" id="uplaod_form" >

    <div class="form-group">
      <label for="category"><b>Select Category for Upload Images</b></label>
      <select class="form-control" id="category" required>
        <option value="annual_function">Annual Function</option>
        <option value="diwali_celebration">Diwali Celebretion</option>
        <option value="navtratri_celebration">Navratri Celebration</option>
        <option value="Gandhi_Jayanti_Celebretion">Gandhi Jayanti Celebretion</option>
        <option value="Teachers_Day_Celebretion">Teachers Day Celebration</option>
        <option value="Janmashtami_celebration">Janmashtami celebration</option>
        <option value="Independence_Day">Independence Day</option>
        <option value="Rakshabandhan_celebration">Rakshabandhan celebration</option>
        <option value="Science_Exibition">Science Exibition</option>
        <option value="Conputer_Exibition">Computer Exibition</option>
        <!-- Ankit Start 2-10-2022 -->
        <option value="Grandparents_Day_celebration">Grandparents Day Celebration</option>
        <!-- Ankit End 2-10-2022 -->
        <option value="home_page">Home Page</option>

        

      </select>
    </div>

    <div class="form-group my-2">
      <label for="files-images">Example file input</label>
      <input type="file" class="form-control-file" name="files_images" id="files_images" accept="image/png, image/jpeg, image/jpg"  required>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Add Image</button>
  </form>

  <div class="container ">
  <h3> Banner Images (only 6 images ALLowed) </h3>

  <?php
// if(!empty($category)){
  $json_slider = file_get_contents('./slider.json');

  //Decode JSON
  $slider_data = json_decode($json_slider,true);

  echo '  <section class="container-fluid  p-5">
  <div class="row justify-content-right">';


  foreach($slider_data as $x => $val) {

      if(!empty($slider_data)){
        echo '
        <div class="col-sm-3 m-2">
        <div class="card ">
        <img class="card-img-top" src="'.$slider_data[$x]['img_url'].'" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">'.$slider_data[$x]['category'].'</h6>
          <a href="./delete_slider_from_json.php?id='.$x.'" class="btn btn-primary">Delete</a>
        </div>
      </div>
      </div>
      ';
      }else{

      }

}

echo '</div>
</section>';

        
?>

  </div>


  <div class='container' id='images_show'>
    <h3> Gallery Images (Only 50 images Allowed) </h3>
    <div class="py-2">
      <select class="form-select" name="category_images" id="get_images">
      <option value="" <?php if(!empty($category)){ echo 'selected';} ?> >All</option>
      <option value="annual_function" <?php if($category === "annual_function"){ echo 'selected';}?> >Annual Function</option>
        <option value="diwali_celebration" <?php if($category === "diwali_celebration"){ echo 'selected';}?>  >Diwali Celebretion</option>
        <option value="navtratri_celebration" <?php if($category === "navtratri_celebration"){ echo 'selected';}?> >Navratri Celebration</option>
        <option value="Gandhi_Jayanti_Celebretion" <?php if($category === "Gandhi_Jayanti_Celebretion"){ echo 'selected';}?> >Gandhi Jayanti Celebretion</option>
        <option value="Teachers_Day_Celebretion" <?php if($category === "Teachers_Day_Celebretion"){ echo 'selected';}?> >Grandparents Day Celebretion</option>
        <option value="Janmashtami_celebration" <?php if($category === "Janmashtami_celebration"){ echo 'selected';}?> >Janmashtami celebration</option>
        <option value="Independence_Day" <?php if($category === "Independence_Day"){ echo 'selected';}?> >Independence Day</option>
        <option value="Rakshabandhan_celebration" <?php if($category === "Rakshabandhan_celebration"){ echo 'selected';}?> >Rakshabandhan celebration</option>
        <option value="Science_Exibition" <?php if($category === "Science_Exibition"){ echo 'selected';}?> >Science Exibition</option>
        
        <!-- Ankit Start 2-10-2022 -->
        <option value="Grandparents_Day_celebration" <?php if($category === "Grandparents_Day_celebration"){ echo 'selected';}?> >Grandparents Day Celebration</option>
        <!-- Ankit End 2-10-2022 -->
       
        <option value="Conputer_Exibition" <?php if($category === "Conputer_Exibition"){ echo 'selected';}?> >Computer Exibition</option>
       
        <option value="home_page" <?php if($category === "home_page"){ echo 'selected';}?> >Home Page</option>

      </select>
  </div>

  </div>
  <!-- Grandparents_Day_celebration -->

  <?php
// echo ;
if($json_data){
  echo '  <section class="container-fluid  p-5">
  <div class="row justify-content-right">';


  foreach(array_reverse($json_data,true) as $x => $val) {
    // for ($i=0;i<=count($json_data);$i++){
    //     echo $json_data[$i]['img_url'];
      if(empty($category)){
        echo '
        <div class="col-sm-3 mb-3">
        <div class="card ">
        <img class="card-img-top" src="'.$json_data[$x]['img_url'].'" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">'.$json_data[$x]['category'].'</h6>
          <a href="./delete_from_json.php?id='.$x.'" class="btn btn-primary">Delete</a>
        </div>
      </div>
      </div>
      ';
      }
    else if($json_data[$x]['category'] === $category){
    echo '
    <div class="col-sm-3 mb-3">
    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="'.$json_data[$x]['img_url'].'" alt="Card image cap">
    <div class="card-body">
      <h6 class="card-title">'.$json_data[$x]['category'].'</h6>
      <a href="./delete_from_json.php?id='.$x.'" class="btn btn-primary">Delete</a>
    </div>
  </div>
  </div>
  ';
      }
}

echo '</div>
</section>';

}
        
?>


  <!-- Bootstrap Js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>




  <script>
    const uplaod_form = document.getElementById('uplaod_form');
    const category = document.getElementById('category');
    const files_images = document.getElementById('files_images')
    const get_images = document.getElementById('get_images')

    get_images.addEventListener('change',(event)=>{
  
      
    window.location.href = `./content_upload.php?category=${event.target.value}`;
      
      
    })


    uplaod_form.addEventListener('submit', (event) => {
      event.preventDefault()
      // console.log(files_images.files)
      // console.log(category.value)

      encodeImageFileAsURL();
     
    })



    function encodeImageFileAsURL() {

      const filesSelected = files_images.files
      if (filesSelected.length > 0) {
        const fileToLoad = filesSelected[0];

        const fileReader = new FileReader();

        fileReader.onload = function (fileLoadedEvent) {
          const srcData = fileLoadedEvent.target.result; // <--- data: base64

     


          var jsonObject = {
            "category": category.value,
            "img_url": srcData
          }

          var json_data = JSON.stringify(jsonObject);



          fetch('./update_json.php', {
            method: 'post',
            body: json_data
            // body : {'data': "Ankit"}
          }).then((data) => {
            console.log(data);
            console.log('ok');
            if(data.status == '200'){
              category.value="";
              files_images.value = "";
             
              location.reload();

            }

          }).then((res)=>{
            console.log(res);
          })
          .catch(() => {
            console.log('error');
          })


        }
        fileReader.readAsDataURL(fileToLoad);
      }
    }

  </script>

</body>


</html>