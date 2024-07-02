<?php 
return array (
  'timestamp' => 1719912826,
  'site_id' => 1,
  'group' => 'options',
  'key' => 'alloptions',
  'type' => 'array',
  'timeout' => 1721122426,
  'data' => 
  array (
    'siteurl' => 'https://www.d4dk.shop',
    'home' => 'https://www.d4dk.shop',
    'blogname' => 'SAAOL',
    'blogdescription' => '',
    'users_can_register' => '0',
    'admin_email' => 'dineshbindal1155@gmail.com',
    'start_of_week' => '1',
    'use_balanceTags' => '0',
    'use_smilies' => '1',
    'require_name_email' => '1',
    'comments_notify' => '1',
    'posts_per_rss' => '10',
    'rss_use_excerpt' => '0',
    'mailserver_url' => 'mail.example.com',
    'mailserver_login' => 'login@example.com',
    'mailserver_pass' => 'password',
    'mailserver_port' => '110',
    'default_category' => '1',
    'default_comment_status' => 'open',
    'default_ping_status' => 'open',
    'default_pingback_flag' => '1',
    'posts_per_page' => '10',
    'date_format' => 'F j, Y',
    'time_format' => 'g:i a',
    'links_updated_date_format' => 'F j, Y g:i a',
    'comment_moderation' => '0',
    'moderation_notify' => '1',
    'permalink_structure' => '/%postname%/',
    'rewrite_rules' => 
    array (
      '^wc-auth/v([1]{1})/(.*)?' => 'index.php?wc-auth-version=$matches[1]&wc-auth-route=$matches[2]',
      '^wc-api/v([1-3]{1})/?$' => 'index.php?wc-api-version=$matches[1]&wc-api-route=/',
      '^wc-api/v([1-3]{1})(.*)?' => 'index.php?wc-api-version=$matches[1]&wc-api-route=$matches[2]',
      '^wc/file/transient/?$' => 'index.php?wc-transient-file-name=',
      '^wc/file/transient/(.+)$' => 'index.php?wc-transient-file-name=$matches[1]',
      'shop/?$' => 'index.php?post_type=product',
      'shop/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?post_type=product&feed=$matches[1]',
      'shop/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?post_type=product&feed=$matches[1]',
      'shop/page/([0-9]{1,})/?$' => 'index.php?post_type=product&paged=$matches[1]',
      '^wp-json/?$' => 'index.php?rest_route=/',
      '^wp-json/(.*)?' => 'index.php?rest_route=/$matches[1]',
      '^index.php/wp-json/?$' => 'index.php?rest_route=/',
      '^index.php/wp-json/(.*)?' => 'index.php?rest_route=/$matches[1]',
      '^\\.well-known\\/apple-developer-merchantid-domain-association$' => 'index.php?apple-developer-merchantid-domain-association=1',
      'category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?category_name=$matches[1]&feed=$matches[2]',
      'category/(.+?)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?category_name=$matches[1]&feed=$matches[2]',
      'category/(.+?)/embed/?$' => 'index.php?category_name=$matches[1]&embed=true',
      'category/(.+?)/page/?([0-9]{1,})/?$' => 'index.php?category_name=$matches[1]&paged=$matches[2]',
      'category/(.+?)/wc-api(/(.*))?/?$' => 'index.php?category_name=$matches[1]&wc-api=$matches[3]',
      'category/(.+?)/wc/file/transient(/(.*))?/?$' => 'index.php?category_name=$matches[1]&wc/file/transient=$matches[3]',
      'category/(.+?)/?$' => 'index.php?category_name=$matches[1]',
      'tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?tag=$matches[1]&feed=$matches[2]',
      'tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?tag=$matches[1]&feed=$matches[2]',
      'tag/([^/]+)/embed/?$' => 'index.php?tag=$matches[1]&embed=true',
      'tag/([^/]+)/page/?([0-9]{1,})/?$' => 'index.php?tag=$matches[1]&paged=$matches[2]',
      'tag/([^/]+)/wc-api(/(.*))?/?$' => 'index.php?tag=$matches[1]&wc-api=$matches[3]',
      'tag/([^/]+)/wc/file/transient(/(.*))?/?$' => 'index.php?tag=$matches[1]&wc/file/transient=$matches[3]',
      'tag/([^/]+)/?$' => 'index.php?tag=$matches[1]',
      'type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?post_format=$matches[1]&feed=$matches[2]',
      'type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?post_format=$matches[1]&feed=$matches[2]',
      'type/([^/]+)/embed/?$' => 'index.php?post_format=$matches[1]&embed=true',
      'type/([^/]+)/page/?([0-9]{1,})/?$' => 'index.php?post_format=$matches[1]&paged=$matches[2]',
      'type/([^/]+)/?$' => 'index.php?post_format=$matches[1]',
      'product-category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?product_cat=$matches[1]&feed=$matches[2]',
      'product-category/(.+?)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?product_cat=$matches[1]&feed=$matches[2]',
      'product-category/(.+?)/embed/?$' => 'index.php?product_cat=$matches[1]&embed=true',
      'product-category/(.+?)/page/?([0-9]{1,})/?$' => 'index.php?product_cat=$matches[1]&paged=$matches[2]',
      'product-category/(.+?)/?$' => 'index.php?product_cat=$matches[1]',
      'product-tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?product_tag=$matches[1]&feed=$matches[2]',
      'product-tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?product_tag=$matches[1]&feed=$matches[2]',
      'product-tag/([^/]+)/embed/?$' => 'index.php?product_tag=$matches[1]&embed=true',
      'product-tag/([^/]+)/page/?([0-9]{1,})/?$' => 'index.php?product_tag=$matches[1]&paged=$matches[2]',
      'product-tag/([^/]+)/?$' => 'index.php?product_tag=$matches[1]',
      'product/[^/]+/attachment/([^/]+)/?$' => 'index.php?attachment=$matches[1]',
      'product/[^/]+/attachment/([^/]+)/trackback/?$' => 'index.php?attachment=$matches[1]&tb=1',
      'product/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?attachment=$matches[1]&feed=$matches[2]',
      'product/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?attachment=$matches[1]&feed=$matches[2]',
      'product/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$' => 'index.php?attachment=$matches[1]&cpage=$matches[2]',
      'product/[^/]+/attachment/([^/]+)/embed/?$' => 'index.php?attachment=$matches[1]&embed=true',
      'product/([^/]+)/embed/?$' => 'index.php?product=$matches[1]&embed=true',
      'product/([^/]+)/trackback/?$' => 'index.php?product=$matches[1]&tb=1',
      'product/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?product=$matches[1]&feed=$matches[2]',
      'product/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?product=$matches[1]&feed=$matches[2]',
      'product/([^/]+)/page/?([0-9]{1,})/?$' => 'index.php?product=$matches[1]&paged=$matches[2]',
      'product/([^/]+)/comment-page-([0-9]{1,})/?$' => 'index.php?product=$matches[1]&cpage=$matches[2]',
      'product/([^/]+)/wc-api(/(.*))?/?$' => 'index.php?product=$matches[1]&wc-api=$matches[3]',
      'product/([^/]+)/wc/file/transient(/(.*))?/?$' => 'index.php?product=$matches[1]&wc/file/transient=$matches[3]',
      'product/[^/]+/([^/]+)/wc-api(/(.*))?/?$' => 'index.php?attachment=$matches[1]&wc-api=$matches[3]',
      'product/[^/]+/attachment/([^/]+)/wc-api(/(.*))?/?$' => 'index.php?attachment=$matches[1]&wc-api=$matches[3]',
      'product/[^/]+/([^/]+)/wc/file/transient(/(.*))?/?$' => 'index.php?attachment=$matches[1]&wc/file/transient=$matches[3]',
      'product/[^/]+/attachment/([^/]+)/wc/file/transient(/(.*))?/?$' => 'index.php?attachment=$matches[1]&wc/file/transient=$matches[3]',
      'product/([^/]+)(?:/([0-9]+))?/?$' => 'index.php?product=$matches[1]&page=$matches[2]',
      'product/[^/]+/([^/]+)/?$' => 'index.php?attachment=$matches[1]',
      'product/[^/]+/([^/]+)/trackback/?$' => 'index.php?attachment=$matches[1]&tb=1',
      'product/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?attachment=$matches[1]&feed=$matches[2]',
      'product/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?attachment=$matches[1]&feed=$matches[2]',
      'product/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$' => 'index.php?attachment=$matches[1]&cpage=$matches[2]',
      'product/[^/]+/([^/]+)/embed/?$' => 'index.php?attachment=$matches[1]&embed=true',
      'spectra-popup/[^/]+/attachment/([^/]+)/?$' => 'index.php?attachment=$matches[1]',
      'spectra-popup/[^/]+/attachment/([^/]+)/trackback/?$' => 'index.php?attachment=$matches[1]&tb=1',
      'spectra-popup/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?attachment=$matches[1]&feed=$matches[2]',
      'spectra-popup/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?attachment=$matches[1]&feed=$matches[2]',
      'spectra-popup/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$' => 'index.php?attachment=$matches[1]&cpage=$matches[2]',
      'spectra-popup/[^/]+/attachment/([^/]+)/embed/?$' => 'index.php?attachment=$matches[1]&embed=true',
      'spectra-popup/([^/]+)/embed/?$' => 'index.php?spectra-popup=$matches[1]&embed=true',
      'spectra-popup/([^/]+)/trackback/?$' => 'index.php?spectra-popup=$matches[1]&tb=1',
      'spectra-popup/([^/]+)/page/?([0-9]{1,})/?$' => 'index.php?spectra-popup=$matches[1]&paged=$matches[2]',
      'spectra-popup/([^/]+)/comment-page-([0-9]{1,})/?$' => 'index.php?spectra-popup=$matches[1]&cpage=$matches[2]',
      'spectra-popup/([^/]+)/wc-api(/(.*))?/?$' => 'index.php?spectra-popup=$matches[1]&wc-api=$matches[3]',
      'spectra-popup/([^/]+)/wc/file/transient(/(.*))?/?$' => 'index.php?spectra-popup=$matches[1]&wc/file/transient=$matches[3]',
      'spectra-popup/[^/]+/([^/]+)/wc-api(/(.*))?/?$' => 'index.php?attachment=$matches[1]&wc-api=$matches[3]',
      'spectra-popup/[^/]+/attachment/([^/]+)/wc-api(/(.*))?/?$' => 'index.php?attachment=$matches[1]&wc-api=$matches[3]',
      'spectra-popup/[^/]+/([^/]+)/wc/file/transient(/(.*))?/?$' => 'index.php?attachment=$matches[1]&wc/file/transient=$matches[3]',
      'spectra-popup/[^/]+/attachment/([^/]+)/wc/file/transient(/(.*))?/?$' => 'index.php?attachment=$matches[1]&wc/file/transient=$matches[3]',
      'spectra-popup/([^/]+)(?:/([0-9]+))?/?$' => 'index.php?spectra-popup=$matches[1]&page=$matches[2]',
      'spectra-popup/[^/]+/([^/]+)/?$' => 'index.php?attachment=$matches[1]',
      'spectra-popup/[^/]+/([^/]+)/trackback/?$' => 'index.php?attachment=$matches[1]&tb=1',
      'spectra-popup/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?attachment=$matches[1]&feed=$matches[2]',
      'spectra-popup/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?attachment=$matches[1]&feed=$matches[2]',
      'spectra-popup/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$' => 'index.php?attachment=$matches[1]&cpage=$matches[2]',
      'spectra-popup/[^/]+/([^/]+)/embed/?$' => 'index.php?attachment=$matches[1]&embed=true',
      'robots\\.txt$' => 'index.php?robots=1',
      'favicon\\.ico$' => 'index.php?favicon=1',
      '.*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$' => 'index.php?feed=old',
      '.*wp-app\\.php(/.*)?$' => 'index.php?error=403',
      '.*wp-register.php$' => 'index.php?register=true',
      'feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?&feed=$matches[1]',
      '(feed|rdf|rss|rss2|atom)/?$' => 'index.php?&feed=$matches[1]',
      'embed/?$' => 'index.php?&embed=true',
      'page/?([0-9]{1,})/?$' => 'index.php?&paged=$matches[1]',
      'comment-page-([0-9]{1,})/?$' => 'index.php?&page_id=36&cpage=$matches[1]',
      'wc-api(/(.*))?/?$' => 'index.php?&wc-api=$matches[2]',
      'wc/file/transient(/(.*))?/?$' => 'index.php?&wc/file/transient=$matches[2]',
      'comments/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?&feed=$matches[1]&withcomments=1',
      'comments/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?&feed=$matches[1]&withcomments=1',
      'comments/embed/?$' => 'index.php?&embed=true',
      'comments/wc-api(/(.*))?/?$' => 'index.php?&wc-api=$matches[2]',
      'comments/wc/file/transient(/(.*))?/?$' => 'index.php?&wc/file/transient=$matches[2]',
      'search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?s=$matches[1]&feed=$matches[2]',
      'search/(.+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?s=$matches[1]&feed=$matches[2]',
      'search/(.+)/embed/?$' => 'index.php?s=$matches[1]&embed=true',
      'search/(.+)/page/?([0-9]{1,})/?$' => 'index.php?s=$matches[1]&paged=$matches[2]',
      'search/(.+)/wc-api(/(.*))?/?$' => 'index.php?s=$matches[1]&wc-api=$matches[3]',
      'search/(.+)/wc/file/transient(/(.*))?/?$' => 'index.php?s=$matches[1]&wc/file/transient=$matches[3]',
      'search/(.+)/?$' => 'index.php?s=$matches[1]',
      'author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?author_name=$matches[1]&feed=$matches[2]',
      'author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?author_name=$matches[1]&feed=$matches[2]',
      'author/([^/]+)/embed/?$' => 'index.php?author_name=$matches[1]&embed=true',
      'author/([^/]+)/page/?([0-9]{1,})/?$' => 'index.php?author_name=$matches[1]&paged=$matches[2]',
      'author/([^/]+)/wc-api(/(.*))?/?$' => 'index.php?author_name=$matches[1]&wc-api=$matches[3]',
      'author/([^/]+)/wc/file/transient(/(.*))?/?$' => 'index.php?author_name=$matches[1]&wc/file/transient=$matches[3]',
      'author/([^/]+)/?$' => 'index.php?author_name=$matches[1]',
      '([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]',
      '([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]',
      '([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$' => 'index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true',
      '([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$' => 'index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]',
      '([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/wc-api(/(.*))?/?$' => 'index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&wc-api=$matches[5]',
      '([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/wc/file/transient(/(.*))?/?$' => 'index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&wc/file/transient=$matches[5]',
      '([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$' => 'index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]',
      '([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]',
      '([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]',
      '([0-9]{4})/([0-9]{1,2})/embed/?$' => 'index.php?year=$matches[1]&monthnum=$matches[2]&embed=true',
      '([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$' => 'index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]',
      '([0-9]{4})/([0-9]{1,2})/wc-api(/(.*))?/?$' => 'index.php?year=$matches[1]&monthnum=$matches[2]&wc-api=$matches[4]',
      '([0-9]{4})/([0-9]{1,2})/wc/file/transient(/(.*))?/?$' => 'index.php?year=$matches[1]&monthnum=$matches[2]&wc/file/transient=$matches[4]',
      '([0-9]{4})/([0-9]{1,2})/?$' => 'index.php?year=$matches[1]&monthnum=$matches[2]',
      '([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?year=$matches[1]&feed=$matches[2]',
      '([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?year=$matches[1]&feed=$matches[2]',
      '([0-9]{4})/embed/?$' => 'index.php?year=$matches[1]&embed=true',
      '([0-9]{4})/page/?([0-9]{1,})/?$' => 'index.php?year=$matches[1]&paged=$matches[2]',
      '([0-9]{4})/wc-api(/(.*))?/?$' => 'index.php?year=$matches[1]&wc-api=$matches[3]',
      '([0-9]{4})/wc/file/transient(/(.*))?/?$' => 'index.php?year=$matches[1]&wc/file/transient=$matches[3]',
      '([0-9]{4})/?$' => 'index.php?year=$matches[1]',
      '.?.+?/attachment/([^/]+)/?$' => 'index.php?attachment=$matches[1]',
      '.?.+?/attachment/([^/]+)/trackback/?$' => 'index.php?attachment=$matches[1]&tb=1',
      '.?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?attachment=$matches[1]&feed=$matches[2]',
      '.?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?attachment=$matches[1]&feed=$matches[2]',
      '.?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$' => 'index.php?attachment=$matches[1]&cpage=$matches[2]',
      '.?.+?/attachment/([^/]+)/embed/?$' => 'index.php?attachment=$matches[1]&embed=true',
      '(.?.+?)/embed/?$' => 'index.php?pagename=$matches[1]&embed=true',
      '(.?.+?)/trackback/?$' => 'index.php?pagename=$matches[1]&tb=1',
      '(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?pagename=$matches[1]&feed=$matches[2]',
      '(.?.+?)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?pagename=$matches[1]&feed=$matches[2]',
      '(.?.+?)/page/?([0-9]{1,})/?$' => 'index.php?pagename=$matches[1]&paged=$matches[2]',
      '(.?.+?)/comment-page-([0-9]{1,})/?$' => 'index.php?pagename=$matches[1]&cpage=$matches[2]',
      '(.?.+?)/wc-api(/(.*))?/?$' => 'index.php?pagename=$matches[1]&wc-api=$matches[3]',
      '(.?.+?)/wc/file/transient(/(.*))?/?$' => 'index.php?pagename=$matches[1]&wc/file/transient=$matches[3]',
      '(.?.+?)/order-pay(/(.*))?/?$' => 'index.php?pagename=$matches[1]&order-pay=$matches[3]',
      '(.?.+?)/order-received(/(.*))?/?$' => 'index.php?pagename=$matches[1]&order-received=$matches[3]',
      '(.?.+?)/orders(/(.*))?/?$' => 'index.php?pagename=$matches[1]&orders=$matches[3]',
      '(.?.+?)/view-order(/(.*))?/?$' => 'index.php?pagename=$matches[1]&view-order=$matches[3]',
      '(.?.+?)/downloads(/(.*))?/?$' => 'index.php?pagename=$matches[1]&downloads=$matches[3]',
      '(.?.+?)/edit-account(/(.*))?/?$' => 'index.php?pagename=$matches[1]&edit-account=$matches[3]',
      '(.?.+?)/edit-address(/(.*))?/?$' => 'index.php?pagename=$matches[1]&edit-address=$matches[3]',
      '(.?.+?)/payment-methods(/(.*))?/?$' => 'index.php?pagename=$matches[1]&payment-methods=$matches[3]',
      '(.?.+?)/lost-password(/(.*))?/?$' => 'index.php?pagename=$matches[1]&lost-password=$matches[3]',
      '(.?.+?)/customer-logout(/(.*))?/?$' => 'index.php?pagename=$matches[1]&customer-logout=$matches[3]',
      '(.?.+?)/add-payment-method(/(.*))?/?$' => 'index.php?pagename=$matches[1]&add-payment-method=$matches[3]',
      '(.?.+?)/delete-payment-method(/(.*))?/?$' => 'index.php?pagename=$matches[1]&delete-payment-method=$matches[3]',
      '(.?.+?)/set-default-payment-method(/(.*))?/?$' => 'index.php?pagename=$matches[1]&set-default-payment-method=$matches[3]',
      '.?.+?/([^/]+)/wc-api(/(.*))?/?$' => 'index.php?attachment=$matches[1]&wc-api=$matches[3]',
      '.?.+?/attachment/([^/]+)/wc-api(/(.*))?/?$' => 'index.php?attachment=$matches[1]&wc-api=$matches[3]',
      '.?.+?/([^/]+)/wc/file/transient(/(.*))?/?$' => 'index.php?attachment=$matches[1]&wc/file/transient=$matches[3]',
      '.?.+?/attachment/([^/]+)/wc/file/transient(/(.*))?/?$' => 'index.php?attachment=$matches[1]&wc/file/transient=$matches[3]',
      '(.?.+?)(?:/([0-9]+))?/?$' => 'index.php?pagename=$matches[1]&page=$matches[2]',
      '[^/]+/attachment/([^/]+)/?$' => 'index.php?attachment=$matches[1]',
      '[^/]+/attachment/([^/]+)/trackback/?$' => 'index.php?attachment=$matches[1]&tb=1',
      '[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?attachment=$matches[1]&feed=$matches[2]',
      '[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?attachment=$matches[1]&feed=$matches[2]',
      '[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$' => 'index.php?attachment=$matches[1]&cpage=$matches[2]',
      '[^/]+/attachment/([^/]+)/embed/?$' => 'index.php?attachment=$matches[1]&embed=true',
      '([^/]+)/embed/?$' => 'index.php?name=$matches[1]&embed=true',
      '([^/]+)/trackback/?$' => 'index.php?name=$matches[1]&tb=1',
      '([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?name=$matches[1]&feed=$matches[2]',
      '([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?name=$matches[1]&feed=$matches[2]',
      '([^/]+)/page/?([0-9]{1,})/?$' => 'index.php?name=$matches[1]&paged=$matches[2]',
      '([^/]+)/comment-page-([0-9]{1,})/?$' => 'index.php?name=$matches[1]&cpage=$matches[2]',
      '([^/]+)/wc-api(/(.*))?/?$' => 'index.php?name=$matches[1]&wc-api=$matches[3]',
      '([^/]+)/wc/file/transient(/(.*))?/?$' => 'index.php?name=$matches[1]&wc/file/transient=$matches[3]',
      '[^/]+/([^/]+)/wc-api(/(.*))?/?$' => 'index.php?attachment=$matches[1]&wc-api=$matches[3]',
      '[^/]+/attachment/([^/]+)/wc-api(/(.*))?/?$' => 'index.php?attachment=$matches[1]&wc-api=$matches[3]',
      '[^/]+/([^/]+)/wc/file/transient(/(.*))?/?$' => 'index.php?attachment=$matches[1]&wc/file/transient=$matches[3]',
      '[^/]+/attachment/([^/]+)/wc/file/transient(/(.*))?/?$' => 'index.php?attachment=$matches[1]&wc/file/transient=$matches[3]',
      '([^/]+)(?:/([0-9]+))?/?$' => 'index.php?name=$matches[1]&page=$matches[2]',
      '[^/]+/([^/]+)/?$' => 'index.php?attachment=$matches[1]',
      '[^/]+/([^/]+)/trackback/?$' => 'index.php?attachment=$matches[1]&tb=1',
      '[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?attachment=$matches[1]&feed=$matches[2]',
      '[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?attachment=$matches[1]&feed=$matches[2]',
      '[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$' => 'index.php?attachment=$matches[1]&cpage=$matches[2]',
      '[^/]+/([^/]+)/embed/?$' => 'index.php?attachment=$matches[1]&embed=true',
    ),
    'hack_file' => '0',
    'blog_charset' => 'UTF-8',
    'active_plugins' => 
    array (
      0 => 'akismet/akismet.php',
      1 => 'all-in-one-seo-pack/all_in_one_seo_pack.php',
      2 => 'astra-sites/astra-sites.php',
      3 => 'bookingpress-appointment-booking/bookingpress-appointment-booking.php',
      4 => 'docket-cache/docket-cache.php',
      5 => 'dreamhost-panel-login.php',
      6 => 'ewww-image-optimizer/ewww-image-optimizer.php',
      7 => 'ultimate-addons-for-gutenberg/ultimate-addons-for-gutenberg.php',
      8 => 'ultimate-post/ultimate-post.php',
      9 => 'woocommerce-gateway-stripe/woocommerce-gateway-stripe.php',
      10 => 'woocommerce/woocommerce.php',
      11 => 'wp-mail-smtp/wp_mail_smtp.php',
      12 => 'wpforms-lite/wpforms.php',
    ),
    'category_base' => '',
    'ping_sites' => 'http://rpc.pingomatic.com/',
    'comment_max_links' => '2',
    'gmt_offset' => '0',
    'default_email_category' => '1',
    'template' => 'astra',
    'stylesheet' => 'astra',
    'comment_registration' => '0',
    'html_type' => 'text/html',
    'use_trackback' => '0',
    'default_role' => 'subscriber',
    'db_version' => '57155',
    'uploads_use_yearmonth_folders' => '1',
    'upload_path' => '',
    'blog_public' => '1',
    'default_link_category' => '2',
    'show_on_front' => 'page',
    'tag_base' => '',
    'show_avatars' => '1',
    'avatar_rating' => 'G',
    'upload_url_path' => '',
    'thumbnail_size_w' => '150',
    'thumbnail_size_h' => '150',
    'thumbnail_crop' => '1',
    'medium_size_w' => '300',
    'medium_size_h' => '300',
    'avatar_default' => 'mystery',
    'large_size_w' => '1024',
    'large_size_h' => '1024',
    'image_default_link_type' => 'none',
    'image_default_size' => '',
    'image_default_align' => '',
    'close_comments_for_old_posts' => '0',
    'close_comments_days_old' => '14',
    'thread_comments' => '1',
    'thread_comments_depth' => '5',
    'page_comments' => '0',
    'comments_per_page' => '50',
    'default_comments_page' => 'newest',
    'comment_order' => 'asc',
    'sticky_posts' => 
    array (
    ),
    'widget_categories' => 
    array (
      1 => 
      array (
        'title' => '',
        'count' => 0,
        'hierarchical' => 0,
        'dropdown' => 0,
      ),
      '_multiwidget' => 1,
    ),
    'widget_text' => 
    array (
      1 => 
      array (
      ),
      '_multiwidget' => 1,
    ),
    'widget_rss' => 
    array (
      1 => 
      array (
      ),
      '_multiwidget' => 1,
    ),
    'timezone_string' => '',
    'page_for_posts' => '0',
    'page_on_front' => '36',
    'default_post_format' => '0',
    'link_manager_enabled' => '0',
    'finished_splitting_shared_terms' => '1',
    'site_icon' => '628',
    'medium_large_size_w' => '768',
    'medium_large_size_h' => '0',
    'wp_page_for_privacy_policy' => '3',
    'show_comments_cookies_opt_in' => '1',
    'admin_email_lifespan' => '1734623331',
    'comment_previously_approved' => '1',
    'auto_update_core_dev' => 'enabled',
    'auto_update_core_minor' => 'enabled',
    'auto_update_core_major' => 'enabled',
    'wp_force_deactivated_plugins' => 
    array (
    ),
    'wp_attachment_pages_enabled' => '0',
    'initial_db_version' => '57155',
    'wp_3z8zx9_user_roles' => 
    array (
      'administrator' => 
      array (
        'name' => 'Administrator',
        'capabilities' => 
        array (
          'switch_themes' => true,
          'edit_themes' => true,
          'activate_plugins' => true,
          'edit_plugins' => true,
          'edit_users' => true,
          'edit_files' => true,
          'manage_options' => true,
          'moderate_comments' => true,
          'manage_categories' => true,
          'manage_links' => true,
          'upload_files' => true,
          'import' => true,
          'unfiltered_html' => true,
          'edit_posts' => true,
          'edit_others_posts' => true,
          'edit_published_posts' => true,
          'publish_posts' => true,
          'edit_pages' => true,
          'read' => true,
          'level_10' => true,
          'level_9' => true,
          'level_8' => true,
          'level_7' => true,
          'level_6' => true,
          'level_5' => true,
          'level_4' => true,
          'level_3' => true,
          'level_2' => true,
          'level_1' => true,
          'level_0' => true,
          'edit_others_pages' => true,
          'edit_published_pages' => true,
          'publish_pages' => true,
          'delete_pages' => true,
          'delete_others_pages' => true,
          'delete_published_pages' => true,
          'delete_posts' => true,
          'delete_others_posts' => true,
          'delete_published_posts' => true,
          'delete_private_posts' => true,
          'edit_private_posts' => true,
          'read_private_posts' => true,
          'delete_private_pages' => true,
          'edit_private_pages' => true,
          'read_private_pages' => true,
          'delete_users' => true,
          'create_users' => true,
          'unfiltered_upload' => true,
          'edit_dashboard' => true,
          'update_plugins' => true,
          'delete_plugins' => true,
          'install_plugins' => true,
          'update_themes' => true,
          'install_themes' => true,
          'update_core' => true,
          'list_users' => true,
          'remove_users' => true,
          'promote_users' => true,
          'edit_theme_options' => true,
          'delete_themes' => true,
          'export' => true,
          'manage_woocommerce' => true,
          'view_woocommerce_reports' => true,
          'edit_product' => true,
          'read_product' => true,
          'delete_product' => true,
          'edit_products' => true,
          'edit_others_products' => true,
          'publish_products' => true,
          'read_private_products' => true,
          'delete_products' => true,
          'delete_private_products' => true,
          'delete_published_products' => true,
          'delete_others_products' => true,
          'edit_private_products' => true,
          'edit_published_products' => true,
          'manage_product_terms' => true,
          'edit_product_terms' => true,
          'delete_product_terms' => true,
          'assign_product_terms' => true,
          'edit_shop_order' => true,
          'read_shop_order' => true,
          'delete_shop_order' => true,
          'edit_shop_orders' => true,
          'edit_others_shop_orders' => true,
          'publish_shop_orders' => true,
          'read_private_shop_orders' => true,
          'delete_shop_orders' => true,
          'delete_private_shop_orders' => true,
          'delete_published_shop_orders' => true,
          'delete_others_shop_orders' => true,
          'edit_private_shop_orders' => true,
          'edit_published_shop_orders' => true,
          'manage_shop_order_terms' => true,
          'edit_shop_order_terms' => true,
          'delete_shop_order_terms' => true,
          'assign_shop_order_terms' => true,
          'edit_shop_coupon' => true,
          'read_shop_coupon' => true,
          'delete_shop_coupon' => true,
          'edit_shop_coupons' => true,
          'edit_others_shop_coupons' => true,
          'publish_shop_coupons' => true,
          'read_private_shop_coupons' => true,
          'delete_shop_coupons' => true,
          'delete_private_shop_coupons' => true,
          'delete_published_shop_coupons' => true,
          'delete_others_shop_coupons' => true,
          'edit_private_shop_coupons' => true,
          'edit_published_shop_coupons' => true,
          'manage_shop_coupon_terms' => true,
          'edit_shop_coupon_terms' => true,
          'delete_shop_coupon_terms' => true,
          'assign_shop_coupon_terms' => true,
          'aioseo_manage_seo' => true,
          'manage_ast_block_templates' => true,
        ),
      ),
      'editor' => 
      array (
        'name' => 'Editor',
        'capabilities' => 
        array (
          'moderate_comments' => true,
          'manage_categories' => true,
          'manage_links' => true,
          'upload_files' => true,
          'unfiltered_html' => true,
          'edit_posts' => true,
          'edit_others_posts' => true,
          'edit_published_posts' => true,
          'publish_posts' => true,
          'edit_pages' => true,
          'read' => true,
          'level_7' => true,
          'level_6' => true,
          'level_5' => true,
          'level_4' => true,
          'level_3' => true,
          'level_2' => true,
          'level_1' => true,
          'level_0' => true,
          'edit_others_pages' => true,
          'edit_published_pages' => true,
          'publish_pages' => true,
          'delete_pages' => true,
          'delete_others_pages' => true,
          'delete_published_pages' => true,
          'delete_posts' => true,
          'delete_others_posts' => true,
          'delete_published_posts' => true,
          'delete_private_posts' => true,
          'edit_private_posts' => true,
          'read_private_posts' => true,
          'delete_private_pages' => true,
          'edit_private_pages' => true,
          'read_private_pages' => true,
        ),
      ),
      'author' => 
      array (
        'name' => 'Author',
        'capabilities' => 
        array (
          'upload_files' => true,
          'edit_posts' => true,
          'edit_published_posts' => true,
          'publish_posts' => true,
          'read' => true,
          'level_2' => true,
          'level_1' => true,
          'level_0' => true,
          'delete_posts' => true,
          'delete_published_posts' => true,
        ),
      ),
      'contributor' => 
      array (
        'name' => 'Contributor',
        'capabilities' => 
        array (
          'edit_posts' => true,
          'read' => true,
          'level_1' => true,
          'level_0' => true,
          'delete_posts' => true,
        ),
      ),
      'subscriber' => 
      array (
        'name' => 'Subscriber',
        'capabilities' => 
        array (
          'read' => true,
          'level_0' => true,
        ),
      ),
      'customer' => 
      array (
        'name' => 'Customer',
        'capabilities' => 
        array (
          'read' => true,
        ),
      ),
      'shop_manager' => 
      array (
        'name' => 'Shop manager',
        'capabilities' => 
        array (
          'level_9' => true,
          'level_8' => true,
          'level_7' => true,
          'level_6' => true,
          'level_5' => true,
          'level_4' => true,
          'level_3' => true,
          'level_2' => true,
          'level_1' => true,
          'level_0' => true,
          'read' => true,
          'read_private_pages' => true,
          'read_private_posts' => true,
          'edit_posts' => true,
          'edit_pages' => true,
          'edit_published_posts' => true,
          'edit_published_pages' => true,
          'edit_private_pages' => true,
          'edit_private_posts' => true,
          'edit_others_posts' => true,
          'edit_others_pages' => true,
          'publish_posts' => true,
          'publish_pages' => true,
          'delete_posts' => true,
          'delete_pages' => true,
          'delete_private_pages' => true,
          'delete_private_posts' => true,
          'delete_published_pages' => true,
          'delete_published_posts' => true,
          'delete_others_posts' => true,
          'delete_others_pages' => true,
          'manage_categories' => true,
          'manage_links' => true,
          'moderate_comments' => true,
          'upload_files' => true,
          'export' => true,
          'import' => true,
          'list_users' => true,
          'edit_theme_options' => true,
          'manage_woocommerce' => true,
          'view_woocommerce_reports' => true,
          'edit_product' => true,
          'read_product' => true,
          'delete_product' => true,
          'edit_products' => true,
          'edit_others_products' => true,
          'publish_products' => true,
          'read_private_products' => true,
          'delete_products' => true,
          'delete_private_products' => true,
          'delete_published_products' => true,
          'delete_others_products' => true,
          'edit_private_products' => true,
          'edit_published_products' => true,
          'manage_product_terms' => true,
          'edit_product_terms' => true,
          'delete_product_terms' => true,
          'assign_product_terms' => true,
          'edit_shop_order' => true,
          'read_shop_order' => true,
          'delete_shop_order' => true,
          'edit_shop_orders' => true,
          'edit_others_shop_orders' => true,
          'publish_shop_orders' => true,
          'read_private_shop_orders' => true,
          'delete_shop_orders' => true,
          'delete_private_shop_orders' => true,
          'delete_published_shop_orders' => true,
          'delete_others_shop_orders' => true,
          'edit_private_shop_orders' => true,
          'edit_published_shop_orders' => true,
          'manage_shop_order_terms' => true,
          'edit_shop_order_terms' => true,
          'delete_shop_order_terms' => true,
          'assign_shop_order_terms' => true,
          'edit_shop_coupon' => true,
          'read_shop_coupon' => true,
          'delete_shop_coupon' => true,
          'edit_shop_coupons' => true,
          'edit_others_shop_coupons' => true,
          'publish_shop_coupons' => true,
          'read_private_shop_coupons' => true,
          'delete_shop_coupons' => true,
          'delete_private_shop_coupons' => true,
          'delete_published_shop_coupons' => true,
          'delete_others_shop_coupons' => true,
          'edit_private_shop_coupons' => true,
          'edit_published_shop_coupons' => true,
          'manage_shop_coupon_terms' => true,
          'edit_shop_coupon_terms' => true,
          'delete_shop_coupon_terms' => true,
          'assign_shop_coupon_terms' => true,
        ),
      ),
      'bookingpress-customer' => 
      array (
        'name' => 'BookingPress Customer',
        'capabilities' => 
        array (
          'bookingpress-customer' => true,
          'read' => true,
          'level_0' => true,
        ),
      ),
    ),
    'fresh_site' => '0',
    'widget_block' => 
    array (
      2 => 
      array (
        'content' => '<!-- wp:search /-->',
      ),
      3 => 
      array (
        'content' => '<!-- wp:group --><div class="wp-block-group"><!-- wp:heading --><h2>Recent Posts</h2><!-- /wp:heading --><!-- wp:latest-posts /--></div><!-- /wp:group -->',
      ),
      4 => 
      array (
        'content' => '<!-- wp:group --><div class="wp-block-group"><!-- wp:heading --><h2>Recent Comments</h2><!-- /wp:heading --><!-- wp:latest-comments {"displayAvatar":false,"displayDate":false,"displayExcerpt":false} /--></div><!-- /wp:group -->',
      ),
      5 => 
      array (
        'content' => '<!-- wp:group --><div class="wp-block-group"><!-- wp:heading --><h2>Archives</h2><!-- /wp:heading --><!-- wp:archives /--></div><!-- /wp:group -->',
      ),
      6 => 
      array (
        'content' => '<!-- wp:group --><div class="wp-block-group"><!-- wp:heading --><h2>Categories</h2><!-- /wp:heading --><!-- wp:categories /--></div><!-- /wp:group -->',
      ),
      7 => 
      array (
        'content' => '<!-- wp:uagb/image {"block_id":"ccb2cd20","url":"https://websitedemos.net/dental-08/wp-content/uploads/sites/906/2022/10/dental-logo05-free-img.png","id":12,"linkDestination":"none","naturalWidth":195,"naturalHeight":29,"sizeSlug":"full","sizeSlugTablet":"full","sizeSlugMobile":"full"} -->
<div class="wp-block-uagb-image uagb-block-ccb2cd20 wp-block-uagb-image--layout-default wp-block-uagb-image--effect-static wp-block-uagb-image--align-none"><figure class="wp-block-uagb-image__figure"><img src="https://websitedemos.net/dental-08/wp-content/uploads/sites/906/2022/10/dental-logo05-free-img.png" alt="" class="uag-image-12" title="" /></figure></div>
<!-- /wp:uagb/image -->',
      ),
      '_multiwidget' => 1,
      10 => 
      array (
        'content' => '<!-- wp:uagb/image {"block_id":"b696cf87","url":"https://www.d4dk.shop/wp-content/uploads/2024/06/image-1-2.png","urlTablet":"https://www.d4dk.shop/wp-content/uploads/2024/06/image-1-2.png","urlMobile":"https://www.d4dk.shop/wp-content/uploads/2024/06/image-1-2.png","id":654,"linkDestination":"none","title":"image-1-2","naturalWidth":122,"naturalHeight":98,"sizeSlug":"full","sizeSlugTablet":"full","sizeSlugMobile":"full"} -->
<div class="wp-block-uagb-image uagb-block-b696cf87 wp-block-uagb-image--layout-default wp-block-uagb-image--effect-static wp-block-uagb-image--align-none"><figure class="wp-block-uagb-image__figure"><img srcset="https://www.d4dk.shop/wp-content/uploads/2024/06/image-1-2.png ,https://www.d4dk.shop/wp-content/uploads/2024/06/image-1-2.png 780w, https://www.d4dk.shop/wp-content/uploads/2024/06/image-1-2.png 360w" sizes="(max-width: 480px) 150px" src="https://www.d4dk.shop/wp-content/uploads/2024/06/image-1-2.png" alt="" class="uag-image-654" width="122" height="98" title="image-1-2" loading="lazy" role="img"/></figure></div>
<!-- /wp:uagb/image -->',
      ),
    ),
    'sidebars_widgets' => 
    array (
      'wp_inactive_widgets' => 
      array (
      ),
      'sidebar-1' => 
      array (
        0 => 'block-2',
        1 => 'block-3',
        2 => 'block-4',
        3 => 'block-5',
        4 => 'block-6',
        5 => 'search-1',
        6 => 'recent-posts-1',
        7 => 'recent-comments-1',
        8 => 'archives-1',
        9 => 'categories-1',
        10 => 'meta-1',
      ),
      'header-widget' => 
      array (
      ),
      'footer-widget-1' => 
      array (
        0 => 'block-7',
      ),
      'footer-widget-2' => 
      array (
      ),
      'advanced-footer-widget-1' => 
      array (
      ),
      'advanced-footer-widget-2' => 
      array (
      ),
      'advanced-footer-widget-3' => 
      array (
      ),
      'advanced-footer-widget-4' => 
      array (
      ),
      'astra-woo-shop-sidebar' => 
      array (
      ),
      'astra-woo-single-sidebar' => 
      array (
      ),
      'array_version' => 3,
      'footer-widget-4' => 
      array (
        0 => 'block-10',
      ),
    ),
    'widget_pages' => 
    array (
      '_multiwidget' => 1,
    ),
    'widget_calendar' => 
    array (
      '_multiwidget' => 1,
    ),
    'widget_archives' => 
    array (
      1 => 
      array (
        'title' => '',
        'count' => 0,
        'dropdown' => 0,
      ),
      '_multiwidget' => 1,
    ),
    'widget_media_audio' => 
    array (
      '_multiwidget' => 1,
    ),
    'widget_media_image' => 
    array (
      '_multiwidget' => 1,
    ),
    'widget_media_gallery' => 
    array (
      '_multiwidget' => 1,
    ),
    'widget_media_video' => 
    array (
      '_multiwidget' => 1,
    ),
    'widget_meta' => 
    array (
      1 => 
      array (
        'title' => '',
      ),
      '_multiwidget' => 1,
    ),
    'widget_search' => 
    array (
      1 => 
      array (
        'title' => '',
      ),
      '_multiwidget' => 1,
    ),
    'widget_recent-posts' => 
    array (
      1 => 
      array (
        'title' => '',
        'number' => 5,
      ),
      '_multiwidget' => 1,
    ),
    'widget_recent-comments' => 
    array (
      1 => 
      array (
        'title' => '',
        'number' => 5,
      ),
      '_multiwidget' => 1,
    ),
    'widget_tag_cloud' => 
    array (
      '_multiwidget' => 1,
    ),
    'widget_nav_menu' => 
    array (
      '_multiwidget' => 1,
    ),
    'widget_custom_html' => 
    array (
      '_multiwidget' => 1,
    ),
    'action_scheduler_hybrid_store_demarkation' => '4',
    'schema-ActionScheduler_StoreSchema' => '7.0.1719071356',
    'schema-ActionScheduler_LoggerSchema' => '3.0.1719071356',
    'wpforms_version' => '1.8.9.2',
    'wpforms_version_lite' => '1.8.9.2',
    'wpforms_activated' => 
    array (
      'lite' => 1719071357,
    ),
    'wpforms_versions_lite' => 
    array (
      '1.5.9' => 0,
      '1.6.7.2' => 0,
      '1.6.8' => 0,
      '1.7.5' => 0,
      '1.7.5.1' => 0,
      '1.7.7' => 0,
      '1.8.2' => 0,
      '1.8.3' => 0,
      '1.8.4' => 0,
      '1.8.6' => 0,
      '1.8.7' => 0,
      '1.8.9.2' => 1719071357,
    ),
    'widget_wpforms-widget' => 
    array (
      '_multiwidget' => 1,
    ),
    'wpforms_settings' => 
    array (
      'lite-connect-enabled' => false,
      'disable-css' => '2',
      'global-assets' => false,
      'gdpr' => false,
      'modern-markup' => '0',
      'modern-markup-is-set' => true,
    ),
    '__uagb_do_redirect' => '',
    '__uagb_asset_version' => '1719912820',
    'uagb_site_url' => 'd4dk-shop',
    'woocommerce_newly_installed' => 'no',
    'woocommerce_schema_version' => '430',
    'woocommerce_store_address' => '',
    'woocommerce_store_address_2' => '',
    'woocommerce_store_city' => '',
    'woocommerce_default_country' => 'US:CA',
    'woocommerce_store_postcode' => '',
    'woocommerce_allowed_countries' => 'all',
    'woocommerce_all_except_countries' => '',
    'woocommerce_specific_allowed_countries' => '',
    'woocommerce_ship_to_countries' => '',
    'woocommerce_specific_ship_to_countries' => '',
    'woocommerce_default_customer_address' => 'base',
    'woocommerce_calc_taxes' => 'no',
    'woocommerce_enable_coupons' => 'yes',
    'woocommerce_currency' => 'USD',
    'woocommerce_currency_pos' => 'left',
    'woocommerce_price_thousand_sep' => ',',
    'woocommerce_price_decimal_sep' => '.',
    'woocommerce_price_num_decimals' => '2',
    'woocommerce_shop_page_id' => '5',
    'woocommerce_cart_redirect_after_add' => 'no',
    'woocommerce_enable_ajax_add_to_cart' => 'yes',
    'woocommerce_placeholder_image' => '4',
    'woocommerce_weight_unit' => 'kg',
    'woocommerce_dimension_unit' => 'cm',
    'woocommerce_enable_reviews' => 'yes',
    'woocommerce_enable_review_rating' => 'yes',
    'woocommerce_manage_stock' => 'yes',
    'woocommerce_notify_no_stock_amount' => '0',
    'woocommerce_hide_out_of_stock_items' => 'no',
    'woocommerce_stock_format' => '',
    'woocommerce_downloads_add_hash_to_filename' => 'yes',
    'woocommerce_attribute_lookup_enabled' => 'no',
    'woocommerce_attribute_lookup_direct_updates' => 'no',
    'woocommerce_product_match_featured_image_by_sku' => 'no',
    'woocommerce_prices_include_tax' => 'no',
    'woocommerce_tax_based_on' => 'shipping',
    'woocommerce_shipping_tax_class' => 'inherit',
    'woocommerce_tax_round_at_subtotal' => 'no',
    'woocommerce_tax_classes' => '',
    'woocommerce_tax_display_shop' => 'excl',
    'woocommerce_tax_display_cart' => 'excl',
    'woocommerce_price_display_suffix' => '',
    'woocommerce_shipping_cost_requires_address' => 'no',
    'woocommerce_shipping_debug_mode' => 'no',
    'woocommerce_registration_privacy_policy_text' => 'Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our [privacy_policy].',
    'woocommerce_checkout_privacy_policy_text' => 'Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our [privacy_policy].',
    'woocommerce_checkout_pay_endpoint' => 'order-pay',
    'woocommerce_checkout_order_received_endpoint' => 'order-received',
    'woocommerce_myaccount_add_payment_method_endpoint' => 'add-payment-method',
    'woocommerce_myaccount_delete_payment_method_endpoint' => 'delete-payment-method',
    'woocommerce_myaccount_set_default_payment_method_endpoint' => 'set-default-payment-method',
    'woocommerce_myaccount_orders_endpoint' => 'orders',
    'woocommerce_myaccount_view_order_endpoint' => 'view-order',
    'woocommerce_myaccount_downloads_endpoint' => 'downloads',
    'woocommerce_myaccount_edit_account_endpoint' => 'edit-account',
    'woocommerce_myaccount_edit_address_endpoint' => 'edit-address',
    'woocommerce_myaccount_payment_methods_endpoint' => 'payment-methods',
    'woocommerce_myaccount_lost_password_endpoint' => 'lost-password',
    'woocommerce_logout_endpoint' => 'customer-logout',
    'woocommerce_api_enabled' => 'no',
    'woocommerce_custom_orders_table_enabled' => 'yes',
    'woocommerce_analytics_enabled' => 'yes',
    'woocommerce_feature_order_attribution_enabled' => 'yes',
    'woocommerce_feature_product_block_editor_enabled' => 'no',
    'woocommerce_hpos_fts_index_enabled' => 'no',
    'woocommerce_single_image_width' => '600',
    'woocommerce_thumbnail_image_width' => '300',
    'woocommerce_checkout_highlight_required_fields' => 'yes',
    'wc_downloads_approved_directories_mode' => 'enabled',
    'woocommerce_permalinks' => 
    array (
      'product_base' => 'product',
      'category_base' => 'product-category',
      'tag_base' => 'product-tag',
      'attribute_base' => '',
      'use_verbose_page_rules' => false,
    ),
    'current_theme_supports_woocommerce' => 'yes',
    'woocommerce_queue_flush_rewrite_rules' => 'no',
    'default_product_cat' => '15',
    'woocommerce_refund_returns_page_id' => '9',
    'woocommerce_paypal_settings' => 
    array (
      'enabled' => 'no',
      'title' => 'PayPal',
      'description' => 'Pay via PayPal; you can pay with your credit card if you don\'t have a PayPal account.',
      'email' => 'dineshbindal1155@gmail.com',
      'advanced' => '',
      'testmode' => 'no',
      'debug' => 'no',
      'ipn_notification' => 'yes',
      'receiver_email' => 'dineshbindal1155@gmail.com',
      'identity_token' => '',
      'invoice_prefix' => 'WC-',
      'send_shipping' => 'yes',
      'address_override' => 'no',
      'paymentaction' => 'sale',
      'image_url' => '',
      'api_details' => '',
      'api_username' => '',
      'api_password' => '',
      'api_signature' => '',
      'sandbox_api_username' => '',
      'sandbox_api_password' => '',
      'sandbox_api_signature' => '',
      '_should_load' => 'no',
    ),
    'woocommerce_version' => '9.0.1',
    'woocommerce_db_version' => '9.0.1',
    'woocommerce_store_id' => 'e63d7794-9823-46d6-8c1a-ce7e7f8b04b1',
    'woocommerce_admin_install_timestamp' => '1719071386',
    'woocommerce_inbox_variant_assignment' => '3',
    'woocommerce_remote_variant_assignment' => '72',
    'woocommerce_admin_notices' => 
    array (
    ),
    'wc_blocks_version' => '11.8.0-dev',
    'jetpack_connection_active_plugins' => 
    array (
      'woocommerce' => 
      array (
        'name' => 'WooCommerce',
      ),
    ),
    'woocommerce_maxmind_geolocation_settings' => 
    array (
      'database_prefix' => 'rHikLOwRxTFpUYq0kDLEXOLtlmorIzL7',
    ),
    'widget_woocommerce_widget_cart' => 
    array (
      '_multiwidget' => 1,
    ),
    'widget_woocommerce_layered_nav_filters' => 
    array (
      '_multiwidget' => 1,
    ),
    'widget_woocommerce_layered_nav' => 
    array (
      '_multiwidget' => 1,
    ),
    'widget_woocommerce_price_filter' => 
    array (
      '_multiwidget' => 1,
    ),
    'widget_woocommerce_product_categories' => 
    array (
      '_multiwidget' => 1,
    ),
    'widget_woocommerce_product_search' => 
    array (
      '_multiwidget' => 1,
    ),
    'widget_woocommerce_product_tag_cloud' => 
    array (
      '_multiwidget' => 1,
    ),
    'widget_woocommerce_products' => 
    array (
      '_multiwidget' => 1,
    ),
    'widget_woocommerce_recently_viewed_products' => 
    array (
      '_multiwidget' => 1,
    ),
    'widget_woocommerce_top_rated_products' => 
    array (
      '_multiwidget' => 1,
    ),
    'widget_woocommerce_recent_reviews' => 
    array (
      '_multiwidget' => 1,
    ),
    'widget_woocommerce_rating_filter' => 
    array (
      '_multiwidget' => 1,
    ),
    'wc_stripe_wh_monitor_began_at' => '1719071399',
    'wc_stripe_wh_last_success_at' => '0',
    'wc_stripe_wh_last_failure_at' => '0',
    'wc_stripe_wh_last_error' => 'validation_succeeded',
    'wp_mail_smtp_activated' => 
    array (
      'lite' => 1719071424,
    ),
    'aioseo_options_internal' => '{"internal":{"validLicenseKey":null,"lastActiveVersion":"4.6.5","migratedVersion":null,"siteAnalysis":{"connectToken":null,"score":0,"results":"","competitors":[]},"headlineAnalysis":{"headlines":[]},"wizard":null,"category":null,"categoryOther":null,"deprecatedOptions":[],"searchStatistics":{"profile":[],"trustToken":null,"rolling":"last28Days","site":{"verified":false,"lastFetch":0},"sitemap":{"list":[],"ignored":[],"lastFetch":0}}},"integrations":{"semrush":{"accessToken":null,"tokenType":null,"expires":null,"refreshToken":null}},"database":{"installedTables":"{\\"wp_3z8zx9_aioseo_posts\\":[\\"id\\",\\"post_id\\",\\"title\\",\\"description\\",\\"keywords\\",\\"keyphrases\\",\\"page_analysis\\",\\"primary_term\\",\\"canonical_url\\",\\"og_title\\",\\"og_description\\",\\"og_object_type\\",\\"og_image_type\\",\\"og_image_url\\",\\"og_image_width\\",\\"og_image_height\\",\\"og_image_custom_url\\",\\"og_image_custom_fields\\",\\"og_video\\",\\"og_custom_url\\",\\"og_article_section\\",\\"og_article_tags\\",\\"twitter_use_og\\",\\"twitter_card\\",\\"twitter_image_type\\",\\"twitter_image_url\\",\\"twitter_image_custom_url\\",\\"twitter_image_custom_fields\\",\\"twitter_title\\",\\"twitter_description\\",\\"seo_score\\",\\"schema\\",\\"schema_type\\",\\"schema_type_options\\",\\"pillar_content\\",\\"robots_default\\",\\"robots_noindex\\",\\"robots_noarchive\\",\\"robots_nosnippet\\",\\"robots_nofollow\\",\\"robots_noimageindex\\",\\"robots_noodp\\",\\"robots_notranslate\\",\\"robots_max_snippet\\",\\"robots_max_videopreview\\",\\"robots_max_imagepreview\\",\\"images\\",\\"image_scan_date\\",\\"priority\\",\\"frequency\\",\\"videos\\",\\"video_thumbnail\\",\\"video_scan_date\\",\\"local_seo\\",\\"limit_modified_date\\",\\"options\\",\\"created\\",\\"updated\\"],\\"wp_3z8zx9_actionscheduler_actions\\":[],\\"wp_3z8zx9_actionscheduler_groups\\":[],\\"wp_3z8zx9_actionscheduler_logs\\":[],\\"wp_3z8zx9_actionscheduler_claims\\":[],\\"wp_3z8zx9_aioseo_notifications\\":[]}"}}',
    'aioseo_options_internal_lite' => '{"internal":{"activated":1719071437,"firstActivated":1719071437,"installed":0,"connect":{"key":null,"time":0,"network":false,"token":null}}}',
    'aioseo_options_dynamic_localized' => 
    array (
      'searchAppearance_taxonomies_category_title' => '#taxonomy_title #separator_sa #site_title',
      'searchAppearance_taxonomies_category_metaDescription' => '#taxonomy_description',
      'searchAppearance_taxonomies_post_tag_title' => '#taxonomy_title #separator_sa #site_title',
      'searchAppearance_taxonomies_post_tag_metaDescription' => '#taxonomy_description',
      'searchAppearance_taxonomies_product_cat_title' => '#taxonomy_title #separator_sa #site_title',
      'searchAppearance_taxonomies_product_cat_metaDescription' => '#taxonomy_description',
      'searchAppearance_taxonomies_product_tag_title' => '#taxonomy_title #separator_sa #site_title',
      'searchAppearance_taxonomies_product_tag_metaDescription' => '#taxonomy_description',
    ),
    'aioseo_dynamic_settings_backup' => '{}',
    'aioseo_options' => '{"internal":[],"webmasterTools":{"google":null,"bing":null,"yandex":null,"baidu":null,"pinterest":null,"microsoftClarityProjectId":null,"norton":null,"miscellaneousVerification":null},"breadcrumbs":{"separator":"&raquo;","homepageLink":true,"homepageLabel":"Home","breadcrumbPrefix":"","archiveFormat":"Archives for #breadcrumb_archive_post_type_name","searchResultFormat":"Search Results for \'#breadcrumb_search_string\'","errorFormat404":"404 - Page Not Found","showCurrentItem":true,"linkCurrentItem":false,"categoryFullHierarchy":false,"showBlogHome":false},"rssContent":{"before":null,"after":"&lt;p&gt;The post #post_link first appeared on #site_link.&lt;\\/p&gt;"},"advanced":{"truSeo":true,"headlineAnalyzer":true,"seoAnalysis":true,"dashboardWidgets":["seoSetup","seoOverview","seoNews"],"announcements":true,"postTypes":{"all":true,"included":["post","page","product"]},"taxonomies":{"all":true,"included":["category","post_tag","product_cat","product_tag"]},"uninstall":false},"sitemap":{"general":{"enable":true,"filename":"sitemap","indexes":true,"linksPerIndex":1000,"postTypes":{"all":true,"included":["post","page","attachment","product"]},"taxonomies":{"all":true,"included":["category","post_tag","product_cat","product_tag"]},"author":false,"date":false,"additionalPages":{"enable":false,"pages":[]},"advancedSettings":{"enable":false,"excludeImages":false,"excludePosts":[],"excludeTerms":[],"priority":{"homePage":{"priority":"{\\"label\\":\\"default\\",\\"value\\":\\"default\\"}","frequency":"{\\"label\\":\\"default\\",\\"value\\":\\"default\\"}"},"postTypes":{"grouped":true,"priority":"{\\"label\\":\\"default\\",\\"value\\":\\"default\\"}","frequency":"{\\"label\\":\\"default\\",\\"value\\":\\"default\\"}"},"taxonomies":{"grouped":true,"priority":"{\\"label\\":\\"default\\",\\"value\\":\\"default\\"}","frequency":"{\\"label\\":\\"default\\",\\"value\\":\\"default\\"}"},"archive":{"priority":"{\\"label\\":\\"default\\",\\"value\\":\\"default\\"}","frequency":"{\\"label\\":\\"default\\",\\"value\\":\\"default\\"}"},"author":{"priority":"{\\"label\\":\\"default\\",\\"value\\":\\"default\\"}","frequency":"{\\"label\\":\\"default\\",\\"value\\":\\"default\\"}"}}}},"rss":{"enable":true,"linksPerIndex":50,"postTypes":{"all":true,"included":["post","page","product"]}},"html":{"enable":true,"pageUrl":"","postTypes":{"all":true,"included":["post","page","product"]},"taxonomies":{"all":true,"included":["category","post_tag","product_cat","product_tag"]},"sortOrder":"publish_date","sortDirection":"asc","publicationDate":true,"compactArchives":false,"advancedSettings":{"enable":false,"nofollowLinks":false,"excludePosts":[],"excludeTerms":[]}}},"social":{"profiles":{"sameUsername":{"enable":false,"username":null,"included":["facebookPageUrl","twitterUrl","tiktokUrl","pinterestUrl","instagramUrl","youtubeUrl","linkedinUrl"]},"urls":{"facebookPageUrl":null,"twitterUrl":null,"instagramUrl":null,"tiktokUrl":null,"pinterestUrl":null,"youtubeUrl":null,"linkedinUrl":null,"tumblrUrl":null,"yelpPageUrl":null,"soundCloudUrl":null,"wikipediaUrl":null,"myspaceUrl":null,"googlePlacesUrl":null,"wordPressUrl":null},"additionalUrls":null},"facebook":{"general":{"enable":true,"defaultImageSourcePosts":"default","customFieldImagePosts":null,"defaultImagePosts":"","defaultImagePostsWidth":"","defaultImagePostsHeight":"","showAuthor":true,"siteName":"#site_title #separator_sa #tagline"},"homePage":{"image":"","title":"","description":"","imageWidth":"","imageHeight":"","objectType":"website"},"advanced":{"enable":false,"adminId":"","appId":"","authorUrl":"","generateArticleTags":false,"useKeywordsInTags":true,"useCategoriesInTags":true,"usePostTagsInTags":true}},"twitter":{"general":{"enable":true,"useOgData":false,"defaultCardType":"summary_large_image","defaultImageSourcePosts":"default","customFieldImagePosts":null,"defaultImagePosts":"","showAuthor":true,"additionalData":false},"homePage":{"image":"","title":"","description":"","cardType":"summary"}}},"searchAppearance":{"global":{"separator":"&#45;","siteTitle":"#site_title #separator_sa #tagline","metaDescription":"#tagline","keywords":null,"schema":{"websiteName":"#site_title","websiteAlternateName":null,"siteRepresents":"organization","person":null,"organizationName":"#site_title","organizationDescription":"#tagline","organizationLogo":"","personName":null,"personLogo":null,"phone":null,"email":null,"foundingDate":null,"numberOfEmployees":{"isRange":null,"from":null,"to":null,"number":null}}},"advanced":{"globalRobotsMeta":{"default":true,"noindex":false,"nofollow":false,"noindexPaginated":true,"nofollowPaginated":true,"noindexFeed":true,"noarchive":false,"noimageindex":false,"notranslate":false,"nosnippet":false,"noodp":false,"maxSnippet":-1,"maxVideoPreview":-1,"maxImagePreview":"large"},"sitelinks":true,"noIndexEmptyCat":true,"removeStopWords":false,"useKeywords":false,"keywordsLooking":true,"useCategoriesForMetaKeywords":false,"useTagsForMetaKeywords":false,"dynamicallyGenerateKeywords":false,"pagedFormat":"#separator_sa Page #page_number","runShortcodes":false,"crawlCleanup":{"enable":false,"feeds":{"global":true,"globalComments":false,"staticBlogPage":true,"authors":true,"postComments":false,"search":false,"attachments":false,"archives":{"all":false,"included":[]},"taxonomies":{"all":false,"included":["category"]},"atom":false,"rdf":false,"paginated":false}},"blockArgs":{"enable":false,"logsRetention":"{\\"label\\":\\"1 week\\",\\"value\\":\\"week\\"}"}},"archives":{"author":{"show":true,"title":"#author_name #separator_sa #site_title","metaDescription":"#author_bio","advanced":{"robotsMeta":{"default":true,"noindex":false,"nofollow":false,"noarchive":false,"noimageindex":false,"notranslate":false,"nosnippet":false,"noodp":false,"maxSnippet":-1,"maxVideoPreview":-1,"maxImagePreview":"large"},"showDateInGooglePreview":true,"showPostThumbnailInSearch":true,"showMetaBox":true,"keywords":null}},"date":{"show":true,"title":"#archive_date #separator_sa #site_title","metaDescription":"","advanced":{"robotsMeta":{"default":true,"noindex":false,"nofollow":false,"noarchive":false,"noimageindex":false,"notranslate":false,"nosnippet":false,"noodp":false,"maxSnippet":-1,"maxVideoPreview":-1,"maxImagePreview":"large"},"showDateInGooglePreview":true,"showPostThumbnailInSearch":true,"showMetaBox":true,"keywords":null}},"search":{"show":false,"title":"#search_term #separator_sa #site_title","metaDescription":"","advanced":{"robotsMeta":{"default":false,"noindex":true,"nofollow":false,"noarchive":false,"noimageindex":false,"notranslate":false,"nosnippet":false,"noodp":false,"maxSnippet":-1,"maxVideoPreview":-1,"maxImagePreview":"large"},"showDateInGooglePreview":true,"showPostThumbnailInSearch":true,"showMetaBox":true,"keywords":null}}}},"searchStatistics":{"postTypes":{"all":true,"included":["post","page"]}},"tools":{"robots":{"enable":false,"rules":[],"robotsDetected":true},"importExport":{"backup":{"lastTime":null,"data":null}}},"deprecated":{"breadcrumbs":{"enable":true},"searchAppearance":{"global":{"descriptionFormat":null,"schema":{"enableSchemaMarkup":true}},"advanced":{"autogenerateDescriptions":true,"runShortcodesInDescription":true,"useContentForAutogeneratedDescriptions":false,"excludePosts":[],"excludeTerms":[],"noPaginationForCanonical":true}},"sitemap":{"general":{"advancedSettings":{"dynamic":true}}},"tools":{"blocker":{"blockBots":null,"blockReferer":null,"track":null,"custom":{"enable":null,"bots":"Abonti\\naggregator\\nAhrefsBot\\nasterias\\nBDCbot\\nBLEXBot\\nBuiltBotTough\\nBullseye\\nBunnySlippers\\nca-crawler\\nCCBot\\nCegbfeieh\\nCheeseBot\\nCherryPicker\\nCopyRightCheck\\ncosmos\\nCrescent\\ndiscobot\\nDittoSpyder\\nDotBot\\nDownload Ninja\\nEasouSpider\\nEmailCollector\\nEmailSiphon\\nEmailWolf\\nEroCrawler\\nExtractorPro\\nFasterfox\\nFeedBooster\\nFoobot\\nGenieo\\ngrub-client\\nHarvest\\nhloader\\nhttplib\\nHTTrack\\nhumanlinks\\nieautodiscovery\\nInfoNaviRobot\\nIstellaBot\\nJava\\/1.\\nJennyBot\\nk2spider\\nKenjin Spider\\nKeyword Density\\/0.9\\nlarbin\\nLexiBot\\nlibWeb\\nlibwww\\nLinkextractorPro\\nlinko\\nLinkScan\\/8.1a Unix\\nLinkWalker\\nLNSpiderguy\\nlwp-trivial\\nmagpie\\nMata Hari\\nMaxPointCrawler\\nMegaIndex\\nMicrosoft URL Control\\nMIIxpc\\nMippin\\nMissigua Locator\\nMister PiX\\nMJ12bot\\nmoget\\nMSIECrawler\\nNetAnts\\nNICErsPRO\\nNiki-Bot\\nNPBot\\nNutch\\nOffline Explorer\\nOpenfind\\npanscient.com\\nPHP\\/5.{\\nProPowerBot\\/2.14\\nProWebWalker\\nPython-urllib\\nQueryN Metasearch\\nRepoMonkey\\nSISTRIX\\nsitecheck.Internetseer.com\\nSiteSnagger\\nSnapPreviewBot\\nSogou\\nSpankBot\\nspanner\\nspbot\\nSpinn3r\\nsuzuran\\nSzukacz\\/1.4\\nTeleport\\nTelesoft\\nThe Intraformant\\nTheNomad\\nTightTwatBot\\nTitan\\ntoCrawl\\/UrlDispatcher\\nTrue_Robot\\nturingos\\nTurnitinBot\\nUbiCrawler\\nUnisterBot\\nURLy Warning\\nVCI\\nWBSearchBot\\nWeb Downloader\\/6.9\\nWeb Image Collector\\nWebAuto\\nWebBandit\\nWebCopier\\nWebEnhancer\\nWebmasterWorldForumBot\\nWebReaper\\nWebSauger\\nWebsite Quester\\nWebster Pro\\nWebStripper\\nWebZip\\nWotbox\\nwsr-agent\\nWWW-Collector-E\\nXenu\\nZao\\nZeus\\nZyBORG\\ncoccoc\\nIncutio\\nlmspider\\nmemoryBot\\nserf\\nUnknown\\nuptime files","referer":"semalt.com\\nkambasoft.com\\nsavetubevideo.com\\nbuttons-for-website.com\\nsharebutton.net\\nsoundfrost.org\\nsrecorder.com\\nsoftomix.com\\nsoftomix.net\\nmyprintscreen.com\\njoinandplay.me\\nfbfreegifts.com\\nopenmediasoft.com\\nzazagames.org\\nextener.org\\nopenfrost.com\\nopenfrost.net\\ngooglsucks.com\\nbest-seo-offer.com\\nbuttons-for-your-website.com\\nwww.Get-Free-Traffic-Now.com\\nbest-seo-solution.com\\nbuy-cheap-online.info\\nsite3.free-share-buttons.com\\nwebmaster-traffic.com"}}}}}',
    'aioseo_options_lite' => '{"advanced":{"usageTracking":false}}',
    'aioseo_options_dynamic' => '{"sitemap":{"priority":{"postTypes":{"post":{"priority":"{\\"label\\":\\"default\\",\\"value\\":\\"default\\"}","frequency":"{\\"label\\":\\"default\\",\\"value\\":\\"default\\"}"},"page":{"priority":"{\\"label\\":\\"default\\",\\"value\\":\\"default\\"}","frequency":"{\\"label\\":\\"default\\",\\"value\\":\\"default\\"}"},"attachment":{"priority":"{\\"label\\":\\"default\\",\\"value\\":\\"default\\"}","frequency":"{\\"label\\":\\"default\\",\\"value\\":\\"default\\"}"},"product":{"priority":"{\\"label\\":\\"default\\",\\"value\\":\\"default\\"}","frequency":"{\\"label\\":\\"default\\",\\"value\\":\\"default\\"}"}},"taxonomies":{"category":{"priority":"{\\"label\\":\\"default\\",\\"value\\":\\"default\\"}","frequency":"{\\"label\\":\\"default\\",\\"value\\":\\"default\\"}"},"post_tag":{"priority":"{\\"label\\":\\"default\\",\\"value\\":\\"default\\"}","frequency":"{\\"label\\":\\"default\\",\\"value\\":\\"default\\"}"},"product_cat":{"priority":"{\\"label\\":\\"default\\",\\"value\\":\\"default\\"}","frequency":"{\\"label\\":\\"default\\",\\"value\\":\\"default\\"}"},"product_tag":{"priority":"{\\"label\\":\\"default\\",\\"value\\":\\"default\\"}","frequency":"{\\"label\\":\\"default\\",\\"value\\":\\"default\\"}"}}}},"social":{"facebook":{"general":{"postTypes":{"post":{"objectType":"article"},"page":{"objectType":"article"},"attachment":{"objectType":"article"},"product":{"objectType":"article"}}}}},"searchAppearance":{"postTypes":{"post":{"show":true,"advanced":{"robotsMeta":{"default":true,"noindex":false,"nofollow":false,"noarchive":false,"noimageindex":false,"notranslate":false,"nosnippet":false,"noodp":false,"maxSnippet":-1,"maxVideoPreview":-1,"maxImagePreview":"large"},"showDateInGooglePreview":true,"showPostThumbnailInSearch":true,"showMetaBox":true,"bulkEditing":"enabled"},"title":"#post_title #separator_sa #site_title","metaDescription":"#post_excerpt","schemaType":"Article","webPageType":"WebPage","articleType":"BlogPosting","customFields":null},"page":{"show":true,"advanced":{"robotsMeta":{"default":true,"noindex":false,"nofollow":false,"noarchive":false,"noimageindex":false,"notranslate":false,"nosnippet":false,"noodp":false,"maxSnippet":-1,"maxVideoPreview":-1,"maxImagePreview":"large"},"showDateInGooglePreview":true,"showPostThumbnailInSearch":true,"showMetaBox":true,"bulkEditing":"enabled"},"title":"#post_title #separator_sa #site_title","metaDescription":"#post_content","schemaType":"WebPage","webPageType":"WebPage","articleType":"BlogPosting","customFields":null},"attachment":{"show":true,"advanced":{"robotsMeta":{"default":true,"noindex":false,"nofollow":false,"noarchive":false,"noimageindex":false,"notranslate":false,"nosnippet":false,"noodp":false,"maxSnippet":-1,"maxVideoPreview":-1,"maxImagePreview":"large"},"showDateInGooglePreview":true,"showPostThumbnailInSearch":true,"showMetaBox":true,"bulkEditing":"enabled"},"title":"#post_title #separator_sa #site_title","metaDescription":"#attachment_caption","schemaType":"ItemPage","webPageType":"ItemPage","articleType":"BlogPosting","customFields":null,"redirectAttachmentUrls":"attachment"},"product":{"show":true,"advanced":{"robotsMeta":{"default":true,"noindex":false,"nofollow":false,"noarchive":false,"noimageindex":false,"notranslate":false,"nosnippet":false,"noodp":false,"maxSnippet":-1,"maxVideoPreview":-1,"maxImagePreview":"large"},"showDateInGooglePreview":true,"showPostThumbnailInSearch":true,"showMetaBox":true,"bulkEditing":"enabled"},"title":"#post_title #separator_sa #site_title","metaDescription":"#post_excerpt","schemaType":"WebPage","webPageType":"ItemPage","articleType":"BlogPosting","customFields":null}},"taxonomies":{"category":{"show":true,"advanced":{"robotsMeta":{"default":true,"noindex":false,"nofollow":false,"noarchive":false,"noimageindex":false,"notranslate":false,"nosnippet":false,"noodp":false,"maxSnippet":-1,"maxVideoPreview":-1,"maxImagePreview":"large"},"showDateInGooglePreview":true,"showPostThumbnailInSearch":true,"showMetaBox":true},"title":"#taxonomy_title #separator_sa #site_title","metaDescription":"#taxonomy_description"},"post_tag":{"show":true,"advanced":{"robotsMeta":{"default":true,"noindex":false,"nofollow":false,"noarchive":false,"noimageindex":false,"notranslate":false,"nosnippet":false,"noodp":false,"maxSnippet":-1,"maxVideoPreview":-1,"maxImagePreview":"large"},"showDateInGooglePreview":true,"showPostThumbnailInSearch":true,"showMetaBox":true},"title":"#taxonomy_title #separator_sa #site_title","metaDescription":"#taxonomy_description"},"product_cat":{"show":true,"advanced":{"robotsMeta":{"default":true,"noindex":false,"nofollow":false,"noarchive":false,"noimageindex":false,"notranslate":false,"nosnippet":false,"noodp":false,"maxSnippet":-1,"maxVideoPreview":-1,"maxImagePreview":"large"},"showDateInGooglePreview":true,"showPostThumbnailInSearch":true,"showMetaBox":true},"title":"#taxonomy_title #separator_sa #site_title","metaDescription":"#taxonomy_description"},"product_tag":{"show":true,"advanced":{"robotsMeta":{"default":true,"noindex":false,"nofollow":false,"noarchive":false,"noimageindex":false,"notranslate":false,"nosnippet":false,"noodp":false,"maxSnippet":-1,"maxVideoPreview":-1,"maxImagePreview":"large"},"showDateInGooglePreview":true,"showPostThumbnailInSearch":true,"showMetaBox":true},"title":"#taxonomy_title #separator_sa #site_title","metaDescription":"#taxonomy_description"}},"archives":[]}}',
    'ewww_image_optimizer_relative_migration_status' => 'done',
    'ewww_image_optimizer_noauto' => '',
    'ewww_image_optimizer_disable_editor' => '',
    'ewww_image_optimizer_debug' => '',
    'ewww_image_optimizer_metadata_remove' => '1',
    'ewww_image_optimizer_jpg_level' => '10',
    'ewww_image_optimizer_png_level' => '10',
    'ewww_image_optimizer_gif_level' => '10',
    'ewww_image_optimizer_pdf_level' => '0',
    'ewww_image_optimizer_svg_level' => '0',
    'ewww_image_optimizer_jpg_quality' => '',
    'ewww_image_optimizer_webp_quality' => '',
    'ewww_image_optimizer_backup_files' => '',
    'ewww_image_optimizer_resize_existing' => '1',
    'ewww_image_optimizer_exactdn' => '',
    'ewww_image_optimizer_exactdn_plan_id' => '0',
    'exactdn_all_the_things' => '1',
    'exactdn_lossy' => '1',
    'exactdn_exclude' => '',
    'exactdn_prevent_db_queries' => '',
    'exactdn_asset_domains' => '',
    'ewww_image_optimizer_lazy_load' => '',
    'ewww_image_optimizer_add_missing_dims' => '',
    'ewww_image_optimizer_use_siip' => '',
    'ewww_image_optimizer_use_lqip' => '',
    'ewww_image_optimizer_use_dcip' => '',
    'ewww_image_optimizer_ll_exclude' => '',
    'ewww_image_optimizer_ll_all_things' => '',
    'ewww_image_optimizer_disable_pngout' => '1',
    'ewww_image_optimizer_disable_svgcleaner' => '1',
    'ewww_image_optimizer_optipng_level' => '2',
    'ewww_image_optimizer_pngout_level' => '2',
    'ewww_image_optimizer_webp_for_cdn' => '',
    'ewww_image_optimizer_force_gif2webp' => '1',
    'ewww_image_optimizer_picture_webp' => '',
    'ewww_image_optimizer_webp_rewrite_exclude' => '',
    'ewww_image_optimizer_bulk_resume' => '',
    'ewww_image_optimizer_aux_resume' => '',
    'ewww_image_optimizer_version' => '770',
    'recently_activated' => 
    array (
      'wp-super-cache/wp-cache.php' => 1719074988,
    ),
    'recovery_keys' => 
    array (
    ),
    'jetpack_options' => 
    array (
      'last_heartbeat' => 1719856878,
    ),
    '_wpforms_transient_wpforms_htaccess_file' => 
    array (
      'size' => 737,
      'mtime' => 1719073545,
      'ctime' => 1719073545,
    ),
    'wpforms_email_summaries_fetch_info_blocks_last_run' => '1719683319',
    'wpforms_process_forms_locator_status' => 'completed',
    'wpsupercache_gc_time' => '1719074975',
    'action_scheduler_migration_status' => 'complete',
    '_uagb_allow_file_generation' => 'enabled',
    'uagb-version' => '2.13.7',
    'woocommerce_custom_orders_table_created' => 'yes',
    'wpforms_admin_notices' => 
    array (
      'review_request' => 
      array (
        'time' => 1719075966,
        'dismissed' => false,
      ),
    ),
    'finished_updating_comment_type' => '1',
    'wc_stripe_show_style_notice' => 'no',
    'wc_stripe_show_sca_notice' => 'no',
    'wc_stripe_version' => '8.4.0',
    'wc_blocks_db_schema_version' => '260',
    'wp_mail_smtp_migration_version' => '5',
    'wp_mail_smtp_debug_events_db_version' => '1',
    'ast-block-templates-version' => '2.2.3',
    'uag_content_width_set_by' => 'Astra Theme',
    'wp_mail_smtp_review_notice' => 
    array (
      'time' => 1719075970,
      'dismissed' => false,
    ),
    'wpforms_notifications' => 
    array (
      'feed' => 
      array (
      ),
      'events' => 
      array (
        'welcome-message' => 
        array (
          'id' => 'welcome-message',
          'title' => 'Welcome to WPForms!',
          'content' => 'We’re grateful that you chose WPForms for your website! Now that you’ve installed the plugin, you’re less than 5 minutes away from publishing your first form. To make it easy, we’ve got 1800+ form templates to get you started!',
          'btns' => 
          array (
            'main' => 
            array (
              'url' => 'https://www.d4dk.shop/wp-admin/admin.php?page=wpforms-builder',
              'text' => 'Start Building',
            ),
            'alt' => 
            array (
              'url' => 'https://wpforms.com/docs/creating-first-form/?utm_source=WordPress&utm_medium=Event%20Notification&utm_campaign=liteplugin&utm_content=Welcome%20Read%20the%20Guide',
              'text' => 'Read the Guide',
            ),
          ),
          'type' => 
          array (
            0 => 'lite',
            1 => 'basic',
            2 => 'plus',
            3 => 'pro',
            4 => 'agency',
            5 => 'elite',
            6 => 'ultimate',
          ),
          'start' => '2024-06-22 15:49:17',
        ),
        'join-vip-circle' => 
        array (
          'id' => 'join-vip-circle',
          'title' => 'Want to Be a VIP? Join Now!',
          'content' => 'Running a WordPress site can be challenging. But help is just around the corner! Our Facebook group contains tons of tips and help to get your business growing! When you join our VIP Circle, you’ll get instant access to tips, tricks, and answers from a community of loyal WPForms users. Best of all, membership is 100% free!',
          'btns' => 
          array (
            'main' => 
            array (
              'url' => 'https://www.facebook.com/groups/wpformsvip/',
              'text' => 'Join Now',
            ),
          ),
          'start' => '2024-07-22 15:49:17',
        ),
        'survey-reports' => 
        array (
          'id' => 'survey-reports',
          'title' => 'Want to Know What Your Customers Really Think?',
          'content' => 'Nothing beats real feedback from your customers and visitors. That’s why many small businesses love our awesome Surveys and Polls addon. Instantly unlock full survey reporting right in your WordPress dashboard. And don’t forget: building a survey is easy with our pre-made templates, so you could get started within a few minutes!',
          'btns' => 
          array (
            'main' => 
            array (
              'license' => 
              array (
                'lite' => 
                array (
                  'url' => 'https://wpforms.com/lite-upgrade/?utm_source=WordPress&utm_medium=Event%20Notification&utm_campaign=liteplugin&utm_content=Surveys%20and%20Polls%20Upgrade%20Lite&utm_locale=en_US',
                  'text' => 'Upgrade Now',
                ),
                'basic' => 
                array (
                  'url' => 'https://wpforms.com/account/licenses/?utm_source=WordPress&utm_medium=Event%20Notification&utm_campaign=liteplugin&utm_content=Surveys%20and%20Polls%20Upgrade%20Basic',
                  'text' => 'Upgrade Now',
                ),
                'plus' => 
                array (
                  'url' => 'https://wpforms.com/account/licenses/?utm_source=WordPress&utm_medium=Event%20Notification&utm_campaign=liteplugin&utm_content=Surveys%20and%20Polls%20Upgrade%20Basic',
                  'text' => 'Upgrade Now',
                ),
                'pro' => 
                array (
                  'url' => 'https://www.d4dk.shop/wp-admin/admin.php?page=wpforms-addons',
                  'text' => 'Install Now',
                ),
                'elite' => 
                array (
                  'url' => 'https://www.d4dk.shop/wp-admin/admin.php?page=wpforms-addons',
                  'text' => 'Install Now',
                ),
              ),
            ),
            'alt' => 
            array (
              'url' => 'https://wpforms.com/docs/how-to-install-and-use-the-surveys-and-polls-addon/?utm_source=WordPress&utm_medium=Event%20Notification&utm_campaign=liteplugin&utm_content=Surveys%20and%20Polls%20Learn%20More',
              'text' => 'Learn More',
            ),
          ),
          'start' => '2024-08-06 15:49:17',
        ),
        'form-abandonment' => 
        array (
          'id' => 'form-abandonment',
          'title' => 'Get More Leads From Your Forms!',
          'content' => 'Are your forms converting fewer visitors than you hoped? Often, visitors quit forms partway through. That can prevent you from getting all the leads you deserve to capture. With our Form Abandonment addon, you can capture partial entries even if your visitor didn’t hit Submit! From there, it’s easy to follow up with leads and turn them into loyal customers.',
          'btns' => 
          array (
            'main' => 
            array (
              'license' => 
              array (
                'lite' => 
                array (
                  'url' => 'https://wpforms.com/lite-upgrade/?utm_source=WordPress&utm_medium=Event%20Notification&utm_campaign=liteplugin&utm_content=Form%20Abandonment%20Upgrade%20Lite&utm_locale=en_US',
                  'text' => 'Upgrade Now',
                ),
                'basic' => 
                array (
                  'url' => 'https://wpforms.com/account/licenses/?utm_source=WordPress&utm_medium=Event%20Notification&utm_campaign=liteplugin&utm_content=Form%20Abandonment%20Upgrade%20Basic',
                  'text' => 'Upgrade Now',
                ),
                'plus' => 
                array (
                  'url' => 'https://wpforms.com/account/licenses/?utm_source=WordPress&utm_medium=Event%20Notification&utm_campaign=liteplugin&utm_content=Form%20Abandonment%20Upgrade%20Basic',
                  'text' => 'Upgrade Now',
                ),
                'pro' => 
                array (
                  'url' => 'https://www.d4dk.shop/wp-admin/admin.php?page=wpforms-addons',
                  'text' => 'Install Now',
                ),
                'elite' => 
                array (
                  'url' => 'https://www.d4dk.shop/wp-admin/admin.php?page=wpforms-addons',
                  'text' => 'Install Now',
                ),
              ),
            ),
            'alt' => 
            array (
              'url' => 'https://wpforms.com/docs/how-to-install-and-use-form-abandonment-with-wpforms/?utm_source=WordPress&utm_medium=Event%20Notification&utm_campaign=liteplugin&utm_content=Form%20Abandonment%20Learn%20More',
              'text' => 'Learn More',
            ),
          ),
          'start' => '2024-08-21 15:49:17',
        ),
        'ideas' => 
        array (
          'id' => 'ideas',
          'title' => 'What’s Your Dream WPForms Feature?',
          'content' => 'If you could add just one feature to WPForms, what would it be? We want to know! Our team is busy surveying valued customers like you as we plan the year ahead. We’d love to know which features would take your business to the next level! Do you have a second to share your idea with us?',
          'btns' => 
          array (
            'main' => 
            array (
              'url' => 'https://wpforms.com/share-your-idea/',
              'text' => 'Share Your Idea',
            ),
          ),
          'start' => '2024-10-20 15:49:17',
        ),
      ),
      'dismissed' => 
      array (
      ),
      'update' => 1719912803,
    ),
    'can_compress_scripts' => '0',
    'wp_mail_smtp_notifications' => 
    array (
      'update' => 1719870667,
      'feed' => 
      array (
      ),
      'events' => 
      array (
      ),
      'dismissed' => 
      array (
      ),
    ),
    'current_theme' => 'Astra',
    'theme_mods_astra' => 
    array (
      0 => false,
      'nav_menu_locations' => 
      array (
        'primary' => 16,
        'mobile_menu' => 16,
      ),
      'custom_css_post_id' => 13,
      'custom_logo' => '12',
    ),
    'theme_switched' => '',
    'wc_blocks_use_blockified_product_grid_block_as_template' => 'no',
    'astra-settings' => 
    array (
      'blog-single-width' => 'default',
      'blog-single-max-width' => 1200,
      'single-content-images-shadow' => false,
      'single-post-ast-content-layout' => 'default',
      'single-post-sidebar-style' => 'default',
      'ast-dynamic-single-post-elements-gap' => 10,
      'ast-dynamic-single-post-meta-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'ast-dynamic-single-post-meta-font-weight' => '',
      'ast-dynamic-single-post-metadata' => 
      array (
        0 => 'comments',
        1 => 'ast-dynamic-single-post-taxonomy',
        2 => 'author',
      ),
      'section-search-page-title-structure' => 
      array (
        0 => 'section-search-page-title-title',
      ),
      'section-search-page-title-custom-title' => 'Search Results for:',
      'section-search-page-title-found-custom-description' => 'Here are the search results for your search.',
      'section-search-page-title-not-found-custom-description' => 'Sorry, but we could not find anything related to your search terms. Please try again.',
      'section-search-page-title-title-font-weight' => '',
      'section-search-page-title-title-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'ast-search-results-per-page' => 10,
      'section-search-page-title-horizontal-alignment' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'ast-search-live-search' => false,
      'ast-search-live-search-post-types' => 
      array (
        'post' => 1,
        'page' => 1,
      ),
      'blog-post-structure' => 
      array (
        0 => 'image',
        1 => 'title',
        2 => 'title-meta',
        3 => 'excerpt',
        4 => 'read-more',
      ),
      'blog-post-per-page' => 10,
      'blog-hover-effect' => 'none',
      'blog-layout' => 'blog-layout-classic',
      'blog-width' => 'default',
      'blog-meta-date-type' => 'published',
      'blog-meta-date-format' => '',
      'blog-max-width' => 1200,
      'blog-post-content' => 'excerpt',
      'blog-meta' => 
      array (
        0 => 'comments',
        1 => 'category',
        2 => 'author',
      ),
      'post-card-border-radius' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'post-card-featured-overlay' => '',
      'blog-category-style' => 'default',
      'blog-tag-style' => 'default',
      'blog-post-meta-divider-type' => '/',
      'blog-meta-category-style' => 'default',
      'blog-meta-tag-style' => 'default',
      'blog-image-ratio-type' => '',
      'blog-image-ratio-pre-scale' => '16/9',
      'blog-image-custom-scale-width' => 16,
      'blog-image-custom-scale-height' => 9,
      'text-color' => 'var(--ast-global-color-3)',
      'link-color' => 'var(--ast-global-color-3)',
      'theme-color' => 'var(--ast-global-color-1)',
      'link-h-color' => 'var(--ast-global-color-0)',
      'heading-base-color' => 'var(--ast-global-color-2)',
      'border-color' => '#dddddd',
      'footer-bg-obj' => 
      array (
        'background-color' => '',
        'background-image' => '',
        'background-repeat' => 'repeat',
        'background-position' => 'center center',
        'background-size' => 'auto',
        'background-attachment' => 'scroll',
        'background-type' => '',
        'background-media' => '',
        'overlay-type' => '',
        'overlay-color' => '',
        'overlay-gradient' => '',
      ),
      'footer-color' => '',
      'footer-link-color' => '',
      'footer-link-h-color' => '',
      'footer-adv-bg-obj' => 
      array (
        'background-color' => '',
        'background-image' => '',
        'background-repeat' => 'repeat',
        'background-position' => 'center center',
        'background-size' => 'auto',
        'background-attachment' => 'scroll',
        'background-type' => '',
        'background-media' => '',
        'overlay-type' => '',
        'overlay-color' => '',
        'overlay-gradient' => '',
      ),
      'footer-adv-text-color' => '',
      'footer-adv-link-color' => '',
      'footer-adv-link-h-color' => '',
      'footer-adv-wgt-title-color' => '',
      'button-color' => 'var(--ast-global-color-4)',
      'button-h-color' => 'var(--ast-global-color-4)',
      'button-bg-color' => 'var(--ast-global-color-0)',
      'button-bg-h-color' => 'var(--ast-global-color-5)',
      'secondary-button-bg-h-color' => 'var(--ast-global-color-5)',
      'secondary-button-bg-color' => 'var(--ast-global-color-0)',
      'secondary-button-color' => '',
      'secondary-button-h-color' => '',
      'theme-button-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '16',
          'right' => '24',
          'bottom' => '16',
          'left' => '24',
        ),
        'tablet' => 
        array (
          'top' => '16',
          'right' => '24',
          'bottom' => '16',
          'left' => '24',
        ),
        'mobile' => 
        array (
          'top' => '16',
          'right' => 24,
          'bottom' => '16',
          'left' => 24,
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'secondary-theme-button-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'button-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => 4,
          'right' => 4,
          'bottom' => 4,
          'left' => 4,
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'secondary-button-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => 4,
          'right' => 4,
          'bottom' => 4,
          'left' => 4,
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'theme-button-border-group-border-size' => 
      array (
        'top' => '0',
        'right' => '0',
        'bottom' => '0',
        'left' => '0',
      ),
      'secondary-theme-button-border-group-border-size' => 
      array (
        'top' => '',
        'right' => '',
        'bottom' => '',
        'left' => '',
      ),
      'footer-sml-layout' => 'footer-sml-layout-1',
      'footer-sml-section-1' => 'custom',
      'footer-sml-section-1-credit' => 'Copyright &copy; [current_year] [site_title] | Powered by [theme_author]',
      'footer-sml-section-2' => '',
      'footer-sml-section-2-credit' => 'Copyright &copy; [current_year] [site_title] | Powered by [theme_author]',
      'footer-sml-dist-equal-align' => true,
      'footer-sml-divider' => 1,
      'footer-sml-divider-color' => '#7a7a7a',
      'footer-layout-width' => 'content',
      'ast-header-retina-logo' => 'https://www.d4dk.shop/wp-content/uploads/2024/06/image-1.png',
      'ast-header-logo-width' => '',
      'ast-header-responsive-logo-width' => 
      array (
        'desktop' => '85',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-color-site-title' => '',
      'header-color-h-site-title' => '',
      'header-color-site-tagline' => '',
      'display-site-title-responsive' => 
      array (
        'desktop' => false,
        'tablet' => false,
        'mobile' => false,
      ),
      'display-site-tagline-responsive' => 
      array (
        'desktop' => 0,
        'tablet' => 0,
        'mobile' => 0,
      ),
      'logo-title-inline' => false,
      'disable-primary-nav' => false,
      'header-layouts' => 'header-main-layout-1',
      'header-main-rt-section' => 'none',
      'header-display-outside-menu' => false,
      'header-main-rt-section-html' => '<button>Contact Us</button>',
      'header-main-rt-section-button-text' => 'Button',
      'header-main-rt-section-button-link' => 'https://www.wpastra.com',
      'header-main-rt-section-button-link-option' => 
      array (
        'url' => 'https://www.wpastra.com',
        'new_tab' => false,
        'link_rel' => '',
      ),
      'header-main-rt-section-button-style' => 'theme-button',
      'header-main-rt-section-button-text-color' => '',
      'header-main-rt-section-button-back-color' => '',
      'header-main-rt-section-button-text-h-color' => '',
      'header-main-rt-section-button-back-h-color' => '',
      'header-main-rt-section-button-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
      ),
      'header-main-rt-section-button-border-size' => 
      array (
        'top' => '',
        'right' => '',
        'bottom' => '',
        'left' => '',
      ),
      'header-main-sep' => 1,
      'header-main-sep-color' => '',
      'header-main-layout-width' => 'content',
      'primary-submenu-border' => 
      array (
        'top' => '2',
        'right' => '0',
        'bottom' => '0',
        'left' => '0',
      ),
      'primary-submenu-item-border' => false,
      'primary-submenu-b-color' => '',
      'primary-submenu-item-b-color' => '',
      'primary-header-button-font-family' => 'inherit',
      'primary-header-button-font-weight' => 'inherit',
      'primary-header-button-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'primary-header-button-text-transform' => '',
      'primary-header-button-line-height' => 1,
      'primary-header-button-letter-spacing' => '',
      'header-main-menu-label' => '',
      'header-main-menu-align' => 'inline',
      'header-main-submenu-container-animation' => '',
      'mobile-header-breakpoint' => '',
      'mobile-header-logo' => '',
      'mobile-header-logo-width' => '',
      'site-layout' => 'ast-full-width-layout',
      'site-content-width' => 1200,
      'narrow-container-max-width' => 750,
      'site-layout-outside-bg-obj-responsive' => 
      array (
        'desktop' => 
        array (
          'background-color' => 'var(--ast-global-color-4)',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'background-type' => 'color',
          'background-media' => '',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'tablet' => 
        array (
          'background-color' => 'var(--ast-global-color-4)',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'background-type' => 'color',
          'background-media' => '',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'mobile' => 
        array (
          'background-color' => 'var(--ast-global-color-4)',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'background-type' => 'color',
          'background-media' => '',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
      ),
      'content-bg-obj-responsive' => 
      array (
        'desktop' => 
        array (
          'background-color' => 'var(--ast-global-color-4)',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'background-type' => 'color',
          'background-media' => '',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'tablet' => 
        array (
          'background-color' => 'var(--ast-global-color-4)',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'background-type' => 'color',
          'background-media' => '',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'mobile' => 
        array (
          'background-color' => 'var(--ast-global-color-4)',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'background-type' => 'color',
          'background-media' => '',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
      ),
      'wp-blocks-ui' => 'comfort',
      'wp-blocks-global-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'em',
        'tablet-unit' => 'em',
        'mobile-unit' => 'em',
      ),
      'enable-comments-area' => true,
      'comments-box-placement' => '',
      'comment-form-position' => 'below',
      'comments-box-container-width' => '',
      'ast-sub-section-comments-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'em',
        'tablet-unit' => 'em',
        'mobile-unit' => 'em',
      ),
      'ast-sub-section-comments-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => 3,
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'em',
        'tablet-unit' => 'em',
        'mobile-unit' => 'em',
      ),
      'single-page-ast-content-layout' => 'normal-width-container',
      'single-page-content-style' => 'unboxed',
      'single-post-content-style' => 'default',
      'archive-post-ast-content-layout' => 'default',
      'ast-site-content-layout' => 'normal-width-container',
      'site-content-style' => 'unboxed',
      'body-font-family' => '\'Ubuntu\', sans-serif',
      'body-font-variant' => '400',
      'body-font-weight' => '400',
      'font-size-body' => 
      array (
        'desktop' => 16,
        'tablet' => 16,
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'body-font-extras' => 
      array (
        'line-height' => 1.86,
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'headings-font-height-settings' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'para-margin-bottom' => 1,
      'underline-content-links' => true,
      'site-accessibility-toggle' => true,
      'site-accessibility-highlight-type' => 'dotted',
      'site-accessibility-highlight-input-type' => 'disable',
      'body-text-transform' => '',
      'headings-font-family' => '\'Inter\', sans-serif',
      'headings-font-weight' => '600',
      'font-size-site-title' => 
      array (
        'desktop' => 35,
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'font-size-site-tagline' => 
      array (
        'desktop' => 15,
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'single-post-outside-spacing' => 
      array (
        'desktop' => 
        array (
          'top' => '0',
          'right' => '0',
          'bottom' => '0',
          'left' => '0',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'font-size-page-title' => 
      array (
        'desktop' => 26,
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'font-size-post-tax' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'font-size-post-meta' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'font-size-h1' => 
      array (
        'desktop' => 56,
        'tablet' => 45,
        'mobile' => 32,
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'font-size-h2' => 
      array (
        'desktop' => 40,
        'tablet' => 25,
        'mobile' => 24,
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'font-size-h3' => 
      array (
        'desktop' => 24,
        'tablet' => 20,
        'mobile' => 22,
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'font-size-h4' => 
      array (
        'desktop' => 22,
        'tablet' => 22,
        'mobile' => 20,
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'font-size-h5' => 
      array (
        'desktop' => 20,
        'tablet' => 20,
        'mobile' => 18,
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'font-size-h6' => 
      array (
        'desktop' => 18,
        'tablet' => 18,
        'mobile' => 16,
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'site-sidebar-layout' => 'no-sidebar',
      'site-sidebar-width' => 30,
      'single-page-sidebar-layout' => 'no-sidebar',
      'single-post-sidebar-layout' => 'no-sidebar',
      'archive-post-sidebar-layout' => 'default',
      'site-sticky-sidebar' => false,
      'site-sidebar-style' => 'unboxed',
      'single-page-sidebar-style' => 'unboxed',
      'archive-post-sidebar-style' => 'default',
      'footer-adv' => 'disabled',
      'footer-adv-border-width' => '',
      'footer-adv-border-color' => '#7a7a7a',
      'mobile-header-toggle-btn-style' => 'fill',
      'hide-custom-menu-mobile' => 1,
      'mobile-header-toggle-target' => 'icon',
      'enable-scroll-to-id' => false,
      'enable-related-posts' => false,
      'related-posts-title' => 'Related Posts',
      'releted-posts-title-alignment' => 'left',
      'related-posts-total-count' => 2,
      'enable-related-posts-excerpt' => false,
      'related-posts-box-placement' => 'default',
      'related-posts-outside-location' => 'above',
      'related-posts-container-width' => 'fallback',
      'related-posts-excerpt-count' => 25,
      'related-posts-based-on' => 'categories',
      'related-posts-order-by' => 'date',
      'related-posts-order' => 'asc',
      'related-posts-grid-responsive' => 
      array (
        'desktop' => '2-equal',
        'tablet' => '2-equal',
        'mobile' => 'full',
      ),
      'related-posts-structure' => 
      array (
        0 => 'featured-image',
        1 => 'title-meta',
      ),
      'related-posts-tag-style' => 'none',
      'related-posts-category-style' => 'none',
      'related-posts-date-format' => '',
      'related-posts-meta-date-type' => 'published',
      'related-posts-author-avatar-size' => '',
      'related-posts-author-avatar' => false,
      'related-posts-author-prefix-label' => 'By ',
      'related-posts-image-size' => '',
      'related-posts-image-custom-scale-width' => 16,
      'related-posts-image-custom-scale-height' => 9,
      'related-posts-image-ratio-pre-scale' => '16/9',
      'related-posts-image-ratio-type' => '',
      'related-posts-meta-structure' => 
      array (
        0 => 'comments',
        1 => 'category',
        2 => 'author',
      ),
      'related-posts-text-color' => '',
      'related-posts-link-color' => '',
      'related-posts-title-color' => '',
      'related-posts-background-color' => '',
      'related-posts-meta-color' => '',
      'related-posts-link-hover-color' => '',
      'related-posts-meta-link-hover-color' => '',
      'related-posts-section-title-font-family' => 'inherit',
      'related-posts-section-title-font-weight' => 'inherit',
      'related-posts-section-title-text-transform' => '',
      'related-posts-section-title-line-height' => '',
      'related-posts-section-title-font-extras' => 
      array (
        'line-height' => '1.6',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'related-posts-section-title-font-size' => 
      array (
        'desktop' => '30',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'related-posts-title-font-family' => 'inherit',
      'related-posts-title-font-weight' => 'inherit',
      'related-posts-title-text-transform' => '',
      'related-posts-title-line-height' => '1',
      'related-posts-title-font-size' => 
      array (
        'desktop' => '20',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'related-posts-title-font-extras' => 
      array (
        'line-height' => '1',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'related-posts-meta-font-family' => 'inherit',
      'related-posts-meta-font-weight' => 'inherit',
      'related-posts-meta-text-transform' => '',
      'related-posts-meta-line-height' => '',
      'related-posts-meta-font-size' => 
      array (
        'desktop' => '14',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'related-posts-meta-font-extras' => 
      array (
        'line-height' => '1.6',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'related-posts-content-font-family' => 'inherit',
      'related-posts-content-font-weight' => 'inherit',
      'related-posts-content-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'related-posts-content-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'ast-sub-section-related-posts-padding' => 
      array (
        'desktop' => 
        array (
          'top' => 2.5,
          'right' => 2.5,
          'bottom' => 2.5,
          'left' => 2.5,
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'em',
        'tablet-unit' => 'em',
        'mobile-unit' => 'em',
      ),
      'ast-sub-section-related-posts-margin' => 
      array (
        'desktop' => 
        array (
          'top' => 2,
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'em',
        'tablet-unit' => 'em',
        'mobile-unit' => 'em',
      ),
      'transparent-header-logo' => '',
      'transparent-header-retina-logo' => 'https://www.d4dk.shop/wp-content/uploads/2024/06/image-1.png',
      'different-transparent-logo' => 0,
      'different-transparent-retina-logo' => 0,
      'transparent-header-logo-width' => 
      array (
        'desktop' => 150,
        'tablet' => 120,
        'mobile' => 100,
      ),
      'transparent-header-enable' => true,
      'transparent-header-disable-archive' => 1,
      'transparent-header-disable-latest-posts-index' => 1,
      'transparent-header-on-devices' => 'both',
      'transparent-header-main-sep' => 0,
      'transparent-header-main-sep-color' => '',
      'transparent-header-bg-color' => '',
      'transparent-header-color-site-title' => '',
      'transparent-header-color-h-site-title' => '',
      'transparent-menu-bg-color' => '',
      'transparent-menu-color' => '',
      'transparent-menu-h-color' => '',
      'transparent-submenu-bg-color' => '',
      'transparent-submenu-color' => '',
      'transparent-submenu-h-color' => '',
      'transparent-header-logo-color' => '',
      'transparent-header-bg-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'transparent-header-color-site-title-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'transparent-header-color-h-site-title-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'transparent-menu-bg-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'transparent-menu-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'transparent-menu-h-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'transparent-submenu-bg-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'transparent-submenu-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'transparent-submenu-h-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'transparent-content-section-text-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'transparent-content-section-link-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'transparent-content-section-link-h-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'breadcrumb-font-family' => 'inherit',
      'breadcrumb-font-weight' => 'inherit',
      'breadcrumb-text-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'breadcrumb-active-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'breadcrumb-hover-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'breadcrumb-separator-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'breadcrumb-bg-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'breadcrumb-spacing' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'breadcrumb-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'breadcrumb-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'breadcrumb-separator-selector' => '' . "\0" . '03E',
      'breadcrumb-separator' => '' . "\0" . '0bb',
      'scroll-to-top-enable' => false,
      'scroll-to-top-icon-size' => 15,
      'scroll-to-top-icon-position' => 'right',
      'scroll-to-top-on-devices' => 'both',
      'scroll-to-top-icon-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'scroll-to-top-icon-color' => '',
      'scroll-to-top-icon-h-color' => '',
      'scroll-to-top-icon-bg-color' => '',
      'scroll-to-top-icon-h-bg-color' => '',
      'h1-color' => '',
      'h2-color' => '',
      'h3-color' => '',
      'h4-color' => '',
      'h5-color' => '',
      'h6-color' => '',
      'font-family-h1' => 'inherit',
      'font-weight-h1' => 'inherit',
      'font-extras-h1' => 
      array (
        'line-height' => '1.4',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'font-family-h2' => 'inherit',
      'font-weight-h2' => 'inherit',
      'font-extras-h2' => 
      array (
        'line-height' => '1.3',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'font-family-h3' => 'inherit',
      'font-weight-h3' => 'inherit',
      'font-extras-h3' => 
      array (
        'line-height' => '1.3',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'font-family-h4' => 'inherit',
      'font-weight-h4' => 'inherit',
      'font-extras-h4' => 
      array (
        'line-height' => '1.2',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'font-family-h5' => 'inherit',
      'font-weight-h5' => 'inherit',
      'font-extras-h5' => 
      array (
        'line-height' => '1.2',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'font-family-h6' => 'inherit',
      'font-weight-h6' => 'inherit',
      'font-extras-h6' => 
      array (
        'line-height' => '1.25',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'font-weight-button' => '500',
      'secondary-font-weight-button' => '500',
      'font-family-button' => '\'Inter\', sans-serif',
      'secondary-font-family-button' => '\'Inter\', sans-serif',
      'font-size-button' => 
      array (
        'desktop' => 15,
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'secondary-font-size-button' => 
      array (
        'desktop' => 15,
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'font-extras-button' => 
      array (
        'line-height' => 1,
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => 'capitalize',
        'text-decoration' => '',
      ),
      'secondary-font-extras-button' => 
      array (
        'line-height' => 1,
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'header-desktop-items' => 
      array (
        'popup' => 
        array (
          'popup_content' => 
          array (
            0 => 'mobile-menu',
          ),
        ),
        'above' => 
        array (
          'above_left' => 
          array (
          ),
          'above_left_center' => 
          array (
          ),
          'above_center' => 
          array (
          ),
          'above_right_center' => 
          array (
          ),
          'above_right' => 
          array (
          ),
        ),
        'primary' => 
        array (
          'primary_left' => 
          array (
            0 => 'logo',
          ),
          'primary_left_center' => 
          array (
          ),
          'primary_center' => 
          array (
          ),
          'primary_right_center' => 
          array (
          ),
          'primary_right' => 
          array (
            0 => 'menu-1',
            1 => 'button-1',
          ),
        ),
        'below' => 
        array (
          'below_left' => 
          array (
          ),
          'below_left_center' => 
          array (
          ),
          'below_center' => 
          array (
          ),
          'below_right_center' => 
          array (
          ),
          'below_right' => 
          array (
          ),
        ),
        'flag' => true,
      ),
      'header-mobile-items' => 
      array (
        'popup' => 
        array (
          'popup_content' => 
          array (
            0 => 'mobile-menu',
          ),
        ),
        'above' => 
        array (
          'above_left' => 
          array (
          ),
          'above_center' => 
          array (
          ),
          'above_right' => 
          array (
          ),
        ),
        'primary' => 
        array (
          'primary_left' => 
          array (
            0 => 'logo',
          ),
          'primary_center' => 
          array (
          ),
          'primary_right' => 
          array (
            0 => 'mobile-trigger',
          ),
        ),
        'below' => 
        array (
          'below_left' => 
          array (
          ),
          'below_center' => 
          array (
          ),
          'below_right' => 
          array (
          ),
        ),
        'flag' => true,
      ),
      'hb-header-main-layout-width' => 'content',
      'hb-header-height' => 
      array (
        'desktop' => 80,
        'tablet' => '',
        'mobile' => '',
      ),
      'hb-stack' => 
      array (
        'desktop' => 'stack',
        'tablet' => 'stack',
        'mobile' => 'stack',
      ),
      'hb-header-main-sep' => 0,
      'hb-header-main-sep-color' => 'rgba(235,235,235,0)',
      'hb-header-main-menu-align' => 'inline',
      'hb-header-bg-obj-responsive' => 
      array (
        'desktop' => 
        array (
          'background-color' => 'rgba(255,255,255,0)',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'background-type' => 'color',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'tablet' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'mobile' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
      ),
      'hb-header-spacing' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '1.5',
          'right' => '',
          'bottom' => '1.5',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '1',
          'right' => '',
          'bottom' => '1',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'em',
        'mobile-unit' => 'em',
      ),
      'hba-header-layout' => 'above-header-layout-1',
      'hba-header-height' => 
      array (
        'desktop' => 50,
        'tablet' => '',
        'mobile' => '',
      ),
      'hba-stack' => 
      array (
        'desktop' => 'stack',
        'tablet' => 'stack',
        'mobile' => 'stack',
      ),
      'hba-header-separator' => 1,
      'hba-header-bottom-border-color' => '#eaeaea',
      'hba-header-bg-obj-responsive' => 
      array (
        'desktop' => 
        array (
          'background-color' => '#ffffff',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'background-type' => 'color',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'tablet' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'mobile' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
      ),
      'hba-header-text-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'hba-header-link-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'hba-header-link-h-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'hba-header-spacing' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '0',
          'right' => '',
          'bottom' => '0',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '0.5',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'em',
      ),
      'hbb-header-layout' => 'below-header-layout-1',
      'hbb-header-height' => 
      array (
        'desktop' => 60,
        'tablet' => '',
        'mobile' => '',
      ),
      'hbb-stack' => 
      array (
        'desktop' => 'stack',
        'tablet' => 'stack',
        'mobile' => 'stack',
      ),
      'hbb-header-separator' => 1,
      'hbb-header-bottom-border-color' => '#eaeaea',
      'hbb-header-bg-obj-responsive' => 
      array (
        'desktop' => 
        array (
          'background-color' => '#eeeeee',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'tablet' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'mobile' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
      ),
      'hbb-header-spacing' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '1',
          'right' => '',
          'bottom' => '1',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'em',
        'mobile-unit' => 'px',
      ),
      'section-footer-builder-layout-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-footer-builder-layout-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-above-header-builder-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-above-header-builder-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-below-header-builder-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-below-header-builder-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-header-mobile-trigger-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-primary-header-builder-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '1',
          'right' => '',
          'bottom' => '1',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'em',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-primary-header-builder-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'title_tagline-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-header-search-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-account-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-mobile-menu-menu-spacing' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-header-mobile-menu-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-above-footer-builder-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '60',
          'right' => '0',
          'bottom' => '60',
          'left' => '0',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '30',
          'bottom' => '',
          'left' => '30',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-above-footer-builder-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-below-footer-builder-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-footer-copyright-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-footer-menu-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-primary-footer-builder-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-primary-footer-builder-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-header-woo-cart-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-header-woo-cart-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button1-text' => 'Call: 9811050427',
      'header-button1-link-option' => 
      array (
        'url' => '#',
        'new_tab' => '',
        'link_rel' => '',
      ),
      'header-button1-font-family' => 'inherit',
      'header-button1-font-weight' => 'inherit',
      'header-button1-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'header-button1-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button1-text-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button1-back-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button1-text-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button1-back-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button1-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button1-border-size' => 
      array (
        'top' => '',
        'right' => '',
        'bottom' => '',
        'left' => '',
      ),
      'header-button1-border-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button1-border-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button1-border-radius' => '',
      'section-hb-button-1-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-hb-button-1-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'sticky-header-button1-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button1-text' => 'Button',
      'footer-button1-link-option' => 
      array (
        'url' => 'https://www.wpastra.com',
        'new_tab' => false,
        'link_rel' => '',
      ),
      'footer-button1-font-family' => 'inherit',
      'footer-button1-font-weight' => 'inherit',
      'footer-button1-text-transform' => '',
      'footer-button1-line-height' => '',
      'footer-button1-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button1-text-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button1-back-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button1-text-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button1-back-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button1-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button1-border-size' => 
      array (
        'top' => '',
        'right' => '',
        'bottom' => '',
        'left' => '',
      ),
      'footer-button1-border-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button1-border-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button-1-alignment' => 
      array (
        'desktop' => 'center',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'section-fb-button-1-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-fb-button-1-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-html-1' => 'Insert HTML text here.',
      'header-html-1color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-html-1link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-html-1link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'font-size-section-hb-html-1' => 
      array (
        'desktop' => 15,
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'font-weight-section-hb-html-1' => 'inherit',
      'font-family-section-hb-html-1' => 'inherit',
      'font-extras-section-hb-html-1' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'section-hb-html-1-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-html-1' => 'Insert HTML text here.',
      'footer-html-1color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-html-1link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-html-1link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'font-size-section-fb-html-1' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-html-1-alignment' => 
      array (
        'desktop' => 'center',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'font-weight-section-fb-html-1' => 'inherit',
      'font-family-section-fb-html-1' => 'inherit',
      'font-extras-section-fb-html-1' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'section-fb-html-1-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-social-1-space' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-social-1-bg-space' => '',
      'header-social-1-size' => 
      array (
        'desktop' => 18,
        'tablet' => '',
        'mobile' => '',
      ),
      'header-social-1-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-social-1-color' => '',
      'header-social-1-h-color' => '',
      'header-social-1-bg-color' => '',
      'header-social-1-bg-h-color' => '',
      'header-social-1-label-toggle' => false,
      'header-social-1-color-type' => 'custom',
      'header-social-1-brand-hover-toggle' => false,
      'font-size-section-hb-social-icons-1' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-social-icons-1' => 
      array (
        'items' => 
        array (
          0 => 
          array (
            'id' => 'facebook',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#557dbc',
            'background' => 'transparent',
            'icon' => 'facebook',
            'label' => 'Facebook',
          ),
          1 => 
          array (
            'id' => 'twitter',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#7acdee',
            'background' => 'transparent',
            'icon' => 'twitter',
            'label' => 'Twitter',
          ),
          2 => 
          array (
            'id' => 'instagram',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#8a3ab9',
            'background' => 'transparent',
            'icon' => 'instagram',
            'label' => 'Instagram',
          ),
        ),
      ),
      'section-hb-social-icons-1-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-social-1-space' => 
      array (
        'desktop' => 39,
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-social-1-bg-space' => '',
      'footer-social-1-size' => 
      array (
        'desktop' => 23,
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-social-1-radius' => '',
      'footer-social-1-color' => 
      array (
        'desktop' => 'var(--ast-global-color-6)',
      ),
      'footer-social-1-h-color' => '',
      'footer-social-1-bg-color' => '',
      'footer-social-1-bg-h-color' => '',
      'footer-social-1-label-toggle' => false,
      'footer-social-1-color-type' => 'custom',
      'footer-social-1-brand-color' => '',
      'footer-social-1-brand-label-color' => '',
      'footer-social-1-brand-hover-toggle' => false,
      'font-size-section-fb-social-icons-1' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-social-icons-1' => 
      array (
        'items' => 
        array (
          0 => 
          array (
            'id' => 'facebook',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#557dbc',
            'background' => 'transparent',
            'icon' => 'facebook',
            'label' => 'Facebook',
          ),
          1 => 
          array (
            'id' => 'twitter',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#7acdee',
            'background' => 'transparent',
            'icon' => 'twitter',
            'label' => 'Twitter',
          ),
          2 => 
          array (
            'id' => 'instagram',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#8a3ab9',
            'background' => 'transparent',
            'icon' => 'instagram',
            'label' => 'Instagram',
          ),
          3 => 
          array (
            'id' => 'google_reviews',
            'enabled' => true,
            'url' => '',
            'color' => '#dc4e41',
            'background' => 'transparent',
            'icon' => 'google_reviews',
            'label' => 'Google Reviews',
          ),
        ),
        'flag' => true,
      ),
      'footer-social-1-alignment' => 
      array (
        'desktop' => 'right',
        'tablet' => 'right',
        'mobile' => 'center',
      ),
      'section-fb-social-icons-1-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '29',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-widget-1-title-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-1-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-1-link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-1-link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-1-font-family' => 'inherit',
      'header-widget-1-font-weight' => 'inherit',
      'header-widget-1-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-widget-1-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'header-widget-1-content-font-family' => 'inherit',
      'header-widget-1-content-font-weight' => 'inherit',
      'header-widget-1-content-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-widget-1-content-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'sidebar-widgets-header-widget-1-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-widget-1-title-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-1-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-1-link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-1-link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-1-font-family' => 'inherit',
      'footer-widget-1-font-weight' => 'inherit',
      'footer-widget-1-text-transform' => '',
      'footer-widget-1-line-height' => '',
      'footer-widget-1-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-widget-1-content-font-family' => 'inherit',
      'footer-widget-1-content-font-weight' => 'inherit',
      'footer-widget-1-content-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'footer-widget-1-content-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-widget-alignment-1' => 
      array (
        'desktop' => 'left',
        'tablet' => 'left',
        'mobile' => 'center',
      ),
      'sidebar-widgets-footer-widget-1-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu1-bg-color' => '',
      'header-menu1-color' => '',
      'header-menu1-h-bg-color' => '',
      'header-menu1-h-color' => '',
      'header-menu1-a-bg-color' => '',
      'header-menu1-a-color' => '',
      'header-menu1-bg-obj-responsive' => 
      array (
        'desktop' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'tablet' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'mobile' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
      ),
      'header-menu1-color-responsive' => 
      array (
        'desktop' => 'var(--ast-global-color-4)',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu1-h-bg-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu1-h-color-responsive' => 
      array (
        'desktop' => 'var(--ast-global-color-4)',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu1-a-bg-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu1-a-color-responsive' => 
      array (
        'desktop' => 'var(--ast-global-color-4)',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu1-menu-hover-animation' => '',
      'header-menu1-submenu-container-animation' => '',
      'section-hb-menu-1-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu1-menu-spacing' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '1',
          'bottom' => '',
          'left' => '1',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'em',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu1-submenu-item-border' => false,
      'header-menu1-submenu-item-b-size' => '1',
      'header-menu1-submenu-item-b-color' => '#eaeaea',
      'header-menu1-submenu-border-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu1-submenu-top-offset' => '',
      'header-menu1-submenu-width' => '',
      'header-menu1-submenu-border' => 
      array (
        'top' => '0',
        'bottom' => '0',
        'left' => '0',
        'right' => '0',
      ),
      'header-menu1-menu-stack-on-mobile' => true,
      'header-menu1-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu1-font-weight' => 'inherit',
      'header-menu1-font-family' => 'inherit',
      'header-menu1-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'section-hb-divider-1-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-fb-divider-1-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button2-text' => 'Button',
      'header-button2-link-option' => 
      array (
        'url' => 'https://www.wpastra.com',
        'new_tab' => false,
        'link_rel' => '',
      ),
      'header-button2-font-family' => 'inherit',
      'header-button2-font-weight' => 'inherit',
      'header-button2-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'header-button2-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button2-text-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button2-back-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button2-text-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button2-back-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button2-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button2-border-size' => 
      array (
        'top' => '',
        'right' => '',
        'bottom' => '',
        'left' => '',
      ),
      'header-button2-border-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button2-border-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button2-border-radius' => '',
      'section-hb-button-2-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-hb-button-2-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'sticky-header-button2-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button2-text' => 'Button',
      'footer-button2-link-option' => 
      array (
        'url' => 'https://www.wpastra.com',
        'new_tab' => false,
        'link_rel' => '',
      ),
      'footer-button2-font-family' => 'inherit',
      'footer-button2-font-weight' => 'inherit',
      'footer-button2-text-transform' => '',
      'footer-button2-line-height' => '',
      'footer-button2-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button2-text-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button2-back-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button2-text-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button2-back-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button2-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button2-border-size' => 
      array (
        'top' => '',
        'right' => '',
        'bottom' => '',
        'left' => '',
      ),
      'footer-button2-border-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button2-border-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button-2-alignment' => 
      array (
        'desktop' => 'center',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'section-fb-button-2-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-fb-button-2-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-html-2' => 'Insert HTML text here.',
      'header-html-2color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-html-2link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-html-2link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'font-size-section-hb-html-2' => 
      array (
        'desktop' => 15,
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'font-weight-section-hb-html-2' => 'inherit',
      'font-family-section-hb-html-2' => 'inherit',
      'font-extras-section-hb-html-2' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'section-hb-html-2-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-html-2' => 'Insert HTML text here.',
      'footer-html-2color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-html-2link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-html-2link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'font-size-section-fb-html-2' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-html-2-alignment' => 
      array (
        'desktop' => 'center',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'font-weight-section-fb-html-2' => 'inherit',
      'font-family-section-fb-html-2' => 'inherit',
      'font-extras-section-fb-html-2' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'section-fb-html-2-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-social-2-space' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-social-2-bg-space' => '',
      'header-social-2-size' => 
      array (
        'desktop' => 18,
        'tablet' => '',
        'mobile' => '',
      ),
      'header-social-2-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-social-2-color' => '',
      'header-social-2-h-color' => '',
      'header-social-2-bg-color' => '',
      'header-social-2-bg-h-color' => '',
      'header-social-2-label-toggle' => false,
      'header-social-2-color-type' => 'custom',
      'header-social-2-brand-hover-toggle' => false,
      'font-size-section-hb-social-icons-2' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-social-icons-2' => 
      array (
        'items' => 
        array (
          0 => 
          array (
            'id' => 'facebook',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#557dbc',
            'background' => 'transparent',
            'icon' => 'facebook',
            'label' => 'Facebook',
          ),
          1 => 
          array (
            'id' => 'twitter',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#7acdee',
            'background' => 'transparent',
            'icon' => 'twitter',
            'label' => 'Twitter',
          ),
          2 => 
          array (
            'id' => 'instagram',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#8a3ab9',
            'background' => 'transparent',
            'icon' => 'instagram',
            'label' => 'Instagram',
          ),
        ),
      ),
      'section-hb-social-icons-2-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-social-2-space' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-social-2-bg-space' => '',
      'footer-social-2-size' => 
      array (
        'desktop' => 18,
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-social-2-radius' => '',
      'footer-social-2-color' => '',
      'footer-social-2-h-color' => '',
      'footer-social-2-bg-color' => '',
      'footer-social-2-bg-h-color' => '',
      'footer-social-2-label-toggle' => false,
      'footer-social-2-color-type' => 'custom',
      'footer-social-2-brand-color' => '',
      'footer-social-2-brand-label-color' => '',
      'footer-social-2-brand-hover-toggle' => false,
      'font-size-section-fb-social-icons-2' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-social-icons-2' => 
      array (
        'items' => 
        array (
          0 => 
          array (
            'id' => 'facebook',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#557dbc',
            'background' => 'transparent',
            'icon' => 'facebook',
            'label' => 'Facebook',
          ),
          1 => 
          array (
            'id' => 'twitter',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#7acdee',
            'background' => 'transparent',
            'icon' => 'twitter',
            'label' => 'Twitter',
          ),
          2 => 
          array (
            'id' => 'instagram',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#8a3ab9',
            'background' => 'transparent',
            'icon' => 'instagram',
            'label' => 'Instagram',
          ),
        ),
      ),
      'footer-social-2-alignment' => 
      array (
        'desktop' => 'center',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'section-fb-social-icons-2-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-widget-2-title-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-2-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-2-link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-2-link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-2-font-family' => 'inherit',
      'header-widget-2-font-weight' => 'inherit',
      'header-widget-2-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-widget-2-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'header-widget-2-content-font-family' => 'inherit',
      'header-widget-2-content-font-weight' => 'inherit',
      'header-widget-2-content-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-widget-2-content-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'sidebar-widgets-header-widget-2-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-widget-2-title-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-2-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-2-link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-2-link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-2-font-family' => 'inherit',
      'footer-widget-2-font-weight' => 'inherit',
      'footer-widget-2-text-transform' => '',
      'footer-widget-2-line-height' => '',
      'footer-widget-2-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-widget-2-content-font-family' => 'inherit',
      'footer-widget-2-content-font-weight' => 'inherit',
      'footer-widget-2-content-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'footer-widget-2-content-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-widget-alignment-2' => 
      array (
        'desktop' => 'left',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'sidebar-widgets-footer-widget-2-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu2-bg-color' => '',
      'header-menu2-color' => '',
      'header-menu2-h-bg-color' => '',
      'header-menu2-h-color' => '',
      'header-menu2-a-bg-color' => '',
      'header-menu2-a-color' => '',
      'header-menu2-bg-obj-responsive' => 
      array (
        'desktop' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'tablet' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'mobile' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
      ),
      'header-menu2-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu2-h-bg-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu2-h-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu2-a-bg-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu2-a-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu2-menu-hover-animation' => '',
      'header-menu2-submenu-container-animation' => '',
      'section-hb-menu-2-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu2-menu-spacing' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu2-submenu-item-border' => false,
      'header-menu2-submenu-item-b-size' => '1',
      'header-menu2-submenu-item-b-color' => '#eaeaea',
      'header-menu2-submenu-border-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu2-submenu-top-offset' => '',
      'header-menu2-submenu-width' => '',
      'header-menu2-submenu-border' => 
      array (
        'top' => 2,
        'bottom' => 0,
        'left' => 0,
        'right' => 0,
      ),
      'header-menu2-menu-stack-on-mobile' => true,
      'header-menu2-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu2-font-weight' => 'inherit',
      'header-menu2-font-family' => 'inherit',
      'header-menu2-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'section-hb-divider-2-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-fb-divider-2-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button3-text' => 'Button',
      'header-button3-link-option' => 
      array (
        'url' => 'https://www.wpastra.com',
        'new_tab' => false,
        'link_rel' => '',
      ),
      'header-button3-font-family' => 'inherit',
      'header-button3-font-weight' => 'inherit',
      'header-button3-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'header-button3-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button3-text-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button3-back-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button3-text-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button3-back-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button3-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button3-border-size' => 
      array (
        'top' => '',
        'right' => '',
        'bottom' => '',
        'left' => '',
      ),
      'header-button3-border-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button3-border-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button3-border-radius' => '',
      'section-hb-button-3-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-hb-button-3-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'sticky-header-button3-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button3-text' => 'Button',
      'footer-button3-link-option' => 
      array (
        'url' => 'https://www.wpastra.com',
        'new_tab' => false,
        'link_rel' => '',
      ),
      'footer-button3-font-family' => 'inherit',
      'footer-button3-font-weight' => 'inherit',
      'footer-button3-text-transform' => '',
      'footer-button3-line-height' => '',
      'footer-button3-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button3-text-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button3-back-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button3-text-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button3-back-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button3-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button3-border-size' => 
      array (
        'top' => '',
        'right' => '',
        'bottom' => '',
        'left' => '',
      ),
      'footer-button3-border-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button3-border-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button-3-alignment' => 
      array (
        'desktop' => 'center',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'section-fb-button-3-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-fb-button-3-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-html-3' => 'Insert HTML text here.',
      'header-html-3color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-html-3link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-html-3link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'font-size-section-hb-html-3' => 
      array (
        'desktop' => 15,
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'font-weight-section-hb-html-3' => 'inherit',
      'font-family-section-hb-html-3' => 'inherit',
      'font-extras-section-hb-html-3' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'section-hb-html-3-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-html-3' => 'Insert HTML text here.',
      'footer-html-3color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-html-3link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-html-3link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'font-size-section-fb-html-3' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-html-3-alignment' => 
      array (
        'desktop' => 'center',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'font-weight-section-fb-html-3' => 'inherit',
      'font-family-section-fb-html-3' => 'inherit',
      'font-extras-section-fb-html-3' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'section-fb-html-3-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-social-3-space' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-social-3-bg-space' => '',
      'header-social-3-size' => 
      array (
        'desktop' => 18,
        'tablet' => '',
        'mobile' => '',
      ),
      'header-social-3-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-social-3-color' => '',
      'header-social-3-h-color' => '',
      'header-social-3-bg-color' => '',
      'header-social-3-bg-h-color' => '',
      'header-social-3-label-toggle' => false,
      'header-social-3-color-type' => 'custom',
      'header-social-3-brand-hover-toggle' => false,
      'font-size-section-hb-social-icons-3' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-social-icons-3' => 
      array (
        'items' => 
        array (
          0 => 
          array (
            'id' => 'facebook',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#557dbc',
            'background' => 'transparent',
            'icon' => 'facebook',
            'label' => 'Facebook',
          ),
          1 => 
          array (
            'id' => 'twitter',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#7acdee',
            'background' => 'transparent',
            'icon' => 'twitter',
            'label' => 'Twitter',
          ),
          2 => 
          array (
            'id' => 'instagram',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#8a3ab9',
            'background' => 'transparent',
            'icon' => 'instagram',
            'label' => 'Instagram',
          ),
        ),
      ),
      'section-hb-social-icons-3-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-social-3-space' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-social-3-bg-space' => '',
      'footer-social-3-size' => 
      array (
        'desktop' => 18,
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-social-3-radius' => '',
      'footer-social-3-color' => '',
      'footer-social-3-h-color' => '',
      'footer-social-3-bg-color' => '',
      'footer-social-3-bg-h-color' => '',
      'footer-social-3-label-toggle' => false,
      'footer-social-3-color-type' => 'custom',
      'footer-social-3-brand-color' => '',
      'footer-social-3-brand-label-color' => '',
      'footer-social-3-brand-hover-toggle' => false,
      'font-size-section-fb-social-icons-3' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-social-icons-3' => 
      array (
        'items' => 
        array (
          0 => 
          array (
            'id' => 'facebook',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#557dbc',
            'background' => 'transparent',
            'icon' => 'facebook',
            'label' => 'Facebook',
          ),
          1 => 
          array (
            'id' => 'twitter',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#7acdee',
            'background' => 'transparent',
            'icon' => 'twitter',
            'label' => 'Twitter',
          ),
          2 => 
          array (
            'id' => 'instagram',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#8a3ab9',
            'background' => 'transparent',
            'icon' => 'instagram',
            'label' => 'Instagram',
          ),
        ),
      ),
      'footer-social-3-alignment' => 
      array (
        'desktop' => 'center',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'section-fb-social-icons-3-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-widget-3-title-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-3-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-3-link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-3-link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-3-font-family' => 'inherit',
      'header-widget-3-font-weight' => 'inherit',
      'header-widget-3-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-widget-3-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'header-widget-3-content-font-family' => 'inherit',
      'header-widget-3-content-font-weight' => 'inherit',
      'header-widget-3-content-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-widget-3-content-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'sidebar-widgets-header-widget-3-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-widget-3-title-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-3-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-3-link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-3-link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-3-font-family' => 'inherit',
      'footer-widget-3-font-weight' => 'inherit',
      'footer-widget-3-text-transform' => '',
      'footer-widget-3-line-height' => '',
      'footer-widget-3-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-widget-3-content-font-family' => 'inherit',
      'footer-widget-3-content-font-weight' => 'inherit',
      'footer-widget-3-content-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'footer-widget-3-content-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-widget-alignment-3' => 
      array (
        'desktop' => 'left',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'sidebar-widgets-footer-widget-3-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu3-bg-color' => '',
      'header-menu3-color' => '',
      'header-menu3-h-bg-color' => '',
      'header-menu3-h-color' => '',
      'header-menu3-a-bg-color' => '',
      'header-menu3-a-color' => '',
      'header-menu3-bg-obj-responsive' => 
      array (
        'desktop' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'tablet' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'mobile' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
      ),
      'header-menu3-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu3-h-bg-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu3-h-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu3-a-bg-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu3-a-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu3-menu-hover-animation' => '',
      'header-menu3-submenu-container-animation' => '',
      'section-hb-menu-3-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu3-menu-spacing' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu3-submenu-item-border' => false,
      'header-menu3-submenu-item-b-size' => '1',
      'header-menu3-submenu-item-b-color' => '#eaeaea',
      'header-menu3-submenu-border-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu3-submenu-top-offset' => '',
      'header-menu3-submenu-width' => '',
      'header-menu3-submenu-border' => 
      array (
        'top' => 2,
        'bottom' => 0,
        'left' => 0,
        'right' => 0,
      ),
      'header-menu3-menu-stack-on-mobile' => true,
      'header-menu3-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu3-font-weight' => 'inherit',
      'header-menu3-font-family' => 'inherit',
      'header-menu3-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'section-hb-divider-3-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-fb-divider-3-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button4-text' => 'Button',
      'header-button4-link-option' => 
      array (
        'url' => 'https://www.wpastra.com',
        'new_tab' => false,
        'link_rel' => '',
      ),
      'header-button4-font-family' => 'inherit',
      'header-button4-font-weight' => 'inherit',
      'header-button4-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'header-button4-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button4-text-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button4-back-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button4-text-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button4-back-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button4-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button4-border-size' => 
      array (
        'top' => '',
        'right' => '',
        'bottom' => '',
        'left' => '',
      ),
      'header-button4-border-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button4-border-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button4-border-radius' => '',
      'section-hb-button-4-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-hb-button-4-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'sticky-header-button4-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button4-text' => 'Button',
      'footer-button4-link-option' => 
      array (
        'url' => 'https://www.wpastra.com',
        'new_tab' => false,
        'link_rel' => '',
      ),
      'footer-button4-font-family' => 'inherit',
      'footer-button4-font-weight' => 'inherit',
      'footer-button4-text-transform' => '',
      'footer-button4-line-height' => '',
      'footer-button4-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button4-text-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button4-back-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button4-text-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button4-back-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button4-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button4-border-size' => 
      array (
        'top' => '',
        'right' => '',
        'bottom' => '',
        'left' => '',
      ),
      'footer-button4-border-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button4-border-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button-4-alignment' => 
      array (
        'desktop' => 'center',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'section-fb-button-4-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-fb-button-4-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-html-4' => 'Insert HTML text here.',
      'header-html-4color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-html-4link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-html-4link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'font-size-section-hb-html-4' => 
      array (
        'desktop' => 15,
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'font-weight-section-hb-html-4' => 'inherit',
      'font-family-section-hb-html-4' => 'inherit',
      'font-extras-section-hb-html-4' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'section-hb-html-4-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-html-4' => 'Insert HTML text here.',
      'footer-html-4color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-html-4link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-html-4link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'font-size-section-fb-html-4' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-html-4-alignment' => 
      array (
        'desktop' => 'center',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'font-weight-section-fb-html-4' => 'inherit',
      'font-family-section-fb-html-4' => 'inherit',
      'font-extras-section-fb-html-4' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'section-fb-html-4-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-social-4-space' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-social-4-bg-space' => '',
      'header-social-4-size' => 
      array (
        'desktop' => 18,
        'tablet' => '',
        'mobile' => '',
      ),
      'header-social-4-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-social-4-color' => '',
      'header-social-4-h-color' => '',
      'header-social-4-bg-color' => '',
      'header-social-4-bg-h-color' => '',
      'header-social-4-label-toggle' => false,
      'header-social-4-color-type' => 'custom',
      'header-social-4-brand-hover-toggle' => false,
      'font-size-section-hb-social-icons-4' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-social-icons-4' => 
      array (
        'items' => 
        array (
          0 => 
          array (
            'id' => 'facebook',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#557dbc',
            'background' => 'transparent',
            'icon' => 'facebook',
            'label' => 'Facebook',
          ),
          1 => 
          array (
            'id' => 'twitter',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#7acdee',
            'background' => 'transparent',
            'icon' => 'twitter',
            'label' => 'Twitter',
          ),
          2 => 
          array (
            'id' => 'instagram',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#8a3ab9',
            'background' => 'transparent',
            'icon' => 'instagram',
            'label' => 'Instagram',
          ),
        ),
      ),
      'section-hb-social-icons-4-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-social-4-space' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-social-4-bg-space' => '',
      'footer-social-4-size' => 
      array (
        'desktop' => 18,
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-social-4-radius' => '',
      'footer-social-4-color' => '',
      'footer-social-4-h-color' => '',
      'footer-social-4-bg-color' => '',
      'footer-social-4-bg-h-color' => '',
      'footer-social-4-label-toggle' => false,
      'footer-social-4-color-type' => 'custom',
      'footer-social-4-brand-color' => '',
      'footer-social-4-brand-label-color' => '',
      'footer-social-4-brand-hover-toggle' => false,
      'font-size-section-fb-social-icons-4' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-social-icons-4' => 
      array (
        'items' => 
        array (
          0 => 
          array (
            'id' => 'facebook',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#557dbc',
            'background' => 'transparent',
            'icon' => 'facebook',
            'label' => 'Facebook',
          ),
          1 => 
          array (
            'id' => 'twitter',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#7acdee',
            'background' => 'transparent',
            'icon' => 'twitter',
            'label' => 'Twitter',
          ),
          2 => 
          array (
            'id' => 'instagram',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#8a3ab9',
            'background' => 'transparent',
            'icon' => 'instagram',
            'label' => 'Instagram',
          ),
        ),
      ),
      'footer-social-4-alignment' => 
      array (
        'desktop' => 'center',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'section-fb-social-icons-4-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-widget-4-title-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-4-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-4-link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-4-link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-4-font-family' => 'inherit',
      'header-widget-4-font-weight' => 'inherit',
      'header-widget-4-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-widget-4-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'header-widget-4-content-font-family' => 'inherit',
      'header-widget-4-content-font-weight' => 'inherit',
      'header-widget-4-content-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-widget-4-content-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'sidebar-widgets-header-widget-4-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-widget-4-title-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-4-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-4-link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-4-link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-4-font-family' => 'inherit',
      'footer-widget-4-font-weight' => 'inherit',
      'footer-widget-4-text-transform' => '',
      'footer-widget-4-line-height' => '',
      'footer-widget-4-font-size' => 
      array (
        'desktop' => 82,
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-widget-4-content-font-family' => 'inherit',
      'footer-widget-4-content-font-weight' => 'inherit',
      'footer-widget-4-content-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'footer-widget-4-content-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-widget-alignment-4' => 
      array (
        'desktop' => 'left',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'sidebar-widgets-footer-widget-4-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu4-bg-color' => '',
      'header-menu4-color' => '',
      'header-menu4-h-bg-color' => '',
      'header-menu4-h-color' => '',
      'header-menu4-a-bg-color' => '',
      'header-menu4-a-color' => '',
      'header-menu4-bg-obj-responsive' => 
      array (
        'desktop' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'tablet' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'mobile' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
      ),
      'header-menu4-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu4-h-bg-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu4-h-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu4-a-bg-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu4-a-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu4-menu-hover-animation' => '',
      'header-menu4-submenu-container-animation' => '',
      'section-hb-menu-4-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu4-menu-spacing' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu4-submenu-item-border' => false,
      'header-menu4-submenu-item-b-size' => '1',
      'header-menu4-submenu-item-b-color' => '#eaeaea',
      'header-menu4-submenu-border-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu4-submenu-top-offset' => '',
      'header-menu4-submenu-width' => '',
      'header-menu4-submenu-border' => 
      array (
        'top' => 2,
        'bottom' => 0,
        'left' => 0,
        'right' => 0,
      ),
      'header-menu4-menu-stack-on-mobile' => true,
      'header-menu4-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu4-font-weight' => 'inherit',
      'header-menu4-font-family' => 'inherit',
      'header-menu4-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'section-hb-divider-4-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-fb-divider-4-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button5-text' => 'Button',
      'header-button5-link-option' => 
      array (
        'url' => 'https://www.wpastra.com',
        'new_tab' => false,
        'link_rel' => '',
      ),
      'header-button5-font-family' => 'inherit',
      'header-button5-font-weight' => 'inherit',
      'header-button5-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'header-button5-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button5-text-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button5-back-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button5-text-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button5-back-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button5-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button5-border-size' => 
      array (
        'top' => '',
        'right' => '',
        'bottom' => '',
        'left' => '',
      ),
      'header-button5-border-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button5-border-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button5-border-radius' => '',
      'section-hb-button-5-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-hb-button-5-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'sticky-header-button5-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button5-text' => 'Button',
      'footer-button5-link-option' => 
      array (
        'url' => 'https://www.wpastra.com',
        'new_tab' => false,
        'link_rel' => '',
      ),
      'footer-button5-font-family' => 'inherit',
      'footer-button5-font-weight' => 'inherit',
      'footer-button5-text-transform' => '',
      'footer-button5-line-height' => '',
      'footer-button5-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button5-text-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button5-back-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button5-text-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button5-back-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button5-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button5-border-size' => 
      array (
        'top' => '',
        'right' => '',
        'bottom' => '',
        'left' => '',
      ),
      'footer-button5-border-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button5-border-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button-5-alignment' => 
      array (
        'desktop' => 'center',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'section-fb-button-5-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-fb-button-5-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-html-5' => 'Insert HTML text here.',
      'header-html-5color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-html-5link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-html-5link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'font-size-section-hb-html-5' => 
      array (
        'desktop' => 15,
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'font-weight-section-hb-html-5' => 'inherit',
      'font-family-section-hb-html-5' => 'inherit',
      'font-extras-section-hb-html-5' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'section-hb-html-5-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-html-5' => 'Insert HTML text here.',
      'footer-html-5color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-html-5link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-html-5link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'font-size-section-fb-html-5' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-html-5-alignment' => 
      array (
        'desktop' => 'center',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'font-weight-section-fb-html-5' => 'inherit',
      'font-family-section-fb-html-5' => 'inherit',
      'font-extras-section-fb-html-5' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'section-fb-html-5-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-social-5-space' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-social-5-bg-space' => '',
      'header-social-5-size' => 
      array (
        'desktop' => 18,
        'tablet' => '',
        'mobile' => '',
      ),
      'header-social-5-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-social-5-color' => '',
      'header-social-5-h-color' => '',
      'header-social-5-bg-color' => '',
      'header-social-5-bg-h-color' => '',
      'header-social-5-label-toggle' => false,
      'header-social-5-color-type' => 'custom',
      'header-social-5-brand-hover-toggle' => false,
      'font-size-section-hb-social-icons-5' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-social-icons-5' => 
      array (
        'items' => 
        array (
          0 => 
          array (
            'id' => 'facebook',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#557dbc',
            'background' => 'transparent',
            'icon' => 'facebook',
            'label' => 'Facebook',
          ),
          1 => 
          array (
            'id' => 'twitter',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#7acdee',
            'background' => 'transparent',
            'icon' => 'twitter',
            'label' => 'Twitter',
          ),
          2 => 
          array (
            'id' => 'instagram',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#8a3ab9',
            'background' => 'transparent',
            'icon' => 'instagram',
            'label' => 'Instagram',
          ),
        ),
      ),
      'section-hb-social-icons-5-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-social-5-space' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-social-5-bg-space' => '',
      'footer-social-5-size' => 
      array (
        'desktop' => 18,
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-social-5-radius' => '',
      'footer-social-5-color' => '',
      'footer-social-5-h-color' => '',
      'footer-social-5-bg-color' => '',
      'footer-social-5-bg-h-color' => '',
      'footer-social-5-label-toggle' => false,
      'footer-social-5-color-type' => 'custom',
      'footer-social-5-brand-color' => '',
      'footer-social-5-brand-label-color' => '',
      'footer-social-5-brand-hover-toggle' => false,
      'font-size-section-fb-social-icons-5' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-social-icons-5' => 
      array (
        'items' => 
        array (
          0 => 
          array (
            'id' => 'facebook',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#557dbc',
            'background' => 'transparent',
            'icon' => 'facebook',
            'label' => 'Facebook',
          ),
          1 => 
          array (
            'id' => 'twitter',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#7acdee',
            'background' => 'transparent',
            'icon' => 'twitter',
            'label' => 'Twitter',
          ),
          2 => 
          array (
            'id' => 'instagram',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#8a3ab9',
            'background' => 'transparent',
            'icon' => 'instagram',
            'label' => 'Instagram',
          ),
        ),
      ),
      'footer-social-5-alignment' => 
      array (
        'desktop' => 'center',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'section-fb-social-icons-5-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-widget-5-title-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-5-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-5-link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-5-link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-5-font-family' => 'inherit',
      'header-widget-5-font-weight' => 'inherit',
      'header-widget-5-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-widget-5-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'header-widget-5-content-font-family' => 'inherit',
      'header-widget-5-content-font-weight' => 'inherit',
      'header-widget-5-content-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-widget-5-content-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'sidebar-widgets-header-widget-5-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-widget-5-title-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-5-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-5-link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-5-link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-5-font-family' => 'inherit',
      'footer-widget-5-font-weight' => 'inherit',
      'footer-widget-5-text-transform' => '',
      'footer-widget-5-line-height' => '',
      'footer-widget-5-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-widget-5-content-font-family' => 'inherit',
      'footer-widget-5-content-font-weight' => 'inherit',
      'footer-widget-5-content-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'footer-widget-5-content-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-widget-alignment-5' => 
      array (
        'desktop' => 'left',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'sidebar-widgets-footer-widget-5-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu5-bg-color' => '',
      'header-menu5-color' => '',
      'header-menu5-h-bg-color' => '',
      'header-menu5-h-color' => '',
      'header-menu5-a-bg-color' => '',
      'header-menu5-a-color' => '',
      'header-menu5-bg-obj-responsive' => 
      array (
        'desktop' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'tablet' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'mobile' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
      ),
      'header-menu5-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu5-h-bg-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu5-h-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu5-a-bg-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu5-a-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu5-menu-hover-animation' => '',
      'header-menu5-submenu-container-animation' => '',
      'section-hb-menu-5-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu5-menu-spacing' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu5-submenu-item-border' => false,
      'header-menu5-submenu-item-b-size' => '1',
      'header-menu5-submenu-item-b-color' => '#eaeaea',
      'header-menu5-submenu-border-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu5-submenu-top-offset' => '',
      'header-menu5-submenu-width' => '',
      'header-menu5-submenu-border' => 
      array (
        'top' => 2,
        'bottom' => 0,
        'left' => 0,
        'right' => 0,
      ),
      'header-menu5-menu-stack-on-mobile' => true,
      'header-menu5-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu5-font-weight' => 'inherit',
      'header-menu5-font-family' => 'inherit',
      'header-menu5-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'section-hb-divider-5-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-fb-divider-5-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button6-text' => 'Button',
      'header-button6-link-option' => 
      array (
        'url' => 'https://www.wpastra.com',
        'new_tab' => false,
        'link_rel' => '',
      ),
      'header-button6-font-family' => 'inherit',
      'header-button6-font-weight' => 'inherit',
      'header-button6-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'header-button6-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button6-text-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button6-back-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button6-text-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button6-back-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button6-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button6-border-size' => 
      array (
        'top' => '',
        'right' => '',
        'bottom' => '',
        'left' => '',
      ),
      'header-button6-border-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button6-border-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button6-border-radius' => '',
      'section-hb-button-6-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-hb-button-6-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'sticky-header-button6-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button6-text' => 'Button',
      'footer-button6-link-option' => 
      array (
        'url' => 'https://www.wpastra.com',
        'new_tab' => false,
        'link_rel' => '',
      ),
      'footer-button6-font-family' => 'inherit',
      'footer-button6-font-weight' => 'inherit',
      'footer-button6-text-transform' => '',
      'footer-button6-line-height' => '',
      'footer-button6-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button6-text-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button6-back-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button6-text-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button6-back-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button6-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button6-border-size' => 
      array (
        'top' => '',
        'right' => '',
        'bottom' => '',
        'left' => '',
      ),
      'footer-button6-border-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button6-border-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button-6-alignment' => 
      array (
        'desktop' => 'center',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'section-fb-button-6-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-fb-button-6-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-html-6' => 'Insert HTML text here.',
      'header-html-6color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-html-6link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-html-6link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'font-size-section-hb-html-6' => 
      array (
        'desktop' => 15,
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'font-weight-section-hb-html-6' => 'inherit',
      'font-family-section-hb-html-6' => 'inherit',
      'font-extras-section-hb-html-6' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'section-hb-html-6-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-html-6' => 'Insert HTML text here.',
      'footer-html-6color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-html-6link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-html-6link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'font-size-section-fb-html-6' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-html-6-alignment' => 
      array (
        'desktop' => 'center',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'font-weight-section-fb-html-6' => 'inherit',
      'font-family-section-fb-html-6' => 'inherit',
      'font-extras-section-fb-html-6' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'section-fb-html-6-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-social-6-space' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-social-6-bg-space' => '',
      'header-social-6-size' => 
      array (
        'desktop' => 18,
        'tablet' => '',
        'mobile' => '',
      ),
      'header-social-6-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-social-6-color' => '',
      'header-social-6-h-color' => '',
      'header-social-6-bg-color' => '',
      'header-social-6-bg-h-color' => '',
      'header-social-6-label-toggle' => false,
      'header-social-6-color-type' => 'custom',
      'header-social-6-brand-hover-toggle' => false,
      'font-size-section-hb-social-icons-6' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-social-icons-6' => 
      array (
        'items' => 
        array (
          0 => 
          array (
            'id' => 'facebook',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#557dbc',
            'background' => 'transparent',
            'icon' => 'facebook',
            'label' => 'Facebook',
          ),
          1 => 
          array (
            'id' => 'twitter',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#7acdee',
            'background' => 'transparent',
            'icon' => 'twitter',
            'label' => 'Twitter',
          ),
          2 => 
          array (
            'id' => 'instagram',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#8a3ab9',
            'background' => 'transparent',
            'icon' => 'instagram',
            'label' => 'Instagram',
          ),
        ),
      ),
      'section-hb-social-icons-6-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-social-6-space' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-social-6-bg-space' => '',
      'footer-social-6-size' => 
      array (
        'desktop' => 18,
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-social-6-radius' => '',
      'footer-social-6-color' => '',
      'footer-social-6-h-color' => '',
      'footer-social-6-bg-color' => '',
      'footer-social-6-bg-h-color' => '',
      'footer-social-6-label-toggle' => false,
      'footer-social-6-color-type' => 'custom',
      'footer-social-6-brand-color' => '',
      'footer-social-6-brand-label-color' => '',
      'footer-social-6-brand-hover-toggle' => false,
      'font-size-section-fb-social-icons-6' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-social-icons-6' => 
      array (
        'items' => 
        array (
          0 => 
          array (
            'id' => 'facebook',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#557dbc',
            'background' => 'transparent',
            'icon' => 'facebook',
            'label' => 'Facebook',
          ),
          1 => 
          array (
            'id' => 'twitter',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#7acdee',
            'background' => 'transparent',
            'icon' => 'twitter',
            'label' => 'Twitter',
          ),
          2 => 
          array (
            'id' => 'instagram',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#8a3ab9',
            'background' => 'transparent',
            'icon' => 'instagram',
            'label' => 'Instagram',
          ),
        ),
      ),
      'footer-social-6-alignment' => 
      array (
        'desktop' => 'center',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'section-fb-social-icons-6-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-widget-6-title-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-6-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-6-link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-6-link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-6-font-family' => 'inherit',
      'header-widget-6-font-weight' => 'inherit',
      'header-widget-6-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-widget-6-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'header-widget-6-content-font-family' => 'inherit',
      'header-widget-6-content-font-weight' => 'inherit',
      'header-widget-6-content-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-widget-6-content-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'sidebar-widgets-header-widget-6-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-widget-6-title-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-6-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-6-link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-6-link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-6-font-family' => 'inherit',
      'footer-widget-6-font-weight' => 'inherit',
      'footer-widget-6-text-transform' => '',
      'footer-widget-6-line-height' => '',
      'footer-widget-6-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-widget-6-content-font-family' => 'inherit',
      'footer-widget-6-content-font-weight' => 'inherit',
      'footer-widget-6-content-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'footer-widget-6-content-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-widget-alignment-6' => 
      array (
        'desktop' => 'left',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'sidebar-widgets-footer-widget-6-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu6-bg-color' => '',
      'header-menu6-color' => '',
      'header-menu6-h-bg-color' => '',
      'header-menu6-h-color' => '',
      'header-menu6-a-bg-color' => '',
      'header-menu6-a-color' => '',
      'header-menu6-bg-obj-responsive' => 
      array (
        'desktop' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'tablet' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'mobile' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
      ),
      'header-menu6-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu6-h-bg-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu6-h-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu6-a-bg-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu6-a-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu6-menu-hover-animation' => '',
      'header-menu6-submenu-container-animation' => '',
      'section-hb-menu-6-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu6-menu-spacing' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu6-submenu-item-border' => false,
      'header-menu6-submenu-item-b-size' => '1',
      'header-menu6-submenu-item-b-color' => '#eaeaea',
      'header-menu6-submenu-border-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu6-submenu-top-offset' => '',
      'header-menu6-submenu-width' => '',
      'header-menu6-submenu-border' => 
      array (
        'top' => 2,
        'bottom' => 0,
        'left' => 0,
        'right' => 0,
      ),
      'header-menu6-menu-stack-on-mobile' => true,
      'header-menu6-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu6-font-weight' => 'inherit',
      'header-menu6-font-family' => 'inherit',
      'header-menu6-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'section-hb-divider-6-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-fb-divider-6-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button7-text' => 'Button',
      'header-button7-link-option' => 
      array (
        'url' => 'https://www.wpastra.com',
        'new_tab' => false,
        'link_rel' => '',
      ),
      'header-button7-font-family' => 'inherit',
      'header-button7-font-weight' => 'inherit',
      'header-button7-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'header-button7-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button7-text-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button7-back-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button7-text-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button7-back-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button7-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button7-border-size' => 
      array (
        'top' => '',
        'right' => '',
        'bottom' => '',
        'left' => '',
      ),
      'header-button7-border-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button7-border-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button7-border-radius' => '',
      'section-hb-button-7-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-hb-button-7-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'sticky-header-button7-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button7-text' => 'Button',
      'footer-button7-link-option' => 
      array (
        'url' => 'https://www.wpastra.com',
        'new_tab' => false,
        'link_rel' => '',
      ),
      'footer-button7-font-family' => 'inherit',
      'footer-button7-font-weight' => 'inherit',
      'footer-button7-text-transform' => '',
      'footer-button7-line-height' => '',
      'footer-button7-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button7-text-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button7-back-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button7-text-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button7-back-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button7-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button7-border-size' => 
      array (
        'top' => '',
        'right' => '',
        'bottom' => '',
        'left' => '',
      ),
      'footer-button7-border-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button7-border-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button-7-alignment' => 
      array (
        'desktop' => 'center',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'section-fb-button-7-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-fb-button-7-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-html-7' => 'Insert HTML text here.',
      'header-html-7color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-html-7link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-html-7link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'font-size-section-hb-html-7' => 
      array (
        'desktop' => 15,
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'font-weight-section-hb-html-7' => 'inherit',
      'font-family-section-hb-html-7' => 'inherit',
      'font-extras-section-hb-html-7' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'section-hb-html-7-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-html-7' => 'Insert HTML text here.',
      'footer-html-7color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-html-7link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-html-7link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'font-size-section-fb-html-7' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-html-7-alignment' => 
      array (
        'desktop' => 'center',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'font-weight-section-fb-html-7' => 'inherit',
      'font-family-section-fb-html-7' => 'inherit',
      'font-extras-section-fb-html-7' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'section-fb-html-7-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-social-7-space' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-social-7-bg-space' => '',
      'header-social-7-size' => 
      array (
        'desktop' => 18,
        'tablet' => '',
        'mobile' => '',
      ),
      'header-social-7-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-social-7-color' => '',
      'header-social-7-h-color' => '',
      'header-social-7-bg-color' => '',
      'header-social-7-bg-h-color' => '',
      'header-social-7-label-toggle' => false,
      'header-social-7-color-type' => 'custom',
      'header-social-7-brand-hover-toggle' => false,
      'font-size-section-hb-social-icons-7' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-social-icons-7' => 
      array (
        'items' => 
        array (
          0 => 
          array (
            'id' => 'facebook',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#557dbc',
            'background' => 'transparent',
            'icon' => 'facebook',
            'label' => 'Facebook',
          ),
          1 => 
          array (
            'id' => 'twitter',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#7acdee',
            'background' => 'transparent',
            'icon' => 'twitter',
            'label' => 'Twitter',
          ),
          2 => 
          array (
            'id' => 'instagram',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#8a3ab9',
            'background' => 'transparent',
            'icon' => 'instagram',
            'label' => 'Instagram',
          ),
        ),
      ),
      'section-hb-social-icons-7-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-social-7-space' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-social-7-bg-space' => '',
      'footer-social-7-size' => 
      array (
        'desktop' => 18,
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-social-7-radius' => '',
      'footer-social-7-color' => '',
      'footer-social-7-h-color' => '',
      'footer-social-7-bg-color' => '',
      'footer-social-7-bg-h-color' => '',
      'footer-social-7-label-toggle' => false,
      'footer-social-7-color-type' => 'custom',
      'footer-social-7-brand-color' => '',
      'footer-social-7-brand-label-color' => '',
      'footer-social-7-brand-hover-toggle' => false,
      'font-size-section-fb-social-icons-7' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-social-icons-7' => 
      array (
        'items' => 
        array (
          0 => 
          array (
            'id' => 'facebook',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#557dbc',
            'background' => 'transparent',
            'icon' => 'facebook',
            'label' => 'Facebook',
          ),
          1 => 
          array (
            'id' => 'twitter',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#7acdee',
            'background' => 'transparent',
            'icon' => 'twitter',
            'label' => 'Twitter',
          ),
          2 => 
          array (
            'id' => 'instagram',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#8a3ab9',
            'background' => 'transparent',
            'icon' => 'instagram',
            'label' => 'Instagram',
          ),
        ),
      ),
      'footer-social-7-alignment' => 
      array (
        'desktop' => 'center',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'section-fb-social-icons-7-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-widget-7-title-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-7-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-7-link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-7-link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-7-font-family' => 'inherit',
      'header-widget-7-font-weight' => 'inherit',
      'header-widget-7-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-widget-7-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'header-widget-7-content-font-family' => 'inherit',
      'header-widget-7-content-font-weight' => 'inherit',
      'header-widget-7-content-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-widget-7-content-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'sidebar-widgets-header-widget-7-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-widget-7-title-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-7-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-7-link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-7-link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-7-font-family' => 'inherit',
      'footer-widget-7-font-weight' => 'inherit',
      'footer-widget-7-text-transform' => '',
      'footer-widget-7-line-height' => '',
      'footer-widget-7-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-widget-7-content-font-family' => 'inherit',
      'footer-widget-7-content-font-weight' => 'inherit',
      'footer-widget-7-content-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'footer-widget-7-content-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-widget-alignment-7' => 
      array (
        'desktop' => 'left',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'sidebar-widgets-footer-widget-7-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu7-bg-color' => '',
      'header-menu7-color' => '',
      'header-menu7-h-bg-color' => '',
      'header-menu7-h-color' => '',
      'header-menu7-a-bg-color' => '',
      'header-menu7-a-color' => '',
      'header-menu7-bg-obj-responsive' => 
      array (
        'desktop' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'tablet' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'mobile' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
      ),
      'header-menu7-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu7-h-bg-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu7-h-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu7-a-bg-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu7-a-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu7-menu-hover-animation' => '',
      'header-menu7-submenu-container-animation' => '',
      'section-hb-menu-7-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu7-menu-spacing' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu7-submenu-item-border' => false,
      'header-menu7-submenu-item-b-size' => '1',
      'header-menu7-submenu-item-b-color' => '#eaeaea',
      'header-menu7-submenu-border-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu7-submenu-top-offset' => '',
      'header-menu7-submenu-width' => '',
      'header-menu7-submenu-border' => 
      array (
        'top' => 2,
        'bottom' => 0,
        'left' => 0,
        'right' => 0,
      ),
      'header-menu7-menu-stack-on-mobile' => true,
      'header-menu7-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu7-font-weight' => 'inherit',
      'header-menu7-font-family' => 'inherit',
      'header-menu7-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'section-hb-divider-7-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-fb-divider-7-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button8-text' => 'Button',
      'header-button8-link-option' => 
      array (
        'url' => 'https://www.wpastra.com',
        'new_tab' => false,
        'link_rel' => '',
      ),
      'header-button8-font-family' => 'inherit',
      'header-button8-font-weight' => 'inherit',
      'header-button8-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'header-button8-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button8-text-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button8-back-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button8-text-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button8-back-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button8-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button8-border-size' => 
      array (
        'top' => '',
        'right' => '',
        'bottom' => '',
        'left' => '',
      ),
      'header-button8-border-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button8-border-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button8-border-radius' => '',
      'section-hb-button-8-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-hb-button-8-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'sticky-header-button8-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button8-text' => 'Button',
      'footer-button8-link-option' => 
      array (
        'url' => 'https://www.wpastra.com',
        'new_tab' => false,
        'link_rel' => '',
      ),
      'footer-button8-font-family' => 'inherit',
      'footer-button8-font-weight' => 'inherit',
      'footer-button8-text-transform' => '',
      'footer-button8-line-height' => '',
      'footer-button8-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button8-text-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button8-back-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button8-text-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button8-back-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button8-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button8-border-size' => 
      array (
        'top' => '',
        'right' => '',
        'bottom' => '',
        'left' => '',
      ),
      'footer-button8-border-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button8-border-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button-8-alignment' => 
      array (
        'desktop' => 'center',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'section-fb-button-8-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-fb-button-8-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-html-8' => 'Insert HTML text here.',
      'header-html-8color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-html-8link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-html-8link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'font-size-section-hb-html-8' => 
      array (
        'desktop' => 15,
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'font-weight-section-hb-html-8' => 'inherit',
      'font-family-section-hb-html-8' => 'inherit',
      'font-extras-section-hb-html-8' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'section-hb-html-8-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-html-8' => 'Insert HTML text here.',
      'footer-html-8color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-html-8link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-html-8link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'font-size-section-fb-html-8' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-html-8-alignment' => 
      array (
        'desktop' => 'center',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'font-weight-section-fb-html-8' => 'inherit',
      'font-family-section-fb-html-8' => 'inherit',
      'font-extras-section-fb-html-8' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'section-fb-html-8-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-social-8-space' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-social-8-bg-space' => '',
      'header-social-8-size' => 
      array (
        'desktop' => 18,
        'tablet' => '',
        'mobile' => '',
      ),
      'header-social-8-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-social-8-color' => '',
      'header-social-8-h-color' => '',
      'header-social-8-bg-color' => '',
      'header-social-8-bg-h-color' => '',
      'header-social-8-label-toggle' => false,
      'header-social-8-color-type' => 'custom',
      'header-social-8-brand-hover-toggle' => false,
      'font-size-section-hb-social-icons-8' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-social-icons-8' => 
      array (
        'items' => 
        array (
          0 => 
          array (
            'id' => 'facebook',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#557dbc',
            'background' => 'transparent',
            'icon' => 'facebook',
            'label' => 'Facebook',
          ),
          1 => 
          array (
            'id' => 'twitter',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#7acdee',
            'background' => 'transparent',
            'icon' => 'twitter',
            'label' => 'Twitter',
          ),
          2 => 
          array (
            'id' => 'instagram',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#8a3ab9',
            'background' => 'transparent',
            'icon' => 'instagram',
            'label' => 'Instagram',
          ),
        ),
      ),
      'section-hb-social-icons-8-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-social-8-space' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-social-8-bg-space' => '',
      'footer-social-8-size' => 
      array (
        'desktop' => 18,
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-social-8-radius' => '',
      'footer-social-8-color' => '',
      'footer-social-8-h-color' => '',
      'footer-social-8-bg-color' => '',
      'footer-social-8-bg-h-color' => '',
      'footer-social-8-label-toggle' => false,
      'footer-social-8-color-type' => 'custom',
      'footer-social-8-brand-color' => '',
      'footer-social-8-brand-label-color' => '',
      'footer-social-8-brand-hover-toggle' => false,
      'font-size-section-fb-social-icons-8' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-social-icons-8' => 
      array (
        'items' => 
        array (
          0 => 
          array (
            'id' => 'facebook',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#557dbc',
            'background' => 'transparent',
            'icon' => 'facebook',
            'label' => 'Facebook',
          ),
          1 => 
          array (
            'id' => 'twitter',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#7acdee',
            'background' => 'transparent',
            'icon' => 'twitter',
            'label' => 'Twitter',
          ),
          2 => 
          array (
            'id' => 'instagram',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#8a3ab9',
            'background' => 'transparent',
            'icon' => 'instagram',
            'label' => 'Instagram',
          ),
        ),
      ),
      'footer-social-8-alignment' => 
      array (
        'desktop' => 'center',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'section-fb-social-icons-8-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-widget-8-title-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-8-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-8-link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-8-link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-8-font-family' => 'inherit',
      'header-widget-8-font-weight' => 'inherit',
      'header-widget-8-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-widget-8-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'header-widget-8-content-font-family' => 'inherit',
      'header-widget-8-content-font-weight' => 'inherit',
      'header-widget-8-content-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-widget-8-content-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'sidebar-widgets-header-widget-8-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-widget-8-title-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-8-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-8-link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-8-link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-8-font-family' => 'inherit',
      'footer-widget-8-font-weight' => 'inherit',
      'footer-widget-8-text-transform' => '',
      'footer-widget-8-line-height' => '',
      'footer-widget-8-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-widget-8-content-font-family' => 'inherit',
      'footer-widget-8-content-font-weight' => 'inherit',
      'footer-widget-8-content-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'footer-widget-8-content-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-widget-alignment-8' => 
      array (
        'desktop' => 'left',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'sidebar-widgets-footer-widget-8-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu8-bg-color' => '',
      'header-menu8-color' => '',
      'header-menu8-h-bg-color' => '',
      'header-menu8-h-color' => '',
      'header-menu8-a-bg-color' => '',
      'header-menu8-a-color' => '',
      'header-menu8-bg-obj-responsive' => 
      array (
        'desktop' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'tablet' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'mobile' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
      ),
      'header-menu8-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu8-h-bg-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu8-h-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu8-a-bg-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu8-a-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu8-menu-hover-animation' => '',
      'header-menu8-submenu-container-animation' => '',
      'section-hb-menu-8-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu8-menu-spacing' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu8-submenu-item-border' => false,
      'header-menu8-submenu-item-b-size' => '1',
      'header-menu8-submenu-item-b-color' => '#eaeaea',
      'header-menu8-submenu-border-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu8-submenu-top-offset' => '',
      'header-menu8-submenu-width' => '',
      'header-menu8-submenu-border' => 
      array (
        'top' => 2,
        'bottom' => 0,
        'left' => 0,
        'right' => 0,
      ),
      'header-menu8-menu-stack-on-mobile' => true,
      'header-menu8-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu8-font-weight' => 'inherit',
      'header-menu8-font-family' => 'inherit',
      'header-menu8-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'section-hb-divider-8-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-fb-divider-8-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button9-text' => 'Button',
      'header-button9-link-option' => 
      array (
        'url' => 'https://www.wpastra.com',
        'new_tab' => false,
        'link_rel' => '',
      ),
      'header-button9-font-family' => 'inherit',
      'header-button9-font-weight' => 'inherit',
      'header-button9-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'header-button9-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button9-text-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button9-back-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button9-text-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button9-back-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button9-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button9-border-size' => 
      array (
        'top' => '',
        'right' => '',
        'bottom' => '',
        'left' => '',
      ),
      'header-button9-border-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button9-border-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button9-border-radius' => '',
      'section-hb-button-9-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-hb-button-9-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'sticky-header-button9-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button9-text' => 'Button',
      'footer-button9-link-option' => 
      array (
        'url' => 'https://www.wpastra.com',
        'new_tab' => false,
        'link_rel' => '',
      ),
      'footer-button9-font-family' => 'inherit',
      'footer-button9-font-weight' => 'inherit',
      'footer-button9-text-transform' => '',
      'footer-button9-line-height' => '',
      'footer-button9-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button9-text-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button9-back-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button9-text-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button9-back-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button9-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button9-border-size' => 
      array (
        'top' => '',
        'right' => '',
        'bottom' => '',
        'left' => '',
      ),
      'footer-button9-border-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button9-border-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button-9-alignment' => 
      array (
        'desktop' => 'center',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'section-fb-button-9-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-fb-button-9-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-html-9' => 'Insert HTML text here.',
      'header-html-9color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-html-9link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-html-9link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'font-size-section-hb-html-9' => 
      array (
        'desktop' => 15,
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'font-weight-section-hb-html-9' => 'inherit',
      'font-family-section-hb-html-9' => 'inherit',
      'font-extras-section-hb-html-9' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'section-hb-html-9-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-html-9' => 'Insert HTML text here.',
      'footer-html-9color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-html-9link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-html-9link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'font-size-section-fb-html-9' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-html-9-alignment' => 
      array (
        'desktop' => 'center',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'font-weight-section-fb-html-9' => 'inherit',
      'font-family-section-fb-html-9' => 'inherit',
      'font-extras-section-fb-html-9' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'section-fb-html-9-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-social-9-space' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-social-9-bg-space' => '',
      'header-social-9-size' => 
      array (
        'desktop' => 18,
        'tablet' => '',
        'mobile' => '',
      ),
      'header-social-9-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-social-9-color' => '',
      'header-social-9-h-color' => '',
      'header-social-9-bg-color' => '',
      'header-social-9-bg-h-color' => '',
      'header-social-9-label-toggle' => false,
      'header-social-9-color-type' => 'custom',
      'header-social-9-brand-hover-toggle' => false,
      'font-size-section-hb-social-icons-9' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-social-icons-9' => 
      array (
        'items' => 
        array (
          0 => 
          array (
            'id' => 'facebook',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#557dbc',
            'background' => 'transparent',
            'icon' => 'facebook',
            'label' => 'Facebook',
          ),
          1 => 
          array (
            'id' => 'twitter',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#7acdee',
            'background' => 'transparent',
            'icon' => 'twitter',
            'label' => 'Twitter',
          ),
          2 => 
          array (
            'id' => 'instagram',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#8a3ab9',
            'background' => 'transparent',
            'icon' => 'instagram',
            'label' => 'Instagram',
          ),
        ),
      ),
      'section-hb-social-icons-9-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-social-9-space' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-social-9-bg-space' => '',
      'footer-social-9-size' => 
      array (
        'desktop' => 18,
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-social-9-radius' => '',
      'footer-social-9-color' => '',
      'footer-social-9-h-color' => '',
      'footer-social-9-bg-color' => '',
      'footer-social-9-bg-h-color' => '',
      'footer-social-9-label-toggle' => false,
      'footer-social-9-color-type' => 'custom',
      'footer-social-9-brand-color' => '',
      'footer-social-9-brand-label-color' => '',
      'footer-social-9-brand-hover-toggle' => false,
      'font-size-section-fb-social-icons-9' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-social-icons-9' => 
      array (
        'items' => 
        array (
          0 => 
          array (
            'id' => 'facebook',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#557dbc',
            'background' => 'transparent',
            'icon' => 'facebook',
            'label' => 'Facebook',
          ),
          1 => 
          array (
            'id' => 'twitter',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#7acdee',
            'background' => 'transparent',
            'icon' => 'twitter',
            'label' => 'Twitter',
          ),
          2 => 
          array (
            'id' => 'instagram',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#8a3ab9',
            'background' => 'transparent',
            'icon' => 'instagram',
            'label' => 'Instagram',
          ),
        ),
      ),
      'footer-social-9-alignment' => 
      array (
        'desktop' => 'center',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'section-fb-social-icons-9-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-widget-9-title-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-9-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-9-link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-9-link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-9-font-family' => 'inherit',
      'header-widget-9-font-weight' => 'inherit',
      'header-widget-9-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-widget-9-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'header-widget-9-content-font-family' => 'inherit',
      'header-widget-9-content-font-weight' => 'inherit',
      'header-widget-9-content-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-widget-9-content-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'sidebar-widgets-header-widget-9-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-widget-9-title-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-9-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-9-link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-9-link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-9-font-family' => 'inherit',
      'footer-widget-9-font-weight' => 'inherit',
      'footer-widget-9-text-transform' => '',
      'footer-widget-9-line-height' => '',
      'footer-widget-9-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-widget-9-content-font-family' => 'inherit',
      'footer-widget-9-content-font-weight' => 'inherit',
      'footer-widget-9-content-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'footer-widget-9-content-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-widget-alignment-9' => 
      array (
        'desktop' => 'left',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'sidebar-widgets-footer-widget-9-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu9-bg-color' => '',
      'header-menu9-color' => '',
      'header-menu9-h-bg-color' => '',
      'header-menu9-h-color' => '',
      'header-menu9-a-bg-color' => '',
      'header-menu9-a-color' => '',
      'header-menu9-bg-obj-responsive' => 
      array (
        'desktop' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'tablet' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'mobile' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
      ),
      'header-menu9-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu9-h-bg-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu9-h-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu9-a-bg-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu9-a-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu9-menu-hover-animation' => '',
      'header-menu9-submenu-container-animation' => '',
      'section-hb-menu-9-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu9-menu-spacing' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu9-submenu-item-border' => false,
      'header-menu9-submenu-item-b-size' => '1',
      'header-menu9-submenu-item-b-color' => '#eaeaea',
      'header-menu9-submenu-border-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu9-submenu-top-offset' => '',
      'header-menu9-submenu-width' => '',
      'header-menu9-submenu-border' => 
      array (
        'top' => 2,
        'bottom' => 0,
        'left' => 0,
        'right' => 0,
      ),
      'header-menu9-menu-stack-on-mobile' => true,
      'header-menu9-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu9-font-weight' => 'inherit',
      'header-menu9-font-family' => 'inherit',
      'header-menu9-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'section-hb-divider-9-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-fb-divider-9-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button10-text' => 'Button',
      'header-button10-link-option' => 
      array (
        'url' => 'https://www.wpastra.com',
        'new_tab' => false,
        'link_rel' => '',
      ),
      'header-button10-font-family' => 'inherit',
      'header-button10-font-weight' => 'inherit',
      'header-button10-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'header-button10-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button10-text-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button10-back-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button10-text-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button10-back-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button10-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button10-border-size' => 
      array (
        'top' => '',
        'right' => '',
        'bottom' => '',
        'left' => '',
      ),
      'header-button10-border-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-button10-border-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-button10-border-radius' => '',
      'section-hb-button-10-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-hb-button-10-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'sticky-header-button10-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button10-text' => 'Button',
      'footer-button10-link-option' => 
      array (
        'url' => 'https://www.wpastra.com',
        'new_tab' => false,
        'link_rel' => '',
      ),
      'footer-button10-font-family' => 'inherit',
      'footer-button10-font-weight' => 'inherit',
      'footer-button10-text-transform' => '',
      'footer-button10-line-height' => '',
      'footer-button10-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button10-text-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button10-back-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button10-text-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button10-back-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button10-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button10-border-size' => 
      array (
        'top' => '',
        'right' => '',
        'bottom' => '',
        'left' => '',
      ),
      'footer-button10-border-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-button10-border-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-button-10-alignment' => 
      array (
        'desktop' => 'center',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'section-fb-button-10-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-fb-button-10-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-html-10' => 'Insert HTML text here.',
      'header-html-10color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-html-10link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-html-10link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'font-size-section-hb-html-10' => 
      array (
        'desktop' => 15,
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'font-weight-section-hb-html-10' => 'inherit',
      'font-family-section-hb-html-10' => 'inherit',
      'font-extras-section-hb-html-10' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'section-hb-html-10-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-html-10' => 'Insert HTML text here.',
      'footer-html-10color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-html-10link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-html-10link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'font-size-section-fb-html-10' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-html-10-alignment' => 
      array (
        'desktop' => 'center',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'font-weight-section-fb-html-10' => 'inherit',
      'font-family-section-fb-html-10' => 'inherit',
      'font-extras-section-fb-html-10' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'section-fb-html-10-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-social-10-space' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-social-10-bg-space' => '',
      'header-social-10-size' => 
      array (
        'desktop' => 18,
        'tablet' => '',
        'mobile' => '',
      ),
      'header-social-10-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-social-10-color' => '',
      'header-social-10-h-color' => '',
      'header-social-10-bg-color' => '',
      'header-social-10-bg-h-color' => '',
      'header-social-10-label-toggle' => false,
      'header-social-10-color-type' => 'custom',
      'header-social-10-brand-hover-toggle' => false,
      'font-size-section-hb-social-icons-10' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-social-icons-10' => 
      array (
        'items' => 
        array (
          0 => 
          array (
            'id' => 'facebook',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#557dbc',
            'background' => 'transparent',
            'icon' => 'facebook',
            'label' => 'Facebook',
          ),
          1 => 
          array (
            'id' => 'twitter',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#7acdee',
            'background' => 'transparent',
            'icon' => 'twitter',
            'label' => 'Twitter',
          ),
          2 => 
          array (
            'id' => 'instagram',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#8a3ab9',
            'background' => 'transparent',
            'icon' => 'instagram',
            'label' => 'Instagram',
          ),
        ),
      ),
      'section-hb-social-icons-10-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-social-10-space' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-social-10-bg-space' => '',
      'footer-social-10-size' => 
      array (
        'desktop' => 18,
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-social-10-radius' => '',
      'footer-social-10-color' => '',
      'footer-social-10-h-color' => '',
      'footer-social-10-bg-color' => '',
      'footer-social-10-bg-h-color' => '',
      'footer-social-10-label-toggle' => false,
      'footer-social-10-color-type' => 'custom',
      'footer-social-10-brand-color' => '',
      'footer-social-10-brand-label-color' => '',
      'footer-social-10-brand-hover-toggle' => false,
      'font-size-section-fb-social-icons-10' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-social-icons-10' => 
      array (
        'items' => 
        array (
          0 => 
          array (
            'id' => 'facebook',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#557dbc',
            'background' => 'transparent',
            'icon' => 'facebook',
            'label' => 'Facebook',
          ),
          1 => 
          array (
            'id' => 'twitter',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#7acdee',
            'background' => 'transparent',
            'icon' => 'twitter',
            'label' => 'Twitter',
          ),
          2 => 
          array (
            'id' => 'instagram',
            'enabled' => true,
            'source' => 'icon',
            'url' => '',
            'color' => '#8a3ab9',
            'background' => 'transparent',
            'icon' => 'instagram',
            'label' => 'Instagram',
          ),
        ),
      ),
      'footer-social-10-alignment' => 
      array (
        'desktop' => 'center',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'section-fb-social-icons-10-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-widget-10-title-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-10-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-10-link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-10-link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-widget-10-font-family' => 'inherit',
      'header-widget-10-font-weight' => 'inherit',
      'header-widget-10-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-widget-10-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'header-widget-10-content-font-family' => 'inherit',
      'header-widget-10-content-font-weight' => 'inherit',
      'header-widget-10-content-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-widget-10-content-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'sidebar-widgets-header-widget-10-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-widget-10-title-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-10-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-10-link-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-10-link-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-widget-10-font-family' => 'inherit',
      'footer-widget-10-font-weight' => 'inherit',
      'footer-widget-10-text-transform' => '',
      'footer-widget-10-line-height' => '',
      'footer-widget-10-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-widget-10-content-font-family' => 'inherit',
      'footer-widget-10-content-font-weight' => 'inherit',
      'footer-widget-10-content-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'footer-widget-10-content-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-widget-alignment-10' => 
      array (
        'desktop' => 'left',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'sidebar-widgets-footer-widget-10-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu10-bg-color' => '',
      'header-menu10-color' => '',
      'header-menu10-h-bg-color' => '',
      'header-menu10-h-color' => '',
      'header-menu10-a-bg-color' => '',
      'header-menu10-a-color' => '',
      'header-menu10-bg-obj-responsive' => 
      array (
        'desktop' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'tablet' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'mobile' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
      ),
      'header-menu10-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu10-h-bg-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu10-h-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu10-a-bg-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu10-a-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-menu10-menu-hover-animation' => '',
      'header-menu10-submenu-container-animation' => '',
      'section-hb-menu-10-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu10-menu-spacing' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu10-submenu-item-border' => false,
      'header-menu10-submenu-item-b-size' => '1',
      'header-menu10-submenu-item-b-color' => '#eaeaea',
      'header-menu10-submenu-border-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu10-submenu-top-offset' => '',
      'header-menu10-submenu-width' => '',
      'header-menu10-submenu-border' => 
      array (
        'top' => 2,
        'bottom' => 0,
        'left' => 0,
        'right' => 0,
      ),
      'header-menu10-menu-stack-on-mobile' => true,
      'header-menu10-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-menu10-font-weight' => 'inherit',
      'header-menu10-font-family' => 'inherit',
      'header-menu10-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'section-hb-divider-10-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'section-fb-divider-10-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'sticky-header-on-devices' => 'desktop',
      'sticky-header-style' => 'none',
      'footer-desktop-items' => 
      array (
        'above' => 
        array (
          'above_1' => 
          array (
            0 => 'widget-4',
          ),
          'above_2' => 
          array (
            0 => 'social-icons-1',
          ),
          'above_3' => 
          array (
          ),
          'above_4' => 
          array (
          ),
          'above_5' => 
          array (
          ),
          'above_6' => 
          array (
          ),
        ),
        'primary' => 
        array (
          'primary_1' => 
          array (
          ),
          'primary_2' => 
          array (
          ),
          'primary_3' => 
          array (
          ),
          'primary_4' => 
          array (
          ),
          'primary_5' => 
          array (
          ),
          'primary_6' => 
          array (
          ),
        ),
        'below' => 
        array (
          'below_1' => 
          array (
            0 => 'copyright',
          ),
          'below_2' => 
          array (
          ),
          'below_3' => 
          array (
          ),
          'below_4' => 
          array (
          ),
          'below_5' => 
          array (
          ),
          'below_6' => 
          array (
          ),
        ),
        'popup' => 
        array (
          'popup_content' => 
          array (
          ),
        ),
        'flag' => false,
      ),
      'hba-footer-height' => 30,
      'hba-footer-column' => '2',
      'hba-footer-layout' => 
      array (
        'desktop' => '2-equal',
        'tablet' => '2-equal',
        'mobile' => 'full',
      ),
      'hba-footer-bg-obj-responsive' => 
      array (
        'desktop' => 
        array (
          'background-color' => 'var(--ast-global-color-2)',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'background-type' => 'color',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'tablet' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'mobile' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
      ),
      'hbb-footer-bg-obj-responsive' => 
      array (
        'desktop' => 
        array (
          'background-color' => 'var(--ast-global-color-2)',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'background-type' => 'color',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'tablet' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'mobile' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
      ),
      'hb-footer-bg-obj-responsive' => 
      array (
        'desktop' => 
        array (
          'background-color' => '#f9f9f9',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'tablet' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'mobile' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
      ),
      'hbb-footer-top-border-color' => 'rgba(255,255,255,0.08)',
      'hbb-footer-separator' => 1,
      'section-header-builder-layout-margin' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'hbb-footer-height' => 80,
      'hbb-footer-column' => '1',
      'hbb-footer-layout' => 
      array (
        'desktop' => 'full',
        'tablet' => 'full',
        'mobile' => 'full',
      ),
      'hba-footer-layout-width' => 'content',
      'hb-footer-layout-width' => 'content',
      'hbb-footer-layout-width' => 'content',
      'hba-footer-vertical-alignment' => 'flex-start',
      'hb-footer-vertical-alignment' => 'flex-start',
      'hbb-footer-vertical-alignment' => 'center',
      'footer-bg-obj-responsive' => 
      array (
        'desktop' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'tablet' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'mobile' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
      ),
      'hb-footer-column' => '3',
      'hb-footer-separator' => 1,
      'hb-footer-bottom-border-color' => '#e6e6e6',
      'hb-footer-layout' => 
      array (
        'desktop' => '3-equal',
        'tablet' => '3-equal',
        'mobile' => 'full',
      ),
      'hb-footer-main-sep' => 1,
      'hb-footer-main-sep-color' => '#e6e6e6',
      'footer-copyright-editor' => 'Copyright [copyright] [current_year] [site_title] | Powered by SAAOL',
      'footer-copyright-color' => 'var(--ast-global-color-4)',
      'line-height-section-footer-copyright' => 2,
      'footer-copyright-alignment' => 
      array (
        'desktop' => 'center',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'font-size-section-footer-copyright' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'font-weight-section-footer-copyright' => 'inherit',
      'font-family-section-footer-copyright' => 'inherit',
      'font-extras-section-footer-copyright' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'footer-menu-alignment' => 
      array (
        'desktop' => 'center',
        'tablet' => 'center',
        'mobile' => 'center',
      ),
      'section-below-footer-builder-padding' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '30',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-search-icon-space' => 
      array (
        'desktop' => 18,
        'tablet' => 18,
        'mobile' => 18,
      ),
      'header-search-icon-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-search-width' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'live-search' => false,
      'live-search-post-types' => 
      array (
        'post' => 1,
        'page' => 1,
      ),
      'transparent-header-social-icons-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'transparent-header-social-icons-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'transparent-header-social-icons-bg-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'transparent-header-social-icons-bg-h-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'transparent-header-html-text-color' => '',
      'transparent-header-html-link-color' => '',
      'transparent-header-html-link-h-color' => '',
      'transparent-header-widget-title-color' => '',
      'transparent-header-widget-content-color' => '',
      'transparent-header-widget-link-color' => '',
      'transparent-header-widget-link-h-color' => '',
      'transparent-header-button-text-color' => '',
      'transparent-header-button-text-h-color' => '',
      'transparent-header-button-bg-color' => '',
      'transparent-header-button-bg-h-color' => '',
      'off-canvas-layout' => 'side-panel',
      'off-canvas-slide' => 'right',
      'header-builder-menu-toggle-target' => 'icon',
      'header-offcanvas-content-alignment' => 'flex-start',
      'off-canvas-background' => 
      array (
        'background-color' => '#ffffff',
        'background-image' => '',
        'background-repeat' => 'repeat',
        'background-position' => 'center center',
        'background-size' => 'auto',
        'background-attachment' => 'scroll',
        'overlay-type' => '',
        'overlay-color' => '',
        'overlay-gradient' => '',
      ),
      'off-canvas-close-color' => '#3a3a3a',
      'mobile-header-type' => 'dropdown',
      'off-canvas-inner-spacing' => '',
      'footer-menu-layout' => 
      array (
        'desktop' => 'horizontal',
        'tablet' => 'vertical',
        'mobile' => 'vertical',
      ),
      'footer-menu-bg-obj-responsive' => 
      array (
        'desktop' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'tablet' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'mobile' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
      ),
      'footer-menu-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-menu-h-bg-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-menu-h-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-menu-a-bg-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-menu-a-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'footer-menu-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'footer-menu-font-weight' => 'inherit',
      'footer-menu-font-family' => 'inherit',
      'footer-menu-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'footer-main-menu-spacing' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '0',
          'right' => '20',
          'bottom' => '0',
          'left' => '20',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-trigger-icon' => 'menu',
      'mobile-header-toggle-icon-size' => 20,
      'mobile-header-toggle-btn-border-size' => 
      array (
        'top' => 1,
        'right' => 1,
        'bottom' => 1,
        'left' => 1,
      ),
      'mobile-header-toggle-border-radius' => 2,
      'mobile-header-toggle-border-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'mobile-header-label-font-family' => 'inherit',
      'mobile-header-label-font-weight' => 'inherit',
      'mobile-header-label-text-transform' => '',
      'mobile-header-label-line-height' => '',
      'mobile-header-label-font-size' => '',
      'global-color-palette' => 
      array (
        'palette' => 
        array (
          0 => '#387dff',
          1 => '#f7faff',
          2 => '#1a1a1a',
          3 => '#5a5a5a',
          4 => '#ffffff',
          5 => '#1e6dff',
          6 => '#ffffff',
          7 => '#1a1a1a',
          8 => '#ffffff',
        ),
        'flag' => true,
      ),
      'header-logo-color' => '',
      'header-mobile-menu-bg-color' => '',
      'header-mobile-menu-color' => '',
      'header-mobile-menu-h-bg-color' => '',
      'header-mobile-menu-h-color' => '',
      'header-mobile-menu-a-bg-color' => '',
      'header-mobile-menu-a-color' => '',
      'header-mobile-menu-bg-obj-responsive' => 
      array (
        'desktop' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'tablet' => 
        array (
          'background-color' => 'var(--ast-global-color-6)',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'background-type' => 'color',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'mobile' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
      ),
      'header-mobile-menu-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => 'var(--ast-global-color-3)',
        'mobile' => '',
      ),
      'header-mobile-menu-h-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => 'var(--ast-global-color-0)',
        'mobile' => '',
      ),
      'header-mobile-menu-a-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => 'var(--ast-global-color-0)',
        'mobile' => '',
      ),
      'header-mobile-menu-h-bg-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-mobile-menu-a-bg-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-mobile-menu-submenu-container-animation' => 'fade',
      'header-mobile-menu-submenu-item-border' => true,
      'header-mobile-menu-submenu-item-b-size' => '1',
      'header-mobile-menu-submenu-item-b-color' => '#eaeaea',
      'header-mobile-menu-submenu-border' => 
      array (
        'top' => 2,
        'bottom' => 0,
        'left' => 0,
        'right' => 0,
      ),
      'header-mobile-menu-font-size' => 
      array (
        'desktop' => '',
        'tablet' => 16,
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'font-extras-header-mobile-menu' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'woo-header-cart-click-action' => 'default',
      'woo-slide-in-cart-width' => 
      array (
        'desktop' => 35,
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => '%',
        'tablet-unit' => '%',
        'mobile-unit' => '%',
      ),
      'woo-header-cart-icon-total-label-position' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-woo-cart-icon-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'woo-header-cart-icon' => 'bag',
      'woo-header-cart-icon-style' => 'outline',
      'woo-desktop-cart-flyout-direction' => 'right',
      'header-woo-cart-icon-color' => '',
      'transparent-header-woo-cart-icon-color' => '',
      'header-woo-cart-icon-hover-color' => '',
      'woo-header-cart-border-width' => 2,
      'woo-header-cart-icon-radius-fields' => 
      array (
        'desktop' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'tablet' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'mobile' => 
        array (
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ),
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'woo-header-cart-badge-display' => true,
      'woo-header-cart-label-display' => '',
      'header-woo-cart-text-color' => '',
      'header-woo-cart-link-color' => '',
      'header-woo-cart-background-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-woo-cart-background-hover-color' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-woo-cart-separator-color' => '',
      'header-woo-cart-link-hover-color' => '',
      'header-woo-cart-btn-text-color' => '',
      'header-woo-cart-btn-background-color' => '',
      'header-woo-cart-btn-text-hover-color' => '',
      'header-woo-cart-btn-bg-hover-color' => '',
      'header-woo-checkout-btn-text-color' => '',
      'header-woo-checkout-btn-background-color' => '',
      'header-woo-checkout-btn-text-hover-color' => '',
      'header-woo-checkout-btn-bg-hover-color' => '',
      'edd-header-cart-icon-style' => 'outline',
      'edd-header-cart-icon-color' => '',
      'edd-header-cart-icon-radius' => 3,
      'transparent-header-edd-cart-icon-color' => '',
      'edd-header-cart-total-display' => true,
      'edd-header-cart-title-display' => true,
      'header-edd-cart-text-color' => '',
      'header-edd-cart-link-color' => '',
      'header-edd-cart-background-color' => '',
      'header-edd-cart-separator-color' => '',
      'header-edd-checkout-btn-text-color' => '',
      'header-edd-checkout-btn-background-color' => '',
      'header-edd-checkout-btn-text-hover-color' => '',
      'header-edd-checkout-btn-bg-hover-color' => '',
      'header-account-type' => 'default',
      'header-account-login-style' => 'icon',
      'header-account-action-type' => 'link',
      'header-account-link-type' => 'default',
      'header-account-logout-style' => 'icon',
      'header-account-logged-out-text' => 'Log In',
      'header-account-logged-in-text' => 'My Account',
      'header-account-logout-action' => 'link',
      'header-account-image-width' => 
      array (
        'desktop' => '40',
        'tablet' => '',
        'mobile' => '',
      ),
      'header-account-icon-size' => 
      array (
        'desktop' => 18,
        'tablet' => 18,
        'mobile' => 18,
      ),
      'header-account-icon-color' => '',
      'header-account-login-link' => 
      array (
        'url' => '',
        'new_tab' => false,
        'link_rel' => '',
      ),
      'header-account-logout-link' => 
      array (
        'url' => 'https://websitedemos.net/dental-08/wp-login.php',
        'new_tab' => false,
        'link_rel' => '',
      ),
      'font-size-section-header-account' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'header-account-type-text-color' => '',
      'header-account-woo-menu' => false,
      'cloned-component-track' => 
      array (
        'header-button' => 2,
        'footer-button' => 2,
        'header-html' => 2,
        'footer-html' => 2,
        'header-menu' => 2,
        'header-widget' => 4,
        'footer-widget' => 4,
        'header-social-icons' => 1,
        'footer-social-icons' => 1,
        'header-divider' => 0,
        'footer-divider' => 0,
        'removed-items' => 
        array (
        ),
      ),
      'theme-auto-version' => '4.7.1',
      '_astra_pb_compatibility_completed' => true,
      'body-line-height' => 1.86,
      'headings-font-variant' => '600',
      'site-content-layout' => 'plain-container',
      'text-transform-button' => 'capitalize',
      'button-radius' => 4,
      'theme-button-border-group-border-color' => 'var(--ast-global-color-0)',
      'theme-button-border-group-border-h-color' => 'var(--ast-global-color-5)',
      'single-post-content-layout' => 'default',
      'mobile-header-toggle-btn-color' => 'var(--ast-global-color-1)',
      'mobile-header-toggle-btn-bg-color' => 'var(--ast-global-color-0)',
      'header-mobile-menu-font-weight' => '400',
      'hba-inner-spacing' => '',
      'astra-old-global-sidebar-default' => false,
      'dynamic-blog-layouts' => false,
      'theme-dynamic-customizer-support' => true,
      'ast-dynamic-single-astra-sites-structure' => 
      array (
        0 => 'ast-dynamic-single-astra-sites-image',
        1 => 'ast-dynamic-single-astra-sites-title',
      ),
      'ast-dynamic-single-astra-sites-metadata' => 
      array (
        0 => 'comments',
        1 => 'author',
      ),
      'ast-archive-astra-sites-title' => true,
      'ast-single-astra-sites-title' => true,
      'ast-dynamic-archive-astra-sites-banner-image-type' => 'none',
      'ast-dynamic-archive-astra-sites-banner-custom-bg' => 
      array (
        'desktop' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'background-type' => '',
          'background-media' => '',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'tablet' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'background-type' => '',
          'background-media' => '',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'mobile' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'background-type' => '',
          'background-media' => '',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
      ),
      'ast-dynamic-archive-astra-sites-title-font-family' => '',
      'ast-dynamic-archive-astra-sites-title-font-size' => 
      array (
        'desktop' => 40,
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'ast-dynamic-archive-astra-sites-title-font-weight' => '',
      'ast-dynamic-archive-astra-sites-title-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'ast-dynamic-archive-astra-sites-banner-title-color' => '',
      'ast-dynamic-archive-astra-sites-banner-text-color' => '',
      'ast-dynamic-single-astra-sites-banner-title-color' => '',
      'ast-dynamic-single-astra-sites-title-font-family' => '',
      'ast-dynamic-single-astra-sites-title-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'ast-dynamic-single-astra-sites-title-font-weight' => '',
      'ast-dynamic-single-astra-sites-title-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'ast-dynamic-single-site-pages-structure' => 
      array (
        0 => 'ast-dynamic-single-site-pages-image',
        1 => 'ast-dynamic-single-site-pages-title',
      ),
      'ast-dynamic-single-site-pages-metadata' => 
      array (
        0 => 'comments',
        1 => 'author',
      ),
      'ast-archive-site-pages-title' => true,
      'ast-single-site-pages-title' => true,
      'ast-dynamic-archive-site-pages-banner-image-type' => 'none',
      'ast-dynamic-archive-site-pages-banner-custom-bg' => 
      array (
        'desktop' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'background-type' => '',
          'background-media' => '',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'tablet' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'background-type' => '',
          'background-media' => '',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'mobile' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'background-type' => '',
          'background-media' => '',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
      ),
      'ast-dynamic-archive-site-pages-title-font-family' => '',
      'ast-dynamic-archive-site-pages-title-font-size' => 
      array (
        'desktop' => 40,
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'ast-dynamic-archive-site-pages-title-font-weight' => '',
      'ast-dynamic-archive-site-pages-title-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'ast-dynamic-archive-site-pages-banner-title-color' => '',
      'ast-dynamic-archive-site-pages-banner-text-color' => '',
      'ast-dynamic-single-site-pages-banner-title-color' => '',
      'ast-dynamic-single-site-pages-title-font-family' => '',
      'ast-dynamic-single-site-pages-title-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'ast-dynamic-single-site-pages-title-font-weight' => '',
      'ast-dynamic-single-site-pages-title-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'ast-dynamic-single-astra-blocks-structure' => 
      array (
        0 => 'ast-dynamic-single-astra-blocks-image',
        1 => 'ast-dynamic-single-astra-blocks-title',
      ),
      'ast-dynamic-single-astra-blocks-metadata' => 
      array (
        0 => 'comments',
        1 => 'author',
      ),
      'ast-archive-astra-blocks-title' => true,
      'ast-single-astra-blocks-title' => true,
      'ast-dynamic-archive-astra-blocks-banner-image-type' => 'none',
      'ast-dynamic-archive-astra-blocks-banner-custom-bg' => 
      array (
        'desktop' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'background-type' => '',
          'background-media' => '',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'tablet' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'background-type' => '',
          'background-media' => '',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'mobile' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'background-type' => '',
          'background-media' => '',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
      ),
      'ast-dynamic-archive-astra-blocks-title-font-family' => '',
      'ast-dynamic-archive-astra-blocks-title-font-size' => 
      array (
        'desktop' => 40,
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'ast-dynamic-archive-astra-blocks-title-font-weight' => '',
      'ast-dynamic-archive-astra-blocks-title-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'ast-dynamic-archive-astra-blocks-banner-title-color' => '',
      'ast-dynamic-archive-astra-blocks-banner-text-color' => '',
      'ast-dynamic-single-astra-blocks-banner-title-color' => '',
      'ast-dynamic-single-astra-blocks-title-font-family' => '',
      'ast-dynamic-single-astra-blocks-title-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'ast-dynamic-single-astra-blocks-title-font-weight' => '',
      'ast-dynamic-single-astra-blocks-title-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'ast-dynamic-single-post-structure' => 
      array (
        0 => 'ast-dynamic-single-post-image',
        1 => 'ast-dynamic-single-post-title',
        2 => 'ast-dynamic-single-post-meta',
      ),
      'ast-dynamic-single-post-taxonomy' => 'category',
      'ast-archive-post-title' => true,
      'ast-single-post-title' => true,
      'ast-dynamic-archive-post-banner-image-type' => 'none',
      'ast-dynamic-archive-post-banner-custom-bg' => 
      array (
        'desktop' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'background-type' => '',
          'background-media' => '',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'tablet' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'background-type' => '',
          'background-media' => '',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'mobile' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'background-type' => '',
          'background-media' => '',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
      ),
      'ast-dynamic-archive-post-title-font-family' => '',
      'ast-dynamic-archive-post-title-font-size' => 
      array (
        'desktop' => 40,
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'ast-dynamic-archive-post-title-font-weight' => '',
      'ast-dynamic-archive-post-title-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'ast-dynamic-archive-post-banner-title-color' => '',
      'ast-dynamic-archive-post-banner-text-color' => '',
      'ast-dynamic-single-post-banner-title-color' => '',
      'ast-dynamic-single-post-title-font-family' => '',
      'ast-dynamic-single-post-title-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'ast-dynamic-single-post-title-font-weight' => '',
      'ast-dynamic-single-post-title-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'ast-dynamic-single-page-structure' => 
      array (
        0 => 'ast-dynamic-single-page-title',
      ),
      'ast-dynamic-single-page-metadata' => 
      array (
        0 => 'comments',
        1 => 'author',
      ),
      'ast-archive-page-title' => true,
      'ast-single-page-title' => true,
      'ast-dynamic-archive-page-banner-image-type' => 'none',
      'ast-dynamic-archive-page-banner-custom-bg' => 
      array (
        'desktop' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'background-type' => '',
          'background-media' => '',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'tablet' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'background-type' => '',
          'background-media' => '',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
        'mobile' => 
        array (
          'background-color' => '',
          'background-image' => '',
          'background-repeat' => 'repeat',
          'background-position' => 'center center',
          'background-size' => 'auto',
          'background-attachment' => 'scroll',
          'background-type' => '',
          'background-media' => '',
          'overlay-type' => '',
          'overlay-color' => '',
          'overlay-gradient' => '',
        ),
      ),
      'ast-dynamic-archive-page-title-font-family' => '',
      'ast-dynamic-archive-page-title-font-size' => 
      array (
        'desktop' => 40,
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'ast-dynamic-archive-page-title-font-weight' => '',
      'ast-dynamic-archive-page-title-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'ast-dynamic-archive-page-banner-title-color' => '',
      'ast-dynamic-archive-page-banner-text-color' => '',
      'ast-dynamic-single-page-banner-title-color' => '',
      'ast-dynamic-single-page-title-font-family' => '',
      'ast-dynamic-single-page-title-font-size' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
        'desktop-unit' => 'px',
        'tablet-unit' => 'px',
        'mobile-unit' => 'px',
      ),
      'ast-dynamic-single-page-title-font-weight' => '',
      'ast-dynamic-single-page-title-font-extras' => 
      array (
        'line-height' => '',
        'line-height-unit' => 'em',
        'letter-spacing' => '',
        'letter-spacing-unit' => 'px',
        'text-transform' => '',
        'text-decoration' => '',
      ),
      'archive-download-content-layout' => 'default',
      'archive-download-sidebar-layout' => 'no-sidebar',
      'single-download-content-layout' => 'default',
      'single-download-sidebar-layout' => 'default',
      'update-default-color-typo' => false,
      'v4-block-editor-compat' => false,
      'v4-1-0-update-migration' => true,
      'single-product-payment-list' => 
      array (
        'items' => 
        array (
          0 => 
          array (
            'id' => 'item-100',
            'enabled' => true,
            'source' => 'icon',
            'icon' => 'cc-visa',
            'image' => '',
            'label' => 'Visa',
          ),
          1 => 
          array (
            'id' => 'item-101',
            'enabled' => true,
            'source' => 'icon',
            'icon' => 'cc-mastercard',
            'image' => '',
            'label' => 'Mastercard',
          ),
          2 => 
          array (
            'id' => 'item-102',
            'enabled' => true,
            'source' => 'icon',
            'icon' => 'cc-amex',
            'image' => '',
            'label' => 'Amex',
          ),
          3 => 
          array (
            'id' => 'item-103',
            'enabled' => true,
            'source' => 'icon',
            'icon' => 'cc-discover',
            'image' => '',
            'label' => 'Discover',
          ),
        ),
      ),
      'v4-1-4-update-migration' => true,
      'list-block-vertical-spacing' => false,
      'add-hr-styling-css' => false,
      'astra-site-svg-logo-equal-height' => false,
      'fullwidth_sidebar_support' => false,
      'v4-2-0-update-migration' => true,
      'v4-2-2-core-form-btns-styling' => false,
      'v4-4-0-backward-option' => false,
      'secondary-theme-button-border-group-border-color' => 'var(--ast-global-color-0)',
      'secondary-theme-button-border-group-border-h-color' => 'var(--ast-global-color-5)',
      'ast-dynamic-single-templates-article-featured-image-position-layout-1' => 'none',
      'ast-dynamic-single-templates-article-featured-image-position-layout-2' => 'none',
      'ast-dynamic-single-templates-article-featured-image-ratio-type' => 'default',
      'ast-dynamic-single-astra-sites-article-featured-image-position-layout-1' => 'none',
      'ast-dynamic-single-astra-sites-article-featured-image-position-layout-2' => 'none',
      'ast-dynamic-single-astra-sites-article-featured-image-ratio-type' => 'default',
      'ast-dynamic-single-site-pages-article-featured-image-position-layout-1' => 'none',
      'ast-dynamic-single-site-pages-article-featured-image-position-layout-2' => 'none',
      'ast-dynamic-single-site-pages-article-featured-image-ratio-type' => 'default',
      'ast-dynamic-single-astra-blocks-article-featured-image-position-layout-1' => 'none',
      'ast-dynamic-single-astra-blocks-article-featured-image-position-layout-2' => 'none',
      'ast-dynamic-single-astra-blocks-article-featured-image-ratio-type' => 'default',
      'ast-dynamic-single-post-article-featured-image-position-layout-1' => 'none',
      'ast-dynamic-single-post-article-featured-image-position-layout-2' => 'none',
      'ast-dynamic-single-post-article-featured-image-ratio-type' => 'default',
      'ast-dynamic-single-page-article-featured-image-position-layout-1' => 'none',
      'ast-dynamic-single-page-article-featured-image-position-layout-2' => 'none',
      'ast-dynamic-single-page-article-featured-image-ratio-type' => 'default',
      'v4-5-0-backward-option' => false,
      'is_theme_queue_running' => false,
      'scndry-btn-default-padding' => false,
      'v4-6-0-backward-option' => false,
      'ast-font-style-update' => false,
      'v4-6-2-backward-option' => false,
      'btn-stylings-upgrade' => false,
      'elementor-headings-style' => false,
      'elementor-container-padding-style' => false,
      'global-headings-line-height-update' => true,
      'single_posts_pages_heading_clear_none' => false,
      'elementor-btn-styling' => false,
      'remove_single_posts_navigation_mobile_device_padding' => true,
      'enable-4-6-14-compatibility' => false,
      'heading-widget-font-size' => false,
      'hba-transparent-header-bg-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'hbb-transparent-header-bg-color-responsive' => 
      array (
        'desktop' => '',
        'tablet' => '',
        'mobile' => '',
      ),
      'display-site-title' => false,
    ),
    'wcf_setup_skipped' => '1',
    'woocommerce_admin_customize_store_completed' => 'yes',
    'category_children' => 
    array (
    ),
    'product_cat_children' => 
    array (
    ),
    'woocommerce_product_cat' => 
    array (
    ),
    'site_logo' => '12',
    'woocommerce_shop_page_title' => '',
    'woocommerce_cart_page_title' => '',
    'woocommerce_checkout_page_title' => '',
    'woocommerce_myaccount_page_title' => '',
    'woocommerce_edit_address_page_title' => '',
    'woocommerce_view_order_page_title' => '',
    'woocommerce_change_password_page_title' => '',
    'woocommerce_logout_page_title' => '',
    'astra-color-palettes' => 
    array (
      'currentPalette' => 'palette_1',
      'palettes' => 
      array (
        'palette_1' => 
        array (
          0 => '#387dff',
          1 => '#f7faff',
          2 => '#1a1a1a',
          3 => '#5a5a5a',
          4 => '#ffffff',
          5 => '#1e6dff',
          6 => '#ffffff',
          7 => '#1a1a1a',
          8 => '#ffffff',
        ),
        'palette_2' => 
        array (
          0 => '#0170B9',
          1 => '#3a3a3a',
          2 => '#3a3a3a',
          3 => '#4B4F58',
          4 => '#F5F5F5',
          5 => '#FFFFFF',
          6 => '#F2F5F7',
          7 => '#424242',
          8 => '#000000',
        ),
        'palette_3' => 
        array (
          0 => '#0170B9',
          1 => '#3a3a3a',
          2 => '#3a3a3a',
          3 => '#4B4F58',
          4 => '#F5F5F5',
          5 => '#FFFFFF',
          6 => '#F2F5F7',
          7 => '#424242',
          8 => '#000000',
        ),
      ),
      'flag' => true,
      'presets' => 
      array (
        'preset_1' => 
        array (
          0 => '#0067FF',
          1 => '#005EE9',
          2 => '#0F172A',
          3 => '#364151',
          4 => '#E7F6FF',
          5 => '#FFFFFF',
          6 => '#D1DAE5',
          7 => '#070614',
          8 => '#222222',
        ),
        'preset_2' => 
        array (
          0 => '#6528F7',
          1 => '#5511F8',
          2 => '#0F172A',
          3 => '#454F5E',
          4 => '#F2F0FE',
          5 => '#FFFFFF',
          6 => '#D8D8F5',
          7 => '#0D0614',
          8 => '#222222',
        ),
        'preset_3' => 
        array (
          0 => '#DD183B',
          1 => '#CC1939',
          2 => '#0F172A',
          3 => '#3A3A3A',
          4 => '#FFEDE6',
          5 => '#FFFFFF',
          6 => '#FFD1BF',
          7 => '#140609',
          8 => '#222222',
        ),
        'preset_4' => 
        array (
          0 => '#54B435',
          1 => '#379237',
          2 => '#0F172A',
          3 => '#2F3B40',
          4 => '#EDFBE2',
          5 => '#FFFFFF',
          6 => '#D5EAD8',
          7 => '#0C1406',
          8 => '#222222',
        ),
        'preset_5' => 
        array (
          0 => '#DCA54A',
          1 => '#D09A40',
          2 => '#0F172A',
          3 => '#4A4A4A',
          4 => '#FAF5E5',
          5 => '#FFFFFF',
          6 => '#F0E6C5',
          7 => '#141004',
          8 => '#222222',
        ),
        'preset_6' => 
        array (
          0 => '#FB5FAB',
          1 => '#EA559D',
          2 => '#0F172A',
          3 => '#454F5E',
          4 => '#FCEEF5',
          5 => '#FFFFFF',
          6 => '#FAD8E9',
          7 => '#140610',
          8 => '#222222',
        ),
        'preset_7' => 
        array (
          0 => '#1B9C85',
          1 => '#178E79',
          2 => '#0F172A',
          3 => '#454F5E',
          4 => '#EDF6EE',
          5 => '#FFFFFF',
          6 => '#D4F3D7',
          7 => '#06140C',
          8 => '#222222',
        ),
        'preset_8' => 
        array (
          0 => '#FD9800',
          1 => '#E98C00',
          2 => '#0F172A',
          3 => '#454F5E',
          4 => '#FEF9E1',
          5 => '#FFFFFF',
          6 => '#F9F0C8',
          7 => '#141006',
          8 => '#222222',
        ),
        'preset_9' => 
        array (
          0 => '#FF6210',
          1 => '#F15808',
          2 => '#1C0D0A',
          3 => '#353535',
          4 => '#FEF1E4',
          5 => '#FFFFFF',
          6 => '#E5D7D1',
          7 => '#140B06',
          8 => '#222222',
        ),
        'preset_10' => 
        array (
          0 => '#737880',
          1 => '#65696F',
          2 => '#151616',
          3 => '#393C40',
          4 => '#F6F6F6',
          5 => '#FFFFFF',
          6 => '#F1F0F0',
          7 => '#232529',
          8 => '#222222',
        ),
      ),
    ),
    'astra-typography-presets' => '',
    'astra_sites_batch_process_complete' => 'yes',
    'bookingpress_custom_css_key' => '66774a7403550',
    'bookingpress_version' => '1.1.4',
    'bookingpress_plugin_activated' => '1',
    'bookingpress_timezone' => '+00:00',
    'bpa_default_notificat_data_query_details_Appointment Approved_2024-06-22 22:04:36' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_notifications` (`bookingpress_notification_name`, `bookingpress_notification_receiver_type`, `bookingpress_notification_status`, `bookingpress_notification_type`, `bookingpress_notification_subject`, `bookingpress_notification_message`, `bookingpress_created_at`) VALUES (\'Appointment Approved\', \'customer\', \'1\', \'default\', \'Appointment Approved\', \'Dear %customer_first_name% %customer_last_name%,<br>You have successfully scheduled appointment.<br>Thank you for choosing us,<br>%company_name%\', \'2024-06-22 22:04:36\')","last_error":"","resposne":1}',
    'bpa_default_notificat_data_query_details_Appointment Pending_2024-06-22 22:04:36' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_notifications` (`bookingpress_notification_name`, `bookingpress_notification_receiver_type`, `bookingpress_notification_status`, `bookingpress_notification_type`, `bookingpress_notification_subject`, `bookingpress_notification_message`, `bookingpress_created_at`) VALUES (\'Appointment Pending\', \'customer\', \'1\', \'default\', \'Appointment Pending\', \'Dear %customer_first_name% %customer_last_name%,<br>The %service_name% appointment is scheduled and it\\\\\'s waiting for a confirmation.<br>Thank you for choosing us,<br>%company_name%\', \'2024-06-22 22:04:36\')","last_error":"","resposne":1}',
    'bpa_default_notificat_data_query_details_Appointment Rejected_2024-06-22 22:04:36' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_notifications` (`bookingpress_notification_name`, `bookingpress_notification_receiver_type`, `bookingpress_notification_status`, `bookingpress_notification_type`, `bookingpress_notification_subject`, `bookingpress_notification_message`, `bookingpress_created_at`) VALUES (\'Appointment Rejected\', \'customer\', \'1\', \'default\', \'Appointment Rejected\', \'Dear %customer_first_name% %customer_last_name%,<br>The %service_name% appointment, has been rejected.<br>Thank you for choosing us,<br>%company_name%\', \'2024-06-22 22:04:36\')","last_error":"","resposne":1}',
    'bpa_default_notificat_data_query_details_Appointment Canceled_2024-06-22 22:04:36' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_notifications` (`bookingpress_notification_name`, `bookingpress_notification_receiver_type`, `bookingpress_notification_status`, `bookingpress_notification_type`, `bookingpress_notification_subject`, `bookingpress_notification_message`, `bookingpress_created_at`) VALUES (\'Appointment Canceled\', \'customer\', \'1\', \'default\', \'Appointment Canceled\', \'Dear %customer_first_name% %customer_last_name%,<br>The %service_name% appointment, has been canceled.<br>Thank you for choosing us,<br>%company_name%\', \'2024-06-22 22:04:36\')","last_error":"","resposne":1}',
    'bpa_default_notificat_data_query_details_Share Appointment URL_2024-06-22 22:04:36' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_notifications` (`bookingpress_notification_name`, `bookingpress_notification_receiver_type`, `bookingpress_notification_status`, `bookingpress_notification_type`, `bookingpress_notification_subject`, `bookingpress_notification_message`, `bookingpress_created_at`) VALUES (\'Share Appointment URL\', \'customer\', \'1\', \'default\', \'Book your appointment now\', \'Hi<br\\/>Please book your appointment with following URL: <br\\/>%share_appointment_url%<br\\/>Thanks,<br\\/>%company_name%\', \'2024-06-22 22:04:36\')","last_error":"","resposne":1}',
    'bpa_default_notificat_data_query_details_second_Appointment Approved_2024-06-22 22:04:36' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_notifications` (`bookingpress_notification_name`, `bookingpress_notification_receiver_type`, `bookingpress_notification_status`, `bookingpress_notification_type`, `bookingpress_notification_subject`, `bookingpress_notification_message`, `bookingpress_created_at`) VALUES (\'Appointment Approved\', \'employee\', \'1\', \'default\', \'Appointment Approved\', \'Hi administrator,<br>You have one confirmed %service_name% appointment. The appointment is added to your schedule.<br>Thank you,<br>%company_name%\', \'2024-06-22 22:04:36\')","last_error":"","resposne":1}',
    'bpa_default_notificat_data_query_details_second_Appointment Pending_2024-06-22 22:04:36' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_notifications` (`bookingpress_notification_name`, `bookingpress_notification_receiver_type`, `bookingpress_notification_status`, `bookingpress_notification_type`, `bookingpress_notification_subject`, `bookingpress_notification_message`, `bookingpress_created_at`) VALUES (\'Appointment Pending\', \'employee\', \'1\', \'default\', \'Appointment Pending\', \'Hi administrator,<br>You have new appointment in %service_name%. The appointment is waiting for a confirmation.<br>Thank you,<br>%company_name%\', \'2024-06-22 22:04:36\')","last_error":"","resposne":1}',
    'bpa_default_notificat_data_query_details_second_Appointment Rejected_2024-06-22 22:04:36' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_notifications` (`bookingpress_notification_name`, `bookingpress_notification_receiver_type`, `bookingpress_notification_status`, `bookingpress_notification_type`, `bookingpress_notification_subject`, `bookingpress_notification_message`, `bookingpress_created_at`) VALUES (\'Appointment Rejected\', \'employee\', \'1\', \'default\', \'Appointment Rejected\', \'Hi administrator,<br>Your %service_name% appointment, has been rejected.<br>Thank you,<br>%company_name%\', \'2024-06-22 22:04:36\')","last_error":"","resposne":1}',
    'bpa_default_notificat_data_query_details_second_Appointment Canceled_2024-06-22 22:04:36' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_notifications` (`bookingpress_notification_name`, `bookingpress_notification_receiver_type`, `bookingpress_notification_status`, `bookingpress_notification_type`, `bookingpress_notification_subject`, `bookingpress_notification_message`, `bookingpress_created_at`) VALUES (\'Appointment Canceled\', \'employee\', \'1\', \'default\', \'Appointment Canceled\', \'Hi administrator,<br>Your %service_name% appointment, has been canceled.<br>Thank you,<br>%company_name%\', \'2024-06-22 22:04:36\')","last_error":"","resposne":1}',
    'bpa_default_notificat_data_query_details_second_Share Appointment URL_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_notifications` (`bookingpress_notification_name`, `bookingpress_notification_receiver_type`, `bookingpress_notification_status`, `bookingpress_notification_type`, `bookingpress_notification_subject`, `bookingpress_notification_message`, `bookingpress_created_at`) VALUES (\'Share Appointment URL\', \'employee\', \'1\', \'default\', \'Book your appointment now\', \'Hi administrator,<br>Following appointment URL is shared with customer. <br\\/>%share_appointment_url%<br\\/>Thank you,<br\\/>%company_name%\', \'2024-06-22 22:04:36\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_service_title_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'service_title\', \'Service\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_datetime_title_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'datetime_title\', \'Date & Time\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_basic_details_title_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'basic_details_title\', \'Basic Details\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_summary_title_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'summary_title\', \'Summary\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_category_title_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'category_title\', \'Select Category\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_service_heading_title_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'service_heading_title\', \'Select Service\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_default_image_url_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'default_image_url\', \'https:\\/\\/www.d4dk.shop\\/wp-content\\/plugins\\/bookingpress-appointment-booking\\/images\\/placeholder-img.jpg\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_timeslot_text_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'timeslot_text\', \'Time Slot\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_morning_text_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'morning_text\', \'Morning\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_afternoon_text_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'afternoon_text\', \'Afternoon\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_evening_text_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'evening_text\', \'Evening\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_night_text_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'night_text\', \'Night\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_date_time_step_note_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'date_time_step_note\', \'\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_summary_step_note_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'summary_step_note\', \'\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_summary_content_text_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'summary_content_text\', \'Your appointment booking summary\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_payment_method_text_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'payment_method_text\', \'Select Payment Method\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_background_color_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'background_color\', \'#fff\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_price_button_text_color_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'price_button_text_color\', \'#fff\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_footer_background_color_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'footer_background_color\', \'#f4f7fb\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_border_color_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'border_color\', \'#CFD6E5\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_primary_color_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'primary_color\', \'#12D488\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_primary_background_color_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'primary_background_color\', \'#e2faf1\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_label_title_color_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'label_title_color\', \'#202C45\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_sub_title_color_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'sub_title_color\', \'#535D71\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_content_color_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'content_color\', \'#727E95\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_custom_css_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'custom_css\', \'\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_title_font_family_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'title_font_family\', \'Poppins\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_hide_category_service_selection_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'hide_category_service_selection\', \'false\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_booking_form_tabs_position_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'booking_form_tabs_position\', \'left\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_hide_already_booked_slot_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'hide_already_booked_slot\', \'false\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_display_service_description_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'display_service_description\', \'true\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_goback_button_text_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'goback_button_text\', \'Go Back\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_next_button_text_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'next_button_text\', \'Next:\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_book_appointment_btn_text_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'book_appointment_btn_text\', \'Book Appointment\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_book_appointment_hours_text_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'book_appointment_hours_text\', \'h\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_book_appointment_min_text_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'book_appointment_min_text\', \'m\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_paypal_text_2024-06-22 22:04:37' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'paypal_text\', \'PayPal\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_locally_text_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'locally_text\', \'Pay Locally\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_total_amount_text_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'total_amount_text\', \'Total Amount Payable\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_service_text_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'service_text\', \'Service\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_customer_text_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'customer_text\', \'Customer\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_date_time_text_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'date_time_text\', \'Date & Time\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_appointment_details_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'appointment_details\', \'Appointment Details\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_all_category_title_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'all_category_title\', \'ALL\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_service_duration_label_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'service_duration_label\', \'Duration:\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_service_price_label_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'service_price_label\', \'Price:\', \'booking_form\')","last_error":"","resposne":1}',
    'booking_form_shortcode_default_fields_default_select_all_category_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'default_select_all_category\', \'false\', \'booking_form\')","last_error":"","resposne":1}',
    'bpa_mybookings_shortcode_default_datamybooking_title_text_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'mybooking_title_text\', \'My Bookings\', \'booking_my_booking\')","last_error":"","resposne":1}',
    'bpa_mybookings_shortcode_default_datahide_customer_details_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'hide_customer_details\', \'false\', \'booking_my_booking\')","last_error":"","resposne":1}',
    'bpa_mybookings_shortcode_default_datahide_search_bar_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'hide_search_bar\', \'false\', \'booking_my_booking\')","last_error":"","resposne":1}',
    'bpa_mybookings_shortcode_default_dataallow_to_cancel_appointment_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'allow_to_cancel_appointment\', \'true\', \'booking_my_booking\')","last_error":"","resposne":1}',
    'bpa_mybookings_shortcode_default_dataapply_button_title_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'apply_button_title\', \'Apply\', \'booking_my_booking\')","last_error":"","resposne":1}',
    'bpa_mybookings_shortcode_default_datasearch_appointment_title_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'search_appointment_title\', \'Search appointments\', \'booking_my_booking\')","last_error":"","resposne":1}',
    'bpa_mybookings_shortcode_default_datasearch_date_title_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'search_date_title\', \'Please select date\', \'booking_my_booking\')","last_error":"","resposne":1}',
    'bpa_mybookings_shortcode_default_datasearch_end_date_title_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'search_end_date_title\', \'Please select date\', \'booking_my_booking\')","last_error":"","resposne":1}',
    'bpa_mybookings_shortcode_default_datamy_appointment_menu_title_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'my_appointment_menu_title\', \'My Appointments\', \'booking_my_booking\')","last_error":"","resposne":1}',
    'bpa_mybookings_shortcode_default_datadelete_appointment_menu_title_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'delete_appointment_menu_title\', \'Delete Account\', \'booking_my_booking\')","last_error":"","resposne":1}',
    'bpa_mybookings_shortcode_default_datacancel_appointment_title_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'cancel_appointment_title\', \'Cancel Appointment\', \'booking_my_booking\')","last_error":"","resposne":1}',
    'bpa_mybookings_shortcode_default_datacancel_appointment_confirmation_message_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'cancel_appointment_confirmation_message\', \'Are you sure you want to cancel the appointment?\', \'booking_my_booking\')","last_error":"","resposne":1}',
    'bpa_mybookings_shortcode_default_datacancel_appointment_no_btn_text_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'cancel_appointment_no_btn_text\', \'No\', \'booking_my_booking\')","last_error":"","resposne":1}',
    'bpa_mybookings_shortcode_default_datacancel_appointment_yes_btn_text_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'cancel_appointment_yes_btn_text\', \'Yes\', \'booking_my_booking\')","last_error":"","resposne":1}',
    'bpa_mybookings_shortcode_default_dataid_main_heading_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'id_main_heading\', \'ID\', \'booking_my_booking\')","last_error":"","resposne":1}',
    'bpa_mybookings_shortcode_default_dataservice_main_heading_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'service_main_heading\', \'Service\', \'booking_my_booking\')","last_error":"","resposne":1}',
    'bpa_mybookings_shortcode_default_datadate_main_heading_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'date_main_heading\', \'Date\', \'booking_my_booking\')","last_error":"","resposne":1}',
    'bpa_mybookings_shortcode_default_datastatus_main_heading_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'status_main_heading\', \'Status\', \'booking_my_booking\')","last_error":"","resposne":1}',
    'bpa_mybookings_shortcode_default_datapayment_main_heading_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'payment_main_heading\', \'Payment\', \'booking_my_booking\')","last_error":"","resposne":1}',
    'bpa_mybookings_shortcode_default_databooking_id_heading_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'booking_id_heading\', \'Booking ID\', \'booking_my_booking\')","last_error":"","resposne":1}',
    'bpa_mybookings_shortcode_default_databooking_time_title_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'booking_time_title\', \'Time\', \'booking_my_booking\')","last_error":"","resposne":1}',
    'bpa_mybookings_shortcode_default_datapayment_details_title_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'payment_details_title\', \'Payment Details\', \'booking_my_booking\')","last_error":"","resposne":1}',
    'bpa_mybookings_shortcode_default_datapayment_method_title_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'payment_method_title\', \'Payment Method\', \'booking_my_booking\')","last_error":"","resposne":1}',
    'bpa_mybookings_shortcode_default_datatotal_amount_title_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'total_amount_title\', \'Total Amount\', \'booking_my_booking\')","last_error":"","resposne":1}',
    'bpa_mybookings_shortcode_default_datacancel_booking_id_text_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'cancel_booking_id_text\', \'Booking ID\', \'booking_my_booking\')","last_error":"","resposne":1}',
    'bpa_mybookings_shortcode_default_datacancel_service_text_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'cancel_service_text\', \'Service\', \'booking_my_booking\')","last_error":"","resposne":1}',
    'bpa_mybookings_shortcode_default_datacancel_date_time_text_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'cancel_date_time_text\', \'Date & Time\', \'booking_my_booking\')","last_error":"","resposne":1}',
    'bpa_mybookings_shortcode_default_datacancel_button_text_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'cancel_button_text\', \'Confirm Cancellation\', \'booking_my_booking\')","last_error":"","resposne":1}',
    'bpa_mybookings_shortcode_default_datadelete_account_content_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_customize_settings` (`bookingpress_setting_name`, `bookingpress_setting_value`, `bookingpress_setting_type`) VALUES (\'delete_account_content\', \'<div class=\\\\\\"bpa-front-cp-delete-account-wrapper\\\\\\">\\\\n                <div class=\\\\\\"bpa-front-dcw__vector\\\\\\">\\\\n                <svg width=\\\\\\"306\\\\\\" height=\\\\\\"187\\\\\\" viewBox=\\\\\\"0 0 306 187\\\\\\" fill=\\\\\\"none\\\\\\" xmlns=\\\\\\"http:\\/\\/www.w3.org\\/2000\\/svg\\\\\\">\\\\n                <path opacity=\\\\\\"0.3\\\\\\" d=\\\\\\"M211.536 186.663C212.664 185.998 213.781 185.31 214.886 184.601C228.966 175.555 241.049 162.228 245.039 145.975C249.03 129.722 243.319 110.575 229.022 101.876C216.592 94.3128 200.676 95.7294 186.676 99.6925C172.675 103.654 159.189 109.917 144.716 111.417C127.574 113.193 109.197 108.323 93.6292 115.715C76.351 123.918 68.5627 146.337 74.1599 164.628C76.7263 173.011 81.6272 180.396 87.9578 186.431L211.536 186.663Z\\\\\\" fill=\\\\\\"#E9EDF5\\\\\\"\\/>\\\\n                <path opacity=\\\\\\"0.6\\\\\\" d=\\\\\\"M103.995 186.593L103.943 186.56C102.839 185.858 101.747 185.134 100.695 184.407C85.3464 173.787 74.9624 159.448 71.4556 144.032C67.3307 125.9 73.8934 106.47 87.0587 97.837C97.3193 91.1084 111.161 90.3286 128.202 95.5185C132.633 96.8688 137.08 98.4988 141.382 100.077C150.216 103.317 159.351 106.669 168.749 107.714C174.567 108.36 180.631 108.151 186.496 107.945C197.282 107.568 208.434 107.18 218.24 112.195C234.362 120.437 242.849 143.415 237.159 163.415C234.703 172.048 229.708 178.879 220.457 186.255L220.4 186.3H220.327L103.995 186.593ZM107.813 92.5555C99.8804 92.5555 93.0179 94.4349 87.2908 98.1898C74.2661 106.731 67.7803 125.971 71.8668 143.939C75.3497 159.251 85.674 173.499 100.935 184.06C101.965 184.773 103.034 185.483 104.117 186.17L220.253 185.877C229.392 178.577 234.329 171.822 236.754 163.297C242.391 143.48 233.999 120.724 218.047 112.569C208.337 107.604 197.241 107.993 186.509 108.365C180.629 108.571 174.551 108.783 168.702 108.132C159.251 107.082 150.092 103.722 141.234 100.472C136.94 98.8967 132.498 97.268 128.077 95.9217C120.707 93.6762 113.941 92.5555 107.813 92.5555Z\\\\\\" fill=\\\\\\"#9192FF\\\\\\"\\/>\\\\n                <path class=\\\\\\"bpa-front-dcw__vector-primary-color\\\\\\" d=\\\\\\"M263.772 177.548C259.619 177.548 256.242 174.392 256.242 170.514C256.242 166.636 259.619 163.48 263.772 163.48C267.925 163.48 271.301 166.636 271.301 170.514C271.301 174.392 267.925 177.548 263.772 177.548ZM263.772 166.103C261.066 166.103 258.864 168.082 258.864 170.514C258.864 172.947 261.066 174.925 263.772 174.925C266.478 174.925 268.679 172.947 268.679 170.514C268.681 168.082 266.479 166.103 263.772 166.103Z\\\\\\" \\/>\\\\n                <path d=\\\\\\"M261.124 186.256H244.645L241.828 157.664H263.941L261.124 186.256Z\\\\\\" fill=\\\\\\"white\\\\\\"\\/>\\\\n                <path class=\\\\\\"bpa-front-dcw__vector-primary-color\\\\\\" d=\\\\\\"M261.378 186.537H244.388L241.516 157.381H264.25L261.378 186.537ZM244.899 185.973H260.867L263.628 157.945H242.138L244.899 185.973Z\\\\\\" \\/>\\\\n                <path d=\\\\\\"M258.255 183.88H247.509L245.672 165.957H260.092L258.255 183.88Z\\\\\\" fill=\\\\\\"#E9EDF5\\\\\\"\\/>\\\\n                <path d=\\\\\\"M222.623 68.0227C219.484 69.4758 215.304 71.8149 216.099 75.9732C216.878 80.052 221.801 79.3155 224.675 78.3406C226.803 77.6187 228.859 76.648 230.753 75.4345C231.982 74.6467 233.711 73.2847 233.291 71.5963C232.931 70.1464 231.248 69.7216 229.955 69.9873C228.08 70.3723 225.939 71.5147 224.47 72.7187C223.136 73.8119 222.097 75.514 222.359 77.2986C222.597 78.9306 223.944 80.0939 225.444 80.6054C227.312 81.2435 229.846 81.1128 231.723 80.5426C232.865 80.1964 233.92 79.1628 233.173 77.9263C232.289 76.4628 230.454 76.8174 229.182 77.4608C227.466 78.3301 225.432 79.4662 224.584 81.2885C223.939 82.6725 224.042 84.3892 225.296 85.3914C226.525 86.3737 228.298 86.3768 229.787 86.2638C231.019 86.1697 233.031 85.9123 233.227 84.3578C233.424 82.7907 231.497 82.0773 230.272 82.5407C228.376 83.2573 227.187 85.5964 226.612 87.4072C225.933 89.5476 225.945 91.8365 226.605 93.9768C226.688 94.2488 227.117 94.1327 227.034 93.8586C226.175 91.0739 226.473 88.014 227.943 85.4845C228.647 84.272 230.035 82.3566 231.692 82.8922C232.577 83.1788 233.205 84.226 232.42 85.0148C231.869 85.5692 230.94 85.7042 230.199 85.7837C229.125 85.8987 227.97 85.9448 226.914 85.6728C225.093 85.2041 224.187 83.5565 224.865 81.7593C225.418 80.2926 226.773 79.372 228.063 78.6021C229.289 77.8709 231.734 76.3393 232.789 78.1502C233.973 80.1786 230.125 80.393 229.068 80.4736C227.517 80.5908 225.873 80.5353 224.517 79.6806C223.08 78.7768 222.437 77.2149 222.96 75.5778C223.485 73.9312 224.852 72.8338 226.313 72.0262C227.452 71.3965 228.788 70.6631 230.074 70.4152C230.98 70.2405 232.124 70.3838 232.664 71.2437C233.31 72.2731 232.539 73.3966 231.793 74.0996C229.704 76.0674 226.548 77.3101 223.849 78.1408C221.037 79.0059 216.425 79.1921 216.465 75.0537C216.499 71.4749 220.039 69.7049 222.847 68.4056C223.107 68.2864 222.882 67.9035 222.623 68.0227Z\\\\\\" fill=\\\\\\"#202C45\\\\\\"\\/>\\\\n                <path d=\\\\\\"M57.8316 69C58.7441 70.9192 59.5744 72.8689 60.3822 74.8266L61.5653 77.7724L62.6993 80.7355L61.0069 80.2381L63.8466 78.0098C64.7949 77.2684 65.7618 76.5535 66.7194 75.8227L67.876 74.9407L68.4105 76.279C68.7952 77.2419 69.1519 78.2167 69.5246 79.185C69.8934 80.1545 70.2342 81.136 70.591 82.1109C70.9266 83.0937 71.2767 84.0712 71.5924 85.0633C71.92 86.0501 72.2251 87.0462 72.5102 88.0489L71.6945 88.3818C71.1945 87.4653 70.7157 86.5409 70.2568 85.6084C69.7873 84.68 69.3522 83.737 68.9013 82.8006C68.4729 81.8549 68.0285 80.9159 67.6121 79.9662C67.1996 79.0152 66.7712 78.0695 66.3706 77.1119L68.063 77.5682C67.1134 78.3069 66.1743 79.0603 65.2154 79.7871L62.3359 81.965L61.113 82.8895L60.6435 81.4663L59.65 78.4528L58.7044 75.4221C58.0942 73.3942 57.5053 71.3596 57 69.2944L57.8316 69Z\\\\\\" fill=\\\\\\"#FFA121\\\\\\"\\/>\\\\n                <path d=\\\\\\"M197.509 49.2944C197.004 51.3596 196.415 53.3942 195.805 55.4221L194.859 58.4528L193.865 61.4663L193.396 62.8895L192.173 61.965L189.294 59.7871C188.335 59.059 187.396 58.3069 186.446 57.5682L188.138 57.1119C187.738 58.0682 187.309 59.0139 186.897 59.9662C186.48 60.9159 186.036 61.8549 185.608 62.8006C185.158 63.737 184.723 64.68 184.253 65.6084C183.795 66.5422 183.316 67.4653 182.816 68.3818L182 68.0489C182.286 67.0449 182.592 66.0501 182.918 65.0633C183.233 64.0712 183.584 63.095 183.919 62.1109C184.276 61.136 184.617 60.1559 184.986 59.185C185.358 58.2167 185.715 57.2419 186.1 56.279L186.634 54.9407L187.791 55.8227C188.747 56.5522 189.715 57.2684 190.664 58.0098L193.503 60.2381L191.811 60.7355L192.945 57.7724L194.128 54.8266C194.936 52.8689 195.766 50.9205 196.679 49L197.509 49.2944Z\\\\\\" fill=\\\\\\"#FFA121\\\\\\"\\/>\\\\n                <path class=\\\\\\"bpa-front-dcw__vector-primary-color\\\\\\" d=\\\\\\"M170.793 105.362L151.217 104.174L125.673 110.924C116.714 113.29 109.442 119.825 106.14 128.479L90.1797 170.275L121.544 142.483L130.182 186.239L188.773 186.05L188.585 125.298L170.793 105.362Z\\\\\\"\\/>\\\\n                <path d=\\\\\\"M155.177 128.044C151.629 128.044 148.316 126.662 146.125 124.22L146.544 123.844C148.889 126.457 152.596 127.796 156.456 127.418C160.593 127.016 164.207 124.703 166.374 121.07L166.858 121.359C164.598 125.146 160.827 127.56 156.512 127.979C156.063 128.022 155.619 128.044 155.177 128.044Z\\\\\\" fill=\\\\\\"#C5C5FF\\\\\\"\\/>\\\\n                <path d=\\\\\\"M157.611 120.398C153.859 122.212 149.251 120.42 147.363 116.409L146.727 115.051L140.27 101.333L136.32 92.933L155.402 83.7109L163.712 101.367C167.126 108.629 164.404 117.114 157.611 120.398Z\\\\\\" fill=\\\\\\"#FFBC96\\\\\\"\\/>\\\\n                <path d=\\\\\\"M157.222 97.7891C155.542 105.97 151.346 111.575 146.726 115.051L140.27 101.333L157.222 97.7891Z\\\\\\" fill=\\\\\\"#1B1B43\\\\\\"\\/>\\\\n                <path d=\\\\\\"M159.458 87.5528C159.458 97.4314 153.888 104.204 146.823 107.695C139.552 111.286 131.96 97.4844 128.334 88.2571C124.569 78.6796 134.932 71.4961 143.606 71.4961C152.281 71.4961 159.458 77.6729 159.458 87.5528Z\\\\\\" fill=\\\\\\"#FFBC96\\\\\\"\\/>\\\\n                <path d=\\\\\\"M159.85 81.9195C159.005 71.7783 156.944 62.1928 147.55 64.6426C143.982 59.6661 129.052 59.7603 125.39 71.5913C123.028 79.2231 115.438 82.9527 115.438 82.9527C124.545 87.7408 132.941 85.9476 144.64 77.0372C148.302 82.389 158.724 82.7644 158.724 82.7644L159.85 81.9195Z\\\\\\" fill=\\\\\\"#1B1B43\\\\\\"\\/>\\\\n                <path d=\\\\\\"M162.765 86.6849C163.176 83.4828 161.479 80.6268 158.976 80.3058C156.473 79.9848 154.111 82.3204 153.701 85.5225C153.29 88.7245 154.986 91.5805 157.489 91.9015C159.992 92.2225 162.354 89.8869 162.765 86.6849Z\\\\\\" fill=\\\\\\"#FFBC96\\\\\\"\\/>\\\\n                <path d=\\\\\\"M159.143 83.6904C158.537 84.1904 158.337 84.8682 158.343 85.5937C158.347 85.9518 158.404 86.3165 158.509 86.6627C158.619 87.0089 158.767 87.3365 159.017 87.623L158.85 87.9081C158.386 87.7556 158.04 87.3657 157.828 86.9532C157.61 86.5341 157.504 86.0672 157.504 85.5963C157.508 85.1268 157.613 84.64 157.875 84.2249C158.129 83.8084 158.552 83.4848 159.007 83.3906L159.143 83.6904Z\\\\\\" fill=\\\\\\"#1B1B43\\\\\\"\\/>\\\\n                <path d=\\\\\\"M143.414 91.3952C144.199 91.3432 144.788 90.5875 144.73 89.7075C144.671 88.8275 143.988 88.1564 143.203 88.2084C142.418 88.2605 141.829 89.0161 141.887 89.8961C141.945 90.7761 142.629 91.4473 143.414 91.3952Z\\\\\\" fill=\\\\\\"#1B1B43\\\\\\"\\/>\\\\n                <path d=\\\\\\"M136.363 94.0169C137.029 93.7595 137.334 92.946 137.046 92.1999C136.757 91.4539 135.984 91.0577 135.318 91.3151C134.653 91.5726 134.347 92.3861 134.636 93.1321C134.924 93.8782 135.698 94.2743 136.363 94.0169Z\\\\\\" fill=\\\\\\"#1B1B43\\\\\\"\\/>\\\\n                <path d=\\\\\\"M147.166 85.6844C147.195 86.1314 144.824 85.9868 143.804 86.203C142.934 86.3874 141.607 87.2349 141.011 86.3887C140.472 85.6247 141.826 84.76 143.504 84.6485C145.182 84.5371 147.136 85.2388 147.166 85.6844Z\\\\\\" fill=\\\\\\"#1B1B43\\\\\\"\\/>\\\\n                <path d=\\\\\\"M131.878 90.5943C132.144 90.9604 133.355 89.7017 134.052 89.3781C134.646 89.1022 135.91 89.13 135.702 88.1751C135.513 87.3143 134.223 87.2864 133.231 88.0093C132.24 88.7321 131.611 90.2283 131.878 90.5943Z\\\\\\" fill=\\\\\\"#1B1B43\\\\\\"\\/>\\\\n                <path d=\\\\\\"M141.375 100.649C141.917 99.9948 142.693 99.5717 143.479 99.3064C144.273 99.0465 145.089 98.9324 145.914 98.9921L145.975 99.317C145.227 99.6725 144.469 99.8701 143.74 100.106C143.004 100.334 142.313 100.605 141.574 100.913L141.375 100.649Z\\\\\\" fill=\\\\\\"#1B1B43\\\\\\"\\/>\\\\n                <path d=\\\\\\"M139.239 93.5735C139.28 94.1876 139.19 94.8401 138.873 95.4383C138.721 95.7354 138.501 96.0047 138.278 96.2288C138.059 96.453 137.837 96.6413 137.784 96.7753C137.767 96.8429 137.738 96.896 137.753 96.9981C137.749 97.0591 137.766 97.0631 137.762 97.0724C137.763 97.087 137.787 97.1082 137.802 97.1347C137.906 97.2527 138.154 97.3734 138.402 97.465C138.914 97.648 139.494 97.77 140.066 97.9053L140.058 98.2356C139.442 98.3191 138.831 98.3151 138.197 98.1772C137.881 98.099 137.552 98.0074 137.218 97.717C137.141 97.6308 137.058 97.5379 137.004 97.4172C136.95 97.2872 136.914 97.1506 136.916 97.0604C136.886 96.8655 136.926 96.6174 137.023 96.4145C137.242 96.0126 137.516 95.8336 137.718 95.6452C137.929 95.4622 138.1 95.2765 138.254 95.0656C138.559 94.6425 138.749 94.1093 138.908 93.543L139.239 93.5735Z\\\\\\" fill=\\\\\\"#D28572\\\\\\"\\/>\\\\n                <path opacity=\\\\\\"0.2\\\\\\" d=\\\\\\"M154.602 92.1506C154.626 90.1606 153.033 88.5276 151.043 88.5034C149.053 88.4791 147.42 90.0726 147.396 92.0627C147.371 94.0528 148.965 95.6857 150.955 95.71C152.945 95.7343 154.578 94.1407 154.602 92.1506Z\\\\\\" fill=\\\\\\"#FE5B52\\\\\\"\\/>\\\\n                <path class=\\\\\\"bpa-front-dcw__vector-primary-color\\\\\\" d=\\\\\\"M203.429 125.772C197.862 114.065 186.375 106.314 173.435 105.524L170.793 105.361L190.281 149.738L211.612 141.82L203.429 125.772Z\\\\\\" \\/>\\\\n                <path d=\\\\\\"M135.344 96.8521C135.133 93.6132 135.695 86.0066 133.724 86.8515C131.753 87.6964 131.26 98.6811 131.26 98.6811C131.26 98.6811 130.979 80.371 128.866 81.2159C126.753 82.0607 126.753 95.3003 122.106 109.385L96.0019 164.514C92.8625 171.146 96.8176 178.958 104.021 180.353C109.305 181.376 114.571 178.508 116.58 173.515C123.34 156.715 135.759 120.461 136.965 113.401C137.95 107.626 137.695 105.128 137.315 103.644C136.685 101.191 135.508 99.3801 135.344 96.8521Z\\\\\\" fill=\\\\\\"#FFBC96\\\\\\"\\/>\\\\n                <path d=\\\\\\"M122.27 108.167C123.068 105.994 123.591 103.725 124.077 101.457C124.556 99.1848 124.959 96.8956 125.373 94.6089L126.597 87.7372C126.814 86.5925 127.036 85.4479 127.304 84.3086C127.44 83.7383 127.584 83.1706 127.765 82.6042C127.856 82.3217 127.956 82.0392 128.086 81.758C128.149 81.6174 128.225 81.4768 128.319 81.3362C128.421 81.2036 128.53 81.0352 128.804 80.949L128.783 80.9543C128.864 80.9383 128.952 80.9291 129.034 80.9277C129.112 80.9397 129.19 80.9702 129.265 80.9994C129.384 81.071 129.497 81.1612 129.559 81.25C129.713 81.4304 129.798 81.6148 129.883 81.7991C130.045 82.1665 130.161 82.5366 130.258 82.908C130.456 83.6507 130.594 84.3974 130.714 85.1442C130.949 86.6403 131.111 88.1417 131.236 89.6444C131.48 92.6513 131.61 95.6634 131.58 98.6821L130.94 98.6689C131.01 96.9645 131.139 95.2721 131.331 93.5797C131.537 91.8899 131.773 90.1962 132.305 88.5383C132.451 88.1258 132.61 87.7146 132.855 87.3207C132.984 87.1271 133.128 86.9308 133.343 86.7716C133.546 86.6005 133.863 86.5183 134.152 86.5581C134.22 86.574 134.284 86.5978 134.35 86.6204C134.417 86.6496 134.472 86.6482 134.557 86.7238C134.595 86.7544 134.632 86.7888 134.667 86.8233C134.697 86.8565 134.708 86.883 134.729 86.9122C134.762 86.9692 134.809 87.0329 134.829 87.0873C134.928 87.3101 134.993 87.525 135.048 87.7385C135.158 88.1669 135.221 88.5913 135.284 89.0171C135.504 90.7188 135.562 92.4231 135.548 94.1248C135.542 94.983 135.488 95.8159 135.562 96.6409C135.63 97.4685 135.781 98.2895 135.995 99.0973C136.209 99.905 136.483 100.698 136.78 101.486C137.085 102.266 137.39 103.092 137.561 103.933C137.924 105.619 137.964 107.351 137.808 109.048C137.65 110.747 137.318 112.422 136.875 114.062L136.631 113.999C137.041 112.362 137.338 110.696 137.463 109.02C137.586 107.346 137.513 105.653 137.131 104.03C136.947 103.212 136.666 102.444 136.347 101.65C136.041 100.856 135.757 100.048 135.532 99.2206C135.306 98.3917 135.144 97.5428 135.069 96.682C134.986 95.8186 135.037 94.9551 135.036 94.1209C135.04 92.4377 134.969 90.748 134.745 89.0914C134.683 88.6802 134.618 88.2664 134.513 87.8751C134.463 87.6801 134.402 87.4878 134.327 87.3247C134.31 87.2783 134.288 87.2597 134.27 87.2239C134.249 87.1801 134.236 87.1761 134.236 87.1761C134.25 87.1655 134.191 87.1549 134.162 87.143C134.127 87.1324 134.093 87.1151 134.058 87.1072C133.809 87.0674 133.537 87.2875 133.335 87.6218C133.134 87.9494 132.985 88.3314 132.852 88.7173C132.356 90.2917 132.127 91.9748 131.937 93.6434C131.757 95.3159 131.64 97.0056 131.582 98.6848L130.941 98.6715C130.969 95.678 130.871 92.6765 130.641 89.6895C130.526 88.1961 130.375 86.7053 130.151 85.2304C130.037 84.4943 129.904 83.7595 129.72 83.0486C129.629 82.6931 129.519 82.3429 129.38 82.022C129.311 81.8655 129.231 81.705 129.14 81.6002C129.096 81.5325 129.05 81.5127 129.017 81.4835C129.002 81.4848 128.991 81.4742 128.981 81.4689C128.97 81.4768 128.964 81.4782 128.952 81.4715L128.93 81.4768C128.92 81.4755 128.828 81.5445 128.765 81.644C128.697 81.7448 128.632 81.8588 128.576 81.9835C128.461 82.2302 128.364 82.4968 128.275 82.766C128.099 83.3072 127.953 83.8656 127.816 84.4266C127.546 85.55 127.316 86.688 127.095 87.8274L125.831 94.6872C125.414 96.9765 124.959 99.2604 124.442 101.532C123.916 103.8 123.353 106.07 122.508 108.253L122.27 108.167Z\\\\\\" fill=\\\\\\"#D28572\\\\\\"\\/>\\\\n                <path d=\\\\\\"M221.814 172.788C221.718 179.278 218.889 183.814 215.346 186.428L208.152 186.315L206.372 186.287H206.333L197.876 167.037L197.859 166.992L190.281 149.741L211.61 141.82L219.571 161.359C221.205 165.679 221.864 169.486 221.814 172.788Z\\\\\\" fill=\\\\\\"#FFBC96\\\\\\"\\/>\\\\n                <path d=\\\\\\"M215.91 165.02L159.917 171.284L152.632 168.93C149.333 167.865 145.721 168.52 143.013 170.683C136.66 175.758 126.331 185.111 129.008 185.863C133.515 187.131 139.401 184.758 144.685 183.432C147.605 182.698 150.688 183.046 153.366 184.417L157.03 186.294L212.81 186.286L215.91 165.02Z\\\\\\" fill=\\\\\\"#FFBC96\\\\\\"\\/>\\\\n                <path d=\\\\\\"M130.344 184.873C131.854 183.99 133.389 183.15 134.928 182.321C136.462 181.484 138.023 180.699 139.571 179.886C140.334 179.485 141.151 179.074 142.004 178.778C142.856 178.485 143.737 178.272 144.631 178.174C145.525 178.073 146.426 178.063 147.316 178.143C148.204 178.241 149.084 178.412 149.923 178.701L149.837 179.02C148.988 178.854 148.135 178.741 147.28 178.732C146.426 178.704 145.573 178.762 144.735 178.904C143.898 179.045 143.074 179.256 142.281 179.554C141.481 179.835 140.742 180.235 139.952 180.631C138.384 181.405 136.832 182.207 135.253 182.956C133.678 183.715 132.097 184.463 130.494 185.166L130.344 184.873Z\\\\\\" fill=\\\\\\"#D28572\\\\\\"\\/>\\\\n                <path d=\\\\\\"M131.156 182.074C132.174 181.111 133.236 180.207 134.322 179.328C135.403 178.443 136.519 177.599 137.661 176.789C138.809 175.988 139.971 175.203 141.206 174.524C142.446 173.872 143.709 173.163 145.19 173.023L145.218 173.352C144.578 173.521 143.954 173.77 143.359 174.116C142.75 174.421 142.166 174.791 141.584 175.158C140.419 175.894 139.283 176.687 138.146 177.476C137.008 178.266 135.891 179.091 134.757 179.894C133.63 180.706 132.506 181.528 131.368 182.329L131.156 182.074Z\\\\\\" fill=\\\\\\"#D28572\\\\\\"\\/>\\\\n                <path d=\\\\\\"M205.285 166.39L197.773 166.574L197.794 167.419L205.306 167.235L205.285 166.39Z\\\\\\" fill=\\\\\\"#D28572\\\\\\"\\/>\\\\n                <path d=\\\\\\"M185.084 138.502L184.578 138.75L190.032 149.855L190.538 149.607L185.084 138.502Z\\\\\\" fill=\\\\\\"#E9EDF5\\\\\\"\\/>\\\\n                <path opacity=\\\\\\"0.2\\\\\\" d=\\\\\\"M221.815 172.788C221.719 179.278 218.89 183.814 215.347 186.428L208.153 186.315C208.148 186.305 208.148 186.298 208.148 186.288C207.883 185.347 207.742 184.355 207.742 183.33C207.742 178.67 210.638 174.693 214.733 173.093C215.972 172.609 217.32 172.344 218.728 172.344C219.797 172.344 220.835 172.496 221.815 172.788Z\\\\\\" fill=\\\\\\"#FE5B52\\\\\\"\\/>\\\\n                <path d=\\\\\\"M132.624 179.492H100.512V186.253H132.624V179.492Z\\\\\\" fill=\\\\\\"#1B1B43\\\\\\"\\/>\\\\n                <path d=\\\\\\"M111.404 186.253H60.4176L45.7695 135.268H96.7554L111.404 186.253Z\\\\\\" fill=\\\\\\"#E9EDF5\\\\\\"\\/>\\\\n                <path d=\\\\\\"M60.2147 186.311L45.4883 135.055H61.2625V135.478H46.0507L60.6205 186.193L60.2147 186.311Z\\\\\\" fill=\\\\\\"#1B1B43\\\\\\"\\/>\\\\n                <path d=\\\\\\"M105.942 167.612L96.5965 135.478H73.0938V135.055H96.9135L106.348 167.494L105.942 167.612Z\\\\\\" fill=\\\\\\"#1B1B43\\\\\\"\\/>\\\\n                <path d=\\\\\\"M109.075 6.46072C109.74 4.22377 108.466 1.87097 106.229 1.20561C103.992 0.540239 101.64 1.81426 100.974 4.05121C100.309 6.28816 101.583 8.64095 103.82 9.30632C106.057 9.97168 108.41 8.69767 109.075 6.46072Z\\\\\\" fill=\\\\\\"#E9EDF5\\\\\\"\\/>\\\\n                <path d=\\\\\\"M23.7421 113.037C24.4333 110.11 22.6207 107.177 19.6936 106.485C16.7665 105.794 13.8333 107.607 13.1421 110.534C12.4509 113.461 14.2635 116.394 17.1906 117.085C20.1177 117.777 23.0509 115.964 23.7421 113.037Z\\\\\\" fill=\\\\\\"#E9EDF5\\\\\\"\\/>\\\\n                <path d=\\\\\\"M285.202 126.709C287.536 126.709 289.428 124.817 289.428 122.484C289.428 120.15 287.536 118.258 285.202 118.258C282.868 118.258 280.977 120.15 280.977 122.484C280.977 124.817 282.868 126.709 285.202 126.709Z\\\\\\" fill=\\\\\\"#E9EDF5\\\\\\"\\/>\\\\n                <path d=\\\\\\"M279.927 125.251L279.916 124.687C280.598 124.674 281.269 124.557 281.91 124.337L282.093 124.87C281.397 125.109 280.668 125.236 279.927 125.251ZM277.749 124.956C277.042 124.746 276.375 124.426 275.765 124.007L276.085 123.543C276.646 123.927 277.26 124.222 277.911 124.417L277.749 124.956ZM284.037 123.845L283.7 123.393C284.246 122.985 284.723 122.499 285.118 121.947L285.576 122.275C285.147 122.874 284.63 123.402 284.037 123.845ZM274.165 122.499C273.712 121.914 273.352 121.267 273.1 120.574L273.63 120.382C273.862 121.019 274.192 121.615 274.61 122.154L274.165 122.499ZM286.564 120.31L286.027 120.138C286.234 119.493 286.339 118.819 286.339 118.136C286.339 117.963 286.332 117.792 286.319 117.622L286.88 117.577C286.894 117.761 286.902 117.948 286.901 118.136C286.902 118.879 286.788 119.61 286.564 120.31ZM272.679 118.419C272.675 118.326 272.673 118.233 272.672 118.139C272.672 117.49 272.759 116.85 272.931 116.233L273.473 116.383C273.315 116.951 273.236 117.541 273.236 118.136C273.236 118.221 273.238 118.309 273.241 118.395L272.679 118.419ZM285.85 115.652C285.593 115.025 285.24 114.443 284.801 113.921L285.232 113.559C285.708 114.126 286.092 114.757 286.372 115.439L285.85 115.652ZM274.311 114.542L273.84 114.232C274.246 113.615 274.742 113.067 275.317 112.603L275.671 113.041C275.143 113.469 274.685 113.973 274.311 114.542ZM283.276 112.591C282.7 112.228 282.076 111.958 281.416 111.79L281.556 111.243C282.271 111.426 282.951 111.72 283.576 112.113L283.276 112.591ZM277.423 112.026L277.22 111.501C277.907 111.234 278.63 111.078 279.369 111.035L279.4 111.598C278.721 111.637 278.056 111.781 277.423 112.026Z\\\\\\" fill=\\\\\\"#9192FF\\\\\\"\\/>\\\\n                <path d=\\\\\\"M185.208 23.3295C183.499 23.3295 182.109 21.9395 182.109 20.2311C182.109 18.5228 183.499 17.1328 185.208 17.1328C186.916 17.1328 188.306 18.5228 188.306 20.2311C188.306 21.9395 186.916 23.3295 185.208 23.3295ZM185.208 17.6965C183.81 17.6965 182.673 18.8332 182.673 20.2311C182.673 21.6291 183.81 22.7671 185.208 22.7671C186.606 22.7671 187.742 21.6291 187.742 20.2311C187.742 18.8332 186.604 17.6965 185.208 17.6965Z\\\\\\" fill=\\\\\\"#9192FF\\\\\\"\\/>\\\\n                <path d=\\\\\\"M306 186H2V187H306V186Z\\\\\\" fill=\\\\\\"#727E95\\\\\\"\\/>\\\\n                <\\/svg>\\\\n                <\\/div>\\\\n                <div class=\\\\\\"bpa-front-dcw__body\\\\\\">\\\\n                <div class=\\\\\\"bpa-front-dcw__body-title\\\\\\">Sorry to see you go. Please Confirm<\\/div>\\\\n                <div class=\\\\\\"bpa-front-dcw__body-sub-title\\\\\\">All your data will be erased<\\/div>\\\\n                [bookingpress_delete_account cancel_button_text = \\\\\\"cancel\\\\\\" delete_button_text=\\\\\\"delete\\\\\\"]\\\\n                <\\/div>\\\\n                <\\/div>\', \'booking_my_booking\')","last_error":"","resposne":1}',
    'bpa_defult_field_installation_details_fullname_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_form_fields` (`bookingpress_form_field_name`, `bookingpress_field_required`, `bookingpress_field_label`, `bookingpress_field_placeholder`, `bookingpress_field_error_message`, `bookingpress_field_is_hide`, `bookingpress_field_position`, `bookingpress_field_is_default`) VALUES (\'fullname\', \'0\', \'Fullname\', \'Enter your full name\', \'Please enter your full name\', \'1\', \'1\', \'1\')","last_error":"","form_field_data":{"bookingpress_form_field_name":"fullname","bookingpress_field_required":0,"bookingpress_field_label":"Fullname","bookingpress_field_placeholder":"Enter your full name","bookingpress_field_error_message":"Please enter your full name","bookingpress_field_is_hide":1,"bookingpress_field_position":1,"bookingpress_field_is_default":1},"resposne":1}',
    'bpa_defult_field_installation_details_firstname_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_form_fields` (`bookingpress_form_field_name`, `bookingpress_field_required`, `bookingpress_field_label`, `bookingpress_field_placeholder`, `bookingpress_field_error_message`, `bookingpress_field_is_hide`, `bookingpress_field_position`, `bookingpress_field_is_default`) VALUES (\'firstname\', \'1\', \'Firstname\', \'Enter your firstname\', \'Please enter your firstname\', \'0\', \'2\', \'1\')","last_error":"","form_field_data":{"bookingpress_form_field_name":"firstname","bookingpress_field_required":true,"bookingpress_field_label":"Firstname","bookingpress_field_placeholder":"Enter your firstname","bookingpress_field_error_message":"Please enter your firstname","bookingpress_field_is_hide":0,"bookingpress_field_position":2,"bookingpress_field_is_default":1},"resposne":1}',
    'bpa_defult_field_installation_details_lastname_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_form_fields` (`bookingpress_form_field_name`, `bookingpress_field_required`, `bookingpress_field_label`, `bookingpress_field_placeholder`, `bookingpress_field_error_message`, `bookingpress_field_is_hide`, `bookingpress_field_position`, `bookingpress_field_is_default`) VALUES (\'lastname\', \'1\', \'Lastname\', \'Enter your lastname\', \'Please enter your lastname\', \'0\', \'3\', \'1\')","last_error":"","form_field_data":{"bookingpress_form_field_name":"lastname","bookingpress_field_required":true,"bookingpress_field_label":"Lastname","bookingpress_field_placeholder":"Enter your lastname","bookingpress_field_error_message":"Please enter your lastname","bookingpress_field_is_hide":0,"bookingpress_field_position":3,"bookingpress_field_is_default":1},"resposne":1}',
    'bpa_defult_field_installation_details_email_address_2024-06-22 22:04:38' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_form_fields` (`bookingpress_form_field_name`, `bookingpress_field_required`, `bookingpress_field_label`, `bookingpress_field_placeholder`, `bookingpress_field_error_message`, `bookingpress_field_is_hide`, `bookingpress_field_position`, `bookingpress_field_is_default`) VALUES (\'email_address\', \'1\', \'Email Address\', \'Enter your email address\', \'Please enter your email address\', \'0\', \'4\', \'1\')","last_error":"","form_field_data":{"bookingpress_form_field_name":"email_address","bookingpress_field_required":true,"bookingpress_field_label":"Email Address","bookingpress_field_placeholder":"Enter your email address","bookingpress_field_error_message":"Please enter your email address","bookingpress_field_is_hide":0,"bookingpress_field_position":4,"bookingpress_field_is_default":1},"resposne":1}',
    'bpa_defult_field_installation_details_phone_number_2024-06-22 22:04:39' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_form_fields` (`bookingpress_form_field_name`, `bookingpress_field_required`, `bookingpress_field_label`, `bookingpress_field_placeholder`, `bookingpress_field_error_message`, `bookingpress_field_is_hide`, `bookingpress_field_position`, `bookingpress_field_is_default`) VALUES (\'phone_number\', \'1\', \'Phone Number\', \'Enter your phone number\', \'Please enter your phone number\', \'0\', \'5\', \'1\')","last_error":"","form_field_data":{"bookingpress_form_field_name":"phone_number","bookingpress_field_required":true,"bookingpress_field_label":"Phone Number","bookingpress_field_placeholder":"Enter your phone number","bookingpress_field_error_message":"Please enter your phone number","bookingpress_field_is_hide":0,"bookingpress_field_position":5,"bookingpress_field_is_default":1},"resposne":1}',
    'bpa_defult_field_installation_details_note_2024-06-22 22:04:39' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_form_fields` (`bookingpress_form_field_name`, `bookingpress_field_required`, `bookingpress_field_label`, `bookingpress_field_placeholder`, `bookingpress_field_error_message`, `bookingpress_field_is_hide`, `bookingpress_field_position`, `bookingpress_field_is_default`) VALUES (\'note\', \'0\', \'Note\', \'Enter note details\', \'Please enter appointment note\', \'0\', \'6\', \'1\')","last_error":"","form_field_data":{"bookingpress_form_field_name":"note","bookingpress_field_required":0,"bookingpress_field_label":"Note","bookingpress_field_placeholder":"Enter note details","bookingpress_field_error_message":"Please enter appointment note","bookingpress_field_is_hide":0,"bookingpress_field_position":6,"bookingpress_field_is_default":1},"resposne":1}',
    'bpa_defult_field_installation_details_terms_and_conditions_2024-06-22 22:04:39' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_form_fields` (`bookingpress_form_field_name`, `bookingpress_field_required`, `bookingpress_field_label`, `bookingpress_field_placeholder`, `bookingpress_field_error_message`, `bookingpress_field_is_hide`, `bookingpress_field_position`, `bookingpress_field_is_default`) VALUES (\'terms_and_conditions\', \'1\', \'I agree with <a target=\\\\\\"_blank\\\\\\" href=\\\\\\"#\\\\\\">terms & conditions<\\/a>\', \'\', \'Please tick this box if you want to proceed\', \'1\', \'7\', \'1\')","last_error":"","form_field_data":{"bookingpress_form_field_name":"terms_and_conditions","bookingpress_field_required":true,"bookingpress_field_label":"I agree with <a target=\\"_blank\\" href=\\"#\\">terms & conditions<\\/a>","bookingpress_field_placeholder":"","bookingpress_field_error_message":"Please tick this box if you want to proceed","bookingpress_field_is_hide":1,"bookingpress_field_position":7,"bookingpress_field_is_default":1},"resposne":1}',
    'bpa_defult_field_installation_details_username_2024-06-22 22:04:39' => '{"last_query":"INSERT INTO `wp_3z8zx9_bookingpress_form_fields` (`bookingpress_form_field_name`, `bookingpress_field_required`, `bookingpress_field_label`, `bookingpress_field_placeholder`, `bookingpress_field_error_message`, `bookingpress_field_is_hide`, `bookingpress_field_position`, `bookingpress_field_is_default`) VALUES (\'username\', \'1\', \'Username\', \'Enter your username\', \'Please enter your username\', \'1\', \'8\', \'1\')","last_error":"","form_field_data":{"bookingpress_form_field_name":"username","bookingpress_field_required":true,"bookingpress_field_label":"Username","bookingpress_field_placeholder":"Enter your username","bookingpress_field_error_message":"Please enter your username","bookingpress_field_is_hide":1,"bookingpress_field_position":8,"bookingpress_field_is_default":1},"resposne":1}',
    'bookingpress_customize_changes_notice' => '1',
    'bookingpress_customize_changes_notice_1.0.51' => '0',
    'bookingpress_install_date' => '2024-06-22 22:04:39',
    'widget_bookingpress_frontend_widget' => 
    array (
      '_multiwidget' => 1,
    ),
    'widget_bookingpress_my_booking_widget' => 
    array (
      '_multiwidget' => 1,
    ),
    'bookingpress_lite_wizard_complete' => '1',
    'uag_container_global_padding' => '10',
    'ast_block_templates_fresh_site' => 'no',
    'ast-block-templates-spectra-common-styles' => '.wp-block-uagb-advanced-heading h1,.wp-block-uagb-advanced-heading h2,.wp-block-uagb-advanced-heading h3,.wp-block-uagb-advanced-heading h4,.wp-block-uagb-advanced-heading h5,.wp-block-uagb-advanced-heading h6,.wp-block-uagb-advanced-heading p,.wp-block-uagb-advanced-heading div{word-break:break-word}.wp-block-uagb-advanced-heading .uagb-heading-text{margin:0}.wp-block-uagb-advanced-heading .uagb-desc-text{margin:0}.wp-block-uagb-advanced-heading .uagb-separator{font-size:0;border-top-style:solid;display:inline-block;margin:0 0 10px 0}.wp-block-uagb-advanced-heading .uagb-highlight{color:#f78a0c;border:0;transition:all 0.3s ease}.uag-highlight-toolbar{border-left:0;border-top:0;border-bottom:0;border-radius:0;border-right-color:#1e1e1e}.uag-highlight-toolbar .components-button{border-radius:0;outline:none}.uag-highlight-toolbar .components-button.is-primary{color:#fff}
.wp-block-uagb-blockquote{padding:0;margin:0 auto;-webkit-box-sizing:border-box;box-sizing:border-box}.wp-block-uagb-blockquote .uagb-blockquote__content,.wp-block-uagb-blockquote cite.uagb-blockquote__author{display:block;font-style:normal}.wp-block-uagb-blockquote cite.uagb-blockquote__author,.wp-block-uagb-blockquote .uagb-blockquote__author{-ms-flex-item-align:center;align-self:center}.wp-block-uagb-blockquote .uagb-blockquote__skin-quotation blockquote.uagb-blockquote{margin:0;padding:0;border:0;outline:0;font-size:100%;vertical-align:baseline;background:transparent;quotes:none;border-left:0 none;border-right:0 none;border-top:0 none;border-bottom:0 none;font-style:normal}.wp-block-uagb-blockquote .uagb-blockquote__skin-quotation .uagb-blockquote__icon-wrap{display:inline-flex;float:unset}.wp-block-uagb-blockquote .uagb-blockquote__skin-quotation .uagb-blockquote__icon-wrap .uagb-blockquote__icon{padding:0;margin-right:0;margin-bottom:0}.wp-block-uagb-blockquote .uagb-blockquote__skin-quotation.uagb-blockquote__style-style_2 .uagb-blockquote__icon-wrap{display:inline-block;float:left}.wp-block-uagb-blockquote .uagb-blockquote__tweet-style-classic a.uagb-blockquote__tweet-button,.wp-block-uagb-blockquote .uagb-blockquote__tweet-style-bubble a.uagb-blockquote__tweet-button{background-color:#1da1f2;border-radius:100em;color:#fff}.wp-block-uagb-blockquote .uagb-blockquote__tweet-icon_text a.uagb-blockquote__tweet-button,.wp-block-uagb-blockquote .uagb-blockquote__tweet-text a.uagb-blockquote__tweet-button{padding:10px 14px}.wp-block-uagb-blockquote .uagb-blockquote__with-tweet.uagb-blockquote__align-center .uagb-blockquote footer,.wp-block-uagb-blockquote .uagb-blockquote__align-center .uagb-blockquote footer{display:block;text-align:center}.wp-block-uagb-blockquote .uagb-blockquote__align-center .uagb-blockquote__author-wrap,.wp-block-uagb-blockquote .uagb-blockquote__align-center.uagb-blockquote__with-tweet .uagb-blockquote__author-wrap{justify-content:center;-webkit-box-pack:center;-ms-flex-pack:center;-webkit-justify-content:center;-moz-box-pack:center}.wp-block-uagb-blockquote .uagb-blockquote__align-center a.uagb-blockquote__tweet-button{display:block;text-align:center;margin:0 auto;-ms-flex-item-align:center;align-self:center}.wp-block-uagb-blockquote .uagb-blockquote__with-tweet .uagb-blockquote footer{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between}.wp-block-uagb-blockquote .uagb-blockquote__with-tweet .uagb-blockquote__author-wrap.uagb-blockquote__author-at-top{width:auto;align-items:center}.wp-block-uagb-blockquote .uagb-blockquote__tweet-style-bubble a.uagb-blockquote__tweet-button::before{position:absolute;top:50%;left:-0.8em;border:solid 0.5em transparent;border-right-color:#1da1f2;transform:translateY(-50%) scale(1, 0.65);transition:0.2s;content:"";-webkit-transform:translateY(-50%) scale(1, 0.65);-ms-transform:translateY(-50%) scale(1, 0.65);-webkit-transition:0.2s;-o-transition:0.2s}.wp-block-uagb-blockquote.uagb-blockquote__skin-quotation blockquote.uagb-blockquote{vertical-align:baseline;padding:0;margin:0;background:transparent;border:0 none;outline:0;font-size:100%;font-style:normal;quotes:none}.wp-block-uagb-blockquote.uagb-blockquote__skin-quotation .uagb-blockquote__icon{position:relative;display:inline-block;z-index:1;padding:10px;margin-right:10px;border-radius:100%;float:left}.wp-block-uagb-blockquote.uagb-blockquote__skin-quotation .uagb-blockquote__icon svg{display:inherit;width:inherit;height:inherit}.wp-block-uagb-blockquote.uagb-blockquote__skin-quotation.uagb-blockquote__style-style_2.uagb-blockquote__align-right .uagb-blockquote__icon{display:inline-block;float:right}.wp-block-uagb-blockquote.uagb-blockquote__skin-quotation.uagb-blockquote__style-style_2 .uagb-blockquote__icon{display:inline-block;float:left}.wp-block-uagb-blockquote.uagb-blockquote__skin-quotation.uagb-blockquote__style-style_1 .uagb-blockquote__icon{display:inline-flex;float:unset}.wp-block-uagb-blockquote blockquote.uagb-blockquote{padding:0;margin:0}.wp-block-uagb-blockquote .uagb-blockquote__style-style_2 .uagb-blockquote__icon{display:inline-block;float:left;text-align:left}.wp-block-uagb-blockquote .uagb-blockquote__separator-parent{display:-webkit-box;display:-ms-flexbox;display:-webkit-flex;display:-moz-box;display:flex;justify-content:flex-start;-js-display:flex;-webkit-box-pack:start;-ms-flex-pack:start;-webkit-justify-content:flex-start;-moz-box-pack:start}.wp-block-uagb-blockquote.uagb-blockquote__with-tweet .uagb-blockquote footer{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;justify-content:space-between;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify}.wp-block-uagb-blockquote .uagb-blockquote a{-webkit-box-shadow:none;box-shadow:none;text-decoration:none}.wp-block-uagb-blockquote .uagb-blockquote a.uagb-blockquote__tweet-button{position:relative;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;align-self:center;width:-webkit-max-content;width:-moz-max-content;width:max-content;padding:0;background-color:transparent;color:#1da1f2;line-height:1;transition:0.2s;-webkit-transition:0.2s;-o-transition:0.2s;-webkit-align-self:flex-end;-ms-flex-item-align:center}.wp-block-uagb-blockquote a.uagb-blockquote__tweet-button svg{align-self:center;vertical-align:middle;width:15px;height:15px;fill:#fff}.wp-block-uagb-blockquote a.uagb-blockquote__tweet-button,.wp-block-uagb-blockquote a.uagb-blockquote__tweet-button svg{font-style:normal}.wp-block-uagb-blockquote.uagb-blockquote__tweet-icon a.uagb-blockquote__tweet-button svg{margin-right:0}.wp-block-uagb-blockquote.uagb-blockquote__tweet-icon a.uagb-blockquote__tweet-button{padding:8px}.wp-block-uagb-blockquote.uagb-blockquote__tweet-icon_text a.uagb-blockquote__tweet-button,.wp-block-uagb-blockquote.uagb-blockquote__tweet-text a.uagb-blockquote__tweet-button{padding:10px 14px}.wp-block-uagb-blockquote.uagb-blockquote__tweet-style-link a.uagb-blockquote__tweet-button{padding:10px 0}.wp-block-uagb-blockquote.uagb-blockquote__tweet-style-classic a.uagb-blockquote__tweet-button,.wp-block-uagb-blockquote.uagb-blockquote__tweet-style-bubble a.uagb-blockquote__tweet-button{background-color:#1da1f2;border-radius:100em;color:#fff}.wp-block-uagb-blockquote.uagb-blockquote__tweet-style-bubble a.uagb-blockquote__tweet-button::before{position:absolute;top:50%;left:-0.8em;border:solid 0.5em transparent;border-right-color:#1da1f2;transform:translateY(-50%) scale(1, 0.65);transition:0.2s;content:"";-webkit-transform:translateY(-50%) scale(1, 0.65);-ms-transform:translateY(-50%) scale(1, 0.65);-webkit-transition:0.2s;-o-transition:0.2s}.wp-block-uagb-blockquote.uagb-blockquote__align-right.uagb-blockquote__tweet-style-bubble a.uagb-blockquote__tweet-button::before{right:-0.8em;left:auto;transform:translateY(-50%) scale(1, 0.65) rotate(180deg);-webkit-transform:translateY(-50%) scale(1, 0.65) rotate(180deg);-ms-transform:translateY(-50%) scale(1, 0.65) rotate(180deg)}.wp-block-uagb-blockquote.uagb-blockquote__align-center.uagb-blockquote__tweet-style-bubble a.uagb-blockquote__tweet-button::before{top:-0.8em;right:auto;left:50%;transform:translate(-50%, 10%) scale(1, 0.85) rotate(90deg);-webkit-transform:translateX(-50%) scale(1, 0.85) rotate(90deg);-ms-transform:translateX(-50%) scale(1, 0.85) rotate(90deg)}.wp-block-uagb-blockquote.uagb-blockquote__with-tweet.uagb-blockquote__align-center .uagb-blockquote footer,.wp-block-uagb-blockquote.uagb-blockquote__align-center .uagb-blockquote footer{display:block;text-align:center}.wp-block-uagb-blockquote.uagb-blockquote__align-center .uagb-blockquote__author-wrap.uagb-blockquote__author-at-right,.wp-block-uagb-blockquote.uagb-blockquote__align-center.uagb-blockquote__with-tweet .uagb-blockquote__author-wrap{justify-content:center;-webkit-box-pack:center;-ms-flex-pack:center;-webkit-justify-content:center;-moz-box-pack:center}.wp-block-uagb-blockquote.uagb-blockquote__align-center a.uagb-blockquote__tweet-button{display:block;align-self:center;margin:0 auto;text-align:center;-ms-flex-item-align:center}.wp-block-uagb-blockquote.uagb-blockquote__with-tweet.uagb-blockquote__align-right .uagb-blockquote footer,.wp-block-uagb-blockquote.uagb-blockquote__align-right .uagb-blockquote footer{flex-direction:row-reverse}.wp-block-uagb-blockquote .uagb-blockquote__author-wrap{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;flex-direction:row;align-self:center;align-items:center}.wp-block-uagb-blockquote .uagb-blockquote__author-wrap img{width:50px;height:50px;border-radius:100%;object-fit:cover}.wp-block-uagb-blockquote.uagb-blockquote__align-right .uagb-blockquote__author-wrap,.wp-block-uagb-blockquote.uagb-blockquote__align-left .uagb-blockquote__author-wrap.uagb-blockquote__author-at-right{justify-content:flex-end;-webkit-box-pack:flex-end;-ms-flex-pack:flex-end;-webkit-justify-content:flex-end;-moz-box-pack:flex-end}.wp-block-uagb-blockquote.uagb-blockquote__align-left .uagb-blockquote__author-wrap,.wp-block-uagb-blockquote.uagb-blockquote__align-right .uagb-blockquote__author-wrap.uagb-blockquote__author-at-right{justify-content:flex-start;-webkit-box-pack:flex-start;-ms-flex-pack:flex-start;-webkit-justify-content:flex-start;-moz-box-pack:flex-start}.wp-block-uagb-blockquote.uagb-blockquote__with-tweet .uagb-blockquote__author-wrap{justify-content:unset;-webkit-box-pack:unset;-ms-flex-pack:unset;-webkit-justify-content:unset;-moz-box-pack:unset}.wp-block-uagb-blockquote.uagb-blockquote__align-center .uagb-blockquote__author-wrap,.wp-block-uagb-blockquote.uagb-blockquote__align-center.uagb-blockquote__with-tweet .uagb-blockquote__author-wrap{justify-content:center;-webkit-box-pack:center;-ms-flex-pack:center;-webkit-justify-content:center;-moz-box-pack:center}.wp-block-uagb-blockquote .uagb-blockquote__author-wrap.uagb-blockquote__author-at-top{flex-direction:column;width:100%;-webkit-flex-direction:column;-ms-flex-direction:column;align-items:flex-start}.wp-block-uagb-blockquote .uagb-blockquote__author-wrap.uagb-blockquote__author-at-top .uagb-blockquote__author-wrap,.wp-block-uagb-blockquote .uagb-blockquote__author-wrap.uagb-blockquote__author-at-top .uagb-blockquote__author{width:inherit}.wp-block-uagb-blockquote.uagb-blockquote__with-tweet .uagb-blockquote__author-wrap.uagb-blockquote__author-at-top{width:auto}.wp-block-uagb-blockquote.uagb-blockquote__align-right .uagb-blockquote__author-wrap.uagb-blockquote__author-at-top{text-align:right;align-items:flex-end}.wp-block-uagb-blockquote.uagb-blockquote__align-center .uagb-blockquote__author-wrap.uagb-blockquote__author-at-top{text-align:center;align-items:center}.wp-block-uagb-blockquote .uagb-blockquote__author-wrap.uagb-blockquote__author-at-right{-webkit-flex-direction:row-reverse;-ms-flex-direction:row-reverse;flex-direction:row-reverse;justify-content:flex-end}@media only screen and (max-width: 976px){.wp-block-uagb-blockquote.uagb-blockquote__stack-img-tablet .uagb-blockquote__author{width:100%}.wp-block-uagb-blockquote.uagb-blockquote__stack-img-tablet .uagb-blockquote__author-wrap.uagb-blockquote__author-at-right,.wp-block-uagb-blockquote.uagb-blockquote__stack-img-tablet .uagb-blockquote__author-wrap.uagb-blockquote__author-at-left{-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;align-items:flex-start}.wp-block-uagb-blockquote.uagb-blockquote__stack-img-tablet.uagb-blockquote__with-tweet .uagb-blockquote footer{-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;align-self:flex-start;-ms-flex-item-align:flex-start}.wp-block-uagb-blockquote.uagb-blockquote__stack-img-tablet .uagb-blockquote__author-wrap.uagb-blockquote__author-at-left,.wp-block-uagb-blockquote.uagb-blockquote__stack-img-tablet a.uagb-blockquote__tweet-button{-ms-flex-item-align:flex-start;align-self:flex-start}.wp-block-uagb-blockquote.uagb-blockquote__stack-img-tablet.uagb-blockquote__align-right.uagb-blockquote__with-tweet .uagb-blockquote footer,.wp-block-uagb-blockquote.uagb-blockquote__stack-img-tablet.uagb-blockquote__align-right .uagb-blockquote__author-wrap.uagb-blockquote__author-at-left,.wp-block-uagb-blockquote.uagb-blockquote__stack-img-tablet.uagb-blockquote__align-right a.uagb-blockquote__tweet-button{-ms-flex-item-align:flex-end;align-self:flex-end}.wp-block-uagb-blockquote.uagb-blockquote__stack-img-tablet.uagb-blockquote__align-right.uagb-blockquote__tweet-style-bubble a.uagb-blockquote__tweet-button::before,.wp-block-uagb-blockquote.uagb-blockquote__stack-img-tablet.uagb-blockquote__align-left.uagb-blockquote__tweet-style-bubble a.uagb-blockquote__tweet-button::before{top:-0.8em;right:auto;left:50%;transform:translate(-50%, 10%) scale(1, 0.85) rotate(90deg);-webkit-transform:translateX(-50%) scale(1, 0.85) rotate(90deg);-ms-transform:translateX(-50%) scale(1, 0.85) rotate(90deg)}.wp-block-uagb-blockquote .uagb-blockquote__align-right.uagb-blockquote__stack-img-tablet .uagb-blockquote__author-wrap{-ms-flex-item-align:flex-end;align-self:flex-end}.wp-block-uagb-blockquote .uagb-blockquote__align-left.uagb-blockquote__stack-img-tablet .uagb-blockquote__author-wrap,.wp-block-uagb-blockquote .uagb-blockquote__align-left.uagb-blockquote__stack-img-tablet .uagb-blockquote__author{-ms-flex-item-align:flex-start;align-self:flex-start}}@media screen and (max-width: 767px){.wp-block-uagb-blockquote.uagb-blockquote__stack-img-mobile .uagb-blockquote__author{width:100%}.wp-block-uagb-blockquote.uagb-blockquote__stack-img-mobile .uagb-blockquote__author-wrap.uagb-blockquote__author-at-right,.wp-block-uagb-blockquote.uagb-blockquote__stack-img-mobile .uagb-blockquote__author-wrap.uagb-blockquote__author-at-left{-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;align-items:flex-start}.wp-block-uagb-blockquote.uagb-blockquote__stack-img-mobile.uagb-blockquote__with-tweet .uagb-blockquote footer{-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;align-self:flex-start;-ms-flex-item-align:flex-start}.wp-block-uagb-blockquote.uagb-blockquote__stack-img-mobile .uagb-blockquote__author-wrap.uagb-blockquote__author-at-left,.wp-block-uagb-blockquote.uagb-blockquote__stack-img-mobile a.uagb-blockquote__tweet-button{-ms-flex-item-align:flex-start;align-self:flex-start}.wp-block-uagb-blockquote.uagb-blockquote__stack-img-mobile.uagb-blockquote__align-right.uagb-blockquote__with-tweet .uagb-blockquote footer,.wp-block-uagb-blockquote.uagb-blockquote__stack-img-mobile.uagb-blockquote__align-right .uagb-blockquote__author-wrap.uagb-blockquote__author-at-left,.wp-block-uagb-blockquote.uagb-blockquote__stack-img-mobile.uagb-blockquote__align-right a.uagb-blockquote__tweet-button{-ms-flex-item-align:flex-end;align-self:flex-end}.wp-block-uagb-blockquote.uagb-blockquote__stack-img-mobile.uagb-blockquote__align-right.uagb-blockquote__tweet-style-bubble a.uagb-blockquote__tweet-button::before,.wp-block-uagb-blockquote.uagb-blockquote__stack-img-mobile.uagb-blockquote__align-left.uagb-blockquote__tweet-style-bubble a.uagb-blockquote__tweet-button::before{top:-0.8em;right:auto;left:50%;transform:translate(-50%, 10%) scale(1, 0.85) rotate(90deg);-webkit-transform:translateX(-50%) scale(1, 0.85) rotate(90deg);-ms-transform:translateX(-50%) scale(1, 0.85) rotate(90deg)}.wp-block-uagb-blockquote .uagb-blockquote__align-right.uagb-blockquote__stack-img-mobile .uagb-blockquote__author-wrap{-ms-flex-item-align:flex-end;align-self:flex-end}.wp-block-uagb-blockquote .uagb-blockquote__align-left.uagb-blockquote__stack-img-mobile .uagb-blockquote__author-wrap,.wp-block-uagb-blockquote .uagb-blockquote__align-left.uagb-blockquote__stack-img-tablet .uagb-blockquote__author{-ms-flex-item-align:flex-start;align-self:flex-start}}
.uagb-buttons__outer-wrap .uagb-buttons__wrap{display:inline-flex;width:100%}.uagb-buttons__outer-wrap.uagb-btn__small-btn .uagb-buttons-repeater{padding:5px 10px}.uagb-buttons__outer-wrap.uagb-btn__medium-btn .uagb-buttons-repeater{padding:12px 24px}.uagb-buttons__outer-wrap.uagb-btn__large-btn .uagb-buttons-repeater{padding:20px 30px}.uagb-buttons__outer-wrap.uagb-btn__extralarge-btn .uagb-buttons-repeater{padding:30px 65px}@media (max-width: 976px){.uagb-buttons__outer-wrap.uagb-btn-tablet__small-btn .uagb-buttons-repeater{padding:5px 10px}.uagb-buttons__outer-wrap.uagb-btn-tablet__medium-btn .uagb-buttons-repeater{padding:12px 24px}.uagb-buttons__outer-wrap.uagb-btn-tablet__large-btn .uagb-buttons-repeater{padding:20px 30px}.uagb-buttons__outer-wrap.uagb-btn-tablet__extralarge-btn .uagb-buttons-repeater{padding:30px 65px}}@media (max-width: 767px){.uagb-buttons__outer-wrap.uagb-btn-mobile__small-btn .uagb-buttons-repeater{padding:5px 10px}.uagb-buttons__outer-wrap.uagb-btn-mobile__medium-btn .uagb-buttons-repeater{padding:12px 24px}.uagb-buttons__outer-wrap.uagb-btn-mobile__large-btn .uagb-buttons-repeater{padding:20px 30px}.uagb-buttons__outer-wrap.uagb-btn-mobile__extralarge-btn .uagb-buttons-repeater{padding:30px 65px}}
.uagb-buttons__outer-wrap .uagb-buttons-repeater{display:flex;justify-content:center;align-items:center;transition:box-shadow 0.2s ease}.uagb-buttons__outer-wrap .uagb-buttons-repeater a.uagb-button__link{display:flex;justify-content:center}.uagb-buttons__outer-wrap .uagb-buttons-repeater .uagb-button__icon{font-size:inherit;display:flex;align-items:center}.uagb-buttons__outer-wrap .uagb-buttons-repeater .uagb-button__icon svg{fill:currentColor;width:inherit;height:inherit}
.uagb-cta__outer-wrap .uagb-cta__content,.uagb-cta__outer-wrap a.uagb-cta__block-link span,.uagb-cta__outer-wrap .uagb-cta__content-right .uagb-cta__button-wrapper,.uagb-cta__outer-wrap .uagb-cta-typeof-button,.uagb-cta__outer-wrap .uagb-cta__content-right .uagb-cta__block-link,.uagb-cta__outer-wrap .uagb-cta-with-svg{display:inline-block}.uagb-cta__outer-wrap{display:flex;justify-content:space-between}.wp-block-uagb-call-to-action .uagb-cta__buttons{display:inline-flex}.wp-block-uagb-call-to-action .wp-block-button__link,.wp-block-uagb-call-to-action .ast-outline-button{fill:currentColor;justify-content:center}.uagb-cta__button-link-wrapper,.uagb-cta-second__button{display:inline-flex;align-items:center;word-break:keep-all;width:100%}.uagb-cta__title{padding:0;margin:0;display:block}.uagb-cta__content-right .uagb-cta__button-wrapper{float:right}.uagb-cta__link-wrapper.uagb-cta__block-link-style:empty{display:none}a.uagb-cta__block-link,.entry .entry-content a.uagb-cta__block-link,a.uagb-cta__block-link-wrap,.entry .entry-content a.uagb-cta__block-link-wrap{text-decoration:none}a.uagb-cta__block-link:hover,.entry .entry-content a.uagb-cta__block-link:hover,a.uagb-cta__block-link-wrap:hover,.entry .entry-content a.uagb-cta__block-link-wrap:hover .entry .entry-content a.uagb-cta__block-link:hover{color:inherit}.uagb-cta__content-right{text-align:right;justify-content:flex-end}.uagb-cta__left-right-wrap{width:100%;word-break:break-word}.uagb-cta__icon-position-below-title .uagb-cta__left-right-wrap{display:block;min-width:100%;width:100%}.uagb-cta__icon-position-left .uagb-cta__left-right-wrap,.uagb-cta__icon-position-right .uagb-cta__left-right-wrap{display:flex}.uagb-cta__icon-position-right .uagb-cta__left-right-wrap{justify-content:flex-end}.uagb-cta__block-link-icon-after{margin-left:5px;margin-right:0}.uagb-cta__block-link-icon-before{margin-left:0;margin-right:5px}.uagb-cta__block-link-icon,.uagb-cta__block svg{transition:all 200ms linear}.uagb-cta__block{position:relative}.uagb-cta-typeof-button{line-height:1;text-align:center}.uagb-cta__content-right .uagb-cta__button-link-wrapper,.uagb-cta__content-right .uagb-cta-second__button .uagb-cta__content-right .uagb-cta__block-link,.uagb-cta__content-right.uagb-cta__button-valign-middle .uagb-cta__left-right-wrap{display:flex;align-items:center}.uagb-cta__content-right .uagb-cta__button-link-wrapper,.uagb-cta__content-right .uagb-cta-second__button .uagb-cta__content-right .uagb-cta__block-link{justify-content:center}.uagb-cta__link-wrapper a{box-shadow:none;text-decoration:none}.uagb-cta__block,.uagb-cta__content,.uagb-cta__left-right-wrap{z-index:1}.uagb-cta__block-link{cursor:pointer}.uagb-cta__content-right .uagb-cta__block-link{float:right;padding:10px 14px}a.uagb-cta__block-link-wrap{color:inherit}.uagb-cta__content p:empty{display:none}.uagb-cta__button-type-none .uagb-cta__content{width:100%}.uagb-cta-with-svg{height:14px;width:14px;line-height:14px;vertical-align:middle}.uagb-cta__block svg{display:block;height:inherit;width:inherit}.uagb-cta__button-link-wrapper svg{width:20px;height:20px}.uagb-cta__align-button-after{margin-left:5px}.uagb-cta__align-button-before{margin-right:5px}.uagb-cta__block-link i{font-style:normal}a.uagb-cta__link-to-all{position:absolute;top:0;left:0;width:100%;height:100%;z-index:11}.wp-block-uagb-call-to-action{position:relative}.wp-block-uagb-call-to-action a.uagb-cta__link-to-all{position:absolute;top:0;left:0;width:100%;height:100%;z-index:11}@media only screen and (max-width: 976px){.uagb-cta__content-stacked-tablet,.uagb-cta__content-stacked-tablet .uagb-cta__left-right-wrap{flex-direction:column;text-align:center}.uagb-cta__content-stacked-tablet.uagb-cta__content-right .uagb-cta__button-wrapper{float:none;margin:0 auto}.uagb-cta__content-stacked-tablet .uagb-cta__left-right-wrap .uagb-cta__content{margin-left:0;margin-right:0}.uagb-cta__content-stacked-tablet.uagb-cta__content-right .uagb-cta__left-right-wrap .uagb-cta__content,.uagb-cta__content-stacked-tablet.uagb-cta__content-right .uagb-cta__left-right-wrap .uagb-cta__link-wrapper{width:100% !important}}@media screen and (max-width: 767px){.uagb-cta__content-stacked-mobile,.uagb-cta__content-stacked-mobile .uagb-cta__left-right-wrap{flex-direction:column;text-align:center}.uagb-cta__content-stacked-mobile.uagb-cta__content-right .uagb-cta__button-wrapper{float:none;margin:0 auto}.uagb-cta__content-stacked-mobile .uagb-cta__left-right-wrap .uagb-cta__content{margin-left:0;margin-right:0}.uagb-cta__content-stacked-mobile.uagb-cta__content-right .uagb-cta__left-right-wrap .uagb-cta__content,.uagb-cta__content-stacked-mobile.uagb-cta__content-right .uagb-cta__left-right-wrap .uagb-cta__link-wrapper{width:100% !important}}.uagb-cta__desc p:last-child{margin-bottom:0}
.wp-block-uagb-cf7-styler input[type="text"],.wp-block-uagb-cf7-styler input[type="password"],.wp-block-uagb-cf7-styler input[type="date"],.wp-block-uagb-cf7-styler input[type="datetime"],.wp-block-uagb-cf7-styler input[type="datetime-local"],.wp-block-uagb-cf7-styler input[type="email"],.wp-block-uagb-cf7-styler input[type="month"],.wp-block-uagb-cf7-styler input[type="number"],.wp-block-uagb-cf7-styler input[type="search"],.wp-block-uagb-cf7-styler input[type="tel"],.wp-block-uagb-cf7-styler input[type="time"],.wp-block-uagb-cf7-styler input[type="url"],.wp-block-uagb-cf7-styler input[type="week"]{min-height:30px;line-height:30px}.wp-block-uagb-cf7-styler textarea{resize:vertical}.wp-block-uagb-cf7-styler .wpcf7 *,.wp-block-uagb-cf7-styler .wpcf7 ::after,.wp-block-uagb-cf7-styler .wpcf7 ::before{-webkit-box-sizing:border-box;box-sizing:border-box}.wp-block-uagb-cf7-styler span.wpcf7-list-item-label::before,.wp-block-uagb-cf7-styler span.wpcf7-list-item-label::after{content:" "}.wp-block-uagb-cf7-styler .wpcf7-acceptance input[type="checkbox"]+span::before,.wp-block-uagb-cf7-styler .wpcf7-checkbox input[type="checkbox"]+span::before,.wp-block-uagb-cf7-styler .wpcf7-radio input[type="radio"]+span::before{display:inline-block;vertical-align:middle;width:15px;height:15px;margin-right:10px;border-color:#eaeaea;border-style:solid;border-width:1px 1px 1px 1px;text-align:center;content:""}.wp-block-uagb-cf7-styler span.wpcf7-list-item{display:inline-block;margin:0 1em 0 0}.wp-block-uagb-cf7-styler .wpcf7-acceptance input[type="checkbox"]:checked+span::before,.wp-block-uagb-cf7-styler .wpcf7-checkbox input[type="checkbox"]:checked+span::before{line-height:1.2;content:"\\2714"}.wp-block-uagb-cf7-styler .wpcf7-acceptance input[type="checkbox"]+span::before,.wp-block-uagb-cf7-styler .wpcf7-acceptance input[type="checkbox"]:checked+span::before,.wp-block-uagb-cf7-styler .wpcf7-checkbox input[type="checkbox"]+span::before,.wp-block-uagb-cf7-styler .wpcf7-checkbox input[type="checkbox"]:checked+span::before,.wp-block-uagb-cf7-styler .wpcf7-radio input[type="radio"]+span::before{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}.wp-block-uagb-cf7-styler input[type="checkbox"]:checked+span::before{font-size:-webkit-calc(12px / 1.2);font-size:calc(12px / 1.2)}.wp-block-uagb-cf7-styler .wpcf7-radio input[type="radio"]+span::before{-webkit-border-radius:100%;border-radius:100%}.wp-block-uagb-cf7-styler .uagb-cf7-styler__field-style-box .wpcf7-radio input[type="radio"]:checked+span::before,.wp-block-uagb-cf7-styler .uagb-cf7-styler__field-style-underline .wpcf7-radio input[type="radio"]:checked+span::before{box-shadow:inset 0 0 0 4px #fafafa;background-color:#545454}.wp-block-uagb-cf7-styler .uagb-cf7-styler__btn-align-justify input.wpcf7-form-control.wpcf7-submit,.wp-block-uagb-cf7-styler .uagb-cf7-styler__btn-align-left input.wpcf7-form-control.wpcf7-submit,.wp-block-uagb-cf7-styler .uagb-cf7-styler__btn-align-right input.wpcf7-form-control.wpcf7-submit,.wp-block-uagb-cf7-styler .uagb-cf7-styler__btn-align-center input.wpcf7-form-control.wpcf7-submit{display:-webkit-box;display:-ms-flexbox;display:-webkit-flex;display:-moz-box;display:flex;width:auto;padding:10px 25px;background:transparent;border-color:#333;border-width:1px;line-height:16px;-js-display:flex}.wp-block-uagb-cf7-styler .wpcf7 input[type="checkbox"],.wp-block-uagb-cf7-styler .wpcf7 input[type="radio"]{display:none}.wp-block-uagb-cf7-styler .wpcf7 select{height:auto;padding:10px;-webkit-appearance:menulist-button;-moz-appearance:menulist-button}.wp-block-uagb-cf7-styler select.wpcf7-form-control.wpcf7-select[multiple="multiple"]{padding:0}.wp-block-uagb-cf7-styler .wpcf7 select option{padding:10px}.wp-block-uagb-cf7-styler .uagb-cf7-styler__highlight-style-bottom_right span.wpcf7-not-valid-tip{display:block;padding:0.1em 0.5em;margin-top:5px;border-radius:2px;font-size:0.9em;-webkit-border-radius:2px;width:fit-content;margin-left:auto;margin-right:0}.wp-block-uagb-cf7-styler .wpcf7 input[type="number"]{height:auto}.wp-block-uagb-cf7-styler .wpcf7 input.wpcf7-date{-webkit-appearance:none}.wp-block-uagb-cf7-styler .wpcf7-spinner{margin-top:25px}@media (min-width: 769px){.wp-block-uagb-cf7-styler .uagb-cf7_styler-col>p{-js-display:flex;display:-webkit-box;display:-webkit-flex;display:-moz-box;display:-ms-flexbox;display:flex;flex-wrap:wrap;width:100%}.wp-block-uagb-cf7-styler .uagb-cf7_styler-col label,.wp-block-uagb-cf7-styler .uagb-cf7_styler-col>p>span{-webkit-box-flex:1;-webkit-flex-grow:1;-moz-box-flex:1;-ms-flex-positive:1;flex:1;flex-grow:1}.wp-block-uagb-cf7-styler .uagb-cf7_styler-col br{display:none}.wp-block-uagb-cf7-styler .uagb-cf7_styler-col>p>span.uagb-cf7_styler-col-1{padding-right:15px;padding-left:0}.wp-block-uagb-cf7-styler .uagb-cf7_styler-col>p>span.uagb-cf7_styler-col-3{padding-right:0;padding-left:15px}.wp-block-uagb-cf7-styler .wpcf7 .uagb-cf7_styler-col span.wpcf7-form-control-wrap{height:100%}.wp-block-uagb-cf7-styler .wpcf7 .uagb-cf7_styler-col select{height:100%}}@media (min-width: 780px){.uagb-cf7-styler__btn-align-right input.wpcf7-form-control.wpcf7-submit{margin-right:0;margin-left:auto}.uagb-cf7-styler__btn-align-left input.wpcf7-form-control.wpcf7-submit{margin-right:auto;margin-left:0}.uagb-cf7-styler__btn-align-center input.wpcf7-form-control.wpcf7-submit{margin-right:auto;margin-left:auto}.uagb-cf7-styler__btn-align-justify input.wpcf7-form-control.wpcf7-submit{-webkit-box-pack:center;-ms-flex-pack:center;-webkit-justify-content:center;-moz-box-pack:center;justify-content:center;width:100% !important}}@media (max-width: 780px){.uagb-cf7-styler__btn-align-tablet-right input.wpcf7-form-control.wpcf7-submit{margin-right:0;margin-left:auto}.uagb-cf7-styler__btn-align-tablet-left input.wpcf7-form-control.wpcf7-submit{margin-right:auto;margin-left:0}.uagb-cf7-styler__btn-align-tablet-center input.wpcf7-form-control.wpcf7-submit{margin-right:auto;margin-left:auto}}@media (min-width: 641px) and (max-width: 780px){.uagb-cf7-styler__btn-align-tablet-justify input.wpcf7-form-control.wpcf7-submit{-webkit-box-pack:center;-ms-flex-pack:center;-webkit-justify-content:center;-moz-box-pack:center;justify-content:center;width:100% !important}}@media (max-width: 641px){.uagb-cf7-styler__btn-align-mobile-right input.wpcf7-form-control.wpcf7-submit{margin-right:0;margin-left:auto}.uagb-cf7-styler__btn-align-mobile-left input.wpcf7-form-control.wpcf7-submit{margin-right:auto;margin-left:0}.uagb-cf7-styler__btn-align-mobile-center input.wpcf7-form-control.wpcf7-submit{margin-right:auto;margin-left:auto}.uagb-cf7-styler__btn-align-mobile-justify input.wpcf7-form-control.wpcf7-submit{-webkit-box-pack:center;-ms-flex-pack:center;-webkit-justify-content:center;-moz-box-pack:center;justify-content:center;width:100% !important}}
.uagb-column__wrap,.uagb-column__inner-wrap{margin-left:auto;margin-right:auto;position:relative;width:100%;z-index:2}.uagb-column__wrap{position:relative;overflow:visible}.uagb-column__wrap>*{z-index:1;width:100%;position:relative}.uagb-column__wrap .aligncenter{display:block;text-align:center}.uagb-column__wrap .aligncenter figcaption{display:block;text-align:center}.uagb-column__wrap .alignright{display:block;text-align:right}.uagb-column__wrap .alignright figcaption{display:block;text-align:right}.uagb-column__wrap .wp-block-image{width:100%}.uagb-column__wrap.uagb-column__align-left{margin-left:0;margin-right:auto}.uagb-column__wrap.uagb-column__align-right{margin-left:auto;margin-right:0}.uagb-column__wrap .uagb-column__video-wrap,.uagb-column__wrap .uagb-column__overlay{height:100%;width:100%;top:0;left:0;position:absolute;border-radius:inherit}.uagb-column__wrap .uagb-column__video-wrap{overflow:hidden;z-index:0;-webkit-transition:opacity 1s;-o-transition:opacity 1s;transition:opacity 1s}.uagb-column__wrap .uagb-column__video-wrap video{max-width:100%;width:100%;height:100%;margin:0;line-height:1;border:none;display:inline-block;vertical-align:baseline;-o-object-fit:cover;object-fit:cover;background-size:cover}.wp-block-uagb-columns>.editor-inner-blocks>.editor-block-list__layout>[data-type="uagb/column"]{display:flex;flex-direction:column;flex:1;padding-left:0;padding-right:0;margin-left:-14px;margin-right:-14px;min-width:0;word-break:break-word;overflow-wrap:break-word;flex-basis:100%}@media (max-width: 976px){.uagb-column__align-tablet-left{margin-left:0;margin-right:auto}.uagb-column__align-tablet-right{margin-left:auto;margin-right:0}}@media (max-width: 767px){.uagb-column__align-mobile-left{margin-left:0;margin-right:auto}.uagb-column__align-mobile-right{margin-left:auto;margin-right:0}}@media (max-width: 449px){.uagb-columns__wrap.uagb-columns__background-image{background-attachment:scroll !important}}
[class*="uagb-columns__columns-"],.uagb-columns__inner-wrap{position:relative;margin-left:auto;margin-right:auto;z-index:2;display:flex;flex-wrap:nowrap;width:100%}.uagb-columns__wrap{position:relative;margin-left:auto;margin-right:auto}.uagb-columns__wrap .uagb-columns__overlay,.uagb-columns__wrap .uagb-columns__video-wrap{height:100%;width:100%;top:0;left:0;position:absolute}.uagb-columns__wrap .uagb-columns__video-wrap{overflow:hidden;z-index:0;-webkit-transition:opacity 1s;-o-transition:opacity 1s;transition:opacity 1s}.uagb-columns__wrap .uagb-columns__video-wrap video{max-width:100%;width:100%;height:100%;margin:0;line-height:1;border:none;display:inline-block;vertical-align:baseline;-o-object-fit:cover;object-fit:cover;background-size:cover}.uagb-columns__wrap .uagb-columns__shape{overflow:hidden;position:absolute;left:0;width:100%;line-height:0;direction:ltr;z-index:1}.uagb-columns__wrap .uagb-columns__shape-top{top:-3px}.uagb-columns__wrap .uagb-columns__shape-bottom{bottom:-3px}.uagb-columns__wrap .uagb-columns__shape[data-negative="false"].uagb-columns__shape-bottom,.uagb-columns__wrap .uagb-columns__shape[data-negative="true"].uagb-columns__shape-top{-webkit-transform:rotate(180deg);-ms-transform:rotate(180deg);transform:rotate(180deg)}.uagb-columns__wrap .uagb-columns__shape.uagb-columns__shape-flip svg{transform:translateX(-50%) rotateY(180deg)}.uagb-columns__wrap .uagb-columns__shape svg{display:block;width:-webkit-calc(100% + 1.3px);width:calc(100% + 1.3px);position:relative;left:50%;-webkit-transform:translateX(-50%);-ms-transform:translateX(-50%);transform:translateX(-50%)}.uagb-columns__wrap .uagb-columns__shape .uagb-columns__shape-fill{fill:#333;-webkit-transform-origin:center;-ms-transform-origin:center;transform-origin:center;-webkit-transform:rotateY(0deg);transform:rotateY(0deg)}.uagb-columns__wrap .uagb-columns__shape.uagb-columns__shape-above-content{z-index:9;pointer-events:none}.uagb-columns__valign-center .uagb-column__wrap,.uagb-columns__valign-middle .uagb-column__wrap{display:flex;flex-direction:column;justify-content:center}.uagb-columns__valign-top .uagb-column__wrap{-webkit-box-align:flex-start;-webkit-align-items:flex-start;-ms-flex-align:flex-start;align-items:flex-start}.uagb-columns__valign-bottom .uagb-column__wrap{display:flex;flex-direction:column;justify-content:flex-end}.uagb-columns__columns-1>.uagb-column__wrap{width:100%}.uagb-columns__columns-2>.uagb-column__wrap{width:50%}.uagb-columns__columns-3>.uagb-column__wrap{width:33.33%}.uagb-columns__columns-4>.uagb-column__wrap{width:25%}.uagb-columns__columns-5>.uagb-column__wrap{width:20%}.uagb-columns__columns-6>.uagb-column__wrap{width:16.66%}.uagb-columns__gap-nogap>.uagb-columns__inner-wrap>.wp-block[data-type="uagb/column"]{padding:0}.uagb-columns__gap-default>.uagb-columns__inner-wrap>.wp-block[data-type="uagb/column"]{padding:10px}.uagb-columns__gap-narrow>.uagb-columns__inner-wrap>.wp-block[data-type="uagb/column"]{padding:5px}.uagb-columns__gap-extended>.uagb-columns__inner-wrap>.wp-block[data-type="uagb/column"]{padding:15px}.uagb-columns__gap-wide>.uagb-columns__inner-wrap>.wp-block[data-type="uagb/column"]{padding:20px}.uagb-columns__gap-wider>.uagb-columns__inner-wrap>.wp-block[data-type="uagb/column"]{padding:30px}@media (max-width: 976px){.uagb-columns__stack-tablet>.uagb-columns__columns-1>.uagb-column__wrap,.uagb-columns__stack-tablet>.uagb-columns__columns-2>.uagb-column__wrap,.uagb-columns__stack-tablet>.uagb-columns__columns-3>.uagb-column__wrap,.uagb-columns__stack-tablet>.uagb-columns__columns-4>.uagb-column__wrap,.uagb-columns__stack-tablet>.uagb-columns__columns-5>.uagb-column__wrap,.uagb-columns__stack-tablet>.uagb-columns__columns-6>.uagb-column__wrap{width:100% !important}.uagb-columns__stack-tablet{display:block}.uagb-columns__stack-tablet>.uagb-columns__inner-wrap{display:block}.uagb-columns__stack-tablet.uagb-columns__reverse-tablet .uagb-columns__inner-wrap{display:flex;flex-direction:column-reverse}.uagb-columns__reverse-tablet .uagb-columns__inner-wrap{display:flex;flex-direction:row-reverse}}@media (max-width: 767px){.uagb-columns__stack-mobile>.uagb-columns__columns-1>.uagb-column__wrap,.uagb-columns__stack-mobile>.uagb-columns__columns-2>.uagb-column__wrap,.uagb-columns__stack-mobile>.uagb-columns__columns-3>.uagb-column__wrap,.uagb-columns__stack-mobile>.uagb-columns__columns-4>.uagb-column__wrap,.uagb-columns__stack-mobile>.uagb-columns__columns-5>.uagb-column__wrap,.uagb-columns__stack-mobile>.uagb-columns__columns-6>.uagb-column__wrap{width:100% !important}.uagb-columns__stack-mobile{display:block}.uagb-columns__stack-mobile>.uagb-columns__inner-wrap{display:block}.uagb-columns__stack-mobile.uagb-columns__reverse-mobile .uagb-columns__inner-wrap,.uagb-columns__stack-mobile.uagb-columns__reverse-tablet .uagb-columns__inner-wrap{display:flex;flex-direction:column-reverse}.uagb-columns__stack-tablet.uagb-columns__reverse-mobile .uagb-columns__inner-wrap{display:flex;flex-direction:column-reverse}.uagb-columns__reverse-mobile .uagb-columns__inner-wrap{display:flex;flex-direction:row-reverse}}@media (min-width: 768px) and (max-width: 1024px){.wp-block-uagb-columns.uagb-columns__wrap.uagb-columns__background-image{background-attachment:scroll}}@media (max-width: 449px){.uagb-columns__wrap .uagb-column__wrap.uagb-column__background-image{background-attachment:scroll !important}}
.wp-block-uagb-container{display:flex;position:relative;box-sizing:border-box;transition-property:box-shadow;transition-duration:0.2s;transition-timing-function:ease}.wp-block-uagb-container .spectra-container-link-overlay{bottom:0;left:0;position:absolute;right:0;top:0;z-index:10}.wp-block-uagb-container.uagb-is-root-container{margin-left:auto;margin-right:auto}.wp-block-uagb-container.alignfull.uagb-is-root-container .uagb-container-inner-blocks-wrap{display:flex;position:relative;box-sizing:border-box;margin-left:auto !important;margin-right:auto !important}.wp-block-uagb-container .uagb-container__video-wrap{height:100%;width:100%;top:0;left:0;position:absolute;overflow:hidden;-webkit-transition:opacity 1s;-o-transition:opacity 1s;transition:opacity 1s}.wp-block-uagb-container .uagb-container__video-wrap video{max-width:100%;width:100%;height:100%;margin:0;line-height:1;border:none;display:inline-block;vertical-align:baseline;-o-object-fit:cover;object-fit:cover;background-size:cover}.wp-block-uagb-container.uagb-layout-grid{display:grid;width:100%}.wp-block-uagb-container.uagb-layout-grid>.uagb-container-inner-blocks-wrap{display:inherit;width:inherit}.wp-block-uagb-container.uagb-layout-grid>.uagb-container-inner-blocks-wrap>.wp-block-uagb-container{max-width:unset !important;width:unset !important}.wp-block-uagb-container.uagb-layout-grid>.wp-block-uagb-container{max-width:unset !important;width:unset !important}.wp-block-uagb-container.uagb-layout-grid.uagb-is-root-container{margin-left:auto;margin-right:auto}.wp-block-uagb-container.uagb-layout-grid.uagb-is-root-container>.wp-block-uagb-container{max-width:unset !important;width:unset !important}.wp-block-uagb-container.uagb-layout-grid.alignwide.uagb-is-root-container{margin-left:auto;margin-right:auto}.wp-block-uagb-container.uagb-layout-grid.alignfull.uagb-is-root-container .uagb-container-inner-blocks-wrap{display:inherit;position:relative;box-sizing:border-box;margin-left:auto !important;margin-right:auto !important}body .wp-block-uagb-container>.uagb-container-inner-blocks-wrap>*:not(.wp-block-uagb-container):not(.wp-block-uagb-column):not(.wp-block-uagb-container):not(.wp-block-uagb-section):not(.uagb-container__shape):not(.uagb-container__video-wrap):not(.wp-block-spectra-pro-register):not(.wp-block-spectra-pro-login):not(.uagb-slider-container):not(.spectra-image-gallery__control-lightbox):not(.wp-block-uagb-info-box),body .wp-block-uagb-container>.uagb-container-inner-blocks-wrap,body .wp-block-uagb-container>*:not(.wp-block-uagb-container):not(.wp-block-uagb-column):not(.wp-block-uagb-container):not(.wp-block-uagb-section):not(.uagb-container__shape):not(.uagb-container__video-wrap):not(.wp-block-spectra-pro-register):not(.wp-block-spectra-pro-login):not(.uagb-slider-container):not(.spectra-container-link-overlay):not(.spectra-image-gallery__control-lightbox):not(.wp-block-uagb-lottie):not(.uagb-faq__outer-wrap){min-width:unset !important;width:100%;position:relative}body .ast-container .wp-block-uagb-container>.uagb-container-inner-blocks-wrap>.wp-block-uagb-container>ul,body .ast-container .wp-block-uagb-container>.uagb-container-inner-blocks-wrap>.wp-block-uagb-container ol,body .ast-container .wp-block-uagb-container>.uagb-container-inner-blocks-wrap>ul,body .ast-container .wp-block-uagb-container>.uagb-container-inner-blocks-wrap ol{max-width:-webkit-fill-available;margin-block-start:0;margin-block-end:0;margin-left:20px}.ast-plain-container .editor-styles-wrapper .block-editor-block-list__layout.is-root-container .uagb-is-root-container.wp-block-uagb-container.alignwide{margin-left:auto;margin-right:auto}.uagb-container__shape{overflow:hidden;position:absolute;left:0;width:100%;line-height:0;direction:ltr}.uagb-container__shape-top{top:-3px}.uagb-container__shape-bottom{bottom:-3px}.uagb-container__shape.uagb-container__invert.uagb-container__shape-bottom,.uagb-container__shape.uagb-container__invert.uagb-container__shape-top{-webkit-transform:rotate(180deg);-ms-transform:rotate(180deg);transform:rotate(180deg)}.uagb-container__shape.uagb-container__shape-flip svg{transform:translateX(-50%) rotateY(180deg)}.uagb-container__shape svg{display:block;width:-webkit-calc(100% + 1.3px);width:calc(100% + 1.3px);position:relative;left:50%;-webkit-transform:translateX(-50%);-ms-transform:translateX(-50%);transform:translateX(-50%)}.uagb-container__shape .uagb-container__shape-fill{-webkit-transform-origin:center;-ms-transform-origin:center;transform-origin:center;-webkit-transform:rotateY(0deg);transform:rotateY(0deg)}.uagb-container__shape.uagb-container__shape-above-content{z-index:9;pointer-events:none}.nv-single-page-wrap .nv-content-wrap.entry-content .wp-block-uagb-container.alignfull{margin-left:calc(50% - 50vw);margin-right:calc(50% - 50vw)}@media only screen and (max-width: 767px){.wp-block-uagb-container .wp-block-uagb-advanced-heading{width:-webkit-fill-available}}.wp-block-uagb-image--align-none{justify-content:center}
.uagb-timeline__outer-wrap{position:relative}.uagb-timeline__outer-wrap .uagb-timeline__field{position:relative;display:flex;align-items:flex-start;margin-bottom:inherit;color:inherit;font-size:inherit}.uagb-timeline__outer-wrap .uagb-timeline__field:not(:last-child){margin-bottom:20px}.uagb-timeline__outer-wrap .uagb-timeline__field a{margin-bottom:inherit;text-decoration:none}.uagb-timeline__outer-wrap .uagb-timeline__field a.uagb-timeline__image{position:relative;display:block;max-width:100%}.uagb-timeline__outer-wrap .uagb-timeline__field a.uagb-timeline__image img{display:inline-block;box-sizing:content-box;height:auto;max-width:100%}.uagb-timeline__outer-wrap .uagb-timeline__field .uagb-timeline__author-link{text-transform:capitalize}.uagb-timeline__outer-wrap .uagb-timeline__field a.uagb-timeline__link{display:inline-block}.uagb-timeline__outer-wrap .uagb-timeline__field.uagb-timeline__left.hide-events .uagb-timeline__events-inner-new,.uagb-timeline__outer-wrap .uagb-timeline__field.uagb-timeline__left.hide-events .uagb-timeline__date-new{visibility:hidden}.uagb-timeline__outer-wrap .uagb-timeline__field.uagb-timeline__right.hide-events .uagb-timeline__events-inner-new,.uagb-timeline__outer-wrap .uagb-timeline__field.uagb-timeline__right.hide-events .uagb-timeline__date-new{visibility:hidden}.uagb-timeline__outer-wrap .uagb-timeline__field .uagb-timeline__image a{position:relative;display:block;max-width:100%}.uagb-timeline__outer-wrap .uagb-timeline__field .uagb-timeline__image img{display:inline-block;box-sizing:content-box}.uagb-timeline__outer-wrap .uagb-timeline__line{position:absolute;transform:translateX(-50%);-webkit-transform:translateX(-50%);-ms-transform:translateX(-50%);width:3px;background-color:#eee}.uagb-timeline__outer-wrap .uagb-timeline__line .uagb-timeline__line__inner{width:100%;background-color:#0693e3}.uagb-timeline__outer-wrap svg{display:inline-block;vertical-align:middle;font-size:16px;font-style:normal;line-height:16px}.uagb-timeline__outer-wrap .uagb-timeline__field:hover .uagb-timeline__marker{transition:all 0.2s ease-in-out}.uagb-timeline__outer-wrap .uagb-timeline__marker{position:relative;display:flex;z-index:1;justify-content:center;align-items:center;min-width:3em;min-height:3em;background-color:#eee;border-radius:999px;line-height:48px;transition:all 0.2s ease-in-out}.uagb-timeline__outer-wrap .uagb-timeline__year{position:relative;display:flex}.uagb-timeline__outer-wrap .uagb-timeline__year span{display:inline-block;padding-bottom:6px}.uagb-timeline__outer-wrap.uagb-timeline__arrow-center .uagb-timeline__field{align-items:center}.uagb-timeline__outer-wrap.uagb-timeline__arrow-center .uagb-timeline__left .uagb-timeline__arrow,.uagb-timeline__outer-wrap.uagb-timeline__arrow-center .uagb-timeline__right .uagb-timeline__arrow{top:50%;transform:translateY(-50%);-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%)}.uagb-timeline__outer-wrap.uagb-timeline__arrow-bottom .uagb-timeline__field{align-items:flex-end}.uagb-timeline__outer-wrap.uagb-timeline__arrow-bottom .uagb-timeline__left .uagb-timeline__arrow,.uagb-timeline__outer-wrap.uagb-timeline__arrow-bottom .uagb-timeline__right .uagb-timeline__arrow{top:100%;transform:translateY(-100%)}.uagb-timeline__outer-wrap.uagb-timeline__arrow-bottom .uagb-timeline__date-new .uagb-timeline__date-new{padding-top:8px;padding-bottom:8px}.uagb-timeline__outer-wrap .uagb-timeline__date .uagb-timeline__inner-date-new{margin:0;white-space:nowrap}.uagb-timeline__outer-wrap .in-view i.uagb-timeline__in-view-icon{-webkit-transition:background 0.25s ease-out 0.25s, width 0.25s ease-in-out, height 0.25s ease-in-out, color 0.25s ease-in-out, font-size 0.25s ease-in-out;-webkit-transition:background 0.25s ease-out 0.25s, width 0.25s ease-in-out, height 0.25s ease-in-out, color 0.25s ease-in-out, font-size 0.25s ease-out;transition:background 0.25s ease-out 0.25s, width 0.25s ease-in-out, height 0.25s ease-in-out, color 0.25s ease-in-out, font-size 0.25s ease-out}.uagb-timeline__outer-wrap.uagb-timeline__left-block .uagb-timeline__date-new{display:none}.uagb-timeline__outer-wrap.uagb-timeline__right-block .uagb-timeline__date-new{display:none}.uagb-timeline__outer-wrap p:empty{display:none}.uagb-timeline__outer-wrap.uagb-timeline__right-block .uagb-timeline__line{position:absolute;transform:translateX(50%);-webkit-transform:translateX(50%);-ms-transform:translateX(50%)}.uagb-timeline__outer-wrap span.dashicons-admin-users.dashicons{display:inline;vertical-align:baseline;margin-right:4px}.uagb-content{word-break:break-word}.uagb-timeline__headingh1,.uagb-timeline__headingh2,.uagb-timeline__headingh3,.uagb-timeline__headingh4,.uagb-timeline__headingh5,.uagb-timeline__headingh6{margin-bottom:0}.uagb-timeline__inner-date-new p,.uagb-timeline__date-inner .uagb-timeline__inner-date-new p{margin-bottom:0}.uagb-timeline__center-block{text-align:center}.uagb-timeline__center-block .uagb-timeline__day-right .uagb-timeline__arrow::after{position:absolute;top:50%;right:0;display:inline;width:0;height:0;border-top:12px solid transparent;border-bottom:12px solid transparent;border-left:13px solid #eee;transform:translateY(-50%);content:"";-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%)}.uagb-timeline__center-block .uagb-timeline__marker{flex-grow:0;flex-shrink:0;order:1}.uagb-timeline__center-block .uagb-timeline__date-hide{display:none}.uagb-timeline__center-block .uagb-timeline__field.uagb-timeline__right{flex-direction:row-reverse}.uagb-timeline__center-block .uagb-timeline__day-new,.uagb-timeline__center-block .uagb-timeline__date-new{display:block;position:relative;flex-grow:1;flex-basis:50%;max-width:100%}.uagb-timeline__center-block .uagb-timeline__right .uagb-timeline__day-new{order:2}.uagb-timeline__center-block .uagb-timeline__right .uagb-timeline__date-new{display:flex;justify-content:flex-start}.uagb-timeline__center-block .uagb-timeline__right .uagb-timeline__arrow{position:absolute;top:0;right:-10px;width:10px;height:40px}.uagb-timeline__center-block .uagb-timeline__right .uagb-timeline__arrow::after{top:50%;transform:translateY(-50%);-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%)}.uagb-timeline__center-block .uagb-timeline__left .uagb-timeline__day-new{order:2}.uagb-timeline__center-block .uagb-timeline__left .uagb-timeline__date-new{display:flex;justify-content:flex-end}.uagb-timeline__center-block .uagb-timeline__left .uagb-timeline__arrow{position:absolute;top:0;left:-10px;width:10px;height:40px}.uagb-timeline__center-block .uagb-timeline__left .uagb-timeline__arrow::after{top:50%;transform:translateY(-50%);-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%)}.uagb-timeline__center-block .uagb-timeline__line{right:auto;left:50%}.uagb-timeline__right-block .uagb-timeline__field{flex-direction:row-reverse}.uagb-timeline__right-block .uagb-timeline__date-new{display:flex;align-items:center;margin-left:10px}.uagb-timeline__right-block .uagb-timeline__day-left .uagb-timeline__events-inner-new,.uagb-timeline__right-block .uagb-timeline__day-right .uagb-timeline__events-inner-new{text-align:inherit}.uagb-timeline__right-block .uagb-timeline__right .uagb-timeline__events-inner-new,.uagb-timeline__right-block .uagb-timeline__left .uagb-timeline__events-inner-new{text-align:right}.uagb-timeline__right-block .uagb-timeline__right .uagb-timeline__arrow::after,.uagb-timeline__right-block .uagb-timeline__left .uagb-timeline__arrow::after{top:50%;transform:translateY(-50%)}.uagb-timeline__right-block .uagb-timeline__right .uagb-timeline__arrow,.uagb-timeline__right-block .uagb-timeline__left .uagb-timeline__arrow{position:absolute;top:0;right:0;width:10px;height:40px}.uagb-timeline__right-block .uagb-timeline__right .uagb-timeline__arrow{right:-12px}.uagb-timeline__right-block .uagb-timeline__left .uagb-timeline__arrow{right:-10px}.uagb-timeline__right-block .uagb-timeline__marker,.uagb-timeline__right-block .uagb-timeline__day-new{position:relative;max-width:100%}.uagb-timeline__right-block .uagb-timeline__day-new{flex-grow:1;margin-right:14px}.uagb-timeline__right-block .uagb-timeline__marker{flex-grow:0;flex-shrink:0}.uagb-timeline__left-block{text-align:left}.uagb-timeline__left-block .uagb-timeline__marker,.uagb-timeline__left-block .uagb-timeline__day-new{position:relative;max-width:100%}.uagb-timeline__left-block .uagb-timeline__line{right:auto;left:20px}.uagb-timeline__left-block .uagb-timeline__day-new{flex-grow:1;order:1;margin-left:14px}.uagb-timeline__left-block .uagb-timeline__date-new{margin-right:10px}.uagb-timeline__left-block .uagb-timeline__marker{flex-grow:0;flex-shrink:0;order:0}.uagb-timeline__left-block .uagb-timeline__right .uagb-timeline__events-inner-new,.uagb-timeline__left-block .uagb-timeline__left .uagb-timeline__events-inner-new{text-align:left}.uagb-timeline__left-block .uagb-timeline__right .uagb-timeline__arrow::after,.uagb-timeline__left-block .uagb-timeline__left .uagb-timeline__arrow::after{top:50%;transform:translateY(-50%)}.uagb-timeline__left-block .uagb-timeline__right .uagb-timeline__arrow,.uagb-timeline__left-block .uagb-timeline__left .uagb-timeline__arrow{position:absolute;top:0;width:10px;height:40px}.uagb-timeline__left-block .uagb-timeline__right .uagb-timeline__arrow{left:-10px}.uagb-timeline__left-block .uagb-timeline__left .uagb-timeline__arrow{left:-12px}.uagb-timeline__left-block .uagb-timeline__day-right .uagb-timeline__arrow::after{position:absolute;display:inline;width:0;height:0;border-top:12px solid transparent;border-right:13px solid #eee;border-bottom:12px solid transparent;content:""}.uagb-timeline__day-right .uagb-timeline__events-inner{text-align:right}.uagb-timeline__day-left .uagb-timeline__events-inner{text-align:left}.uagb-timeline__arrow-top .uagb-timeline__date-new .uagb-timeline__date-new{padding-top:8px;padding-bottom:8px}.uagb-timeline__events-inner-new,.uagb-timeline__arrow{transition:background 0.2s ease-in-out}.uagb-timeline__arrow::after{transition:border-color 0.2s ease-in-out}.uagb-timeline__date-new{transition:color 0.2s ease-in-out}.uagb-timeline__day-left .uagb-timeline__arrow::after{position:absolute;left:0;display:inline;width:0;height:0;border-top:12px solid transparent;border-bottom:12px solid transparent;content:""}.uagb-timeline__right .uagb-timeline__day-left .uagb-timeline__arrow::after{right:0}.uagb-timeline__day-right .uagb-timeline__arrow::after{position:absolute;right:0;display:inline;width:0;height:0;border-top:12px solid transparent;border-bottom:12px solid transparent;content:""}.uagb-timeline__icon{position:relative;z-index:1;vertical-align:middle;width:100px;height:100px;border-radius:50%;text-align:center;line-height:100px;-webkit-border-radius:50%}.uagb-timeline__left{text-align:left}.uagb-timeline__right{text-align:right}.uagb-timeline__right-block .uagb-timeline__day-right .uagb-timeline__arrow::after{border-left:13px solid #eee}.uagb-timeline__right-block .uagb-timeline__day-left .uagb-timeline__arrow::after{border-left:13px solid #eee}.uagb-timeline__center-block .uagb-timeline__day-left .uagb-timeline__arrow::after{border-right:13px solid #eee}.uagb-timeline__left-block .uagb-timeline__day-left .uagb-timeline__arrow::after{border-right:13px solid #eee}.uagb-timeline__day-right .uagb-timeline__events-inner-new{border-radius:4px 4px 4px 4px}.uagb-timeline__day-left .uagb-timeline__events-inner-new{border-radius:4px 4px 4px 4px}.uagb-timeline__arrow{height:3em}.uagb-timeline__right-block .uagb-timeline__line{right:1.5em}.rtl .uagb-timeline__center-block .uagb-timeline__day-right .uagb-timeline__arrow::after{border-right:13px solid #eee;border-left:none}.rtl .uagb-timeline__center-block .uagb-timeline__day-left .uagb-timeline__arrow::after{border-right:none;border-left:13px solid #eee}.rtl .uagb-timeline__left-block .uagb-timeline__line{right:auto;left:16px}.rtl .uagb-timeline__left-block .uagb-timeline__field{flex-direction:row-reverse}.rtl .uagb-timeline__left-block .uagb-timeline__day-left .uagb-timeline__arrow::after{border-right:13px solid #eee;right:-3px}.rtl .uagb-timeline__left-block .uagb-timeline__day-right .uagb-timeline__arrow::after{border-right:13px solid #eee;right:-3px}.rtl .uagb-timeline__right-block .uagb-timeline__line{right:auto;left:1.5em}.rtl .uagb-timeline__right-block .uagb-timeline__field{flex-direction:row}.rtl .uagb-timeline__right-block .uagb-timeline__day-right .uagb-timeline__arrow::after{border-left:13px solid #eee}.rtl .uagb-timeline__right-block .uagb-timeline__day-left .uagb-timeline__arrow::after{border-left:13px solid #eee;right:-17px}@media screen and (max-width: 1023px){.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__line{position:absolute;right:16px;left:auto;transform:translateX(50%);-webkit-transform:translateX(50%);-ms-transform:translateX(50%)}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__date-hide{display:block}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__day-left .uagb-timeline__events-inner-new,.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__day-right .uagb-timeline__events-inner-new{text-align:left}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__marker,.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__day-new{position:relative;max-width:100%}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__line{right:auto;left:20px}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__marker{-webkit-box-ordinal-group:1;-webkit-order:0;-moz-box-ordinal-group:1;-ms-flex-order:0;flex-grow:0;flex-shrink:0;order:0;-webkit-flex-shrink:0;-ms-flex-negative:0;-webkit-box-flex:0;-webkit-flex-grow:0;-moz-box-flex:0;-ms-flex-positive:0}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__day-new{flex-grow:1;order:1;margin-left:16px;-webkit-box-flex:1;-webkit-flex-grow:1;-moz-box-flex:1;-ms-flex-positive:1;-webkit-box-ordinal-group:2;-webkit-order:1;-moz-box-ordinal-group:2;-ms-flex-order:1}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__right .uagb-timeline__arrow,.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__left .uagb-timeline__arrow{position:absolute;width:10px;height:40px}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__right .uagb-timeline__arrow{left:-10px}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__left .uagb-timeline__arrow{left:-12px}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__right .uagb-timeline__arrow::after,.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__left .uagb-timeline__arrow::after{top:50%;transform:translateY(-50%);-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%)}.uagb-timeline__center-block.uagb-timeline__responsive-tablet{text-align:left}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__day-right .uagb-timeline__arrow::after{position:absolute;display:inline;width:0;height:0;border-top:12px solid transparent;border-bottom:12px solid transparent;content:""}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__field.uagb-timeline__right{-webkit-box-orient:unset;-webkit-box-direction:unset;-webkit-flex-direction:unset;-moz-box-orient:unset;-moz-box-direction:unset;-ms-flex-direction:unset;flex-direction:unset}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__date-new{display:none}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__day-new,.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__date-new{-webkit-box-flex:unset;-webkit-flex-grow:unset;-moz-box-flex:unset;-ms-flex-positive:unset;position:relative;flex-grow:unset;flex-basis:unset;width:100%;max-width:100%;-webkit-flex-basis:unset;-ms-flex-preferred-size:unset}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__right .uagb-timeline__day-new{-webkit-box-ordinal-group:unset;-webkit-order:unset;-moz-box-ordinal-group:unset;-ms-flex-order:unset;order:unset}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__left .uagb-timeline__day-new{-webkit-box-ordinal-group:unset;-webkit-order:unset;-moz-box-ordinal-group:unset;-ms-flex-order:unset;order:unset}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__left .uagb-timeline__date-new{display:none}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__right .uagb-timeline__date-new{display:none}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__field{-webkit-box-orient:horizontal;-webkit-box-direction:reverse;-webkit-flex-direction:row-reverse;-moz-box-orient:horizontal;-moz-box-direction:reverse;-ms-flex-direction:row-reverse;flex-direction:row-reverse}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__day-left .uagb-timeline__events-inner-new,.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__day-right .uagb-timeline__events-inner-new{text-align:right}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__right .uagb-timeline__arrow,.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__left .uagb-timeline__arrow{position:absolute;right:0;left:auto;width:10px;height:40px}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__right .uagb-timeline__arrow{right:-12px}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__left .uagb-timeline__arrow{right:-10px}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__marker,.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__day-new{position:relative;max-width:100%}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__marker{-webkit-flex-shrink:0;-ms-flex-negative:0;flex-grow:0;flex-shrink:0;-webkit-box-flex:0;-webkit-flex-grow:0;-moz-box-flex:0;-ms-flex-positive:0}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__day-new{flex-grow:1;margin-right:16px;-webkit-box-flex:1;-webkit-flex-grow:1;-moz-box-flex:1;-ms-flex-positive:1}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__right .uagb-timeline__arrow::after,.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__left .uagb-timeline__arrow::after{top:50%;transform:translateY(-50%);-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%)}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right{text-align:right}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__day-new,.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__date-new{-webkit-box-flex:unset;-webkit-flex-grow:unset;-moz-box-flex:unset;-ms-flex-positive:unset;position:relative;flex-grow:unset;flex-basis:unset;max-width:100%;-webkit-flex-basis:unset;-ms-flex-preferred-size:unset}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__right .uagb-timeline__day-new{-webkit-box-ordinal-group:unset;-webkit-order:unset;-moz-box-ordinal-group:unset;-ms-flex-order:unset;order:unset}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__left .uagb-timeline__day-new{-webkit-box-ordinal-group:unset;-webkit-order:unset;-moz-box-ordinal-group:unset;-ms-flex-order:unset;order:unset}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__left .uagb-timeline__date-new{display:none}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__right .uagb-timeline__date-new{display:none}}@media screen and (max-width: 767px){.uagb-timeline-responsive-none .uagb-timeline__events-inner-new{padding:15px}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline__date-hide{display:block}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline__day-left .uagb-timeline__events-inner-new,.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline__day-right .uagb-timeline__events-inner-new{text-align:left}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline__marker,.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline__day-new{position:relative;max-width:100%}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline__line{right:auto;left:20px}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline__marker{-webkit-box-ordinal-group:1;-webkit-order:0;-moz-box-ordinal-group:1;-ms-flex-order:0;flex-grow:0;flex-shrink:0;order:0;-webkit-flex-shrink:0;-ms-flex-negative:0;-webkit-box-flex:0;-webkit-flex-grow:0;-moz-box-flex:0;-ms-flex-positive:0}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline__day-new{flex-grow:1;order:1;margin-left:16px;-webkit-box-flex:1;-webkit-flex-grow:1;-moz-box-flex:1;-ms-flex-positive:1;-webkit-box-ordinal-group:2;-webkit-order:1;-moz-box-ordinal-group:2;-ms-flex-order:1}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline__right .uagb-timeline__arrow,.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline__left .uagb-timeline__arrow{position:absolute;width:10px;height:40px}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline__right .uagb-timeline__arrow{left:-10px}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline__left .uagb-timeline__arrow{left:-12px}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline__right .uagb-timeline__arrow::after,.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline__left .uagb-timeline__arrow::after{top:50%;transform:translateY(-50%);-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%)}.uagb-timeline__day-left .uagb-timeline__events-inner-new{text-align:left}.uagb-timeline__left-block .uagb-timeline__date-new{margin-right:10px}.uagb-timeline__center-block.uagb-timeline__responsive-mobile{text-align:left}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline__day-right .uagb-timeline__arrow::after{position:absolute;display:inline;width:0;height:0;border-top:12px solid transparent;border-bottom:12px solid transparent;content:""}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline__field.uagb-timeline__right{-webkit-box-orient:unset;-webkit-box-direction:unset;-webkit-flex-direction:unset;-moz-box-orient:unset;-moz-box-direction:unset;-ms-flex-direction:unset;flex-direction:unset}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline__date-new{display:none}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline__day-new,.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline__date-new{-webkit-box-flex:unset;-webkit-flex-grow:unset;-moz-box-flex:unset;-ms-flex-positive:unset;position:relative;flex-grow:unset;flex-basis:unset;max-width:100%;-webkit-flex-basis:unset;-ms-flex-preferred-size:unset}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline__right .uagb-timeline__day-new{-webkit-box-ordinal-group:unset;-webkit-order:unset;-moz-box-ordinal-group:unset;-ms-flex-order:unset;order:unset}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline__left .uagb-timeline__day-new{-webkit-box-ordinal-group:unset;-webkit-order:unset;-moz-box-ordinal-group:unset;-ms-flex-order:unset;order:unset}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline__left .uagb-timeline__date-new{display:none}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline__right .uagb-timeline__date-new{display:none}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline-res-right .uagb-timeline__field{-webkit-box-orient:horizontal;-webkit-box-direction:reverse;-webkit-flex-direction:row-reverse;-moz-box-orient:horizontal;-moz-box-direction:reverse;-ms-flex-direction:row-reverse;flex-direction:row-reverse}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline-res-right .uagb-timeline__day-left .uagb-timeline__events-inner-new,.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline-res-right .uagb-timeline__day-right .uagb-timeline__events-inner-new{text-align:right}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline-res-right .uagb-timeline__right .uagb-timeline__arrow,.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline-res-right .uagb-timeline__left .uagb-timeline__arrow{position:absolute;right:0;left:auto;width:10px;height:40px}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline-res-right .uagb-timeline__right .uagb-timeline__arrow{right:-12px}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline-res-right .uagb-timeline__left .uagb-timeline__arrow{right:-10px}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline-res-right .uagb-timeline__marker,.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline-res-right .uagb-timeline__day-new{position:relative;max-width:100%}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline-res-right .uagb-timeline__marker{-webkit-flex-shrink:0;-ms-flex-negative:0;flex-grow:0;flex-shrink:0;-webkit-box-flex:0;-webkit-flex-grow:0;-moz-box-flex:0;-ms-flex-positive:0}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline-res-right .uagb-timeline__day-new{flex-grow:1;margin-right:16px;-webkit-box-flex:1;-webkit-flex-grow:1;-moz-box-flex:1;-ms-flex-positive:1}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline-res-right .uagb-timeline__right .uagb-timeline__arrow::after,.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline-res-right .uagb-timeline__left .uagb-timeline__arrow::after{top:50%;transform:translateY(-50%);-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%)}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline-res-right .uagb-timeline__line{position:absolute;right:16px;left:auto;transform:translateX(50%);-webkit-transform:translateX(50%);-ms-transform:translateX(50%)}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline-res-right{text-align:right}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline-res-right .uagb-timeline__day-new,.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline-res-right .uagb-timeline__date-new{-webkit-box-flex:unset;-webkit-flex-grow:unset;-moz-box-flex:unset;-ms-flex-positive:unset;position:relative;flex-grow:unset;flex-basis:unset;max-width:100%;-webkit-flex-basis:unset;-ms-flex-preferred-size:unset}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline-res-right .uagb-timeline__right .uagb-timeline__day-new{-webkit-box-ordinal-group:unset;-webkit-order:unset;-moz-box-ordinal-group:unset;-ms-flex-order:unset;order:unset}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline-res-right .uagb-timeline__left .uagb-timeline__day-new{-webkit-box-ordinal-group:unset;-webkit-order:unset;-moz-box-ordinal-group:unset;-ms-flex-order:unset;order:unset}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline-res-right .uagb-timeline__left .uagb-timeline__date-new{display:none}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline-res-right .uagb-timeline__right .uagb-timeline__date-new{display:none}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline__day-right .uagb-timeline__arrow::after,.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline__day-left .uagb-timeline__arrow::after,.rtl .uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline-res-right .uagb-timeline__day-right .uagb-timeline__arrow::after,.rtl .uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline-res-right .uagb-timeline__day-left .uagb-timeline__arrow::after{border-right:13px solid #eee;border-left:none}.rtl .uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline__day-right .uagb-timeline__arrow::after,.rtl .uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline__day-left .uagb-timeline__arrow::after,.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline-res-right .uagb-timeline__day-right .uagb-timeline__arrow::after,.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline-res-right .uagb-timeline__day-left .uagb-timeline__arrow::after{border-right:none;border-left:13px solid #eee}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline__line,.rtl .uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline-res-right .uagb-timeline__line{right:auto;left:17.5px}.uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline-res-right .uagb-timeline__line,.rtl .uagb-timeline__center-block.uagb-timeline__responsive-mobile .uagb-timeline__line{right:17.5px;left:auto}.uagb-timeline__responsive-mobile.uagb-timeline__center-block .uagb-timeline__author-link,.uagb-timeline__responsive-mobile.uagb-timeline__center-block .uagb-timeline__link_parent,.uagb-timeline__responsive-mobile.uagb-timeline__center-block .uagb-timeline__link,.uagb-timeline__responsive-mobile.uagb-timeline__center-block a.uagb-timeline__image,.uagb-timeline__responsive-mobile.uagb-timeline__center-block .uagb-timeline__image a,.uagb-timeline__responsive-mobile.uagb-timeline__center-block .uagb-timeline__heading,.uagb-timeline__responsive-mobile.uagb-timeline__center-block .uagb-timeline-desc-content,.uagb-timeline__responsive-mobile.uagb-timeline__center-block .uagb-timeline__date-inner,.uagb-timeline__responsive-mobile.uagb-timeline__center-block .uagb-timeline__inner-date-new{text-align:left}.uagb-timeline__responsive-mobile.uagb-timeline__center-block .uagb-timeline__date-hide.uagb-timeline__date-inner{text-align:left}}@media (max-width: 976px){.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__line{position:absolute;right:16px;left:auto;transform:translateX(50%);-webkit-transform:translateX(50%);-ms-transform:translateX(50%)}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__date-hide{display:block}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__day-left .uagb-timeline__events-inner-new,.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__day-right .uagb-timeline__events-inner-new{text-align:left}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__marker,.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__day-new{position:relative;max-width:100%}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__line{right:auto;left:17.5px}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__marker{-ms-flex-order:0;flex-grow:0;flex-shrink:0;order:0;-ms-flex-negative:0;-ms-flex-positive:0}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__day-new{flex-grow:1;order:1;margin-left:16px;-ms-flex-positive:1;-ms-flex-order:1}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__right .uagb-timeline__arrow,.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__left .uagb-timeline__arrow{position:absolute;width:10px;height:40px}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__right .uagb-timeline__arrow{left:-10px}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__left .uagb-timeline__arrow{left:-12px}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__right .uagb-timeline__arrow::after,.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__left .uagb-timeline__arrow::after{top:50%;transform:translateY(-50%);-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%)}.uagb-timeline__center-block.uagb-timeline__responsive-tablet,.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__right{text-align:left}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__day-right .uagb-timeline__arrow::after{position:absolute;display:inline;width:0;height:0;border-top:12px solid transparent;border-bottom:12px solid transparent;content:""}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__field.uagb-timeline__right{-ms-flex-direction:unset;flex-direction:unset}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__date-new{display:none}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__day-new,.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__date-new{-ms-flex-positive:unset;position:relative;flex-grow:unset;flex-basis:unset;width:100%;max-width:100%;-ms-flex-preferred-size:unset}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__right .uagb-timeline__day-new{-ms-flex-order:unset;order:unset}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__left .uagb-timeline__day-new{-ms-flex-order:unset;order:unset}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__left .uagb-timeline__date-new{display:none}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__right .uagb-timeline__date-new{display:none}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__field{-ms-flex-direction:row-reverse;flex-direction:row-reverse}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__day-left .uagb-timeline__events-inner-new,.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__day-right .uagb-timeline__events-inner-new{text-align:right}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__right .uagb-timeline__arrow,.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__left .uagb-timeline__arrow{position:absolute;right:0;left:auto;width:10px;height:40px}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__right .uagb-timeline__arrow{right:-12px}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__left .uagb-timeline__arrow{right:-10px}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__marker,.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__day-new{position:relative;max-width:100%}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__marker{-ms-flex-negative:0;flex-grow:0;flex-shrink:0;-ms-flex-positive:0}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__day-new{flex-grow:1;margin-right:16px;-ms-flex-positive:1}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__right .uagb-timeline__arrow::after,.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__left .uagb-timeline__arrow::after{top:50%;transform:translateY(-50%);-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%)}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right{text-align:right}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__day-new,.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__date-new{-ms-flex-positive:unset;position:relative;flex-grow:unset;flex-basis:unset;max-width:100%;-ms-flex-preferred-size:unset}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__right .uagb-timeline__day-new{-ms-flex-order:unset;order:unset}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__left .uagb-timeline__day-new{-ms-flex-order:unset;order:unset}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__left .uagb-timeline__date-new,.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline-res-right .uagb-timeline__right .uagb-timeline__date-new{display:none}.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__day-right .uagb-timeline__arrow::after,.uagb-timeline__center-block.uagb-timeline__responsive-tablet .uagb-timeline__day-left .uagb-timeline__arrow::after{border-right:13px solid #eee;border-left:none}.uagb-timeline__responsive-tablet.uagb-timeline__center-block .uagb-timeline__author-link,.uagb-timeline__responsive-tablet.uagb-timeline__center-block .uagb-timeline__link_parent,.uagb-timeline__responsive-tablet.uagb-timeline__center-block .uagb-timeline__link,.uagb-timeline__responsive-tablet.uagb-timeline__center-block a.uagb-timeline__image,.uagb-timeline__responsive-tablet.uagb-timeline__center-block .uagb-timeline__image a,.uagb-timeline__responsive-tablet.uagb-timeline__center-block .uagb-timeline__heading,.uagb-timeline__responsive-tablet.uagb-timeline__center-block .uagb-timeline-desc-content,.uagb-timeline__responsive-tablet.uagb-timeline__center-block .uagb-timeline__date-inner,.uagb-timeline__responsive-tablet.uagb-timeline__center-block .uagb-timeline__inner-date-new{text-align:left}.uagb-timeline__responsive-tablet.uagb-timeline__center-block .uagb-timeline__date-hide.uagb-timeline__date-inner{text-align:left}}.wp-block-uagb-content-timeline .wp-block-uagb-content-timeline-child .uagb-timeline__events-inner--content .uagb-timeline__heading{margin-top:unset}.wp-block-uagb-content-timeline .wp-block-uagb-content-timeline-child .uagb-timeline__events-inner--content p.uagb-timeline-desc-content{margin-bottom:unset}.wp-block-uagb-content-timeline .uagb-timeline__content-wrap .uagb-timeline__field{display:unset}.wp-block-uagb-content-timeline .uagb-timeline__content-wrap .uagb-timeline__field .uagb-timeline__widget{position:relative;display:flex;align-items:flex-start;font-size:inherit;color:inherit;margin-bottom:inherit}.wp-block-uagb-content-timeline .uagb-timeline__content-wrap.uagb-timeline__left-block .uagb-timeline__date-new{display:none}.wp-block-uagb-content-timeline .uagb-timeline__content-wrap.uagb-timeline__right-block .uagb-timeline__date-new{display:none}.wp-block-uagb-content-timeline .uagb-timeline__content-wrap.uagb-timeline__center-block .uagb-timeline__widget.uagb-timeline__right{flex-direction:row-reverse}.wp-block-uagb-content-timeline .uagb-timeline__content-wrap.uagb-timeline__center-block .uagb-timeline__marker{order:1;flex-shrink:0;flex-grow:0}.wp-block-uagb-content-timeline .uagb-timeline__content-wrap.uagb-timeline__center-block .uagb-timeline__right .uagb-timeline__day-new{order:2;padding-left:0;padding-right:12px}.wp-block-uagb-content-timeline .uagb-timeline__content-wrap.uagb-timeline__center-block .uagb-timeline__left .uagb-timeline__day-new{order:2;padding-right:0;padding-left:12px}.wp-block-uagb-content-timeline .uagb-timeline__content-wrap.uagb-timeline__center-block .uagb-timeline__right .uagb-timeline__arrow{right:0;top:0;width:10px;height:40px;position:absolute}.wp-block-uagb-content-timeline .uagb-timeline__content-wrap.uagb-timeline__center-block .uagb-timeline__left .uagb-timeline__arrow{left:0;top:0;width:10px;height:40px;position:absolute}.wp-block-uagb-content-timeline .uagb-timeline__content-wrap.uagb-timeline__right-block .uagb-timeline__widget{flex-direction:row-reverse}.wp-block-uagb-content-timeline .uagb-timeline__content-wrap.uagb-timeline__arrow-center .uagb-timeline__widget{align-items:center}.wp-block-uagb-content-timeline .uagb-timeline__content-wrap.uagb-timeline__arrow-center .uagb-timeline__left .uagb-timeline__arrow,.wp-block-uagb-content-timeline .uagb-timeline__content-wrap.uagb-timeline__arrow-center .uagb-timeline__right .uagb-timeline__arrow{top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}
.wp-block-uagb-countdown{display:flex;justify-content:center;text-align:center}.wp-block-uagb-countdown .wp-block-uagb-countdown__box{transition:box-shadow 0.2s ease}.wp-block-uagb-countdown__box{position:relative;display:flex;flex-direction:column;width:155px;height:155px;aspect-ratio:1;justify-content:center}@media (max-width: 976px){.wp-block-uagb-countdown__box{width:100px;height:100px}}@media (max-width: 767px){.wp-block-uagb-countdown__box{width:65px;height:65px}}.wp-block-uagb-countdown__time{font-size:52px}@media (max-width: 976px){.wp-block-uagb-countdown__time{font-size:32px}}.wp-block-uagb-countdown__label{font-size:14px}@media (max-width: 976px){.wp-block-uagb-countdown__label{font-size:12px}}.wp-block-uagb-countdown .wp-block-uagb-countdown-innerblocks{text-align:initial}html:not([dir="rtl"]) .wp-block-uagb-countdown__box:not(:last-child){margin-right:38px}html:not([dir="rtl"]) .wp-block-uagb-countdown__box:not(:last-child) .wp-block-uagb-countdown__time::after{position:absolute;right:0}html:not([dir="rtl"]) .wp-block-uagb-countdown__box.wp-block-uagb-countdown__box-seconds .wp-block-uagb-countdown__time-seconds::after{display:none}html:not([dir="rtl"]) .wp-block-uagb-countdown>.wp-block-uagb-countdown__box.wp-block-uagb-countdown__box-seconds:not(:last-child){margin-right:unset}.wp-block-uagb-countdown-innerblocks{display:none}html[dir="rtl"] .wp-block-uagb-countdown__box:not(:first-child){margin-right:38px}html[dir="rtl"] .wp-block-uagb-countdown__box:not(:first-child) .wp-block-uagb-countdown__time::before{position:absolute;right:0}body[class*="astra"] .wp-block-uagb-countdown{line-height:normal}
.wp-block-uagb-counter .wp-block-uagb-counter__icon,.wp-block-uagb-counter .wp-block-uagb-counter__image-wrap{display:inline-block;line-height:0}.wp-block-uagb-counter--number .wp-block-uagb-counter__number{font-size:52px;color:#3a3a3a}.wp-block-uagb-counter--number .wp-block-uagb-counter__icon{margin-bottom:10px}.wp-block-uagb-counter--bars{display:flex;flex-direction:column}.wp-block-uagb-counter--bars .wp-block-uagb-counter-bars-container{width:100%;background-color:#eaeaea}.wp-block-uagb-counter--bars .wp-block-uagb-counter-bars-container .wp-block-uagb-counter__number{width:0%;min-height:5px;text-align:right;line-height:1;white-space:nowrap;overflow:hidden;background:#007cba;display:flex;justify-content:flex-end;align-items:center}.rtl .wp-block-uagb-counter--bars .wp-block-uagb-counter-bars-container .wp-block-uagb-counter__number{flex-direction:row-reverse;justify-content:flex-start}.wp-block-uagb-counter--bars .wp-block-uagb-counter-bars-container .wp-block-uagb-counter__number>:last-child{margin-right:5px}.wp-block-uagb-counter--bars .wp-block-uagb-counter__title{margin-top:15px}.wp-block-uagb-counter--bars .wp-block-uagb-counter__number{color:#fff;padding-top:5px;padding-bottom:5px}.wp-block-uagb-counter--circle .wp-block-uagb-counter-circle-container{position:relative;display:inline-block;width:100%}.wp-block-uagb-counter--circle .wp-block-uagb-counter-circle-container .wp-block-uagb-counter__icon svg{width:30px}.wp-block-uagb-counter--circle .wp-block-uagb-counter-circle-container svg{pointer-events:none}.wp-block-uagb-counter--circle .wp-block-uagb-counter-circle-container>svg{transform:rotate(-90deg);width:100%;height:100%}.wp-block-uagb-counter--circle .wp-block-uagb-counter-circle-container>svg circle{stroke:#eaeaea;stroke-width:1em;fill:transparent}.wp-block-uagb-counter--circle .wp-block-uagb-counter-circle-container>svg .uagb-counter-circle__progress{stroke:#007cba}.wp-block-uagb-counter--circle .wp-block-uagb-counter-circle-container__content{position:absolute;left:0;right:0;top:0;bottom:0;display:flex;justify-content:center;align-items:center;flex-direction:column;z-index:1}.wp-block-uagb-counter--circle .wp-block-uagb-counter__number{margin-top:5px;font-size:52px;color:#3a3a3a}.wp-block-uagb-counter--circle .wp-block-uagb-counter__title{margin-top:5px}.wp-block-uagb-counter__icon svg{width:30px}.wp-block-uagb-counter__title{margin-top:10px;margin-bottom:17px;font-size:16px}body[class*="astra"] .wp-block-uagb-counter__title,body[class*="astra"] .wp-block-uagb-counter__number{line-height:normal}
.wp-block-uagb-faq{width:100%}.wp-block-uagb-faq.uagb-faq-layout-accordion .uagb-faq-child__outer-wrap .uagb-faq-questions-button{cursor:pointer}.wp-block-uagb-faq .uagb-faq-content{margin-bottom:0}.wp-block-uagb-faq .uagb-faq-content p{margin:auto}.uagb-faq-layout-grid.uagb-faq-equal-height.uagb-faq__wrap .uagb-faq-child__outer-wrap,.uagb-faq-layout-grid.uagb-faq-equal-height.uagb-faq__wrap .uagb-faq-item{height:100%}body[class*="astra"] .uagb-faq-questions{line-height:normal}.uagb-faq-item{overflow:hidden}
.wp-block-uagb-faq-child .uagb-faq-questions-button{display:flex;align-items:center}.wp-block-uagb-faq-child .uagb-faq-questions-button .uagb-faq-icon-wrap{display:flex;align-items:center}.wp-block-uagb-faq-child .uagb-faq-questions-button .uagb-question{width:100%;margin-top:0;margin-bottom:0}.wp-block-uagb-faq-child .uagb-icon svg,.wp-block-uagb-faq-child .uagb-icon-active svg{width:15px;height:15px;font-size:15px}.wp-block-uagb-faq-child.uagb-faq-child__outer-wrap.uagb-faq-item .uagb-icon-active,.wp-block-uagb-faq-child.uagb-faq-child__outer-wrap.uagb-faq-item.uagb-faq-item-active .uagb-icon,.wp-block-uagb-faq-child.uagb-faq-child__outer-wrap .uagb-faq-item .uagb-icon-active,.wp-block-uagb-faq-child.uagb-faq-child__outer-wrap .uagb-faq-item.uagb-faq-item-active .uagb-icon{display:none;width:0;padding:0;height:0;margin:0}.wp-block-uagb-faq-child.uagb-faq-child__outer-wrap.uagb-faq-item .uagb-icon,.wp-block-uagb-faq-child.uagb-faq-child__outer-wrap.uagb-faq-item.uagb-faq-item-active .uagb-icon-active,.wp-block-uagb-faq-child.uagb-faq-child__outer-wrap .uagb-faq-item .uagb-icon,.wp-block-uagb-faq-child.uagb-faq-child__outer-wrap .uagb-faq-item.uagb-faq-item-active .uagb-icon-active{display:flex;width:auto;height:auto}.uagb-faq-layout-grid .uagb-faq-child__outer-wrap.uagb-faq-item .uagb-icon,.uagb-faq-layout-grid .uagb-faq-child__outer-wrap.uagb-faq-item.uagb-faq-item-active .uagb-icon-active,.uagb-faq-layout-grid .uagb-faq-child__outer-wrap .uagb-faq-item .uagb-icon,.uagb-faq-layout-grid .uagb-faq-child__outer-wrap .uagb-faq-item.uagb-faq-item-active .uagb-icon-active{display:none}.uagb-faq-layout-grid .uagb-faq-child__outer-wrap.uagb-faq-item span.uagb-icon-active.uagb-faq-icon-wrap,.uagb-faq-layout-grid .uagb-faq-child__outer-wrap.uagb-faq-item.uagb-faq-item-active .uagb-icon-active,.uagb-faq-layout-grid .uagb-faq-child__outer-wrap .uagb-faq-item span.uagb-icon-active.uagb-faq-icon-wrap,.uagb-faq-layout-grid .uagb-faq-child__outer-wrap .uagb-faq-item.uagb-faq-item-active .uagb-icon-active{display:none}
.uagb-forms__outer-wrap .uagb-forms-input,.uagb-forms__outer-wrap .uagb-forms-input::placeholder,.uagb-forms__outer-wrap .uagb-forms-input-label,.uagb-forms__outer-wrap .uagb-forms-main-submit-button,.uagb-forms__outer-wrap .uagb-forms-success-message,.uagb-forms__outer-wrap .uagb-forms-failed-message{-webkit-transition-property:color, background-color, border-color;-moz-transition-property:color, background-color, border-color;-o-transition-property:color, background-color, border-color;transition-property:color, background-color, border-color;-webkit-transition-duration:0.15s;-moz-transition-duration:0.15s;-o-transition-duration:0.15s;transition-duration:0.15s}.uagb-forms__outer-wrap .uagb-forms-main-form .uagb-forms-input,.uagb-forms__outer-wrap .uagb-forms-main-form input[type="text"]{min-height:0 !important}.uagb-forms__outer-wrap .uagb-forms-main-form .uagb-forms-input::-webkit-input-placeholder,.uagb-forms__outer-wrap .uagb-forms-main-form input[type="text"]::-webkit-input-placeholder{overflow:unset}.uagb-forms__outer-wrap .uagb-forms-main-form input:not([type="checkbox"]):not([type="radio"]):not([type="file"]),.uagb-forms__outer-wrap .uagb-forms-main-form textarea,.uagb-forms__outer-wrap .uagb-forms-main-form select{width:100%;box-sizing:border-box}.uagb-forms__outer-wrap .uagb-forms-main-form .uagb-forms-checkbox-wrap .uagb-form-checkbox-option input.uagb-inner-input-view{width:33%}.uagb-forms__outer-wrap .uagb-forms-main-form .uagb-forms-phone-wrap .uagb-form-phone-country{width:25%;margin-right:5px}.uagb-forms__outer-wrap .uagb-forms-main-form .uagb-forms-phone-wrap .uagb-forms-phone-input{width:75% !important}.uagb-forms__outer-wrap .uagb-forms-main-form .uagb-forms-phone-flex{display:flex;width:100%;justify-content:space-between}.uagb-forms__outer-wrap .uagb-forms-main-form .uagb-forms-phone-flex .uagb-form-phone-country{width:25%;margin-right:5px}.uagb-forms__outer-wrap .uagb-forms-main-form .required::after{color:#f00;content:" *"}.uagb-forms__outer-wrap .uagb-forms-main-form .uagb-forms-form-hidden-data{display:none}.uagb-forms__outer-wrap .uagb-forms-submit-message-hide{display:none}.uagb-forms__outer-wrap .uagb-forms-success-message{padding:20px 20px}.uagb-forms__outer-wrap .uagb-forms-failed-message{padding:20px 20px}.uagb-forms__outer-wrap span.components-spinner{float:none}.uagb-forms__outer-wrap .uagb-forms-input.uagb-form-phone-country{background-color:#fff}.uagb-forms__outer-wrap .uag-col-2-wrap{display:grid;grid-template-columns:1fr 1fr;column-gap:15px}.uagb-forms__outer-wrap .uag-col-3-wrap{display:grid;grid-template-columns:1fr 1fr 1fr;column-gap:15px}.uagb-forms__outer-wrap .uag-col-4-wrap{display:grid;grid-template-columns:1fr 1fr 1fr 1fr;column-gap:15px}.uagb-forms__outer-wrap .uagb-switch{position:relative;display:inline-block;width:50px;height:25px}.uagb-forms__outer-wrap .uagb-switch input{width:0;height:0;opacity:0}.uagb-forms__outer-wrap .uagb-slider{position:absolute;top:0;right:0;bottom:0;left:0;background-color:#fff;cursor:pointer;transition:0.4s;-webkit-transition:0.4s}.uagb-forms__outer-wrap .uagb-switch .uagb-slider::before{position:absolute;width:20px;height:20px;background-color:#000;transition:0.4s;content:"";-webkit-transition:0.4s}.uagb-forms__outer-wrap .uagb-switch input:checked+.uagb-slider::before{background-color:#fff}.uagb-forms__outer-wrap .uagb-slider.round::before{border-radius:50% !important}.uagb-forms-radio-wrap input[type="radio"]:checked+label::before{line-height:1.2;content:" "}.uagb-forms-radio-wrap input[type="radio"]+label::before{display:inline-block;vertical-align:middle;margin-right:10px;margin-bottom:5px;box-sizing:content-box;text-align:center;line-height:1.2;content:""}.uagb-forms-radio-wrap input[type="radio"].round+label::before{border-radius:100% !important}select::after,select::before{padding:10px}.uagb-forms-radio-wrap input[type="radio"],.uagb-forms-checkbox-wrap input[type="checkbox"],.uagb-forms-accept-wrap input[type="checkbox"]{opacity:0}.uagb-forms-checkbox-wrap input[type="checkbox"]:checked+label::before,.uagb-forms-accept-wrap input[type="checkbox"]:checked+label::before{line-height:1.2;content:"\\2714"}.uagb-forms-checkbox-wrap input[type="checkbox"]+label::before,.uagb-forms-accept-wrap input[type="checkbox"]+label::before{display:inline-block;vertical-align:middle;margin-right:10px;margin-bottom:5px;box-sizing:content-box;text-align:center;line-height:1.2;content:" "}@media only screen and (max-width: 767px){.uagb-forms__outer-wrap .uagb-forms-main-form .uagb-forms-phone-flex{display:flex;width:100%}.uagb-forms__outer-wrap .uagb-forms-main-form .uagb-forms-phone-flex .uagb-form-phone-country{width:25%}}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-column-gap-20 .uagb-forms-main-form{column-gap:20px}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-column-gap-15 .uagb-forms-main-form{column-gap:15px}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-column-gap-10 .uagb-forms-main-form{column-gap:10px}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-column-gap-5 .uagb-forms-main-form{column-gap:5px}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-button-desk-width-20 .uagb-forms-main-submit-button-wrap{width:20%}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-button-desk-width-25 .uagb-forms-main-submit-button-wrap{width:25%}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-button-desk-width-33 .uagb-forms-main-submit-button-wrap{width:33.33%}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-button-desk-width-40 .uagb-forms-main-submit-button-wrap{width:40%}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-button-desk-width-50 .uagb-forms-main-submit-button-wrap{width:50%}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-button-desk-width-60 .uagb-forms-main-submit-button-wrap{width:60%}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-button-desk-width-66 .uagb-forms-main-submit-button-wrap{width:66.66%}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-button-desk-width-75 .uagb-forms-main-submit-button-wrap{width:75%}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-button-desk-width-80 .uagb-forms-main-submit-button-wrap{width:80%}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-align-item-flex-start .uagb-forms-main-form{align-items:flex-start}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-align-item-center .uagb-forms-main-form{align-items:center}.wp-block-uagb-forms.uagb-forms-inline-field .uagb-forms-main-form{display:flex;flex-wrap:wrap;margin:0 -5px;position:relative;text-align:left}.wp-block-uagb-forms.uagb-forms-inline-field .uagb-forms-main-form .uagb-forms-field-desk-width-20{width:20%}.wp-block-uagb-forms.uagb-forms-inline-field .uagb-forms-main-form .uagb-forms-field-desk-width-25{width:25%}.wp-block-uagb-forms.uagb-forms-inline-field .uagb-forms-main-form .uagb-forms-field-desk-width-33{width:33.33%}.wp-block-uagb-forms.uagb-forms-inline-field .uagb-forms-main-form .uagb-forms-field-desk-width-40{width:40%}.wp-block-uagb-forms.uagb-forms-inline-field .uagb-forms-main-form .uagb-forms-field-desk-width-50{width:50%}.wp-block-uagb-forms.uagb-forms-inline-field .uagb-forms-main-form .uagb-forms-field-desk-width-60{width:60%}.wp-block-uagb-forms.uagb-forms-inline-field .uagb-forms-main-form .uagb-forms-field-desk-width-66{width:66.66%}.wp-block-uagb-forms.uagb-forms-inline-field .uagb-forms-main-form .uagb-forms-field-desk-width-75{width:75%}.wp-block-uagb-forms.uagb-forms-inline-field .uagb-forms-main-form .uagb-forms-field-desk-width-80{width:80%}@media (min-width: 768px) and (max-width: 1024px){.wp-block-uagb-forms.uagb-forms-inline-field .uagb-forms-main-form .uagb-forms-field-tablet-width-20{width:20%}.wp-block-uagb-forms.uagb-forms-inline-field .uagb-forms-main-form .uagb-forms-field-tablet-width-25{width:25%}.wp-block-uagb-forms.uagb-forms-inline-field .uagb-forms-main-form .uagb-forms-field-tablet-width-33{width:33.33%}.wp-block-uagb-forms.uagb-forms-inline-field .uagb-forms-main-form .uagb-forms-field-tablet-width-40{width:40%}.wp-block-uagb-forms.uagb-forms-inline-field .uagb-forms-main-form .uagb-forms-field-tablet-width-50{width:50%}.wp-block-uagb-forms.uagb-forms-inline-field .uagb-forms-main-form .uagb-forms-field-tablet-width-60{width:60%}.wp-block-uagb-forms.uagb-forms-inline-field .uagb-forms-main-form .uagb-forms-field-tablet-width-66{width:66.66%}.wp-block-uagb-forms.uagb-forms-inline-field .uagb-forms-main-form .uagb-forms-field-tablet-width-75{width:75%}.wp-block-uagb-forms.uagb-forms-inline-field .uagb-forms-main-form .uagb-forms-field-tablet-width-80{width:80%}.wp-block-uagb-forms.uagb-forms-inline-field .uagb-forms-main-form .uagb-forms-field-tablet-width-100{width:100%}.wp-block-uagb-forms.uagb-forms-inline-field .uagb-forms-main-form .uagb-forms-field-tablet-width-unset{width:auto}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-button-tablet-width-20 .uagb-forms-main-submit-button-wrap{width:20%}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-button-tablet-width-25 .uagb-forms-main-submit-button-wrap{width:25%}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-button-tablet-width-33 .uagb-forms-main-submit-button-wrap{width:33.33%}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-button-tablet-width-40 .uagb-forms-main-submit-button-wrap{width:40%}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-button-tablet-width-50 .uagb-forms-main-submit-button-wrap{width:50%}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-button-tablet-width-60 .uagb-forms-main-submit-button-wrap{width:60%}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-button-tablet-width-66 .uagb-forms-main-submit-button-wrap{width:66.66%}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-button-tablet-width-75 .uagb-forms-main-submit-button-wrap{width:75%}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-button-tablet-width-80 .uagb-forms-main-submit-button-wrap{width:80%}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-button-tablet-width-100 .uagb-forms-main-submit-button-wrap{width:100%}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-button-tablet-width-unset .uagb-forms-main-submit-button-wrap{width:auto}}@media (max-width: 767px){.wp-block-uagb-forms.uagb-forms-inline-field .uagb-forms-main-form .uagb-forms-field-mobile-width-20{width:20%}.wp-block-uagb-forms.uagb-forms-inline-field .uagb-forms-main-form .uagb-forms-field-mobile-width-25{width:25%}.wp-block-uagb-forms.uagb-forms-inline-field .uagb-forms-main-form .uagb-forms-field-mobile-width-33{width:33.33%}.wp-block-uagb-forms.uagb-forms-inline-field .uagb-forms-main-form .uagb-forms-field-mobile-width-40{width:40%}.wp-block-uagb-forms.uagb-forms-inline-field .uagb-forms-main-form .uagb-forms-field-mobile-width-50{width:50%}.wp-block-uagb-forms.uagb-forms-inline-field .uagb-forms-main-form .uagb-forms-field-mobile-width-60{width:60%}.wp-block-uagb-forms.uagb-forms-inline-field .uagb-forms-main-form .uagb-forms-field-mobile-width-66{width:66.66%}.wp-block-uagb-forms.uagb-forms-inline-field .uagb-forms-main-form .uagb-forms-field-mobile-width-75{width:75%}.wp-block-uagb-forms.uagb-forms-inline-field .uagb-forms-main-form .uagb-forms-field-mobile-width-80{width:80%}.wp-block-uagb-forms.uagb-forms-inline-field .uagb-forms-main-form .uagb-forms-field-mobile-width-100{width:100%}.wp-block-uagb-forms.uagb-forms-inline-field .uagb-forms-main-form .uagb-forms-field-mobile-width-unset{width:auto}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-button-mobile-width-20 .uagb-forms-main-submit-button-wrap{width:20%}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-button-mobile-width-25 .uagb-forms-main-submit-button-wrap{width:25%}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-button-mobile-width-33 .uagb-forms-main-submit-button-wrap{width:33.33%}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-button-mobile-width-40 .uagb-forms-main-submit-button-wrap{width:40%}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-button-mobile-width-50 .uagb-forms-main-submit-button-wrap{width:50%}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-button-mobile-width-60 .uagb-forms-main-submit-button-wrap{width:60%}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-button-mobile-width-66 .uagb-forms-main-submit-button-wrap{width:66.66%}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-button-mobile-width-75 .uagb-forms-main-submit-button-wrap{width:75%}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-button-mobile-width-80 .uagb-forms-main-submit-button-wrap{width:80%}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-button-mobile-width-100 .uagb-forms-main-submit-button-wrap{width:100%}.wp-block-uagb-forms.uagb-forms-inline-field.uagb-forms-button-mobile-width-unset .uagb-forms-main-submit-button-wrap{width:auto}}
.uagb-gf-styler__check-style-enabled .gform_wrapper .chosen-container-multi .chosen-choices,.uagb-gf-styler__check-style-enabled .gform_wrapper .chosen-container-single .chosen-single{position:relative;display:block;height:auto;padding:0;box-shadow:none;background:#fff;border:1px solid #aaa;border-radius:0;color:#444;text-decoration:none;white-space:nowrap;overflow:hidden;-webkit-border-radius:0;-webkit-box-shadow:none}.uagb-gf-styler__gform-heading-none .gform_wrapper .gform_heading,.uagb-gf-styler__gform-heading-no .gform_wrapper .gform_heading,.uagb-gf-styler__gform-heading-yes .gform_wrapper .gform_heading.custom_gform_heading{display:none}.uagb-gf-styler__gform-heading-no .gform_wrapper .gform_heading.custom_gform_heading,.uagb-gf-styler__gform-heading-yes .gform_wrapper .gform_heading{display:block}.uagb-gf-styler__check-style-enabled .gform_wrapper .chosen-container-single .chosen-single span{line-height:1}.uagb-gf-styler__check-style-enabled .gform_wrapper .chosen-container-active.chosen-with-drop .chosen-single{background:#fff}.uagb-gf-styler__check-style-enabled .gform_page .gform_page_footer input[type="button"],.uagb-gf-styler__check-style-enabled .gform_page .gform_page_footer input[type="submit"]{display:inline-block}.uagb-gf-styler__check-style-enabled .gform_wrapper .gf_progressbar_wrapper h3.gf_progressbar_title,.uagb-gf-styler__check-style-enabled .gform_wrapper .gf_progressbar_wrapper .gf_progressbar_title{opacity:1}.uagb-gf-styler__check-style-enabled .uag-gf-select-custom{position:relative}.uagb-gf-styler__check-style-enabled .uag-gf-select-custom::after{position:absolute;top:45%;right:0.5em;z-index:5;font-family:FontAwesome, serif !important;font-size:0.7em;line-height:1;transform:translateY(-45%);content:"\\f078";pointer-events:none;-webkit-transform:translateY(-45%);-ms-transform:translateY(-45%)}.uagb-gf-styler__check-style-enabled span.name_prefix_select .uag-gf-select-custom{display:inline;vertical-align:middle}.uagb-gf-styler__check-style-enabled .gfield_radio input[type="radio"]:checked+label::before{box-shadow:inset 0 0 0 4px #fafafa}.uagb-gf-styler__check-style-enabled .gfield_checkbox input[type="checkbox"]+label::before,.uagb-gf-styler__check-style-enabled .gfield_radio input[type="radio"]+label::before,.uagb-gf-styler__check-style-enabled .ginput_container_consent input[type="checkbox"]+label::before{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}.uagb-gf-styler__check-style-enabled .ginput_container_consent input[type="checkbox"]:checked+label::before{font-weight:700}.uagb-gf-styler__check-style-enabled select,.uagb-gf-styler__check-style-enabled .chosen-single{-webkit-appearance:none;-moz-appearance:none;appearance:none}.uagb-gf-styler__check-style-enabled .gform_wrapper div.validation_error{border-top:none;border-bottom:none}.uagb-gf-styler__check-style-enabled .gform_wrapper .gfield_radio li label{margin:0 0 0 0}.uagb-gf-styler__check-style-enabled .gform_wrapper .gform_body{width:100% !important}.wp-block-uagb-gf-styler .gform_wrapper .gform_fields,.wp-block-uagb-gf-styler .gform_wrapper .gform_footer{pointer-events:auto}.uagb-gf-styler__check-style-enabled .gform_wrapper input[type="checkbox"]:checked+label::before,.uagb-gf-styler__check-style-enabled .gform_wrapper input[type="radio"]:checked+label::before,.uagb-gf-styler__check-style-enabled .gform_wrapper input[type="checkbox"]+label::before,.uagb-gf-styler__check-style-enabled .gform_wrapper input[type="radio"]+label::before{-webkit-box-sizing:content-box !important;-moz-box-sizing:content-box !important;box-sizing:content-box !important}.uagb-gf-styler__check-style-enabled .gform_wrapper .gsection{margin-right:0}.uag-gf-btn-size-xs .uagb-gf-styler__check-style-enabled input[type="submit"],.uag-gf-btn-size-xs .uagb-gf-styler__check-style-enabled input[type="button"]{padding:10px 20px;border-radius:2px;font-size:13px;-webkit-border-radius:2px}.uag-gf-input-size-xs .uagb-gf-styler__check-style-enabled .gform_body input:not([type="radio"]):not([type="checkbox"]):not([type="submit"]):not([type="button"]):not([type="image"]):not([type="file"]),.uag-gf-input-size-xs .uagb-gf-styler__check-style-enabled .ginput_container textarea,.uag-gf-input-size-xs .uagb-gf-styler__check-style-enabled .ginput_container .chosen-single,.uag-gf-input-size-xs .uagb-gf-styler__check-style-enabled .ginput_container .chosen-choices{padding:8px 10px;font-size:13px}.uag-gf-input-size-xs .uagb-gf-styler__check-style-enabled .ginput_container select{padding:6px 10px;font-size:13px}.ginput_container select{height:100%;line-height:inherit}.uag-gf-input-size-xs .uagb-gf-styler__check-style-enabled .uag-gf-select-custom{font-size:13px}.uag-gf-input-size-xs .uagb-gf-styler__check-style-enabled .gfield_checkbox input[type="checkbox"]+label::before,.uag-gf-input-size-xs .uagb-gf-styler__check-style-enabled .gfield_radio input[type="radio"]+label::before,.uag-gf-input-size-xs .uagb-gf-styler__check-style-enabled .ginput_container_consent input[type="checkbox"]+label::before{width:10px;height:10px}.uag-gf-input-size-xs .uagb-gf-styler__check-style-enabled .gfield_checkbox input[type="checkbox"]:checked+label::before,.uag-gf-input-size-xs .uagb-gf-styler__check-style-enabled .ginput_container_consent input[type="checkbox"]+label::before{font-size:-webkit-calc(10px / 1.2);font-size:calc(10px / 1.2)}.uag-gf-btn-size-sm .uagb-gf-styler__check-style-enabled input[type="submit"],.uag-gf-btn-size-sm .uagb-gf-styler__check-style-enabled input[type="button"]{padding:12px 24px;border-radius:3px;font-size:15px;-webkit-border-radius:3px}.uag-gf-input-size-sm .uagb-gf-styler__check-style-enabled .gform_body input:not([type="radio"]):not([type="checkbox"]):not([type="submit"]):not([type="button"]):not([type="image"]):not([type="file"]),.uag-gf-input-size-sm .uagb-gf-styler__check-style-enabled .ginput_container textarea,.uag-gf-input-size-sm .uagb-gf-styler__check-style-enabled .ginput_container .chosen-single,.uag-gf-input-size-sm .uagb-gf-styler__check-style-enabled .ginput_container .chosen-choices{padding:12px 10px;font-size:15px}.uag-gf-input-size-sm .uagb-gf-styler__check-style-enabled .ginput_container select{padding:10px 10px;font-size:15px}.uag-gf-input-size-sm .uagb-gf-styler__check-style-enabled .uag-gf-select-custom{font-size:15px}.uag-gf-input-size-sm .uagb-gf-styler__check-style-enabled .gfield_checkbox input[type="checkbox"]+label::before,.uag-gf-input-size-sm .uagb-gf-styler__check-style-enabled .gfield_radio input[type="radio"]+label::before,.uag-gf-input-size-sm .uagb-gf-styler__check-style-enabled .ginput_container_consent input[type="checkbox"]+label::before{width:12px;height:12px}.uag-gf-input-size-sm .uagb-gf-styler__check-style-enabled .gfield_checkbox input[type="checkbox"]:checked+label::before,.uag-gf-input-size-sm .uagb-gf-styler__check-style-enabled .ginput_container_consent input[type="checkbox"]+label::before{font-size:-webkit-calc(12px / 1.2);font-size:calc(12px / 1.2)}.uag-gf-btn-size-md .uagb-gf-styler__check-style-enabled input[type="submit"],.uag-gf-btn-size-md .uagb-gf-styler__check-style-enabled input[type="button"]{padding:15px 30px;border-radius:4px;font-size:16px;-webkit-border-radius:4px}.uag-gf-input-size-md .uagb-gf-styler__check-style-enabled .gform_body input:not([type="radio"]):not([type="checkbox"]):not([type="submit"]):not([type="button"]):not([type="image"]):not([type="file"]),.uag-gf-input-size-md .uagb-gf-styler__check-style-enabled .ginput_container textarea,.uag-gf-input-size-md .uagb-gf-styler__check-style-enabled .ginput_container .chosen-single,.uag-gf-input-size-md .uagb-gf-styler__check-style-enabled .ginput_container .chosen-choices{padding:15px 10px;font-size:16px}.uag-gf-input-size-md .uagb-gf-styler__check-style-enabled .ginput_container select{padding:13px 10px;font-size:16px}.uag-gf-input-size-md .uagb-gf-styler__check-style-enabled .uag-gf-select-custom{font-size:16px}.uag-gf-input-size-md .uagb-gf-styler__check-style-enabled .gfield_checkbox input[type="checkbox"]+label::before,.uag-gf-input-size-md .uagb-gf-styler__check-style-enabled .gfield_radio input[type="radio"]+label::before,.uag-gf-input-size-md .uagb-gf-styler__check-style-enabled .ginput_container_consent input[type="checkbox"]+label::before{width:15px;height:15px}.uag-gf-input-size-md .uagb-gf-styler__check-style-enabled .gfield_checkbox input[type="checkbox"]:checked+label::before,.uag-gf-input-size-md .uagb-gf-styler__check-style-enabled .ginput_container_consent input[type="checkbox"]+label::before{font-size:-webkit-calc(15px / 1.2);font-size:calc(15px / 1.2)}.uag-gf-btn-size-lg .uagb-gf-styler__check-style-enabled input[type="submit"],.uag-gf-btn-size-lg .uagb-gf-styler__check-style-enabled input[type="button"]{padding:20px 40px;border-radius:5px;font-size:18px;-webkit-border-radius:5px}.uag-gf-input-size-lg .uagb-gf-styler__check-style-enabled .gform_body input:not([type="radio"]):not([type="checkbox"]):not([type="submit"]):not([type="button"]):not([type="image"]):not([type="file"]),.uag-gf-input-size-lg .uagb-gf-styler__check-style-enabled .ginput_container textarea,.uag-gf-input-size-lg .uagb-gf-styler__check-style-enabled .ginput_container .chosen-single,.uag-gf-input-size-lg .uagb-gf-styler__check-style-enabled .ginput_container .chosen-choices{padding:20px 10px;font-size:18px}.uag-gf-input-size-lg .uagb-gf-styler__check-style-enabled .ginput_container select{padding:18px 10px;font-size:18px}.uag-gf-input-size-lg .uagb-gf-styler__check-style-enabled .uag-gf-select-custom{font-size:18px}.uag-gf-input-size-lg .uagb-gf-styler__check-style-enabled .gfield_checkbox input[type="checkbox"]+label::before,.uag-gf-input-size-lg .uagb-gf-styler__check-style-enabled .gfield_radio input[type="radio"]+label::before,.uag-gf-input-size-lg .uagb-gf-styler__check-style-enabled .ginput_container_consent input[type="checkbox"]+label::before{width:20px;height:20px}.uag-gf-input-size-lg .uagb-gf-styler__check-style-enabled .gfield_checkbox input[type="checkbox"]:checked+label::before,.uag-gf-input-size-lg .uagb-gf-styler__check-style-enabled .ginput_container_consent input[type="checkbox"]+label::before{font-size:-webkit-calc(20px / 1.2);font-size:calc(20px / 1.2)}.uag-gf-btn-size-xl .uagb-gf-styler__check-style-enabled input[type="submit"],.uag-gf-btn-size-xl .uagb-gf-styler__check-style-enabled input[type="button"]{padding:25px 50px;border-radius:6px;font-size:20px;-webkit-border-radius:6px}.uag-gf-input-size-xl .uagb-gf-styler__check-style-enabled .gform_body input:not([type="radio"]):not([type="checkbox"]):not([type="submit"]):not([type="button"]):not([type="image"]):not([type="file"]),.uag-gf-input-size-xl .uagb-gf-styler__check-style-enabled .ginput_container textarea,.uag-gf-input-size-xl .uagb-gf-styler__check-style-enabled .ginput_container .chosen-single,.uag-gf-input-size-xl .uagb-gf-styler__check-style-enabled .ginput_container .chosen-choices{padding:25px 10px;font-size:20px}.uag-gf-input-size-xl .uagb-gf-styler__check-style-enabled .ginput_container select{padding:23px 10px;font-size:20px}.uag-gf-input-size-xl .uagb-gf-styler__check-style-enabled .uag-gf-select-custom{font-size:20px}.uag-gf-input-size-xl .uagb-gf-styler__check-style-enabled .gfield_checkbox input[type="checkbox"]+label::before,.uag-gf-input-size-xl .uagb-gf-styler__check-style-enabled .gfield_radio input[type="radio"]+label::before,.uag-gf-input-size-xl .uagb-gf-styler__check-style-enabled .ginput_container_consent input[type="checkbox"]+label::before{width:25px;height:25px}.uag-gf-input-size-xl .uagb-gf-styler__check-style-enabled .gfield_checkbox input[type="checkbox"]:checked+label::before,.uag-gf-input-size-xl .uagb-gf-styler__check-style-enabled .ginput_container_consent input[type="checkbox"]:checked+label::before{font-size:-webkit-calc(25px / 1.2);font-size:calc(25px / 1.2)}.uagb-gf-styler__btn-align-right .gform_next_button,.uagb-gf-styler__btn-align-right .gform_previous_button{margin-right:5px !important}.uagb-gf-styler__check-style-enabled .gform_wrapper .gform_footer:not(.top_label){width:100%;padding:0 0 0 0;margin-right:0;margin-left:0}.uagb-gf-styler__check-style-enabled .gform_wrapper .gform_page_footer.left_label,.uagb-gf-styler__check-style-enabled .gform_wrapper .gform_page_footer.right_label{padding:0 0 0 0}.uagb-gf-styler__check-style-enabled .gfield_radio input[type="radio"]+label::before{-webkit-border-radius:100%;border-radius:100%}.uagb-gf-styler__check-style-enabled .gform_wrapper .top_label .gfield_error{width:100% !important}.uagb-gf-styler__check-style-enabled .gform_wrapper.gform_validation_error .gform_body ul li.gfield.gfield_error:not(.gf_left_half):not(.gf_right_half){max-width:100% !important}.uagb-gf-styler__btn-align-center .gform_wrapper .gform_footer input[type="submit"],.uagb-gf-styler__btn-align-center .gform_page .gform_page_footer input[type="button"],.uagb-gf-styler__btn-align-center .gform_page .gform_page_footer input[type="submit"],.uagb-gf-styler__btn-align-left .gform_wrapper .gform_footer input[type="submit"],.uagb-gf-styler__btn-align-left .gform_page .gform_page_footer input[type="button"],.uagb-gf-styler__btn-align-left .gform_page .gform_page_footer input[type="submit"],.uagb-gf-styler__btn-align-right .gform_wrapper .gform_footer input[type="submit"],.uagb-gf-styler__btn-align-right .gform_page .gform_page_footer input[type="button"],.uagb-gf-styler__btn-align-right .gform_page .gform_page_footer input[type="submit"],.uagb-gf-styler__btn-align-justify .gform_wrapper .gform_footer input[type="submit"],.uagb-gf-styler__btn-align-justify .gform_page .gform_page_footer input[type="button"],.uagb-gf-styler__btn-align-justify .gform_page .gform_page_footer input[type="submit"]{display:-webkit-box;display:-ms-flexbox;display:-webkit-flex;display:-moz-box;display:flex;width:auto;-js-display:flex}.uagb-gf-styler__btn-align-center .gform_wrapper .gform_footer input[type="submit"],.uagb-gf-styler__btn-align-center .gform_page .gform_page_footer input[type="button"],.uagb-gf-styler__btn-align-center .gform_page .gform_page_footer input[type="submit"],html[dir="rtl"] .uagb-gf-styler__btn-align-center .gform_wrapper .gform_footer input[type="submit"],html[dir="rtl"] .uagb-gf-styler__btn-align-center .gform_page .gform_page_footer input[type="button"],html[dir="rtl"] .uagb-gf-styler__btn-align-center .gform_page .gform_page_footer input[type="submit"]{margin-right:auto;margin-left:auto}.uagb-gf-styler__btn-align-center .gform_page .gform_page_footer{text-align:center}.uagb-gf-styler__btn-align-right .gform_page .gform_page_footer{text-align:right}.uagb-gf-styler__btn-align-left .gform_wrapper .gform_footer input[type="submit"],.uagb-gf-styler__btn-align-left .gform_page .gform_page_footer input[type="button"],.uagb-gf-styler__btn-align-left .gform_page .gform_page_footer input[type="submit"],html[dir="rtl"] .uagb-gf-styler__btn-align-right .gform_wrapper .gform_footer input[type="submit"],html[dir="rtl"] .uagb-gf-styler__btn-align-right .gform_page .gform_page_footer input[type="button"],html[dir="rtl"] .uagb-gf-styler__btn-align-right .gform_page .gform_page_footer input[type="submit"]{margin-right:auto;margin-left:0}.uagb-gf-styler__btn-align-right .gform_wrapper .gform_footer input[type="submit"],.uagb-gf-styler__btn-align-right .gform_page .gform_page_footer input[type="button"],.uagb-gf-styler__btn-align-right .gform_page .gform_page_footer input[type="submit"],html[dir="rtl"] .uagb-gf-styler__btn-align-left .gform_wrapper .gform_footer input[type="submit"],html[dir="rtl"] .uagb-gf-styler__btn-align-left .gform_page .gform_page_footer input[type="button"],html[dir="rtl"] .uagb-gf-styler__btn-align-left .gform_page .gform_page_footer input[type="submit"]{margin-right:0;margin-left:auto}.uagb-gf-styler__check-style-enabled .gform_body .ginput_container_checkbox .gfield_checkbox input[type="checkbox"],.uagb-gf-styler__check-style-enabled .gform_body .ginput_container_radio .gfield_radio input[type="radio"],.uagb-gf-styler__check-style-enabled .gform_body .ginput_container_consent input[type="checkbox"]{display:none}.uagb-gf-styler__check-style-enabled .gform_body .ginput_container_checkbox .gfield_checkbox input[type="checkbox"]+label::before,.uagb-gf-styler__check-style-enabled .gform_body .ginput_container_radio .gfield_radio input[type="radio"]+label::before,.uagb-gf-styler__check-style-enabled .gform_body .ginput_container_consent input[type="checkbox"]+label::before{display:inline-block;vertical-align:middle;margin-right:10px;text-align:center;content:""}.uagb-gf-styler__check-style-enabled .gform_body .ginput_container_checkbox .gfield_checkbox input[type="checkbox"]:checked+label::before,.uagb-gf-styler__check-style-enabled .gform_body .ginput_container_consent input[type="checkbox"]:checked+label::before{line-height:1.2;content:"\\2714"}.uagb-gf-styler__check-style-enabled .gform_wrapper ul.gform_fields li.gfield:not(.gf_left_half):not(.gf_left_third):not(.gf_middle_third){padding-right:0}.uagb-gf-styler__btn-align-width-full_width .gform_footer input[type="submit"]{display:block;width:100%;text-align:center}.uagb-gf-styler__check-style-enabled .gform_body ul{margin-left:0;list-style:none}.uagb-gf-styler__check-style-enabled .gform_wrapper .gfield .ginput_container select,.uagb-gf-styler__check-style-enabled .gform_wrapper .gfield .ginput_container .chosen-single,.uagb-gf-styler__check-style-enabled .gform_wrapper .gfield .ginput_container .chosen-choices,.uagb-gf-styler__check-style-enabled .gform_wrapper .chosen-choices li.search-field input[type="text"],.uagb-gf-styler__check-style-enabled .gform_wrapper .chosen-choices li.search-field input.default{height:auto}.elementor-widget-uag-gf-styler .uagb-gf-styler__check-style-enabled .gform_wrapper .chosen-choices li.search-field input[type="text"]{padding:0 0 0 0}.uagb-gf-styler__check-style-enabled .gform_page .gform_page_footer input[type="button"]{margin-bottom:20px}.uagb-gf-styler__check-style-enabled .gform_wrapper .chosen-container-single .chosen-single div{display:none}.uagb-gf-styler__hide-label .gform_wrapper .gform_fields .gfield_label,.uagb-gf-styler__hide-label .gform_wrapper .gform_fields .gfield_required{display:none}.wp-block-uagb-gf-styler .gform_wrapper .chosen-container-single .chosen-single span{width:100%;margin-bottom:0}.wp-block-uagb-gf-styler .gform_wrapper .chosen-container-single .chosen-single{border:none}.wp-block-uagb-gf-styler .gform_wrapper .chosen-container-single.chosen-container-active .chosen-single{border:none}.wp-block-uagb-gf-styler .gform_wrapper .ginput_container_checkbox .gfield_checkbox .gchoice,.wp-block-uagb-gf-styler .gform_wrapper .ginput_container_radio .gfield_radio .gchoice{margin-bottom:5px;line-height:0}.wp-block-uagb-gf-styler .gform_wrapper .ginput_container_select select{background:#fafafa url(data:image/svg+xml;charset=US-ASCII,%3Csvg%20width%3D%2220%22%20height%3D%2220%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M5%206l5%205%205-5%202%201-7%207-7-7%202-1z%22%20fill%3D%22%23555%22%2F%3E%3C%2Fsvg%3E) no-repeat right 5px top 55%;background-size:16px 16px;cursor:pointer;vertical-align:middle}@media only screen and (max-width: 976px){.uagb-gf-styler__btn-align-center .gform_page .gform_page_footer{text-align:center}.uagb-gf-styler__btn-align-right .gform_page .gform_page_footer{text-align:right}.uag-tablet-gf-button-center .gform_wrapper .gform_footer input[type="submit"],.uag-tablet-gf-button-center .gform_page .gform_page_footer input[type="button"],.uag-tablet-gf-button-center .gform_page .gform_page_footer input[type="submit"]{width:auto;margin-right:auto;margin-left:auto}.uag-tablet-gf-button-left .gform_wrapper .gform_footer input[type="submit"],.uag-tablet-gf-button-left .gform_page .gform_page_footer input[type="button"],.uag-tablet-gf-button-left .gform_page .gform_page_footer input[type="submit"]{width:auto;margin-right:auto;margin-left:0}.uag-tablet-gf-button-right .gform_wrapper .gform_footer input[type="submit"],.uag-tablet-gf-button-right .gform_page .gform_page_footer input[type="button"],.uag-tablet-gf-button-right .gform_page .gform_page_footer input[type="submit"]{width:auto;margin-right:0;margin-left:auto}.uag-tablet-gf-button-justify .gform_wrapper .gform_footer input[type="submit"],.uag-tablet-gf-button-justify .gform_page .gform_page_footer input[type="button"],.uag-tablet-gf-button-justify .gform_page .gform_page_footer input[type="submit"]{-webkit-box-pack:center;-ms-flex-pack:center;-webkit-justify-content:center;-moz-box-pack:center;justify-content:center;width:100%}}@media only screen and (max-width: 767px){.uagb-gf-styler__btn-align-center .gform_page .gform_page_footer{text-align:center}.uagb-gf-styler__btn-align-right .gform_page .gform_page_footer{text-align:right}.uag-mobile-gf-button-center .gform_wrapper .gform_footer input[type="submit"],.uag-mobile-gf-button-center .gform_page .gform_page_footer input[type="button"],.uag-mobile-gf-button-center .gform_page .gform_page_footer input[type="submit"]{width:auto;margin-right:auto;margin-left:auto}.uag-mobile-gf-button-left .gform_wrapper .gform_footer input[type="submit"],.uag-mobile-gf-button-left .gform_page .gform_page_footer input[type="button"],.uag-mobile-gf-button-left .gform_page .gform_page_footer input[type="submit"]{width:auto;margin-right:auto;margin-left:0}.uag-mobile-gf-button-right .gform_wrapper .gform_footer input[type="submit"],.uag-mobile-gf-button-right .gform_page .gform_page_footer input[type="button"],.uag-mobile-gf-button-right .gform_page .gform_page_footer input[type="submit"]{width:auto;margin-right:0;margin-left:auto}.uag-mobile-gf-button-justify .gform_wrapper .gform_footer input[type="submit"],.uag-mobile-gf-button-justify .gform_page .gform_page_footer input[type="button"],.uag-mobile-gf-button-justify .gform_page .gform_page_footer input[type="submit"]{-webkit-box-pack:center;-ms-flex-pack:center;-webkit-justify-content:center;-moz-box-pack:center;justify-content:center;width:100%}}@media (min-width: 780px){.uagb-gf-styler__btn-align-justify .gform_wrapper .gform_footer input[type="submit"],.uagb-gf-styler__btn-align-justify .gform_page .gform_page_footer input[type="button"],.uagb-gf-styler__btn-align-justify .gform_page .gform_page_footer input[type="submit"]{-webkit-box-pack:center;-ms-flex-pack:center;-webkit-justify-content:center;-moz-box-pack:center;justify-content:center;width:100%}}@media (max-width: 780px){.uagb-gf-styler__btn-align-tablet-center .gform_wrapper .gform_footer input[type="submit"],.uagb-gf-styler__btn-align-tablet-center .gform_page .gform_page_footer input[type="button"],.uagb-gf-styler__btn-align-tablet-center .gform_page .gform_page_footer input[type="submit"],html[dir="rtl"] .uagb-gf-styler__btn-align-tablet-center .gform_wrapper .gform_footer input[type="submit"],html[dir="rtl"] .uagb-gf-styler__btn-align-tablet-center .gform_page .gform_page_footer input[type="button"],html[dir="rtl"] .uagb-gf-styler__btn-align-tablet-center .gform_page .gform_page_footer input[type="submit"]{margin-right:auto;margin-left:auto}.uagb-gf-styler__btn-align-tablet-center .gform_page .gform_page_footer{text-align:center}.uagb-gf-styler__btn-align-tablet-right .gform_page .gform_page_footer{text-align:right}.uagb-gf-styler__btn-align-tablet-left .gform_wrapper .gform_footer input[type="submit"],.uagb-gf-styler__btn-align-tablet-left .gform_page .gform_page_footer input[type="button"],.uagb-gf-styler__btn-align-tablet-left .gform_page .gform_page_footer input[type="submit"],html[dir="rtl"] .uagb-gf-styler__btn-align-tablet-right .gform_wrapper .gform_footer input[type="submit"],html[dir="rtl"] .uagb-gf-styler__btn-align-tablet-right .gform_page .gform_page_footer input[type="button"],html[dir="rtl"] .uagb-gf-styler__btn-align-tablet-right .gform_page .gform_page_footer input[type="submit"]{margin-right:auto;margin-left:0}.uagb-gf-styler__btn-align-tablet-right .gform_wrapper .gform_footer input[type="submit"],.uagb-gf-styler__btn-align-tablet-right .gform_page .gform_page_footer input[type="button"],.uagb-gf-styler__btn-align-tablet-right .gform_page .gform_page_footer input[type="submit"],html[dir="rtl"] .uagb-gf-styler__btn-align-tablet-left .gform_wrapper .gform_footer input[type="submit"],html[dir="rtl"] .uagb-gf-styler__btn-align-tablet-left .gform_page .gform_page_footer input[type="button"],html[dir="rtl"] .uagb-gf-styler__btn-align-tablet-left .gform_page .gform_page_footer input[type="submit"]{margin-right:0;margin-left:auto}}@media (min-width: 641px) and (max-width: 780px){.uagb-gf-styler__btn-align-tablet-justify .gform_wrapper .gform_footer input[type="submit"],.uagb-gf-styler__btn-align-tablet-justify .gform_page .gform_page_footer input[type="button"],.uagb-gf-styler__btn-align-tablet-justify .gform_page .gform_page_footer input[type="submit"]{-webkit-box-pack:center;-ms-flex-pack:center;-webkit-justify-content:center;-moz-box-pack:center;justify-content:center;width:100% !important}}@media (max-width: 641px){.uagb-gf-styler__btn-align-mobile-center .gform_wrapper .gform_footer input[type="submit"],.uagb-gf-styler__btn-align-mobile-center .gform_page .gform_page_footer input[type="button"],.uagb-gf-styler__btn-align-mobile-center .gform_page .gform_page_footer input[type="submit"],html[dir="rtl"] .uagb-gf-styler__btn-align-mobile-center .gform_wrapper .gform_footer input[type="submit"],html[dir="rtl"] .uagb-gf-styler__btn-align-mobile-center .gform_page .gform_page_footer input[type="button"],html[dir="rtl"] .uagb-gf-styler__btn-align-mobile-center .gform_page .gform_page_footer input[type="submit"]{margin-right:auto;margin-left:auto}.uagb-gf-styler__btn-align-mobile-center .gform_page .gform_page_footer{text-align:center}.uagb-gf-styler__btn-align-mobile-right .gform_page .gform_page_footer{text-align:right}.uagb-gf-styler__btn-align-mobile-left .gform_wrapper .gform_footer input[type="submit"],.uagb-gf-styler__btn-align-mobile-left .gform_page .gform_page_footer input[type="button"],.uagb-gf-styler__btn-align-mobile-left .gform_page .gform_page_footer input[type="submit"],html[dir="rtl"] .uagb-gf-styler__btn-align-mobile-right .gform_wrapper .gform_footer input[type="submit"],html[dir="rtl"] .uagb-gf-styler__btn-align-mobile-right .gform_page .gform_page_footer input[type="button"],html[dir="rtl"] .uagb-gf-styler__btn-align-mobile-right .gform_page .gform_page_footer input[type="submit"]{margin-right:auto;margin-left:0}.uagb-gf-styler__btn-align-mobile-right .gform_wrapper .gform_footer input[type="submit"],.uagb-gf-styler__btn-align-mobile-right .gform_page .gform_page_footer input[type="button"],.uagb-gf-styler__btn-align-mobile-right .gform_page .gform_page_footer input[type="submit"],html[dir="rtl"] .uagb-gf-styler__btn-align-mobile-left .gform_wrapper .gform_footer input[type="submit"],html[dir="rtl"] .uagb-gf-styler__btn-align-mobile-left .gform_page .gform_page_footer input[type="button"],html[dir="rtl"] .uagb-gf-styler__btn-align-mobile-left .gform_page .gform_page_footer input[type="submit"]{margin-right:0;margin-left:auto}.uagb-gf-styler__btn-align-mobile-justify .gform_wrapper .gform_footer input[type="submit"],.uagb-gf-styler__btn-align-mobile-justify .gform_page .gform_page_footer input[type="button"],.uagb-gf-styler__btn-align-mobile-justify .gform_page .gform_page_footer input[type="submit"]{-webkit-box-pack:center;-ms-flex-pack:center;-webkit-justify-content:center;-moz-box-pack:center;justify-content:center;width:100% !important}}
.uagb-google-map__wrap{display:flex}.uagb-google-map__wrap .uagb-google-map__iframe{width:100%;box-shadow:none;border:none;padding:0;margin:0}
.uagb-howto__cost-wrap{display:flex;align-items:center}.uagb-howto__cost-wrap .uagb-howto-estcost-text,.uagb-howto__cost-wrap .uagb-howto-estcost-value,.uagb-howto__cost-wrap .uagb-howto-estcost-type{display:inline-flex}.uagb-howto__time-wrap{display:flex;align-items:center}.uagb-howto__time-wrap .uagb-howto-timeNeeded-text,.uagb-howto__time-wrap .uagb-howto-timeNeeded-value,.uagb-howto__time-wrap .uagb-howto-timeINmin-text{display:inline-flex}.uagb-howto__time-wrap .uagb-howto-timeINmin-text{margin-left:5px}.uagb-step-link-all{height:100%;width:100%;top:0;left:0;position:absolute;z-index:3;box-shadow:none;text-decoration:none;color:inherit}.uagb-how-to-step-wrap{position:relative;margin-top:25px}.uagb-step-image-content-wrap.uag-image-position-left-title{display:flex}.uagb-step-image-content-wrap.uag-image-position-left-title .uagb-how-to-step-image{margin-right:20px}.uagb-step-image-content-wrap.uag-image-position-right-title{display:flex;flex-direction:row-reverse}.uagb-step-image-content-wrap.uag-image-position-right-title .uagb-how-to-step-image{margin-left:20px}.uagb-step-image-content-wrap.uag-image-position-above-title{display:block}.uagb-step-image-content-wrap.uag-image-position-above-title .uagb-how-to-step-image{margin-bottom:20px}.uagb-step-image-content-wrap .uagb-step-link{text-decoration:none !important}.uagb-step-image-content-wrap .uagb-step-link:hover{text-decoration:none !important}.uagb-howto-req-steps-text,.uagb-howto-req-tools-text,.uagb-howto-req-materials-text{margin-block-start:1.33em;margin-block-end:1.33em}.uagb-how-to-main-wrap{width:100%}.uagb-how-to-main-wrap .uagb-howto__source-image{height:auto;max-width:100%}
.uagb-icon-list__wrap{display:flex;align-items:flex-start;justify-content:flex-start}.wp-block-uagb-icon-list-child{padding:0;transition:all 0.2s;display:inline-flex;color:#3a3a3a;align-items:center;text-decoration:none;box-shadow:none}.wp-block-uagb-icon-list-child span.uagb-icon-list__source-wrap{display:block;align-items:center}.uagb-icon-list__source-wrap svg{display:block}.uagb-icon-list__source-image{width:40px}.uagb-icon-list__outer-wrap .uagb-icon-list__content-wrap{color:#3a3a3a;display:flex;align-items:center}
.wp-block-uagb-icon-list-child{position:relative}.wp-block-uagb-icon-list-child>a{position:absolute;top:0;left:0;width:100%;height:100%}img.uagb-icon-list__source-image{max-width:unset}.wp-block-uagb-icon-list-child .uagb-icon-list__label{word-break:break-word}
.wp-block-uagb-icon svg{width:30px}.uagb-icon-wrapper .uagb-svg-wrapper{transition:box-shadow 0.2s ease}
﻿.wp-block-uagb-image-gallery{display:-ms-flex;display:-moz-flex;display:-webkit-flex;display:flex;-webkit-justify-content:center;justify-content:center;flex-direction:column}.spectra-image-gallery *{box-sizing:border-box}.spectra-image-gallery__layout--grid{display:-moz-grid;display:-ms-grid;display:grid;grid-template-columns:repeat(3, minmax(0, 1fr))}.spectra-image-gallery__layout--grid-col-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.spectra-image-gallery__layout--grid-col-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.spectra-image-gallery__layout--grid-col-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.spectra-image-gallery__layout--grid-col-4{grid-template-columns:repeat(4, minmax(0, 1fr))}.spectra-image-gallery__layout--grid-col-5{grid-template-columns:repeat(5, minmax(0, 1fr))}.spectra-image-gallery__layout--grid-col-6{grid-template-columns:repeat(6, minmax(0, 1fr))}.spectra-image-gallery__layout--grid-col-7{grid-template-columns:repeat(7, minmax(0, 1fr))}.spectra-image-gallery__layout--grid-col-8{grid-template-columns:repeat(8, minmax(0, 1fr))}.spectra-image-gallery__layout--grid+.spectra-image-gallery__control-wrapper .spectra-image-gallery__control-arrows:hover{transform:scale(1.5);background-color:transparent}.spectra-image-gallery__layout--isogrid-col-1 .spectra-image-gallery__media-wrapper--isotope{width:100%}.spectra-image-gallery__layout--isogrid-col-2 .spectra-image-gallery__media-wrapper--isotope{width:50%}.spectra-image-gallery__layout--isogrid-col-3 .spectra-image-gallery__media-wrapper--isotope{width:33.33%}.spectra-image-gallery__layout--isogrid-col-4 .spectra-image-gallery__media-wrapper--isotope{width:25%}.spectra-image-gallery__layout--isogrid-col-5 .spectra-image-gallery__media-wrapper--isotope{width:20%}.spectra-image-gallery__layout--isogrid-col-6 .spectra-image-gallery__media-wrapper--isotope{width:16.66%}.spectra-image-gallery__layout--isogrid-col-7 .spectra-image-gallery__media-wrapper--isotope{width:14.28%}.spectra-image-gallery__layout--isogrid-col-8 .spectra-image-gallery__media-wrapper--isotope{width:12.5%}.spectra-image-gallery__layout--isogrid+.spectra-image-gallery__control-wrapper .spectra-image-gallery__control-arrows:hover{transform:scale(1.5);background-color:transparent}.spectra-image-gallery__layout--masonry-col-1 .spectra-image-gallery__media-wrapper--isotope{width:100%}.spectra-image-gallery__layout--masonry-col-2 .spectra-image-gallery__media-wrapper--isotope{width:50%}.spectra-image-gallery__layout--masonry-col-3 .spectra-image-gallery__media-wrapper--isotope{width:33.33%}.spectra-image-gallery__layout--masonry-col-4 .spectra-image-gallery__media-wrapper--isotope{width:25%}.spectra-image-gallery__layout--masonry-col-5 .spectra-image-gallery__media-wrapper--isotope{width:20%}.spectra-image-gallery__layout--masonry-col-6 .spectra-image-gallery__media-wrapper--isotope{width:16.66%}.spectra-image-gallery__layout--masonry-col-7 .spectra-image-gallery__media-wrapper--isotope{width:14.28%}.spectra-image-gallery__layout--masonry-col-8 .spectra-image-gallery__media-wrapper--isotope{width:12.5%}.spectra-image-gallery__layout--carousel{width:100%}.spectra-image-gallery__layout--carousel .slick-initialized{visibility:visible}.spectra-image-gallery__layout--carousel .slick-track{display:flex;align-items:center}.spectra-image-gallery__layout--carousel .slick-dots{padding:0;position:relative !important}.spectra-image-gallery__layout--carousel .slick-dots li button{padding:0}.spectra-image-gallery__layout--carousel .uagb-slick-carousel{padding:0}.spectra-image-gallery__layout--tiled{position:relative;display:grid;grid-auto-flow:dense;min-height:0;min-width:0}.spectra-image-gallery__layout--tiled-col-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.spectra-image-gallery__layout--tiled-col-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.spectra-image-gallery__layout--tiled-col-2 .spectra-image-gallery__media-wrapper{position:relative;min-width:0}.spectra-image-gallery__layout--tiled-col-2 .spectra-image-gallery__media-wrapper--wide{grid-column:span 2}.spectra-image-gallery__layout--tiled-col-2 .spectra-image-gallery__media-wrapper--tall{grid-row:span 2}.spectra-image-gallery__layout--tiled-col-2 .spectra-image-gallery__media-wrapper--focus{grid-row:span 2;grid-column:span 2}.spectra-image-gallery__layout--tiled-col-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.spectra-image-gallery__layout--tiled-col-3 .spectra-image-gallery__media-wrapper{position:relative;min-width:0}.spectra-image-gallery__layout--tiled-col-3 .spectra-image-gallery__media-wrapper--wide{grid-column:span 2}.spectra-image-gallery__layout--tiled-col-3 .spectra-image-gallery__media-wrapper--tall{grid-row:span 2}.spectra-image-gallery__layout--tiled-col-3 .spectra-image-gallery__media-wrapper--focus{grid-row:span 2;grid-column:span 2}.spectra-image-gallery__layout--tiled-col-4{grid-template-columns:repeat(4, minmax(0, 1fr))}.spectra-image-gallery__layout--tiled-col-4 .spectra-image-gallery__media-wrapper{position:relative;min-width:0}.spectra-image-gallery__layout--tiled-col-4 .spectra-image-gallery__media-wrapper--wide{grid-column:span 2}.spectra-image-gallery__layout--tiled-col-4 .spectra-image-gallery__media-wrapper--tall{grid-row:span 2}.spectra-image-gallery__layout--tiled-col-4 .spectra-image-gallery__media-wrapper--focus{grid-row:span 2;grid-column:span 2}.spectra-image-gallery__layout--tiled-col-5{grid-template-columns:repeat(5, minmax(0, 1fr))}.spectra-image-gallery__layout--tiled-col-5 .spectra-image-gallery__media-wrapper{position:relative;min-width:0}.spectra-image-gallery__layout--tiled-col-5 .spectra-image-gallery__media-wrapper--wide{grid-column:span 2}.spectra-image-gallery__layout--tiled-col-5 .spectra-image-gallery__media-wrapper--tall{grid-row:span 2}.spectra-image-gallery__layout--tiled-col-5 .spectra-image-gallery__media-wrapper--focus{grid-row:span 2;grid-column:span 2}.spectra-image-gallery__layout--tiled-col-6{grid-template-columns:repeat(6, minmax(0, 1fr))}.spectra-image-gallery__layout--tiled-col-6 .spectra-image-gallery__media-wrapper{position:relative;min-width:0}.spectra-image-gallery__layout--tiled-col-6 .spectra-image-gallery__media-wrapper--wide{grid-column:span 2}.spectra-image-gallery__layout--tiled-col-6 .spectra-image-gallery__media-wrapper--tall{grid-row:span 2}.spectra-image-gallery__layout--tiled-col-6 .spectra-image-gallery__media-wrapper--focus{grid-row:span 2;grid-column:span 2}.spectra-image-gallery__layout--tiled-col-7{grid-template-columns:repeat(7, minmax(0, 1fr))}.spectra-image-gallery__layout--tiled-col-7 .spectra-image-gallery__media-wrapper{position:relative;min-width:0}.spectra-image-gallery__layout--tiled-col-7 .spectra-image-gallery__media-wrapper--wide{grid-column:span 2}.spectra-image-gallery__layout--tiled-col-7 .spectra-image-gallery__media-wrapper--tall{grid-row:span 2}.spectra-image-gallery__layout--tiled-col-7 .spectra-image-gallery__media-wrapper--focus{grid-row:span 2;grid-column:span 2}.spectra-image-gallery__layout--tiled-col-8{grid-template-columns:repeat(8, minmax(0, 1fr))}.spectra-image-gallery__layout--tiled-col-8 .spectra-image-gallery__media-wrapper{position:relative;min-width:0}.spectra-image-gallery__layout--tiled-col-8 .spectra-image-gallery__media-wrapper--wide{grid-column:span 2}.spectra-image-gallery__layout--tiled-col-8 .spectra-image-gallery__media-wrapper--tall{grid-row:span 2}.spectra-image-gallery__layout--tiled-col-8 .spectra-image-gallery__media-wrapper--focus{grid-row:span 2;grid-column:span 2}.spectra-image-gallery__media{position:relative;overflow:hidden;-webkit-transition:box-shadow 0.25s;-moz-transition:box-shadow 0.25s;-o-transition:box-shadow 0.25s;transition:box-shadow 0.25s}.spectra-image-gallery__media--flagged{cursor:not-allowed}.spectra-image-gallery__media--clickable{cursor:pointer}.spectra-image-gallery__media--grid{aspect-ratio:1}.spectra-image-gallery__media--masonry{width:100%}.spectra-image-gallery__media--carousel{width:100%}.spectra-image-gallery__media--tiled{aspect-ratio:1;display:flex;align-items:center;justify-content:center}.spectra-image-gallery__media--tiled-wide,.spectra-image-gallery__media--tiled-tall{aspect-ratio:unset;width:100%;height:100%}.spectra-image-gallery__media--tiled picture{width:100%;height:100%}.spectra-image-gallery__media-sizer{aspect-ratio:1}.spectra-image-gallery__media-wrapper{position:relative}.spectra-image-gallery__media-wrapper:hover .spectra-image-gallery__control-focus{opacity:0.25}.spectra-image-gallery__media-thumbnail{vertical-align:middle;-webkit-transition:filter 0.5s, transform 0.5s;-moz-transition:filter 0.5s, transform 0.5s;-o-transition:filter 0.5s, transform 0.5s;transition:filter 0.5s, transform 0.5s}.spectra-image-gallery__media-thumbnail--grid{width:100% !important;height:100% !important;-o-object-fit:cover;object-fit:cover}.spectra-image-gallery__media-thumbnail--masonry{width:100%}.spectra-image-gallery__media-thumbnail--carousel{width:100%}.spectra-image-gallery__media-thumbnail--tiled{width:100% !important;height:100% !important;-o-object-fit:cover;object-fit:cover}.spectra-image-gallery__media-thumbnail-blurrer{position:absolute;top:0;left:0;width:100% !important;height:100% !important;-webkit-transition:box-shadow 0.25s, -webkit-backdrop-filter 0.5s;-moz-transition:box-shadow 0.25s, backdrop-filter 0.5s;-o-transition:box-shadow 0.25s, backdrop-filter 0.5s;transition:box-shadow 0.25s, backdrop-filter 0.5s}.spectra-image-gallery__media-thumbnail-caption{-webkit-transition-property:color, background-color, border-color;-moz-transition-property:color, background-color, border-color;-o-transition-property:color, background-color, border-color;transition-property:color, background-color, border-color;-webkit-transition-duration:0.25s;-moz-transition-duration:0.25s;-o-transition-duration:0.25s;transition-duration:0.25s}.spectra-image-gallery__media-thumbnail-caption--overlay{display:-ms-flex;display:-moz-flex;display:-webkit-flex;display:flex;width:100%;height:100%;overflow:hidden;padding:1em}.spectra-image-gallery__media-thumbnail-caption--bar-inside{width:100%;overflow:hidden;padding:1em;max-height:90%}.spectra-image-gallery__media-thumbnail-caption--bar-outside{width:100%;overflow:hidden;padding:1em}.spectra-image-gallery__media-thumbnail-caption-wrapper{-webkit-transition:background-color 0.25s;-moz-transition:background-color 0.25s;-o-transition:background-color 0.25s;transition:background-color 0.25s}.spectra-image-gallery__media-thumbnail-caption-wrapper--overlay{position:absolute;top:0;left:0;width:100%;height:100%}.spectra-image-gallery__media-thumbnail-caption-wrapper--bar-inside{position:absolute;top:0;left:0;width:100%;height:100%;display:flex;overflow:hidden}.spectra-image-gallery__media-thumbnail-caption-wrapper--bar-outside{position:relative;width:100%;overflow:hidden}.spectra-image-gallery__control-wrapper{display:-ms-flex;display:-moz-flex;display:-webkit-flex;display:flex;width:100%;justify-content:center}.spectra-image-gallery__control-arrows{display:-ms-flex;display:-moz-flex;display:-webkit-flex;display:flex;align-items:center;background-color:transparent;padding:0;cursor:pointer;-webkit-transition-duration:0.25s;-moz-transition-duration:0.25s;-o-transition-duration:0.25s;transition-duration:0.25s}.spectra-image-gallery__control-arrows:disabled{opacity:0.25;cursor:initial}.spectra-image-gallery__control-arrows:focus{background-color:transparent}.spectra-image-gallery__control-arrows--grid{border:none}.spectra-image-gallery__control-arrows svg{-webkit-transition-duration:0.25s;-moz-transition-duration:0.25s;-o-transition-duration:0.25s;transition-duration:0.25s}.spectra-image-gallery__control-dots{display:-ms-flex;display:-moz-flex;display:-webkit-flex;display:flex;align-items:center;padding:0 !important;margin:0 !important}.spectra-image-gallery__control-dots li{position:relative;display:inline-block;width:20px;height:20px;margin:0;padding:0;cursor:pointer;-webkit-transition-duration:0.25s;-moz-transition-duration:0.25s;-o-transition-duration:0.25s;transition-duration:0.25s}.spectra-image-gallery__control-dots li:hover{transform:scale(1.5);background-color:transparent}.spectra-image-gallery__control-dots li button{font-size:0;line-height:0;display:block;box-sizing:border-box;width:20px;height:20px;padding:5px;cursor:pointer;color:transparent;border:0;outline:none;background:transparent;-webkit-transition-duration:0.25s;-moz-transition-duration:0.25s;-o-transition-duration:0.25s;transition-duration:0.25s}.spectra-image-gallery__control-dots li button::before{font-family:none;font-size:30px;line-height:20px;position:absolute;top:0;left:0;width:20px;height:20px;content:"•";text-align:center;opacity:0.25;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:0.25s;-moz-transition-duration:0.25s;-o-transition-duration:0.25s;transition-duration:0.25s}.spectra-image-gallery__control-dots li.spectra-image-gallery__control-dot--active button::before{opacity:0.75}.spectra-image-gallery__control-loader{margin:0 auto;min-height:58px;line-height:58px;width:160px;text-align:center}.spectra-image-gallery__control-loader div{border-radius:100%;display:inline-block;-webkit-animation:sk-bouncedelay 1.4s infinite ease-in-out both;animation:sk-bouncedelay 1.4s infinite ease-in-out both}.spectra-image-gallery__control-loader div.spectra-image-gallery__control-loader--1{-webkit-animation-delay:-0.32s;animation-delay:-0.32s}.spectra-image-gallery__control-loader div.spectra-image-gallery__control-loader--2{-webkit-animation-delay:-0.16s;animation-delay:-0.16s}.spectra-image-gallery__control-button{cursor:pointer;-webkit-transition-duration:0.25s;-moz-transition-duration:0.25s;-o-transition-duration:0.25s;transition-duration:0.25s}.spectra-image-gallery__control-button.disabled{opacity:0.25;pointer-events:none}.spectra-image-gallery__control-focus{cursor:pointer;position:absolute;box-sizing:content-box !important;top:0;right:0;width:1.5em;height:1.5em;padding:0.5em;background-color:transparent;border:none;opacity:0;-webkit-transition-property:opacity;-moz-transition-property:opacity;-o-transition-property:opacity;transition-property:opacity;-webkit-transition-duration:0.25s;-moz-transition-duration:0.25s;-o-transition-duration:0.25s;transition-duration:0.25s}.spectra-image-gallery__control-focus:hover{opacity:1 !important}.spectra-image-gallery__control-focus svg{fill:#fff;filter:drop-shadow(1px 1px 1px rgba(0,0,0,0.5))}.spectra-image-gallery__control-lightbox{position:fixed;top:0;left:0;width:100vw !important;max-width:100vw !important;height:100vh !important;max-height:100vh !important;display:flex;flex-direction:column;opacity:0;-webkit-transition-property:opacity;-moz-transition-property:opacity;-o-transition-property:opacity;transition-property:opacity;z-index:999999999 !important;outline:none;margin-block-start:0;-webkit-transition-duration:0.25s;-moz-transition-duration:0.25s;-o-transition-duration:0.25s;transition-duration:0.25s}.spectra-image-gallery__control-lightbox--main{width:100%;flex:1}.spectra-image-gallery__control-lightbox--main .swiper-slide{height:100%;display:flex;flex-direction:column;align-items:center;justify-content:center}.spectra-image-gallery__control-lightbox--main .swiper-slide img{display:block;max-height:70%;max-width:80%}.spectra-image-gallery__control-lightbox--caption{position:absolute;bottom:0;left:0;width:100%;display:flex;align-items:center;justify-content:center;text-align:center}.spectra-image-gallery__control-lightbox--editor-link{-webkit-transition-property:color;-moz-transition-property:color;-o-transition-property:color;transition-property:color;-webkit-transition-duration:0.25s;-moz-transition-duration:0.25s;-o-transition-duration:0.25s;transition-duration:0.25s}.spectra-image-gallery__control-lightbox--thumbnails{width:75%}.spectra-image-gallery__control-lightbox--thumbnails-wrapper{width:100%}.spectra-image-gallery__control-lightbox--thumbnails .swiper-wrapper{height:150px}.spectra-image-gallery__control-lightbox--thumbnails .swiper-slide{cursor:pointer;height:100%;display:flex;flex-direction:column;align-items:center;justify-content:center;opacity:0.5;transform:scale(75%);-webkit-transition-property:opacity, transform;-moz-transition-property:opacity, transform;-o-transition-property:opacity, transform;transition-property:opacity, transform;-webkit-transition-duration:0.25s;-moz-transition-duration:0.25s;-o-transition-duration:0.25s;transition-duration:0.25s}.spectra-image-gallery__control-lightbox--thumbnails .swiper-slide-active{opacity:1;transform:scale(100%)}.spectra-image-gallery__control-lightbox--thumbnails .swiper-slide img{border-radius:3px}.spectra-image-gallery__control-lightbox--count{position:absolute;z-index:999}.spectra-image-gallery__control-lightbox--close{position:absolute;cursor:pointer;padding:0;background-color:transparent;border:none;outline:0;line-height:0;z-index:999}.spectra-image-gallery__control-lightbox--close:hover{background-color:transparent}.spectra-image-gallery__iso-ref-wrapper{-ms-overflow-style:none;scrollbar-width:none}.spectra-image-gallery__iso-ref-wrapper::-webkit-scrollbar{display:none}@media (max-width: 976px){.spectra-image-gallery__layout--grid-col-tab-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.spectra-image-gallery__layout--grid-col-tab-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.spectra-image-gallery__layout--grid-col-tab-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.spectra-image-gallery__layout--grid-col-tab-4{grid-template-columns:repeat(4, minmax(0, 1fr))}.spectra-image-gallery__layout--grid-col-tab-5{grid-template-columns:repeat(5, minmax(0, 1fr))}.spectra-image-gallery__layout--grid-col-tab-6{grid-template-columns:repeat(6, minmax(0, 1fr))}.spectra-image-gallery__layout--grid-col-tab-7{grid-template-columns:repeat(7, minmax(0, 1fr))}.spectra-image-gallery__layout--grid-col-tab-8{grid-template-columns:repeat(8, minmax(0, 1fr))}.spectra-image-gallery__layout--isogrid-col-tab-1 .spectra-image-gallery__media-wrapper--isotope{width:100%}.spectra-image-gallery__layout--isogrid-col-tab-2 .spectra-image-gallery__media-wrapper--isotope{width:50%}.spectra-image-gallery__layout--isogrid-col-tab-3 .spectra-image-gallery__media-wrapper--isotope{width:33.33%}.spectra-image-gallery__layout--isogrid-col-tab-4 .spectra-image-gallery__media-wrapper--isotope{width:25%}.spectra-image-gallery__layout--isogrid-col-tab-5 .spectra-image-gallery__media-wrapper--isotope{width:20%}.spectra-image-gallery__layout--isogrid-col-tab-6 .spectra-image-gallery__media-wrapper--isotope{width:16.66%}.spectra-image-gallery__layout--isogrid-col-tab-7 .spectra-image-gallery__media-wrapper--isotope{width:14.28%}.spectra-image-gallery__layout--isogrid-col-tab-8 .spectra-image-gallery__media-wrapper--isotope{width:12.5%}.spectra-image-gallery__layout--masonry-col-tab-1 .spectra-image-gallery__media-wrapper--isotope{width:100%}.spectra-image-gallery__layout--masonry-col-tab-2 .spectra-image-gallery__media-wrapper--isotope{width:50%}.spectra-image-gallery__layout--masonry-col-tab-3 .spectra-image-gallery__media-wrapper--isotope{width:33.33%}.spectra-image-gallery__layout--masonry-col-tab-4 .spectra-image-gallery__media-wrapper--isotope{width:25%}.spectra-image-gallery__layout--masonry-col-tab-5 .spectra-image-gallery__media-wrapper--isotope{width:20%}.spectra-image-gallery__layout--masonry-col-tab-6 .spectra-image-gallery__media-wrapper--isotope{width:16.66%}.spectra-image-gallery__layout--masonry-col-tab-7 .spectra-image-gallery__media-wrapper--isotope{width:14.28%}.spectra-image-gallery__layout--masonry-col-tab-8 .spectra-image-gallery__media-wrapper--isotope{width:12.5%}.spectra-image-gallery__layout--tiled-col-tab-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.spectra-image-gallery__layout--tiled-col-tab-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.spectra-image-gallery__layout--tiled-col-tab-2 .spectra-image-gallery__media-wrapper{position:relative;min-width:0}.spectra-image-gallery__layout--tiled-col-tab-2 .spectra-image-gallery__media-wrapper--wide{grid-column:span 2}.spectra-image-gallery__layout--tiled-col-tab-2 .spectra-image-gallery__media-wrapper--tall{grid-row:span 2}.spectra-image-gallery__layout--tiled-col-tab-2 .spectra-image-gallery__media-wrapper--focus{grid-row:span 2;grid-column:span 2}.spectra-image-gallery__layout--tiled-col-tab-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.spectra-image-gallery__layout--tiled-col-tab-3 .spectra-image-gallery__media-wrapper{position:relative;min-width:0}.spectra-image-gallery__layout--tiled-col-tab-3 .spectra-image-gallery__media-wrapper--wide{grid-column:span 2}.spectra-image-gallery__layout--tiled-col-tab-3 .spectra-image-gallery__media-wrapper--tall{grid-row:span 2}.spectra-image-gallery__layout--tiled-col-tab-3 .spectra-image-gallery__media-wrapper--focus{grid-row:span 2;grid-column:span 2}.spectra-image-gallery__layout--tiled-col-tab-4{grid-template-columns:repeat(4, minmax(0, 1fr))}.spectra-image-gallery__layout--tiled-col-tab-4 .spectra-image-gallery__media-wrapper{position:relative;min-width:0}.spectra-image-gallery__layout--tiled-col-tab-4 .spectra-image-gallery__media-wrapper--wide{grid-column:span 2}.spectra-image-gallery__layout--tiled-col-tab-4 .spectra-image-gallery__media-wrapper--tall{grid-row:span 2}.spectra-image-gallery__layout--tiled-col-tab-4 .spectra-image-gallery__media-wrapper--focus{grid-row:span 2;grid-column:span 2}.spectra-image-gallery__layout--tiled-col-tab-5{grid-template-columns:repeat(5, minmax(0, 1fr))}.spectra-image-gallery__layout--tiled-col-tab-5 .spectra-image-gallery__media-wrapper{position:relative;min-width:0}.spectra-image-gallery__layout--tiled-col-tab-5 .spectra-image-gallery__media-wrapper--wide{grid-column:span 2}.spectra-image-gallery__layout--tiled-col-tab-5 .spectra-image-gallery__media-wrapper--tall{grid-row:span 2}.spectra-image-gallery__layout--tiled-col-tab-5 .spectra-image-gallery__media-wrapper--focus{grid-row:span 2;grid-column:span 2}.spectra-image-gallery__layout--tiled-col-tab-6{grid-template-columns:repeat(6, minmax(0, 1fr))}.spectra-image-gallery__layout--tiled-col-tab-6 .spectra-image-gallery__media-wrapper{position:relative;min-width:0}.spectra-image-gallery__layout--tiled-col-tab-6 .spectra-image-gallery__media-wrapper--wide{grid-column:span 2}.spectra-image-gallery__layout--tiled-col-tab-6 .spectra-image-gallery__media-wrapper--tall{grid-row:span 2}.spectra-image-gallery__layout--tiled-col-tab-6 .spectra-image-gallery__media-wrapper--focus{grid-row:span 2;grid-column:span 2}.spectra-image-gallery__layout--tiled-col-tab-7{grid-template-columns:repeat(7, minmax(0, 1fr))}.spectra-image-gallery__layout--tiled-col-tab-7 .spectra-image-gallery__media-wrapper{position:relative;min-width:0}.spectra-image-gallery__layout--tiled-col-tab-7 .spectra-image-gallery__media-wrapper--wide{grid-column:span 2}.spectra-image-gallery__layout--tiled-col-tab-7 .spectra-image-gallery__media-wrapper--tall{grid-row:span 2}.spectra-image-gallery__layout--tiled-col-tab-7 .spectra-image-gallery__media-wrapper--focus{grid-row:span 2;grid-column:span 2}.spectra-image-gallery__layout--tiled-col-tab-8{grid-template-columns:repeat(8, minmax(0, 1fr))}.spectra-image-gallery__layout--tiled-col-tab-8 .spectra-image-gallery__media-wrapper{position:relative;min-width:0}.spectra-image-gallery__layout--tiled-col-tab-8 .spectra-image-gallery__media-wrapper--wide{grid-column:span 2}.spectra-image-gallery__layout--tiled-col-tab-8 .spectra-image-gallery__media-wrapper--tall{grid-row:span 2}.spectra-image-gallery__layout--tiled-col-tab-8 .spectra-image-gallery__media-wrapper--focus{grid-row:span 2;grid-column:span 2}}@media (max-width: 767px){.spectra-image-gallery__layout--grid-col-mob-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.spectra-image-gallery__layout--grid-col-mob-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.spectra-image-gallery__layout--grid-col-mob-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.spectra-image-gallery__layout--grid-col-mob-4{grid-template-columns:repeat(4, minmax(0, 1fr))}.spectra-image-gallery__layout--grid-col-mob-5{grid-template-columns:repeat(5, minmax(0, 1fr))}.spectra-image-gallery__layout--grid-col-mob-6{grid-template-columns:repeat(6, minmax(0, 1fr))}.spectra-image-gallery__layout--grid-col-mob-7{grid-template-columns:repeat(7, minmax(0, 1fr))}.spectra-image-gallery__layout--grid-col-mob-8{grid-template-columns:repeat(8, minmax(0, 1fr))}.spectra-image-gallery__layout--isogrid-col-mob-1 .spectra-image-gallery__media-wrapper--isotope{width:100%}.spectra-image-gallery__layout--isogrid-col-mob-2 .spectra-image-gallery__media-wrapper--isotope{width:50%}.spectra-image-gallery__layout--isogrid-col-mob-3 .spectra-image-gallery__media-wrapper--isotope{width:33.33%}.spectra-image-gallery__layout--isogrid-col-mob-4 .spectra-image-gallery__media-wrapper--isotope{width:25%}.spectra-image-gallery__layout--isogrid-col-mob-5 .spectra-image-gallery__media-wrapper--isotope{width:20%}.spectra-image-gallery__layout--isogrid-col-mob-6 .spectra-image-gallery__media-wrapper--isotope{width:16.66%}.spectra-image-gallery__layout--isogrid-col-mob-7 .spectra-image-gallery__media-wrapper--isotope{width:14.28%}.spectra-image-gallery__layout--isogrid-col-mob-8 .spectra-image-gallery__media-wrapper--isotope{width:12.5%}.spectra-image-gallery__layout--masonry-col-mob-1 .spectra-image-gallery__media-wrapper--isotope{width:100%}.spectra-image-gallery__layout--masonry-col-mob-2 .spectra-image-gallery__media-wrapper--isotope{width:50%}.spectra-image-gallery__layout--masonry-col-mob-3 .spectra-image-gallery__media-wrapper--isotope{width:33.33%}.spectra-image-gallery__layout--masonry-col-mob-4 .spectra-image-gallery__media-wrapper--isotope{width:25%}.spectra-image-gallery__layout--masonry-col-mob-5 .spectra-image-gallery__media-wrapper--isotope{width:20%}.spectra-image-gallery__layout--masonry-col-mob-6 .spectra-image-gallery__media-wrapper--isotope{width:16.66%}.spectra-image-gallery__layout--masonry-col-mob-7 .spectra-image-gallery__media-wrapper--isotope{width:14.28%}.spectra-image-gallery__layout--masonry-col-mob-8 .spectra-image-gallery__media-wrapper--isotope{width:12.5%}.spectra-image-gallery__layout--tiled-col-mob-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.spectra-image-gallery__layout--tiled-col-mob-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.spectra-image-gallery__layout--tiled-col-mob-2 .spectra-image-gallery__media-wrapper{position:relative;min-width:0}.spectra-image-gallery__layout--tiled-col-mob-2 .spectra-image-gallery__media-wrapper--wide{grid-column:span 2}.spectra-image-gallery__layout--tiled-col-mob-2 .spectra-image-gallery__media-wrapper--tall{grid-row:span 2}.spectra-image-gallery__layout--tiled-col-mob-2 .spectra-image-gallery__media-wrapper--focus{grid-row:span 2;grid-column:span 2}.spectra-image-gallery__layout--tiled-col-mob-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.spectra-image-gallery__layout--tiled-col-mob-3 .spectra-image-gallery__media-wrapper{position:relative;min-width:0}.spectra-image-gallery__layout--tiled-col-mob-3 .spectra-image-gallery__media-wrapper--wide{grid-column:span 2}.spectra-image-gallery__layout--tiled-col-mob-3 .spectra-image-gallery__media-wrapper--tall{grid-row:span 2}.spectra-image-gallery__layout--tiled-col-mob-3 .spectra-image-gallery__media-wrapper--focus{grid-row:span 2;grid-column:span 2}.spectra-image-gallery__layout--tiled-col-mob-4{grid-template-columns:repeat(4, minmax(0, 1fr))}.spectra-image-gallery__layout--tiled-col-mob-4 .spectra-image-gallery__media-wrapper{position:relative;min-width:0}.spectra-image-gallery__layout--tiled-col-mob-4 .spectra-image-gallery__media-wrapper--wide{grid-column:span 2}.spectra-image-gallery__layout--tiled-col-mob-4 .spectra-image-gallery__media-wrapper--tall{grid-row:span 2}.spectra-image-gallery__layout--tiled-col-mob-4 .spectra-image-gallery__media-wrapper--focus{grid-row:span 2;grid-column:span 2}.spectra-image-gallery__layout--tiled-col-mob-5{grid-template-columns:repeat(5, minmax(0, 1fr))}.spectra-image-gallery__layout--tiled-col-mob-5 .spectra-image-gallery__media-wrapper{position:relative;min-width:0}.spectra-image-gallery__layout--tiled-col-mob-5 .spectra-image-gallery__media-wrapper--wide{grid-column:span 2}.spectra-image-gallery__layout--tiled-col-mob-5 .spectra-image-gallery__media-wrapper--tall{grid-row:span 2}.spectra-image-gallery__layout--tiled-col-mob-5 .spectra-image-gallery__media-wrapper--focus{grid-row:span 2;grid-column:span 2}.spectra-image-gallery__layout--tiled-col-mob-6{grid-template-columns:repeat(6, minmax(0, 1fr))}.spectra-image-gallery__layout--tiled-col-mob-6 .spectra-image-gallery__media-wrapper{position:relative;min-width:0}.spectra-image-gallery__layout--tiled-col-mob-6 .spectra-image-gallery__media-wrapper--wide{grid-column:span 2}.spectra-image-gallery__layout--tiled-col-mob-6 .spectra-image-gallery__media-wrapper--tall{grid-row:span 2}.spectra-image-gallery__layout--tiled-col-mob-6 .spectra-image-gallery__media-wrapper--focus{grid-row:span 2;grid-column:span 2}.spectra-image-gallery__layout--tiled-col-mob-7{grid-template-columns:repeat(7, minmax(0, 1fr))}.spectra-image-gallery__layout--tiled-col-mob-7 .spectra-image-gallery__media-wrapper{position:relative;min-width:0}.spectra-image-gallery__layout--tiled-col-mob-7 .spectra-image-gallery__media-wrapper--wide{grid-column:span 2}.spectra-image-gallery__layout--tiled-col-mob-7 .spectra-image-gallery__media-wrapper--tall{grid-row:span 2}.spectra-image-gallery__layout--tiled-col-mob-7 .spectra-image-gallery__media-wrapper--focus{grid-row:span 2;grid-column:span 2}.spectra-image-gallery__layout--tiled-col-mob-8{grid-template-columns:repeat(8, minmax(0, 1fr))}.spectra-image-gallery__layout--tiled-col-mob-8 .spectra-image-gallery__media-wrapper{position:relative;min-width:0}.spectra-image-gallery__layout--tiled-col-mob-8 .spectra-image-gallery__media-wrapper--wide{grid-column:span 2}.spectra-image-gallery__layout--tiled-col-mob-8 .spectra-image-gallery__media-wrapper--tall{grid-row:span 2}.spectra-image-gallery__layout--tiled-col-mob-8 .spectra-image-gallery__media-wrapper--focus{grid-row:span 2;grid-column:span 2}}.entry-content .wp-block-uagb-image-gallery .uagb-image-gallery__link{text-decoration:none}body .wp-block-post-content>.wp-block-uagb-image-gallery+.spectra-image-gallery__control-lightbox{margin-block-start:0}@-webkit-keyframes sk-bouncedelay{0%,80%,100%{-webkit-transform:scale(0);transform:scale(0)}40%{-webkit-transform:scale(1);transform:scale(1)}}@keyframes sk-bouncedelay{0%,80%,100%{-webkit-transform:scale(0);transform:scale(0)}40%{-webkit-transform:scale(1);transform:scale(1)}}
.wp-block-uagb-image{display:flex}.wp-block-uagb-image__figure{position:relative;display:flex;flex-direction:column;max-width:100%;height:auto;margin:0}.wp-block-uagb-image__figure img{height:auto;display:flex;max-width:100%;transition:box-shadow 0.2s ease}.wp-block-uagb-image__figure>a{display:inline-block}.wp-block-uagb-image__figure figcaption{text-align:center;margin-top:0.5em;margin-bottom:1em}.wp-block-uagb-image .components-placeholder.block-editor-media-placeholder .components-placeholder__instructions{align-self:center}.wp-block-uagb-image--align-left{text-align:left}.wp-block-uagb-image--align-right{text-align:right}.wp-block-uagb-image--align-center{text-align:center}.wp-block-uagb-image--align-full .wp-block-uagb-image__figure{margin-left:calc(50% - 50vw);margin-right:calc(50% - 50vw);max-width:100vw;width:100vw;height:auto}.wp-block-uagb-image--align-full .wp-block-uagb-image__figure img{height:auto;width:100% !important}.wp-block-uagb-image--align-wide .wp-block-uagb-image__figure img{height:auto;width:100%}.wp-block-uagb-image--layout-overlay__color-wrapper{position:absolute;left:0;top:0;right:0;bottom:0;opacity:0.2;background:rgba(0,0,0,0.5);transition:opacity 0.35s ease-in-out}.wp-block-uagb-image--layout-overlay-link{position:absolute;left:0;right:0;bottom:0;top:0}.wp-block-uagb-image--layout-overlay .wp-block-uagb-image__figure:hover .wp-block-uagb-image--layout-overlay__color-wrapper{opacity:1}.wp-block-uagb-image--layout-overlay__inner{position:absolute;left:15px;right:15px;bottom:15px;top:15px;display:flex;align-items:center;justify-content:center;flex-direction:column;border-color:#fff;transition:0.35s ease-in-out}.wp-block-uagb-image--layout-overlay__inner.top-left,.wp-block-uagb-image--layout-overlay__inner.top-center,.wp-block-uagb-image--layout-overlay__inner.top-right{justify-content:flex-start}.wp-block-uagb-image--layout-overlay__inner.bottom-left,.wp-block-uagb-image--layout-overlay__inner.bottom-center,.wp-block-uagb-image--layout-overlay__inner.bottom-right{justify-content:flex-end}.wp-block-uagb-image--layout-overlay__inner.top-left,.wp-block-uagb-image--layout-overlay__inner.center-left,.wp-block-uagb-image--layout-overlay__inner.bottom-left{align-items:flex-start}.wp-block-uagb-image--layout-overlay__inner.top-right,.wp-block-uagb-image--layout-overlay__inner.center-right,.wp-block-uagb-image--layout-overlay__inner.bottom-right{align-items:flex-end}.wp-block-uagb-image--layout-overlay__inner .uagb-image-heading{color:#fff;transition:transform 0.35s, opacity 0.35s ease-in-out;transform:translate3d(0, 24px, 0);margin:0;line-height:1em}.wp-block-uagb-image--layout-overlay__inner .uagb-image-separator{width:30%;border-top-width:2px;border-top-color:#fff;border-top-style:solid;margin-bottom:10px;opacity:0;transition:transform 0.4s, opacity 0.4s ease-in-out;transform:translate3d(0, 30px, 0)}.wp-block-uagb-image--layout-overlay__inner .uagb-image-caption{opacity:0;overflow:visible;color:#fff;transition:transform 0.45s, opacity 0.45s ease-in-out;transform:translate3d(0, 35px, 0)}.wp-block-uagb-image--layout-overlay__inner:hover .uagb-image-heading,.wp-block-uagb-image--layout-overlay__inner:hover .uagb-image-separator,.wp-block-uagb-image--layout-overlay__inner:hover .uagb-image-caption{opacity:1;transform:translate3d(0, 0, 0)}.wp-block-uagb-image--effect-zoomin .wp-block-uagb-image__figure img,.wp-block-uagb-image--effect-zoomin .wp-block-uagb-image__figure .wp-block-uagb-image--layout-overlay__color-wrapper{transform:scale(1);transition:transform 0.35s ease-in-out}.wp-block-uagb-image--effect-zoomin .wp-block-uagb-image__figure:hover img,.wp-block-uagb-image--effect-zoomin .wp-block-uagb-image__figure:hover .wp-block-uagb-image--layout-overlay__color-wrapper{transform:scale(1.05)}.wp-block-uagb-image--effect-slide .wp-block-uagb-image__figure img,.wp-block-uagb-image--effect-slide .wp-block-uagb-image__figure .wp-block-uagb-image--layout-overlay__color-wrapper{width:calc(100% + 40px) !important;max-width:none !important;transform:translate3d(-40px, 0, 0);transition:transform 0.35s ease-in-out}.wp-block-uagb-image--effect-slide .wp-block-uagb-image__figure:hover img,.wp-block-uagb-image--effect-slide .wp-block-uagb-image__figure:hover .wp-block-uagb-image--layout-overlay__color-wrapper{transform:translate3d(0, 0, 0)}.wp-block-uagb-image--effect-grayscale img{filter:grayscale(0%);transition:0.35s ease-in-out}.wp-block-uagb-image--effect-grayscale:hover img{filter:grayscale(100%)}.wp-block-uagb-image--effect-blur img{filter:blur(0);transition:0.35s ease-in-out}.wp-block-uagb-image--effect-blur:hover img{filter:blur(3px)}
.uagb-ifb-content>svg *{-webkit-transition:all 0.2s;-o-transition:all 0.2s;transition:all 0.2s}.uagb-ifb-content>svg,.uagb-ifb-content{display:inline-block}.uagb-ifb-content>svg{vertical-align:middle;width:inherit;height:inherit;font-style:initial}.uagb-ifb-content .uagb-ifb-icon-wrap svg{box-sizing:content-box;width:inherit;height:inherit}.uagb-ifb-button-wrapper:empty{display:none}div.uagb-ifb-button-wrapper a.uagb-infobox-cta-link,div.uagb-ifb-cta a.uagb-infobox-cta-link,.entry .entry-content a.uagb-infobox-cta-link,a.uagb-infobox-link-wrap,.entry .entry-content a.uagb-infobox-link-wrap{text-decoration:none;align-items:center}.uagb-infobox-icon-left-title.uagb-infobox-image-valign-middle .uagb-ifb-title-wrap,.uagb-infobox-icon-right-title.uagb-infobox-image-valign-middle .uagb-ifb-title-wrap,.uagb-infobox-image-valign-middle .uagb-ifb-icon-wrap,.uagb-infobox-image-valign-middle .uagb-ifb-image-content,.uagb-infobox-icon-left.uagb-infobox-image-valign-middle .uagb-ifb-content,.uagb-infobox-icon-right.uagb-infobox-image-valign-middle .uagb-ifb-content{-ms-flex-item-align:center;-webkit-align-self:center;align-self:center}.uagb-infobox-icon-left-title.uagb-infobox-image-valign-top .uagb-ifb-title-wrap,.uagb-infobox-icon-right-title.uagb-infobox-image-valign-top .uagb-ifb-title-wrap,.uagb-infobox-image-valign-top .uagb-ifb-icon-wrap,.uagb-infobox-image-valign-top .uagb-ifb-image-content,.uagb-infobox-icon-left.uagb-infobox-image-valign-top .uagb-ifb-content,.uagb-infobox-icon-right.uagb-infobox-image-valign-top .uagb-ifb-content{-webkit-align-self:self-start;align-self:self-start}.uagb-infobox-left{justify-content:flex-start;text-align:left;-webkit-box-pack:start;-ms-flex-pack:start;-webkit-justify-content:flex-start;-moz-box-pack:start}.uagb-infobox-center{justify-content:center;text-align:center;-webkit-box-pack:center;-ms-flex-pack:center;-webkit-justify-content:center;-moz-box-pack:center}.uagb-infobox-right{justify-content:flex-end;text-align:right;-webkit-box-pack:end;-ms-flex-pack:end;-webkit-justify-content:flex-end;-moz-box-pack:end}.uagb-infobox-icon-above-title.uagb-infobox__content-wrap,.uagb-infobox-icon-below-title.uagb-infobox__content-wrap{display:block;width:100%}.uagb-infobox-icon-left-title .uagb-ifb-content>svg,.uagb-infobox-icon-left .uagb-ifb-content>svg{margin-right:10px}.uagb-infobox-icon-right-title .uagb-ifb-content>svg,.uagb-infobox-icon-right .uagb-ifb-content>svg{margin-left:10px}.uagb-infobox-icon-left.uagb-infobox__content-wrap,.uagb-infobox-icon-right.uagb-infobox__content-wrap,.uagb-infobox-icon-left-title .uagb-ifb-left-title-image,.uagb-infobox-icon-right-title .uagb-ifb-right-title-image{display:-webkit-box;display:-ms-flexbox;display:-webkit-flex;display:-moz-box;display:flex;-js-display:flex}.uagb-infobox-icon-left-title .uagb-ifb-left-title-image .uagb-ifb-image-content,.uagb-infobox-icon-right-title .uagb-ifb-right-title-image .uagb-ifb-image-content,.uagb-infobox-icon-left .uagb-ifb-image-content,.uagb-infobox-icon-right .uagb-ifb-image-content{flex-shrink:0;line-height:0}.uagb-infobox-icon-left-title .uagb-ifb-left-title-image .uagb-ifb-title-wrap,.uagb-infobox-icon-right-title .uagb-ifb-right-title-image .uagb-ifb-title-wrap,.uagb-infobox-icon-left .uagb-ifb-content,.uagb-infobox-icon-right .uagb-ifb-content{flex-grow:1}.uagb-infobox-icon-right.uagb-infobox__content-wrap,.uagb-infobox-icon-right-title .uagb-ifb-right-title-image{-webkit-box-pack:end;-ms-flex-pack:end;-webkit-justify-content:flex-end;-moz-box-pack:end;justify-content:flex-end}.uagb-ifb-content img{position:relative;display:inline-block;line-height:0;width:auto;height:auto !important;max-width:100%;border-radius:inherit;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;-webkit-border-radius:inherit}.uagb-infobox-module-link{position:absolute;top:0;right:0;bottom:0;left:0;z-index:4;width:100%;height:100%}.uagb-edit-mode .uagb-infobox-module-link{z-index:2}.uagb-infobox-link-icon-after{margin-right:0;margin-left:5px}.uagb-infobox-link-icon-before{margin-right:5px;margin-left:0}.uagb-infobox-link-icon{-webkit-transition:all 200ms linear;transition:all 200ms linear}.uagb-infobox__content-wrap{box-sizing:border-box;position:relative;width:100%;word-break:break-word;z-index:1}.uagb-ifb-separator{display:inline-block;margin:0;border-top-color:#333;border-top-style:solid;border-top-width:2px;line-height:0}.uagb-ifb-button-wrapper{line-height:1}.uagb-ifb-button-wrapper.uagb-ifb-button-type-text .uagb-infobox-cta-link.wp-block-button__link{background-color:unset;border:none}.uagb-ifb-button-wrapper.uagb-ifb-button-type-text .uagb-infobox-cta-link.wp-block-button__link:hover{background-color:unset;border-color:unset}.uagb-ifb-button-wrapper .uagb-infobox-cta-link{cursor:pointer}.uagb-ifb-button-wrapper .wp-block-button__link svg,.uagb-ifb-button-wrapper .ast-outline-button svg{fill:currentColor}.uagb-infobox__content-wrap a{-webkit-box-shadow:none;box-shadow:none;text-decoration:none}.uagb-ifb-title-wrap{width:100%}.uagb-ifb-title{margin-block-start:0}.uagb-ifb-title-wrap .uagb-ifb-title-prefix{display:block;padding:0;margin:0}.uagb-infobox__content-wrap.uagb-infobox__content-wrap{position:relative}.uagb-ifb-content{width:100%}.uagb-infobox__content-wrap.uagb-infobox,.uagb-ifb-content,.uagb-ifb-title-wrap,.uagb-ifb-title-prefix *,svg.dashicon.dashicons-upload{z-index:1}a.uagb-infobox-link-wrap{color:inherit}.uagb-ifb-content p:empty{display:none}.uagb-infobox__content-wrap .uagb-ifb-content img{display:inline-block;max-width:100%}.uagb-infobox__content-wrap .uagb-ifb-content svg{display:inline-block}.uagb-infobox__content-wrap .uagb-ifb-icon-wrap,.uagb-infobox-icon-left .uagb-ifb-image-content,.uagb-infobox-icon-right .uagb-ifb-image-content{box-sizing:content-box}.uagb-infobox-cta-link>svg{vertical-align:middle;width:15px;height:15px;font-size:15px}.uagb-infobox-cta-link{display:inline-flex}.block-editor-page #wpwrap .uagb-infobox-cta-link svg,.uagb-infobox-cta-link svg{font-style:normal}.uagb-infobox-icon-left-title .uagb-ifb-icon-wrap,.uagb-infobox-icon-left .uagb-ifb-icon-wrap{margin-right:10px;line-height:0}.uagb-infobox-icon-right-title .uagb-ifb-icon-wrap,.uagb-infobox-icon-right .uagb-ifb-icon-wrap{margin-left:10px;line-height:0}.uagb-infobox-icon-left .uagb-ifb-left-right-wrap,.uagb-infobox-icon-right .uagb-ifb-left-right-wrap,.uagb-infobox-icon-left-title .uagb-ifb-left-title-image,.uagb-infobox-icon-right-title .uagb-ifb-right-title-image{display:-webkit-box;display:-ms-flexbox;display:flex}.uagb-infobox-icon-right .uagb-ifb-left-right-wrap,.uagb-infobox-icon-right-title .uagb-ifb-right-title-image{-webkit-box-pack:end;-ms-flex-pack:end;-webkit-justify-content:flex-end;-moz-box-pack:end;justify-content:flex-end}a.uagb-infbox__link-to-all{position:absolute;top:0;left:0;z-index:3;width:100%;height:100%;box-shadow:none;text-decoration:none;-webkit-box-shadow:none}@media only screen and (max-width: 976px){.uagb-infobox-stacked-tablet.uagb-infobox__content-wrap .uagb-ifb-image-content{padding:0;margin-bottom:20px}.uagb-infobox-stacked-tablet.uagb-reverse-order-tablet.uagb-infobox__content-wrap{display:-webkit-inline-box;display:-ms-inline-flexbox;display:-webkit-inline-flex;display:-moz-inline-box;display:inline-flex;flex-direction:column-reverse;-js-display:inline-flex;-webkit-box-orient:vertical;-webkit-box-direction:reverse;-ms-flex-direction:column-reverse;-webkit-flex-direction:column-reverse;-moz-box-orient:vertical;-moz-box-direction:reverse}.uagb-infobox-stacked-tablet.uagb-infobox__content-wrap .uagb-ifb-content,.uagb-infobox-stacked-tablet.uagb-infobox__content-wrap .uagb-ifb-icon-wrap,.uagb-infobox-stacked-tablet.uagb-infobox__content-wrap .uagb-ifb-image-content{display:block;width:100%;text-align:center}.uagb-infobox-stacked-tablet.uagb-infobox__content-wrap .uagb-ifb-icon-wrap,.uagb-infobox-stacked-tablet.uagb-infobox__content-wrap .uagb-ifb-image-content{margin-right:0;margin-left:0}.uagb-infobox-stacked-tablet.uagb-infobox__content-wrap{display:inline-block}.uagb-infobox-icon-left-title.uagb-infobox-stacked-tablet .uagb-ifb-image-content,.uagb-infobox-icon-left-title.uagb-infobox-stacked-tablet .uagb-ifb-icon-wrap,.uagb-infobox-icon-left.uagb-infobox-stacked-tablet .uagb-ifb-image-content,.uagb-infobox-icon-left.uagb-infobox-stacked-tablet .uagb-ifb-icon-wrap{margin-right:0}.uagb-infobox-icon-right-title.uagb-infobox-stacked-tablet .uagb-ifb-image-content,.uagb-infobox-icon-right-title.uagb-infobox-stacked-tablet .uagb-ifb-icon-wrap,.uagb-infobox-icon-right.uagb-infobox-stacked-tablet .uagb-ifb-image-content,.uagb-infobox-icon-right.uagb-infobox-stacked-tablet .uagb-ifb-icon-wrap{margin-left:0}.uagb-infobox-icon-left-title .uagb-ifb-separator{margin:10px 0}}@media screen and (max-width: 767px){.uagb-infobox-stacked-mobile.uagb-infobox__content-wrap{display:inline-block}.uagb-infobox-stacked-mobile.uagb-infobox__content-wrap .uagb-ifb-image-content,.uagb-infobox-stacked-mobile.uagb-infobox__content-wrap .uagb-ifb-icon-wrap{padding:0;margin-bottom:20px;margin-right:0;margin-left:0}.uagb-infobox-stacked-mobile.uagb-infobox__content-wrap.uagb-reverse-order-mobile{display:-webkit-inline-box;display:-ms-inline-flexbox;display:-webkit-inline-flex;display:-moz-inline-box;display:inline-flex;flex-direction:column-reverse;-js-display:inline-flex;-webkit-box-orient:vertical;-webkit-box-direction:reverse;-ms-flex-direction:column-reverse;-webkit-flex-direction:column-reverse;-moz-box-orient:vertical;-moz-box-direction:reverse}.uagb-infobox-stacked-mobile.uagb-infobox__content-wrap .uagb-ifb-image-content,.uagb-infobox-stacked-mobile.uagb-infobox__content-wrap .uagb-ifb-icon-wrap,.uagb-infobox-stacked-mobile.uagb-infobox__content-wrap .uagb-ifb-content{display:block;width:100%;text-align:center}.uagb-infobox-icon-left-title.uagb-infobox-stacked-mobile .uagb-ifb-image-content,.uagb-infobox-icon-left-title.uagb-infobox-stacked-mobile .uagb-ifb-icon-wrap,.uagb-infobox-icon-left.uagb-infobox-stacked-mobile .uagb-ifb-image-content,.uagb-infobox-icon-left.uagb-infobox-stacked-mobile .uagb-ifb-icon-wrap{margin-right:0}.uagb-infobox-icon-right-title.uagb-infobox-stacked-mobile .uagb-ifb-image-content,.uagb-infobox-icon-right-title.uagb-infobox-stacked-mobile .uagb-ifb-icon-wrap,.uagb-infobox-icon-right.uagb-infobox-stacked-mobile .uagb-ifb-image-content,.uagb-infobox-icon-right.uagb-infobox-stacked-mobile .uagb-ifb-icon-wrap{margin-left:0}.uagb-infobox-icon-left-title .uagb-ifb-separator{margin:10px 0}}.uagb-ifb-icon svg{width:inherit;height:inherit;vertical-align:middle}.uagb-ifb-button-icon{height:15px;width:15px;font-size:15px;vertical-align:middle}.uagb-ifb-button-icon svg{height:inherit;width:inherit;display:inline-block}.uagb-ifb-button-icon.uagb-ifb-align-icon-after{float:right}.uagb-ifb-cta-button{display:inline-block}.uagb-disable-link{pointer-events:none}@media only screen and (min-width: 977px){.uagb-infobox-margin-wrapper{display:flex}}.uagb-ifb-content .uagb-ifb-desc p:last-child{margin-bottom:0}
.uagb-inline_notice__align-right{text-align:right}.uagb-inline_notice__align-right span.uagb-notice-dismiss{left:13px}.uagb-inline_notice__align-center{text-align:center}.uagb-inline_notice__align-center span.uagb-notice-dismiss{right:13px}.uagb-inline_notice__align-left{text-align:left}.uagb-inline_notice__align-left span.uagb-notice-dismiss{right:13px}.wp-block-uagb-inline-notice{width:100%;position:relative}.wp-block-uagb-inline-notice.uagb-notice__active{display:none}.wp-block-uagb-inline-notice .uagb-notice-title{margin:0;width:-moz-available;width:-webkit-fill-available;width:fill-available;display:inline-block}.wp-block-uagb-inline-notice .uagb-notice-text{margin-top:-3px;margin-bottom:0}.wp-block-uagb-inline-notice .uagb-notice-text p:last-child{margin-bottom:0}.wp-block-uagb-inline-notice .uagb-notice-text p:first-child{margin-top:0 !important}.wp-block-uagb-inline-notice span.uagb-notice-dismiss svg{width:16px;height:16px}.wp-block-uagb-inline-notice span.uagb-notice-dismiss{position:absolute;cursor:pointer;top:13px;opacity:0.8;padding:0;background:none;transition:0.3s ease}.wp-block-uagb-inline-notice.uagb-dismissable>svg{position:absolute;cursor:pointer;opacity:0.8;padding:0;background:none;transition:0.3s ease}.wp-block-uagb-inline-notice.uagb-dismissable button[type="button"]{position:absolute;cursor:pointer;opacity:0.8;padding:0;background:none;transition:0.3s ease}.wp-block-uagb-inline-notice.uagb-inline_notice__align-right{text-align:right}.wp-block-uagb-inline-notice.uagb-inline_notice__align-right svg{left:13px}.wp-block-uagb-inline-notice.uagb-inline_notice__align-right button[type="button"]{left:13px;top:13px;border:none;padding-inline:0;padding-block:0;line-height:0px}.wp-block-uagb-inline-notice.uagb-inline_notice__align-center{text-align:center}.wp-block-uagb-inline-notice.uagb-inline_notice__align-center svg{right:13px}.wp-block-uagb-inline-notice.uagb-inline_notice__align-center button[type="button"]{right:13px;top:13px;border:none;padding-inline:0;padding-block:0;line-height:0px}.wp-block-uagb-inline-notice.uagb-inline_notice__align-left{text-align:left}.wp-block-uagb-inline-notice.uagb-inline_notice__align-left svg{right:13px}.wp-block-uagb-inline-notice.uagb-inline_notice__align-left button[type="button"]{right:13px;top:13px;border:none;padding-inline:0;padding-block:0;line-height:0px}
.wp-block-uagb-marketing-button{display:-webkit-box;display:-ms-flexbox;display:flex}.wp-block-uagb-marketing-button p:empty{display:none}.wp-block-uagb-marketing-button .uagb-marketing-btn__title,.wp-block-uagb-marketing-button p.uagb-marketing-btn__prefix{margin-bottom:0}.wp-block-uagb-marketing-button .uagb-marketing-btn__link{z-index:1;display:inline-block;position:relative;-webkit-transition:all 0.2s;-o-transition:all 0.2s;transition:all 0.2s}.wp-block-uagb-marketing-button svg{fill:currentColor;width:20px;height:20px;z-index:1;vertical-align:middle}.wp-block-uagb-marketing-button .uagb-marketing-btn__title,.wp-block-uagb-marketing-button svg{display:inline;vertical-align:middle}.wp-block-uagb-marketing-button.uagb-marketing-btn__align-center,.wp-block-uagb-marketing-button.uagb-marketing-btn__align-text-center .uagb-marketing-btn__title-wrap,.wp-block-uagb-marketing-button.uagb-marketing-btn__align-text-center .uagb-marketing-btn__link{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;text-align:center}.wp-block-uagb-marketing-button.uagb-marketing-btn__align-left,.wp-block-uagb-marketing-button.uagb-marketing-btn__align-text-left .uagb-marketing-btn__title-wrap,.wp-block-uagb-marketing-button.uagb-marketing-btn__align-text-left .uagb-marketing-btn__link{-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;text-align:left}.wp-block-uagb-marketing-button.uagb-marketing-btn__align-right,.wp-block-uagb-marketing-button.uagb-marketing-btn__align-text-right .uagb-marketing-btn__title-wrap,.wp-block-uagb-marketing-button.uagb-marketing-btn__align-text-right .uagb-marketing-btn__link{-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end;text-align:right}.wp-block-uagb-marketing-button.uagb-marketing-btn__align-full .uagb-marketing-btn__link{width:100%}.wp-block-uagb-marketing-button.uagb-marketing-btn__align-text-center .uagb-marketing-btn__prefix{text-align:center}.wp-block-uagb-marketing-button.uagb-marketing-btn__align-text-left .uagb-marketing-btn__prefix{text-align:left}.wp-block-uagb-marketing-button.uagb-marketing-btn__align-text-right .uagb-marketing-btn__prefix{text-align:right}.wp-block-uagb-marketing-button.uagb-marketing-btn__icon-after svg{order:2}.wp-block-uagb-marketing-button.uagb-marketing-btn__align-full .uagb-marketing-btn__wrap{width:100%}.wp-block-uagb-marketing-button.uagb-marketing-btn__align-center .uagb-marketing-btn__wrap,.wp-block-uagb-marketing-button.uagb-marketing-btn__align-text-center .uagb-marketing-btn__title-wrap{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.wp-block-uagb-marketing-button .uagb-marketing-btn__title-wrap{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:self-end;-ms-flex-align:self-end;align-items:self-end}.wp-block-uagb-marketing-button.uagb-marketing-btn__icon-after .uagb-marketing-btn__icon-wrap{order:2}.entry-content .wp-block-uagb-marketing-button .uagb-marketing-btn__link{text-decoration:none;display:inline-block}
body.hide-scroll{overflow:hidden}body .uagb-modal-popup-wrap .wp-block{max-width:none !important;margin:0 !important}.uagb-modal-popup{visibility:hidden;position:fixed}.uagb-modal-popup.active{top:0;bottom:0;justify-content:center;align-items:center;background:rgba(0,0,0,0.7);left:0;right:0;display:flex;visibility:visible}.uagb-modal-popup.active .uagb-modal-popup-close{opacity:1;display:flex;align-items:center;position:absolute;text-align:center;cursor:pointer;fill:#fff}.uagb-modal-popup.active .uagb-modal-popup-close svg{-webkit-transition-property:filter, transform;-moz-transition-property:filter, transform;-o-transition-property:filter, transform;transition-property:filter, transform;-webkit-transition-duration:250ms;-moz-transition-duration:250ms;-o-transition-duration:250ms;transition-duration:250ms}.uagb-modal-popup.active .uagb-modal-popup-close:focus svg{transform:scale(1.2)}.uagb-modal-popup .uagb-modal-popup-close{display:none;border:none;background:transparent;padding:0}.uagb-modal-popup .uagb-modal-popup-content{padding:35px 35px;overflow-x:hidden;overflow-y:overlay;height:100%}.uagb-modal-popup .uagb-modal-popup-wrap{display:flex;flex-direction:column;justify-content:flex-start;width:700px;height:450px;max-width:100%;box-sizing:border-box;background:#fff;color:#333;position:relative}.uagb-modal-popup .uagb-modal-popup-wrap .uagb-modal-popup-content::-webkit-scrollbar{width:5px}.uagb-modal-popup .uagb-modal-popup-wrap .uagb-modal-popup-content::-webkit-scrollbar-thumb{box-shadow:inset 0 0 6px rgba(0,0,0,0.3);border-radius:100px}.wp-block-uagb-modal{width:100%}.entry .entry-content a.uagb-modal-button-link{text-decoration:inherit;align-items:center}.entry .entry-content a.uagb-modal-button-link:hover{color:inherit}.uagb-modal-trigger:not(img){display:flex}.uagb-modal-trigger:not(img) svg{font-size:30px;width:30px;height:30px;line-height:30px;cursor:pointer}img.uagb-modal-trigger{cursor:pointer;height:auto;max-width:100%}div.uagb-spectra-button-wrapper{line-height:1}div.uagb-spectra-button-wrapper .uagb-modal-button-link.uagb-modal-trigger{display:inline-flex;align-items:center;cursor:pointer}div.uagb-spectra-button-wrapper .uagb-modal-button-link.uagb-modal-trigger svg{fill:currentColor;font-style:normal;vertical-align:top;width:15px;height:15px;font-size:15px}.block-editor-block-popover.components-popover{z-index:99999999}.uagb-effect-default .uagb-modal-popup-wrap{opacity:0}.uagb-effect-default.active .uagb-modal-popup-wrap{opacity:1;-webkit-transition:all 0.3s;transition:all 0.3s}
.uagb-popup-builder{display:none;opacity:0;position:fixed;top:0;left:0;width:100vw;height:100vh;max-width:100vw;max-height:100vh;z-index:999999999;overflow:hidden;-webkit-transition-property:opacity;-moz-transition-property:opacity;-o-transition-property:opacity;transition-property:opacity;-webkit-transition-duration:250ms;-moz-transition-duration:250ms;-o-transition-duration:250ms;transition-duration:250ms}.uagb-popup-builder__banner--pusher{position:relative}.uagb-popup-builder__wrapper{position:relative;box-sizing:border-box}.uagb-popup-builder__wrapper--banner{width:100%}.uagb-popup-builder__container{display:flex;box-sizing:border-box;width:100%;height:100%;flex-direction:column;overflow-x:hidden;overflow-y:auto;-webkit-transition-property:box-shadow, border-color;-moz-transition-property:box-shadow, border-color;-o-transition-property:box-shadow, border-color;transition-property:box-shadow, border-color;-webkit-transition-duration:250ms;-moz-transition-duration:250ms;-o-transition-duration:250ms;transition-duration:250ms}.uagb-popup-builder__container .uagb-is-root-container{width:100%}.uagb-popup-builder__close{position:absolute;top:0;z-index:999999999}.uagb-popup-builder button.uagb-popup-builder__close{border:none;background:transparent;background-color:transparent;padding:0}.uagb-popup-builder button.uagb-popup-builder__close svg{-webkit-transition-property:fill;-moz-transition-property:fill;-o-transition-property:fill;transition-property:fill;-webkit-transition-duration:250ms;-moz-transition-duration:250ms;-o-transition-duration:250ms;transition-duration:250ms}.uagb-popup-builder__body--overflow-hidden{overflow:hidden}
.uagb-post-grid{margin:0 auto;position:relative}.uagb-post-grid:not(.is-grid) .uagb-post__inner-wrap{background-clip:content-box !important}.uagb-post-grid .uagb-post__inner-wrap{transition:box-shadow 0.2s ease;overflow:hidden}.uagb-post-grid .uagb-post__inner-wrap .uagb-post__taxonomy{display:inline-block}.uagb-post-grid .uagb-post__inner-wrap .uagb-post__taxonomy.default{margin:5px 5px 5px 0}.uagb-post-grid .uagb-post__inner-wrap .uagb-post__taxonomy.highlighted{background:#444;color:#fff;border-radius:2px;flex-direction:row;align-items:flex-end;padding:6px 8px;line-height:1;margin-right:5px;margin-bottom:20px}.uagb-post-grid .uagb-post__inner-wrap .uagb-post__taxonomy.highlighted a{color:#fff}.uagb-post-grid .uagb-post__inner-wrap .uagb-post__taxonomy a{text-decoration:none;color:inherit}.uagb-post-grid .uagb-post__inner-wrap .uagb-post__image .uagb-post__image-equal-height{display:block;height:0;padding-bottom:66.67%;overflow:hidden}.uagb-post-grid .uagb-post__load-more-wrap{width:100%;position:absolute;bottom:-30px}.uagb-post-grid .uagb-post__load-more-wrap .uagb-post-pagination-button{cursor:pointer}.uagb-post-grid .uagb-post__load-more-wrap a{color:inherit}.uagb-post-grid.is-grid article{float:left;display:inline-block}.uagb-post-grid.is-grid.uagb-equal_height_inline-read-more-buttons.uagb-post__image-position-top .uagb-post__text:nth-last-child(2){padding-bottom:100px}.uagb-post-grid.is-grid.uagb-equal_height_inline-read-more-buttons.uagb-post__image-position-top .uagb-post__text:last-child{position:absolute;bottom:20px}.uagb-post-grid.is-grid.uagb-equal_height_inline-read-more-buttons.uagb-post__image-position-background .uagb-post__text:nth-last-child(3){padding-bottom:100px}.uagb-post-grid.is-grid.uagb-equal_height_inline-read-more-buttons.uagb-post__image-position-background .uagb-post__text:nth-last-child(2){position:absolute;bottom:20px}.uagb-post-grid.is-grid.uagb-equal_height_inline-read-more-buttons.uagb-post__image-position-top .uagb-post__inner-wrap,.uagb-post-grid.is-grid.uagb-equal_height_inline-read-more-buttons.uagb-post__image-position-background .uagb-post__inner-wrap{position:relative}.uagb-post-grid.is-grid.uagb-post__image-position-top .uagb-post__image a{display:block;height:0;overflow:hidden;position:relative}.uagb-post-grid.is-grid.uagb-post__image-position-top .uagb-post__image a.uagb-image-ratio-2-3{padding-bottom:66%}.uagb-post-grid.is-grid.uagb-post__image-position-top .uagb-post__image a.uagb-image-ratio-9-16{padding-bottom:56.25%}.uagb-post-grid.is-grid.uagb-post__image-position-top .uagb-post__image a.uagb-image-ratio-1-2{padding-bottom:50%}.uagb-post-grid.is-grid.uagb-post__image-position-top .uagb-post__image a.uagb-image-ratio-1-1{padding-bottom:67%}.uagb-post-grid.is-grid.uagb-post__image-position-top .uagb-post__image a.uagb-image-ratio-inherit{padding-bottom:0;height:auto}.uagb-post-grid.is-grid.uagb-post__image-position-top .uagb-post__image a.uagb-image-ratio-inherit img{position:unset !important}.uagb-post-grid.is-grid.uagb-post__image-position-top .uagb-post__image a[class^="uagb-image-ratio-"]>img{position:absolute;height:100%}.uagb-post-grid.uagb-post__items.is-masonry{display:flex;-ms-flex-wrap:wrap;-webkit-flex-wrap:wrap;flex-wrap:wrap}.uagb-post-grid.uagb-post__items.is-carousel{display:flex;-ms-flex-wrap:wrap;-webkit-flex-wrap:wrap;flex-wrap:wrap;width:100%;visibility:hidden}.uagb-post-grid.is-grid .uagb-post__inner-wrap{height:max-content}.uagb-post-grid.is-grid.uagb-post__equal-height .uagb-post__inner-wrap{height:auto}.uagb-post-grid.is-masonry .uagb-post__inner-wrap{height:auto}.uagb-post-grid .uagb-post__author span,.uagb-post-grid .uagb-post__comment span,.uagb-post-grid .uagb-post__taxonomy span,.uagb-post-grid .uagb-post__date span{font-size:inherit;line-height:inherit;width:inherit;height:inherit;margin-right:4px;vertical-align:bottom}.uagb-post-grid.uagb-post__columns-8:not(.is-grid) article{width:12.5%}.uagb-post-grid.uagb-post__columns-7:not(.is-grid) article{width:14.28%}.uagb-post-grid.uagb-post__columns-6:not(.is-grid) article{width:16.66%}.uagb-post-grid.uagb-post__columns-5:not(.is-grid) article{width:20%}.uagb-post-grid.uagb-post__columns-4:not(.is-grid) article{width:25%}.uagb-post-grid.uagb-post__columns-3:not(.is-grid) article{width:33.33%}.uagb-post-grid.uagb-post__columns-2:not(.is-grid) article{width:50%}.uagb-post-grid.uagb-post__columns-1:not(.is-grid) article{width:100%}@media only screen and (max-width: 600px){.uagb-post-grid div[class*="columns"].is-grid{grid-template-columns:1fr}}.uagb-post-grid .uagb-post__image img{display:block;width:100%;height:auto;max-width:100%}.uagb-post-grid .uagb-post__title{margin-top:0;margin-bottom:0;word-break:break-word}.uagb-post-grid .uagb-post__title a{color:inherit;box-shadow:none;transition:0.3s ease;text-decoration:none}.uagb-post-grid .uagb-post__title a:hover{text-decoration:none}.uagb-post-grid .uagb-post__title a:focus{text-decoration:none}.uagb-post-grid .uagb-post__title a:active{text-decoration:none}.uagb-post-grid .uagb-post-grid-byline>*{margin-right:10px}.uagb-post-grid .uagb-post-grid-byline,.uagb-post-grid .uagb-post__taxonomy{text-transform:capitalize;font-size:14px;font-weight:500;line-height:23px;text-decoration:none}.uagb-post-grid .uagb-post-grid-byline a,.uagb-post-grid .uagb-post-grid-byline a:focus,.uagb-post-grid .uagb-post-grid-byline a:active{color:inherit;font-size:inherit;text-decoration:none}.uagb-post-grid .uagb-post__title a,.uagb-post-grid .uagb-post__title a:focus,.uagb-post-grid .uagb-post__title a:active{color:inherit;font-size:inherit}.uagb-post-grid .uagb-post__author,.uagb-post-grid .uagb-post__date,.uagb-post-grid .uagb-post__comment{display:inline-block;word-break:break-all}.uagb-post-grid .uagb-post__author:not(:last-child)::after,.uagb-post-grid .uagb-post__date:not(:last-child)::after,.uagb-post-grid .uagb-post__comment:not(:last-child)::after{content:"\\B7";vertical-align:middle;align-self:center;margin:0 5px;line-height:1}.uagb-post-grid .uagb-post__comment,.uagb-post-grid .uagb-post__taxonomy{display:inline-block}.uagb-post-grid .uagb-post__author a{box-shadow:none}.uagb-post-grid .uagb-post__author a:hover{color:inherit;box-shadow:0 -1px 0 inset}.uagb-post-grid .uagb-post__excerpt{word-break:break-word}.uagb-post-grid .uagb-post__inner-wrap p:last-of-type{margin-bottom:0}.uagb-post-grid .uagb-post__cta{border:none;display:inline-block;background:none}.uagb-post-grid .uagb-post__cta .ast-outline-button{display:inline-flex}.uagb-post-grid .uagb-post__excerpt p{color:inherit}.is-grid.uagb-post__items{display:grid}.wp-block-uagb-post-grid .uagb-post-pagination-wrap{grid-column:1 / -1}.uagb-post__image-position-background .uagb-post__link-complete-box{position:absolute;top:0;left:0;width:100%;height:100%;z-index:11}.uagb-post__image-position-background.uagb-post__image-enabled .uagb-post__text{color:#fff}.uagb-post__image-position-background .uagb-post__text{opacity:1;position:relative;z-index:10;overflow:hidden}.uagb-post__image-position-background .uagb-post__inner-wrap{position:relative;width:100%}.uagb-post__image-position-background .uagb-post__inner-wrap .uagb-post__taxonomy.highlighted,.uagb-post__image-position-background .uagb-post__inner-wrap .uagb-post__taxonomy.default{position:relative;z-index:999}.uagb-post__image-position-background .uagb-post__image img{position:absolute;width:auto;height:auto;min-width:100%;max-width:none;left:50%;top:50%;transform:translate(-50%, -50%);min-height:100%}.uagb-post__image-position-background .uagb-post__image{background-size:cover;background-repeat:no-repeat;background-position:center;overflow:hidden;text-align:center;position:absolute;left:0;top:0;width:100%;height:100%;z-index:2}.uagb-post__image-position-background .uagb-post__image::before{content:"";position:absolute;left:0;top:0;width:100%;height:100%;z-index:1;background-color:rgba(255,255,255,0.5)}.uagb-slick-carousel .is-carousel{padding:0}.uagb-slick-carousel ul.slick-dots{transform:unset;position:relative;padding:unset}.uagb-slick-carousel .slick-prev:not(:hover):not(:active):not(.has-background),.uagb-slick-carousel .slick-next:not(:hover):not(:active):not(.has-background),.uagb-slick-carousel ul.slick-dots li button:not(:hover):not(:active):not(.has-background){background-color:unset}.uagb-post-grid[data-equal-height="yes"] .uagb-post__inner-wrap{display:inline-block;height:100%}.uagb-post__arrow-outside.uagb-post-grid .slick-prev{left:-45px;z-index:1}[dir="rtl"] .uagb-post__arrow-outside.uagb-post-grid .slick-prev{left:-45px;right:auto}.uagb-post__arrow-outside.uagb-post-grid .slick-next{right:-45px}[dir="rtl"] .uagb-post__arrow-outside.uagb-post-grid .slick-next{left:auto;right:-45px}.uagb-post__arrow-inside.uagb-post-grid .slick-prev{left:25px;z-index:1}[dir="rtl"] .uagb-post__arrow-inside.uagb-post-grid .slick-prev{left:auto;right:25px}.uagb-post__arrow-inside.uagb-post-grid .slick-next{right:25px}[dir="rtl"] .uagb-post__arrow-inside.uagb-post-grid .slick-next{left:25px;right:auto}.uagb-post-grid.is-grid article,.uagb-post-grid.is-masonry article,.uagb-post-grid.is-carousel article{box-sizing:border-box}@media (max-width: 976px){.uagb-post__arrow-outside.uagb-post-grid .slick-prev{left:15px;z-index:1}[dir="rtl"] .uagb-post__arrow-outside.uagb-post-grid .slick-prev{left:auto;right:15px}.uagb-post__arrow-outside.uagb-post-grid .slick-next{right:15px}[dir="rtl"] .uagb-post__arrow-outside.uagb-post-grid .slick-next{left:15px;right:auto}:not(.is-grid).uagb-post-grid.uagb-post__columns-tablet-1 article{width:100%}:not(.is-grid).uagb-post-grid.uagb-post__columns-tablet-2 article{width:50%}:not(.is-grid).uagb-post-grid.uagb-post__columns-tablet-3 article{width:33.33%}:not(.is-grid).uagb-post-grid.uagb-post__columns-tablet-4 article{width:25%}:not(.is-grid).uagb-post-grid.uagb-post__columns-tablet-5 article{width:20%}:not(.is-grid).uagb-post-grid.uagb-post__columns-tablet-6 article{width:16.66%}:not(.is-grid).uagb-post-grid.uagb-post__columns-tablet-7 article{width:14.28%}:not(.is-grid).uagb-post-grid.uagb-post__columns-tablet-8 article{width:12.5%}}@media (max-width: 767px){:not(.is-grid).uagb-post-grid.uagb-post__columns-mobile-1 article{width:100%}:not(.is-grid).uagb-post-grid.uagb-post__columns-mobile-2 article{width:50%}:not(.is-grid).uagb-post-grid.uagb-post__columns-mobile-3 article{width:33.33%}:not(.is-grid).uagb-post-grid.uagb-post__columns-mobile-4 article{width:25%}:not(.is-grid).uagb-post-grid.uagb-post__columns-mobile-5 article{width:20%}:not(.is-grid).uagb-post-grid.uagb-post__columns-mobile-6 article{width:16.66%}:not(.is-grid).uagb-post-grid.uagb-post__columns-mobile-7 article{width:14.28%}:not(.is-grid).uagb-post-grid.uagb-post__columns-mobile-8 article{width:12.5%}}.entry .entry-content .uagb-post-grid a{text-decoration:none}.uagb-post-pagination-wrap{display:flex;width:100%;flex-wrap:wrap}.uagb-post-pagination-wrap a.page-numbers,.uagb-post-pagination-wrap span.page-numbers.current{padding:5px 10px;margin:0;display:flex;margin-right:4px;margin-bottom:5px}.uagb-post-grid .uagb-post-inf-loader{margin:0 auto;min-height:58px;line-height:58px;width:160px;text-align:center}.uagb-post-grid .uagb-post-inf-loader div{width:18px;height:18px;background-color:#0085ba;-webkit-border-radius:100%;border-radius:100%;display:inline-block;-webkit-animation:sk-bouncedelay 1.4s infinite ease-in-out both;animation:sk-bouncedelay 1.4s infinite ease-in-out both}.uagb-post-grid .uagb-post-inf-loader .uagb-post-loader-1{-webkit-animation-delay:-0.32s;animation-delay:-0.32s}.uagb-post-grid .uagb-post-inf-loader .uagb-post-loader-2{-webkit-animation-delay:-0.16s;animation-delay:-0.16s}.wp-site-blocks .uagb-post__arrow-outside.uagb-post-grid .slick-next{right:0}.wp-site-blocks .uagb-post__arrow-outside.uagb-post-grid .slick-prev{left:0}@-webkit-keyframes sk-bouncedelay{0%,80%,100%{-webkit-transform:scale(0);transform:scale(0)}40%{-webkit-transform:scale(1);transform:scale(1)}}@keyframes sk-bouncedelay{0%,80%,100%{-webkit-transform:scale(0);transform:scale(0)}40%{-webkit-transform:scale(1);transform:scale(1)}}
.wp-block-uagb-restaurant-menu,.uagb-rest_menu__wrap{position:relative}.wp-block-uagb-restaurant-menu.uagb-rm__desk-column-1,.uagb-rest_menu__wrap.uagb-rm__desk-column-1{grid-template-columns:auto}.wp-block-uagb-restaurant-menu.uagb-rm__desk-column-2,.uagb-rest_menu__wrap.uagb-rm__desk-column-2{grid-template-columns:auto auto}.wp-block-uagb-restaurant-menu.uagb-rm__desk-column-3,.uagb-rest_menu__wrap.uagb-rm__desk-column-3{grid-template-columns:auto auto auto}.wp-block-uagb-restaurant-menu.uagb-rm__desk-column-4,.uagb-rest_menu__wrap.uagb-rm__desk-column-4{grid-template-columns:auto auto auto auto}.wp-block-uagb-restaurant-menu .uagb-rm__price,.uagb-rest_menu__wrap .uagb-rm__price{min-width:fit-content}.wp-block-uagb-restaurant-menu .uagb-rest_menu__wrap,.uagb-rest_menu__wrap .uagb-rest_menu__wrap{position:relative;box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;-webkit-transition:all 0.2s;-o-transition:all 0.2s;transition:all 0.2s}.wp-block-uagb-restaurant-menu .uagb-rest_menu__wrap.uagb-rm__image-position-right .uagb-rm__price,.uagb-rest_menu__wrap .uagb-rest_menu__wrap.uagb-rm__image-position-right .uagb-rm__price{text-align:left !important}.wp-block-uagb-restaurant-menu .uagb-rest_menu__wrap .uagb-rm__content,.uagb-rest_menu__wrap .uagb-rest_menu__wrap .uagb-rm__content{position:relative;display:table;width:100%;padding:15px;border-radius:inherit;text-align:left;word-break:break-word;overflow:hidden}.wp-block-uagb-restaurant-menu .uagb-rest_menu__wrap .uagb-rm__content .uagb-rm-details,.uagb-rest_menu__wrap .uagb-rest_menu__wrap .uagb-rm__content .uagb-rm-details{display:table;width:100%}.wp-block-uagb-restaurant-menu .uagb-rest_menu__wrap .uagb-rm__content .uagb-rm-details .uagb-rm__title,.uagb-rest_menu__wrap .uagb-rest_menu__wrap .uagb-rm__content .uagb-rm-details .uagb-rm__title{display:block;margin-bottom:5px;margin-block-start:0;word-break:normal}.wp-block-uagb-restaurant-menu .uagb-rest_menu__wrap .uagb-rm__content .uagb-rm-details .uagb-rm__price,.uagb-rest_menu__wrap .uagb-rest_menu__wrap .uagb-rm__content .uagb-rm-details .uagb-rm__price{word-break:normal}.wp-block-uagb-restaurant-menu .uagb-rest_menu__wrap .uagb-rm__content .uagb-rm__separator,.uagb-rest_menu__wrap .uagb-rest_menu__wrap .uagb-rm__content .uagb-rm__separator{display:-webkit-flex;display:-moz-flexbox;display:flex;margin-right:0;margin-bottom:10px;margin-left:0;line-height:0;-js-display:flex;width:100%;border-top-color:#b2b4b5;border-top-style:inherit;border-top-width:1px}.wp-block-uagb-restaurant-menu .uagb-rest_menu__wrap .uagb-rm__content img,.uagb-rest_menu__wrap .uagb-rest_menu__wrap .uagb-rm__content img{display:inline-block;box-sizing:content-box}.wp-block-uagb-restaurant-menu .uagb-rest_menu__wrap.uagb-rm__desk-column-3,.wp-block-uagb-restaurant-menu .uagb-rest_menu__wrap.uagb-rm__desk-column-2,.wp-block-uagb-restaurant-menu .uagb-rest_menu__wrap.uagb-rm__desk-column-1,.uagb-rest_menu__wrap .uagb-rest_menu__wrap.uagb-rm__desk-column-3,.uagb-rest_menu__wrap .uagb-rest_menu__wrap.uagb-rm__desk-column-2,.uagb-rest_menu__wrap .uagb-rest_menu__wrap.uagb-rm__desk-column-1{padding-right:10px;padding-left:10px}.wp-block-uagb-restaurant-menu .uagb-rest_menu__wrap.uagb-rm__align-center,.uagb-rest_menu__wrap .uagb-rest_menu__wrap.uagb-rm__align-center{display:flex;flex-direction:column}.wp-block-uagb-restaurant-menu .uagb-rest_menu__wrap.uagb-rm__align-center .uagb-rm__separator,.uagb-rest_menu__wrap .uagb-rest_menu__wrap.uagb-rm__align-center .uagb-rm__separator{align-self:center}.wp-block-uagb-restaurant-menu .uagb-rest_menu__wrap.uagb-rm__align-center .uagb-rm__price,.uagb-rest_menu__wrap .uagb-rest_menu__wrap.uagb-rm__align-center .uagb-rm__price{text-align:center}.wp-block-uagb-restaurant-menu .uagb-rest_menu__wrap.uagb-rm__align-right .uagb-rm__price,.uagb-rest_menu__wrap .uagb-rest_menu__wrap.uagb-rm__align-right .uagb-rm__price{display:table-cell;text-align:left}.wp-block-uagb-restaurant-menu .uagb-rest_menu__wrap.uagb-rm__image-position-left.uagb-rm__align-left .uagb-rm__price,.uagb-rest_menu__wrap .uagb-rest_menu__wrap.uagb-rm__image-position-left.uagb-rm__align-left .uagb-rm__price{display:table-cell}.wp-block-uagb-restaurant-menu .uagb-rest_menu__wrap.uagb-rm__image-position-top .uagb-rm__content .uagb-rm__price,.uagb-rest_menu__wrap .uagb-rest_menu__wrap.uagb-rm__image-position-top .uagb-rm__content .uagb-rm__price{display:table-cell}.wp-block-uagb-restaurant-menu .uagb-rest_menu__wrap .uagb-rm__desc,.uagb-rest_menu__wrap .uagb-rest_menu__wrap .uagb-rm__desc{margin-bottom:15px}.wp-block-uagb-restaurant-menu .uagb-rest_menu__wrap .uagb-rm__image-position-left .uagb-rm__content,.wp-block-uagb-restaurant-menu .uagb-rest_menu__wrap .uagb-rm__image-position-right .uagb-rm__content,.uagb-rest_menu__wrap .uagb-rest_menu__wrap .uagb-rm__image-position-left .uagb-rm__content,.uagb-rest_menu__wrap .uagb-rest_menu__wrap .uagb-rm__image-position-right .uagb-rm__content{display:-ms-flexbox;display:flex;-js-display:flex}.wp-block-uagb-restaurant-menu .uagb-rest_menu__wrap .uagb-rm__image-position-left.uagb-rm__align-center .uagb-rm__price,.wp-block-uagb-restaurant-menu .uagb-rest_menu__wrap .uagb-rm__image-position-right.uagb-rm__align-center .uagb-rm__price,.uagb-rest_menu__wrap .uagb-rest_menu__wrap .uagb-rm__image-position-left.uagb-rm__align-center .uagb-rm__price,.uagb-rest_menu__wrap .uagb-rest_menu__wrap .uagb-rm__image-position-right.uagb-rm__align-center .uagb-rm__price{width:20%}.wp-block-uagb-restaurant-menu .uagb-rest_menu__wrap.uagb-rm__align-center .uagb-rm-details,.wp-block-uagb-restaurant-menu .uagb-rest_menu__wrap.uagb-rm__align-center .uagb-rm__title-wrap,.wp-block-uagb-restaurant-menu .uagb-rest_menu__wrap.uagb-rm__align-center.uagb-rm__image-position-top .uagb-rm__price,.uagb-rest_menu__wrap .uagb-rest_menu__wrap.uagb-rm__align-center .uagb-rm-details,.uagb-rest_menu__wrap .uagb-rest_menu__wrap.uagb-rm__align-center .uagb-rm__title-wrap,.uagb-rest_menu__wrap .uagb-rest_menu__wrap.uagb-rm__align-center.uagb-rm__image-position-top .uagb-rm__price{display:block;width:100%}.wp-block-uagb-restaurant-menu .uagb-rest_menu__wrap .uagb-rm__image,.uagb-rest_menu__wrap .uagb-rest_menu__wrap .uagb-rm__image{overflow:hidden}.wp-block-uagb-restaurant-menu .uagb-rest_menu__wrap .uagb-rm__image .uagb-rm-aligned-middle img,.uagb-rest_menu__wrap .uagb-rest_menu__wrap .uagb-rm__image .uagb-rm-aligned-middle img{-ms-flex-item-align:center;align-self:center}.wp-block-uagb-restaurant-menu.uagb-rm__image-aligned-middle img,.wp-block-uagb-restaurant-menu .uagb-rm__image-aligned-middle .uagb-rm__image-content,.uagb-rest_menu__wrap.uagb-rm__image-aligned-middle img,.uagb-rest_menu__wrap .uagb-rm__image-aligned-middle .uagb-rm__image-content{-ms-flex-item-align:center;align-self:center}.wp-block-uagb-restaurant-menu.uagb-rm__image-aligned-top img,.uagb-rest_menu__wrap.uagb-rm__image-aligned-top img{-ms-flex-item-align:flex-start;align-self:flex-start}.wp-block-uagb-restaurant-menu .uagb-rm__align-left .uagb-rm__content span.uagb-rm__price,.uagb-rest_menu__wrap .uagb-rm__align-left .uagb-rm__content span.uagb-rm__price{display:table-cell;text-align:right}.wp-block-uagb-restaurant-menu .uagb-rm__text-wrap,.uagb-rest_menu__wrap .uagb-rm__text-wrap{position:relative;display:block;width:100%}.wp-block-uagb-restaurant-menu .uagb-rm__image-position-center.uagb-rm__align-center .uagb-rm-details,.wp-block-uagb-restaurant-menu .uagb-rm__image-position-center.uagb-rm__align-center .uagb-rm__title-wrap,.wp-block-uagb-restaurant-menu .uagb-rm__image-position-center.uagb-rm__align-center .uagb-rm__price,.uagb-rest_menu__wrap .uagb-rm__image-position-center.uagb-rm__align-center .uagb-rm-details,.uagb-rest_menu__wrap .uagb-rm__image-position-center.uagb-rm__align-center .uagb-rm__title-wrap,.uagb-rest_menu__wrap .uagb-rm__image-position-center.uagb-rm__align-center .uagb-rm__price{display:block;width:100%;text-align:center}.wp-block-uagb-restaurant-menu .uagb-rm__image-position-left .uagb-rm__content,.uagb-rest_menu__wrap .uagb-rm__image-position-left .uagb-rm__content{display:-ms-flexbox;display:flex;-js-display:flex}.wp-block-uagb-restaurant-menu .uagb-rm__image-position-left.uagb-rm__align-left .uagb-rm-details,.uagb-rest_menu__wrap .uagb-rm__image-position-left.uagb-rm__align-left .uagb-rm-details{flex-direction:unset}.wp-block-uagb-restaurant-menu .uagb-rm__image-position-left.uagb-rm__align-left .uagb-rm__price,.wp-block-uagb-restaurant-menu .uagb-rm__image-position-left.uagb-rm__align-right .uagb-rm__price,.wp-block-uagb-restaurant-menu .uagb-rm__image-position-left.uagb-rm__align-center .uagb-rm__price,.uagb-rest_menu__wrap .uagb-rm__image-position-left.uagb-rm__align-left .uagb-rm__price,.uagb-rest_menu__wrap .uagb-rm__image-position-left.uagb-rm__align-right .uagb-rm__price,.uagb-rest_menu__wrap .uagb-rm__image-position-left.uagb-rm__align-center .uagb-rm__price{text-align:right;display:table-cell}.wp-block-uagb-restaurant-menu .uagb-rm__image-position-left.uagb-rm__align-left .uagb-rm__title-wrap,.wp-block-uagb-restaurant-menu .uagb-rm__image-position-left.uagb-rm__align-right .uagb-rm__title-wrap,.wp-block-uagb-restaurant-menu .uagb-rm__image-position-left.uagb-rm__align-center .uagb-rm__title-wrap,.wp-block-uagb-restaurant-menu .uagb-rm__image-position-left.uagb-rm__align-left img,.wp-block-uagb-restaurant-menu .uagb-rm__image-position-left.uagb-rm__align-right img,.wp-block-uagb-restaurant-menu .uagb-rm__image-position-left.uagb-rm__align-center img,.uagb-rest_menu__wrap .uagb-rm__image-position-left.uagb-rm__align-left .uagb-rm__title-wrap,.uagb-rest_menu__wrap .uagb-rm__image-position-left.uagb-rm__align-right .uagb-rm__title-wrap,.uagb-rest_menu__wrap .uagb-rm__image-position-left.uagb-rm__align-center .uagb-rm__title-wrap,.uagb-rest_menu__wrap .uagb-rm__image-position-left.uagb-rm__align-left img,.uagb-rest_menu__wrap .uagb-rm__image-position-left.uagb-rm__align-right img,.uagb-rest_menu__wrap .uagb-rm__image-position-left.uagb-rm__align-center img{text-align:left}.wp-block-uagb-restaurant-menu .uagb-rm__image-position-left img,.uagb-rest_menu__wrap .uagb-rm__image-position-left img{margin-right:10px}.wp-block-uagb-restaurant-menu .uagb-rm__image-aligned-middle .uagb-rm__content img,.wp-block-uagb-restaurant-menu .uagb-rm__image-aligned-middle .uagb-rm__content .uagb-rm__image-content,.uagb-rest_menu__wrap .uagb-rm__image-aligned-middle .uagb-rm__content img,.uagb-rest_menu__wrap .uagb-rm__image-aligned-middle .uagb-rm__content .uagb-rm__image-content{-ms-flex-item-align:center;align-self:center}.wp-block-uagb-restaurant-menu .uagb-rm__image-aligned-top .uagb-rm__content img,.wp-block-uagb-restaurant-menu .uagb-rm__image-aligned-top .uagb-rm__content .uagb-rm__image-content,.uagb-rest_menu__wrap .uagb-rm__image-aligned-top .uagb-rm__content img,.uagb-rest_menu__wrap .uagb-rm__image-aligned-top .uagb-rm__content .uagb-rm__image-content{-ms-flex-item-align:flex-start;align-self:flex-start}.wp-block-uagb-restaurant-menu.uagb-rm__image-aligned-middle .uagb-rm__content img,.uagb-rest_menu__wrap.uagb-rm__image-aligned-middle .uagb-rm__content img{-ms-flex-item-align:center;align-self:center}.wp-block-uagb-restaurant-menu.uagb-rm__image-aligned-top .uagb-rm__content img,.uagb-rest_menu__wrap.uagb-rm__image-aligned-top .uagb-rm__content img{-ms-flex-item-align:flex-start;align-self:flex-start}.wp-block-uagb-restaurant-menu .uagb-rm__image-position-right .uagb-rm__content,.uagb-rest_menu__wrap .uagb-rm__image-position-right .uagb-rm__content{display:-ms-flexbox;display:flex;-js-display:flex}.wp-block-uagb-restaurant-menu .uagb-rm__image-position-right.uagb-rm__align-left .uagb-rm-details,.wp-block-uagb-restaurant-menu .uagb-rm__image-position-right.uagb-rm__align-right .uagb-rm-details,.wp-block-uagb-restaurant-menu .uagb-rm__image-position-right.uagb-rm__align-center .uagb-rm-details,.uagb-rest_menu__wrap .uagb-rm__image-position-right.uagb-rm__align-left .uagb-rm-details,.uagb-rest_menu__wrap .uagb-rm__image-position-right.uagb-rm__align-right .uagb-rm-details,.uagb-rest_menu__wrap .uagb-rm__image-position-right.uagb-rm__align-center .uagb-rm-details{text-align:right}.wp-block-uagb-restaurant-menu .uagb-rm__image-position-right.uagb-rm__align-left .uagb-rm__text-wrap .uagb-rm-details,.uagb-rest_menu__wrap .uagb-rm__image-position-right.uagb-rm__align-left .uagb-rm__text-wrap .uagb-rm-details{display:flex;flex-direction:row-reverse}.wp-block-uagb-restaurant-menu .uagb-rm__image-position-right.uagb-rm__align-left .uagb-rm__price,.wp-block-uagb-restaurant-menu .uagb-rm__image-position-right.uagb-rm__align-right .uagb-rm__price,.wp-block-uagb-restaurant-menu .uagb-rm__image-position-right.uagb-rm__align-center .uagb-rm__price,.uagb-rest_menu__wrap .uagb-rm__image-position-right.uagb-rm__align-left .uagb-rm__price,.uagb-rest_menu__wrap .uagb-rm__image-position-right.uagb-rm__align-right .uagb-rm__price,.uagb-rest_menu__wrap .uagb-rm__image-position-right.uagb-rm__align-center .uagb-rm__price{text-align:left;display:table-cell}.wp-block-uagb-restaurant-menu .uagb-rm__image-position-right.uagb-rm__align-left .uagb-rm__title-wrap,.wp-block-uagb-restaurant-menu .uagb-rm__image-position-right.uagb-rm__align-right .uagb-rm__title-wrap,.wp-block-uagb-restaurant-menu .uagb-rm__image-position-right.uagb-rm__align-center .uagb-rm__title-wrap,.wp-block-uagb-restaurant-menu .uagb-rm__image-position-right.uagb-rm__align-left img,.wp-block-uagb-restaurant-menu .uagb-rm__image-position-right.uagb-rm__align-right img,.wp-block-uagb-restaurant-menu .uagb-rm__image-position-right.uagb-rm__align-center img,.uagb-rest_menu__wrap .uagb-rm__image-position-right.uagb-rm__align-left .uagb-rm__title-wrap,.uagb-rest_menu__wrap .uagb-rm__image-position-right.uagb-rm__align-right .uagb-rm__title-wrap,.uagb-rest_menu__wrap .uagb-rm__image-position-right.uagb-rm__align-center .uagb-rm__title-wrap,.uagb-rest_menu__wrap .uagb-rm__image-position-right.uagb-rm__align-left img,.uagb-rest_menu__wrap .uagb-rm__image-position-right.uagb-rm__align-right img,.uagb-rest_menu__wrap .uagb-rm__image-position-right.uagb-rm__align-center img{text-align:right}.wp-block-uagb-restaurant-menu .uagb-rm__image-position-right img,.uagb-rest_menu__wrap .uagb-rm__image-position-right img{margin-left:10px}.wp-block-uagb-restaurant-menu .uagb-rm__image-position-top.uagb-rm__align-right .uagb-rm-details,.uagb-rest_menu__wrap .uagb-rm__image-position-top.uagb-rm__align-right .uagb-rm-details{display:inline-table}.wp-block-uagb-restaurant-menu{display:grid}@media (max-width: 976px){.wp-block-uagb-restaurant-menu .uagb-rm__image-position-left.uagb-rm-stacked-tablet .uagb-rm__content{display:block;display:block;-js-display:block}.wp-block-uagb-restaurant-menu .uagb-rm__image-position-left.uagb-rm-stacked-tablet.uagb-rm__image-aligned-middle img{align-self:flex-start}.wp-block-uagb-restaurant-menu .uagb-rm__image-position-right.uagb-rm-stacked-tablet .uagb-rm__content{display:block;display:block;-js-display:block}.wp-block-uagb-restaurant-menu .uagb-rm__image-position-right.uagb-rm-stacked-tablet.uagb-rm-reverse-order-tablet .uagb-rm__content{display:-webkit-box;display:-ms-flexbox;display:-webkit-flex;display:-moz-flexbox;display:flex;flex-direction:column-reverse;-js-display:flex;-webkit-box-orient:vertical;-webkit-box-direction:reverse;-ms-flex-direction:column-reverse;-webkit-flex-direction:column-reverse;-moz-box-orient:vertical;-moz-box-direction:reverse}.wp-block-uagb-restaurant-menu .uagb-rm__image-position-right.uagb-rm-stacked-tablet.uagb-rm__image-aligned-middle img{align-self:flex-end}.wp-block-uagb-restaurant-menu.uagb-rm__tablet-column-1{grid-template-columns:auto}.wp-block-uagb-restaurant-menu.uagb-rm__tablet-column-2{grid-template-columns:auto auto}.wp-block-uagb-restaurant-menu.uagb-rm__tablet-column-3{grid-template-columns:auto auto auto}.wp-block-uagb-restaurant-menu.uagb-rm__tablet-column-4{grid-template-columns:auto auto auto auto}}@media (max-width: 767px){.wp-block-uagb-restaurant-menu .uagb-rm__image-position-left.uagb-rm-stacked-mobile .uagb-rm__content{display:block;display:block;-js-display:block}.wp-block-uagb-restaurant-menu .uagb-rm__image-position-left.uagb-rm-stacked-mobile.uagb-rm__image-aligned-middle img{align-self:flex-start}.wp-block-uagb-restaurant-menu .uagb-rm__image-position-right.uagb-rm-stacked-mobile .uagb-rm__content{display:block;display:block;-js-display:block}.wp-block-uagb-restaurant-menu .uagb-rm__image-position-right.uagb-rm-stacked-mobile.uagb-rm-reverse-order-mobile .uagb-rm__content{display:-webkit-box;display:-ms-flexbox;display:-webkit-flex;display:-moz-flexbox;display:flex;flex-direction:column-reverse;-js-display:flex;-webkit-box-orient:vertical;-webkit-box-direction:reverse;-ms-flex-direction:column-reverse;-webkit-flex-direction:column-reverse;-moz-box-orient:vertical;-moz-box-direction:reverse}.wp-block-uagb-restaurant-menu .uagb-rm__image-position-right.uagb-rm-stacked-mobile.uagb-rm__image-aligned-middle img{align-self:flex-end}.wp-block-uagb-restaurant-menu.uagb-rm__mobile-column-1{grid-template-columns:auto}.wp-block-uagb-restaurant-menu.uagb-rm__mobile-column-2{grid-template-columns:auto auto}.wp-block-uagb-restaurant-menu.uagb-rm__mobile-column-3{grid-template-columns:auto auto auto}.wp-block-uagb-restaurant-menu.uagb-rm__mobile-column-4{grid-template-columns:auto auto auto auto}}.uagb-rm__title-wrap,.uagb-rm__price-wrap{display:table-cell}.uagb-rm__align-center .uagb-rm-details,.uagb-rm__align-center .uagb-rm__title-wrap,.uagb-rm__align-center .uagb-rm__price-wrap{display:block;width:100%}.uagb-rm__price-wrap,.uagb-rm__image-position-left.uagb-rm__align-center .uagb-rm__price-wrap,.uagb-rm__image-position-right.uagb-rm__align-center .uagb-rm__price-wrap{width:15%}.uagb-rm__separator-parent{line-height:0em;margin-left:0;margin-right:0;margin-bottom:10px;-js-display:flex;display:-webkit-flex;display:-moz-flexbox;display:flex}
.uagb_review_block{padding:25px 40px 35px 40px;margin:30px auto}.uagb_review_block a.uagb-rating-link-wrapper{color:inherit;text-decoration:none}.uagb_review_block .uagb-rating__source-wrap{padding-top:10px;padding-bottom:10px}.uagb_review_block .uagb_review_entry{display:flex;padding:10px 0 10px 0;border-bottom:1px solid #e9e9e9}.uagb_review_block .uagb_review_summary_title{margin:23px 0 13px 0;font-size:24px;font-weight:600}.uagb_review_block .uagb_review_summary .uagb_review_overall_value{flex-basis:75%}.uagb_review_block .uagb_review_average{display:inline-flex}.uagb_review_block .uagb_review_rating{text-align:right;font-size:40px}.uagb_review_block .uagb_review_average_stars{display:flex;grid-area:auto;justify-self:self-end;height:50px;line-height:60px;margin-left:10px;margin-top:25px}
.uagb-section__wrap{position:relative}.uagb-section__wrap .uagb-section__inner-wrap{position:relative;z-index:2;margin-right:auto;margin-left:auto}.uagb-section__wrap .uagb-section__overlay{position:absolute;top:0;left:0;width:100%;height:100%}.uagb-section__wrap .uagb-section__video-wrap{position:absolute;top:0;left:0;z-index:0;width:100%;height:100%;transition:opacity 1s;overflow:hidden;-webkit-transition:opacity 1s;-o-transition:opacity 1s}.uagb-section__wrap .uagb-section__video-wrap video{display:inline-block;vertical-align:baseline;width:100%;height:100%;max-width:100%;margin:0;background-size:cover;border:none;object-fit:cover;line-height:1;-o-object-fit:cover}@media (min-width: 768px) and (max-width: 1024px){.wp-block-uagb-section.uagb-section__wrap.uagb-section__background-image{background-attachment:scroll}}
.wp-block-uagb-separator{text-align:center;box-sizing:border-box;line-height:0}.wp-block-uagb-separator__inner{display:inline-block}.wp-block-uagb-separator:not(.wp-block-uagb-separator--text):not(.wp-block-uagb-separator--icon) .wp-block-uagb-separator__inner{border-top-style:solid;-webkit-mask:var(--my-background-image);-webkit-mask-size:38px 100%;-webkit-mask-repeat:repeat-x;margin-top:5px;margin-bottom:5px}.wp-block-uagb-separator--text .wp-block-uagb-separator__inner,.wp-block-uagb-separator--icon .wp-block-uagb-separator__inner{display:flex;justify-content:center;align-items:center;margin:0 auto}.wp-block-uagb-separator--text .wp-block-uagb-separator__inner::before,.wp-block-uagb-separator--icon .wp-block-uagb-separator__inner::before{display:block;content:"";border-bottom:0;flex-grow:1;border-top-color:#333;border-top-style:solid;-webkit-mask:var(--my-background-image);-webkit-mask-size:38px 100%;-webkit-mask-repeat:repeat-x}.wp-block-uagb-separator--text .wp-block-uagb-separator__inner::after,.wp-block-uagb-separator--icon .wp-block-uagb-separator__inner::after{display:block;content:"";border-bottom:0;flex-grow:1;border-top-color:#333;border-top-style:solid;-webkit-mask:var(--my-background-image);-webkit-mask-size:38px 100%;-webkit-mask-repeat:repeat-x}.wp-block-uagb-separator--icon .wp-block-uagb-separator-element svg{font-size:30px;color:#333;fill:#333;width:30px;height:30px;line-height:30px;max-width:none}.wp-block-uagb-separator--text .wp-block-uagb-separator-element .uagb-html-tag{word-break:initial;margin:0}
.uagb-swiper{position:relative;overflow:hidden}.uagb-slider-container{position:relative;width:100%;min-width:0;transition:box-shadow 0.2s ease}.uagb-slider-container .swiper-notification{left:0;opacity:0;pointer-events:none;position:absolute;top:0;z-index:-1000}.uagb-slider-container .swiper-button-next.swiper-button-disabled,.uagb-slider-container .swiper-button-prev.swiper-button-disabled{pointer-events:all}.uagb-slider-container .swiper-pagination.swiper-pagination-bullets{max-width:100%}.uagb-slider-container .swiper-button-prev,.uagb-slider-container .swiper-button-next{border-style:none;background:#efefef}
.wp-block-uagb-social-share .uagb-social-share__wrapper{text-decoration:none}.uagb-social-share__wrapper{box-shadow:none}.uagb-social-share__outer-wrap:not(.uagb-social-share__no-label) .uagb-social-share__source-wrap{margin-right:15px}.uagb-social-share__outer-wrap.uagb-social-share__icon-at-top .uagb-social-share__source-wrap{-ms-flex-item-align:flex-start;align-self:flex-start;margin-top:5px}
.uagb-social-share__outer-wrap,.uagb-social-share__wrap{display:flex;align-items:center;justify-content:center}.uagb-social-share__layout-vertical.uagb-social-share__outer-wrap,.uagb-social-share__layout-vertical .uagb-social-share__wrap{flex-direction:column}.uagb-social-share__layout-vertical .wp-block-uagb-social-share-child.uagb-ss-repeater.uagb-ss__wrapper:first-child{margin-top:0 !important}.uagb-social-share__layout-vertical .wp-block-uagb-social-share-child.uagb-ss-repeater.uagb-ss__wrapper:last-child{margin-bottom:0 !important}.uagb-social-share__outer-wrap a.uagb-button__link:focus{box-shadow:none}.uagb-social-share__outer-wrap .uagb-ss__wrapper{padding:0;margin-left:5px;margin-right:5px;transition:all 0.2s;display:inline-flex;text-align:center}.uagb-social-share__outer-wrap .uagb-ss__source-wrap{display:inline-block}.uagb-social-share__outer-wrap .uagb-ss__link{color:#3a3a3a;display:inline-table;line-height:0;cursor:pointer}.uagb-social-share__outer-wrap .uagb-ss__source-icon{font-size:40px;width:40px;height:40px}.uagb-social-share__outer-wrap .uagb-ss__source-image{width:40px}@media (max-width: 976px){.uagb-social-share__layout-horizontal .uagb-ss__wrapper{margin-left:0;margin-right:0}}.uagb-social-share__layout-horizontal .wp-block-uagb-social-share-child.uagb-ss-repeater.uagb-ss__wrapper:first-child{margin-left:0 !important}.uagb-social-share__layout-horizontal .wp-block-uagb-social-share-child.uagb-ss-repeater.uagb-ss__wrapper:last-child{margin-right:0 !important}
.wp-block-uagb-star-rating{display:flex}.wp-block-uagb-star-rating .uag-star-rating__title{margin:0}.wp-block-uagb-star-rating .uag-star-rating{display:flex;align-items:center}.wp-block-uagb-star-rating .uag-star{color:#ccd6df;display:inline-block;line-height:0.75em}
.wp-block-uagb-table-of-contents .uagb-toc__wrap{display:inline-block;max-width:-moz-available;max-width:-webkit-fill-available;max-width:fill-available}.wp-block-uagb-table-of-contents li.uagb-toc__list{padding-top:10px}.wp-block-uagb-table-of-contents ul.uagb-toc__list,.wp-block-uagb-table-of-contents ol.uagb-toc__list{list-style-position:inside;padding-left:0;margin-bottom:0;margin-left:2.2em}.wp-block-uagb-table-of-contents ul.uagb-toc__list li,.wp-block-uagb-table-of-contents ol.uagb-toc__list li{margin:0}.wp-block-uagb-table-of-contents ul li:empty{display:none}.wp-block-uagb-table-of-contents .uagb-toc__title-wrap{display:flex;align-items:center}.wp-block-uagb-table-of-contents .uagb-toc__title{display:flex;align-items:center}.wp-block-uagb-table-of-contents .uagb-toc__is-collapsible.uagb-toc__title-wrap{cursor:pointer}.wp-block-uagb-table-of-contents .uag-toc__collapsible-wrap svg{width:20px;height:20px}.wp-block-uagb-table-of-contents svg{width:20px;height:20px;display:inline-block;margin-left:10px;cursor:pointer}.wp-block-uagb-table-of-contents .uag-toc__collapsible-wrap{display:flex;margin-left:10px;cursor:pointer}.wp-block-uagb-table-of-contents.uagb-toc__collapse .uagb-toc__list-wrap{display:none}ol.uagb-toc__list li.uagb-toc__list ul,ol.uagb-toc__list ul.uagb-toc__list ul{list-style-type:circle}ol.uagb-toc__list>ul,ol.uagb-toc__list>li{list-style-type:disc}.uagb-toc__scroll-top{position:fixed;right:50px;bottom:50px;display:none;padding:10px;background:#ccd0d4;cursor:pointer;font-size:1rem;line-height:1.85714285714286}.uagb-toc__scroll-top svg{width:1.6em;height:0.6em;margin-left:0;transform:translate(0, -20%) rotate(180deg);fill:currentColor}.uagb-toc__scroll-top.uagb-toc__show-scroll{display:inline-table}body[class*="astra"] .uagb-toc__list{line-height:normal}.uagb-toc__list{margin-top:0}
.uagb-tabs__wrap{display:flex}.uagb-tabs__wrap ul.uagb-tabs__panel{margin:0;list-style-type:none;display:inherit}.uagb-tabs__wrap ul.uagb-tabs__panel.uagb-tabs__align-center{justify-content:center}.uagb-tabs__wrap ul.uagb-tabs__panel.uagb-tabs__align-left{justify-content:flex-start}.uagb-tabs__wrap ul.uagb-tabs__panel.uagb-tabs__align-right{justify-content:flex-end}.uagb-tabs__wrap ul.uagb-tabs__panel.uagb-tabs__align-right .uagb-tab:last-child{margin-right:0}.uagb-tabs__wrap ul.uagb-tabs__panel li.uagb-tab a{position:relative;padding:6px 12px;display:inline-flex;color:inherit}.uagb-tabs__wrap ul.uagb-tabs__panel li.uagb-tab a.uagb-tabs__icon-position-top{display:block}.uagb-tabs__wrap ul.uagb-tabs__panel li.uagb-tab a.uagb-tabs__icon-position-top .uagb-tabs__icon{display:block}.uagb-tabs__wrap ul.uagb-tabs__panel li.uagb-tab a.uagb-tabs__icon-position-bottom{display:block}.uagb-tabs__wrap ul.uagb-tabs__panel li.uagb-tab a.uagb-tabs__icon-position-bottom .uagb-tabs__icon{display:block}.uagb-tabs__wrap ul.uagb-tabs__panel p{margin:0}.uagb-tabs__wrap ul.uagb-tabs__panel .uagb-tabs__icon{vertical-align:text-top}.uagb-tabs__wrap ul.uagb-tabs__panel .uagb-tabs__icon-position-left{display:block;align-items:center}.uagb-tabs__wrap ul.uagb-tabs__panel .uagb-tabs__icon-position-left .uagb-tabs__icon{display:flex;align-self:center}.uagb-tabs__wrap ul.uagb-tabs__panel .uagb-tabs__icon-position-right{display:block}.uagb-tabs__wrap ul.uagb-tabs__panel .uagb-tabs__icon-position-right .uagb-tabs__icon{display:flex;align-self:center}.uagb-tabs__wrap .uagb-tabs__body-wrap{position:relative;max-width:100%;padding:10px}.editor-styles-wrapper .uagb-editor-preview-mode-tablet.uagb-tabs__wrap li.uagb-tab.uagb-tabs__add-tab,.editor-styles-wrapper .uagb-editor-preview-mode-mobile.uagb-tabs__wrap li.uagb-tab.uagb-tabs__add-tab{display:none}.uagb-tabs__wrap.uagb-tabs__hstyle1-desktop,.uagb-tabs__wrap.uagb-tabs__hstyle2-desktop,.uagb-tabs__wrap.uagb-tabs__hstyle3-desktop,.uagb-tabs__wrap.uagb-tabs__hstyle4-desktop,.uagb-tabs__wrap.uagb-tabs__hstyle5-desktop{flex-direction:column}.uagb-tabs__wrap.uagb-tabs__hstyle1-desktop ul.uagb-tabs__panel,.uagb-tabs__wrap.uagb-tabs__hstyle2-desktop ul.uagb-tabs__panel,.uagb-tabs__wrap.uagb-tabs__hstyle3-desktop ul.uagb-tabs__panel,.uagb-tabs__wrap.uagb-tabs__hstyle4-desktop ul.uagb-tabs__panel,.uagb-tabs__wrap.uagb-tabs__hstyle5-desktop ul.uagb-tabs__panel{margin-bottom:0;padding:0;display:flex;align-items:center;flex-direction:row;max-width:100%;flex-wrap:wrap}.uagb-tabs__wrap.uagb-tabs__hstyle1-desktop .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__hstyle2-desktop .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__hstyle3-desktop .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__hstyle4-desktop .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__hstyle5-desktop .uagb-tabs__body-wrap{max-width:100%}.uagb-tabs__wrap.uagb-tabs__hstyle1-desktop .uagb-tab{margin:10px 10px 10px 0}.uagb-tabs__wrap.uagb-tabs__hstyle2-desktop .uagb-tab{margin:10px 10px -1px 0}.uagb-tabs__wrap.uagb-tabs__hstyle2-desktop .uagb-tabs__body-wrap{border:none}.uagb-tabs__wrap.uagb-tabs__hstyle3-desktop .uagb-tab{margin:10px 10px 0 0}.uagb-tabs__wrap.uagb-tabs__hstyle4-desktop .uagb-tab{margin:10px 10px 10px 0}.uagb-tabs__wrap.uagb-tabs__hstyle5-desktop ul.uagb-tabs__panel{justify-content:space-between;margin:0}.uagb-tabs__wrap.uagb-tabs__hstyle5-desktop .uagb-tab{margin:10px 10px 10px 10px;text-align:center}.uagb-tabs__wrap.uagb-tabs__vstyle6-desktop,.uagb-tabs__wrap.uagb-tabs__vstyle7-desktop,.uagb-tabs__wrap.uagb-tabs__vstyle8-desktop,.uagb-tabs__wrap.uagb-tabs__vstyle9-desktop,.uagb-tabs__wrap.uagb-tabs__vstyle10-desktop{flex-direction:row}.uagb-tabs__wrap.uagb-tabs__vstyle6-desktop ul.uagb-tabs__panel,.uagb-tabs__wrap.uagb-tabs__vstyle7-desktop ul.uagb-tabs__panel,.uagb-tabs__wrap.uagb-tabs__vstyle8-desktop ul.uagb-tabs__panel,.uagb-tabs__wrap.uagb-tabs__vstyle9-desktop ul.uagb-tabs__panel,.uagb-tabs__wrap.uagb-tabs__vstyle10-desktop ul.uagb-tabs__panel{padding:0;display:flex;flex-direction:column;flex-grow:1;flex-wrap:wrap}.uagb-tabs__wrap.uagb-tabs__vstyle6-desktop .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__vstyle7-desktop .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__vstyle8-desktop .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__vstyle9-desktop .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__vstyle10-desktop .uagb-tabs__body-wrap{flex-grow:3}.uagb-tabs__wrap.uagb-tabs__vstyle6-desktop ul.uagb-tabs__panel,.uagb-tabs__wrap.uagb-tabs__vstyle7-desktop ul.uagb-tabs__panel,.uagb-tabs__wrap.uagb-tabs__vstyle9-desktop ul.uagb-tabs__panel,.uagb-tabs__wrap.uagb-tabs__vstyle10-desktop ul.uagb-tabs__panel{min-width:24%;max-width:24%;margin:0}.uagb-tabs__wrap.uagb-tabs__vstyle6-desktop .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__vstyle7-desktop .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__vstyle9-desktop .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__vstyle10-desktop .uagb-tabs__body-wrap{max-width:75%}.uagb-tabs__wrap.uagb-tabs__vstyle6-desktop .uagb-tab{margin:0 10px 10px 0}.uagb-tabs__wrap.uagb-tabs__vstyle7-desktop .uagb-tab{margin:10px 10px 0 0}.uagb-tabs__wrap.uagb-tabs__vstyle8-desktop ul.uagb-tabs__panel{min-width:25%;max-width:25%}.uagb-tabs__wrap.uagb-tabs__vstyle8-desktop .uagb-tabs__body-wrap{max-width:75%}.uagb-tabs__wrap.uagb-tabs__vstyle9-desktop .uagb-tab{margin:0 10px 10px 0}.uagb-tabs__wrap.uagb-tabs__vstyle10-desktop .uagb-tab{margin:10px 10px 10px 10px;text-align:center}@media (max-width: 1023px){.uagb-tabs__wrap.uagb-tabs__hstyle1-tablet,.uagb-tabs__wrap.uagb-tabs__hstyle2-tablet,.uagb-tabs__wrap.uagb-tabs__hstyle3-tablet,.uagb-tabs__wrap.uagb-tabs__hstyle4-tablet,.uagb-tabs__wrap.uagb-tabs__hstyle5-tablet{flex-direction:column}.uagb-tabs__wrap.uagb-tabs__hstyle1-tablet ul.uagb-tabs__panel,.uagb-tabs__wrap.uagb-tabs__hstyle2-tablet ul.uagb-tabs__panel,.uagb-tabs__wrap.uagb-tabs__hstyle3-tablet ul.uagb-tabs__panel,.uagb-tabs__wrap.uagb-tabs__hstyle4-tablet ul.uagb-tabs__panel,.uagb-tabs__wrap.uagb-tabs__hstyle5-tablet ul.uagb-tabs__panel{margin-bottom:0;padding:0;max-width:100%;display:flex;flex-direction:row;flex-wrap:wrap}.uagb-tabs__wrap.uagb-tabs__hstyle1-tablet .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__hstyle2-tablet .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__hstyle3-tablet .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__hstyle4-tablet .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__hstyle5-tablet .uagb-tabs__body-wrap{max-width:100%}.uagb-tabs__wrap.uagb-tabs__hstyle1-tablet .uagb-tab{margin:10px 10px 10px 0}.uagb-tabs__wrap.uagb-tabs__hstyle2-tablet .uagb-tab{margin:10px 10px -1px 0}.uagb-tabs__wrap.uagb-tabs__hstyle3-tablet .uagb-tab{margin:10px 10px 0 0}.uagb-tabs__wrap.uagb-tabs__hstyle4-tablet .uagb-tab{margin:10px 10px 10px 0}.uagb-tabs__wrap.uagb-tabs__hstyle5-tablet ul.uagb-tabs__panel{justify-content:flex-start;margin:0}.uagb-tabs__wrap.uagb-tabs__hstyle5-tablet .uagb-tab{margin:10px 10px 10px 10px;text-align:center}.uagb-tabs__wrap.uagb-tabs__vstyle6-tablet,.uagb-tabs__wrap.uagb-tabs__vstyle7-tablet,.uagb-tabs__wrap.uagb-tabs__vstyle8-tablet,.uagb-tabs__wrap.uagb-tabs__vstyle9-tablet,.uagb-tabs__wrap.uagb-tabs__vstyle10-tablet{flex-direction:row}.uagb-tabs__wrap.uagb-tabs__vstyle6-tablet ul.uagb-tabs__panel,.uagb-tabs__wrap.uagb-tabs__vstyle7-tablet ul.uagb-tabs__panel,.uagb-tabs__wrap.uagb-tabs__vstyle8-tablet ul.uagb-tabs__panel,.uagb-tabs__wrap.uagb-tabs__vstyle9-tablet ul.uagb-tabs__panel,.uagb-tabs__wrap.uagb-tabs__vstyle10-tablet ul.uagb-tabs__panel{margin-bottom:0;padding:0;display:flex;flex-direction:column;flex-grow:1}.uagb-tabs__wrap.uagb-tabs__vstyle6-tablet .uagb-tab p,.uagb-tabs__wrap.uagb-tabs__vstyle7-tablet .uagb-tab p,.uagb-tabs__wrap.uagb-tabs__vstyle8-tablet .uagb-tab p,.uagb-tabs__wrap.uagb-tabs__vstyle9-tablet .uagb-tab p,.uagb-tabs__wrap.uagb-tabs__vstyle10-tablet .uagb-tab p{margin:0}.uagb-tabs__wrap.uagb-tabs__vstyle6-tablet .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__vstyle7-tablet .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__vstyle8-tablet .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__vstyle9-tablet .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__vstyle10-tablet .uagb-tabs__body-wrap{flex-grow:3}.uagb-tabs__wrap.uagb-tabs__vstyle6-tablet ul.uagb-tabs__panel,.uagb-tabs__wrap.uagb-tabs__vstyle7-tablet ul.uagb-tabs__panel,.uagb-tabs__wrap.uagb-tabs__vstyle9-tablet ul.uagb-tabs__panel,.uagb-tabs__wrap.uagb-tabs__vstyle10-tablet ul.uagb-tabs__panel{min-width:24%;max-width:24%}.uagb-tabs__wrap.uagb-tabs__vstyle6-tablet .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__vstyle7-tablet .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__vstyle9-tablet .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__vstyle10-tablet .uagb-tabs__body-wrap{max-width:75%}.uagb-tabs__wrap.uagb-tabs__vstyle6-tablet .uagb-tab{margin:0 10px 10px 0}.uagb-tabs__wrap.uagb-tabs__vstyle7-tablet ul.uagb-tabs__panel{margin:0}.uagb-tabs__wrap.uagb-tabs__vstyle7-tablet ul.uagb-tabs__panel .uagb-tab{margin:10px 10px 0 0}.uagb-tabs__wrap.uagb-tabs__vstyle7-tablet .uagb-tabs__body-wrap{border:none}.uagb-tabs__wrap.uagb-tabs__vstyle8-tablet ul.uagb-tabs__panel{margin-bottom:0;min-width:25%;max-width:25%;justify-content:normal}.uagb-tabs__wrap.uagb-tabs__vstyle9-tablet ul.uagb-tabs__panel{margin-bottom:0}.uagb-tabs__wrap.uagb-tabs__vstyle9-tablet ul.uagb-tabs__panel .uagb-tab{margin:0 10px 10px 0}.uagb-tabs__wrap.uagb-tabs__vstyle10-tablet ul.uagb-tabs__panel{margin:0}.uagb-tabs__wrap.uagb-tabs__vstyle10-tablet ul.uagb-tabs__panel .uagb-tab{margin:10px 10px 10px 10px;text-align:center}.uagb-tabs__wrap.uagb-tabs__hstyle5-desktop.uagb-tabs__hstyle3-tablet,.uagb-tabs__wrap.uagb-tabs__hstyle5-desktop.uagb-tabs__hstyle4-tablet,.uagb-tabs__wrap.uagb-tabs__hstyle5-desktop.uagb-tabs__hstyle3-tablet .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__hstyle5-desktop.uagb-tabs__hstyle4-tablet .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__hstyle5-desktop.uagb-tabs__vstyle6-tablet,.uagb-tabs__wrap.uagb-tabs__hstyle5-desktop.uagb-tabs__vstyle8-tablet,.uagb-tabs__wrap.uagb-tabs__hstyle5-desktop.uagb-tabs__vstyle9-tablet,.uagb-tabs__wrap.uagb-tabs__hstyle5-desktop.uagb-tabs__vstyle6-tablet .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__hstyle5-desktop.uagb-tabs__vstyle8-tablet .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__hstyle5-desktop.uagb-tabs__vstyle9-tablet .uagb-tabs__body-wrap{border-style:none}}@media (max-width: 767px){.uagb-tabs__wrap.uagb-tabs__hstyle1-mobile,.uagb-tabs__wrap.uagb-tabs__hstyle2-mobile,.uagb-tabs__wrap.uagb-tabs__hstyle3-mobile,.uagb-tabs__wrap.uagb-tabs__hstyle4-mobile,.uagb-tabs__wrap.uagb-tabs__hstyle5-mobile{flex-direction:column;border-style:none}.uagb-tabs__wrap.uagb-tabs__hstyle1-mobile ul.uagb-tabs__panel,.uagb-tabs__wrap.uagb-tabs__hstyle2-mobile ul.uagb-tabs__panel,.uagb-tabs__wrap.uagb-tabs__hstyle3-mobile ul.uagb-tabs__panel,.uagb-tabs__wrap.uagb-tabs__hstyle4-mobile ul.uagb-tabs__panel,.uagb-tabs__wrap.uagb-tabs__hstyle5-mobile ul.uagb-tabs__panel{margin-bottom:0;padding:0;display:flex;flex-direction:row;flex-grow:1;max-width:100%}.uagb-tabs__wrap.uagb-tabs__hstyle1-mobile .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__hstyle2-mobile .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__hstyle3-mobile .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__hstyle4-mobile .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__hstyle5-mobile .uagb-tabs__body-wrap{flex-direction:row;max-width:100%}.uagb-tabs__wrap.uagb-tabs__vstyle6-mobile,.uagb-tabs__wrap.uagb-tabs__vstyle7-mobile,.uagb-tabs__wrap.uagb-tabs__vstyle8-mobile,.uagb-tabs__wrap.uagb-tabs__vstyle9-mobile,.uagb-tabs__wrap.uagb-tabs__vstyle10-mobile{flex-direction:row;border-style:none}.uagb-tabs__wrap.uagb-tabs__vstyle6-mobile ul.uagb-tabs__panel,.uagb-tabs__wrap.uagb-tabs__vstyle7-mobile ul.uagb-tabs__panel,.uagb-tabs__wrap.uagb-tabs__vstyle8-mobile ul.uagb-tabs__panel,.uagb-tabs__wrap.uagb-tabs__vstyle9-mobile ul.uagb-tabs__panel,.uagb-tabs__wrap.uagb-tabs__vstyle10-mobile ul.uagb-tabs__panel{margin-bottom:0;padding:0;display:flex;flex-direction:column;flex-grow:1}.uagb-tabs__wrap.uagb-tabs__vstyle6-mobile .uagb-tab p,.uagb-tabs__wrap.uagb-tabs__vstyle7-mobile .uagb-tab p,.uagb-tabs__wrap.uagb-tabs__vstyle8-mobile .uagb-tab p,.uagb-tabs__wrap.uagb-tabs__vstyle9-mobile .uagb-tab p,.uagb-tabs__wrap.uagb-tabs__vstyle10-mobile .uagb-tab p{margin:0}.uagb-tabs__wrap.uagb-tabs__vstyle6-mobile .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__vstyle7-mobile .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__vstyle8-mobile .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__vstyle9-mobile .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__vstyle10-mobile .uagb-tabs__body-wrap{flex-grow:3;max-width:75%}.uagb-tabs__wrap.uagb-tabs__hstyle1-mobile .uagb-tab{margin:10px 10px 10px 0}.uagb-tabs__wrap.uagb-tabs__hstyle2-mobile .uagb-tab{margin:10px 10px -1px 0}.uagb-tabs__wrap.uagb-tabs__hstyle3-mobile .uagb-tab{margin:10px 10px 0 0}.uagb-tabs__wrap.uagb-tabs__hstyle4-mobile .uagb-tab{margin:10px 10px 10px 0}.uagb-tabs__wrap.uagb-tabs__hstyle5-mobile ul.uagb-tabs__panel{justify-content:flex-start;margin:0}.uagb-tabs__wrap.uagb-tabs__hstyle5-mobile .uagb-tab{margin:10px 10px 10px 10px;text-align:center}.uagb-tabs__wrap.uagb-tabs__vstyle6-mobile ul.uagb-tabs__panel{min-width:24%;max-width:24%}.uagb-tabs__wrap.uagb-tabs__vstyle6-mobile ul.uagb-tabs__panel .uagb-tab{margin:0 10px 10px 0}.uagb-tabs__wrap.uagb-tabs__vstyle7-mobile ul.uagb-tabs__panel{min-width:24%;max-width:24%;margin:0}.uagb-tabs__wrap.uagb-tabs__vstyle7-mobile ul.uagb-tabs__panel .uagb-tab{margin:10px 10px 0 0}.uagb-tabs__wrap.uagb-tabs__vstyle8-mobile ul.uagb-tabs__panel{min-width:24%;max-width:24%}.uagb-tabs__wrap.uagb-tabs__vstyle8-mobile ul.uagb-tabs__panel .uagb-tab{margin:0 10px 10px 0}.uagb-tabs__wrap.uagb-tabs__vstyle9-mobile ul.uagb-tabs__panel{min-width:24%;max-width:24%}.uagb-tabs__wrap.uagb-tabs__vstyle9-mobile ul.uagb-tabs__panel .uagb-tab{margin:0 10px 10px 0}.uagb-tabs__wrap.uagb-tabs__vstyle10-mobile ul.uagb-tabs__panel{min-width:24%;max-width:24%;margin:0}.uagb-tabs__wrap.uagb-tabs__vstyle10-mobile ul.uagb-tabs__panel .uagb-tab{margin:10px 10px 10px 10px;text-align:center}.uagb-tabs__wrap.uagb-tabs__stack1-mobile,.uagb-tabs__wrap.uagb-tabs__stack2-mobile,.uagb-tabs__wrap.uagb-tabs__stack3-mobile,.uagb-tabs__wrap.uagb-tabs__stack4-mobile{display:block}.uagb-tabs__wrap.uagb-tabs__stack1-mobile ul.uagb-tabs__panel,.uagb-tabs__wrap.uagb-tabs__stack2-mobile ul.uagb-tabs__panel,.uagb-tabs__wrap.uagb-tabs__stack3-mobile ul.uagb-tabs__panel,.uagb-tabs__wrap.uagb-tabs__stack4-mobile ul.uagb-tabs__panel{margin:0;padding:0;display:flex;flex-direction:column;max-width:100%;flex-grow:unset}.uagb-tabs__wrap.uagb-tabs__stack1-mobile ul.uagb-tabs__panel .uagb-tab,.uagb-tabs__wrap.uagb-tabs__stack2-mobile ul.uagb-tabs__panel .uagb-tab,.uagb-tabs__wrap.uagb-tabs__stack3-mobile ul.uagb-tabs__panel .uagb-tab,.uagb-tabs__wrap.uagb-tabs__stack4-mobile ul.uagb-tabs__panel .uagb-tab{width:100%}.uagb-tabs__wrap.uagb-tabs__stack1-mobile ul.uagb-tabs__panel .uagb-tab p,.uagb-tabs__wrap.uagb-tabs__stack2-mobile ul.uagb-tabs__panel .uagb-tab p,.uagb-tabs__wrap.uagb-tabs__stack3-mobile ul.uagb-tabs__panel .uagb-tab p,.uagb-tabs__wrap.uagb-tabs__stack4-mobile ul.uagb-tabs__panel .uagb-tab p{margin:0}.uagb-tabs__wrap.uagb-tabs__stack1-mobile .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__stack2-mobile .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__stack3-mobile .uagb-tabs__body-wrap,.uagb-tabs__wrap.uagb-tabs__stack4-mobile .uagb-tabs__body-wrap{max-width:100%}.uagb-tabs__wrap.uagb-tabs__stack1-mobile{display:block}.uagb-tabs__wrap.uagb-tabs__stack1-mobile ul.uagb-tabs__panel{margin:0;padding:0;display:flex;flex-direction:column;max-width:100%;flex-grow:unset}.uagb-tabs__wrap.uagb-tabs__stack1-mobile ul.uagb-tabs__panel .uagb-tab{margin:0 0 10px 0}.uagb-tabs__wrap.uagb-tabs__stack1-mobile ul.uagb-tabs__panel .uagb-tab p{margin:0}.uagb-tabs__wrap.uagb-tabs__stack1-mobile .uagb-tabs__body-wrap{max-width:100%}.uagb-tabs__wrap.uagb-tabs__stack2-mobile ul.uagb-tabs__panel .uagb-tab{margin:0 0 10px 0}.uagb-tabs__wrap.uagb-tabs__stack3-mobile ul.uagb-tabs__panel .uagb-tab{margin:0 0 10px 0;padding:6px 12px 6px 12px}.uagb-tabs__wrap.uagb-tabs__stack4-mobile{margin:auto}.uagb-tabs__wrap.uagb-tabs__stack4-mobile ul.uagb-tabs__panel .uagb-tab{margin:0 0 10px 0;text-align:center}}.uagb-tabs__wrap .uagb-tabs__body-container.uagb-tabs-body__active{display:block}
.uagb-tabs__wrap .uagb-tabs__body-container{padding:10px 15px;display:none}
.uagb-tax-not-available{padding:10px;border:1px solid;text-align:center}.uagb-layout-list .uagb-list-wrap{margin-left:10px}.uagb-taxonomy__outer-wrap{margin-bottom:20px}ul.uagb-taxonomy-list-children{margin-bottom:0}.uagb-tax-link h1,.uagb-tax-link h2,.uagb-tax-link h3,.uagb-tax-link h4,.uagb-tax-link h5,.uagb-tax-link h6{margin-top:unset}
.wp-block-uagb-team{display:flex}.wp-block-uagb-team .uagb-team__content{width:100%}.wp-block-uagb-team.uagb-team__outer-wrap.uagb-team__image-position-left .uagb-team__wrap,.wp-block-uagb-team.uagb-team__outer-wrap.uagb-team__image-position-right .uagb-team__wrap{-js-display:flex;display:-webkit-box;display:-webkit-flex;display:-moz-box;display:-ms-flexbox;display:flex}.wp-block-uagb-team .uagb-team__title,.wp-block-uagb-team span.uagb-team__title{display:block;margin-block-start:0;margin-block-end:0}.wp-block-uagb-team .uagb-team__image-wrap img{display:inline;width:inherit;height:auto !important;max-width:100%;box-sizing:content-box;border-radius:inherit;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;-webkit-border-radius:inherit}.wp-block-uagb-team .uagb-team__image-wrap.uagb-team__image-crop-circle img{-webkit-border-radius:100%;border-radius:100%}.wp-block-uagb-team img.uagb-team__image-crop-circle{-webkit-border-radius:100%;border-radius:100%}.wp-block-uagb-team .uagb-team__image-wrap.uagb-team__image-crop-square img{-webkit-border-radius:0;border-radius:0}.wp-block-uagb-team img.uagb-team__image-crop-square{-webkit-border-radius:0;border-radius:0}.wp-block-uagb-team .uagb-team__social-icon-wrap ul{display:flex;list-style:none}.wp-block-uagb-team .uagb-team__social-icon a{display:block;width:20px;height:20px;color:#333;font-size:20px}.wp-block-uagb-team .uagb-team__social-icon{margin-right:20px;margin-left:0}.wp-block-uagb-team .uagb-team__social-list{padding:0;margin:0}.wp-block-uagb-team.uagb-team__image-position-above.uagb-team__align-center{text-align:center}.wp-block-uagb-team.uagb-team__image-position-above.uagb-team__align-center .uagb-team__content{text-align:center}.wp-block-uagb-team.uagb-team__image-position-above.uagb-team__align-left{text-align:left}.wp-block-uagb-team.uagb-team__image-position-above.uagb-team__align-left .uagb-team__content{text-align:left}.wp-block-uagb-team.uagb-team__image-position-above.uagb-team__align-right{text-align:right}.wp-block-uagb-team.uagb-team__image-position-above.uagb-team__align-right .uagb-team__content{text-align:right}.wp-block-uagb-team.uagb-team__image-position-above ul.uagb-team__social-list{display:flex;list-style:none}.wp-block-uagb-team.uagb-team__image-position-above .uagb-team__social-icon-wrap{display:inline-block}.wp-block-uagb-team.uagb-team__image-position-left ul.uagb-team__social-list{display:flex;list-style:none;justify-content:flex-start}.wp-block-uagb-team.uagb-team__image-position-left .uagb-team__content{text-align:left}.wp-block-uagb-team.uagb-team__image-position-left .uagb-team__social-icon-wrap ul{justify-content:flex-start;padding:0;margin:0}.wp-block-uagb-team.uagb-team__image-position-left li{margin-right:5px}.wp-block-uagb-team.uagb-team__image-position-right ul.uagb-team__social-list{display:flex;list-style:none;justify-content:flex-end}.wp-block-uagb-team.uagb-team__image-position-right .uagb-team__content{text-align:right}.wp-block-uagb-team.uagb-team__image-position-right .uagb-team__social-icon-wrap ul{justify-content:flex-end;padding:0;margin:0}.wp-block-uagb-team.uagb-team__image-position-right li{margin-left:5px}.wp-block-uagb-team .uagb-team__image-position-left .uagb-team__wrap,.wp-block-uagb-team .uagb-team__image-position-right .uagb-team__wrap{-js-display:flex;display:-webkit-box;display:-webkit-flex;display:-moz-box;display:-ms-flexbox;display:flex}.wp-block-uagb-team img{display:inline;max-width:100%;width:inherit;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;-webkit-border-radius:inherit;border-radius:inherit}@media only screen and (max-width: 976px){.wp-block-uagb-team.uagb-team__image-position-left ul.uagb-team__social-list{justify-content:center}.wp-block-uagb-team.uagb-team__image-position-right ul.uagb-team__social-list{justify-content:center}.wp-block-uagb-team.uagb-team__stack-tablet{text-align:center;display:block}.wp-block-uagb-team.uagb-team__stack-tablet .uagb-team__content{text-align:center}.wp-block-uagb-team.uagb-team__stack-tablet .uagb-team__wrap{display:inline-block}.wp-block-uagb-team.uagb-team__stack-tablet .uagb-team__image-wrap,.wp-block-uagb-team.uagb-team__stack-tablet img{margin-right:auto !important;margin-left:auto !important}.wp-block-uagb-team.uagb-team__stack-tablet .uagb-team__social-icon-wrap ul{justify-content:center}}@media screen and (max-width: 767px){.wp-block-uagb-team.uagb-team__image-position-left ul.uagb-team__social-list{justify-content:center}.wp-block-uagb-team.uagb-team__image-position-right ul.uagb-team__social-list{justify-content:center}.wp-block-uagb-team.uagb-team__stack-mobile{text-align:center;display:block}.wp-block-uagb-team.uagb-team__stack-mobile .uagb-team__content{text-align:center}.wp-block-uagb-team.uagb-team__stack-mobile .uagb-team__wrap{display:inline-block}.wp-block-uagb-team.uagb-team__stack-mobile .uagb-team__image-wrap{margin-right:auto !important;margin-left:auto !important}.wp-block-uagb-team.uagb-team__stack-mobile .uagb-team__social-icon-wrap ul{justify-content:center}}html[dir="rtl"] .wp-block-uagb-team.uagb-team__image-position-above.uagb-team__align-center{text-align:center}html[dir="rtl"] .wp-block-uagb-team.uagb-team__image-position-above.uagb-team__align-center .uagb-team__content{text-align:center}html[dir="rtl"] .wp-block-uagb-team.uagb-team__image-position-above.uagb-team__align-left{text-align:right}html[dir="rtl"] .wp-block-uagb-team.uagb-team__image-position-above.uagb-team__align-left .uagb-team__content{text-align:right}html[dir="rtl"] .wp-block-uagb-team.uagb-team__image-position-above.uagb-team__align-right{text-align:left}html[dir="rtl"] .wp-block-uagb-team.uagb-team__image-position-above.uagb-team__align-right .uagb-team__content{text-align:left}html[dir="rtl"] .wp-block-uagb-team.uagb-team__image-position-left .uagb-team__content{text-align:right}html[dir="rtl"] .wp-block-uagb-team.uagb-team__image-position-right .uagb-team__content{text-align:left}
.wp-block-uagb-testimonial.uagb-slick-carousel ul.slick-dots{margin-bottom:20px}.uagb-testimonial__wrap{box-sizing:border-box}.uagb-testimonial__wrap,.uagb-testimonial__wrap *{transition:all 0.2s}.uagb-icon-wrap .uagb-icon{display:inline-block}.uagb-tm__image-content img{height:auto !important}.uagb-tm__image,.uagb-testimonial__wrap,.uagb-tm__content,.uagb-tm__text-wrap{position:relative}.uagb-tm__imgicon-style-circle .uagb-tm__image img{border-radius:100%}.uagb-tm__imgicon-style-square .uagb-tm__image img{border-radius:0%}.uagb-tm__image img,.slick-slide .uagb-tm__image img{display:inline-block;box-sizing:content-box}.uagb-tm__content{overflow:hidden;text-align:center;word-break:break-word;border-radius:inherit;display:grid}.uagb-tm__image-position-left .uagb-tm__content,.uagb-tm__image-position-right .uagb-tm__content{display:flex}.uagb-tm__meta-inner{display:inline;width:100%;line-height:1}.uagb-tm__image-position-bottom .uagb-tm__image-content,.uagb-tm__image-position-bottom .uagb-testimonial-details{display:table-cell;vertical-align:middle}.uagb-tm__image-position-bottom .uagb-tm__image-content{padding-right:10px}.uagb-tm__author-name,.uagb-tm__company{display:block}.uagb-tm__image-aligned-middle .uagb-tm__image-content{align-self:center}.uagb-tm__author-name{font-size:30px;line-height:16px}.uagb-tm__company{font-size:15px;font-style:normal;line-height:16px;color:#888}.uagb-tm__overlay{height:100%;width:100%;top:0;left:0;position:absolute;background:transparent}.uagb-tm__items{visibility:hidden}.uagb-tm__items.slick-initialized{visibility:visible}.uagb-tm__image-position-top .uagb-tm__image-content{display:flex;justify-content:center}.uagb-slick-carousel.uagb-tm__arrow-outside .slick-next{right:-45px}.uagb-slick-carousel.uagb-tm__arrow-inside .slick-prev{left:25px;z-index:1}.uagb-slick-carousel.uagb-tm__arrow-inside .slick-next{right:25px}[dir="rtl"] .uagb-tm__arrow-inside.uagb-slick-carousel .slick-prev{left:auto;right:25px}[dir="rtl"] .uagb-tm__arrow-inside.uagb-slick-carousel .slick-next{left:25px;right:auto}[dir="rtl"] .uagb-tm__arrow-outside.uagb-slick-carousel .slick-prev{right:auto;left:-45px}[dir="rtl"] .uagb-tm__arrow-outside.uagb-slick-carousel .slick-next{left:auto;right:-45px}@media (min-width: 1025px){.wp-block-uagb-testimonial.uagb-post__carousel_notset .slick-slide:last-child .uagb-testimonial__wrap{padding-right:0}.wp-block-uagb-testimonial.uagb-post__carousel_notset .slick-slide:first-child .uagb-testimonial__wrap{padding-left:0}.wp-block-uagb-testimonial.uagb-post__carousel_notset .uagb-testimonial__wrap{margin-bottom:0}}@media (max-width: 976px){.wp-block-uagb-testimonial.uagb-post__carousel_notset-tablet .uagb-testimonial__wrap{margin-bottom:0}.wp-block-uagb-testimonial.uagb-post__carousel_notset-tablet .slick-slide:last-child .uagb-testimonial__wrap{padding-right:0}.wp-block-uagb-testimonial.uagb-post__carousel_notset-tablet .slick-slide:first-child .uagb-testimonial__wrap{padding-left:0}.uagb-tm-stacked-tablet.uagb-tm__image-position-bottom .uagb-tm__image-content,.uagb-tm-stacked-tablet.uagb-tm__image-position-bottom .uagb-testimonial-details{display:block;vertical-align:middle}.uagb-tm-stacked-tablet.uagb-tm__image-position-left .uagb-tm__content,.uagb-tm-stacked-tablet.uagb-tm__image-position-right .uagb-tm__content{display:block}.uagb-tm-stacked-tablet.uagb-tm__image-position-right.uagb-tm-reverse-order-tablet .uagb-tm__content{display:inline-flex;flex-direction:column-reverse}.uagb-tm-stacked-tablet.uagb-tm__image-aligned-top .uagb-tm__image-content{display:inline-flex;align-self:center}.uagb-slick-carousel.uagb-tm__arrow-outside .slick-prev{left:-10px;z-index:1}.uagb-slick-carousel.uagb-tm__arrow-outside .slick-next{right:-10px}[dir="rtl"] .uagb-slick-carousel.uagb-tm__arrow-outside .slick-prev{left:auto;right:15px}[dir="rtl"] .uagb-slick-carousel.uagb-tm__arrow-outside .slick-next{left:15px;right:auto}}@media (max-width: 768px){.wp-block-uagb-testimonial.uagb-post__carousel_notset-mobile .uagb-testimonial__wrap{margin-bottom:0}.wp-block-uagb-testimonial.uagb-post__carousel_notset-mobile .slick-slide:last-child .uagb-testimonial__wrap{padding-right:0}.wp-block-uagb-testimonial.uagb-post__carousel_notset-mobile .slick-slide:first-child .uagb-testimonial__wrap{padding-left:0}.uagb-tm-stacked-mobile.uagb-tm__image-position-bottom .uagb-tm__image-content,.uagb-tm-stacked-mobile.uagb-tm__image-position-bottom .uagb-testimonial-details{display:block;vertical-align:middle}.uagb-tm-stacked-mobile.uagb-tm__image-position-left .uagb-tm__content,.uagb-tm-stacked-mobile.uagb-tm__image-position-right .uagb-tm__content{display:block}.uagb-tm-stacked-mobile.uagb-tm__image-position-right.uagb-tm-reverse-order-mobile .uagb-tm__content{display:inline-flex;flex-direction:column-reverse}.uagb-tm-stacked-mobile.uagb-tm__image-aligned-top .uagb-tm__image-content{display:inline-flex;align-self:center}}.entry-content .wp-block-uagb-testimonial .is-carousel ul.slick-dots{padding:unset}
.wp-block-uagb-wp-search.uagb-wp-search__outer-wrap{width:100%;min-height:20px}.wp-block-uagb-wp-search.uagb-wp-search__outer-wrap.uagb-layout-input-button .uagb-search-submit{border:none;border-radius:0;color:#fff}.wp-block-uagb-wp-search.uagb-wp-search__outer-wrap.uagb-layout-input-button svg{fill:currentColor}.wp-block-uagb-wp-search.uagb-wp-search__outer-wrap.uagb-layout-input .uagb-wp-search-icon-wrap{display:flex;align-items:center}.wp-block-uagb-wp-search.uagb-wp-search__outer-wrap.uagb-layout-input svg{fill:currentColor;opacity:0.6}.wp-block-uagb-wp-search.uagb-wp-search__outer-wrap .uagb-search-wrapper .uagb-search-form__container{display:flex;overflow:hidden;max-width:100%}.wp-block-uagb-wp-search.uagb-wp-search__outer-wrap .uagb-search-wrapper .uagb-search-form__container .uagb-search-form__input{width:100%}.wp-block-uagb-wp-search.uagb-wp-search__outer-wrap .uagb-search-wrapper .uagb-search-form__container .uagb-search-form__input::-webkit-input-placeholder{overflow:unset}
.uag-blocks-common-selector{z-index:var(--z-index-desktop) !important}@media (max-width: 976px){.uag-blocks-common-selector{z-index:var(--z-index-tablet) !important}}@media (max-width: 767px){.uag-blocks-common-selector{z-index:var(--z-index-mobile) !important}}
',
    '_wpforms_transient_wpforms_/home/dh_2inhh2/d4dk.shop/wp-content/uploads/wpforms/cache/.htaccess_file' => 
    array (
      'size' => 446,
      'mtime' => 1719118495,
      'ctime' => 1719118495,
    ),
    'wpforms_challenge' => 
    array (
      'status' => 'canceled',
      'step' => 1,
      'user_id' => 1,
      'form_id' => 622,
      'embed_page' => 0,
      'embed_page_title' => '',
      'started_date_gmt' => '2024-06-23 04:56:46',
      'finished_date_gmt' => '2024-06-23 04:57:25',
      'seconds_spent' => 86,
      'seconds_left' => 214,
      'feedback_sent' => false,
      'feedback_contact_me' => false,
      'window_closed' => '1',
    ),
    'wpforms_templates_hash' => 'd1775032da8e1f8334d6e93ae4c8fa71',
    'wp_mail_smtp_lite_sent_email_counter' => '23',
    'wp_mail_smtp_lite_weekly_sent_email_counter' => 
    array (
      25 => 14,
      26 => 8,
      27 => 1,
    ),
    'widget_akismet_widget' => 
    array (
      '_multiwidget' => 1,
    ),
    'woocommerce_task_list_tracked_completed_tasks' => 
    array (
      0 => 'customize-store',
      1 => 'launch-your-store',
    ),
    'wpforms_crypto_secret_key' => 'GWcoPEtQYLXocYUGxdBbjkFLfnhQpFTrBruqbmY+KlE=',
    'ultp_options' => 
    array (
      'css_save_as' => 'wp_head',
      'preloader_style' => 'style1',
      'preloader_color' => '#037fff',
      'container_width' => '1140',
      'hide_import_btn' => '',
      'disable_image_size' => '',
      'disable_view_cookies' => '',
      'disable_google_font' => '',
      'ultp_templates' => 'true',
      'ultp_elementor' => 'true',
      'ultp_table_of_content' => 'true',
      'ultp_builder' => 'true',
      'ultp_custom_font' => 'true',
      'ultp_chatgpt' => 'true',
      'post_grid_1' => 'yes',
      'post_grid_2' => 'yes',
      'post_grid_3' => 'yes',
      'post_grid_4' => 'yes',
      'post_grid_5' => 'yes',
      'post_grid_6' => 'yes',
      'post_grid_7' => 'yes',
      'post_list_1' => 'yes',
      'post_list_2' => 'yes',
      'post_list_3' => 'yes',
      'post_list_4' => 'yes',
      'post_module_1' => 'yes',
      'post_module_2' => 'yes',
      'post_slider_1' => 'yes',
      'post_slider_2' => 'yes',
      'heading' => 'yes',
      'image' => 'yes',
      'taxonomy' => 'yes',
      'wrapper' => 'yes',
      'news_ticker' => 'yes',
      'builder_advance_post_meta' => 'yes',
      'builder_archive_title' => 'yes',
      'builder_author_box' => 'yes',
      'builder_post_next_previous' => 'yes',
      'builder_post_author_meta' => 'yes',
      'builder_post_breadcrumb' => 'yes',
      'builder_post_category' => 'yes',
      'builder_post_comment_count' => 'yes',
      'builder_post_comments' => 'yes',
      'builder_post_content' => 'yes',
      'builder_post_date_meta' => 'yes',
      'builder_post_excerpt' => 'yes',
      'builder_post_featured_image' => 'yes',
      'builder_post_reading_time' => 'yes',
      'builder_post_social_share' => 'yes',
      'builder_post_tag' => 'yes',
      'builder_post_title' => 'yes',
      'builder_post_view_count' => 'yes',
      'save_version' => 31,
      'activated_date' => 1719446400,
      'init_setup' => 'yes',
    ),
    '__ultp_site_type' => 'blog',
  ),
);
/*@DOCKET_CACHE_EOF*/