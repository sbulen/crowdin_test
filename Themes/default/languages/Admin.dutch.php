<?php
// Version: 2.1 RC3; Admin

global $settings, $scripturl;

$txt['settings_saved'] = 'De instellingen werden met succes opgeslagen.';
$txt['settings_not_saved'] = 'Your changes were not saved because: %1$s';

$txt['admin_boards'] = 'Boards en categorie&euml;n';
$txt['admin_users'] = 'leden';
$txt['admin_newsletters'] = 'Nieuwsbrieven';
$txt['admin_edit_news'] = 'Nieuws';
$txt['admin_groups'] = 'Ledengroepen';
$txt['admin_members'] = 'Beheer leden';
$txt['admin_members_list'] = 'Hieronder staat een lijst van alle leden die momenteel geregistreerd zijn op je forum.';
$txt['admin_next'] = 'Volgende';
$txt['admin_censored_words'] = 'Gecensureerde woorden';
$txt['admin_censored_where'] = 'Plaats het te censureren woord links, en het vervangingswoord rechts.';
$txt['admin_censored_desc'] = 'Vanwege het openbare karakter van forums kan het zijn dat je wilt voorkomen dat bepaalde woorden op het forum worden gebruikt. Je kunt hieronder opgeven welke woorden je wilt censureren.<br />Maak een veld leeg om het woord te verwijderen.';
$txt['admin_reserved_names'] = 'Gereserveerde namen';
$txt['admin_modifications'] = 'Modificatie-instellingen';
$txt['admin_server_settings'] = 'Serverinstellingen';
$txt['admin_reserved_set'] = 'Gereserveerde namen plaatsen';
$txt['admin_reserved_line'] = 'E&eacute;n gereserveerd woord per regel.';
$txt['admin_basic_settings'] = 'Op deze pagina kun je de basisinstellingen van het forum veranderen. Wees erg voorzichtig hiermee, want een kleine fout kan ervoor zorgen dat het forum stopt met functioneren.';
$txt['admin_maintain'] = 'Onderhoudsmodus ingeschakeld';
$txt['admin_title'] = 'Forumnaam';
$txt['cookie_name'] = 'Cookiegebruikersnaam';
$txt['admin_webmaster_email'] = 'E-mailadres webmaster';
$txt['cachedir'] = 'Cachemap';
$txt['admin_news'] = 'Gebruik nieuws';
$txt['admin_manage_members'] = 'leden';
$txt['admin_main'] = 'SMF';
$txt['admin_config'] = 'Configuratie';
$txt['admin_version_check'] = 'Gedetailleerde versiecontrole';
$txt['admin_smffile'] = 'SMF-bestand';
$txt['admin_smfpackage'] = 'SMF-pakket';
$txt['admin_logoff'] = 'Beheersessie be&euml;indigen';
$txt['admin_maintenance'] = 'Onderhoud';
$txt['admin_credits'] = 'Credits';
$txt['admin_agreement'] = 'Require new members to accept the registration agreement';
$txt['admin_agreement_minor_edit'] = 'This is a minor edit';
$txt['reset_agreement_desc'] = 'This will force all members to re-read and accept the registration agreement in order to continue using the forum.';
$txt['admin_privacy_policy'] = 'Require new members to accept the privacy policy';
$txt['reset_privacy_policy_desc'] = 'This will force all members to re-read and accept the privacy policy in order to continue using the forum.';
$txt['admin_agreement_info'] = 'Last updated: %1$s.';
$txt['admin_agreement_default'] = 'Standaard';
$txt['admin_agreement_select_language'] = 'Te bewerken taal';
$txt['admin_agreement_select_language_change'] = 'Verander';
$txt['admin_agreement_not_saved'] = 'De veranderingen in de gebruikersovereenkomst werden niet opgeslagen. Mogelijk werden de bestand permissies niet juist ingesteld.';
$txt['admin_delete_members'] = 'Verwijder de geselecteerde leden';
$txt['admin_repair'] = 'Repareer alle boards en topics';
$txt['admin_main_welcome'] = 'Dit is je &quot;%1$s&quot;. Vanuit dit scherm kun je de instellingen bewerken, je forum onderhouden, logs bekijken, pakketten installeren, thema&quot;s beheren, en nog veel meer.<br><br> Als je vragen of problemen hebt, kijk dan op de "Ondersteuning en credits" pagina. Als de informatie daar onvoldoende hulp biedt, neem dan gerust een kijkje op <a href="https://www.simplemachines.org/community/index.php" target="_blank" rel="noopener">ons ondersteuningsforum</a> voor hulp. Ook zul je antwoorden op je vragen kunnen vinden door op de <span class="main_icons help" title="%3$s"></span> icoontjes te klikken, die in heel het beheersysteem te vinden zijn.';
$txt['admin_news_desc'] = 'Plaats &eacute;&eacute;n nieuwsitem per veld. Enkele BBC tags, zoals <span title="Ben je bold?">[b]</a>, <span title="I tall icks!!">[i]</span> en <span title="Haakjes zijn geweldig, niet?">[u]</span> zijn toegestaan in het nieuws, evenals smileys en HTML. Maak een veld leeg om het te verwijderen.';
$txt['administrators'] = 'Forumbeheerders';
$txt['admin_reserved_desc'] = 'Gereserveerde namen zorgen ervoor dat leden deze namen niet kunnen gebruiken als gebruikersnaam of als getoonde naam. Kies de opties beneden voordat je wijzigingen doorvoert.';
$txt['admin_match_whole'] = 'Dit geldt alleen voor hele namen. Indien niet aangevinkt zal er naar overeenkomst worden gezocht binnen de naam.';
$txt['admin_match_case'] = 'Hoofdlettergevoelig. Indien niet aangevinkt zijn de resultaten ongevoelig voor hoofdletters.';
$txt['admin_check_user'] = 'Controleer gebruikersnaam.';
$txt['admin_check_display'] = 'Controleer getoonde naam.';
$txt['admin_fader_delay'] = 'Duur van de overgang tussen verschillende items in de nieuwsfader, in milliseconden';
$txt['additional_options_collapsable'] = 'Schakel inklapbare additionele opties in voor berichten';
$txt['guest_post_no_email'] = 'Do not show the email field for guests\' posts';
$txt['zero_for_no_limit'] = '(0 voor geen limiet)';
$txt['zero_to_disable'] = '(0 om uit te schakelen)';
$txt['dont_show_attach_under_post'] = 'Toon bijlagen niet onder het bericht als ze er al in opgenomen zijn.';
$txt['dont_show_attach_under_post_sub'] = 'Activeer dit als je niet wilt dat bijlagen twee keer getoond worden. Bijlagen opgenomen in het bericht tellen wel mee voor de bijlage limieten en kunnen nog steeds als gewone bijlagen behandeld worden.';

