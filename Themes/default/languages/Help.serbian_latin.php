<?php
// Version: 2.1 RC3; Help

global $helptxt, $scripturl;

$txt['close_window'] = 'Zatvori prozor';

$helptxt['manage_boards'] = '	<b>Upravljanje forumima</b><br />
	U ovom meniju možete da napravite/promenite raspored/uklonite forume i kategorije iznad njih.
	Na primer, ako biste imali sveobuhvatni sajt koji nudi informacije iz &quot;Sporta&quot;, &quot;Automobila&quot; i &quot;Muzike&quot;,
	ovo bi bile kategorije koje biste napravili. Pod svakom od ovih kategorija verovatno biste želeli
	da napravite &quot;pod-kategorije&quot; iliti &quot;forume&quot; za svaku temu unutar njih. To je prosta hijerarhija sa ovom strukturom: <br />
	<ul>
		<li>
			<b>Sportovi</b>
			&nbsp;- &quot;kategorija&quot;
		</li>
		<ul>
			<li>
				<b>Košarka</b>
				&nbsp;- forum kategorije &quot;Sportovi&quot;
			</li>
			<ul>
				<li>
					<b>Statistika</b>
					&nbsp;- potforum foruma &quot;Košarka&quot;
				</li>
			</ul>
			<li><b>Fudbal</b>
			&nbsp;- forum kategorije &quot;Sportovi&quot;</li>
		</ul>
	</ul>
	Kategorije vam omogućuju podelu foruma na teme i postove (&quot;Automobili,
	Sportovi&quot;), i  &quot;Forume&quot; u kojima se nalaze teme i postovi. Korisnici koje zanima Punto
	bi pisali poruke u  &quot;Automobili->Punto&quot;. Kategorije omogućuju da korisnici lako pronađu ono 
        što ih najviše zanima: Umesto &quot;Prodavnica&quot; imate
	&quot;Hardver&quot; i &quot;Odeća&quot; odeljke koji vas zanimaju. Ovo pojednostavljuje
	pretragu za &quot;monitorima&quot; jer možete otići u Hardver
	Prodavnicu &quot;kategoriju&quot; umesto Prodavnicu za odeću (gde ćete teško naći nešto o monitorima).<br />
	Kao što je to gore navedeno, Forum je ključna tema ispod koje je forumska kategorija.
	Ako želite da razgovarate o &quot;Puntu&quot; ići ćete u &quot;Automobili&quot; kategoriju i
	i skok u &quot;Punto&quot; forum da napišete svoje mišljenje u tom forum.<br />
	Administratorske funkcije za ovu stavku menija su da pravite nove forume u svakoj kategoriji , premeštate ih (stavi  &quot;Punto&quot; iza &quot;Ševrolet&quot;),ili
	da obrišete forum potpuno.';

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

$helptxt['ban_members'] = '<strong>Zabrana Članova</strong><br />
	SMF pruža mogućnost da &quot;zabranite&quot; korisnike, ljude koji su izneverili poverenje foruma
	spamujući, varajući itd. Omogućava vam za korisnike koji su štetni za vaš forum . Kao administrator, kada pregledate poruke, možete da vidite svaku IP adresu korisnika korišćenu u poruci u to vreme. U popisu zabrana,
	jednostavno unesite tu IP adresu, sačuvajte, i ne mogu više pisati poruke sa te lokacije.<br />Možete takođe zabranjivati ljudi preko njihovih imejl adresa.';

$helptxt['featuresettings'] = '<strong>Mogućnosti i opcije</strong><br>
Postoji više opcija u ovom odeljku koje možete da promenite prema vašem izboru.';

$helptxt['modsettings'] = '<strong>Podešavanje modifikacija</strong><br> Ovaj odeljak bi trebalo da sadrži sva podešavanja vezana za modifikacije instalirane na vašem forumu. ';

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

$helptxt['registrations'] = '<strong>Upravljanje Registracijama</strong><br />
	Ovaj odeljak sadrži sve funkcije koje mogu da budu potrebne da upravljate novim registracijama na forumu. Sadrži do četiri odeljka koji su vidljivi u zavisnosti od vaših forumskih podešavanja. To su:<br /><br />
	<ul>
		<li>
			<b>Registracija novog člana</b><br />
			Iz ovog prikaza možete da izaberete da registrujete naloge za nove članove u njihovo ime. Ovo može da bude korisno u forumima gde je registracija zatvorena za nove članove, ili u slučajevima kada administrator želi da napravi test nalog. Ako je opcija da zahteva aktiviranje računa izabrana članu će biti upućen imejl a aktivacioni link mora biti kliknut pre nego što može da koristi nalog. Isto tako možete izabrati da korisniku imejlom pošaljete novu lozinku<br /><br />
		</li>
		<li>
			<b>Uređivanje Registracionog Sporazuma</b><br />
			Ovo vam omogućava da podesite tekst sporazuma o registraciji prikazanog kada se članovi registruju na vaš forum.
			Možete dodati ili ukloniti bilo šta u podrazumevanom sporazumu o registraciji, koji je uvršten u SMF.<br /><br />
		</li>
		<li>
			<b>Podešavanje Rezervisanih Imena</b><br />
			Korišćenjem ovog interfejsa možete navesti reči ili imena koja se ne mogu koristiti od strane vaših korisnika.<br /><br />
		</li>
		<li>
			<b>Podešavanja</b><br />
			Ova sekcija je vidljiva samo ako imate administratorske privilegije na forumu. Ovde možete podesiti vrstu registracije 
                        koja će biti korišćena na forumu, kao i ostala podešavanja vezana za samu registraciju.
		</li>
	</ul>';

$helptxt['modlog'] = '<strong>Urednički zapisi</strong><br> Ova sekcija sadrži zapise o svim uredničkim akcijama kako bi mogli da pratite akcije urednika. Kako bi se osigurali da urednici ne brišu preduzete akcije, zapisi se mogu izbrisati tek 24 časa nakon preduzete akcije.';
$helptxt['adminlog'] = '<strong>Administratorski zapisi</strong><br />
	Ova sekcija omogućava članovima administratorskog tima da prate neke administrativne akcije koje su se dogodile na forumu.Kako bi se osiguralo da administratori ne mogu ukloniti podatke za akcije koje su sprovedene, unosi ne mogu biti obrisani do isteka 24 sata nakon što je akcija sprovedena.';
$helptxt['userlog'] = '<strong>Profile Edits Log</strong><br>
	This page allows members of the admin team to view changes users make to their profiles, and is available from inside a user\'s profile area.';
$helptxt['warning_enable'] = '<b>Sistem upozoravanja korisnika</b><br />
	Ova funkcija omogućava članovima administratorskog i uredničkog tima izdavanje upozorenja korisnicima - i da koriste nivo upozorenja  korisnika da utvrde raspoložive radnje na forumu. Nakon omogućavanja ove funkcije dozvola će biti dostupna u okviru Dozvola koje definišu koje grupe mogu izdavati upozorenja korisnicima. Nivoi upozorenja mogu da se podešavaju u profilu korisnika. Sledeće dodatne opcije su:
	<ul>
		<li>
			<b>Nivo upozorenja za nadgledanje</b><br />
			Ova postavka određuje procenat nivoa upozorenja korisniku i automatski pridružuje &quot;nadgledaj&quot; korisniku.
			Svaki korisnik koji je &quot;nadgledan&quot; se prikazuje u određenom prostoru uredničkug centra.
		</li>
		<li>
			<b>Nivo upozorenja za uređivanje komentara</b><br />
			Korisniku koji prekorači vrednost ovog podešavanja sve poruke moraju biti odobrene od urednika pre nego što se pojave na forumu.
			Ovo će prepisati sve lokalne forumske dozvole koje postoje a koje se odnose na uređivanje poruka.
		</li>
		<li>
			<b>Nivo upozorenja za ućutkivanje</b><br />
			Ako je ovaj nivo upozorenja prekoračen od korisnika naći će se pod zabranom poruka. Korisnik će izgubiti sva prava za poruke.
		</li>
		<li>
			<b>Najveći broj poena za upozoravanje po danu</b><br />
			Ova postavka ograničava vrednost poena koje urednik može dodati/oduzeti određenom članu u periodu od 24 sata. Ovo može biti korišćeno da ograniči šta urednik može uraditi u kraćem vremenskom periodu. Ova postavka se može zabraniti podešavanjem vrednosti na nulu. Znajte da nema uticaja na članove sa administratorskim dozvolama.
		</li>
	</ul>';
