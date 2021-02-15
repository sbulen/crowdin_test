<?php
// Version: 2.1 RC3; ManageSettings

global $scripturl;

// argument(s): theme_id, session_id, session_var, $scripturl
$txt['modSettings_desc'] = 'This page allows you to change the settings of features and basic options in your forum. Please see the <a href="%4$s?action=admin;area=theme;sa=list;th=%1$s;%3$s=%2$s">theme settings</a> for more options. Click the help icons for more information about a setting.';
$txt['modification_settings_desc'] = 'Ova stranica sadrži podešavanja koja su dodale modifikacije vašeg foruma.';

$txt['modification_no_misc_settings'] = 'Nema modifikacija koje su dodale podešavanja u ovu oblast.';

$txt['pollMode'] = 'Mod anketa';
$txt['disable_polls'] = 'Onemogući ankete';
$txt['enable_polls'] = 'Omogući ankete';
$txt['polls_as_topics'] = 'Prikaži postojeće ankete kao teme';
$txt['allow_guestAccess'] = 'Dozvoli gostima da pregledaju forum';
$txt['userLanguage'] = 'Omogući korisnicima odabir jezika';
$txt['allow_hideOnline'] = 'Dozvoli ne-administratorima da sakriju svoj status prisutnosti';
$txt['titlesEnable'] = 'Omogući prilagođene nazive';
$txt['enable_buddylist'] = 'Omogući spisak prijatelja/ignorisanja';
$txt['default_personal_text'] = 'Podrazumevani lični tekst';
$txt['default_personal_text_note'] = 'Lični tekst za novoregistrovane članove.';
$txt['time_format'] = 'Podrazumevani format vremena';
$txt['setting_time_offset'] = 'Opšti vremenski pomak<div class="smalltext">(dodaje se onom koji postavi član.)</div>';
$txt['setting_default_timezone'] = 'Forum default timezone';
$txt['setting_timezone_priority_countries'] = 'Show time zones from these countries first';
$txt['setting_timezone_priority_countries_note'] = 'A comma separated list of two character ISO country codes.';
$txt['failed_login_threshold'] = 'Prag neuspelih prijava';
$txt['loginHistoryDays'] = 'Days to keep login history';
$txt['lastActive'] = 'Prag vremena za utvrđivanje prisutnosti';
$txt['trackStats'] = 'Track statistics';
$txt['hitStats'] = 'Track daily page views (statistics tracking must be enabled)';
$txt['enableCompressedOutput'] = 'Omogući kompresovani izlaz';
$txt['databaseSession_enable'] = 'Koristi sesije upravljane bazom';
$txt['databaseSession_loose'] = 'Dozvoli pregledačima da se vraćaju unazad na keširane strane';
$txt['databaseSession_lifetime'] = 'Sekundi pre isteka nekorišćene sesije';
$txt['error_log_desc'] = 'The error log, if enabled, will log every error encountered by users using your forum. This can be an invaluable aid to identifying forum problems.';
$txt['enableErrorLogging'] = 'Omogući zapisivanje grešaka';
$txt['enableErrorQueryLogging'] = 'Uvrsti upite ka bazi podataka u dnevnik grešaka';
$txt['markread_title'] = 'Read Logs';
$txt['mark_read_desc'] = 'The following options govern how long before automatically marking boards and topics as read and how long before purging this information.';
$txt['mark_read_beyond'] = 'Automatically mark boards as read for users who have been inactive after this many days';
$txt['mark_read_delete_beyond'] = 'Automatically purge information about boards and topics visited after this many days';
$txt['mark_read_max_users'] = 'Maximum users to process at a time';
$txt['pruningOptions'] = 'Omogući pražnjenje dnevnika.';
$txt['pruneErrorLog'] = 'Ukloni unose u dnevniku grešaka starije od<div class="smalltext">(0 za onemogućeno)</div>';
$txt['pruneModLog'] = 'Ukloni unose u dnevnik uređivanja starije od<div class="smalltext">(0 za onemogućeno)</div>';
$txt['pruneBanLog'] = 'Ukloni unose u dnevnik zabrana starije od<div class="smalltext">(0 za onemogućeno)</div>';
$txt['pruneReportLog'] = 'Ukloni unose u dnevnik prijavljivanja urednicima starije od<div class="smalltext">(0 za onemogućeno)</div>';
$txt['pruneScheduledTaskLog'] = 'Ukloni unose u dnevnik planiranih zadataka starije od<div class="smalltext">(0 za onemogućeno)</div>';
$txt['pruneSpiderHitLog'] = 'Ukloni unose u dnevnik poseta pretraživača starije od<div class="smalltext">(0 za onemogućeno)</div>';
$txt['cookieTime'] = 'Podrazumevana dužina kolačića za prijavljivanje (u minutima)';
$txt['localCookies'] = 'Omogući lokalno čuvanje kolačića<div class="smalltext">(SSI ne radi dobro sa ovom opcijom uključenom.)</div>';
$txt['globalCookies'] = 'Koristi kolačiće nezavisne od poddomena<div class="smalltext">(prvo isključite lokalne kolačiće!)</div>';
$txt['globalCookiesDomain'] = 'Main domain used for subdomain independent cookies';
$txt['invalid_cookie_domain'] = 'Navedeni domen nije validan, molimo proverite ga i sačuvajte ponovo.';
$txt['secureCookies'] = 'Praktikuj kolačiće radi sigurnosti<div class="smalltext">(Ovo važi samo ako koristite HTTPS - ne koristite inače!)</div>';
$txt['httponlyCookies'] = 'Force cookies to be made accessible only through the HTTP protocol';
$txt['securityDisable'] = 'Onemogući bezbednost administracionog dela';
$txt['securityDisable_moderate'] = 'Disable moderation security';
$txt['send_validation_onChange'] = 'Zahtevaj ponovnu aktivaciju nakon promene imejl adrese';
$txt['approveAccountDeletion'] = 'Zahtevaj odobrenje administratora kada član obriše nalog';
$txt['autoFixDatabase'] = 'Automatski popravi pokvarene tabele';
$txt['disallow_sendBody'] = 'Onemogući tekst poruke u obaveštenjima';
$txt['enable_ajax_alerts'] = 'Allow AJAX desktop notifications for alerts';
$txt['alerts_auto_purge'] = 'Automatically delete read alerts';
$txt['alerts_auto_purge_7'] = 'After 1 week';
$txt['alerts_auto_purge_30'] = 'After 1 month';
$txt['alerts_auto_purge_90'] = 'After 3 months';
$txt['alerts_auto_purge_0'] = 'Nikad';
$txt['jquery_source'] = 'Source for the jQuery Library';
$txt['jquery_custom_label'] = 'Custom';
$txt['jquery_custom'] = 'Custom URL to the jQuery Library';
$txt['jquery_local'] = 'Local';
$txt['jquery_cdn'] = 'Google CDN';
$txt['jquery_auto'] = 'Auto';
$txt['queryless_urls'] = 'URL-ovi prilagođeni pretraživačima<div class="smalltext"><b>samo za Apache/Lighttpd!</b></div>';
$txt['minimize_files'] = 'Minimize CSS and JavaScript files';
$txt['queryless_urls_note'] = 'Apache/Lighttpd only';
$txt['enableReportPM'] = 'Omogući prijavljivanje privatnih poruka';
$txt['max_pm_recipients'] = 'Najveći dozvoljeni broj primalaca u privatnim porukama<div class="smalltext">(0 za onemogućeno, administratori su izuzetak)</div>';
$txt['max_pm_recipients_note'] = '(0 for no limit, admins are exempt)';
$txt['pm_posts_verification'] = 'Broj poruka ispod kojih korisnici moraju da unesu kod sa slike da bi poslali privatnu poruku<div class="smalltext">(0 za neograničeno, administratori su izuzetak)</div>';
$txt['pm_posts_verification_note'] = '(0 for no limit, admins are exempt)';
$txt['pm_posts_per_hour'] = 'Broj privatnih poruka koje korisnik može da pošalje za jedan sat<div class="smalltext">(0 za neograničeno, urednici su izuzetak)</div>';
$txt['pm_posts_per_hour_note'] = '(0 za neograničeno, urednici su izuzetak)';
$txt['compactTopicPagesEnable'] = 'Ograniči broj prikazanih linkova ka stranicama';
$txt['contiguous_page_display'] = 'Uzastopne stranice za prikaz';
$txt['to_display'] = 'da bi se prikazalo';
$txt['todayMod'] = 'Omogući opciju &quot;Danas&quot;';
$txt['today_disabled'] = 'Ugašeno';
$txt['today_only'] = 'Samo &quot;Danas&quot;';
$txt['yesterday_today'] = 'Danas i Juče';
$txt['onlineEnable'] = 'Show online/offline status in posts and PMs';
$txt['defaultMaxMembers'] = 'Članova po stranici u spisku članova';
$txt['timeLoadPageEnable'] = 'Prikaži vreme potrebno za kreiranje svake stranice';
$txt['disableHostnameLookup'] = 'Onemogući pretraživanje imena domaćina';
$txt['who_enabled'] = 'Omogući spisak &quot;Ko je prisutan&quot;';
$txt['meta_keywords'] = 'Ciljne ključne reči povezane sa forumom<div class="smalltext"> Za pretraživačke mašine. Ostavi prazno za podrazumevano.</div>';
$txt['meta_keywords_note'] = 'For search engines. Leave blank for default.';
$txt['settings_error'] = 'Warning: Updating of Settings.php failed, the settings cannot be saved.';
$txt['image_proxy_enabled'] = 'Enable Image Proxy';
$txt['image_proxy_secret'] = 'Image Proxy Secret';
$txt['image_proxy_maxsize'] = 'Maximum file size of images to cache (in KB)';
$txt['force_ssl'] = 'Forum SSL mode';
$txt['force_ssl_off'] = 'Disable SSL';
$txt['force_ssl_complete'] = 'Forsirajte SSL kroz forum';
$txt['search_language'] = 'Fulltext Search Language';