$txt['admin_backup_fail'] = 'Het maken van een backup van Settings.php is mislukt - controleer of Settings_bak.php bestaat en schrijfbaar is.';
$txt['registration_agreement'] = 'Registratieovereenkomst';
$txt['registration_agreement_desc'] = 'Deze overeenkomst wordt getoond wanneer een gebruiker zich registreert op het forum en moet geaccepteerd worden voordat de gebruiker verder kan met de registratie.';
$txt['privacy_policy'] = 'Privacy Policy';
$txt['privacy_policy_desc'] = 'This privacy policy describes the promises you make to your users regarding how you will use their personal data. It is shown when a user registers an account on this forum and has to be accepted before the user can continue registration.';
$txt['errors_list'] = 'Lijst van foutmeldingen';
$txt['errors_found'] = 'De volgende foutmeldingen zijn ontstaan (leeg bij geen fouten)';
$txt['errors_fix'] = 'Wil je proberen deze fouten te herstellen?';
$txt['errors_do_recount'] = 'Alle fouten zijn verbeterd! Er is een categorie aangemaakt voor de teruggewonnen data. Klik op de knop hieronder om belangrijke statistieken opnieuw te berekenen.';
$txt['errors_recount_now'] = 'Statistieken hertellen';
$txt['errors_fixing'] = 'Bezig fouten te herstellen';
$txt['errors_fixed'] = 'Alle fouten zijn verbeterd! Controleer eventuele aangemaakte categorie&euml;n, boards en topics om te beslissen wat je ermee wilt doen.';
$txt['attachments_avatars'] = 'Bijlagen en avatars';
$txt['attachments_desc'] = 'Van hieruit kun je alle bijgevoegde bestanden beheren. Je kunt bestanden verwijderen op formaat of datum. Gegevens over de bijgevoegde bestanden worden hieronder ook weergegeven.';
$txt['attachment_stats'] = 'Bijlagestatistieken';
$txt['attachment_integrity_check'] = 'Integriteitscontrole bijlagen';
$txt['attachment_integrity_check_desc'] = 'Deze functie zal de integriteit en groottes van de bestanden die in de database staan controleren en, indien nodig, de fouten corrigeren.';
$txt['attachment_check_now'] = 'Voer controle nu uit';
$txt['attachment_pruning'] = 'Bijlagen opruimen';
$txt['attachment_pruning_message'] = 'Aan bericht toe te voegen bericht';
$txt['attachment_pruning_warning'] = 'Weet je zeker dat je deze bijlagen wilt verwijderen?\\nDit kan niet ongedaan gemaakt worden!';

$txt['attachment_total'] = 'Totaal aantal bijgevoegde bestanden';
$txt['attachmentdir_size'] = 'Totale grootte van de map van deze bestanden';
$txt['attachmentdir_size_current'] = 'Totale grootte van huidige bijlagenmap';
$txt['attachmentdir_files_current'] = '
Totaal aantal bestanden in de huidige bijlage directory';
$txt['attachment_space'] = 'Totaal vrije ruimte in deze map';
$txt['attachment_files'] = 'Totaal resterende bestanden';

$txt['attachment_log'] = 'Logbestand';
$txt['attachment_remove_old'] = 'Verwijder bestanden ouder dan';
$txt['attachment_remove_size'] = 'Verwijder bestanden groter dan';
$txt['attachment_name'] = 'Bestandsnaam';
$txt['attachment_file_size'] = 'Bestandsgrootte';
$txt['attachmentdir_size_not_set'] = 'Er is momenteel geen maximumgrootte opgegeven voor de map';
$txt['attachmentdir_files_not_set'] = 'Er is geen directory bestanden limiet ingesteld';
$txt['attachment_delete_admin'] = '[bijlage verwijderd door de beheerder]';
$txt['live'] = 'Live vanaf Simple Machines...';
$txt['remove_all'] = 'Verwijder alles';
$txt['agreement_not_writable'] = 'Waarschuwing - agreement.txt is niet schrijfbaar, de veranderingen die je maakt kunnen <strong>niet</strong> worden opgeslagen.';

$txt['version_check_desc'] = 'Dit toont je de versies van je installatiebestanden ten opzichte van de nieuwste versie. Als een van de bestanden niet meer actueel is, is het verstandig om deze te downloaden en te upgraden naar de nieuwe versies op <a href="https://www.simplemachines.org/" target="_blank" rel="noopener">www.simplemachines.org</a>.';
$txt['version_check_more'] = '(meer details)';

$txt['smf_news_cant_connect'] = 'Het is niet mogelijk om het laatste nieuws bestand van simplemachines.org op te halen.';

$txt['manage_calendar'] = 'Kalender';
$txt['manage_search'] = 'Zoek';

$txt['smileys_manage'] = 'Smileys en berichticonen';
$txt['theme_admin'] = 'Thema\'s en lay-out';
$txt['registration_center'] = 'Registratie';

$txt['viewmembers_online'] = 'Laatst online';
$txt['viewmembers_today'] = 'Vandaag';
$txt['viewmembers_day_ago'] = 'dag geleden';
$txt['viewmembers_days_ago'] = 'dagen geleden';

$txt['display_name'] = 'Getoonde naam';
$txt['email_address'] = 'E-mailadres';
$txt['ip_address'] = 'IP-adres';
$txt['member_id'] = 'ID';

$txt['unknown'] = 'onbekend';
// argument(s): HTTP_REFERER (if applicable), HTTP_USER_AGENT, ip address
$txt['security_wrong'] = "Administration login attempt!\nReferrer: %1\\$s\nUser agent: %2\\$s\nIP: %3\\$s";

$txt['email_as_html'] = 'Stuur in HTML-formaat (hiermee kun je HTML in de e-mail gebruiken).';
$txt['email_parsed_html'] = 'Voeg &lt;br&gt;s en &amp;nbsp;s toe aan dit bericht.';
// argument(s): $scripturl
$txt['email_variables'] = 'In this message you can use a few &quot;variables&quot;. Click <a href="%1$s?action=helpadmin;help=email_members" onclick="return reqOverlayDiv(this.href);" class="help">here</a> for more information.';
$txt['email_force'] = 'Stuur dit ook aan leden die ervoor gekozen hebben geen aankondigingen te ontvangen.';
$txt['email_as_pms'] = 'Stuur dit aan deze groepen door middel van persoonlijke berichten.';
$txt['email_continue'] = 'Ga verder';
$txt['email_done'] = 'Klaar.';

$txt['warnings'] = 'Waarschuwingen';
$txt['warnings_desc'] = 'Dit systeem laat beheerders en moderators toe om waarschuwingen te geven aan gebruikers en kan automatisch gebruikersrechten verwijderen als hun waarschuwingsniveau toeneemt. ';

$txt['ban_title'] = 'Banlijst';

$txt['ban_errors_detected'] = 'De volgende fout of fouten zijn opgetreden tijdens het opslaan of veranderen van de ban';
$txt['ban_description'] = 'Hier kun je bezoekers verbannen op basis van IP, hostnaam, gebruikersnaam, of e-mail.';
$txt['ban_add_new'] = 'Nieuwe ban';
$txt['ban_banned_entity'] = 'Te verbannen entiteit';
$txt['ban_on_ip'] = 'Ban op basis van IP (bijv. 192.168.10-20.*)';
$txt['ban_on_hostname'] = 'Ban op basis van hostnaam (e.g. *.mil)';
$txt['ban_on_email'] = 'Ban op basis van e-mail (e.g. *@badsite.com)';
$txt['ban_on_username'] = 'Ban op basis van gebruikersnaam';
$txt['ban_notes'] = 'Opmerkingen';
$txt['ban_restriction'] = 'Beperking';
$txt['ban_full_ban'] = 'Volledige ban';
$txt['ban_partial_ban'] = 'Gedeeltelijke ban';
$txt['ban_cannot_post'] = 'Kan&nbsp;niet&nbsp;posten';
$txt['ban_cannot_register'] = 'Kan&nbsp;niet&nbsp;registreren';
$txt['ban_cannot_login'] = 'Kan niet inloggen';
$txt['ban_add'] = 'Toevoegen';
$txt['ban_edit_list'] = 'Banlijst';
$txt['ban_type'] = 'Bantype';
$txt['ban_days'] = 'dag(en)';
$txt['ban_will_expire_within'] = 'Ban loopt af na';
$txt['ban_added'] = 'Toegevoegd';
$txt['ban_expires'] = 'Aflooptijd';
$txt['ban_hits'] = 'Hits';
$txt['ban_actions'] = 'Acties';
$txt['ban_expiration'] = 'Aflooptijd';
$txt['ban_reason_desc'] = 'De reden voor de ban, zoals getoond wordt aan het verbannen lid.';
$txt['ban_notes_desc'] = 'Opmerkingen bedoeld voor andere teamleden.';
$txt['ban_remove_selected'] = 'Verwijder selectie';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_confirm'] = 'Weet je zeker dat je de geselecteerde bans wilt verwijderen?';
$txt['ban_modify'] = 'Bewerk';
$txt['ban_name'] = 'Ban-naam';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_edit'] = 'Bewerk ban';
$txt['ban_add_notes'] = '<strong>Note</strong>: after creating the above ban, you can add additional entries that trigger the ban, like IP addresses, hostnames, and email addresses.';
$txt['ban_expired'] = 'Verlopen / uitgeschakeld';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_restriction_empty'] = 'Geen beperking geselecteerd.';

