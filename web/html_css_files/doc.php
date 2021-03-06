<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>eDzienniczek</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./styles/doc.css" />
    <script defer src="script/scripts.js"></script>
    <script defer src="script/jquery-1.12.4.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <button class="navbar-toggler" onclick="toggleSidebar(this)">
            <div class="navbar-toggler-icon"></div>
        </button>
        <ul class="menu">
            <li class="item">Dokumentacja</li>
            <ul class="sub-menu">
                <li class="sub-item"><a href="#">O projekcie</a></li>
                <li class="sub-item"><a href="#">Zastosowany model projektu</a></li>
                <li class="sub-item">Zastosowane technologie</li>
                <ul class="sub-menu">
                    <li class="sub-item">Aplikacja desktopowa</li>
                    <ul class="sub-menu">
                        <li class="sub-item"><a href="#">Java</a></li>
                        <li class="sub-item"><a href="#">JavaFX</a></li>
                        <li class="sub-item"><a href="#">Maven</a></li>
                        <li class="sub-item"><a href="#">Hibernate</a></li>
                        <li class="sub-item"><a href="#">Spring</a></li>
                        <li class="sub-item"><a href="#">JUnit</a></li>
                        <li class="sub-item"><a href="#">Log4j2</a></li>
                    </ul>
                    <li class="sub-item">Strona internetowa</li>
                    <ul class="sub-menu">
                        <li class="sub-item"><a href="#">HTMl</a></li>
                        <li class="sub-item"><a href="#">CSS</a></li>
                        <li class="sub-item"><a href="#">JavaScript</a></li>
                        <li class="sub-item"><a href="#">React</a></li>
                    </ul>
                    <li class="sub-item">Bazy danych</li>
                    <ul class="sub-menu">
                        <li class="sub-item"><a href="#">T-SQ</a></li>
                        <li class="sub-item"><a href="#">MSSQL</a></li>
                    </ul>
                    <li class="sub-item">Inne</li>
                    <ul class="sub-menu">
                        <li class="sub-item"><a href="#">Git</a></li>
                        <li class="sub-item"><a href="#">GitHub</a></li>
                        <li class="sub-item"><a href="#">Taiga</a></li>
                    </ul>
                </ul>
                <li class="sub-item"><a href="#">Tw??rcy projektu</a></li>
            </ul>
        </ul>
    </nav>
    <div class="container">
        <header>
            <h1>eDzienniczek</h1>
            <a href="./index.php" class="btn">Strona projektu</a>
        </header>
        <main>
            <section class="front-page" id="front-page">
                <h1>
                    < Dokumentacja />
                </h1>
                <article class="sub-container">
                    <h2>
                        < O projekcie />
                    </h2>
                    <p>Naszym g????wnym za??o??eniem w projekcie by??o utworzenie wygodnej i
                        intuicyjnej aplikacji, przypominaj??c?? znane nam ju?? dotychczas
                        dzienniki elektroniczne, stosowane w szko??ach (np. MobiDziennik)
                        oraz uniwerstytetach (np. USOS).</p>
                </article>

                <article class="sub-container">
                    <h2>
                        < Zastosowany model projektu />
                    </h2>
                    <article></article>
                    <p>Zastosowany przez nas model projektowy - <b>RUP (Rational Unified Process)</b> jest metodyk??
                        zak??adaj??c?? iteracyjny proces tworzenia oprogramowania. Metodyka ta wprowadza regu??y oraz
                        dobre praktyki dla wszystkich faz wytwarzania oprogramowania.<br>

                        W ka??dej iteracji wytwarzany jest fragment systemu, kt??ry jest udost??pniany klientowi. Pozwala
                        to na uzyskanie szybkiej informacji zwrotnej i upewnieniu si??, ??e zesp???? realizuj??cy projekt dobrze
                        zrozumia?? wymagania i oczekiwania klienta. Szybkie wykrycie ewentualnych problem??w lub
                        nieporozumie??, pozwala szybko wprowadzi?? odpowiednie modyfikacje.</p>
                </article>

                <article class="sub-container">
                    <h2>
                        < Zastosowane technologie />
                    </h2>

                    <h3>Aplikacja desktopowa</h3>

                    <h4>Java</h4>
                    <p>To najpopularniejszy j??zyk programowania i najcz????ciej wybierana platforma programistyczna.
                        Obni??a koszty, skraca czas programowania, pobudza innowacyjno???? i usprawnia us??ugi aplikacj.</p>
                    <a class="zastosowanie" href="#">Wiecej</a>

                    <h4>JavaFX</h4>
                    <p>Nast??pca ju?? prawie wymar??ego ANT a. Maven potrafi zrobi?? wszystko z naszym projektem
                        podczas jego budowania. Jedyne co musimy zrobi?? to zastosowa?? si?? do konwencji
                        nazewnictwa katalog??w w projekcie jak?? wymaga Maven. Je??li to zrobimy - sam Maven
                        zatroszczy si?? o kompilowanie kodu, wykonywanie test??w itd.</p>
                    <a class="zastosowanie" href="#">Wiecej</a>

                    <h4>Hibernate</h4>
                    <p>Framework stanowi??cy jedn?? z najpopularniejszych implementacji Java Persistence API (JPA).
                        Umo??liwia on dokonania mapowania obiektowo-relacyjnego (ORM) - czyli odzworowania
                        obiekt??w klas na baz?? danych. Najpro??ciej m??wi??c odpowiada za wygodn?? komunikacj??
                        aplikacji z baz?? danych</p>
                    <a class="zastosowanie" href="#">Wiecej</a>

                    <h4>Spring</h4>
                    <p>Narz??dzie, kt??re znacznie skraca proces tworzenia aplikacji. Stanowi szereg usprawnie??, kt??rych
                        implementacja w Javie zaj????aby wieki.</p>
                    <a class="zastosowanie" href="#">Wiecej</a>

                    <h4>JUnit</h4>
                    <p>Narz??dzie s??u????ce do tworzenia powtarzalnych test??w jednostkowych oprogramowania
                        pisanego w j??zyku Java.</p>
                    <a class="zastosowanie" href="#">Wiecej</a>

                    <h4>Log4j2</h4>
                    <p>Biblioteka j??zyka programowania Java s??u????ca do tworzenia log??w podczas dzia??ania aplikacji.</p>
                    <a class="zastosowanie" href="#">Wiecej</a>


                    <h3>Strona internetowa</h3>

                    <h4>HTML</h4>
                    <p>J??zyk znacznik??w stosowany do tworzenia dokument??w hipertekstowych.</p>
                    <a class="zastosowanie" href="#">Wiecej</a>

                    <h4>CSS</h4>
                    <p>Kaskadowe arkusze styl??w to j??zyk, kt??ry wnosi styl do stron internetowych poprzez interakcj?? z
                        elementami HTML.</p>
                    <a class="zastosowanie" href="#">Wiecej</a>

                    <h4>JavaScript</h4>
                    <p>J??zyk programowania, kt??ry umo??liwia wdro??enie na stronie internetowej skoplikowanych
                        element??w, dzi??ki kt??rym strona ta mo??e nie tylko wy??wietla?? statyczne informacje, ale r??wnie??
                        obs??ugiwac zmian?? tre???? odpowiednio do sytuacji, wy??wietla?? interaktywne mapy i animacje
                        grafiki 2D/3D, wy??wietla?? wideo itd.</p>
                    <a class="zastosowanie" href="#">Wiecej</a>

                    <h4>React</h4>
                    <p>JavaScriptowa biblioteka s??u????ca do tworzenia interfejs??w u??ytkownika.</p>
                    <a class="zastosowanie" href="#">Wiecej</a>


                    <h3>Bazy danych</h3>

                    <h4>T-SQL</h4>
                    <p>Rozszerzenie j??zyka SQL. T-SQL jest j??zykiem proceduralnym. Mo??emy za jego pomoc?? stosowa??
                        typowe elementy programowania jak p??tle, intrukcje warunkowe, mo??emy tak??e tworzy?? w??asne
                        funkcje, procedury i operowa?? na zmiennych.</p>
                    <a class="zastosowanie" href="#">Wiecej</a>

                    <h4>MSSQL</h4>
                    <p>System zarz??dzania baz?? danych.</p>
                    <a class="zastosowanie" href="#">Wiecej</a>


                    <h3>Inne</h3>

                    <h4>Git</h4>
                    <p>Jest rozproszonym systemem kontroli wersji u??atwiaj??cym prac?? nad tworzeniem aplikacji, stron
                        internetowych i innych narz??dzi w grupach. System ??ledzi wszystkie wykonywane zmiany w
                        plikach, a tak??e umo??liwia przywr??cenie ich dowolnej, wcze??niejszej wersji.</p>
                    <a class="zastosowanie" href="#">Wiecej</a>

                    <h4>GitHub</h4>
                    <p>To us??uga hostingu umo??liwiaj??ca zarz??dzanie repozytoriami Git. Przy jego pomocy jeste??my w
                        stanie udost??pni?? sw??j kod w jednym miejscu dla wszystkich.</p>
                    <a class="zastosowanie" href="#">Wiecej</a>

                    <h4>Taiga</h4>
                    <p>To darmowy system zarz??dzania projektami typu open source dla startup??w, programist??w i
                        projektant??w.</p>
                    <a class="zastosowanie" href="#">Wiecej</a>

                </article>

                <article class="sub-container">
                    <h2>
                        < Tw??rcy projektu />
                    </h2>
                    <ul>
                        <li class="item">Micha?? Musia??owicz - Project Manager, Implementator (java), Integrato<a href="http://" class="git"></a><a href="http://" class="linkedin"></a></li>
                        <li class="item">Micha?? Nowak - Process Engineer, Implementator (java)<a href="http://" class="git"></a><a href="http://" class="linkedin"></a></li>
                        <li class="item">Krzysztof Raczy??ski - Software Architect/Database Designer<a href="http://" class="git"></a><a href="http://" class="linkedin"></a></li>
                        <li class="item">Mi??osz Konarski - Software Architect/Database Designer<a href="http://" class="git"></a><a href="http://" class="linkedin"></a></li>
                        <li class="item">Pawe?? Rostecki - System Administrator<a href="http://" class="git"></a><a href="http://" class="linkedin"></a></li>
                        <li class="item">J??drzej Weso??owski - Implementator (web)<a href="http://" class="git"></a><a href="http://" class="linkedin"></a></li>
                        <li class="item">Szymon Mazurek - Implementator (web)<a href="http://" class="git"></a></li>
                        <li class="item">Mateusz Cwojdzi??ski - Implementator (web)<a href="http://" class="git"></a><a href="http://" class="linkedin"></a></li>
                        <li class="item">J??drzej Rybczy??ski - Implementator, System Administrator (support)<a href="http://" class="git"></a><a href="http://" class="linkedin"></a></li>
                        <li class="item">Dominika Le??niewska - System Analyst, UI Designer<a href="http://" class="git"></a><a href="http://" class="linkedin"></a></li>
                        <li class="item">Maciej Maciejewski - System Analyst<a href="http://" class="git"></a><a href="http://" class="linkedin"></a></li>
                        <li class="item">Maksymilian ??asecki - System Tester (manual testing), Course Developer<a href="http://" class="git"></a><a href="http://" class="linkedin"></a></li>
                        <li class="item">Miko??aj Mumot - Test Manager, System Tester (automatic testing)<a href="http://" class="git"></a><a href="http://" class="linkedin"></a></li>
                    </ul>
                </article>
            </section>
        </main>
        <footer>
            <h1>eDzienniczek</h1>
        </footer>
    </div>
</body>

</html>