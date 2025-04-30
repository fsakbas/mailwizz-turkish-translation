<?php declare(strict_types=1);
if (!defined('MW_PATH')) {
    exit('Doğrudan komut dosyası erişimine izin verilmez');
}

/**
 * "email_blacklist" kategorisi için çeviri dosyası.
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
  'Action' => 'Eylem',
  'Email' => 'E-posta',
  'Reason' => 'Neden',
  'Date start' => 'Başlangıç tarihi',
  'Date end' => 'Bitiş tarihi',
  'Blacklist monitors' => 'Kara liste izleyicileri',
  'Create a new blacklist monitor.' => 'Yeni bir kara liste izleyicisi oluştur.',
  'Update blacklist monitor.' => 'Kara liste izleyicisini güncelle.',
  'Cannot open export temporary file!' => 'Dışa aktarma geçici dosyası açılamıyor!',
  'Your file does not contain the header with the fields title!' => 'Dosyanız alan başlıklarını içeren başlığı içermiyor!',
  'Your file has been successfuly imported, from {count} records, {total} were imported!' => 'Dosyanız başarıyla içe aktarıldı, {count} kayıttan {total} tanesi içe aktarıldı!',
  'Action completed successfully, deleted {n} emails!' => 'Eylem başarıyla tamamlandı, {n} e-posta silindi!',
  'Blacklisted emails' => 'Kara listeye alınmış e-postalar',
  'Add a new email address to blacklist.' => 'Kara listeye yeni bir e-posta adresi ekle.',
  'Update blacklisted email address.' => 'Kara listeye alınmış e-posta adresini güncelle.',
  'Date added' => 'Eklenme tarihi',
  'Unable to move the uploaded file!' => 'Yüklenen dosya taşınamıyor!',
  'Your file has been successfully queued for processing and you will be notified when processing is done!' => 'Dosyanız işlenmek üzere başarıyla sıraya alındı ve işlem tamamlandığında bilgilendirileceksiniz!',
  'Block email requests' => 'E-posta engelleme istekleri',
  'The request has been successfully confirmed!' => 'İstek başarıyla onaylandı!',
  'Confirm' => 'Onayla',
  'When people enter their email addresses as a {request} to be added in the global blacklist so that they will never receive emails from this source again, those will appear here and in case they have not confirmed the request, you can confirm it for them.' => 'Kişiler e-posta adreslerini, genel kara listeye eklenmek üzere bir {request} olarak girdiklerinde (böylece bu kaynaktan bir daha asla e-posta almazlar), bu adresler burada görünecektir ve isteği onaylamadıkları takdirde, onlar adına siz onaylayabilirsiniz.',
  'Request' => 'İstek',
  'Once a request is confirmed, the email will be added into the global blacklist and the subscriber status will change to blacklisted!' => 'Bir istek onaylandığında, e-posta genel kara listeye eklenecek ve abone durumu kara listeye alındı olarak değişecektir!',
  'Are you sure you want to run this action?' => 'Bu eylemi çalıştırmak istediğinizden emin misiniz?',
  'Filters' => 'Filtreler',
  'Submit' => 'Gönder',
  'Import from CSV file' => 'CSV dosyasından içe aktar',
  'Please note, the csv file must contain a header with at least the email column.' => 'Lütfen dikkat, csv dosyası en azından e-posta sütununu içeren bir başlık içermelidir.',
  'If unsure about how to format your file, do an export first and see how the file looks.' => 'Dosyanızı nasıl biçimlendireceğinizden emin değilseniz, önce bir dışa aktarma yapın ve dosyanın nasıl göründüğüne bakın.',
  'Blacklist monitors will monitor the email blacklist and when emails matching the conditions will be added in the blacklist, they will be removed automatically and subscribers matching the emails will be marked back as confirmed.' => 'Kara liste izleyicileri, e-posta kara listesini izleyecek ve koşullarla eşleşen e-postalar kara listeye eklendiğinde, otomatik olarak kaldırılacak ve e-postalarla eşleşen aboneler tekrar onaylandı olarak işaretlenecektir.',
  'Please note that in order for the monitoring to work, you need to add the following cron job, which runs once per hour:' => 'Lütfen izlemenin çalışması için saatte bir çalışan aşağıdaki cron işini eklemeniz gerektiğini unutmayın:',
  'Ip address' => 'IP adresi',
  'User agent' => 'Kullanıcı aracısı',
  'Unconfirmed' => 'Onaylanmadı',
  'Confirmed' => 'Onaylandı',
  'Subscriber' => 'Abone',
  'The email address {email} is already in your blacklist!' => '{email} e-posta adresi zaten kara listenizde!',
  'Please enter a valid email address!' => 'Lütfen geçerli bir e-posta adresi girin!',
  'Matched regex: {regex}' => 'Eşleşen regex: {regex}',
  'Invalid email address format!' => 'Geçersiz e-posta adresi biçimi!',
  'Blacklisted' => 'Kara listeye alındı',
  'Monitor' => 'İzleyici',
  'Name' => 'Ad',
  'Email condition' => 'E-posta koşulu',
  'Email match' => 'E-posta eşleşmesi',
  'Reason condition' => 'Neden koşulu',
  'Reason match' => 'Neden eşleşmesi',
  'Condition operator' => 'Koşul operatörü',
  'Notifications to' => 'Bildirimler şuraya',
  'Name your monitor for easier identification' => 'Daha kolay tanımlama için izleyicinize ad verin',
  'How to match against the blacklisted email address' => 'Kara listeye alınmış e-posta adresine karşı nasıl eşleştirme yapılır',
  'The text to match against the email address' => 'E-posta adresine karşı eşleştirilecek metin',
  'How to match against the blacklisted reason' => 'Kara listeye alınmış nedene karşı nasıl eşleştirme yapılır',
  'The text to match against the blacklist reason. Use the [EMPTY] tag to match empty content' => 'Kara liste nedenine karşı eşleştirilecek metin. Boş içeriği eşleştirmek için [EMPTY] etiketini kullanın',
  'What operator to use between the conditions' => 'Koşullar arasında hangi operatörün kullanılacağı',
  'Where to send notifications when the conditions are met. Separate multiple email addresses with a comma' => 'Koşullar karşılandığında bildirimlerin nereye gönderileceği. Birden çok e-posta adresini virgülle ayırın',
  'Greylisted' => 'Gri listeye alındı',
  'Blacklist' => 'Kara liste',
  'Confirm the block email request!' => 'E-posta engelleme isteğini onayla!',
  'The email address has been successfully blocked!' => 'E-posta adresi başarıyla engellendi!',
  'Something went wrong, please try again!' => 'Bir şeyler ters gitti, lütfen tekrar deneyin!',
  'Block email address' => 'E-posta adresini engelle',
  'The request has not been found!' => 'İstek bulunamadı!',
  'The request has already been confirmed!' => 'İstek zaten onaylandı!',
  '{app} is an email-marketing service that serves companies of all shapes and sizes.' => '{app}, her türden ve büyüklükteki şirkete hizmet veren bir e-posta pazarlama hizmetidir.',
  'With several users/companies sending campaigns to hundreds of millions of recipients, we\'re bound to get abuse reports. ' => 'Yüz milyonlarca alıcıya kampanya gönderen çok sayıda kullanıcı/şirketle, kötüye kullanım raporları almamız kaçınılmazdır. ',
  'We take abuse reports seriously, if you believe a customer is sending unsolicited and or spam email, please report abuse immediately.' => 'Kötüye kullanım raporlarını ciddiye alıyoruz, bir müşterinin istenmeyen ve/veya spam e-posta gönderdiğine inanıyorsanız, lütfen kötüye kullanımı derhal bildirin.',
  'By completing the form above you will permanently block your email address from receiving any email from {app} customers for the foreseeable future. This could also block genuine emails that you do want to receive from companies or websites that use our service.' => 'Yukarıdaki formu doldurarak, e-posta adresinizi öngörülebilir gelecekte {app} müşterilerinden herhangi bir e-posta almaktan kalıcı olarak engellemiş olursunuz. Bu, hizmetimizi kullanan şirketlerden veya web sitelerinden almak istediğiniz gerçek e-postaları da engelleyebilir.',
  'Please note, we will send you a confirmation email to make sure you are the owner of the email address!' => 'Lütfen unutmayın, e-posta adresinin sahibi olduğunuzdan emin olmak için size bir onay e-postası göndereceğiz!',
  'Block my address' => 'Adresimi engelle',
  'Equals' => 'Eşittir',
  'Contains' => 'İçerir',
  'Starts with' => 'Şununla başlar',
  'Ends with' => 'Şununla biter',
  'And' => 'Ve',
  'Or' => 'Veya',
  'Please specify at least the email and/or the reason!' => 'Lütfen en azından e-postayı ve/veya nedeni belirtin!',
);