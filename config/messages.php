// prepare-se para o código mais bagunçado que você já viu
//foi o que deu pra fazer xD
//a famosa gambiarra

<?php
return [
    // index
    'index' => [
        'pt' => [
            'notice' => "este site ainda está em construção~\nalgumas coisas podem estar incompletas...\n\nALIÁS: este site é feito apenas para visualização em desktop\ntalvez fique estranho no celular",
            'button' => "entrar"
        ],
        'en' => [
            'notice' => "this site is still under construction~\nsome parts may be incomplete...\n\nPLUS: this site is made only for desktop viewing\nit may look weird on mobile",
            'button' => "enter"
        ],
        'de' => [
            'notice' => "diese website ist noch im aufbau~\nmanche teile können unvollständig sein...\n\nÜBRIGENS: diese website ist nur für die desktop-anzeige gemacht\nsie könnte auf dem handy seltsam aussehen",
            'button' => "eintreten"
        ],
    ],

    // menu de sites
    'menu' => [
        'inicio'      => 'starting-point.php',
        'sobre'       => 'about.php',
        'personagens' => 'characters.php',
        'pdfs'        => 'pdfs.php',
    ],

    // links do menu, em cada idioma
    'nav' => [
        'pt' => [
            'inicio'      => 'início',
            'sobre'       => 'sobre',
            'personagens' => 'personagens',
            'pdfs'        => 'pdfs',
        ],
        'en' => [
            'inicio'      => 'home',
            'sobre'       => 'about',
            'personagens' => 'characters',
            'pdfs'        => 'pdfs',
        ],
        'de' => [
            'inicio'      => 'startseite',
            'sobre'       => 'über',
            'personagens' => 'charaktere',
            'pdfs'        => 'pdfs',
        ],
    ],

    // titulos, placeholders e conteúdo de cada página
    // sim, eu tive preguiça de renomear o placeholder
    // e sim, eu sei que isso é uma gambiarra das brabas
    // mas eu não sei como fazer de outro jeito
    
    'pages' => [
        'inicio' => [
            'pt' => [
                'title'       => "início",
                'placeholder' => "\nbem-vindo(a)! aqui é meu espaço pessoal, então terá coisinhas aqui: personagens, talvez umas histórinhas e tal...\né o que tem por enquanto, mas ainda farei mais! :3",
                'title2'      => "mais...",
                'comment1' => "\ntalvez uma coisa ou outra esteja bugada aqui, mas, pode me avisar se algo estiver errado!~"
            ],
            'en' => [
                'title'       => 'home',
                'placeholder' => "\nwelcome! this is my personal space, so there will be little things here: characters, maybe some stories and stuff...\nthat's what's here for now, but I'll still do more! :3",
                'title2'      => 'more...',
                'comment1' => "\nmaybe one thing or another is bugged here, but you can let me know if something is wrong!~"
            ],
            'de' => [
                'title'       => 'startseite',
                'placeholder' => "\nwilkommen! dies ist mein persönlicher raum, also wird es hier kleine dinge geben: charaktere, vielleicht ein paar geschichten und so...\ndas ist es, was hier für jetzt ist, aber ich werde noch mehr machen! :3",
                'title2'      => 'mehr...',
                'comment1' => "\nvielleicht verbuggt hier und da was, aber sag einfach bescheid, wenn was nicht passt!~"
            ],
        ],
        'sobre' => [
            'pt' => [
                'title'       => 'sobre mim',
                'placeholder' => "\numa breve apresentação...\n\neu me chamo Zion! Sou apenas um entusiasta da tecnologia da informação e da programação, que as vezes brinca de \"programar coisas\" e \"tentar escrever hisórias\". \n\nsempre gosto de mexer com meus personagens e vivo criando um novo a cada dia, então não se surpreenda se você ver um personagem diferente toda vez que voltar aqui~\n\ntirando isso, gosto de aprender coisas novas, e também gosto de passar tempo ouvindo música... tudo isso você lerá mais abaixo :3",
                'aboutTitle2' => "\num pouco mais do zion~",
                'aboutSection1' => "\nentão... para começar, eu sou furry, e escolhi esse nome Zion por apenas gostar da sonoridade dele, e também porque eu gosto de como ele soa em inglês. \n\nescolhi a espécie \"catcoon\" porque eu gosto tanto de gatos quanto de guaxinins, e também porque eu gosto do jeito que eles se parecem juntos... então por que não criar essa combinação, né?~ Sem contar que misturo nele as cores que eu gosto, que são azul e roxo, o branco é apenas para dar um contraste.",
                'aboutTitle3' => "\nmúsicas, aprendizados e hobbies",
                'aboutMidSection1' => "\n\nmúsicas",
                'aboutSection2' => "\nagora entramos na minha parte favorita: música! eu gosto de ouvir música enquanto faço qualquer coisa praticamente, então é quase certo que estarei ouvindo música a qualquer momento. Meu gosto para música é variado, mas ao tempo bem específico (por exemplo eu posso gostar de um gênero de música, mas não de todas as músicas desse gênero), então posso gostar de uma música \"normal\" e depois simplesmente ter uma música muito maluca... mas vamos lá!\n\nos gênero que mais ouço são rock (variantes como metalcore, electronicore, punk, emo, etc), eletrônica (variantes como dubstep, uptempo, hardstyle, bass house, etc), músicas experimentais (variantes como hyperpop, industrial bass, etc), e claro, música estrangeira (neue deutsche härte, um j-pop, etc).\n\nexemplos de artistas que gosto: \nrock: Three Days Grace, Green Day, My Chemical Romance, blink-182, Falling in Reverse.\n\neletrônica: Menniel, Excision, Pegboard Nerds, Tokyo Machine, GPF, S3RL, Remzcore.\n\nmúsicas experimentais: Spott, glitterpop!, Gynx, fur:trash.\n\nmúsica estrangeira: BLUTHUND, Heisskalt, Slaughterra, composições com a Miku e GUMI.\n\nse você quiser saber mais sobre o que eu ouço, pode me perguntar!~",
                'aboutMidSection2' => "\n\naprendizados",
                'aboutSection3' => "\nno momento, estou tentando aprender testes automatizados como Cypress e também outro idioma, que é o alemão.\n\no motivo do Cypress é por que quero me aprofundar nessa área de testes... e o alemão é por que eu gosto do idioma e quero aprender mais sobre ele, e ainda estou no bem básico (eu aceito ajuda, inclusive!~).",
                'aboutMidSection3' => "\n\nhobbies",
                'aboutSection4' => "\nmeus hobbies são variados, ou seja, não tenho um exatamento fixo. mas eles variam entre ficar na música, escrever histórias com meus personagens em inúmeras situações (ou simplesmentar criar mais personagens), brincar com sites (fingir que sei programar algo), alguns joguinhos (não ligo pra gráfico desde que seja divertido), e claro, ficar na boa pela internet vendo vídeos (de mods de terror de Minecraft, ou de tecnologia, ou só algo bem aleatório).\n\nbom... acho que é isso! se você quiser saber mais sobre mim, pode me perguntar!~\n\nagora sobre os personagens... tem o link acima no header, divirta-se! :3"
            ],
            'en' => [
                'title'       => 'about me',
                'placeholder' => "\na brief introduction...\n\nmy name is Zion! i'm just an information technology and programming enthusiast, who sometimes plays around with \"programming things\" and \"trying to write stories\".\n\ni always like to mess with my characters and i keep creating a new one every day, so don't be surprised if you see a different character every time you come back here~\n\nbesides that, I like to learn new things, and i also like to spend time listening to music... all of this you'll read more below :3",
                'aboutTitle2' => "\na little more about zion~",
                'aboutSection1' => "\nso... to start, i'm furry, and I chose this name Zion just because I like the sound of it, and how it sounds in english.\n\ni chose the species \"catcoon\" because i like both cats and raccoons, and also how they look together... so why not create this combination, right?~ not to mention that i mix in the colors I like, which are blue and purple, and white is just to give a contrast.",
                'aboutTitle3' => "\nmusic, learnings and hobbies",
                'aboutMidSection1' => "\n\nmusic",
                'aboutSection2' => "\nnow we enter my favorite part: music! i like to listen to music while doing almost anything, so it's almost certain that i'll be listening to music at any moment. my taste for music is varied, but very specific (for example, i can like a genre of music, but not all the songs in that genre), so i can like a \"normal\" songs and then just have a really crazy song... but here we go!\n\nthe genres i listen to the most are rock (variants like metalcore, electronicore, punk, emo, etc), electronic (variants like dubstep, uptempo, hardstyle, bass house, etc), experimental music (variants like hyperpop, industrial bass, etc), and of course, foreign music (neue deutsche härte, j-pop, etc).\n\nexamples of artists i like:\nrock: Three Days Grace, Green Day, My Chemical Romance, blink-182, Falling in Reverse.\n\nelectronic: Menniel, Excision, Pegboard Nerds, Tokyo Machine, GPF, S3RL, Remzcore.\n\nexperimental music: Spott, glitterpop!, Gynx, fur:trash.\n\nforeign music: BLUTHUND, Heisskalt, Slaughterra, some compositions with Miku and GUMI.\n\nif you want to know more about what i listen to you can ask me!~",
                'aboutMidSection2' => "\n\nlearnings",
                'aboutSection3' => "\nat the moment, i'm trying to learn automated testing like Cypress and also another language, which is german.\n\nthe reason for Cypress is that i want to delve into this testing area... and german is because i like the language and want to learn more about it, and i'm still at the very basic level (i accept help, by the way!~).",
                'aboutMidSection3' => "\n\nhobbies",
                'aboutSection4' => "\nmy hobbies are varied, that is, i don't have a fixed one. but they range from music, writing stories with my characters in countless situations (or simply creating more characters), playing around with websites (pretending that i know how to program something), some gaming (i don't care about graphics as long if it's fun), and of course, just chilling on the internet watching videos (of Minecraft horror mods, or technology, or just something really random).\n\nwell... i think that's it! if you want to know more about me, you can ask me!~\n\nnow about the characters... there's the link above in the header, have fun! :3"
            ],
            'de' => [
                'title'       => 'über mich',
                'placeholder' => "\nbin noch auf'm anfängerlevel, also die seite hier wird bei mir bisschen dauern lol"
            ],
        ],
        'personagens' => [
            'pt' => [
                'title'       => 'personagens',
                'placeholder' => 'Conteúdo “personagens” em PT vai aqui...'
            ],
            'en' => [
                'title'       => 'characters',
                'placeholder' => '“Characters” page content in EN goes here...'
            ],
            'de' => [
                'title'       => 'charaktere',
                'placeholder' => '“Charaktere” Seiteninhalt auf DE geht hier...'
            ],
        ],
        'pdfs' => [
            'pt' => [
                'title'       => 'pdfs',
                'placeholder' => 'Conteúdo “pdfs” em PT vai aqui...'
            ],
            'en' => [
                'title'       => 'pdfs',
                'placeholder' => '“PDFs” page content in EN goes here...'
            ],
            'de' => [
                'title'       => 'pdfs',
                'placeholder' => '“PDFs” Seiteninhalt auf DE geht hier...'
            ],
        ],
    ],
];
