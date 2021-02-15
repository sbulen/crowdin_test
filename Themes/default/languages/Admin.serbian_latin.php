<?php
// Version: 2.1 RC3; Admin

global $settings, $scripturl;

$txt['settings_saved'] = 'Podešavanja su uspešno sačuvana';
$txt['settings_not_saved'] = 'Vaše promene nisu sačuvane jer: %1$s';

$txt['admin_boards'] = 'Forumi i kategorije';
$txt['admin_users'] = 'članova';
$txt['admin_newsletters'] = 'Infodopisi';
$txt['admin_edit_news'] = 'Vesti';
$txt['admin_groups'] = 'Grupe članova';
$txt['admin_members'] = 'Upravljanje članovima';
$txt['admin_members_list'] = 'Ispod se nalazi spisak svih članova registrovanih na ovaj forum.';
$txt['admin_next'] = 'Sledeće';
$txt['admin_censored_words'] = 'Cenzurisane reči';
$txt['admin_censored_where'] = 'Postavite reči za cenzuru sa leve strane a njihove zamene sa desne strane.';
$txt['admin_censored_desc'] = 'Zbog javne prirode foruma, možda postoje neke reči čije bi korišćenje od strane korisnika želeli da zabranite. Ispod možete da unesete bilo koje reči koje će biti cenzurisane kad god ih članovi ovog foruma budu upotrebili.<br>Očistite polje da biste uklonili reč.';
$txt['admin_reserved_names'] = 'Rezervisana imena';
$txt['admin_modifications'] = 'Podešavanja modifikacija';
$txt['admin_server_settings'] = 'Podešavanja servera';
$txt['admin_reserved_set'] = 'Postavi rezervisana imena';
$txt['admin_reserved_line'] = 'Jedna rezervisana reč po liniji.';
$txt['admin_basic_settings'] = 'Ova stranica vam omogućava da promenite osnovna podešavanja foruma. Budite veoma pažljivi sa ovim podešavanjima, pošto se može desiti da onemoguće pravilan rad foruma.';
$txt['admin_maintain'] = 'Omogući mod održavanja';
$txt['admin_title'] = 'Ime foruma';
$txt['cookie_name'] = 'Ime kolačića';
$txt['admin_webmaster_email'] = 'Imejl adresa vebmastera';
$txt['cachedir'] = 'Direktorijum za keširanje';
$txt['admin_news'] = 'Omogući vesti';
$txt['admin_manage_members'] = 'članova';
$txt['admin_main'] = 'Opšte';
$txt['admin_config'] = 'Podešavanje';
$txt['admin_version_check'] = 'Detaljna provera verzije';
$txt['admin_smffile'] = 'SMF datoteka';
$txt['admin_smfpackage'] = 'SMF paket';
$txt['admin_logoff'] = 'Kraj Administratorske Sesije';
$txt['admin_maintenance'] = 'Održavanje';
$txt['admin_credits'] = 'Zasluge';
$txt['admin_agreement'] = 'Require new members to accept the registration agreement';
$txt['admin_agreement_minor_edit'] = 'This is a minor edit';
$txt['reset_agreement_desc'] = 'This will force all members to re-read and accept the registration agreement in order to continue using the forum.';
$txt['admin_privacy_policy'] = 'Require new members to accept the privacy policy';
$txt['reset_privacy_policy_desc'] = 'This will force all members to re-read and accept the privacy policy in order to continue using the forum.';
$txt['admin_agreement_info'] = 'Last updated: %1$s.';
$txt['admin_agreement_default'] = 'Podrazumevano';
$txt['admin_agreement_select_language'] = 'Jezik za izmenu';
$txt['admin_agreement_select_language_change'] = 'Promeni';
$txt['admin_agreement_not_saved'] = 'Promene sporazuma nisu sačuvane. Možda dozvole datoteke na toj datoteci nisu pravilno postavljene.';
$txt['admin_delete_members'] = 'Obriši izabrane članove';
$txt['admin_repair'] = 'Popravi sve forume i teme';
$txt['admin_main_welcome'] = 'Ovo je vaš &quot;%1$s&quot;.  Odavde možete da menjate podešavanja, održavate forum, gledate dnevnike, instalirate pakete, upravljate temama i radite mnogo drugih stvari.<br><br>Ako imate bilo kakvih problema, pogledajte odeljak &quot;Podrška i zasluge&quot;. Ako vam informacije koje pronađete tamo ne pomognu, ne ustručavajte se da <a href="http://www.simplemachines.org/community/index.php" target="_blank">nas upitate za pomoć</a> oko problema.<br>Možete da pronađete odgovore na pitanja i probleme klikom na <span class="main_icons help" title="%3$s"></span> simbole da biste dobili više informacija o pojedinim funkcijama.';
$txt['admin_news_desc'] = 'Unesite jednu stavku vesti po polju. Neki BBkod tagovi kao što su <span title="Da li ste podebljani?">[b]</span>, <span title="I skošeno!!">[i]</span> i <span title="Zagrade su sjajne, zar ne?">[u]</span> su dozvoljeni u vestima kao i smajliji. Očistite polje za potvrdu pored polja za unos teksta da biste uklonili vest.';
$txt['administrators'] = 'Administratori foruma';
$txt['admin_reserved_desc'] = 'Rezervisane reči će sprečiti članove prilikom registrovanja određenih korisničkih imena ili korišćenju ovih reči u prikazanim imenima. Izaberite opcije pri dnu koje želite da koristite pre podnošenja.';
$txt['admin_match_whole'] = 'Poklapaj samo celo ime. Ako nije obeleženo, pretraga će se vršiti unutar imena.';
$txt['admin_match_case'] = 'Poklopi velika i mala slova. Ako nije obeleženo, pretraga će biti neosetljiva na mala i velika slova.';
$txt['admin_check_user'] = 'Proveri korisničko ime.';
$txt['admin_check_display'] = 'Proveri prikazano ime.';
$txt['admin_fader_delay'] = 'Vreme za prikazivanje svake stavke u pretapaču vesti';
$txt['additional_options_collapsable'] = 'Omogućite skupljive dodatne opcije poruka';
$txt['guest_post_no_email'] = 'Ne prikazuj imejl polje za poruke gostiju';
$txt['zero_for_no_limit'] = '(0 bez ograničenja)';
$txt['zero_to_disable'] = '(0 da isključite)';
$txt['dont_show_attach_under_post'] = 'Do not show attachments under the post if they are already embedded in it.';
$txt['dont_show_attach_under_post_sub'] = 'Enable this if you do not want attachments to appear twice. Attachments embedded in the post still count towards attachment limits and can still be treated like normal attachments.';