$helptxt['warning_watch'] = 'This setting defines the percentage warning level a member must reach to automatically assign a &quot;watch&quot; to the member. Any member who is being &quot;watched&quot; will appear in the watched members list in the moderation center.';
$helptxt['warning_moderate'] = 'Any member passing the value of this setting will find all their posts require moderator approval before they appear to the forum community. This will override any local board permissions which may exist related to post moderation.';
$helptxt['warning_mute'] = 'If this warning level is passed by a member they will find themselves under a post ban. The member will lose all posting rights.';
$helptxt['user_limit'] = 'This setting limits the amount of points a moderator may add/remove to any particular member in a twenty four hour period. This
			can be used to limit what a moderator can do in a small period of time. This can be disabled by setting it to a value of zero. Note that
			any members with administrator permissions are not affected by this value.';

$helptxt['error_log'] = '<strong>Dnevnik grešaka</strong><br />
	Dnevnik grešaka prati i zapisuje sve ozbiljne greške na koje naiđe dok korisnici koriste vaš forum. Prikazuje sve ove greške po datumu koje mogu biti
	poređane klikom na crnu strelicu pored svakog datuma. Dodatno možete odvojiti greške klikom na sličicu pored statističke greške. To vam omogućava da ih odvojite, na primer, po članu. Kada je odvajanje aktivno biće prikazani samo rezultati koji odgovaraju tom odvajanju.';
$helptxt['theme_settings'] = '<strong>Podešavanje Tema</strong><br />
	Prikaz podešavanja vam omogućava da menjate podešavanja tema. Ova podešavanja uključuju opcije kao što su direktorijum teme i URL informacije ali i opcije koje utiču na izgled teme na forumu. Većina tema ima različite opcije koje može da podešava sam korisnik, omogućava vam da prilagodite temu vašim individualnim potrebama foruma.';
$helptxt['smileys'] = '<strong>Smajli Centar</strong><br />
	Ovde možete dodati i ukloniti smajlije, i skupove smajlija. Važno je zapamtiti da ako je jedan smajli u jednom skupu, onda je i u svim skupovima - u suprotnom, bi moglo biti zbunjujuće za vaše korisnike korišćenje različitih skupova .<br /><br />

	U mogućnosti ste takođe da uređujete ikone poruka odavde, ako ste ih omogućili na stranici podešavanja.';
$helptxt['calendar'] = '<strong>Podešavanja Kalendara</strong><br> Ovde možete promeniti trenutna podešavanja kalendara, kao i  dodati ili promeniti praznike koji se pojavljuju u kalendaru.';
$helptxt['cal_export'] = 'Exports a text file in the iCal format for importing into other calendar applications';
$helptxt['cal_highlight_events'] = 'This setting allows you to highlight events on the Mini Calendars, Main Calendar, both places, or disable event highlighting.';
$helptxt['cal_highlight_holidays'] = 'This setting allows you to highlight holidays on the Mini Calendars, Main Calendar, both places, or disable event highlighting.';
$helptxt['cal_highlight_birthdays'] = 'This setting allows you to highlight birthdays on the Mini Calendars, Main Calendar, both places, or disable event highlighting.';
$helptxt['cal_disable_prev_next'] = 'If this setting is checked, the three month blocks on the left hand side of the page will be disabled.';
$helptxt['cal_display_type'] = 'This setting allows you to change the display type of the calendar.<br><br><strong>Comfortable:</strong> makes the rows of the calendar big.<br><strong>Compact:</strong> makes the rows of the calendar small.';
$helptxt['cal_week_links'] = 'If this setting is checked, links will be added alongside each week in the calendar.';
$helptxt['cal_prev_next_links'] = 'If this setting is checked, previous month and next month links will be added to the top of each month for easy navigation.';
// argument(s): $txt['months_short'][1], $txt['months_titles'][1]
$helptxt['cal_short_months'] = 'If this setting is checked, month names within the calendar will be shortened.<br><br><strong>Enabled:</strong> %1$s 1<br><strong>Disabled:</strong> %2$s 1';
// argument(s): $txt['days_short'][1], $txt['days'][1]
$helptxt['cal_short_days'] = 'If this setting is checked, day names within the calendar will be shortened.<br><br><strong>Enabled:</strong> %1$s<br><strong>Disabled:</strong> %2$s';

$helptxt['serversettings'] = '<strong>Server Settings</strong><br>
	Here you can perform some core configuration for your forum. This page includes the database and URL settings, as well as other
	important configuration items such as mail settings and caching. Think carefully whenever editing these settings as an error may
	render the forum inaccessible';
$helptxt['manage_files'] = '	<ul>
		<li>
			<b>Pretraživanje Datoteka</b><br />
			Pretraživanje svih priloga, avatara i prikazanih sličica ponranjenih na SMF-u.<br /><br />
		</li><li>
			<b>Podešavanje Priloga</b><br />
			Konfigurišite gde se prilozi čuvaju i podesite ograničenja za vrste priloga.<br /><br />
		</li><li>
			<b>Podešavanje Avatara</b><br />
			Konfigurišite gde se avatari čuvaju i upravljajte uklapanjem avatara.<br /><br />
		</li><li>
			<b>Održavanje datoteka</b><br />
			Proverite i popravite bilo koju grešku u direktorijumu za priloge i brišite odabrane priloge.<br /><br />
		</li>
	</ul>
';

$helptxt['topicSummaryPosts'] = 'Ovo vam omogućava da podesite broj prethodnih poruka prikazanih u temi na strani za odgovor.';
$helptxt['enableAllMessages'] = 'Podešavanje <em>maksimalnog</em> broja poruka teme koje se mogu prikazati povezane.  Podešavanje na niže od &quot;Maksimum poruka za prikazivanje na stranici teme&quot; jednostavno znači da se ne prikazuju, a podešavanje na previsoko može da uspori vaš forum.';
$helptxt['allow_guestAccess'] = 'Uklanjanje potvrde će sprečiti goste da rade bilo šta osim osnovnih akcija - prijavljivanje, registracija, potsetnik lozinke. itd. - na vašem forumu.Nije isto što i zabrana gostima da pristupaju forumima.';
$helptxt['userLanguage'] = 'Uključivanje ove opcije će omogućiti korisnicima da odaberu jezik koji će koristiti na forumu. Ovo ne utiče na podrazumevani odabir jezika.';
$helptxt['trackStats'] = 'Statistike:<br />To će omogućiti korisnicima da vide najnovije poruke i najpopularnije teme na forumu. To će takođe prikazati nešto statističkih podataka, kao što je najviše prisutnih članova, nove članove i nove teme.<hr />
		Pregledi stranica:<br />Dodaje još jedan stubac u statistiku stranice sa brojem pregleda stranica na vašem forumu.';
$helptxt['titlesEnable'] = 'Uključivanje Korisničkih Naslova će dozvoliti članovima sa odgovarajućim dozvolama da naprave poseban naziv za sebe.To će biti prikazano ispod imena.<br /><em>na primer:</em><br />Pera<br />Dobrica';
$helptxt['onlineEnable'] = 'Ovo će prikazati sličicu koja označava da li je korisnik prijavljen ili odjavljen';
$helptxt['todayMod'] = 'Ovo prikazuje &quot;Danas&quot; ili &quot;Juče&quot; umesto datuma.<br /><br />
		<strong>Primeri:</strong><br /><br />
		<dt>
			<dt>Zabranjeno</dt>
			<dd>Oktobarr 3, 2009 u 12:59:18 pre podne</dd>
			<dt>Samo Danas</dt>
			<dd>Danas u 12:59:18 pre podne</dd>
			<dt>Danas &amp; Juče</dt>
			<dd>Juče u 09:36:55 posle podne</dd>
		</dt>';