// Like settings.
$txt['enable_likes'] = 'Enable Likes';

// Mention settings.
$txt['enable_mentions'] = 'Enable Mentions';

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

$txt['cache_enable'] = 'Nivo keširanja';
$txt['cache_off'] = 'Bez keširanja';
$txt['cache_level1'] = 'Nivo 1 keširanja';
$txt['cache_level2'] = 'Nivo 2 keširanja (nije preporučeno)';
$txt['cache_level3'] = 'Nivo 3 keširanja (nije preporučeno)';
$txt['cache_accelerator'] = 'Caching Accelerator';
$txt['filebased_cache'] = 'SMF file based caching';
$txt['sqlite_cache'] = 'SQLite3 database based caching';
$txt['postgres_cache'] = 'PostgreSQL caching';
$txt['cachedir_sqlite'] = 'SQLite3 database cache directory';
$txt['apcu_cache'] = 'APCu';
$txt['memcacheimplementation_cache'] = 'Memcache';
$txt['memcachedimplementation_cache'] = 'Memcached';
$txt['zend_cache'] = 'Zend Platform/Performance Suite';
$txt['cache_filebased_settings'] = 'SMF file based caching settings';
$txt['cache_sqlite_settings'] = 'SQLite3 database caching settings';
$txt['cache_memcached_settings'] = 'Memcache/Memcached settings';
$txt['cache_memcached_servers'] = 'Memcache/Memcached servers';
$txt['cache_memcached_servers_subtext'] = 'Example: 127.0.0.1:11211,127.0.0.2';