$txt['admin_backup_fail'] = 'Nisam mogao da napravim rezervnu kopiju datoteke Settings.php - uverite se da datoteka Settings_bak.php postoji i da je otvorena za pisanje.';
$txt['registration_agreement'] = 'Sporazum o registraciji';
$txt['registration_agreement_desc'] = 'Ovaj sporazum se prikazuje kada korisnik registruje nalog na ovom forumu i mora da bude prihvaćen pre registracije.';
$txt['privacy_policy'] = 'Privacy Policy';
$txt['privacy_policy_desc'] = 'This privacy policy describes the promises you make to your users regarding how you will use their personal data. It is shown when a user registers an account on this forum and has to be accepted before the user can continue registration.';
$txt['errors_list'] = 'Spisak grešaka na foruma';
$txt['errors_found'] = 'Sledeće greške se provlače kroz forum';
$txt['errors_fix'] = 'Da li želite da pokušam da popravim ove greške?';
$txt['errors_do_recount'] = 'Sve greške su popravljene! Molimo kliknite dugme ispod da bi prebrojali ključne statistike.';
$txt['errors_recount_now'] = 'Prebroj statistiku';
$txt['errors_fixing'] = 'Popravljam greške na forumu';
$txt['errors_fixed'] = 'Sve greške su ispravljene! Proverite kategorije, forume i teme da biste odlučili šta da uradite sa njima.';
$txt['attachments_avatars'] = 'Priložene datoteke i avatari';
$txt['attachments_desc'] = 'Odavde možete da administrirate priložene datoteke na vašem sistemu. Možete da obrišete priložene datoteke prema veličini i datumu sa vašeg sistema. Ispod je prikazana i statistika priloženih datoteka.';
$txt['attachment_stats'] = 'Statistika priloženih datoteka';
$txt['attachment_integrity_check'] = 'Provera integriteta priloženih datoteka';
$txt['attachment_integrity_check_desc'] = 'Ova funkcija će proveriti integritet vaših priloženih datoteka i naziva fajlova u bazi, i ukoliko je potrebno popraviće greške koje se pronađu.';
$txt['attachment_check_now'] = 'Pokreni proveru sada';
$txt['attachment_pruning'] = 'Brisanje starih priloženih datoteka';
$txt['attachment_pruning_message'] = 'Poruka za dodavanje u post';
$txt['attachment_pruning_warning'] = 'Jeste li sigurni da želite da obrišete ove priložene datoteke?\\nUkoliko ih izbrišete ne mogu biti naknadno vraćene!';

$txt['attachment_total'] = 'Ukupno priloženih datoteka';
$txt['attachmentdir_size'] = 'Ukupna veličina direktorijuma priloženih datoteka';
$txt['attachmentdir_size_current'] = 'Trenutna veličina direktorijuma priloženih datoteka';
$txt['attachmentdir_files_current'] = 'Ukupno fajlova u trenutnom folderu priloga';
$txt['attachment_space'] = 'Dozvoljena veličina direktorijuma priloženih datoteka';
$txt['attachment_files'] = 'Ukupno fajlova ostalo';

$txt['attachment_log'] = 'Dnevnik priloženih datoteka';
$txt['attachment_remove_old'] = 'Ukloni priložene datoteke starije od';
$txt['attachment_remove_size'] = 'Ukloni priložene datoteke veće od';
$txt['attachment_name'] = 'Ime priložene datoteke';
$txt['attachment_file_size'] = 'Veličina datoteke';
$txt['attachmentdir_size_not_set'] = 'Trenutno nije postavljena maksimalna veličina direktorijuma priloženih datoteka';
$txt['attachmentdir_files_not_set'] = 'Trenutno nije postavljeno ograničenje veličine foldera';
$txt['attachment_delete_admin'] = '[priloženu datoteku obrisao administrator]';
$txt['live'] = 'Uživo iz Simple Machines...';
$txt['remove_all'] = 'Ukloni sve';
$txt['agreement_not_writable'] = 'Upozorenje - agreement.txt nije otvoren za pisanje te promene koje napravite NEĆE biti sačuvane.';

$txt['version_check_desc'] = 'Ovde su prikazane verzije datoteka vaše instalacije nasuprot verzija datoteka najnovijeg izdanja. Ako bilo koja od ovih datoteka nije najnovije verzije, trebalo bi da je preuzmete i ažurirate na najnoviju verziju sa <a href="https://www.simplemachines.org/" target="_blank" rel="noopener">www.simplemachines.org</a>.';
$txt['version_check_more'] = '(detaljnije)';

$txt['smf_news_cant_connect'] = 'Niste mogli da preuzmete najnoviju simplemachines.org datoteku sa vestima.';

$txt['manage_calendar'] = 'Kalendar';
$txt['manage_search'] = 'Pretraživanje';

$txt['smileys_manage'] = 'Smajliji i slike poruka';
$txt['theme_admin'] = 'Teme i izgledi';
$txt['registration_center'] = 'Registracije';

$txt['viewmembers_online'] = 'Zadnji put prisutan';
$txt['viewmembers_today'] = 'danas';
$txt['viewmembers_day_ago'] = 'dan';
$txt['viewmembers_days_ago'] = 'dana';

$txt['display_name'] = 'Prikazano ime';
$txt['email_address'] = 'Imejl adresa';
$txt['ip_address'] = 'IP adresa';
$txt['member_id'] = 'ID';

$txt['unknown'] = 'nepoznato';
// argument(s): HTTP_REFERER (if applicable), HTTP_USER_AGENT, ip address
$txt['security_wrong'] = "Administration login attempt!\nReferrer: %1\\$s\nUser agent: %2\\$s\nIP: %3\\$s";

$txt['email_as_html'] = 'Pošalji u HTML formatu. (sa ovim možete da koristite normalni HTML u imejlu.)';
$txt['email_parsed_html'] = 'Dodaj &lt;br&gt;s i &amp;nbsp;s gde je potrebno ovoj poruci.';
// argument(s): $scripturl
$txt['email_variables'] = 'In this message you can use a few &quot;variables&quot;. Click <a href="%1$s?action=helpadmin;help=email_members" onclick="return reqOverlayDiv(this.href);" class="help">here</a> for more information.';
$txt['email_force'] = 'Pošalji ovo i članovima koji su odabrali da ne primaju obaveštenja.';
$txt['email_as_pms'] = 'Pošalji ovo ovim grupama koristeći privatne poruke.';
$txt['email_continue'] = 'Nastavak';
$txt['email_done'] = 'završeno.';

$txt['warnings'] = 'Upozorenja';
$txt['warnings_desc'] = 'Ovaj sistem omogućava administratorima i urednicima da izdaju upozorenja korisnicima, a može automatski ukloniti korisnička prava ako se njihov nivo upozorenja povećava. Da u potpunosti iskoristite ovaj sistem, & quot; Uređivanje poruka & quot; treba omogućiti.';

$txt['ban_title'] = 'Spisak zabrana';

$txt['ban_errors_detected'] = 'Sledeća greška ili greške su nastale kod snimanja ili uređivanja zabrane';
$txt['ban_description'] = 'Ovde možete da zabranite problematične ljude prema IP adresi, imenu domaćina, korisničkom imenu, ili imejlu.';
$txt['ban_add_new'] = 'Dodaj novu zabranu';
$txt['ban_banned_entity'] = 'Zabranjen opseg';
$txt['ban_on_ip'] = 'Zabrana na osnovu IP adrese (na pr. 192.168.10-20.*)';
$txt['ban_on_hostname'] = 'Zabrana na osnovu imena domaćina (na pr. *.mil)';
$txt['ban_on_email'] = 'Zabrana na osnovu imejl adrese (na pr. *@los-sajt.com)';
$txt['ban_on_username'] = 'Zabrana na osnovu korisničkog imena';
$txt['ban_notes'] = 'Beleške';
$txt['ban_restriction'] = 'Zabrana';
$txt['ban_full_ban'] = 'Puna zabrana';
$txt['ban_partial_ban'] = 'Delimična zabrana';
$txt['ban_cannot_post'] = 'Ne može da šalje poruke';
$txt['ban_cannot_register'] = 'Ne može da se registruje';
$txt['ban_cannot_login'] = 'Ne može da se prijavi';
$txt['ban_add'] = 'Dodaj';
$txt['ban_edit_list'] = 'Spisak zabrana';
$txt['ban_type'] = 'Tip zabrane';
$txt['ban_days'] = 'dan(a)';
$txt['ban_will_expire_within'] = 'Zabrana će isteći posle';
$txt['ban_added'] = 'Dodata';
$txt['ban_expires'] = 'Ističe';
$txt['ban_hits'] = 'Pokušaja';
$txt['ban_actions'] = 'Akcije';
$txt['ban_expiration'] = 'Ističe';
$txt['ban_reason_desc'] = 'Razlog za zabranu koji će biti prikazan zabranjenim članovima.';
$txt['ban_notes_desc'] = 'Beleške koje mogu da pomognu ostalom osoblju.';
$txt['ban_remove_selected'] = 'Ukloni izabrano';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_confirm'] = 'Da li ste sigurni da želite da uklonite izabrane zabrane?';
$txt['ban_modify'] = 'izmeni';
$txt['ban_name'] = 'Ime zabrane';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_edit'] = 'Izmeni zabranu';
$txt['ban_add_notes'] = '<strong>Napomena</strong>: nakon kreiranja ove zabrane, moći ćete da dodate dodatne unose koji će okinuti zabranu kao što su IP adrese, imena domaćina i imejl adrese.';
$txt['ban_expired'] = 'Istekla / onemogućena';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_restriction_empty'] = 'Nije izabrana nijedna zabrana.';

