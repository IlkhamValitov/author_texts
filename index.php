<html lang="ru">
    <head>
        <title>Статьи</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/script.js"></script>
    </head>

    <body>
        <!-- Вход для администратора -->
        <div class="admin_login">
            <form action="backend/controller/auth.php" method="post" class="admin_login">
                <span>Имя</span><input type="text" name="login">
                <span>Пароль</span><input type="password" name="pass">
                <input type="submit">
                <div class="test"></div> <!-- TESTING -->
            </form>
            <?php
                if(@$_COOKIE['auth_err']): //Проверка на наличие cookie-файла для ошибки
            ?>
            <p class="err_txt"><?= $_COOKIE['auth_err'] ?></p> <!-- Если условие положительное, то выведется указание на неверные данные авторизации -->
            <?php endif; ?> <!-- Конец условного выражения -->
        </div>
        <!-- Вход для администратора -->
        
        <?php                           
            if(@$_COOKIE['admin'] == ''): //Проверка значения cookie-файла
        ?>

        <div id="main_container">
            <header class="header_panel"> <!-- Flex-блок -->
                <div class="logo_block">
                    <a href="#" class="logo"><h3>Полет мысли</h3></a>
                </div>
                <!-- Поле поиска -->
                <div class="search_form_block">
                    <form action="backend/controller/auth.php" method="post" class="search_form">
                        <input class="search" type="search" name="query">
                        <button type="submit">Искать</button>
                    </form>                              
                </div>
                <!-- Поле поиска -->
            </header>

            <div class="center">
                <h4>Рекомендации</h4>
                <section class="texts"> <!-- Flex-блок -->
                    <div class="demo_block">
                        <div class="book_illustration">
                            <img alt="" src="img/the_shining.png">
                        </div>
                        <div class="book_text">
                            <h2>Сияние</h2>
                            <p>Одна из популярнейших книг великого и ужасного мастера ужасов - Стивена Кинга.
                            Глубокие проблемы главного героя в лице Джека Торренса вовлекают читателя в повествование.
                            Присущее, пожалуй многим, пристрастие не дает Джеку наконец обрести мир с собой,
                            притягивая разнообразные проблемы, как в семье, так и в карьере. Они вгоняют в еще большее 
                            разочерование жизнью. Но казалось бы, приглянулся неплохой шанс если не решить, но попытаться сделать
                            шаг для их решения. Уединенный где-то в горах отель "Оверлук". Величественно возвышающийся и 
                            представляющий великолепные виды каждому кто захочет в нем остановиться. Однако тайны, которые 
                            хранит это место слишком мрачны и враждебны к любому кто нарушит их покой. Экранизированный не 
                            менее талантливым режиссером Стэнли Кубриком эта история никого не оставит равнодушным</p>
                        </div>
                    </div>

                    <div class="demo_block">
                        <div class="book_illustration">
                            <img alt="" src="img/brave_new_world.png">
                        </div>
                        <div class="book_text">
                            <h2>О дивный новый мир</h2>
                            <p>Роман-антиутопия Олдоса Хаксли рассказывающий о мире где создать, а точнее вырастить идеального
                            человека вполне возможно. Люди здесь подразделяются на несколько групп, они заняли свое место в 
                            социальной иерархии ещё на самой ранней стадии своего развития. Этот мир не терпит чужаков и не 
                            приемлет нового. Низшие к низшим, а высшие к высшим - примерно такое правило царило в идеальном мире 
                            сейчас. Но не все ещё подверглись уравниванию, некоторые выделяются не сильно, а некоторые просто не 
                            созданы для существования в этом "Дивном новом мире".</p>
                        
                        </div>
                    </div>

                    <div class="demo_block">
                        <div class="book_illustration">
                            <img alt="" src="img/it.jpeg">
                        </div>
                        <div class="book_text">
                            <h2>Оно</h2>
                            <p>Культовый роман Стивена Кинга, надёжно засевший в сознании практически всех читателей 
                            мастера пера. Повествование освещает историю семерых школьников, чья судьба уготовила 
                            им немало сюрпризов приятных и не очень. Проблемы в семье, проблемы в школе, Кинг 
                            будто ставит их перед решением сложных задач, подкидывая новые вслед за решенными. 
                            Это совсем не случайно, ведь за черной полосой всегда есть белая, нужно всего-то 
                            немного побороться и пытаться быть сильнее страха. В силу возраста и характера кому-то 
                            это удается хорошо, а кому-то не очень, но они не одни, точнее они в каком-то смысле 
                            едины. Чудовище с которым им предстоит столкнуться легко одержит вверх над ними если 
                            каждый предстанет перед ним один, но никогда над ними вместе. Роман получивший не одну 
                            экранизацию, пользующийся популярностью у многих ценителей остросюжетной драмы и 
                            будоражащего триллера. Произведение проявляющее почтение к безмерной и искренней дружбе,
                            детской простоте и непосредственности. И главное, пожалуй, что очень важно заключить – 
                            чудеса существуют!</p>
                        
                        </div>
                    </div>
                    
                    <div class="demo_block">

                        <div class="book_illustration">
                            <img alt="" src="img/lord_of_the_flies.png">
                        </div>
                            
                        <div class="book_text">

                            <h2>Повелитель мух</h2>
                            <p>Роман-сатира на современный мир где казалось бы цивилизованное общество со своими ценностями, 
                            правилами и устоями давно изжило прежнюю безмерную дикость и звериную жестокость. Главными 
                            героями повествования оказываются, как ни странно, дети. Попав в условия неизвестного 
                            острова они покинуты всеми. И в этом месте от них уже не требуется следовать прежним 
                            правилам, они оказываются  наедине с собой. Остров медленно начинает их менять, сподвигая на
                            безумные поступки, но только ли они обречены на это!? Произведение, являющее собой 
                            красноречивую иллюстрацию того, как может быть тонка и хрупка невидимая грань между 
                            цивилизацией и дремучестью.</p>
                        </div>
                    </div>
                    
                </section>             <!-- -->
             
            </div>
            
            <footer class="footer_panel"> <!-- Flex-блок -->
                
            </footer>
            

        </div>

        <?php else: ?> <!-- Разметка ниже будет отображена после входа в консоль администратора -->
            <p>Привет <?= $_COOKIE['admin']?> <a href="backend/controller/auth.php">Выход</a></p>

            <div class="admin_pn" id="main_container"> <!-- добавлен дополнительный класс, чтобы верифицировать разметку админ-панели. Далее будет удалена форма входа, после получения доступа к панели -->
                <header class="header_panel"> <!-- Flex-блок -->
                    <div class="logo_block">
                        <a href="#" class="logo"><h3>Полет мысли</h3></a>
                    </div>
                <!-- Поле поиска -->
                    <div class="search_form_block">
                        <form action="backend/controller/auth.php" method="post" class="search_form">
                            <input class="search" type="search" name="query">
                            <button type="submit">Искать</button>
                        </form>                              
                    </div>
                <!-- Поле поиска -->
                </header>

                <div class="center">
                    <h4>Рекомендации</h4>
                    <section class="texts"> <!-- Flex-блок -->
                        <div class="demo_block">
                            <div class="book_illustration">
                                <img alt="" src="img/the_shining.png">
                                <div class='control_icons'>
                                    <div>&#10000;</div>
                                    <div>&#10006;</div>
                                </div>
                            </div>
                            <div class="book_text">
                                <h2>Сияние</h2>
                                <p>Одна из популярнейших книг великого и ужасного мастера ужасов - Стивена Кинга.
                                Глубокие проблемы главного героя в лице Джека Торренса вовлекают читателя в повествование.
                                Присущее, пожалуй многим, пристрастие не дает Джеку наконец обрести мир с собой,
                                притягивая разнообразные проблемы, как в семье, так и в карьере. Они вгоняют в еще большее 
                                разочерование жизью. Но казалось бы приглянуля неплохой шанс если не решить, но попытаться сделать
                                шаг для их решения. Уединенный где-то в горах отель "Оверлук". Величественно возвышающийся и 
                                представляющий великолепные виды каждому кто захочет в нем остановиться. Однако тайны, которые 
                                хранит это место слишком мрачны и враждебны к любому кто нарушит их покой. Экранизированный не 
                                менее талантливым режиссером Стэнли Кубриком эта история никого не оставит равнодушным</p>
                            </div>
                        </div>

                        <div class="demo_block">
                            <div class="book_illustration">
                                <img alt="" src="img/brave_new_world.png">
                                <div class='control_icons'>
                                    <div>&#10000;</div>
                                    <div>&#10006;</div>
                                </div>
                            </div>
                            <div class="book_text">
                                <h2>О дивный новый мир</h2>
                                <p>Роман-антиутопия Олдоса Хаксли рассказывающий о мире где создать, а точнее вырастить идеального
                                человека вполне возможно. Люди здесь подразделяются на несколько групп, они заняли свое место в 
                                социальной иерархии ещё на самой ранней стадии своего развития. Этот мир не терпит чужаков и не 
                                приемлет нового. Низшие к низшим, а высшие к высшим - примерно такое правило царило в идеальном мире 
                                сейчас. Но не все ещё подверглись уравниванию, некоторые выделяются не сильно, а некоторые просто не 
                                созданы для существования в этом "Дивном новом мире".</p>
                        
                            </div>
                        </div>

                        <div class="demo_block">
                            <div class="book_illustration">
                                <img alt="" src="img/it.jpeg">
                                <div class='control_icons'>
                                    <div>&#10000;</div>
                                    <div>&#10006;</div>
                                </div>
                            </div>
                            <div class="book_text">
                                <h2>Оно</h2>
                                <p>Культовый роман Стивена Кинга, надёжно засевший в сознании практически всех читателей 
                                мастера пера. Повествование освещает историю семерых школьников, чья судьба уготовила 
                                им немало сюрпризов приятных и не очень. Проблемы в семье, проблемы в школе, Кинг 
                                будто ставит их перед решением сложных задач, подкидывая новые вслед за решенными. 
                                Это совсем не случайно, ведь за черной полосой всегда есть белая, нужно всего-то 
                                немного побороться и пытаться быть сильнее страха. В силу возраста и характера кому-то 
                                это удается хорошо, а кому-то не очень, но они не одни, точнее они в каком-то смысле 
                                едины. Чудовище с которым им предстоит столкнуться легко одержит вверх над ними если 
                                каждый предстанет перед ним один, но никогда над ними вместе. Роман получивший не одну 
                                экранизацию, пользующийся популярностью у многих ценителей остросюжетной драмы и 
                                будоражищего триллера. Произведение проявляющее почтение к безмерной и искренней дружбе, 
                                детской простоте и непосредственности. И главное, пожалуй, что очень важно заключить – 
                                чудеса существуют!</p>
                            </div>
                        </div>
                    
                        <div class="demo_block">
                            <div class="book_illustration">
                                <img alt="" src="img/lord_of_the_flies.png">
                                <div class='control_icons'>
                                    <div>&#10000;</div>
                                    <div>&#10006;</div>
                                </div>
                            </div>
                            <div class="book_text">
                                <h2>Повелитель мух</h2>
                                <p>Роман-сатира на современный мир где казалось бы цивилизованное общество со своими ценностями, 
                                правилами и устоями давно изжило прежнюю безмерную дикость и звериную жестокость. Главными 
                                героями повествования оказываются, как ни странно, дети. Попав в условия неизвестного 
                                острова они покинуты всеми. И в этом месте от них уже не требуется следовать прежним 
                                правилам, они оказываются  наедине с собой. Остров медленно начинает их менять, сподвигая на 
                                безумные поступки, но только ли они обречены на это!? Произведение, являющее собой 
                                красноречивую иллюстрацию того, как может быть тонка и хрупка невидимая грань между 
                                цивилизацией и дремучестью.</p>
                            </div>
                        </div>
                    
                    </section>             <!-- -->
             
                </div>
            
                <footer class="footer_panel"> <!-- Flex-блок -->
                
                </footer>
            

            </div>
            <?php endif; ?>
    </body>

</html>