$txt['ban_triggers'] = 'Triggers';
$txt['ban_add_trigger'] = 'Voeg bantrigger toe';
$txt['ban_add_trigger_submit'] = 'Toevoegen';
$txt['ban_edit_trigger'] = 'Bewerk';
$txt['ban_edit_trigger_title'] = 'Bewerk bantrigger';
$txt['ban_edit_trigger_submit'] = 'Bewerk';
$txt['ban_remove_selected_triggers'] = 'Verwijder geselecteerde bantriggers';
$txt['ban_no_entries'] = 'Er zijn momenteel geen bannen van kracht.';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_triggers_confirm'] = 'Weet je zeker dat je de geselecteerde triggers wilt verwijderen?';
$txt['ban_trigger_browse'] = 'Bekijk bantriggers';
$txt['ban_trigger_browse_description'] = 'This screen shows all banned entities grouped by IP address, hostname, email address, and username.';

$txt['ban_log'] = 'Banlog';
$txt['ban_log_description'] = 'Het banlog geeft alle pogingen weer van gebande gebruikers om in te loggen (alleen \'volledige ban\' en \'kan niet registreren\'-ban).';
$txt['ban_log_no_entries'] = 'Er zijn momenteel geen ingangen in het banlog.';
$txt['ban_log_ip'] = 'IP';
$txt['ban_log_email'] = 'E-mailadres';
$txt['ban_log_member'] = 'lid';
$txt['ban_log_date'] = 'Datum';
$txt['ban_log_remove_all'] = 'Verwijder alles';
$txt['ban_log_remove_all_confirm'] = 'Weet je zeker dat je alle banlogregels wilt verwijderen?';
$txt['ban_log_remove_selected'] = 'Verwijder selectie';
$txt['ban_log_remove_selected_confirm'] = 'Weet je zeker dat je alle geselecteerde banlogregels wilt verwijderen?';
$txt['ban_no_triggers'] = 'Er zijn momenteel geen bantriggers geconfigureerd.';

$txt['settings_not_writable'] = 'Deze instellingen kunnen niet worden aangepast omdat Settings.php niet schrijfbaar is.';

$txt['maintain_title'] = 'Forumonderhoud';
$txt['maintain_info'] = 'Optimaliseer tabellen, maak backups, onderzoek fouten, en verwijder oude berichten met deze gereedschappen.';
$txt['maintain_sub_database'] = 'Database';
$txt['maintain_sub_routine'] = 'Routine';
$txt['maintain_sub_members'] = 'leden';
$txt['maintain_sub_topics'] = 'Topics';
$txt['maintain_done'] = 'De onderhoudstaak \'%1$s\' is met succes uitgevoerd.';
$txt['maintain_no_errors'] = 'Gefeliciteerd, geen fouten gevonden! Bedankt voor het controleren.';

$txt['maintain_tasks'] = 'Geplande taken';
$txt['maintain_tasks_desc'] = 'Beheer taken die periodiek uitgevoerd worden door SMF.';
$txt['scheduled_tasks_settings'] = 'Instellingen';
$txt['scheduled_tasks_settings_desc'] = 'Instellingen die bepalen hoe geplande taken worden uitgevoerd.';

$txt['scheduled_log'] = 'Takenlog';
$txt['scheduled_log_desc'] = 'Overzicht van de taken die zijn uitgevoerd.';
$txt['admin_log'] = 'Beheerlog';
$txt['admin_log_desc'] = 'Overzicht van de door beheerders van je forum uitgevoerde administratieve taken.';
$txt['moderation_log'] = 'Moderatielog';
$txt['moderation_log_desc'] = 'Overzicht van moderatieactiviteiten die zijn uitgevoerd door de moderators van je forum.';
$txt['spider_log_desc'] = 'Overzicht van de recente activiteit van de spiders van zoekmachines op je forum.';
$txt['log_settings_desc'] = 'Gebruik deze instellingen om gegevensvastlegging te configureren op uw forum.';
$txt['modlog_enabled'] = 'Schakel de moderatie log in';
$txt['adminlog_enabled'] = 'Schakel de administratie log in.';
$txt['userlog_enabled'] = 'Schakel de profiel bewerkingslog in';

$txt['mailqueue_title'] = 'E-mail';

$txt['db_error_send'] = 'E-mail versturen bij een database-verbindingsfout';
$txt['db_persist'] = 'Gebruik een vaste verbinding (persistent connection)';
$txt['ssi_db_user'] = 'Databasegebruikersnaam voor SSI-modus';
$txt['ssi_db_passwd'] = 'Databasewachtwoord voor SSI-modus';

$txt['default_language'] = 'Standaard forumtaal';

$txt['maintenance_subject'] = 'Weer te geven onderwerp';
$txt['maintenance_message'] = 'Weer te geven bericht';

$txt['errorlog_desc'] = 'In het foutenlog staat elke foutmelding die in je forum optreedt. Om fouten te verwijderen kun je deze markeren en op de %1$s knop onderaan de pagina drukken.';
$txt['errorlog_no_entries'] = 'Het foutenlogboek is leeg.';

$txt['theme_settings'] = 'Thema-instellingen';
$txt['theme_current_settings'] = 'Huidige thema';

$txt['dvc_your'] = 'Jouw versie';
$txt['dvc_current'] = 'Huidige versie';
$txt['dvc_sources'] = 'Sources';
$txt['dvc_default'] = 'Standaardtemplates';
$txt['dvc_templates'] = 'Huidige templates';
$txt['dvc_languages'] = 'Taalbestanden';
$txt['dvc_tasks'] = 'Achtergrondtaken';

$txt['smileys_default_set_for_theme'] = 'Selecteer de standaard smileyset voor dit thema';
$txt['smileys_no_default'] = '(gebruik globale standaard smileyset)';

$txt['censor_test'] = 'Test de gecensureerde woorden';
$txt['censor_test_save'] = 'Test';
$txt['censor_case'] = 'Negeer hoofd- of kleine letters bij censureren';
$txt['censor_whole_words'] = 'Alleen gehele woorden censureren';

$txt['admin_confirm_password'] = '(bevestig)';
$txt['admin_incorrect_password'] = 'Ongeldig wachtwoord';

$txt['age'] = 'Leeftijd';
$txt['activation_status'] = 'Activeringsstatus';
$txt['activated'] = 'Geactiveerd';
$txt['not_activated'] = 'Niet geactiveerd';
$txt['primary'] = 'Primair';
$txt['additional'] = 'Extra';
$txt['wild_cards_allowed'] = 'jokertekens * en ? zijn toegestaan';
$txt['search_for'] = 'Zoeken op';
$txt['search_match'] = 'Overeenkomst';
$txt['member_part_of_these_membergroups'] = 'Lid maakt deel uit van de volgende ledengroepen';
$txt['membergroups'] = 'Ledengroepen';
$txt['confirm_delete_members'] = 'Weet je zeker dat je de geselecteerde leden wilt verwijderen?';

