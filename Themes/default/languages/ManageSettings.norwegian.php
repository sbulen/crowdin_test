<?php
// Version: 2.1 RC3; ManageSettings

global $scripturl;

// argument(s): theme_id, session_id, session_var, $scripturl
$txt['modSettings_desc'] = 'This page allows you to change the settings of features and basic options in your forum. Please see the <a href="%4$s?action=admin;area=theme;sa=list;th=%1$s;%3$s=%2$s">theme settings</a> for more options. Click the help icons for more information about a setting.';
$txt['modification_settings_desc'] = 'Denne siden inneholder innstillinger lagt til av andre modifikasjoner på ditt forum';

$txt['modification_no_misc_settings'] = 'Det er ennå ikke installert modifikasjoner som har lagt til innstillinger til dette området.';

$txt['pollMode'] = 'Avstemninger';
$txt['disable_polls'] = 'Deaktiver avstemninger';
$txt['enable_polls'] = 'Aktiver avstemninger';
$txt['polls_as_topics'] = 'Vis avstemninger som emner';
$txt['allow_guestAccess'] = 'Tillat at gjester å bla gjennom forumene';
$txt['userLanguage'] = 'La medlemmene få velge språk';
$txt['allow_hideOnline'] = 'La ikke-administratorer få skjule sin online-status';
$txt['titlesEnable'] = 'Aktivere egendefinerte titler';
$txt['enable_buddylist'] = 'Aktiver venner / ignorerelisten';
$txt['default_personal_text'] = 'Standard personlig tekst';
$txt['default_personal_text_note'] = 'Personlig tekst som skal tilordnes nyregistrerte medlemmer.';
$txt['time_format'] = 'Standard tidsformat';
$txt['setting_time_offset'] = 'Generelt tidsavvik i forhold til serverens klokke <div class="smalltext">(legges til hvert medlems egne tidsavvik-innstilling)</div>';
$txt['setting_default_timezone'] = 'Tidssone server';
$txt['setting_timezone_priority_countries'] = 'Vis tidssoner fra disse landene først';
$txt['setting_timezone_priority_countries_note'] = 'En komma-separert liste av 2-tegn ISO landkoder';
$txt['failed_login_threshold'] = 'Terskel for mislykkede innlogginger';
$txt['loginHistoryDays'] = 'Dager å beholde påloggingshistorikken.';
$txt['lastActive'] = 'Terskel for pålogget tid';
$txt['trackStats'] = 'Loggfør daglig statistikk';
$txt['hitStats'] = 'Loggfør daglige sidetreff (statistikk må være aktivert)';
$txt['enableCompressedOutput'] = 'Aktiver kompriming av utdata';
$txt['databaseSession_enable'] = 'Bruk databasen for å lagre sesjoner';
$txt['databaseSession_loose'] = 'La nettlesere gå tilbake til sider i sitt lokale mellomlager';
$txt['databaseSession_lifetime'] = 'Sekunder før en ubrukt sesjon avsluttes';
$txt['error_log_desc'] = 'Feilloggen, dersom aktivert, vil loggføre hver feil som oppstår ved bruk av ditt forum. Dette kan være et uvurderlig hjelpemiddel for å identifisere problemer på forumet.';
$txt['enableErrorLogging'] = 'Aktiver loggføring av feil';
$txt['enableErrorQueryLogging'] = 'Inkluder databasespørring i feilloggen';
$txt['markread_title'] = 'Read Logs';
$txt['mark_read_desc'] = 'The following options govern how long before automatically marking boards and topics as read and how long before purging this information.';
$txt['mark_read_beyond'] = 'Automatically mark boards as read for users who have been inactive after this many days';
$txt['mark_read_delete_beyond'] = 'Automatically purge information about boards and topics visited after this many days';
$txt['mark_read_max_users'] = 'Maximum users to process at a time';
$txt['pruningOptions'] = 'Aktiver opprydding i loggoppføringer';
$txt['pruneErrorLog'] = 'Fjern feilloggoppføringer eldre enn<div class="smalltext">(0 for å deaktivere)</div>';
$txt['pruneModLog'] = 'Fjern loggoppføringer over modereringer eldre enn<div class="smalltext">(0 for å deaktivere)</div>';
$txt['pruneBanLog'] = 'Fjern loggoppføringer over utestengelser eldre enn<div class="smalltext">(0 for å deaktivere)</div>';
$txt['pruneReportLog'] = 'Fjern loggoppføringene over moderatorrapporter eldre enn<div class="smalltext">(0 for å deaktivere)</div>';
$txt['pruneScheduledTaskLog'] = 'Fjern loggoppføringene over planlagt oppgave eldre enn<div class="smalltext">(0 for å deaktivere)</div>';
$txt['pruneSpiderHitLog'] = 'Fjern loggoppføringene over søkemotortreff eldre enn';
$txt['cookieTime'] = 'Standard varighet på innloggingsinformasjonskapsler (i minutter)';
$txt['localCookies'] = 'Aktiver lokal lagring av informasjonskapsler';
$txt['globalCookies'] = 'Benytt informasjonskapsler som er uavhengige av subdomener';
$txt['globalCookiesDomain'] = 'Hoveddomenet brukes til underdomenets uavhengige informasjonskapsler';
$txt['invalid_cookie_domain'] = 'Domenet som er tatt i bruk synes å være ugyldig, sjekke og lagre på nytt.';
$txt['secureCookies'] = 'Tving informasjonskapsler til å være sikre';
$txt['httponlyCookies'] = 'Tving informasjonskapsler til kun å gjøres tilgjengelig gjennom HTTP-protokollen';
$txt['securityDisable'] = 'Deaktiver ekstra sikkerhet for administrasjon';
$txt['securityDisable_moderate'] = 'Deaktiver modereringssikkerhet';
$txt['send_validation_onChange'] = 'Krev reaktivering etter endring av e-postadresse';
$txt['approveAccountDeletion'] = 'Krev godkjenning fra administrator når et medlem sletter sin konto';
$txt['autoFixDatabase'] = 'Reparer automatisk ødelagte tabeller';
$txt['disallow_sendBody'] = 'Ikke tillat innleggstekst i varslinger';
$txt['enable_ajax_alerts'] = 'Tillat AJAX notifikasjoner for varsler på skrivebordet';
$txt['alerts_auto_purge'] = 'Automatically delete read alerts';
$txt['alerts_auto_purge_7'] = 'After 1 week';
$txt['alerts_auto_purge_30'] = 'After 1 month';
$txt['alerts_auto_purge_90'] = 'After 3 months';
$txt['alerts_auto_purge_0'] = 'Aldri';
$txt['jquery_source'] = 'Kilde for jQuery biblioteket';
$txt['jquery_custom_label'] = 'Egendefinert';
$txt['jquery_custom'] = 'Egendefinert nettadresse til jQuery biblioteket';
$txt['jquery_local'] = 'Lokal';
$txt['jquery_cdn'] = 'Google CDN ';
$txt['jquery_auto'] = 'Automatisk';
$txt['queryless_urls'] = 'Bruk søkemotor-vennlige nettadresse';
$txt['minimize_files'] = 'Minimalisèr CSS og JavaScript filer';
$txt['queryless_urls_note'] = 'Kun Apache/Lighttpd';
$txt['enableReportPM'] = 'Tillat rapportering av personlige meldinger';
$txt['max_pm_recipients'] = 'Maksimalt antall mottakere tillatt til en personlig melding.';
$txt['max_pm_recipients_note'] = '(0 for ingen begrensning, administratorer er unntatt)';
$txt['pm_posts_verification'] = 'Under dette antall innlegg må brukere skrive inn koden når de sender personlige meldinger.';
$txt['pm_posts_verification_note'] = '(0 for ingen begrensning, administratorer er unntatt)';
$txt['pm_posts_per_hour'] = 'Antall personlige meldinger som en bruker kan sende i løpet av 1 time.';
$txt['pm_posts_per_hour_note'] = '(0 for ingen begrensning, moderatorer er unntatt)';
$txt['compactTopicPagesEnable'] = 'Begrens antall lenker for sidetall';
$txt['contiguous_page_display'] = 'Antall tilgrensende sider å vise';
$txt['to_display'] = 'til å vises';
$txt['todayMod'] = 'Aktiver forkortet datovisning';
$txt['today_disabled'] = 'Deaktivert';
$txt['today_only'] = 'Bare i dag';
$txt['yesterday_today'] = 'I dag &amp; I går';
$txt['onlineEnable'] = 'Vise innlogget/ikke innlogget i innlegg og PM\'er';
$txt['defaultMaxMembers'] = 'Medlemmer per side i medlemslista';
$txt['timeLoadPageEnable'] = 'Vise tiden det tok å generere hver side';
$txt['disableHostnameLookup'] = 'Deaktiver søk etter vertsnavn';
$txt['who_enabled'] = 'Aktiver liste over Hvem er pålogget';
$txt['meta_keywords'] = 'Meta søkeord assosiert med forumet';
$txt['meta_keywords_note'] = 'For søkemotorer. La stå tom for standard.';
$txt['settings_error'] = 'Advarsel: Oppdatering av settings.php mislyktes, innstillingene kan ikke lagres.';
$txt['image_proxy_enabled'] = 'Aktivere bilde-proxy';
$txt['image_proxy_secret'] = 'bilde-proxy hemmelighet';
$txt['image_proxy_maxsize'] = 'Maksimal filstørrelse for bufrede bilder.';
$txt['force_ssl'] = 'Forum SSL modus';
$txt['force_ssl_off'] = 'Deaktivèr SSL';
$txt['force_ssl_complete'] = 'Tving hele forumet til å bruke SSL';
$txt['search_language'] = 'Fulltekst søkespråk';

