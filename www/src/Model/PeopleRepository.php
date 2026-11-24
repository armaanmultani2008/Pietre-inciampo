<?php


class PeopleRepository
{
    static function getPeople() : array
    {
        return [
            '1' => [
                'nome' => 'Pietro Vittorio',
                'cognome' => 'Pozzi',
                'luogo_nascita' => 'Brione di Ome (BS)',
                'data_nascita' => date_create("1892-08-02"),
                'luogo_morte' => 'Melk (Mauthausen)',
                'data_morte' => date_create('1945-03-11'),
                'deceduto_lager' => true,
                'causa_decesso' => 'insufficienza cardiaca acuta, collasso',
                'trasporto' => 'Convoglio 111',
                'tipo_prigioniero' => 'Schutzhäftling',
                'immagini' => [
                    "ritratto" => [
                        'src' =>'./img/Pozzi-Pietro-Vittorio/ritratto.jpg',
                        'descrizione' => 'Pozzi Pietro Vittorio',
                    ],
                    "pietra" => [
                        'src' => './img/Pozzi-Pietro-Vittorio/pietra.jpg',
                        'descrizione' => "Pietra d'inciampo di Pietro Pozzi Vittorio"
                    ],
                    "frontale" => [
                        'src' => './img/Pozzi-Pietro-Vittorio/frontale.jpg',
                        'descrizione' => "Frontale abitazione di Pietro Pozzi Vittorio"
                    ],
                    "cielo" => [
                        'src' => './img/Pozzi-Pietro-Vittorio/cielo.jpg',
                        'descrizione' => 'Cielo abitazione di Pietro Pozzi Vittorio'
                    ]
                 ],
                'biografia' => 'Pietro Vittorio Pozzi (Brione di Ome (BS) 2 agosto 1892 – Melk (Mauthausen) 11 marzo 1945) di Bernardo e Caterina Guerrini.
                    Risiede a Zanano (fraz. di Sarezzo).
                    Contadino, provvisto di licenza elementare, partecipa alla Grande guerra sia in Italia che in Albania.
                    Coniugato, ha un figlio, Mario.
                    Indicato nei rapporti di polizia come “socialista massimalista”, nel 1926 viene denunciato, unitamente ad altri, in quanto facente parte di una “associazione a delinquere diretta a commettere reati contro l’ordine pubblico”, ma viene assolto in istruttoria. Considerato “elemento pericoloso all’ordine nazionale dello Stato”, viene sottoposto al provvedimento dell’ammonizione. Non dando successivamente adito a rilievi politici di sorta, gli viene sospeso il provvedimento. Nel frattempo pare che si sia avvicinato alle idee comuniste. Nei primi anni Trenta, per ragioni di lavoro, si trasferisce prima a Calcinato e quindi a Molinetto di Mazzano. Radiato dallo schedario politico, è occupato come operaio presso la Fabbrica d’armi del Regio Esercito (FARE) di Gardone Val Trompia e, successivamente, alla Gnutti Carlo e figli di Lumezzane.
                    Padre di quattro figli (di cui uno, Mario, morirà a Mauthausen), vedovo di Maria Toniato, dopo l’8 settembre del 1943, insieme al fratello Luigi, nasconde dei giovani renitenti alla leva in località “Stalo”. Alla fine di ottobre partecipa con altri all’incontro tra un nutrito gruppo di resistenti radunati nella malga di Frondine, a cavallo tra la Val Sabbia e la Val Trompia. In un primo momento appartiene ad un gruppo partigiano autonomo, poi si aggrega alla 122° Bgt. Garibaldi (il fratello Firmo aveva nome di battaglia “Catölech”). Il 7 novembre del 1944 viene arrestato nella sua abitazione. Condotto nel carcere di Canton Mombello di Brescia (matr. 8273) su ordine della GNR e a disposizione delle SS, è sottoposto a violenze. Il 20 novembre, è trasferito nel campo di Bolzano-Gries (matr. 6411), Blocco E, col fratello Luigi e il figlio Mario. Vi rimane sino il 14 dicembre. Viene quindi deportato nel lager di Mauthausen (num. 114073) il 19 col trasporto n. 111 tramite la Sicherheitspolizei (Sipo-Polizia di sicurezza) di Verona. È classificato come Schutzhäftling (Schutz-deportato per motivi di sicurezza).
                    Mestiere dichiarato: agricoltore.
                    Viene trasferito nel sottocampo di Melk il 3 gennaio 1945.
                    Deceduto per insufficienza cardiaca acuta, collasso.'
            ],
            '2' => [
                'nome' => 'Maurizio',
                'cognome' => 'Benghiat',
                'luogo_nascita' => 'Smirne (Turchia)',
                'data_nascita' => date_create("1881-01-19"),
                'luogo_morte' => 'Auschwitz',
                'data_morte' => date_create('1944-02-26'),
                'deceduto_lager' => true,
                'causa_decesso' => ['Probabilmente ucciso in una camera a gas'],
                'trasporto' => 'Convoglio 027',
                'tipo_prigioniero' => 'Jude',
                'immagini' => [
                    "ritratto" => [],
                    "pietra" => [
                        'src' => './img/Maurizio-Benghiat/pietra.jpg',
                        'descrizione' => "Pietra d'inciampo di Maurizio Benghiat"
                    ],
                    "frontale" => [
                        'src' => './img/Maurizio-Benghiat/frontale.jpg',
                        'descrizione' => "Frontale abitazione di Maurizio Benghiat"
                    ],
                    "cielo" => [
                        'src' => './img/Maurizio-Benghiat/cielo.jpg',
                        'descrizione' => 'Cielo abitazione di Maurizio Benghiat'
                    ]
                ],
                'biografia' =>
                    'Maurizio Benghiat (Smirne (Turchia), 19 gennaio 1881 – Auschwitz, 26 febbraio 1944) di Giuseppe e Benore Maria.
                    Domiciliato a Costantinopoli, benestante, celibe, risiede in un primo momento presso la Casa di cura di Gardone Riviera, e qui rimane sino alla metà di settembre 1943. Dopo la requisizione della struttura da parte dei nazisti, si ritira prima in una pensione e successivamente presso l’ospedale di Salò. IL 7 ottobre si trasferisce a Tignale (BS). Riconosciuto come Jude, è lì arrestato il 31 dicembre da agenti della Questura..
                    Detenuto dallo stesso giorno nelle carceri di Canton Mombello di Brescia (matr. 4571) su ordine dei Carabinieri e a disposizione della Questura, l’8 febbraio del 1944 viene trasferito prima a Vò Vecchio (PD) e quindi nel campo di transito di Fossoli (MO).
                    Da qui è deportato il 22 febbraio 1944 nel lager di Auschwitz, dove arriva il 26 febbraio col convoglio n. 27.'
            ],
        ];
    }

    static function getPeopleByID(int $id) : array {
        $persone = self::getPeople();
        return $persone[$id];
    }
}