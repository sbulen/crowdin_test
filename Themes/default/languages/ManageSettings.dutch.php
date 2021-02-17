<?php
// Version: 2.1 RC3; ManageSettings

global $scripturl;

// argument(s): theme_id, session_id, session_var, $scripturl
$txt['modSettings_desc'] = 'This page allows you to change the settings of features and basic options in your forum. Please see the <a href="%4$s?action=admin;area=theme;sa=list;th=%1$s;%3$s=%2$s">theme settings</a> for more options. Click the help icons for more information about a setting.';
$txt['modification_settings_desc'] = 'Deze pagina bevat instellingen die door modificaties aan je forum zijn toegevoegd.';

$txt['modification_no_misc_settings'] = 'Er zijn nog geen modificaties ge&iuml;nstalleerd die instellingen aan deze pagina hebben toegevoegd.';

$txt['pollMode'] = 'Pollmodus';
$txt['disable_polls'] = 'Polls deactiveren';
$txt['enable_polls'] = 'Polls activeren';
$txt['polls_as_topics'] = 'Toon bestaande polls als topics';
$txt['allow_guestAccess'] = 'Sta gasten toe het forum te bekijken';
$txt['userLanguage'] = 'Activeer voorkeur taalpakket';
$txt['allow_hideOnline'] = 'Sta niet-beheerders toe om hun status te verbergen';
$txt['titlesEnable'] = 'Extra titels activeren';
$txt['enable_buddylist'] = 'Vrienden- en negeerlijsten activeren';
$txt['default_personal_text'] = 'Standaard persoonlijke tekst<div class="smalltext">Persoonlijke tekst die nieuwe leden toegekend krijgen.</div>';
$txt['default_personal_text_note'] = 'Standaard persoonlijke tekst voor nieuwe leden.';
$txt['time_format'] = 'Standaard tijdsinstelling';
$txt['setting_time_offset'] = 'Algemene tijdsafwijking <div class="smalltext">(toegevoegd aan lidspecifieke tijdsafwijking)</div>';
$txt['setting_default_timezone'] = 'Forum default timezone';
$txt['setting_timezone_priority_countries'] = 'Toon tijdzones van deze landen eerst';
$txt['setting_timezone_priority_countries_note'] = 'Een komma-gescheiden lijst van twee letter ISO landcodes. ';
$txt['failed_login_threshold'] = 'Drempel voor mislukte inlogpogingen';
$txt['loginHistoryDays'] = 'Aantal dagen dat inloggeschiedenis bewaard wordt';
$txt['lastActive'] = 'Drempelwaarde voor activiteit gebruiker';
$txt['trackStats'] = 'Track statistics';
$txt['hitStats'] = 'Track daily page views (statistics tracking must be enabled)';
$txt['enableCompressedOutput'] = 'Gecomprimeerde output activeren';
$txt['databaseSession_enable'] = 'Gebruik database-gebaseerde sessies';
$txt['databaseSession_loose'] = 'Browsers mogen terug naar pagina\'s uit de cache';
$txt['databaseSession_lifetime'] = 'Seconden voordat een ongebruikte sessie ongeldig wordt';
$txt['error_log_desc'] = 'Indien geactiveerd zal elke fout die bij de leden van het forum ontstaat worden opgeslagen in het log. Dit kan een waardevol hulpmiddel zijn bij het onderzoeken van problemen in het forum.';
$txt['enableErrorLogging'] = 'Activeer het loggen van fouten';
$txt['enableErrorQueryLogging'] = 'Volledige query\'s in het foutenlog plaatsen';
$txt['markread_title'] = 'Read Logs';
$txt['mark_read_desc'] = 'The following options govern how long before automatically marking boards and topics as read and how long before purging this information.';
$txt['mark_read_beyond'] = 'Automatically mark boards as read for users who have been inactive after this many days';
$txt['mark_read_delete_beyond'] = 'Automatically purge information about boards and topics visited after this many days';
$txt['mark_read_max_users'] = 'Maximum users to process at a time';
$txt['pruningOptions'] = 'Schakel het opschonen van logingangen in';
$txt['pruneErrorLog'] = 'Verwijder ingangen uit het foutenlog ouder dan<div class="smalltext">(0 om uit te schakelen)</div>';
$txt['pruneModLog'] = 'Verwijder ingangen uit het moderatielog ouder dan<div class="smalltext">(0 om uit te schakelen)</div>';
$txt['pruneBanLog'] = 'Verwijder ingangen uit het banlog ouder dan<div class="smalltext">(0 om uit te schakelen)</div>';
$txt['pruneReportLog'] = 'Verwijder ingangen uit het moderatierapportagelog ouder dan<div class="smalltext">(0 om uit te schakelen)</div>';
$txt['pruneScheduledTaskLog'] = 'Verwijder ingangen uit het geplande taken-log ouder dan<div class="smalltext">(0 om uit te schakelen)</div>';
$txt['pruneSpiderHitLog'] = 'Verwijder ingangen uit het spiderlog ouder dan<div class="smalltext">(0 om uit te schakelen)</div>';
$txt['cookieTime'] = 'Standaardduur van het logincookie (in minuten, groter dan 5)';
$txt['localCookies'] = 'Sla cookies lokaal op<div class="smalltext">(SSI zal niet werken met deze optie aan)</div>';
$txt['globalCookies'] = 'Cookies onafhankelijk van het subdomein gebruiken<div class="smalltext">(schakel lokaal opslaan van cookies eerst uit!)</div>';
$txt['globalCookiesDomain'] = 'Hoofddomein voor subdomein-onafhankelijke cookies';
$txt['invalid_cookie_domain'] = 'Het opgegeven domein lijkt ongeldig, controleer je invoer en probeer het nogmaals.';
$txt['secureCookies'] = 'Forceer veilige cookies<div class="smalltext">(Alleen voor gebruik in combinatie met HTTPS - anders niet gebruiken!)</div>';
$txt['httponlyCookies'] = 'Forceer dat cookies alleen beschikbaar zijn via HTTP';
$txt['securityDisable'] = 'Administratiebeveiliging uitschakelen';
$txt['securityDisable_moderate'] = 'Moderatiebeveiliging uitschakelen';
$txt['send_validation_onChange'] = 'E-mail een nieuw wachtwoord als een lid zijn / haar e-mailadres wijzigt';
$txt['approveAccountDeletion'] = 'Vereis goedkeuring van een forumbeheerder wanneer een lid zijn account verwijdert';
$txt['autoFixDatabase'] = 'Automatisch defecte tabellen repareren';
$txt['disallow_sendBody'] = 'Sta geen berichttekst in notificaties toe';
$txt['enable_ajax_alerts'] = 'Allow AJAX desktop notifications for alerts';
$txt['alerts_auto_purge'] = 'Automatically delete read alerts';
$txt['alerts_auto_purge_7'] = 'After 1 week';
$txt['alerts_auto_purge_30'] = 'After 1 month';
$txt['alerts_auto_purge_90'] = 'After 3 months';
$txt['alerts_auto_purge_0'] = 'Nooit';
$txt['jquery_source'] = 'Bron voor de jQuery-bibliotheek';
$txt['jquery_custom_label'] = 'Aangepast';
$txt['jquery_custom'] = 'Custom URL to the jQuery Library';
$txt['jquery_local'] = 'Lokaal';
$txt['jquery_cdn'] = 'Google-CDN';
$txt['jquery_auto'] = 'Automatisch';
$txt['queryless_urls'] = 'Zoekmachine-vriendelijke URLs<div class="smalltext"><strong>Alleen Apache/Lighttpd!</strong></div>';
$txt['minimize_files'] = 'Minimaliseer CSS- en JavaScript-bestanden';
$txt['queryless_urls_note'] = 'Alleen Apache/Lighttpd';
$txt['enableReportPM'] = 'Schakel het rapporteren van persoonlijke berichten in';
$txt['max_pm_recipients'] = 'Maximum toegestane aantal ontvangers per persoonlijk bericht<div class="smalltext">(0 voor geen limiet, admins uitgezonderd)</div>';
$txt['max_pm_recipients_note'] = '(0 voor geen limiet, geldt niet voor beheerders)';
$txt['pm_posts_verification'] = 'Postaantal waaronder gebruikers verificatie moeten passeren alvorens ze persoonlijke berichten kunnen verzenden<div class="smalltext">(0 voor geen limiet, admins uitgezonderd)</div>';
$txt['pm_posts_verification_note'] = '(0 voor geen limiet, geldt niet voor beheerders)';
$txt['pm_posts_per_hour'] = 'Aantal persoonlijke berichten dat een gebruiker mag verzenden in een uur tijd<div class="smalltext">(0 voor geen limiet, admins uitgezonderd)</div>';
$txt['pm_posts_per_hour_note'] = '(0 voor geen limiet, geldt niet voor beheerders)';
$txt['compactTopicPagesEnable'] = 'Limiteer het aantal weergegeven paginalinks';
$txt['contiguous_page_display'] = 'Aantal weer te geven aangrenzende pagina\'s';
$txt['to_display'] = 'weergeven';
$txt['todayMod'] = 'Schakel korte datumnotaties in';
$txt['today_disabled'] = 'Uitgeschakeld';
$txt['today_only'] = 'Alleen \'Vandaag\'';
$txt['yesterday_today'] = '\'Vandaag\' en \'Gisteren\'';
$txt['onlineEnable'] = 'Show online/offline status in posts and PMs';
$txt['defaultMaxMembers'] = 'Leden per pagina in de ledenlijst';
$txt['timeLoadPageEnable'] = 'Toon de tijd benodigd om de pagina op te bouwen';
$txt['disableHostnameLookup'] = 'Schakel het opzoeken van hostnamen uit';
$txt['who_enabled'] = 'Wie is online activeren';
$txt['meta_keywords'] = 'Meta-sleutelwoorden met betrekking op dit forum<div class="smalltext">Voor zoekmachines, laat leeg voor standaardwoorden.</div>';
$txt['meta_keywords_note'] = 'Voor zoekmachines, laat leeg voor standaard instelling.';
$txt['settings_error'] = 'Waarschuwing: Update van Settings.php mislukt, de instellingen zijn niet gewijzigd.';
$txt['image_proxy_enabled'] = 'Afbeeldingenproxy inschakelen';
$txt['image_proxy_secret'] = 'Geheim token voor afbeeldingenproxy';
$txt['image_proxy_maxsize'] = 'Maximale bestandsgrootte voor afbeeldingen in cache (in KB)';
$txt['force_ssl'] = 'SSL-modus van forum';
$txt['force_ssl_off'] = 'Deactiveer SSL';
$txt['force_ssl_complete'] = 'Forceer SSL voor het gehele forum';
$txt['search_language'] = 'Taal voor fulltext-zoeken';

