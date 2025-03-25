<?php
/**
 * Home Page
 *
 * PHP version 7
 *
 * @category  Page
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */

?>
<?php  require_once 'header.php'; ?>
<?php
require_once 'inc/manager-db.php';
if (isset($_GET['name']) && !empty($_GET['name']) ){
  $nomPays = ($_GET['name']);
  $infoPays = getInfo();
  }
  else{
  $nomPays = "Monde";
  $desPays = getAllCountries();
  }
  $data = [
    'code' => 'FRA',
    'continent' => 'Europe',
    'capitale' => 'Paris',
    'population' => '59,225,700',
    'superficie' => '551500',
    'langues' => [
        ['nom' => 'French', 'pourcentage' => 93.6],
        ['nom' => 'Arabic', 'pourcentage' => 2.5],
        ['nom' => 'Portuguese', 'pourcentage' => 1.2],
        ['nom' => 'Spanish', 'pourcentage' => 0.4],
        ['nom' => 'Italian', 'pourcentage' => 0.4],
        ['nom' => 'Turkish', 'pourcentage' => 0.4]
    ],
    'pnb' => '1,424,285.00',
    'chef_etat' => 'Jacques Chirac',
    'esperance_vie' => 78.8
];
?>
<main role="main" class="flex-shrink-0">

  <div class="text-center">
    <h1><?= $nomPays; ?></h1>
      <?php $source=strtolower($infoPays->Code2).".png"; ?>
          <img src="images/flag/<?= $source;?>" height="60" width="90">
    <div>
     <table class="table table-bordered">
            <tr><th>Code</th><td><?= $data['code'] ?></td></tr>
            <tr><th>Continent</th><td><?= $data['continent'] ?></td></tr>
            <tr><th>Capitale</th><td><?= $data['capitale'] ?></td></tr>
            <tr><th>Population</th><td><?= $data['population'] ?></td></tr>
            <tr><th>Superficie</th><td><?= $data['superficie'] ?> km²</td></tr>
     </table>
    </div>
  </div>
</main>

        <button class="btn btn-primary w-100">Voir les villes</button>
        <h4 class="mt-4">Langues parlées</h4>
        <table class="table table-striped">
            <tr><th>Nom</th><th>Pourcentage</th></tr>
            <?php foreach ($data['langues'] as $langue): ?>
                <tr><td><?= $langue['nom'] ?></td><td><?= $langue['pourcentage'] ?>%</td></tr>
            <?php endforeach; ?>
        </table>
        <h4 class="mt-4">Données économiques et sociales</h4>
        <table class="table table-bordered">
            <tr><th>Population</th><td><?= $data['population'] ?></td></tr>
            <tr><th>PNB</th><td><?= $data['pnb'] ?></td></tr>
            <tr><th>Chef d'État</th><td><?= $data['chef_etat'] ?></td></tr>
            <tr><th>Espérance de vie</th><td><?= $data['esperance_vie'] ?></td></tr>
        </table>
        <h4 class="mt-4">Données actualisées</h4>
        <form>
            <div class="mb-2">
                <label>Population:</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-2">
                <label>PNB:</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-2">
                <label>Chef d'État:</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-2">
                <label>Espérance de vie:</label>
                <input type="text" class="form-control">
            </div>
            <button class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
</body>
</html>
<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>