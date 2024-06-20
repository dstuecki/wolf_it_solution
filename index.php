
<!DOCTYPE html>
<html> 
    <head>
        <?php
            include ('incs/meta.php');
        ?>
        <title>Wolf IT Solution</title>

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
    </head>

    <body>
        <div id="page">
            <div id="header">
                <a href="#menu"><span></span></a>
                Wolf IT Solution
            </div> 
            <div id="content">
                <h1>
                    Über Wolf IT Solution
                </h1>
                <p>
                    Willkommen bei Wolf IT Solution – Ihrem zuverlässigen Partner für erstklassige IT-Dienstleistungen. <br />
                    Als Einmann-Unternehmen mit jahrelanger Erfahrung biete ich maßgeschneiderte Lösungen, die Ihre technischen Anforderungen übertreffen <br />
                    und Ihr Geschäft auf die nächste Stufe heben.
                </p>

                <h2>
                    Meine Mission
                </h2>
                <p>
                    Meine Mission ist es, innovative und effiziente IT-Dienstleistungen zu liefern, die Ihre Unternehmensprozesse optimieren und Ihre digitalen Ziele verwirklichen.<br />
                    Ich setze auf Qualität, Zuverlässigkeit und Kundenzufriedenheit, um Ihnen einen herausragenden Service zu bieten.
                </p>

                <h2>
                    Meine Dienstleistungen
                </h2>
                <h3>
                    Webdesign
                </h3>
                <p>
                    Ich gestalte ansprechende und benutzerfreundliche Webseiten, die nicht nur ästhetisch ansprechend, sondern auch funktional und reaktionsschnell sind.<br />
                    Meine Designs sind darauf ausgelegt, Ihre Marke optimal zu repräsentieren und Ihre Zielgruppe zu begeistern.
                </p>

                <h3>
                    Webprogrammierung
                </h3>
                <p>
                    Von einfachen Webseiten bis hin zu komplexen Webanwendungen – ich erstelle individuelle Lösungen, die perfekt auf Ihre Geschäftsanforderungen zugeschnitten sind.<br />
                    Ich setze moderne Technologien ein, um leistungsstarke und sichere Anwendungen zu entwickeln.
                </p>

                <h3>
                    Tenant erstellen und verwalten
                </h3>
                <p>
                    Ich unterstütze Sie bei der Einrichtung und Verwaltung Ihrer Cloud-Tenants. Ich sorge dafür, dass Ihre Daten sicher, effizient und stets verfügbar sind.<br />
                    Mit meiner Hilfe können Sie die Vorteile der Cloud voll ausschöpfen.
                </p>

                <h3>
                    Netzwerk Strukturen erstellen und verwalten
                </h3>
                <p>
                    Ein stabiles und sicheres Netzwerk ist das Rückgrat jeder IT-Infrastruktur.<br />
                    Ich plane, implementiere und verwalte Netzwerke, die auf Ihre spezifischen Bedürfnisse zugeschnitten sind.<br />
                    Mein Ziel ist es, Ihnen eine zuverlässige und performante Netzwerkumgebung zu bieten.
                </p>

                <h3>
                    Sicherheitsthemen und Monitoring mittels Checkmk
                </h3>
                <p>
                    Sicherheit und Überwachung sind für den reibungslosen Betrieb Ihrer IT-Systeme unerlässlich.<br />
                    Mit Checkmk biete ich Ihnen umfassende Monitoring-Lösungen, die Ihre Infrastruktur kontinuierlich überwachen und sicherstellen,<br />
                    dass alle Sicherheitsanforderungen erfüllt werden. So können Sie sich auf Ihr Kerngeschäft konzentrieren, während ich für die Sicherheit Ihrer IT sorge.
                </p>

                <h2>
                    Warum Wolf IT Solution?
                </h2>
                <p>
                    <strong>
                        Erfahrung und Expertise:
                    </strong> 
                    Ich bin ein hochqualifizierter Fachmann mit umfassender Erfahrung in der IT-Branche. Ich bleibe stets auf dem neuesten Stand der Technik, um Ihnen die besten Lösungen zu bieten.
                </p>
                <p>
                    <strong>
                        Kundenzentrierter Ansatz:
                    </strong> 
                    Bei mir steht der Kunde im Mittelpunkt. Ich nehme mir die Zeit, Ihre Bedürfnisse zu verstehen und maßgeschneiderte Lösungen zu entwickeln, die Ihren spezifischen Anforderungen gerecht werden.
                </p>
                <p>
                    <strong>
                        Zuverlässigkeit und Qualität:
                    </strong> 
                    Ich lege großen Wert auf Zuverlässigkeit und Qualität in all meinen Dienstleistungen. Sie können sich darauf verlassen, dass ich Ihre Projekte termingerecht und in höchster Qualität liefere.
                </p>

                <p>
                    Kontaktieren Sie mich noch heute und erfahren Sie, wie Wolf IT Solution Ihre IT-Bedürfnisse erfüllen kann. Gemeinsam bringen wir Ihr Unternehmen voran!
                </p>


            </div>
            <nav id="menu">
                <div id="panel-menu">
                    <ul>
                        <li>
                            <a href="">Home</a>
                            <!--input type="checkbox" class="mm-toggle" />-->
                        </li>
                        <li>
                            <span>Über mich</span>
                            <ul>
                                <li><a href="#/">About me</a></li>
                                <li><a href="#/">Zertifikate</a></li>
                                <li>
                                    <span>Projekte</span>
                                    <ul>
                                        <li><a href=""></a></li>
                                        <li><a href=""></a></li>
                                        <li><a href=""></a></li>
                                    </ul>
                                </li>                                
                            </ul>
                        </li>
						<li><a href="#">Kontakt</a></li>
						<li><a href="">Impressum</a></li>
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
                                '<a href="#panel-cart"><i class="fa fa-shopping-cart"></i> <span>Support</span></a>',
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