// Like settings.
$txt['enable_likes'] = 'Activeer Vind-ik-leuks';

// Mention settings.
$txt['enable_mentions'] = 'Activeer vermeldingen';

$txt['caching_information'] = 'SMF supports caching through the use of accelerators. The currently supported accelerators include:
<ul class="normallist">
	<li>APCu</li>
	<li>Memcached</li>
	<li>SQLite3</li>
	<li>PostgreSQL</li>
	<li>Zend Platform/Performance Suite (Not Zend Optimizer)</li>
</ul>
Caching will work best if you have PHP compiled with one of the above optimizers, or have memcached available. If you do not have any optimizer installed SMF will do file based caching.';
$txt['detected_no_caching'] = 'SMF has not been able to detect a compatible accelerator on your server. File based caching can be used instead.';
$txt['detected_accelerators'] = 'SMF has detected the following accelerators: %1$s';

$txt['cache_enable'] = 'Cachingniveau';
$txt['cache_off'] = 'Geen caching';
$txt['cache_level1'] = 'Niveau 1 caching (aanbevolen)';
$txt['cache_level2'] = 'Niveau 2 caching';
$txt['cache_level3'] = 'Niveau 3 caching (niet aanbevolen)';
$txt['cache_accelerator'] = 'Cache Accelerator';
$txt['filebased_cache'] = 'SMF file based caching';
$txt['sqlite_cache'] = 'SQLite3-database-gebaseerde caching';
$txt['postgres_cache'] = 'PostgreSQL-cache';
$txt['cachedir_sqlite'] = 'SQLite3-database-cachemap';
$txt['apcu_cache'] = 'APCu';
$txt['memcacheimplementation_cache'] = 'Memcache';
$txt['memcachedimplementation_cache'] = 'Memcached';
$txt['zend_cache'] = 'Zend Platform/Performance Suite';
$txt['cache_filebased_settings'] = 'SMF file based caching settings';
$txt['cache_sqlite_settings'] = 'SQLite3-database-cache-instellingen';
$txt['cache_memcached_settings'] = 'Memcache/Memcached settings';
$txt['cache_memcached_servers'] = 'Memcache/Memcached servers';
$txt['cache_memcached_servers_subtext'] = 'Example: 127.0.0.1:11211,127.0.0.2';

