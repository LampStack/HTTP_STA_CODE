# HTTP Status Code Definitions

This PHP class provides a list of HTTP status codes along with their English and Persian translations.

## Usage

Instantiate the `HTTP_STA_CODE` class and access the desired HTTP status code using the appropriate property (`HTTP_STA_EN_CODE` for English translations and `HTTP_STA_FA_CODE` for Persian translations).

```php
<?php
require_once('HTTP_STA_CODE.php');

$class = new HTTP_STA_CODE();
echo $class->HTTP_STA_FA_CODE[500]; // Output: "خطای داخلی سرور"
?>
```

## HTTP Status Codes

| کد   | عبارت انگلیسی                 | ترجمه فارسی                     |
|------|--------------------------------|----------------------------------|
| 100  | Continue                        | ادامه                           |
| 101  | Switching Protocols             | تغییر پروتکل                   |
| 102  | Processing                      | در حال پردازش                  |
| 200  | OK                              | تایید                           |
| 201  | Created                         | ایجاد شد                        |
| 202  | Accepted                        | پذیرفته شد                     |
| 203  | Non-Authoritative Information  | اطلاعات غیر معتبر              |
| 204  | No Content                      | بدون محتوا                     |
| 205  | Reset Content                   | بازنشانی محتوا                |
| 206  | Partial Content                 | محتوای جزئی                    |
| 207  | Multi-Status                    | چند وضعیتی                     |
| 300  | Multiple Choices                | انتخاب‌های متعدد              |
| 301  | Moved Permanently               | انتقال دائمی                   |
| 302  | Found                           | پیدا شد                        |
| 303  | See Other                       | مشاهده سایر                    |
| 304  | Not Modified                    | تغییر نکرده                    |
| 305  | Use Proxy                       | استفاده از پروکسی             |
| 307  | Temporary Redirect              | انتقال موقت                    |
| 400  | Bad Request                     | درخواست نامعتبر               |
| 401  | Unauthorized                    | غیر مجاز                       |
| 402  | Payment Required                | پرداخت الزامی است             |
| 403  | Forbidden                       | ممنوع                          |
| 404  | Not Found                       | پیدا نشد                       |
| 405  | Method Not Allowed              | روش مجاز نیست                  |
| 406  | Not Acceptable                  | قابل قبول نیست                 |
| 407  | Proxy Authentication Required   | نیاز به تأیید پروکسی          |
| 408  | Request Timeout                 | انقضای زمان درخواست           |
| 409  | Conflict                        | ناسازگاری                     |
| 410  | Gone                            | رفته است                        |
| 411  | Length Required                 | طول الزامی است                 |
| 412  | Precondition Failed             | شرط از قبل شکست خورده است    |
| 413  | Request Entity Too Large        | موجودیت درخواست بسیار بزرگ است |
| 414  | Request-URI Too Long            | URI درخواست بسیار طولانی است |
| 415  | Unsupported Media Type          | نوع رسانه پشتیبانی نمی شود   |
| 416  | Requested Range Not Satisfiable | محدوده درخواست قابل ارضاء نیست |
| 417  | Expectation Failed              | انتظار شکست خورده است         |
| 418  | I'm a teapot                    | سرور باگ دارد                  |
| 422  | Unprocessable Entity            | موجودیت غیر قابل پردازش است  |
| 423  | Locked                          | قفل شده است                    |
| 424  | Failed Dependency               | وابستگی شکست خورده است       |
| 425  | Unordered Collection            | مجموعه نامرتب است              |
| 426  | Upgrade Required                | نیاز به ارتقاء دارد            |
| 428  | Precondition Required           | شرط الزامی است                 |
| 429  | Too Many Requests               | درخواست های بسیار زیاد است   |
| 431  | Request Header Fields Too Large | فیلدهای سرآیند درخواست بسیار بزرگ هستند |
| 451  | Unavailable For Legal Reasons   | به دلایل قانونی در دسترس نیست |
| 500  | Internal Server Error           | خطای داخلی سرور               |
| 501  | Not Implemented                 | پیاده سازی نشده است           |
| 502  | Bad Gateway                     | دروازه نامعتبر است            |
| 503  | Service Unavailable             | سرویس در دسترس نیست           |
| 504  | Gateway Timeout                 | انقضای زمان دروازه            |
| 505  | HTTP Version Not Supported      | نسخه HTTP پشتیبانی نمی شود   |
| 506  | Variant Also Negotiates         |                                 |
| 507  | Insufficient Storage            | فضای ذخیره سازی ناکافی است   |
| 508  | Loop Detected                   | حلقه شناسایی شد                |
| 509  | Bandwidth Limit Exceeded        | محدودیت پهنای باند تجاوز شده است |
| 510  | Not Extended                    | توسعه داده نشده است           |
| 511  | Network Authentication Required | نیاز به تأیید شبکه دارد       |


## Contributing

Contributions are welcome! Feel free to open issues or pull requests to improve the functionality or fix any bugs.

## Contact

<a href="https://t.me/LampStack">Telegram</a><br>
<a href="mailto:xialop@outlook.com">Email</a>

## License

This project is licensed under the [MIT License](LICENSE).
