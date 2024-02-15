<?php 
/*
* Plugin Name: FITSIZE
* Description: FITSIZE website
* Version: 1.0
* Author: Ferdawes Omrani
*/

function fitsizePluginFunction(){
  $pageTitle = 'FITSIZE options';
  $menuTitle ='FITSIZE';
  $capability = 'manage_options';
  $slug = 'fitsize-plugin';
  $callback = 'menuFunction';
  $icon ='dashicons-paperclip';
  $position = 60;
  
  add_menu_page($pageTitle, $menuTitle , $capability , $slug , $callback , $icon , $position);
}

add_action('admin_menu', 'fitsizePluginFunction');

function enqueue_plugin_styles() {
  wp_enqueue_style( 'plugin-style', get_stylesheet_directory_uri() . './style.css', array(), '1.0.0', 'all' ); // Enqueue plugin styles
  wp_enqueue_script('plugin-js', get_stylesheet_directory_uri() . './index.js');
}
add_action( 'wp_enqueue_scripts', 'enqueue_plugin_styles' );

function menuFunction(){
?>
<div class="principleconatiner">
  <div class="dashboardContainer">
    <?php 
    getTheHeader();
    getDashboard();
    ?>
  </div>
  <div class="referentielContainer">
    <?php 
    getTheHeader();
    ?>
  </div>
  <div class="historiqueContainer">
    <?php 
    getTheHeader();
    getHistorique();
    ?>
  </div>
  <div class="adminContainer">
    <?php 
    getTheHeader();
    getAdmin();
    ?>
  </div>
  <div class="settingsContainer">
    <?php 
    getTheHeader();
    getSettings();
    ?>
  </div>
</div>

<?php
}
function getTheHeader(){

$headerCode = '
<header>
  <ul>
    <li><a href="#dashboard">Dashboard</a></li>
    <li><a href="#referentiel">Référentiel des tailles</a></li>
    <li><a href="#historique">Historique des scans</a></li>
    <li><a href="#admin">Administration</a></li>
    <li><a href="#paramater">Paramètre</a></li>
  </ul>
</header>
';
echo $headerCode;
}

function getDashboard(){
$dashboardCode = '
<div id="dashboard" class="dashboard">
  <div class="Consommation">
    <div class="charts">
      <div class="chartList">
        <h2 class="consommationTitle">Votre Consommation</h2><br>
        <div class="firstChart">
          <div class="fisrtChartBlock"></div>
          <p><b>40</b> scans effectués</p>
        </div>
        <div class="secondChart">
          <div class="secondChartBlock"></div>
          <p><b>20</b> scans effectués</p>
        </div>
      </div>
    </div>
    <div class="chartBlock"></div>
  </div>
  <div class="offreSide">
    <div class="votreOffre">
      <h2><i class="fa-solid fa-percent"></i> Votre Offre</h2>
      <span class="thin">Formule Basic</span>
      <p>Souscription pour 60 scans</p>
      <span class="bold">99,99£<sub>/mois</sub></span>
    </div>
    <div class="bar"></div>
    <div class="abonnement">
      <h2>Upgrader votre abonnement</h2>
      <span class="thin">Accédez à la formule Basic Plus</span>
      <p>Souscription pour 150 scans pour <b>160£<sub>/mois</sub></b></p>
      <button class="btnOffre"><i class="fa-solid fa-arrow-up" style="color: #00acfc;"></i> Passer à l\'offre Basic
        Plus</button>
    </div>
  </div>
  <div class="engagement">
    <h1><span class="bold">FITSIZE</span></h1>
    <div class="engagementSide">
      <h3>Engagement</h3>
      <p>Veuillez accepter nos conditions de vente FITSIZE pour continuer à profiter de votre service de mesure
        corporelle révolutionnaire.</p>
      <div class="conditions" style="display: inline-block;">
        <div id="conditionsButton">
          <div id="switchtoggle" onclick="toggleSwitch()"></div>
        </div>
        <p>J\'accepte les <ins>conditions de vente</ins> FITSIZE</p>
      </div>
    </div>
  </div>
</div>
';
echo $dashboardCode;
}

