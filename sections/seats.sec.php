<!-------Seat rezervation template ----->
<div class="movie-container">
	
    <label for="">Your movie</label>

    <select id="movie">
        <!-- <option value="10"> Spiderman 2D- 10lei </option>
        <option value="12"> Joker 3D- 12lei</option>
        <option value="10"> Fast and Furious 2D- 10lei</option>
        <option value="12"> The Gift 3D- 12lei</option> -->
          <?php 
  foreach ($cartItem as $item) {

 ?>
        <option value="<?php echo $item['price']; ?>"><?php echo $item["name"]; ?></option>
        <?php } ?>
    </select>

</div>
<ul class="showcase">
    <li>
        <div class="seat"></div>
        <small>N/A</small>
    </li>
    <li>
        <div class="seat selected"></div>
        <small>Selectate</small>
    </li>
    <li>
        <div class="seat occupied"></div>
        <small>Ocupate</small>
    </li>
</ul>
<h3 style="text-align: center;">Please select you seats.</h3>
<div class="container">
    <div class="screen"></div>
    <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
    </div>
    <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat occupied"></div>
        <div class="seat"></div>
        <div class="seat"></div>
    </div>
    <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
    </div>
    <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
    </div>
    <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
    </div>
    <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat occupied"></div>
        <div class="seat"></div>
        <div class="seat"></div>
    </div>

</div>

<p class="text"> Ati selectat <span id="count"> 0 </span> locuri. <br>