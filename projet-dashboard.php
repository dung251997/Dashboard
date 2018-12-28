<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Manager Projet</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php require('global/template-components/head_general.php'); ?>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
    crossorigin="anonymous">
  <?php require('global/template-components/header.php'); ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>

<body>
  <div class="card">
    <div class="content">
      <div class="container-fluid">
        <div class="app-dashboard-body off-canvas-wrapper">

          <div id="app-dashboard-sidebar" class="app-dashboard-sidebar position-left off-canvas off-canvas-absolute reveal-for-medium"
            data-off-canvas style="padding-top:100px;">
            <div class="app-dashboard-sidebar-title-area">
              <div class="app-dashboard-close-sidebar">
                <!-- <h3 class="app-dashboard-sidebar-block-title">GlobeDreamers</h3> -->
                <!-- Close button -->
                <button id="close-sidebar" data-app-dashboard-toggle-shrink class="app-dashboard-sidebar-close-button show-for-medium"
                  aria-label="Close menu" type="button">
                  <span aria-hidden="true"><a href="#"><i class="large fa fa-angle-double-left"></i></a></span>
                </button>
              </div>
              <div class="app-dashboard-open-sidebar">
                <button id="open-sidebar" data-app-dashboard-toggle-shrink class="app-dashboard-open-sidebar-button show-for-medium"
                  aria-label="open menu" type="button">
                  <span aria-hidden="true"><a href="#"><i class="large fa fa-angle-double-right"></i></a></span>
                </button>
              </div>
            </div>
            <div class="app-dashboard-sidebar-inner">
              <ul class="menu vertical">
                <li><a href="dashboard.php">
                    <i class="large fa fa-chart-line"></i><span class="app-dashboard-sidebar-text">Dashboard</span>
                  </a></li>
                <li><a href="utilisateur.php" class="is-active">
                    <i class="large fa fa-user"></i><span class="app-dashboard-sidebar-text">Utilisateur</span>
                  </a></li>
                <li><a href="entreprise.php">
                    <i class="large fa fa-industry"></i><span class="app-dashboard-sidebar-text">Entreprise</span>
                  </a></li>
                <li><a href="projet-dashboard.php">
                    <i class="large fa fa-table"></i><span class="app-dashboard-sidebar-text">Projets</span>
                  </a></li>
                <li><a>
                    <i class="large fa fa-magic"></i><span class="app-dashboard-sidebar-text">UI</span>
                  </a></li>
              </ul>
            </div>
          </div>
          <table class="table-expand">
            <thead>
              <tr class="table-expand-row">
                <th width="200">Jours</th>
                <th>Nombre Projet</th>
                <th class="text-right" width="150">Montant</th>
                <th width="150">Status</th>
                <th width="50"></th>
                <th width="50">Edit</th>
              </tr>
            </thead>
            <tbody>
              <tr class="table-expand-row" data-open-details>
                <td contenteditable="true">Août 15</td>
                <td contenteditable="true">Madagasca</td>
                <td class="text-right" contenteditable="true">$5,412.0</td>
                <td contenteditable="true">En cours</td>
                <td><button class="open">+</button></td>
                <td><button class="edit"><i class="fas fa-pen"></i></button></td>
              </tr>

              <tr class="table-expand-row-content" style="display: none;">
                <td colspan="8" class="table-expand-row-nested">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque unde quaerat reprehenderit ipsa
                    ipsam, adipisci facere repellendus impedit at, quisquam dicta optio veniam quia nesciunt, inventore
                    quod in neque magni?</p>
                </td>
              </tr>

              <tr class="table-expand-row" data-open-details>
                <td>Jul 15</td>
                <td>New York</td>
                <td class="text-right">$14,251.30</td>
                <td>En cours</td>
                <td><button class="open">+</button></td>
                <td><button class="edit"><i class="fas fa-pen"></i></button></td>
              </tr>

              <tr class="table-expand-row-content">
                <td colspan="8" class="table-expand-row-nested">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque unde quaerat reprehenderit ipsa
                    ipsam, adipisci facere repellendus impedit at, quisquam dicta optio veniam quia nesciunt, inventore
                    quod in neque magni?</p>
                </td>

              </tr>

              <tr class="table-expand-row" data-open-details>
                <td>Jun 15</td>
                <td>Orléan</td>
                <td class="text-right">$600.10</td>
                <td>En cours</td>
                <td><button class="open">+</button></td>
                <td><button class="edit"><i class="fas fa-pen"></i></button></td>
              </tr>

              <tr class="table-expand-row-content">
                <td colspan="8" class="table-expand-row-nested">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque unde quaerat reprehenderit ipsa
                    ipsam, adipisci facere repellendus impedit at, quisquam dicta optio veniam quia nesciunt, inventore
                    quod in neque magni?</p>
                </td>
              </tr>

              <tr class="table-expand-row" data-open-details>
                <td>Mai</td>
                <td>Lyon</td>
                <td class="text-right">$4,050.10</td>
                <td>En cours</td>
                <td><button class="open">+</button></td>
                <td><button class="edit"><i class="fas fa-pen"></i></button></td>
              </tr>

              <tr class="table-expand-row-content">
                <td colspan="8" class="table-expand-row-nested">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque unde quaerat reprehenderit ipsa
                    ipsam, adipisci facere repellendus impedit at, quisquam dicta optio veniam quia nesciunt, inventore
                    quod in neque magni?</p>
                </td>
              </tr>

              <tr class="table-expand-row" data-open-details>
                <td>April 15</td>
                <td>Tokyo</td>
                <td class="text-right">$4,123.10</td>
                <td>En cours</td>
                <td><button class="open">+</button></td>
                <td><button><i class="fas fa-pen"></i></button></td>
              </tr>

              <tr class="table-expand-row-content">
                <td colspan="8" class="table-expand-row-nested">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque unde quaerat reprehenderit ipsa
                    ipsam, adipisci facere repellendus impedit at, quisquam dicta optio veniam quia nesciunt, inventore
                    quod in neque magni?</p>
                </td>
              </tr>

              <tr class="table-expand-row" data-open-details>
                <td>Mars 15</td>
                <td>Ho Chi Minh</td>
                <td class="text-right">$8,000.90</td>
                <td>En cours</td>
                <td><button class="open">+</button></td>
                <td><button class="edit"><i class="fas fa-pen"></i></button></td>
              </tr>

              <tr class="table-expand-row-content">
                <td colspan="8" class="table-expand-row-nested">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque unde quaerat reprehenderit ipsa
                    ipsam, adipisci facere repellendus impedit at, quisquam dicta optio veniam quia nesciunt, inventore
                    quod in neque magni?</p>
                </td>
              </tr>

              <tr class="table-expand-row" data-open-details>
                <td>Feb 15</td>
                <td>Berlin</td>
                <td class="text-right">$7,081.20</td>
                <td>En cours</td>
                <td><button class="open">+</button></td>
                <td><button class="edit"><i class="fas fa-pen"></i></button></td>
              </tr>

              <tr class="table-expand-row-content">
                <td colspan="8" class="table-expand-row-nested">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque unde quaerat reprehenderit ipsa
                    ipsam, adipisci facere repellendus impedit at, quisquam dicta optio veniam quia nesciunt, inventore
                    quod in neque magni?</p>
                </td>

              </tr>

              <tr class="table-expand-row" data-open-details>
                <td>January 15</td>
                <td>Seoul</td>
                <td class="text-right">$5,060.50</td>
                <td>En cours</td>
                <td><button class="open">+</button></td>
                <td><button class="edit"><i class="fas fa-pen"></i></button></td>
              </tr>

              <tr class="table-expand-row-content">
                <td colspan="8" class="table-expand-row-nested">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque unde quaerat reprehenderit ipsa
                    ipsam, adipisci facere repellendus impedit at, quisquam dicta optio veniam quia nesciunt, inventore
                    quod in neque magni?</p>
                </td>

              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <?php require('global/template-components/footer.php');?>
  <script>
    $(document).ready(function () {
      $(".open").click(function () {
        console.log($(this).text());
        if ($(this).text() == '+') {
          $(this).parents("tr").next("tr").show();
          $(this).text("-");
        } else {
          $(this).parents("tr").next("tr").hide();
          $(this).text("+");
        }
      });
      $(".edit").click(function(){
        var currentTD = $(this).parents('tr').find('td');
              if ($(this).html() == '<i class="fas fa-pen"></i>') {
                  currentTD = $(this).parents('tr').find('td');
                  $.each(currentTD, function () {
                      $(this).prop('contenteditable', true)
                  });
              } else {
                 $.each(currentTD, function () {
                      $(this).prop('contenteditable', false)
                  });
              }
    
              $(this).html($(this).html() == '<i class="fas fa-pen"></i>' ? '<i class="fas fa-save"></i>' : '<i class="fas fa-pen"></i>')
      });
    })
  </script>
</body>

</html>