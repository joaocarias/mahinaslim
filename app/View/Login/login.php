<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
   <h1 class="display-4">Login</h1>
</div>
<div class="container">
    <div class="col-md-5 mx-auto">
        <div class="card border-primary mb-3">  
            <div class="card-body">
        
                <form method="POST" action="login/logar">
                  <div class="form-group">
                    <label for="loginInput">Login</label>
                    <input type="text" class="form-control" id="loginInput" name="loginInput" placeholder="Login" required maxlength="14">                    
                  </div>
                  <div class="form-group">
                    <label for="senhaInput">Senha</label>
                    <input type="password" class="form-control" id="senhaInput" placeholder="Senha" name="senhaInput" required maxlength="20">
                  </div>                  
                    <button type="submit" class="btn btn-primary" name="btnAcessar" value="btnAcessar">Acessar</button>
                </form>
                
            </div>
          </div>
       </div>