$helptxt['disableCustomPerPage'] = 'Potvrdite ovu opciju da sprečite da korisnici prilagođavaju količinu poruka i tema za prikazivanje po stranici na Početnoj strani Poruka odnosno stranici Prikaza Tema.';
$helptxt['enablePreviousNext'] = 'Ovo će pokazati vezu do sledeće i prethodna teme.';
$helptxt['pollMode'] = 'Ova određuje da li su ankete omogućene ili ne. Ako su ankete zabranjene, bilo koja postojeća ankete će biti sakrivena u popisu tema. Možete izabrati da se prikazuju redovne teme bez prikaza pripadajućih anketa izborom &quot;Prikaži Postojeće Ankete kao Teme &quot;.<br /><br />Za izbor ko može da pravi ankete, gleda ankete, i slično, možete dozvoliti i zabranite te dozvole. Setite se ovog ako ankete ne rade.';
$helptxt['enableCompressedOutput'] = 'Ova opcija će sažeti izlaz da bi se smanjila potrošnja propusnog opsega,ali zahteva da zlib bude instaliran.';
$helptxt['httponlyCookies'] = 'Cookies won\'t be accessible by scripting languages, such as JavaScript. This setting can help to reduce identity theft through XSS attacks. This can cause issues with third party scripts but should be on wherever possible.';
$helptxt['databaseSession_enable'] = 'Ova opcija koristi bazu podataka za skladištenje podataka sesija - bolje je za balansiranje opterećenja servera, pomaže oko svih pitanja isteka vremena i može da učini forum bržim.';
$helptxt['databaseSession_loose'] = 'Uključivanjem ovog će se smanjiti propusni opseg koji vaš forum koristi, otklikavanjem neće ponovo učitati stranice - loša strana je da se (nove) ikone neće ažurirati, između ostalog. (Ukoliko ne možete da kliknete na toj stranici vratite se nazad.)';
$helptxt['databaseSession_lifetime'] = 'Ovo je broj proteklih sekundi za sesije nakon čega će biti nedostupna.  Ako se sesiji ne pristupa suviše dugo, to znači da je &quot;istekla&quot;. Sve veće od 2400 je preporučljivo.';
$helptxt['tfa_mode'] = 'You can add a second level of security to your forum by enabling <a href="https://en.wikipedia.org/wiki/Two_factor_authentication">Two Factor Authentication</a>. 2FA forces your users to add a enter a machine-generated code after the regular login. You need to configure 2FA to yourself before you are able to force it to other users!';
$helptxt['cache_enable'] = 'SMF performs caching at a variety of levels. The higher the level of caching enabled the more CPU time will be spent retrieving cached information. If caching is available on your machine it is recommended that you try caching at level 1 first.';
$helptxt['cache_memcached'] = 'If you are using memcached you need to provide the server details. This should be entered as a comma separated list as shown in the example below:<br><br>	&quot;server1,server2,server3:port,server4&quot;<br><br>Note that if no port is specified SMF will use port 11211 unless the host contains a slash, then it is assumed to be an alternative transport and the port will be set to 0. SMF will attempt to perform rough/random load balancing across the specified servers.';
$helptxt['cache_cachedir'] = 'This setting is only for the smf file-based cache system. It specifies the path to the cache directory. It is recommended that you place this in /tmp/ if you are going to use this, although it will work in any directory';
$helptxt['cache_sqlite_cachedir'] = 'This setting is only for the SQLite database cache system. It specifies the path to the cache directory. It is recommended that you place this in /tmp/ if you are going to use this, although it will work in any directory';
$helptxt['enableErrorLogging'] = 'Ovo zapisuje sve greške, kao što je neuspešna prijava, tako možete da vidite šta je krenulo loše.';
$helptxt['enableErrorQueryLogging'] = 'Ovo će omogućiti slanje celog upita baze u evidenciju grešaka.  Potrebno je da evidencija greška bude uključena.<br /><br /><strong>Napomena: Ovo će uticati na filter evidencije grešaka po grešci koja je nastala.</strong>';
$helptxt['disallow_sendBody'] = 'This option removes the option to receive the text of replies and posts in notification emails.<br /><br />Often, members will reply to the notification email, which in most cases means the webmaster receives the reply.';
$helptxt['enable_ajax_alerts'] = 'This option allows your members to receive AJAX notifications. This means that members don\'t need to refresh the page to get new notifications.<br><strong>DO NOTE:</strong> This option might cause a severe load at your server with many users online.';
$helptxt['alerts_auto_purge'] = 'Once an alert has been read, it is rarely needed again. For performance reasons, it is a good idea to automatically delete them after a while.';
$helptxt['jquery_source'] = 'This will determine the source used to load the jQuery Library. <em>Auto</em> will use the CDN first and if not available fall back to the local source. <em>Local</em> will only use the local source. <em>CDN</em> will only load it from Google CDN network';
$helptxt['compactTopicPagesEnable'] = 'This will just show a selection of the number of pages.<br /><em>Example:</em>
		&quot;3&quot; to display: 1 ... 4 [5] 6 ... 9 <br />
		&quot;5&quot; to display: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'Ovo prikazuje vreme u sekundama koje je trebalo SMF-u da napravi stranicu, na dnu foruma.';
$helptxt['removeNestedQuotes'] = 'Ovo će ukloniti ugneždene citate iz posta kada se citira post pomoću citat linka.';
$helptxt['max_image_width'] = 'Ovo vam omogućava da podesite najveću veličinu postavljenih slika. Nema uticaja na slike koje imaju manju veličinu.';
$helptxt['mail_type'] = 'This setting allows you to choose either PHP\'s default settings, or to override those settings with SMTP.  PHP doesn\'t support using authentication with SMTP (which many hosts require, now) so if you want that you should select SMTP.  Please note that SMTP can be slower, and some servers will not take usernames and passwords.<br /><br />You don\'t need to fill in the SMTP settings if this is set to PHP\'s default.';
$helptxt['attachment_manager_settings'] = 'Attachments are files that members can upload, and attach to a post.<br /><br />
		<strong>Check attachment extension</strong>:<br /> Do you want to check the extension of the files?<br />
		<strong>Allowed attachment extensions</strong>:<br /> You can set the allowed extensions of attached files.<br />
		<strong>Attachments directory</strong>:<br /> The path to your attachment folder<br />(example: /home/sites/yoursite/www/forum/attachments)<br />
		<strong>Max attachment folder space</strong> (in KB):<br /> Select how large the attachment folder can be, including all files within it.<br />
		<strong>Max attachment size per post</strong> (in KB):<br /> Select the maximum filesize of all attachments made per post.  If this is lower than the per-attachment limit, this will be the limit.<br />
		<strong>Max size per attachment</strong> (in KB):<br /> Select the maximum filesize of each separate attachment.<br />
		<strong>Max number of attachments per post</strong>:<br /> Select the number of attachments a person can make, per post.<br />
		<strong>Display attachment as picture in posts</strong>:<br /> If the uploaded file is a picture, this will show it underneath the post.<br />
		<strong>Resize images when showing under posts</strong>:<br /> If the above option is selected, this will save a separate (smaller) attachment for the thumbnail to decrease bandwidth.<br />
		<strong>Maximum width and height of thumbnails</strong>:<br /> Only used with the &quot;Resize images when showing under posts&quot; option, the maximum width and height to resize attachments down from.  They will be resized proportionally.';
