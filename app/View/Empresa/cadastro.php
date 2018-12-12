    <?php
    
    use Lib\SubNavPrimicipalDashboard;
    
    $subNav = new SubNavPrimicipalDashboard();
    
    ?>
    <main class="app-content">
        
        <?= $subNav->getSubNav(); ?>
              
      <!-- Containers-->
      <div class="tile mb-4">
       <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h2 class="mb-3 line-head" id="containers">Cadastro</h2>
            </div>
          </div>
        </div>       
     
       <div class="row">
          <div class="col-lg-12">           
            <div class="bs-component">
              <div class="alert alert-dismissible alert-warning">
                <button class="close" type="button" data-dismiss="alert">×</button>                
                <strong>Atenção!</strong> Não encontrado uma empresa para o usuário, é necessário realizar o cadastro. Se empresa já cadastrada, por favor, saia do sistema e entre novamente!
              </div>
            </div>
          </div>
        </div>
                    
      <div class="row">
          <div class="col-lg-12">
            <div class="bs-component">                            
              <div class="card mb-3 border-success">
                
                <div class="card-body">
                  <p class="card-text">
                      Some quick example text to build on the card title and make up the bulk of the card's content.
                  </p>
                  <a class="card-link" href="#">Editar</a>                  
                </div>
                
              </div>                           
            </div>
          </div>
          
        </div>
      </div>
    </main>
    