$txt['support_credits_title'] = 'Ondersteuning en credits';
$txt['support_title'] = 'Ondersteuningsinformatie';
$txt['support_versions_current'] = 'Huidige SMF-versie';
$txt['support_versions_forum'] = 'Forumversie';
$txt['support_versions_db'] = '%1$s-versie';
$txt['support_versions_db_engine'] = '%1$s engine';
$txt['support_versions_server'] = 'Serverversie';
$txt['support_versions_gd'] = 'GD-versie';
$txt['support_versions_imagemagick'] = 'ImageMagick versie';
$txt['support_versions'] = 'Versie-informatie';
$txt['support_resources'] = 'Hulpbronnen voor ondersteuning';
$txt['support_resources_p1'] = 'Onze <a href="%1$s">online handleiding</a> levert de hoofddocumentatie voor SMF. De SMF Online Manual bevat vele documenten die een groot scala aan vragen beantwoorden en uitleggen op het gebied van <a href="%2$s">features</a>, <a href="%3$s">instellingen</a>, <a href="%4$s">thema\'s</a>, <a href="%5$s">pakketten</a>, etc. De online handleiding bevat diepgaande documentatie voor elk onderdeel van SMF en zou de meeste vragen snel moeten kunnen beantwoorden.';
$txt['support_resources_p2'] = 'Mocht je geen antwoord op je vragen kunnen vinden in de online handleiding, dan kun je zoeken in ons <a href="%1$s">ondersteuningsforum</a> of om hulp vragen in ofwel de <a href="%2$s">Engelstalige</a> of &eacute;&eacute;n van onze vele <a href="%3$s">internationale ondersteuningsboards</a>. Het SMF ondersteuningsforum kan gebruikt worden voor <a href="%4$s">ondersteuning</a>, <a href="%5$s">vinden van extensies</a> en vele andere zaken, zoals discussie over SMF, het vinden van een host, en het bespreken van beheerproblemen met andere forumbeheerders.';

$txt['membergroups_members'] = 'Reguliere leden';
$txt['membergroups_guests'] = 'Ongeregistreerde gasten';
$txt['membergroups_add_group'] = 'Voeg ledengroep toe';
$txt['membergroups_permissions'] = 'Permissies';

$txt['permitgroups_restrict'] = 'Beperkt';
$txt['permitgroups_standard'] = 'Standaard';
$txt['permitgroups_moderator'] = 'Moderator';
$txt['permitgroups_maintenance'] = 'Onderhoud';
$txt['permitgroups_inherit'] = 'Overerven';

$txt['confirm_delete_attachments_all'] = 'Weet je zeker dat je alle bijlagen wilt verwijderen?';
$txt['confirm_delete_attachments'] = 'Weet je zeker dat je de geselecteerde bijlagen wilt verwijderen?';
$txt['attachment_manager_browse_files'] = 'Bekijk bestanden';
$txt['attachment_manager_repair'] = 'Controleer';
$txt['attachment_manager_avatars'] = 'Avatars';
$txt['attachment_manager_attachments'] = 'Bijlagen';
$txt['attachment_manager_thumbs'] = 'Miniaturen';
$txt['attachment_manager_last_active'] = 'Laatst actief';
$txt['attachment_manager_member'] = 'lid';
$txt['attachment_manager_avatars_older'] = 'Verwijder avatars van leden die niet meer actief zijn voor meer dan';
$txt['attachment_manager_total_avatars'] = 'Total aantal avatars';

$txt['attachment_manager_avatars_no_entries'] = 'Er zijn op dit moment geen avatars.';
$txt['attachment_manager_attachments_no_entries'] = 'Er zijn op dit moment geen bijlagen.';
$txt['attachment_manager_thumbs_no_entries'] = 'Er zijn op dit moment geen minituren.';

$txt['attachment_manager_settings'] = 'Bijlage-instellingen';
$txt['attachment_manager_avatar_settings'] = 'Avatarinstellingen';
$txt['attachment_manager_browse'] = 'Bekijk bestanden';
$txt['attachment_manager_maintenance'] = 'Bestandsonderhoud';
$txt['attachment_manager_save'] = 'Opslaan';

$txt['attachmentEnable'] = 'Bijlagemodus';
$txt['attachmentEnable_deactivate'] = 'Deactiveer bijlagen';
$txt['attachmentEnable_enable_all'] = 'Activeer alle bijlagen';
$txt['attachmentEnable_disable_new'] = 'Deactiveer nieuwe bijlagen';
$txt['attachmentCheckExtensions'] = 'Controleer de extensie van de bijlage';
$txt['attachmentExtensions'] = 'Alleen deze bijlage-extensies toestaan';
$txt['attachmentShowImages'] = 'Toon de bijlage als afbeelding in het bericht';
$txt['attachmentUploadDir'] = 'Bijlagenmap';
$txt['attachmentUploadDir_multiple_configure'] = 'Configureer bijlagenmappen';
$txt['attachmentDirSizeLimit'] = 'Maximumgrootte bijlagenmap<div class="smalltext">(0 voor geen limiet)</div>';
$txt['attachmentPostLimit'] = 'Maximumgrootte bijlagen per bericht<div class="smalltext">(0 voor geen limiet)</div>';
$txt['attachmentSizeLimit'] = 'Maximumgrootte van &eacute;&eacute;n bijlage<div class="smalltext">(0 voor geen limiet)</div>';
$txt['attachmentNumPerPostLimit'] = 'Maximum aantal bijlagen per post<div class="smalltext">(0 voor geen limiet)</div>';
$txt['attachment_img_enc_warning'] = 'Nog de GD module nog de IMagick of MagickWand extensie zijn momenteel geïnstalleerd. De codering van de afbeelding veranderen is niet mogelijk.';
$txt['attachment_ini_max'] = 'Maximum allowed by php.ini: %1$s';
$txt['attachment_image_reencode'] = 'Herencodeer potentieel gevaarlijke afbeeldingsbijlagen ';
$txt['attachment_image_paranoid_warning'] = 'De uitgebreide beveiligingschecks kunnen leiden tot een groter aantal verworpen bijlagen.';
$txt['attachment_image_paranoid'] = 'Voer uitgebreide beveiligingscontroles uit op ge&uuml;ploade afbeeldingsbijlagen';
$txt['attachmentThumbnails'] = 'Herschaal bijlagen die als afbeelding onder berichten worden getoond';
$txt['attachment_thumb_png'] = 'Sla miniaturen op in PNG-formaat';
$txt['attachment_thumb_memory'] = 'Aanpasbaar thumbnail geheugen';
$txt['attachmentThumbWidth'] = 'Maximumbreedte van miniaturen';
$txt['attachmentThumbHeight'] = 'Maximumhoogte van miniaturen';
$txt['attachment_thumbnail_settings'] = 'Thumbnail instellingen';
$txt['attachment_security_settings'] = 'Bijlage beveiligingsinstellingen';

