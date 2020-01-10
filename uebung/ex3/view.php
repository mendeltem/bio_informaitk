<!DOCTYPE html>
<html  dir="ltr" lang="de" xml:lang="de">
<head>

    <title>bioinf_WS19: data</title>
    <link rel="icon" href="//moodle2.uni-potsdam.de/pluginfile.php/1/theme_adaptable/favicon/1573283687/logo_moodle.png" />

    <link rel="stylesheet" href="https://moodle2.uni-potsdam.de/theme/adaptable/style/font-awesome.min.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400i'
    rel='stylesheet'
    type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:200,200i'
    rel='stylesheet'
    type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400i'
    rel='stylesheet'
    type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="moodle, bioinf_WS19: data" />
<link rel="stylesheet" type="text/css" href="https://moodle2.uni-potsdam.de/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.css" /><script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="https://moodle2.uni-potsdam.de/theme/styles.php/adaptable/1573283687_1573284264/all" />
<script type="text/javascript">
//<![CDATA[
var M = {}; M.yui = {};
M.pageloadstarttime = new Date();
M.cfg = {"wwwroot":"https:\/\/moodle2.uni-potsdam.de","sesskey":"SQ99XGVQrC","themerev":"1573283687","slasharguments":1,"theme":"adaptable","iconsystemmodule":"core\/icon_system_standard","jsrev":"1573283687","admin":"admin","svgicons":true,"usertimezone":"Europa\/Berlin","contextid":1231014};var yui1ConfigFn = function(me) {if(/-skin|reset|fonts|grids|base/.test(me.name)){me.type='css';me.path=me.path.replace(/\.js/,'.css');me.path=me.path.replace(/\/yui2-skin/,'/assets/skins/sam/yui2-skin')}};
var yui2ConfigFn = function(me) {var parts=me.name.replace(/^moodle-/,'').split('-'),component=parts.shift(),module=parts[0],min='-min';if(/-(skin|core)$/.test(me.name)){parts.pop();me.type='css';min=''}
if(module){var filename=parts.join('-');me.path=component+'/'+module+'/'+filename+min+'.'+me.type}else{me.path=component+'/'+component+'.'+me.type}};
YUI_config = {"debug":false,"base":"https:\/\/moodle2.uni-potsdam.de\/lib\/yuilib\/3.17.2\/","comboBase":"https:\/\/moodle2.uni-potsdam.de\/theme\/yui_combo.php?","combine":true,"filter":null,"insertBefore":"firstthemesheet","groups":{"yui2":{"base":"https:\/\/moodle2.uni-potsdam.de\/lib\/yuilib\/2in3\/2.9.0\/build\/","comboBase":"https:\/\/moodle2.uni-potsdam.de\/theme\/yui_combo.php?","combine":true,"ext":false,"root":"2in3\/2.9.0\/build\/","patterns":{"yui2-":{"group":"yui2","configFn":yui1ConfigFn}}},"moodle":{"name":"moodle","base":"https:\/\/moodle2.uni-potsdam.de\/theme\/yui_combo.php?m\/1573283687\/","combine":true,"comboBase":"https:\/\/moodle2.uni-potsdam.de\/theme\/yui_combo.php?","ext":false,"root":"m\/1573283687\/","patterns":{"moodle-":{"group":"moodle","configFn":yui2ConfigFn}},"filter":null,"modules":{"moodle-core-actionmenu":{"requires":["base","event","node-event-simulate"]},"moodle-core-notification":{"requires":["moodle-core-notification-dialogue","moodle-core-notification-alert","moodle-core-notification-confirm","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-core-notification-dialogue":{"requires":["base","node","panel","escape","event-key","dd-plugin","moodle-core-widget-focusafterclose","moodle-core-lockscroll"]},"moodle-core-notification-alert":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-confirm":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-exception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-ajaxexception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-lockscroll":{"requires":["plugin","base-build"]},"moodle-core-handlebars":{"condition":{"trigger":"handlebars","when":"after"}},"moodle-core-event":{"requires":["event-custom"]},"moodle-core-formchangechecker":{"requires":["base","event-focus","moodle-core-event"]},"moodle-core-tooltip":{"requires":["base","node","io-base","moodle-core-notification-dialogue","json-parse","widget-position","widget-position-align","event-outside","cache-base"]},"moodle-core-dragdrop":{"requires":["base","node","io","dom","dd","event-key","event-focus","moodle-core-notification"]},"moodle-core-checknet":{"requires":["base-base","moodle-core-notification-alert","io-base"]},"moodle-core-blocks":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification"]},"moodle-core-maintenancemodetimer":{"requires":["base","node"]},"moodle-core-chooserdialogue":{"requires":["base","panel","moodle-core-notification"]},"moodle-core-popuphelp":{"requires":["moodle-core-tooltip"]},"moodle-core-dock":{"requires":["base","node","event-custom","event-mouseenter","event-resize","escape","moodle-core-dock-loader","moodle-core-event"]},"moodle-core-dock-loader":{"requires":["escape"]},"moodle-core-languninstallconfirm":{"requires":["base","node","moodle-core-notification-confirm","moodle-core-notification-alert"]},"moodle-core_availability-form":{"requires":["base","node","event","event-delegate","panel","moodle-core-notification-dialogue","json"]},"moodle-backup-confirmcancel":{"requires":["node","node-event-simulate","moodle-core-notification-confirm"]},"moodle-backup-backupselectall":{"requires":["node","event","node-event-simulate","anim"]},"moodle-course-categoryexpander":{"requires":["node","event-key"]},"moodle-course-modchooser":{"requires":["moodle-core-chooserdialogue","moodle-course-coursebase"]},"moodle-course-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-course-coursebase","moodle-course-util"]},"moodle-course-util":{"requires":["node"],"use":["moodle-course-util-base"],"submodules":{"moodle-course-util-base":{},"moodle-course-util-section":{"requires":["node","moodle-course-util-base"]},"moodle-course-util-cm":{"requires":["node","moodle-course-util-base"]}}},"moodle-course-management":{"requires":["base","node","io-base","moodle-core-notification-exception","json-parse","dd-constrain","dd-proxy","dd-drop","dd-delegate","node-event-delegate"]},"moodle-course-formatchooser":{"requires":["base","node","node-event-simulate"]},"moodle-form-showadvanced":{"requires":["node","base","selector-css3"]},"moodle-form-shortforms":{"requires":["node","base","selector-css3","moodle-core-event"]},"moodle-form-passwordunmask":{"requires":[]},"moodle-form-dateselector":{"requires":["base","node","overlay","calendar"]},"moodle-question-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-question-qbankmanager":{"requires":["node","selector-css3"]},"moodle-question-searchform":{"requires":["base","node"]},"moodle-question-preview":{"requires":["base","dom","event-delegate","event-key","core_question_engine"]},"moodle-availability_completion-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_date-form":{"requires":["base","node","event","io","moodle-core_availability-form"]},"moodle-availability_grade-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_group-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_grouping-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_language-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_mobileapp-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_profile-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-qtype_ddimageortext-form":{"requires":["moodle-qtype_ddimageortext-dd","form_filepicker"]},"moodle-qtype_ddimageortext-dd":{"requires":["node","dd","dd-drop","dd-constrain"]},"moodle-qtype_ddmarker-form":{"requires":["moodle-qtype_ddmarker-dd","form_filepicker","graphics","escape"]},"moodle-qtype_ddmarker-dd":{"requires":["node","event-resize","dd","dd-drop","dd-constrain","graphics"]},"moodle-qtype_ddwtos-dd":{"requires":["node","dd","dd-drop","dd-constrain"]},"moodle-qtype_pmatchjme-jsme":{"requires":["node","event"]},"moodle-qtype_stack-input":{"requires":["node","event-valuechange","moodle-core-event","io","json-parse"]},"moodle-mod_assign-history":{"requires":["node","transition"]},"moodle-mod_dialogue-autocomplete":{"requires":["base","node","json-parse","autocomplete","autocomplete-filters","autocomplete-highlighters","event","event-key"]},"moodle-mod_dialogue-clickredirector":{"requires":["base","node","json-parse","clickredirector","clickredirector-filters","clickredirector-highlighters","event","event-key"]},"moodle-mod_forum-subscriptiontoggle":{"requires":["base-base","io-base"]},"moodle-mod_quiz-questionchooser":{"requires":["moodle-core-chooserdialogue","moodle-mod_quiz-util","querystring-parse"]},"moodle-mod_quiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form"]},"moodle-mod_quiz-quizbase":{"requires":["base","node"]},"moodle-mod_quiz-toolboxes":{"requires":["base","node","event","event-key","io","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-slot","moodle-core-notification-ajaxexception"]},"moodle-mod_quiz-repaginate":{"requires":["base","event","node","io","moodle-core-notification-dialogue"]},"moodle-mod_quiz-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-base","moodle-mod_quiz-util-page","moodle-mod_quiz-util-slot","moodle-course-util"]},"moodle-mod_quiz-util":{"requires":["node","moodle-core-actionmenu"],"use":["moodle-mod_quiz-util-base"],"submodules":{"moodle-mod_quiz-util-base":{},"moodle-mod_quiz-util-slot":{"requires":["node","moodle-mod_quiz-util-base"]},"moodle-mod_quiz-util-page":{"requires":["node","moodle-mod_quiz-util-base"]}}},"moodle-mod_quiz-modform":{"requires":["base","node","event"]},"moodle-mod_ratingallocate-strategyselect":{"requires":["node","event-valuechange"]},"moodle-mod_scheduler-saveseen":{"requires":["base","node","event"]},"moodle-mod_scheduler-studentlist":{"requires":["base","node","event","io"]},"moodle-mod_scheduler-delselected":{"requires":["base","node","event"]},"moodle-message_airnotifier-toolboxes":{"requires":["base","node","io"]},"moodle-block_course_overview_campus-hidecourse":{"requires":["base","node"]},"moodle-block_course_overview_campus-hidenews":{"requires":["base","node"]},"moodle-block_course_overview_campus-filter":{"requires":["base","node"]},"moodle-filter_easychem-loader":{"requires":["moodle-core-event"]},"moodle-filter_glossary-autolinker":{"requires":["base","node","io-base","json-parse","event-delegate","overlay","moodle-core-event","moodle-core-notification-alert","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-filter_mathjaxloader-loader":{"requires":["moodle-core-event"]},"moodle-editor_atto-editor":{"requires":["node","transition","io","overlay","escape","event","event-simulate","event-custom","node-event-html5","node-event-simulate","yui-throttle","moodle-core-notification-dialogue","moodle-core-notification-confirm","moodle-editor_atto-rangy","handlebars","timers","querystring-stringify"]},"moodle-editor_atto-plugin":{"requires":["node","base","escape","event","event-outside","handlebars","event-custom","timers","moodle-editor_atto-menu"]},"moodle-editor_atto-menu":{"requires":["moodle-core-notification-dialogue","node","event","event-custom"]},"moodle-editor_atto-rangy":{"requires":[]},"moodle-report_eventlist-eventfilter":{"requires":["base","event","node","node-event-delegate","datatable","autocomplete","autocomplete-filters"]},"moodle-report_loglive-fetchlogs":{"requires":["base","event","node","io","node-event-delegate"]},"moodle-gradereport_grader-gradereporttable":{"requires":["base","node","event","handlebars","overlay","event-hover"]},"moodle-gradereport_history-userselector":{"requires":["escape","event-delegate","event-key","handlebars","io-base","json-parse","moodle-core-notification-dialogue"]},"moodle-tool_capability-search":{"requires":["base","node"]},"moodle-tool_lp-dragdrop-reorder":{"requires":["moodle-core-dragdrop"]},"moodle-tool_monitor-dropdown":{"requires":["base","event","node"]},"moodle-assignfeedback_editpdf-editor":{"requires":["base","event","node","io","graphics","json","event-move","event-resize","transition","querystring-stringify-simple","moodle-core-notification-dialog","moodle-core-notification-alert","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-atto_accessibilitychecker-button":{"requires":["color-base","moodle-editor_atto-plugin"]},"moodle-atto_accessibilityhelper-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_align-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_bold-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_charmap-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_clear-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_collapse-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_easychem-button":{"requires":["moodle-editor_atto-plugin","moodle-core-event","io","event-valuechange","tabview","array-extras"]},"moodle-atto_emoticon-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_equation-button":{"requires":["moodle-editor_atto-plugin","moodle-core-event","io","event-valuechange","tabview","array-extras"]},"moodle-atto_fullscreen-button":{"requires":["event-resize","moodle-editor_atto-plugin"]},"moodle-atto_helixatto-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_html-button":{"requires":["moodle-editor_atto-plugin","event-valuechange"]},"moodle-atto_image-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_indent-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_italic-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_link-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-usedfiles":{"requires":["node","escape"]},"moodle-atto_media-button":{"requires":["moodle-editor_atto-plugin","moodle-form-shortforms"]},"moodle-atto_noautolink-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_orderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_recordrtc-recording":{"requires":["moodle-atto_recordrtc-button"]},"moodle-atto_recordrtc-button":{"requires":["moodle-editor_atto-plugin","moodle-atto_recordrtc-recording"]},"moodle-atto_rtl-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_strike-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_subscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_superscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_table-button":{"requires":["moodle-editor_atto-plugin","moodle-editor_atto-menu","event","event-valuechange"]},"moodle-atto_title-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_underline-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_undo-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_unorderedlist-button":{"requires":["moodle-editor_atto-plugin"]}}},"gallery":{"name":"gallery","base":"https:\/\/moodle2.uni-potsdam.de\/lib\/yuilib\/gallery\/","combine":true,"comboBase":"https:\/\/moodle2.uni-potsdam.de\/theme\/yui_combo.php?","ext":false,"root":"gallery\/1573283687\/","patterns":{"gallery-":{"group":"gallery"}}}},"modules":{"core_filepicker":{"name":"core_filepicker","fullpath":"https:\/\/moodle2.uni-potsdam.de\/lib\/javascript.php\/1573283687\/repository\/filepicker.js","requires":["base","node","node-event-simulate","json","async-queue","io-base","io-upload-iframe","io-form","yui2-treeview","panel","cookie","datatable","datatable-sort","resize-plugin","dd-plugin","escape","moodle-core_filepicker","moodle-core-notification-dialogue"]},"core_comment":{"name":"core_comment","fullpath":"https:\/\/moodle2.uni-potsdam.de\/lib\/javascript.php\/1573283687\/comment\/comment.js","requires":["base","io-base","node","json","yui2-animation","overlay","escape"]},"mathjax":{"name":"mathjax","fullpath":"https:\/\/cdnjs.cloudflare.com\/ajax\/libs\/mathjax\/2.7.5\/MathJax.js?delayStartupUntil=configured"}}};
M.yui.loader = {modules: {}};

//]]>
</script>

<link rel="stylesheet" href="https://moodle2.uni-potsdam.de/filter/ipa/gentium.css" type="text/css">
<!-- <link rel="stylesheet" href="/theme/up/javascript/jQuery-Notify-bar/css/jquery.notifyBar.css">-->

<meta name="robots" content="noindex" /><meta name="robots" content="noindex" /><meta name="robots" content="noindex" />    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Twitter Card data -->
    <meta name="twitter:card" value="summary">
    <meta name="twitter:site" value="Moodle.UP" />
    <meta name="twitter:title" value="bioinf_WS19: data" />

    <!-- Open Graph data -->
    <meta property="og:title" content="bioinf_WS19: data" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://moodle2.uni-potsdam.de" />
    <meta property="og:site_name" content="Moodle.UP" />

    <!-- Chrome, Firefox OS and Opera on Android -->
    <meta name="theme-color" content="#004260" />

    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#004260" />

    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#004260" />
</head>

<body  id="page-mod-resource-view" class="format-topics  path-mod path-mod-resource gecko dir-ltr lang-de yui-skin-sam yui3-skin-sam moodle2-uni-potsdam-de pagelayout-incourse course-20859 context-1231014 cmid-851894 category-1500 two-column  has-region-side-post used-region-side-post has-region-course-section-a empty-region-course-section-a side-post-only">

<div class="skiplinks">
    <a href="#maincontent" class="skip">Zum Hauptinhalt</a>
</div><script type="text/javascript" src="https://moodle2.uni-potsdam.de/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.js"></script><script type="text/javascript" src="https://moodle2.uni-potsdam.de/theme/jquery.php/core/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://moodle2.uni-potsdam.de/theme/jquery.php/theme_adaptable/pace-min.js"></script>
<script type="text/javascript" src="https://moodle2.uni-potsdam.de/theme/jquery.php/theme_adaptable/jquery-flexslider-min.js"></script>
<script type="text/javascript" src="https://moodle2.uni-potsdam.de/theme/jquery.php/theme_adaptable/tickerme.js"></script>
<script type="text/javascript" src="https://moodle2.uni-potsdam.de/theme/jquery.php/theme_adaptable/jquery-easing-min.js"></script>
<script type="text/javascript" src="https://moodle2.uni-potsdam.de/theme/jquery.php/theme_adaptable/adaptable.js"></script>
<script type="text/javascript" src="https://moodle2.uni-potsdam.de/lib/javascript.php/1573283687/lib/javascript-static.js"></script>
<script type="text/javascript">
//<![CDATA[
document.body.className += ' jsenabled';
//]]>
</script>


<!--

<script src="/theme/up/javascript/jQuery-Notify-bar/jquery.notifyBar.js"></script> 

<script>
/*
   $(function() {
    if (typeof window.sessionStorage != undefined) {
      var now = new Date();
      var start = sessionStorage.getItem('warningShownWhen');
      if ( (now - start > 600000) || !sessionStorage.getItem('warningShown')) {
        $.notifyBar({
          cssClass: "warning",
          html: "Hinweis: Texte geschützt – Änderungen bei der digitalen Veröffentlichung urheberrechtlich geschützter Werke ab dem 1. Januar 2017. <br>Informationen zum Hintergrund dieser Veränderung finden Sie im <a href='https://www.uni-potsdam.de/leitfaden-urhg/20161207-up-nachrichten-veroeffentlichung-urhg.pdf' target='_blank'>Schreiben der CIO vom 06.12.2016.</a>",
       delay: 5000,
       close: true,
       closeOnClick: false
      });
    sessionStorage.setItem('warningShown', true);
    sessionStorage.setItem('warningShownWhen', Date.now());
    }
  }
});
*/
</script>

-->
<div id="page" class="container-fluid fullin showblockicons">

    <header id="page-header-wrapper"  >
    <div id="above-header">
        <div class="clearfix container userhead">
            <div class="pull-left">
                <ul class="usermenu2 nav navbar-nav navbar-right"></ul>            </div>

            <div class="headermenu row">
        <div class="dropdown secondone">
            <a class="dropdown-toggle usermendrop" data-toggle="dropdown">

<img src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/u/f1" alt="Nutzerbild Uchralt Temuulen" title="Nutzerbild Uchralt Temuulen" class="userpicture defaultuserpic" width="80" height="80" />Uchralt Temuulen                <span class="fa fa-angle-down"></span>
            </a>

    <ul class="dropdown-menu usermen" role="menu">

<li><a href="https://moodle2.uni-potsdam.de/my" title="Dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li><li><a href="https://moodle2.uni-potsdam.de/user/profile.php" title="Profil anzeigen"><i class="fa fa-user"></i>Profil anzeigen</a></li><li><a href="https://moodle2.uni-potsdam.de/grade/report/overview/index.php" title="Bewertungen"><i class="fa fa-list-alt"></i>Bewertungen</a></li><li><a href="https://moodle2.uni-potsdam.de/user/preferences.php" title="Einstellungen"><i class="fa fa-cog"></i>Einstellungen</a></li><li><a href="https://moodle2.uni-potsdam.de/message/edit.php" title="Systemnachrichten"><i class="fa fa-paper-plane"></i>Systemnachrichten</a></li><li><a href="https://moodle2.uni-potsdam.de/login/logout.php?sesskey=SQ99XGVQrC" title="Logout"><i class="fa fa-sign-out"></i>Logout</a></li>
    </ul>
</div>
</div>

<div style="float: right; position: relative; display: inline; margin-left: 15px; height:20px;">
<ul class="nav navbar-nav"><li class="dropdown langmenu"><a href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=851894" class="dropdown-toggle" data-toggle="dropdown" title="Sprache"><i class="fa fa-globe fa-lg"></i><span class="langdesc">Deutsch ‎(de)‎</span></a><ul class="dropdown-menu"><li><a title="Čeština ‎(cs)‎" href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=851894&amp;lang=cs">Čeština ‎(cs)‎</a></li><li><a title="Deutsch ‎(de)‎" href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=851894&amp;lang=de">Deutsch ‎(de)‎</a></li><li><a title="Dolnoserbski ‎(dsb)‎" href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=851894&amp;lang=dsb">Dolnoserbski ‎(dsb)‎</a></li><li><a title="eesti ‎(et)‎" href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=851894&amp;lang=et">eesti ‎(et)‎</a></li><li><a title="English - United States ‎(en_us)‎" href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=851894&amp;lang=en_us">English - United States ‎(en_us)‎</a></li><li><a title="English ‎(en)‎" href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=851894&amp;lang=en">English ‎(en)‎</a></li><li><a title="Español - Internacional ‎(es)‎" href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=851894&amp;lang=es">Español - Internacional ‎(es)‎</a></li><li><a title="Français ‎(fr)‎" href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=851894&amp;lang=fr">Français ‎(fr)‎</a></li><li><a title="Italiano ‎(it)‎" href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=851894&amp;lang=it">Italiano ‎(it)‎</a></li><li><a title="Latin ‎(la)‎" href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=851894&amp;lang=la">Latin ‎(la)‎</a></li><li><a title="Nederlands ‎(nl)‎" href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=851894&amp;lang=nl">Nederlands ‎(nl)‎</a></li><li><a title="Polski ‎(pl)‎" href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=851894&amp;lang=pl">Polski ‎(pl)‎</a></li><li><a title="Português - Brasil ‎(pt_br)‎" href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=851894&amp;lang=pt_br">Português - Brasil ‎(pt_br)‎</a></li><li><a title="Português - Portugal ‎(pt)‎" href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=851894&amp;lang=pt">Português - Portugal ‎(pt)‎</a></li><li><a title="Vietnamese ‎(vi)‎" href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=851894&amp;lang=vi">Vietnamese ‎(vi)‎</a></li><li><a title="Ελληνικά ‎(el)‎" href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=851894&amp;lang=el">Ελληνικά ‎(el)‎</a></li><li><a title="Русский ‎(ru)‎" href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=851894&amp;lang=ru">Русский ‎(ru)‎</a></li><li><a title="Հայերեն ‎(hy)‎" href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=851894&amp;lang=hy">Հայերեն ‎(hy)‎</a></li><li><a title="עברית ‎(he)‎" href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=851894&amp;lang=he">עברית ‎(he)‎</a></li><li><a title="فارسی ‎(fa)‎" href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=851894&amp;lang=fa">فارسی ‎(fa)‎</a></li><li><a title="ދިވެހި ‎(dv)‎" href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=851894&amp;lang=dv">ދިވެހި ‎(dv)‎</a></li><li><a title="हिंदी ‎(hi)‎" href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=851894&amp;lang=hi">हिंदी ‎(hi)‎</a></li><li><a title="日本語 ‎(ja)‎" href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=851894&amp;lang=ja">日本語 ‎(ja)‎</a></li><li><a title="简体中文 ‎(zh_cn)‎" href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=851894&amp;lang=zh_cn">简体中文 ‎(zh_cn)‎</a></li></ul></ul></div>

<div class="popover-region collapsed popover-region-messages"
    id="nav-message-popover-container" data-userid="33849"
    data-region="popover-region">
    <div class="popover-region-toggle nav-link"
        data-region="popover-region-toggle"
        aria-role="button"
        aria-controls="popover-region-container-5de0cbf54ed8f5de0cbf54a34333"
        aria-haspopup="true"
        aria-label="Mitteilungsfenster ohne neue Mitteilungen anzeigen"
        tabindex="0">
                <img class="icon " alt="Mitteilungen" title="Mitteilungen" src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/t/message" />
        <div class="count-container hidden" data-region="count-container">0</div>

    </div>
    <div 
        id="popover-region-container-5de0cbf54ed8f5de0cbf54a34333"
        class="popover-region-container"
        data-region="popover-region-container"
        aria-expanded="false"
        aria-hidden="true"
        aria-label="Mitteilungsfenster"
        role="region">
        <div class="popover-region-header-container">
            <h3 class="popover-region-header-text" data-region="popover-region-header-text">Mitteilungen</h3>
            <div class="popover-region-header-actions" data-region="popover-region-header-actions">        <div class="newmessage-link">
            <a href="https://moodle2.uni-potsdam.de/message/index.php?contactsfirst=1">Neue Mitteilung
            </a>
        </div>
        <a class="mark-all-read-button"
           href="#"
           role="button"
           title="Alle als gelesen markieren"
           data-action="mark-all-read">
            <span class="normal-icon"><img class="icon " alt="Alle als gelesen markieren" title="Alle als gelesen markieren" src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/t/markasread" /></span>
            <span class="loading-icon"><img class="icon " alt="Laden ..." title="Laden ..." src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/i/loading" /></span>
        </a>
        <a href="https://moodle2.uni-potsdam.de/message/edit.php?id=33849"
           title="Mitteilungen">
            <img class="icon " alt="Mitteilungen" title="Mitteilungen" src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/i/settings" />
        </a>
</div>
        </div>
        <div class="popover-region-content-container" data-region="popover-region-content-container">
            <div class="popover-region-content" data-region="popover-region-content">
                        <div class="messages" data-region="messages" role="log" aria-busy="false" aria-atomic="false" aria-relevant="additions"></div>
        <div class="empty-message" data-region="empty-message" tabindex="0">Keine Mitteilungen</div>

            </div>
            <span class="loading-icon"><img class="icon " alt="Laden ..." title="Laden ..." src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/i/loading" /></span>
        </div>
                <a class="see-all-link"
                    href="https://moodle2.uni-potsdam.de/message/index.php">
                    <div class="popover-region-footer-container">
                        <div class="popover-region-seeall-text">Alle anzeigen</div>
                    </div>
                </a>
    </div>
</div><div class="popover-region collapsed popover-region-notifications"
    id="nav-notification-popover-container" data-userid="33849"
    data-region="popover-region">
    <div class="popover-region-toggle nav-link"
        data-region="popover-region-toggle"
        aria-role="button"
        aria-controls="popover-region-container-5de0cbf54f9e25de0cbf54a34334"
        aria-haspopup="true"
        aria-label="Mitteilungsfenster ohne neue Systemnachrichten anzeigen"
        tabindex="0">
                <img class="icon " alt="Systemnachrichten" title="Systemnachrichten" src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/i/notifications" />
        <div class="count-container hidden" data-region="count-container">0</div>

    </div>
    <div 
        id="popover-region-container-5de0cbf54f9e25de0cbf54a34334"
        class="popover-region-container"
        data-region="popover-region-container"
        aria-expanded="false"
        aria-hidden="true"
        aria-label="Mitteilungsfenster"
        role="region">
        <div class="popover-region-header-container">
            <h3 class="popover-region-header-text" data-region="popover-region-header-text">Systemnachrichten</h3>
            <div class="popover-region-header-actions" data-region="popover-region-header-actions">        <a class="mark-all-read-button"
           href="#"
           title="Alle als gelesen markieren"
           data-action="mark-all-read"
           role="button">
            <span class="normal-icon"><img class="icon " alt="Alle als gelesen markieren" title="Alle als gelesen markieren" src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/t/markasread" /></span>
            <span class="loading-icon"><img class="icon " alt="Laden ..." title="Laden ..." src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/i/loading" /></span>
        </a>
        <a href="https://moodle2.uni-potsdam.de/message/notificationpreferences.php?userid=33849"
           title="Systemnachrichten">
            <img class="icon " alt="Systemnachrichten" title="Systemnachrichten" src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/i/settings" />
        </a>
</div>
        </div>
        <div class="popover-region-content-container" data-region="popover-region-content-container">
            <div class="popover-region-content" data-region="popover-region-content">
                        <div class="all-notifications"
            data-region="all-notifications"
            role="log"
            aria-busy="false"
            aria-atomic="false"
            aria-relevant="additions"></div>
        <div class="empty-message" tabindex="0" data-region="empty-message">Keine Systemnachrichten</div>

            </div>
            <span class="loading-icon"><img class="icon " alt="Laden ..." title="Laden ..." src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/i/loading" /></span>
        </div>
                <a class="see-all-link"
                    href="https://moodle2.uni-potsdam.de/message/output/popup/notifications.php">
                    <div class="popover-region-footer-container">
                        <div class="popover-region-seeall-text">Alle anzeigen</div>
                    </div>
                </a>
    </div>
</div>    </div>
</div>



<div id="page-header" class="clearfix container">

<div id="logocontainer"><a href='https://moodle2.uni-potsdam.de'><img src=//moodle2.uni-potsdam.de/pluginfile.php/1/theme_adaptable/logo/1573283687/up_logo_university_2.png alt="logo" id="logo" /></a></div><div id="sitetitle"><h1>Hartmann,S.: Bioinformatik<h1></div>

        <div class="searchbox">
            <form action="https://moodle2.uni-potsdam.de/course/search.php">
                <label class="hidden" for="search-1" style="display: none;">Kurse suchen</label>
                <div class="search-box grey-box bg-white clear-fix">
                    <input placeholder="Kurse suchen"
                                        accesskey="6"
                                        class="search_tour bg-white no-border left search-box__input ui-autocomplete-input"
                                        type="text"
                                        name="search"
                                        id="search-1"
                                        autocomplete="off">
                    <button title="Kurse suchen"
                            type="submit" class="no-border bg-white pas search-box__button">
                        <abbr class="fa fa-search" title="Kurse suchen"></abbr>
                    </button>
                </div>
            </form>
        </div>

        <div id="course-header">
                    </div>
    </div>


    <div id="navwrap">
        <div class="container">
            <div class="navbar">
                <nav role="navigation" class="navbar-inner">
                    <div class="container-fluid">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <div class="nav-collapse collapse ">
                            <ul class="nav navbar-nav"><li><a title="" href="https://moodle2.uni-potsdam.de/?redirect=0"><i class="fa fa-home"></i> Home</a></li><li><a title="" href="https://moodle2.uni-potsdam.de/my/index.php"><i class="fa fa-dashboard"></i>  Dashboard</a></li><li class="dropdown"><a href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=851894" class="dropdown-toggle" data-toggle="dropdown" title=""><i class="fa fa-sitemap"></i><span class="menutitle">Dieser Kurs</span></a><ul class="dropdown-menu"><li><a title="" href="https://moodle2.uni-potsdam.de/user/index.php?id=20859"><i class="fa fa-users"></i>Personen</a></li><li><a title="" href="https://moodle2.uni-potsdam.de/grade/report/index.php?id=20859"><img class="icon icon" alt="" src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/i/grades" />Bewertungen</a></li><li><a href="https://moodle2.uni-potsdam.de/course/resources.php?id=20859"><img class="icon icon" alt="" src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/mod_page/1573283687/icon" />Arbeitsmaterial</a></li><li><a href="https://moodle2.uni-potsdam.de/mod/forum/index.php?id=20859"><img class="icon icon" alt="" src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/forum/1573283687/icon" />Foren</a></li></ul></ul><ul class="nav navbar-nav"><li class="dropdown"><a href="#cm_submenu_3" class="dropdown-toggle" data-toggle="dropdown" title="Mein Moodle">Mein Moodle</a><ul class="dropdown-menu"><li><a title="Meine Startseite" href="https://moodle2.uni-potsdam.de/my/">Meine Startseite</a></li><li><a title="Mein Profil" href="https://moodle2.uni-potsdam.de/user/profile.php">Mein Profil</a></li><li><a title="Bewertungen" href="https://moodle2.uni-potsdam.de/grade/report/overview/index.php">Bewertungen</a></li><li><a title="Nachrichten" href="https://moodle2.uni-potsdam.de/message/index.php">Nachrichten</a></li><li><a title="Einstellungen" href="https://moodle2.uni-potsdam.de/user/preferences.php">Einstellungen</a></li></ul><li class="dropdown"><a href="#cm_submenu_4" class="dropdown-toggle" data-toggle="dropdown" title="Kurse">Kurse</a><ul class="dropdown-menu"><li><a title="Meine Kurse" href="https://moodle2.uni-potsdam.de/my/">Meine Kurse</a></li><li><a title="Alle Kurse" href="https://moodle2.uni-potsdam.de/course/index.php">Alle Kurse</a></li><li><a title="Kurs suchen" href="https://moodle2.uni-potsdam.de/course/search.php">Kurs suchen</a></li><li><a title="Kurs einrichten" href="http://www.uni-potsdam.de/db/zeik-portal/moodle/anmeldung-moodle2.php">Kurs einrichten</a></li></ul><li class="dropdown"><a href="#cm_submenu_5" class="dropdown-toggle" data-toggle="dropdown" title="Hilfen und Support">Hilfen und Support</a><ul class="dropdown-menu"><li><a title="Account" href="http://www.uni-potsdam.de/de/zim/angebote-loesungen/up-account.html" target="_blank">Account</a></li><li><a title="Hilfeforum" href="https://moodle2.uni-potsdam.de/mod/forum/view.php?id=1640">Hilfeforum</a></li><li><a title="Hilfematerialien" href="https://uni-potsdam.de/agelearning/moodle/" target="_blank">Hilfematerialien</a></li><li><a title="Dokumentation Moodle 3.5" href="https://docs.moodle.org/35/de/Hauptseite">Dokumentation Moodle 3.5</a></li><li><a title="Mailsupport" href="mailto:moodle-team@uni-potsdam.de">Mailsupport</a></li><li><a title="Moodle Hotline 0331 977 4357" href="tel://03319774357">Moodle Hotline 0331 977 4357</a></li></ul></ul>
        <ul class="nav pull-right">
           <li class="hbl">
               <a href="javascript:void(0);" class="moodlezoom" title="Blöcke verbergen">
                   <i class="fa fa-indent fa-lg"></i>
               <span class="zoomdesc">Blöcke verbergen</span>
           </a>
       </li>
       <li class="sbl">
               <a href="javascript:void(0);" class="moodlezoom" title="Blöcke anzeigen">
               <i class="fa fa-outdent fa-lg"></i>
               <span class="zoomdesc">Blöcke anzeigen</span>
           </a>
       </li>
        </ul>
                            <div id="edittingbutton" class="pull-right breadcrumb-button">
                                                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

</header>


<div class="container outercont">
    <div id="page-content" class="row-fluid">
        <div id="page-navbar" class="span12"><ul class="breadcrumb"><i title="Home" class="fa fa-folder-open-o fa-lg"></i><span class="separator"><i class="fa-angle-right fa"></i>
                             </span><li><span tabindex="0">Meine Kurse</span></li><span class="separator"><i class="fa-angle-right fa"></i>
                             </span><li><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" title="Hartmann,S.: Bioinformatik" href="https://moodle2.uni-potsdam.de/course/view.php?id=20859"><span itemprop="title">bioinf_WS19</span></a></span></li><span class="separator"><i class="fa-angle-right fa"></i>
                             </span><li><span tabindex="0">Übungen</span></li><span class="separator"><i class="fa-angle-right fa"></i>
                             </span><li><a href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=851894" id="label_5_25" class=""  tabindex="-1"  title="Datei" >data</a></li></ul></div>
        <section id="region-main" class="span9 desktop-first-column">
            <span class="notifications" id="user-notifications"></span><div role="main"><span id="maincontent"></span><h2>data</h2><div class="resourceworkaround">Klicken Sie auf den Link '<a href="https://moodle2.uni-potsdam.de/pluginfile.php/1231014/mod_resource/content/1/species.zip" onclick="this.target='_blank'">species.zip</a>', um die Datei anzuzeigen.</div></div>        </section>

        <aside id="block-region-side-post" class="span3 block-region" data-blockregion="side-post" data-droptarget="1"><a class="skip skip-block" id="fsb-1" href="#sb-1">Einstellungen überspringen</a><div id="inst5" class="block_settings  block" role="navigation" data-block="settings" data-instanceid="5" aria-labelledby="instance-5-header" data-dockable="1"><div class="header"><div class="title"><div class="block_action"></div><h2 id="instance-5-header">Einstellungen</h2></div></div><div class="content"><div id="settingsnav" class="box block_tree_box"><ul class="block_tree list" role="tree" data-ajax-loader="block_navigation/site_admin_loader"><li class="type_course depth_1 contains_branch" tabindex="-1" aria-labelledby="label_1_1"><p class="tree_item root_node tree_item branch" role="treeitem" aria-expanded="false" aria-owns="random5de0cbf54a3431_group"><span tabindex="0">Kurs-Administration</span></p><ul id="random5de0cbf54a3431_group" role="group" aria-hidden="true"><li class="type_setting depth_2 item_with_icon" tabindex="-1" aria-labelledby="label_2_1"><p class="tree_item hasicon tree_item leaf" role="treeitem"><a href="https://moodle2.uni-potsdam.de/enrol/self/unenrolself.php?enrolid=66443"><img class="icon navicon" alt="" src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/i/user" />Abmelden aus 'bioinf_WS19'</a></p></li></ul></li></ul></div></div></div><span class="skip-block-to" id="sb-1"></span><a class="skip skip-block" id="fsb-2" href="#sb-2">Navigation überspringen</a><div id="inst4" class="block_navigation  block" role="navigation" data-block="navigation" data-instanceid="4" aria-labelledby="instance-4-header"><div class="header"><div class="title"><div class="block_action"></div><h2 id="instance-4-header">Navigation</h2></div></div><div class="content"><ul class="block_tree list" role="tree" data-ajax-loader="block_navigation/nav_loader"><li class="type_unknown depth_1 contains_branch" aria-labelledby="label_1_1"><p class="tree_item branch canexpand navigation_node" role="treeitem" aria-expanded="true" aria-owns="random5de0cbf54a3433_group" data-collapsible="false"><a tabindex="-1" id="label_1_1" href="https://moodle2.uni-potsdam.de/my/">Dashboard</a></p><ul id="random5de0cbf54a3433_group" role="group"><li class="type_setting depth_2 item_with_icon" aria-labelledby="label_2_2"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_2_2" href="https://moodle2.uni-potsdam.de/?redirect=0"><img class="icon navicon" alt="" src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/i/home" /><span class="item-content-wrap">Startseite</span></a></p></li><li class="type_course depth_2 contains_branch" aria-labelledby="label_2_3"><p class="tree_item branch" role="treeitem" aria-expanded="false" aria-owns="random5de0cbf54a3435_group"><span tabindex="-1" id="label_2_3" title="Moodle.UP">Moodle.UP</span></p><ul id="random5de0cbf54a3435_group" role="group" aria-hidden="true"><li class="type_unknown depth_3 item_with_icon" aria-labelledby="label_3_5"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_3_5" href="https://moodle2.uni-potsdam.de/blog/index.php"><img class="icon navicon" alt="" src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/i/navigationitem" /><span class="item-content-wrap">Blogs der Website</span></a></p></li><li class="type_custom depth_3 item_with_icon" aria-labelledby="label_3_6"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_3_6" href="https://moodle2.uni-potsdam.de/badges/view.php?type=1"><img class="icon navicon" alt="" src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/i/navigationitem" /><span class="item-content-wrap">Website-Badges</span></a></p></li><li class="type_setting depth_3 item_with_icon" aria-labelledby="label_3_7"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_3_7" href="https://moodle2.uni-potsdam.de/tag/search.php"><img class="icon navicon" alt="" src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/i/navigationitem" /><span class="item-content-wrap">Schlagwörter</span></a></p></li><li class="type_custom depth_3 item_with_icon" aria-labelledby="label_3_8"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_3_8" href="https://moodle2.uni-potsdam.de/calendar/view.php?view=month&amp;course=20859"><img class="icon navicon" alt="" src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/i/calendar" /><span class="item-content-wrap">Kalender</span></a></p></li><li class="type_activity depth_3 item_with_icon" aria-labelledby="label_3_10"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_3_10" title="Forum" href="https://moodle2.uni-potsdam.de/mod/forum/view.php?id=1"><img class="icon navicon" alt="Forum" title="Forum" src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/forum/1573283687/icon" /><span class="item-content-wrap">Moodle.UP-Nachrichten</span></a></p></li></ul></li><li class="type_system depth_2 contains_branch" aria-labelledby="label_2_11"><p class="tree_item branch canexpand" role="treeitem" aria-expanded="true" aria-owns="random5de0cbf54a34311_group"><span tabindex="-1" id="label_2_11">Meine Kurse</span></p><ul id="random5de0cbf54a34311_group" role="group"><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_12"><p class="tree_item branch canexpand" role="treeitem" aria-expanded="true" aria-owns="random5de0cbf54a34312_group"><a tabindex="-1" id="label_3_12" title="Hartmann,S.: Bioinformatik" href="https://moodle2.uni-potsdam.de/course/view.php?id=20859">bioinf_WS19</a></p><ul id="random5de0cbf54a34312_group" role="group"><li class="type_container depth_4 contains_branch" aria-labelledby="label_4_13"><p class="tree_item branch" role="treeitem" aria-expanded="false" aria-owns="random5de0cbf54a34313_group"><a tabindex="-1" id="label_4_13" href="https://moodle2.uni-potsdam.de/user/index.php?id=20859">Teilnehmer/innen</a></p><ul id="random5de0cbf54a34313_group" role="group" aria-hidden="true"><li class="type_setting depth_5 item_with_icon" aria-labelledby="label_5_14"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_5_14" href="https://moodle2.uni-potsdam.de/blog/index.php?courseid=20859"><img class="icon navicon" alt="" src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/i/navigationitem" /><span class="item-content-wrap">Kursblogs</span></a></p></li><li class="type_user depth_5 item_with_icon" aria-labelledby="label_5_15"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_5_15" href="https://moodle2.uni-potsdam.de/user/view.php?id=33849&amp;course=20859"><img class="icon navicon" alt="" src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/i/navigationitem" /><span class="item-content-wrap">Uchralt Temuulen</span></a></p></li></ul></li><li class="type_setting depth_4 item_with_icon" aria-labelledby="label_4_16"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_4_16" href="https://moodle2.uni-potsdam.de/badges/view.php?type=2&amp;id=20859"><img class="icon navicon" alt="Auszeichnungen" title="Auszeichnungen" src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/i/badge" /><span class="item-content-wrap">Auszeichnungen</span></a></p></li><li class="type_setting depth_4 item_with_icon" aria-labelledby="label_4_17"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_4_17" href="https://moodle2.uni-potsdam.de/admin/tool/lp/coursecompetencies.php?courseid=20859"><img class="icon navicon" alt="" src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/i/competencies" /><span class="item-content-wrap">Kompetenzen</span></a></p></li><li class="type_setting depth_4 item_with_icon" aria-labelledby="label_4_18"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_4_18" href="https://moodle2.uni-potsdam.de/grade/report/index.php?id=20859"><img class="icon navicon" alt="" src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/i/grades" /><span class="item-content-wrap">Bewertungen</span></a></p></li><li class="type_structure depth_4 contains_branch" aria-labelledby="label_4_19"><p class="tree_item branch" role="treeitem" id="expandable_branch_30_368071" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_30_368071" data-node-key="368071" data-node-type="30"><span tabindex="-1" id="label_4_19">Allgemeines</span></p></li><li class="type_structure depth_4 contains_branch" aria-labelledby="label_4_20"><p class="tree_item branch" role="treeitem" id="expandable_branch_30_368074" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_30_368074" data-node-key="368074" data-node-type="30"><span tabindex="-1" id="label_4_20">Vorlesungen</span></p></li><li class="type_structure depth_4 contains_branch" aria-labelledby="label_4_21"><p class="tree_item branch" role="treeitem" aria-expanded="true" aria-owns="random5de0cbf54a34319_group"><span tabindex="-1" id="label_4_21">Übungen</span></p><ul id="random5de0cbf54a34319_group" role="group"><li class="type_activity depth_5 item_with_icon" aria-labelledby="label_5_22"><p class="tree_item hasicon" role="treeitem"><a href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=842487" id="label_5_22" class=""  tabindex="-1"  title="Datei" ><img class="icon navicon" alt="Datei" title="Datei" src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/f/pdf-24" /><span class="item-content-wrap">01: online resources</span></a></p></li><li class="type_activity depth_5 item_with_icon" aria-labelledby="label_5_23"><p class="tree_item hasicon" role="treeitem"><a href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=847757" id="label_5_23" class=""  tabindex="-1"  title="Datei" ><img class="icon navicon" alt="Datei" title="Datei" src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/f/pdf-24" /><span class="item-content-wrap">02: online databases</span></a></p></li><li class="type_activity depth_5 item_with_icon" aria-labelledby="label_5_24"><p class="tree_item hasicon" role="treeitem"><a href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=851892" id="label_5_24" class=""  tabindex="-1"  title="Datei" ><img class="icon navicon" alt="Datei" title="Datei" src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/f/pdf-24" /><span class="item-content-wrap">03: linux</span></a></p></li><li class="type_activity depth_5 item_with_icon current_branch" aria-labelledby="label_5_25"><p class="tree_item hasicon active_tree_node" role="treeitem"><a href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=851894" id="label_5_25" class=""  tabindex="-1"  title="Datei" ><img class="icon navicon" alt="Datei" title="Datei" src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/f/archive-24" /><span class="item-content-wrap">data</span></a></p></li><li class="type_activity depth_5 item_with_icon" aria-labelledby="label_5_26"><p class="tree_item hasicon" role="treeitem"><a href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=855552" id="label_5_26" class=""  tabindex="-1"  title="Datei" ><img class="icon navicon" alt="Datei" title="Datei" src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/f/pdf-24" /><span class="item-content-wrap">04: regex</span></a></p></li><li class="type_activity depth_5 item_with_icon" aria-labelledby="label_5_27"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_5_27" title="Datei" href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=855557"><img class="icon navicon" alt="Datei" title="Datei" src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/f/text-24" /><span class="item-content-wrap">data (pep)</span></a></p></li><li class="type_activity depth_5 item_with_icon" aria-labelledby="label_5_28"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_5_28" title="Datei" href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=855560"><img class="icon navicon" alt="Datei" title="Datei" src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/f/text-24" /><span class="item-content-wrap">data (dna)</span></a></p></li><li class="type_activity depth_5 item_with_icon" aria-labelledby="label_5_29"><p class="tree_item hasicon" role="treeitem"><a href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=859448" id="label_5_29" class=""  tabindex="-1"  title="Datei" ><img class="icon navicon" alt="Datei" title="Datei" src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/f/pdf-24" /><span class="item-content-wrap">05: BLAST</span></a></p></li><li class="type_activity depth_5 item_with_icon" aria-labelledby="label_5_30"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_5_30" title="Datei" href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=859451"><img class="icon navicon" alt="Datei" title="Datei" src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/f/archive-24" /><span class="item-content-wrap">data</span></a></p></li><li class="type_activity depth_5 item_with_icon" aria-labelledby="label_5_31"><p class="tree_item hasicon" role="treeitem"><a href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=862990" id="label_5_31" class=""  tabindex="-1"  title="Datei" ><img class="icon navicon" alt="Datei" title="Datei" src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/f/pdf-24" /><span class="item-content-wrap">06: MSAs</span></a></p></li><li class="type_activity depth_5 item_with_icon" aria-labelledby="label_5_32"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_5_32" title="Datei" href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=862992"><img class="icon navicon" alt="Datei" title="Datei" src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/f/text-24" /><span class="item-content-wrap">data</span></a></p></li><li class="type_activity depth_5 item_with_icon" aria-labelledby="label_5_33"><p class="tree_item hasicon" role="treeitem"><a href="https://moodle2.uni-potsdam.de/mod/resource/view.php?id=866259" id="label_5_33" class=""  tabindex="-1"  title="Datei" ><img class="icon navicon" alt="Datei" title="Datei" src="https://moodle2.uni-potsdam.de/theme/image.php/adaptable/core/1573283687/f/pdf-24" /><span class="item-content-wrap">07: phylogenetics</span></a></p></li></ul></li><li class="type_structure depth_4 contains_branch" aria-labelledby="label_4_35"><p class="tree_item branch" role="treeitem" id="expandable_branch_30_394570" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_30_394570" data-node-key="394570" data-node-type="30"><span tabindex="-1" id="label_4_35">Sonstiges</span></p></li></ul></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_36"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_21081" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_21081" data-node-key="21081" data-node-type="20"><a tabindex="-1" id="label_3_36" title="Matuschek,H.: Mathematik für Informatik I" href="https://moodle2.uni-potsdam.de/course/view.php?id=21081">MFI WS19/20</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_37"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_20689" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_20689" data-node-key="20689" data-node-type="20"><a tabindex="-1" id="label_3_37" title="Intelligent Data Analysis II" href="https://moodle2.uni-potsdam.de/course/view.php?id=20689">IDA2_ws19</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_38"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_21865" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_21865" data-node-key="21865" data-node-type="20"><a tabindex="-1" id="label_3_38" title="Freitag,M.: Statistical Data Analysis" href="https://moodle2.uni-potsdam.de/course/view.php?id=21865">StatDataAnalysis</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_39"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_19187" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_19187" data-node-key="19187" data-node-type="20"><a tabindex="-1" id="label_3_39" title="Intelligent Data Analysis &amp; Machine Learning" href="https://moodle2.uni-potsdam.de/course/view.php?id=19187">IDA_ML_ss19</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_40"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_19696" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_19696" data-node-key="19696" data-node-type="20"><a tabindex="-1" id="label_3_40" title="Mariucci,E.: Bayesian inference and data assimilation" href="https://moodle2.uni-potsdam.de/course/view.php?id=19696">DA</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_41"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_17103" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_17103" data-node-key="17103" data-node-type="20"><a tabindex="-1" id="label_3_41" title="Data Science" href="https://moodle2.uni-potsdam.de/course/view.php?id=17103">DS_ws18</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_42"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_17102" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_17102" data-node-key="17102" data-node-type="20"><a tabindex="-1" id="label_3_42" title="Intelligent Data Analysis II" href="https://moodle2.uni-potsdam.de/course/view.php?id=17102">IDA2_ws18</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_43"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_17090" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_17090" data-node-key="17090" data-node-type="20"><a tabindex="-1" id="label_3_43" title="Schellhorn,S.: Brückenkurs Mathematik für informatiknahe Studiengänge" href="https://moodle2.uni-potsdam.de/course/view.php?id=17090">BK-MfiS1920</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_44"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_18655" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_18655" data-node-key="18655" data-node-type="20"><a tabindex="-1" id="label_3_44" title="Vogel,P.: Geomatik-Kolloquium" href="https://moodle2.uni-potsdam.de/course/view.php?id=18655">GeoFS18</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_45"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_17811" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_17811" data-node-key="17811" data-node-type="20"><a tabindex="-1" id="label_3_45" title="Keller,M.: Mathematik für Informatik I" href="https://moodle2.uni-potsdam.de/course/view.php?id=17811">MI I</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_46"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_15710" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_15710" data-node-key="15710" data-node-type="20"><a tabindex="-1" id="label_3_46" title="Intelligent Data Analysis" href="https://moodle2.uni-potsdam.de/course/view.php?id=15710">IDA_ss18</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_47"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_16530" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_16530" data-node-key="16530" data-node-type="20"><a tabindex="-1" id="label_3_47" title="Lucke, U.: Netzbasierte Speichersysteme" href="https://moodle2.uni-potsdam.de/course/view.php?id=16530">NSS_SS18</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_48"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_15512" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_15512" data-node-key="15512" data-node-type="20"><a tabindex="-1" id="label_3_48" title="Schommer, Christoph: Knowledge Discovery" href="https://moodle2.uni-potsdam.de/course/view.php?id=15512">MINE</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_49"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_16176" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_16176" data-node-key="16176" data-node-type="20"><a tabindex="-1" id="label_3_49" title="Reich,S.: Bayes&#039;sche Inferenz und Datenassimilation" href="https://moodle2.uni-potsdam.de/course/view.php?id=16176">Bayes und DA</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_50"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_15833" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_15833" data-node-key="15833" data-node-type="20"><a tabindex="-1" id="label_3_50" title="SoSe 2018 Mathematical Modelling in Neurocognitive Psychology (Lec)" href="https://moodle2.uni-potsdam.de/course/view.php?id=15833">Mathematische Modellierung neurokognitiven Psycho ...</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_51"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_14929" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_14929" data-node-key="14929" data-node-type="20"><a tabindex="-1" id="label_3_51" title="Grundlagen der Programmierung" href="https://moodle2.uni-potsdam.de/course/view.php?id=14929">GdP 2017</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_52"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_13854" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_13854" data-node-key="13854" data-node-type="20"><a tabindex="-1" id="label_3_52" title="Intelligent Data Analysis II" href="https://moodle2.uni-potsdam.de/course/view.php?id=13854">IDA2_ws17</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_53"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_14852" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_14852" data-node-key="14852" data-node-type="20"><a tabindex="-1" id="label_3_53" title="Zoerner, D.: Game-Based Learning" href="https://moodle2.uni-potsdam.de/course/view.php?id=14852">GBL</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_54"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_14263" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_14263" data-node-key="14263" data-node-type="20"><a tabindex="-1" id="label_3_54" title="WiSe 2017/18 Kognition und Sprache (V)" href="https://moodle2.uni-potsdam.de/course/view.php?id=14263">Kognition Sprache / Psy25088</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_55"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_13159" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_13159" data-node-key="13159" data-node-type="20"><a tabindex="-1" id="label_3_55" title="Vock,M.: Einführung in die allgemeine Didaktik und die empirische Unterrichtsforschung" href="https://moodle2.uni-potsdam.de/course/view.php?id=13159">Allg. Didaktik_4</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_56"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_12673" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_12673" data-node-key="12673" data-node-type="20"><a tabindex="-1" id="label_3_56" title="Scheffer,T.: Intelligent Data Analysis" href="https://moodle2.uni-potsdam.de/course/view.php?id=12673">IDA</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_57"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_13293" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_13293" data-node-key="13293" data-node-type="20"><a tabindex="-1" id="label_3_57" title="Riemer,N.: Videospiele als didaktische Herausforderung" href="https://moodle2.uni-potsdam.de/course/view.php?id=13293">Videosp.Herausf.</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_58"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_13699" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_13699" data-node-key="13699" data-node-type="20"><a tabindex="-1" id="label_3_58" title="Liero,H.: Elementare Modelle und Verfahren der Statistik" href="https://moodle2.uni-potsdam.de/course/view.php?id=13699">ModStat</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_59"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_12942" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_12942" data-node-key="12942" data-node-type="20"><a tabindex="-1" id="label_3_59" title="Liero,H.: Mathematische Statistik" href="https://moodle2.uni-potsdam.de/course/view.php?id=12942">MathStat</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_60"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_12725" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_12725" data-node-key="12725" data-node-type="20"><a tabindex="-1" id="label_3_60" title="SoSe 2017 Psychologische Grundlagen des Lernens und Lehrens (RV)" href="https://moodle2.uni-potsdam.de/course/view.php?id=12725">Psychologische Grundlagen Lernens Lehrens / Psy24067</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_61"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_12810" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_12810" data-node-key="12810" data-node-type="20"><a tabindex="-1" id="label_3_61" title="SoSe 2017 Psychology of Reading (Sem)" href="https://moodle2.uni-potsdam.de/course/view.php?id=12810">Psychologie Lesens / Psy24049</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_62"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_12887" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_12887" data-node-key="12887" data-node-type="20"><a tabindex="-1" id="label_3_62" title="SoSe 2017 Wahrnehmung und Aufmerksamkeit (V)" href="https://moodle2.uni-potsdam.de/course/view.php?id=12887">Wahrnehmung Aufmerksamkeit / Psy24093</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_63"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_11347" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_11347" data-node-key="11347" data-node-type="20"><a tabindex="-1" id="label_3_63" title="Kiy,A.: Praxisorientierte Softwareentwicklung am Beispiel von E-Learning Kleinprojekten" href="https://moodle2.uni-potsdam.de/course/view.php?id=11347">PSaBvEK</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_64"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_11463" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_11463" data-node-key="11463" data-node-type="20"><a tabindex="-1" id="label_3_64" title="Landwehr,N.: Maschinelles Lernen zur naturwissenschaftlichen Modellbildung" href="https://moodle2.uni-potsdam.de/course/view.php?id=11463">ML Modellbildung</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_65"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_10731" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_10731" data-node-key="10731" data-node-type="20"><a tabindex="-1" id="label_3_65" title="Liero,H.: Statistische Datenanalyse- HPI" href="https://moodle2.uni-potsdam.de/course/view.php?id=10731">StatDA-HPI</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_66"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_295" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_295" data-node-key="295" data-node-type="20"><a tabindex="-1" id="label_3_66" title="Paulus,K.: Molekulare Evolutionsbiologie" href="https://moodle2.uni-potsdam.de/course/view.php?id=295">Molevol</a></p></li></ul></li><li class="type_system depth_2 contains_branch" aria-labelledby="label_2_67"><p class="tree_item branch" role="treeitem" id="expandable_branch_0_courses" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_0_courses" data-node-key="courses" data-node-type="0"><a tabindex="-1" id="label_2_67" href="https://moodle2.uni-potsdam.de/course/index.php">Kurse</a></p></li></ul></li></ul></div></div><span class="skip-block-to" id="sb-2"></span></aside>    </div>
</div>


<footer id="page-footer">

<div id="course-footer"></div>
                <div class="container blockplace1"><div class="row-fluid"><div class="left-col span12"><p><span style="padding:5px 0 6px 10px;font-size:14px;"><a href="http://www.uni-potsdam.de/impressum_elearning.html" target="_blank" rel="noreferrer noopener">Impressum</a></span></p>
<p><span style="padding:5px 0 6px 10px;font-size:14px;"><a href="https://moodle2.uni-potsdam.de/pluginfile.php/590943/block_html/content/Benutzungsordnung.pdf" target="_blank" rel="noreferrer noopener">Benutzerordnung</a></span></p></div></div></div>    <div class="info container2 clearfix">
        <div class="container">
            <div class="row-fluid">
                <div class="span8">
<div style="text-align:left;"> </div>
<div style="text-align:left;">© 2012-2019 Universität Potsdam | ZIM</div>
<div style="text-align:left;"><br />Letzte Aktualisierung: 15.01.2019</div>
<div style="text-align:left;"> </div>                </div>

                <div class="span4">
                                    </div>
            </div>
        </div>
    </div>
</footer>


<a class="back-to-top" href="#top" ><i class="fa fa-angle-up "></i></a>


<script type="text/javascript">
//<![CDATA[
var require = {
    baseUrl : 'https://moodle2.uni-potsdam.de/lib/requirejs.php/1573283687/',
    // We only support AMD modules with an explicit define() statement.
    enforceDefine: true,
    skipDataMain: true,
    waitSeconds : 0,

    paths: {
        jquery: 'https://moodle2.uni-potsdam.de/lib/javascript.php/1573283687/lib/jquery/jquery-3.2.1.min',
        jqueryui: 'https://moodle2.uni-potsdam.de/lib/javascript.php/1573283687/lib/jquery/ui-1.12.1/jquery-ui.min',
        jqueryprivate: 'https://moodle2.uni-potsdam.de/lib/javascript.php/1573283687/lib/requirejs/jquery-private'
    },

    // Custom jquery config map.
    map: {
      // '*' means all modules will get 'jqueryprivate'
      // for their 'jquery' dependency.
      '*': { jquery: 'jqueryprivate' },
      // Stub module for 'process'. This is a workaround for a bug in MathJax (see MDL-60458).
      '*': { process: 'core/first' },

      // 'jquery-private' wants the real jQuery module
      // though. If this line was not here, there would
      // be an unresolvable cyclic dependency.
      jqueryprivate: { jquery: 'jquery' }
    }
};

//]]>
</script>
<script type="text/javascript" src="https://moodle2.uni-potsdam.de/lib/javascript.php/1573283687/lib/requirejs/require.min.js"></script>
<script type="text/javascript">
//<![CDATA[
require(['core/first'], function() {
;
require(["media_videojs/loader"], function(loader) {
    loader.setUp(function(videojs) {
        videojs.options.flash.swf = "https://moodle2.uni-potsdam.de/media/player/videojs/videojs/video-js.swf";
videojs.addLanguage("de",{
 "Play": "Wiedergabe",
 "Pause": "Pause",
 "Replay": "Erneut abspielen",
 "Current Time": "Aktueller Zeitpunkt",
 "Duration Time": "Dauer",
 "Remaining Time": "Verbleibende Zeit",
 "Stream Type": "Streamtyp",
 "LIVE": "LIVE",
 "Loaded": "Geladen",
 "Progress": "Status",
 "Fullscreen": "Vollbild",
 "Non-Fullscreen": "Kein Vollbild",
 "Mute": "Ton aus",
 "Unmute": "Ton ein",
 "Playback Rate": "Wiedergabegeschwindigkeit",
 "Subtitles": "Untertitel",
 "subtitles off": "Untertitel aus",
 "Captions": "Untertitel",
 "captions off": "Untertitel aus",
 "Chapters": "Kapitel",
 "You aborted the media playback": "Sie haben die Videowiedergabe abgebrochen.",
 "A network error caused the media download to fail part-way.": "Der Videodownload ist aufgrund eines Netzwerkfehlers fehlgeschlagen.",
 "The media could not be loaded, either because the server or network failed or because the format is not supported.": "Das Video konnte nicht geladen werden, da entweder ein Server- oder Netzwerkfehler auftrat oder das Format nicht unterstützt wird.",
 "The media playback was aborted due to a corruption problem or because the media used features your browser did not support.": "Die Videowiedergabe wurde entweder wegen eines Problems mit einem beschädigten Video oder wegen verwendeten Funktionen, die vom Browser nicht unterstützt werden, abgebrochen.",
 "No compatible source was found for this media.": "Für dieses Video wurde keine kompatible Quelle gefunden.",
 "Play Video": "Video abspielen",
 "Close": "Schließen",
 "Modal Window": "Modales Fenster",
 "This is a modal window": "Dies ist ein modales Fenster",
 "This modal can be closed by pressing the Escape key or activating the close button.": "Durch Drücken der Esc-Taste bzw. Betätigung der Schaltfläche \"Schließen\" wird dieses modale Fenster geschlossen.",
 ", opens captions settings dialog": ", öffnet Einstellungen für Untertitel",
 ", opens subtitles settings dialog": ", öffnet Einstellungen für Untertitel",
 ", selected": ", ausgewählt",
 "captions settings": "Untertiteleinstellungen",
 "subtitles settings": "Untertiteleinstellungen",
 "descriptions settings": "Einstellungen für Beschreibungen",
 "Close Modal Dialog": "Modales Fenster schließen",
 "Descriptions": "Beschreibungen",
 "descriptions off": "Beschreibungen aus",
 "The media is encrypted and we do not have the keys to decrypt it.": "Die Entschlüsselungsschlüssel für den verschlüsselten Medieninhalt sind nicht verfügbar.",
 ", opens descriptions settings dialog": ", öffnet Einstellungen für Beschreibungen",
 "Audio Track": "Tonspur",
 "Text": "Schrift",
 "White": "Weiß",
 "Black": "Schwarz",
 "Red": "Rot",
 "Green": "Grün",
 "Blue": "Blau",
 "Yellow": "Gelb",
 "Magenta": "Magenta",
 "Cyan": "Türkis",
 "Background": "Hintergrund",
 "Window": "Fenster",
 "Transparent": "Durchsichtig",
 "Semi-Transparent": "Halbdurchsichtig",
 "Opaque": "Undurchsictig",
 "Font Size": "Schriftgröße",
 "Text Edge Style": "Textkantenstil",
 "None": "Kein",
 "Raised": "Erhoben",
 "Depressed": "Gedrückt",
 "Uniform": "Uniform",
 "Dropshadow": "Schlagschatten",
 "Font Family": "Schristfamilie",
 "Proportional Sans-Serif": "Proportionale Sans-Serif",
 "Monospace Sans-Serif": "Monospace Sans-Serif",
 "Proportional Serif": "Proportionale Serif",
 "Monospace Serif": "Monospace Serif",
 "Casual": "Zwanglos",
 "Script": "Schreibeschrift",
 "Small Caps": "Small-Caps",
 "Reset": "Zurücksetzen",
 "restore all settings to the default values": "Alle Einstellungen auf die Standardwerte zurücksetzen",
 "Done": "Fertig",
 "Caption Settings Dialog": "Einstellungsdialog für Untertitel",
 "Beginning of dialog window. Escape will cancel and close the window.": "Anfang des Dialogfensters. Esc bricht ab und schließt das Fenster.",
 "End of dialog window.": "Ende des Dialogfensters.",
 "Audio Player": "Audio-Player",
 "Video Player": "Video-Player",
 "Progress Bar": "Forschrittsbalken",
 "progress bar timing: currentTime={1} duration={2}": "{1} von {2}",
 "Volume Level": "Lautstärkestufe"
});

    });
});;
require(["theme_adaptable/bsoptions"], function(amd) { amd.init(false); });;
function legacy_activity_onclick_handler_1(e) { e.halt(); window.open('https://moodle2.uni-potsdam.de/mod/resource/view.php?id=842487&redirect=1'); return false; };
function legacy_activity_onclick_handler_2(e) { e.halt(); window.open('https://moodle2.uni-potsdam.de/mod/resource/view.php?id=847757&redirect=1'); return false; };
function legacy_activity_onclick_handler_3(e) { e.halt(); window.open('https://moodle2.uni-potsdam.de/mod/resource/view.php?id=851892&redirect=1'); return false; };
function legacy_activity_onclick_handler_4(e) { e.halt(); window.open('https://moodle2.uni-potsdam.de/mod/resource/view.php?id=851894&redirect=1'); return false; };
function legacy_activity_onclick_handler_5(e) { e.halt(); window.open('https://moodle2.uni-potsdam.de/mod/resource/view.php?id=855552&redirect=1'); return false; };
function legacy_activity_onclick_handler_6(e) { e.halt(); window.open('https://moodle2.uni-potsdam.de/mod/resource/view.php?id=859448&redirect=1'); return false; };
function legacy_activity_onclick_handler_7(e) { e.halt(); window.open('https://moodle2.uni-potsdam.de/mod/resource/view.php?id=862990&redirect=1'); return false; };
function legacy_activity_onclick_handler_8(e) { e.halt(); window.open('https://moodle2.uni-potsdam.de/mod/resource/view.php?id=866259&redirect=1'); return false; };
require(["block_settings/settingsblock"], function(amd) { amd.init("5", null); });;

    require(['core/yui'], function(Y) {
            Y.on('click', legacy_activity_onclick_handler_1, '#label_5_22', null);
    });
;

    require(['core/yui'], function(Y) {
            Y.on('click', legacy_activity_onclick_handler_2, '#label_5_23', null);
    });
;

    require(['core/yui'], function(Y) {
            Y.on('click', legacy_activity_onclick_handler_3, '#label_5_24', null);
    });
;

    require(['core/yui'], function(Y) {
            Y.on('click', legacy_activity_onclick_handler_4, '#label_5_25', null);
    });
;

    require(['core/yui'], function(Y) {
            Y.on('click', legacy_activity_onclick_handler_5, '#label_5_26', null);
    });
;

    require(['core/yui'], function(Y) {
            Y.on('click', legacy_activity_onclick_handler_6, '#label_5_29', null);
    });
;

    require(['core/yui'], function(Y) {
            Y.on('click', legacy_activity_onclick_handler_7, '#label_5_31', null);
    });
;

    require(['core/yui'], function(Y) {
            Y.on('click', legacy_activity_onclick_handler_8, '#label_5_33', null);
    });
;
require(["block_navigation/navblock"], function(amd) { amd.init("4"); });;

require(['core/yui'], function(Y) {
    M.util.init_skiplink(Y);
});
;

require(['jquery', 'message_popup/message_popover_controller'], function($, controller) {
    var container = $('#nav-message-popover-container');
    var controller = new controller(container);
    controller.registerEventListeners();
    controller.registerListNavigationEventListeners();
});
;

require(['jquery', 'message_popup/notification_popover_controller'], function($, controller) {
    var container = $('#nav-notification-popover-container');
    var controller = new controller(container);
    controller.registerEventListeners();
    controller.registerListNavigationEventListeners();
});
;

    require(['core/yui'], function(Y) {
            Y.on('click', legacy_activity_onclick_handler_4, '#label_5_25', null);
    });
;
require(["core/log"], function(amd) { amd.setConfig({"level":"warn"}); });
});
//]]>
</script>
<script type="text/javascript" src="https://moodle2.uni-potsdam.de/theme/javascript.php/adaptable/1573283687/footer"></script>
<script type="text/javascript">
//<![CDATA[
M.str = {"moodle":{"lastmodified":"Zuletzt ge\u00e4ndert","name":"Name","error":"Fehler","info":"Informationen","yes":"Ja","no":"Nein","ok":"OK","viewallcourses":"Alle Kurse zeigen","cancel":"Abbrechen","confirm":"Best\u00e4tigen","areyousure":"Sind Sie sicher?","closebuttontitle":"Schlie\u00dfen","unknownerror":"Unbekannter Fehler"},"repository":{"type":"Typ","size":"Gr\u00f6\u00dfe","invalidjson":"Ung\u00fcltiger JSON-Text","nofilesattached":"Keine Datei","filepicker":"Dateiauswahl","logout":"Abmelden","nofilesavailable":"Keine Dateien vorhanden","norepositoriesavailable":"Sie k\u00f6nnen hier zur Zeit keine Dateien hochladen.","fileexistsdialogheader":"Datei bereits vorhanden","fileexistsdialog_editor":"Eine Datei mit diesem Namen wurde bereits an den Text angeh\u00e4ngt, den Sie gerade bearbeiten","fileexistsdialog_filemanager":"Eine Datei mit diesem Namen wurde bereits an den Text angeh\u00e4ngt","renameto":"Nach '{$a}' umbenennen","referencesexist":"{$a} Aliase\/Verkn\u00fcpfungen zu dieser Datei","select":"W\u00e4hlen Sie"},"admin":{"confirmdeletecomments":"M\u00f6chten Sie die Kommentare wirklich l\u00f6schen?","confirmation":"Best\u00e4tigung"},"block":{"addtodock":"Block ins Dock bewegen","undockitem":"Diesen Block abdocken","dockblock":"Block {$a} ins Dock","undockblock":"'{$a}' abdocken","undockall":"Alles abdocken","hidedockpanel":"Dock verbergen","hidepanel":"Steuerung verbergen"},"langconfig":{"thisdirectionvertical":"btt"}};
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
(function() {Y.use("moodle-filter_glossary-autolinker",function() {M.filter_glossary.init_filter_autolinking({"courseid":0});
});
Y.use("moodle-filter_mathjaxloader-loader",function() {M.filter_mathjaxloader.configure({"mathjaxconfig":"MathJax.Hub.Config({\r\n    config: [\"Accessible.js\", \"Safe.js\"],\r\n    errorSettings: { message: [\"!\"] },\r\n    skipStartupTypeset: true,\r\n    messageStyle: \"none\"\r\n});\r\n","lang":"de"});
});
Y.use("moodle-core-dock-loader",function() {M.core.dock.loader.initLoader();
});
M.util.help_popups.setup(Y);
M.util.init_block_hider(Y, {"id":"inst5","title":"Einstellungen","preference":"block5hidden","tooltipVisible":"Block Einstellungen verbergen","tooltipHidden":"Block Einstellungen anzeigen"});
M.util.init_block_hider(Y, {"id":"inst4","title":"Navigation","preference":"block4hidden","tooltipVisible":"Block Navigation verbergen","tooltipHidden":"Block Navigation anzeigen"});
 M.util.js_pending('random5de0cbf54a34337'); Y.on('domready', function() { M.util.js_complete("init");  M.util.js_complete('random5de0cbf54a34337'); });
})();
//]]>
</script>

</div>


</body>
</html>
