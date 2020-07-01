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
</main>

@endsection