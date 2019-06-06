</div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
            <div class="card-header">Destino</div>
            <div class="card-body">
              <h5 class="card-title">Seleccione uno</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <b><label for="selectorPartida">Seleccione localidad de desitno</label></b>
        <select class="form-control" id="selectorPartida"
          onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
          <option value="">Seleccione una</option>