$helptxt['attachmentCheckExtensions'] = 'For some communities, you may wish to limit the types of files that users can upload by checking the extension: e.g. myphoto.jpg has an extension of jpg.';
$helptxt['attachmentExtensions'] = 'If "check attachment\'s extension" above is ticked, these are the extensions that will be permitted for new attachments.';
$helptxt['attachmentUploadDir'] = 'The path to your attachment folder on the server<br>(example: /home/sites/yoursite/www/forum/attachments)';
$helptxt['attachmentDirSizeLimit'] = ' Select how large the attachment folder can be, including all files within it.';
$helptxt['attachmentPostLimit'] = ' Select the maximum filesize (in KB) of all attachments made per post. If this is lower than the per-attachment limit, this will be the limit.';
$helptxt['attachmentSizeLimit'] = 'Select the maximum filesize of each separate attachment.';
$helptxt['attachmentNumPerPostLimit'] = ' Select the number of attachments a person can make per post.';
$helptxt['attachmentShowImages'] = 'If the uploaded file is a picture, it will be displayed underneath the post.';
$helptxt['attachmentThumbnails'] = 'If the above setting is selected, this will save a separate (smaller) attachment for the thumbnail to decrease bandwidth.';
$helptxt['attachmentThumbWidth'] = 'Only used with the &quot;Resize images when showing under posts&quot; setting. This is the maximum width to resize attachments down to. They will be resized proportionally.';
$helptxt['attachmentThumbHeight'] = 'Only used with the &quot;Resize images when showing under posts&quot; setting. This is the maximum height to resize attachments down to. They will be resized proportionally.';
$helptxt['attachmentDirFileLimit'] = 'Max number of files per directory';
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
$helptxt['attachment_image_paranoid'] = 'Obeležavanje ove opcije će omogućiti jaku sigurnosnu proveru priloženih datoteka. Upozorenje! Ovako opsežne provere mogu odbaciti i validne slike takođe. Vrlo je preporučljivo da koristite ovu opciju zajedno sa rekodiranjem, kako bi SMF pokušao da povrati slike koje ne prođu sigurnosni test: ako uspe slike će biti očišćene i prihvaćene. U suprotnom, ukoliko rekodiranje priloženih datoteka nije uključeno, sve priložene datoteke koje ne prođu test će biti odbačene.';
$helptxt['attachment_image_reencode'] = 'Obeležavanje ove opcije će omogućiti pokušaj rekodiranja priloženih slikovnih datoteka. Slike koje su redekodirane su sigurnije. Imajte u vidu da će rekodiranje animiranih slika rezultirati pretvaranjem tih slika u statične. <br /> Ova opcija je moguća jedino ako imate GD modul instaliran na vašem serveru.';
$helptxt['attachment_thumb_memory'] = 'The larger the source image (size & width x height), the higher the memory requirements are for the system to successfully create a thumbnail image.<br>Checking this setting, the system will estimate the required memory and will then request that amount. If successful, only then will it attempt to create the thumbnail.<br>This will result in fewer white page errors but may result in fewer thumbnails being created. Leaving this unchecked will always cause the system to try to create the thumbnail (with a fixed amount of memory). This may result in more white page errors.';
$helptxt['attachmentRecodeLineEndings'] = 'The script will re-code line endings according to your server.';
$helptxt['automanage_attachments'] = 'By default, SMF puts new attachments into a single folder. For most sites this is not a problem, but as a site grows it can be useful to have multiple folders to store attachments in.<br><br>This setting allows you to set whether you manage these folders yourself (e.g. creating a second folder and moving to it when you are ready) or whether you let SMF do it, based on criteria, such as when the current directory reaches a given size, or breaking down folders by years or even months on very busy sites.';
$helptxt['dont_show_attach_under_post'] = 'If enabled, the attachments embedded in the post won\'t appear under the post, but are still subject to be deleted.';
$helptxt['use_subdirectories_for_attachments'] = 'Create new directories.';
$helptxt['max_image_height'] = 'As with the maximum width, this setting indicates the maximum height a posted image can be.';
$helptxt['avatar_paranoid'] = 'Obeležavanje ove opcije će omogućiti jaku sigurnosnu proveru avatara. Upozorenje! Ovako opsežne provere mogu odbaciti i validne slike takođe. Vrlo je preporučljivo da koristite ovu opciju zajedno sa rekodiranjem avatara, kako bi SMF pokušao da povrati slike koje ne prođu sigurnosni test: ako uspe slike će biti očišćene i prihvaćene. U suprotnom, ukoliko rekodiranje avatara nije uključeno, svi avatari koji ne prođu test će biti odbačeni.';
$helptxt['avatar_reencode'] = 'Izbor ove opcije će omogućiti izbor ponovnog kodiranja priloženih avatara. Slike koje su rekodirane pružaju veću sigurnost. Imajte na umu da rekodiranje takođe sa sobom povlači sve animirane slike čineći ih statičnim. <br /> Ova opcija je moguća samo ako imate GD modul instaliran na vašem serveru.';
$helptxt['cal_enabled'] = 'Kalendar možete koristiti za prikazivanje rođendana, ili sličnih bitnih datuma i dešavanja zajednici.<br /><br /> <strong>Pokaži dane kao link do \'Dodaj događaj\'</strong>:<br />Ovo će omogućiti članovima da dodaju događaje za taj dan kada klliknu na taj datum<br /> <strong>Maksimalan broj dana na početnoj strani foruma</strong>:<br />Ako je upisano 7 biće prikazani događaji iz sledeće nedelje.<br /> <strong>Prikaži praznike na početnoj strani</strong>:<br />Prikaži današnje praznike na početnoj strani foruma.<br /> <strong>Prikaži događaje na početnoj strani</strong>:<br />Pokazuje današnje događaje na početnoj strani foruma.<br /> <strong>Podrazumevani forum za upisivanje</strong>:<br />Koji je podrazumevani forum za upisivanje događaja?<br /> <strong>Omogući događaje koji nisu povezani sa postom</strong>:<br />Omogućava postavljanje događaja koji nisu povezani sa temama ili postovima iz foruma.<br /> <strong>Minimalna godina</strong>:<br />Izaberite &quot;prvu&quot; godinu za prikazivanje u kalendaru.<br /> <strong>Maksimalna godina</strong>:<br />Izaberite &quot;poslednju&quot; godinu za prikazivanje u kalendaru<br /> <strong>Omogući događaje za više dana</strong>:<br />Obeležite za događaje koji traju više dana.<br /> <strong>Maksimalna dužina trajanja događaja</strong>:<br />Izaberite maksimalan broj dana koliko događaj može trajati.<br /><br /> Zapamtite da se korišćenje kalendara (dodavanje događaja, pregled događaja itd) kontroliše dozvolama foruma.
';
$helptxt['cal_link_postevent'] = 'This will allow members to post events for that day, when they click on that date';
$helptxt['cal_maxdays_advance'] = 'If this is set to 7, the next week\'s worth of events will be shown';
$helptxt['cal_allow_unlinkedevents'] = 'Allow members to post events without requiring them to be linked with a post in a board';
$helptxt['cal_min_year'] = 'Select the &quot;first&quot; year on the calendar list';
$helptxt['cal_max_year'] = 'Select the &quot;last&quot; year on the calendar list';
$helptxt['cal_maxevent_span'] = 'Select the maximum number of days that an event can span';
$helptxt['localCookies'] = 'SMF koristi kolačiće da sačuva informacije za prijavljivanje na klijent računaru.
	Kolačići mogu biti sačuvani globalno (mojserver.com) ili lokalno (mojserver.com/putanja/do/foruma).<br />
	Proverite ove opcije ako vaši iskustveni problemi sa korisnicima daju automatsko odjavljivanje.<hr />
	Globano sačuvani kolačići su manje sigurni kada se koriste na deljenim vebserverima (npr. Tripod).<hr />
	Lokalni kolačići ne deluju izvan forumskog foldera tako, ako je vaš forum smešten na www.mojserver.com/forum, stranice kao www.mojserver.com/index.php ne mogu pristupati informacijama naloga.
	Izuzetno kad koristite SSI.php, globalni kolačići su preporučljivi.';
$helptxt['enableBBC'] = 'Izborom ove opcije omogućavate vašim članovima da koriste Bilten Forum Kod (BBC) širom foruma, omogućavate korisnicima da oblikuju poruke sa slikama, oblikuju štampu i više.';
$helptxt['legacy_bbc'] = 'Legacy BBCodes are obsolete and cannot be used in new posts. However, they will be parsed in existing posts if enabled here.<br><br>Enabling legacy BBCodes is only useful if your forum was upgraded from a previous version of SMF.<br><br>Also, even when they are enabled, some legacy BBCodes will not be rendered in the same way that they once were. For example, the [flash] BBCode will simply show a link to the Flash content instead of embedding it.';
$helptxt['time_offset'] = 'Some systems do not store times in UTC. Use this setting to specify the time difference (in hours) between the server time and UTC if needed. Negative and decimal values are permitted.';
$helptxt['default_timezone'] = 'This is the default timezone used for the display of times throughout the forum.';
$helptxt['timezone_priority_countries'] = 'This setting lets you push the time zones for a certain country or countries to the top of the list of selectabled time zones that is shown when users are configuring their profiles, creating calendar events, etc.<br><br>For example, if many of your forum\'s members live in New Zealand or Fiji, you may enter "NZ,FJ" to make it easier for them to find the most relevant time zones quickly.<br><br>You can find the complete list of ISO country codes by searching the Internet for "<a href="https://www.google.com/search?q=iso+3166-1+alpha-2" target="_blank" rel="noopener">ISO 3166-1 alpha-2</a>".';
$helptxt['spamWaitTime'] = 'Ovde možete izabrati vreme koji mora da protekne između poruka. Ovo se može koristiti da spreči ljude da "spamuju" vaš forum ograničavanjem koliko često mogu da pišu.';

$helptxt['enablePostHTML'] = 'This will allow the posting of some basic HTML tags:
	<ul class="normallist">
		<li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;strong&gt;, &lt;ins&gt;, &lt;del&gt;</li>
		<li>&lt;a href=&quot;&quot;&gt;</li>
		<li>&lt;img src=&quot;&quot; alt=&quot;&quot; /&gt;</li>
		<li>&lt;br&gt;, &lt;hr&gt;</li>
		<li>&lt;pre&gt;, &lt;blockquote&gt;</li>
	</ul>';

