@include('header')
<?php

  $select = array(); 
  $select['id'] = "phlevis501"; /*$_get['id_command*/
  $select['qnt'] = 2; /*$_get['nb_command*/
  $select['prix'] = 84.95; /*$_get['prix*/

?>

<div class="tablo"> 
  <div class="coltablo">
    <div class="boutique">
      <div class="colonne">
        <div class="contenu">
          <img src="images/goodies 1.jpg">
          <h4><?php echo $select['id'];?></h4>
          <p><?php echo $select['prix'];?>€
            <a href="">
              <img src="images/panier icon.png" style="width: 20px;height: 20px">
            </a>
          </p>
        </div>
      </div>
    </div>
    <div class="boutique">
      <div class="colonne">
        <div class="contenu">
          <img src="images/veste.png">
          <h4><?php echo $select['id'];?></h4>
          <p><?php echo $select['prix'];?>€
            <a href="">
              <img src="images/panier icon.png" style="width: 20px;height: 20px">
            </a>
          </p>
        </div>
      </div>
    </div>
    <div class="boutique">
      <div class="colonne">
        <div class="contenu">
          <img src="images/pull.png">
          <h4>Carnet</h4>
          <p>prix : 150€ 
            <a href="">
              <img src="images/panier icon.png" style="width: 20px;height: 20px"> 
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="coltablo">
    <div class="boutique">
      <div class="colonne">
        <div class="contenu">
          <img src="images/goodies 1.jpg">
          <h4>Carnet</h4>
          <p>prix : 150€ 
            <a href="">
              <img src="images/panier icon.png" style="width: 20px;height: 20px">
            </a>
          </p>
        </div>
      </div>
    </div>
    <div class="boutique">
      <div class="colonne">
        <div class="contenu">
          <img src="images/veste.png">
          <h4>Carnet</h4>
          <p>prix : 150€ 
            <a href="">
              <img src="images/panier icon.png" style="width: 20px;height: 20px">
            </a>
          </p>
        </div>
      </div>
    </div>
    <div class="boutique">
      <div class="colonne">
        <div class="contenu">
          <img src="images/pull.png">
          <h4>Carnet</h4>
          <p>prix : 150€ 
            <a href="">
              <img src="images/panier icon.png" style="width: 20px;height: 20px">
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="coltablo">
    <div class="boutique">
      <div class="colonne">
        <div class="contenu">
          <img src="images/goodies 1.jpg">
          <h4>Carnet</h4>
          <p>prix : 150€ 
            <a href="">
              <img src="images/panier icon.png" style="width: 10px;height: 10px">
            </a>
          </p>
        </div>
      </div>
    </div>
    <div class="boutique">
      <div class="colonne">
        <div class="contenu">
          <img src="images/veste.png">
          <h4>Carnet</h4>
          <p>prix : 150€ 
            <a href="">
              <img src="images/panier icon.png" style="width: 20px;height: 20px">
            </a>
          </p>
        </div>
      </div>
    </div>
    <div class="boutique">
      <div class="colonne">
        <div class="contenu">
          <img src="images/pull.png">
          <h4>Carnet</h4>
          <p>prix : 150€ 
            <a href="">
              <img src="images/panier icon.png" style="width: 10px;height: 10px">
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="coltablo">
    <div class="boutique">
      <div class="colonne">
        <div class="contenu">
          <img src="images/goodies 1.jpg">
          <h4>Carnet</h4>
          <p>prix : 150€ 
            <a href="">
              <img src="images/panier icon.png" style="width: 20px;height: 20px">
            </a>
          </p>
        </div>
      </div>
    </div>
    <div class="boutique">
      <div class="colonne">
        <div class="contenu">
          <img src="images/veste.png">
          <h4>Carnet</h4>
          <p>prix : 150€ 
            <a href="">
              <img src="images/panier icon.png" style="width: 20px;height: 20px">
            </a>
          </p>
        </div>
      </div>
    </div>
    <div class="boutique">
      <div class="colonne">
        <div class="contenu">
          <img src="images/pull.png">
          <h4 >Carnet</h4>
          <p>prix : 150€ 
            <a href="">
              <img src="images/panier icon.png" style="width: 20px;height: 20px">
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>




@include('footer')