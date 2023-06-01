<?php
return [
    'failed_authentication' => '¡Credenciales incorrectas! Inténtalo de nuevo',
    'account_created' => 'Cuenta creada con éxito',
    'access' => [
        'users' => [
            'delete_user_confirm' => '¿Está seguro de que desea eliminar este usuario de forma permanente? Cualquier parte de la aplicación que haga referencia a la identificación de este usuario probablemente generará un error. Proceda bajo su propio riesgo. Esto no se puede deshacer.',
            'if_confirmed_off' => '(Si confirmado está apagado)',
            'restore_user_confirm' => '¿Restaurar este usuario a su estado original?',
        ],
    ],
    'notification' => [
        'reset_password' => [
            'subject' => 'Notificación de restablecimiento de contraseña',
            'line_1' => 'Está recibiendo este correo electrónico porque recibimos una solicitud de restablecimiento de contraseña para su cuenta.',
            'line_2' => 'Este enlace de restablecimiento de contraseña caducará en :count minutos.',
            'line_3' => 'Si no solicitó un restablecimiento de contraseña, no se requiere ninguna otra acción.',
        ],
        'verify_email' => [
            'subject' => 'Confirme su dirección de correo electrónico',
            'line_1' => 'Haga clic en el botón de abajo para verificar su dirección de correo electrónico.',
            'line_2' => 'Si no creó una cuenta, no se requiere ninguna otra acción.',
        ],
    ],
    'verifies_emails' => [
        'already_verified' => 'email ya verificado.....',
        'bad_codes' => 'Códigos malos.',
        'verified_success' => 'Correo electrónico verificado con éxito.',
        'resent_success' => 'Correo electrónico reenviado con éxito.',
    ],
    'change_password' => [
        'success' => 'Contraseña cambiada con éxito.',
        'failed' => 'Cambio de contraseña falló.',
    ],
    'update_account' => [
        'success' => 'Cuenta actualizada con éxito.',
        'cannot_send_email_verification' => 'No se puede enviar el correo electrónico de verificación a esta dirección:',
    ],
    'linked_social' => [
        'find_associated' => 'encontrar una cuenta de usuario asociada con esta cuenta :provider_name',
        'user_created' => 'Se ha creado una nueva cuenta de usuario y una cuenta social.',
        'social_account_created_for_user' => 'se ha creado una nueva cuenta social para :name',
    ],
];
