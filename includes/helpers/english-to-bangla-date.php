<?php
function get_bangla_date()
{
    $en = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    $bn = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', 'শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার', 'জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর'];

    $date = date('l, j F Y');
    $bangla_date = str_replace($en, $bn, $date);
    return $bangla_date;
}

//get_reading_time
function get_reading_time($post_id = null)
{
    if (!$post_id) {
        $post_id = get_the_ID();
    }

    // পোস্ট কনটেন্ট নিন get_the_content() দিয়ে
    $content = get_the_content(null, false, $post_id);

    if (empty($content)) {
        $content = get_the_excerpt($post_id);
    }

    $content = wp_strip_all_tags($content);
    $word_count = str_word_count($content);

    if ($word_count === 0) {
        return 1;
    }

    return ceil($word_count / 200);
}

function convert_to_bangla($number)
{
    $eng = [
        'months',
        'month',
        'hours',
        'hour',
        'minutes',
        'minute',
        'seconds',
        'second',
        'days',
        'day',
        'weeks',
        'week',
        'years',
        'year',
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December',
        'am',
        'pm',
        'AM',
        'PM',
        '0',
        '1',
        '2',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9'
    ];

    $bng = [
        'মাস',
        'মাস',
        'ঘণ্টা',
        'ঘণ্টা',
        'মিনিট',
        'মিনিট',
        'সেকেন্ড',
        'সেকেন্ড',
        'দিন',
        'দিন',
        'সপ্তাহ',
        'সপ্তাহ',
        'বছর',
        'বছর',
        'জানুয়ারি',
        'ফেব্রুয়ারি',
        'মার্চ',
        'এপ্রিল',
        'মে',
        'জুন',
        'জুলাই',
        'আগস্ট',
        'সেপ্টেম্বর',
        'অক্টোবর',
        'নভেম্বর',
        'ডিসেম্বর',
        'এএম',
        'পিএম',
        'এএম',
        'পিএম',
        '০',
        '১',
        '২',
        '৩',
        '৪',
        '৫',
        '৬',
        '৭',
        '৮',
        '৯'
    ];

    return str_replace($eng, $bng, $number);
}
