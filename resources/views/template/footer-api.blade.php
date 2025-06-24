  <!-- FOOTER-API -->
  <div class="footer">
      <div class="grid grid--footer">
          <div class="col-30 footer--card footer--card--api">
              <h3 class="text-4">Media / Tech Credits</h3>
              <ul class="list-group align-items-left">
                  <li><a target="_blank" href="https://pixabay.com">Pixabay</a></li>
                  <li><a target="_blank" href="https://pexels.com">Pexels</a></li>
                  <li><a target="_blank" href="https://openai.com">OpenAI ChatGPT</a></li>
                  <li><a href="/laravel">Laravel Framework</a></li>
              </ul>
          </div>
          <div class="col-30 footer--card footer--card--api">
              <h3 class="text-4">Nasa Resources</h3>
              <ul class="list-group align-items-left">
                  <li><a target="_blank" href="https://nasa.gov">National Aeronautics and Space
                          Administration</a></li>
                  <li><a target="_blank" href="https://cneos.jpl.nasa.gov">Center for Near Earth Object
                          Studies</a></li>
                  <li><a target="_blank" href="https://neo-bolide.ndc.nasa.gov/#/">Meteors Bolides Detections</a></li>

              </ul>
          </div>

          <div class="col-30 footer--card footer--card--api">
              <h3 class="text-4">Space Carrier Suppliers</h3>
              <ul class="list-group align-items-left">
                  <li><a target="_blank" href="https://jpl.nasa.gov">Nasa Jet Propulsion Laboratory</a></li>
                  <li><a target="_blank" href="https://spacex.com">SpaceX - Upcoming Launch</a></li>
              </ul>
              <br>
              <hr><br>
              <h3 class="text-4">System Access</h3>
              <ul class="list-group align-items-left">
                  @guest
                  <li><a href="{{ route('login') }}">Login</a></li>
                  <!-- <li><a href="{{ route('register') }}">Register</a></li> -->
                  @endguest

                  @auth
                  <li><a href="{{ route('dashboard') }}">Dasboard</a></li>
                  <li><a href="{{ route('profile.edit') }}">Profile</a></li>
                  <li>
                      <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                          @csrf
                          <button type="submit" class="p-0 m-0 align-baseline">Logout</button>
                      </form>
                  </li>
                  @endauth
              </ul>
          </div>

      </div>
  </div>

  <div class="socket">
      <p>Laravel {{ Illuminate\Foundation\Application::VERSION }} - PHP {{ PHP_VERSION }} - NASA JPL API Datas
          Collection Web App. &copy <?php echo date("Y"); ?> Fabrizio Del Tufo @
          <a style="color:yellow" target="_blank" href="https://wewebby.com">WeWebby.com</a>
      </p>
  </div>

  <!-- BOOTSTRAP JS -->
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>


  <!-- CUSTOM JS -->
  <script src="/js/app.js"></script>