$txt['ban_triggers'] = 'Okidači';
$txt['ban_add_trigger'] = 'Dodaj okidač zabrane';
$txt['ban_add_trigger_submit'] = 'Dodaj';
$txt['ban_edit_trigger'] = 'izmeni';
$txt['ban_edit_trigger_title'] = 'Izmeni okidač zabrane';
$txt['ban_edit_trigger_submit'] = 'izmeni';
$txt['ban_remove_selected_triggers'] = 'Ukloni izabrane okidače zabrana';
$txt['ban_no_entries'] = 'Trenutno ne postoje zabrane na snazi.';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_triggers_confirm'] = 'Da li ste sigurni da želite da uklonite izabrane okidače zabrana?';
$txt['ban_trigger_browse'] = 'Pregledaj okidače zabrana';
$txt['ban_trigger_browse_description'] = 'Ovde možete videti sve zabranjene grupe grupisane po IP adresi, imenu domaćina, imejl adresi i korisničkom imenu.';

$txt['ban_log'] = 'Dnevnik zabrana';
$txt['ban_log_description'] = 'Ovaj dnevnik zabrana prikazuje sve pokušaje pristupa forumu od strane zabranjenih korisnika (prikazane su samo \'puna zabrana\' i \'zabrana registrovanja\').';
$txt['ban_log_no_entries'] = 'Trenutno nema zapisa u dnevniku zabrana.';
$txt['ban_log_ip'] = 'IP';
$txt['ban_log_email'] = 'Imejl adresa';
$txt['ban_log_member'] = 'Član';
$txt['ban_log_date'] = 'Datum';
$txt['ban_log_remove_all'] = 'Ukloni sve';
$txt['ban_log_remove_all_confirm'] = 'Da li ste sigurni da želite da obrišete sve zapise iz dnevnika zabrana?';
$txt['ban_log_remove_selected'] = 'Ukloni izabrano';
$txt['ban_log_remove_selected_confirm'] = 'Da li ste sigurni da želite da obrišete sve izabrane zapise iz dnevnika zabrana?';
$txt['ban_no_triggers'] = 'Nema okidača zabrana.';

$txt['settings_not_writable'] = 'Ova podešavanja ne mogu da se promene jer je Settings.php podešen na samo za čitanje.';

$txt['maintain_title'] = 'Održavanje foruma';
$txt['maintain_info'] = 'Optimizujte tabele, pravite rezervne kopije i proverite greške sa ovim alatima.';
$txt['maintain_sub_database'] = 'Baza podataka';
$txt['maintain_sub_routine'] = 'Rutina';
$txt['maintain_sub_members'] = 'članova';
$txt['maintain_sub_topics'] = 'tema';
$txt['maintain_done'] = 'Zadatak \'%1$s\' je uspešno završen.';
$txt['maintain_no_errors'] = 'Čestitamo, greške nisu pronađene! Zahvaljujemo se na proveri.';

$txt['maintain_tasks'] = 'Planirani zadaci';
$txt['maintain_tasks_desc'] = 'Upravljajte zadacima koje je SMF zakazao.';
$txt['scheduled_tasks_settings'] = 'Podešavanja';
$txt['scheduled_tasks_settings_desc'] = 'Settings to control how scheduled tasks are run.';

$txt['scheduled_log'] = 'Dnevnik zadataka';
$txt['scheduled_log_desc'] = 'Prikazuje dnevnik svih zadataka koji su se pokrenuli.';
$txt['admin_log'] = 'Dnevnik administriranja';
$txt['admin_log_desc'] = 'Prikazuje postupke administratora vašeg foruma.';
$txt['moderation_log'] = 'Dnevnik uređivanja';
$txt['moderation_log_desc'] = 'Prikazuje postupke urednika vašeg foruma.';
$txt['spider_log_desc'] = 'Pregled unosa vezanih za aktivnosti pretraživačkih paukovana vašem forumu.';
$txt['log_settings_desc'] = 'Koristite ove opcije da podesite kako prijavljivanje radi na forumu. ';
$txt['modlog_enabled'] = 'Omogućite dnevnik uređivanja';
$txt['adminlog_enabled'] = 'Omogućite dnevnik administriranja ';
$txt['userlog_enabled'] = 'Omogućite dnevnik uređivanja profila';

$txt['mailqueue_title'] = 'Pošta';

$txt['db_error_send'] = 'Šalji mejlove pri MySQL greškama pri povezivanju';
$txt['db_persist'] = 'Koristi trajnu vezu';
$txt['ssi_db_user'] = 'Korisničko ime baze za korišćenje u SSI modu';
$txt['ssi_db_passwd'] = 'Lozinka baze za korišćenje u SSI modu';

$txt['default_language'] = 'Podrazumevani jezik foruma';

$txt['maintenance_subject'] = 'Naslov za prikazivanje';
$txt['maintenance_message'] = 'Poruka za prikazivanje';

$txt['errorlog_desc'] = 'The error log tracks every error encountered by your forum. To delete any errors from the database, mark the checkbox, and click the %1$s button at the bottom of the page.';
$txt['errorlog_no_entries'] = 'Trenutno nema unosa u dnevniku grešaka.';

$txt['theme_settings'] = 'Podešavanja tema';
$txt['theme_current_settings'] = 'Trenutna tema';

$txt['dvc_your'] = 'Vaša verzija';
$txt['dvc_current'] = 'Trenutna verzija';
$txt['dvc_sources'] = 'Izvori';
$txt['dvc_default'] = 'Podrazumevani predlošci';
$txt['dvc_templates'] = 'Trenutni predlošci';
$txt['dvc_languages'] = 'Jezičke datoteke';
$txt['dvc_tasks'] = 'Pozadinski Zadaci';

$txt['smileys_default_set_for_theme'] = 'Izaberite podrazumevanu postavku smajlija za ovu temu';
$txt['smileys_no_default'] = '(koristi globalnu postavku smajlija)';

$txt['censor_test'] = 'Testirajte cenzuru reči';
$txt['censor_test_save'] = 'Test';
$txt['censor_case'] = 'Ignoriši razliku u velikim i malim slovima pri cenzuri';
$txt['censor_whole_words'] = 'Proveri samo cele reči.';