$txt['loadavg_warning'] = 'Please note: the settings below are to be edited with care. Setting any of them too low may render your forum <strong>unusable</strong>! The current load average is <strong>%01.2f</strong>';
$txt['loadavg_enable'] = 'Schakel load-balancering middels load-gemiddelden in';
$txt['loadavg_auto_opt'] = 'Drempel voor het uitschakelen van automatische database-optimalisatie';
$txt['loadavg_search'] = 'Drempel voor het uitschakelen van de zoekfunctie';
$txt['loadavg_allunread'] = 'Drempel voor het uitschakelen van alle ongelezen topics';
$txt['loadavg_unreadreplies'] = 'Drempel voor het uitschakelen van alle ongelezen reacties';
$txt['loadavg_show_posts'] = 'Drempel voor het uitschakelen van weergave van berichten van &eacute;&eacute;n gebruiker';
$txt['loadavg_userstats'] = 'Drempel voor het uitschakelen van weergave van gebruikersstatistieken';
$txt['loadavg_bbc'] = 'Drempel voor het uitschakelen van de weergave van BBC-opmaak in berichten';
$txt['loadavg_forum'] = 'Drempel voor het <strong>volledig</strong> afsluiten van het forum';
$txt['loadavg_disabled_windows'] = 'Load balancing support is not available on Windows.';
$txt['loadavg_disabled_osx'] = 'Load balancing support is not available on OS:X.';
$txt['loadavg_disabled_conf'] = 'Load balancing support is disabled by your host configuration.';

$txt['setting_password_strength'] = 'Vereiste kwaliteit van gebruikerswachtwoorden';
$txt['setting_password_strength_low'] = 'Laag - minimaal 4 karakters';
$txt['setting_password_strength_medium'] = 'Gemiddeld - mag niet de gebruiksnaam bevatten';
$txt['setting_password_strength_high'] = 'Hoog - mix van verschillende karakters';
$txt['setting_enable_password_conversion'] = 'Sta conversie van wachtwoordhashes toe';

