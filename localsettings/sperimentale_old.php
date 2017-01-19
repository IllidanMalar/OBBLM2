<?php 
	class Sperimentale{
		public $welcome =  "<div style=\"border: 1px solid #111; padding: 15px; Font-family:'Roboto', sans-serif;\">Benvenuti alla lega sperimentale delle squadre truzze e dei giocatori rosiconi.<br />
							Il divertimento e&#768; il primo obiettivo da raggiungere il resto e&#768; secondario.<br /><br />
							Che lo show abbia inizio!<br /><br />
							Si e' appena avviato il primo torneo 'For Fun' il mitico Botte Di Natale edizione 2016.<br />
							Il torneo vedra' quattro coraggiosi allenatori se le daranno di santa ragione per un infimo premio... ...il divertimento e' assicurato<br /><br />
							Trombino le squillo ed il torneo inizi!<br /><br />
							Buon divertimento<br />I COMMISSARI</div>";
		public $rules =    "<div class='regole'><h2>Durata</h2>
							<p>La lega 'SPERIMENTALE' dura sei settimane circa. Dal 15/5 al 30/6 compresi</p>
							<h2>Particolarita&#768;</h2>
							<p>Ogni coach puo&#768; giocare liberamente accordandosi con gli altri coach un qualsiasi numero di partite entro la fine della stagione.<br />
							Unico vero limite per giocare e&#768; quello di non poter affrontare piu&#768; di due volte di seguito lo stesso coach.<br />
							Ogni coach puo&#768; iscrivere quante squadre vuole alla stagione in corso, pagando la quota di iscrizione (se prevista) per ogni squadra che iscrive.</p>
							<h2>Sfide</h2>
							<p>Un coach puo&#768; sempre rifiutare di giocare una determinata partita, a meno che non venga sfidata una sua squadra. In questo caso le opzioni sono:
							<ul><li>Gioca la partita.</li>
							<li>Trova un sostituto che decida di giocare al posto suo.</li>
							<li>Concede la partita a tavolino.</li></ul>
							Lo sfidante dovra&#768; giocare entro una settimana (a meno che non ci si metta daccordo diversamente e prorogare la scadenza in accordo tra le parti e con la supervisione/approvazione dei commissari).<br />
							Le sfide vanno dichiarate ogni domenica proclamando la sfida per la settimana successiva, col limite di una sfida massimo ogni settimana a squadra.</p>
							<h2>Classifica</h2>
							<p>Per entrare in classifica una squadra deve aver disputato almeno quattro partite.
							Nel caso contrario non verra&#768; conteggiata per determinare le partecipanti al torneo per il podio.</p>
							<p>Il torneo per il podio si disputera&#768; in uno o due giornate tra le due o quattro squadre migliori classificate (a seconda del numero dei partecipanti).</p>
							<p>La classifica viene calcolata nel seguente modo:
							<ul><li>No classifica avulsa (ovvero con i punti in base a vittoria, pareggio, sconfitta).</li>
							<li>La differenza mete (mete fatte meno mete subite) moltiplicato per 3, piu&#768; la differenza casualty (casualty fatte meno casualty subite) moltiplicato per 2.</li>
							<li>Ai risultati negativi, non applica il moltiplicatore.</li></ul></p>
							<p>Es Gigetto con la sua squadra 'Schiappette' ha giocato 3 partite e in queste partite ha fatto 12 mete e ne ha subite 8, ha anche fatto 3 casualty e ne ha subite 5.<br />
							Il suo punteggio ai fini della classifica e':<br />
							Mete 12-8=4 (positivo quindi c'e' il moltiplicatore) 4*3=12<br />
							Casualty 3-5=-2 (negativo quindi no moltiplicatore) -2<br />
							12-2=10 PUNTI</p>
							<p>In caso di pareggio, si terra&#768; conto delle vittorie negli scontri diretti.
							Se risulta pari ancora, si terra&#768; conto del totale assoluto cas + mete, se non basta si applichera&#768; l'imparziale lancio di moneta!</p>
							<h2>Iscrizione</h2>
							<p>Nella lega 'SPERIMENTALE' e&#768; possibile iscrivere anche le squadre della sezione 'sperimentali'.
							Le squadre possono avere 100k in piu&#768; di monete in fase di creazione e fino a 2 abilita&#768; normali ed una doppia da distribuire a giocatori diversi (non quelli con FO >= 5).</p>
							<p>La quota di iscrizione per squadra e&#768; di 3 euro. 
							Ogni giocatore ricevera&#768; un premio in ordine di valore proporzionale alla classifica finale (o la priorita&#768; di scelta del premio).</p>
							<p>Durante la lega, la squadra iscritta non puo&#768; giocare con squadre esterne alla lega, ed OGNI partita e&#768; da registrare nel torneo e quindi buona per la classifica.<br />
							Non esistono partite di recupero o 'amichevoli': solo guerra!</p>
							<h2>Turno</h2>
							<p>Se richiesto da un giocatore o da un commissario sara&#768; obbligatorio mettere il limite tempo per turno di quattro minuti.<br />
							Allo scadere dei quattro minuti il coach attivo puo&#768; solo finire di muovere la miniatura che ha in mano, senza eseguire altre azioni oltre a quella di movimento.</p>
							<h2>Bilico</h2>
							<p>Il bilico e&#768; sempre bilico. LOL</p>
							<h2>CONCEDERE LA PARTITA</h2>
							<p>Si consiglia vivamente, anche se si concede la partita per motivi tecnici, di giocare ugalmente.
							In fondo, lo scopo del torneo e&#768; giocare, ed e&#768; un accorgimento nel rispetto delle persone e degli avversari.</p>
							<h3>Concedere la partita prima di giocarla (o con meno di 3 turni giocati)</h3>
							<ul><li>Al vincitore vanno assegnate 3 mete e 3 casualty (casuali), quindi vince 3-0 a tavolino (e al perdente Paolo&#768; je riga la macchina).</li>
							<li>Al perdente vengono assegnate 3 casualty (quindi una volta decisi a caso 3 giocatori, si tira il dado injury. Se il giocatore ha l'apotecario in squadra puo&#768; usarlo come puo' usare la rigenerazione).</li>
							<li>Il perdente non guadagna monete e ne perde 1d6k che vanno all'avversario.</li>
							<li>Perde automaticamente 1 punto di FF.</li>
							<li>Il perdente non ottiene il MIC, che invece va ad aggiungersi al MIC del vincitore (che ne ottiene cosi&#768; due).</li>
							<li>Sportivita' automaticamente a 0.</li></ul>
							<h3>Concedere durante il primo tempo (almeno 3 turni giocati)</h3>
							<ul><li>Il risultato si setta a 2 mete di scarto  per il vincitore (o 1 meta ogni tre turni mancanti, arrotondando per difetto, se migliore).</li>
							<li>Perdita di 1 FF automatico e nessun incasso per il perdente.</li>
							<li>Il perdente mantiene solo il MIC.</li>
							<li>Sportivita' regolare.</li></ul>
							<h3>Concedere nel secondo tempo</h3>
							<ul><li>Il vincitore guadagna 2 mete ()se non basta ad avere uno scarto di due mete sul perdente ne guadagna fino ad arrivare a vincere con 2 mete di scarto).</li>
							<li>Il perdente ottiene un incasso di 1D3mo per la partecipazione e simpatia.</li>
							<li>FF, MIC e sportivita&#768; sono regolari.</li></ul>
							<h2>MIC</h2>
							<p>I morti non prendono MIC le StarPlayer ed i Mercenari si.</p>
							<h2>In fine</h2>
							<p>Ove non specificato diversamente, tutte le regole sono quelle riferite nel manuale 'LRB 6'.</p>
							<p>In caso di problemi, dubbi o controversie, previo confronto e discussione, ci si appella al buonsenso prima e ai commissari poi, che dopo consultazione o lettura congiunta, sapranno sentenziare brutalmente su ogni dubbio.</p></div>";
	}
?>