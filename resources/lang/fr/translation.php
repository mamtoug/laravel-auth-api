<?php
return [
    'failed_authentication' => 'Mauvais identifiants ! Veuillez réessayer',
    'account_created' => 'Compte créé avec succès',
    'access' => [
        'users' => [
            'delete_user_confirm' => 'Voulez-vous vraiment supprimer définitivement cet utilisateur ? Partout dans l\'application qui fait référence à l\'identifiant de cet utilisateur, il y aura très probablement une erreur. Procédez à vos risques et périls. Ça ne peut pas être annulé.',
            'if_confirmed_off' => '(Si la confirmation est désactivée)',
            'restore_user_confirm' => 'Restaurer cet utilisateur à son état d\'origine ?',
        ],
    ],
    'notification' => [
        'reset_password' => [
            'subject' => 'Réinitialiser la notification de mot de passe',
            'line_1' => 'Vous recevez cet e-mail car nous avons reçu une demande de réinitialisation du mot de passe pour votre compte.',
            'line_2' => 'Ce lien de réinitialisation de mot de passe expirera dans :count minutes.',
            'line_3' => 'Si vous n\'avez pas demandé de réinitialisation de mot de passe, aucune autre action n\'est requise.',
        ],
        'verify_email' => [
            'subject' => 'Vérifier l\'adresse e-mail',
            'line_1' => 'Veuillez cliquer sur le bouton ci-dessous pour vérifier votre adresse e-mail.',
            'line_2' => 'Si vous n\'avez pas créé de compte, aucune autre action n\'est requise.',
        ],
    ],
    'verifies_emails' => [
        'already_verified' => 'email déjà vérifié.....',
        'bad_codes' => 'Mauvais codes.',
        'verified_success' => 'E-mail vérifié avec succès.',
        'resent_success' => 'E-mail renvoyé avec succès.',
    ],
    'change_password' => [
        'success' => 'Le mot de passe a été changé avec succès.',
        'failed' => 'Le changement de mot de passe a échoué.',
    ],
    'update_account' => [
        'success' => 'Compte mis à jour avec succès.',
        'cannot_send_email_verification' => 'Impossible d\'envoyer un e-mail de vérification à cette adresse :',
    ],
    'linked_social' => [
        'find_associated' => 'trouver un compte utilisateur associé à ce compte :provider_name',
        'user_created' => 'un nouveau compte utilisateur et un compte social ont été créés.',
        'social_account_created_for_user' => 'un nouveau compte social a été créé pour :name',
    ],
];
