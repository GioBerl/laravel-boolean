@extends('layouts.app')

@section('page-title', 'homepage')

@section('content')

<main>
    <div class="container">
        <section class="jumbo">
            <div class="jumbo-left">
                <h1 class="jumbo-title">
                    Diventa <strong>sviluppatore web</strong>
                </h1>
                <p>
                    Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.
                </p>
                <ul class="">
                    <li>
                        <strong>6 mesi</strong> di corso intensivo online in diretta
                    </li>
                    <li>
                        <strong>Nessuna competenza</strong> di programmazione richiesta
                    </li>
                    <li>
                        Siamo certi del tuo successo, altrimenti <strong>ti rimborsiamo</strong>
                    </li>
                </ul>
            </div>
            <div class="jumbo-right">
                <img src="{{ asset('img/jumbo/pc-black-gif.gif') }}" alt="jumbo image">
            </div>
        </section>
    </div>
    <section class="statistics">
        <div class="container">
            <div class="statistics-wrapper">
                <div class="statistics-left">
                    <h3>98%</h3>
                    <p>
                        La percentuale dei nostri studenti che ora lavora come web developer, oltre la metà a tempo
                        indeterminato.
                    </p>
                </div>
                <div class="statistics-center">
                    <h3>€ 23.000</h3>
                    <p>
                        Lo stipendio medio lordo di partenza degli studenti assunti dalle nostre aziende partner.
                    </p>
                </div>
                <div class="statistics-right">
                    <h3>#1</h3>
                    <p>
                        Siamo il primo istituto online in Italia per indice di gradimento e risultati conseguiti.
                    </p>
                </div>
            </div>

        </div>

    </section>
    <section class="companies">
        <div class="container">
            <p>
                I nostri studenti sono stati assunti da:
            </p>
            <div class="top-row-images">
                <div class="first">
                    <img src="{{ asset('img/companies/facileit.png') }}" alt="facileit logo">
                </div>
                <div class="second">
                    <img src="{{ asset('img/companies/oneday.png') }}" alt="facileit logo">
                </div>
                <div class="third">
                    <img src="{{ asset('img/companies/prima.png') }}" alt="facileit logo">
                </div>
            </div>
            <div class="bottom-row-images">
                <div class="first">
                    <img src="{{ asset('img/companies/fabbrica.png') }}" alt="facileit logo">
                </div>
                <div class="second">
                    <img src="{{ asset('img/companies/nephila.png') }}" alt="facileit logo">
                </div>
                <div class="third">
                    <img src="{{ asset('img/companies/rds.png') }}" alt="facileit logo">
                </div>
            </div>
        </div>

    </section>

</main>

@endsection