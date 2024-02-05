@extends('frontend.master')

@section('title', 'Home')

@section('body')
    <section class="banner-landing">
        <figure>
            <img src="{{ asset('/') }}frontend/assets/contents/1af3cr0SHq.png" alt="">
        </figure>
        <div class="text-absolute">
            <h2>Brembology</h2>
            <span><img src="{{ asset('/') }}frontend/assets/images/material/shape-img-abs-red.png" alt=""></span>
        </div>
        <span class="shape-banner"><img src="{{ asset('/') }}frontend/assets/images/material/shape-banner-red.png" alt=""></span>
    </section>

    <section class="content-landing">
        <div class="wrapper">
            <div class="middle">
                <div class="title-landing">
                    <div class="title">
                        <span class="line-text"></span>
                        <small>Brembology</small>
                        <h3>Brembology</h3>
                    </div>
                    <div class="text-right">
                        <p><p style="text-align: justify;">Brembo SpA is the world leader and acknowledged innovator of disc brake technology for automotive vehicles. Brembo supplies high-performance brake systems for the most important manufacturers of cars, commercial vehicles, and motorbikes worldwide, as well as clutches and other components for racing. Brembo is also a leader in the racing sector and has won more than 500 championships.</p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap-visimisi">
            <div class="box" style="background-color: #E90000;">
                <small>VISION</small>
                <p>&ldquo;Turning Energy into Inspiration&rdquo;</p>
            </div>
            <div class="box" style="background-color: #000;">
                <small>MISSION</small>
                <p>Brembo&rsquo;s mission is to become a Solution Provider, integrating its products and services into harmonic, all-round solutions to meet the rapidly evolving needs of the automotive industry.</p>
            </div>
        </div>

        <div class="wrapper">
            <section class="milestone">
                <small class="with-line">milestones</small>
                <div class="wrap-box-miles">
                    <div class="left-box">
                        <div class="slider-miles">
                            <div class="list">
                                <figure>
                                    <img src="{{ asset('/') }}frontend/assets/contents/YRdO8v9iyT.png" alt="">
                                </figure>
                                <div class="years">
                                    <span>1960s</span>
                                </div>
                            </div>
                            <div class="list">
                                <figure>
                                    <img src="{{ asset('/') }}frontend/assets/contents/ZswjLG3nEV.png" alt="">
                                </figure>
                                <div class="years">
                                    <span>1970s</span>
                                </div>
                            </div>
                            <div class="list">
                                <figure>
                                    <img src="{{ asset('/') }}frontend/assets/contents/kXqmmwWfzP.png" alt="">
                                </figure>
                                <div class="years">
                                    <span>1980s</span>
                                </div>
                            </div>
                            <div class="list">
                                <figure>
                                    <img src="{{ asset('/') }}frontend/assets/contents/F6u05WZECn.png" alt="">
                                </figure>
                                <div class="years">
                                    <span>1990s</span>
                                </div>
                            </div>
                            <div class="list">
                                <figure>
                                    <img src="{{ asset('/') }}frontend/assets/contents/lDdQM7CQb8.png" alt="">
                                </figure>
                                <div class="years">
                                    <span>2000s</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-box">
                        <div class="slider-text">
                            <div class="list">
                                <p style="text-align: justify;">THE ORIGINS OF A LEADER<br /><br />Brembo was founded just a few kilometres outside Bergamo in 1961 by Emilio Bombassei, the father of the group's current president.<br /><br />While it began as a small mechanical workshop, the experience of its founder in the mechanical sector and metallurgy was soon put to good use for prestigious clients such as Alfa Romeo.<br /><br />1964 was a historic year for Brembo, when the company started production of the first Italian brake discs for the spare parts market. Soon afterwards, production activities were broadened to include other braking system components, and the competence and specialisation of the company and the quality of its products and services earned international recognition.<br /><br />This paved the way for Brembo to become the leader in the European spare part brake disc market.</p>
                            </div>
                            <div class="list">
                                <p style="text-align: justify;">TRIUMPHS ON EVERY CIRCUIT<br /><br />When it began supplying Moto Guzzi in 1972, the Brembo brand became associated with Europe's best motorcycles. Soon after, Brembo had secured the leadership in the motorcycle braking systems segment. But the greatest testament to the quality and technology of Brembo products came in 1975, when Enzo Ferrari asked the Bergamo based company to equip the most prestigious racing cars in Formula 1. It was not long before Brembo was the leading name in the motorsports braking systems segment.<br /><br />Since then, countless teams using Brembo brakes have won hundreds of world championships in every possible automobile and motorcycle racing category.</p>
                            </div>
                            <div class="list">
                                <p>INNOVATION AND GROWTH<br /><br />From the beginning of the 1980s, Brembo focused on developing innovative products and processes, with a clearly defined strategy of expansion in specialised areas of the market from passenger cars to motorsports and motorcycles. In 1980, the product range was joined by an aluminium brake caliper for automobiles which was revolutionary in both design and the materials used.<br /><br />This new caliper was gradually adopted by high performance car manufacturers such as Porsche, Mercedes, Lancia, BMW, Nissan and Chrysler.<br /><br />From the mid 1980s, Brembo decided to extend its operations into the industrial vehicle disc brake segment, becoming a strategic supplier for Iveco, Renault Industrial Vehicles and Mercedes.<br /><br />In 1983, to give itself a more international scope, Brembo agreed to the acquisition of a share in the company by Kelsey-Hayes, a US based multinational braking systems manufacturer.<br /><br />The resulting collaboration allowed the Italian management to grow and consolidate itself in preparation for the challenges of the future.</p>
                            </div>
                            <div class="list">
                                <div>
                                    <p>AN ALL-ITALIAN COMPANY ONCE AGAIN<br /><br />In March 1993, as a consequence of a new strategic orientation, Kelsey-Hayes withdrew as a shareholder in the company. Brembo decided to focus its energies on the future of the company and, indirectly, on the competitiveness of the Italian manufacturing industry, drawing strength from the expertise of its managerial personnel and its technological superiority.<br /><br />When the company bought back the shareholding from Kelsey-Hayes, the goal set by Brembo's management was achieved in full. The company continued to grow throughout the subsequent years, and was listed on the Milan Stock Exchange in 1995: a success earned through intense teamwork, as is always the case at Brembo.</p>
                                </div>
                            </div>
                            <div class="list">
                                <p>EXPANDING THE BRAND GLOBALLY<br /><br />Brembo inaugurated the new millennium with a strategy of market expansion, acquiring the Brazilian company Alfa Real Minas for the machining of automobile brake discs and the assembly of engine flywheels. Brembo also acquired the British company AP Racing Limited, which is specialised in the production of brake and clutch systems for race cars and motorcycles and for high performance sports cars. To strengthen its presence in the motorcycle segment, Brembo acquired 70% of Marchesini, a company specialised in the production of magnesium wheels for race motorcycles.</p>
                            </div>
                        </div>
                    </div>
            </section>
        </div>

    </section>
@endsection