$txt['loadavg_warning'] = 'Please note: the settings below are to be edited with care. Setting any of them too low may render your forum <strong>unusable</strong>! The current load average is <strong>%01.2f</strong>';
$txt['loadavg_enable'] = 'Omogućite balansiranje opterećenja sa prosečnim opterećenjem';
$txt['loadavg_auto_opt'] = 'Prag za onemogućavanje automatske optimizacije baze podataka';
$txt['loadavg_search'] = 'Prag za onemogućavanje pretrage';
$txt['loadavg_allunread'] = 'Prag za onemogućavanje svih nepročitanih tema';
$txt['loadavg_unreadreplies'] = 'Prag za onemogućavanje nepročitanih odgovora';
$txt['loadavg_show_posts'] = 'Prag za onemogućavanje prikazivanja poruka korisnika';
$txt['loadavg_userstats'] = 'Threshold to disabling showing user statistics';
$txt['loadavg_bbc'] = 'Threshold to disabling BBC formatting when showing posts';
$txt['loadavg_forum'] = 'Prag za <strong>potpuno</strong> onemogućavanje foruma';
$txt['loadavg_disabled_windows'] = 'Load balancing support is not available on Windows.';
$txt['loadavg_disabled_osx'] = 'Load balancing support is not available on OS:X.';
$txt['loadavg_disabled_conf'] = 'Load balancing support is disabled by your host configuration.';

$txt['setting_password_strength'] = 'Zahtevana jačina korisničkih lozinki';
$txt['setting_password_strength_low'] = 'Niska - sadrži najmanje 4 znaka';
$txt['setting_password_strength_medium'] = 'Srednja - ne sme da sadrži korisničko ime';
$txt['setting_password_strength_high'] = 'Visoka - sastavljena od više različitih znakova';
$txt['setting_enable_password_conversion'] = 'Allow password hash conversion';

$txt['antispam_Settings'] = 'Anti-spam potvrda';
$txt['antispam_Settings_desc'] = 'Ovaj odeljak vam dozvoljava da podesite potvrde koje proveravaju da li je korisnik čovek (a ne bot), kao i da podesite gde i na koji način one rade.';
$txt['setting_reg_verification'] = 'Zahtevaj potvrdu prilikom registracije';
$txt['posts_require_captcha'] = 'Broj poruka ispod kojih korisnici moraju da prođu proveru pre nego što pošalju poruku';
$txt['posts_require_captcha_desc'] = '(0 za neograničeno, urednici su izuzetak)';
$txt['search_enable_captcha'] = 'Zahtevaj potvrdu kod svih pretraga koje zatraže gosti';
$txt['setting_guests_require_captcha'] = 'Gosti moraju da prođu potvrdu prilikom slanja poruka';
$txt['setting_guests_require_captcha_desc'] = '(Automatski je u uključeno ukoliko je najmanji broj poruka preciziran ispod)';
$txt['question_not_defined'] = 'You need to add a question and answer for your forum\'s default language (%1$s) otherwise users will not be able to fill in a CAPTCHA, meaning no registration.';

