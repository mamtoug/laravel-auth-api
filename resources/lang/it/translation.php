<?php

return [
    'failed_authentication' => 'Credenziali sbagliate! Per favore riprova',
    'unauthorized' => 'Non autorizzato',
    'account_created' => 'Account creato con successo',
    'access' => [
        'users' => [
            'delete_user_confirm' => 'Sei sicuro di voler eliminare definitivamente questo utente? Ovunque nell\'applicazione che fa riferimento all\'ID di questo utente molto probabilmente si verificherà un errore. Procedete a vostro rischio. Questo non può essere annullato.',
            'if_confirmed_off' => '(Se confermato è disattivato)',
            'restore_user_confirm' => 'Ripristinare questo utente allo stato originale?',
        ],
    ],
    'notification' => [
        'reset_password' => [
            'subject' => 'Reimposta notifica password',
            'line_1' => 'Hai ricevuto questa email perché abbiamo ricevuto una richiesta di reimpostazione della password per il tuo account.',
            'line_2' => 'Questo link per reimpostare la password scadrà tra :count minuti.',
            'line_3' => 'Se non hai richiesto la reimpostazione della password, non sono necessarie ulteriori azioni.',
        ],
        'verify_email' => [
            'subject' => 'verifica indirizzo e-mail',
            'line_1' => 'Fai clic sul pulsante in basso per verificare il tuo indirizzo email.',
            'line_2' => 'Se non hai creato un account, non sono necessarie ulteriori azioni.',
        ],
    ],
    'verifies_emails' => [
        'already_verified' => 'email già verificata.....',
        'bad_codes' => 'Codici errati.',
        'verified_success' => 'Email verificata con successo.',
        'resent_success' => 'Email reinviata con successo.',
    ],
    'change_password' => [
        'success' => 'Password cambiata con successo.',
        'failed' => 'Modifica della password non riuscita.',
    ],
    'update_account' => [
        'success' => 'Account aggiornato con successo.',
        'cannot_send_email_verification' => 'Impossibile inviare l\'e-mail di verifica a questo indirizzo:',
    ],
    'linked_social' => [
        'find_associated' => 'trovare un account utente associato a questo account :provider_name',
        'user_created' => 'è stato creato un nuovo account utente e un account social.',
        'social_account_created_for_user' => 'è stato creato un nuovo account social per :name',
    ],
];