$txt['antispam_Settings'] = 'Anti-spam-verificatie';
$txt['antispam_Settings_desc'] = 'Deze sectie stelt je in staat om verificatie in te stellen om er zeker van te zijn dat de gebruiker menselijk is en niet een bot, alsook het aanpassen hoe en waar deze worden toegepast.';
$txt['setting_reg_verification'] = 'Vereis verificatie op de registratiepagina';
$txt['posts_require_captcha'] = 'Aantal berichten waaronder gebruikers verificatie moeten passeren om een bericht te kunnen plaatsen';
$txt['posts_require_captcha_desc'] = '(0 voor geen limiet, moderators uitgezonderd)';
$txt['search_enable_captcha'] = 'Vereis verificatie bij alle zoekopdrachten van gasten';
$txt['setting_guests_require_captcha'] = 'Gasten moeten verificatie passeren voor ze een bericht kunnen plaatsen';
$txt['setting_guests_require_captcha_desc'] = '(Automatisch van toepassing wanneer een minimum aantal berichten voor gebruikers is ingesteld)';
$txt['question_not_defined'] = 'Je moet een vraag en antwoord in je forum standaard taal (%1$s) gebruiken anders zullen leden niet in staat zijn de CAPTCHA in te vullen, en niet kunnen registreren.';

$txt['configure_verification_means'] = 'Configureer verificatiemethodes';
$txt['setting_qa_verification_number'] = 'Aantal verificatievragen die een gebruiker moet beantwoorden';
$txt['setting_qa_verification_number_desc'] = '(0 om uit te schakelen; vragen kunnen hieronder ingesteld worden)';
$txt['configure_verification_means_desc'] = '<span class="smalltext">Hieronder kun je instellen welke anti-spam-features je wilt gebruiken wanneer geverifieerd moet worden of een gebruiker menselijk is. Merk op dat de gebruiker <em>alle</em> verificaties moet passeren, dus als je zowel een verificatie-afbeelding als een vraag/antwoord-methode gebruikt, moet de gebruiker ze beide doorstaan om door te kunnen gaan.</span>';
$txt['setting_visual_verification_type'] = 'Complexiteit van de visuele verificatieafbeelding';
$txt['setting_visual_verification_type_desc'] = 'Hoe complexer de afbeelding, hoe moeilijker het is voor bots om te omzeilen';
$txt['setting_image_verification_off'] = 'Uitgeschakeld';
$txt['setting_image_verification_vsimple'] = 'Erg simpel - platte tekst als afbeelding';
$txt['setting_image_verification_simple'] = 'Simpel - overlappende gekleurde letters, geen ruis';
$txt['setting_image_verification_medium'] = 'Gemiddeld - overlappende gekleurde letters, met ruis/lijnen';
$txt['setting_image_verification_high'] = 'Hoog - gedraaide letters, veel ruis/lijnen';
$txt['setting_image_verification_extreme'] = 'Extreem - gedraaide letters, veel ruis, lijnen en figuren';
$txt['setting_image_verification_sample'] = 'Voorbeeld';

// reCAPTCHA
$txt['recaptcha_configure'] = 'reCAPTCHA-verificatiesysteem';
$txt['recaptcha_configure_desc'] = 'Configure the reCAPTCHA Verification System. Don\'t have a key for reCAPTCHA? <a href="https://www.google.com/recaptcha/admin">Get your reCAPTCHA key here</a>.';
$txt['recaptcha_enabled'] = 'Gebruik het reCAPTCHA-verificatiesysteem';
$txt['recaptcha_enable_desc'] = 'Dit verbetert de ingebouwde visuele verificatie';
$txt['recaptcha_theme'] = 'reCAPTCHA-thema';
$txt['recaptcha_theme_light'] = 'Licht';
$txt['recaptcha_theme_dark'] = 'Donker';
$txt['recaptcha_site_key'] = 'Sitesleutel';
$txt['recaptcha_site_key_desc'] = 'Deze zal worden ingesteld in de HTML-code die je site aan gebruikers toont.';
$txt['recaptcha_secret_key'] = 'Geheime sleutel';
$txt['recaptcha_secret_key_desc'] = 'Deze is voor communicatie tussen jouw site en Google. Zorg ervoor dat deze geheim blijft.';
$txt['recaptcha_no_key_question'] = 'Heb je geen sleutel voor reCAPTCHA?';
$txt['recaptcha_get_key'] = 'Verkrijg je reCAPTCHA-sleutel hier.';
$txt['languages_recaptcha'] = 'ReCAPTCHA-taal';

$txt['setting_image_verification_nogd'] = '<strong>NB:</strong> omdat op deze server de GD-bibliotheek niet is ge&iuml;nstalleerd, zal de complexiteitinstelling geen effect hebben.';
$txt['setup_verification_questions'] = 'Verificatievragen';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">Als je gebruikers een vraag wilt laten beantwoorden om spambots tegen te houden, kun je hieronder een aantal vragen instellen. De vragen mogen relatief eenvoudig zijn en antwoorden zijn niet hoofdlettergevoelig. Je kunt BBC-codes in de vragen gebruiken voor opmaakdoeleinden. Om een vraag te verwijderen, verwijder je simpelweg de inhoud van die regel.</span>';
$txt['setup_verification_question'] = 'Vraag';
$txt['setup_verification_answer'] = 'Antwoord';
$txt['setup_verification_add_more'] = 'Voeg een nieuwe vraag toe';
$txt['setup_verification_add_answer'] = 'Voeg een nieuw antwoord toe';