$txt['attach_dir_does_not_exist'] = 'Bestaat niet';
$txt['attach_dir_not_writable'] = 'Niet beschrijfbaar';
$txt['attach_dir_files_missing'] = 'Ontbrekende bestanden (<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=repair;%2$s=%1$s">Repareer</a>)';
$txt['attach_dir_unused'] = 'Ongebruikt';
$txt['attach_dir_empty'] = 'Leeg';
$txt['attach_dir_ok'] = 'OK';
$txt['attach_dir_basedir'] = 'Basisfolder';
$txt['attach_dir_desc'] = 'Cre&euml;er nieuwe mappen of verander de huidige map hieronder. <br>Om een nieuwe map te maken in de mappenstructuur van het forum, gebruik alleen de naam van de map.<br>Om een map te verwijderen, maak het invoerveld leeg. Alleen lege mappen kunnen verwijderd worden. Om te zien of een map leeg is, controleer op bestanden en submappen tussen de haakjes naast het aantal bestanden.<br>Om een map te hernoemen verander je gewoonweg de naam in het invoerveld. Alleen mappen zonder submappen kunnen hernoemd worden.';
$txt['attach_dir_base_desc'] = 'Je kan de onderstaande opties gebruiken om de basismap te veranderen of een nieuwe aan te maken. Nieuwe basismappen worden ook toegevoegd aan de lijst bijlagemappen. Het is ook mogelijk om een bestaande map te benoemen tot basismap.';
$txt['attach_dir_save_problem'] = 'Oeps, er is blijkbaar een probleem.';
$txt['attachments_no_create'] = 'Niet mogelijk om een nieuwe bijlage map te creëren. Gelieve dit te doen via een FTP client of het bestandsbeheer van uw site.';
$txt['attachments_no_write'] = 'This directory has been created, but is not writable. Please attempt to do so using a FTP client or your site file manager.';
$txt['attach_dir_duplicate_msg'] = 'Niet mogelijk om toe te voegen, de map bestaat al.';
$txt['attach_dir_exists_msg'] = 'Niet mogelijk om te verplaatsen. Er bestaat al een map in dat pad.';
$txt['attach_dir_base_dupe_msg'] = 'Niet mogelijk om toe te voegen. Deze basis map is al aangemaakt.';
$txt['attach_dir_base_no_create'] = 'Unable to create. Please verify the path input or create this directory using an FTP client or your site file manager and retry.';
$txt['attach_dir_no_rename'] = 'Niet mogelijk om te verplaatsen of hernoemen. Gelieve na te gaan of het pad juist is of dat deze map geen submappen bevat.';
$txt['attach_dir_no_delete'] = 'Is not empty and cannot be deleted. Please do so using a FTP client or your site file manager.';
$txt['attach_dir_no_remove'] = 'Still contains files or is a base directory and cannot be deleted.';
$txt['attach_dir_is_current'] = 'Niet mogelijk om te verwijderen terwijl deze geselecteerd is als de huidige map.';
$txt['attach_dir_is_current_bd'] = 'Niet mogelijk om te verwijderen terwijl deze is geselecteerd als huidige basis map.';
$txt['attach_dir_invalid'] = 'Onjuiste map.';
$txt['attach_last_dir'] = 'Laatste actieve bijlagenmap.';
$txt['attach_current_dir'] = 'Huidige map';
$txt['attach_current'] = 'Huidige';
$txt['attach_path_manage'] = 'Beheer bijlagenpaden';
$txt['attach_directories'] = 'Bijlagefolders';
$txt['attach_paths'] = 'Bijlagenpaden';
$txt['attach_path'] = 'Pad';
$txt['attach_current_size'] = 'Huidige grootte (kB)';
$txt['attach_num_files'] = 'Bestanden';
$txt['attach_dir_status'] = 'Status';
$txt['attach_add_path'] = 'Voeg pad toe';
$txt['attach_path_current_bad'] = 'Ongeldig huidig bijlagenpad.';
$txt['attachmentDirFileLimit'] = 'Maximum aantal bestanden per map';

$txt['attach_base_paths'] = 'Basismappen paden';
$txt['attach_num_dirs'] = 'Mappen';
$txt['max_image_width'] = 'Maximumbreedte van geposte of bijgevoegde afbeeldingen';
$txt['max_image_height'] = 'Maximumhoogte van geposte of bijgevoegde afbeeldingen';

$txt['automanage_attachments'] = 'Kies de methode voor het beheer van de bijlagenmappen';
$txt['attachments_normal'] = '(Handmatig) standaard gedrag SMF';
$txt['attachments_auto_years'] = '(Automatisch) Onderverdelen per jaren';
$txt['attachments_auto_months'] = '(Automatisch) Onderverdelen in jaren en maanden';
$txt['attachments_auto_days'] = '(Automatisch) Onderverdelen in jaren, maanden en dagen';
$txt['attachments_auto_16'] = '(Automatisch) 16 willekeurige mappen';
$txt['attachments_auto_16x16'] = '(Automatisch) 16 willekeurige mappen met 16 willekeurige submappen';
$txt['attachments_auto_space'] = '(Automatisch) Zodra de maximale mapgrootte van een map is bereikt';

$txt['use_subdirectories_for_attachments'] = 'Maak nieuwe mappen in een hoofdmap';
$txt['use_subdirectories_for_attachments_note'] = 'Anders zullen nieuwe mappen worden aangemaakt in de hoofdmap van het forum.';
$txt['basedirectory_for_attachments'] = 'Stel een hoofdmap in voor bijlagen';
$txt['basedirectory_for_attachments_current'] = 'Huidige hoofdmap';
// argument(s): scripturl
$txt['basedirectory_for_attachments_warning'] = '<div class="smalltext">Please note that the directory is wrong. <br>(<a href="%1$s?action=admin;area=manageattachments;sa=attachpaths">Attempt to correct</a>)</div>';
// argument(s): scripturl
$txt['attach_current_dir_warning'] = '<div class="smalltext">There seems to be a problem with this directory. <br>(<a href="%1$s?action=admin;area=manageattachments;sa=attachpaths">Attempt to correct</a>)</div>';

$txt['attachment_transfer'] = 'Bijlage(n) verplaatsen';
$txt['attachment_transfer_desc'] = 'Verplaats bestanden tussen mappen.';
$txt['attachment_transfer_select'] = 'Map selecteren';
$txt['attachment_transfer_now'] = 'Verplaatsen';
$txt['attachment_transfer_from'] = 'Verplaats bestanden van';
$txt['attachment_transfer_auto'] = 'Automatisch op basis van ruimte of aantal bestanden';
$txt['attachment_transfer_auto_select'] = 'Selecteer hoofdmap';
$txt['attachment_transfer_to'] = 'Of naar een opgegeven map.';
$txt['attachment_transfer_empty'] = 'Maak de bron map leeg';
$txt['attachment_transfer_no_base'] = 'Geen hoofdmappen beschikbaar.';
$txt['attachment_transfer_forum_root'] = 'Hoofdmap forum.';
$txt['attachment_transfer_no_room'] = 'Maximale mapgrootte of maximaal aantal bestanden bereikt.';
$txt['attachment_transfer_no_find'] = 'Er zijn geen bestanden gevonden om te verplaatsen.';
$txt['attachments_transferred'] = '%1$d bestanden zijn verplaatst naar %2$s';
$txt['attachments_not_transferred'] = '%1$d bestanden zijn niet verplaatst.';
$txt['attachment_transfer_no_dir'] = 'Er is geen bronmap geselecteerd of een van de bestemmings-opties is niet geselecteerd.';
$txt['attachment_transfer_same_dir'] = 'Je kunt niet dezelfde map als bron en bestemming opgeven.';
$txt['attachment_transfer_progress'] = 'Een ogenblik geduld, je bestand wordt verplaatst.';

