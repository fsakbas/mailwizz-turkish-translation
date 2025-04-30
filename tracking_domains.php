<?php declare(strict_types=1);
if (!defined('MW_PATH')) {
    exit('Doğrudan komut dosyası erişimine izin verilmez');
}

/**
 * "tracking_domains" kategorisi için çeviri dosyası.
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
  'View tracking domains' => 'İzleme alan adlarını görüntüle',
  'Tracking domains' => 'İzleme alan adları',
  'Create new tracking domain' => 'Yeni izleme alan adı oluştur',
  'Update tracking domain' => 'İzleme alan adını güncelle',
  'Please note, in order for this feature to work this (sub)domain needs a dedicated IP address, otherwise all defined CNAMES for it will point to the default domain on this server.' => 'Lütfen unutmayın, bu özelliğin çalışması için bu (alt) alan adının özel bir IP adresine ihtiyacı vardır, aksi takdirde bunun için tanımlanan tüm CNAME\'ler bu sunucudaki varsayılan alan adına işaret edecektir.',
  'If you do not use a dedicated IP address for this domain only or you are not sure you do so, do not use this feature!' => 'Yalnızca bu alan adı için özel bir IP adresi kullanmıyorsanız veya kullandığınızdan emin değilseniz, bu özelliği kullanmayın!',
  'Please note that because of the way DNS servers work, you need to add a subdomain like tracking.your-domain.com as a DNS CNAME record and point it to {currentDomain}!' => 'DNS sunucularının çalışma şekli nedeniyle, tracking.your-domain.com gibi bir alt alan adını DNS CNAME kaydı olarak eklemeniz ve {currentDomain} adresine yönlendirmeniz gerektiğini lütfen unutmayın!',
  'Domain' => 'Alan Adı',
  'Customer' => 'Müşteri',
  'Name' => 'Ad',
  'Scheme' => 'Şema',
  'Skip validation' => 'Doğrulamayı atla',
  'tracking.your-domain.com' => 'tracking.alan-adiniz.com',
  'Please DO NOT SKIP validation unless you are 100% sure you know what you are doing.' => 'Ne yaptığınızdan %100 emin değilseniz lütfen doğrulamayı ATLAMAYIN.',
  'Choose HTTPS only if your tracking domain can also provide a valid SSL certificate, otherwise stick to regular HTTP.' => 'Yalnızca izleme alan adınız geçerli bir SSL sertifikası da sağlayabiliyorsa HTTPS\'yi seçin, aksi takdirde normal HTTP\'ye bağlı kalın.',
  'Unable to get the current domain name!' => 'Geçerli alan adını alamadım!',
  'Your specified domain name does not seem to be valid!' => 'Belirttiğiniz alan adı geçerli görünmüyor!',
  'Your PHP install does not contain the {function} function needed to query the DNS records!' => 'PHP kurulumunuz, DNS kayıtlarını sorgulamak için gereken {function} işlevini içermiyor!',
  'Cannot find a valid CNAME record for {domainName}! Remember, the CNAME of {domainName} must point to {currentDomain}!' => '{domainName} için geçerli bir CNAME kaydı bulunamıyor! Unutmayın, {domainName} CNAME\'i {currentDomain} adresine işaret etmelidir!',
  'Verified' => 'Doğrulandı',
  'Skip verification' => 'Doğrulamayı atla',
  'Please DO NOT SKIP verification unless you are 100% sure you know what you are doing.' => 'Ne yaptığınızdan %100 emin değilseniz lütfen doğrulamayı ATLAMAYIN.',
  'Domain ID' => 'Alan Adı ID',
);
