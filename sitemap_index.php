<?php
declare(strict_types=1);

$baseUrl = 'https://itmigrationservices.com';
$rootPath = __DIR__;

$excludedFiles = [
    'sitemap_index.php',
];

$pages = glob($rootPath . '/*.php') ?: [];

$urls = [];

foreach ($pages as $pagePath) {
    $filename = basename($pagePath);

    if (in_array($filename, $excludedFiles, true)) {
        continue;
    }

    $slug = $filename === 'index.php' ? '' : '/' . str_replace('.php', '', $filename);
    $lastModified = gmdate('c', (int) filemtime($pagePath));

    $urls[] = [
        'loc' => $baseUrl . ($slug === '' ? '/' : $slug . '.php'),
        'lastmod' => $lastModified,
        'changefreq' => $filename === 'index.php' ? 'weekly' : 'monthly',
        'priority' => $filename === 'index.php' ? '1.0' : '0.8',
    ];
}

usort(
    $urls,
    static function (array $left, array $right) use ($baseUrl): int {
        if ($left['loc'] === $baseUrl . '/') {
            return -1;
        }

        if ($right['loc'] === $baseUrl . '/') {
            return 1;
        }

        return strcmp($left['loc'], $right['loc']);
    }
);

header('Content-Type: application/xml; charset=UTF-8');

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($urls as $url): ?>
  <url>
    <loc><?= htmlspecialchars($url['loc'], ENT_XML1, 'UTF-8') ?></loc>
    <lastmod><?= htmlspecialchars($url['lastmod'], ENT_XML1, 'UTF-8') ?></lastmod>
    <changefreq><?= htmlspecialchars($url['changefreq'], ENT_XML1, 'UTF-8') ?></changefreq>
    <priority><?= htmlspecialchars($url['priority'], ENT_XML1, 'UTF-8') ?></priority>
  </url>
<?php endforeach; ?>
</urlset>