$txt['configure_verification_means'] = 'Podesi metode potvrde';
$txt['setting_qa_verification_number'] = 'Broj pitanja za potvrdu na koje korisnik mora da odgovori';
$txt['setting_qa_verification_number_desc'] = '(0 za onemogućivanje; pitanje se postavljaju ispod)';
$txt['configure_verification_means_desc'] = '<span class="smalltext">Ispod možete da podesite koje opcije za zaštitu od spama želite da koristite kad god je potrebno proveriti da li je korisnik zaista čovek. Imajte na umu da korisnik mora da prođe <em>sve</em> potvrde tako da, ukoliko omogućite i slike za potvrdu i test sa pitanjima, moraće da završe oba pre nego što nastave dalje.</span>';
$txt['setting_visual_verification_type'] = 'Vizualna potvrda za prikazivanje';
$txt['setting_visual_verification_type_desc'] = 'Što je slika složenija, teže će biti robotima da je zaobiđu';
$txt['setting_image_verification_off'] = 'Ništa';
$txt['setting_image_verification_vsimple'] = 'Veoma prosta - Običan tekst na slici';
$txt['setting_image_verification_simple'] = 'Prosta - Preklapajuća slova u boji, bez šuma';
$txt['setting_image_verification_medium'] = 'Srednja - Preklapajuća slova u boji, sa šumom/linijama';
$txt['setting_image_verification_high'] = 'Visoka - Iskošena slova, sa velikim šumom/linijama';
$txt['setting_image_verification_extreme'] = 'Žestoka - Iskošena slova, šum, linije i blokovi';
$txt['setting_image_verification_sample'] = 'Primer';

// reCAPTCHA
$txt['recaptcha_configure'] = 'reCAPTCHA Verification System';
$txt['recaptcha_configure_desc'] = 'Configure the reCAPTCHA Verification System. Don\'t have a key for reCAPTCHA? <a href="https://www.google.com/recaptcha/admin">Get your reCAPTCHA key here</a>.';
$txt['recaptcha_enabled'] = 'Use reCAPTCHA Verification System';
$txt['recaptcha_enable_desc'] = 'This augments the built-in visual verification';
$txt['recaptcha_theme'] = 'reCAPTCHA Theme';
$txt['recaptcha_theme_light'] = 'Light';
$txt['recaptcha_theme_dark'] = 'Dark';
$txt['recaptcha_site_key'] = 'Site Key';
$txt['recaptcha_site_key_desc'] = 'This will be set in the HTML code your site serves to users.';
$txt['recaptcha_secret_key'] = 'Secret Key';
$txt['recaptcha_secret_key_desc'] = 'This is for communication between your site and Google. Be sure to keep it a secret.';
$txt['recaptcha_no_key_question'] = 'Don\'t have a key for reCAPTCHA?';
$txt['recaptcha_get_key'] = 'Get your reCAPTCHA key here.';
$txt['languages_recaptcha'] = 'ReCAPTCHA language';

$txt['setting_image_verification_nogd'] = '<strong>Pažnja:</strong> pošto ovaj server nema instaliranu GD biblioteku, različita podešavanja složenosti neće imati efekta.';
$txt['setup_verification_questions'] = 'Pitanja za potvrdu';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">Ako želite da korisnici odgovore na pitanje da biste sprečili botove, potrebno je da postavite više pitanja. Trebalo bi da izaberete relativno prosta pitanja; odgovori nisu osetljivi na velika i mala slova. Možete da koristite BBkod u pitanjima za formatiranje. Da biste obrisali pitanje, prosto obrišite sadržaj dotične linije.</span>';
$txt['setup_verification_question'] = 'Pitanje';
$txt['setup_verification_answer'] = 'Odgovor';
$txt['setup_verification_add_more'] = 'Dodaj još jedno pitanje';
$txt['setup_verification_add_answer'] = 'Add another answer';