$helptxt['themes_manage'] = 'Here you can install new themes and select which themes your users can chose from, the default theme that new users and guests will use, as well as other theme selection settings.';
$helptxt['theme_install'] = 'This allows you to install new themes.  You can do this from an already created directory, by uploading an archive for the theme, or by copying the default theme.<br /><br />Note that the archive or directory must have a <tt>theme_info.xml</tt> definition file.';
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
$helptxt['globalCookiesDomain'] = 'When using subdomain independent cookies (global cookies), you can specify which domain should be used for them. This should, of course, be set to your main domain - for example, if you are using <em>forum.example.com</em> and <em>www.example.com</em>, the domain is <em>example.com</em> in this case. You should not put the <em>http://</em> or <em>https://</em> part in front of it.';
$helptxt['secureCookies'] = 'Enabling this option will force the cookies created for users on your forum to be marked as secure. Only enable this option if you are using HTTPS throughout your site as it will break cookie handling otherwise!';
$helptxt['securityDisable'] = 'When enabled, this <em>disables</em> the additional password check for the administration page. This is not recommended!';
$helptxt['securityDisable_why'] = 'Enter your current password. (The same one you use to login.)<br><br>The requirement to enter this helps ensure that you want to do whatever administration you are doing, and that it is <strong>you</strong> doing it.';
$helptxt['securityDisable_moderate'] = 'When enabled, this <em>disables</em> the additional password check for the moderation page. This setting is enabled by default.';
$helptxt['securityDisable_moderate_why'] = 'Enter your current password. (The same one you use to login.)<br><br>The requirement to enter this helps ensure that you want to do whatever moderation you are doing, and that it is <strong>you</strong> doing it.';
$helptxt['frame_security'] = 'Modern browsers now understand a security header presented by servers called X-Frame-Options. By setting this option you specify how you want to allow your site to be framed inside a frameset or a iframe. Disable will not send any header and is the most unsecure, however allows the most freedom. Deny will prevent all frames completely and is the most restrictive and secure. Allowing the Same Origin will only allow your domain to issue any frames and provides a middle ground for the previous two options.';
$helptxt['proxy_ip_header'] = 'This is the server header that will be trusted by SMF for containing the actual users IP address. Changing this setting can cause unexpected IP results on members. Please check with your server administrator, CDN provider or proxy administrator prior to changing these settings. Most providers will understand and use HTTP_X_FORWARDED_FOR. You should fill out the list of Servers sending the reverse proxy headers for security to ensure these headers only come from valid sources.';
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

$helptxt['failed_login_threshold'] = 'Set the number of failed login attempts before directing the user to the password reminder screen.';
$helptxt['loginHistoryDays'] = 'The number of days to keep login history under user profile tracking. The default is 30 days.';
$helptxt['oldTopicDays'] = 'If this option is enabled a warning will be displayed to the user when attempting to reply to a topic which has not had any new replies for the amount of time, in days, specified by this setting. Set this setting to 0 to disable the feature.';
$helptxt['edit_wait_time'] = 'Number of seconds allowed for a post to be edited before logging the last edit date.';
$helptxt['edit_disable_time'] = 'Number of minutes allowed to pass before a user can no longer edit a post they have made. Set to 0 disable. <br /><br /><i>Note: This will not effect any user who has permission to edit other peoples posts.</i>';
$helptxt['preview_characters'] = 'This setting sets the number of available characters for the first and last message topic preview.';
$helptxt['quote_expand'] = 'This setting allows large quotes to be cutoff and expanded to their full length by the user. The setting indicates the minimum height a quote needs to have for it to be collapsed. Quotes smaller than this setting won\'t be affected';
$helptxt['posts_require_captcha'] = 'This setting will force users to enter a code shown on a verification image each time they make a post to the board. Only users with a post count below the number set will need to enter the code - this should help combat automated spamming scripts.';
$helptxt['disable_wysiwyg'] = 'Ovo podešavanje onemogućava sve korisnike da koriste WYSIWYG (&quot;What You See Is What You Get&quot; - šta vidiš to i dobiješ) editor prilikom slanja poruka.';
$helptxt['lastActive'] = 'Podesi broj minuta da prikažeš ljude koji su aktivni u X minuta na početnoj stranici.Podrazumevano je 15 minuta.';

$helptxt['customoptions'] = 'This section defines the options that a user may choose from a drop down list. There are a few key points to note in this section:
	<ul>
		<li><b>Default Option:</b> Whichever option box has the &quot;radio button&quot; next to it selected will be the default selection for the user when they enter their profile.</li>
		<li><b>Removing Options:</b> To remove an option simply empty the text box for that option - all users with that selected will have their option cleared.</li>
		<li><b>Reordering Options:</b> You can reorder the options by moving text around between the boxes. However - an important note - you must make sure you do <b>not</b> change the text when reordering options as otherwise user data will be lost.</li>
	</ul>';

$helptxt['autoFixDatabase'] = 'This will automatically fix broken tables and resume as if nothing happened. It does email you when this happens.<br>If you choose to disable this option, your forum will be down until you notice and manually fix the problem.';
// argument(s): scripturl
$helptxt['pgFulltextSearch'] = 'This setting defines the language to use for PostgreSQL\'s fulltext search. Choose the language that most closely matches the language your forum actually uses. If your forum\'s language is not listed, or if your forum is multi-lingual, choose the "simple" option. <br>
This setting is independent of your main SMF language settings and not related to the installed language for SMF. <br>
When you change this setting you need to <a href="%1$s?action=admin;area=managesearch;sa=method" target="_blank" rel="noopener">rebuild the fulltext search index</a>.<br>
If a language you need is not listed, ask your database admin to install PostgreSQL language support for that language.';

$helptxt['enableParticipation'] = 'Ovo prikazuje malu ikonu u temama koje je korisnik objavio.';

$helptxt['db_persist'] = 'This keeps the connection active to increase performance. If you aren\'t on a dedicated server, this may cause you problems with your host.<br>
If this option is disabled, you may need to enable the mysqli.allow_persistent or pgsql.allow_persistent setting in your php.ini file.';
$helptxt['ssi_db_user'] = 'Opciono podešavanje koje vam dozvoljava da precizirate drugo korisničko ime i lozinku za bazu kada koristite SSI.php.';

// argument(s): either $helptxt['queryless_urls_supported'] or $helptxt['queryless_urls_unsupported'], depending on whether the server uses a supported webserver
$helptxt['queryless_urls'] = 'This changes the format of URLs a little so search engines will like them better. They will look like index.php/topic,1.0.html.<br><br>%1$s';
// is conditionally used as part of $helptxt['queryless_urls']
$helptxt['queryless_urls_supported'] = 'This feature will work on your server.';
// is conditionally used as part of $helptxt['queryless_urls']
$helptxt['queryless_urls_unsupported'] = 'This feature will not work on your server.';
$helptxt['minimize_files'] = 'This option will minimize the CSS and JavaScript files used by your forum, reducing the request calls to your server and speeding up load times for your users.<br><br>You should normally leave this option enabled. The only time you might want to disable it temporarily is while you are in the process of altering the CSS or JavaScript files used on your site (for example, when editing your theme files or developing a modification).';
$helptxt['boardindex_max_depth'] = 'This setting controls how many sub-board levels SMF will check when looking for new posts in sub-boards. It also affects which boards are included when the "Count sub-board\'s posts in parent\'s totals" option is enabled.<br><br>For example, if this is set to 1, a sub-board will only be marked "new" on the index page if the sub-board itself contains a new post. If it is set to 2, the sub-board will be marked "new" if there is a new post in the sub-board or in a sub-sub-board. If it is set to 10, the sub-board will be marked "new" if there is a new post in the sub-board, a sub-sub-board, a sub-sub-sub-board, etc., up to 10 levels deep.<br><br>Large, active forums may want to set this value to a low number in order to conserve server resources.';
$helptxt['countChildPosts'] = 'Checking this option will mean that posts and topics in a board\'s child board will count toward its totals on the index page.<br /><br />This will make things notably slower, but means that a parent with no posts in it won\'t show \'0\'.';
$helptxt['allow_ignore_boards'] = 'Odabir ove opcije će omogućiti korisnicima da izaberu forume koje žele da ignorišu.';
$helptxt['deny_boards_access'] = 'Uključivanje ove opcije će vam omogućiti da zabranite pristup određenim forumima na osnovu grupe članova.';

// argument(s): scripturl
$helptxt['who_enabled'] = 'This setting allows you to turn on or off the <a href="%1$s?action=who" target="_blank" rel="noopener">Who\'s Online</a> page, which shows who is browsing the forum and what they are doing.';

$helptxt['recycle_enable'] = '&quot;Recycles&quot; deleted topics and posts to the specified board.';

