<?php
$conf['db']['type'] = 'mysql';
$conf['db']['host'] = 'localhost:8080';
$conf['db']['protocol'] = 'unix';
$conf['db']['socket'] = '';
$conf['db']['port'] = '3306';
$conf['db']['user'] = 'root';
$conf['db']['pass'] = 'root';
$conf['db']['name'] = 'seagull';
$conf['db']['postConnect'] = '';
$conf['db']['mysqlDefaultStorageEngine'] = '0';
$conf['db']['charset'] = '';
$conf['db']['collation'] = '';
$conf['db']['sepTableForEachSequence'] = '0';
$conf['db']['prefix'] = '';
$conf['site']['outputUrlHandler'] = 'SGL_UrlParser_SefStrategy';
$conf['site']['inputUrlHandlers'] = 'Classic,Alias,Sef';
$conf['site']['name'] = 'ScoyW3 - Gestión Documental';
$conf['site']['showLogo'] = 'logo.png';
$conf['site']['description'] = 'Sistema de Gestión de Documentos Web, Desarrollado con Seagull PHP, usando la Metodología XP Programming';
$conf['site']['keywords'] = 'seagull, php, framework, cms, content management';
$conf['site']['compression'] = '0';
$conf['site']['outputBuffering'] = '0';
$conf['site']['banIpEnabled'] = '0';
$conf['site']['denyList'] = '';
$conf['site']['allowList'] = '';
$conf['site']['tidyhtml'] = '0';
$conf['site']['blocksEnabled'] = '1';
$conf['site']['safeDelete'] = '1';
$conf['site']['frontScriptName'] = 'index.php';
$conf['site']['defaultModule'] = 'default';
$conf['site']['defaultManager'] = 'default';
$conf['site']['defaultArticleViewType'] = '1';
$conf['site']['defaultParams'] = '';
$conf['site']['templateEngine'] = 'flexy';
$conf['site']['wysiwygEditor'] = 'fckeditor';
$conf['site']['extendedLocale'] = '0';
$conf['site']['localeCategory'] = '\'LC_ALL\'';
$conf['site']['adminGuiTheme'] = 'default_admin';
$conf['site']['defaultTheme'] = 'ScoyTema';
$conf['site']['masterTemplate'] = 'master.html';
$conf['site']['masterLayout'] = 'layout-navtop-2col_subright.css';
$conf['site']['filterChain'] = '';
$conf['site']['globalJavascriptFiles'] = 'js/SGL.js';
$conf['site']['globalJavascriptOnReadyDom'] = '';
$conf['site']['globalJavascriptOnload'] = '';
$conf['site']['globalJavascriptOnUnload'] = '';
$conf['site']['customOutputClassName'] = '';
$conf['site']['customRebuildTasks'] = '';
$conf['site']['maintenanceMode'] = '0';
$conf['site']['adminKey'] = '';
$conf['site']['rolesHaveAdminGui'] = '\'SGL_ADMIN\'';
$conf['site']['broadcastMessage'] = '';
$conf['site']['loginTarget'] = '';
$conf['site']['logoutTarget'] = '';
$conf['site']['serverTimeOffset'] = 'UTC';
$conf['site']['baseUrl'] = 'http://localhost/ScoyW3/www';
$conf['path']['additionalIncludePath'] = '';
$conf['path']['moduleDirOverride'] = '';
$conf['path']['uploadDirOverride'] = '';
$conf['path']['tmpDirOverride'] = '';
$conf['path']['pathToCustomConfigFile'] = '';
$conf['path']['installRoot'] = 'C:\\UwAmp\\www\\ScoyW3';
$conf['path']['webRoot'] = 'C:\\UwAmp\\www\\ScoyW3/www';
$conf['cookie']['path'] = '/';
$conf['cookie']['domain'] = '';
$conf['cookie']['secure'] = '0';
$conf['cookie']['name'] = 'SGLSESSID';
$conf['cookie']['rememberMeEnabled'] = '0';
$conf['session']['maxLifetime'] = '0';
$conf['session']['extended'] = '0';
$conf['session']['singleUser'] = '0';
$conf['session']['handler'] = 'file';
$conf['session']['allowedInUri'] = '1';
$conf['session']['savePath'] = '';
$conf['session']['permsRetrievalMethod'] = '';
$conf['cache']['enabled'] = '0';
$conf['cache']['libCacheEnabled'] = '0';
$conf['cache']['lifetime'] = '86400';
$conf['cache']['cleaningFactor'] = '0';
$conf['cache']['readControl'] = '1';
$conf['cache']['writeControl'] = '1';
$conf['cache']['javascript'] = '0';
$conf['debug']['authorisationEnabled'] = '1';
$conf['debug']['sessionDebugAllowed'] = '0';
$conf['debug']['customErrorHandler'] = '1';
$conf['debug']['production'] = '0';
$conf['debug']['showBacktrace'] = '0';
$conf['debug']['profiling'] = '0';
$conf['debug']['emailAdminThreshold'] = '\'PEAR_LOG_EMERG\'';
$conf['debug']['showBugReporterLink'] = '1';
$conf['debug']['enableDebugBlock'] = '0';
$conf['debug']['showUntranslated'] = '1';
$conf['debug']['dataObject'] = '0';
$conf['debug']['infoBlock'] = '0';
$conf['translation']['tablePrefix'] = 'translation';
$conf['translation']['addMissingTrans'] = '0';
$conf['translation']['fallbackLang'] = 'en_utf_8';
$conf['translation']['container'] = 'file';
$conf['translation']['installedLanguages'] = 'ptbr_iso_8859_1,zhtw_big5,zh_gb2312,zh_utf_8,zhtw_utf_8,cs_iso_8859_2,nl_iso_8859_1,en_iso_8859_15,en_utf_8,fr_iso_8859_1,fr_utf_8,de_iso_8859_1,de_utf_8,it_iso_8859_1,ja_euc_jp,ja_utf_8,lv_utf_8,no_iso_8859_1,pl_iso_8859_2,pt_iso_8859_1,ru_utf_8,ru_windows_1251,es_iso_8859_1,es_utf_8,sv_iso_8859_1,tr_iso_8859_9,tr_utf_8';
$conf['translation']['languageAutoDiscover'] = '0';
$conf['translation']['defaultLangBC'] = '1';
$conf['navigation']['enabled'] = '1';
$conf['navigation']['renderer'] = 'SimpleRenderer';
$conf['navigation']['driver'] = 'SimpleDriver';
$conf['log']['enabled'] = '0';
$conf['log']['type'] = 'file';
$conf['log']['name'] = 'var/log/php_log.txt';
$conf['log']['priority'] = '\'PEAR_LOG_DEBUG\'';
$conf['log']['ident'] = 'Seagull';
$conf['log']['ignoreRepeated'] = '';
$conf['log']['paramsUsername'] = '';
$conf['log']['paramsPassword'] = '';
$conf['log']['showErrors'] = '1';
$conf['mta']['backend'] = 'mail';
$conf['mta']['sendmailPath'] = '/usr/sbin/sendmail';
$conf['mta']['sendmailArgs'] = '-t -i';
$conf['mta']['smtpHost'] = '127.0.0.1';
$conf['mta']['smtpLocalHost'] = 'seagullproject.org';
$conf['mta']['smtpPort'] = '25';
$conf['mta']['smtpAuth'] = '0';
$conf['mta']['smtpUsername'] = '';
$conf['mta']['smtpPassword'] = '';
$conf['email']['admin'] = 'andresfcebas@gmail.com';
$conf['email']['support'] = 'andresfcebas@gmail.com';
$conf['email']['info'] = 'andresfcebas@gmail.com';
$conf['popup']['winHeight'] = '500';
$conf['popup']['winWidth'] = '600';
$conf['censor']['mode'] = '0';
$conf['censor']['replaceString'] = '*censored*';
$conf['censor']['badWords'] = 'your,bad,words,here';
$conf['p3p']['policies'] = '1';
$conf['p3p']['policyLocation'] = '';
$conf['p3p']['compactPolicy'] = 'CUR ADM OUR NOR STA NID';
$conf['tuples']['version'] = '1.0.4
';
$conf['table']['block'] = 'block';
$conf['table']['block_role'] = 'block_role';
$conf['table']['block_assignment'] = 'block_assignment';
$conf['table']['module'] = 'module';
$conf['table']['sequence'] = 'sequence';
$conf['table']['uri_alias'] = 'uri_alias';
$conf['table']['section'] = 'section';
$conf['table']['login'] = 'login';
$conf['table']['organisation'] = 'organisation';
$conf['table']['organisation_type'] = 'organisation_type';
$conf['table']['org_preference'] = 'org_preference';
$conf['table']['permission'] = 'permission';
$conf['table']['preference'] = 'preference';
$conf['table']['role'] = 'role';
$conf['table']['role_permission'] = 'role_permission';
$conf['table']['user'] = 'usr';
$conf['table']['user_permission'] = 'user_permission';
$conf['table']['user_preference'] = 'user_preference';
$conf['table']['user_session'] = 'user_session';
$conf['table']['user_cookie'] = 'user_cookie';
$conf['localConfig']['moduleName'] = 'default';
?>