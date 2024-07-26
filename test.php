<?php
	// class calculation{
	// 	public $a;
	// 	function __construct($num){
	// 		$this->a = $num;	
	// 	}
	// 	function sum(){
	// 		echo $this->a . "<br>";
	// 	}
	
	// }
	// $a1 = new calculation(1000);
	// $a1->sum(); 

	


	// class sale{
	// 	public $a = "noname"; 	
	// 	function test(){
	// 		echo $this->a .  "<br>" . "<br>";
	// 	}
	// }

	// $new = new sale();
	// $new->a = 20;
	// $new->test();




    // abstract class vehicles{
    //     abstract protected function baseSpeed();
    //     abstract protected function kilo();

    //     function total(int $ajaira){
    //         echo $totalNeedMoney = $this->baseSpeed() + ($this->kilo() * $ajaira);
    //         return $totalNeedMoney;
    //     }   
    // }

    // class car extends vehicles{
    //     function baseSpeed(): int{
    //         return 50;
    //     }
    //     function kilo(): int{
    //         return 2;
    //     }
    // }

    // class honda extends vehicles{
    //     function baseSpeed(): int{
    //         return 40;
    //     }
    //     function kilo(): int{
    //         return 2;
    //     }
    // }

    // $test = new honda;
    // $test->total(20);
    
    // ------------------- libraby start-------------------

    // class student{
    //     public $name, $age, $grade;
    //     function __construct($name, $age, $grade){
    //         $this->name = $name;
    //         $this->age = $age;
    //         $this->grade = $grade;
    //     }
    //     function info(){
    //         echo "Student name is: " . $this->name . "<br>";
    //         echo "Her age is: " . $this->age . "<br>";
    //         echo "Exam grade is: " . $this->grade . "<br>";
    //     }
    // }
    // $test = new student("mehedi", 20, "siploma");
    // $test->info();
    


    


    // abstract class a{
    //     abstract protected function sum();
    //     function total(){
    //         echo " the number is " . $this->sum() . " what";
    //     }
    // }
    
    
    // class b extends a{
    //     function sum(){
    //         return 500 . " bye";
    //     }
    // }
    // $test = new b;
    // $test->total();

?>


<!DOCTYPE html>
<html>
<head>
<style>
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}









/* The grid: Four equal columns that floats next to each other */
.column {
  float: left;
  height: 300px;
  padding: 10px;
}

/* Style the images inside the grid */
.column img {
  opacity: 0.7; 
  cursor: pointer; 
}

.column img:hover {
  opacity: 1;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The expanding image container */
.container {
  position: relative;
  display: none;
}

/* Expanding image text */
#imgtext {
  position: absolute;
  bottom: 15px;
  left: 15px;
  color: white;
  font-size: 20px;
}

/* Closable button inside the expanded image */
.closebtn {
  position: absolute;
  top: 10px;
  right: 15px;
  color: white;
  font-size: 35px;
  cursor: pointer;
}
</style>
</head>
<body>

<div style="text-align:center">
<h2>Responsive Image Gallery</h2>

<h4>aita first style. ai gulay tap korle aikhanei alada akta tab open hoiya image gula show korbo. abar back
    back korte chaile back button a tap kore back kora lagbo.
</h4>
</div>


<div class="responsive">
  <div class="gallery">
    <a href="../image/img1.webp">
      <img src="../image/img1.webp" alt="Cinque Terre" style=" width:100%; height: 300px; ">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a href="../image/img7.jpg">
      <img src="../image/img7.jpg" alt="Forest" style=" width:100%; height: 300px; ">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="../image/img6.jpg">
      <img src="../image/img6.jpg" alt="Northern Lights" style=" width:100%; height: 300px; ">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="../image/img5.jpg">
      <img src="../image/img5.jpg" alt="Mountains" style=" width:100%; height: 300px; ">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="clearfix"></div> <br><br><br><br><br><br>







<div style="text-align:center">
  <h2>Tabbed Image Gallery</h2>
  <p>ar aigula image a tap korle niche asbe. niche aktu boro kore ase aita aktu problem. oita fix korbo ni</p>
</div>

<!-- The four columns -->
<div class="row">
  <div class="column responsive">
    <img src="../image/img2.jpg" alt="Nature" style=" width:100%; height: 250px; " onclick="myFunction(this);">
  </div>
  <div class="column responsive">
    <img src="../image/img3.jpg" alt="Snow" style="width:100%; height: 250px; " onclick="myFunction(this);">
  </div>
  <div class="column responsive">
    <img src="../image/img1.webp" alt="Mountains" style="width:100%; height: 250px; " onclick="myFunction(this);">
  </div>
  <div class="column responsive">
    <img src="../image/img5.jpg" alt="Lights" style="width:100%; height: 250px; " onclick="myFunction(this);">
  </div>
</div>

<div class="container">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <img id="expandedImg" style="width:100%">
  <div id="imgtext"></div>
</div>   <br><br><br><br><br><br>

<script>
function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}
</script>



</body>
</html>