$txt['moderation_settings'] = 'Podešavanja uređivanja';
$txt['setting_warning_enable'] = 'Omogući sistem za upozoravanje korisnika';
$txt['setting_warning_watch'] = 'Nivo upozorenja da bi se korisnik nadgledao<div class="smalltext">Nivo upozorenja korisnika nakon kojeg će njegovo ponašanje pratiti urednici - 0 za onemogućivanje.</div>';
$txt['setting_warning_watch_note'] = 'The user warning level after which a user watch is put in place.';
$txt['setting_warning_moderate'] = 'Nivo upozorenja za uređivanje poruka<div class="smalltext">Nivo upozorenja korisnika nakon kojeg će sve njegove poruke morati da se odobre pre nego što postanu javne - 0 za onemogućivanje.</div>';
$txt['setting_warning_moderate_note'] = 'The user warning level after which a user has all posts moderated.';
$txt['setting_warning_mute'] = 'Nivo upozorenja za ućutkivanje<div class="smalltext">Nivo upozorenja korisnika nakon kojeg više neće moći da šalju poruke - 0 za onemogućivanje.</div>';
$txt['setting_warning_mute_note'] = 'The user warning level after which a user cannot post any further.';
$txt['setting_user_limit'] = 'Najveći broj poena za upozoravanje po danu<div class="smalltext">Najveća vrednost poena za upozoravanje koje jedan urednik može da dodeli korisniku u periodu od 24 sata - 0 za neograničeno.</div>';
$txt['setting_user_limit_note'] = 'This value is the maximum amount of warning points a single moderator can assign to a user in a 24 hour period - 0 for no limit.';
$txt['setting_warning_decrement'] = 'Broj poena za upozoravanje koji će se oduzimati korisniku svakih 24 sata<div class="smalltext">Primenjuje se samo na korisnike koji nisu upozoreni u proteklih 24 sata - 0 za onemogućivanje.</div>';
$txt['setting_warning_decrement_note'] = 'Only applies to users not warned within last 24 hours.';
$txt['setting_view_warning_any'] = 'Users who can see any warning status';
$txt['setting_view_warning_own'] = 'Users who can see their own warning status';

$txt['signature_settings'] = 'Podešavanja potpisa';
$txt['signature_settings_desc'] = 'Na ovoj stranici možete da podesite kako potpisi korisnika mogu da izgledaju na vašem forumu.';
// argument(s): session_id, session_var, scripturl
$txt['signature_settings_warning'] = 'Note that settings are not applied to existing signatures by default. <a href="%3$s?action=admin;area=featuresettings;sa=sig;apply;%2$s=%1$s">Apply changes now</a>';
$txt['signature_settings_applied'] = 'The updated rules have been applied to the existing signatures.';
$txt['signature_enable'] = 'Omogući potpise';
$txt['signature_max_length'] = 'Najveći broj dozvoljenih znakova<div class="smalltext">(0 za neograničeno)</div>';
$txt['signature_max_lines'] = 'Najveći broj dozvoljenih linija<div class="smalltext">(0 za neograničeno)</div>';
$txt['signature_max_images'] = 'Najveći broj slika<div class="smalltext">(0 za neograničeno - ne uključuje smajlije)</div>';
$txt['signature_max_images_note'] = '(0 for no max - excludes smileys)';
$txt['signature_allow_smileys'] = 'Omogući smajlije u potpisu.';
$txt['signature_max_smileys'] = 'Najveći broj smajlija<div class="smalltext">(0 za neograničeno)</div>';
$txt['signature_max_image_width'] = 'Najveći širina slika u potpisima (piksela)<div class="smalltext">(0 za neograničeno)</div>';
$txt['signature_max_image_height'] = 'Najveći visina slika u potpisima (piksela)<div class="smalltext">(0 za neograničeno)</div>';
$txt['signature_max_font_size'] = 'Najveća veličina fonta dozvoljena u potpisima<div class="smalltext">(0 za neograničeno)</div>';
$txt['signature_bbc'] = 'Dozvoljene BBC oznake';

$txt['custom_profile_title'] = 'Sopstvena polja profila';
$txt['custom_profile_desc'] = 'Ovde možete da dodate svoja polja u profil tako da odgovaraju potrebama vašeg foruma';
$txt['custom_profile_active'] = 'Aktivno';
$txt['custom_profile_fieldname'] = 'Ime polja';
$txt['custom_profile_fieldtype'] = 'Tip polja';
$txt['custom_profile_fieldorder'] = 'Field Order';
$txt['custom_profile_make_new'] = 'Novo polje';
$txt['custom_profile_none'] = 'Još niste dodali sopstvena polja!';
$txt['custom_profile_icon'] = 'Ikona';

$txt['custom_profile_type_text'] = 'Tekst';
$txt['custom_profile_type_textarea'] = 'Veliki tekst';
$txt['custom_profile_type_select'] = 'Polje za odabir';
$txt['custom_profile_type_radio'] = 'Radio polje';
$txt['custom_profile_type_check'] = 'Polje za štikliranje';