$helptxt['enableReportPM'] = 'Ova opcija omogućava korisnicima da prijave primljene privatne poruke administratorskom timu. To može biti korisno u pronalaženju bilo kakve zloupotrebe sistema privatnih poruka. ';
$helptxt['max_pm_recipients'] = 'Ova opcija vam omogućava da podesite najveći dozvoljeni broj primalaca za privatnu poruku poslatu od člana foruma. Ovo može da se upotrebi kao pomoć da se zaustavi spam zloupotreba sistema PP. Obratite pažnju na to da su korisnici sa dozvolom da šalju infodopise izuzeti iz ovog ograničenja. Podesite nula za neograničeno.';
$helptxt['pm_posts_verification'] = 'Ovo podešavanje će prisiliti korisnike da unesu kod prikazan na verifikacijskoj slici svaki put kada šalju privatne poruke. Samo korisnici ispod podešenog broja treba da unesu kod - to bi trebalo da pomogne borbu protiv automatskih spam skripti.';
$helptxt['pm_posts_per_hour'] = 'Ovo će ograničiti broj privatnih poruka koje korisnik može poslati za jedan sat. Ovo ne utiče na administratore ili moderatore.';

$helptxt['default_personal_text'] = 'Podešavanja podrazumevanog teksta koji će korisnik imati kao &quot;lični tekst&quot;';

$helptxt['registration_method'] = 'Ova opcija pokazuje koju metodu registracije će koristiti članovi koji žele da se pridruže forumu. Možete izabrati između:<br /><br /> <ul class="normallist"> <li> <strong>Registracija iksljučena</strong><br /> Isključuje registraciju što znači da članovi neće moći da se pridruže forumu.<br /> </li><li> <strong>Trenutna registracija</strong><br /> Novi članovi se mogu prijaviti i pisati odmah posle registracije na forum.<br /> </li><li> <strong>Imejl Aktivacija</strong><br /> Ova opcija zahteva od korisnika da potvrde svoj mejl klikom na link iz mejla pre nego što se mogu prijaviti i pisati na forumu.<br /> </li><li> <strong>Odobrenje administratora</strong><br /> Ovo znači da će svaki novi član morati da bude odobren od strane administratora pre nego postane regularan član. </li> </ul> ';

$helptxt['send_validation_onChange'] = 'Kada je ova opcija overena svi članovi koji menjaju svoju imejl adresu u profilu će morati da ponovo aktiviraju svoje naloge preko imejla poslatog na tu adresu ';
$helptxt['approveAccountDeletion'] = 'When this setting is checked, any user request to delete his own account has to be approved by an administrator';

$helptxt['send_welcomeEmail'] = 'Kada je ova opcija omogućena svim novim članovima će biti poslat imejl dobrodošlice u vašu zajednicu';
$helptxt['password_strength'] = 'Ovo podešavanje određuje jačinu lozinki izabranih od strane vaših forum korisnika. Jača lozinka, teže će se kompromitovati nalozi članova.
	Moguće opcije su:
	<ul>
		<li><b>Niska:</b> Lozinka mora biti dužine najmanje četiri znaka.</li>
		<li><b>Srednja:</b> Lozinka mora biti dužine najmanje osam znakova, i ne može biti deo korisničkog imena ili imejl adrese.</li>
		<li><b>Visoka:</b> Kao za srednja, osim što lozinka takođe mora da sadrži mešavinu velikih i malih slova, i najmanje jedan broj.</li>
	</ul>
';
$helptxt['enable_password_conversion'] = 'By enabling this setting, SMF will attempt to detect passwords stored in other formats and convert them to the format SMF uses. Typically this is used for forums converted to SMF, but may have other uses as well. Disabling this prevents a user from logging in using their password after a conversion and they would need to reset their password.';

$helptxt['coppaAge'] = 'The value specified in this box will determine the minimum age that new members must be to be granted immediate access to the forums.
	On registration they will be prompted to confirm whether they are over this age, and if not will either have their application rejected or suspended awaiting parental approval - dependant on the type of restriction choosen.
	If a value of 0 is choosen for this setting then all other age restriction settings shall be ignored.';
$helptxt['coppaType'] = 'If age restrictions are enabled, then this setting will define that happens when a user below the minimum age attempts to register with your forum. There are two possible choices:
	<ul>
		<li>
			<b>Reject Their Registration:</b><br />
				Any new member below the minimum age will have their registration rejected immediately.<br />
		</li><li>
			<b>Require Parent/Guardian Approval</b><br />
				Any new member who attempts to register and is below the minimum permitted age will have their account marked as awaiting approval, and will be presented with a form upon which their parents must give permission to become a member of the forums.
				They will also be presented with the forum contact details entered on the settings page, so they can send the form to the administrator by mail or fax.
		</li>
	</ul>';
$helptxt['coppaPost'] = 'The contact boxes are required so that forms granting permission for underage registration can be sent to the forum administrator. These details will be shown to all new minors, and are required for parent/guardian approval. At the very least a postal address or fax number must be provided.';

$helptxt['allow_hideOnline'] = 'With this option enabled all members will be able to hide their online status from other users (except administrators). If disabled only users who can moderate the forum can hide their presence. Note that disabling this option will not change any existing member\'s status - it just stops them from hiding themselves in the future.';
$helptxt['meta_keywords'] = 'Ključne reči se šalju na svaku stranicu kako bi pokazale pretraživačima ključne pojmove na vašem sajtu. Trebali bi reči odvojiti zarezom, i ne smete koristiti HTML.';

$helptxt['latest_themes'] = 'This area shows a few of the latest and most popular themes from <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.  It may not show up properly if your computer can\'t find <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>, though.';

$helptxt['secret_why_blank'] = 'For your security, the answer to your question (as well as your password) is encrypted in such a way that SMF can only tell you if get it right, so it can never tell you (or anyone else, importantly!) what your answer or password is.';
$helptxt['moderator_why_missing'] = 'Since moderation is done on a board-by-board basis, you have to make members moderators from the <a href="%1$s?action=admin;area=manageboards" target="_blank" rel="noopener">board management interface</a>.';

$helptxt['permissions'] = 'Permissions are how you either allow groups to, or deny groups from, doing specific things.<br /><br />You can modify multiple boards at once with the checkboxes, or look at the permissions for a specific group by clicking \'Modify.\'';
$helptxt['permissions_board'] = 'If a board is set to \'Global,\' it means that the board will not have any special permissions.  \'Local\' means it will have its own permissions - separate from the global ones.  This allows you to have a board that has more or less permissions than another, without requiring you to set them for each and every board.';
$helptxt['permissions_quickgroups'] = 'These allow you to use the &quot;default&quot; permission setups - standard means \'nothing special\', restrictive means \'like a guest\', moderator means \'what a moderator has\', and lastly \'maintenance\' means permissions very close to those of an administrator.';
$helptxt['permissions_deny'] = 'Uskraćivanje dozvole može da bude korisno kada želite da oduzmete dozvolu pojedinim članovima. Možete dodati člansku grupu sa \'oduzmi\'-dozvolom za članove kojima želite oduzeti dozvolu.<br /><br />Koristite pažljivo, oduzeta dozvola će ostati oduzeta bez obzira da li je član u nekoj drugoj članskoj grupi. ';
$helptxt['permissions_postgroups'] = 'Omogućavanje dozvola za grupe zasnovane na broju poruka će vam omogućiti dodavanje dozvola članovima koji su objavili određeni broj poruka. Dozvole za grupe zasnovane na broju poruka su <em>dodate</em>u dozvolama regularnih članskih grupa.';
$helptxt['membergroup_guests'] = 'Članska grupa Gosti su svi korisnici koji nisu prijavljeni.';
$helptxt['membergroup_regular_members'] = 'Regularni članovi su svi članovi koji su prijavljeni, ali nemaju pridodatu primarnu člansku grupu.';
$helptxt['membergroup_administrator'] = 'Administrator može, po definiciji, uraditi bilo šta i videti bilo koji forum. Ovde nema podešavanja dozvola za administratora.';
$helptxt['membergroup_moderator'] = 'Članska grupa Urednik je posebna članska grupa.Dozvole i podešavanja pridodate ovoj grupi su dodeljene urednicima ali samo <em>na forumima koje uređuju</em>.Izvan tih foruma oni su kao i bilo koji drugi član ';
$helptxt['membergroups'] = 'In SMF there are two types of groups that your members can be part of. These are:
	<ul class="normallist">
		<li><strong>Regular Groups:</strong> A regular group is a group in which members are not automatically placed. To assign a member to be in a group simply go to their profile and click &quot;Account Settings&quot;. From here you can assign them any number of regular groups to which they will be part.</li>
		<li><strong>Post Groups:</strong> Unlike regular groups post based groups cannot be assigned. Instead, members are automatically assigned to a post based group when they reach the minimum number of posts required to be in that group.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'Možete da izmenite ove događaje klikom na crvenu zvezdicu (*) pored njihovog imena.';