$txt['moderation_settings'] = 'Moderatie-instellingen';
$txt['setting_warning_enable'] = 'Schakel Gebruikerswaarschuwingen in';
$txt['setting_warning_watch'] = 'Waarschuwingsniveau voor gebruikerstoezicht<div class="smalltext">Het waarschuwingsniveau waarna gebruikers onder toezicht gezet worden (0 om uit te schakelen).</div>';
$txt['setting_warning_watch_note'] = 'Waarschuwingsniveau vanaf welke een gebruiker onder controle wordt geplaatst.';
$txt['setting_warning_moderate'] = 'Waarschuwingniveau voor berichtgoedkeuring<div class="smalltext">Het waarschuwingsniveau waarna berichten van een gebruiker goedgekeurd moeten worden (0 om uit te schakelen).</div>';
$txt['setting_warning_moderate_note'] = 'Het waarschuwingsniveau vanaf welke alle berichten van een lid gemodereerd worden.';
$txt['setting_warning_mute'] = 'Waarschuwingsniveau voor gebruikerstillegging<div class="smalltext">Het waarschuwingsniveau waarna een gebruiker geen berichten meer kan plaatsen (0 om uit te schakelen).</div>';
$txt['setting_warning_mute_note'] = 'Het waarschuwingsniveau vanaf welke een lid geen berichten meer kan plaatsen.';
$txt['setting_user_limit'] = 'Maximaal aantal waarschuwingspunten per dag<div class="smalltext">Deze waarde is het maximale aantal waarschuwingspunten dat &eacute;&eacute;n moderator een lid kan geven in 24 uur tijd (0 voor geen limiet).</div>';
$txt['setting_user_limit_note'] = 'Deze waarde geeft het maximale aantal waarschuwings punten aan dat een enkele moderator aan een lid kan toewijzen in een periode van 24 uur - 0 voor geen limiet.';
$txt['setting_warning_decrement'] = 'Maximum aantal punten die elke 24 uur afgetrokken mogen worden<div class="smalltext">Alleen van toepassing op gebruikers die niet binnen de afgelopen 24 uur zijn gewaarschuwd (0 om uit te schakelen)</div>';
$txt['setting_warning_decrement_note'] = 'Alleen van toepassing voor leden die in de laatste 24 uur niet gewaarschuwd zijn.';
$txt['setting_view_warning_any'] = 'Gebruikers die de waarschuwingsstatus van iedereen kunnen zien';
$txt['setting_view_warning_own'] = 'Gebruikers die de waarschuwingsstatus van zichzelf kunnen zien';

$txt['signature_settings'] = 'Handtekeningen';
$txt['signature_settings_desc'] = 'Met de instellingen op deze pagina kun je bepalen hoe profielhandtekeningen in SMF geregeld moeten worden.';
// argument(s): session_id, session_var, scripturl
$txt['signature_settings_warning'] = 'Note that settings are not applied to existing signatures by default. <a href="%3$s?action=admin;area=featuresettings;sa=sig;apply;%2$s=%1$s">Apply changes now</a>';
$txt['signature_settings_applied'] = 'De regels zijn toegepast op de bestaande handtekeningen.';
$txt['signature_enable'] = 'Handtekeningen inschakelen';
$txt['signature_max_length'] = 'Maximaal aantal karakters<div class="smalltext">(0 voor geen maximum)</div>';
$txt['signature_max_lines'] = 'Maximaal aantal regels<div class="smalltext">(0 voor geen limiet)</div>';
$txt['signature_max_images'] = 'Maximaal aantal afbeeldingen<div class="smalltext">(0 voor geen limiet - exclusief smileys)</div>';
$txt['signature_max_images_note'] = '(0 voor geen maximum - exclusief smileys) ';
$txt['signature_allow_smileys'] = 'Sta gebruik van smileys in handtekeningen toe';
$txt['signature_max_smileys'] = 'Maximaal aantal smileys<div class="smalltext">(0 voor geen limiet)</div>';
$txt['signature_max_image_width'] = 'Maximaal breedte van afbeeldingen (pixels)<div class="smalltext">(0 voor geen limiet)</div>';
$txt['signature_max_image_height'] = 'Maximaal hoogte van afbeeldingen (pixels)<div class="smalltext">(0 voor geen limiet)</div>';
$txt['signature_max_font_size'] = 'Maximaal lettertypegrootte toegestaan<div class="smalltext">(in pixels, 0 voor geen limiet)</div>';
$txt['signature_bbc'] = 'Ingeschakelde BBC-tags';

$txt['custom_profile_title'] = 'Aangepaste profielvelden';
$txt['custom_profile_desc'] = 'Vanaf deze pagina kun je zelf extra profielvelden aanmaken die aan de behoeften van je forum voldoen.';
$txt['custom_profile_active'] = 'Geactiveerd';
$txt['custom_profile_fieldname'] = 'Veldnaam';
$txt['custom_profile_fieldtype'] = 'Veldtype';
$txt['custom_profile_fieldorder'] = 'Veldvolgorde';
$txt['custom_profile_make_new'] = 'Nieuw veld';
$txt['custom_profile_none'] = 'Je hebt nog geen aangepaste profielvelden aangemaakt.';
$txt['custom_profile_icon'] = 'Icoon';

