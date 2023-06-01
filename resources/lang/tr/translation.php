<?php
return [
    'failed_authentication' => 'Yanlış kimlik bilgileri! Lütfen tekrar deneyin',
    'account_created' => 'Hesap başarıyla oluşturuldu',
    'access' => [
        'users' => [
            'delete_user_confirm' => 'Bu kullanıcıyı kalıcı olarak silmek istediğinizden emin misiniz? Uygulamada bu kullanıcının kimliğine atıfta bulunan herhangi bir yer büyük olasılıkla hata verecektir. Kendi sorumluluğunuzdadır devam edin. Bu geri alınamaz.',
            'if_confirmed_off' => '(Onaylanırsa kapalıdır)',
            'restore_user_confirm' => 'Bu kullanıcı orijinal durumuna geri yüklensin mi?',
        ],
    ],
    'notification' => [
        'reset_password' => [
            'subject' => 'Şifre Bildirimini Sıfırla',
            'line_1' => 'Bu e-postayı, hesabınız için bir şifre sıfırlama talebi aldığımız için alıyorsunuz.',
            'line_2' => 'Bu parola sıfırlama bağlantısının süresi :count dakika içinde dolacak.',
            'line_3' => 'Parola sıfırlama talebinde bulunmadıysanız başka bir işlem yapmanız gerekmez.',
        ],
        'verify_email' => [
            'subject' => 'E-posta Adresini doğrulayın',
            'line_1' => 'E-posta adresinizi doğrulamak için lütfen aşağıdaki düğmeyi tıklayın.',
            'line_2' => 'Bir hesap oluşturmadıysanız başka bir işlem yapmanıza gerek yoktur.',
        ],
    ],
    'verifies_emails' => [
        'already_verified' => 'e-posta zaten doğrulandı .....',
        'bad_codes' => 'Kötü kodlar.',
        'verified_success' => 'E-posta başarıyla doğrulandı.',
        'resent_success' => 'E-posta başarıyla yeniden gönderildi.',
    ],
    'change_password' => [
        'success' => 'Parola başarıyla değiştirildi.',
        'failed' => 'Parola değişikliği başarısız oldu.',
    ],
    'update_account' => [
        'success' => 'Hesap başarıyla güncellendi.',
        'cannot_send_email_verification' => 'Bu adrese doğrulama e-postası gönderilemiyor:',
    ],
    'linked_social' => [
        'find_associated' => 'bu :provider_name hesabıyla ilişkili bir kullanıcı hesabı bulun',
        'user_created' => 'yeni kullanıcı hesabı ve sosyal hesap oluşturuldu.',
        'social_account_created_for_user' => ' :name için yeni sosyal hesap oluşturuldu',
    ],
];
