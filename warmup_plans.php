<?php declare(strict_types=1);
if (!defined('MW_PATH')) {
    exit('Doğrudan komut dosyası erişimine izin verilmez');
}

/**
 * "warmup_plans" kategorisi için çeviri dosyası.
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
  'hourly' => 'saatlik',
  'daily' => 'günlük',
  'monthly' => 'aylık',
  'linear' => 'doğrusal',
  'exponential' => 'üstel',
  'total' => 'toplam',
  'targeted' => 'hedeflenen',
  'View plans' => 'Planları görüntüle',
  'Warmup plans' => 'Isınma planları',
  'Delivery server warmup plan' => 'Teslimat sunucusu ısınma planı',
  'Customer' => 'Müşteri',
  'Name' => 'Ad',
  'Description' => 'Açıklama',
  'Sending limit' => 'Gönderme limiti',
  'Sendings count' => 'Gönderim sayısı',
  'Sending quota type' => 'Gönderme kota türü',
  'Sending increment percentage' => 'Gönderme artış yüzdesi',
  'Sending strategy' => 'Gönderme stratejisi',
  'Sending limit type' => 'Gönderme limit türü',
  'Are you sure you want to run this action? After you activate the plan, you will be able to edit only its name and description' => 'Bu eylemi çalıştırmak istediğinizden emin misiniz? Planı etkinleştirdikten sonra, yalnızca adını ve açıklamasını düzenleyebileceksiniz',
  'Update plan' => 'Planı güncelle',
  'Active' => 'Aktif',
  'The warmup plan name' => 'Isınma planı adı',
  'The warmup plan description' => 'Isınma planı açıklaması',
  'The warmup plan sending limit, meaning the number of emails to be sent. Based on the limit type chosen this number can be the total number of emails sent throughout all the sendings, or the last sending will have that exact number' => 'Isınma planı gönderme limiti, yani gönderilecek e-posta sayısı. Seçilen limit türüne bağlı olarak, bu sayı tüm gönderimler boyunca gönderilen toplam e-posta sayısı olabilir veya son gönderim tam olarak bu sayıya sahip olacaktır',
  'The warmup plan sendings count. This is the number of generated schedules, based on which the delivery server quota will apply.' => 'Isınma planı gönderim sayısı. Bu, teslimat sunucusu kotasının uygulanacağı oluşturulan zamanlama sayısıdır.',
  'The warmup plan sending quota type. The kind of quota against which the generated schedule quota value will be applied. If hourly, we will take into consideration applying the delivery server hourly quota' => 'Isınma planı gönderme kota türü. Oluşturulan zamanlama kota değerinin uygulanacağı kota türü. Saatlik ise, teslimat sunucusu saatlik kotasını uygulamayı dikkate alacağız',
  'The warmup plan sending increment ratio. If the sending strategy is exponential, this values represents the increment percentage from a schedule to another.' => 'Isınma planı gönderme artış oranı. Gönderme stratejisi üstel ise, bu değerler bir zamanlamadan diğerine artış yüzdesini temsil eder.',
  'The warmup plan sending strategy. Can be exponential or incremental. For incremental we will use the ratio between sending_limit and sendings_count to calculate the growth factor. Depending on the sending limit type chosen we can send maximum the value of the growth factor per sending (for total) or the growth factor added to the previous sending value per sending (for targeted).' => 'Isınma planı gönderme stratejisi. Üstel veya artımlı olabilir. Artımlı için, büyüme faktörünü hesaplamak üzere sending_limit ve sendings_count arasındaki oranı kullanacağız. Seçilen gönderme limiti türüne bağlı olarak, gönderme başına büyüme faktörünün maksimum değerini (toplam için) veya gönderme başına önceki gönderme değerine eklenen büyüme faktörünü (hedeflenen için) gönderebiliriz.',
  'The warmup plan sending limit type. Based on this selection, we will send either a number of emails calculated throughout all the schedules (total) equal with the sending limit, or the last of the sendings will reach the sending limit value.' => 'Isınma planı gönderme limiti türü. Bu seçime bağlı olarak, ya tüm zamanlamalar boyunca hesaplanan gönderme limitine eşit sayıda e-posta (toplam) göndereceğiz ya da gönderimlerin sonuncusu gönderme limiti değerine ulaşacaktır.',
  'Generated warmup plan' => 'Oluşturulan ısınma planı',
  'Schedule' => 'Zamanlama',
  'Increment' => 'Artış',
  'Quota' => 'Kota',
  'Warmup plan' => 'Isınma planı',
  'Please note that the last schedule from the series might be the subject to roundings.' => 'Lütfen serideki son zamanlamanın yuvarlamalara tabi olabileceğini unutmayın.',
);