$txt['custom_profile_type_text'] = 'Tekst';
$txt['custom_profile_type_textarea'] = 'Lange tekst';
$txt['custom_profile_type_select'] = 'Keuzelijst';
$txt['custom_profile_type_radio'] = 'Keuzebolletjes';
$txt['custom_profile_type_check'] = 'Aanvinkvakje';

$txt['custom_add_title'] = 'Voeg profielveld toe';
$txt['custom_edit_title'] = 'Bewerk profielveld';
$txt['custom_edit_general'] = 'Weergave-instellingen';
$txt['custom_edit_input'] = 'Invoerinstellingen';
$txt['custom_edit_advanced'] = 'Geavanceerde instellingen';
$txt['custom_edit_name'] = 'Naam';
$txt['custom_edit_desc'] = 'Beschrijving';
$txt['custom_edit_profile'] = 'Profielsectie';
$txt['custom_edit_profile_desc'] = 'Section of profile the users will be able to edit this in.';
$txt['custom_edit_profile_none'] = 'Uitgeschakeld';
$txt['custom_edit_registration'] = 'Toon bij registratie';
$txt['custom_edit_registration_disable'] = 'Nee';
$txt['custom_edit_registration_allow'] = 'Ja';
$txt['custom_edit_registration_require'] = 'Ja, en vereis invoer';
$txt['custom_edit_display'] = 'Toon bij topicweergave';
$txt['custom_edit_mlist'] = 'Toon op de ledenlijst';
$txt['custom_edit_picktype'] = 'Veldtype';

$txt['custom_edit_max_length'] = 'Maximumlengte';
$txt['custom_edit_max_length_desc'] = '(0 voor geen limiet)';
$txt['custom_edit_dimension'] = 'Formaat';
$txt['custom_edit_dimension_row'] = 'Rijen';
$txt['custom_edit_dimension_col'] = 'Kolommen';
$txt['custom_edit_bbc'] = 'Sta BBC-tags toe';
$txt['custom_edit_options'] = 'Opties';
$txt['custom_edit_options_desc'] = 'Laat opties leeg om ze te verwijderen. Keuzebolletjes bepalen de standaardwaarde.';
$txt['custom_edit_options_more'] = 'Meer';
$txt['custom_edit_default'] = 'Standaardwaarde';
$txt['custom_edit_active'] = 'Geactiveerd';
$txt['custom_edit_active_desc'] = 'Als dit niet geselecteerd is, zal dit veld niet worden vertoond.';
$txt['custom_edit_privacy'] = 'Privacy';
$txt['custom_edit_privacy_desc'] = 'Wie mogen dit veld zien en/of bewerken?';
$txt['custom_edit_privacy_all'] = 'Leden kunnen dit veld zien; de eigenaar kan het bewerken';
$txt['custom_edit_privacy_see'] = 'Leden kunnen dit veld zien; alleen de beheerder kan het bewerken';
$txt['custom_edit_privacy_owner'] = 'Leden kunnen dit veld niet zien; de eigenaar en beheerders kunnen het bewerken.';
$txt['custom_edit_privacy_none'] = 'Dit veld is alleen zichtbaar voor beheerders';
$txt['custom_edit_can_search'] = 'Doorzoekbaar';
$txt['custom_edit_can_search_desc'] = 'Kan dit veld doorzocht worden in de ledenlijst?';
$txt['custom_edit_mask'] = 'Invoermasker';
$txt['custom_edit_mask_desc'] = 'Voor tekstvelden kan een invoermasker ingegeven worden om invoer te valideren.';
$txt['custom_edit_mask_email'] = 'Geldig e-mailadres';
$txt['custom_edit_mask_number'] = 'Numeriek';
$txt['custom_edit_mask_nohtml'] = 'Geen HTML';
$txt['custom_edit_mask_regex'] = 'Regex (geavanceerd)';
$txt['custom_edit_enclose'] = 'Toon ingesloten tussen tekst (optioneel)';
$txt['custom_edit_enclose_desc'] = 'We raden <strong>ten zeerste</strong> aan om een invoermasker te gebruiken om de invoer van de gebruiker te valideren.';

$txt['custom_edit_order_move'] = 'Verplaats';
$txt['custom_edit_order_up'] = 'Naar boven';
$txt['custom_edit_order_down'] = 'Naar beneden';
$txt['custom_edit_placement'] = 'Bepaal plaatsing';
$txt['custom_profile_placement'] = 'Plaatsing';
$txt['custom_profile_placement_standard'] = 'Standaard';
$txt['custom_profile_placement_icons'] = 'Bij iconen';
$txt['custom_profile_placement_above_signature'] = 'Boven handtekening';
$txt['custom_profile_placement_below_signature'] = 'Onder handtekening';
$txt['custom_profile_placement_below_avatar'] = 'Onder avatar';
$txt['custom_profile_placement_above_member'] = 'Boven gebruikersnaam';
$txt['custom_profile_placement_bottom_poster'] = 'Onderaan informatie poster';
$txt['custom_profile_placement_before_member'] = 'Voor gebruikersnaam';
$txt['custom_profile_placement_after_member'] = 'Achter gebruikersnaam';