$txt['custom_add_title'] = 'Dodaj polje u profilu';
$txt['custom_edit_title'] = 'Izmeni polje u profilu';
$txt['custom_edit_general'] = 'Podešavanja prikaza';
$txt['custom_edit_input'] = 'Podešavanja unosa';
$txt['custom_edit_advanced'] = 'Napredna podešavanja';
$txt['custom_edit_name'] = 'Ime';
$txt['custom_edit_desc'] = 'Opis';
$txt['custom_edit_profile'] = 'Odeljak profila';
$txt['custom_edit_profile_desc'] = 'Section of profile the users will be able to edit this in.';
$txt['custom_edit_profile_none'] = 'Ništa';
$txt['custom_edit_registration'] = 'Prikaži pri registraciji';
$txt['custom_edit_registration_disable'] = 'Ne';
$txt['custom_edit_registration_allow'] = 'Da';
$txt['custom_edit_registration_require'] = 'Da, i zahtevaj unos';
$txt['custom_edit_display'] = 'Prikaži pri prikazu tema';
$txt['custom_edit_mlist'] = 'Show on memberlist';
$txt['custom_edit_picktype'] = 'Tip polja';

$txt['custom_edit_max_length'] = 'Najveća dužina';
$txt['custom_edit_max_length_desc'] = '(0 bez ograničenja)';
$txt['custom_edit_dimension'] = 'Dimenzije';
$txt['custom_edit_dimension_row'] = 'Redova';
$txt['custom_edit_dimension_col'] = 'Kolona';
$txt['custom_edit_bbc'] = 'Dozvoli BBC';
$txt['custom_edit_options'] = 'Opcije';
$txt['custom_edit_options_desc'] = 'Ostavite polje za opcije prazno da biste ga uklonili. Radio dugme odabira podrazumevanu opciju.';
$txt['custom_edit_options_more'] = 'Iskačući prozor';
$txt['custom_edit_default'] = 'Podrazumevano stanje';
$txt['custom_edit_active'] = 'Aktivno';
$txt['custom_edit_active_desc'] = 'Ako nije izabrano, ovo polje će se prikazivati svima.';
$txt['custom_edit_privacy'] = 'Privatnost';
$txt['custom_edit_privacy_desc'] = 'Ko može da vidi i menja ovo polje.';
$txt['custom_edit_privacy_all'] = 'Korisnici mogu da vide ovo polje; vlasnik može da ga menja';
$txt['custom_edit_privacy_see'] = 'Korisnici mogu da vide ovo polje; samo administratori mogu da ga menjaju';
$txt['custom_edit_privacy_owner'] = 'Korisnici ne mogu da vide ovo polje; vlasnik i administratori ga mogu uređivati.';
$txt['custom_edit_privacy_none'] = 'Ovo polje je vidljivo samo administratorima';
$txt['custom_edit_can_search'] = 'Pretraživo';
$txt['custom_edit_can_search_desc'] = 'Da li ovo polje može da se pretražuje u spisku članova?';
$txt['custom_edit_mask'] = 'Očekivani unos';
$txt['custom_edit_mask_desc'] = 'Za tekstualna polja, možete da proveravate unesene podatke.';
$txt['custom_edit_mask_email'] = 'Ispravna imejl adresa';
$txt['custom_edit_mask_number'] = 'Brojevi';
$txt['custom_edit_mask_nohtml'] = 'Bez HTML';
$txt['custom_edit_mask_regex'] = 'Regularni izraz (Napredno)';
$txt['custom_edit_enclose'] = 'Prikaži Zatvoreno u Okviru Teksta (Neobavezno)';
$txt['custom_edit_enclose_desc'] = '<strong>strogo</strong> preporučujemo da koristite ulaznu masku radi provere unosa od strane korisnika.';

$txt['custom_edit_order_move'] = 'Move ';
$txt['custom_edit_order_up'] = 'Up';
$txt['custom_edit_order_down'] = 'Down';
$txt['custom_edit_placement'] = 'Izaberite Postavljanje';
$txt['custom_profile_placement'] = 'Postavljanje';
$txt['custom_profile_placement_standard'] = 'Standardno';
$txt['custom_profile_placement_icons'] = 'With Icons';
$txt['custom_profile_placement_above_signature'] = 'Above Signature';
$txt['custom_profile_placement_below_signature'] = 'Below Signature';
$txt['custom_profile_placement_below_avatar'] = 'Below Avatar';
$txt['custom_profile_placement_above_member'] = 'Above Username';
$txt['custom_profile_placement_bottom_poster'] = 'Bottom poster info';
$txt['custom_profile_placement_before_member'] = 'Before Username';
$txt['custom_profile_placement_after_member'] = 'After Username';

