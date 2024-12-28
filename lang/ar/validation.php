<?php

return [

    /*
    |--------------------------------------------------------------------------
    | رسائل التحقق
    |--------------------------------------------------------------------------
    |
    | تحتوي الأسطر التالية على الرسائل الافتراضية المستخدمة من قبل
    | صنف التحقق. بعض هذه القواعد تحتوي على نسخ متعددة مثل قواعد
    | الأحجام. لا تتردد في تعديل هذه الرسائل هنا.
    |
    */

    'accepted' => 'يجب قبول :attribute.',
    'accepted_if' => 'يجب قبول :attribute عندما يكون :other يساوي :value.',
    'active_url' => 'الحقل :attribute يجب أن يكون رابطًا صالحًا.',
    'after' => 'الحقل :attribute يجب أن يكون تاريخًا بعد :date.',
    'after_or_equal' => 'الحقل :attribute يجب أن يكون تاريخًا يساوي أو بعد :date.',
    'alpha' => 'الحقل :attribute يجب أن يحتوي على أحرف فقط.',
    'alpha_dash' => 'الحقل :attribute يجب أن يحتوي على أحرف، أرقام، شرطات وشرطات سفلية فقط.',
    'alpha_num' => 'الحقل :attribute يجب أن يحتوي على أحرف وأرقام فقط.',
    'array' => 'الحقل :attribute يجب أن يكون مصفوفة.',
    'ascii' => 'الحقل :attribute يجب أن يحتوي فقط على أحرف وأرقام ورموز ذات بايت واحد.',
    'before' => 'الحقل :attribute يجب أن يكون تاريخًا قبل :date.',
    'before_or_equal' => 'الحقل :attribute يجب أن يكون تاريخًا يساوي أو قبل :date.',
    'between' => [
        'array' => 'الحقل :attribute يجب أن يحتوي على عدد عناصر بين :min و :max.',
        'file' => 'الحقل :attribute يجب أن يكون حجمه بين :min و :max كيلوبايت.',
        'numeric' => 'الحقل :attribute يجب أن تكون قيمته بين :min و :max.',
        'string' => 'الحقل :attribute يجب أن يكون طوله بين :min و :max حرفًا.',
    ],
    'boolean' => 'الحقل :attribute يجب أن يكون صحيحًا أو خطأ.',
    'can' => 'الحقل :attribute يحتوي على قيمة غير مسموح بها.',
    'confirmed' => 'تأكيد الحقل :attribute لا يطابق.',
    'contains' => 'الحقل :attribute يفتقد قيمة مطلوبة.',
    'current_password' => 'كلمة المرور غير صحيحة.',
    'date' => 'الحقل :attribute يجب أن يكون تاريخًا صالحًا.',
    'date_equals' => 'الحقل :attribute يجب أن يكون تاريخًا يساوي :date.',
    'date_format' => 'الحقل :attribute يجب أن يتطابق مع التنسيق :format.',
    'decimal' => 'الحقل :attribute يجب أن يحتوي على :decimal منازل عشرية.',
    'declined' => 'يجب رفض الحقل :attribute.',
    'declined_if' => 'يجب رفض الحقل :attribute عندما يكون :other يساوي :value.',
    'different' => 'الحقل :attribute و :other يجب أن يكونا مختلفين.',
    'digits' => 'الحقل :attribute يجب أن يكون :digits رقمًا.',
    'digits_between' => 'الحقل :attribute يجب أن يكون بين :min و :max رقمًا.',
    'dimensions' => 'الحقل :attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct' => 'الحقل :attribute يحتوي على قيمة مكررة.',
    'doesnt_end_with' => 'الحقل :attribute يجب ألا ينتهي بأحد القيم التالية: :values.',
    'doesnt_start_with' => 'الحقل :attribute يجب ألا يبدأ بأحد القيم التالية: :values.',
    'email' => 'الحقل :attribute يجب أن يكون بريدًا إلكترونيًا صالحًا.',
    'ends_with' => 'الحقل :attribute يجب أن ينتهي بأحد القيم التالية: :values.',
    'enum' => ':attribute المختار غير صالح.',
    'exists' => ':attribute المختار غير صالح.',
    'extensions' => 'الحقل :attribute يجب أن يكون له أحد الامتدادات التالية: :values.',
    'file' => 'الحقل :attribute يجب أن يكون ملفًا.',
    'filled' => 'الحقل :attribute يجب أن يحتوي على قيمة.',
    'gt' => [
        'array' => 'الحقل :attribute يجب أن يحتوي على أكثر من :value عنصر.',
        'file' => 'الحقل :attribute يجب أن يكون أكبر من :value كيلوبايت.',
        'numeric' => 'الحقل :attribute يجب أن يكون أكبر من :value.',
        'string' => 'الحقل :attribute يجب أن يكون أكبر من :value حرفًا.',
    ],
    'gte' => [
        'array' => 'الحقل :attribute يجب أن يحتوي على :value عناصر أو أكثر.',
        'file' => 'الحقل :attribute يجب أن يكون أكبر أو يساوي :value كيلوبايت.',
        'numeric' => 'الحقل :attribute يجب أن يكون أكبر أو يساوي :value.',
        'string' => 'الحقل :attribute يجب أن يكون أكبر أو يساوي :value حرفًا.',
    ],
    'hex_color' => 'الحقل :attribute يجب أن يكون لونًا سداسي عشريًا صالحًا.',
    'image' => 'الحقل :attribute يجب أن يكون صورة.',
    'in' => ':attribute المختار غير صالح.',
    'in_array' => 'الحقل :attribute يجب أن يكون موجودًا في :other.',
    'integer' => 'الحقل :attribute يجب أن يكون عددًا صحيحًا.',
    'ip' => 'الحقل :attribute يجب أن يكون عنوان IP صالحًا.',
    'ipv4' => 'الحقل :attribute يجب أن يكون عنوان IPv4 صالحًا.',
    'ipv6' => 'الحقل :attribute يجب أن يكون عنوان IPv6 صالحًا.',
    'json' => 'الحقل :attribute يجب أن يكون نص JSON صالحًا.',
    'list' => 'الحقل :attribute يجب أن يكون قائمة.',
    'lowercase' => 'الحقل :attribute يجب أن يكون بأحرف صغيرة.',
    'lt' => [
        'array' => 'الحقل :attribute يجب أن يحتوي على أقل من :value عنصر.',
        'file' => 'الحقل :attribute يجب أن يكون أقل من :value كيلوبايت.',
        'numeric' => 'الحقل :attribute يجب أن يكون أقل من :value.',
        'string' => 'الحقل :attribute يجب أن يكون أقل من :value حرفًا.',
    ],
    'lte' => [
        'array' => 'الحقل :attribute يجب ألا يحتوي على أكثر من :value عنصر.',
        'file' => 'الحقل :attribute يجب أن يكون أقل أو يساوي :value كيلوبايت.',
        'numeric' => 'الحقل :attribute يجب أن يكون أقل أو يساوي :value.',
        'string' => 'الحقل :attribute يجب أن يكون أقل أو يساوي :value حرفًا.',
    ],
    'mac_address' => 'الحقل :attribute يجب أن يكون عنوان MAC صالحًا.',
    'max' => [
        'array' => 'الحقل :attribute يجب ألا يحتوي على أكثر من :max عنصر.',
        'file' => 'الحقل :attribute يجب ألا يكون أكبر من :max كيلوبايت.',
        'numeric' => 'الحقل :attribute يجب ألا يكون أكبر من :max.',
        'string' => 'الحقل :attribute يجب ألا يكون أطول من :max حرفًا.',
    ],
    'max_digits' => 'الحقل :attribute يجب ألا يحتوي على أكثر من :max رقمًا.',
    'mimes' => 'الحقل :attribute يجب أن يكون ملفًا من النوع: :values.',
    'mimetypes' => 'الحقل :attribute يجب أن يكون ملفًا من النوع: :values.',
    'min' => [
        'array' => 'الحقل :attribute يجب أن يحتوي على الأقل على :min عناصر.',
        'file' => 'الحقل :attribute يجب أن يكون حجمه على الأقل :min كيلوبايت.',
        'numeric' => 'الحقل :attribute يجب أن تكون قيمته على الأقل :min.',
        'string' => 'الحقل :attribute يجب أن يحتوي على الأقل :min حرفًا.',
    ],
    'min_digits' => 'الحقل :attribute يجب أن يحتوي على الأقل على :min أرقام.',
    'missing' => 'الحقل :attribute يجب أن يكون مفقودًا.',
    'missing_if' => 'الحقل :attribute يجب أن يكون مفقودًا عندما يكون :other يساوي :value.',
    'missing_unless' => 'الحقل :attribute يجب أن يكون مفقودًا إلا إذا كان :other يساوي :value.',
    'missing_with' => 'الحقل :attribute يجب أن يكون مفقودًا عندما يكون :values موجودًا.',
    'missing_with_all' => 'الحقل :attribute يجب أن يكون مفقودًا عندما تكون :values موجودة.',
    'multiple_of' => 'الحقل :attribute يجب أن يكون من مضاعفات :value.',
    'not_in' => ':attribute المختار غير صالح.',
    'not_regex' => 'تنسيق الحقل :attribute غير صالح.',
    'numeric' => 'الحقل :attribute يجب أن يكون رقمًا.',
    'password' => [
        'letters' => 'الحقل :attribute يجب أن يحتوي على حرف واحد على الأقل.',
        'mixed' => 'الحقل :attribute يجب أن يحتوي على حرف كبير وحرف صغير على الأقل.',
        'numbers' => 'الحقل :attribute يجب أن يحتوي على رقم واحد على الأقل.',
        'symbols' => 'الحقل :attribute يجب أن يحتوي على رمز واحد على الأقل.',
        'uncompromised' => 'الحقل :attribute تم تسريبه في قاعدة بيانات. الرجاء اختيار قيمة أخرى.',
    ],
    'present' => 'الحقل :attribute يجب أن يكون موجودًا.',
    'prohibited' => 'الحقل :attribute غير مسموح به.',
    'regex' => 'تنسيق الحقل :attribute غير صالح.',
    'required' => 'الحقل :attribute مطلوب.',
    'unique' => 'القيمة المدخلة :attribute مستخدمة بالفعل.',
    'url' => 'الحقل :attribute يجب أن يكون رابطًا صحيحًا.',
    'present' => 'يجب أن يكون الحقل :attribute موجودًا.',
    'present_if' => 'يجب أن يكون الحقل :attribute موجودًا عندما يكون :other هو :value.',
    'present_unless' => 'يجب أن يكون الحقل :attribute موجودًا إلا إذا كان :other هو :value.',
    'present_with' => 'يجب أن يكون الحقل :attribute موجودًا عندما تكون :values موجودة.',
    'present_with_all' => 'يجب أن يكون الحقل :attribute موجودًا عندما تكون جميع :values موجودة.',
    'prohibited' => 'الحقل :attribute غير مسموح به.',
    'prohibited_if' => 'الحقل :attribute غير مسموح به عندما يكون :other هو :value.',
    'prohibited_unless' => 'الحقل :attribute غير مسموح به إلا إذا كان :other في :values.',
    'prohibits' => 'الحقل :attribute يمنع وجود :other.',
    'regex' => 'تنسيق الحقل :attribute غير صالح.',
    'required' => 'الحقل :attribute مطلوب.',
    'required_array_keys' => 'يجب أن يحتوي الحقل :attribute على إدخالات لـ: :values.',
    'required_if' => 'الحقل :attribute مطلوب عندما يكون :other هو :value.',
    'required_if_accepted' => 'الحقل :attribute مطلوب عندما يتم قبول :other.',
    'required_if_declined' => 'الحقل :attribute مطلوب عندما يتم رفض :other.',
    'required_unless' => 'الحقل :attribute مطلوب إلا إذا كان :other في :values.',
    'required_with' => 'الحقل :attribute مطلوب عندما تكون :values موجودة.',
    'required_with_all' => 'الحقل :attribute مطلوب عندما تكون جميع :values موجودة.',
    'required_without' => 'الحقل :attribute مطلوب عندما تكون :values غير موجودة.',
    'required_without_all' => 'الحقل :attribute مطلوب عندما لا تكون أي من :values موجودة.',
    'same' => 'يجب أن يتطابق الحقل :attribute مع :other.',
    'size' => [
        'array' => 'يجب أن يحتوي الحقل :attribute على :size عنصر.',
        'file' => 'يجب أن يكون حجم الحقل :attribute :size كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute :size.',
        'string' => 'يجب أن يحتوي الحقل :attribute على :size حرفًا.',
    ],
    'starts_with' => 'يجب أن يبدأ الحقل :attribute بأحد القيم التالية: :values.',
    'string' => 'يجب أن يكون الحقل :attribute نصًا.',
    'timezone' => 'يجب أن يكون الحقل :attribute منطقة زمنية صالحة.',
    'unique' => 'القيمة المدخلة :attribute مستخدمة بالفعل.',
    'uploaded' => 'فشل تحميل الحقل :attribute.',
    'uppercase' => 'يجب أن يكون الحقل :attribute بأحرف كبيرة.',
    'url' => 'يجب أن يكون الحقل :attribute رابطًا صحيحًا.',
    'ulid' => 'يجب أن يكون الحقل :attribute ULID صالحًا.',
    'uuid' => 'يجب أن يكون الحقل :attribute UUID صالحًا.',

    /*
    |--------------------------------------------------------------------------
    | أسطر التحقق المخصصة
    |--------------------------------------------------------------------------
    |
    | هنا يمكنك تحديد رسائل التحقق المخصصة للحقول باستخدام
    | التنسيق "attribute.rule" لتسمية الأسطر. هذا يجعل من السهل
    | تحديد رسالة لغة مخصصة لقاعدة حقل معينة.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'رسالة مخصصة',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | سمات التحقق المخصصة
    |--------------------------------------------------------------------------
    |
    | تُستخدم الأسطر التالية لاستبدال النائب الخاص بالسمات
    | بشيء أكثر سهولة في القراءة مثل "عنوان البريد الإلكتروني" بدلاً
    | من "email". يساعد هذا فقط في جعل الرسالة أكثر وضوحًا.
    |
    */

    'attributes' => [],


];