// Use numeric entities in the string below!
$txt['custom_edit_delete_sure'] = 'Weet je zeker dat je dit veld wilt verwijderen? Alle gebruikerdata hiervan zal verloren gaan!';

$txt['standard_profile_title'] = 'Standaard profielvelden';
$txt['standard_profile_field'] = 'Veld';
$txt['standard_profile_field_timezone'] = 'Tijdzone';

$txt['languages_lang_name'] = 'Naam van de taal';
$txt['languages_native_name'] = 'Oorspronkelijke naam voor de taal';
$txt['languages_locale'] = 'Landinstelling';
$txt['languages_default'] = 'Standaard';
$txt['languages_character_set'] = 'Karakterset';
$txt['languages_users'] = 'Gebruikers';
$txt['language_settings_writable'] = 'Waarschuwing: Settings.php is niet beschrijfbaar, dus de standaardtaal kan niet ingesteld worden!';
$txt['edit_languages'] = 'Bewerk talen';
$txt['lang_file_not_writable'] = '<strong>Waarschuwing:</strong> het primaire taalbestand (%1$s) is niet beschrijfbaar. Dit moet beschrijfbaar zijn wil je wijzigingen kunnen maken.';
$txt['lang_entries_not_writable'] = '<strong>Waarschuwing:</strong> het taalbestand dat je wilt bewerken (%1$s) is niet beschrijfbaar. Dit moet beschrijfbaar zijn wil je wijzigingen kunnen maken.';
$txt['languages_ltr'] = 'Rechts naar links';

$txt['add_language'] = 'Taal toevoegen';
$txt['add_language_smf'] = 'Download vanaf Simple Machines';
$txt['add_language_smf_browse'] = 'Voer de naam van de te zoeken taal in, of laat het veld leeg om alle beschikbare talen te tonen.';
$txt['add_language_smf_install'] = 'Installeer';
$txt['add_language_found_title'] = 'Gevonden talen';
$txt['add_language_smf_found'] = 'De onderstaande talen zijn beschikbaar. Klik op de installatielink naast een taal om deze te installeren via de pakketbeheerfunctie.';
$txt['add_language_error_no_response'] = 'De Simple Machines-website reageert niet. Probeer het later nog eens.';
$txt['add_language_error_no_files'] = 'Er konden geen bestanden gevonden worden.';
$txt['add_language_smf_desc'] = 'Beschrijving';
$txt['add_language_smf_utf8'] = 'UTF-8';
$txt['add_language_smf_version'] = 'Versie';

$txt['edit_language_entries_primary'] = 'Hieronder staan de primaire instellingen van deze taal.';
$txt['edit_language_entries'] = 'Bewerk taalingangen';
// argument(s): $scripturl, $txt['themeadmin_edit_title']
$txt['edit_language_entries_desc'] = 'You can customize the individual text entries for this language. Select a file to load its entries, and then edit them below.<br><br>When you edit (or remove) an entry, a commented out version of the original is preserved in the file. If you ever need to restore your edited strings to their original state, or if you need more advanced access to these language files, go to <a href="%1$s?action=admin;area=theme;sa=edit">%2$s</a>, browse to the file you are looking for, and then edit it directly using SMF\'s built-in text editor.';
$txt['edit_language_entries_file'] = 'Kies de te bewerken ingangen';
$txt['languages_dictionary'] = 'Woordenboek';
$txt['languages_spelling'] = 'Spelling';
$txt['languages_for_pspell'] = 'Dit is bedoeld voor <a href="https://www.php.net/function.pspell-new" target="_blank" class="new_win">pSpell</a> indien ge&iuml;nstalleerd';
$txt['languages_rtl'] = 'Schakel &quot;rechts naar links&quot; modus in';

$txt['lang_file_desc_index'] = 'Algemene strings';
$txt['lang_file_desc_EmailTemplates'] = 'E-mailsjablonen';

$txt['languages_download'] = 'Taalpakket downloaden';
$txt['languages_download_note'] = 'Deze pagina geeft een overzicht van alle bestanden die in het taalpakket zitten en wat nuttige informatie over elk bestand. Alle aangevinkte bestanden zullen gekopieerd worden.';
$txt['languages_download_info'] = '<strong>Opmerkingen:</strong>
	<ul class="normallist">
		<li>Bestanden met de status &quot;niet beschrijfbaar&quot; kunnen op dit moment niet gekopieerd worden door SMF. Dit kan opgelost worden door de bestemmingsmap beschrijfbaar te maken via een FTP-programma danwel door FTP-gegevens in te vullen onderaan deze pagina.</li>
		<li>De versieinformatie van een bestand geeft weer voor welke versie van SMF het bijgewerkt is. Als het groengekleurd is, gaat het om een nieuwere versie dan je momenteel ge&ium;nstalleerd hebt. Bij amberkleurige tekst gaat het om dezelfde versie als die je nu hebt, en bij een rode kleur heb je een nieuwere versie ge&iuml;nstalleerd dan het bestand in het pakket.</li>
		<li>Als een bestand reeds bestaat op je forum, zal de &quot;Bestaat reeds&quot;-kolom &eacute;&eacute;n of meer waarden bevatten. &quot;Identiek&quot; geeft aan dat het bestand reeds in identieke status bestaat en daarom niet overschreven hoeft te worden. &quot;Verschillend&quot; betekent dat de inhoud verschilt en dat overschrijven in de meeste gevallen de beste oplossing is.</li>
	</ul>';