// Like settings.
$txt['enable_likes'] = 'Muliggjør "Like"';

// Mention settings.
$txt['enable_mentions'] = 'Muliggjør @navn';

$txt['caching_information'] = 'SMF supports caching through the use of accelerators. The currently supported accelerators include:
<ul class="normallist">
	<li>APCu</li>
	<li>Memcached</li>
	<li>SQLite3</li>
	<li>PostgreSQL</li>
	<li>Zend Platform/Performance Suite (Not Zend Optimizer)</li>
</ul>
Caching will work best if you have PHP compiled with one of the above optimizers, or have memcached available. If you do not have any optimizer installed SMF will do file based caching.';
$txt['detected_no_caching'] = '<strong class="alert">SMF kunne ikke finne noen av de kompatible aksleratorene på serveren.</strong>';
$txt['detected_accelerators'] = '<strong class="success">SMF har oppdaget følgende akseleratorer: %1$s</strong> ';

$txt['cache_enable'] = 'Minnelagringsnivå';
$txt['cache_off'] = 'Deaktivert';
$txt['cache_level1'] = 'Nivå 1 minnelagring (Anbefalt)';
$txt['cache_level2'] = 'Nivå 2 minnelagring';
$txt['cache_level3'] = 'Nivå 3 minnelagring (Ikke anbefalt)';
$txt['cache_accelerator'] = 'Hurtiglagringsakselerator';
$txt['filebased_cache'] = 'SMF file based caching';
$txt['sqlite_cache'] = 'SQLite3 database basert bufring';
$txt['postgres_cache'] = 'PostgreSQL bufring';
$txt['cachedir_sqlite'] = 'SQLite3 database buffer katalog';
$txt['apcu_cache'] = 'APCu buffer';
$txt['memcacheimplementation_cache'] = 'Memcache';
$txt['memcachedimplementation_cache'] = 'Memcached';
$txt['zend_cache'] = 'Zend Platform/Performance Suite ';
$txt['cache_filebased_settings'] = 'SMF file based caching settings';
$txt['cache_sqlite_settings'] = 'SQLite3 database buffer innstillinger';
$txt['cache_memcached_settings'] = 'Memcache/Memcached settings';
$txt['cache_memcached_servers'] = 'Memcache/Memcached servers';
$txt['cache_memcached_servers_subtext'] = 'Example: 127.0.0.1:11211,127.0.0.2';

