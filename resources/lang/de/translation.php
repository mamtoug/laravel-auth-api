<?php

return [
    'failed_authentication' => 'Falsche Anmeldeinformationen! Bitte versuche es erneut',
    'unauthorized' => 'Nicht autorisiert',
    'account_created' => 'Konto erfolgreich erstellt',
    'access' => [
        'users' => [
            'delete_user_confirm' => 'Sind Sie sicher, dass Sie diesen Benutzer dauerhaft löschen möchten? Überall in der Anwendung, die auf die ID dieses Benutzers verweist, wird höchstwahrscheinlich ein Fehler auftreten. Das Vorgehen erfolgt auf eigene Gefahr. Das kann nicht rückgängig gemacht werden.',
            'if_confirmed_off' => '(Wenn bestätigt, ist es ausgeschaltet)',
            'restore_user_confirm' => 'Diesen Benutzer in seinen ursprünglichen Zustand zurückversetzen?',
        ],
    ],
    'notification' => [
        'reset_password' => [
            'subject' => 'Passwortbenachrichtigung zurücksetzen',
            'line_1' => 'Sie erhalten diese E-Mail, weil wir eine Anfrage zum Zurücksetzen des Passworts für Ihr Konto erhalten haben.',
            'line_2' => 'Dieser Link zum Zurücksetzen des Passworts läuft in :count Minuten ab.',
            'line_3' => 'Wenn Sie keine Passwortzurücksetzung angefordert haben, sind keine weiteren Maßnahmen erforderlich.',
        ],
        'verify_email' => [
            'subject' => 'Email Adresse bestätigen',
            'line_1' => 'Bitte klicken Sie auf die Schaltfläche unten, um Ihre E-Mail-Adresse zu bestätigen.',
            'line_2' => 'Wenn Sie kein Konto erstellt haben, sind keine weiteren Maßnahmen erforderlich.',
        ],
    ],
    'verifies_emails' => [
        'already_verified' => 'E-Mail bereits bestätigt.....',
        'bad_codes' => 'Schlechte Codes.',
        'verified_success' => 'E-Mail erfolgreich bestätigt.',
        'resent_success' => 'E-Mail erfolgreich erneut gesendet.',
    ],
    'change_password' => [
        'success' => 'Das Passwort wurde erfolgreich geändert.',
        'failed' => 'Passwort ändern fehlgeschlagen.',
    ],
    'update_account' => [
        'success' => 'Konto erfolgreich aktualisiert.',
        'cannot_send_email_verification' => 'An diese Adresse kann keine Bestätigungs-E-Mail gesendet werden:',
    ],
    'linked_social' => [
        'find_associated' => 'Suchen Sie ein mit diesem :provider_name-Konto verknüpftes Benutzerkonto',
        'user_created' => 'Neues Benutzerkonto und soziales Konto wurden erstellt.',
        'social_account_created_for_user' => 'Für :name wurde ein neues soziales Konto erstellt',
    ],
];
