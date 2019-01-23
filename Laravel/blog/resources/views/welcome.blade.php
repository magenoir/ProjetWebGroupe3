@include('header')
        <main>
            <div class="w3-content w3-display-container" style="max-width:100%">
              <img class="mySlides" src="images/goodies 1.jpg" style="width:100px, height:100px">
              <img class="mySlides" src="images/cesi logo 2.jpg" style="width:100px, height:100px">
              <img class="mySlides" src="images/evenement.jpg" style="width:100px, height:100px">
              <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
                <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
              </div>
            </div>


            <div class="article">
              <div class="event">
                <h2>TITLE Event</h2>
                <div class="champs" style="height:200px;">Image</div>
                <p>Some text..</p>
                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
              </div>
            </div>
        </main>
@include('footer')
