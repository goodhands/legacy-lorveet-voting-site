<?php 

class NewLanguage{
    public function local_lang( $urlString, $section ){
            //form placeholder
        if($section == "placeholder" ){
                $text = [
                        'fr' => 'votre.email@adresse.com',
                        'en' => 'your.email@address.com',
                        'it' => 'il.tuo.email@indirizzo.com',
                        'de' => 'ihre.email@adresse.com'
                ];

                return $text[$urlString];
        }

        if($section == "submitButton" ){
                $text = [
                        'fr' => 'Soumettre',
                        'en' => 'Submit',
                        'it' => 'Presentare',
                        'de' => 'Einreichen'
                ];

                return $text[$urlString];
        }


        if($section == "lr-text-quote1"){
            $text = [
                    'fr' => "Maintenant c'était facile! 
                                Vous êtes un ami dans les actions. 
                                Nous sommes si reconnaissants!", 

                    'en' => "Now that was easy! You are a friend in deed. 
                                We are so grateful!", 

                    'de' => 'Jetzt war es einfach! Du bist ein Freund
                                in den Aktionen. Wir sind so dankbar!', 

                    'it' => 'Ora è stato facile! Sei un amico nelle azioni. 
                                Siamo così grati!'
                ];
            return $text[$urlString];
        }

        if($section == "lr-text-quote2"){
                $text = [
                        'fr' => "Maintenant, saisissez votre adresse e-mail 
                                  pour que nous puissions vous contacter si vous 
                                  gagnez 50 CHF de bons pour la vie! Si vous ne 
                                  gagnez pas, vous ressentirez la joie d'aider 
                                  quelqu'un dans le besoin ☺", 

                        'en' => "Now, please enter your email address, 
                                so we can contact you, if you win the CHF50 
                                of vouchers for when we go live! If you don’t win, 
                                you will feel the joy of helping someone in need ☺", 

                        'de' => 'Geben Sie nun Ihre E-Mail-Adresse ein, damit wir 
                                Sie kontaktieren können, wenn Sie 50 CHF Gutscheine 
                                für das Leben verdienen! Wenn Sie nicht gewinnen, 
                                werden Sie die Freude empfinden, jemandem in Not zu helfen. 
                                ☺', 

                        'it' => 'Ora, inserisci il tuo indirizzo e-mail,
                                in modo che possiamo contattarti, se vinci 
                                il CHF 50 di buoni per quando andiamo a vivere!
                                Se non vinci, sentirai la gioia di aiutare 
                                qualcuno che ne ha bisogno ☺ '
                        ];
                return $text[$urlString];
            }

        if($section == "help"){
                $text = ['fr' => "#favoreaiuto", 
                        'en' => "#Pleasehelp", 
                        'de' => '#bittehilfe', 
                        'it' => '#plaîtaide'];
                return $text[$urlString];
            }

        if($section == "thanks"){
                $text = ['fr' => "Danke", 
                        'en' => "Thank you!", 
                        'de' => 'Grazie', 
                        'it' => 'Merci'];

                return $text[$urlString];
        }
    
        if($section == "intro-text1"){
            $text = [
                    'fr' => "Comme nous créons une grande boutique 
                            en ligne, nous avons besoin de votre aide
                            pour choisir l'un des logos ci-dessous:
                            ", 
                    'en' => "As we create a superb online store, 
                            we need your help to pick one of the 
                            logos below:", 
                    'de' => "Willkommen in unserer Online-Spielleiter, 
                                abbiamo bis zu Ihrem Aufenthalt in 
                                unserem Hotel, wo sotto:", 
                    'it' => "Mentre creiamo uno splendido negozio online, 
                            abbiamo bisogno del tuo aiuto per scegliere 
                            uno dei loghi qui sotto:"];

                  return $text[$urlString];
        }

        if($section == "intro-text2"){
                $text = [
                        'fr' => "Vous pourriez être une cinquantaine de 
                                personnes qui gagneront 50 francs de coupons 
                                quand nous allons vivre! 
                                »Si vous ne gagnez pas, vous ressentirez la 
                                joie d'aider quelqu'un dans le besoin. ☺ 
                                ", 
                        'en' => "You could be one fifty people 
                                will win CHF50 of vouchers when we go live!
                                If you don’t win, you will feel the joy of 
                                helping someone in need ☺", 
                        'de' => "Du könntest fünfzig Leute sein, die 50 Franken 
                                Gutscheine verdienen, wenn wir live gehen! 
                                Wenn Sie nicht gewinnen, werden Sie die 
                                Freude spüren, jemandem in Not zu helfen.", 
                        'it' => "Potresti essere una 
                                cinquantina di persone che vinceranno 50 
                                franchi di buoni quando andremo a vivere!
                                Se non vinci, sentirai la gioia di aiutare 
                                qualcuno che ne ha bisogno ☺"];

                       return $text[$urlString];
            }

        if($section == "social-media"){
            $text = [
                'en' => "All done! Be sure, to check us 
                        out on our social feeds above. 
                        It’ll be fun!",
                'de' => "Fertig! Informieren Sie sich bei uns 
                        über unsere sozialen Feeds oben!",
                'it' => "Tutto fatto! Assicurati di controllarci
                        sui nostri social feed qui sopra. 
                        Sarà divertente!",
                'fr' => "Terminé! Assurez-vous de nous consulter 
                        sur nos flux sociaux ci-dessus.
                        Ce sera amusant!"
            ];

            return $text[$urlString];
        }

    }

    public function interprete($eng, $german, $italian, $french){
        $currLang = (isset($_GET['lang']) ? $_GET['lang'] : 'de');

            $text = [
                'en' => $eng,
                'de' => $german,
                'it' => $italian,
                'fr' => $french
            ];

            return $text[$currLang];

    }
}



?>