$txt['loadavg_warning'] = '<span class="error">Merk: Innstillingene under skal redigeres med forsiktighet. Settes noen av de for lavt kan dette gjøre ditt forum <strong>ubrukelig</strong>! Nåværende belastningsgjennomsnitt er <strong>%01.2f</strong></span>';
$txt['loadavg_enable'] = 'Aktiver lastbalanse av gjennomsnittlig belastning';
$txt['loadavg_auto_opt'] = 'Terskel for å deaktivere automatisk database optimalisering';
$txt['loadavg_search'] = 'Terskel for å deaktivere søke';
$txt['loadavg_allunread'] = 'Terskel for å deaktivere alle uleste emner';
$txt['loadavg_unreadreplies'] = 'Terskel for å deaktivere uleste svar';
$txt['loadavg_show_posts'] = 'Terskel for å deaktivere visning av brukerens innlegg';
$txt['loadavg_userstats'] = 'Terskel for å deaktivere visning av brukerstatistikk';
$txt['loadavg_bbc'] = 'Terskel for å deaktivere BBC formatering ved visning av innlegg';
$txt['loadavg_forum'] = 'Terskel for å deaktivere forumet <strong>fullstendig</strong>';
$txt['loadavg_disabled_windows'] = '<span class="error">Lastbalansering er ikke tilgjengelig på Windows.</span>';
$txt['loadavg_disabled_osx'] = '<span class="error">Lastbalansering støtte er ikke tilgjengelig i OS:X.</span>';
$txt['loadavg_disabled_conf'] = '<span class="error">Lastbalansering er deaktivert av din leverandørs konfigurasjon.</span>';

$txt['setting_password_strength'] = 'Påkrevd styrke for brukernes passord';
$txt['setting_password_strength_low'] = 'Lav - 4 tegn minimum';
$txt['setting_password_strength_medium'] = 'Medium - kan ikke inneholde brukernavn';
$txt['setting_password_strength_high'] = 'Høy - må inneholde varierte tegn';
$txt['setting_enable_password_conversion'] = 'Tillat hash konvertering av passord ';

