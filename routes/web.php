<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/movies', function () {
    $data = [
[
             'id' => 9381,
             'original_language' => 'en',
             'original_title' => 'Babylon A.D.',
             'overview' => 'A veteran-turned-mercenary is hired to take a young woman with a secret from post-apocalyptic Eastern Europe to New York City.',
             'poster_path' => 'https://image.tmdb.org/t/p/w342/kt9nqD0uOar8IVE9191HXhWOXKI.jpg',
             'release_date' => '2008-08-20',
             'title' => 'Babylon A.D.',
         ],

[
    'id' => 1147400,
             'original_language' => 'fr',
             'original_title' => 'Miraculous World : Paris, Les Aventures de Toxinelle et Griffe Noire',
             'overview' => "Miraculous holders from another world appear in Paris. They come from a parallel universe where everything is reversed: the holders of Ladybug and Black Cat Miraculouses, Shadybug and Claw Noir, are the bad guys, and the holder of the Butterfly Miraculous, Hesperia, is a superhero. Ladybug and Cat Noir will have to help Hesperia counter the attacks of their evil doubles and prevent them from seizing the Butterfly's Miraculous. Can our heroes also help Hesperia make Shadybug and Claw Noir better people?",
             'poster_path' => 'https://image.tmdb.org/t/p/w342/A46SghdyD9y7qQUxB5zOslospJ7.jpg',
             'release_date' => '2023-10-21',
             'title' => 'Miraculous World: Paris, Tales of Shadybug and Claw Noir',
],

[
    'id' => 507089,
             'original_language' => 'en',
             'original_title' => "Five Nights at Freddy's",
             'overview' => "Recently fired and desperate for work, a troubled young man named Mike agrees to take a position as a night security guard at an abandoned theme restaurant: Freddy Fazbear's Pizzeria. But he soon discovers that nothing at Freddy's is what it seems.",
             'poster_path' => 'https://image.tmdb.org/t/p/w342/j9mH1pr3IahtraTWxVEMANmPSGR.jpg',
             'release_date' => '2023-10-25',
             'title' => "Five Nights at Freddy's",
],

[
    'id' => 833326,
             'original_language' => 'fr',
             'original_title' => 'Rien à foutre',
             'overview' => 'Cassandre, 26, is a flight attendant for a low-cost airline. Based in Lanzarote, she’s always willing to take on extra hours and carries out her duties with robotic efficiency. On the side, she just goes with the flow and floats between Tinder, parties and lazy days. When she suddenly gets dismissed, she is forced to return home.',
             'poster_path' => 'https://image.tmdb.org/t/p/w342/wLZ5jijVpOxHuBLmsICKLXwlldu.jpg',
             'release_date' => '2022-03-02',
             'title' => 'Zero Fucks Given',
],

[
    'id' => 461191,
             'original_language' => 'en',
             'original_title' => 'A',
             'overview' => 'A young alcoholic ambient musician locks himself in his apartment on a dangerous seven day bender as he attempts to finish his upcoming album.',
             'poster_path' => 'https://image.tmdb.org/t/p/w342/4uOKZzRB615cIxcVi31pcsdFtSS.jpg',
             'release_date' => '2017-09-13',
             'title' => 'A',
],

[
    'id' => 24791,
             'original_language' => 'ja',
             'original_title' => 'Apocalypto',
             'overview' => "In un piccolo villaggio Maya dello Yucatán, all'inizio del XVI secolo,[1] vivono Zampa di Giaguaro (primogenito del capo-villaggio), il figlio, la moglie incinta e gli altri abitanti della tribù.",
             'poster_path' => 'https://m.media-amazon.com/images/I/91+4Y5qOvoL._AC_UF1000,1000_QL80_.jpg',
             'release_date' => '1998-09-09',
             'title' => 'Apocalypto',
],

[
    'id' => 978870,
             'original_language' => 'it',
             'original_title' => "L'ultima notte di Amore",
             'overview' => 'On the night before his retirement, police lieutenant Franco Amore is called to investigate the death of a long-time partner of his in a diamond heist in which he was involved.',
             'poster_path' => 'https://image.tmdb.org/t/p/w342/dBp0REsZkZ1HK1PycwlLdBtYdsd.jpg',
             'release_date' => '2023-03-09',
             'title' => 'Last Night of Amore',
],

[
    'id' => 915935,
             'original_language' => 'fr',
             'original_title' => "Anatomie d'une chute",
             'overview' => 'A woman is suspected of her husband’s murder, and their blind son faces a moral dilemma as the sole witness.',
             'poster_path' => 'https://image.tmdb.org/t/p/w342/kQs6keheMwCxJxrzV83VUwFtHkB.jpg',
             'release_date' => '2023-08-23',
             'title' => 'Anatomy of a Fall',
],

[
    'id' => 1179664,
             'original_language' => 'es',
             'original_title' => 'Invitación a un Asesinato',
             'overview' => 'Eccentric millionaire Olivia sends her half sister Agatha, and a group of old acquaintances, a mysterious invitation for a weekend on her yacht, where they will discover the true motive behind this invitation: the celebration of… a murder?',
             'popularity' => 21.665,
             'poster_path' => 'https://image.tmdb.org/t/p/w342/1IFdWd7ykl0yHqKid9Mm7TTIDSK.jpg',
             'release_date' => '2023-10-06',
             'title' => 'A Deadly Invitation',
],

[
    'id' => 116776,
             'original_language' => 'ja',
             'original_title' => 'ドラゴンボール 魔訶不思議大冒険',
             'overview' => "Master Roshi has succeeded at the one mission he valued most: to train Goku and Krillin to become ultimate fighters. So, he arranges for them to test their mettle at a competition hosted by Emperor Chiaotzu. Not everyone's playing by the rules, however, as a member of the ruler's household schemes to use the Dragonballs to extort money and power from the royal.",
             'popularity' => 296.151,
             'poster_path' => 'https://image.tmdb.org/t/p/w342/5aXG0B3TYTpQsodXzvYCkKQfpB1.jpg',
             'release_date' => '1988-07-09',
             'title' => 'Dragon Ball: Mystical Adventure',
],

[
    'id' => 569094,
             'original_language' => 'en',
             'original_title' => 'Spider-Man: Across the Spider-Verse',
             'overview' => 'After reuniting with Gwen Stacy, Brooklyn’s full-time, friendly neighborhood Spider-Man is catapulted across the Multiverse, where he encounters the Spider Society, a team of Spider-People charged with protecting the Multiverse’s very existence. But when the heroes clash on how to handle a new threat, Miles finds himself pitted against the other Spiders and must set out on his own to save those he loves most.',
             'poster_path' => 'https://image.tmdb.org/t/p/w342/8Vt6mWEReuy4Of61Lnj5Xj704m8.jpg',
             'release_date' => '2023-05-31',
             'title' => 'Spider-Man: Across the Spider-Verse',
],

[
    'id' => 1174725,
             'original_language' => 'de',
             'original_title' => 'Duell am Abgrund',
             'overview' => "Fearless alpine climbers Ueli Steck and Dani Arnold enter into a death-defying rivalry to set speed records on the Swiss Alps' great north faces.",
             'popularity' => 30.286,
             'poster_path' => 'https://image.tmdb.org/t/p/w342/tI9ybrWLiVLljLsNoqEjQF36oG4.jpg',
             'release_date' => '2023-10-04',
             'title' => 'Race to the Summit',
],

[
    'id' => 210763,
             'original_language' => 'en',
             'original_title' => 'Scarface - Lo sfregiato ',
             'overview' => "Nel 1980, tra i profughi dell'esodo di Mariel ci sono Antonio Tony Montana e Manolo Manny Ribera, due piccoli criminali cubani portati alla Freedom Town, un ghetto di popolazione cubana a Miami. I due riescono ad andarsene in fretta guadagnandosi la fiducia del boss Frank Lopez, al vertice di un cartello della droga saldamente affermato. Ottenuta la green card di residenza, i due amici cominciano a lavorare come camerieri e lavapiatti in un chiosco, ma Tony dimostra insofferenza per la sua nuova vita.",
             'popularity' => 2.533,
             'poster_path' => 'https://i.ebayimg.com/images/g/0jMAAOSw68NfjJk6/s-l1200.webp',
             'release_date' => '1998-02-12',
             'title' => 'Scarface',
],

[
    'id' => 1145810,
             'original_language' => 'es',
             'original_title' => 'No voy a pedirle a nadie que me crea',
             'overview' => "A writer's career — and entire life — suddenly goes off script when he falls prey to a dangerous web of criminals right before moving to Barcelona.",
             'poster_path' => 'https://image.tmdb.org/t/p/w342/5JyivjFm8WzZU2jhzjMWdbWdOwj.jpg',
             'release_date' => '2023-10-22',
             'title' => "I Don't Expect Anyone to Believe Me",
],

[
    'id' => 835767,
             'original_language' => 'en',
             'original_title' => 'Gunfight at Rio Bravo',
             'overview' => 'When mysterious Russian gunslinger Ivan Turchin rides into a small Texas town, he runs afoul of a bloodthirsty outlaw gang known as The Hellhounds. Outmanned and outgunned, the town must put their trust in Turchin to protect them from annihilation at the hands of the bandits. The gunslinger finds allies in the form of Marshal Austin Carter and Sheriff Vernon Kelly, and together the three must make a desperate stand against impossible and violent odds.',
             'popularity' => 139.868,
             'poster_path' => 'https://image.tmdb.org/t/p/w342/92hYmHw1XpMEF7yZUzjOzcO4zmC.jpg',
             'release_date' => '2023-01-13',
             'title' => 'Gunfight at Rio Bravo',
],

[
    'id' => 680133,
             'original_language' => 'bn',
             'original_title' => 'মুজিব: একটি জাতির রূপকার',
             'overview' => "Biopic on the father of the nation of Bangladesh, Sheikh Mujibur Rahman. The film will showcase his growing up as a child to his standing up against all injustice in his youth to fighting for the independence of his country. How he led a country to it's independence with his inspirational presence and fight for the justice.",
             'poster_path' => 'https://image.tmdb.org/t/p/w342/bnIJ5lK66cfnvJ0A1D6FLp4NZzJ.jpg',
             'release_date' => '2023-10-27',
             'title' => 'Mujib: The Making of a Nation',
],

['id' => 264859,
             'original_language' => 'de',
             'original_title' => 'Sechs Schwedinnen auf der Alm',
             'overview' => "This comedy has everyone's favorite 6 Swedish gals enjoying their stay in the alps. When the girls aren't enjoying the pleasure of their own company they're out having a good time with nearly everyone else in town.",
             'poster_path' => 'https://image.tmdb.org/t/p/w342/5kk9GUeeGTdyhcerUfxzhJYt6Gm.jpg',
             'release_date' => '1983-07-22',
             'title' => 'Six Swedish Girls in Alps',
],

['id' => 76600,
             'original_language' => 'en',
             'original_title' => 'Avatar: The Way of Water',
             'overview' => 'Set more than a decade after the events of the first film, learn the story of the Sully family (Jake, Neytiri, and their kids), the trouble that follows them, the lengths they go to keep each other safe, the battles they fight to stay alive, and the tragedies they endure.',
             'poster_path' => 'https://image.tmdb.org/t/p/w342/t6HIqrRAclMCA60NsSmeqe9RmNV.jpg',
             'release_date' => '2022-12-14',
             'title' => 'Avatar: The Way of Water',
],

[
    'id' => 1029599,
             'original_language' => 'es',
             'original_title' => 'Aguila y Jaguar: Los Guerreros Legendarios',
             'overview' => "In a post-apocalyptic future in which water has almost disappeared, two young survivors travel back in time to find the mythical power of the prehispanic God of water, and so be able to create the vital resource. However, when they arrive at the present they discover that the power is in the hands of an unscrupulous businessman who had always wanted to monopolize water and who knows everything about prehispanic myths. The Aztaya brotherhood, a group of heroes, successors from the legendary Aztec and Mayan warriors, will begin the adventure to prevent the villain's plan and help the travelers to change their sad future, teaming up to fight the powerful enemy and his dark allies. To win, the heroes will have to awake the greatest warriors of Aztec and Mayan mythology: The Eagle and the Jaguar.",
             'poster_path' => 'https://image.tmdb.org/t/p/w342/6qR9WbXYIddZcVk6nxFULfHcKmK.jpg',
             'release_date' => '2022-09-29',
             'title' => 'Eagle and Jaguar, The Legendary Warriors',
],

['id' => 820525,
             'original_language' => 'en',
             'original_title' => 'After Everything',
             'overview' => 'Besieged by writer’s block and the crushing breakup with Tessa, Hardin travels to Portugal in search of a woman he wronged in the past – and to find himself. Hoping to win back Tessa, he realizes he needs to change his ways before he can make the ultimate commitment.',
             'poster_path' => 'https://image.tmdb.org/t/p/w342/uQxjZGU6rxSPSMeAJPJQlmfV3ys.jpg',
             'release_date' => '2023-09-13',
             'title' => 'After Everything',
],
];

    return view('movies', ['data' => $data]);
})->name('movies');