$txt['admin_confirm_password'] = '(potvrdi)';
$txt['admin_incorrect_password'] = 'Pogrešna lozinka';

$txt['age'] = 'Starost korisnika';
$txt['activation_status'] = 'Aktivacioni status';
$txt['activated'] = 'Aktiviran';
$txt['not_activated'] = 'Nije aktiviran';
$txt['primary'] = 'Primarno';
$txt['additional'] = 'Dodatno';
$txt['wild_cards_allowed'] = 'džokeri * i ? su dozvoljeni';
$txt['search_for'] = 'Traži';
$txt['search_match'] = 'Podudara';
$txt['member_part_of_these_membergroups'] = 'Član je pripadnik ovih grupa članova';
$txt['membergroups'] = 'Grupe članova';
$txt['confirm_delete_members'] = 'Da li ste sigurni da želite da obrišete izabrane članove?';

$txt['support_credits_title'] = 'Podrška i zasluge';
$txt['support_title'] = 'Informacije o podršci';
$txt['support_versions_current'] = 'Aktuelna verzija SMF-a';
$txt['support_versions_forum'] = 'Verzija foruma';
$txt['support_versions_db'] = '%1$s verzija';
$txt['support_versions_db_engine'] = '%1$s engine';
$txt['support_versions_server'] = 'Verzija servera';
$txt['support_versions_gd'] = 'Verzija GD-a';
$txt['support_versions_imagemagick'] = 'ImageMagick version';
$txt['support_versions'] = 'Informacije o verzijama';
$txt['support_resources'] = 'Izvori Podrške';
$txt['support_resources_p1'] = 'Naš <a href="%1$s">Onlajn Priručnik</a> pruža osnovnu dokumentaciju za SMF. SMF Onlajn Priručnik ima mnogo dokumenata koji mogu pomoći u odgovaranju na pitanja podrške i objasniti <a href="%2$s">Svojstva</a>, <a href="%3$s">Podešavanja</a>, <a href="%4$s">Teme</a>, <a href="%5$s">Pakete</a>, itd. Dokumenti Online Priručnika svake oblasti SMF-a temeljno i brzo mogu odgovoriti na većinu pitanja.';
$txt['support_resources_p2'] = 'Ako ne možete pronaći odgovore na vaša pitanja u Onlajn Uputama, možda ćete želeti  da pretražite našu <a href="%1$s">Zajednicu</a> ili zatražite pomoć na našem <a href="%2$s">Engleskom</a> ili jednom od mnogih <a href="%3$s">međunarodnih foruma za podršku</a>. SMF Zajednica se može koristiti za <a href="%4$s">podršku</a>, <a href="%5$s">prilagođavanje</a>, i mnoge druge stvari kao što su SMF diskusije, pronalaženje hosta, i diskutujete o administrativnim pitanjima sa ostalim administratorima foruma.';

$txt['membergroups_members'] = 'Regularni članovi';
$txt['membergroups_guests'] = 'gostiju';
$txt['membergroups_add_group'] = 'Dodaj grupu';
$txt['membergroups_permissions'] = 'Dozvole';

$txt['permitgroups_restrict'] = 'Ograničene';
$txt['permitgroups_standard'] = 'Uobičajene';
$txt['permitgroups_moderator'] = 'Urednik';
$txt['permitgroups_maintenance'] = 'Održavanje';
$txt['permitgroups_inherit'] = 'Nasleđene';

$txt['confirm_delete_attachments_all'] = 'Da li ste sigurni da želite da obrišete sve priložene datoteke?';
$txt['confirm_delete_attachments'] = 'Da li ste sigurni da želite da obrišete izabrane priložene datoteke?';
$txt['attachment_manager_browse_files'] = 'Pregledaj datoteke';
$txt['attachment_manager_repair'] = 'Održavanje';
$txt['attachment_manager_avatars'] = 'Avatari';
$txt['attachment_manager_attachments'] = 'Priložene datoteke';
$txt['attachment_manager_thumbs'] = 'Sličice';
$txt['attachment_manager_last_active'] = 'Poslednji put aktivan';
$txt['attachment_manager_member'] = 'Član';
$txt['attachment_manager_avatars_older'] = 'Ukloni avatare članova koji nisu aktivni više od';
$txt['attachment_manager_total_avatars'] = 'Ukupno avatara';

$txt['attachment_manager_avatars_no_entries'] = 'Trenutno nema avatara.';
$txt['attachment_manager_attachments_no_entries'] = 'Trenutno nema priloženih datoteka.';
$txt['attachment_manager_thumbs_no_entries'] = 'Trenutno nema umanjenih prikaza.';

$txt['attachment_manager_settings'] = 'Podešavanja priloženih datoteka';
$txt['attachment_manager_avatar_settings'] = 'Podešavanja avatara';
$txt['attachment_manager_browse'] = 'Pregledaj datoteke';
$txt['attachment_manager_maintenance'] = 'Održavanje datoteka';
$txt['attachment_manager_save'] = 'Sačuvaj';

$txt['attachmentEnable'] = 'Priložene datoteke';
$txt['attachmentEnable_deactivate'] = 'Onemogući priložene datoteke';
$txt['attachmentEnable_enable_all'] = 'Omogući sve priložene datoteke';
$txt['attachmentEnable_disable_new'] = 'Onemogući nove priložene datoteke';
$txt['attachmentCheckExtensions'] = 'Proveri ekstenziju priloženih datoteka';
$txt['attachmentExtensions'] = 'Dozvoljene ekstenzije priloženih datoteka';
$txt['attachmentShowImages'] = 'Prikaži slike priloženih datoteka ispod poruka';
$txt['attachmentUploadDir'] = 'Direktorijum priloženih datoteka';
$txt['attachmentUploadDir_multiple_configure'] = 'Manage attachment directories';
$txt['attachmentDirSizeLimit'] = 'Najveća veličina direktorijuma priloženih datoteka';
$txt['attachmentPostLimit'] = 'Najveća veličina priloženih datoteka po poruci';
$txt['attachmentSizeLimit'] = 'Najveća veličina priložene datoteke';
$txt['attachmentNumPerPostLimit'] = 'Najveći broj priloženih datoteka po poruci';
$txt['attachment_img_enc_warning'] = 'Ni GD modul ni Imagick ili MagickVand proširenja trenutno nisu instalirani. Rekodiranje nije moguće.';
$txt['attachment_ini_max'] = 'Maximum allowed by php.ini: %1$s';
$txt['attachment_image_reencode'] = 'Prešifriraj potencijalno opasne slikovne priložene datoteke';
$txt['attachment_image_paranoid_warning'] = 'Opsežne bezbednosne provere mogu rezultirati velikim brojem odbačenih priloga.';
$txt['attachment_image_paranoid'] = 'Obavlja jaku sigurnosnu proveru priloženih datoteka.';
$txt['attachmentThumbnails'] = 'Promeni veličinu slikama pri prikazivanju ispod poruke';
$txt['attachment_thumb_png'] = 'Sačuvaj umanjene slike kao PNG';
$txt['attachment_thumb_memory'] = 'Adaptive thumbnail memory';
$txt['attachmentThumbWidth'] = 'Najveća širina sličica';
$txt['attachmentThumbHeight'] = 'Najveća visina sličica';
$txt['attachment_thumbnail_settings'] = 'Podešavanja sličica';
$txt['attachment_security_settings'] = 'Sigurnosna podešavanja priloga';