function getHistorique(){
$historiqueCode ='
<div id="historique" class="container">
  <div class="table">
    <table>
      <caption>
        <td></td>
        <td><b>Nom du produit</b></td>
        <td><b>Taille préconisé</b></td>
        <td><b>Taille préconisé (En %)</b></td>
        <td><b>Utilisateur inscrit</b></td>
        <td><b>Adresse email</b></td>
        <td><b>Date</b></td>
      </caption>
      <tr class="firstChild">
        <td><input type="checkbox"></td>
        <td><input type="text"></td>
        <td><input type="number" class="number"></td>
        <td><input type="number" class="number"></td>
        <td><input type="number" class="number"></td>
        <td></td>
        <td><input type="number" class="number"></td>
      </tr>
      <tr>
        <td><input type="checkbox"></td>
        <td>T-shirt colibri noir</td>
        <td>L</td>
        <td><button>98%</button></td>
        <td>Non</td>
        <td><i class="fa-solid fa-xmark" style="color: #ff0000;"></i></td>
        <td>6 september 2023</td>
      </tr>
      <tr>
        <td><input type="checkbox"></td>
        <td>Hoodie colibri blanc</td>
        <td>XL</td>
        <td><button>99%</button></td>
        <td>Oui</td>
        <td>perinimathieu@gmail.com</td>
        <td>6 september 2023</td>
      </tr>
      <tr>
        <td><input type="checkbox"></td>
        <td>Short roussignole vert</td>
        <td>42</td>
        <td><button>95%</button></td>
        <td>Non</td>
        <td><i class="fa-solid fa-xmark" style="color: #ff0000;"></i></td>
        <td>1 september 2023</td>
      </tr>
      <tr>
        <td><input type="checkbox"></td>
        <td>Jean bleu délavé</td>
        <td>46</td>
        <td><button>84%</button></td>
        <td>Non</td>
        <td><i class="fa-solid fa-xmark" style="color: #ff0000;"></i></td>
        <td>28 aout 2023</td>
      </tr>
      <tr>
        <td><input type="checkbox"></td>
        <td>T-shirt colibri noir</td>
        <td>L</td>
        <td><button>98%</button></td>
        <td>Non</td>
        <td><i class="fa-solid fa-xmark" style="color: #ff0000;"></i></td>
        <td>28 aout 2023</td>
      </tr>
      <tr>
        <td><input type="checkbox"></td>
        <td>Hoodie colibri blanc</td>
        <td>XL</td>
        <td><button>99%</button></td>
        <td>Oui</td>
        <td>ericdupond@gmail.com</td>
        <td>26 aout 2023</td>
      </tr>
      <tr>
        <td><input type="checkbox"></td>
        <td>T-shirt colibri noir</td>
        <td>L</td>
        <td><button>98%</button></td>
        <td>Non</td>
        <td><i class="fa-solid fa-xmark" style="color: #ff0000;"></i></td>
        <td>22 aout 2023</td>
      </tr>
      <tr>
        <td><input type="checkbox"></td>
        <td>Hoodie colibri blanc</td>
        <td>XL</td>
        <td><button>99%</button></td>
        <td>Oui</td>
        <td>jahnnybegood@gmail.com</td>
        <td>22 aout 2023</td>
      </tr>
    </table>
    <button class="exporter">Exporter</button>
  </div>
</div>
';
echo $historiqueCode;
}

