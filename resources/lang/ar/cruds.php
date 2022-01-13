<?php

return [
    'userManagement'   => [
        'title'          => 'إدارة المستخدم',
        'title_singular' => 'إدارة المستخدم',
    ],
    'permission'       => [
        'title'          => 'الصلاحيات',
        'title_singular' => 'الصلاحية',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'creation_date'        => 'Created at',
            'creation_date_helper' => '',
            'last_update'        => 'Updated at',
            'last_update_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'             => [
        'title'          => 'أدوار',
        'title_singular' => 'دور',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'creation_date'         => 'Created at',
            'creation_date_helper'  => '',
            'last_update'         => 'Updated at',
            'last_update_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'             => [
        'title'          => 'المستخدمين',
        'title_singular' => 'مستخدم',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Name',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'creation_date'               => 'Created at',
            'creation_date_helper'        => '',
            'last_update'               => 'Updated at',
            'last_update_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
        ],
    ],
    'message'          => [
        'title'          => 'الرسائل',
        'title_singular' => 'الرسائل',
    ],
    'notification'     => [
        'title'          => 'التنبيهات',
        'title_singular' => 'التنبيهات',
        'fields'         => [
            'id'                         => 'ID',
            'id_helper'                  => '',
            'alert_text'                 => 'نص التنبيه',
            'alert_text_helper'          => '',
            'alert_type'                 => 'نوع التنبيه',
            'alert_type_helper'          => '',
            'media_number'               => 'رقم الميديا',
            'media_number_helper'        => '',
            'message_details'            => 'تفاصيل الرسالة',
            'message_details_helper'     => '',
            'attachments_message'        => 'مرفقات الرسالة',
            'attachments_message_helper' => '',
            'link'                       => 'اللينك',
            'link_helper'                => '',
            'creation_date'                 => 'Created at',
            'creation_date_helper'          => '',
            'last_update'                 => 'Updated at',
            'last_update_helper'          => '',
            'deleted_at'                 => 'Deleted at',
            'deleted_at_helper'          => '',
        ],
    ],
    'advertisingSpace' => [
        'title'          => 'المساحات الاعلانيه',
        'title_singular' => 'المساحات الاعلانيه',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'إسم الاعلان',
            'title_helper'      => '',
            'ads_type'          => 'نوع الاعلان',
            'ads_type_helper'   => '',
            'image'             => 'صوره',
            'image_helper'      => '',
            'code'              => 'كود الاعلان',
            'code_helper'       => '',
            'creation_date'        => 'Created at',
            'creation_date_helper' => '',
            'last_update'        => 'Updated at',
            'last_update_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'setting'          => [
        'title'          => 'اعدادات الموقع',
        'title_singular' => 'اعدادات الموقع',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'keyEn'            => 'Key En',
            'keyEn_helper'     => '',
            'value'             => 'Value',
            'value_helper'      => '',
            'keyAr'            => 'Key Ar',
            'keyAr_helper'     => '',
            'creation_date'        => 'Created at',
            'creation_date_helper' => '',
            'last_update'        => 'Updated at',
            'last_update_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'categoryType'     => [
        'title'          => 'انواع الاقسام',
        'title_singular' => 'انواع الاقسام',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'type'              => 'النوع',
            'type_helper'       => '',
            'creation_date'        => 'Created at',
            'creation_date_helper' => '',
            'last_update'        => 'Updated at',
            'last_update_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'category'         => [
        'title'          => 'الأقسام',
        'title_singular' => 'الأقسام',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => '',
            'category_name'          => 'اسم القسم',
            'category_name_helper'   => '',
            'icon_img'               => 'صوره',
            'icon_img_helper'        => '',
            'descp'                  => 'الشرح',
            'descp_helper'           => '',
            'category_type'          => 'نوع القسم',
            'category_type_helper'   => '',
            'active'                 => 'مفعل',
            'active_helper'          => '',
            'is_last_level'          => 'المستوي الاخير',
            'is_last_level_helper'   => '',
            'parent_category'        => 'الاب',
            'parent_category_helper' => '',
            'category_level'         => 'مستوي القسم',
            'category_level_helper'  => '',
            'creation_date'             => 'Created at',
            'creation_date_helper'      => '',
            'last_update'             => 'Updated at',
            'last_update_helper'      => '',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => '',
        ],
    ],
    'subDomian'        => [
        'title'          => 'Sub Domians',
        'title_singular' => 'Sub Domian',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'titleEn'          => 'الاسم انجليزي',
            'titleEn_helper'   => '',
            'titleAr'          => 'الاسم عربي',
            'titleAr_helper'   => '',
            'url'               => 'الرابط',
            'url_helper'        => '',
            'username'          => 'اسم المستخدم',
            'username_helper'   => '',
            'password'          => 'كلمة المرور',
            'password_helper'   => '',
            'creation_date'        => 'Created at',
            'creation_date_helper' => '',
            'last_update'        => 'Updated at',
            'last_update_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'image'            => [
        'title'          => 'الصور',
        'title_singular' => 'الصور',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => '',
            'title'                => 'العنوان',
            'title_helper'         => '',
            'descp'                => 'الشرح',
            'descp_helper'         => '',
            'category'             => 'القسم',
            'category_helper'      => '',
            'sub_domain_no'        => 'Sub Domain No',
            'sub_domain_no_helper' => '',
            'file_name'            => 'الصوره',
            'file_name_helper'     => '',
            'views'                => 'المشاهدات',
            'views_helper'         => '',
            'comments'             => 'التعليقات',
            'comments_helper'      => '',
            'likes'                => 'الاعجابات',
            'likes_helper'         => '',
            'favorites'            => 'المفضله',
            'favorites_helper'     => '',
            'active'               => 'مفعل',
            'notify'               => 'إرسال تنبية',
            'active_helper'        => '',
            'dlike'                => 'Dis Like',
            'dlike_helper'         => '',
            'img_thm'              => 'Img Thm',
            'img_thm_helper'       => '',
            'creation_date'           => 'Created at',
            'creation_date_helper'    => '',
            'last_update'           => 'Updated at',
            'last_update_helper'    => '',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => '',
        ],
    ],
    'imagesManagement' => [
        'title'          => 'الصور',
        'title_singular' => 'الصور',
    ],
    'comment'          => [
        'title'          => 'التعليقات',
        'title_singular' => 'التعليقات',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => '',
            'image'                 => 'الصوره',
            'image_helper'          => '',
            'parent_comment_id'        => 'الاب',
            'parent_comment_id_helper' => '',
            'user'                  => 'المستخدم',
            'user_helper'           => '',
            'comment'               => 'التعليق',
            'comment_helper'        => '',
            'active'                => 'مفعل',
            'active_helper'         => '',
            'likes'                 => 'Likes',
            'likes_helper'          => '',
            'dlike'                 => 'Dis like',
            'dlike_helper'          => '',
            'creation_date'            => 'Created at',
            'creation_date_helper'     => '',
            'last_update'            => 'Updated at',
            'last_update_helper'     => '',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => '',
            'sound'                 => 'الصوت',
            'sound_helper'          => '',
            'video'                 => 'الفيديو',
            'video_helper'          => '',
        ],
    ],
    'like'             => [
        'title'          => 'الاعجابات',
        'title_singular' => 'الاعجابات',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'image'             => 'الصوره',
            'image_helper'      => '',
            'creation_date'        => 'Created at',
            'creation_date_helper' => '',
            'last_update'        => 'Updated at',
            'last_update_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
            'comment'           => 'التعليق',
            'comment_helper'    => '',
            'user'              => 'المستخدم',
            'user_helper'       => '',
            'like_type'         => 'Like Type',
            'like_type_helper'  => '',
            'sound'             => 'الصوت',
            'sound_helper'      => '',
            'video'             => 'الفيديو',
            'video_helper'      => '',
        ],
    ],
    'favorite'         => [
        'title'          => 'المفضله',
        'title_singular' => 'المفضله',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'user'              => 'المستخدم',
            'user_helper'       => '',
            'creation_date'        => 'Created at',
            'creation_date_helper' => '',
            'last_update'        => 'Updated at',
            'last_update_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
            'image'             => 'الصوره',
            'image_helper'      => '',
            'sound'             => 'الصوت',
            'sound_helper'      => '',
            'video'             => 'الفيديو',
            'video_helper'      => '',
        ],
    ],
    'sound'            => [
        'title'          => 'الصوتيات',
        'title_singular' => 'الصوتيات',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => '',
            'title'                => 'العنوان',
            'title_helper'         => '',
            'descp'                => 'الشرح',
            'descp_helper'         => '',
            'category'             => 'القسم',
            'category_helper'      => '',
            'sub_domain_no'        => 'Sub Domain No',
            'sub_domain_no_helper' => '',
            'file_name'            => 'ملف الصوت',
            'file_name_helper'     => '',
            'icon_image'           => 'الصوره',
            'icon_image_helper'    => '',
            'duration'             => 'المده',
            'duration_helper'      => '',
            'views'                => 'المشاهدات',
            'views_helper'         => '',
            'comments'             => 'التعليقات',
            'comments_helper'      => '',
            'likes'                => 'الاعجابات',
            'likes_helper'         => '',
            'favorites'            => 'المفضله',
            'favorites_helper'     => '',
            'active'               => 'مفعل',
            'notify'               => 'إرسال تنبية',
            'active_helper'        => '',
            'dlike'                => 'عدم اعجاب',
            'dlike_helper'         => '',
            'creation_date'           => 'Created at',
            'creation_date_helper'    => '',
            'last_update'           => 'Updated at',
            'last_update_helper'    => '',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => '',
        ],
    ],
    'video'            => [
        'title'          => 'الفيديوهات',
        'title_singular' => 'الفيديوهات',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => '',
            'title'                => 'العنوان',
            'title_helper'         => '',
            'descp'                => 'الشرح',
            'descp_helper'         => '',
            'category'             => 'القسم',
            'category_helper'      => '',
            'sub_domain_no'        => 'Sub Domain No',
            'sub_domain_no_helper' => '',
            'icon_image'           => 'الصوره',
            'icon_image_helper'    => '',
            'file_name'            => 'ملف الفيديو',
            'file_name_helper'     => '',
            'duration'             => 'المده',
            'duration_helper'      => '',
            'views'                => 'المشاهدات',
            'views_helper'         => '',
            'comments'             => 'التعليقات',
            'comments_helper'      => '',
            'likes'                => 'الاعجابات',
            'likes_helper'         => '',
            'favorites'            => 'المفضله',
            'favorites_helper'     => '',
            'active'               => 'مفعل',
            'active_helper'        => '',
            'dlike'                => 'عدم اعجاب',
            'dlike_helper'         => '',
            'creation_date'           => 'Created at',
            'creation_date_helper'    => '',
            'last_update'           => 'Updated at',
            'last_update_helper'    => '',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => '',
        ],
    ],
    'adminmenu'        => [
        'title'          => 'ادارة قائمة لوحة التحكم',
        'title_singular' => 'ادارة قائمة لوحة التحكم',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => '',
            'menuTitleEn'        => 'الاسم بالانجليزيه',
            'menuTitleEn_helper' => '',
            'menuTitleAr'        => 'الاسم باللغه العربي',
            'menuTitleAr_helper' => '',
            'menuLink'            => 'الرابط',
            'menuLink_helper'     => '',
            'menuIco'             => 'الايقونه',
            'menuIco_helper'      => '',
            'parentMenuID'          => 'الاب',
            'parentMenuID_helper'   => '',
            'ordering'             => 'الترتيب',
            'ordering_helper'      => '',
            'visable'              => 'مفعل',
            'visable_helper'       => '',
            'member'               => 'العضو',
            'member_helper'        => '',
            'creation_date'           => 'Created at',
            'creation_date_helper'    => '',
            'last_update'           => 'Updated at',
            'last_update_helper'    => '',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => '',
        ],
    ],
    'seo'              => [
        'title'          => 'محركات البحث',
        'title_singular' => 'محركات البحث',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => '',
            'seo_title'              => 'العنوان',
            'seo_title_helper'       => '',
            'seo_keywords'           => 'الكلمات',
            'seo_keywords_helper'    => '',
            'seo_description'        => 'الوصف',
            'seo_description_helper' => '',
            'creation_date'             => 'Created at',
            'created_at_helper'      => '',
            'last_update'             => 'Updated at',
            'last_update_helper'      => '',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => '',
        ],
    ],
    'admin'            => [
        'title'          => 'المديرين والمشرفين',
        'title_singular' => 'المديرين والمشرفين',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'الاسم',
            'name_helper'       => '',
            'username'          => 'اسم المستخدم',
            'username_helper'   => '',
            'password'          => 'باسورد',
            'password_helper'   => '',
            'permission'        => 'الصلاحيات',
            'permission_helper' => '',
            'email'             => 'الايميل',
            'email_helper'      => '',
            'active'            => 'مفعل',
            'active_helper'     => '',
            'last_login'        => 'اخر ظهور',
            'last_login_helper' => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'last_update'        => 'Updated at',
            'last_update_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'contactUsMessage' => [
        'title'          => 'رسائل الاداره',
        'title_singular' => 'رسائل الاداره',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'العنوان',
            'title_helper'      => '',
            'content'           => 'المحتوي',
            'content_helper'    => '',
            'from_u'            => 'من',
            'from_u_helper'     => '',
            'phone'             => 'التليفون',
            'phone_helper'      => '',
            'email'             => 'الايميل',
            'email_helper'      => '',
            'readed'            => 'Read',
            'readed_helper'     => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'last_update'        => 'Updated at',
            'last_update_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'radio'            => [
        'title'          => 'الاذاعه',
        'title_singular' => 'الاذاعه',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'type'              => 'Type',
            'type_helper'       => '',
            'name'              => 'الاسم',
            'name_helper'       => '',
            'file'              => 'الملف',
            'file_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
];