$txt['attach_dir_does_not_exist'] = 'ne postoji';
$txt['attach_dir_not_writable'] = 'Nije otvoreno za upisivanje';
$txt['attach_dir_files_missing'] = 'Nedostaju datoteke (<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=repair;%2$s=%1$s">Popravi</a>)';
$txt['attach_dir_unused'] = 'nekorišćeno';
$txt['attach_dir_empty'] = 'Prazno';
$txt['attach_dir_ok'] = 'u redu';
$txt['attach_dir_basedir'] = 'Osnovni folder';
$txt['attach_dir_desc'] = 'Create new directories or change the current directory below. <br>To create a new directory within the forum directory structure, use just the directory name. <br>To remove a directory, blank the path input field. Only empty directories can be removed. To see if a directory is empty, check for files or sub-directories in brackets next to the file count. <br> To rename a directory, simply change its name in the input field. Only directories without sub-directories may be renamed.';
$txt['attach_dir_base_desc'] = 'You may use the area below to change the current base directory or create a new one. New base directories are also added to the Attachment Directory list. You may also designate an existing directory to be a base directory.';
$txt['attach_dir_save_problem'] = 'Ups, izgleda da imamo problem.';
$txt['attachments_no_create'] = 'Unable to create a new attachment directory. Please do so using a FTP client or your site file manager.';
$txt['attachments_no_write'] = 'This directory has been created, but is not writable. Please attempt to do so using a FTP client or your site file manager.';
$txt['attach_dir_duplicate_msg'] = 'Nemoguće dodati. Ovaj direktorijum već postoji.';
$txt['attach_dir_exists_msg'] = 'Unable to move. A directory already exists at that path.';
$txt['attach_dir_base_dupe_msg'] = 'Unable to add. This base directory has already been created.';
$txt['attach_dir_base_no_create'] = 'Unable to create. Please verify the path input or create this directory using an FTP client or your site file manager and retry.';
$txt['attach_dir_no_rename'] = 'Unable to move or rename. Please verify that the path is correct or that this directory does not contain any sub-directories.';
$txt['attach_dir_no_delete'] = 'Is not empty and cannot be deleted. Please do so using a FTP client or your site file manager.';
$txt['attach_dir_no_remove'] = 'Still contains files or is a base directory and cannot be deleted.';
$txt['attach_dir_is_current'] = 'Unable to remove while it is selected as the current directory.';
$txt['attach_dir_is_current_bd'] = 'Unable to remove while it is selected as the current base directory.';
$txt['attach_dir_invalid'] = 'Neispravan direktorijum.';
$txt['attach_last_dir'] = 'Last active attachment directory';
$txt['attach_current_dir'] = 'Trenutni direktorijum';
$txt['attach_current'] = 'Trenutni';
$txt['attach_path_manage'] = 'Upravljanje putanjama priloženih datoteka';
$txt['attach_directories'] = 'Attachment Directories';
$txt['attach_paths'] = 'Putanje priloženih datoteka';
$txt['attach_path'] = 'Putanja';
$txt['attach_current_size'] = 'Trenutna veličina (KB)';
$txt['attach_num_files'] = 'Datoteka';
$txt['attach_dir_status'] = 'Status';
$txt['attach_add_path'] = 'Dodaj putanju';
$txt['attach_path_current_bad'] = 'Trenutna putanja priloženih datoteka nije ispravna.';
$txt['attachmentDirFileLimit'] = 'Maksimalan broj datoteka u direktorijumu';

$txt['attach_base_paths'] = 'Base directory paths';
$txt['attach_num_dirs'] = 'Direktorijumi';
$txt['max_image_width'] = 'Max display width of posted or attached images';
$txt['max_image_height'] = 'Max display height of posted or attached images';

$txt['automanage_attachments'] = 'Choose the method for the management of the attachment directories';
$txt['attachments_normal'] = '(Manual) SMF default behavior';
$txt['attachments_auto_years'] = '(Auto) Subdivide by years';
$txt['attachments_auto_months'] = '(Auto) Subdivide by years and months';
$txt['attachments_auto_days'] = '(Auto) Subdivide by years, months and days';
$txt['attachments_auto_16'] = '(Auto) 16 random directories';
$txt['attachments_auto_16x16'] = '(Auto) 16 random directories with 16 random sub-directories';
$txt['attachments_auto_space'] = '(Auto) When either directory space limit is reached';

$txt['use_subdirectories_for_attachments'] = 'Create new directories within a base directory';
$txt['use_subdirectories_for_attachments_note'] = 'Otherwise any new directories will be created within the forum\'s main directory.';
$txt['basedirectory_for_attachments'] = 'Set a base directory for attachments';
$txt['basedirectory_for_attachments_current'] = 'Current base directory';
// argument(s): scripturl
$txt['basedirectory_for_attachments_warning'] = '<div class="smalltext">Please note that the directory is wrong. <br>(<a href="%1$s?action=admin;area=manageattachments;sa=attachpaths">Attempt to correct</a>)</div>';
// argument(s): scripturl
$txt['attach_current_dir_warning'] = '<div class="smalltext">There seems to be a problem with this directory. <br>(<a href="%1$s?action=admin;area=manageattachments;sa=attachpaths">Attempt to correct</a>)</div>';

$txt['attachment_transfer'] = 'Prenos priloženih datoteka';
$txt['attachment_transfer_desc'] = 'Prenos datoteka između direktorijuma';
$txt['attachment_transfer_select'] = 'Izaberite direktorijum';
$txt['attachment_transfer_now'] = 'Prenesi';
$txt['attachment_transfer_from'] = 'Prenesi datoteke iz';
$txt['attachment_transfer_auto'] = 'Automatski po veličini ili broju datoteka';
$txt['attachment_transfer_auto_select'] = 'Izaberite osnovni direktorijum';
$txt['attachment_transfer_to'] = 'Ili u posebni direktorijum.';
$txt['attachment_transfer_empty'] = 'Ispraznite izvorni direktorijum';
$txt['attachment_transfer_no_base'] = 'Nisu dostupni izvorni direktorijumi.';
$txt['attachment_transfer_forum_root'] = 'Osnovni direktorijum foruma.';
$txt['attachment_transfer_no_room'] = 'Dostignuta veličina direktorijuma ili broj datoteka.';
$txt['attachment_transfer_no_find'] = 'Nisu pronađene datoteke za prenos.';
$txt['attachments_transferred'] = '%1$d files were transferred to %2$s';
$txt['attachments_not_transferred'] = '%1$d files were not transferred.';
$txt['attachment_transfer_no_dir'] = 'Ili izvorni direktorijum ili neke od ciljnih opcija nisu izabrane.';
$txt['attachment_transfer_same_dir'] = 'Ne možete izabrati jedan dirktorijum kao izvorni i kao ciljni.';
$txt['attachment_transfer_progress'] = 'Molimo sačekajte, prenos u toku.';

