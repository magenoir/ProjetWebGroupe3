 

            <!-- div pour le formulaire de connexion -->
            <div id="connect" class="modal">
              <form class="modal-content animate" method="POST" action="{{route('Connection')}}">
              @csrf
                <div class="fcontainer">
                  <span onclick="document.getElementById('connect').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>
                <div class="container">
                  <label id="E-mail"><b>E-mail</b></label>
                  <input class="con" type="text" placeholder="Enter E-mail" name="E-mail" required>

                  <label id="psw2"><b>Password</b></label>
                  <input class="con" type="password" placeholder="Enter Password" name="psw2" required>

                  <label id="Profile"><b>Profile</b></label>
                  <select class="ins" name="Profile">
                      <option value="1">Etudiant</option>
                      <option value="2">Membre BDE</option>
                      <option value="3">Salarié CESI</option>
                  </select>
                    
                  <button type="submit">Login</button>
                </div>
                <div class="container" style="background-color:#f1f1f1">
                  <button type="button" onclick="document.getElementById('connect').style.display='none', document.getElementById('choice').style.display='block'" class="cancelbtn">Annuler</button>
                  <span class="psw">Mot de passe oublié? <a href="#">Contactez le support.</a></span>
                </div>
              </form>
            </div>

            <!-- div pour le formulaire d'inscription -->
            <div id="inscrit" class="modal">
              <form class="modal-content animate" method="POST" action="{{route('Inscription')}}">
                @csrf
                <div class="fcontainer">
                  <span onclick="document.getElementById('inscrit').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>
                <div class="container">
                  <label id="Name"><b>Name</b></label>
                  <input class="ins" type="text" placeholder="Enter your Name" name="Name" required>

                  <label id="FName"><b>First-Name</b></label>
                  <input class="ins" type="text" placeholder="Enter your Name" name="FName" required>

                  <label id="E-mail2"><b>E-mail</b></label>
                  <input class="ins" type="text" placeholder="Enter E-mail" name="E-mail2" required>

                  <label id="Center"><b>Centre</b></label>
                  <select class="ins" name="Center">
                  @foreach ($centers as $center)
                      <option value="{{$center->Id_center}}">{{$center->center_name}}</option>
                  @endforeach  
                  </select>

                  <label id="Profile2"><b>Profile</b></label>
                  <select class="ins" name="Profile2" >
                      <option value="1">Etudiant</option>
                      <option value="2">Membre BDE</option>
                      <option value="3">Salarié CESI</option>
                  </select>

                  <label id="psw"><b>Password</b></label>
                  <input class="ins" type="password" placeholder="Enter Password" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

                  <label id="confpsw"><b>Confirm Password</b></label>
                  <input class="ins" type="password" placeholder="Confirm Password" name="confpsw" required>
                    
                  <button type="submit">S'inscrire</button>
                  
                  <label ><b>Accepter <a href="mentions">les conditions d'utilisations</a> :</b></label>
                  <input type="checkbox" required>
                </div>
                <div class="container" style="background-color:#f1f1f1">
                  <button type="button" onclick="document.getElementById('inscrit').style.display='none', document.getElementById('choice').style.display='block'" class="cancelbtn">Annuler</button>
                </div>
                
              </form>
            </div>