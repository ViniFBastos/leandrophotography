  <div id="map"></div>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1xdEVYy8IZdBKJGQp_QpDWaNQT7ZHGhY&sensor=false&extension=.js"></script> 
  <script> google.maps.event.addDomListener(window, 'load', init);
var map;
function init() {
    var mapOptions = {
        center: new google.maps.LatLng(51.211215, 3.226287),
        zoom: 15,
        zoomControl: true,
        zoomControlOptions: {
            style: google.maps.ZoomControlStyle.DEFAULT,
        },
        disableDoubleClickZoom: false,
        mapTypeControl: true,
        mapTypeControlOptions: {
            style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
        },
        scaleControl: true,
        scrollwheel: false,
        streetViewControl: true,
        draggable : true,
        overviewMapControl: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
		styles: [{stylers:[{saturation:-100},{gamma:1}]},{elementType:"labels.text.stroke",stylers:[{visibility:"off"}]},{featureType:"poi.business",elementType:"labels.text",stylers:[{visibility:"off"}]},{featureType:"poi.business",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"poi.place_of_worship",elementType:"labels.text",stylers:[{visibility:"off"}]},{featureType:"poi.place_of_worship",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"road",elementType:"geometry",stylers:[{visibility:"simplified"}]},{featureType:"water",stylers:[{visibility:"on"},{saturation:50},{gamma:0},{hue:"#50a5d1"}]},{featureType:"administrative.neighborhood",elementType:"labels.text.fill",stylers:[{color:"#333333"}]},{featureType:"road.local",elementType:"labels.text",stylers:[{weight:0.5},{color:"#333333"}]},{featureType:"transit.station",elementType:"labels.icon",stylers:[{gamma:1},{saturation:50}]}]
		}

    var mapElement = document.getElementById('map');
    var map = new google.maps.Map(mapElement, mapOptions);
    var locations = [
        ['Boudewijn Ostenstraat 2', 51.211215, 3.226287]
    ];
    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            icon: 'style/images/map-pin.png',
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map
        });
    }
}
</script>
  <div class="light-wrapper">
    <div class="container inner">
      <div class="row">
        <div class="col-sm-8">
          <h3 class="section-title">Feel Free to Drop Me a Line</h3>
          <p>E aí vamos trocar uma ideia?
Você me conta seu sonho, sua ideia e através das minhas lentes vamos fazer o possível para realizar.
</p>
          <div class="divide20"></div>
          <div class="form-container">
            <form class="aforms" method="post">
              <fieldset>
                <ol style="list-style:none">
                  <li class="form-row text-input-row name-field">
                    <input type="text" name="f_nome" class="text-input" placeholder="Nome" title="Nome (Obrigatório)"/>
                  </li>
                  <li class="form-row text-input-row email-field">
                    <input type="text" name="f_email" class="text-input" placeholder="E-mail" title="Email (Obrigatório)"/>
                  </li>
                  <li class="form-row text-input-row email-field">
                    <input type="text" name="f_telefone" class="text-input" placeholder="Telefone" title="Telefone (Obrigatório)"/>
                  </li>
                  <li class="form-row text-input-row subject-field">
                    <input type="text" name="f_assunto" class="text-input" placeholder="Assunto" title="Assunto"/>
                  </li>
                  <li class="form-row text-area-row">
                    <textarea name="f_mensagem" placeholder="Mensagem" class="text-area"></textarea>
                  </li>
                  <li class="button-row">
                    <input type="submit" value="Enviar" name="btn-enviar" class="btn btn-submit" />
                  </li>
                </ol>
              </fieldset>
			  <?
				include("view_form_contato.php");
			  ?>
            </form>
          </div>
          <!-- /.form-container --> 
        </div>
        <!-- /.span8 -->
        <aside class="col-sm-4 sidebar lp20">
          <div class="sidebox widget">
            <h3 class="section-title widget-title">Endereço</h3>
            <p>Fusce dapibus, tellus commodo, tortor mauris condimentum utellus fermentum, porta sem malesuada magna. Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur.</p>
            <address>
            <strong>Finch, Inc.</strong><br>
            Moon Street Light Avenue, 14/05 <br>
            Jupiter, JP 80630<br>
            <abbr title="Phone">P:</abbr> 00 (123) 456 78 90 <br>
            <abbr title="Email">E:</abbr> <a href="mailto:#">first.last@email.com</a>
            </address>
          </div>
          <!-- /.widget --> 
        </aside>
        <!-- /.span4 --> 
      </div>
      <!-- /.row --> 
    </div>
  </div>
  <!-- /.light-wrapper -->
 