$txt['languages_download_main_files'] = 'Primaire bestanden';
$txt['languages_download_filename'] = 'Bestandsnaam';
$txt['languages_download_dest'] = 'Bestemming';
$txt['languages_download_writable'] = 'Beschrijfbaar';
$txt['languages_download_version'] = 'Versie';
$txt['languages_download_older'] = 'Je hebt een nieuwere versie van dit bestand ge&iuml;nstalleerd. Overschrijven wordt niet aangeraden.';
$txt['languages_download_exists'] = 'Bestaat reeds';
$txt['languages_download_exists_same'] = 'Identiek';
$txt['languages_download_exists_different'] = 'Verschillend';
$txt['languages_download_overwrite'] = 'Overwrite';
$txt['languages_download_not_chmod'] = 'Je kunt niet doorgaan met de installatie totdat alle geselecteerde bestanden beschrijfbaar zijn.';
$txt['languages_download_illegal_paths'] = 'Het pakket bevat ongeldige paden - neem contact op met Simple Machines';
$txt['languages_download_complete'] = 'Installatie voltooid';
$txt['languages_download_complete_desc'] = 'Het taalpakket is succesvol ge&iuml;nstalleerd. Klik <a href="%1$s">hier</a> om terug te gaan naar het talenoverzicht.';
$txt['languages_delete_confirm'] = 'Weet je zeker dat je deze taal wilt verwijderen?';
$txt['languages_max_inputs_warning'] = 'You can only save %1$s edits at a time. Please click the Save button now, and then continue editing once this page has reloaded.';
$txt['languages_txt'] = 'Gebruik standaard teksten';
$txt['languages_helptxt'] = 'Helptekst';
$txt['languages_editortxt'] = 'Gebruikersinterface voor de editor';
$txt['languages_tztxt'] = 'Tijdzonebeschrijvingen';
$txt['languages_txt_for_timezones'] = 'Place names';
$txt['languages_txt_for_email_templates'] = 'Email message templates';
$txt['languages_enter_key'] = 'Gebruik een variabele-naam voor deze tekst';
$txt['languages_invalid_key'] = 'Helaas, dit is geen geldige naam voor een variabele:';

$txt['setting_frame_security'] = 'Frame-beveiligingsopties';
$txt['setting_frame_security_SAMEORIGIN'] = 'Sta toe bij gelijke herkomst';
$txt['setting_frame_security_DENY'] = 'Verbied alle frames';
$txt['setting_frame_security_DISABLE'] = 'Uitgeschakeld';

$txt['setting_proxy_ip_header'] = 'IP-header van reverse proxy';
$txt['setting_proxy_ip_header_disabled'] = 'Sta geen proxy-IP-headers toe';
$txt['setting_proxy_ip_header_autodetect'] = 'Proxy IP header automatisch detecteren';
$txt['setting_proxy_ip_servers'] = 'IP-adressen van reverse proxy-servers';

$txt['select_boards_from_list'] = 'Selecteer de boards';

$txt['topic_move_any'] = 'Sta toe dat topics naar alleen-lezen boards verplaats worden';

$txt['defaultMaxListItems'] = 'Maximum aantal items per pagina in lijsten';

$txt['tfa_mode'] = 'Twee-factor-authenticatie';
$txt['tfa_mode_forced'] = 'Forceer voor geselecteerde ledengroepen';
$txt['tfa_mode_forcedall'] = 'Forceer voor ALLE gebruikers';
$txt['tfa_mode_forced_help'] = 'Activeer eerst twee-factor-authenticatie in je eigen account voordat je andere gebruikers hiertoe kunt dwingen!';
$txt['tfa_mode_enabled'] = 'Actief';
$txt['tfa_mode_disabled'] = 'Inactief';
$txt['tfa_mode_subtext'] = 'Stelt gebruikers in staat een tweede niveau van beveiliging in te stellen bij het inloggen. Gebruikers hebben dan een app als Google Authenticator nodig om te koppelen aan hun account. ';

$txt['export_settings_description'] = 'Members can export copies of their profile data, optionally including their posts and personal messages.<br>To avoid overtaxing server resources, SMF slowly compiles the exported data to a downloadable file stored in a secured directory.';
$txt['export_dir'] = 'Directory for profile data export files';
$txt['export_expiry'] = 'Automatically delete profile data export files after';
$txt['export_min_diskspace_pct'] = 'Pause exports if free space on disk is less than';
$txt['export_rate'] = 'Rate at which to process posts & personal messages for export';
$txt['export_rate_desc'] = 'Higher values will compile exports more quickly, but could affect forum performance.';

?>