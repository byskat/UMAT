# Web UMAT

## Estructura

    .
    +-- arxiu           # Vistes de l'arxiu
    +-- resources       # Tots els recursos del projecte
    ¦   +-- css           # Fitxers d'estil (tant css com sass)
    ¦   +-- fonts         # Fonts utilitzades en local
    ¦   +-- img           # Imatges del projecte
    ¦   +-- js             
    ¦   +-- php           
    ¦   +-- swf           # Logos amb flash
    ¦   +-- vendor        # Totes les dependències
    +-- temes           # Vistes dels temes
    +-- index.php       # Pàgina principal del web
    +-- error.php       # Pàgina de redirecció en cas de error (404)
    +-- contacte.php    # Vista de contacte

Info del [Javascript](#javascript), [PHP](#php) i [Dependències](#desenvolupat-amb)

## Per finalitzar

Fotos, tant index com seccions (stock o origen UMAT).
Cercador i traducció de les pàgines pendent (cercador de tercers i autotranslate).

<ul>
<li>(Inici) Imatges i enllaços a les seccions correctes (les quatre imatges superiors són links a opendata, portal intern, qlik i observatori)</li>
<li>(Temes) Cartografia Temàtica: Poder gestionar PDF's (actualment datables + mock data), gestionar seccions i subseccions (a concretar)</li>
<li>(Temes) Geodèsia: Carregar directament de la base de dades de vèrtex (actualment datables + mock data)</li>
<li>(Temes) Serveis Web: Concretar per part UMAT</li>
<li>(Temes) Topografia: Poder gestionar PDF's (actualment datables + mock data)</li>
<li>(Temes) Eines: Concretar per part UMAT</li>
<li>(Temes) Falta més informació per les seccions així com fotos específiques per a cada secció que s'han d'anar concretant.</li>
<li>(Tràmits) Concretar per part UMAT</li>
<li>(Arxiu) Notícies: Carregar notícies de la base de dades correcte (actualment datatables + mock data)</li>
<li>(Arxiu) Documentació i Ajuda: Concretar per part UMAT</li>
<li>(Arxiu) Enllaços: Concretar per part UMAT</li>
<li>(Contacte) Relacionar formulari de contacte</li>
</ul>

Una part important dels continguts encara no està concretat (així com els productes cartogràfics disponibles)

## Javascript

Només hi ha un arxiu JavaScript on hi ha tant les funcions, la inicialització dels elements de bootstrap, i sobretot, les peticions AJAX utilitzant l'objecte DataTable que s'encarrega de generar les taules i omplir-les de dades.

## PHP

El PHP del projecte inclou tant la configuració cara servidor del plugin datatables (que serveix les dades de les diferents taules) com la carpeta includes que conté seccións de codi que s'inclouen a les pàgines principals.

    .
    +-- php
    ¦   +-- includes           	# Seccions aïllades de la pàgina o comunes (footer, header, nav, etc...)
    ¦   +-- server.php          # Configuració de la secció servidor de datatables
    ¦   +-- ssp.class.pg.php	# Classe auxiliar default per utilitzar datatables amb postgre
    ¦   +-- spp.class.php       # Classe auxiliar default per utilitzar datatables amb mysql

Actualment, el servidor està configurat per funcionar amb taules MySql.

## Desplegament

Per desplegar l'aplicació tal com està al repositori només cal tenir una instal·lació vàlida d'un servidor LAMP (WAMP o XAMPP) i col·locar la carpeta del projecte a un directori públic (www/htdocs).

Un cop fet, s'ha d'importar l'SQL inclòs que conté tant una estructura i dades de prova (i actualitzar les credencials de connexió que es troba al server.php).

Si es tenen les dades de connexió de la base de dades real, s'ha de modificar el codi del servidor.php per fer les connexions (i consultes) correctes.

## Desenvolupat amb

* [Bootstrap](http://getbootstrap.com/) - Frontend framework
* [JQuery](https://jquery.com/) - Llibreria de javascript
* [Datatables](http://datatables.net/) - Plugin de JQuery per generar taules.
* [SASS](http://sass-lang.com/) - Llenguatge de fulles d'estil