$txt['antispam_Settings'] = 'Antispam verifisering ';
$txt['antispam_Settings_desc'] = 'Denne delen lar deg sette opp verifiseringskontroller for å sikre brukeren er et menneske (og ikke en bot), og modifisere hvordan og hvor disse gjelder.';
$txt['setting_reg_verification'] = 'Krev verifikasjon på registreringssiden';
$txt['posts_require_captcha'] = 'Under dette antall innlegg må brukere skrive inn koden for å legge til et innlegg';
$txt['posts_require_captcha_desc'] = '(0 for ingen grense, moderatorer er unntatt)';
$txt['search_enable_captcha'] = 'Krever verifikasjon for at gjester skal kunne søke';
$txt['setting_guests_require_captcha'] = 'Gjestene må passere verifiseringen for å legge til et innlegg';
$txt['setting_guests_require_captcha_desc'] = '(Automatisk dersom du angir et minimumsantall for innlegg nedenunder)';
$txt['question_not_defined'] = 'Du må legge til et spørsmål og svar for ditt forums standardspråk (%1$s), ellers vil ikke brukerne kunne fylle ut en CAPTCHA, noe som betyr ingen bruker-registreringer.';

$txt['configure_verification_means'] = 'Konfigurer verifiseringsmetoder';
$txt['setting_qa_verification_number'] = 'Antall verifiseringensspørsmål brukeren må svare på';
$txt['setting_qa_verification_number_desc'] = '(0 for å deaktivere; spørsmål(ene) skrives under)';
$txt['configure_verification_means_desc'] = '<span class="smalltext">Nedenfor kan du angi hvilke antispamfunksjoner du ønsker å ha aktivert når en bruker trenger å verifisere at de er et menneske. Merk at brukeren må passere <em>alle</em> verifiseringene. Dersom du aktiverer både verifisering med bilde og spørsmål/svar, så må brukeren fullføre begge for å fortsette.</span>';
$txt['setting_visual_verification_type'] = 'Visualt verifiseringsbilde å vise';
$txt['setting_visual_verification_type_desc'] = 'Jo mer kompleks bildet er, jo vanskeligere er det for en bot å komme videre';
$txt['setting_image_verification_off'] = 'Slått av';
$txt['setting_image_verification_vsimple'] = 'Meget enkel - Ren tekst på bilde';
$txt['setting_image_verification_simple'] = 'Enkelt - Overlappende fargede bokstaver, ingen støy';
$txt['setting_image_verification_medium'] = 'Medium - Overlappende fargede bokstaver, med støy/linjer';
$txt['setting_image_verification_high'] = 'Høy - Vinklede bokstaver betydelig støy/linjer';
$txt['setting_image_verification_extreme'] = 'Ekstrem - Vinklede bokstaver, støy, linjer og blokker';
$txt['setting_image_verification_sample'] = 'Eksempel';

// reCAPTCHA
$txt['recaptcha_configure'] = 'reCAPTCHA verifiseringssystem';
$txt['recaptcha_configure_desc'] = 'Konfigurer reCAPTCHA-verifiseringssystemet. Har du ikke en nøkkel for reCAPTCHA? <a href="https://www.google.com/recaptcha/admin"> Få reCAPTCHA-nøkkelen din her </a>.';
$txt['recaptcha_enabled'] = 'Bruk reCAPTCHA verifiseringssystem';
$txt['recaptcha_enable_desc'] = 'Dette forsterker den innebygde visuelle verifiseringen';
$txt['recaptcha_theme'] = 'reCAPTCHA tema';
$txt['recaptcha_theme_light'] = 'Lys';
$txt['recaptcha_theme_dark'] = 'Mørk';
$txt['recaptcha_site_key'] = 'Nettstedsnøkkel';
$txt['recaptcha_site_key_desc'] = 'Dette vil bli satt i HTML-koden nettstedet ditt sender brukere.';
$txt['recaptcha_secret_key'] = 'Hemmelig nøkkel';
$txt['recaptcha_secret_key_desc'] = 'Denne er for kommunikasjon mellom ditt nettsted og Google. Sørg for å holde den hemmelig.';
$txt['recaptcha_no_key_question'] = 'Har du ikke en nøkkel for reCAPTCHA?';
$txt['recaptcha_get_key'] = 'Få din reCAPTCHA nøkkel her.';
$txt['languages_recaptcha'] = 'reCAPTCHA språk';

