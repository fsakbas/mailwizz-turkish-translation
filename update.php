<?php declare(strict_types=1);
if (!defined('MW_PATH')) {
    exit('Doğrudan komut dosyası erişimine izin verilmez');
}

/**
 * "update" kategorisi için çeviri dosyası.
 *
 * Bu çeviri, Translate eklentisi tarafından otomatik olarak oluşturulmuştur.
 *
 * @package MailWizz EMA
 * @author MailWizz Geliştirme Ekibi <support@mailwizz.com>
 * @link https://www.mailwizz.com/
 * @copyright MailWizz EMA (https://www.mailwizz.com)
 * @license https://www.mailwizz.com/license/
 * @since 1.1
 */
return array (
  'Please note that starting with this version update, we deprecated the redis queue feature!' => 'Lütfen bu sürüm güncellemesinden başlayarak redis kuyruk özelliğini kullanımdan kaldırdığımızı unutmayın!',
  'Version {version} brings a new cron job that you have to add to run once at 20 minutes. After addition, it must look like: {cron}' => '{version} sürümü, 20 dakikada bir çalıştırmanız gereken yeni bir cron işi getiriyor. Eklemeden sonra şöyle görünmelidir: {cron}',
  'Version {version} brings a new cron job that you have to add to run once a day. After addition, it must look like: {cron}' => '{version} sürümü, günde bir kez çalıştırmanız gereken yeni bir cron işi getiriyor. Eklemeden sonra şöyle görünmelidir: {cron}',
  'Starting with version {version}, the "process-subscribers" command is no longer needed, please disable it from your crons!' => '{version} sürümünden başlayarak, "process-subscribers" komutuna artık gerek yoktur, lütfen cron\'larınızdan devre dışı bırakın!',
  'Version {version} brings a new cron job that you have to add to run each hour. After addition, it must look like: {cron}' => '{version} sürümü, her saat çalıştırmanız gereken yeni bir cron işi getiriyor. Eklemeden sonra şöyle görünmelidir: {cron}',
  'Version {version} brings a new cron job that you have to add to run once at 2 minutes. After addition, it must look like: {cron}' => '{version} sürümü, 2 dakikada bir çalıştırmanız gereken yeni bir cron işi getiriyor. Eklemeden sonra şöyle görünmelidir: {cron}',
  'This version adds new fields for delivery servers and some of them are required. Because of this, all delivery servers have been marked as inactive. Please review the settings and validate the servers once again.' => 'Bu sürüm, teslimat sunucuları için yeni alanlar ekler ve bunlardan bazıları gereklidir. Bu nedenle, tüm teslimat sunucuları pasif olarak işaretlendi. Lütfen ayarları gözden geçirin ve sunucuları bir kez daha doğrulayın.',
  'Updating to version {version}.' => '{version} sürümüne güncelleniyor.',
  'Updated to version {version} successfully.' => '{version} sürümüne başarıyla güncellendi.',
  'Updating to version {version} failed with: {message}' => '{version} sürümüne güncelleme başarısız oldu: {message}',
  'Congratulations, your application has been successfully updated to version {version}' => 'Tebrikler, uygulamanız başarıyla {version} sürümüne güncellendi',
  'Please note, depending on your database size it is better to run the command line update tool instead.' => 'Lütfen unutmayın, veritabanı boyutunuza bağlı olarak bunun yerine komut satırı güncelleme aracını çalıştırmak daha iyidir.',
  'In order to run the command line update tool, you must run the following command from a ssh shell:' => 'Komut satırı güncelleme aracını çalıştırmak için, bir ssh kabuğundan aşağıdaki komutu çalıştırmalısınız:',
  'Update' => 'Güncelle',
  'Application update' => 'Uygulama güncellemesi',
  'Update application' => 'Uygulamayı güncelle',
  'Your current application version is {version}' => 'Mevcut uygulama sürümünüz {version}',
  'The update process will try to update it to version {version}' => 'Güncelleme işlemi onu {version} sürümüne güncellemeyi deneyecektir',
  'Please backup all your data before proceeding and note that the update process might take a while depending on your database size, just wait for it to finish.' => 'Lütfen devam etmeden önce tüm verilerinizi yedekleyin ve güncelleme işleminin veritabanı boyutunuza bağlı olarak biraz zaman alabileceğini unutmayın, bitmesini bekleyin.',
  'Your application has been moved offline until the update process is done.' => 'Güncelleme işlemi tamamlanana kadar uygulamanız çevrimdışına taşındı.',
  'Start update process' => 'Güncelleme işlemini başlat',
);