// Use numeric entities in the string below!
$txt['custom_edit_delete_sure'] = 'Da li ste sigurni da želite da izbrišete ovo polje - svi podaci koji su korisnici uneli biće izgubljeni!';

$txt['standard_profile_title'] = 'Standardna polja profila';
$txt['standard_profile_field'] = 'Polje';
$txt['standard_profile_field_timezone'] = 'Timezone';

$txt['languages_lang_name'] = 'Ime jezika';
$txt['languages_native_name'] = 'Native Name of Language';
$txt['languages_locale'] = 'Lokalno';
$txt['languages_default'] = 'Podrazumevano';
$txt['languages_character_set'] = 'Set znakova';
$txt['languages_users'] = 'korisnika';
$txt['language_settings_writable'] = 'Upozorenje: Settings.php nije otvoren za upisivanje tako da podešavanje podrazumevanog jezika ne može da bude sačuvano.';
$txt['edit_languages'] = 'Izmeni jezike';
$txt['lang_file_not_writable'] = '<strong>Upozorenje:</strong> Primarna jezička datoteka (%1$s) nije otvorena za upisivanje. Morate da je otvorite za upisivanje da biste mogli da izvršite promene.';
$txt['lang_entries_not_writable'] = '<strong>Upozorenje:</strong> Jezička datoteka koju želite da izmenite (%1$s) nije otvorena za upisivanje. Morate da je otvorite za upisivanje da biste mogli da izvršite promene.';
$txt['languages_ltr'] = 'S desna na levo';

$txt['add_language'] = 'Dodaj jezik';
$txt['add_language_smf'] = 'Preuzmi sa Simple Machines sajta';
$txt['add_language_smf_browse'] = 'Ukucajte ime jezika za pretragu ili ostavite prazno da biste prikazali sve.';
$txt['add_language_smf_install'] = 'Instaliraj!';
$txt['add_language_found_title'] = 'Found Languages';
$txt['add_language_smf_found'] = 'Pronađeni su sledeći jezici. Kliknite link za instaliranje pored jezika koji želite da instalirate da biste otvorili menadžer paketa.';
$txt['add_language_error_no_response'] = 'Sajt Simple Machines-a ne odgovara. Pokušajte ponovo malo kasnije.';
$txt['add_language_error_no_files'] = 'Nema pronađenih datoteka.';
$txt['add_language_smf_desc'] = 'Opis';
$txt['add_language_smf_utf8'] = 'UTF-8';
$txt['add_language_smf_version'] = 'Verzija';

$txt['edit_language_entries_primary'] = 'Ispod se nalaze primarna podešavanja jezika za ovaj jezički paket.';
$txt['edit_language_entries'] = 'Izmeni unose jezika';
// argument(s): $scripturl, $txt['themeadmin_edit_title']
$txt['edit_language_entries_desc'] = 'You can customize the individual text entries for this language. Select a file to load its entries, and then edit them below.<br><br>When you edit (or remove) an entry, a commented out version of the original is preserved in the file. If you ever need to restore your edited strings to their original state, or if you need more advanced access to these language files, go to <a href="%1$s?action=admin;area=theme;sa=edit">%2$s</a>, browse to the file you are looking for, and then edit it directly using SMF\'s built-in text editor.';
$txt['edit_language_entries_file'] = 'Izaberite unose za izmenu';
$txt['languages_dictionary'] = 'Rečnik';
$txt['languages_spelling'] = 'Pravopis';
$txt['languages_for_pspell'] = 'Ovo je za <a href="http://www.php.net/function.pspell-new" target="_blank" class="new_win">pSpell</a> - ukoliko je instaliran';
$txt['languages_rtl'] = 'Omogući mod &quot;s desna na levo&quot;';

$txt['lang_file_desc_index'] = 'Opšti prevodi';
$txt['lang_file_desc_EmailTemplates'] = 'Mejl predlošci';

$txt['languages_download'] = 'Preuzmi jezički paket';
$txt['languages_download_note'] = 'Ova strana prikazuje sve datoteke koje su sadržane u jezičkom paketu kao i neke korisne informacije o svakoj od njih. Sve datoteke pored kojih stoji znak potvrde biće kopirane.';
$txt['languages_download_info'] = '<strong>Pažnja:</strong> Za datoteke koje imaju status &quot;Nije upisivo&quot; znači da SMF trenutno neće moći da ih kopira u direktorijum tako da ćete morati da odredište otvorene za upisivanje, ili preko nekog FTP klijenta ili upisivanje svojih detalja pri dnu strane.<br />
	Informacija o verziji datoteke prikazuje poslednju verziju SMF-a za koju je ažurirana. Ukoliko je indikator zelene boje, ovo je novija verzija od prethodne; ukoliko je siv, verzija datoteke je ista kao i ona koju posedujete dok crvena boja pokazuje da je vaša verzija novija nego ona sadržana u paketu.<br />
	Ukoliko datoteka već postoji na vašem forumu, kolona &quot;Već postoji&quot; imaće jednu od dve vrednosti. &quot;Identična&quot; pokazuje da je datoteka koju imate potpuno ista sa onom u paketu tako da ne postoji potreba za njenim prepisivanjem. &quot;Različita&quot; znači da se sadržaj razlikuje u nekom smisli i da je njeno prepisivanje verovatno najbolje rešenje.';