$txt['setting_image_verification_nogd'] = '<strong>Merk:</strong> at denne server ikke har GD funksjonen innstallert, og dermed vil de forskjellige nivåer av kompleksitet ikke bety noe.';
$txt['setup_verification_questions'] = 'Verifiseringsspørsmål';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">Dersom du vil at brukerne skal svare på verifiseringsspørsmål for å stoppe spamroboter, bør du sette opp en rekke spørsmål i tabellen nedenfor. Du bør plukke relativt enkle spørsmål, svaret er ikke avhengig av korrekte store og små bokstaver. Du kan bruke BB koder i spørsmålene for formatering. For å fjerne et spørsmål, bare slette innholdet i den linjen.</span>';
$txt['setup_verification_question'] = 'Spørsmål';
$txt['setup_verification_answer'] = 'Svar';
$txt['setup_verification_add_more'] = 'Legg til spørsmål';
$txt['setup_verification_add_answer'] = 'Legge til et enda et svar';

$txt['moderation_settings'] = 'Innstillinger for moderering';
$txt['setting_warning_enable'] = 'Aktiver brukeradvarselssystem';
$txt['setting_warning_watch'] = 'Advarselsnivå for når holde øye med bruker';
$txt['setting_warning_watch_note'] = 'Nivå for når en skal begynne å holde øye med brukeren - 0 for å deaktivere';
$txt['setting_warning_moderate'] = 'Advarselsnivå for innleggsmoderering';
$txt['setting_warning_moderate_note'] = 'Nivå for når en bruker skal få alle innlegg moderert.';
$txt['setting_warning_mute'] = 'Advarselsnivå for å sperre bruker<div class="smalltext">Nivå for når en bruker ikke kan legge inn innlegg - 0 for å deaktivere.</div>';
$txt['setting_warning_mute_note'] = 'Advarselsnivå for når en brukers ikke kan legge til flere innlegg.';
$txt['setting_user_limit'] = 'Maksimum antall advarselspoeng per dag';
$txt['setting_user_limit_note'] = 'Denne verdien er den maksimale antall advarselspoeng en enkelt moderator kan tildele til en bruker i en 24 timers periode - 0 for ingen grense.';
$txt['setting_warning_decrement'] = 'Advarselspoeng å trekke fra på brukeren hver 24. timer';
$txt['setting_warning_decrement_note'] = 'Gjelder kun for brukere som ikke har blitt advart i løpet av de siste 24 timer.';
$txt['setting_view_warning_any'] = 'Brukere som kan se alle varslingsstatuser';
$txt['setting_view_warning_own'] = 'Brukere som kan se deres egne varslingsstatuser';

$txt['signature_settings'] = 'Signaturinnstillinger';
$txt['signature_settings_desc'] = 'Bruk innstillingene på denne siden for å bestemme hvordan medlemmenes signaturer skal behandles i SMF.';
// argument(s): session_id, session_var, scripturl
$txt['signature_settings_warning'] = 'Note that settings are not applied to existing signatures by default. <a href="%3$s?action=admin;area=featuresettings;sa=sig;apply;%2$s=%1$s">Apply changes now</a>';
$txt['signature_settings_applied'] = 'De oppdaterte reglene har blitt brukt på de eksisterende signaturene.';
$txt['signature_enable'] = 'Aktiver signaturer';
$txt['signature_max_length'] = 'Maksimalt antall tegn tillatt';
$txt['signature_max_lines'] = 'Maksimalt antall linje';
$txt['signature_max_images'] = 'Maksimalt antall bilde';
$txt['signature_max_images_note'] = '0 for ubegrenset - unntatt smilefjes';
$txt['signature_allow_smileys'] = 'Tillat smilefjes i signaturer';
$txt['signature_max_smileys'] = 'Maksimalt antall smilefjes';
$txt['signature_max_image_width'] = 'Maksimal bredde på signaturbilder (piksler)<div class="smalltext">(0 for ubegrenset)</div>';
$txt['signature_max_image_height'] = 'Maksimal høyde på signaturbilder (piksler)<div class="smalltext">(0 for ubegrenset)</div>';
$txt['signature_max_font_size'] = 'Maksimal skriftstørrelse tillatt i signaturer<div class="smalltext">(0 for ubegrenset)</div>';
$txt['signature_bbc'] = 'Aktiverte BB-koder';

$txt['custom_profile_title'] = 'Egendefinerte profilfelt';
$txt['custom_profile_desc'] = 'Fra denne siden kan du opprette dine egen profilfelter som passer inn med dine egne krav';
$txt['custom_profile_active'] = 'Aktiv';
$txt['custom_profile_fieldname'] = 'Feltnavn';
$txt['custom_profile_fieldtype'] = 'Felttype';
$txt['custom_profile_fieldorder'] = 'Felt-rekkefølge';
$txt['custom_profile_make_new'] = 'Nytt felt';
$txt['custom_profile_none'] = 'Du har ikke opprettet noen egendefinert profilfelter ennå!';
$txt['custom_profile_icon'] = 'Ikon';