$helptxt['maintenance_backup'] = 'Ova oblast vam omogućava da sačuvate kopiju svih poruka, postavki, članove, i ostale informacije koje se odnose na vaš forum u veliku datoteku.<br /><br />Preporučljivo je da to često radite, možda nedeljno, zbog sigurnosti i bezbednosti.';
$helptxt['maintenance_rot'] = 'Ovo Vam omogućava da <strong>potpuno</strong> i <strong>neopozivo</strong>uklonite stare teme. Preporučljivo je da  pokušate da napravite prvo kopiju, u slučaju da uklonite nešto što niste mislili.<br /><br />Pažljivo koristite ovu mogućnost. ';
$helptxt['maintenance_members'] = 'Ovo Vam omogućava da <strong>potpuno</strong> i <strong>neopozivo</strong> uklonite naloge članova sa vašeg foruma.<strong>Veoma </strong> je preporučljivo da pokušate da napravite prvo kopiju, u slučaju da uklonite nešto što niste mislili.<br /><br />Pažljivo koristite ovu mogućnost. ';

$helptxt['avatar_server_stored'] = 'Ovo omogućava vašim članovima da sami izaberu avatare smeštene na vašem serveru. Oni su, po pravilu, na istom mestu, kao i SMF u avatar folderu.<br />Kao tip, ako napravite direktorijume u tom folderu, možete napraviti &quot;kategorije&quot; avatara.';
$helptxt['avatar_external'] = 'Omogućavanjem ovog, članovi mogu da unesu URL do sopstvenih avatara. S druge strane, u nekim slučajevima, oni mogu da koriste avatare koji su preterano veliki ili slike koje ne želite na vašem forumu.';
$helptxt['avatar_download_external'] = 'Omogućavanjem ove opcije, URL dat od strane korisnika ima pristup za preuzimanje avatara na toj lokaciji. Konačno, avatar će se tretirati kao dostavljeni avatar.';
$helptxt['avatar_action_too_large'] = 'This setting lets you reject images (from other sites) that are too big, or tells the user\'s browser to resize them, or to download them to your server.<br><br>If users put in very large images as their avatars and resize in the browser, it could cause very slow loading for your users - it does not actually resize the file, it just displays it smaller. So a digital photo, for example, would still be loaded in full and then resized only when displayed - so for users this could get quite slow and use a lot of bandwidth.<br><br>On the other hand, downloading them means using your bandwidth and server space, but you also ensure that images are smaller, so it should be faster for users. (Note: downloading and resizing requires either the GD library, or ImageMagick using either the Imagick or MagickWand extensions)';
$helptxt['avatar_upload'] = 'This option is much like &quot;Allow members to select an external avatar&quot;, except that you have better control over the avatars, a better time resizing them, and your members do not have to have somewhere to put avatars.<br /><br />However, the downside is that it can take a lot of space on your server.';
$helptxt['avatar_download_png'] = 'PNGs are larger, but offer better quality compression.  If this is unchecked, JPEG will be used instead - which is often smaller, but also of lesser or blurry quality.';

$helptxt['disableHostnameLookup'] = 'This disables host name lookups, which on some servers are very slow.  Note that this will make banning less effective.';

$helptxt['search_weight_frequency'] = 'Weight factors are used to determine the relevancy of a search result. Change these weight factors to match the things that are specifically important for your forum. For instance, a forum of a news site, might want a relatively high value for \'age of last matching message\'. All values are relative in relation to each other and should be positive integers.<br /><br />This factor counts the amount of matching messages and divides them by the total number of messages within a topic.';
$helptxt['search_weight_age'] = 'Weight factors are used to determine the relevancy of a search result. Change these weight factors to match the things that are specifically important for your forum. For instance, a forum of a news site, might want a relatively high value for \'age of last matching message\'. All values are relative in relation to each other and should be positive integers.<br /><br />This factor rates the age of the last matching message within a topic. The more recent this message is, the higher the score.';
$helptxt['search_weight_length'] = 'Weight factors are used to determine the relevancy of a search result. Change these weight factors to match the things that are specifically important for your forum. For instance, a forum of a news site, might want a relatively high value for \'age of last matching message\'. All values are relative in relation to each other and should be positive integers.<br /><br />This factor is based on the topic size. The more messages are within the topic, the higher the score.';
$helptxt['search_weight_subject'] = 'Weight factors are used to determine the relevancy of a search result. Change these weight factors to match the things that are specifically important for your forum. For instance, a forum of a news site, might want a relatively high value for \'age of last matching message\'. All values are relative in relation to each other and should be positive integers.<br /><br />This factor looks whether a search term can be found withing the subject of a topic.';
$helptxt['search_weight_first_message'] = 'Weight factors are used to determine the relevancy of a search result. Change these weight factors to match the things that are specifically important for your forum. For instance, a forum of a news site, might want a relatively high value for \'age of last matching message\'. All values are relative in relation to each other and should be positive integers.<br /><br />This factor looks whether a match can be found in the first message of a topic.';
$helptxt['search_weight_sticky'] = 'Weight factors are used to determine the relevancy of a search result. Change these weight factors to match the things that are specifically important for your forum. For instance, a forum of a news site, might want a relatively high value for \'age of last matching message\'. All values are relative in relation to each other and should be positive integers.<br /><br />This factor looks whether a topic is sticky and increases the relevancy score if it is.';
$helptxt['search'] = 'Adjust all settings for the search function here.';
$helptxt['search_why_use_index'] = 'A search index can greatly improve the performance of searches on your forum. Especially when the number of messages on a forum grows bigger, searching without an index can take a long time and increase the pressure on your database. If your forum is bigger than 50.000 messages, you might want to consider creating a search index to assure peak performance of your forum.<br><br>Note that a search index can take up quite some space. A fulltext index is a built-in index of MySQL and PostgreSQL. It\'s relatively compact (approximately the same size as the message table), but a lot of words aren\'t indexed and it can, in some search queries, turn out to be very slow. The custom index is often bigger (depending on your configuration it can be up to 3 times the size of the messages table) but it\'s performance is better than fulltext and relatively stable.';

$helptxt['see_admin_ip'] = 'IP addresses are shown to administrators and moderators to facilitate moderation and to make it easier to track people up to no good.  Remember that IP addresses may not always be identifying, and most people\'s IP addresses change periodically.<br /><br />Members are also allowed to see their own IPs.';
$helptxt['see_member_ip'] = 'Your IP address is shown only to you and moderators.  Remember that this information is not identifying, and that most IPs change periodically.<br /><br />You cannot see other members\' IP addresses, and they cannot see yours.';
$helptxt['whytwoip'] = 'SMF uses various methods to detect user IP addresses. Usually these two methods result in the same address but in some cases more than one address may be detected. In this case SMF logs both addresses, and uses them both for ban checks (etc). You can click on either address to track that IP and ban if necessary.';

$helptxt['ban_cannot_post'] = 'The \'cannot post\' restriction turns the forum into read-only mode for the banned user. The user cannot create new topics, or reply to existing ones, send personal messages or vote in polls. The banned user can however still read personal messages and topics.<br /><br />A warning message is shown to the users that are banned this way.';

$helptxt['posts_and_topics'] = '
	<ul>
		<li>
			<b>Post Settings</b><br />
			Modify the settings related to the posting of messages and the way messages are shown. You can also enable the spell check here.
		</li><li>
			<b>Bulletin Board Code</b><br />
			Enable the code that show forum messages in the right layout. Also adjust which codes are allowed and which aren\'t.
		</li><li>
			<b>Censored Words</b>
			In order to keep the language on your forum under control, you can censor certain words. This function allows you to convert forbidden words into innocent versions.
		</li><li>
			<b>Topic Settings</b>
			Modify the settings related to topics. The number of topics per page, whether stickey topics are enabled or not, the number of messages needed for a topic to be hot, etc.
		</li>
	</ul>';

$helptxt['spider_mode'] = 'Sets the logging level.<br>
Standard - Logs minimal spider activity.<br>
Moderate - Provides more accurate statistics.<br>
Aggressive - Same as &quot;Moderate&quot;, but logs data about each page visited.';