$txt['mods_cat_avatars'] = 'Avatari';
$txt['avatar_directory'] = 'Direktorijum avatara';
$txt['avatar_directory_wrong'] = 'The Avatars directory is not valid. This will cause several issues with your forum.';
$txt['avatar_url'] = 'URL avatara';
$txt['avatar_max_width_external'] = 'Najveća širina spoljašnjeg avatara';
$txt['avatar_max_height_external'] = 'Najveća visina spoljašnjeg avatara';
$txt['avatar_action_too_large'] = 'Ako je avatar prevelik...';
$txt['option_refuse'] = 'Odbij ga';
$txt['option_css_resize'] = 'Resize it in the users\' browser';
$txt['option_download_and_resize'] = 'Preuzmi ga i promenu mu veličinu na serveru';
$txt['avatar_max_width_upload'] = 'Najveća širina dostavljenog avatara';
$txt['avatar_max_height_upload'] = 'Najveća visina dostavljenog avatara';
$txt['avatar_resize_upload'] = 'Promeni veličinu prevelikim avatarima';
$txt['avatar_resize_upload_note'] = '(zahteva GD modul ili ImageMagick uz IMagick ili MagickWand)';
$txt['avatar_download_png'] = 'Koristi PNG za smanjene avatare';
$txt['avatar_img_enc_warning'] = 'Trenutno nisu ni GD modul niti ImageMagick instalirani. Neke postavke avatara su trenutno onemogućene.';
$txt['avatar_external'] = 'Spoljašnji avatari';
$txt['avatar_upload'] = 'Dostavljeni avatari';
$txt['avatar_server_stored'] = 'Avatari uskladišteni na serveru';
$txt['avatar_server_stored_groups'] = 'Korisničke grupe kojima je dozvoljeno da izaberu avatar uskladišten na serveru';
$txt['avatar_upload_groups'] = 'Korisničke grupe kojima je dozvoljeno da dostave avatar';
$txt['avatar_external_url_groups'] = 'Korisničke grupe kojima je dozvoljeno da izaberu spoljašnji URL';
$txt['avatar_select_permission'] = 'Izaberite dozvole za svaku grupu';
$txt['avatar_download_external'] = 'Preuzmi avatar sa datog URL-a';
$txt['option_specified_dir'] = 'Poseban direktorijum...';
$txt['custom_avatar_dir_wrong'] = 'The Avatars directory is not valid. This will prevent avatars from working properly.';
$txt['custom_avatar_dir'] = 'Direktorijum za dostavu';
$txt['custom_avatar_dir_desc'] = 'Ne bi trebao da bude isti kao i direktorijum za avatare uskladištene na serveru.';
$txt['custom_avatar_url'] = 'URL za dostavljanje';
$txt['custom_avatar_check_empty'] = 'Prilagođeni avatar direktorijum koji ste naveli je možda prazan ili nevažeći.Molimo vas da proverite jesu li postavke ispravne.';
$txt['avatar_reencode'] = 'Rekodiraj potencijalno opasne avatare';
$txt['avatar_paranoid_warning'] = 'Opsežna bezbednosna provera, može rezultirati velikim brojem odbačenih avatara.';
$txt['avatar_paranoid'] = 'Obavlja jaku sigurnosnu proveru priloženih avatara';
$txt['gravatar_settings'] = 'Gravatars (Globally Recognized Avatars)';
$txt['gravatarEnabled'] = 'Enable Gravatars for forum users?';
$txt['gravatarOverride'] = 'Force Gravatars to be used instead of normal avatars?';
$txt['gravatarAllowExtraEmail'] = 'Allow storing an extra email address for Gravatars?';
$txt['gravatarMaxRating'] = 'Maximum allowed rating?';
$txt['gravatar_maxG'] = 'G rated (Generally acceptable)';
$txt['gravatar_maxPG'] = 'PG rated (Parental Guidance)';
$txt['gravatar_maxR'] = 'R rated (Restricted)';
$txt['gravatar_maxX'] = 'X rated (Explicit)';
$txt['gravatarDefault'] = 'Default image to show when an email address has no matching Gravatar ';
$txt['gravatar_mm'] = 'A simple, cartoon-style silhouetted outline of a person';
$txt['gravatar_identicon'] = 'A geometric pattern based on an email hash';
$txt['gravatar_monsterid'] = 'A generated \'monster\' with different colors, faces, etc';
$txt['gravatar_wavatar'] = 'Generated faces with differing features and backgrounds';
$txt['gravatar_retro'] = 'Awesome generated, 8-bit arcade-style pixelated faces';
$txt['gravatar_blank'] = 'A transparent PNG image';

$txt['repair_attachments'] = 'Održavanje priloženih datoteka';
$txt['repair_attachments_complete'] = 'Održavanje završeno';
$txt['repair_attachments_complete_desc'] = 'Sve izabrane greške su sada ispravljene';
$txt['repair_attachments_no_errors'] = 'Nema pronađenih grešaka!';
$txt['repair_attachments_error_desc'] = 'Sledeće greške su pronađene prilikom održavanja. Označite kutiju pored grešaka koje želite da ispravite i kliknite nastavi.';
$txt['repair_attachments_continue'] = 'Nastavak';
$txt['repair_attachments_cancel'] = 'Otkaži';
$txt['attach_repair_missing_thumbnail_parent'] = '%1$d sličice nemaju roditeljsku priloženu datoteku';
$txt['attach_repair_parent_missing_thumbnail'] = '%1$dd roditelja je označeno kao da imaju sličice a nemaju';
$txt['attach_repair_file_missing_on_disk'] = '%1$d priloženih datoteka/avatara ima unos ali više ne postoje na disku';
$txt['attach_repair_file_wrong_size'] = '%1$d priloženih datoteka/avatara ima loše prijavljenu veličinu datoteke';
$txt['attach_repair_file_size_of_zero'] = '%1$d priloženih datoteka/avatara su veličine nula na disku. (Biće obrisani)';
$txt['attach_repair_attachment_no_msg'] = '%1$d priloženih datoteka više nema poruku sa kojom su povezani';
$txt['attach_repair_avatar_no_member'] = '%1$d avatara više nema člana sa kojim su povezani';
$txt['attach_repair_wrong_folder'] = '%1$d priloženih datoteka je u pogrešnom direktorijumu';
$txt['attach_repair_files_without_attachment'] = '%1$d files do not have a corresponding entry in the database. (These will be deleted)';

$txt['news_title'] = 'Vesti i infodopisi';
$txt['news_settings_desc'] = 'Ovde možete da promenite podešavanja i dozvole vezane za vesti i liste za e-poštu.';
$txt['news_mailing_desc'] = 'Sa ovog menija možete da pošaljete poruke svim članovima koji su se registrovali i uneli svoje imejl adrese. Možete da promenite spisak slanja ili da svima pošaljete poruke. Korisno ako imate važno obaveštenje/vest.';
$txt['news_error_no_news'] = 'Nothing written';
$txt['groups_edit_news'] = 'Grupe kojima je dozvoljeno da uređuju vesti';
$txt['groups_send_mail'] = 'Grupe kojima je dozvoljeno da šalju infodopise';
$txt['xmlnews_enable'] = 'Omogućiti XML/RSS vesti';
$txt['xmlnews_maxlen'] = 'Najveća dužina poruke:<div class="smalltext">(0 za onemogućivanje, loša ideja.)</div>';
$txt['xmlnews_maxlen_note'] = '(0 to disable, bad idea.)';
$txt['xmlnews_attachments'] = 'Enclose attachments in XML/RSS feeds';
$txt['xmlnews_attachments_note'] = 'Note: Some feed formats will only enclose one attachment per post.';
$txt['editnews_clickadd'] = 'Kliknite ovde da biste dodali još jednu stavku.';
$txt['editnews_remove_selected'] = 'Ukloni izabrano';
$txt['editnews_remove_confirm'] = 'Da li ste sigurni da želite da obrišete izabrane stavke vesti?';
$txt['censor_clickadd'] = 'Kliknite ovde da biste dodali još jednu reč.';