$txt['custom_profile_type_text'] = 'Tekst';
$txt['custom_profile_type_textarea'] = 'Stor bokstaver';
$txt['custom_profile_type_select'] = 'Nedtrekksliste';
$txt['custom_profile_type_radio'] = 'Radioknapp';
$txt['custom_profile_type_check'] = 'Avkryssingsboks';

$txt['custom_add_title'] = 'Legg til felt';
$txt['custom_edit_title'] = 'Rediger felt';
$txt['custom_edit_general'] = 'Visningsinnstillinger';
$txt['custom_edit_input'] = 'Inndata innstillinger';
$txt['custom_edit_advanced'] = 'Avanserte innstillinger';
$txt['custom_edit_name'] = 'Navn';
$txt['custom_edit_desc'] = 'Beskrivelse';
$txt['custom_edit_profile'] = 'Profilseksjon';
$txt['custom_edit_profile_desc'] = 'Delen av profil dette er redigert i.';
$txt['custom_edit_profile_none'] = 'Slått av';
$txt['custom_edit_registration'] = 'Vis på registrering';
$txt['custom_edit_registration_disable'] = 'Nei';
$txt['custom_edit_registration_allow'] = 'Ja';
$txt['custom_edit_registration_require'] = 'Ja, og krever oppføring';
$txt['custom_edit_display'] = 'Vis på emnevisning';
$txt['custom_edit_mlist'] = 'Vis på medlemslisten';
$txt['custom_edit_picktype'] = 'Felttype';

$txt['custom_edit_max_length'] = 'Maksimum lengde';
$txt['custom_edit_max_length_desc'] = '(0 for ingen grense)';
$txt['custom_edit_dimension'] = 'Dimensjoner';
$txt['custom_edit_dimension_row'] = 'Rader';
$txt['custom_edit_dimension_col'] = 'Kolonner';
$txt['custom_edit_bbc'] = 'Tillat BBC';
$txt['custom_edit_options'] = 'Alternativer';
$txt['custom_edit_options_desc'] = 'La alternativboksen være tom for å fjerne. Valgte boks er standardvalget.';
$txt['custom_edit_options_more'] = 'Mer';
$txt['custom_edit_default'] = 'Standard status';
$txt['custom_edit_active'] = 'Aktiv';
$txt['custom_edit_active_desc'] = 'Hvis ikke valgt vil ikke dette feltet bli vist til noen.';
$txt['custom_edit_privacy'] = 'Hvem';
$txt['custom_edit_privacy_desc'] = 'Hvem kan se og redigere dette feltet';
$txt['custom_edit_privacy_all'] = 'Brukere kan se dette feltet, eieren kan redigere det';
$txt['custom_edit_privacy_see'] = 'Brukere kan se dette feltet, bare administratorer kan redigere det';
$txt['custom_edit_privacy_owner'] = 'Brukere kan ikke se dette feltet, eier og administratorer kan redigere det';
$txt['custom_edit_privacy_none'] = 'Dette feltet er kun synlig for administratorer';
$txt['custom_edit_can_search'] = 'Søkbar';
$txt['custom_edit_can_search_desc'] = 'Kan dette feltet søkes på fra medlemslisten';
$txt['custom_edit_mask'] = 'Inndata format';
$txt['custom_edit_mask_desc'] = 'For tekstfelt kan en inndatamaske velges for å validere data.';
$txt['custom_edit_mask_email'] = 'Gyldig e-postadresse';
$txt['custom_edit_mask_number'] = 'Numerisk';
$txt['custom_edit_mask_nohtml'] = 'Ingen HTML';
$txt['custom_edit_mask_regex'] = 'Regex (Avansert)';
$txt['custom_edit_enclose'] = 'Vis inndataformat i teksten (valgfritt)';
$txt['custom_edit_enclose_desc'] = 'Vi anbefaler <strong>sterkt</strong> å bruke en inndatamaske for å validere hva brukerne skriver.';

$txt['custom_edit_order_move'] = 'Flytt';
$txt['custom_edit_order_up'] = 'Opp';
$txt['custom_edit_order_down'] = 'Ned';
$txt['custom_edit_placement'] = 'Velg plassering';
$txt['custom_profile_placement'] = 'plassering';
$txt['custom_profile_placement_standard'] = 'Standard (med tittel)';
$txt['custom_profile_placement_icons'] = 'Med ikoner';
$txt['custom_profile_placement_above_signature'] = 'Over signatur';
$txt['custom_profile_placement_below_signature'] = 'Under signatur';
$txt['custom_profile_placement_below_avatar'] = 'Under avatar';
$txt['custom_profile_placement_above_member'] = 'Over brukernavn';
$txt['custom_profile_placement_bottom_poster'] = 'Bunn-innlegg info';
$txt['custom_profile_placement_before_member'] = 'Før brukernavn';
$txt['custom_profile_placement_after_member'] = 'Etter brukernavn';

