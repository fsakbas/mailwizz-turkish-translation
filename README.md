# MailWizz Türkçe Dil Paketi 🇹🇷 / Turkish Language Pack for MailWizz 🇬🇧

Bu repoda, [MailWizz EMA](https://www.mailwizz.com) uygulaması için hazırlanmış **tam kapsamlı Türkçe çeviri paketi** yer almaktadır.  
This repository contains a complete **Turkish translation pack** for the MailWizz EMA application.

## 📦 İçerik / Contents

- `tr_tr.zip` — MailWizz için kurulumda kullanılabilecek hazır Türkçe dil paketi.
- İçeriğinde tüm modüllerin çeviri dosyaları yer almaktadır.  
  Includes translation files for all major modules.

## 📥 Kurulum / Installation

### 1. ZIP Dosyası ile / Using ZIP Language Pack (Web Panel):

MailWizz 1.1 ve sonrası sürümlerle birlikte, web arayüzü üzerinden dil paketi yüklenebilir.

**Yükleme adımları:**
1. MailWizz panelinize giriş yapın.
2. Backend → Languages → Add language (örnek: Türkçe, kod: `tr`)
3. Backend → Extensions → `Translate` eklentisini etkinleştirin.
4. Translate → Ayarları açın ve “Message collecting” özelliğini aktif edin.
5. Paneli kullanarak Türkçe alanlara gezinin, çeviri dosyaları otomatik oluşacaktır.
6. `tr_tr.zip` dosyasını backend üzerinden yükleyerek tüm çevirileri ekleyin.

> Not: Message collection işlemi tamamlandıktan sonra eklentiyi devre dışı bırakmanız önerilir.

---

### 2. Konsol Üzerinden / Using Command Line

MailWizz v1.3.6.9 itibariyle aşağıdaki komut ile çeviri dosyaları oluşturulabilir:

```bash
/usr/bin/php /absolute/path/to/apps/console/console.php translate
```

Komut çalıştırıldığında şu bilgileri isteyecektir:

```text
Please provide the language name(i.e: English) :  Turkish
Please enter the 2 letter language code(i.e: en) :  tr
Please enter the 2 letter region code(i.e: us). This is optional, leave empty if you are not sure. :
```

Tüm mesajlar `/apps/common/messages/tr` klasörüne yazılır.

---

## 📋 Uyumlu Sürüm / Compatible Version

- MailWizz EMA v1.x ve sonrası / MailWizz EMA v1.x and later.

## 🔓 Lisans / License

MIT Lisansı altında açık kaynak olarak sunulmuştur.  
Open-sourced under the MIT License. See [LICENSE](LICENSE) file for details.

## ✉️ Katkı / Contribution

Hatalı çeviriler veya öneriler için katkıda bulunabilir veya issue oluşturabilirsiniz.  
Feel free to contribute or open issues for suggestions and fixes.

---

**Hazırlayan / Author:** Selçuk Akbaş  
**Yıl / Year:** 2025