$txt['layout_controls'] = 'Forum';
$txt['logs'] = 'Dnevnici';
$txt['generate_reports'] = 'Napravi izveštaje';

$txt['update_available'] = 'Ažuriranje je dostupno';
$txt['update_message'] = 'Koristite zastarelu verziju SMF-a, koja sadrži neke bagove koji su sada ispravljeni.
	Preporučujemo da <a href="" id="update-link">ažurirate svoj forum</a> na najnoviju verziju što je pre moguće. Postupak traje samo jedan minut!';

$txt['manageposts'] = 'Poruke i teme';
$txt['manageposts_title'] = 'Upravljanje porukama i temama';
$txt['manageposts_description'] = 'Ovde možete da upravljate podešavanjima vezanim za teme i poruke.';

$txt['manageposts_seconds'] = 'sekundi';
$txt['manageposts_minutes'] = 'minuta';
$txt['manageposts_characters'] = 'znakova';
$txt['manageposts_days'] = 'dana';
$txt['manageposts_posts'] = 'poruka';
$txt['manageposts_topics'] = 'tema';

$txt['manageposts_settings'] = 'Podešavanja poruka';
$txt['manageposts_settings_description'] = 'Ovde možete da podesite sve vezano za poruke i slanje poruka.';

$txt['manageposts_bbc_settings'] = 'Bilten Forum kod';
$txt['manageposts_bbc_settings_description'] = 'Bilten Forum kod može da bude korišćen za ulepšavanje poruka na forumu. Na primer, da biste označili reč \'kuća\' otkucajte [b]kuća[/b]. Sve Bilten Forum kod oznake su okružene uglastim zagradama (\'[\' i \']\').';
$txt['manageposts_bbc_settings_title'] = 'Podešavanja Bilten Forum koda';

$txt['manageposts_topic_settings'] = 'Podešavanja tema';
$txt['manageposts_topic_settings_description'] = 'Ovde možete da podesite sva podešavanja vezana za teme.';

$txt['managedrafts_settings'] = 'Postavke nacrta';
$txt['managedrafts_settings_description'] = 'Ovde možete da podesite sva podešavanja vezana za  nacrte.';
$txt['manage_drafts'] = 'Nacrti';

$txt['removeNestedQuotes'] = 'Ukloni ugnježdene citate prilikom citata';
$txt['disable_wysiwyg'] = 'Onemogući WYSIWYG editor';
$txt['max_messageLength'] = 'Najviše dozvoljenih karaktera u porukama';
$txt['max_messageLength_zero'] = '0 za neograničeno.';
$txt['convert_to_mediumtext'] = 'Your database is not configured to accept messages longer than 65535 characters. Please use the <a href="%1$s">database maintenance</a> page to convert the database and then come back to increase the maximum allowed post size.';
$txt['topicSummaryPosts'] = 'Broj prikazanih poruka pri odgovaranju na temu';
$txt['spamWaitTime'] = 'Proteklih sekundi između slanja poruka sa iste IP adrese';
$txt['edit_wait_time'] = 'Vreme dozvoljeno za uređivanje';
$txt['edit_disable_time'] = 'Najveći period vremena nakon slanja tokom kojeg je omogućena izmena';
$txt['preview_characters'] = 'Maksimalna dužina prvog/poslednjeg pregleda poruke';
$txt['preview_characters_units'] = 'znakova';
$txt['quote_expand'] = 'Minimum quote height to add an expand link on large quotes';
$txt['quote_expand_pixels_units'] = 'pixels';
$txt['message_index_preview_first'] = 'When using post previews, show the text of the first post';
$txt['message_index_preview_first_desc'] = 'Leave unchecked to show the text of the last post instead';
$txt['show_user_images'] = 'Show user avatars in message view';
$txt['show_blurb'] = 'Show personal text in message view';
$txt['hide_post_group'] = 'Hide post group titles for grouped members';
$txt['hide_post_group_desc'] = 'Enabling this will not display a member\'s post group title on the message view if they are assigned to a non-post based group.';
$txt['subject_toggle'] = 'Show subjects in topics.';
$txt['show_profile_buttons'] = 'Show view profile button under post';
$txt['show_modify'] = 'Show last modification date on modified posts';

$txt['enableBBC'] = 'Omogući bilten forum kod (BBC)';
$txt['enablePostHTML'] = 'Omogući <em>osnovni</em> HTML u porukama';
$txt['autoLinkUrls'] = 'Automatski linkuj poslate URL-ove';
$txt['disabledBBC'] = 'Dozvoljene BBC oznake';
$txt['legacyBBC'] = 'Legacy BBC tags';
$txt['bbcTagsToUse'] = 'Dozvoljene BBC oznake';
$txt['enabled_bbc_select'] = 'Select the tags which are allowed to be used';
$txt['enabled_bbc_select_all'] = 'Izaberi sve oznake';
$txt['groups_can_use'] = 'Membergroups allowed to use %1$s';

$txt['enableParticipation'] = 'Omogući učešće ikona';
$txt['oldTopicDays'] = 'Vreme nakon kojeg se prikazuje upozorenje o staroj temi prilikom odgovaranja';
$txt['defaultMaxTopics'] = 'Najveći broj tema prikazanih na jednoj stranici foruma';
$txt['defaultMaxMessages'] = 'Najveći broj poruka prikazanih na jednoj stranici teme';
$txt['disable_print_topic'] = 'Disable print topic feature';
$txt['enableAllMessages'] = 'Najveći broj odgovora u temi za prikazivanje &quot;Svih&quot; poruka';
$txt['enableAllMessages_zero'] = '0 za neprikazivanje &quot;Sve&quot;';
$txt['disableCustomPerPage'] = 'Onemogući prilagođavanje broja tema/poruka po strani';
$txt['enablePreviousNext'] = 'Omogući linkove ka prethodnoj/sledećoj temi';

$txt['not_done_title'] = 'Još uvek nije gotovo!';
$txt['not_done_reason'] = 'Da bi se izbeglo preopterećivanje servera, proces je privremeno pauziran.  Trebalo bi da se nastavi za par sekundi. Ako se ne nastavi, kliknite na nastavi ispod.';
$txt['not_done_continue'] = 'Nastavak';

$txt['general_settings'] = 'Opšte';
$txt['database_settings'] = 'Baza podataka';
$txt['cookies_sessions_settings'] = 'Kolačići i sesije';
$txt['security_settings'] = 'Security';
$txt['caching_settings'] = 'Keširanje';
$txt['export_settings'] = 'Data Export';
$txt['load_balancing_settings'] = 'Ravnoteža opterećenja';
$txt['phpinfo_settings'] = 'PHP Info';
$txt['phpinfo_localsettings'] = 'Lokalna podešavanja';
$txt['phpinfo_defaultsettings'] = 'Podrazumevana podešavanja';
$txt['phpinfo_itemsettings'] = 'Podešavanja';

$txt['language_configuration'] = 'Jezici';
$txt['language_description'] = 'Ovaj odeljak Vam omogućava uređivanje jezika instaliranih u Vašem forumu i skidanje novih sa Simple Machines veb sajta. Takođe ovde možete izmeniti postavke vezane za jezik.';
$txt['language_edit'] = 'Izmeni jezike';
$txt['language_add'] = 'Dodaj jezik';
$txt['language_settings'] = 'Podešavanja';
$txt['could_not_language_backup'] = 'A backup could not be made before removing this language pack. No changes have been made at this time as a result (either change the permissions so Packages/backup can be written to, or turn off backups - not recommended)';

