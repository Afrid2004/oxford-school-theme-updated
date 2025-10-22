<?php
function oxford_school_theme_setup_default_content()
{
    // === ১. ডিফল্ট পেইজ (parent-child সহ) ===
    $pages = array(
        'প্রচ্ছদ' => array(
            'content' => 'প্রচ্ছদ পেইজ',
        ),
        'আমাদের কথা' => array(
            'content' => 'আমাদের কথা পেইজ',
            'children' => array(
                'প্রতিষ্ঠানের ইতিহাস' => 'প্রতিষ্ঠানের ইতিহাস পেইজ',
                'লক্ষ্য ও উদ্দেশ্য'   => 'লক্ষ্য ও উদ্দেশ্য পেইজ',
                'অর্জন ও সাফল্য'      => 'অর্জন ও সাফল্য পেইজ',
            ),
        ),
        'তথ্য' => array(
            'content' => 'তথ্য পেইজ',
            'children' => array(
                'শিক্ষকদের তথ্য'   => 'শিক্ষকদের তথ্য পেইজ',
                'স্টাফদের তথ্য'    => 'স্টাফদের তথ্য পেইজ',
                'শিক্ষার্থী তালিকা' => 'শিক্ষার্থী তালিকা পেইজ',
                'ইভেন্টস'          => 'ইভেন্টস পেইজ',
                'ছুটির তালিকা'      => 'ছুটির তালিকা পেইজ',
                'লাইব্রেরী'         => 'লাইব্রেরী পেইজ',
                'প্রকাশনা'          => 'প্রকাশনা পেইজ',
            ),
        ),
        'একাডেমিক তথ্য' => array(
            'content' => 'একাডেমিক তথ্য পেইজ',
            'children' => array(
                'পাঠ্যক্রম'        => 'পাঠ্যক্রম পেইজ',
                'ক্লাস রুটিন'     => 'ক্লাস রুটিন পেইজ',
                'পরীক্ষার রুটিন' => 'পরীক্ষার রুটিন পেইজ',
                'একাডেমিক সাবজেক্ট' => 'একাডেমিক সাবজেক্ট পেইজ',
            ),
        ),
        'প্রশাসন' => array(
            'content' => 'প্রশাসন পেইজ',
            'children' => array(
                'অধ্যক্ষ'       => 'অধ্যক্ষ পেইজ',
                'কমিটিসমূহ'     => 'কমিটিসমূহ পেইজ',
                'গভর্নিং বডি'   => 'গভর্নিং বডি পেইজ',
            ),
        ),
        'গ্যালারি' => array(
            'content' => 'গ্যালারি পেইজ',
            'children' => array(
                'ফটো গ্যালারি'  => 'ফটো গ্যালারি পেইজ',
                'ভিডিও গ্যালারি' => 'ভিডিও গ্যালারি পেইজ',
            ),
        ),
        'যোগাযোগ' => array(
            'content' => 'যোগাযোগ পেইজ',
        ),
        'ভর্তি তথ্য' => array(
            'content' => 'ভর্তি তথ্য পেইজ',
            'children' => array(
                'ভর্তি বিজ্ঞপ্তি'        => 'ভর্তি বিজ্ঞপ্তি পেইজ',
                'নিয়ম ও শর্তাবলি'       => 'নিয়ম ও শর্তাবলি পেইজ',
                'ভর্তি ফরম ডাউনলোড'     => 'ভর্তি ফরম ডাউনলোড পেইজ',
                'ভর্তি পরীক্ষার ফলাফল'   => 'ভর্তি পরীক্ষার ফলাফল পেইজ',
            ),
        ),
        'ফলাফল' => array(
            'content' => 'ফলাফল পেইজ',
            'children' => array(
                'বার্ষিক পরীক্ষার ফলাফল' => 'বার্ষিক পরীক্ষার ফলাফল পেইজ',
                'পিএসসি/জেএসসি/এসএসসি/এইচএসসি ফলাফল' => 'পিএসসি/জেএসসি/এসএসসি/এইচএসসি ফলাফল পেইজ',
            ),
        ),
        'প্রাইভেসি পলিসি' => array(
            'content' => 'প্রাইভেসি পলিসি পেইজ',
        ),
        'টার্মস অ্যান্ড কন্ডিশন' => array(
            'content' => 'টার্মস অ্যান্ড কন্ডিশন পেইজ',
        ),
    );

    // === Recursive Page Creator ===
    function create_page_recursive($title, $page_data, $parent_id = 0)
    {
        // WP_Query দিয়ে পেইজ খুঁজে বের করা
        $query = new WP_Query(array(
            'post_type'      => 'page',
            'title'          => $title,
            'posts_per_page' => 1,
            'post_status'    => 'any',
        ));

        if ($query->have_posts()) {
            $page_id = $query->posts[0]->ID;
        } else {
            $page_id = wp_insert_post(array(
                'post_title'   => $title,
                'post_content' => $page_data['content'],
                'post_status'  => 'draft',
                'post_type'    => 'page',
                'post_parent'  => $parent_id,
            ));
        }
        wp_reset_postdata();

        // যদি children থাকে তবে সেগুলো তৈরি করো
        if (!empty($page_data['children'])) {
            foreach ($page_data['children'] as $child_title => $child_content) {
                create_page_recursive($child_title, array(
                    'content'  => $child_content,
                    'children' => array(),
                ), $page_id);
            }
        }
    }

    // === সব পেইজ তৈরি করো ===
    foreach ($pages as $title => $page_data) {
        create_page_recursive($title, $page_data, 0);
    }

    // === ২. ডিফল্ট ক্যাটাগরি তৈরি ===
    $categories = array(
        'নিউজ ও ইভেন্টস',
    );

    foreach ($categories as $cat) {
        if (!term_exists($cat, 'category')) {
            wp_insert_term($cat, 'category', array(
                'slug' => sanitize_title($cat),
            ));
        }
    }
}
add_action('after_switch_theme', 'oxford_school_theme_setup_default_content');
