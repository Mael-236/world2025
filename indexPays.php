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

    $pays = ($_GET['name']);
  
?>
<main role="main" class="flex-shrink-0">

<div class="container">
  <h1><?= $pays; ?></h1>
  <div>
     <table class="table">
         <tr>
           <th>Code</th>
           <th>Continent</th>
           <th>Capitale</th>
           <th>Population</th>
           <th>Superficie</th>
          </tr>
          <tr>
            <td> <?php echo getInfo($pays->Code) ?></td>
            <td> <?php echo $pays->Continent ?></td>
            <td> <?php echo getCapitale($pays->Capital) ?></td>
            <td> <?php echo $pays->Population ?></td>
            <td> <?php echo $pays->SurfaceArea ?></td>
          </tr>
     </table>
    </div>

<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>
