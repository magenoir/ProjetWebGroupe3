@include('header')
<style type="text/css">
  .boutique{
    background-color: #ccc;
    width: auto;
    height: auto;
    margin : 2em;
  }

.colonne{
  background-color: #fff;
  padding: 8px;
}

.tablo {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal coltablo that sits next to each other */
.coltablo {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  padding: 0 4px;
  text-align: center;
}

.coltablo img {
  margin-top: 8px;
  width: 225px;
  height: 225px;
  vertical-align: middle;
}

/* Responsive layout - makes a two coltablo-layout instead of four coltablo */
@media screen and (max-width: 800px) {
  .coltablo {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
    max-height: 50%;
  }
}

/* Responsive layout - makes the two coltablo stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .coltablo {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
    max-height: 100%;
  }
}

</style>

<div class="tablo"> 
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
  </div>
</div>




@include('footer')