$txt['languages_download_main_files'] = 'Primarne datoteke';
$txt['languages_download_filename'] = 'Ime datoteke';
$txt['languages_download_dest'] = 'Odredište';
$txt['languages_download_writable'] = 'Upisivo';
$txt['languages_download_version'] = 'Verzija';
$txt['languages_download_older'] = 'Imate instaliranu noviju verziju ove datoteke; prepisivanje nije preporučljivo.';
$txt['languages_download_exists'] = 'Već postoji';
$txt['languages_download_exists_same'] = 'Identična';
$txt['languages_download_exists_different'] = 'Različita';
$txt['languages_download_overwrite'] = 'Overwrite';
$txt['languages_download_not_chmod'] = 'Ne možete da nastavite sa instalacijom sve dok sve datoteke označene za kopiranje ne budu otvorene za upisivanje.';
$txt['languages_download_illegal_paths'] = 'Paket sadrži pogrešne putanje - kontaktirajte Simple Machines';
$txt['languages_download_complete'] = 'Instalacija je završena';
$txt['languages_download_complete_desc'] = 'Jezički paket je uspešno instaliran. Kliknite <a href="%1$s">ovde</a> da biste se vratili na stranicu sa jezicima.';
$txt['languages_delete_confirm'] = 'Da li ste sigurni da želite da izbrišete ovaj jezik?';
$txt['languages_max_inputs_warning'] = 'You can only save %1$s edits at a time. Please click the Save button now, and then continue editing once this page has reloaded.';
$txt['languages_txt'] = 'Standard text strings';
$txt['languages_helptxt'] = 'Help text';
$txt['languages_editortxt'] = 'User interface for the editor';
$txt['languages_tztxt'] = 'Time zone descriptions';
$txt['languages_txt_for_timezones'] = 'Place names';
$txt['languages_txt_for_email_templates'] = 'Email message templates';
$txt['languages_enter_key'] = 'Enter a variable name for this text string';
$txt['languages_invalid_key'] = 'Sorry, but this variable name is invalid: ';

$txt['setting_frame_security'] = 'Frame Security Options';
$txt['setting_frame_security_SAMEORIGIN'] = 'Allow Same Origin';
$txt['setting_frame_security_DENY'] = 'Deny all frames';
$txt['setting_frame_security_DISABLE'] = 'Ugašeno';

$txt['setting_proxy_ip_header'] = 'Reverse Proxy IP Header';
$txt['setting_proxy_ip_header_disabled'] = 'Do not allow any Proxy IP Headers';
$txt['setting_proxy_ip_header_autodetect'] = 'Auto-detect Proxy IP header';
$txt['setting_proxy_ip_servers'] = 'Reverse Proxy Servers IPs';

$txt['select_boards_from_list'] = 'Select boards which apply';

$txt['topic_move_any'] = 'Allow moving of topics to read-only boards';

$txt['defaultMaxListItems'] = 'Maximum number of items per page in lists';

$txt['tfa_mode'] = 'Two-Factor Authentication';
$txt['tfa_mode_forced'] = 'Force on selected membergroups';
$txt['tfa_mode_forcedall'] = 'Force for ALL users';
$txt['tfa_mode_forced_help'] = 'Please enable 2FA in your account in order to be able to force 2FA on other users!';
$txt['tfa_mode_enabled'] = 'Omogućen';
$txt['tfa_mode_disabled'] = 'Ugašeno';
$txt['tfa_mode_subtext'] = 'Allows users to have a second layer of security while logging in, users would need an app like Google Authenticator paired with their account';

$txt['export_settings_description'] = 'Members can export copies of their profile data, optionally including their posts and personal messages.<br>To avoid overtaxing server resources, SMF slowly compiles the exported data to a downloadable file stored in a secured directory.';
$txt['export_dir'] = 'Directory for profile data export files';
$txt['export_expiry'] = 'Automatically delete profile data export files after';
$txt['export_min_diskspace_pct'] = 'Pause exports if free space on disk is less than';
$txt['export_rate'] = 'Rate at which to process posts & personal messages for export';
$txt['export_rate_desc'] = 'Higher values will compile exports more quickly, but could affect forum performance.';

?>