$txt['mods_cat_avatars'] = 'Avatars';
$txt['avatar_directory'] = 'Avatardirectory';
$txt['avatar_directory_wrong'] = 'De avatarmap is niet juist. Dit zal problemen geven in je forum.';
$txt['avatar_url'] = 'Avatar-URL';
$txt['avatar_max_width_external'] = 'Maximale breedte externe avatar<div class="smalltext">(0 voor geen limiet)</div>';
$txt['avatar_max_height_external'] = 'Maximale hoogte externe avatar<div class="smalltext">(0 voor geen limiet)</div>';
$txt['avatar_action_too_large'] = 'Als de avatar te groot is...';
$txt['option_refuse'] = 'Weiger hem';
$txt['option_css_resize'] = 'Grootte aanpassen in de browser van de gebruiker';
$txt['option_download_and_resize'] = 'Download hem en pas de grootte aan (GD-module vereist)';
$txt['avatar_max_width_upload'] = 'Maximale breedte van ge&uuml;ploade avatar<div class="smalltext">(0 voor geen limiet)</div>';
$txt['avatar_max_height_upload'] = 'Maximale hoogte van ge&uuml;ploade avatar<div class="smalltext">(0 voor geen limiet)</div>';
$txt['avatar_resize_upload'] = 'Pas de grootte aan van avatars die te groot zijn';
$txt['avatar_resize_upload_note'] = '(GD-module vereist)';
$txt['avatar_download_png'] = 'Gebruik PNG voor verkleinde avatars';
$txt['avatar_img_enc_warning'] = 'De GD-module of de Imagick- of MagickWand-extenties zijn niet ge&iuml;nstalleerd. Sommige avatar-opties zijn niet beschikbaar.';
$txt['avatar_external'] = 'Externe avatars';
$txt['avatar_upload'] = 'Uploadbare avatars';
$txt['avatar_server_stored'] = 'Op de server opgeslagen avatars';
$txt['avatar_server_stored_groups'] = 'Ledengroepen die een op de server opgeslagen avatar mogen selecteren';
$txt['avatar_upload_groups'] = 'Ledengroepen die een avatar naar de server mogen uploaden';
$txt['avatar_external_url_groups'] = 'Ledengroepen die een externe URL mogen selecteren';
$txt['avatar_select_permission'] = 'Selecteer permissies per groep';
$txt['avatar_download_external'] = 'Download avatar vanaf ingevoerde URL';
$txt['option_specified_dir'] = 'Specifieke map...';
$txt['custom_avatar_dir_wrong'] = 'The Avatars directory is not valid. This will prevent avatars from working properly.';
$txt['custom_avatar_dir'] = 'Uploadmap';
$txt['custom_avatar_dir_desc'] = 'This should be a valid and writable directory, different from the server-stored directory.';
$txt['custom_avatar_url'] = 'Upload-URL';
$txt['custom_avatar_check_empty'] = 'De opgegeven map voor ge&uuml;ploade avatars lijkt ongeldig te zijn. Controleer of de instellingen juist zijn.';
$txt['avatar_reencode'] = 'Herencodeer potentieel gevaarlijke avatars';
$txt['avatar_paranoid_warning'] = 'De uitgebreide beveiligingschecks kunnen leiden tot een groter aantal verworpen avatars.';
$txt['avatar_paranoid'] = 'Voer uitgebreide beveiligingscontroles uit op ge&uuml;ploade avatars';
$txt['gravatar_settings'] = 'Gravatars (staat voor: Globally Recognized Avatars)';
$txt['gravatarEnabled'] = 'Activeer Gravatars voor forumgebruikers?';
$txt['gravatarOverride'] = 'Forceer het gebruik van Gravatars in plaats van normale avatars?';
$txt['gravatarAllowExtraEmail'] = 'Toestaan om een extra e-mailadres voor Gravatars op te geven?';
$txt['gravatarMaxRating'] = 'Maximale toegestane beoordeling?';
$txt['gravatar_maxG'] = 'G rated (Algemeen geaccepteerd)';
$txt['gravatar_maxPG'] = 'PG rated (Ouderlijk toezicht)';
$txt['gravatar_maxR'] = 'R rated (Beperkt)';
$txt['gravatar_maxX'] = 'X rated (Pornografisch)';
$txt['gravatarDefault'] = 'Standaard afbeelding die getoond wordt als een e-mailadres geen Gravatar heeft ';
$txt['gravatar_mm'] = 'Een simpele, silhouet-afbeelding van een persoon';
$txt['gravatar_identicon'] = 'Een geometrisch patroon gebaseerd op een hash van het e-mailadres';
$txt['gravatar_monsterid'] = 'Een gegenereerd \'monster\' met verschillende kleuren , gezichten, etc';
$txt['gravatar_wavatar'] = 'Gegenereerde gezichten met verschillende uiterlijken en achtergronden';
$txt['gravatar_retro'] = 'Fantastische gegenereerd, 8-bit arcade-stijl pixel-gezichten';
$txt['gravatar_blank'] = 'Een transparante PNG-afbeelding';

$txt['repair_attachments'] = 'Bijlagen beheren';
$txt['repair_attachments_complete'] = 'Onderhoud voltooid';
$txt['repair_attachments_complete_desc'] = 'Alle geselecteerde fouten zijn nu gecorrigeerd.';
$txt['repair_attachments_no_errors'] = 'Er zijn geen fouten gevonden!';
$txt['repair_attachments_error_desc'] = 'De volgende fouten zijn gevonden tijdens het onderhoud. Vink de vakjes naast de items die je wilt repareren aan en klik op Doorgaan.';
$txt['repair_attachments_continue'] = 'Ga verder';
$txt['repair_attachments_cancel'] = 'Annuleer';
$txt['attach_repair_missing_thumbnail_parent'] = '%1$d miniaturen horen niet bij een grote afbeelding';
$txt['attach_repair_parent_missing_thumbnail'] = '%1$d grote afbeeldingen hebben geen miniatuur';
$txt['attach_repair_file_missing_on_disk'] = '%1$d bijlagen/avatars staan in de database, maar bestaan niet langer op schijf';
$txt['attach_repair_file_wrong_size'] = '%1$d bijlagen/avatars hebben een verkeerde grootte in de database';
$txt['attach_repair_file_size_of_zero'] = '%1$d  bijlagen/avatars hebben een leeg bestand op schijf (deze zullen worden verwijderd)';
$txt['attach_repair_attachment_no_msg'] = '%1$d bijlagen horen niet langer bij een bericht';
$txt['attach_repair_avatar_no_member'] = '%1$d avatars horen niet langer bij een lid';
$txt['attach_repair_wrong_folder'] = '%1$d bijlagen staan in de verkeerde map';
$txt['attach_repair_files_without_attachment'] = '%1$d bestanden hebben geen overeenkomende entry in de database. (Deze worden verwijderd)';

$txt['news_title'] = 'Nieuws en nieuwsbrieven';
$txt['news_settings_desc'] = 'Hier kun je instellingen en permissies veranderen op het gebied van nieuws en nieuwsbrieven.';
$txt['news_mailing_desc'] = 'Vanuit dit scherm kun je berichten sturen aan alle leden die zich geregistreerd hebben en hun e-mailadres hebben opgegeven. Je kunt de distributielijst bewerken of berichten zenden aan iedereen. Handig voor belangrijke nieuwsmededelingen.';
$txt['news_error_no_news'] = 'Niets geschreven';
$txt['groups_edit_news'] = 'Ledengroepen die nieuwsberichten kunnen aanpassen';
$txt['groups_send_mail'] = 'Ledengroepen die forumnieuwsbrieven kunnen versturen';
$txt['xmlnews_enable'] = 'XML/RSS nieuws aanzetten?';
$txt['xmlnews_maxlen'] = 'Maximale berichtlengte:<div class="smalltext">(nul om uit te zetten, slecht idee.)</div>';
$txt['xmlnews_maxlen_note'] = '(0 om uit te schakelen, wordt afgeraden.)';
$txt['xmlnews_attachments'] = 'Insluiten van bijlagen in XML/RSS feeds';
$txt['xmlnews_attachments_note'] = 'Let op: sommige feed formaten ondersteunen maar &eacute;&eacute;n bijlage per bericht';
$txt['editnews_clickadd'] = 'Klik hier om een nieuwsregel toe te voegen.';
$txt['editnews_remove_selected'] = 'Verwijder selectie';
$txt['editnews_remove_confirm'] = 'Weet je zeker dat je de geselecteerde nieuwsitems wilt verwijderen?';
$txt['censor_clickadd'] = 'Klik hier om nog een censuurregel toe te voegen.';

