@extends('layouts.app')

@section('page-title', 'faqs')

@section('content')
<main>
    <div class="faqs-title">
        <h1>
            Domande frequenti
        </h1>
        <p>
            Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando?
            <a href="https://www.boolean.careers/iscriviti">Contattaci </a> e saremo felici di darti una
            mano.
        </p>
    </div>
    <div class="faqs-wrapper">
        <section class="faqs-left">
            <h2>
                Prima del corso
            </h2>
            <div class="questions">
                <h3>
                    Chi puo' fare il corso?
                </h3>
                <i class="fas fa-plus"></i>
            </div>
            <div class="answers">
                <p>
                    Chiunque abbia una forte curiosità verso il mondo della programmazione e voglia di imparare a fare
                    il
                    mestiere di sviluppatore.
                    <br>
                    Età e curriculum non sono una discriminante: infatti, i nostri studenti hanno dai 18 ai 45 anni,
                    sono giovani ragazzi senza alcuna esperienza lavorativa, ma anche affermati professionisti che
                    vogliono cambiare settore.Se non hai mai programmato o se hai già seguito qualche corso ma senti di
                    non aver approfondito abbastanza per diventare programmatore, Boolean è il corso che fa per te.
                </p>
            </div>
            <div class="questions">
                <h3>
                    Che competenze devo avere per iniziare il corso?
                </h3>
                <i class="fas fa-plus"></i>
            </div>
            <div class="answers">
                <p>
                    Il corso parte da zero, quindi non serve alcuna competenza di programmazione, è necessario però
                    superare il processo di selezione.
                </p>
            </div>
        </section>
        <section class="faqs-right">
            <h2>
                Dopo il corso
            </h2>
            <div class="questions">
                <h3>
                    Ho la certezza di essere assunto?
                </h3>
                <i class="fas fa-plus"></i>
            </div>
            <div class="answers">
                <p>
                    Dipende tutto da te! Come dimostrano numerosi studi di settore, lo sviluppatore web è uno dei
                    mestieri più ricercati in Italia e Boolean fornisce tutte le competenze richieste dalle aziende per
                    iniziare a fare questo lavoro. Oltre a fornirti conoscenze di programmazione, ti presentiamo alle
                    nostre aziende partner che assumono in tutta Italia e ti aiutiamo a prepararti al meglio per i
                    colloqui!
                </p>
            </div>
            <div class="questions">
                <h3>
                    Terminato il corso, sono supportato nella ricerca del lavoro?
                </h3>
                <i class="fas fa-plus"></i>
            </div>
            <div class="answers">
                <p>
                    Certamente! Verrai presentato a oltre 50 aziende che operano nel settore Internet in Italia. Dalla
                    multinazionale più quotata alla startup in ascesa, avrai l’occasione di presentare te stesso e le
                    tue qualità da neo-sviluppatore. Inoltre, ti affianchiamo nella costruzione del CV, del portfolio di
                    progetti e simuliamo insieme dei colloqui: il tuo successo è il nostro!
                </p>
            </div>
        </section>
    </div>
</main>

@endsection