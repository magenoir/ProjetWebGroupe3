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

</style>


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




@include('footer')