$txt['advanced'] = 'Napredno';
$txt['simple'] = 'Prosto';

$txt['admin_news_newsletter_queue_done'] = 'The newsletter has been added to the mail queue successfully.';
$txt['admin_news_select_recipients'] = 'Izaberite ko bi trebalo da primi kopiju infodopisa.';
$txt['admin_news_select_group'] = 'Grupe članova';
$txt['admin_news_select_group_desc'] = 'Izaberite grupe koje će primiti infodopis.';
$txt['admin_news_select_members'] = 'članova';
$txt['admin_news_select_members_desc'] = 'Dodatni članovi koji će primiti infodopis.';
$txt['admin_news_select_excluded_members'] = 'Isključeni članovi';
$txt['admin_news_select_excluded_members_desc'] = 'Članovi koji ne bi trebalo da prime infodopis.';
$txt['admin_news_select_excluded_groups'] = 'Isključene grupe';
$txt['admin_news_select_excluded_groups_desc'] = 'Izaberite grupe koje definitivno ne bi trebalo da prime infodopis.';
$txt['admin_news_select_email'] = 'Imejl adrese';
$txt['admin_news_select_email_desc'] = 'Spisak imejl adresa odvojenih tačka-zarezom koje će primiti infodopis. (na pr. adresa1; adresa2) Ovo je dodatak prethodno izlistanim grupama iznad.';
$txt['admin_news_select_override_notify'] = 'Pregazi podešavanja o obaveštavanju';
// Use entities in below.
$txt['admin_news_cannot_pm_emails_js'] = 'Ne možete da pošaljete privatnu poruku imejl adresi. Ako nastavite, sve unete imejl adrese biće ignorisane.\\n\\nDa li ste sigurni da želite da uradite ovo?';

$txt['mailqueue_browse'] = 'Pregledaj red za slanje';
$txt['mailqueue_settings'] = 'Podešavanja';
$txt['mailqueue_test'] = 'Send Test';

$txt['admin_search'] = 'Brza pretraga';
$txt['admin_search_type_internal'] = 'Zadatak/Podešavanje';
$txt['admin_search_type_member'] = 'Član';
$txt['admin_search_type_online'] = 'Online priručnik';
$txt['admin_search_go'] = 'Idi!';
$txt['admin_search_results'] = 'Rezultati pretrage';
$txt['admin_search_results_desc'] = 'Rezultati pretrage za: &quot;%1$s&quot;';
$txt['admin_search_results_again'] = 'Traži ponovo';
$txt['admin_search_results_none'] = 'Nema pronađenih rezultata!';

$txt['admin_search_section_sections'] = 'Odeljak';
$txt['admin_search_section_settings'] = 'Podešavanje';

$txt['mods_cat_features'] = 'Opšte';
$txt['antispam_title'] = 'Zaštita od spama';
$txt['mods_cat_modifications_misc'] = 'Razno';
$txt['mods_cat_layout'] = 'Izgled';
$txt['moderation_settings_short'] = 'Uređivanje';
$txt['signature_settings_short'] = 'Potpisi';
$txt['custom_profile_shorttitle'] = 'Polja u profilu';
$txt['pruning_title'] = 'Brisanje dnevnika';
$txt['pruning_desc'] = 'The following options are useful for keeping your logs from growing too big, because most of the time older entries are not really of that much use.';
$txt['log_settings'] = 'Log Settings';

$txt['boards_edit'] = 'Izmena foruma';
$txt['mboards_new_cat'] = 'Napravi novu kategoriju';
$txt['manage_holidays'] = 'Upravljanje praznicima';
$txt['calendar_settings'] = 'Podešavanja kalendara';
$txt['search_weights'] = 'Težine';
$txt['search_method'] = 'Način pretrage';

$txt['smiley_sets'] = 'Postavke smajlija';
$txt['smileys_add'] = 'Dodaj smajli';
$txt['smileys_edit'] = 'Izmeni smajlije';
$txt['smileys_set_order'] = 'Postavi raspored smajlija';
$txt['icons_edit_message_icons'] = 'Izmeni ikone poruke';

$txt['membergroups_new_group'] = 'Dodaj grupu članova';
$txt['membergroups_edit_groups'] = 'Izmeni grupu članova';
$txt['permissions_groups'] = 'Dozvole po grupama članova';
$txt['permissions_boards'] = 'Dozvole po forumima';
$txt['permissions_profiles'] = 'Izmeni profile';
$txt['permissions_post_moderation'] = 'Uređivanje poruka';

$txt['browse_packages'] = 'Pregledaj pakete';
$txt['download_packages'] = 'Preuzmi pakete';
$txt['installed_packages'] = 'Instalirani paketi';
$txt['package_file_perms'] = 'Dozvole datoteka';
$txt['package_settings'] = 'Opcije';
$txt['themeadmin_admin_title'] = 'Upravljanje i instaliranje';
$txt['themeadmin_list_title'] = 'Podešavanja tema';
$txt['themeadmin_reset_title'] = 'Opcije članova';
$txt['themeadmin_edit_title'] = 'Izmeni teme';
$txt['admin_browse_register_new'] = 'Registruj novog članova';

$txt['search_engines'] = 'Pretraživači';
$txt['spiders'] = 'paukova';
$txt['spider_logs'] = 'Dnevnici';
$txt['spider_stats'] = 'Statistika';

$txt['paid_subscriptions'] = 'Plaćene pretplate';
$txt['paid_subs_view'] = 'Pogledaj pretplate';

$txt['hooks_title_list'] = 'Integracijske Kuke';
$txt['hooks_field_hook_name'] = 'Hook Name';
$txt['hooks_field_function_name'] = 'Ime Funkcije';
$txt['hooks_field_function_method'] = 'Function is a method and its class is instantiated';
$txt['hooks_field_function'] = 'Funkcija';
$txt['hooks_field_included_file'] = 'Included file';
$txt['hooks_field_file_name'] = 'Ime datoteke';
$txt['hooks_field_hook_exists'] = 'Status';
$txt['hooks_active'] = 'Postoji';
$txt['hooks_disabled'] = 'Ugašeno';
$txt['hooks_missing'] = 'Nije pronađeno';
$txt['hooks_no_hooks'] = 'Trenutno ne postoje kuke u sistemu.';
$txt['hooks_button_remove'] = 'Ukloni';
$txt['hooks_disable_instructions'] = 'Kliknite na ikonu statusa da biste omogućili ili onemogućili kuku';
$txt['hooks_disable_legend'] = 'Legenda';
$txt['hooks_disable_legend_exists'] = 'kuka postoji i aktivna je';
$txt['hooks_disable_legend_disabled'] = 'кuka postoji ali je onemogućena';
$txt['hooks_disable_legend_missing'] = 'kuka nije pronađena';
$txt['hooks_reset_filter'] = 'No filter';

$txt['board_perms_allow'] = 'Dozvoli';
$txt['board_perms_ignore'] = 'Zanemari';
$txt['board_perms_deny'] = 'Zabrani';
$txt['all_boards_in_cat'] = 'Svi forumi u ovoj kategoriji';

$txt['likes_like'] = '(untranslated)';

$txt['mention'] = 'Membergroups allowed to mention users';

$txt['notifications'] = 'Obaveštenja i mejlovi';
$txt['notify_settings'] = 'Podešavanja obaveštavanja';
$txt['notifications_desc'] = 'This page allows you to set the default notification options for users.';

$txt['enable_sm_stats'] = 'Allow Stat Collection';

?>