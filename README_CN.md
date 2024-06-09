# GitHub 用户信息页面

这是一个使用 GitHub API 显示指定 GitHub 用户的头像、个人简介、个人资料链接以及按星级数排序的前 3 个存储库的网页。每个存储库显示其名称、描述、星级数、分支数和主要语言。

## 功能

- 显示指定 GitHub 用户的头像、用户名和个人简介。
- 提供访问 GitHub 个人资料的链接。
- 显示按星级数排序的前 6 个存储库。
- 显示每个存储库的名称、描述、星级数、分支数和主要语言。
- 深色模式。

## 演示
访问 [Gnayoah.com](https://gnayoah.com/)。

## 使用

1. 将此存储库克隆到本地计算机：

```bash
git clone https://github.com/Gnayoah/GitHub-User-Info-Page.git
```

2. 导航到项目目录：

```bash
cd github-user-info
```

3. 打开 `config.js` 文件并编辑顶部的 `githubUser` 变量以设置要显示的 GitHub 用户名：

```html

const githubUser = 'Gnayoah'; 

```

4. 在浏览器中打开 `index.html` 文件以查看结果。

## 截图

![image](https://github.com/Gnayoah/GitHub-User-Info-Page/assets/79068081/6e2bfaee-2e9d-47d5-930d-99018e7f8696)


## 许可证

本项目根据 [GNU Affero 通用公共许可证 v3.0 (AGPL-3.0)](LICENSE) 获得许可。有关详细信息，请参阅 [LICENSE](LICENSE) 文件。

© 2024 Haoyang。保留所有权利。

## 贡献

欢迎提出问题和拉取请求。如果您有任何建议或发现错误，请在 GitHub 上告诉我们。
