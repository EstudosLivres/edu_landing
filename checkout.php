<?php require 'functions.php' ?>
<?php require 'rents/check_payment.php' ?>

<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="lt-ie7"> <![endif]-->
<!--[if IE 7]>     <html class="lt-ie8"> <![endif]-->
<!--[if IE 8]>     <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Curso presencial em Brasília de Jogos Digitais para o Ensino médio</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

        <link rel="shortcut icon" href="img/rents_favicon.png">

        <!-- nanoScroller -->
        <link rel="stylesheet" type="text/css" href="assets/nanoScroller/nanoscroller.css" />


        <!-- FontAwesome -->
        <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css" />

        <!-- Material Design Icons -->
        <link rel="stylesheet" type="text/css" href="assets/material-design-icons/css/material-design-icons.min.css" />

        <!-- IonIcons -->
        <link rel="stylesheet" type="text/css" href="assets/ionicons/css/ionicons.min.css" />

        <!-- WeatherIcons -->
        <link rel="stylesheet" type="text/css" href="assets/weatherIcons/css/weather-icons.min.css" />

        <!-- Google Prettify -->
        <link rel="stylesheet" type="text/css" href="assets/google-code-prettify/prettify.css" />
        <!-- Main -->
        <link rel="stylesheet" type="text/css" href="assets/_con/css/_con.min.css" />

        <style>
            .content-wrap {
                margin-left: 0 !important;
                margin-top: -45px !important;
            }

            .uppercase {
                text-transform: uppercase;
            }

            .rotate {
                top: 15px;
                left: 40px;
                max-width: 20%;
                margin-top: -30px;
                position: relative;
                transform: rotate(90deg) !important;
            }
        </style>

        <!--[if lt IE 9]>
        <script src="assets/html5shiv/html5shiv.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <!-- Main Content -->
        <section class="content-wrap ecommerce-invoice">

            <div class="card-panel">

                <?php if($response->status->name == 'error') { ?>
                    <h1 class="center">Ocorreu um erro com a sua compra.</h1>
                    <h4 class="center"">
                        <a href="<?php echo $landing_domain; ?>">Tente novamente</a>
                    </h4>
                    <?php die; ?>
                <?php } ?>

                <!-- Logo -->
                <div class="row invoice-top">
                    <div class="col s12 m6">
                        <img src="img/EduBrand.png" alt="Logo">
                        <br>Rent$ Payments - Educational Ltda.
                    </div>
                    <div class="col s12 m6">
                        <h3>Comprovante</h3>
                    </div>
                </div>
                <!-- /Logo -->
                <br>

                <div class="row">
                    <!-- Invoice From -->
                    <div class="col s12 l4">
                        Comprovante de:
                        <h4>Rent$ Payments Ltda.</h4>
                        <address>
                            SHN Quadra 02, Executive Office Tower
                            <br>Brasília - DF, 70702-906, Brasil,
                            <br><i class="mdi-communication-phone"></i> (61) 8130-0410
                        </address>
                    </div>
                    <!-- /Invoice From -->

                    <!-- Invoice To -->
                    <div class="col s12 l4">
                        Comprovante para:
                        <h4><?php echo $response->client->name; ?></h4>
                        <address>
                            <?php echo $response->client->email; ?>
                            <br><i class="fa fa-credit-card"></i> <strong class=""><?php echo $response->credit_card; ?></strong>
                            <br><i class="mdi-action-picture-in-picture"></i> <?php echo format_cpf($response->client->legal_id); ?>
                        </address>
                    </div>
                    <!-- /Invoice To -->

                    <!-- Invoice Number and Date -->
                    <div class="col s12 l4">
                        <div class="invoice-num">
                            <div class="num">Number: <span class="right"><strong><?php echo $_GET['rid']; ?></strong></span>
                            </div>
                            <h4>
                                <div class="date">
                                    Date:
                                    <span class="right">
                                        <?php echo $bought_at; ?>
                                    </span>
                                </div>
                            </h4>
                        </div>
                    </div>
                    <!-- /Invoice Number and Date -->
                </div>
                <br>

                <!-- Table with products -->
                <div class="row">
                    <div class="col s12">

                        <div class="table-responsive">
                            <table class="table table-responsive invoice-table">
                                <thead>
                                    <tr>
                                        <th>Imagem</th>
                                        <th>Descrição</th>
                                        <th class="center-align">Quantidade</th>
                                        <th class="center-align">Preço</th>
                                        <th class="right-align">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="img/iphone-01-EDITED.png" class="rotate" alt="">
                                        </td>
                                        <td>
                                            <strong> <?php echo $sold_item->name; ?> </strong>
                                            <div class="grey-text"> <?php echo $sold_item->description; ?> </div>
                                        </td>
                                        <td class="center-align"> <?php echo count($response->sold_items); ?> </td>
                                        <td class="center-align"> R$ <?php echo $amount_formatted; ?> </td>
                                        <td class="right-align"> R$ <?php echo $amount_formatted; ?> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!-- /Table with products -->

            </div>

            <br>
            <div class="right-align invoice-print">
                <span class="btn" onclick="javascript:window.print();">IMPRIMIR</span>
            </div>

        </section>
        <!-- /Main Content -->

        <footer>
            &copy; 2015 <strong>Rent$ Payments - Educational</strong>. All rights reserved.
        </footer>

        <!-- DEMO [REMOVE IT ON PRODUCTION] -->
        <script type="text/javascript" src="assets/_con/js/_demo.js"></script>

        <!-- jQuery -->
        <script type="text/javascript" src="assets/jquery/jquery.min.js"></script>

        <!-- jQuery RAF (improved animation performance) -->
        <script type="text/javascript" src="assets/jqueryRAF/jquery.requestAnimationFrame.min.js"></script>

        <!-- nanoScroller -->
        <script type="text/javascript" src="assets/nanoScroller/jquery.nanoscroller.min.js"></script>

        <!-- Materialize -->
        <script type="text/javascript" src="assets/materialize/js/materialize.min.js"></script>

        <!-- Sortable -->
        <script type="text/javascript" src="assets/sortable/Sortable.min.js"></script>

        <!-- Main -->
        <script type="text/javascript" src="assets/_con/js/_con.min.js"></script>


        <!-- Google Prettify -->
        <script type="text/javascript" src="assets/google-code-prettify/prettify.js"></script>
    </body>
</html>