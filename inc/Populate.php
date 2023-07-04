<?php 

class Populate  { 
  function __construct($tablename) {
    global $wpdb;
    $query = "INSERT INTO $tablename (id, game, artist, songname) VALUES 
    (52,	'SingStar: Take That',	'Take That',	'A Million Love Songs (1992)'),
    (53,	'SingStar: Take That',	'Take That',	'Babe (1993)'),
    (54,	'SingStar: Take That',	'Take That',	'Back For Good (1995)'),
    (55,	'SingStar: Take That',	'Take That',	'Beautiful World (2006)'),
    (56,	'SingStar: Take That',	'Take That',	'Could It Be Magic (1992)'),
    (57,	'SingStar: Take That',	'Take That',	'Do What U Like (1991)'),
    (58,	'SingStar: Take That',	'Take That',	'Everything Changes (1994)'),
    (59,	'SingStar: Take That',	'Take That',	'Greatest Day (2008)'),
    (60,	'SingStar: Take That',	'Take That',	'Hold Up A Light (2009)'),
    (61,	'SingStar: Take That',	'Take That',	'I\'d Wait For Life (2007)'),
    (62,	'SingStar: Take That',	'Take That',	'It Only Takes A Minute (1992)'),
    (63,	'SingStar: Take That',	'Take That',	'Love Ain\'t Here Anymore (1994)'),
    (64,	'SingStar: Take That',	'Take That',	'Never Forget (1995)'),
    (65,	'SingStar: Take That',	'Take That',	'Once You\'ve Tasted Love (1992)'),
    (66,	'SingStar: Take That',	'Take That',	'Patience (2006)'),
    (67,	'SingStar: Take That',	'Take That',	'Pray (1993)'),
    (68,	'SingStar: Take That',	'Take That',	'Promises (1991)'),
    (69,	'SingStar: Take That',	'Take That',	'Reach Out (2007)'),
    (70,	'SingStar: Take That',	'Take That',	'Relight My Fire (1993)'),
    (71,	'SingStar: Take That',	'Take That',	'Rule The World (2007)'),
    (72,	'SingStar: Take That',	'Take That',	'Said It All (2009)'),
    (73,	'SingStar: Take That',	'Take That',	'Shine (2007)'),
    (74,	'SingStar: Take That',	'Take That',	'Sure (1994)'),
    (75,	'SingStar: Take That',	'Take That',	'Up All Night (2009)'),
    (76,	'SingStar: Take That',	'Take That',	'Why Can\'t I Wake Up With You (1993)'),
    (77,	'SingStar: ABBA',	'ABBA',	'Chiquitita (1979)'),
    (78,	'SingStar: ABBA',	'ABBA',	'Dancing Queen (1976)'),
    (79,	'SingStar: ABBA',	'ABBA',	'Does Your Mother Know (1979)'),
    (80,	'SingStar: ABBA',	'ABBA',	'Fernando (1976)'),
    (81,	'SingStar: ABBA',	'ABBA',	'Gimme! Gimme! Gimme! (A Man After Midnight) (1979)'),
    (82,	'SingStar: ABBA',	'ABBA',	'I Do, I Do, I Do, I Do, I Do (1975)'),
    (83,	'SingStar: ABBA',	'ABBA',	'Knowing Me, Knowing You (1976/77)'),
    (84,	'SingStar: ABBA',	'ABBA',	'Mamma Mia (1975)'),
    (85,	'SingStar: ABBA',	'ABBA',	'Money, Money, Money (1976)'),
    (86,	'SingStar: ABBA',	'ABBA',	'One Of Us (1981)'),
    (87,	'SingStar: ABBA',	'ABBA',	'Ring Ring (1973/74)'),
    (88,	'SingStar: ABBA',	'ABBA',	'SOS (1975)'),
    (89,	'SingStar: ABBA',	'ABBA',	'Summer Night City (1978)'),
    (90,	'SingStar: ABBA',	'ABBA',	'Super Trouper (1980)'),
    (91,	'SingStar: ABBA',	'ABBA',	'Take A Chance On Me (1977/78)'),
    (92,	'SingStar: ABBA',	'ABBA',	'Thank You For The Music (1977/78)'),
    (93,	'SingStar: ABBA',	'ABBA',	'The Name Of The Game (1977)'),
    (94,	'SingStar: ABBA',	'ABBA',	'The Winner Takes It All (1980)'),
    (95,	'SingStar: ABBA',	'ABBA',	'Voulez-Vous'),
    (96,	'SingStar: ABBA',	'ABBA',	'Waterloo (1974)'),
    (119,	'SingStar Legendat',	'Aki Sirkesalo',	'Naispaholainen'),
    (120,	'SingStar Legendat',	'Anssi Kela',	'Milla'),
    (121,	'SingStar Legendat',	'Aretha Franklin',	'Respect'),
    (122,	'SingStar Legendat',	'Black Sabbath',	'Paranoid'),
    (123,	'SingStar Legendat',	'Depeche Mode',	'Enjoy the Silence'),
    (124,	'SingStar Legendat',	'Don Huonot',	'Riidankylväjä'),
    (125,	'SingStar Legendat',	'Eppu Normaali',	'Tahroja paperilla'),
    (126,	'SingStar Legendat',	'HIM',	'Right Here in My Arms'),
    (127,	'SingStar Legendat',	'Indica',	'Ikuinen Virta'),
    (128,	'SingStar Legendat',	'J. Karjalainen ja Mustat Lasit',	'Doris'),
    (129,	'SingStar Legendat',	'John Lennon',	'Imagine'),
    (130,	'SingStar Legendat',	'Lordi',	'Hard Rock Hallelujah'),
    (131,	'SingStar Legendat',	'Lynyrd Skynyrd',	'Sweet Home Alabama'),
    (132,	'SingStar Legendat',	'Madonna',	'Papa Don\'t Preach'),
    (133,	'SingStar Legendat',	'Neljä Ruusua',	'Juppihippipunkkari'),
    (134,	'SingStar Legendat',	'Nirvana',	'Smells Like Teen Spirit'),
    (135,	'SingStar Legendat',	'Pelle Miljoona Oy',	'Moottoritie on kuuma'),
    (136,	'SingStar Legendat',	'Pet Shop Boys',	'Always on My Mind'),
    (137,	'SingStar Legendat',	'PMMP',	'Pikkuveli'),
    (138,	'SingStar Legendat',	'Popeda',	'Kuuma kesä'),
    (139,	'SingStar Legendat',	'Sam Cooke',	'(What A) Wonderful World'),
    (140,	'SingStar Legendat',	'Samuli Edelmann & Sani',	'Tuhat yötä'),
    (141,	'SingStar Legendat',	'Suurlähettiläät',	'Elokuun 11'),
    (142,	'SingStar Legendat',	'The Jackson 5',	'I Want You Back'),
    (143,	'SingStar Legendat',	'The Police',	'Roxanne'),
    (144,	'SingStar Legendat',	'The Rasmus',	'In the Shadows'),
    (145,	'SingStar Legendat',	'The Righteous Brothers',	'Unchained Melody'),
    (146,	'SingStar Legendat',	'Tina Turner',	'What\'s Love Got to Do with It?'),
    (147,	'SingStar Legendat',	'Whitney Houston',	'The Greatest Love of All'),
    (148,	'SingStar Legendat',	'Yö',	'Joutsenlaulu'),
    (149,	'SingStar Party',	'Alicia Keys',	'Fallin\''),
    (150,	'SingStar Party',	'Ashford & Simpson',	'Solid'),
    (151,	'SingStar Party',	'Bill Withers',	'Ain\'t No Sunshine'),
    (152,	'SingStar Party',	'Blu Cantrell',	'Hit \'Em Up Style (Oops!)'),
    (153,	'SingStar Party',	'Bob Marley',	'No Woman No Cry'),
    (154,	'SingStar Party',	'Buggles',	'Video Killed the Radio Star'),
    (155,	'SingStar Party',	'Busted',	'Year 3000'),
    (156,	'SingStar Party',	'Cyndi Lauper',	'Girls Just Want to Have Fun'),
    (157,	'SingStar Party',	'Destiny\'s Child',	'Survivor'),
    (158,	'SingStar Party',	'Dido',	'White Flag'),
    (159,	'SingStar Party',	'Duran Duran',	'Hungry Like The Wolf'),
    (160,	'SingStar Party',	'Elton John & Kiki Dee',	'Don\'t Go Breaking My Heart'),
    (161,	'SingStar Party',	'Elvis',	'Way Down'),
    (162,	'SingStar Party',	'Franz Ferdinand',	'Take Me Out'),
    (163,	'SingStar Party',	'George Michael',	'Faith'),
    (164,	'SingStar Party',	'Jamiroquai',	'Cosmic Girl'),
    (165,	'SingStar Party',	'Javine',	'Real Things'),
    (166,	'SingStar Party',	'Kylie Minogue',	'I Should Be So Lucky'),
    (167,	'SingStar Party',	'Little Richard',	'Tutti Frutti'),
    (168,	'SingStar Party',	'Maroon 5',	'This Love'),
    (169,	'SingStar Party',	'Natasha Bedingfield',	'Single'),
    (170,	'SingStar Party',	'Pink',	'Just Like A Pill'),
    (171,	'SingStar Party',	'Scissor Sisters',	'Take Your Mamma'),
    (172,	'SingStar Party',	'Sonny & Cher',	'I Got You Babe'),
    (173,	'SingStar Party',	'Spandau Ballet',	'Gold'),
    (174,	'SingStar Party',	'Spice Girls',	'Who Do You Think You Are'),
    (175,	'SingStar Party',	'The Beautiful South',	'A Little Time'),
    (176,	'SingStar Party',	'The Foundations',	'Build Me Up Buttercup'),
    (177,	'SingStar Party',	'The Police',	'Every Breath You Take'),
    (178,	'SingStar Party',	'Tiffany',	'I Think We\'re Alone Now'),
    (179,	'SingStar Pop Hits',	'Akon',	'Lonely'),
    (180,	'SingStar Pop Hits',	'All Saints',	'Black Coffee'),
    (181,	'SingStar Pop Hits',	'Ashlee Simpson',	'Boyfriend'),
    (182,	'SingStar Pop Hits',	'Avril Lavigne',	'My Happy Ending'),
    (183,	'SingStar Pop Hits',	'Britney Spears',	'Baby One More Time'),
    (184,	'SingStar Pop Hits',	'Cascada',	'Everytime We Touch'),
    (185,	'SingStar Pop Hits',	'Corinne Baily Rae',	'Put Your Records On'),
    (186,	'SingStar Pop Hits',	'Daniel Powter',	'Bad Day'),
    (187,	'SingStar Pop Hits',	'Dannii Minogue',	'I Begin To Wonder'),
    (188,	'SingStar Pop Hits',	'Evanescence',	'Bring Me To Life'),
    (189,	'SingStar Pop Hits',	'Fall Out Boy',	'Dance Dance'),
    (190,	'SingStar Pop Hits',	'Girls Aloud',	'No Good Advice'),
    (191,	'SingStar Pop Hits',	'Goldfrapp',	'Oh La La'),
    (192,	'SingStar Pop Hits',	'Jamelia',	'Beware Of The Dog'),
    (193,	'SingStar Pop Hits',	'James Morrison',	'You Give Me Something'),
    (194,	'SingStar Pop Hits',	'Jennifer Lopez',	'Jenny From The Block'),
    (195,	'SingStar Pop Hits',	'JoJo',	'Leave (Get Out)'),
    (196,	'SingStar Pop Hits',	'Lemar',	'It’s Not That Easy'),
    (197,	'SingStar Pop Hits',	'Lily Allen',	'Littlest Things'),
    (198,	'SingStar Pop Hits',	'My Chemical Romance',	'Helena'),
    (199,	'SingStar Pop Hits',	'Nelly Furtado',	'Promiscuous'),
    (200,	'SingStar Pop Hits',	'Norah Jones',	'Don’t Know Why'),
    (201,	'SingStar Pop Hits',	'Orson',	'Bright Idea'),
    (202,	'SingStar Pop Hits',	'Razorlight',	'Golden Touch'),
    (203,	'SingStar Pop Hits',	'Rihanna',	'SOS'),
    (204,	'SingStar Pop Hits',	'Scissor Sisters',	'I Don\'t Feel Like Dancing'),
    (205,	'SingStar Pop Hits',	'Sugababes',	'Push The Button'),
    (206,	'SingStar Pop Hits',	'Travis',	'Sing'),
    (207,	'SingStar Pop Hits',	'U2',	'Beautiful Day'),
    (208,	'SingStar Pop Hits',	'Will Young',	'Switch It On'),
    (209,	'SingStar SuomiPop',	'Aikakone',	'Odota'),
    (210,	'SingStar SuomiPop',	'Anna Abreu',	'End of Love'),
    (211,	'SingStar SuomiPop',	'Anna Eriksson',	'Huojuva talo'),
    (212,	'SingStar SuomiPop',	'Cheek',	'Liekeissä'),
    (213,	'SingStar SuomiPop',	'Disco',	'Ilkeitä asioita'),
    (214,	'SingStar SuomiPop',	'Don Huonot',	'Seireeni'),
    (215,	'SingStar SuomiPop',	'Elastinen',	'Anna soida'),
    (216,	'SingStar SuomiPop',	'Eppu Normaali',	'Suolaista sadetta'),
    (217,	'SingStar SuomiPop',	'Eppu Normaali',	'Joka päivä ja joka ikinen yö'),
    (218,	'SingStar SuomiPop',	'Fintelligens',	'Hoida homma'),
    (219,	'SingStar SuomiPop',	'Happoradio',	'Che Guevara'),
    (220,	'SingStar SuomiPop',	'Happoradio',	'Hirsipuu'),
    (221,	'SingStar SuomiPop',	'Irina',	'Pokka'),
    (222,	'SingStar SuomiPop',	'Jonna Tervomaa',	'Läpikulkumatkalla'),
    (223,	'SingStar SuomiPop',	'Jonna Tervomaa',	'Rakkauden haudalla'),
    (224,	'SingStar SuomiPop',	'Kemopetrol',	'Child Is My Name'),
    (225,	'SingStar SuomiPop',	'Kim Herold',	'Social Butterfly'),
    (226,	'SingStar SuomiPop',	'Kristiina Wheeler',	'Sunny Day'),
    (227,	'SingStar SuomiPop',	'Movetron',	'Ei kenenkään maa'),
    (228,	'SingStar SuomiPop',	'Negative',	'Won’t Let Go'),
    (229,	'SingStar SuomiPop',	'Neon 2',	'Tässä talossa'),
    (230,	'SingStar SuomiPop',	'Olavi Uusivirta',	'On niin helppoo olla onnellinen'),
    (231,	'SingStar SuomiPop',	'PMMP',	'Joutsenet'),
    (232,	'SingStar SuomiPop',	'PMMP',	'Matkalaulu'),
    (233,	'SingStar SuomiPop',	'Retropop',	'Pieni ja ihmeellinen'),
    (234,	'SingStar SuomiPop',	'Scandinavian Music Group',	'Hölmö rakkaus'),
    (235,	'SingStar SuomiPop',	'Scandinavian Music Group',	'Minne katosi päivät'),
    (236,	'SingStar SuomiPop',	'The Rasmus',	'Livin’ in A World Without You'),
    (237,	'SingStar SuomiPop',	'Ultra Bra',	'Sinä lähdit pois'),
    (238,	'SingStar SuomiPop',	'Uniklubi',	'Kaikki mitä mä annoin'),
    (239,	'SingStar SuomiHitit',	'Anna Puu',	'C\'est La Vie'),
    (240,	'SingStar SuomiHitit',	'Antti Tuisku',	'Juuret'),
    (241,	'SingStar SuomiHitit',	'Armi & Danny',	'Tahdon olla sulle hyvin hellä'),
    (242,	'SingStar SuomiHitit',	'Cheek',	'Jos mä oisin sä'),
    (243,	'SingStar SuomiHitit',	'Denigrate',	'Mombasa'),
    (244,	'SingStar SuomiHitit',	'Dingo',	'Levoton tuhkimo'),
    (245,	'SingStar SuomiHitit',	'Eppu Normaali',	'Murheellisten laulujen maa'),
    (246,	'SingStar SuomiHitit',	'Fintelligens',	'Mikä Boogie?'),
    (247,	'SingStar SuomiHitit',	'Irina',	'Vahva'),
    (248,	'SingStar SuomiHitit',	'J. Karjalainen',	'Missä se Väinö on?'),
    (249,	'SingStar SuomiHitit',	'Jenni Vartiainen',	'En haluu kuolla tänä yönä'),
    (250,	'SingStar SuomiHitit',	'Juha Tapio',	'Kaksi puuta'),
    (251,	'SingStar SuomiHitit',	'Katri Ylander',	'Mansikkamäki'),
    (252,	'SingStar SuomiHitit',	'Kolmas Nainen',	'Tästä asti aikaa'),
    (253,	'SingStar SuomiHitit',	'Maarit',	'Jäätelökesä'),
    (254,	'SingStar SuomiHitit',	'Mamba',	'Vielä on kesää jäljellä'),
    (255,	'SingStar SuomiHitit',	'PMMP',	'Päiväkoti'),
    (256,	'SingStar SuomiHitit',	'Ressu Redford & Jussi Rainio',	'Prinsessa'),
    (257,	'SingStar SuomiHitit',	'Sara',	'Rauhan aika'),
    (258,	'SingStar SuomiHitit',	'Tauski',	'Sinä vain'),
    (259,	'SingStar SuomiHitit',	'Tehosekoitin',	'Asfaltti polttaa'),
    (260,	'SingStar SuomiHitit',	'The Giant Leap',	'Somebody Else'),
    (261,	'SingStar SuomiHitit',	'Tiktak',	'Minne vaan'),
    (262,	'SingStar SuomiHitit',	'Ultra Bra',	'Tyttöjen välisestä ystävyydestä'),
    (263,	'SingStar SuomiHitit',	'Yö',	'Särkyvää');";

    $this->pets = $wpdb->query($wpdb->prepare($query));
  }

}