function getAdmin(){
$adminCode ='
<div id="admin" class="settingsContainer">
  <div class="settings">
    <h2>Settings</h2>
    <form>
      <label for="publicApiKey">FITSIZE Public API Key *</label>
      <input type="text" required id="publicApiKey" name="publicApiKey" placeholder="  Aa123"><br>
      <br>

      <label for="privateApiKey">FITSIZE Private API Key *</label>
      <input type="text" required id="privateApiKey" name="privateApiKey" placeholder="  pk_111222333444555666777888">
      <a href="#">Need help finding your API key?</a><br>
      <br>

      <p>Visibility on your share of the FITSIZE module</p>

      <div class="conditions">
        <div id="conditionsButton">
          <div id="switchtoggle" onclick="toggleSwitch()"></div>
        </div>
        <p>Disable</p>
      </div>

      <input type="submit" value="save" class="button">
    </form>
  </div>
</div>
';
echo $adminCode;
}

function getSettings(){
$settingsCode = '
<div id="paramater" class="container">
  <div class="sections">
    <section class="fitsizeBtn">
      <div id="conditionsButton">
        <div id="switchtoggle" onclick="toggleSwitch()"></div>
      </div>
      <p>Utiliser le bouton par defaut de FITSIZE</p>
    </section>
    <section class="block">
      <section class="customBtnColors">
        <h3>Button settings</h3>
        <div class="buttonSettings">
          <div class="backgroundColor">
            <h4>Background Color</h4>
            <p class="thin">Please select Background Color</p><br>
            <div class="colors">
              <div class="black color" onclick="colorChange(" background","black")"></div>
              <div class="blue color" onclick="colorChange(" background","rgb(57, 57, 160)")"></div>
              <div class="green color" onclick="colorChange(" background","rgb(101, 165, 101)")"></div>
              <div class="violet color" onclick="colorChange(" background","rgb(119, 39, 205)")"></div>
              <div class="red color" onclick="colorChange(" background","rgb(171, 25, 25)")"></div>
              <div class="orange color" onclick="colorChange(" background","rgb(203, 134, 7)")"></div>
              <div class="white color" onclick="colorChange(" background","white")"></div>
              <span class="costumColor">Costum Color</span>
            </div>
          </div>
          <div class="borderColor">
            <h4>Border Color</h4>
            <p class="thin">Please select Border Color</p><br>
            <div class="colors">
              <div class="black color" onclick="colorChange(" border","black")"></div>
              <div class="blue color" onclick="colorChange(" border","rgb(57, 57, 160)")"></div>
              <div class="green color" onclick="colorChange(" border","rgb(101, 165, 101)")"></div>
              <div class="violet color" onclick="colorChange(" border","rgb(119, 39, 205)")"></div>
              <div class="red color" onclick="colorChange(" border","rgb(171, 25, 25)")"></div>
              <div class="orange color" onclick="colorChange(" border","rgb(203, 134, 7)")"></div>
              <div class="white color" onclick="colorChange(" border","white")"></div>
              <span class="costumColor">Costum Color</span>
            </div>
          </div>
          <div class="textColor">
            <h4>Text Color</h4>
            <p class="thin">Please select Text Color</p><br>
            <div class="colors">
              <div class="black color" onclick="colorChange(" text","black")"></div>
              <div class="blue color" onclick="colorChange(" text","rgb(57, 57, 160)")"></div>
              <div class="green color" onclick="colorChange(" text","rgb(101, 165, 101)")"></div>
              <div class="violet color" onclick="colorChange(" text","rgb(119, 39, 205)")"></div>
              <div class="red color" onclick="colorChange(" text","rgb(171, 25, 25)")"></div>
              <div class="orange color" onclick="colorChange(" text","rgb(203, 134, 7)")"></div>
              <div class="white color" onclick="colorChange(" text","white")"></div>
              <span class="costumColor">Costum Color</span>
            </div>
          </div>
        </div>
      </section>
      <div class="seperator"></div>
      <section class="buttonPreview">
        <h3>Button preview</h3>
        <p class="thin">This is how your widget button will look on your website</p>
        <button id="customButton">Trouver ma Taille <i class="fa-solid fa-chevron-right"
            id="fa-chevron-right"></i></i></button>
      </section>
    </section>
  </div>
</div>
';
echo $settingsCode;
}