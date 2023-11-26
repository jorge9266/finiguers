<style>
  gmp-map {
    margin-left: 25%;
    width: 50%;
    height: 40%;
  }

  html,
  mapa {
    height: 100%;
  }
</style>



<mapa>
  <gmp-map center="36.719017028808594,-4.4215497970581055" zoom="16" map-id="DEMO_MAP_ID">
    <gmp-advanced-marker position="36.719017028808594,-4.4215497970581055" title="My location">
    </gmp-advanced-marker>
  </gmp-map>
</mapa>

<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_ptCPq9dtmb-4hZUdWNacjNHY8SvVlN4&callback=console.debug&libraries=maps,marker&v=beta">
</script>