// Use numeric entities in the string below!
$txt['custom_edit_delete_sure'] = 'Er du sikker på at du vil slette dette feltet - alle relaterte brukerdata vil gå tapt!';

$txt['standard_profile_title'] = 'Standard profilfelt';
$txt['standard_profile_field'] = 'Felt';
$txt['standard_profile_field_timezone'] = 'Tidssone';

$txt['languages_lang_name'] = 'Språknavn';
$txt['languages_native_name'] = 'Eget navn på språk';
$txt['languages_locale'] = 'Språk';
$txt['languages_default'] = 'Standard';
$txt['languages_character_set'] = 'Tegnsett';
$txt['languages_users'] = 'Brukere';
$txt['language_settings_writable'] = 'Advarsel: Settings.php er ikke skrivbar så standard språkinnstilling kan ikke lagres.';
$txt['edit_languages'] = 'Rediger språk';
$txt['lang_file_not_writable'] = '<strong>Advarsel:</strong> Den primære språkfil (%1$s) er ikke skrivbar. Du må gjøre den skrivbar før du kan gjøre noen endringer.';
$txt['lang_entries_not_writable'] = '<strong>Advarsel:</strong> Språkfilen du ønsker å redigere (%1$s) er ikke skrivbar. Du må gjøre den skrivbar før du kan gjøre noen endringer.';
$txt['languages_ltr'] = 'Høyre til venstre';

$txt['add_language'] = 'Legg til språk';
$txt['add_language_smf'] = 'Last ned fra Simple Machines';
$txt['add_language_smf_browse'] = 'Skriv inn navnet på språket for å søke etter eller la stå tomt for å søke etter alle.';
$txt['add_language_smf_install'] = 'Installer';
$txt['add_language_found_title'] = 'Språk funnet';
$txt['add_language_smf_found'] = 'Følgende språk ble funnet. For å installere klikk på lenken ved siden av språket du ønsker å installere. Du vil da bli tatt til pakkebehandleren for å installere språket.';
$txt['add_language_error_no_response'] = ' Simple Machines nettside svarer ikke. Vennligst prøv igjen senere.';
$txt['add_language_error_no_files'] = 'Ingen filer ble funnet.';
$txt['add_language_smf_desc'] = 'Beskrivelse';
$txt['add_language_smf_utf8'] = 'UTF-8';
$txt['add_language_smf_version'] = 'Versjon';

$txt['edit_language_entries_primary'] = 'Nedenfor er de primære språkinnstillingene for denne språkpakken.';
$txt['edit_language_entries'] = 'Rediger språkoppføringer';
// argument(s): $scripturl, $txt['themeadmin_edit_title']
$txt['edit_language_entries_desc'] = 'You can customize the individual text entries for this language. Select a file to load its entries, and then edit them below.<br><br>When you edit (or remove) an entry, a commented out version of the original is preserved in the file. If you ever need to restore your edited strings to their original state, or if you need more advanced access to these language files, go to <a href="%1$s?action=admin;area=theme;sa=edit">%2$s</a>, browse to the file you are looking for, and then edit it directly using SMF\'s built-in text editor.';
$txt['edit_language_entries_file'] = 'Velg oppføringer å redigere';
$txt['languages_dictionary'] = 'Ordbok';
$txt['languages_spelling'] = 'Stavekontroll';
$txt['languages_for_pspell'] = 'Dette er for <a href="https://www.php.net/function.pspell-new" target="_blank" rel="noopener">pSpell</a> - hvis installert';
$txt['languages_rtl'] = 'Aktiver &quot;Høyre til Venstre&quot; modus';

$txt['lang_file_desc_index'] = 'Generelle strenger';
$txt['lang_file_desc_EmailTemplates'] = 'E-postmaler';

$txt['languages_download'] = 'Last ned språkpakke';
$txt['languages_download_note'] = 'Denne siden lister opp alle filene som finnes i språkpakken, og en del nyttig informasjon om hver enkelt fil. Alle filer som er merket vil bli kopiert.';
$txt['languages_download_info'] = '<strong>Note:</strong>
	<ul class="normallist">
		<li>Files which have the status &quot;Not Writable&quot; means SMF will not be able to copy this file to the directory at the present and you must make the destination writable either using an FTP client or by filling in your details at the bottom of the page.</li>
		<li>The Version information for a file displays the last SMF version which it was updated for. If it is indicated in green then this is a newer version than you have at current. If amber this indicates it\'s the same version number as at current, red indicates you have a newer version installed than contained in the pack.</li>
		<li>Where a file already exists on your forum the &quot;Already Exists&quot; column will have one of two values. &quot;Identical&quot; indicates that the file already exists in an identical form and need not be overwritten. &quot;Different&quot; means that the contents vary in some way and overwriting is probably the optimum solution.</li>
	</ul>';

