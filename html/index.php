<?php
// GitHub User Info Page in PHP
$githubUser = 'Gnayoah';

function fetch_json($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'PHP GitHub User Info');
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response, true);
}

$userData = fetch_json("https://api.github.com/users/$githubUser");
$reposData = fetch_json("https://api.github.com/users/$githubUser/repos");

$publicRepos = $userData['public_repos'] ?? 0;
if (is_array($reposData)) {
    foreach ($reposData as $repo) {
        if ($repo['name'] === $githubUser) {
            $publicRepos--;
            break;
        }
    }
    usort($reposData, function($a, $b) {
        return $b['stargazers_count'] <=> $a['stargazers_count'];
    });
    $topRepos = array_slice(array_filter($reposData, function($r) use ($githubUser) {
        return $r['name'] !== $githubUser;
    }), 0, 6);
} else {
    $topRepos = [];
}

function format_number($number) {
    if ($number >= 1000 && $number < 1000000) {
        return number_format($number / 1000, 1) . 'k';
    } elseif ($number >= 1000000) {
        return number_format($number / 1000000, 1) . 'M';
    }
    return $number;
}

$isEnglish = isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) && strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'], 'en') === 0;
?>
<!DOCTYPE html>
<html lang="<?= $isEnglish ? 'en' : 'zh-CN' ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= ($userData['name'] ?? '无昵称') . ' (' . ($userData['login'] ?? '') . ')' ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ayahub/webfont-harmony-sans-sc@1.0.0/css/index.min.css">
    <link rel="stylesheet" href="style0.1.7.css">
    <style>
        body {
            font-family: 'HarmonyOS Sans SC', sans-serif;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="<?= $userData['html_url'] ?>" target="_blank"><?= $isEnglish ? 'Home' : '主页' ?></a></li>
            <li><a href="https://github.com/<?= $githubUser ?>?tab=repositories" target="_blank"><?= $isEnglish ? 'Repositories' : '仓库' ?></a></li>
            <li><a href="https://github.com/Gnayoah/GitHub-User-Info-Page" target="_blank"><?= $isEnglish ? 'About' : '关于' ?></a></li>
        </ul>
    </nav>
    <div class="container">
        <div class="profile">
            <img src="<?= $userData['avatar_url'] ?>" alt="<?= $isEnglish ? 'Avatar' : '头像' ?>">
            <div class="info">
                <div>
                    <h2><?= $userData['name'] ?? '无昵称' ?></h2>
                    <p id="username" class="username"><?= $userData['login'] ?></p>
                </div>
            </div>
            <p><?= $userData['bio'] ?? ($isEnglish ? 'No bio' : '无简介') ?></p>
            <a href="<?= $userData['html_url'] ?>" target="_blank"><?= $isEnglish ? 'View GitHub Profile' : '访问 GitHub 个人资料' ?></a>
        </div>
        <div class="repos">
            <div class="repos-header">
                <h3><?= $isEnglish ? 'Repositories' : '仓库' ?> (<?= format_number($publicRepos) ?>)</h3>
                <a href="<?= $userData['html_url'] ?>?tab=repositories" target="_blank"><?= $isEnglish ? 'View All Repositories' : '查看全部仓库' ?></a>
            </div>
            <ul>
                <?php foreach ($topRepos as $repo): ?>
                <li class="repo-item">
                    <a href="<?= $repo['html_url'] ?>" target="_blank"><?= str_replace('-', ' ', $repo['name']) ?></a>
                    <p><?= $repo['description'] ?? ($isEnglish ? 'No description' : '无简介') ?></p>
                    <p class="repo-details">
                        <?= 'Stars: ' . $repo['stargazers_count'] . ' | Forks: ' . $repo['forks_count'] ?><?= $repo['language'] ? ' | ' . $repo['language'] : '' ?>
                    </p>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <footer>
        <a href="https://github.com/Gnayoah/GitHub-User-Info-Page" target="_blank">GitHub User Info Page</a><br>
        <a href="https://github.com/Gnayoah" target="_blank">© 2024 Gnayoah. All rights reserved.</a>
    </footer>
</body>
</html>
