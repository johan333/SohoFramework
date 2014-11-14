<?php

use mvc\config\configClass;

configClass::setRowGrid(10);

configClass::setDbHost('127.0.0.1');
configClass::setDbDriver('mysql'); // pgsql
configClass::setDbName('pradera_dos');
configClass::setDbPort(3306); // 5432
configClass::setDbUser('root');
configClass::setDbPassword('root');
configClass::setDbDsn(
        configClass::getDbDriver()
        . ':host=' . configClass::getDbHost()
        . ';port=' . configClass::getDbPort()
        . ';dbname=' . configClass::getDbName()
);

configClass::setPathAbsolute('/Applications/MAMP/htdocs/soho');
configClass::setUrlBase('http://127.0.0.1/soho/web/');

configClass::setScope('dev'); // prod
configClass::setDefaultCulture('es');
configClass::setIndexFile('index.php');

configClass::setFormatTimestamp('Y-m-d H:i:s');

configClass::setHeaderJson('Content-Type: application/json; charset=utf-8');
configClass::setHeaderXml('Content-Type: application/xml; charset=utf-8');
configClass::setHeaderHtml('Content-Type: text/html; charset=utf-8');
configClass::setHeaderPdf('Content-type: application/pdf; charset=utf-8');
configClass::setHeaderJavascript('Content-Type: text/javascript; charset=utf-8');
configClass::setHeaderExcel2003('Content-Type: application/vnd.ms-excel; charset=utf-8');
configClass::setHeaderExcel2007('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet; charset=utf-8');

configClass::setCookieNameRememberMe('mvcSiteRememberMe');
configClass::setCookieNameSite('mvcSite');
configClass::setCookiePath('/soho/web/' . configClass::getIndexFile());
configClass::setCookieDomain('http://127.0.0.1');
configClass::setCookieTime(3600); // una hora en segundo

configClass::setDefaultModuleSecurity('default');
configClass::setDefaultActionSecurity('index');