$txt['languages_download_main_files'] = 'Hovedfiler';
$txt['languages_download_filename'] = 'Filnavn';
$txt['languages_download_dest'] = 'Mål';
$txt['languages_download_writable'] = 'Skrivbar';
$txt['languages_download_version'] = 'Versjon';
$txt['languages_download_older'] = 'Du har en nyere versjon av denne filen installert, overskriving er ikke anbefalt.';
$txt['languages_download_exists'] = 'Finnes allerede';
$txt['languages_download_exists_same'] = 'Identisk';
$txt['languages_download_exists_different'] = 'Forskjellig';
$txt['languages_download_overwrite'] = 'Overwrite';
$txt['languages_download_not_chmod'] = 'Du kan ikke fortsette med installasjonen før alle valgte filer som skal kopieres er skrivbare.';
$txt['languages_download_illegal_paths'] = 'Pakken inneholder ulovlige stier - vennligst kontakt Simple Machines';
$txt['languages_download_complete'] = 'Installeringen fullført';
$txt['languages_download_complete_desc'] = 'Språkpakken installert. Vennligst klikk <a href="%1$s">her</a> for å gå tilbake til språksiden';
$txt['languages_delete_confirm'] = 'Er du sikker på at du vil slette dette språket?';
$txt['languages_max_inputs_warning'] = 'Du kan bare lagre %1$s endringer om gangen. Klikk Lagre-knappen nå, og fortsett deretter med å redigere når denne siden lastes inn på nytt.';
$txt['languages_txt'] = 'Standard tekststrenger';
$txt['languages_helptxt'] = 'Hjelpetekst';
$txt['languages_editortxt'] = 'Brukerinterface for editoren';
$txt['languages_tztxt'] = 'Tidssone-beskrivelser';
$txt['languages_txt_for_timezones'] = 'Place names';
$txt['languages_txt_for_email_templates'] = 'Email message templates';
$txt['languages_enter_key'] = 'Legg inn et variabelnavn for denne tekststrengen.';
$txt['languages_invalid_key'] = 'Beklager, men dette variabelnavnet er ikke gyldig.';

$txt['setting_frame_security'] = 'Sikkerhetsalternativer bilder';
$txt['setting_frame_security_SAMEORIGIN'] = 'Tillat samme opprinnelse';
$txt['setting_frame_security_DENY'] = 'Avslå alle bildene';
$txt['setting_frame_security_DISABLE'] = 'Deaktivert';

$txt['setting_proxy_ip_header'] = 'Omvendt Proxy IP header';
$txt['setting_proxy_ip_header_disabled'] = 'Ikke tillat noen proxy IP header';
$txt['setting_proxy_ip_header_autodetect'] = 'Auto-detektèr Proxy IP header';
$txt['setting_proxy_ip_servers'] = 'Omvendt Proxy tjener IP';

$txt['select_boards_from_list'] = 'Velg Forum som gjelder';

$txt['topic_move_any'] = 'Tillat flytting av emner til skrivebeskyttet forum';

$txt['defaultMaxListItems'] = 'Maksimalt antall linjer per side i lister';

$txt['tfa_mode'] = '2-faktor autentisering';
$txt['tfa_mode_forced'] = 'Tvinge for utvalgte medlemsgrupper';
$txt['tfa_mode_forcedall'] = 'Kreve for ALLE brukere';
$txt['tfa_mode_forced_help'] = 'Aktiver 2FA i kontoen din for å kunne tvinge 2FA til andre brukere!';
$txt['tfa_mode_enabled'] = 'Aktivert';
$txt['tfa_mode_disabled'] = 'Deaktivert';
$txt['tfa_mode_subtext'] = 'Lar brukere få et nytt lag med sikkerhet ved innlogging; brukerne trenger en app som Google Authenticator sammen med kontoen sin';

$txt['export_settings_description'] = 'Members can export copies of their profile data, optionally including their posts and personal messages.<br>To avoid overtaxing server resources, SMF slowly compiles the exported data to a downloadable file stored in a secured directory.';
$txt['export_dir'] = 'Directory for profile data export files';
$txt['export_expiry'] = 'Automatically delete profile data export files after';
$txt['export_min_diskspace_pct'] = 'Pause exports if free space on disk is less than';
$txt['export_rate'] = 'Rate at which to process posts & personal messages for export';
$txt['export_rate_desc'] = 'Higher values will compile exports more quickly, but could affect forum performance.';

?>