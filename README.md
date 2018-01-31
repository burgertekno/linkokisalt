## LinkoKısalt
LinkoKısalt, ücretsiz bir link kısaltma scriptidir. Tamamen açık kaynak kodlu olarak geliştirilmiştir. Açık kaynak kodlu olduğu için dilediğiniz gibi düzenleyebilir ve dağıtabilirsiniz.

## Nasıl Kullanılır?
LinkoKısalt scriptini kullanabilmek için bilgisayarınıza indirmeniz gereklidir. İndirdikten sonra *baglan.php* dosyasını metin düzenleyicisi ile açıp,
$sitead = "LinkoKısalt"; satırındaki **LinkoKısalt** yerine kendi sitenizin adını yazmanız,
$db = new PDO("mysql:host=localhost;dbname=kisa", "root", "12345678"); satırındaki **localhost** yerine MySQL sunucuzun adresini, **kisa** yerine veritabanınızın adını, **root** yerine veritabanı kullanıcı adını ve **12345678** yerine veritabanı kullanıcı şifresini yazmanız gerekmektedir.
Bu işlemleri yaptıktan sonra scriptin ana dizininde bulunan *veritabani.sql* dosyasını veritabanına aktarmanız gerekmektedir.
**Ek Olarak**: olustur.php dosyasında bulunan http://127.0.0.1/kisaurl/git.php?id= kısmını silip yerine kendi scripti kurduğunuz site ve dizin adresini yazmanız gereklidir. (http://orneksiteadresi.com/ gibi)

## Scriptin Özellikleri
- Tamamen ücretsiz ve açık kaynak kodlu.
- Reklam ekleyebilme imkanı.
- Bootstrap ile mobil uyumlu tasarım.
- Şifreli link kısaltma özelliği.
- ...

## Güncelleme
Yeni yapılan güncelleme ile scripte .htaccess dosyası eklendi. Artık linkler http://orneksiteadresi.com/xxxx şeklinde kısaltılıyor.

**Bu script, Tekno Burger (www.teknoburger.blogspot.com.tr) tarafından *halka ve geliştirmeye* açık olarak PHP kodlama dilinde, Bootstrap, JQUERY vb. yardımcı eklentiler kullanılarak geliştirilmiştir.**
