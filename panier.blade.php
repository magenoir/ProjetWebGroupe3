@include('header')

<div class="tablo"> 
  <div class="coltablo">
    <div class="boutique">
      <div class="colonne">
        <div class="contenu">
          <table class="panier">
            <tr>
              <th>Commande n° XXX</th>
              <th>Nom produit</th>
              <th>Quantité</th>
              <th>Prix Unitaire</th>
              <th>Prix total</th>
            </tr>
            <tr>
              <td><img src="images/goodies 1.jpg"></td>
              <td>Carnet</td>
              <td>2</td>
              <td>150€</td>
              <td>300€</td>
            </tr>
            <tr>
              <td><img src="images/veste.png"></td>
              <td>Manteau</td>
              <td>1</td>
              <td>150€</td>
              <td>150€</td>
            </tr>
          </table>
          <table class="prix_panier">
            <tr>
              <th>Prix total</th>
            </tr>
            <tr>
              <td>450€</td>
            </tr>
          </table>
        </div>
      </div>
  </div>
</div>

@include('footer')