$txt['layout_controls'] = 'Forum';
$txt['logs'] = 'Logboeken';
$txt['generate_reports'] = 'Genereer rapporten';

$txt['update_available'] = 'Update beschikbaar!';
$txt['update_message'] = 'Je gebruikt nog een oude versie van SMF, die nog fouten bevat die inmiddels zijn verbeterd.
	Het wordt je aangeraden om zo spoedig mogelijk <a href="#" id="update-link">je forum bij te werken</a> naar de recentste versie. Het duurt slechts enkele minuten!';

$txt['manageposts'] = 'Berichten en topics';
$txt['manageposts_title'] = 'Beheer berichten en topics';
$txt['manageposts_description'] = 'Hier kun je alles instellen met betrekking tot berichten en topics.';

$txt['manageposts_seconds'] = 'seconden';
$txt['manageposts_minutes'] = 'minuten';
$txt['manageposts_characters'] = 'karakters';
$txt['manageposts_days'] = 'dagen';
$txt['manageposts_posts'] = 'berichten';
$txt['manageposts_topics'] = 'topics';

$txt['manageposts_settings'] = 'Berichtinstellingen';
$txt['manageposts_settings_description'] = 'Hier kun je alles instellen met betrekking tot berichten en het plaatsen ervan.';

$txt['manageposts_bbc_settings'] = 'Bulletin Board Code';
$txt['manageposts_bbc_settings_description'] = 'Bulletin Board Code kan gebruikt worden om forumberichten op te maken. Bijvoorbeeld, om het woord \'huis\' vet weer te geven kun je [b]huis[/b] typen. Alle Bulletin Board Code-tags zijn omgeven door vierkante haken (\'[\' en \']\').';
$txt['manageposts_bbc_settings_title'] = 'Bulletin Board Code-instellingen';

$txt['manageposts_topic_settings'] = 'Topicinstellingen';
$txt['manageposts_topic_settings_description'] = 'Hier kun je alles instellen wat te maken heeft met topics';

$txt['managedrafts_settings'] = 'Instellingen voor concepten';
$txt['managedrafts_settings_description'] = 'Hier kun je alle instellingen voor concepten beheren.';
$txt['manage_drafts'] = 'Concepten';

$txt['removeNestedQuotes'] = 'Verwijder geneste citaten bij citeren berichten';
$txt['disable_wysiwyg'] = 'Schakel WYSIWYG-editor uit';
$txt['max_messageLength'] = 'Maximale grootte van een bericht';
$txt['max_messageLength_zero'] = '0 voor geen maximum';
$txt['convert_to_mediumtext'] = 'Your database is not configured to accept messages longer than 65535 characters. Please use the <a href="%1$s">database maintenance</a> page to convert the database and then come back to increase the maximum allowed post size.';
$txt['topicSummaryPosts'] = 'Aantal berichten te tonen bij topic samenvatting';
$txt['spamWaitTime'] = 'Minimale tijd tussen het plaatsen van berichten';
$txt['edit_wait_time'] = 'Vrije bewerktijd na plaatsing';
$txt['edit_disable_time'] = 'Maximale tijd dat een bericht nog bewerkt mag worden';
$txt['preview_characters'] = 'Maximale lengte voor de eerste/laatste bericht preview';
$txt['preview_characters_units'] = 'karakters';
$txt['quote_expand'] = 'Minimum quote height to add an expand link on large quotes';
$txt['quote_expand_pixels_units'] = 'pixels';
$txt['message_index_preview_first'] = 'Laat in de voorbeeldweergave de tekst van het eerste bericht zien.';
$txt['message_index_preview_first_desc'] = 'Leave unchecked to show the text of the last post instead';
$txt['show_user_images'] = 'Toon avatar in de berichtweergave';
$txt['show_blurb'] = 'Toon de persoonlijke tekst in de bericht weergave';
$txt['hide_post_group'] = 'Verberg de bericht-gerelateerde groepen voor gegroepeerde leden ';
$txt['hide_post_group_desc'] = 'Door dit te activeren wordt de bericht-gerelateerde ledengroep niet getoond als een lid is toegewezen aan een niet bericht-gerelateerde ledengroep.';
$txt['subject_toggle'] = 'Toon onderwerpen in topics.';
$txt['show_profile_buttons'] = 'Toon onder berichten een knop voor profielweergave';
$txt['show_modify'] = 'Toon de datum van laatste wijziging als een bericht gewijzigd is';

$txt['enableBBC'] = 'Gebruik bulletin board code';
$txt['enablePostHTML'] = 'Gebruik van basis-HTML toestaan';
$txt['autoLinkUrls'] = 'URLs automatisch linken';
$txt['disabledBBC'] = 'Ingeschakelde BBC-tags';
$txt['legacyBBC'] = 'Verouderde BBC-tags';
$txt['bbcTagsToUse'] = 'Ingeschakelde BBC-tags';
$txt['enabled_bbc_select'] = 'Select the tags which are allowed to be used';
$txt['enabled_bbc_select_all'] = 'Selecteer alle codes';
$txt['groups_can_use'] = 'Membergroups allowed to use %1$s';

$txt['enableParticipation'] = 'Deelname-iconen aanzetten?';
$txt['oldTopicDays'] = 'Dagen alvorens een topic als oud wordt beschouwd, en er gewaarschuwd wordt bij reactie';
$txt['defaultMaxTopics'] = 'Aantal topics per pagina op de topicsindex';
$txt['defaultMaxMessages'] = 'Aantal berichten per pagina in een topicpagina';
$txt['disable_print_topic'] = 'Deactiveer de &quot;Print topic&quot;-optie';
$txt['enableAllMessages'] = 'Maximale topicgrootte om de &quot;Alle&quot; berichten-knop weer te geven';
$txt['enableAllMessages_zero'] = '0 om nooit &quot;Alle&quot; berichten te tonen';
$txt['disableCustomPerPage'] = 'Schakel het aanpassen van hoeveelheid topics/berichten per pagina uit';
$txt['enablePreviousNext'] = 'Vorige/volgende topic-mod activeren';

$txt['not_done_title'] = 'Nog niet klaar!';
$txt['not_done_reason'] = 'Om overbelasting van je server te voorkomen, is het proces tijdelijk gestopt. Het zou automatisch binnen enkele seconden verder moeten gaan. Als dit niet het geval is, klik dan hieronder op \'Doorgaan\'.';
$txt['not_done_continue'] = 'Ga verder';

$txt['general_settings'] = 'Algemeen';
$txt['database_settings'] = 'Database';
$txt['cookies_sessions_settings'] = 'Cookies en sessies';
$txt['security_settings'] = 'Beveiliging';
$txt['caching_settings'] = 'Caching';
$txt['export_settings'] = 'Data Export';
$txt['load_balancing_settings'] = 'Load balancing';
$txt['phpinfo_settings'] = 'PHP-informatie';
$txt['phpinfo_localsettings'] = 'Lokale instellingen';
$txt['phpinfo_defaultsettings'] = 'Standaardinstellingen';
$txt['phpinfo_itemsettings'] = 'Instellingen';

$txt['language_configuration'] = 'Talen';
$txt['language_description'] = 'Deze sectie stelt je in staat om ge&iuml;nstalleerde talen te bewerken en nieuwe talen te downloaden van de Simple Machines website. Ook kun je hier instellingen bewerken die betrekking hebben op de talen.';
$txt['language_edit'] = 'Bewerk talen';
$txt['language_add'] = 'Taal toevoegen';
$txt['language_settings'] = 'Instellingen';
$txt['could_not_language_backup'] = 'Het was niet mogelijk om een back-up te maken voor het verwijderen van dit taal pakket. Er zijn daardoor geen wijzigingen gemaakt (wijzig de permissies zodat Pakketten/Backup geschreven kan worden of schakel de back-up functie uit - niet aanbevolen)';

