<?php
// Version: 2.1 RC3; ManageBoards

$txt['boards_and_cats'] = 'Beheer boards en categorie&euml;n';
$txt['order'] = 'Positie';
$txt['full_name'] = 'Volledige naam';
$txt['name_on_display'] = 'Dit is de naam die bij je berichten verschijnt.';
$txt['boards_and_cats_desc'] = 'Bewerk je categorie&euml;n en boards hier. Meerdere moderators voer je als volgt in: <em>&quot;gebruikersnaam,gebruikersnaam&quot;</em> (de gebruikersnamen en niet de getoonde namen!)<br />Om een nieuw board aan te maken, klik je op de \'Voeg board toe\' knop. Om het nieuwe board een sub-board van een huidig board te maken, selecteer je \'Kind van...\' bij de \'Positie\' keuzelijst bij het aanmaken van een nieuw board.';
$txt['parent_members_only'] = 'Reguliere leden';
$txt['parent_guests_only'] = 'Ongeregistreerde gasten';
$txt['cat_delete_confirm'] = 'Weet je zeker dat je deze categorie wilt verwijderen?';
$txt['board_delete_confirm'] = 'Weet je zeker dat je dit board wilt verwijderen?';

$txt['cat_edit'] = 'Categorie bewerken';
$txt['collapse_enable'] = 'Inklapbaar';
$txt['collapse_desc'] = 'Sta gebruikers toe om deze categorie in te klappen';
$txt['cat_modify'] = '(bewerk)';

$txt['mboards_order_after'] = 'Na ';
$txt['mboards_order_inside'] = 'Tussen ';
$txt['mboards_order_first'] = 'Als eerste';

$txt['mboards_new_board'] = 'Board toevoegen';
$txt['mboards_new_cat_name'] = 'Nieuwe categorie';
$txt['mboards_add_cat_button'] = 'Voeg categorie toe';
$txt['mboards_new_board_name'] = 'Nieuw board';

$txt['mboards_name'] = 'Naam';
$txt['mboards_modify'] = 'bewerk';
$txt['mboards_permissions'] = 'permissies';
// Don't use entities in the below string.
$txt['mboards_permissions_confirm'] = 'Weet je zeker dat je voor dit board wilt omschakelen naar lokale permissies?';

$txt['mboards_delete_cat'] = 'Verwijder categorie';
$txt['mboards_delete_board'] = 'Verwijder board';

$txt['mboards_delete_cat_contains'] = 'Het verwijderen van deze categorie zal ook de boards onder deze categorie verwijderen, inclusief alle topics, berichten en bijlagen binnen elk forum';
$txt['mboards_delete_option1'] = 'Verwijder categorie en alle boards daarbinnen.';
$txt['mboards_delete_option2'] = 'Verwijder categorie en verplaatst alle boards die daarin zitten';
$txt['mboards_delete_board_contains'] = 'Het verwijderen van dit board zal ook de sub-boards daaronder verplaatsen, inclusief alle topics, berichten en bijlages binnen elk van die boards';
$txt['mboards_delete_board_option1'] = 'Verwijder board en verplaats de sub-boards daarvan naar categorie-niveau.';
$txt['mboards_delete_board_option2'] = 'Verwijder board en verplaats de sub-boards daarvan naar';
$txt['mboards_delete_what_do'] = 'Selecteer wat je wilt doen met deze boards';
$txt['mboards_delete_confirm'] = 'Bevestig';
$txt['mboards_delete_cancel'] = 'Annuleer';

$txt['mboards_category'] = 'Categorie';
$txt['mboards_description'] = 'Beschrijving';
$txt['mboards_description_desc'] = 'Een korte beschrijving van je board. HTML is niet toegestaan, je kunt de volgende BBC codes gebruiken: {allowed_tags}';
$txt['mboards_cat_description_desc'] = 'Een korte beschrijving van de categorie. HTML is niet toegestaan, je kunt de volgende BBC tags gebruiken: {allowed_tags}';
$txt['mboards_groups'] = 'Toegestane ledengroepen';
$txt['mboards_groups_desc'] = 'Ledengroepen toegestaan in dit board.<br /><em>Let op: als een lid ook maar deel is van &eacute;&eacute;n van de geselecteerde ledengroepen, heeft hij toegang tot dit board.</em>';
$txt['mboards_groups_regular_members'] = 'Deze groep bevat alle leden die niet een andere primaire ledengroep toegekend gekregen hebben.';
$txt['mboards_groups_post_group'] = 'Deze groep is een bericht-gerelateerde groep.';
$txt['mboards_moderators'] = 'Beheerders';
$txt['mboards_moderators_desc'] = 'Leden met speciale rechten in dit board.';
$txt['mboards_moderator_groups'] = 'Moderatie groepen';
$txt['mboards_moderator_groups_desc'] = 'Groepen waarvan de leden moderatie rechten hebben op dit board. Let op dat dit alleen mogelijk is voor groepen die niet bericht-gerelateerd zijn en niet "verborgen"';
$txt['mboards_count_posts'] = 'Berichten tellen';
$txt['mboards_count_posts_desc'] = 'Reacties en topics verhogen het aantal geplaatste berichten van dit lid.';
$txt['mboards_unchanged'] = 'Onveranderd';
$txt['mboards_theme'] = 'Boardthema';
$txt['mboards_theme_desc'] = 'Dit staat je toe om het thema aan te passen, enkel binnen dit board.';
$txt['mboards_theme_default'] = '(standaard)';
$txt['mboards_override_theme'] = 'Overschrijf het thema van dit lid';
$txt['mboards_override_theme_desc'] = 'Gebruik het thema van dit board, zelfs als het lid voor een ander thema gekozen heeft.';

