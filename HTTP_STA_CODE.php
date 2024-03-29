<?php

final class HTTP_STA_CODE {
    public $HTTP_STA_EN_CODE = [
        100 => "Continue",
        101 => "Switching Protocols",
        102 => "Processing",
        200 => "OK",
        201 => "Created",
        202 => "Accepted",
        203 => "Non-Authoritative Information",
        204 => "No Content",
        205 => "Reset Content",
        206 => "Partial Content",
        207 => "Multi-Status",
        300 => "Multiple Choices",
        301 => "Moved Permanently",
        302 => "Found",
        303 => "See Other",
        304 => "Not Modified",
        305 => "Use Proxy",
        307 => "Temporary Redirect",
        400 => "Bad Request",
        401 => "Unauthorized",
        402 => "Payment Required",
        403 => "Forbidden",
        404 => "Not Found",
        405 => "Method Not Allowed",
        406 => "Not Acceptable",
        407 => "Proxy Authentication Required",
        408 => "Request Timeout",
        409 => "Conflict",
        410 => "Gone",
        411 => "Length Required",
        412 => "Precondition Failed",
        413 => "Request Entity Too Large",
        414 => "Request-URI Too Long",
        415 => "Unsupported Media Type",
        416 => "Requested Range Not Satisfiable",
        417 => "Expectation Failed",
        418 => "I'm a teapot",
        422 => "Unprocessable Entity",
        423 => "Locked",
        424 => "Failed Dependency",
        425 => "Unordered Collection",
        426 => "Upgrade Required",
        428 => "Precondition Required",
        429 => "Too Many Requests",
        431 => "Request Header Fields Too Large",
        451 => "Unavailable For Legal Reasons",
        500 => "Internal Server Error",
        501 => "Not Implemented",
        502 => "Bad Gateway",
        503 => "Service Unavailable",
        504 => "Gateway Timeout",
        505 => "HTTP Version Not Supported",
        506 => "Variant Also Negotiates",
        507 => "Insufficient Storage",
        508 => "Loop Detected",
        509 => "Bandwidth Limit Exceeded",
        510 => "Not Extended",
        511 => "Network Authentication Required"
    ];

    public $HTTP_STA_FA_CODE = [
        100 => "ادامه",
        101 => "تغییر پروتکل",
        102 => "در حال پردازش",
        200 => "تایید",
        201 => "ایجاد شد",
        202 => "پذیرفته شد",
        203 => "اطلاعات غیر معتبر",
        204 => "بدون محتوا",
        205 => "بازنشانی محتوا",
        206 => "محتوای جزئی",
        207 => "چند وضعیتی",
        300 => "انتخاب های متعدد",
        301 => "انتقال دائمی",
        302 => "پیدا شد",
        303 => "مشاهده سایر",
        304 => "تغییر نکرده",
        305 => "استفاده از پروکسی",
        307 => "انتقال موقت",
        400 => "درخواست نامعتبر",
        401 => "غیر مجاز",
        402 => "پرداخت الزامی است",
        403 => "ممنوع",
        404 => "پیدا نشد",
        405 => "روش مجاز نیست",
        406 => "قابل قبول نیست",
        407 => "نیاز به تأیید پروکسی",
        408 => "انقضای زمان درخواست",
        409 => "ناسازگاری",
        410 => "رفته است",
        411 => "طول الزامی است",
        412 => "شرط از قبل شکست خورده است",
        413 => "موجودیت درخواست بسیار بزرگ است",
        414 => "URI درخواست بسیار طولانی است",
        415 => "نوع رسانه پشتیبانی نمی شود",
        416 => "محدوده درخواست قابل ارضاء نیست",
        417 => "انتظار شکست خورده است",
        418 => "سرور باگ دارد",
        422 => "موجودیت غیر قابل پردازش است",
        423 => "قفل شده است",
        424 => "وابستگی شکست خورده است",
        425 => "مجموعه نامرتب است",
        426 => "نیاز به ارتقاء دارد",
        428 => "شرط الزامی است",
        429 => "درخواست های بسیار زیاد است",
        431 => "فیلدهای سرآیند درخواست بسیار بزرگ هستند",
        451 => "به دلایل قانونی در دسترس نیست",
        500 => "خطای داخلی سرور",
        501 => "پیاده سازی نشده است",
        502 => "دروازه نامعتبر است",
        503 => "سرویس در دسترس نیست",
        504 => "انقضای زمان دروازه",
        505 => "نسخه HTTP پشتیبانی نمی شود",
        506 => "Variant Also Negotiates",
        507 => "فضای ذخیره سازی ناکافی است",
        508 => "حلقه شناسایی شد",
        509 => "محدودیت پهنای باند تجاوز شده است",
        510 => "توسعه داده نشده است",
        511 => "نیاز به تأیید شبکه دارد"
    ];
}

$class = new HTTP_STA_CODE();
print_r($class->HTTP_STA_FA_CODE[500]);
?>
