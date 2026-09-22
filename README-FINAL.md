# Gavin Final Production v4

این نسخه بر پایه Gavin Production v3 ساخته شده و برای استقرار PHP/MySQL آماده‌سازی شده است.

## تغییرات اصلی
- گوین فروشگاه شخصی با **یک فروشنده/مالک** است؛ امکان ساخت فروشنده دوم حذف شده.
- ثبت‌نام مشتری با نام، شماره تلفن، آدرس، کدپستی و رمز عبور.
- ورود مشتری با شماره تلفن و رمز.
- قیمت سبد خرید از قیمت واقعی محصول در دیتابیس می‌آید و دیگر «تماس برای قیمت» وجود ندارد.
- صفحه محصول با مشخصات، تصاویر، قیمت، موجودی، افزودن به سبد و چت.
- چت مشتری ↔ مالک گوین با ذخیره در دیتابیس.
- پنل مالک برای پیام‌ها و پنل توسعه‌دهنده برای مشاهده همه چت‌ها.
- پرداخت به صورت «Payment-ready» پیاده شده؛ API واقعی درگاه بعد از انتخاب سرویس وصل می‌شود.
- فوتر شامل نشانی نمایشگاه، نشانی کارگاه و تلفن‌های تماس مالک است.
- بخش درباره توسعه‌دهندگان به سایت اضافه شده.
- گالری همچنان فقط گالری است و هیچ تصویر گالری به‌عنوان محصول seed نمی‌شود.

## نصب
1. database/schema.sql را روی MySQL وارد کنید.
2. config/config.php را با مشخصات دیتابیس تنظیم کنید.
3. database/seed.php را یک‌بار اجرا کنید و رمزهای seed را فوراً تغییر دهید.
4. پوشه uploads/products را writable کنید.
5. SSL را فعال کنید.
6. برای اتصال درگاه، فقط endpoint درخواست و verify را در payment.php و API مربوطه جایگزین کنید.


## Production v5 upgrade
- Province/city-aware shipping with owner-defined rates and developer approval.
- Price and shipping snapshots at order time.
- Atomic stock decrement with row locking.
- Audit logs, notifications, gateway management.
- Seller order workflow and dynamic seller categories.
- Run `database/production-final.sql` on an existing v4 database before using the new code.