$txt['mboards_redirect'] = 'Doorschakelen naar adres';
$txt['mboards_redirect_desc'] = 'Schakel deze optie in om iemand die dit board aanklikt door te schakelen naar een andere site.';
$txt['mboards_redirect_url'] = 'Adres om naar door te schakelen';
$txt['mboards_redirect_url_desc'] = 'Bijvoorbeeld: &quot;https://www.simplemachines.org&quot;.';
$txt['mboards_redirect_reset'] = 'Reset aantal klikken';
$txt['mboards_redirect_reset_desc'] = 'Als je dit selecteert zal het aantal klikken op nul gezet worden.';
$txt['mboards_current_redirects'] = 'momenteel: %1$s';

$txt['mboards_order_before'] = 'Voor';
$txt['mboards_order_child_of'] = 'Kind van';
$txt['mboards_order_in_category'] = 'In categorie';
$txt['mboards_current_position'] = 'Huidige positie';
$txt['no_valid_parent'] = 'Board %1$s heeft geen geldige bovenliggend board. Gebruik de functie \'Zoek en repareer fouten\' om dit te verhelpen.';

$txt['mboards_recycle_disabled_delete'] = 'Opmerking: je dient eerst een andere board als recycleboard in te stellen of recyclen uit te zetten voordat je dit board kunt verwijderen.';

$txt['mboards_settings_desc'] = 'Bewerk alle board en categorie instellingen.';
$txt['groups_manage_boards'] = 'Groepen die boards en categorie&euml;n mogen bewerken';
$txt['mboards_settings_submit'] = 'Opslaan';
$txt['recycle_enable'] = 'Recyclen van berichten aanzetten';
$txt['recycle_board'] = 'Board voor gerecyclede berichten';
$txt['redirect_board_desc'] = 'Een board dat een gebruiker doorverwijst als deze het board bezoekt';
$txt['recycle_board_unselected_notice'] = 'Je hebt het recyclen van topics ingeschakeld zonder te specificeren in welk board ze geplaatst moeten worden. Deze feature zal niet beschikbaar worden tot je een board gespecificeerd hebt.';
$txt['boardindex_max_depth'] = 'Maximale diepte van sub-boards om te controleren op nieuwe berichten, etc.';
$txt['countChildPosts'] = 'Tel berichten van sub-boards bij het totaal van de hoofdboards';
$txt['allow_ignore_boards'] = 'Sta toe dat boards genegeerd worden';
$txt['deny_boards_access'] = 'Activeer de optie om ledengroepen toegang tot boards te ontzeggen';
$txt['boardsaccess_option_desc'] = 'Voor iedere permissie kun je kiezen uit "Toestaan" (T), "Niet-toestaan" (N), of <span style="color: red;">"Ontzeggen" (O)</span>.<br><br>Onthoud dat bij het ontzeggen van een permissie, ieder lid - moderator of niet - in die groep die permissie zal worden ontzegd.<br >Om deze reden dien je voorzichtig met het ontzeggen van permissies om te gaan; gebruik ze alleen wanneer <strong>noodzakelijk</strong>. "Niet toestaan" is een voorzichtiger alternatief, dat alleen ontzegd tenzij de permissie op andere wijze wordt toegekend.';

$txt['mboards_select_destination'] = 'Selecteer de gewenste positie voor het board \'<strong>%1$s</strong>\'';
$txt['mboards_cancel_moving'] = 'Verplaatsen afbreken';
$txt['mboards_move'] = 'verplaats';

$txt['mboards_no_cats'] = 'Er zijn momenteel geen categorie&euml;n of boards geconfigureerd.';

?>