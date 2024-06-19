
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="author" content="www.frebsite.nl" />
        <meta name="viewport" content="width=device-width minimum-scale=1.0 maximum-scale=1.0 user-scalable=no" />

        <title>Star Citzen Tools</title>

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/demo.css" />
        <link rel="stylesheet" href="css/mmenu.css" />
		<link rel="stylesheet" href="css/styles.css" />
        <style>
            .mm-wrapper--sidebar-expanded.mm-wrapper--opened #header a {
                display: none;
            }

            .mm-navbar--tabs span {
                display: inline-block;
                margin-inline-start: 8px;
            }

            @media (max-width: 450px) {
                .mm-navbar--tabs span {
                    display: none;
                }
            }
        </style>
		<!--<script type="text/javascript">
			function stone(){
				var quan = document.getElementById('Quantainium').value;
				
		</script>-->
    </head>

    <body>
        <div id="page">
            <div id="header">
                <a href="#menu"><span></span></a>
                Star Citzen Tools - ALPHA Build
            </div>
            <div id="content">
                <h1>This is a demo.</h1>
                <p>Click the menu icon to open the menu.</p>
                <p>Alle Funktionen sind nur nach Anmeldung einsehbar!</p>
            </div>
            <nav id="menu">
                <div id="panel-menu">
                    <ul>
                        <li>
                            <a href="http://dstuecki.bplaced.net/tools/index.php">Home</a>
                            <!--input type="checkbox" class="mm-toggle" />-->
                        </li>
                        <li>
                            <span>Tools</span>
                            <ul>
                                <!--<li><a href="#/">Space1</a></li>-->
                                <li>
                                    <span>Mining</span>
                                    <ul>
                                        <li><a href="http://dstuecki.bplaced.net/tools/index.php?link=stone&Quantainium=0&Gold=0&Bexalite=0&Taranite=0&Borase=0&Laranite=0&Agricium=0&Hephaestanite=0&Beryl=0&Titanium=0&Tungsten=0&Quartz=0&Copper=0&Iron=0&Corundum=0&Aluminum=0&Inert=100&GesamtMasse=5000">Steinrechner</a></li>
                                        <li><a href="http://dstuecki.bplaced.net/tools/index.php?link=raffinierie">Raffinierie</a></li>
                                        <li><a href="http://dstuecki.bplaced.net/tools/index.php?link=timerechner">Raffinierie Auftr&auml;ge</a></li>
										<li><a href="http://dstuecki.bplaced.net/tools/index.php?link=fluege">Fl&uuml;ge</a></li>
                                    </ul>
                                </li>
                             
							
                                <!--<li><a href="#/">Space1</a></li>-->
                                <li>
                                    <span>Salvage</span>
                                    <ul>
                                        <li><a href="http://dstuecki.bplaced.net/tools/index.php?link=salvageships">Schiffe</a></li>
                                        <li><a href="http://dstuecki.bplaced.net/tools/index.php?link=beute">Beute</a></li>
                                    </ul>
                                </li>
                                
                           
                                <!--<li><a href="#/">Space1</a></li>-->
                                <li>
                                    <span>Mutlicrew IN WORK!</span>
                                    <ul>
                                        <li><a href="#">Salvage Ertrag Teiler</a></li>
                                        <li><a href="#">Mining Ertrag Teiler</a></li>
                                    </ul>
                                </li>
                                
                            </ul>
                        </li>
						<li><a href="#">Lager</a></li>
						<li><a href="https://erkul.games/live/ships" target="_blank">Schiffe</a></li>
						<li><a href="#">Handel IN WORK!</a></li>
						<li>
                            <span>Orga IN WORK!</span>
                            <ul>
                                <!--<li><a href="#/">Space1</a></li>-->
                                <li>
                                    <span>Aufträge</span>
                                    <ul>
                                        <li><a href="#">Transport</a></li>
                                        <li><a href="#">Ressourcen Besorgung</a></li>
                                    </ul>
                                </li>
                           </ul>
                        </li>
						<li><a href="http://dstuecki.bplaced.net/tools/index.php?link=dev">Development</a></li>
                    </ul>
                </div>

                <ul id="panel-account" data-mm-title="Account">					
					<li><a href="#/">My profile</a></li>
                    <li><a href="#/">Privacy settings</a></li>
                    <li><a href="#/">Activity</a></li>
                    <li><a href="incs/logout.php">Abmelden</a></li>
                </ul>
                <div id="panel-cart" data-mm-title="Shopping cart">
                    <p style="text-align: center; padding-top: 30px">
                        Your shoppingcart is empty.<br />
                        <a href="#/">Continue shopping.</a>
                    </p>
                </div>
            </nav>
        </div>

        <!-- mmenu scripts -->
        <script src="js/mmenu.js"></script>
        <script>
            new Mmenu(
                document.querySelector("#menu"),
                {
                    theme: "white",
                    setSelected: {
                        hover: true,
                        parent: true,
                    },
                    counters: {
                        add: true,
                    },
                    searchfield: {
                        add: true,
                        placeholder: "Search menu items",
                        splash: "<p>What are you looking for?</p>",
                        title: "Search",
                    },
                    iconbar: {
                        use: "(min-width: 450px)",
                        top: [
                            '<a href="#/"><span class="fa fa-home"></span></a>',
                        ],
                        bottom: [
                            '<a href="#/"><span class="fa fa-twitter"></span></a>',
                            '<a href="#/"><span class="fa fa-facebook"></span></a>',
                            '<a href="#/"><span class="fa fa-youtube"></span></a>',
                        ],
                    },
                    iconPanels: {
                        add: true,
                        visible: 1,
                    },
                    sidebar: {
                        collapsed: {
                            use: "(min-width: 768px)",
                        },
                        expanded: {
                            use: "(min-width: 1024px)",
                            initial: "closed",
                        },
                    },
                    navbars: [
                        {
                            content: ["searchfield"],
                        },
                        {
                            type: "tabs",
                            content: [
                                '<a href="#panel-menu"><i class="fa fa-bars"></i> <span>Menu</span></a>',
                                '<a href="#panel-account"><i class="fa fa-user"></i> <span>Account</span></a>',
                                '<a href="#panel-cart"><i class="fa fa-shopping-cart"></i> <span>Cart</span></a>',
                            ],
                        },
                        {
                            content: ["prev", "breadcrumbs", "close"],
                        },
                        {
                            position: "bottom",
                            content: [
                                '<a href="https://mmenujs.com/wordpress-plugin" target="_blank">WordPress plugin</a>',
                            ],
                        },
                    ],
                },
                {
                    searchfield: {
                        cancel: true,
                        clear: true,
                    },
                }
            );
        </script>
    </body>
</html>
