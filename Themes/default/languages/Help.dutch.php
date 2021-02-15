<?php
// Version: 2.1 RC3; Help

global $helptxt, $scripturl;

$txt['close_window'] = 'Sluit venster';

$helptxt['manage_boards'] = '
	<strong>Boards bewerken</strong><br />
	In dit menu kun je boards aanmaken, rangschikken en verwijderen, en de categorie&euml;n
	erboven aanpassen. Als je bijvoorbeeld een brede site hebt
	die informatie biedt op het gebied van &quot;Sport&quot;, &quot;Auto\'s&quot; en &quot;Muziek&quot;, zouden
	deze je categorie&euml;n worden. In elk van deze
	categorie&euml;n zou je waarschijnlijk een hi&euml;rarchie van &quot;sub-categorie&euml;n willen maken,
	oftewel de &quot;boards&quot; voor de onderwerpen binnen die categorie. Het is een simpele hi&euml;rarchie, met deze structuur:<br />
	<ul class="normallist">
		<li>
			<strong>Sport</strong>
			&nbsp;- Een &quot;categorie&quot;
		</li>
		<ul class="normallist">
			<li>
				<strong>Basketbal</strong>
				&nbsp;- Een board in de categorie &quot;Sport&quot;
			</li>
			<ul class="normallist">
				<li>
					<strong>Uitslagen</strong>
					&nbsp;- Een sub-board in het board &quot;Basketbal&quot;
				</li>
			</ul>
			<li><strong>Voetbal</strong>
			&nbsp;- Een board onder de categorie &quot;Sport&quot;</li>
		</ul>
	</ul>
	Met categorie&euml;n kun je een forum in globale onderwerpen verdelen (&quot;Auto\'s,
	Sport&quot;), en de &quot;boards&quot; daarin zijn de eigenlijke onderwerpen waarin
	leden hun berichten kunnen plaatsen. Een gebruiker die ge&iuml;nteresseerd is in Pintos
	zou een bericht kunnen plaatsen in &quot;Autos -> Pinto&quot;. Categorie&euml;n zorgen ervoor dat mensen
	snel kunnen vinden waarin ze ge&iuml;nteresseerd zijn: in plaats van een &quot;Winkel&quot; heb je
	heb je een &quot;Doe-het-zelf-winkel&quot; en een &quot;Kledingswinkel&quot; waar je naar toe kunt gaan. Dit vereenvoudigt je
	zoektocht naar &quot;regenpijplijm&quot; omdat je dan direct naar de Doe-het-zelf gaat
	in plaats van de Kledingwinkel (waar het onwaarschijnlijk is
	om regenpijplijm te vinden).<br />
	Zoals hierboven al is opgemerkt, is een board een hoofdonderwerp in een bredere categorie.
	Als je wilt discussi&euml;ren over &quot;Pinto\'s&quot;, dan zou je naar de &quot;Auto\'s&quot; categorie gaan en
	dan naar het &quot;Pinto&quot; board gaan om daar je mening te plaatsen.<br />
	De beheerfuncties voor dit menu item zijn het aanmaken van nieuwe boards
	in elke categorie, het rangschikken van boards (plaats &quot;Pinto&quot; achter &quot;Chevy&quot;), of
	het verwijderen van een volledig board.';

