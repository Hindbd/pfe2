<form class="form-horizontal" id="form1" method="POST" action="{{ route('editprofile') }}">
                      @csrf
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nom</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="name" placeholder="Nom" name="name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Prénom</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="prenom" placeholder="Prénom" name="prenom">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Valider</button>
                        </div>
                      </div>
                    </form>