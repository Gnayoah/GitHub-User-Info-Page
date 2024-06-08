# GitHub 用户信息展示

这是一个使用 GitHub API 的网页应用程序，显示指定 GitHub 用户的头像、简介、个人资料链接以及按 star 数量排序的前 3 个热门仓库。每个仓库显示名称、简介、star 数量、fork 数量和主要编程语言。

## 功能

- 显示指定 GitHub 用户的头像、用户名和简介
- 提供访问 GitHub 个人资料的链接
- 按 star 数量排序并显示前 3 个热门仓库
- 显示每个仓库的名称、简介、star 数量、fork 数量和主要编程语言

## 使用方法

1. 克隆该仓库到本地：

    ```bash
    git clone https://github.com/yourusername/github-user-info.git
    ```

2. 进入项目目录：

    ```bash
    cd github-user-info
    ```

3. 打开 `index.html` 文件并编辑顶部的 `githubUser` 变量，设置为你想要展示的 GitHub 用户名：

    ```html
    <script>
        const githubUser = 'Gnayoah';  // 修改此处的 GitHub 用户名
    </script>
    ```

4. 打开 `index.html` 文件，使用浏览器查看效果。

## 文件结构

- `index.html` - 主 HTML 文件，包含应用的结构和逻辑
- `style.css` - 样式文件，包含应用的所有样式

## 许可证

该项目基于 [GNU Affero General Public License v3.0 (AGPL-3.0)](LICENSE) 许可证开源。具体条款请参见 [LICENSE](LICENSE) 文件。

版权所有 © 2020-2024 Haoyang。保留所有权利。

## 贡献

欢迎提交 issue 和 pull request。如果你有任何建议或发现了 bug，请在 GitHub 上告诉我们。

## 联系方式

如有任何问题或建议，请发送邮件至 [your-email@example.com](mailto:your-email@example.com)。