$txt['advanced'] = 'Geavanceerd';
$txt['simple'] = 'Eenvoudig';

$txt['admin_news_newsletter_queue_done'] = 'De nieuwsbrief is succesvol in de maillijst geplaatst.';
$txt['admin_news_select_recipients'] = 'Selecteer wie er een exemplaar van deze nieuwsbrief moeten krijgen.';
$txt['admin_news_select_group'] = 'Ledengroepen';
$txt['admin_news_select_group_desc'] = 'Selecteer welke groepen deze nieuwsbrief moeten krijgen.';
$txt['admin_news_select_members'] = 'leden';
$txt['admin_news_select_members_desc'] = 'Extra leden die deze nieuwsbrief moeten ontvangen.';
$txt['admin_news_select_excluded_members'] = 'Uitgesloten leden';
$txt['admin_news_select_excluded_members_desc'] = 'Selecteer welke leden deze nieuwsbrief niet moeten ontvangen.';
$txt['admin_news_select_excluded_groups'] = 'Uitgesloten groepen';
$txt['admin_news_select_excluded_groups_desc'] = 'Selecteer welke groepen deze nieuwsbrief zeker niet moeten krijgen.';
$txt['admin_news_select_email'] = 'E-mailadressen';
$txt['admin_news_select_email_desc'] = 'Een puntkomma-gescheiden lijst van de e-mailadressen die deze nieuwsbrief moeten krijgen (bijv. adres1; adres2).';
$txt['admin_news_select_override_notify'] = 'Negeer notificatievoorkeuren?';
// Use entities in below.
$txt['admin_news_cannot_pm_emails_js'] = 'Je kunt geen persoonlijk bericht aan een e-mailadres versturen. Als je doorgaat, worden alle ingevoerde e-mailadressen genegeerd.\\n\\nWeet je zeker dat je door wilt gaan?';

$txt['mailqueue_browse'] = 'Wachtrij doorbladeren';
$txt['mailqueue_settings'] = 'Instellingen';
$txt['mailqueue_test'] = 'Test zenden';

$txt['admin_search'] = 'Snel zoeken';
$txt['admin_search_type_internal'] = 'Taak/instelling';
$txt['admin_search_type_member'] = 'lid';
$txt['admin_search_type_online'] = 'Online Documentatie';
$txt['admin_search_go'] = 'zoek';
$txt['admin_search_results'] = 'Zoekresultaten';
$txt['admin_search_results_desc'] = 'Resultaten voor zoekopdracht: &quot;%1$s&quot;';
$txt['admin_search_results_again'] = 'Zoek nogmaals';
$txt['admin_search_results_none'] = 'Geen resultaten gevonden!';

$txt['admin_search_section_sections'] = 'Sectie';
$txt['admin_search_section_settings'] = 'Instellingen';

$txt['mods_cat_features'] = 'Algemeen';
$txt['antispam_title'] = 'Verificatie';
$txt['mods_cat_modifications_misc'] = 'Diversen';
$txt['mods_cat_layout'] = 'Lay-out';
$txt['moderation_settings_short'] = 'Moderatie';
$txt['signature_settings_short'] = 'Handtekeningen';
$txt['custom_profile_shorttitle'] = 'Profielvelden';
$txt['pruning_title'] = 'Logopschoning';
$txt['pruning_desc'] = 'De volgende opties zijn nuttig om om te voorkomen dat je logboeken te groot worden. Oudere entries in het logboek zijn over het algemeen niet meer van nut.';
$txt['log_settings'] = 'Log instellingen';

$txt['boards_edit'] = 'Wijzig boards';
$txt['mboards_new_cat'] = 'Nieuwe categorie maken';
$txt['manage_holidays'] = 'Feestdagen beheren';
$txt['calendar_settings'] = 'Kalenderinstellingen';
$txt['search_weights'] = 'Gewichten';
$txt['search_method'] = 'Zoekmethode';

$txt['smiley_sets'] = 'Smileysets';
$txt['smileys_add'] = 'Smiley toevoegen';
$txt['smileys_edit'] = 'Bewerk smileys';
$txt['smileys_set_order'] = 'Verander smileyvolgorde';
$txt['icons_edit_message_icons'] = 'Berichticonen';

$txt['membergroups_new_group'] = 'Voeg ledengroep toe';
$txt['membergroups_edit_groups'] = 'Ledengroepen bewerken';
$txt['permissions_groups'] = 'Algemene permissies';
$txt['permissions_boards'] = 'Permissies per board';
$txt['permissions_profiles'] = 'Wijzig permissieprofielen';
$txt['permissions_post_moderation'] = 'Berichtmoderatie';

$txt['browse_packages'] = 'Pakketten bekijken';
$txt['download_packages'] = 'Download pakketten';
$txt['installed_packages'] = 'Ge&iuml;nstalleerde pakketten';
$txt['package_file_perms'] = 'Bestandpermissies';
$txt['package_settings'] = 'Opties';
$txt['themeadmin_admin_title'] = 'Beheer en installeer';
$txt['themeadmin_list_title'] = 'Thema-instellingen';
$txt['themeadmin_reset_title'] = 'Herstel lidopties';
$txt['themeadmin_edit_title'] = 'Bewerk thema\'s';
$txt['admin_browse_register_new'] = 'Registreer nieuw lid';

$txt['search_engines'] = 'Zoekmachines';
$txt['spiders'] = 'spiders';
$txt['spider_logs'] = 'Spiderlog';
$txt['spider_stats'] = 'Statistieken';

$txt['paid_subscriptions'] = 'Betaalde abonnementen';
$txt['paid_subs_view'] = 'Bekijk abonnementen';

$txt['hooks_title_list'] = 'Integratiehooks';
$txt['hooks_field_hook_name'] = 'Naam van hook';
$txt['hooks_field_function_name'] = 'Functienaam';
$txt['hooks_field_function_method'] = 'Functie is een methode en zijn klasse ge&iuml;nstantieerd';
$txt['hooks_field_function'] = 'Functie';
$txt['hooks_field_included_file'] = 'Bijgesloten bestand';
$txt['hooks_field_file_name'] = 'Bestandsnaam';
$txt['hooks_field_hook_exists'] = 'Status';
$txt['hooks_active'] = 'Bestaat';
$txt['hooks_disabled'] = 'Niet actief';
$txt['hooks_missing'] = 'Niet gevonden';
$txt['hooks_no_hooks'] = 'Er bestaan momenteel geen hooks';
$txt['hooks_button_remove'] = 'Verwijder';
$txt['hooks_disable_instructions'] = 'Klik op het statusicoon om de hook te activeren of te de-activeren';
$txt['hooks_disable_legend'] = 'Legenda';
$txt['hooks_disable_legend_exists'] = 'De hook bestaat en is actief';
$txt['hooks_disable_legend_disabled'] = 'De hook bestaat maar is niet actief';
$txt['hooks_disable_legend_missing'] = 'De hook is niet gevonden';
$txt['hooks_reset_filter'] = 'Geen filter';

$txt['board_perms_allow'] = 'Toestaan';
$txt['board_perms_ignore'] = 'Negeer';
$txt['board_perms_deny'] = 'Ontzeggen';
$txt['all_boards_in_cat'] = 'Alle boards in deze categorie';

$txt['likes_like'] = 'Ledengroepen die berichten Leuk mogen vinden';

$txt['mention'] = 'Ledengroepen die vermeldingen van gebruikers mogen plaatsen';

$txt['notifications'] = 'Notificaties';
$txt['notify_settings'] = 'Notificatie-instellingen';
$txt['notifications_desc'] = 'Op deze pagina kun je de standaard notificatie-instellingen voor gebruikers instellen.';

$txt['enable_sm_stats'] = 'Statistiekverzameling toestaan';

?>