$helptxt['edit_news'] = '
	<ul class="normallist">
		<li>
			<strong>News</strong><br>
			This page allows you to set the text for news items displayed on the Board Index page.
			Add any item you want (e.g., &quot;Don\'t miss the conference this Tuesday&quot;). Each news item is displayed randomly and should be placed in a separate box.
		</li>
		<li>
			<strong>Newsletters</strong><br>
			This page allows you to send out newsletters to the members of the forum via personal message or email. First select the groups that you want to receive the newsletter, and those you don\'t want to receive the newsletter. If you wish, you can add additional members and email addresses that will receive the newsletter. Finally, input the message you want to send and select whether you want it to be sent to members as a personal message or as an email.
		</li>
		<li>
			<strong>Settings</strong><br>
				This page contains a few settings that relate to news and newsletters, including selecting which groups can edit forum news or send newsletters. There is also a setting to configure whether you want news feeds enabled on the forum, as well as a setting to configure the length (how many characters are displayed) for each new post that shows in the feed.
		</li>
	</ul>';

$helptxt['view_members'] = '
	<ul class="normallist">
		<li>
			<strong>View all Members</strong><br>
			View all members in the board. You are presented with a hyperlinked list of member names. You may click
			on any of the names to find details of the members (homepage, age, etc.), and as Administrator
			you are able to modify these parameters. You have complete control over members, including the
			ability to delete them from the forum.<br><br>
		</li>
		<li>
			<strong>Awaiting approval</strong><br>
			This page is only shown if you have enabled admin approval of all new registrations. Anyone who registers to join your
			forum will only become a full member once they have been approved by an admin. The page lists all those members who
			are still awaiting approval, along with their email and IP address. You can choose to either accept or reject (delete)
			any member on the list by checking the box next to the member and choosing the action from the drop-down box at the bottom
			of the page. When rejecting a member you can choose to delete the member either with or without notifying them of your decision.<br><br>
		</li>
		<li>
			<strong>Awaiting activation</strong><br>
			This page will only be visible if you have email activation of new member accounts enabled on the forum. This page will list all
			members who have still not activated their new accounts. From this page you can choose to either accept, reject or remind
			members with outstanding registrations. As above you can also choose to email the member to inform them of the
			action you have taken.<br><br>
		</li>
	</ul>';

$helptxt['ban_members'] = '<strong>Leden verbannen</strong><br />
	SMF biedt de mogelijkheid om gebruikers te &quot;verbannen&quot;, zodat mensen die vertrouwen op het forum hebben geschonden
	door te spammen, mensen lastig te vallen, etc. worden geweerd. Als beheerder kun je,
	wanneer je berichten bekijkt, het IP-adres zien dat een lid gebruikte op het moment dat dat bericht geplaatst werd. In de banlijst
	typ je simpelweg dat IP-adres in, sla je de trigger op, en kunnen ze niet langer vanaf dat IP-adres berichten plaatsen.<br />Ook kun je
	mensen op gebruikersnaam, hostname en e-mailadres verbannen.';

$helptxt['featuresettings'] = '<strong>Features en opties bewerken</strong><br />
	Er zijn een aantal features in deze sectie die naar jouw inzicht gewijzigd kunnen worden.';

$helptxt['modsettings'] = '<strong>Modificatie-instellingen</strong><br />
	Deze sectie zou alle instellingen moeten bevatten die de op jouw forum ge&iuml;nstalleerde modificaties hebben toegevoegd.';

$helptxt['time_format'] = '<strong>Time Format</strong><br>
	You have the ability to adjust how the time and date look for yourself. There are a lot of little letters, but it\'s quite simple.
	The conventions follow PHP\'s strftime function and are described as below (more details can be found at <a href="https://php.net/manual/function.strftime.php" target="_blank" rel="noopener">php.net</a>).<br>
	<br>
	The following characters are recognized in the format string: <br>
	<span class="smalltext">
	&nbsp;&nbsp;%a - abbreviated weekday name<br>
	&nbsp;&nbsp;%A - full weekday name<br>
	&nbsp;&nbsp;%b - abbreviated month name<br>
	&nbsp;&nbsp;%B - full month name<br>
	&nbsp;&nbsp;%d - day of the month (01 to 31) <br>
	&nbsp;&nbsp;%D<strong>*</strong> - same as %m/%d/%y <br>
	&nbsp;&nbsp;%e<strong>*</strong> - day of the month (1 to 31) <br>
	&nbsp;&nbsp;%H - hour using a 24-hour clock (range 00 to 23) <br>
	&nbsp;&nbsp;%I - hour using a 12-hour clock (range 01 to 12) <br>
	&nbsp;&nbsp;%m - month as a number (01 to 12) <br>
	&nbsp;&nbsp;%M - minute as a number <br>
	&nbsp;&nbsp;%p - either &quot;am&quot; or &quot;pm&quot; according to the given time<br>
	&nbsp;&nbsp;%R<strong>*</strong> - time in 24 hour notation <br>
	&nbsp;&nbsp;%S - second as a decimal number <br>
	&nbsp;&nbsp;%T<strong>*</strong> - current time, equal to %H:%M:%S <br>
	&nbsp;&nbsp;%y - 2 digit year (00 to 99) <br>
	&nbsp;&nbsp;%Y - 4 digit year<br>
	&nbsp;&nbsp;%% - a literal \'%\' character <br>
	<br>
	<em>* Does not work on Windows-based servers.</em></span>';

$helptxt['live_news'] = '<strong>Live announcements</strong><br>
	This box shows recently updated announcements from <a href="https://www.simplemachines.org/" target="_blank" rel="noopener">www.simplemachines.org</a>.
	You should check here every now and then for updates, new releases, and important information from Simple Machines.';

$helptxt['registrations'] = '<strong>Registratiebeheer</strong><br />
	Deze sectie bevat alle functies die nodig zouden kunnen zijn voor het beheer van nieuwe registraties op het forum. Het bevat tot vier secties
	die zichtbaar zijn, afhankelijk van je instellingen. Te weten:<br /><br />
	<ul class="normallist">
		<li>
			<strong>Registreren nieuw lid</strong><br />
			Je kunt hier zelf leden registreren. Dit kan handig zijn bij forums waar het registreren van nieuwe leden dicht gezet is,
			of in gevallen waar de admin een test account wil aanmaken. Als de optie is geactiveerd dat het nieuwe lid een e-mail krijgt
			waarin een link is bijgesloten, dient men die te volgen om de account te activeren. Je kunt op deze manier ook leden een nieuw
			wachtwoord mailen indien daarom wordt verzocht.<br /><br />
		</li>
		<li>
			<strong>Registratie-overeenkomst bewerken</strong><br />
			Hiermee kun je de tekst instellen die wordt getoond wanneer leden zich registreren op je forum.
			Je kunt de standaard registratie-overeenkomst, die wordt gelever met SMF, naar believen aanpassen.
		</li>
		<li>
			<strong>Gereserverde namen bewerken</strong><br />
			Middels deze interface kun je woorden of namen specificeren die niet gebruikt mogen worden in namen van leden.<br /><br />
		</li>
		<li>
			<strong>Instellingen</strong><br />
			Deze sectie is alleen zichtbaar als je de \'Beheer forum en database\' permissie hebt. Vanaf dit scherm kun je instellen welke registratiemethode
			op je forum wordt gebruikt alsmede andere registratie-gerelateerde instellingen.
		</li>
	</ul>';

$helptxt['modlog'] = '<strong>Moderatielog</strong><br />
	Deze sectie stelt leden van het moderatieteam in staat om alle moderatieacties te bekijken die de moderators van het forum hebben uitgevoerd. Om er zeker van te zijn dat
	deze verwijzingen naar activiteiten niet door de moderators kunnen worden gewist, kunnen de ingangen niet worden gewist tot 24 uur na de betreffende activiteit.';
$helptxt['adminlog'] = '<strong>Beheerlog</strong><br />
	Deze sectie stelt leden van het beheerteam in staat tot het bijhouden van een aantal administratieve acties. Om er zeker van te zijn dat
	beheerders deze verwijzingen naar activiteiten niet door beheerders kunnen worden gewist, kunnen de ingangen niet worden gewist tot 24 uur na de betreffende activiteit.';
$helptxt['userlog'] = '<strong>Profile Edits Log</strong><br>
	This page allows members of the admin team to view changes users make to their profiles, and is available from inside a user\'s profile area.';
$helptxt['warning_enable'] = '<strong>Gebruiker-waarschuwingssysteem</strong><br />
	Deze feature stelt leden van het beheer- en moderatieteam in staat om waarschuwingen te geven aan gebruikers, en om aan de hand van de waarschuwingsstatus bepaalde
	functies op het forum voor hen uit te schakelen. Wanneer deze functie wordt ingeschakeld, zal er een extra permissie beschikbaar komen in het permissiesscherm om aan te geven
	welke groepen waarschuwingen mogen geven aan gebruikers. Waarschuwingsniveaus kunnen gewijzigd worden vanuit het profiel van een gebruiker. De volgende mogelijkheden zijn beschikbaar:
	<ul class="normallist">
		<li>
			<strong>Waarschuwingsniveau voor gebruikerstoezicht</strong><br />
			Deze instelling definieert het percentage waarschuwing dat de gebruiker dient te bereiken om automatisch onder toezicht gezet te worden.
			Elke gebruiker met deze status zal in het moderatiecentrum in de gaten worden gehouden.
		</li>
		<li>
			<strong>Waarschuwingniveau voor berichtgoedkeuring</strong><br />
			Alle berichten geplaatst door gebruikers die dit percentage voorbij komen, zullen eerst goedgekeurd moeten worden door een beheerder of moderator van dit forum.
			Dit zal onafhankelijk werken van eventuele permissies die op een specifiek board van toepassing zijn.
		</li>
		<li>
			<strong>Waarschuwingsniveau voor gebruikerstillegging</strong><br />
			Als dit waarschuwingsniveau is bereikt, zal de gebruiker in kwestie geen berichten meer kunnen plaatsen voor een bepaalde tijd.
		</li>
		<li>
			<strong>Maximaal aantal waarschuwingspunten per dag</strong><br />
			Deze instelling limiteert het aantal punten dat een moderator dagelijks kan toevoegen of aftrekken van de waaarschuwingsstatus van een willekeurige gebruiker. Dit
			kan gebruikt worden om een moderator te limiteren tot een bepaalde hoeveelheid acties gedurende een bepaalde tijd. Deze instelling kan ook uitgeschakeld worden door een waarde van nul op te geven. Merk op dat
			gebruikers met beheerderrechten geen hinder ondervinden van deze instelling.
		</li>
	</ul>';
$helptxt['warning_watch'] = 'Deze instelling bepaald welk percentage het waarschuwing niveau dat een deelnemer moet bereiken voordat er een automatische &quot;bewaking&quot; voor de deelnemer wordt ingesteld. Elke deelnemer die &quot;bewaakt&quot; wordt verschijnt in de lijst van bewaakte leden in het moderatie centrum.';
$helptxt['warning_moderate'] = 'Elke deelnemer die deze waarde passeert zal merken dat al zijn berichten eerst door een moderator moeten worden goedgekeurd voordat deze op het forum verschijnen. Dit heeft voorrang boven alle board gerelateerde instellingen voor bericht moderatie.  ';
$helptxt['warning_mute'] = 'Als deze waarde wordt gepasseerd zal de deelnemer merken dat hij verbannen is voor het plaatsen van berichten. Deze deelnemer verliest al zijn rechten om berichten te plaatsen.';
$helptxt['user_limit'] = 'This setting limits the amount of points a moderator may add/remove to any particular member in a twenty four hour period. This
			can be used to limit what a moderator can do in a small period of time. This can be disabled by setting it to a value of zero. Note that
			any members with administrator permissions are not affected by this value.';

$helptxt['error_log'] = '<strong>Foutenlog</strong><br />
	Het foutenlog toont alle fouten die het forum genereert. Het laat alle fouten zien, gesorteerd op datum. De volgorde kun je aanpassen door
	op het zwarte pijltje naast iedere datum. Je kunt ook nog de fouten filteren door op de afbeelding naast iedere foutmelding te klikken.
	Zo kun je bijvoorbeeld per lid filteren. Als een filter actief is, zie je alleen de resultaten die bij dat filter behoren.';
$helptxt['theme_settings'] = '<strong>Thema-instellingen</strong><br />
	Het instellingen scherm laat je alle instellingen van een bepaald thema aanpassen. Je kunt hier bijvoorbeeld de thema directory en URL informatie
	wijzigen maar ook opties aanpassen die betrekking hebben op de lay-out van het forum. De meeste thema\'s hebben een aantal opties die kunnen worden
	geconfigureerd door leden om zo aan hun persoonlijke wensen tegemoet te komen.';
$helptxt['smileys'] = '<strong>Smileys en berichticonen</strong><br />
	Hier kun je smileys en smileysets toevoegen en verwijderen. Denk er aan dat je een smiley in alle sets laat voorkomen als je een smiley in een set toevoegt, anders zou dit
	verwarrend kunnen worden voor leden die verschillende sets gebruiken.<br /><br />

	Je kunt vanuit dit scherm ook de aangepaste berichticonen bewerken, indien je die hebt ingeschakeld op de instellingen-pagina.';
$helptxt['calendar'] = '<strong>Beheer kalender</strong><br />
	Hier kun je de huidige kalenderinstellingen bewerken en feestdagen die op de kalender zichtbaar zijn.';
$helptxt['cal_export'] = 'Exporteert een tekst bestand in het iCal formaat voor importeren in andere kalender applicaties.';
$helptxt['cal_highlight_events'] = 'Met deze instelling kun je evenementen laten markeren op de Mini Kalender, Hoofd Kalender, in allebei of het markeren van evenementen helemaal uitzetten.';
$helptxt['cal_highlight_holidays'] = 'Met deze instelling kun je feestdagen laten markeren op de Mini Kalender, Hoofd Kalender, in allebei of het markeren van feestdagen helemaal uitzetten.';
$helptxt['cal_highlight_birthdays'] = 'Met deze instelling kun je verjaardagen laten markeren op de Mini Kalender, Hoofd Kalender, in allebei of het markeren van verjaardagen helemaal uitzetten.';
$helptxt['cal_disable_prev_next'] = 'Met deze instelling is het mogelijk om de weergave van de drie maand blokken die links op de pagina getoond worden uit te zetten.';
$helptxt['cal_display_type'] = 'Deze instelling geeft je de mogelijkheid om de weergave van de kalender aan te passen.<br><br><strong>Comfortabel:</strong> maakt de weergave van de rijen in de kalender groot.<br><strong>Compact:</strong> maakt de weergave van de rijen in de kalender klein.';
$helptxt['cal_week_links'] = 'Als de optie is geselecteerd zullen er links worden getoond naast elke week in de kalender.';
$helptxt['cal_prev_next_links'] = 'Als deze optie is geselecteerd, worden boven elke maand links getoond om de volgende en vorige maand te gaan.';
// argument(s): $txt['months_short'][1], $txt['months_titles'][1]
$helptxt['cal_short_months'] = 'If this setting is checked, month names within the calendar will be shortened.<br><br><strong>Enabled:</strong> %1$s 1<br><strong>Disabled:</strong> %2$s 1';
// argument(s): $txt['days_short'][1], $txt['days'][1]
$helptxt['cal_short_days'] = 'If this setting is checked, day names within the calendar will be shortened.<br><br><strong>Enabled:</strong> %1$s<br><strong>Disabled:</strong> %2$s';

$helptxt['serversettings'] = '<strong>Server Settings</strong><br>
	Here you can perform some core configuration for your forum. This page includes the database and URL settings, as well as other
	important configuration items such as mail settings and caching. Think carefully whenever editing these settings as an error may
	render the forum inaccessible';
$helptxt['manage_files'] = '
	<ul class="normallist">
		<li>
			<strong>Bekijk bestanden</strong><br />
			Blader door alle bijlagen, avatars en miniatuurweergaven die opgeslagen zijn door SMF.<br /><br />
		</li><li>
			<strong>Bijlage-instellingen</strong><br />
			Configureer waar bijlagen opgeslagen moeten worden en stel restricties voor de bijlagetypen in.<br /><br />
		</li><li>
			<strong>Avatarinstellingen</strong><br />
			Configureer waar avatars opgeslagen worden en stel het aanpassen van avatars in.<br /><br />
		</li><li>
			<strong>Bestandsonderhoud</strong><br />
			Controleer en repareer fouten in de bijlagenmap en verwijder defecte bijlagen.<br /><br />
		</li>
	</ul>';

$helptxt['topicSummaryPosts'] = 'Hier geef je aan hoeveel berichten je totaal op &eacute;&eacute;n pagina wilt zien in een bepaalde topic.';
$helptxt['enableAllMessages'] = 'Stel dit in op het <em>maximaal</em> aantal berichten dat een topic mag hebben voor het tonen van de \'allemaal\'-link. Als dit lager wordt ingesteld dan de &quot;Maximum aantal berichten vertonen op &eacute;&eacute;n pagina&quot;-instelling, zal de link simpelweg nooit getoond worden, terwijl een te hoge instelling het forum zou kunnen vertragen.';
$helptxt['allow_guestAccess'] = 'Als dit vak niet is aangevinkt, zullen gasten niets anders kunnen doen dan de primaire acties - inloggen, registreren, wachtwoordherinnering opvragen, etc. - op je forum. Dit is niet hetzelfde als gasten de toegang verhinderen tot de boards.';
$helptxt['userLanguage'] = 'Wanneer deze optie is ingeschakeld, krijgt de gebruiker de om zelf de taal te kiezen waarin het forum wordt weergegeven. De standaardtaal zal
		hetzelfde blijven.';
$helptxt['trackStats'] = 'Statistieken:<br />Dit zal leden in staat stellen om de meest recentste en meest populaire topics van je forum te kunnen zien.
		Ook zullen diverse andere statistieken worden getoond, zoals het hoogst aantal bezoekers, nieuwe leden en nieuwe topics.<hr />
		Pageviews:<br />Voegt een extra kolom toe aan de statistieken pagina met daarin het aantal pageviews van je forum.';
$helptxt['titlesEnable'] = 'Het activeren van extra titels geeft leden de mogelijkheid om zelf een extra titel onder hun gebruikersnaam te laten zien.
		<br /><em>Bijvoorbeeld:</em><br />Jeff<br />Toffe gast';
$helptxt['onlineEnable'] = 'Deze optie toont een afbeelding waaraan je kunt zien of een lid online of offline is.';
$helptxt['todayMod'] = 'Met deze functie aangevinkt wordt er, indien van toepassing, in de datum &quot;Vandaag&quot; of &quot;Gisteren&quot; weergegeven.
		<strong>Voorbeelden:</strong><br /><br />
		<dt>
			<dt>Uitgeschakeld</dt>
			<dd>3 oktober 2009 om 12:59:18</dd>
			<dt>Alleen vandaag</dt>
			<dd>Vandaag om 12:59:18</dd>
			<dt>Vandaag en gisteren</dt>
			<dd>Gisteren om 21:36:55</dd>
		</dt>';
$helptxt['disableCustomPerPage'] = 'Vink deze optie aan om ervoor te zorgen dat gebruikers niet zelf in kunnen stellen hoeveel topics ze per pagina op de topicindex en hoeveel berichten ze per pagina in een topicweergave zien.';
$helptxt['enablePreviousNext'] = 'Hiermee worden links gegeven naar het volgende en vorige topic.';
$helptxt['pollMode'] = 'Deze functie is om leden toe te staan om polls te starten. Wanneer polls zijn uitgeschakeld, zullen bestaande polls worden verborgen
		in de topiclijsten. Je kunt er ook voor kiezen om de topics zonder hun polls te laten zien, door
		&quot;Toon polls als topics&quot; te kiezen.<br /><br />Om te kunnen bepalen wie polls kan plaatsen, bekijken enz., kun je
		de betreffende permissies toestaan of ontzeggen. Onthoud dit voor als polls niet werken.';
$helptxt['enableCompressedOutput'] = 'Deze optie zal de uitvoer van het forum comprimeren om dataverkeerverbruik te besparen, maar het vereist wel dat
		zlib is ge&iuml;nstalleerd.';
$helptxt['httponlyCookies'] = 'Cookies zullen niet toegankelijk zijn voor script talen, zoals Javascript. Deze instelling kan helpen om diefstal van identiteiten door XSS aanvallen te voorkomen. Het kan problemen geven met scripts van derden, maar moet indien mogelijk ingeschakeld zijn.';
$helptxt['databaseSession_enable'] = 'Deze optie maakt gebruik van de database voor het opslaan van sessies - het werkt het best op load balanced servers, maar helpt tegen allerlei sessie-timeoutproblemen en kan het forum sneller maken.';
$helptxt['databaseSession_loose'] = 'Het aanzetten van deze optie bespaart dataverkeer van je forum, en zorgt ervoor dat het klikken op \'terug\' niet de pagina zal herladen - het nadeel is echter dat de (nieuw) iconen niet worden geactualiseerd, net als enkele andere dingen (tenzij je de pagina aanklikt in plaats van terug te gaan naar die pagina).';
$helptxt['databaseSession_lifetime'] = 'Dit is het aantal seconden dat een sessie blijft bestaan nadat deze voor het laatst is gebruikt. Als de sessie niet gebruikt wordt voor een te lange tijd, dan treedt er een \'timeout\' op. Een waarde hoger dan 2400 wordt aanbevolen.';
$helptxt['tfa_mode'] = 'Je kunt een extra veiligheidsmaatregel inschakelen door <a href="https://en.wikipedia.org/wiki/Two_factor_authentication">twee-factor-authenticatie</a> te activeren. TFA zorgt ervoor dat gebruikers een extra gegeneerde code moeten invullen na het inloggen. Zorg ervoor dat je TFA eerst voor jezelf instelt voordat je andere gebruikers hiertoe kunt dwingen!';
$helptxt['cache_enable'] = 'SMF kent caching op verschillende niveau\'s. Hoe hoger het niveau van cache, hoe meer CPU tijd er wordt gebruikt voor het ophalen van ge-cachete informatie. Als caching beschikbaar is op je machine wordt het aangeraden om eerst cache op niveau 1 te proberen.';
$helptxt['cache_memcached'] = 'Als je memcached gebruikt dien je de server details op te geven. Deze moeten opgegeven worden als een komma-gescheiden lijst zoals in onderstaand voorbeeld:<br><br>	&quot;server1,server2,server3:port,server4&quot;<br><br>Let op dat als er geen poort is opgegeven SMF poort 11211 zal gebruiken tenzij in de hostnaam een slash staat, dan zal worden aangenomen dat het een alternatieve server is en wordt poort 0 gebruikt. SMF zal proberen om een willekeurige load balancing over de opgegeven servers te doen.';
$helptxt['cache_cachedir'] = 'Deze instelling is alleen voor het smf bestands-gebaseerd cache systeem. Het bevat het pad naar de cache map. Het wordt aanbevolen deze in /tmp/ te plaatsen als je deze wilt gebruiken, maar het werkt ook met andere mappen';
$helptxt['cache_sqlite_cachedir'] = 'Deze instelling is alleen voor het SQLite database cache systeem. Het bepaalt het pad naar de cache map. Het wordt aanbevolen deze in de /tmp/ map te plaatsen als je het wilt gebruiken, maar het zal ook werken met een andere map';
$helptxt['enableErrorLogging'] = 'Dit zal alle fouten, zoals een mislukte inlogpoging, loggen, zodat je later kunt bekijken wat er fout is gegaan.';
$helptxt['enableErrorQueryLogging'] = 'Dit zal de volledige naar de server verzonden query opslaan wanneer er een databasefout ontstaat. Daarvoor dient fouten loggen wel aan te staan.<br /><br /><strong>NB: dit zal ook de mogelijkheid om fouten te filteren aantasten.</strong>';
$helptxt['disallow_sendBody'] = 'Deze optie schakelt de optie uit om de teksten van reacties en bericht in de notificatie-mailtjes te ontvangen<br /><br />Vaak reageren leden op de notifactie-e-mail wat in de meeste gevallen betekent dat de forumbeheerder de reactie ontvangt.';
$helptxt['enable_ajax_alerts'] = 'De optie stelt gebruikers in staat om AJAX notificaties te ontvangen. Hiermee hoeven gebruikers de pagina\'s niet te verversen om nieuwe notificaties te ontvangen.<br><strong>LET OP:</strong> Als er veel gebruikers online zijn kan dit een zware last op de server veroorzaken..';
$helptxt['alerts_auto_purge'] = 'Once an alert has been read, it is rarely needed again. For performance reasons, it is a good idea to automatically delete them after a while.';
$helptxt['jquery_source'] = 'Dit bepaalt de bron belasting voor het laden van de jQuery Library. <em>Auto</em> zal eerst CDN gebruiken en als deze niet beschikbaar is terugvallen op de lokale bron. <em>Local</em> zal alleen de lokale bron gebruiken. <em>CDN</em> zal alleen laden vanaf het Google CDN netwerk';
$helptxt['compactTopicPagesEnable'] = 'Deze optie zorgt voor een selectieve weergave van het aantal pagina\'s.<br /><em>Voorbeeld:</em><br />
	&quot;3&quot; resultaat: 1 ... 4 [5] 6 ... 9 <br />
	&quot;5&quot; resultaat: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'Deze optie geeft onderaan de pagina in seconden weer hoelang SMF nodig had om de pagina op te bouwen.';
$helptxt['removeNestedQuotes'] = 'Deze optie zal citaten die al in een post aanwezig zijn verwijderen wanneer een bericht wordt geciteerd via een citaatknop.';
$helptxt['max_image_width'] = 'Deze optie stelt je in staat om een maximum formaat in te stellen voor geplaatste afbeeldingen. Afbeeldingen kleiner dan het maximum zullen niet worden uitgerekt.';
$helptxt['mail_type'] = 'Met deze instelling kun je kiezen of je de standaard PHP-instellingen wilt gebruiken of dat je deze wilt vervangen door SMTP-instellingen. PHP ondersteunt geen authenticatie voor SMTP (wat door veel servers wel vereist wordt), dus als je dat wel wilt, moet je SMTP selecteren. Denk erom dat SMTP langzamer kan werken en bovendien zullen sommige servers geen gebruikersnaam en wachtwoord accepteren.<br /><br />Je hoeft geen SMTP-instellingen in te vullen als je de standaard PHP-instellingen gebruikt.';
$helptxt['attachment_manager_settings'] = 'Bijlagen zijn bestanden die leden kunnen uploaden, en kunnen bijvoegen aan een post.<br /><br />
		<strong>Controleer de extensie van de bijlage</strong>:<br /> Wil je de extensie van een bestand laten controleren?<br />
		<strong>Alleen deze bijlage-extensies toestaan</strong>:<br /> Je kunt de toegestane bestandsextensies hier instellen.<br />
		<strong>Bijlagenmap</strong>:<br /> Het pad naar je bijlagenmap<br />(voorbeeld: /home/sites/jouwsite/www/forum/attachments)<br />
		<strong>Maxiumumgrootte bijlagenmap</strong> (in kB):<br /> Selecteer hoe groot de bijlagenmap mag zijn, inclusief alle bestanden die erin zitten.<br />
		<strong>Maximumgrootte bijlagen per bericht</strong> (in KB):<br /> Selecteer de maximum bestandsgrootte van alle bijlagen in een bericht. Wanneer dit kleiner is dan de limiet per bijlage, zal dit het limiet zijn.<br />
		<strong>Maximumgrootte van &eacute;&eacute;n bijlage</strong> (in kB):<br /> Selecteer de maximum bestandsgrootte voor elke afzonderlijke bijlage.<br />
		<strong>Maximum aantal bijlagen per post</strong>:<br /> Selecteer het aantal bijlagen dat een lid per bericht kan opslaan.<br />
		<strong>Toon de bijlage als afbeelding in het bericht</strong>:<br /> Als het ge&uuml;ploade bestand een afbeelding is, zal dit de afbeelding onder een bericht posten.<br />
		<strong>Pas de groote aan van plaatjes die onder de berichten staan</strong>:<br />Als deze optie is ingeschakeld, zal er een afzonderlijke (kleinere) afbeelding voor de miniatuur opgeslagen worden om dataverkeer te besparen.<br />
		<strong> Maximumbreedte en -hoogte van miniaturen</strong>:<br /> Wordt alleen gebruikt wanneer de &quot;Pas de groote aan van plaatjes die onder de berichten staan&quot; optie is ingeschakeld: de maximumbreedte en -hoogte die de miniaturen van bijlagen mogen hebben. De afbeeldingen zullen proportioneel worden verkleind.';
$helptxt['attachmentCheckExtensions'] = 'Hiermee kun je desgewenst de soorten bijlagen die gebruikers kunnen uploaden beperken door de extensie te controleren: b.v. myphoto.jpg heeft een  jpg extensie.';
$helptxt['attachmentExtensions'] = 'Als de optie "controleer bijlage extensies" hierboven is geselecteerd staan hier de extensies die zijn toegestaan voor nieuwe bijlagen.';
$helptxt['attachmentUploadDir'] = 'Het pad naar de bijlagenmap op de server<br>(bijvoorbeeld: /home/sites/yoursite/www/forum/attachments)';
$helptxt['attachmentDirSizeLimit'] = 'Geef op hoe groot de bijlagen map mag worden, inclusief alle bestanden erin.';
$helptxt['attachmentPostLimit'] = 'Geef op wat de maximale bestandsgrootte (in Kb) mag zijn voor alle bijlagen in een bericht. Als deze lager is dan de de limiet per bijlage wordt dat de limiet.';
$helptxt['attachmentSizeLimit'] = 'Geef op wat de maximale bestandsgrootte mag zijn per bijlage.';
$helptxt['attachmentNumPerPostLimit'] = 'Geef het aantal bijlagen op dat een deelnemer mag toevoegen per bericht.';
$helptxt['attachmentShowImages'] = 'Als het bijgevoegde bestand een afbeelding is zal deze worden getoond onder het bericht.';
$helptxt['attachmentThumbnails'] = 'Als deze instelling is gemaakt, zal er een extra (kleinere) bijlage als miniatuur gemaakt worden om bandbreedte te besparen.';
$helptxt['attachmentThumbWidth'] = 'Only used with the &quot;Resize images when showing under posts&quot; setting. This is the maximum width to resize attachments down to. They will be resized proportionally.';
$helptxt['attachmentThumbHeight'] = 'Only used with the &quot;Resize images when showing under posts&quot; setting. This is the maximum height to resize attachments down to. They will be resized proportionally.';
$helptxt['attachmentDirFileLimit'] = 'Maximaal aantal bestanden per map';
$helptxt['attachmentEnable'] = 'This setting enables you to configure how attachments can be made.<br><br>
	<ul class="normallist">
		<li>
			<strong>Disable all attachments</strong><br>
			All attachments are disabled. Existing attachments are not deleted, but they are hidden from view (even administrators cannot see them). New attachments cannot be made either, regardless of permissions.<br><br>
		</li>
		<li>
			<strong>Enable all attachments</strong><br>
			Everything behaves as normal, users who are permitted to view attachments can do so, users who are permitted to upload can do so.<br><br>
		</li>
		<li>
			<strong>Disable new attachments</strong><br>
			Existing attachments are still accessible, but no new attachments can be added, regardless of permission.
		</li>
	</ul>';
$helptxt['attachment_image_paranoid'] = 'Het inschakelen van deze optie zal zeer stricte bveiligingscontroles op afbeeldingsbijlagen inschakelen. Waarschuwing! Deze uitgebreide controles kunnen ook falen op onschadelijke afbeeldingen. Het wordt sterk aanbevolen om deze optie alleen te gebruiken in combinatie met het herencoderen van afbeeldingen, zodat SMF afbeeldingen die niet door de controle komen herencodeert en daarmee opschoont. In het andere geval, als herencoderen van afbeeldingen niet ingeschakeld is, zullen alle bijlagen die de controles niet passeren worden verworpen.';
$helptxt['attachment_image_reencode'] = 'Het inschakelen van deze optie zal herencoderen van ge&uuml;ploade afbeeldingsbijlagen inschakelen. Herencoderen van afbeeldingen verhoogt de beveiliging, zal tevens het verdwijnen van eventuele animaties in afbeeldingen tot gevolg hebben. <br /> Deze feature is enkel te gebruiken als de GD-module is ge&iuml;nstalleerd op je server.';
$helptxt['attachment_thumb_memory'] = 'Hoe groter de originele afbeelding (bestandsgrootte & breedte x hoogte), hoe meer geheugen het kost om een miniatuur afbeelding te maken.<br>Op basis van deze instelling zal het systeem een inschatting maken van de noodzakelijke geheugenruimte en deze aanvragen. Alleen als deze ruimte beschikbaar is zal het proberen de miniatuur aan te maken.<br>Dit zal minder witte fout pagina\'s geven maar er zullen mogelijk ook minder miniaturen gemaakt worden. Als dit niet ingesteld wordt zal het systeem altijd proberen een miniatuur te maken (met een vaste geheugenruimte). Dit zal mogelijk meer witte fout pagina\'s geven.';
$helptxt['attachmentRecodeLineEndings'] = 'Het script zal regel einden herencoderen volgens de instellingen van je server.';
$helptxt['automanage_attachments'] = 'Met de standaard instelling zal SMF nieuwe bijlages in een enkele map plaatsen. Dit is geen probleem voor de meeste sites, maar als een site erg groot wordt kan het nuttig zijn om de bestanden over meerdere mappen te verdelen.<br><br>Met deze instelling kun je aangeven of je deze mappen zelf wilt beheren (dus dat je een extra map aanmaakt en deze gaat gebruiken als je er klaar voor bent) of dat je dit door SMF laat doen, gebaseerd or criteria, zoals wanneer de huidige map een bepaalde grootte bereikt, of door de mappen te verdelen naar jaren of zelf maanden (op erg drukke sites).';
$helptxt['dont_show_attach_under_post'] = 'If enabled, the attachments embedded in the post won\'t appear under the post, but are still subject to be deleted.';
$helptxt['use_subdirectories_for_attachments'] = 'Maak nieuwe mappen aan.';
$helptxt['max_image_height'] = 'Als bij de maximale breedte, bepaalt deze instelling de maximale hoogte die een afbeelding kan hebben.';
$helptxt['avatar_paranoid'] = 'Inschakelen van deze optie zal zeer stricte bveiligingscontroles op avatars inschakelen. Waarschuwing! Deze uitgebreide controles kunnen ook falen op onschadelijke avatars. Het wordt sterk aanbevolen om deze optie alleen te gebruiken in combinatie met het herencoderen van avatars, zodat SMF avatars die niet door de controle komen herencodeert en daarmee opschoont. In het andere geval, als herencoderen van avatars niet ingeschakeld is, zullen alle avatars die de controles niet passeren worden verworpen';
$helptxt['avatar_reencode'] = 'Het inschakelen van deze optie zal herencoderen van ge&uuml;ploade avatars inschakelen. Herencoderen van avatars verhoogt de beveiliging, zal tevens het verdwijnen van eventuele animaties in avatars tot gevolg hebben. <br /> Deze feature is enkel te gebruiken als de GD-module is ge&iuml;nstalleerd op je server.';
$helptxt['cal_enabled'] = 'De kalender kan worden gebruikt om verjaardagen te tonen, of om belangrijke gebeurtenissen op het forum aan te geven. Deze instelling activeert de kalender functie in het forum.';
$helptxt['cal_link_postevent'] = 'Dit zal leden toestaan om gebeurtenissen voor een dag aan te maken als ze op die dag klikken.';
$helptxt['cal_maxdays_advance'] = 'Als dit op 7 staat zal de volgende week aan gebeurtenissen worden weergegeven.';
$helptxt['cal_allow_unlinkedevents'] = 'Sta leden toe om gebeurtenissen te plaatsen zonder te vereisen dat ze gekoppeld zijn aan een bericht in een board';
$helptxt['cal_min_year'] = 'Kies het &quot;eerste&quot; jaar op de kalenderlijst';
$helptxt['cal_max_year'] = 'Kies het &quot;laatste&quot; jaar op de kalenderlijst';
$helptxt['cal_maxevent_span'] = 'Kies het maximum aantal dagen dat een gebeurtenis kan lopen';
$helptxt['localCookies'] = 'SMF gebruikt cookies om inlog informatie op te slaan op de computer van de gebruiker.
	Cookies kunnen globaal worden opgeslagen (mijndomein.nl) of lokaal (mijndomein.nl/pad/naar/forum).<br />
	Vink deze optie aan als je problemen ondervind met gebruikers die automatisch uitgelogd worden.<hr />
	Globaal opgeslagen cookies zijn een stuk minder veilig indien er sprake is van een gedeelde webserver (zoals Tripod).<hr />
	lokaal opgeslagen cookies werken niet buiten de forummap, dus wanneer je is opgeslagen op www.mijnsite.nl/forum, hebben pagina\'s als www.mijnsite.nl/index.php geen toegang tot de accountinformatie.
	Zeker wanneer je gebruik maakt van SSI.php, worden globaal opgeslagen cookies aanbevolen.';
$helptxt['enableBBC'] = 'Deze optie biedt de leden de mogelijkheid om Bulletin Board Code (BBC) te gebruiken op het forum, waardoor ze afbeeldingen kunnen tonen en andere opmaak mogelijkheden krijgen.';
$helptxt['legacy_bbc'] = 'Oude BBCodes zijn gedateerde codes en kunnen niet gebruikt worden in nieuwe berichten. Ze zullen echter wel verwerkt en getoond worden in bestaande berichten als dit hier wordt ingesteld.<br><br>Het activeren van oude BBCodes is dan ook alleen nuttig als je forum is ge&uuml;pgrade van een oude versie van SMF.<br><br>Zelfs als de codes hier worden geactiveerd zullen sommige oude BBCodes niet op dezelfde manier worden getoond als voorheen. De [flash] BBCode bijvoorbeeld zal simpelweg een link naar de Flash inhoud tonen en deze niet insluiten zoals voorheen.';
$helptxt['time_offset'] = 'Some systems do not store times in UTC. Use this setting to specify the time difference (in hours) between the server time and UTC if needed. Negative and decimal values are permitted.';
$helptxt['default_timezone'] = 'This is the default timezone used for the display of times throughout the forum.';
$helptxt['timezone_priority_countries'] = 'This setting lets you push the time zones for a certain country or countries to the top of the list of selectabled time zones that is shown when users are configuring their profiles, creating calendar events, etc.<br><br>For example, if many of your forum\'s members live in New Zealand or Fiji, you may enter "NZ,FJ" to make it easier for them to find the most relevant time zones quickly.<br><br>You can find the complete list of ISO country codes by searching the Internet for "<a href="https://www.google.com/search?q=iso+3166-1+alpha-2" target="_blank" rel="noopener">ISO 3166-1 alpha-2</a>".';
$helptxt['spamWaitTime'] = 'Hier kun je aangeven hoeveel tijd er dient te zitten tussen het plaatsen van berichten. Dit kan voorkomen dat mensen gaan &quot;spammen&quot; op het forum.';

$helptxt['enablePostHTML'] = 'This will allow the posting of some basic HTML tags:
	<ul class="normallist">
		<li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;strong&gt;, &lt;ins&gt;, &lt;del&gt;</li>
		<li>&lt;a href=&quot;&quot;&gt;</li>
		<li>&lt;img src=&quot;&quot; alt=&quot;&quot; /&gt;</li>
		<li>&lt;br&gt;, &lt;hr&gt;</li>
		<li>&lt;pre&gt;, &lt;blockquote&gt;</li>
	</ul>';

$helptxt['themes_manage'] = 'Here you can install new themes and select which themes your users can chose from, the default theme that new users and guests will use, as well as other theme selection settings.';
$helptxt['theme_install'] = 'Je kunt hier nieuwe thema\'s installeren.  Je kunt dit doen vanuit een reeds bestaande directory, door een archief voor het thema te uploaden, of door het standaard thema te kopie&euml;ren.<br /><br />Let op dat het archief of de directory een <tt>theme_info.xml</tt> definitiebestand moet bevatten.';
$helptxt['xmlnews_enable'] = 'Allows people to link to <a href="%1$s?action=.xml;sa=news" target="_blank" rel="noopener">Recent news</a>
	and similar data. It is also recommended that you limit the size of recent posts/news because some clients expect the RSS data to be truncated for display.';
$helptxt['xmlnews_attachments'] = 'Allows links to attachments to be enclosed within your XML/RSS feeds. Turn this on if you want to use your forum as a podcasting, broadcatching, or similar content distribution platform.
	<br><br>
	The "view attachments" permission affects this setting. Members and guests will only see a post\'s attachments in the feed if they can also see the attachments on the post\'s web page. Keep in mind that most feed readers will access your feeds as a guest.
	<br><br>
	Some feed formats only allow one enclosed attachment per post. If a post has multiple attachments, SMF will enclose the largest one in these feeds.';
$helptxt['globalCookies'] = 'Makes log in cookies available across subdomains. For example, if...<br>
	your site is https://www.example.com/,<br>
	and your forum is https://forum.example.com/,<br>
	using this setting will allow you to access the forum\'s cookie on your site. Do not enable this if there are other subdomains (like hacker.example.com) not controlled by you.<br><br>
	This setting does not function when local cookies are enabled.';
$helptxt['globalCookiesDomain'] = 'Als je subdomein onafhankelijke cookies (globale cookies) gebruikt, kun je hier opgeven welk domein gebruikt moet worden. Deze moet (natuurlijk) ingesteld worden op je hoofd domein: bijvoorbeeld, als je gebruik maakt van <em>forum.voorbeeld.com</em> en <em>www.voorbeeld.com</em>, dan moet het domein ingesteld worden op <em>voorbeeld.com</em>. Je hoeft geen <em>http://</em> of <em>https://</em> ervoor te plaatsen.';
$helptxt['secureCookies'] = 'Het inschakelen van deze optie zal ervoor zorgen dat nieuwe cookies altijd gemarkeerd zullen worden als veilig. Schakel deze optie alleen in als je het HTTPS-protocol gebruikt op je site, anders zullen cookies niet juist afgehandeld worden!';
$helptxt['securityDisable'] = 'When enabled, this <em>disables</em> the additional password check for the administration page. This is not recommended!';
$helptxt['securityDisable_why'] = 'Enter your current password. (The same one you use to login.)<br><br>The requirement to enter this helps ensure that you want to do whatever administration you are doing, and that it is <strong>you</strong> doing it.';
$helptxt['securityDisable_moderate'] = 'When enabled, this <em>disables</em> the additional password check for the moderation page. This setting is enabled by default.';
$helptxt['securityDisable_moderate_why'] = 'Enter your current password. (The same one you use to login.)<br><br>The requirement to enter this helps ensure that you want to do whatever moderation you are doing, and that it is <strong>you</strong> doing it.';
$helptxt['frame_security'] = 'Moderne browsers ondersteunen een server gebaseerd protocol genaamd X-Frame-Opties. Met deze instelling geef je aan op welke manier je website in een frame geplaatst wordt in een frameset of een iframe. Door deze uit te zetten worden er geen headers gestuurd en dit is het meest onveilig, maar geeft wel de meeste vrijheid. Ontzeggen zal alle frames volledige blokkeren en is het meest beperkend en veilig. Door Gelijke Herkomst toe te staan is het alleen op je eigen domein mogelijk om frames te gebruiken en geeft een gemiddelde van beide beide voorgaande opties.';
$helptxt['proxy_ip_header'] = 'Dit is de server header welke door SMF vertrouwd wordt voor de IP adressen van de bezoekers. Het wijzigen van deze instelling kan onverwachte IP resultaten voor leden geven. Controleer deze met je server beheerder, CDN provider of proxy beheerder voordat je deze instellingen wijzigt. De meeste provider zullen dit accepteren en gebruik maken van HTTP_X_FORWARDED_FOR. Je moet de lijst met Servers onderhouden die de reverse proxy headers sturen om er zeker van te zijn dat deze van geldige bronnen komen.';
$helptxt['email_members'] = 'In this message you can use a few &quot;variables&quot;. These are:<br>
	{$board_url} - The URL to your forum.<br>
	{$current_time} - The current time.<br>
	{$member.email} - The current member\'s email.<br>
	{$member.link} - The current member\'s link.<br>
	{$member.id} - The current member\'s id.<br>
	{$member.name} - The current member\'s name. (for personalization).<br>
	{$latest_member.link} - The most recently registered member\'s link.<br>
	{$latest_member.id} - The most recently registered member\'s id.<br>
	{$latest_member.name} - The most recently registered member\'s name.';

$helptxt['failed_login_threshold'] = 'Stel het aantal pogingen in die een gebruiker kan wagen alvorens naar het scherm te worden gestuurd waar hij zijn wachtwoord kan laten opsturen.';
$helptxt['loginHistoryDays'] = 'Het aantal dagen dat de login geschiedenis onder het gebruikersprofiel wordt bewaard. De standaard waarde is 30 dagen. ';
$helptxt['oldTopicDays'] = 'Als deze optie is ingesteld, wordt er een waarschuwing getoond wanneer een lid probeert te reageren op een topic waarop al een (gespecificeerd) aantal dagen niet gereageerd is. Zet deze instelling op 0 om deze feature uit te schakelen.';
$helptxt['edit_wait_time'] = 'Aantal seconden na plaatsing waarin een bericht bewerkt kan worden zonder als bewerkt te worden gemarkeerd.';
$helptxt['edit_disable_time'] = 'Aantal minuten die mogen verstrijken, voordat een lid zijn bericht niet langer meer kan wijzigen. Stel op 0 in om deze feature uit te schakelen.<br /><br /><em>Let op: dit be&iuml;nvloedt niet gebruikers met de permissie om andermans bericht aan te passen.</em>';
$helptxt['preview_characters'] = 'Met deze instelling bepaal je het aantal beschikbare karakters dat wordt getoond in de het voorbeeld van het eerste en laatste topic. ';
$helptxt['quote_expand'] = 'This setting allows large quotes to be cutoff and expanded to their full length by the user. The setting indicates the minimum height a quote needs to have for it to be collapsed. Quotes smaller than this setting won\'t be affected';
$helptxt['posts_require_captcha'] = 'Deze instelling zal van gebruikers eisen om eerst een anti-spambot verificatiecode over te typen, voor ze een bericht kunnen plaatsen. Alleen gebruikers met een beperkt aantal berichten zullen deze code in moeten voeren. Dit zou moeten helpen tegen spambots.';
$helptxt['disable_wysiwyg'] = 'Deze instelling zorgt ervoor dat geen enkele gebruiker de WYSIWYG-editor (&quot;What You See Is What You Get&quot;) kan gebruiken bij het plaatsen van berichten.';
$helptxt['lastActive'] = 'Stel hier het aantal minuten in dat leden nog actief worden weergegeven op het forum na hun laatste activiteit. Standaard is dit 15 minuten.';

$helptxt['customoptions'] = 'Deze sectie definieert de keuzes die een gebruiker kan kiezen uit een keuzelijst. Er zijn een aantal belangrijke dingen instelbaar:
	<ul class="normallist">
		<li><strong>Standaardkeuze:</strong> de keuze die met het keuzebolletje ernaast (&quot;radio button&quot;) geselecteert is, zal standaard ingesteld zijn bij de profielen van gebruikers.</li>
		<li><strong>Verwijder keuzes:</strong> om een keuze te verwijderen, wis je simpelweg de tekst van die keuze. Alle leden die voor die keuze gekozen hadden, zullen teruggezet worden naar de standaardkeuze.</li>
		<li><strong>Keuzes herordenen:</strong> je kunt de keuzes herordenen door de tekst in de tekstvakken te verwisselen. LET OP! Ben er zeker van dat je de exacte tekst uitwisselt, anders zullen de gebruikerkeuzes verloren gaan.</li>
	</ul>';

$helptxt['autoFixDatabase'] = 'This will automatically fix broken tables and resume as if nothing happened. It does email you when this happens.<br>If you choose to disable this option, your forum will be down until you notice and manually fix the problem.';
// argument(s): scripturl
$helptxt['pgFulltextSearch'] = 'This setting defines the language to use for PostgreSQL\'s fulltext search. Choose the language that most closely matches the language your forum actually uses. If your forum\'s language is not listed, or if your forum is multi-lingual, choose the "simple" option. <br>
This setting is independent of your main SMF language settings and not related to the installed language for SMF. <br>
When you change this setting you need to <a href="%1$s?action=admin;area=managesearch;sa=method" target="_blank" rel="noopener">rebuild the fulltext search index</a>.<br>
If a language you need is not listed, ask your database admin to install PostgreSQL language support for that language.';

$helptxt['enableParticipation'] = 'Dit laat een icoon zien bij de topics waar een gebruiker een bericht in geplaatst heeft.';

$helptxt['db_persist'] = 'This keeps the connection active to increase performance. If you aren\'t on a dedicated server, this may cause you problems with your host.<br>
If this option is disabled, you may need to enable the mysqli.allow_persistent or pgsql.allow_persistent setting in your php.ini file.';
$helptxt['ssi_db_user'] = 'Optionele instelling die je in staat stelt om een andere database-gebruiker en wachtwoord te gebruiken bij het gebruik van SSI.php.';

// argument(s): either $helptxt['queryless_urls_supported'] or $helptxt['queryless_urls_unsupported'], depending on whether the server uses a supported webserver
$helptxt['queryless_urls'] = 'This changes the format of URLs a little so search engines will like them better. They will look like index.php/topic,1.0.html.<br><br>%1$s';
// is conditionally used as part of $helptxt['queryless_urls']
$helptxt['queryless_urls_supported'] = 'This feature will work on your server.';
// is conditionally used as part of $helptxt['queryless_urls']
$helptxt['queryless_urls_unsupported'] = 'This feature will not work on your server.';
$helptxt['minimize_files'] = 'Met deze optie zullen de CSS- en JavaScript-bestanden die door je forum gebruikt worden automatisch verkleind worden, waardoor je forum sneller zal werken voor je gebruikers.<br><br>Deze instelling laat je normaal gesproken actief. Enige reden om deze tijdelijk uit te zetten kan zijn als je wijzigingen moet doorvoeren in de CSS- of JavaScript-bestanden (bijvoorbeeld tijdens het wijzigen van themabestanden of het ontwikkelen van een modificatie).<br>
Er zullen dagelijks nieuwe bestanden gemaakt worden, als je deze wil verversen hoef je alleen het forum cache te legen.';
$helptxt['boardindex_max_depth'] = 'Met deze instelling wordt bepaald hoe diep SMF in de sub-boards van een board zal zoeken naar nieuwe berichten. Deze bepaald ook hoeveel boards er worden meegeteld als de instelling "tel berichten in sub-boards mee in totalen op board niveau" wordt geactiveerd.<br><br>Voorbeeld: als deze instelling op 1 wordt gezet, zal een sub-board alleen gemarkeerd worden als "nieuw" op de indexpagina als het sub-board zelf een nieuw bericht bevat. Als het wordt ingesteld op 2, dan wordt het board met "nieuw" gemarkeerd als er een nieuw bericht is in het sub-board of in het sub-sub-board. Als het is ingesteld op 10, dan wordt het board met "nieuw" gemarkeerd als er een nieuw bericht is in het sub-board, het sub-sub-board, etc... tot 10 niveaus diep.<br><br>Op grote, drukke forums is het raadzaam deze instelling niet te groot te maken om server resources te sparen.';
$helptxt['countChildPosts'] = 'Het selecteren van deze optie zorgt ervoor dat berichten en topics in de sub-boards meegeteld worden op de indexpagina.<br><br>Dit betekent dat een hoofdboard zonder berichten erin niet op \'0\' komt te staan als er wel berichten zijn in de sub-boards.';
$helptxt['allow_ignore_boards'] = 'Het inschakelen van deze optie heeft als gevolg dat gebruikers in kunnen stellen welke boards ze willen negeren.';
$helptxt['deny_boards_access'] = 'Deze instelling maakt het mogelijk om de toegang tot bepaalde boards te ontzeggen voor ledengrepen.';

// argument(s): scripturl
$helptxt['who_enabled'] = 'This setting allows you to turn on or off the <a href="%1$s?action=who" target="_blank" rel="noopener">Who\'s Online</a> page, which shows who is browsing the forum and what they are doing.';

$helptxt['recycle_enable'] = 'Het &quot;Recyclen&quot; van verwijderde topics en berichten naar het aangegeven board.';

$helptxt['enableReportPM'] = 'Deze optie zorgt ervoor dat je gebruikers persoonlijke berichten kunnen melden aan het beheerteam. Dit kan handig zijn om misbruik van persoonlijke berichten in de gaten te houden.';
$helptxt['max_pm_recipients'] = 'Deze optie stelt je in staat een maximum aantal ontvangers per persoonlijk bericht dat een forumlid stuurt in te stellen. Dit kan helpen om misbruik van het PM-systeem te voorkomen. Merk op dat leden die nieuwsbrieven kunnen versturen uitgezonderd zijn. Stel in op nul voor geen limiet.';
$helptxt['pm_posts_verification'] = 'Deze instelling zal gebruikers forceren een verificatiecode in te voeren wanneer ze een persoonlijk bericht willen versturen. Alleen gebruikers met een postteller onder het ingestelde aantal zullen de code moeten invoeren - dit zou automatische spammers tegen moeten werken.';
$helptxt['pm_posts_per_hour'] = 'Dit zal het aantal persoonlijke berichten dat een gebruiker per uur kan versturen limiteren. Dit heeft geen effect op beheerders of moderators.';

$helptxt['default_personal_text'] = 'Bepaalt de standaardtekst die een nieuwe gebruiker als &quot;persoonlijke tekst&quot; heeft.';

$helptxt['registration_method'] = 'Deze optie bepaalt welke registratie methode wordt gebruikt op het forum. Je kunt kiezen uit:<br /><br />
	<ul class="normallist">
		<li>
			<strong>Registratie uitgeschakeld</strong><br />
				Blokkeert het registreren, wat inhoudt dat niemand zich kan registreren op het forum.<br />
		</li><li>
			<strong>Directe registratie</strong><br />
				Nieuwe leden kunnen direct inloggen en posten na registratie op het forum.<br />
		</li><li>
			<strong>Activatie via e-mail</strong><br />
				Leden die zich hebben geregistreerd krijgen een e-mail met een activatielink die ze dienen te volgen alvorens hun account wordt geactiveerd.<br />
		</li><li>
			<strong>Goedkeuring door beheerder</strong><br />
				Nieuwe leden dienen te worden goedgekeurd door een beheerder alvorens hun account wordt geactiveerd.
		</li>
	</ul>';

$helptxt['send_validation_onChange'] = 'Als deze optie is geactiveerd moeten de leden hun account opnieuw activeren aan de hand van een e-mailbericht dat ze krijgen op het nieuwe e-mailadres';
$helptxt['approveAccountDeletion'] = 'Als deze instelling gemaakt wordt, zal elke poging van gebruikers om de eigen account te verwijderen eerst moeten worden goedgekeurd door een beheerder. ';

$helptxt['send_welcomeEmail'] = 'Als deze optie is geactiveerd krijgen nieuwe leden een welkomst-e-mail bericht gestuurd';
$helptxt['password_strength'] = 'Deze instelling bepaalt de vereiste sterkte van wachtwoorden die gebruikt worden door je forumleden. Hoe &quot;sterker&quot; het wachtwoord, hoe moeilijker het is om iemands account te kraken.
	De mogelijke instellingen zijn:
	<ul class="normallist">
		<li><strong>Laag:</strong> Het wachtwoord moet minimaal vier karakters lang zijn.</li>
		<li><strong>Middel:</strong> Het wachtwoord moet minstens acht karakters lang zijn and mag niet bestaan uit een gebruikersnaam of een e-mailadres.</li>
		<li><strong>Hoog:</strong> Net zoals bij middel, behalve dat het wachtwoord ook een mix van hoofd- en kleine letters moet bevatten en tenminste &eacute;&eacute;n nummer.</li>
	</ul>';
$helptxt['enable_password_conversion'] = 'Door het activeren van deze instelling zal SMF proberen wachtwoorden die in afwijkende formaten zijn opgeslagen te detecteren en deze converteren naar het formaat dat SMF gebruikt. Dit wordt veelal gebruikt voor forums die naar SMF zijn geconverteerd, maar kan ook andere toepassingen hebben. Zonder deze instellingen kunnen gebruikers niet inloggen met hun oude wachtwoord na een conversie en moeten zijn een nieuw wachtwoord aanvragen.';

$helptxt['coppaAge'] = 'De waarde in dit vak bepaalt de minimumleeftijd die nieuwe leden moeten hebben om directe toegang tot het forum te krijgen.
	Bij registratie wordt hen gevraagd om te bevestigen of ze ouder dan deze leeftijd zijn en zo niet wordt hun aanvraag afgewezen of opgeschort totdat de ouder toestemming gegeven hebben - afhankelijk van het gekozen type restrictie.
	Als een waarde van 0 is ingevuld, dan zullen alle andere leeftijdsinstellingen worden genegeerd.';
$helptxt['coppaType'] = 'Indien leeftijdsrestricties zijn ingesteld, bepaalt deze instelling wat er gebeurt als een lid onder de minimale leeftijd zich probeert te registreren op je forum. Er zijn twee mogelijke keuzes:
	<ul class="normallist">
		<li>
			<strong>Verwerp de registratie:</strong><br />
				De registratie van elk nieuw lid dat onder de minimum leeftijd is zal per direct worden verworpen.<br />
		</li><li>
			<strong>Vereis ouderlijke goedkeuring</strong><br />
				Elk nieuw lid dat zich probeert te registreren en onder de minimaal toegestane leeftijd is, krijgt een markering in zijn account in afwachting op goedkeuring en krijgt een formulier te zien waarin zijn ouders toestemming kunnen geven om lid te worden van het forum.
				Ze krijgen ook de contactgegevens van het forum zoals ingesteld op de instellingen-pagina zien, zodat ze het formulier naar de forumbeheerder per e-mail of fax kunnen sturen.
		</li>
	</ul>';
$helptxt['coppaPost'] = 'De contactgegevens zijn verplicht, zodat formulieren die toestemming geven voor minderjarige registratie gestuurd kunnen worden naar de forumbeheerder. Deze gegevens zullen getoond worden aan alle nieuwe minderjarigen en zijn vereist voor goedkeuring van ouders of voogden. In ieder geval moet het postadres of het faxnummer ingevuld zijn.';

$helptxt['allow_hideOnline'] = 'Met deze optie geselecteerd kunnen alle leden hun online status voor andere gebruikers (behalve beheerders) verbergen. Het uitschakelen van deze optie heeft geen gevolgen voor de status van leden: het voorkomt alleen dat ze zichzelf kunnen verbergen in de toekomst.';
$helptxt['meta_keywords'] = 'Deze sleutelwoorden worden toegevoegd aan de weergave van elke pagina, om zoekmachines (etc) de inhoud van je site te laten zien. Scheid meerdere woorden door middel van een komma. HTML is niet toegestaan.';

$helptxt['latest_themes'] = 'Hier zie je de laatste en meest populaire thema\'s van <a href="https://www.simplemachines.org/" target="_blank" rel="noopener">www.simplemachines.org</a>.  Het kan zijn dat het niet verschijnt als je pc geen verbinding kan maken met <a href="https://www.simplemachines.org/" target="_blank" rel="noopener">www.simplemachines.org</a>.';

$helptxt['secret_why_blank'] = 'Voor de veiligheid is het antwoord op je vraag (en ook je wachtwoord) ge-encrypt zodat alleen SMF kan bepalen of het antwoord juist is, het kan je dus niet aangeven (en ook niet iemand anders!) wat het antwoord of je wachtwoord is.';
$helptxt['moderator_why_missing'] = 'Omdat modereren gedaan wordt op basis van boards, kun je leden alleen moderator te maken via de <a href="%1$s?action=admin;area=manageboards" target="_blank" class="new_win">board management interface</a>.';

$helptxt['permissions'] = 'Permissies geven aan welke groepen wel of niet bepaalde rechten in bepaalde boards hebben.<br /><br />Je kunt meerdere boards tegelijk bewerken of bij een specifieke groep kijken door te klikken op &quot;Bewerken&quot;.';
$helptxt['permissions_board'] = 'Als een board is ingesteld op \'Globaal,\' houdt dit in dat het board geen speciale permissies heeft.  \'Lokaal\' houdt in dat het board specifieke permissies heeft - apart van de Globale permissies.  Op deze manier kun je boards hebben die meer of minder permissies hebben dan een ander board, zonder dit voor ieder board apart in te moeten stellen.';
$helptxt['permissions_quickgroups'] = 'Deze stellen je in staat om &quot;standaard&quot; permissies te gebruiken - standaard betekent \'niets speciaals\', beperkt betekent \'als een gast\', moderator betekent \'wat een moderator heeft\', en \'onderhoud\' betekent permissies die erg dicht in de buurt liggen van een admin.';
$helptxt['permissions_deny'] = 'Het ontzeggen van permissies kan handig zijn wanneer je voor een zeker lid een permissie wilt wegnemen. Je kunt leden toevoegen aan een ledengroep met een \'ontzeg\'-permissie om hen die permissies te ontzeggen.<br /><br />Gebruik het voorzichtig, een ontzegde permissie blijft ontzegd, ongeacht welke andere ledengroep het lid in zit.';
$helptxt['permissions_postgroups'] = 'Met permissies voor bericht-gerelateerde groepen, kun je permissies aan leden toekennen die een bepaald aantal berichten heeft geplaatst. De bericht-gerelateerde permissies worden <em>toegevoegd</em> aan de permissies van de reguliere ledengroepen.';
$helptxt['membergroup_guests'] = 'De gasten-ledengroep bestaat uit alle gebruikers die niet zijn ingelogd.';
$helptxt['membergroup_regular_members'] = 'De \'reguliere leden\' groep bestaat uit alle leden die ingelogd zijn, maar niet een primaire ledengroep zijn toegewezen.';
$helptxt['membergroup_administrator'] = 'De beheerder kan, per definitie, alles doen en alle boards zien. Er zijn geen permissie-instellingen voor de beheerder.';
$helptxt['membergroup_moderator'] = 'De moderator-ledengroep is een speciale ledengroep. Permissies en instellingen ingesteld voor deze groep, zijn van toepassing op board-moderators maar alleen <em>op de boards die zij modereren</em>. Buiten die boards zijn ze net als elk ander lid.';
$helptxt['membergroups'] = 'In SMF there are two types of groups that your members can be part of. These are:
	<ul class="normallist">
		<li><strong>Regular Groups:</strong> A regular group is a group in which members are not automatically placed. To assign a member to be in a group simply go to their profile and click &quot;Account Settings&quot;. From here you can assign them any number of regular groups to which they will be part.</li>
		<li><strong>Post Groups:</strong> Unlike regular groups post based groups cannot be assigned. Instead, members are automatically assigned to a post based group when they reach the minimum number of posts required to be in that group.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'Je kunt deze events bewerken door op het rode sterretje naast de naam te klikken.';

$helptxt['maintenance_backup'] = 'Hier kun je een kopie maken van alle berichten, instellingen, leden en alle andere informatie uit de database in &eacute;&eacute;n groot bestand.<br /><br />Doe dit wekelijks, om altijd een goede backup te hebben.';
$helptxt['maintenance_rot'] = 'Hier kun je <strong>volledig</strong> en <strong>onomkeerbaar</strong> oude topics verwijderen.  Het wordt aangeraden eerst een backup te maken.<br /><br />Wees voorzichtig met het gebruik van deze optie.';
$helptxt['maintenance_members'] = 'Deze optie stelt je in staat om leden <strong>volledig</strong> en <strong>permanent</strong> te verwijderen van je forum. Het wordt <strong>sterk aangeraden</strong> van tevoren een backup te maken, voor het geval je iets doet dat je eigenlijk niet wilde doen.<br /><br />Gebruik deze optie voorzichtig.';

$helptxt['avatar_server_stored'] = 'Hier kunnen leden een avatar kiezen die is opgeslagen op je server. Normaal gesproken zijn ze te vinden onder de dezelfde plek als SMF in de avatar directory te vinden.<br />Tip : Als je directories aanmaakt in de map waar de avatars staan, kun je &quot;categorie&euml;n&quot; maken van de avatars.';
$helptxt['avatar_external'] = 'Met deze optie actief kunnen leden een URL opgeven naar hun avatar.  Het nadeel hiervan is dat in sommige gevallen er avatars zullen worden gebruikt die erg groot zijn of niet op je forum kunnen in verband met wat de afbeelding voorstelt.';
$helptxt['avatar_download_external'] = 'Met deze optie wordt de URL die door de gebruiker is opgegeven, benaderd om de avatar te downloaden. Als dat gelukt is, zal de avatar als uploadbare avatar behandeld worden.';
$helptxt['avatar_action_too_large'] = 'This setting lets you reject images (from other sites) that are too big, or tells the user\'s browser to resize them, or to download them to your server.<br><br>If users put in very large images as their avatars and resize in the browser, it could cause very slow loading for your users - it does not actually resize the file, it just displays it smaller. So a digital photo, for example, would still be loaded in full and then resized only when displayed - so for users this could get quite slow and use a lot of bandwidth.<br><br>On the other hand, downloading them means using your bandwidth and server space, but you also ensure that images are smaller, so it should be faster for users. (Note: downloading and resizing requires either the GD library, or ImageMagick using either the Imagick or MagickWand extensions)';
$helptxt['avatar_upload'] = 'Deze optie is vrijwel gelijk aan &quot;Sta leden toe een externe avatar te gebruiken&quot;, alleen heb je nu een betere controle over de avatars, gaat het resizen sneller en hoeven de leden hun avatar niet elders onder te brengen.<br /><br />Het nadeel kan echter zijn dat het een hoop ruimte kan gaan kosten op je server.';
$helptxt['avatar_download_png'] = 'PNG bestanden zijn groter, maar hebben een betere kwaliteit.  Als dit is uitgevinkt, zal er gebruik worden gemaakt van JPEG - vaak kleiner, maar ook een slechtere kwaliteit.';

$helptxt['disableHostnameLookup'] = 'Dit deactiveert de mogelijkheid om hostnamen te zoeken, wat op sommige servers erg traag kan zijn.  Let op dat het verbannen van leden ook minder effectief zal worden.';

$helptxt['search_weight_frequency'] = 'Gewichtsfactoren worden gebruikt om de relevantie van zoekresultaten te bepalen. Verander de gewichten zo dat ze overeenkomen met wat belangrijk is voor jouw forum. Bijvoorbeeld, een nieuws site zal een relatief hoge waarde hebben voor \'ouderdom van laatste overeenkomende bericht\'. Alle waardes zijn relatief ten opzichte van elkaar en zouden positieve gehele getallen moeten zijn.<br /><br />Deze factor telt het aantal met de zoektermen overeenkomende berichten en deelt ze door het totaal aantal berichten in het topic.';
$helptxt['search_weight_age'] = 'Gewichtsfactoren worden gebruikt om de relevantie van zoekresultaten te bepalen. Verander de gewichten zo dat ze overeenkomen met wat belangrijk is voor jouw forum. Bijvoorbeeld, een nieuws site zal een relatief hoge waarde hebben voor \'ouderdom van laatste overeenkomende bericht\'. Alle waardes zijn relatief ten opzichte van elkaar en zouden positieve gehele getallen moeten zijn.<br /><br />Deze factor bepaalt de ouderdom van het laatste overeenkomende bericht binnen een topic. Hoe recenter het bericht, hoe hoger de score.';
$helptxt['search_weight_length'] = 'Gewichtsfactoren worden gebruikt om de relevantie van zoekresultaten te bepalen. Verander de gewichten zo dat ze overeenkomen met wat belangrijk is voor jouw forum. Bijvoorbeeld, een nieuws site zal een relatief hoge waarde hebben voor \'ouderdom van laatste overeenkomende bericht\'. Alle waardes zijn relatief ten opzichte van elkaar en zouden positieve gehele getallen moeten zijn.<br /><br />Deze factor is gebaseerd op de topicgrootte. Hoe meer berichten in het topic, hoe hoger de score.';
$helptxt['search_weight_subject'] = 'Gewichtsfactoren worden gebruikt om de relevantie van zoekresultaten te bepalen. Verander de gewichten zo dat ze overeenkomen met wat belangrijk is voor jouw forum. Bijvoorbeeld, een nieuws site zal een relatief hoge waarde hebben voor \'ouderdom van laatste overeenkomende bericht\'. Alle waardes zijn relatief ten opzichte van elkaar en zouden positieve gehele getallen moeten zijn.<br /><br />Deze factor kijkt naar of een zoekterm in het onderwerp van het topic voorkomt.';
$helptxt['search_weight_first_message'] = 'Gewichtsfactoren worden gebruikt om de relevantie van zoekresultaten te bepalen. Verander de gewichten zo dat ze overeenkomen met wat belangrijk is voor jouw forum. Bijvoorbeeld, een nieuws site zal een relatief hoge waarde hebben voor \'ouderdom van laatste overeenkomende bericht\'. Alle waardes zijn relatief ten opzichte van elkaar en zouden positieve gehele getallen moeten zijn.<br /><br />Deze factor kijkt naar of een zoekterm in het eerste bericht van het topic voorkomt.';
$helptxt['search_weight_sticky'] = 'Gewichtsfactoren worden gebruikt om de relevantie van zoekresultaten te bepalen. Verander de gewichten zo dat ze overeenkomen met wat belangrijk is voor jouw forum. Bijvoorbeeld, een nieuws site zal een relatief hoge waarde hebben voor \'ouderdom van laatste overeenkomende bericht\'. Alle waardes zijn relatief ten opzichte van elkaar en zouden positieve gehele getallen moeten zijn.<br /><br />Deze factor kijkt naar of een topic sticky is en maakt de relevantheidsscore hoger als dat het geval is.';
$helptxt['search'] = 'Pas hier alle instellingen voor de zoekfunctie aan.';
$helptxt['search_why_use_index'] = 'A search index can greatly improve the performance of searches on your forum. Especially when the number of messages on a forum grows bigger, searching without an index can take a long time and increase the pressure on your database. If your forum is bigger than 50.000 messages, you might want to consider creating a search index to assure peak performance of your forum.<br><br>Note that a search index can take up quite some space. A fulltext index is a built-in index of MySQL and PostgreSQL. It\'s relatively compact (approximately the same size as the message table), but a lot of words aren\'t indexed and it can, in some search queries, turn out to be very slow. The custom index is often bigger (depending on your configuration it can be up to 3 times the size of the messages table) but it\'s performance is better than fulltext and relatively stable.';

$helptxt['see_admin_ip'] = 'IP-adressen worden getoond aan beheerders en moderators om het modereren te vergemakkelijken en het eenvoudiger te maken om mensen met slechte bedoelingen te traceren. Bedenk wel dat IP-adressen niet altijd identificerend zijn en dat IP-adressen van mensen van tijd tot tijd kan veranderen. <br /><br />Leden mogen ook hun eigen IP-adres zien.';
$helptxt['see_member_ip'] = 'Je IP-adres is zichtbaar voor jou en de moderators. Bedenk dat deze informatie je niet identificeert en dat de meeste IP-adressen af en toe veranderen.<br /><br />Je kunt het IP-adres van andere leden niet zien en zij kunnen het jouwe niet zien.';
$helptxt['whytwoip'] = 'SMF gebruikt een aantal methodes om het IP-adres van gebruikers vast te stellen. In de meeste gevallen resulteren deze twee methodes in hetzelfde IP-adres, maar in sommige gevallen kunnen er twee adressen gevonden worden. In zo\'n geval zal SMF beide adressen opslaan, en ze ook allebei gebruiken bij bijvoorbeeld bancontroles. Je kunt beide adressen aanklikken en - indien gewenst - verbannen.';

$helptxt['ban_cannot_post'] = 'De \'kan niet posten\' restrictie zet het forum in een alleen-lezen-stand voor de gebande gebruiker. De gebruiker kan niet nieuwe topics maken, reageren op bestaande topics, persoonlijke berichten versturen of stemmen in polls. Wel kan de gebande gebruiker nog steeds persoonlijke berichten en topics lezen.<br /><br />Een waarschuwingsbericht wordt aan de gebruikers getoond die op deze manier zijn geband.';

$helptxt['posts_and_topics'] = '
	<ul class="normallist">
		<li>
			<strong>Berichteninstellingen</strong><br />
			Wijzig de instellingen die betrekking hebben op het plaatsen van berichten en de manier waarop de berichten worden weergegeven. Ook kun je hier de spellingscontrole aan zetten.
		</li><li>
			<strong>Bulletin Board Code</strong><br />
			Stel hier de code in waarmee forumberichten de juiste vormgeving kunnen krijgen. Stel in welke codes wel en welke codes niet gebruikt mogen worden.
		</li><li>
			<strong>Gecensureerde woorden</strong>
			Om het taalgebruik op het forum in toom te houden, kun je bepaalde woorden censureren. Deze functie stelt je in staat om verboden woorden om te zetten in onschuldige varianten.
		</li><li>
			<strong>Topicinstellingen</strong>
			Stel alles in met betrekking tot topics. Hoeveel er op een pagina gaan, of sticky topics ingeschakeld zijn, bij welk aantal berichten een topic \'hot\' is, etc.
		</li>
	</ul>';

$helptxt['spider_mode'] = 'Sets the logging level.<br>
Standard - Logs minimal spider activity.<br>
Moderate - Provides more accurate statistics.<br>
Aggressive - Same as &quot;Moderate&quot;, but logs data about each page visited.';

$helptxt['spider_group'] = 'By selecting a restrictive group, when a guest is detected as a search crawler it will automatically be assigned any &quot;deny&quot; permissions of this group in addition to the normal permissions of a guest. You can use this to provide lesser access to a search engine than you would a normal guest. You might for example wish to create a new group called &quot;Spiders&quot; and select that here. You could then deny permission for that group to view profiles to stop spiders indexing your members profiles.<br>Note: Spider detection is not perfect and can be simulated by users so this feature is not guaranteed to restrict content only to those search engines you have added.';
$helptxt['show_spider_online'] = 'Deze instelling stelt je in staat om in te stellen of spiders moeten verschijnen in de \'Wie is online\'-lijst op de boardindex en \'Wie is online\'-pagina. Mogelijke waarden:
	<ul class="normallist">
		<li>
			<strong>Helemaal niet</strong><br />
			Spiders zullen als gasten worden getoond voor alle gebruikers.
		</li><li>
			<strong>Toon spiderhoeveelheid</strong><br />
			Op de boardindex zal het aantal spiders dat momenteel het forum bezoekt worden weergegeven.
		</li><li>
			<strong>Toon spidernamen</strong><br />
			De naam van elke spider zal worden getoond, zodat leden kunnen zien welke spiders momenteel het forum bezoeken. Dit heeft effect op zowel de boardindex als de \'Wie is online\'-pagina.
		</li><li>
			<strong>Toon spidernamen - alleen voor beheerders</strong><br />
			Hetzelfde als hierboven, maar dan zien enkel beheerders de spiderstatussen - alle andere gebruikers zien ze als gasten.
		</li>
	</ul>';

$helptxt['birthday_email'] = 'Kies hier tekst voor de verjaardags e-mail die je wilt verzenden. Er zal een voorbeeld verschijnen in de velden e-mailonderwerp en e-mailinhoud.<br><strong>Let op:</strong> het wijzigen van deze instelling activeert niet automatisch het verzenden van deze e-mails. Om het verzenden van de verjaardags e-mails in te schakelen ga je naar <a href="%1$s?action=admin;area=scheduledtasks;%3$s=%2$s" target="_blank" rel="noopener">Geplande taken</a>. Daar vind je de optie om het verzenden van de verjaardags emails te activeren.';
$helptxt['pm_bcc'] = 'Als je een persoonlijk bericht verstuurt, kun je ervoor kiezen om een ontvanger als BCC (&quot;Blind Carbon Copy&quot;) in te stellen. BCC-ontvangers zijn niet zichtbaar voor andere ontvangers van het bericht.';

$helptxt['move_topics_maintenance'] = 'Dit stelt je in staat om alle topics van een board naar een ander board te verplaatsen.';
$helptxt['maintain_reattribute_posts'] = 'Je kunt deze functie gebruiken om posts die door gasten zijn geplaatst, aan een lid toe te kennen. Dit is bijvoorbeeld handig als een lid zijn account heeft verwijderd, maar toch van gedachten veranderd is en daarom zijn oude posts aan een nieuw account gekoppeld zou willen hebben.';
$helptxt['chmod_flags'] = 'Je kunt zelf instellen welke permissies je voor de geselecteerde bestanden wilt toekennen. Om dit te bereiken, kun je zelf de chmod-waarde in de vorm van een numerieke (octet) waarde invullen. Opmerking: deze functie heeft geen effect op het besturingssysteem Microsoft Windows.';

$helptxt['postmod'] = 'Deze sectie staat leden van het moderatorteam (met de juiste permissies) toe om berichten en topics goed te keuren alvorens ze getoond worden.';

$helptxt['field_show_enclosed'] = 'Encloses the user input between some text or html. This will allow you to add more instant message providers, images or an embed etc. For example:<br><br>
		&lt;a href="https://example.com/{INPUT}"&gt;&lt;img src="{DEFAULT_IMAGES_URL}/icon.png" alt="{INPUT}" /&gt;&lt;/a&gt;<br><br>
		Note that you can use the following variables:<br>
		<ul class="normallist">
			<li>{INPUT} - The input specified by the user.</li>
			<li>{SCRIPTURL} - Web address of forum.</li>
			<li>{IMAGES_URL} - Url to images directory in the users current theme.</li>
			<li>{DEFAULT_IMAGES_URL} - Url to the images directory in the default theme.</li>
			<li>{KEY} - Used when a field has multiple options, is the unique numeric ID used to identify it.</li>
		</ul>';

$helptxt['custom_mask'] = 'The input mask is important for your forum\'s security. Validating the input from a user can help ensure that data is not used in a way you do not expect. We have provided some simple regular expressions as hints.<br><br>
    Delimiters marking the beginning and end of the pattern are required! They are tildes (~) in the examples below.<br><br>
	<div class="smalltext" style="margin: 0 2em">
		&quot;~[A-Za-z]+~&quot; - Match all upper and lower case alphabet characters.<br>
		&quot;~[0-9]+~&quot; - Match all numeric characters.<br>
		&quot;~[A-Za-z0-9]{7}~&quot; - Match all upper and lower case alphabet and numeric characters seven times.<br>
		&quot;~[^0-9]?~&quot; - Forbid any number from being matched.<br>
		&quot;~^([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})$~&quot; - Only allow 3 or 6 character hexcodes.<br>
	</div><br><br>
	Additionally, special metacharacters ?+*^$ and {xx} can be defined.
	<div class="smalltext" style="margin: 0 2em">
		? - None or one match of previous expression.<br>
		+ - One or more of previous expression.<br>
		* - None or more of previous expression.<br>
		{xx} - An exact number from previous expression.<br>
		{xx,} - An exact number or more from previous expression.<br>
		{,xx} - An exact number or less from previous expression.<br>
		{xx,yy} - An exact match between the two numbers from previous expression.<br>
		^ - Start of string.<br>
		$ - End of string.<br>
		\ - Escapes the next character.<br>
	</div><br><br>
	More information and advanced techniques may be found on the Internet.';

$helptxt['topic_move_any'] = 'Als deze optie actief is, zal het gebruikers toegestaan zijn om topics te verplaatsen naar elk board dat ze kunnen zien. Zoniet, dan kunnen ze deze alleen verplaatsen naar boards waar ze permissies hebben om nieuwe posts te plaatsen.';

$helptxt['alert_pm_new'] = 'Notificaties van persoonlijke berichten worden niet in het Notificaties blok getoond, maar in de de "Mijn Berichten" lijst. ';
$helptxt['alert_event_new'] = 'Hierdoor zul je een notificatie of email ontvangen als er een nieuw evenement aan de kalender wordt toegevoegd. Je zult geen extra notificatie krijgen als je het board volgt waarin het kalender topic wordt geplaatst - de notificatie voor het volgen van het board zal dit al doen.';

$helptxt['force_ssl'] = '<b>Test SSL en HTTPS op jouw server voordat je deze instelling activeert, het kan je forum onbereikbaar maken.</b> Activeer de Onderhoudsmodus als je na deze instelling het forum niet meer kunt bereiken.<br><br><strong>Door deze instelling wijzig je de URL van je forum en de URLs voor de thema bestanden, afbeeldingen, smileys en avatars. Deze worden op basis van je instelling gewijzigd in http: of https: afhankelijk van de gekozen instelling. Aangepaste URLs blijven ongewijzigd.</strong>';
$helptxt['image_proxy_enabled'] = 'Noodzakelijk voor het invoegen van externe afbeeldingen bij gebruik van volledige SSL';
$helptxt['image_proxy_secret'] = 'Houd deze geheim, hiermee is je forum beschermd tegen het hot-linken van afbeeldingen. Verander deze instelling om afbeeldingen die al gehotlinkt zijn onbruikbaar te maken.';
$helptxt['image_proxy_maxsize'] = 'Maximale afbeeldingsgrootte die de SSL afbeelding proxy zal cachen: afbeeldingen die groter zijn worden niet in cache geplaatst. Ge-cachte afbeeldingen worden in de SMF cache map geplaatst, dus zorg ervoor dat je genoeg vrije ruimte hebt.';

$helptxt['enable_sm_stats'] = 'Indien actief zal dit Simple Machines in staat stellen om maandelijks basis statistieken van site op te halen. Hiermee is het voor ons mogelijk meer inzicht te krijgen welke inrichtingen gebruikt worden en  
waarvoor de software aangepast kan worden. Meer informatie kun je vinden op onze <a href="https://www.simplemachines.org/about/stats.php" target="_blank" rel="noopener">info pagina</a>.';

$helptxt['field_reg_require'] = 'Als dit veld verplicht is gesteld bij registratie zal het ook verplicht zijn bij het wijzigen van het profiel.';

// argument(s): $boarddir, $boardurl
$helptxt['cron_is_real_cron'] = 'By default, SMF adds to every page a small bit of JavaScript that prompts the user\'s browser to trigger SMF\'s cron.php in the background. This approach allows SMF to execute its scheduled tasks on a regular basis without requiring the admin to do any extra server configuration. However, some admins might prefer to configure their servers to directly execute cron.php on a regular basis. If you have done this, you can disable the JavaScript method.<br><br><strong>Note:</strong> Configuring your server to run scheduled tasks this way cannot be done from within SMF. You will need to use your server configuration software to do so. Typical tools for this purpose include <code>cron</code> (for Linux servers), <code>schtasks.exe</code> (for Windows servers), and <code>launchd</code> (for macOS servers). Most web hosting companies provide some sort of control panel interface to allow their customers to access these tools.<br><br>The path and URL for your forum\'s cron.php are:<br>Path: %1$s/cron.php<br>URL: %2$s/cron.php';

$helptxt['languages_txt'] = 'Deze taalregels worden in SMF gebruikt om plaatselijke versies van teksten in verschillende talen vast te leggen.<br><br>Als je een code als <code>&#37;1$s</code> in een regel vindt, dan is dit een variabele die SMF bij het uitvoeren vult met een waarde. Zorg ervoor dat deze variabelen in je aangepaste tekstregel blijven staan.';
$helptxt['languages_helptxt'] = 'Deze taalregels worden gebruikt om de zwevende helptekst popup berichten te tonen (zoals deze).';
$helptxt['languages_editortxt'] = 'Deze taalregels worden gebruikt in onderdelen gebruikt in de berichten editor.';
$helptxt['languages_tztxt'] = 'These language entries are used to build descriptions for time zones.<br><br>For example, the <code>Europe_Western</code> string may be combined with the <code>daylight_saving_time_false</code> string to produce "Western Europe Standard Time".<br><br>Note: If no description is provided for a given time zone, SMF will generate a description using a list of locations within that time zone.';
$helptxt['languages_txt_for_timezones'] = 'These language entries allow you to do the following:<br><ol class="bbc_list" style="list-style-type: decimal;"><li>Edit the names shown for individual locations anywhere they might be used in a context related to time zones. For example, you can tell SMF to show "Qaanaaq" for the location "America/Thule" instead of "Thule".</li><li>Edit the names shown for different countries. This can be done by editing the relevant <code>iso3166[]</code> string.</li></ol>';
$helptxt['languages_txt_for_email_templates'] = 'These language entries are used to create the email messages that SMF sends to your members.';
$helptxt['languages_native_name'] = 'De naam van de taal in zichzelf, in het eigen schrift.';
$helptxt['languages_character_set'] = 'De tekencodering die gebruikt wordt voor deze taal. Sinds SMF 2.1 moet dit altijd "UTF-8" zijn.';
$helptxt['languages_locale'] = 'De landinstelling wordt gebruikt om verschillende opmaakconventies te bepalen, en andere dingen.<br><br>De landinstelling neemt normaal gesproken de vorm aan van een taalcode van twee tekens, en optioneel een laag streepje en een landcode van twee tekens. Zo kan <code>nl</code> staan voor Nederlands in het algemeen, terwijl <code>nl_BE</code> specifiek staat voor Belgisch-Nederlands.';
$helptxt['languages_rtl'] = 'Vink deze optie aan als deze taal van rechts naar links gelezen wordt (zoals Hebreeuws of Arabisch).';
$helptxt['languages_dictionary'] = 'Dit bepaalt het hoofdwoordenboek dat zal worden gebruikt door de <a href="https://php.net/function.pspell-new" target="_blank" rel="noopener">pSpell</a>-spellingscontrole (als het is ge&iuml;nstalleerd).';
$helptxt['languages_spelling'] = 'Dit bepaalt de taalvariant die gebruikt zal worden door de <a href="https://php.net/function.pspell-new" target="_blank" rel="noopener">pSpell</a>-spellingscontrole. Voor veel talen is dit niet van toepassing.';
$helptxt['languages_recaptcha'] = 'The language code to use for the reCAPTCHA verification widget.<br><br>See Google\'s reCAPTCHA documentation for its <a href="https://developers.google.com/recaptcha/docs/language" target="_blank" rel="noopener" class="bbc_link">list of supported languages</a>.';
// The GDPR page of the EU exists in several languages; change the language code at the end of the url
$helptxt['requireAgreement'] = 'This setting is recommended to be enabled in order to comply with the rules of the <a href="https://ec.europa.eu/commission/priorities/justice-and-fundamental-rights/data-protection/2018-reform-eu-data-protection-rules_en" target="_blank" rel="noopener" class="bbc_link">GDPR</a>.';
// The GDPR page of the EU exists in several languages; change the language code at the end of the url
$helptxt['requirePolicyAgreement'] = 'This setting is recommended to be enabled in order to comply with the rules of the <a href="https://ec.europa.eu/commission/priorities/justice-and-fundamental-rights/data-protection/2018-reform-eu-data-protection-rules_en" target="_blank" rel="noopener" class="bbc_link">GDPR</a>.';

?>