$helptxt['spider_group'] = 'By selecting a restrictive group, when a guest is detected as a search crawler it will automatically be assigned any &quot;deny&quot; permissions of this group in addition to the normal permissions of a guest. You can use this to provide lesser access to a search engine than you would a normal guest. You might for example wish to create a new group called &quot;Spiders&quot; and select that here. You could then deny permission for that group to view profiles to stop spiders indexing your members profiles.<br>Note: Spider detection is not perfect and can be simulated by users so this feature is not guaranteed to restrict content only to those search engines you have added.';
$helptxt['show_spider_online'] = 'This setting allows you to select whether spiders should be listed in the who\'s online list on the board index and &quot;Who\'s Online&quot; page. Options are:
	<ul class="normallist">
		<li>
			<strong>Not at All</strong><br />
			Spiders will simply appear as guests to all users.
		</li><li>
			<strong>Show Spider Quantity</strong><br />
			The Board Index will display the number of spiders currently visiting the forum.
		</li><li>
			<strong>Show Spider Names</strong><br />
			Each spider name will be revealed, so users can see how many of each spider is currently visiting the forum - this takes effect in both the Board Index and Who\'s Online page.
		</li><li>
			<strong>Show Spider Names - Admin Only</strong><br />
			As above except only Administrators can see spider status - to all other users spiders appear as guests.
		</li>
	</ul>';

$helptxt['birthday_email'] = 'Izaberite poruku za čestitanje rođendana koju želite da koristite. Primer poruke će biti prikazan u polju za naslov poruke i polju za telo poruke.<br /><strong>Napomena:</strong> Podešavanje ove opcije ne uključujuje automatski i samu čestitku. Za uključivanje rođendanskih čestitki putem mejla koristite stranicu <a href="%1$s?action=admin;area=scheduledtasks;%3$s=%2$s" target="_blank" class="new_win">Planirani zadaci</a> na kojoj možete naći opciju za uključivanje ove čestitke. ';
$helptxt['pm_bcc'] = 'When sending a personal message you can choose to add a recipient as BCC or &quot;Blind Carbon Copy&quot;. BCC recipients do not have their identities revealed to other recipients of the message.';

$helptxt['move_topics_maintenance'] = 'To će vam omogućiti da premestite sve poruke iz jednog foruma u drugi';
$helptxt['maintain_reattribute_posts'] = 'You can use this function to attribute guest posts on your board to a registered member. This is useful if, for example, a user deleted their account and changed their mind and wished to have their old posts associated with their account.';
$helptxt['chmod_flags'] = 'You can manually set the permissions you wish to set the selected files to. To do this enter the chmod value as a numeric (octet) value. Note - these flags will have no effect on Microsoft Windows operating systems.';

$helptxt['postmod'] = 'This section allows members of the moderation team (with sufficient permissions) to approve any posts and topics before they are shown.';

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

$helptxt['topic_move_any'] = 'If checked, users will be allowed to move topics to any board they can see. Otherwise, they will only be able to move them to boards where they can post new topics.';

$helptxt['alert_pm_new'] = 'Notifications of new personal messages do not appear in the Alerts pane, but appear in the "My Messages" list instead.';
$helptxt['alert_event_new'] = 'This will send out an alert or email as requested if there is a new calendar event added. However, if that event is posted and a topic is added, you will not get an alert for the event if you\'re already following that board - the alert from following the board would cover this.';

$helptxt['force_ssl'] = '<strong>Test SSL and HTTPS on your server properly before enabling this, it may cause your forum to become inaccessible.</strong> Enable maintenance mode if you are unable to access the forum after enabling this.<br><br><strong>Changing this setting will update your forum\'s primary URL, as well as the URLs for your theme files and images, smileys, and avatars, setting them to either http: or https: based on your selection. Customized URLs will not be affected.</strong>';
$helptxt['image_proxy_enabled'] = 'Required for embedding external images when in full SSL';
$helptxt['image_proxy_secret'] = 'Keep this a secret, protects your forum from hotlinking images. Change it in order to render current hotlinked images useless';
$helptxt['image_proxy_maxsize'] = 'Maximum image size that the SSL image proxy will cache: bigger images will be not be cached. Cached images are stored in your SMF cache folder, so make sure you have enough free space.';

$helptxt['enable_sm_stats'] = 'If enabled, this will allow Simple Machines to visit your site once a month to collect basic statistics. This will help us make decisions as to which configurations to optimize the software for. For more information please visit our <a href="https://www.simplemachines.org/about/stats.php" target="_blank" rel="noopener">info page</a>.';

$helptxt['field_reg_require'] = 'If this field is required during registration, it will also be required on profile changes.';

// argument(s): $boarddir, $boardurl
$helptxt['cron_is_real_cron'] = 'By default, SMF adds to every page a small bit of JavaScript that prompts the user\'s browser to trigger SMF\'s cron.php in the background. This approach allows SMF to execute its scheduled tasks on a regular basis without requiring the admin to do any extra server configuration. However, some admins might prefer to configure their servers to directly execute cron.php on a regular basis. If you have done this, you can disable the JavaScript method.<br><br><strong>Note:</strong> Configuring your server to run scheduled tasks this way cannot be done from within SMF. You will need to use your server configuration software to do so. Typical tools for this purpose include <code>cron</code> (for Linux servers), <code>schtasks.exe</code> (for Windows servers), and <code>launchd</code> (for macOS servers). Most web hosting companies provide some sort of control panel interface to allow their customers to access these tools.<br><br>The path and URL for your forum\'s cron.php are:<br>Path: %1$s/cron.php<br>URL: %2$s/cron.php';

$helptxt['languages_txt'] = 'These language entries are used throughout SMF to define localized versions of text for different languages.<br><br>If you see a value like <code>&#37;1$s</code> in an entry, it is a placeholder that SMF fills in with a real value at runtime. Make sure to keep such placeholders in your customized text.';
$helptxt['languages_helptxt'] = 'These language entries are used to show floating help text popups (like this one).';
$helptxt['languages_editortxt'] = 'These language entries are used for user interface elements in the post editor.';
$helptxt['languages_tztxt'] = 'These language entries are used to build descriptions for time zones.<br><br>For example, the <code>Europe_Western</code> string may be combined with the <code>daylight_saving_time_false</code> string to produce "Western Europe Standard Time".<br><br>Note: If no description is provided for a given time zone, SMF will generate a description using a list of locations within that time zone.';
$helptxt['languages_txt_for_timezones'] = 'These language entries allow you to do the following:<br><ol class="bbc_list" style="list-style-type: decimal;"><li>Edit the names shown for individual locations anywhere they might be used in a context related to time zones. For example, you can tell SMF to show "Qaanaaq" for the location "America/Thule" instead of "Thule".</li><li>Edit the names shown for different countries. This can be done by editing the relevant <code>iso3166[]</code> string.</li></ol>';
$helptxt['languages_txt_for_email_templates'] = 'These language entries are used to create the email messages that SMF sends to your members.';
$helptxt['languages_native_name'] = 'The language\'s name for itself, represented in its own script.';
$helptxt['languages_character_set'] = 'The character encoding used for this language. As of SMF 2.1, this should always be "UTF-8".';
$helptxt['languages_locale'] = 'The locale code is used to determine various formatting conventions, etc.<br><br>The locale code typically takes the form of a two character language code, optionally followed by an underscore and a two character country code. For example, <code>en</code> would identify generic English, while <code>en_AU</code> would identify Australian English in particular.';
$helptxt['languages_rtl'] = 'Check this box if this language reads from right to left (e.g. Hebrew, Arabic).';
$helptxt['languages_dictionary'] = 'This defines the main language dictionary that will be used by the <a href="https://php.net/function.pspell-new" target="_blank" rel="noopener">pSpell</a> spellchecker (if installed).';
$helptxt['languages_spelling'] = 'This defines the language variant that will be used by the <a href="https://php.net/function.pspell-new" target="_blank" rel="noopener">pSpell</a> spellchecker. For many languages this is not applicable.';
$helptxt['languages_recaptcha'] = 'The language code to use for the reCAPTCHA verification widget.<br><br>See Google\'s reCAPTCHA documentation for its <a href="https://developers.google.com/recaptcha/docs/language" target="_blank" rel="noopener" class="bbc_link">list of supported languages</a>.';
// The GDPR page of the EU exists in several languages; change the language code at the end of the url
$helptxt['requireAgreement'] = 'This setting is recommended to be enabled in order to comply with the rules of the <a href="https://ec.europa.eu/commission/priorities/justice-and-fundamental-rights/data-protection/2018-reform-eu-data-protection-rules_en" target="_blank" rel="noopener" class="bbc_link">GDPR</a>.';
// The GDPR page of the EU exists in several languages; change the language code at the end of the url
$helptxt['requirePolicyAgreement'] = 'This setting is recommended to be enabled in order to comply with the rules of the <a href="https://ec.europa.eu/commission/priorities/justice-and-fundamental-rights/data-protection/2018-reform-eu-data-protection-rules_en" target="_blank" rel="noopener" class="bbc_link">GDPR</a>.';

?>